<?php

$peso1 = 80.0000001;
$peso2 = 80.00002;
$peso3 = 79.9996;

$lim = 80;

if($peso1 > $lim){
    echo "1 Está pesado demais. <br>";
} else {
    echo "1 Está dentro do limite de peso. <br>";
}
if($peso2 > $lim){
    echo "2 Está pesado demais. <br>";
} else {
    echo "2 Está dentro do limite de peso. <br>";
}
if($peso3 > $lim){
    echo "3 Está pesado demais. <br>";
} else {
    echo "3 Está dentro do limite de peso. <br>";
}

?>