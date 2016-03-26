<?php

namespace Kolter\PLoL\Exceptions;

/**
 * Class ApiKeyException
 * @package Kolter\PLoL\Exceptions
 */
class ApiKeyException extends \Exception
{

    /**
     * ApiKeyException constructor.
     * @param string $message
     * @param int $code
     * @param \Exception|null $previous
     */
    public function __construct($message, $code = 0, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
