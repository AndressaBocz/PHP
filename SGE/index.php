<!DOCTYPE html>

<div class="erro">
                            <?php 
                                session_start();
                        
                                if(isset($_SESSION['mensagem'])){
                        
                                    $mensagem = $_SESSION['mensagem'];

                                    echo '<p>'.$mensagem .'</p>';
                                    unset($_SESSION['mensagem']);
                                }   
                            ?>
                        </div>    

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

                <form name="form1" action="login.php" class="box" onsubmit="return checkStuff()" method="post">      

                <h4>Acesso <span>SGE</span></h4>
                <h5>Conecte-se.</h5>

                <input type="text" name="login_user" id="login_user" required placeholder="Usuário" autocomplete="off">
                <i class="typcn typcn-eye" id="eye"></i>
        
                <input type="password" name="password_user" id="password_user" required placeholder="Senha" autocomplete="off">
        

                        <label>
                            <input type="checkbox">
                            <span></span>
                            <small class="rmb">Lembrar-me</small>
                        </label>

                    <a href="" class="forgetpass">Esqueceu a senha?</a>
                    <input type="submit" value="Acessar" class="btn1">

                 </form>
        
            <a href="cadastro.php" class="dnthave">Não possui conta? Cadastre-se</a>

        </div> 


       <div class="footer">
      <span>Feito por  <i class="fa fa-heart pulse"></i> <a href="https://www.google.de/maps/place/Augsburger+Puppenkiste/@48.360357,10.903245,17z/data=!3m1!4b1!4m2!3m1!1s0x479e98006610a511:0x73ac6b9f80c4048f"><a href="https://github.com/AndressaBocz">Andressa Bocz & João Vellardi</a></span>
    </div>
</div>


<!-- partial -->
<script src='https://cldup.com/S6Ptkwu_qA.js'></script><script  src="./script.js"></script>

</body>
</html>

        
                    