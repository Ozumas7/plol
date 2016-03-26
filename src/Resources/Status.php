<?php

namespace Kolter\PLoL\Resources;

use Kolter\PLoL\ResourceHandler;

/**
 * Class Status
 * @package Kolter\PLoL\Resources
 */
class Status extends ResourceHandler
{
    /**
     * @var
     */
    protected $uriChampion;
    /**
     * @var string
     */
    protected $resourceName = 'status';
    /**
     * @var string
     */
    protected $apimode = 'statusmode';
    /**
     * @var int
     */
    public $cacheFileTimeExpired = 10000;

    /**
     * Status constructor.
     */
    public function __construct($apikey)
    {
        parent::__construct($apikey);
        $this->args['uris']->uri = $this->args['uris']->statusuri;
    }

    /**
     * @param string $region
     * @return mixed
     */
    public function byregion($region = '')
    {
        $this->args['regionRequest'] = $region;
        $this->args['type'] = __Function__;

        return $this->getResource();
    }

    /**
     * @return mixed
     */
    public function all()
    {
        $this->args['type'] = __Function__;

        return $this->getResource();
    }
}
