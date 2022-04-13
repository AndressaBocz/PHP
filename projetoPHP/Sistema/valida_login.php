<?php
//Inclusão do arquivo de banco de dados
include "database.php";

//Iniciar a sessão
session_start();

//Recuperar os dados do formulário
$login = $_POST['login_user'];
$password = $_POST['password_user'];

//Verificar seos campos estão vazios
if (empty($login)) {
    $_SESSION['mensagem'] = "Preencha o campo Login";
    header("Location: index.php");
} else if (empty($password)) {
    $_SESSION['mensagem'] = "Preencha o campo Senha";
    header("Location: index.php");
}



//SQL para consulta do usuário
$sql = "SELECT * FROM login_sge WHERE login_user='$login' AND password_user='$password'";

//Executar o SQL
$resultado = mysqli_query($conexao, $sql);

//Manipular os dados e transformar em array associativo
$dados = mysqli_fetch_assoc($resultado);

//Valdiar os campos de login e senha
if ($dados['login_user'] == $login and $dados['password_user'] == $password) {
    //Criar um array de usuário
    $usuario = array("login" => $dados['login_user'], "senha" => $dados['password_user'], "perfil" => $dados['profile_user']);

    //colocar o array de usuário na sessão
    $_SESSION['usuario'] = $usuario;

    //redireciona para a página painel.php
    header("Location: painel.php");
}else{
    //Cria uma sessão com uma mensagem de erro
    $_SESSION['mensagem'] = "Login ou senha inválidos";

    header("Location: index.php");
}
