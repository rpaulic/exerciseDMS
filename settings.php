<?php

session_start();

// Load the database connection.
require 'connect_db.php';
$db_connection = new DB_Connection('localhost', 'root', '', 'tutorials');
