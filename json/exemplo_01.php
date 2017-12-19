<?<?php 
	
	$pessoas = array();

	array_push($pessoas, array(
		'nome' => "Luciano",
		'idade' => 37
	));

	array_push($pessoas, array(
		'nome' => "Rosana",
		'idade' => 30
	));

	echo json_encode($pessoas);
 ?>