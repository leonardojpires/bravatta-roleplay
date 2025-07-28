<?php

session_start();

require_once __DIR__ . '/../app/core/Router.php';
require_once __DIR__ . '/../app/controllers/AdminController.php';
$pdo = new PDO('mysql:host=localhost;dbname=bravatta', 'root', 'root');
$adminController = new AdminController($pdo);

$router = new Router($adminController);
$router->handleRequest();