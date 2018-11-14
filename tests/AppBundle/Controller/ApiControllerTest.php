<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ApiControllerTest extends WebTestCase
{
  public function testApiInsertarCategoria()
  {
    $client = static::createClient();
    $crawler = $client->request('GET', '/api/insertarCategoria/test/prueba');
    $this->assertEquals(405, $client->getResponse()->getStatusCode());
  }
}
