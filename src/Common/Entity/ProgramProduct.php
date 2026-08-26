<?php

namespace AllDigitalRewards\RewardStack\Common\Entity;

class ProgramProduct extends AbstractEntity
{
    protected ?string $sku = null;

    protected ?string $name = null;

    protected ?int $active = null;

    protected ?string $vendor = null;

    public function getSku(): ?string
    {
        return $this->sku;
    }

    public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getActive(): ?int
    {
        return $this->active;
    }

    public function setActive(?int $active): void
    {
        $this->active = $active;
    }

    public function getVendor(): ?string
    {
        return $this->vendor;
    }

    public function setVendor(?string $vendor): void
    {
        $this->vendor = $vendor;
    }
}
