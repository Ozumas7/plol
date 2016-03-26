<?php

namespace Kolter\PLoL\Resources;

use Kolter\PLoL\ResourceHandler;
use Kolter\PLoL\Utility;

/**
 * Class CurrentGame
 * @package Kolter\PLoL\Resources
 */
class CurrentGame extends ResourceHandler
{
    /**
     * @var
     */
    protected $uriChampion;
    /**
     * @var string
     */
    protected $resourceName = 'currentgame';
    /**
     * @var string
     */
    protected $apimode = 'observer_mode';

    /**
     * @param $platformid
     * @param $summonerid
     * @return mixed
     */
    public function spectatorgameinfo($summonerid)
    {
        $this->args['platformid'] = Utility::regionToPlatForm($this->args['region']);
        $this->args['summonerid'] = $summonerid;
        $this->args['type'] = __Function__;

        return $this->getResource();
    }


}
