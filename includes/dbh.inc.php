<?php
$dsn = 'mysql:host=localhost; dbname=myweb_db';
$dbusername = "root";
$dbpassword = "";

try {
    //code...
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "connection failed ".$e->getMessage();
}