<?php
require_once ("config.php");

//root = new Usuario();
//$root->loadById(4);
//echo $root;

//$lista = Usuario::getList();
//echo json_encode($lista);

//$busca = Usuario::search("u");
//echo json_encode($busca);

//$usuario = new Usuario();
//$usuario->login("joao", "dadada");

//echo $usuario;

//$aluno = new Usuario("Aluno", "#$%&%$");
//$aluno->insert();
//echo $aluno;

$usuario = new Usuario();

$usuario->loadById(8);

$usuario->update("professor", "prof");

echo $usuario;

?>