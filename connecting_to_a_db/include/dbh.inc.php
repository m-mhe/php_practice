<?php

$dsn = "mysql:host=localhost;dbname=first_database;";
$dbun = "mmhe";
$dbp = "password";

try {
    $pdo = new PDO($dsn, $dbun, $dbp);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "ERROR OCCURED: ". $e->getMessage();
}