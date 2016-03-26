<?php

namespace Kolter\PLoL\Tests\Resource;

use Kolter\PLoL\Resources\Team;
use Kolter\PLoL\Tests\AbstractTestClass;
use Kolter\PLoL\OutputModes\ArrayOutput;

class TeamTest extends AbstractTestClass
{
    public function testBySummoner()
    {
        $this->resource =(new Team($this->apikey()))->setCache(false)->setOutputMode(new ArrayOutput())->bysummoner(35066901);
        $this->checkAsserts();
    }

    public function testById()
    {
        $this->resource =  (new Team($this->apikey()))->setCache(false)->setOutputMode(new ArrayOutput())->byid('TEAM-aa868580-f812-11e4-8ba8-c81f66db96d8');
        $this->checkAsserts();
    }
}
