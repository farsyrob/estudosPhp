<?php

$carro = ['cor' => "vermelho",
'preço' => 29000, 
'placa' => 'JID2829', 
'categoria' => 'sedan',
'velocidade' => 220];

echo $carro['cor']."<br>";
echo $carro['preço']."<br>";

$vel = $carro['velocidade'];
$price = $carro['preço'];

echo "O carro custa $price reais, a sua velocidade máxima atingida é de $vel km/h.";
