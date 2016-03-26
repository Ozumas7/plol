<?php

namespace Kolter\PLoL\Resources;

use Kolter\PLoL\ResourceHandler;

/**
 * Class FeaturedGames
 * @package Kolter\PLoL\Resources
 */
class FeaturedGames extends ResourceHandler
{
    /**
     * @var
     */
    protected $uriChampion;
    /**
     * @var string
     */
    protected $resourceName = 'featuredgames';
    /**
     * @var string
     */
    protected $apimode = 'observer_mode';

    /**
     * FeaturedGames constructor.
     */
    public function __construct($apikey)
    {
        $this->args['resourceName'] = $this->resourceName;
        $this->args['apimode'] = $this->apimode;
        parent::__construct($apikey);
    }

    /**
     * @return mixed
     */
    public function featured()
    {
        $this->args['type'] = __Function__;

        return $this->getResource();
    }
}
