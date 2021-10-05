<?php

$x = 10;
$y =& $x; 

echo $x ."<br>";
echo $y;

$y = 29;
echo "<br>";
echo "Atribuição nova pós ref";
echo '<br>';
echo $x ."<br>";
echo $y;