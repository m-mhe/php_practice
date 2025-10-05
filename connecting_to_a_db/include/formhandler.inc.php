<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $user_name = $_POST["user_name"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    try {
        require_once "dbh.inc.php";
        $query = "INSERT INTO user_id (user_name, pwd, email) VALUES (?, ?, ?);";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$user_name, $pwd, $email]);
        $stmt = null;
        $pdo = null;
        header("Location: ../index.html");
        exit();
    } catch (PDOException $e) {
        echo "SOME ERROR OCCURED".$e->getMEssage().".";
    }
}else{
    header("Location: ../index.html");
    die("SOME ERROR OCCURED");
}