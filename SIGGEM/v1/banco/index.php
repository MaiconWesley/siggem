<?php
		session_start();
        session_destroy();
        unset($_SESSION['login']);
        header('location:http://siggem.site88.net/');
?>