<?php 
	
$json = '[{"nome":"Luciano","idade":37},{"nome":"Rosana","idade":30}]';

$data = json_decode($json, true);

var_dump($data);

 ?>