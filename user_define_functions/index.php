<?php
declare(strict_types= 1);

function add(int $a, int $b){
    return ($a + $b);
}

$a = 58;
$b = 2;

function increment(){
    $a = 0;
    $a++;
    return $a;
}

function incrementStatics(){
    static $a = 0;
    $a++;
    return $a;
}

function globalReturn(){
    global $a;
    return $a;
}

echo add($a,$b);
echo "<br>";
echo increment();
echo "<br>";
echo increment();
echo "<br>";
echo incrementStatics();
echo "<br>";
echo incrementStatics();
echo "<br>";
echo incrementStatics();
echo "<br>";
echo globalReturn();