<?php

namespace ExactOnlineBundle\DAO\Exception;

use Exception;
use Symfony\Component\HttpKernel\Exception\HttpException;

/**
 * Class ApiException.
 */
class ApiException extends HttpException implements ApiExceptionInterface
{
    public function __construct(string $message, int $code, Exception $previous = null)
    {
        parent::__construct($code, $message, $previous);
    }
}
