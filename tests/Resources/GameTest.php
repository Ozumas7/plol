<?php

namespace Kolter\PLoL\Tests\Resource;

use Kolter\PLoL\Resources\Game;
use Kolter\PLoL\Tests\AbstractTestClass;
use Kolter\PLoL\OutputModes\ArrayOutput;

class GameTest extends AbstractTestClass
{
    public function testGet()
    {
        $summonerId = '35066901';
        $this->resource = (new Game($this->apikey()))->setCache(false)->setOutputMode(new ArrayOutput())->get($summonerId);
        $this->checkAsserts();
    }
}
