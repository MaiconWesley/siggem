<?php
session_start();
$usuario = $_SESSION['login'];
            if((!isset ($_SESSION['login']) == true))
            {
                unset($_SESSION['login']);
                header('location:login.php');
            }
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
                        <p class="hidden-xs navbar-left navbar-text">Usuario logado : <?php echo $usuario; ?>
                        </p>
                    </div>
                </div>
            </div><div class="section"><div class="background-image" style="background-image : url('http://siggem.site88.net/img/bg_pagina.png')"></div><div class="container"><div class="row text-center"><div class="col-md-3"></div><ul class="breadcrumb col-md-6 text-center ">
                                    <li>
                                        <a href="upload.php">Enviar Aplicativo&nbsp;</a>
                                    </li>
                                    <li>
                                        <a href="#">Meus Aplicativos</a>
                                    </li>
                                    <li>
                                        <a href="#">Meus Dados</a>
                                    </li>
                                </ul><div class="col-md-3"></div></div></div></div><div class="section"><div class="background-image" style="background-image : url('http://siggem.site88.net/img/bg_pagina.png')"></div><div class="container"><div class="row"><div class="col-md-12 text-center">
                            
                            <h1 class="text-info" contenteditable="true"><br><div><span style="line-height: 1.1; background-color: transparent;">Bem Vindo ao Painel de Controle</span></div><br><br><br><br><br><br><br>
                            </h1>
                            <br>
                            <br>
                        </div></div></div></div>
</body></html>