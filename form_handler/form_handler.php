<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstName = htmlspecialchars($_POST["firstName"]);
    $lastName = htmlspecialchars($_POST["lastName"]);
    $favoritePet = htmlspecialchars($_POST["favoritePet"]);
    if(empty($firstName) || empty($lastName) or empty($favoritePet)){
        header("Location: index.html");
        exit();
    }
    echo"<h>SUBMITTED, your data are $firstName $lastName $favoritePet.</h>";
}else{
    header("Location: index.html");
    exit();
}