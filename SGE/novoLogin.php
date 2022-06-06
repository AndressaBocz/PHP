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
    <div class="caixa">
        <div class="login">
            <br><br>
                    <div class="inputs">
                        <form action="cadastroAluno.php" method="post">
                            <label for="nome">Nome:</label><br>
                            <input type="text" class="entrada" name="nome" id="nome"><br><br>

                            <label for="email">Email:</label><br>
                            <input type="email" class="entrada" name="email" id="email"><br><br>

                            <label for="celular">Celular:</label><br>
                            <input type="text" class="entrada" name="celular" id="celular"><br><br>

                                        
                            <input type="submit" class="btn1"  value="Cadastrar Novo Aluno">
                        </form><br>

                            <p><a href="lista.php">Voltar para Lista</a></p>
                    </div>
                    
        </div>
    </div>
</body>
</html>