<?php
    //Inclusão do arquivo de conexão com o banco de dados
    include_once "database.php";
    //Recuperar o id enviado via Get
    $id= $_GET['id'];
    //Construir a string em SQL
    $sql = "DELETE FROM alunos WHERE id = $id";

    if (mysqli_query($conexao, $sql))
    {
        header("Location:lista.php");
    }
    else
    {
        header("Location: 404.php");
    }
?>