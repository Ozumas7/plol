<?php

namespace Kolter\PLoL\Exceptions;

/**
 * Class CacheTimeFileException
 * @package Kolter\PLoL\Exceptions
 */
class CacheException extends \Exception
{

    /**
     * CacheTimeFileException constructor.
     * @param string $message
     * @param int $code
     * @param \Exception|null $previous
     */
    public function __construct($message, $code = 0, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
