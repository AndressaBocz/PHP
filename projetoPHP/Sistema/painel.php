<?php

include_once "header.php";
session_start();
$usuario = $_SESSION['usuario'];

if ($usuario['perfil'] != "admin") {
    echo "Você não tem permissão de acesso!";
} else {
?>
    <h1>Seja Bem-vindo <?php print $usuario['login'] ?></h1>
    <h3>O melhor sistema escolar para sua escola!!!</h3>
    <p>Acesso à plataforma SGE: </p>
    <hr>
    <hr>

    <ul>
        <li><a href="formcadastrologin.php">Cadastrar usuário</a></li>
        <li><a href=""></a>Esqueceu sua senha?</li>

    </ul>

<?php } ?>

<?php include_once "footer.php" ?>