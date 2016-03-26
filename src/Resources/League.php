<?php

namespace Kolter\PLoL\Resources;

use Kolter\PLoL\ResourceHandler;

/**
 * Class League
 * @package Kolter\PLoL\Resources
 */
class League extends ResourceHandler
{
    /**
     * @var
     */
    protected $uriChampion;
    /**
     * @var string
     */
    protected $resourceName = 'league';
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
    public function bysummonerentry($id)
    {
        $this->args['id'] = $id;
        $this->args['type'] = __Function__;

        return $this->getResource();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function byteam($id)
    {
        $this->args['id'] = $id;
        $this->args['type'] = __Function__;

        return $this->getResource();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function byteamentry($id)
    {
        $this->args['id'] = $id;
        $this->args['type'] = __Function__;

        return $this->getResource();
    }

    /**
     * @param array $parameters
     * @return mixed
     */
    public function challenger($parameters = array('type' => 'RANKED_SOLO_5x5'))
    {
        $this->args['parameters'] = $parameters;
        $this->args['type'] = __Function__;

        return $this->getResource();
    }

    /**
     * @param array $parameters
     * @return mixed
     */
    public function master($parameters = array('type' => 'RANKED_SOLO_5x5'))
    {
        $this->args['parameters'] = $parameters;
        $this->args['type'] = __Function__;

        return $this->getResource();
    }
}
