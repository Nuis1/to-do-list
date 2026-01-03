<?php

define('BASE_PATH', dirname(__DIR__));

require_once BASE_PATH . '/app/core/Router.php';

session_start();

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/content1', 'ContentController@content1');
$router->get('/content2', 'ContentController@content2');
$router->get('/content3', 'ContentController@content3');
$router->get('/login', 'LoginController@login');
$router->get('/register', 'RegisterController@register');

// POST (aksi)
$router->post('/register', 'RegisterController@store');

$router->run();