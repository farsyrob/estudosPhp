<?php

$a = 15;
$b = 10;
$c = 9;

$soma = $a + $b - $c;
// 16
$subt = $a - $b + $c;
// 14 
$mult = $a * $c * $b;
// 1350

$x = $soma + $mult;
$y = $subt - $soma;
$z = $soma * $b;

echo $a;
echo "<br>";
echo $b;
echo "<br>";
echo $c;
echo "<br>";
echo $soma;
echo "<br>";
echo $subt;
echo "<br>";
echo $mult;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";
echo $z;
echo "<br>";


?>