<?php
/**
 * Created by PhpStorm.
 * User: Pablo
 * Date: 25/03/2016
 * Time: 20:59
 */

namespace Kolter\PLoL\ErrorCodeHandlers;


use GuzzleHttp\Exception\ClientException;
use Kolter\PLoL\Interfaces\ErrorCodesInterface;
use Kolter\PLoL\RequestHandler;
use Kolter\PLoL\ResourceHandler;

class ErrorCodeHandler implements ErrorCodesInterface
{
   protected $errorCodes=[];
    public function __construct()
    {
        $this->errorCodes[429]=function($resource,ClientException $exception){
            sleep($exception->getResponse()->getHeaders()['Retry-After'][0]);
            return (new RequestHandler($resource))->getResponse();
        };
        $this->errorCodes[400]=function(){
            $message ='Error in the syntax of the call, check parameters of the call';
            return self::defaultErrorResponse(400,$message);
        };
        $this->errorCodes[401]=function(){
            $message ='An invalid API key was provided with the API request' ;
            return self::defaultErrorResponse(401,$message);
        };
        $this->errorCodes[403]=function(){
            $message ='An invalid API key was provided with the API request' ;
            return self::defaultErrorResponse(403,$message);
        };
        $this->errorCodes[404]=function(){
            $message ='the server has not found a match for the API request being made.' ;
            return self::defaultErrorResponse(404,$message);
        };
        $this->errorCodes[415]=function(){
            $message ='The Content-Type header was not appropriately set' ;
            return self::defaultErrorResponse(415,$message);
        };
        $this->errorCodes[500]=function(){
            $message ='An unexpected condition or exception which prevented the server
            from fulfilling an API request';
            return self::defaultErrorResponse(500,$message);
        };
        $this->errorCodes[503]=function(){
            $message ='the server is currently unavailable to handle requests because of an unknown reason.';
            return self::defaultErrorResponse(503,$message);
        };
        $this->errorCodes[204]=function(){
            $message ='the request was received and understood, but that there is no need to send any data back.';
            return self::defaultErrorResponse(204,$message);
        };
    }

    public function getResponseByErrorCode(ClientException $exception,ResourceHandler $resource){
        return call_user_func_array($this->errorCodes[$exception->getCode()],array($resource,$exception));
    }

    public static function defaultErrorResponse($errorCode,$message){
            $response = new \stdClass();
            $response->code = $errorCode;
            $response->message = $message;
            return json_encode($response);
    }
}