<?php
    //incluindo arquivo do banco de dados
    include "database.php";
    //Recebendo os dados do formulário
    //e armazenando em variaveis locais
    $nome = $_POST["nome_aluno"];
    $email = $_POST ["email_aluno"];
    $celular= $_POST ["celular_aluno"];

    $sql =