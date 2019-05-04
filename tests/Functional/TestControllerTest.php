<?php

namespace TestApp\Tests\Functional;

use Slim\Http\Request;

class RenderControllerTest extends BaseTestCase
{
    /**
     * @throws \Slim\Exception\MethodNotAllowedException
     * @throws \Slim\Exception\NotFoundException
     */
    public function testTestActionReturns200()
    {
        $response = $this->runApp(
            [
                'REQUEST_METHOD' => 'GET',
                'REQUEST_URI' => '/test'
            ]
        );
        $this->assertEquals(200, $response->getStatusCode());
    }
}