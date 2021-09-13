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
        var_dump($this->getLang());
        $this->assertFalse($this->getLang() === 'es');
    }

    public function testLangGetterReturnsEsIsTrue()
    {
        $this->setLang('es');
        $this->assertTrue($this->getLang() === 'es_US');
    }

    public function testLangGetterReturnsEnIsFalse()
    {
        $this->setLang('es');
        $this->assertFalse($this->getLang() === 'en');
    }

    public function testLangGetterReturnsEnIsTrue()
    {
        $this->setLang('en');
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
        $this->setLang('fr');
        $this->assertTrue($this->getLang() === 'fr_CA');
    }
}
