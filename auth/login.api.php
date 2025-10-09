<?php

include "Db_connection.php";
include "Login_query.php";

header("Content-Type: application/json");
if($_SERVER['REQUEST_METHOD']=="POST"){
    $input = json_decode(file_get_contents("php://input"),true);
    $login = new Login_query($input["student_id"], $input["pwd"]);
    $result = $login->login();
    if($result != null){
        http_response_code(200);
        echo json_encode($result);
        exit();
    }else{
        http_response_code(401);
        echo json_encode(["Unauthorized"=> "No such user"]);
        exit();
    }
}else{
    http_response_code(403);
    echo "Forbidden 403";
    exit();
}