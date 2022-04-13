<?php include_once "header.php" ?>

<h3>Cadastro de alunos </h3>
<br>
<hr><hr>
    <ul>
        <li><a href="index.php">Voltar para a página principal</a></li>        
    </ul>
    <p>Preencha todos os campos do formulário: </p>
    <form action="cadastro.php" method="post">
        <label for="nome_aluno" class="form-label">Nome: </label>
        <input type="text" name="nome_aluno" id="nome_aluno" class="form-control">
        <label for="email_aluno" class="form-label">E-mail: </label>
        <input type="email" name="email_aluno" id="email_aluno" class="form-control">
        <label for="celular_aluno" class="form-label">Celular: </label>
        <input type="text" name="celular_aluno" id="celular_aluno" class="form-control"><br>

        <input type="submit" value="Cadastrar aluno">

    </form>


<?php include_once "footer.php" ?>