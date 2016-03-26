<?php

namespace Kolter\PLoL\Tests\Cache;

use Kolter\PLoL\OutputModes\ArrayOutput;
use Kolter\PLoL\Resources\Champion;
use Kolter\PLoL\Tests\AbstractTestClass;

class InCacheTest extends AbstractTestClass
{
    public function testSetCache()
    {
        $championId = '134';
        $this->resource = (new Champion($this->apikey()))->setCache(true)->setOutputMode(new ArrayOutput());
        $this->resource->cache->clearCache();
        $this->resource->get($championId);
        $this->resource = $this->resource->get($championId);
        $this->checkAsserts();
    }
    public function testGetCache()
    {
        $championId = '134';
        $this->resource = (new Champion($this->apikey()))->setCache(true)->setOutputMode(new ArrayOutput())->get($championId);
        $this->checkAsserts();
    }
    public function testNoCache()
    {
        $championId = '134';
        $this->resource = (new Champion($this->apikey()))->setCache(false)->setOutputMode(new ArrayOutput())->get($championId);
        $this->checkAsserts();
    }
}
