<?php

session_start();

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

require_once __DIR__ . '/../app/core/Router.php';

$controllers = ['AdminController', 'NewsController', 'EmailController'];

foreach($controllers as $controller) {
    require_once __DIR__ . "/../app/controllers/{$controller}.php";
}

$dbHost = $_ENV['DB_HOST'] ?? 'localhost';
$dbPort = $_ENV['DB_PORT'] ?? '3306';
$dbName = $_ENV['DB_NAME'] ?? 'bravatta';
$dbUser = $_ENV['DB_USER'] ?? 'root';
$dbPass = $_ENV['DB_PASS'] ?? 'root';

$pdoOptions = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
];

// Enable SSL for providers that require TLS (e.g., Planetscale)
if (!empty($_ENV['DB_SSL_MODE'])) {
    $pdoOptions[PDO::MYSQL_ATTR_SSL_CA] = '/etc/ssl/certs/ca-certificates.crt';
    $pdoOptions[PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT] = false;
}

$pdo = new PDO("mysql:host={$dbHost};port={$dbPort};dbname={$dbName};charset=utf8mb4", $dbUser, $dbPass, $pdoOptions);
$adminController = new AdminController($pdo);
$newsController = new NewsController($pdo);
$emailController = new EmailController();

$router = new Router($adminController, $newsController, $emailController);
$router->handleRequest();