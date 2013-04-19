<?php

// Start the session.
session_start();

// Load the database connection.
require 'objects/connect_db.php';
$db_connection = new DB_Connection('localhost', 'root', '', 'tutorials');
