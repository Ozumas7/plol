<?php


namespace Kolter\PLoL\Interfaces;


use GuzzleHttp\Exception\ClientException;
use Kolter\PLoL\ResourceHandler;

/**
 * Interface ErrorCodesInterface
 * @package Kolter\PLoL\Interfaces
 */
interface ErrorCodesInterface
{
    public function getResponseByErrorCode(ClientException $exception,ResourceHandler $resource);

}