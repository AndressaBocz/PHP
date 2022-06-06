<?php
    include "header.php";
    //Inclusão do arquivo de conexão com o banco de dados
    include "database.php";
    $id = $_GET['id'];
    //Criar uma string em SQL
    $sql = "SELECT * FROM alunos WHERE id = '$id'";
    //Realizar a conexão com o banco e executar o SQL
    $resultado = mysqli_query($conexao,$sql);
    //Converter o resultado em um array
    $dados=mysqli_fetch_array($resultado);
?>
<head>
    <meta charset="UTF-8">
    <title>Portal SGE</title>
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        <?php include "style.css" ?>
    </style>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.9/typicons.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css'>
    

</head>

<body>
    <!-- partial:index.partial.html -->
    <body id="particles-js"></body>
    <div class="animated bounceInDown">
        <div class="container">
<h3>Cadastro de alunos </h3>
<br>
<hr><hr>
    <ul>
        <li><a href="index.php">Voltar para a página principal</a></li>        
    </ul>
    <p>Preencha todos os campos do formulário: </p>
    <form action="update_cadastro.php" method="post">
        <input type="hidden" name="id" value= <?php echo $dados['id']?> id="id" class="form-control">
        <label for="nome" class="form-label">Nome: </label>
        <input type="text" name="nome" value= <?php echo $dados['nome']?> id="nome" class="form-control">
        <label for="email" class="form-label">E-mail: </label>
        <input type="email" name="email" value= <?php echo $dados['email']?> id="email" class="form-control">
        <label for="celular" class="form-label">Celular: </label>
        <input type="text" name="celular" value= <?php echo $dados['celular']?> id="celular" class="form-control"><br>

        <input type="submit" value="Atualizar cadastro">

    </form>


<?php include_once "footer.php" ?>