<?php
require_once 'connect_db.php';

// UPOZORENJE: Dvostruka provjera konekcije na bazu:
try {
    $mysql_conn = new PDO("mysql:mysql_host=$mysql_host;mysql_db=$mysql_db", $mysql_user, $mysql_pass);
    // echo "Connected to $mysql_db at $mysql_host successfully.";
} catch (PDOException $pe) {
    die($conn_error . $pe->getMessage());
}

?>

