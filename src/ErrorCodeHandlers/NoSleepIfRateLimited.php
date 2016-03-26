<?php
/**
 * Created by PhpStorm.
 * User: Pablo
 * Date: 26/03/2016
 * Time: 2:25
 */

namespace Kolter\PLoL\ErrorCodeHandlers;


use GuzzleHttp\Exception\ClientException;
use Kolter\PLoL\Interfaces\ErrorCodesInterface;
use Kolter\PLoL\ResourceHandler;

class NoSleepIfRateLimited implements ErrorCodesInterface
{
    public function getResponseByErrorCode(ClientException $errorCode,ResourceHandler $resource){
        $output = new \stdClass();
        $output->code = $errorCode->getCode();
        $output->message = json_decode($errorCode->getResponse()->getBody()->getContents());
        return json_encode($output);
    }

}