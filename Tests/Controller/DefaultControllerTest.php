<?php

namespace aibianchi\ExactOnlineBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('POST', '/json?code=toto');

        $this->assertContains('Hello World', $client->getResponse()->getContent());
    }
}
