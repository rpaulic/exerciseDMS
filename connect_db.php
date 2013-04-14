<?php

$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'tutorials';

try {
    $db = new PDO("mysql:host=$dbHost;db=$dbName", $dbUser, $dbPass);
} catch (PDOException $e) {
    echo '<pre>';
    echo $e->getTraceAsString();
    echo '</pre>';
    exit;
}
