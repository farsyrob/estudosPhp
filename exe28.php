<?php

$x = 4;
$y = 30;
while ($x < $y){
    echo "Loop $x. <br>";
    if($x === 24){
        echo "Parando loop.";
        break;
    }
    $x += 2;
}

?>