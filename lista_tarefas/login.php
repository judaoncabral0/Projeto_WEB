<?php    
    session_start();
    if (isset($_SESSION['username'])) {
        header('location: lista_tarefas.php');
    }
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $usuario = $_POST['username'];
        $senha = $_POST['password'];
        $usuario_bool = FALSE;
        $senha_bool = FALSE;
        $file = fopen($_SERVER['DOCUMENT_ROOT'] . "/lista_tarefas/users.txt", "r") or die("Não foi possível abrir o arquivo de usuários!");
        $file2 = fopen($_SERVER['DOCUMENT_ROOT'] . "/lista_tarefas/usersN.txt", "r") or die("Não foi possível abrir o arquivo de usuários!");
        while (!feof($file)){
            $linha = fgets($file);
            $pos = strpos($linha, ";");
            $username = substr($linha, 0, $pos);
            $password = substr($linha, $pos+1);
            if ($username == $usuario){
                $usuario_bool = TRUE;
                if ($password == $senha or substr($password, 0, -2) == $senha) {
                    $senha_bool = TRUE;
                }
            }
        }
        if (($usuario_bool == TRUE) && ($senha_bool == TRUE)) {
            $_SESSION['username'] = $usuario;
            header('location: planoAlimentar.php');
        }else{
            while (!feof($file2)){
            $linha = fgets($file2);
            $pos = strpos($linha, ";");
            $username = substr($linha, 0, $pos);
            $password = substr($linha, $pos+1);
              if ($username == $usuario){
                  $usuario_bool = TRUE;
                  if ($password == $senha or substr($password, 0, -2) == $senha) {
                      $senha_bool = TRUE;
                  }
              }
              
            }
            if ($usuario_bool == FALSE || $senha_bool == FALSE) {
                echo "<span style = \"color:red\">Usuário ou Senha Inválida</span><br>";
              }
              if (($usuario_bool == TRUE) && ($senha_bool == TRUE)) {
                  $_SESSION['username'] = $usuario;
                  header('location: avaliacaoVisaoNBusca.php');
            }
        }
       
        fclose($file2);
        fclose($file);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="uft-8">
    <title>EasyNutri</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/geral-theme.css"/>
    <link rel="stylesheet" type="text/css" href="geral-theme.css">
   

</head>

<body>
<div class="container" style="width :500px; margin-top: 10%;">
  
  <div class="card" >
     <style type="text/css">
      #login{
        background-image:linear-gradient(to bottom, rgba(46,166,102,1), rgba(28,128,78,1));
        width:100%px;
        height: 80px;
        text-align: center;
        padding-top: 15px;
        border-radius: 5px 5px 0px 0px;
        color:rgb(126,201,59);
        font-family: Verdana,sans-serif;
      }
          
      </style>  
    <div id = "login" style="color: #B1D249;">
      <h1><strong>EasyNutri</strong></h1>
    </div>
   
    <!--Card content-->
    <div class="card-body px-lg-5 pt-0" style="margin-top: 20px; border-radius: 15px 15px 15px 15px;">

      <!-- Form -->
      <form class="text-center" style="color: #757575;" name="login" method="POST">

       
        <div class="md-form" >
          <label for="username">Usuario</label>
          <input id="username" name="username" class="form-control" required="required">
          
        </div>

        <!-- Password -->
        <div class="md-form"> 
          <label for="password">Senha</label>
          <input type="password" id="password" name="password" class="form-control" required="required">
         
        </div>

        <div class="d-flex justify-content-around">
          <div>
            <!-- Remember me -->
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
              <label class="form-check-label" for="materialLoginFormRemember">Lembrar de mim</label>
            </div>
          </div>
          <div>
            <!-- Forgot password -->
            <a href="">Esqueceu a senha?</a>
          </div>
        </div>
        <style>
          button{
            background-image:linear-gradient(to bottom, rgba(46,166,102,1), rgba(28,128,78,1));
            color:white;
       
          }
          button:before{
           
          }
          button:active{
            background-color:white;
            border: solid 2px rgba(46,166,102,1);
            color: rgba(46,166,102,1);
            
            box-shadow: 0px 0px 0px 0px;

          }
          button:focus{
            
          }

        </style>
        <!-- Sign in button -->
        <button class="btn  btn-block my-4  z-depth-0" type="submit" onclick="Logar()" >Entrar</button>

        <!-- Register -->
        <p>Ainda não tem conta?
          <a href="cadastro.php">Cadastre-se</a>
        </p>


      </form>
      <!-- Form -->

    </div>

  </div>
  <!-- Material form login -->
</div>
</body>

</html>