<?php

$dsn = "mysql:host=localhost;dbname=acadence;";
$uname = "mmhe";
$password = "password";

try {
    $pdo = new PDO($dsn, $uname, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}