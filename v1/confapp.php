<?php
   			 /*envia o arquivo para o diretorio de armazenamento*/
  			if(isset($_POST['enviar'])){
         		// conexão com o banco de dados
         		 include_once 'banco/conexao.php';
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////// CONFIGURAÇÕES DO APLICATIVO //////////////////////////////////////////////////////////////      
          		// Lista de tipos de arquivos permitidos
          		$tiposPermitidos= array('arquivo/apk');
          		// Tamanho máximo (em bytes)
          		$tamanhoPermitido = 99995 * 99995; // n Kb

          	 // pega do formulario o nome que o usuario coloca
         		 $nome = $_POST['nomeaplicativo'];
         		 // O nome original do arquivo no computador do usuário
         		 $arqName = $_FILES['aplicativo']['name'];
         		 // O tipo mime do arquivo. Um exemplo pode ser "image/gif"
         		 $arqType = $_FILES['aplicativo']['type'];
         		// O tamanho, em bytes, do arquivo
          		$arqSize = $_FILES['aplicativo']['size'];
          		// O nome temporário do arquivo, como foi guardado no servidor
          		$arqTemp = $_FILES['aplicativo']['tmp_name'];
          		// O código de erro associado a este upload de arquivo
         		 $arqError = $_FILES['aplicativo']['error'];

    			if ($arqError == 0) {
                	// Verifica o tipo de arquivo enviado
      				if (array_search($arqType, $tiposPermitidos) === false) {
          				echo 'O tipo de arquivo enviado é inválido!';
        				// Verifica o tamanho do arquivo enviado
          			} else if ($arqSize > $tamanhoPermitido) {
            			echo 'O tamanho do arquivo enviado é maior que o limite!';
            			// Não houveram erros, move o arquivo
        			} else {
          			$pasta = 'arquivos/';
             			// Pega a extensão do arquivo enviado
             			//$extensao = strtolower(end(explode('.', $arqName)));
             			// Define o novo nome do arquivo usando o nome que o usuario escolher
             			$nome = $nome . '.sg';  

             			$loc  = $pasta . $nome;
        			}
      			}    
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////// RECOLHE INFORMAÇÕES ////////////////////////////////////////////////////////////// 
				/*pega os dados do formulario e coloca nas variaveis*/
				$loc	   = $pasta . $nome;
				$nomeapp = $_POST['nomeaplicativo'];
				$nd		   = $_POST['nomedesenvolvedor'];
				$cat	   = $_POST['categoria'];
				$des	   = $_POST['descricao'];

    echo $loc."<br>";
    echo $nomeapp."<br>";
    echo $nd."<br>";
    echo $cat."<br>";
    echo $des."<br>";

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////// ENVIA OS DADOS PARA O BANCO ////////////////////////////////////////////////////////////// 
    			/*if (move_uploaded_file($arqTemp, $pasta . $nome)){
      					// Insere as informações no banco de dados
      				$sql = $dbcon->query("INSERT INTO tb_app (local,nomeAplicativo,nomeDesenvolvedor,categoria,descricao) VALUES ('$loc','$nomeapp','$nd','$cat','$des')");
      
      					echo '<center><h3><b>Enviado</b>, Em breve estará disponivel na lista !!!</h3></center>';
      
   				} else {
       				echo '<center><h3>Ops !!!, algo deu errado !</h3></center>';
    			}*/
 			}
?>