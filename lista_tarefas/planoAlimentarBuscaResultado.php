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
				<a href="planoAlimentarBusca.php"> Plano Alimentar</a>
			</li>
			<li>
				<a href="avaliacaoVisaoNBusca.php">Avaliação Física</a>
			</li>
			<li>
				<a href="PerfilNutri.php">Perfil</a>
			</li>
			<li>
				<?PHP
            	echo "<a href = \"logout.php\">Sair</a>";
        		?>
			</li>
		</ul>
	</header>

		<div class="container" style="">
		<div class="row">
			<style type="text/css">
				a{
					color:#212529;
					text-decoration: none;
				}
				a:hover{
					color:#212529;
					
				}
				*{
					font-family: Verdana,sans-serif;
				}
			</style>
			<h1 style="margin-top: 10px; border-bottom: 2px solid green; padding:20px 20px 20px 30px;"><strong> <a href="avaliacaoVisaoNBusca.php"> Plano Alimentar</a> - Nome do Paciente</strong></h1>
		</div>

		<div class="row" style="margin-top: 20px; margin-bottom:50px; padding-right: 50px;">
			<div class= "col-sm-12">
				<style type="text/css">
					form-control{
						width:100%;
					}
				</style>
				<div class="refeicao"  >
					<input type="checkbox" id="check1" checked>
						<label for="check1" style="border-radius: 10px 10px 0px 0px; margin-bottom: 0px; padding-bottom: 50px;">
							Café da Manhã
						</label>
					
						
						<div>
							<table cellspacing="0" >
								<tr>
									
									<td> <h1>Opção de Refeições: </h1></td>
									
									<td>
										<h1>Quantidade:</h1>
										
									</td>
								</tr>
								<tr>
									
									<td>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
									</td>
									
									<td>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
										
									</td>
								</tr>
								<tr>
									
									<td>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
									
									<td>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
										
									</td>
								</tr>
								<tr id="bordaFinal">
									
									<td>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
									</td>
									
									<td>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
										
									</td>
									
								</tr>
							</table>
						</div>						
				</div>				
				<div class="refeicao">
					<input type="checkbox" id="check2">
						<label for="check2" style="margin-bottom: 0px; padding-bottom: 50px;"  >
							Almoço
						</label>
					<div>
						<table cellspacing="0" >
								<tr>
									
									<td> <h1>Opção de Refeições: </h1></td>
									
									<td>
										<h1>Quantidade:</h1>
										
									</td>
								</tr>
								<tr>
									
									<td>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
									</td>
									
									<td>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
										
									</td>
								</tr>
								<tr>
									
									<td>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
									
									<td>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
										
									</td>
								</tr>
								<tr id="bordaFinal">
									
									<td>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
									</td>
									
									<td>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
										
									</td>
									
								</tr>
							</table>
							
					</div>
				</div>
				<div class="refeicao">
					<input type="checkbox" id="check3">
						<label for="check3" style="margin-bottom: 0px; padding-bottom: 50px;">
							Jantar
						</label>
					<div>
							<table cellspacing="0" >
								<tr>
									
									<td> <h1>Opção de Refeições: </h1></td>
									
									<td>
										<h1>Quantidade:</h1>
										
									</td>
								</tr>
								<tr>
									
									<td>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
									</td>
									
									<td>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
										
									</td>
								</tr>
								<tr>
									
									<td>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
									
									<td>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
										
									</td>
								</tr>
								<tr id="bordaFinal">
									
									<td >
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
									</td>
									
									<td >
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
										
									</td>
									
								</tr>
							</table>
					</div>
				</div>
				<div class="refeicao">
					<input type="checkbox" id="check4">
						<label for="check4" style="margin-bottom: 0px; padding-bottom: 50px;">
							Lanche 1
						</label>
					<div>
							<table cellspacing="0" >
								<tr>
									
									<td> <h1>Opção de Refeições: </h1></td>
									
									<td>
										<h1>Quantidade:</h1>
										
									</td>
								</tr>
								<tr>
									
									<td>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
									</td>
									
									<td>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
										
									</td>
								</tr>
								<tr>
									
									<td>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
									
									<td>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
										
									</td>
								</tr>
								<tr id="bordaFinal">
									
									<td>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
									</td>
									
									<td>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
										
									</td>
									
								</tr>
							</table>
					</div>
				</div>
				<div class="refeicao" style="margin-bottom: 0px; width:100%;">
					<input type="checkbox" id="check5">
						<label for="check5" id="teste" style="margin-bottom: 0px; padding-bottom: 50px;border-radius:0px 0px 10px 10px;"> 
							Lanche 2
						</label>
					<div style="margin-bottom: 100px;">
							<table cellspacing="0" >
								<tr>
									
									<td> <h1>Opção de Refeições: </h1></td>
									
									<td>
										<h1>Quantidade:</h1>
										
									</td>
								</tr>
								<tr>
									
									<td>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
									</td>
									
									<td>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
										
									</td>
								</tr>
								<tr>
									
									<td>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
									
									<td>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
										
									</td>
								</tr>
								<tr id="bordaFinal">
									
									<td style="border-radius: 0px 0px 0px 10px">
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
									</td>
									
									<td style="border-radius: 0px 0px 10px 0px">
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
										
									</td>
									
								</tr>
							</table>
					</div>
				</div>								
			</div>

					<button class="btn  btn-block my-4  z-depth-0" type="submit" style="width:20% ;margin-left:40%; background-color:rgb(24,126,78);color:white" >Salvar</button>
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