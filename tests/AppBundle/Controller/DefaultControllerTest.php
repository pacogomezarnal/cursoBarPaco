<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        //$this->assertContains('Welcome to Symfony', $crawler->filter('#container h1')->text());
    }
    public function testLinkMenu()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');
        $link = $crawler
                ->filter('#nosotrosLink')
                ->link();
        $crawler = $client->click($link);
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
    /*
    public function testRegistro()
    {
      $client = static::createClient();
      $crawler = $client->request('GET', '/registro/');
      $form = $crawler->selectButton('usuario[registrar]')->form();
      $form['usuario[email]'] = 'paco@paco.es';
      $form['usuario[plainPassword][first]'] = '123456';
      $form['usuario[plainPassword][second]'] = '123456';
      $crawler = $client->submit($form);
      $this->assertTrue(
      $client->getResponse()->isRedirect('/login/'));
    }*/
}
