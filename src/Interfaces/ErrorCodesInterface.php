<?php


namespace Kolter\PLoL\Interfaces;


use GuzzleHttp\Exception\ClientException;
use Kolter\PLoL\ResourceHandler;

interface ErrorCodesInterface
{
    public function getResponseByErrorCode(ClientException $exception,ResourceHandler $resource);

}