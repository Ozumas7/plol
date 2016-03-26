<?php

namespace Kolter\PLoL\Resources;


use Kolter\PLoL\ResourceHandler;
use Kolter\PLoL\Utility;

class ChampionMastery extends ResourceHandler
{

    protected $uriChampion;
    /**
     * @var string
     */
    protected $resourceName = 'championmastery';
    /**
     * @var string
     */
    protected $apimode = 'mastery';

    /**
     * @param $summonerid
     * @param $championid
     * @return mixed
     * @throws \Kolter\PLoL\Exceptions\RegionException
     */
    public function champion($summonerid,$championid)
    {
        $this->args['platformid'] = Utility::regionToPlatForm($this->args['region']);
        $this->args['summonerid'] = $summonerid;
        $this->args['championid'] = $championid;
        $this->args['type'] = __Function__;

        return $this->getResource();
    }

    /**
     * @param $summonerid
     * @return mixed
     * @throws \Kolter\PLoL\Exceptions\RegionException
     */
    public function champions($summonerid)
    {
        $this->args['platformid'] = Utility::regionToPlatForm($this->args['region']);
        $this->args['summonerid'] = $summonerid;
        $this->args['type'] = __Function__;

        return $this->getResource();
    }

    /**
     * @param $summonerid
     * @return mixed
     * @throws \Kolter\PLoL\Exceptions\RegionException
     */
    public function score($summonerid)
    {
        $this->args['platformid'] = Utility::regionToPlatForm($this->args['region']);
        $this->args['summonerid'] = $summonerid;
        $this->args['type'] = __Function__;

        return $this->getResource();
    }

    /**
     * @param $summonerid
     * @return mixed
     * @throws \Kolter\PLoL\Exceptions\RegionException
     */
    public function topchampions($summonerid)
    {
        $this->args['platformid'] = Utility::regionToPlatForm($this->args['region']);
        $this->args['summonerid'] = $summonerid;
        $this->args['type'] = __Function__;

        return $this->getResource();
    }


}