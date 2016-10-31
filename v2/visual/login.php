<html><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="css/login.css" rel="stylesheet" type="text/css">
        <title>PORTAL SIGGEM</title>
    </head><body>
        <div class="cover">
            <div class="cover-image" style="background-image : url('imagens/bg_pagina.jpg')"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="col-md-4 hidden-sm hidden-xs"></div>
                        <div class="col-md-4 login">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <a href="/" title="Inicio"><i class="fa fa-3x fa-fw fa-home"></i></a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="imagens/membro.png" class=" col-md-4">
                                        <h3 class="hidden-sm hidden-xs text-left text-muted" contenteditable="false">
                                            <b>Acesso de Membros</b>
                                        </h3>
                                    </div>
                                </div>
					<?php
						session_start();
						if((!isset ($_SESSION['login']) == true)){
							unset($_SESSION['login']);                     
						} else {
						header('location:/visual/painel/index.php');
						}
						if(isset($_POST['btn_acao'])){
							include "gerenciador.php";		
						}
					?>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="form-horizontal text-left" role="form" method="POST">
                                            <div class="form-group text-primary">
                                                <div class="col-sm-2">
                                                    <label for="inputEmail3" class="control-label">Email</label>
                                                </div>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="form-group text-primary">
                                                <div class="col-sm-2">
                                                    <label for="inputPassword3" class="control-label">Senha</label>
                                                </div>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-10 col-sm-offset-2 text-right">
                                                    <button type="submit" class="btn btn-lg btn-success" name="btn_acao" value="login">Entrar</button>
                                                    <a class="btn btn-lg btn-primary col-md-8 text-center" href="cadastro.php">Criar Conta</a>
                                                </div>
												<h2 class="text-center text-primary"></h2>
												<h4 class="text-center text-muted">
													<a href="recuperar.php">Relembrar senha?</a>
												</h4>
                                            </div>
                                        </form>
                                    </div><h5 class="hidden-sm hidden-xs text-center text-primary">
                                            2016 © <a href="https://fb.com/maiconwesley">MWMS</a></h5>
                                    <h2 class="text-center text-primary"></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 hidden-sm hidden-xs"></div>
                        <p></p>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    

</body></html>