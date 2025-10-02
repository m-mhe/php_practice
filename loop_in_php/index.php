<?php

//for loop
echo"for loop:<br>";
for ($i = 0; $i < 7; $i++) {
    echo $i+1 . "<br>";
}
//foreach loop
echo"foreach loop:<br>";
$map = ["Apple"=>"red", "orange"=>"orange", "banana"=>"yellow", ];
$map["Mango"] = "yellowGrinish";

foreach ($map as $fruit => $color) {
    echo "Color of ". strtoupper($fruit) ." is ". strtoupper($color) .".<br>";
}
//while loop
echo"while loop<br>";
$i = 4;
while($i>0){
    echo $i . "<br>";
    $i--;
}
//do while loop
$j = 4;
echo"do while loop<br>";
do{
    echo $j ."<br>";
    $j++;
}while($j<4);