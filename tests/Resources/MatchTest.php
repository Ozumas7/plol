<?php

namespace Kolter\PLoL\Tests\Resource;

use Kolter\PLoL\Resources\Match;
use Kolter\PLoL\Tests\AbstractTestClass;
use Kolter\PLoL\OutputModes\ArrayOutput;

class MatchTest extends AbstractTestClass
{
    public function testById()
    {
        $matchId = '2580431017';
        $this->resource = (new Match($this->apikey()))->setCache(false)->setOutputMode(new ArrayOutput())->byid($matchId);
        $this->checkAsserts();
    }
}
