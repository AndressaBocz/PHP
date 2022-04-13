<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>CRUD PHP</title>
</head>

<body>
    <h1>Sistema de Cadastro de Funcionários</h1>
    <p>Preenchimento obrigatório de todos os campos!</p>
    <form action="cadastrarfuncionario.php" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" placeholder="Informe o nome">

        <label for="email">E-mail: </label>
        <input type="text" name="email" id="email" placeholder="Informe o E-mail">

        <label for="celular">Celular: </label>
        <input type="text" name="celular" id="celular" placeholder="Informe o tefone">

        <input type="submit" value="Cadastrar Funcionário">
    </form>
</body>

</html>