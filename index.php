<?php

foreach (['DB_HOST', 'DB_PORT', 'DB_NAME', 'DB_USER', 'DB_PASS'] as $key) {
    error_log($key . ': ' . (
        getenv($key) !== false ? 'AVAILABLE' : 'MISSING'
    ));
}

session_start();

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->safeLoad();

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