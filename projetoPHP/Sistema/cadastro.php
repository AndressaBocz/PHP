<?php
    include "database.php";    
    //Recebendo os dados do formulário
    //e armazenando em variáveis locais
    $nome = $_POST["nome_aluno"];
    $email = $_POST["email_aluno"];
    $celular = $_POST["celular_aluno"];

    echo $nome, $email, $celular;

    $sql = "INSERT INTO alunos (nome, email, celular) 
    VALUES ('$nome', '$email', '$celular');"
?>