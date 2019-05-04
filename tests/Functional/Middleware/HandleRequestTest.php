<?php

namespace TestApp\Tests\Functional\Middleware;

use TestApp\Tests\Functional\BaseTestCase;

class HandleRequestTest extends BaseTestCase
{
    /**
     * @throws \Slim\Exception\MethodNotAllowedException
     * @throws \Slim\Exception\NotFoundException
     */
    public function testContentTypeIsNotSupported()
    {
        $response = $this->runApp(
            [
                'REQUEST_METHOD' => 'POST',
                'REQUEST_URI' => '/',
                'CONTENT_TYPE' => 'text/plain'
            ]
        );

        $this->assertSame(422, $response->getStatusCode());
        $this->assertContains('text\/plain', $response->getBody()->__toString());
    }

    /**
     * @throws \Slim\Exception\MethodNotAllowedException
     * @throws \Slim\Exception\NotFoundException
     */
    public function testContentTypeIsSupported()
    {
        $response = $this->runApp(
            [
                'REQUEST_METHOD' => 'POST',
                'REQUEST_URI' => '/',
                'CONTENT_TYPE' => 'application/json'
            ]
        );
        $this->assertSame(404, $response->getStatusCode());
    }
}