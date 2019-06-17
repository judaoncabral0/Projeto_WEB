<?PHP
    require('autenticacao.php');
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


</head>

<body style="min-height: 100%;">

	<header>
		<ul class="links">
			<li>
				<h1>
				EasyNutri
				</h1>
			</li>
			<li> 
				<a href="planoAlimentar.php"> Plano Alimentar</a>
			</li>
			<li>
				<a href="avaliacaoNutri.php">Avaliação Física</a>
			</li>
			<li>
				<a href="Perfil.php">Perfil</a>
			</li>
			<li>
				<?PHP
            	echo "<a href = \"logout.php\">Sair</a>";
        		?>
			</li>
		</ul>
	</header>

	<div class="container" style="min-width:60%;">
			<div class="row">
				<h1 style="margin-top: 10px; border-bottom: 2px solid green; padding:20px 20px 20px 30px;"><strong> Perfil</strong></h1>
			</div>

			<div class="row" style="margin-top: 20px; margin-bottom:50px; padding-right: 50px;">
				<div class= "col-sm-6">
					<h4 style="margin-left: 60px; padding-left:20px; padding-bottom:10px; border-bottom: 1px solid green; "><strong>Meus Dados</strong></h4>
						<style type="text/css">
							input{
								min-width: 100px;
							}
						</style>
						<div class="row" style="padding-left:100px;">
							<p style="margin-bottom: 0px;font-weight: bold;font-size: 12;">Nome:</p>
						</div>
							<div class="row" style="padding-left:110px;margin-top: 10px;">
								<input type="text" id="materialLoginFormEmail" class="form-control" required="required">
							</div>

						<div class="row" style="padding-left:100px;">
							<p style="margin-bottom: 0px;font-weight: bold;font-size: 12;">Data de Nascimento:</p>
						</div>
							<div class="row" style="padding-left:110px;margin-top: 10px;">
								<input type="text" id="materialLoginFormEmail" class="form-control" required="required">
							</div>

						<div class="row" style="padding-left:100px;">
							<p style="margin-bottom: 0px;font-weight: bold;font-size: 12;">Sexo:</p>
						</div>
							<div class="row" style="padding-left:110px;margin-top: 10px;">
								<select class="browser-default custom-select">
								  <option selected>--Selecione--</option>
								  <option value="1">Masculino</option>
								  <option value="2">Feminino</option>
								</select>
							</div>
						<div class="row" style="padding-left:100px;">
							<p style="margin-bottom: 0px;font-weight: bold;font-size: 12;">Senha:</p>
						</div>
							<div class="row" style="padding-left:110px;margin-top: 10px;">
								<input type="password" id="materialLoginFormEmail" class="form-control" required="required">
							</div>

						<div class="row" style="padding-left:100px;">			
							<p style="margin-bottom: 0px;font-weight: bold;font-size: 12;">E-mail:</p>
						</div>
							<div class="row" style="padding-left:110px;margin-top: 10px;">
								<input type="email" id="materialLoginFormEmail" class="form-control" required="required">
							</div>	
						<button class="btn  btn-block my-4  z-depth-0" type="submit" style="width:50% ;margin-left:35%; background-color:rgb(24,126,78);color:white" >Salvar</button>
				</div>
			</div>
		
	</div>

<!-- Footer -->
<footer class="footer navbar-fixed-bottom mt-auto  pt-3" style="background-color:rgb(24,126,78);color:white;">

  <!-- Footer Text -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">
		<div class="col-md-4 mt-md-0 mt-3" style="padding-left: 100px;">

        <!-- Content -->
       <img src="LogoNutri.png" style="padding-bottom:20px;">
      </div>
      <!-- Grid column -->
      <div class="col-md-4 mt-md-0 mt-3" >

        <!-- Content -->
        
        <p style="padding-top:20px;"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Av.Sorte ,9999 , Cidade CEP 99999-999</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Content -->
       
        <p style="padding-top:20px;"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>(99)9999-9999</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Text -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="background-color:#8fccb2; color:black; ">
  	© 2019 Copyright: Judson
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</body>

</html>