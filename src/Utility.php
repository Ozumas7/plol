<?php

namespace Kolter\PLoL;
use Kolter\PLoL\Exceptions\RegionException;

/**
 * Class Utility
 * @package Kolter\PLoL
 */
class Utility
{
    //build the uri based on params in config/uris.json each attribute is encapsulate in brackets

    /**
     * @param $cadena
     * @param $array
     * @return mixed
     */
    public static function uriConstructor($cadena, $array)
    {
        $i = 0;
        while (preg_match_all("/\{([a-zA-Z]{1,100})\}/",
            $cadena, $salida) and $i < 10) {
            foreach ($salida[1] as $value) {
                if (array_key_exists($value, $array)) {
                    $cadena = str_replace('{'.$value.'}', $array[$value], $cadena);
                }
            }
            ++$i;
        }

        return $cadena;
    }

    /**
     * @return mixed
     */
    public static function getMainDirPath()
    {
        return str_replace('src', '', __DIR__);
    }
    /**
     * @param $json
     * @return bool
     */
    public static function isJson($json)
    {
        json_decode($json);
        return (json_last_error() == 0) ? true : false;
    }

    /**
     * @param $region
     * @return mixed
     * @throws RegionException
     */
    public static function regionToPlatForm($region){
        $regions = (new ConfigHandler())->getRegions();
        if (property_exists($regions,$region)){
            return $regions->$region->plataform;
        }
        throw new RegionException($region. ' not found');
    }

    /**
     * @return mixed
     */
    public static function getPlataforms(){
        return (new ConfigHandler())->getRegions();
    }

    /**
     * @return array
     */
    public static function getRegions(){
        return array_keys(get_object_vars((new ConfigHandler())->getRegions()));
    }
}
