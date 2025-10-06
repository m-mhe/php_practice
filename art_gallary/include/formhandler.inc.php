<?php

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $user_name = $_POST["user_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    if(!empty($first_name) || 
    !empty($last_name) || 
    !empty($user_name) || 
    !empty($email) || 
    !empty($password)) {
        try {
            require_once "dbh.inc.php";
            $encoded_password = password_hash($password, PASSWORD_DEFAULT, ['cost'=>12]);
            $query = "INSERT INTO user_profile (f_name, l_name, u_name, email, pwd) VALUES (?, ?, ?, ?, ?)";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$first_name, $last_name, $user_name, $email, $encoded_password]);
            header("Location:../join_now.html");
        } catch (PDOException $e) {
            $list = explode(":", $e->getMessage());
            if($list[0] == "SQLSTATE[23000]") {
                echo"<h1>USER NAME ALREADY EXIST! CHOSE ANOTHER ONE.</h1>";
            }else{
                echo "ERROR OCCURED!!!!!!! ". $e->getMessage();
            }
            die();
        }
    }else{
        header("Location:../join_now.html");
        die();
    }
}else{
        header("Location:../join_now.html");
        die();
}