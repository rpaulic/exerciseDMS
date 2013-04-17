<?php

$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'tutorials';

define('DB_DSN', "mysql:host=$dbHost;db=$dbName");
define('DB_USER', $dbUser);
define('DB_PASSWORD', $dbPass);

try {
    $db = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
} catch (PDOException $e) {
    echo '<pre>';
    echo $e->getTraceAsString();
    echo '</pre>';
    exit;
}
