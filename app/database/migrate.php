<?php

$pdo = new PDO('mysql:host=localhost;dbname=bravatta', 'root', 'root');

$sql = file_get_contents(__DIR__ . '/migrations/create_news_table.sql');

$pdo->exec($sql);

echo "Migration completed.\n";