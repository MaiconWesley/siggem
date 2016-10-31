<?php
	session_start();
	session_destroy();
?>
<html><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
        <title>PORTAL SIGGEM</title>
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
                        <li class="active">
                            <a href="/visual/">Inicio</a>
                        </li>
                        <li>
                            <a href="/visual/login.php">Fazer Login</a>
                        </li>
                        <li>
                            <a href="/visual/cadastro.php">Criar Conta</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="cover">
            <div class="cover-image" style="background-image : url('imagens/bg_corpo_pagina.jpg')"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1></h1>
                        <br>
                        <br>
                        <a class="btn btn-lg btn-success navbar-btn" href="https://drive.google.com/file/d/0B2-jNdp4gW7tOS1RSk0zQ0w4eGc/view?usp=drive_web">BAIXE AGORA O APP &nbsp;<i class="fa fa-download fa-flip-horizontal fa-fw fa-lg"></i></a>
                        <a class="btn btn-lg btn-primary hidden-sm hidden-xs" href="login.php">ENVIAR APLICATIVO&nbsp;<i class="fa fa-cloud-upload fa-fw fa-lg"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden-sm hidden-xs section">
            <div class="background-image" style="background-image : url('/visual/imagens/bg_equipe.jpg')"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center">Nossa Equipe</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <img src="/equipe/hadassa_ramos.jpg" class="img-circle img-responsive">
                    </div>
                    <div class="col-md-4">
                        <h3 class="text-left">Hadassa Ramos</h3>
                        <p class="text-left">Estudante de Tecnico em Manutenção e Suporte em Informatica &nbsp;IFSP
                            / itapetininga.
                            <br>Desenvolvedora de Games&nbsp;</p>
                    </div>
                    <div class="col-md-2">
                        <img src="/equipe/gustavo_oliveira.jpg" class="img-circle img-responsive">
                    </div>
                    <div class="col-md-4">
                        <h3 class="text-left">Gustavo Oliveira</h3>
                        <p class="text-left">Estudante de Tecnico em Manutenção e Suporte em Informatica &nbsp;IFSP
                            / itapetininga.
                            <br>Desenvolvedor de Games.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <img src="/equipe/maicon_macedo.jpg" class="img-circle img-responsive">
                    </div>
                    <div class="col-md-4">
                        <h3 class="text-left">Maicon Macedo</h3>
                        <p class="text-left">Estudante de Tecnico em Manutenção e Suporte em Informatica &nbsp;IFSP
                            / itapetininga.
                            <br>Desenvolvedor de Aplicações - movel e Desktop</p>
                    </div>
                    <div class="col-md-2">
                        <img src="/equipe/raphael_oliveira.jpg" class="img-circle img-responsive">
                    </div>
                    <div class="col-md-4 text-center">
                        <h3 class="text-left">Raphael Oliveira</h3>
                        <p class="text-left">Estudante de Tecnico em Manutenção e Suporte em Informatica &nbsp;IFSP
                            / itapetininga.
                            <br>Desenvolvedor</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-center">
                            <br>2016 ©
                            <a href="https://www.facebook.com/maiconwesley">MwmS</a>- Todos Direitos Reservados&nbsp;</h4>
                    </div>
                </div>
            </div>
        </div>
        <div id="rodape" bgcolor="#0c0"></div>
    

</body></html>