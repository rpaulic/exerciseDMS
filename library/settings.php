<?php

session_start();

define('APPLICATION_PATH', realpath('../'));
set_include_path(get_include_path() . PATH_SEPARATOR . APPLICATION_PATH);

// Load the database connection.
require 'connect_db.php';

?>
