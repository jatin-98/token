<?php

namespace Jatin;

class TokenException extends \Exception
{
    public function __construct($message = "Error storing token", $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
