<?php
require_once __DIR__ . '/../../config.php';
require 'core/Router.php';
require 'core/Response.php';
define('BASE_PATH', '/mikrotik/api-rest');
define('HOST_MKT', env('MIKROTIK_HOST'));
define('MIKROTIK_USER', env('MIKROTIK_USER'));
define('MIKROTIK_PASS', env('MIKROTIK_PASS'));
$router = new Router($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
require 'routes.php';
$response = $router->resolve();

http_response_code($response['status']);
header('Content-Type: application/json');
echo json_encode($response['body']);
