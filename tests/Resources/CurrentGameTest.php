<?php

namespace Kolter\PLoL\Tests\Resource;

use Kolter\PLoL\OutputModes\ArrayOutput;
use Kolter\PLoL\Tests\AbstractTestClass;

class CurrentGameTest extends AbstractTestClass
{
    public function testspectatorgameinfo()
    {
        //$currentGame = (new CurrentGame())->setCache(false)->setOutputMode(new ArrayOutput())->spectatorgameinfo('EUW', '44854781');
        //This test is only able to be done with a summoner is playing right the time you are doing the test
        //So in order to test this just get a summoner that is playing, get his ID and remove the slashes below
        //-----------------------------------------------------------------------------------------------------//
        //$this->assertArrayNotHasKey("errors",$currentGame);
        //$this->assertArrayNotHasKey("status",$currentGame);
    }
}
