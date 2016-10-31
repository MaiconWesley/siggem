<?php
		// Conexão com o Banco de Dados
	mysql_connect("LINK CONECTOR", "USUARIO", "SENHA") or die (mysql_error ());

	// Seleciona o Banco de Dados
	mysql_select_db("NOME DO BANCO") or die(mysql_error());
?>
