<?php

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $user_name = $_POST["user_name"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    try {
        require_once "dbh.inc.php";
        $query = "INSERT INTO user_id (user_name, pwd, email) VALUES (?, ?, ?);";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$user_name, $pwd, $email]);
        $pdo = null;
        $stmt = null;
        header("Location: ../index.html");
        exit();
    } catch (PDOException $e) {
        die("QUERY FAILED: ". $e->getMessage());
    }
}else{
    header("Location: ../index.html");
    die();
}