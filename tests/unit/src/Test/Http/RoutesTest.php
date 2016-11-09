<?php
namespace Test\Https;

use Test\TestCase;

class RoutesTest extends TestCase
{

    /**
     * Test /helloWorld/sayHi api call rout
     */
    public function testHelloWorldSayHiRouteReturnsString()
    {

        $this->get('/helloWorld/sayHi');

        $this->assertSame($this->response->getContent(), '"I\'m Batman."');
        $this->assertEquals(200, $this->response->getStatusCode());
    }
}
