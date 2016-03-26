<?php

namespace Kolter\PLoL\Tests\Resource;

use Kolter\PLoL\Resources\Staticdata;
use Kolter\PLoL\Tests\AbstractTestClass;
use Kolter\PLoL\OutputModes\ArrayOutput;

class StaticdataTest extends AbstractTestClass
{
    public function championTest()
    {
        $this->resource = (new Staticdata($this->apikey()))->setCache(false)->setOutputMode(new ArrayOutput())->champion('43');
        $this->checkAsserts();
        $this->resource =((new Staticdata($this->apikey()))->setCache(false)->setOutputMode(new ArrayOutput())->
        champion('all', array('locale' => 'es_ES', 'champData' => 'lore,partype')));
        $this->checkAsserts();
    }

    public function testItem()
    {
        $this->resource = (new Staticdata($this->apikey()))->setCache(false)->setOutputMode(new ArrayOutput())->item('1410');
        $this->checkAsserts();
        $this->resource = (new Staticdata($this->apikey()))->setCache(false)->setOutputMode(new ArrayOutput())->
        item('all', array('locale' => 'es_ES', 'itemListData' => 'colloq,consumed'));
        $this->checkAsserts();
    }

    public function testLanguagestrings()
    {
        $this->resource = (new Staticdata($this->apikey()))->setCache(false)->setOutputMode(new ArrayOutput())->
            languagestrings(array('locale' => 'es_ES'));
        $this->checkAsserts();
    }

    public function testLanguages()
    {
        $this->resource =(new Staticdata($this->apikey()))->setCache(false)->setOutputMode(new ArrayOutput())->languages();
        $this->checkAsserts();
    }

    public function testMap()
    {
        $this->resource = (new Staticdata($this->apikey()))->setCache(false)->setOutputMode(new ArrayOutput())->map(array('locale' => 'es_ES'));
        $this->checkAsserts();
    }

    public function testMastery()
    {
        $this->resource  = (new Staticdata($this->apikey()))->setCache(false)->setOutputMode(new ArrayOutput())->mastery(6121);
        $this->checkAsserts();
        $this->resource  = (new Staticdata($this->apikey()))->setCache(false)->setOutputMode(new ArrayOutput())->mastery('all', array('masteryListData' => 'image,masteryTree,prereq', 'locale' => 'es_ES'));
        $this->checkAsserts();
    }

    public function testRealm()
    {
        $this->resource  = (new Staticdata($this->apikey()))->setCache(false)->setOutputMode(new ArrayOutput())->realm();
        $this->checkAsserts();
    }

    public function testRune()
    {
        $this->resource  = (new Staticdata($this->apikey()))->setCache(false)->setOutputMode(new ArrayOutput())->rune('5370');
        $this->checkAsserts();
        $this->resource = (new Staticdata($this->apikey()))->setCache(false)->setOutputMode(new ArrayOutput())->rune('all', array('runeListData' => 'basic,into,maps', 'locale' => 'es_ES'));
        $this->checkAsserts();
    }

    public function testSummonerspell()
    {
        $this->resource = (new Staticdata($this->apikey()))->setCache(false)->setOutputMode(new ArrayOutput())->summonerspell(1);
        $this->checkAsserts();
        $this->resource=$staticData2 = (new Staticdata($this->apikey()))->setCache(false)->setOutputMode(new ArrayOutput())->rune('all', array('spellData' => 'coldown,coldownBurn,cost', 'locale' => 'es_ES'));
        $this->checkAsserts();
    }

    public function testVersions()
    {
        $this->resource = (new Staticdata($this->apikey()))->setCache(false)->setOutputMode(new ArrayOutput())->versions();
        $this->checkAsserts();
    }
}
