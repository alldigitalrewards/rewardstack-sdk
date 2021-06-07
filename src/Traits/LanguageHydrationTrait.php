<?php

namespace AllDigitalRewards\RewardStack\Traits;

trait LanguageHydrationTrait
{
    private $lang;

    /**
     * @return string
     */
    public function getLang(): string
    {
        $lang = empty($this->lang) === true ? 'en' : $this->lang;
        switch ($lang) {
            case strpos($lang, 'es') !== false:
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
        $this->lang = $lang;
    }
}
