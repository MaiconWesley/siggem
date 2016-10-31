<?php
session_start();
$user = $_SESSION['login'];
            if((!isset ($_SESSION['login']) == true))
            {
                unset($_SESSION['login']);
                header('location:login.php');
            }     
//////////////////////////////////////////////////////////////
/**/ // conexao com o banco
/**/ include "banco/conecta.php";
/**/ // string de select ao banco para exibir as categorias
/**/ $strSQL = "SELECT * FROM tb_categoria";
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
            <title>SISTEMA WEB SIGGEM</title>
        </head><body>
            <div class="navbar navbar-default navbar-inverse navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="autenticar.php">sair</a>
                            </li>
                        </ul>
                        <p class="hidden-xs navbar-left navbar-text">Usuario logado :
                            <?php echo $user; ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="background-image" style="background-image : url('http://siggem.site88.net/img/bg_pagina.png')"></div>
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-3"></div>
                        <ul class="breadcrumb col-md-6 text-center ">
                            <li>
                                <a href="upload.php">Enviar Aplicativo&nbsp;</a>
                            </li>
                            <li>
                                <a href="#">Meus Aplicativos</a>
                            </li>
                            <li>
                                <a href="#">Meus Dados</a>
                            </li>
                        </ul>
                        <div class="col-md-3"></div>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="background-image" style="background-image : url('http://siggem.site88.net/img/bg_pagina.png')"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-center text-info">
                                <div>
                                <?php include "subirapp.php";?>
                                    <span style="line-height: 1.1; background-color: transparent;">Preencha o formulario para cadastro de game</span>
                                </div>
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <form role="form" class="text-left" method="post" enctype="multipart/form-data">
                                
                                <div class="form-group has-success">
                                    <label class="control-label">Nome Aplicativo</label>
                                    <input class="form-control" name="nomeaplicativo"type="text" placeholder="como se chama seu app">
                                </div><div class="form-group has-success">
                                    <label class="control-label">Link Aplicativo</label>
                                    <input class="form-control" name="local"type="text" placeholder="onde seu app esta hospedado?">
                                </div>

                                <div class="form-group has-success">
                                    <label class="control-label">Escolha uma imagem</label>
                                    <input class="form-control" type="file" name="fileUpload">
                                </div>


                                <div class="form-group has-success">
                                    <label class="control-label" >Categoria</label>
                                    <select class="form-control" name="categoria">
                                        <?php
                                            while($row = mysql_fetch_array($rs)) {
                                                echo "<option>". $row['categoria'] ."</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group has-success">
                                    <label class="control-label">Descrição</label>
                                    <textarea class="form-control" name="descricao"></textarea>
                                </div>
                                
                                
                            <button type="submit" class="btn btn-success" name="enviar">Enviar</button></form>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        
    
    </body></html>