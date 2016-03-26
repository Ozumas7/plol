<?php

namespace Kolter\PLoL\Resources;

use Kolter\PLoL\ResourceHandler;

/**
 * Class Team
 * @package Kolter\PLoL\Resources
 */
class Team extends ResourceHandler
{
    /**
     * @var
     */
    protected $uriChampion;
    /**
     * @var string
     */
    protected $resourceName = 'team';
    /**
     * @var string
     */
    protected $apimode = 'api_lol';

    /**
     * @param $id
     * @return mixed
     */
    public function bysummoner($id)
    {
        $this->args['id'] = $id;
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

        return $this->getResource();
    }
}
