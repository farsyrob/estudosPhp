<?php

$arr = [];

for ($i = 10; $i <= 20; $i++){
    array_push($arr, $i);
    if ($i % 2 != 0){
        echo "Imprimindo $i e é impar. <br>";
    }
}

?>