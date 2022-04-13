<?php include_once "header.php" ?>

<h3>O melhor sistema escolar para sua escola!!!</h3>
<p>Acesso à plataforma SGE: </p>
<hr><hr>

    <form action="valida_login.php" method="post">
        <label for="login_user">Login: </label>
        <input type="text" name="login_user" id="login_user">
        <label for="password_user">Senha: </label>
        <input type="password" name="password_user" id="password_user">
        <input type="submit" value="Acessar">
    </form><br>

    <?php 
        session_start();
        if(isset($_SESSION['mensagem'])){
            $mensagem = $_SESSION['mensagem'];

            echo '<p>'. $mensagem . '</p>';
            unset($_SESSION['mensagem']);
        }
    ?>

    <ul>
        <li><a href="formcadastrologin.php">Cadastrar usuário</a></li>
        <li><a href=""></a>Esqueceu sua senha?</li>
    </ul>


<?php include_once "footer.php" ?>