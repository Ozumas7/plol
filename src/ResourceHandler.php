<?php

namespace Kolter\PLoL;

use Kolter\PLoL\ErrorCodeHandlers\ErrorCodeHandler;
use Kolter\PLoL\Interfaces\ErrorCodesInterface;
use Kolter\PLoL\Interfaces\OutputInterface;
use Kolter\PLoL\OutputModes\JsonOutput;

abstract class ResourceHandler
{
    /**
     * @var
     */
    protected $outputmode;
    /**
     * @var
     */
    protected $uriResource;
    /**
     * @var ConfigHandler
     */
    protected $config;
    /**
     * @var
     */
    protected $response;
    /**
     * @var
     */
    public $args;
    /**
     * @var
     */
    protected $apimode;
    /**
     * @var
     */
    protected $resourceName;
    /**
     * @var
     */
    public $cache;
    /**
     * @var
     */
    public $cacheMode;
    /**
     * @var
     */
    protected $timeExpired;
    /**
     * @var JsonOutput
     */
    protected $outputHandler;
    /**
     * @var ErrorCodeHandler
     */
    public $errorHandler;
    /**
     * @var int
     */
    public $cacheTimeExpired=30;
    /**
     * ResourceHandler constructor.
     * @param $apikey
     */
    public function __construct($apikey)
    {
        $this->setApiKey($apikey);
        $this->args['resourceName'] = $this->resourceName;
        $this->args['apimode'] = $this->apimode;
        $this->config = new ConfigHandler();
        $this->outputHandler = new JsonOutput();
        $this->cache = new CacheHandler();
        $this->errorHandler = new ErrorCodeHandler();
        $this->setDefaultOptions();
    }

    /**
     *
     */
    protected function setDefaultOptions()
    {
        $this->args['uris'] = $this->config->getUriFile();
        $this->setCache($this->config->getCacheMode());
        $this->setRegion($this->config->getRegion());
        $this->cache->setTimeExpire($this->cacheTimeExpired);
        $this->args['regionbase'] = $this->args['region'];
        $this->args['parameters'] = '';
        $this->args['id'] = '';
    }

    /**
     *
     */
    protected function resourceRequest()
    {
        $this->uriResource = Utility::uriConstructor(UriBuilder::uriBuilder($this->args), $this->args);
        $this->cache->setFileName(urlencode($this->uriResource));
        $this->request();
    }

    /**
     *
     */
    protected function request(){
        $this->response = (new RequestHandler($this))->getResponse();
    }
    /**
     * @return mixed
     */
    protected function getResource()
    {
        $this->resourceRequest();
        return  $this->outputHandler->load($this->response);
    }
    /**
     * @param $url
     * @return mixed
     */
    public function getCustomResource($url){
        $this->uriResource = $url;
        $this->cache->setFileName(urlencode($this->uriResource));
        $this->request();

        return $this->outputHandler->load($this->response);
    }
    /**
     * @return mixed
     */
    protected function getCache()
    {
        return $this->cache;
    }
    /**
     * @return mixed
     */
    public function getUriResource()
    {
        return $this->uriResource;
    }

    /**
     * @param $time
     * @return $this
     * @throws Exceptions\CacheTimeFileException
     */
    public function setCacheTimeExpired($time){
        $time = Validator::cacheFileTimeExpiredValidator($time);
        $this->cache->setTimeExpire($time);
        return $this;
    }
    /**
     * @param $mode
     * @return $this
     */
    public function setCache($mode)
    {
        $this->cacheMode = Validator::CacheValidator($mode);

        return $this;
    }
    /**
     * @param $region
     * @return $this
     * @throws Exceptions\RegionException
     */
    public function setRegion($region)
    {
        $this->args['region'] = Validator::RegionValidator($region);

        return $this;
    }
    /**
     * @param OutputInterface $outputClass
     * @return $this
     */
    public function setOutputMode(OutputInterface $outputClass)
    {
        $this->outputHandler = new $outputClass;

        return $this;
    }

    /**
     * @param ErrorCodesInterface $errorCodeHandler
     * @return $this
     */
    public function setErrorCodeHandler(ErrorCodesInterface $errorCodeHandler){
        $this->errorHandler= $errorCodeHandler;

        return $this;
    }

    /**
     * @param $apiKey
     * @return $this
     * @throws Exceptions\ApiKeyException
     */
    protected function setApiKey($apiKey)
    {
        $this->args['apikey'] = Validator::apiKeyValidator($apiKey);

        return $this;
    }

}
