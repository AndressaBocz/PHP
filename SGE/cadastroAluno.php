<?php

    include_once "database.php";

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $celular = $_POST["celular"];

    $sql = "INSERT INTO alunos ( nome, email, celular) VALUES ('$nome', '$email', '$celular');";

    if (mysqli_query($conexao, $sql)){
        header("Location: lista.php");
    }else{
        header("Location: 404.php");
    }

?>