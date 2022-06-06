<?php

    include_once "database.php";

    $sql= "SELECT * FROM alunos" ;
    $resultado = mysqli_query($conexao, $sql);

?>
<?php 
    include_once "database.php"; 
    session_start();
    $usuario = $_SESSION['usuario'];

    if($usuario['perfil'] !="admin")
    {
        echo "Você não tem perimissão de acesso!";
    }
    else
    {
    
 
?>
<!DOCTYPE html>
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
        <title>Lista de Alunos</title>
        
    
    
            <div class="corpo">
                <div class="caixaCorpo">
                    <div class="titulo">
                        
                            <h1 style="text-align:center ;">Lista de Cadastrados</h1>
                            <hr>
                    </div>
                       
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nome: </th>
                                <th>Email: </th>
                                <th>Celular: </th>
                                <th>Editar</th>
                                <th>Excluir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($dados=mysqli_fetch_array($resultado)): ?>
                                <tr>
                                    <td><?php echo $dados['nome'];?></td>
                                    <td><?php echo $dados['email'];?></td>
                                    <td><?php echo $dados['celular'];?></td>
                                    <td>--</td>
                                     <td><a href="formatualizacadastro.php?id=<?php echo $dados['id'];?>">Editar</a></td>
                                    <td><a href="excluir_aluno.php?id=<?php echo $dados['id'];?>">Excluir</a></td>
                                
                                </tr>
                            <?php endwhile; ?> 
                        </tbody>
                    </table> 
                    <br>
                    <a href="paginaInicial.php">Voltar ao painel principal</a><br><br>
                    <a href="paginaInicial.php">Voltar ao painel principal</a>
                    <a href="novoLogin.php" style="outline-style: none;"  >Adicionar novo Aluno </a>               
                </div>
            </div>
        </div>    
    </body>
</html>
<?php } ?>