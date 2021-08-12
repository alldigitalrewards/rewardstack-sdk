<?php

namespace AllDigitalRewards\RewardStack\Common\Entity;

class AbstractEntity implements \JsonSerializable
{
    public function __construct($data = null)
    {
        if (!is_null($data)) {
            $this->hydrate($data);
        }
    }

    public function hydrate($data): AbstractEntity
    {
        foreach ($data as $key => $value) {
            if ($value === null) {
                continue;
            }
            if ($this->isValidProperty($key)) {
                $setterName = $this->getSetter($key);
                $this->$setterName($value);
            }
        }

        return $this;
    }

    private function isValidProperty($propertyName)
    {
        if (method_exists($this, $this->getSetter($propertyName))) {
            return true;
        }

        return false;
    }

    private function getSetter($propertyName)
    {
        $setterName = str_ireplace("_", " ", $propertyName);
        $setterName = ucwords($setterName);
        $setterName = str_ireplace(" ", "", $setterName);

        return "set" . $setterName;
    }

    public function jsonSerialize()
    {
        return $this->toArray();
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $methods = call_user_func('get_object_vars', $this);
        foreach (array_keys($methods) as $methodKey) {
            if (strpos($methodKey, '__') !== false) {
                unset($methods[$methodKey]);
            }
        }

        return $methods;
    }
}
