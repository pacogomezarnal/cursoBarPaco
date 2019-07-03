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
  public function testApiInsertarCategoriaOK()
  {
    $client = static::createClient();
    $crawler = $client->request('POST', '/api/insertarCategoria/test/prueba');
    $content=$client->getResponse()->getContent();
    $objeto_content=json_decode($content);
    $this->assertEquals("test", $objeto_content->nombre);
  }
}
