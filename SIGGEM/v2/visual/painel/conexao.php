<?php
	$host 		= "mysql1.000webhost.com";
	$usuario 	= "a6809292_siggem";
	$senha 		= "es1699i14983010";
	$banco 		= "a6809292_siggem";

	$dbcon = new MySQLi("$host","$usuario","$senha","$banco");

	if($dbcon->connect_error){
		echo "Erro ao tentar se conectar com o servidor";
	}
?>