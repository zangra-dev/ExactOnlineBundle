<?php

namespace aibianchi\ExactOnlineBundle\Event;

use aibianchi\ExactOnlineBundle\DAO\Exception\ApiExceptionInterface;
use Exception;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;



/**
 * Author: Jefferson Bianchi
 * Mail  : Jefferson@aibianchi.com
 */
class ExceptionListener{

    private $logger;

    public function __construct(LoggerInterface $logger){

        $this->logger = $logger;

    }

    public function onKernelException(GetResponseForExceptionEvent $event){

        if (!$event->getException() instanceof ApiExceptionInterface) {
            return;
        }

        $response = new JsonResponse($event->getException()->getMessage(), $event->getException()->getStatusCode());
        $event->setResponse($response);

        $this->log($event->getException());

    }

    private function log(ApiExceptionInterface $exception){

        $log = [
            'code' => $exception->getStatusCode(),
            'message' => $exception->getMessage(),
            'called' => [
                'file' => $exception->getTrace()[0]['file'],
                'line' => $exception->getTrace()[0]['line'],
            ],
            'occurred' => [
                'file' => $exception->getFile(),
                'line' => $exception->getLine(),
            ],
        ];

        if ($exception->getPrevious() instanceof Exception) {
            $log += [
                'previous' => [
                    'message' => $exception->getPrevious()->getMessage(),
                    'exception' => get_class($exception->getPrevious()),
                    'file' => $exception->getPrevious()->getFile(),
                    'line' => $exception->getPrevious()->getLine(),
                ],
            ];
        }

        $this->logger->error(json_encode($log));

    }

}


?>