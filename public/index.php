<?php

session_start();

require_once __DIR__ . '/../app/core/Router.php';

$controllers = ['AdminController', 'NewsController', 'EmailController'];

foreach($controllers as $controller) {
    require_once __DIR__ . "/../app/controllers/{$controller}.php";
}

$pdo = new PDO('mysql:host=localhost;dbname=bravatta', 'root', 'root');
$adminController = new AdminController($pdo);
$newsController = new NewsController($pdo);
$emailController = new EmailController();

$router = new Router($adminController, $newsController, $emailController);
$router->handleRequest();