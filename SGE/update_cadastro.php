<?php

    include_once "database.php";

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $celular = $_POST["celular"];
    $id = $_POST['id'];

    $sql = "UPDATE alunos SET nome = '$nome', email = '$email', celular = '$celular' WHERE id = $id;";
            
    if (mysqli_query($conexao, $sql)){
        header("Location: lista.php");
    }else{
        header("Location: 404.php");
    }

?>