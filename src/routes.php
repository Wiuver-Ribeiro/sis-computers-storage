<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/city', 'CityController@index');

$router->get('/gerar', 'HomeController@gerar');
$router->post('/add', 'ComputerController@addComputer');