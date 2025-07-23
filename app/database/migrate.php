<?php

$pdo = new PDO('mysql:host=localhost;dbname=bravatta', 'root', 'root');

$sql = file_get_contents(__DIR__ . '/migrations/add_role_column_to_admin_table.sql');

$pdo->exec($sql);

echo "Migration completed.\n";