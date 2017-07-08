<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();
        $client->request('GET', '/');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testArtistIndex()
    {
        $client = static::createClient();
        $client->request('GET', '/api/artist/greenday');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testShouldReturnA404StatusCode()
    {
        $client = static::createClient();
        $client->request('GET', '/api/blabla/blabla');
        $this->assertEquals(404, $client->getResponse()->getStatusCode());
    }

    public function testEventIndex()
    {
        $client = static::createClient();
        $client->request('GET', '/api/events/greenday');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

}
