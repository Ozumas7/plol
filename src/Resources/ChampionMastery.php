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
     * @param $platformid
     * @param $summonerid
     * @return mixed
     */
    public function champion($summonerid,$championid)
    {
        $this->args['platformid'] = Utility::regionToPlatForm($this->args['region']);
        $this->args['summonerid'] = $summonerid;
        $this->args['championid'] = $championid;
        $this->args['type'] = __Function__;

        return $this->getResource();
    }
    public function champions($summonerid)
    {
        $this->args['platformid'] = Utility::regionToPlatForm($this->args['region']);
        $this->args['summonerid'] = $summonerid;
        $this->args['type'] = __Function__;

        return $this->getResource();
    }
    public function score($summonerid)
    {
        $this->args['platformid'] = Utility::regionToPlatForm($this->args['region']);
        $this->args['summonerid'] = $summonerid;
        $this->args['type'] = __Function__;

        return $this->getResource();
    }
    public function topchampions($summonerid)
    {
        $this->args['platformid'] = Utility::regionToPlatForm($this->args['region']);
        $this->args['summonerid'] = $summonerid;
        $this->args['type'] = __Function__;

        return $this->getResource();
    }


}