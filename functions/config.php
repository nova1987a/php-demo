<?php
//Php area is referred from https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php
// DB connection
//define('HOST', 'localhost');
//define('DBUSER', 'egmrdwjs_novatw');
//define('DBPASS', 'schumann!104');
//define('DBNAME', 'egmrdwjs_demo1');

//Enable connection
try {
//    $pdo = new PDO("mysql:host=" . HOST . "; dbname=" . DBNAME, DBUSER, DBPASS);
    $pdo = new PDO("sqlite:/home/w9saka5ulbu0/public_html/site1/dbs/site1.db");
    //Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    exit("Error: Could not connect. " . $e->getMessage());
}
?>
