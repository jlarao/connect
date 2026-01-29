<?php

// $router = Router::getInstance();

$router->get('/users', 'UserController@index');
$router->get('/users/{id}', 'UserController@show');
$router->post('/pppoe/insert', 'pppoeController@insert');
