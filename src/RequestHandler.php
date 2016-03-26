<?php

namespace Kolter\PLoL;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

/**
 * Class RequestHandler
 * @package Kolter\PLoL
 */
class RequestHandler
{
    /**
     * @var
     */
    protected $uri;
    /**
     * @var
     */
    protected $response;
    /**
     * @var ResourceHandler
     */
    protected $class;
    /**
     * @var
     */
    protected $header;
    /**
     * @var CacheHandler
     */
    protected $cache;

    /**
     * RequestHandler constructor.
     * @param ResourceHandler $class
     */
    public function __construct(ResourceHandler $class)
    {
        $this->uri = $class->getUriResource();
        $this->cache = $class->cache;
        $this->class = $class;
        $this->errorHandler = $class->errorHandler;
        $this->cacheMode = $class->cacheMode;
        $this->request();
    }

    /**
     *
     */
    protected function getCache()
    {
        $this->response = $this->cache->getCacheFile();;
    }

    /**
     *
     */
    protected function setCache()
    {
        if ($this->cacheMode==true) {
            $this->cache->setInCache($this->getResponse());
        }
    }

    /**
     * @return $this
     */
    protected function request()
    {
        if ($this->cacheMode==true) {
            if ($this->cache->isInCache()) {
                $this->getCache();
                return $this;
            }
        }
        $this->requestHandler();
        return $this;
    }

    /**
     * @return $this
     */
    protected function requestHandler()
    {
        $request = new Client();
        $params = ['verify'=>false];
            try {
                $request = $request->get($this->uri, $params);
                $this->response = $request->getBody()->getContents();
            } catch (ClientException $e) {
                $this->response = $this->errorHandler->getResponseByErrorCode($e,$this->class);
            }
        $this->setCache();

        return $this;
    }


    /**
     * @return array
     */
    public function getResponse()
    {
        return $this->response;
    }
}
