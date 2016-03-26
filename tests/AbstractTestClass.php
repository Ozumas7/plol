<?php
/**
 * Created by PhpStorm.
 * User: Pablo
 * Date: 27/02/2016
 * Time: 17:59
 */

namespace Kolter\PLoL\Tests;



use Kolter\PLoL\OutputModes\ArrayOutput;
use Kolter\PLoL\ResourceHandler;

class AbstractTestClass  extends \PHPUnit_Framework_TestCase
{
    protected $resource;

    protected function apikey(){
        return getenv('PLOLAPIKEY');
    }


    protected function resource(ResourceHandler $resource)
    {
       $this->resource = $resource->setOutputMode(new ArrayOutput())->setCache(false);
    }
    protected function checkAsserts(){
        $this->assertArrayNotHasKey('code', $this->resource);
    }
}