<?php
/**
 * Created by PhpStorm.
 * User: Pablo
 * Date: 25/03/2016
 * Time: 22:22
 */

namespace Kolter\PLoL\Tests\Error;


use Kolter\PLoL\OutputModes\ArrayOutput;
use Kolter\PLoL\Resources\Champion;
use Kolter\PLoL\Tests\AbstractTestClass;

class ErrorHandlerTest extends AbstractTestClass
{


    public function testError404(){
        $this->resource = new Champion($this->apikey());
        $this->resource->setCache(false)->setOutputMode(new ArrayOutput());
        $this->resource=$this->resource->get('14342');
        $this->assertEquals($this->resource['code'],404);
    }

    public function testError403ApiKey(){
        //Fake Api Key but correct format so Validator class don't say is invalid
        $this->resource = new Champion('61r6dxa4-d6e5-4678-g4r9-505t05465b86');
        $this->resource->setCache(false)->setOutputMode(new ArrayOutput());
        $this->resource=$this->resource->get('12');
        $this->assertEquals($this->resource['code'],403);
    }

    public function testError403Syntax(){
        //Custom URL to bad syntax
        $customUrl = 'https://euw.api.pvp.net/api/lol/euw/v1.3/game/by-summoner/380965/rerecent/
        asd?api_key=61b6dac4-d6e5-4678-a4c9-505d05465b86';
        $this->resource = new Champion($this->apikey());
        $this->resource = $this->resource->setOutputMode(new ArrayOutput())->getCustomResource($customUrl);
        $this->assertEquals($this->resource['code'],403);
    }
}