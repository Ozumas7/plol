<?php

namespace Kolter\PLoL;

use Stash\Driver\FileSystem;
use Stash\Pool;

/**
 * Class CacheHandler
 * @package Kolter\PLoL
 */
class CacheHandler
{
    /**
     * @var
     */
    protected $fileName;
    /**
     * @var
     */
    protected $folder;
    /**
     * @var
     */
    protected $cacheFile;
    /**
     * @var
     */
    protected $cacheFileTimeExpired;
    /**
     * @var
     */
    protected $expireTime;

    /**
     * CacheHandler constructor.
     * @param $name
     * @param $cacheFileTimeExpired
     */
    public function __construct()
    {
        $this->driver = new FileSystem();
        $this->driver->getDefaultOptions();
        $this->pool = new Pool($this->driver);
    }
    /**
     * @param $name
     */
    public function setfileName($name)
    {
        $this->fileName = $name;
    }
    /**
     * @return mixed
     */
    public function getCacheFile()
    {
        return $this->cacheFile;
    }
    /**
     * @return bool
     */
    public function isInCache()
    {
        $item = $this->pool->getItem($this->fileName);
        if ($item->get()==null or $item->isMiss()) {
            return false;
        }
        $this->cacheFile = $item->get();
        $this->expireTime= $item->getExpiration();
        return true;
    }
    /**
     * @return bool
     */
    public function clearItemCache()
    {
        $item =$this->pool->getItem($this->fileName);
        if ($item->get()==null or $item->isMiss()) {
            return false;
        }
        $item->clear();
        return true;
    }
    /**
     * @return bool
     */
    public function clearCache()
    {
        $this->pool->clear();
        return true;
    }
    /**
     * @param $time
     * @throws Exceptions\CacheTimeFileException
     */
    public function setTimeExpire($time)
    {
        $this->cacheFileTimeExpired=$time;
    }
    /**
     * @param $resource
     * @return bool
     */
    public function setInCache($resource)
    {
        $item = $this->pool->getItem($this->fileName);
        $item->set($resource);
        $item->expiresAfter($this->cacheFileTimeExpired*60);
        $this->expireTime = $item->getExpiration();
        return $item->save();
    }

    /**
     * @return mixed
     */
    public function getCacheExpireTime(){
        return $this->expireTime;
    }
}
