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
        $response = (new Response())->withHeader("Content-type", "application/json");
        $body = [
            "message" => "Welcome to the Contact manager API"
        ];
        $response->getBody()->write(json_encode($body));
        return $response;
    }
}