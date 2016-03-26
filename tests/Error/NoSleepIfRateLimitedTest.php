<?php
/**
 * Created by PhpStorm.
 * User: Pablo
 * Date: 25/03/2016
 * Time: 22:22
 */

namespace Kolter\PLoL\Tests\Error;


use Kolter\PLoL\ErrorCodeHandlers\NoSleepIfRateLimited;
use Kolter\PLoL\OutputModes\ArrayOutput;
use Kolter\PLoL\Resources\Champion;
use Kolter\PLoL\Tests\AbstractTestClass;

class NoSleepIfRateLimitedTest extends AbstractTestClass
{

    protected $resource2;

    public function testError429(){
        /** So this test is hard to pull well in travis so uncommented to
         * test the error 429 using the NoSleepIfRateLimited Error Code handler
         **/
        /*
        $this->resource2 = new Champion($this->apikey());
        $this->resource2->setCache(false)->setOutputMode(new ArrayOutput())->
        setErrorCodeHandler(new NoSleepIfRateLimited());
        for ($i=0;$i<12;$i++){
        $this->resource=$this->resource2->get('12');
        }
        var_dump($this->resource);
        $this->assertArrayHasKey('code',$this->resource);
        $this->assertEquals($this->resource['code'],429);
         */
    }
}