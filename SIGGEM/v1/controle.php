<?php
// comandos para pesquisas 
	$p 		= $_POST['pesq'];
	$cat 	= $_GET['utilitarios'];

	if($_POST['pesquisar'] == "pesquisar"){
		$strSQL = "SELECT * FROM tb_aplicativo WHERE nomeaplicativo like %$p%";
	} else if($cat == "todos"){
		$strSQL = "SELECT * FROM tb_aplicativo";
	} else if($cat == "jogos"){
		$strSQL = "SELECT * FROM tb_aplicativo WHERE categoria='jogos'";
	} else if($cat == "utilitarios"){
		$strSQL = "SELECT * FROM tb_aplicativo WHERE categoria='utilitarios'";
	} else {
		$strSQL = "SELECT * FROM tb_aplicativo";
	}
?>