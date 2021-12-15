<?php

function itens(){
    $arr = ["Maçã" , "Banana", "Frango", "Pão", "Arroz", "Leite sem lactose"];
    
    foreach($arr as $i){
        echo "$i, ";
    }
    return $arr;
}
itens();
?>