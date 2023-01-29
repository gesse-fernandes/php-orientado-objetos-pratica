<?php
require_once __DIR__  . '/../aula01/Pessoa.php';

$pessoa = new Pessoa();
$pessoa->nome = "Gessé";
var_dump($pessoa->getNome());
?>