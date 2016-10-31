<?php
//////////////////////////////////////////////////////////////
/**/ // conexao com o banco
/**/ include "banco/conecta.php";
/**/ // string de select ao banco para exibir as categorias
/**/ $id = $_GET['id'];
/**/ $strSQL = "SELECT * FROM tb_aplicativo WHERE id=". $id;
/**/ $rs = mysql_query($strSQL);
/**/ $row = mysql_fetch_array($rs);
/**/
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
                <div class="col-md-12">
                   <a href="aplicativo.php" class="btn btn-block btn-lg btn-primary">Inicio</a>
                </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center">Faça sua Busca</h3>
                    </div>
                    <div class="col-md-offset-3 col-md-6">
                        <form role="form">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Ex: Biologia">
                                    <span class="input-group-btn">
                                        <a class="btn btn-success" type="submit" name="pesquisa">Pesquisar</a>
                                    </span>
                                </div>
                            </div>
                        </form>
                        <div class="btn-group btn-group-justified">
                            <a class="btn btn-block btn-info" type="submit" name="todos">Todos Apps</a>
                            <a class="btn btn-danger" type="submit" name="jogos">Jogos</a>
                            <a class="btn btn-warning" type="submit" name="utilitarios">Utilitarios</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="background-image" style="background-image : url('http://siggem.site88.net/img/bg_escolha.jpg')"></div>
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12 text-center">
                    <?php echo "<img src='" . $row['imagem'] . "' class='center-block img-responsive img-thumbnail'>";?>
                    </div>
                    
                    
                </div><div class="row"><div class="col-md-12">
                        <h1 class="text-center"><?php echo $row['nomeaplicativo']; ?></h1>
                        <h3><b>Descrição</b></h3>
                        <p class="lead text-left"><?php echo $row['descricao']; ?></p>
                        <br><br>
                        <h3><b>Dados do desenvoldevor</b></h3>
                        <?php
                            echo "<p class='lead text-left'>Email : " . $row['usuario'] ."</p>";
                        ?>
                    </div></div><div class="row"><div class="col-md-12"><a <?php echo "href='". $row['aplicativo'] ."'"?>class="btn btn-block btn-lg btn-primary">Baixar</a></div></div>
            </div>
        </div>
    

</body></html>
