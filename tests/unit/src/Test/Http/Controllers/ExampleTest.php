<?php
namespace Test\Https\Controllers;

use Test\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->get('/');

        $intro = '<h3>Welcome to Lumbent version ' . getenv('API_VERSION'). '.</h3>'
            .'<p>More info about Lumbent API can be found from '
            .'<a href="'.getenv('API_HOST').'/swagger/">Documentation</a></p>';

        $this->assertEquals(
            $this->response->getContent(), $intro
        );
    }
}
