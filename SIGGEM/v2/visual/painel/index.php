<?php
session_start();
//$usuario = $_SESSION['login'];
            if((!isset ($_SESSION['login']) == true))
            {
                unset($_SESSION['login']);
                header('location:/visual/login.php');
            }
?>
<html><head></head><body data-spy="scroll">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="opcao.css" rel="stylesheet" type="text/css">
    <title>SISTEMA WEB SIGGEM</title>
    <div class="cover">
      <div class="cover-image" style="background-image : url('imagens/bg_pagina.png')"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <a href="/" title="Inicio"><i class="fa fa-4x fa-home"></i></a>
            <a href="sair.php" title="SAIR DO SISTEMA"><i class="fa fa-4x fa-sign-out"></i></a>
            <div class="section">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <h2 class="text-center text-info">Painel de Controle</h2>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <a href="novo.php" title="EMVIAR APLICATIVO"><img src="imagens/novoaplicativo.png" class="center-block img-circle img-responsive">
                    <h3 class="text-center">Novo Game</h3></a>
                  </div>
                  <div class="col-md-4">
                    <img src="imagens/meusaplicativos.png" class="center-block img-circle img-responsive">
                    <h3 class="text-center">Meus Games</h3>
                  </div>
                  <div class="col-md-4">
                    <img src="imagens/meusdados.jpg" class="center-block img-circle img-responsive">
                    <h3 class="text-center">Meus Dados</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  

</body></html>