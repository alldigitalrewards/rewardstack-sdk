<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Traits\LanguageHydrationTrait;
use PHPUnit\Framework\TestCase;

class LanguageTest extends TestCase
{
    use LanguageHydrationTrait;

    public function testLangGetterReturnsEsIsFalse()
    {
        $this->setLang(null);
        $this->assertFalse($this->getLang() === 'es_ES');
    }

    public function testLangGetterReturnsEsIsTrue()
    {
        $this->setLang('es_US');
        $this->assertTrue($this->getLang() === 'es_US');
    }

    public function testLangGetterReturnsEnIsFalse()
    {
        $this->setLang('es_US');
        $this->assertFalse($this->getLang() === 'en_US');
    }

    public function testLangGetterReturnsEnIsTrue()
    {
        $this->setLang('en_US');
        $this->assertTrue($this->getLang() === 'en_US');
    }

    public function testEmptySetterLangGetterReturnsEnIsTrue()
    {
        $this->setLang('');
        $this->assertTrue($this->getLang() === 'en_US');
    }

    public function testTrimmedEmptySetterLangGetterReturnsEnIsTrue()
    {
        $this->setLang('  ');
        $this->assertTrue($this->getLang() === 'en_US');
    }

    public function testNonAcceptedSetterLangGetterReturnsEnIsTrue()
    {
        $this->setLang('fr_CA');
        $this->assertTrue($this->getLang() === 'fr_CA');
    }
}
