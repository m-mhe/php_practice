<?php

$dsn = "mysql:host=localhost;dbname=first_database;";
$uname = "mmhe";
$password = "password";

try {
    $pdo = new PDO($dsn, $uname, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "ERROR:". $e->getMessage()."!";
}