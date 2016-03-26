<?php

namespace Kolter\PLoL\Resources;

use Kolter\PLoL\ResourceHandler;

/**
 * Class Match
 * @package Kolter\PLoL\Resources
 */
class Match extends ResourceHandler
{
    /**
     * @var
     */
    protected $uriChampion;
    /**
     * @var string
     */
    protected $resourceName = 'match';
    /**
     * @var string
     */
    protected $apimode = 'api_lol';

    /**
     * @param $id
     * @return mixed
     */
    public function byid($id, $parameters='')
    {
        $this->args['id'] = $id;
        $this->args['parameters'] = $parameters;
        $this->args['type'] = __Function__;

        return $this->getResource();
    }
}
