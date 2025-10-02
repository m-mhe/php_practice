<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $heading = "Variable & Datatypes"; //This is a String type variable
    echo"<h1>$heading</h1>";
    $num = 45; //This is a integer type variable
    $numFloat = 14.556; //This is a float type variable
    echo $num-$numFloat;
    $isTrue = true; //This is bolean type variable
    ?>
    <?php if($isTrue){ ?>
        <p>Truee</p>
    <?php } else{?>
        <p>Falsee</p>
    <?php }
    $a = array(4, 7, 88, 74, 7);
    echo $a[4];
    $list = ["lol", "pol"]; // same as array("lol", "pol")
    echo "$list[0]";
    ?>


</body>
</html>