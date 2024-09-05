<?php
//Php area is referred from https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php
// DB connection
//define('HOST', 'localhost');
//define('DBUSER', 'novatw');
//define('DBPASS', 'password');
//define('DBNAME', 'demo1');
define('DB_PATH', ' $_SERVER['DOCUMENT_ROOT'] . '/dbs/site1.db');
//Enable connection
try {
//    $pdo = new PDO("mysql:host=" . HOST . "; dbname=" . DBNAME, DBUSER, DBPASS);
    $pdo = new PDO("sqlite:" . DB_PATH");
    //Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    exit("Error: Could not connect. " . $e->getMessage());
}
?>
