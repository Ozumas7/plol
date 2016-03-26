<?php

namespace Kolter\PLoL\Tests\Resource;

use Kolter\PLoL\Resources\League;
use Kolter\PLoL\Tests\AbstractTestClass;
use Kolter\PLoL\OutputModes\ArrayOutput;

class LeagueTest extends AbstractTestClass
{
    public function testBySummoner()
    {
        $summonerId = '35066901';
        $this->resource = (new League($this->apikey()))->setCache(false)->setOutputMode(new ArrayOutput());
        $this->resource = $this->resource->bysummoner($summonerId);
        $this->checkAsserts();
    }
    public function testBySummonerEntry()
    {
        $summonerId = '35066901';
        $this->resource = (new League($this->apikey()))->setCache(false)->setOutputMode(new ArrayOutput());
        $this->resource = $this->resource->bysummonerentry($summonerId);
        $this->checkAsserts();
    }

    public function testByTeam()
    {
        /* So Ranked team is now untestable 'cause it will be removed so
      if that doesn't change I can't test a single test
      $teamId = 'TEAM-aa868580-f812-11e4-8ba8-c81f66db96d8';
      $this->resource = (new League($this->apikey))->setCache(false)->setOutputMode(new ArrayOutput());
      $this->resource = $this->resource->byteam($teamId);
      $this->checkAsserts();
        */
  }

  public function testByTeamEntry()
  {
      /* So Ranked team is now untestable 'cause it will be removed so
      if that doesn't change I can't test a single test
      $teamId = 'TEAM-aa868580-f812-11e4-8ba8-c81f66db96d8';
      $this->resource=(new Team($this->apikey))->setCache(false)->setOutputMode(new ArrayOutput());
      $this->resource = $this->resource->byteamentry($teamId);
      $this->checkAsserts();
      */
    }
    public function testChallenger()
    {
        $this->resource = (new League($this->apikey()))->setCache(false)->setOutputMode(new ArrayOutput());
        $this->resource = $this->resource->challenger();
        $this->checkAsserts();
    }
    public function testMaster()
    {
        $this->resource = (new League($this->apikey()))->setCache(false)->setOutputMode(new ArrayOutput());
        $this->resource = $this->resource->master();
        $this->checkAsserts();
    }
}
