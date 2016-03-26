<?php
/**
 * Created by PhpStorm.
 * User: Pablo
 * Date: 07/03/2016
 * Time: 22:38
 */

namespace Kolter\PLoL\OutputModes;


use Kolter\PLoL\Interfaces\OutputInterface;

class ObjectOutput implements OutputInterface
{

    public function load($resource){
        return json_decode($resource);
    }
}