<?php
/**
 * Created by PhpStorm.
 * User: Pablo
 * Date: 07/03/2016
 * Time: 22:36
 */

namespace Kolter\PLoL\OutputModes;


use Kolter\PLoL\Interfaces\OutputInterface;

class JsonOutput implements OutputInterface
{

    /**
     * @return mixed
     */
    public function load($resource)
    {
        return $resource;
    }
}