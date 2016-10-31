<?php
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   if(isset($_FILES['fileUpload']))
   {
                    // conexão com o banco de dados
      date_default_timezone_set("Brazil/East"); //Definindo timezone padrão
 
      $ext = strtolower(substr($_FILES['fileUpload']['name'],-4)); //Pegando extensão do arquivo
      $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
      $dir = 'imagens/'; //Diretório para uploads
 
      move_uploaded_file($_FILES['fileUpload']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
      /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////// PEGA OS DADOS DO FORMULARIO ////////////////////////////////////////////////////////////// 
$nomeapp = $_POST['nomeaplicativo'];
$locapp = $_POST['local'];
$imagem = $dir.$new_name ;
$categoria = $_POST['categoria'];
$descricao = $_POST['descricao'];
$data = date("Y.m.d-H.i.s");

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////// ENVIA OS DADOS PARA O BANCO ////////////////////////////////////////////////////////////// 
                        // Insere as informações no banco de dados
include "conexao.php";
$sql = $dbcon->query("INSERT INTO tb_aplicativo (nomeaplicativo,aplicativo,imagem,usuario,categoria,descricao,dataenvio) VALUES ('$nomeapp','$locapp','$imagem','$user','$categoria','$descricao','$data')");
         
                if($sql){
                    echo '<center><h4><label class="control-label">Enviado, Em breve estara na lista !!!</label></h4></center>';
					header('location:/visual/painel/');
                }else{
                    echo '<center><h3><label class="control-danger">OPS !!!  Algo deu Errado, Tente de Novo</label></h3></center>';
                }
   }

?>