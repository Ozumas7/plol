<?php

namespace Kolter\PLoL\Resources;

use Kolter\PLoL\ResourceHandler;

/**
 * Class Summoner
 * @package Kolter\PLoL\Resources
 */
class Summoner extends ResourceHandler
{
    /**
     * @var
     */
    protected $uriChampion;
    /**
     * @var string
     */
    protected $resourceName = 'summoner';
    /**
     * @var string
     */
    protected $apimode = 'api_lol';

    /**
     * @param $id
     * @return mixed
     */
    public function byname($id)
    {
        $this->args['id'] = rawurlencode($id);
        $this->args['type'] = __Function__;
        $this->args['type'] = __Function__;

        return $this->getResource();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function byid($id)
    {
        $this->args['id'] = $id;
        $this->args['type'] = __Function__;
        $this->args['type'] = __Function__;

        return $this->getResource();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function masteries($id)
    {
        $this->args['id'] = $id;
        $this->args['type'] = __Function__;

        return $this->getResource();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function runes($id)
    {
        $this->args['id'] = $id;
        $this->args['type'] = __Function__;

        return $this->getResource();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function namebyid($id)
    {
        $this->args['id'] = $id;
        $this->args['type'] = __Function__;

        return $this->getResource();
    }
}
