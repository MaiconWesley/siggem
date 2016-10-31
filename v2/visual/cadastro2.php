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
						<li>
							<a href="/visual/">Inicio</a>
						</li>
						<li>
							<a href="/visual/login.php">Fazer Login</a>
						</li>
						<li class="active">
							<a href="/visual/cadastro.php">Criar Conta</a>
						</li>
					</ul>
                </div>
            </div>
        </div>
        <div class="cover">
            <div class="cover-image" style="background-image : url('imagens/bg_pagina.png')"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="text-center text-info">Entre com seus Dados
                            <br>
                        </h2>
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
                        <div class="container">
                            <div class="row text-left">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <form class="form-horizontal" role="form" method="post">
                                        <div class="form-group has-success">
                                            <div class="col-sm-2">
                                                <label for="inputEmail3" class="control-label">Email</label>
                                            </div>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group has-success">
                                            <div class="col-sm-2">
                                                <label for="inputPassword3" class="control-label">Nome</label>
                                            </div>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nome" name="nome" placeholder="nome">
                                            </div>
                                        </div>
                                        <div class="form-group has-success">
                                            <div class="col-sm-2">
                                                <label class="control-label">Senha</label>
                                            </div>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite uma Senha">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10 col-md-1">
                                                <button type="submit" class="btn btn-info" name="btn_acao" value="cadastro">Cadastrar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                        </div>
                        <br>
                        <br>
                    </div><h5 class="text-center text-danger">Esqueceu sua Senha ? &nbsp; &nbsp; &nbsp;
                                        <a href="#">CLIQUE AQUI</a>
                                    </h5>
                </div>
            </div>
        </div>
    <footer class="section section-primary">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h1>SIGGEM</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
              <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
              <br>Ut enim ad minim veniam, quis nostrud</p>
          </div>
          <div class="col-sm-6">
            <p class="text-info text-right">
              <br>
              <br>
            </p>       
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h4 class="text-center"><br>2016 © MwmS - Todos Direitos Reservados&nbsp;</h4>
          </div>
        </div>
      </div>
    </footer>

</body></html>