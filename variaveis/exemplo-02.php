<?php

	$anoNascimento = 1979;

	$nomeCompleto = "Luciano Arruda";

	echo $nomeCompleto;

	unset($nomeCompleto);

	if (isset($nomeCompleto)) {
		echo "$nomeCompleto<br>";
	}

?>