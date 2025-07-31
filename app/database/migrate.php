<?php

$pdo = new PDO('mysql:host=localhost;dbname=bravatta', 'root', 'root');

$sql = file_get_contents(__DIR__ . '/migrations/change_published_at_column_type.sql');

$pdo->exec($sql);

echo "Migration completed.\n";