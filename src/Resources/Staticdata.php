<?php

namespace Kolter\PLoL\Resources;

use Kolter\PLoL\ResourceHandler;

/**
 * Class Staticdata
 * @package Kolter\PLoL\Resources
 */
class Staticdata extends ResourceHandler
{
    /**
     * @var
     */
    protected $uriChampion;
    /**
     * @var string
     */
    protected $resourceName = 'staticdata';
    /**
     * @var string
     */
    protected $apimode = 'staticmode';
    /**
     * @var int
     */
    public $cacheTimeExpired = 10000;

    /**
     * Staticdata constructor.
     */
    public function __construct($apikey)
    {
        parent::__construct($apikey);
        $this->args['regionbase'] = 'global';
    }

    /**
     * @param string $id
     * @param string $parameters
     * @return mixed
     */
    public function champion($id = '', $parameters = '')
    {
        $this->args['id'] = ($id == 'all') ? '' : $id;
        $this->args['parameters'] = $parameters;
        $this->args['type'] = __Function__;

        return $this->getResource();
    }

    /**
     * @param string $id
     * @param string $parameters
     * @return mixed
     */
    public function item($id = '', $parameters = '')
    {
        $this->args['id'] = ($id == 'all') ? '' : $id;
        $this->args['parameters'] = $parameters;
        $this->args['type'] = __Function__;

        return $this->getResource();
    }

    /**
     * @param string $parameters
     * @return mixed
     */
    public function languagestrings($parameters = '')
    {
        $this->args['parameters'] = $parameters;
        $this->args['type'] = __Function__;

        return $this->getResource();
    }

    /**
     * @return mixed
     */
    public function languages()
    {
        $this->args['type'] = __Function__;

        return $this->getResource();
    }

    /**
     * @param string $parameters
     * @return mixed
     */
    public function map($parameters = '')
    {
        $this->args['parameters'] = $parameters;
        $this->args['type'] = __Function__;

        return $this->getResource();
    }

    /**
     * @param string $id
     * @param string $parameters
     * @return mixed
     */
    public function mastery($id = '', $parameters = '')
    {
        $this->args['id'] = ($id == 'all') ? '' : $id;
        $this->args['parameters'] = $parameters;
        $this->args['type'] = __Function__;

        return $this->getResource();
    }

    /**
     * @return mixed
     */
    public function realm()
    {
        $this->args['type'] = __Function__;

        return $this->getResource();
    }

    /**
     * @param string $id
     * @param string $parameters
     * @return mixed
     */
    public function rune($id = '', $parameters = '')
    {
        $this->args['id'] = ($id == 'all') ? '' : $id;
        $this->args['parameters'] = $parameters;
        $this->args['type'] = __Function__;

        return $this->getResource();
    }

    /**
     * @param string $id
     * @param string $parameters
     * @return mixed
     */
    public function summonerspell($id = '', $parameters = '')
    {
        $this->args['id'] = ($id == 'all') ? '' : $id;
        $this->args['parametros'] = $parameters;
        $this->args['type'] = __Function__;

        return $this->getResource();
    }

    /**
     * @return mixed
     */
    public function versions()
    {
        $this->args['type'] = __Function__;

        return $this->getResource();
    }
}
