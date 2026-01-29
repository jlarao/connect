<?php
require 'core/Router.php';
require 'core/Response.php';
define('BASE_PATH', '/mikrotik/api-rest');
define('HOST_MKT', '200.188.72.42');
$router = new Router($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
require 'routes.php';
$response = $router->resolve();

http_response_code($response['status']);
header('Content-Type: application/json');
echo json_encode($response['body']);
