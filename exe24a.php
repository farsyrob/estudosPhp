<?php

$a = "Matheus é grande.";
$b = 15;
$c = true;
$d = 1.5;

if (is_int($a)){
    $w = gettype($a);
    echo $w ."<br>";
} else {
    echo "Não é inteiro <br>";
}
if (is_int($b)){
    $x = gettype($b);
    echo $x ."<br>";
} else {
    echo "Não é inteiro <br>";
}
if (is_int($c)){
    $y = gettype($c);
    echo $y ."<br>";
} else {
    echo "Não é inteiro <br>";
}
if (is_int($d)){
    $z = gettype($d);
    echo $d ."<br>";
} else {
    echo "Não é inteiro <br>";
}


?>