<?php

namespace AllDigitalRewards\RewardStack\Common\Entity;

use stdClass;

class RedemptionApiCampaign extends AbstractEntity
{
    protected $id;
    protected $program_id;
    protected $unique_id;
    protected $domain;
    protected $sub_domain;
    protected $title;
    protected $value;
    protected $pin_count;
    protected $pin_length;
    protected $expiration;
    protected $min_reward_value;
    protected $max_reward_value;
    protected $cards;
    protected $active;
    protected $isExpired;
    protected $unused;
    protected $used;
    protected $total;
    protected $url;
    protected $show;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

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
    public function setProgramId($program_id): void
    {
        $this->program_id = $program_id;
    }

    /**
     * @return mixed
     */
    public function getUniqueId()
    {
        return $this->unique_id;
    }

    /**
     * @param mixed $unique_id
     */
    public function setUniqueId($unique_id): void
    {
        $this->unique_id = $unique_id;
    }

    /**
     * @return mixed
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @param mixed $domain
     */
    public function setDomain($domain): void
    {
        $this->domain = $domain;
    }

    /**
     * @return mixed
     */
    public function getSubDomain()
    {
        return $this->sub_domain;
    }

    /**
     * @param mixed $sub_domain
     */
    public function setSubDomain($sub_domain): void
    {
        $this->sub_domain = $sub_domain;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value): void
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getPinCount()
    {
        return $this->pin_count;
    }

    /**
     * @param mixed $pin_count
     */
    public function setPinCount($pin_count): void
    {
        $this->pin_count = $pin_count;
    }

    /**
     * @return mixed
     */
    public function getPinLength()
    {
        return $this->pin_length;
    }

    /**
     * @param mixed $pin_length
     */
    public function setPinLength($pin_length): void
    {
        $this->pin_length = $pin_length;
    }

    /**
     * @return mixed
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * @param mixed $expiration
     */
    public function setExpiration($expiration): void
    {
        $this->expiration = $expiration;
    }

    /**
     * @return mixed
     */
    public function getMinRewardValue()
    {
        return $this->min_reward_value;
    }

    /**
     * @param mixed $min_reward_value
     */
    public function setMinRewardValue($min_reward_value): void
    {
        $this->min_reward_value = $min_reward_value;
    }

    /**
     * @return mixed
     */
    public function getMaxRewardValue()
    {
        return $this->max_reward_value;
    }

    /**
     * @param mixed $max_reward_value
     */
    public function setMaxRewardValue($max_reward_value): void
    {
        $this->max_reward_value = $max_reward_value;
    }

    /**
     * @return mixed
     */
    public function getCards()
    {
        return $this->cards;
    }

    /**
     * @param mixed $cards
     */
    public function setCards($cards): void
    {
        $this->cards = $cards;
    }

    /**
     * @return mixed
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param mixed $active
     */
    public function setActive($active): void
    {
        $this->active = $active;
    }

    /**
     * @return mixed
     */
    public function getIsExpired()
    {
        return $this->isExpired;
    }

    /**
     * @param mixed $isExpired
     */
    public function setIsExpired($isExpired): void
    {
        $this->isExpired = $isExpired;
    }

    /**
     * @return mixed
     */
    public function getUnused()
    {
        return $this->unused;
    }

    /**
     * @param mixed $unused
     */
    public function setUnused($unused): void
    {
        $this->unused = $unused;
    }

    /**
     * @return mixed
     */
    public function getUsed()
    {
        return $this->used;
    }

    /**
     * @param mixed $used
     */
    public function setUsed($used): void
    {
        $this->used = $used;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total): void
    {
        $this->total = $total;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url): void
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getShow()
    {
        return $this->show;
    }

    /**
     * @param mixed $show
     */
    public function setShow($show): void
    {
        $this->show = $show;
    }
}
