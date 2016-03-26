<?php
/**
 * Created by PhpStorm.
 * User: Pablo
 * Date: 26/03/2016
 * Time: 3:40
 */

namespace Kolter\PLoL\Tests\Resource;


use Kolter\PLoL\Resources\ChampionMastery;
use Kolter\PLoL\Tests\AbstractTestClass;

class ChampionMasteryTest extends AbstractTestClass
{

    public function testChampion(){
        $this->resource(new ChampionMastery($this->apikey()));
        $this->resource = $this->resource->champion(35066901,64);
        $this->checkAsserts();
    }
    public function testChampions(){
        $this->resource(new ChampionMastery($this->apikey()));
        $this->resource = $this->resource->champions(35066901);
        $this->checkAsserts();
    }

    public function testScore(){
        $this->resource(new ChampionMastery($this->apikey()));
        $this->resource = $this->resource->score(35066901);
        $this->assertInternalType("int", $this->resource);
    }

    public function testTopChampions(){
        $this->resource(new ChampionMastery($this->apikey()));
        $this->resource = $this->resource->topchampions(35066901);
        $this->checkAsserts();
    }
}