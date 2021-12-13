<?php

$a = 12;
$b = 45;
$c = "Jonas";
$d = "clayton é alto";

if (is_int($a) || is_float($a)){
    $mult1 = $a *2;
    if ($mult1 > 10){
        echo "1 é maior que 10 <br>";
    }else{
        echo "1 é menor que 10 <br>";
    }   
} else {
    echo "1 não é um numero <br>";
}
if (is_int($b) || is_float($b)){
    $mult2 = $b *2;
    if ($mult2 > 10){
        echo "2 é maior que 10 <br>";
    }else{
        echo "2 é menor que 10 <br>";
    }   
} else {
    echo "2 não é um numero <br>";
}
if (is_int($c) || is_float($c)){
    $mult3 = $c *2;
    if ($mult3 > 10){
        echo "3 é maior que 10 <br>";
    }else{
        echo "3 é menor que 10 <br>";
    }   
} else {
    echo "3 não é um numero <br>";
}
if (is_int($d) || is_float($d)){
    $mult4 = $d *2;
    if ($mult4 > 10){
        echo "4 é maior que 10 <br>";
    }else{
        echo "4 é menor que 10 <br>";
    }   
} else {
    echo "4 não é um numero <br>";
}

?>