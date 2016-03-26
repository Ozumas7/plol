<?php
/**
 * Created by PhpStorm.
 * User: Pablo
 * Date: 07/03/2016
 * Time: 22:39
 */

namespace Kolter\PLoL\OutputModes;


use Kolter\PLoL\Interfaces\OutputInterface;
use Symfony\Component\Yaml\Dumper;

class YamlOutput implements OutputInterface
{

    public function load($resource){
        $dumper = new Dumper();
        return $dumper->dump(json_decode($resource, true), 2);
    }
}