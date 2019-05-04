<?php

use TestApp\{DetectController, Service};
use Slim\Http\Request;
use Slim\Http\Response;

$app->get('/detect', function (Request $request, Response $response) {
    return (new DetectController(new Service()))->index($request, $response);
});

$app->any('/[{path:.*}]', function (Request $request, Response $response) {
    return $response->withJson(['Not Found'], 404);
});

