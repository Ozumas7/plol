<?php

namespace Kolter\PLoL\Tests\Resource;

use Kolter\PLoL\Resources\Summoner;
use Kolter\PLoL\Tests\AbstractTestClass;
use Kolter\PLoL\OutputModes\ArrayOutput;

class SummonerTest extends AbstractTestClass
{
    public function testByName()
    {
        $this->resource = (new Summoner($this->apikey()))->setCache(false)->setOutputMode(new ArrayOutput())->byname('ozumas');
        $this->checkAsserts();
    }

    public function testById()
    {
        $this->resource =  (new Summoner($this->apikey()))->setCache(false)->setOutputMode(new ArrayOutput())->byid(35066901);
        $this->checkAsserts();
    }
    public function testMasteries()
    {
        $this->resource = (new Summoner($this->apikey()))->setCache(false)->setOutputMode(new ArrayOutput())->masteries(35066901);
        $this->checkAsserts();
    }
    public function testRunes()
    {
        $this->resource = (new Summoner($this->apikey()))->setCache(false)->setOutputMode(new ArrayOutput())->runes(35066901);
        $this->checkAsserts();
    }
    public function testNameById()
    {
        $this->resource = (new Summoner($this->apikey()))->setCache(false)->setOutputMode(new ArrayOutput())->namebyid(35066901);
        $this->checkAsserts();
    }
}
