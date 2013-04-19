<?php


class DB_Connection {
    
    function __construct($dbHost, $dbName, $dbUser, $dbPass) {
        define('DB_DSN', "mysql:host=$dbHost;db=$dbName");
        define('DB_USER', $dbUser);
        define('DB_PASSWORD', $dbPass);
    }
    
    private function db_con() {
        try {
            $db = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
        } catch (PDOException $e) {
            echo '<pre>';
            echo $e->getTraceAsString();
            echo '</pre>';
            exit;
        }
    }
}

$connection = new DB_Connection('localhost', 'root', '', 'tutorials');
