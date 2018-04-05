<?php

namespace AllDigitalRewards\RewardStack\Common;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;

abstract class AbstractCollectionApiResponse extends AbstractApiResponse implements \IteratorAggregate, \ArrayAccess, \Countable
{
    /**
     * Holds the data for the collection
     *
     * @var array
     */
    protected $data = [];

    public function hydrate($data): AbstractEntity
    {
        if (empty($data)) {
            return $this;
        }

        $this->convertData(
            $this->getEntityClass(),
            $data
        );

        return $this;
    }

    /**
     * @param string $object_class
     * @param array $raw_data
     */
    protected function convertData(string $object_class, array $raw_data)
    {
        $this->data = array_map(
            function ($c) use ($object_class) {
                return new $object_class($c);
            },
            $raw_data
        );
    }

    /**
     * @return string
     */
    abstract protected function getEntityClass(): string;

    /**
     * @param $position
     * @return AbstractEntity|null
     */
    public function getItem($position)
    {
        if ($this->offsetExists($position)) {
            return $this->offsetGet($position);
        }

        return null;
    }

    /**
     * IteratorAggregate
     *
     * {@link http://us2.php.net/manual/en/class.iteratoraggregate.php}
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->data);
    }

    /**
     * ArrayAccess
     *
     * {@link http://us2.php.net/manual/en/class.arrayaccess.php}
     */
    public function offsetExists($offset)
    {
        return isset($this->data[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->data[$offset];
    }

    public function offsetSet($offset, $value)
    {
        trigger_error("You can't set collection data");
    }

    public function offsetUnset($offset)
    {
        trigger_error("You can't unset collection data");
    }

    /**
     * Countable
     *
     * {@link http://us2.php.net/manual/en/class.countable.php}
     */
    public function count()
    {
        return count($this->data);
    }
}
