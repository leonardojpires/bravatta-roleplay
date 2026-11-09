<?php

session_start();

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

require_once __DIR__ . '/../app/core/Router.php';
require_once __DIR__ . '/../app/core/Database.php';

$controllers = ['AdminController', 'NewsController', 'EmailController'];

foreach($controllers as $controller) {
    require_once __DIR__ . "/../app/controllers/{$controller}.php";
}

$pdo = Database::connect();
$adminController = new AdminController($pdo);
$newsController = new NewsController($pdo);
$emailController = new EmailController();

$router = new Router($adminController, $newsController, $emailController);
$router->handleRequest();