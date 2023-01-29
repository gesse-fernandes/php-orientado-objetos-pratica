<?php
require_once __DIR__  . '/../aula02/Carro.php';

$carro = new Carro();


var_dump($carro->acelerar());
echo "<hr>";

var_dump($carro->getCor());
echo "<hr>";
var_dump($carro->getPortas());
?>