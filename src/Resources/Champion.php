<?php

namespace Kolter\PLoL\Resources;

use Kolter\PLoL\ResourceHandler;

/**
 * Class Champion
 * @package Kolter\PLoL\Resources
 */
class Champion extends ResourceHandler
{
    /**
     * @var
     */
    protected $uriChampion;
    /**
     * @var string
     */
    protected $resourceName = 'champion';
    /**
     * @var string
     */
    protected $apimode = 'api_lol';

    /**
     * @param string $id
     * @return mixed
     */
    public function get($id = '')
    {
        $this->args['id'] = $id;
        $this->args['type'] = __Function__;

        return $this->getResource();
    }
}
