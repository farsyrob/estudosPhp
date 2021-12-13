<?php

$sim = [1 , 2, "joao", "altura", true, false, 18.7, 15, "idade", "endereço", 99];
$x = count($sim);
$y = 0;

while($y < $x){
    if(is_string($sim[$y])){
        echo $sim[$y] ."<br>";
    }
    $y++;
}

?>