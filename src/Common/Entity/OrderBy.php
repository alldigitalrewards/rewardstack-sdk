<?php

namespace AllDigitalRewards\RewardStack\Common\Entity;

class OrderBy extends AbstractEntity
{
    protected $field;
    protected $direction = 'DESC';

    /**
     * @return ?string
     */
    public function getField(): ?string
    {
        return $this->field;
    }

    /**
     * @param string $field
     */
    public function setField(string $field)
    {
        $this->field = $field;
    }

    /**
     * @return string
     */
    public function getDirection(): string
    {
        return strtolower($this->direction) !== 'asc' ? 'DESC' : 'ASC';
    }

    /**
     * @param string $direction
     */
    public function setDirection(string $direction)
    {
        $this->direction = $direction;
    }
}
