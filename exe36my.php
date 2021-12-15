<?php

function exercicio(){
    $arr = [];
    $x = 10;
    for($i = 0; $i <= $x; $i++){
        array_push($arr, $i);
        $array2 = [];
        foreach($arr as $i){
            if ($i >= 7){
            array_push($array2 , $i);
            }
        }
    }
    return $array2;
}

$y = exercicio();
print_r($y);
?>