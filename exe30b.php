<?php

$arr = [];

for($i = 1; $i <= 10; $i++){
    array_push($arr, $i);
    echo "Número $i entrando no array <br>";
}
print_r($arr);


?>