<?php include_once "header.php"?>

<h3>O melhor sistema escolar para sua escola!!!</h3>
<p>Cadastro de usuários:</p>
<hr><hr>

    <form action="cadastro_login.php" method="post">
        <label for="login_user">Login:</label>
        <input type="text" name="login_user" id="login_user">

        <label for="password_user">Senha:</label>
        <input type="password" name="password_user" id="password_user">

        <label for="profile_user">Selecione o perfil de cadastro:</label>
        <select name="profile_user" id="profile_user">
	        <option value="estudante">Estudante</option>
	        <option value="admin">Administrador</option>
        </select>

        <input type="submit" value="Cadastrar">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
    </form>


    <ul>    
        <li><a href="index.php">Voltar para a página principal</a></li>
    </ul>

<?php include_once "footer.php"?>
