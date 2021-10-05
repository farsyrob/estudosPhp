<?php

class Pessoa {

    function falar(){
        echo "E ai galerinha.";
    }

}

$greg = new Pessoa;
$greg -> nome = "Gregório";

echo $greg->nome;
echo "<br>";
echo $greg->falar();