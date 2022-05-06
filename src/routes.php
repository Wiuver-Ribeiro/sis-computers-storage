<?php
use core\Router;

$router = new Router();

$router->get('/', 'ComputerController@index');
$router->get('/city', 'CityController@index');

$router->get('/gerar', 'HomeController@gerar');
$router->post('/add', 'ComputerController@addComputer');
$router->post('/add/city/', 'CityController@addCity');

$router->post('/gerar', 'CityController@generateReportByCity');