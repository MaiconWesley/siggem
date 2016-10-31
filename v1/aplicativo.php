<?php
//////////////////////////////////////////////////////////////
/**/ // conexao com o banco
/**/ include "banco/conecta.php";
/**/ //include "controle.php"; 
/**/ $strSQL = "SELECT * FROM tb_aplicativo";
/**/ $rs = mysql_query($strSQL);
/**/ $row = mysql_fetch_array($rs);
///////////////////////////////////////////////////////////////
?>
<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
  </head><body>
    <div class="section">
      <div class="background-image" style="background-image : url('http://siggem.site88.net/img/bg_escolha.jpg')"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class="text-center">Faça sua Busca</h3>
          </div>
          <div class="col-md-offset-3 col-md-6">
            <form role="form" method="post">
              <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" name="pesq" placeholder="Ex: Jogos de Lógica">    
                  <span class="input-group-btn">
                    <input class="btn btn-success" type="submit" name="pesquisar" value="pesquisar">
                  </span>
                </div>
              </div>
            </form>
            <form role="form" method="post">
            <div class="btn-group btn-group-justified">
              <a class="btn btn-block btn-info" type="submit" name="todos"        value="todos"       href="aplicativo.php?categoria=todos">Todos Apps</a>
              <a class="btn btn-danger"         type="submit" name="jogos"        value="jogos"       href="aplicativo.php?categoria=jogos">Jogos</a>
              <a class="btn btn-warning"        type="submit" name="utilitarios"  value="utilitarios" href="aplicativo.php?categoria=utilitarios">Utilitarios</a>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="background-image" style="background-image : url('http://siggem.site88.net/img/bg_escolha.jpg')"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <?php
                while($row = mysql_fetch_array($rs)) {
          ?>
            <table width="100%" class="img-thumbnail">
              <tbody>
              
                <tr class="info">
                  <td class="col-md-1">
                  <?php echo "<img width='70px' height='70px' src='" . $row['imagem'] . "' class='img-circle'>"; ?>       
                  </td>
                  <td class="col-md-5 hidden-lg hidden-md hidden-sm text-left"><?php echo $row['nomeaplicativo']; ?></td>
                  <td class="col-md-10 hidden-xs text-left" contenteditable="true">
                    <?php
                      echo "<b>".$row['nomeaplicativo']."</b><br>".$row['descricao']; 
                    ?>
                    </td>
                    <p align="right">
                  <td class="col-md-5 text-left">
                  
                  <?php echo "<a class='btn btn-success' href='escolhido.php?id=" . $row['id'] . "'>Ver +</a>"; ?>
                  
                  </td>
                  </p>
                </tr>
                <tr>
                  <td>
                    <center></center>
                  </td>
                </tr> 
              </tbody>
            </table>
            <?php
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  

</body></html>