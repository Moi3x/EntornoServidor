<?php
//include "app/Views/frontend/index.html";
// /barra/admin vas al backend

include_once "./vendor/autoload.php";
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;
$router = new RouteCollector();
$router->get('/admin', function() {
    return 'Estás intentando acceder a la función admin';
});
$router->get('/', function() {
    return 'Página principal';
});

$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch(
    $_SERVER['REQUEST_METHOD'],
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Print out the value returned from the dispatched function
echo $response;
//include "app/Views/backend/index.html";