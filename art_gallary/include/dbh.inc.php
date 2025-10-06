<?php

$dsn = "mysql:host=localhost;dbname=art_gallery;";
$uname = "mmhe";
$password = "password";

try {
    $pdo = new PDO($dsn, $uname, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "ERROR OCCURED!!!!!!! ". $e->getMessage();
}