<?php
   
    include "banco/conexao.php";
    session_start();

    //dados a receber via post
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        //criptografa a senha
        $criptografia = md5($senha);

        if($_POST['btn_acao'] == ""){
            $email = $_SESSION['login'];
            $log = "Saiu do Sistema";
        } else{
            $log = $_POST['btn_acao'];
        }
        //criar o evento
        $evento = $log;
        $ip = $_SERVER["REMOTE_ADDR"];
        $data = date("F j, Y, g:i a");

        //salva o evento no banco de dados
        $dbcon->query("INSERT INTO tb_log(usuario,evento,ip,horario) VALUES('$email','$evento','$ip','$data')");


    if((!isset ($_SESSION['login']) == true)){
        unset($_SESSION['login']);                     
    } else {
        header('location:painel.php');
    }

    if($_POST['btn_acao']=="login"){
            $sql = $dbcon-> query("SELECT * FROM tb_usuario WHERE email='$email' AND senha='$criptografia'");
            
            if(mysqli_num_rows($sql) > 0){
                //inicia a sessão e redireciona para o painel
                $_SESSION['login'] = $email;
                header('location:painel.php');
            } else {
                echo "<h4>E-mail ou Senha invalido</h4>";
            }


    } else if($_POST['btn_acao']=="cadastro"){
        $sql1 = $dbcon->query("SELECT * FROM tb_usuario WHERE email='$email'");

        if(mysqli_num_rows($sql1) > 0){
               echo "<h4>E-mail Já Cadastrado, Tente recuperar Sua Senha</h4>";
        } else {

            $sql2 = $dbcon->query("INSERT INTO tb_usuario(nome,email,senha) VALUES('$nome','$email','$criptografia')");
            if($sql2){
                //inicia a sessão e redireciona para o painel
                $_SESSION['login'] = $email;
                header('location:painel.php');
            } else {
               echo "Não foi possivel Realizar o cadastro !";
            }
        }
    } else if($_POST['btn_acao']=="recuperar"){
        //codigo para recuperação de senha
    }else{
        session_destroy();
        header('location:index.php');
    }

?>