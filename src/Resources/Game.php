<?php

namespace Kolter\PLoL\Resources;

use Kolter\PLoL\ResourceHandler;

/**
 * Class Game
 * @package Kolter\PLoL\Resources
 */
class Game extends ResourceHandler
{
    /**
     * @var
     */
    protected $uriChampion;
    /**
     * @var string
     */
    protected $resourceName = 'game';
    /**
     * @var string
     */
    protected $apimode = 'api_lol';

    /**
     * @param $id
     * @return mixed
     */
    public function get($id)
    {
        $this->args['id'] = $id;
        $this->args['type'] = __Function__;

        return $this->getResource();
    }
}
