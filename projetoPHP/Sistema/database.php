<?php
    //CONTANTES PARA CONEXÃO COM O BANCO
    define('DBSERVER', 'localhost');
    define('DBUSER', 'root');
    define('DBPASSWORD', '');
    define('DBNAME','escolar');
    //Variável conexão recebe função para conectar com o banco
    $conexao = mysqli_connect(DBSERVER, DBUSER, DBPASSWORD, DBNAME);

    // //Variável conexão recebe os valores diretos
    // $conexao = mysqli_connect("localhost", "root", "", "escolar");    
    
    // $serverhost = "localhost";
    // $serveruser = "root";
    // $serverpassword = "";
    // $databasename = "escolar";
    
    // $conexao = mysqli_connect($serverhost, $serveruser, $serverpassword, $databasename);
?>