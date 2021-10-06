<?php

//criar um array associativo com as características de uma pessoa;
//criar uma condicional if se a pessoa for maior de idade e imprimir caso seja;

$p = ['nome' => 'Greg',
'genero' => 'homem',
'idade' => '22',
'profissao' => 'estudante',
'hobbie' => 'programação',
'bebe' => true,
'fuma' => false,
];

$id = $p['idade'];
$name = $p['nome'];

if ($id >= 18) {
    echo "O $name é maior de idade.";
}else{
    echo "O $name é menor de idade.";
}