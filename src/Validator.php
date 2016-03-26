<?php
/**
 * Created by PhpStorm.
 * User: Pablo
 * Date: 06/01/2016
 * Time: 17:48.
 */
namespace Kolter\PLoL;

use Kolter\PLoL\Exceptions\ApiKeyException;
use Kolter\PLoL\Exceptions\CacheException;
use Kolter\PLoL\Exceptions\CacheTimeFileException;
use Kolter\PLoL\Exceptions\RegionException;

/**
 * Class Validator
 * @package Kolter\PLoL
 */
class Validator
{
    /**
     * @param $apikey
     * @return mixed
     * @throws ApiKeyException
     */
    public static function apiKeyValidator($apikey)
    {
        $regex = '/([a-z0-9]{8})-([a-z0-9]{4})-([a-z0-9]{4})-([a-z0-9]{4})-([a-z0-9]{12})/';
        if (preg_match($regex, $apikey) == 1) {
            return $apikey;
        }
        throw new ApiKeyException('APIKEY is not defined or is not correct');
    }


    /**
     * @param $region
     * @return mixed
     * @throws RegionException
     */
    public static function regionValidator($region)
    {
        $regions = Utility::getRegions();
        if (in_array(strtolower($region), $regions)) {
            return $region;
        }
        throw new RegionException("Region '$region' is not supported");
    }

    /**
     * @param $time
     * @return mixed
     * @throws CacheTimeFileException
     */
    public static function cacheFileTimeExpiredValidator($time)
    {
        if (is_int($time) && $time>=0) {
            return $time;
        }
        throw new CacheTimeFileException("number of minutes invalid $time");
    }

    public static function cacheValidator($cache)
    {
        if (is_bool($cache)) {
            return $cache;
        }
        throw new CacheException("Cache mode has to be boolean $cache");
    }
}
