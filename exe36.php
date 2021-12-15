<?php

$arr = [];

for($i = 0; $i <= 30; $i++){
    array_push($arr, $i);
}

//print_r($arr);

function maiorSete($array){
    $array2 = [];

    for($j = 0; $j < count($array); $j++){

        if($array[$j] > 7){
            array_push($array2 , $array[$j]);
        }

    }
    return $array2;
}

$novoArray = maiorSete($arr);

print_r($novoArray);
?>