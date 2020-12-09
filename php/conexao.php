<?php

	// Arquivo de conexão com o banco de dados

	$servidor = "localhost";
	$database = "minhaviagem";
	$usuario = "root";
	$senha = "";

	// Realizando a conexão
	$con = mysqli_connect($servidor, $usuario, $senha, $database);

	// Apresenta erro se não houve conexão 
	if (!$con) {
		die("Não foi possível conectar ao banco de dados." . mysqli_connect_error()); 
	}
?>