<?php
    //CONSTANTES PARA CONEXÃO COM O BANCO DE DADOS 
    define('DBSERVER','localhost');
    define('DBUSER','root');
    define('DBPASSWORD','');
    define('DBNAME','escola'); 
        
    //Variavel conexão recebe função para conectar com o banco
    $conexao = mysqli_connect(DBSERVER, DBUSER, DBPASSWORD, DBNAME);
    
    // Variavel conexão recebe os diretos
    //$conexao = mysqli_connect( "localhost", "DBUSER", "", "DBNAME");

    //$serverhost = "localhost";
    //$serveruser = "root";
    //$serverpassword = "";
    //$databasename = "escola";

    //mysqli_connect($serverhost, $serverpassword, $serveruser, $databasename);
?>
