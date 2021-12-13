<?php

$arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
$x = 0;
$y = count($arr);

while($x < $y){
    if ($arr[$x] == 30 || $arr[$x] == 40){
        $x++;
        continue;
    }
    echo "Imprimindo: $arr[$x] <br>";
    
    $x++;
}

?>