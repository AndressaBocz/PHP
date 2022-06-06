<?php  
    //constantes para conexão com o banco de dados
    define('DBSERVIDOR', 'localhost');
    define('DBUSER', 'root');
    define('DBPASSWORD', '');
    define('DBNAME', 'escola');
    //Variavel conexão recebe função para conectar com o banco

    $conexao = mysqli_connect(DBSERVIDOR, DBUSER, DBPASSWORD, DBNAME);
    
    // //Variável conexão recebe os valores diretos
    // $conexao = mysqli_connect("localhost", "root", "", "escolar");    
    
    // $serverhost = "localhost";
    // $serveruser = "root";
    // $serverpassword = "";
    // $databasename = "escolar";
    
    // $conexao = mysqli_connect($serverhost, $serveruser, $serverpassword, $databasename);


?>