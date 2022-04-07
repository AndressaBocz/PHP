<?php
    //inclusão do arquivo com conexão com o banco de dados
    include "database.php";

    //recuperar as informações do formulário
    $login_user = $_POST["login_user"];
    $password_user = $_POST["password_user"];
    $profile_user = $_POST["profile_user"];


    //string SQL
    $sql = "INSERT INTO login_sge (login, password, profile) VALUES ('$login_user', '$password_user', '$profile_user')";

    //executar a conexão e realizar o cadastro
    if(mysqli_query($conexao, $sql)){
        header("location: index.php");
    }

    else {
        header("location: 404.php");
    }









?>