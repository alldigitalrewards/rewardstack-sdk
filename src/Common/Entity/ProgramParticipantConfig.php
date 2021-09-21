<?php

namespace AllDigitalRewards\RewardStack\Common\Entity;

class ProgramParticipantConfig extends AbstractEntity
{
    protected $program_id;
    protected $participant_point_config;
    protected $participant_shipping_config;
    protected $authorize_point_balance_config;
    protected $capture_transaction_config;
    protected $placeholders;

    /**
     * @return mixed
     */
    public function getProgramId()
    {
        return $this->program_id;
    }

    /**
     * @param mixed $program_id
     */
    public function setProgramId($program_id)
    {
        $this->program_id = $program_id;
    }

    /**
     * @return mixed
     */
    public function getParticipantPointConfig()
    {
        return $this->participant_point_config;
    }

    /**
     * @param mixed $participant_point_config
     */
    public function setParticipantPointConfig($participant_point_config)
    {
        $this->participant_point_config = $participant_point_config;
    }

    /**
     * @return mixed
     */
    public function getParticipantShippingConfig()
    {
        return $this->participant_shipping_config;
    }

    /**
     * @param mixed $participant_shipping_config
     */
    public function setParticipantShippingConfig($participant_shipping_config)
    {
        $this->participant_shipping_config = $participant_shipping_config;
    }

    /**
     * @return mixed
     */
    public function getAuthorizePointBalanceConfig()
    {
        return $this->authorize_point_balance_config;
    }

    /**
     * @param mixed $authorize_point_balance_config
     */
    public function setAuthorizePointBalanceConfig($authorize_point_balance_config)
    {
        $this->authorize_point_balance_config = $authorize_point_balance_config;
    }

    /**
     * @return mixed
     */
    public function getCaptureTransactionConfig()
    {
        return $this->capture_transaction_config;
    }

    /**
     * @param mixed $capture_transaction_config
     */
    public function setCaptureTransactionConfig($capture_transaction_config)
    {
        $this->capture_transaction_config = $capture_transaction_config;
    }

    /**
     * @return mixed
     */
    public function getPlaceholders()
    {
        return $this->placeholders;
    }

    /**
     * @param mixed $placeholders
     */
    public function setPlaceholders($placeholders)
    {
        $this->placeholders = $placeholders;
    }
}
