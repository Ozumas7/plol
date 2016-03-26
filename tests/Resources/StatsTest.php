<?php

namespace Kolter\PLoL\Tests\Resource;

use Kolter\PLoL\Resources\Stats;
use Kolter\PLoL\Tests\AbstractTestClass;
use Kolter\PLoL\OutputModes\ArrayOutput;

class StatsTest extends AbstractTestClass
{
    public function testRanked()
    {
        $this->resource = (new Stats($this->apikey()))->setCache(false)->setOutputMode(new ArrayOutput())->ranked(35066901);
        $this->checkAsserts();
    }
    public function testSummary()
    {
        $this->resource = (new Stats($this->apikey()))->setCache(false)->setOutputMode(new ArrayOutput())->summary(35066901);
        $this->checkAsserts();
    }
}
