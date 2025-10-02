<?php

$names = ["Enon", "karim", "Rahim"]; //1D array
echo $names[1]; //Accessing an arry element
unset($names[1]); //Now nothing in index 1
echo "<br>";
echo count( $names );
echo "<br>";
for ($i = 0; $i < count($names); $i++) {
    echo "$names[$i], ";
}    
echo $names[1]; //Accessing an arry element
$names[1] = "GIKA";//Now GIKA in index 1
echo "<br>";
for ($i = 0; $i < count($names); $i++) {
    echo "$names[$i], ";
}    
echo "<br>";
echo $names[1]; //Accessing an arry element
echo "<br>";
$names[] = "This will go at last index";
echo "<br>";
for ($i = 0; $i < count($names); $i++) {
    echo "$names[$i], ";
}    
echo count($names);
array_splice($names, 0, 2);
echo "<br>";
for ($i = 0; $i < count($names); $i++) {
    echo "$names[$i], ";
}    
echo "<br>";
echo count($names);
echo "<br>";
echo $names[0];
echo "<br>";
echo $names[1];
$names = ["Enon", "karim", "Rahim", "Gaika"]; //1D array
array_splice($names, 0, 2);
echo "<br>";
echo "<br>";
echo $names[0];
echo "<br>";
echo $names[1];
$test = ["sd", "kd", "kf"];
$names = ["Enon", "karim", "Rahim", "Gaika"]; //1D array
echo "<br>";
echo count($names);
array_splice($names, 2, 0, $test);
echo "<br>";
echo count($names);
echo "<br>";
for ($i = 0; $i < count($names); $i++) {
    echo "$names[$i], ";
}    
$kindaMap = ["name" => "Emon", "id" => 242001322, "location" => "Chittagong"];
echo "<br>";
echo $kindaMap["id"];
echo "<br>";
echo $kindaMap["location"];
echo "<br>";
$multi = [[6, 4, 8, "if"],[6, 2, 5, 1, "lol", 47],[9, 3, 4, 1,"it",0]]; //Multi dimensional array
echo $multi[1][4];
array_splice($names, 4, 0, $multi[1]);
echo "<br>";
echo count($names);
echo "<br>";
for ($i = 0; $i < count($names); $i++) {
    echo "$names[$i], ";
}    
echo "<br>";
array_splice($names, 2, 3);
for ($i = 0; $i < count($names); $i++) {
    echo "$names[$i], ";
}  
