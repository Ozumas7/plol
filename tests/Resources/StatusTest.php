<?php

namespace Kolter\PLoL\Tests\Resource;

use Kolter\PLoL\Resources\Status;
use Kolter\PLoL\Tests\AbstractTestClass;
use Kolter\PLoL\OutputModes\ArrayOutput;

class StatusTest extends AbstractTestClass
{
    public function testByRegion()
    {
        $this->resource = (new Status($this->apikey()))->setCache(false)->setOutputMode(new ArrayOutput())->byregion('euw');
        $this->checkAsserts();
        $this->resource = (new Status($this->apikey()))->setCache(false)->setOutputMode(new ArrayOutput())->all();
        $this->checkAsserts();
    }
}
