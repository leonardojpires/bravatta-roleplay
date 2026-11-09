<?php

require_once __DIR__ . '/../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../..');
$dotenv->load();

require_once __DIR__ . '/../core/Database.php';

$pdo = Database::connect();

$sql = file_get_contents(__DIR__ . '/migrations/change_published_at_column_type.sql');

$pdo->exec($sql);

echo "Migration completed.\n";