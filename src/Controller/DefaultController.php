<?php

namespace ExactOnlineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Author: Jefferson Bianchi / Maxime Lambot
 * Email : Jefferson@aibianchi.com / maxime@zangra.com.
 */
class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $code = $request->query->get('code');
        $exactManager = $this->get('exact_online.manager');
        $exactManager->init($code);

        return new JsonResponse('status :: ok');
    }
}
