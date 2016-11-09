<?php
namespace Test\Https\Controllers\HelloWorld;

use App\Http\Controllers\HelloWorld\HelloWorldController;
use Test\TestCase;

/**
 * @coversDefaultClass App\Http\Controllers\HelloWorld\HelloWorldController
 */
class HelloWorldControllerTest extends TestCase
{

    /**
     * @var HelloWorldController
     */
    protected $controller;

    /**
     * @inheritdoc
     */
    public function setUp()
    {

        parent::setUp();

        $this->controller = new HelloWorldController();
    }

    /**
     * Verify that string is returned
     *
     * @covers ::index
     */
    public function testIndexReturnString()
    {

        $response = $this->controller->index();

        $this->assertTrue(is_string($response->getContent()));
        $this->assertSame(200, $response->getStatusCode());
    }
}
