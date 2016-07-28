<?php

namespace PragmaRX\Google2FAPhp\Exceptions;

use Exception;

class SecretKeyTooShortException extends Exception
{
    protected $message = 'Secret key is too short. Must be at least 16 base 32 characters';
}