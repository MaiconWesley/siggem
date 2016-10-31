    <?php
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   if(isset($_FILES['fileUpload']))
   {
                    // conexão com o banco de dados
                 //include_once 'banco/conexao.php';
      date_default_timezone_set("Brazil/East"); //Definindo timezone padrão
 
      $ext = strtolower(substr($_FILES['fileUpload']['name'],-4)); //Pegando extensão do arquivo
      $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
      $dir = 'uploads/'; //Diretório para uploads
 
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
include "banco/conexao.php";
$sql = $dbcon->query("INSERT INTO tb_aplicativo (nomeaplicativo,aplicativo,imagem,usuario,categoria,descricao,dataenvio) VALUES ('$nomeapp','$locapp','$imagem','$user','$categoria','$descricao','$data')");
         
                if($sql){
                    echo '<center><h4><b>Enviado</b>, Em breve estará disponivel na lista !!!</h4></center>';
                }else{
                    echo '<center><h3>Ops !!!, algo deu errado !</h3></center>';
                }
   }

?>