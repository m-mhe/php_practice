<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $age = htmlspecialchars($_POST["age"]);
    $sex = htmlspecialchars($_POST["sex"]);
    // if statement
    if(empty($age)){
        header("Location: index.html");
        exit;
    }else{
        if($age < 18){
            echo "Under age!";
        }else if($age < 30){
            echo "Young";
        }else if($age < 40){
            echo "Mid age";
        }else if($age < 60){
            echo "Late mid age";
        }else if($age < 100){
            echo "Old";
        }else{
            echo "You should be dead!";
        }
        echo"<br>";
        switch($sex){
            case "male":
                echo "You are a SIGMA!";
                break;
            case "female":
                echo "You should be in kitchen";
                break;
            default:
                echo "Autobots Assemble!";
        }
        $message = match($sex){
            "transformer" => 
            " Your parent should have been a transformer like you.",
            default =>" You are ok!",
        };
        echo $message;
    }
}