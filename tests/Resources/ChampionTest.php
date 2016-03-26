<?php

namespace Kolter\PLoL\Tests\Resource;

use Kolter\PLoL\OutputModes\ArrayOutput;
use Kolter\PLoL\Resources\Champion;
use Kolter\PLoL\Tests\AbstractTestClass;

class ChampionTest extends AbstractTestClass
{
    public function testGet()
    {
        $championId = '134';
        $this->resource = (new Champion($this->apikey()))->setCache(false)->setOutputMode(new ArrayOutput())->get($championId);
        $this->checkAsserts();
    }
    public function testAll()
    {
        $this->resource = (new Champion($this->apikey()))->setCache(false)->setOutputMode(new ArrayOutput())->get();
        $this->checkAsserts();
    }
}
