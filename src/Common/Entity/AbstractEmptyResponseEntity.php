<?php

namespace AllDigitalRewards\RewardStack\Common\Entity;

class AbstractEmptyResponseEntity extends AbstractEntity
{
    protected $success = false;

    /**
     * @return bool
     */
    public function isSuccess(): bool
    {
        return $this->success;
    }

    /**
     * @param bool $success
     */
    public function setSuccess(bool $success)
    {
        $this->success = $success;
    }

    //for requests with empty bodies, set success to true
    public function hydrate($data): AbstractEntity
    {
        $this->setSuccess(true);

        return $this;
    }
}
