<?PHP
    session_start();
    if (isset($_SESSION['username'])) {
        header('location: Login.php');
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $usuario = $_POST['username'];
        $senha = $_POST['password'];
        $confirmacao_senha = $_POST["password_confirm"];
        $usuario_bool = FALSE;
        $senha_bool = FALSE;
        $confirmacao_bool = FALSE;

        $optradio = $_POST["optradio"];

        $usuarioER = '/[\d|\w]{1,8}/';
        $senhaER = '/[\d|\w]{1,8}/';

        if (preg_match($usuarioER, $usuario)){
            $usuario_bool = TRUE;
        }else {
            echo "<span style = \"color:red\">Usuário Inválido</span><br>";
        }

        if (preg_match($senhaER, $senha)){
            $senha_bool = TRUE;
        } else{
            echo "<span style = \"color:red\">Senha Inválida</span><br>";
        }

        if ($senha == $confirmacao_senha){
            $confirmacao_bool = TRUE;
        }else {
            echo "<span style = \"color:red\">Senhas não conferem</span><br>";
        }

        if ($usuario_bool and $senha_bool and $confirmacao_bool) {
            if($optradio =="Nutri"){
              $file = fopen($_SERVER['DOCUMENT_ROOT'] . "/lista_tarefas/usersN.txt", "a") or die("impossivel abrir arquivo users.txt");
              fwrite($file, PHP_EOL . $usuario . ";" . $senha);
              fclose($file);
              header('location: login.php');
            }else if($optradio =="Paciente"){
              $file = fopen($_SERVER['DOCUMENT_ROOT'] . "/lista_tarefas/users.txt", "a") or die("impossivel abrir arquivo users.txt");
              fwrite($file, PHP_EOL . $usuario . ";" . $senha);
              fclose($file);
              header('location: login.php');
            }
            
        }

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
    <div id = "login">
      <h1 ><strong>EasyNutri</strong></h1>
    </div>
   
    <!--Card content-->
    <div class="card-body px-lg-5 pt-0" style="margin-top: 20px; border-radius: 15px 15px 15px 15px;">

      <!-- Form -->
      <form class="text-center" style="color: #757575;" method="POST" >

       
        <div class="md-form">
          <label for="username" style="font-weight: bold;">Usuario</label>
          <input type="text" name="username" id="username" class="form-control" required="required">
          
        </div>

        <div class="md-form">
          <label for="materialLoginFormEmail" style="font-weight: bold;">E-mail</label>
          <input type="email" id="materialLoginFormEmail" class="form-control" required="required">
          
        </div>


        <!-- Password -->
        <div class="md-form"> 
          <label for="password" style="font-weight: bold;">Senha</label>
          <input type="password" id="password" name="password" class="form-control" required="required">
         
        </div>

        <!-- Password -->
        <div class="md-form"> 
          <label for="password_confirm" style="font-weight: bold;">Confirma Senha</label>
          <input type="password" id="password_confirm" name = "password_confirm" class="form-control" required="required">
         
        </div>

        <div class="md-form" style="margin-top: 20px;"> 
        <label style="font-weight: bold;">Função:</label>
        <label class="radio-inline"><input type="radio" name="optradio" checked value="Nutri">Nutricionista</label>
        <label class="radio-inline"><input type="radio" name="optradio" value="Paciente">Paciente</label>

        </div>
        <div class="d-flex justify-content-around">
          
         
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
        <button class="btn  btn-block my-4  z-depth-0" type="submit" >Cadastrar</button>

        <!-- Register -->
        <p>Já tem conta?
          <a href="login.php">Ir para Login</a>
        </p>


      </form>
      <!-- Form -->

    </div>

  </div>
  <!-- Material form login -->
</div>
</body>

</html>