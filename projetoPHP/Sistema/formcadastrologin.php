<?php include_once "header.php" ?>

<h3>O melhor sistema escolar para sua escola!!!</h3>
<p>Cadastro de usuários: </p>
<hr><hr>

    <form action="cadastro_login.php" method="post">
        <label for="login_user">Login: </label>
        <input type="text" name="login_user" id="login_user">
        <label for="password_user">Senha: </label>
        <input type="password" name="password_user" id="password_user">    
        <label for="profile_user">Selecione o perfil de cadastro: </label>
        <select name="profile_user" id="profile_user">
            <option value="estudante">Estudante</option>
            <option value="admin">Administrador</option>
        </select>

        <input type="submit" value="Cadastrar usuário">

    </form><br>

    <ul>
        <li><a href="index.php">Voltar para a página principal</a></li>
    </ul>


<?php include_once "footer.php" ?>