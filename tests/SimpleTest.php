<?php
/**
 * Created by PhpStorm.
 * User: Sergey
 * Date: 27.08.2016
 * Time: 10:22
 */

namespace tests;


class SimpleTest extends \TestCase
{

    public function testMethodIndex()
    {
        $this->call('GET', '/');

        $this->assertResponseOk();

    }
    public function testMethodBlog()
    {

        $this->call('GET', '/blog');

        $this->assertResponseOk();
    }

    public function testMethodRegister()
    {

        $this->call('GET', '/register');

        $this->assertResponseOk();
    }

    public function testLinksTable()
    {
        $this->seeInDatabase('posts', ['name' => 'Иван Иваниович']);
        $this->seeInDatabase('posts', ['email' => 'ivan@ivan.com']);
        $this->seeInDatabase('posts', ['name' => 'Петр Петров']);
        $this->seeInDatabase('posts', ['email' => 'petr@petrov.com']);

    }

    public function testSeeAbout()
    {
        $this->call('GET', '/about.html');
        $this->assertResponseOk();
    }

    public function testSeeCOntact()
    {
        $this->call('GET', '/contact.html');
        $this->assertResponseOk();
    }

    public function testSeeServices()
    {
        $this->call('GET', '/services.html');
        $this->assertResponseOk();
    }


}