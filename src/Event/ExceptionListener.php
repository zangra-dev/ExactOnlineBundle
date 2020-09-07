<?php

namespace ExactOnlineBundle\Event;

use ExactOnlineBundle\DAO\Exception\ApiExceptionInterface;
use ExactOnlineBundle\Entity\ExactLogger;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Doctrine\ORM\EntityManager;

/**
 * Author: Jefferson Bianchi / Maxime Lambot
 * Email : jefferson@zangra.com / maxime@zangra.com.
 */
class ExceptionListener
{
    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function onKernelException(GetResponseForExceptionEvent $event)
    {
        if ($event->getException() instanceof ApiExceptionInterface || $event->getException() instanceof GuzzleException) {
            $response = new JsonResponse($event->getException()->getMessage());
            $event->setResponse($response);

            $this->log($event->getException());
        }
    }

    private function log($exception)
    {
        $log = new ExactLogger();
        $log->setCode(method_exists($exception, 'getStatusCode') ? $exception->getStatusCode() : $exception->getCode());
        $log->setMessage($exception->getMessage());
        $log->setCalled('file :'.$exception->getTrace()[0]['file'].' line : '.$exception->getTrace()[0]['line']);
        $log->setOccured('file :'.$exception->getFile().' line : '.$exception->getLine());

        $this->em->persist($log);
        $this->em->flush();
    }
}
