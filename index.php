<?php
include_once "./core/routing.php";
include_once "./core/config.php";
include_once "./app/controllers/Controller.php";
include_once "./app/controllers/IndexController.php";

require __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$router = new Routing();
$controller=$router->controller;
$method=$router->method;
$param=$router->param;

$controller=new $controller;
$controller->$method($param);