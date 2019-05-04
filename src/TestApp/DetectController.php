<?php

namespace TestApp;

use Slim\Http\Request,
    Slim\Http\Response;

class DetectController
{
    protected $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
    public function index(Request $request, Response $response) : Response
    {
        return $response->withJson(
            [
                'device' => $this->service->getDevice(),
                'os' => $this->service->getOs()
            ]
            , null, JSON_FORCE_OBJECT);
    }
}