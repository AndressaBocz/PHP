<?php 

    //inclusão do arquivo de conexão com o banco de dados
    include "database.php";

    //recuperar as informações do formulário
    $login_user = $_POST["login_user"];
    $password_user = $_POST["password_user"];
    $profile_user = $_POST["profile_user"];

    //String SQL
    $sql = "INSERT INTO login_sge (login_user, password_user, profile_user) 
    VALUES ('$login_user', '$password_user', '$profile_user')";

    //Executar a conexão e realiza o cadastro
    if(mysqli_query($conexao, $sql)){
        header("Location: index.php");
    }else{
        header("Location: 404.php");
    }

?>