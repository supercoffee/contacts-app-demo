<?php

/*
 * Parse request URL and route it to handler
 *
 */

use Narrowspark\HttpEmitter\SapiEmitter;
use League\Route\Router;

$emitter = new SapiEmitter;

$request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
);

$routes = [
  new RootRoute,
];

$router = new Router;

/** @var Route $route */
foreach ($routes as $route) {
    $router->map($route->verb(), $route->path(), [$route, 'handleRequest']);
}

$response = $router->dispatch($request);

$emitter->emit($response);