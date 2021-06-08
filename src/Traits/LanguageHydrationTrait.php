<?php

namespace AllDigitalRewards\RewardStack\Traits;

trait LanguageHydrationTrait
{
    private $lang = 'en';

    /**
     * @return string
     */
    public function getLang(): string
    {
        switch ($this->lang) {
            case strpos($this->lang, 'es') !== false:
                return 'es';
            default:
                return 'en';
        }
    }

    /**
     * @param mixed $lang
     */
    public function setLang($lang): void
    {
        if (empty($lang) === true) {
            return;
        }
        $this->lang = $lang;
    }
}
