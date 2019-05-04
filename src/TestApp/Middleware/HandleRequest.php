<?php

namespace TestApp\Middleware;

use Slim\Http\Response,
    Slim\Http\Request;

class HandleRequest
{
    const ACCEPTED_CONTENT_TYPE = "application/json";

    /**
     * @param Request $request
     * @param Response $response
     * @param \Slim\App $next
     * @return Response
     * @throws \Slim\Exception\MethodNotAllowedException
     * @throws \Slim\Exception\NotFoundException
     */
    public function __invoke(Request $request, Response $response, \Slim\App $next) : Response
    {
        
      /*  if (self::ACCEPTED_CONTENT_TYPE !== strtolower($request->getContentType())) {
            return $response->withJson(['error' => 'Content-Type not supported: ' . $request->getContentType()], 422);
        }*/

        $response = $next($request, $response);
        $response = $response->withHeader('Access-Control-Allow-Origin', '*');
        $response = $response->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization');
        $response = $response->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
            
        return $response;
    }
}