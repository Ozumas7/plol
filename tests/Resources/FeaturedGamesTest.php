<?php

namespace Kolter\PLoL\Tests\Resource;

use Kolter\PLoL\Resources\FeaturedGames;
use Kolter\PLoL\Tests\AbstractTestClass;
use Kolter\PLoL\OutputModes\ArrayOutput;

class FeaturedGamesTest extends AbstractTestClass
{
    public function testFeaturedGames()
    {
        $this->resource  = (new FeaturedGames($this->apikey()))->setCache(false)->setOutputMode(new ArrayOutput())->featured();
        $this->checkAsserts();
    }
}
