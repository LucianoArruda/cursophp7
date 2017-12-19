<?php 

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Luciano Arruda");
$cad->setEmail("luciano.tecinfo@gmail.com");
$cad->setSenha("dadada");


$cad->registrarVenda();

 ?>