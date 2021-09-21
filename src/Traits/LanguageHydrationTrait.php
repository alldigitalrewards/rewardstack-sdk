<?php

namespace AllDigitalRewards\RewardStack\Traits;

use AllDigitalRewards\LanguageMapper\LanguageMapper;

trait LanguageHydrationTrait
{
    private $lang = LanguageMapper::DEFAULT_LANGUAGE;

    /**
     * @return string
     */
    public function getLang(): string
    {
        $languageMapper = new LanguageMapper($this->lang);
        return $languageMapper->getLanguage();
    }

    /**
     * @param mixed $lang
     */
    public function setLang($lang)
    {
        if (empty($lang) === true) {
            $this->lang = LanguageMapper::DEFAULT_LANGUAGE;
            return;
        }
        $this->lang = $lang;
    }
}
