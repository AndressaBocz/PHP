<?php

    include_once "database.php";
    session_start();
    
    $login = $_POST["login_user"];
    $password = $_POST["password_user"];

    $sql= "SELECT * FROM login_sge WHERE login_user='$login' AND  password_user='$password' ";

    $resultado = mysqli_query($conexao, $sql);
    $dados = mysqli_fetch_assoc($resultado);

    if($dados['login_user']== $login & $dados["password_user"]==$password){
        $usuario = array("login"=>$dados['login_user'], "password"=>$dados['password_user'], "perfil"=>$dados ['profile_user']);
        
        $_SESSION['usuario'] = $usuario;
        header('Location: paginaInicial.php');
    } else {
        $_SESSION['mensagem'] = "Login ou senha inválidos";

        header("Location: index.php");
    }
?>