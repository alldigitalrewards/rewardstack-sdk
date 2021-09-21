<?php

namespace AllDigitalRewards\RewardStack\Common\Entity;

class ProgramParticipantAuthId extends AbstractEntity
{
    protected $authorization_id;

    /**
     * @return mixed
     */
    public function getAuthorizationId()
    {
        return $this->authorization_id;
    }

    /**
     * @param mixed $authorization_id
     */
    public function setAuthorizationId($authorization_id)
    {
        $this->authorization_id = $authorization_id;
    }
}
