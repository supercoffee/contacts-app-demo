<?php


use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response;

class RootRoute implements Route
{

    function verb(): String
    {
        return 'GET';
    }

    function path(): String
    {
        return '/';
    }

    function handleRequest(ServerRequestInterface $request): ResponseInterface
    {
        $response = new Response;
        $response->getBody()->write("<h1> hello world</h1>");
        return $response;
    }
}