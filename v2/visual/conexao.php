<?php
	$host 		= "LINK CONECTOR";
	$usuario 	= "USUARIO";
	$senha 		= "SENHA";
	$banco 		= "BANCO";

	$dbcon = new MySQLi("$host","$usuario","$senha","$banco");

	if($dbcon->connect_error){
		echo "Erro ao tentar se conectar com o servidor";
	}
?>
