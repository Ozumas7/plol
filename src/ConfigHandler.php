<?php

namespace Kolter\PLoL;

/**
 * Class ConfigHandler
 * @package Kolter\PLoL
 */
class ConfigHandler
{
    /**
     * ConfigHandler constructor.
     */
    public function __construct()
    {
        $this->config = json_decode(file_get_contents(Utility::getMainDirPath()."config/config.json", true));
        $this->uris = json_decode(file_get_contents(Utility::getMainDirPath()."config/uris.json", true));
    }

    /**
     * @return mixed
     */
    public function getCacheMode()
    {
        return $this->config->cache;
    }
    /**
     * @return bool|mixed
     */
    public function getUriFile()
    {
        return $this->uris;
    }
    /**
     * @return mixed
     */
    public function getCacheFileTimeExpired()
    {
        return $this->config->cacheFileTimeExpired;
    }

    /**
     * @return mixed
     */
    public function getRegion()
    {
        return $this->config->region;
    }
    /**
     * @return mixed
     */
    public function getRegions()
    {
        return $this->config->regions;
    }
}
