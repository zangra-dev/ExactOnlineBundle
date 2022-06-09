<?php

namespace ExactOnlineBundle\Event;

use Doctrine\ORM\EntityManager;
use ExactOnlineBundle\DAO\Exception\ApiExceptionInterface;
use ExactOnlineBundle\Entity\ExactLogger;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;

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

    public function onKernelException(ExceptionEvent $event)
    {
        if ($event->getThrowable() instanceof ApiExceptionInterface || $event->getThrowable() instanceof GuzzleException) {
            $response = new JsonResponse($event->getThrowable()->getMessage());
            $event->setResponse($response);

            $this->log($event->getThrowable());
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
