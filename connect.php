<?php
define('sql_server', 'sql1.njit.edu');
define('sql_username', 'ers34');
define('sql_pass', '!Sunflower99');
define('db_name', 'ers34');

/* Attempt to connect to MySQL database */
try {
    $conn = new PDO("mysql:host=" . sql_server . ";dbname=" . db_name, sql_username, sql_passl);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>