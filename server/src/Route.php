<?php


use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

interface Route
{
    function verb(): String;

    function path(): String;

    function handleRequest(ServerRequestInterface $request): ResponseInterface;

}