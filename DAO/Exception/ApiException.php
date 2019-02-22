<?php

namespace aibianchi\ExactOnlineBundle\DAO\Exception;

use aibianchi\ExactOnlineBundle\DAO\Exception\ApiExceptionInterface;
use Exception;
use Symfony\Component\HttpKernel\Exception\HttpException;

/**
 * Class ApiException
 *
 * @package aibianchi\ExactOnlineBundle\DAO\Exception;
 *
 */
class ApiException extends HttpException implements ApiExceptionInterface
{
	public function __construct(string $message, int $code, Exception $previous = null){

			parent::__construct($code, $message, $previous);
	}


}