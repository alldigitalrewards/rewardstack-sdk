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
        $this->assertFalse($this->getLang() === 'es');
    }

    public function testLangGetterReturnsEsIsTrue()
    {
        $this->setLang('es');
        $this->assertTrue($this->getLang() === 'es');
    }

    public function testLangGetterReturnsEnIsFalse()
    {
        $this->setLang('es');
        $this->assertFalse($this->getLang() === 'en');
    }

    public function testLangGetterReturnsEnIsTrue()
    {
        $this->setLang('en');
        $this->assertTrue($this->getLang() === 'en');
    }

    public function testEmptySetterLangGetterReturnsEnIsTrue()
    {
        $this->setLang('');
        $this->assertTrue($this->getLang() === 'en');
    }

    public function testTrimmedEmptySetterLangGetterReturnsEnIsTrue()
    {
        $this->setLang('  ');
        $this->assertTrue($this->getLang() === 'en');
    }

    public function testNonAcceptedSetterLangGetterReturnsEnIsTrue()
    {
        $this->setLang('fr');
        $this->assertTrue($this->getLang() === 'en');
    }
}
