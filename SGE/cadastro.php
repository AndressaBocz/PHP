<!DOCTYPE html>
<html lang="en" >

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
            <span class="error animated tada" id="msg"></span>
            <div class="login">
                <div class="inputs">
                    <form action="cadastroLogin.php" method="post" class="box" >
                        
                         <h4>Acesso <span>SGE</span></h4>
                        <h5>Conecte-se.</h5>

                        <input type="text" class="entrada" name="login_user" id="login_user" required placeholder="Usuário" autocomplete="off"><br><br>
                        <input type="password" class="entrada" name="password_user" id="password_user" required placeholder="Senha" autocomplete="off"><br><br>
                        
                        <p><label style="font-size: 16px;" for="profile_user">Selecione o perfil de cadastro:</label>
                            <select class="opcao" name="profile_user" id="profile_user">

                                <option value="estudante">Estudante</option>
                                <option value="admin">Administrador</option>
                            </select>  <br>              
                           <input type="submit" class="btn1"  value="Cadastrar usuário">
                    </form><br>

                        <p><a href="index.php">Voltar para página principal</a></p>
                </div>
                
            </div>
            <hr>

            <div class="rodape">
                <div class="textRodape">
                    <p>&reg Feito por  <i class="fa fa-heart pulse"></i> <a href="https://www.google.de/maps/place/Augsburger+Puppenkiste/@48.360357,10.903245,17z/data=!3m1!4b1!4m2!3m1!1s0x479e98006610a511:0x73ac6b9f80c4048f"><a href="https://github.com/AndressaBocz">Andressa Bocz & João Vellardi</p>
                </div>
            </div>
        </div>

<!-- partial -->
<script src='https://cldup.com/S6Ptkwu_qA.js'></script><script  src="./script.js"></script>


    </body>
</html>