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


	<div class="container" style="max-width: 1000px;min-width:60%;">
		<div class="row">
			<h1 style="margin-top: 10px; border-bottom: 2px solid green; padding:20px 20px 20px 30px;"><strong> Plano Alimentar</strong></h1>
		</div>

		<div class="row" style="margin-top: 20px;">
			<div class="col-sm-7" >									
				<div class="refeicao"  >
					<input type="checkbox" id="check1">
						<label for="check1" style="border-radius: 10px 10px 0px 0px; margin-bottom: 0px; padding-bottom: 50px;">
							Café da Manhã
						</label>
					
						
						<div>
							<table cellspacing="0" class="table">
								<tr>
									
									<td> <h1>Opção de Refeições: </h1></td>
									
									<td>
										<h1>Quantidade:</h1>
										
									</td>
								</tr>
								<tr>
									
									<td>Ovo mexido ou cozido <br>
										Psyllium (colocar no Ovo depois de pronto)<br> 
										Batata doce cozida<br>
										Suco Verde(Limão ou laranja, couve e água)<br></td>
									
									<td>
										3 unidades inteiras<br>
										1 colher de sopa<br>
										2 rodelas pequenas (40g)<br>
										200 ml
										
									</td>
								</tr>
								<tr>
									
									<td>Ovo mexido ou cozido <br>
										Psyllium (colocar no Ovo depois de pronto)<br> 
										Batata doce cozida<br>
										Suco Verde(Limão ou laranja, couve e água)<br></td>
									
									<td>
										3 unidades inteiras<br>
										1 colher de sopa<br>
										2 rodelas pequenas (40g)<br>
										200 ml
										
									</td>
								</tr>
								<tr>
									
									<td>Ovo mexido ou cozido <br>
										Psyllium (colocar no Ovo depois de pronto)<br> 
										Batata doce cozida<br>
										Suco Verde(Limão ou laranja, couve e água)<br></td>
									
									<td>
										3 unidades inteiras<br>
										1 colher de sopa<br>
										2 rodelas pequenas (40g)<br>
										200 ml
										
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
									
									<td>Ovo mexido ou cozido <br>
										Psyllium (colocar no Ovo depois de pronto)<br> 
										Batata doce cozida<br>
										Suco Verde(Limão ou laranja, couve e água)<br></td>
									
									<td>
										3 unidades inteiras<br>
										1 colher de sopa<br>
										2 rodelas pequenas (40g)<br>
										200 ml
										
									</td>
								</tr>
								<tr>
									
									<td>Ovo mexido ou cozido <br>
										Psyllium (colocar no Ovo depois de pronto)<br> 
										Batata doce cozida<br>
										Suco Verde(Limão ou laranja, couve e água)<br></td>
									
									<td>
										3 unidades inteiras<br>
										1 colher de sopa<br>
										2 rodelas pequenas (40g)<br>
										200 ml
										
									</td>
								</tr>
								<tr>
									
									<td>Ovo mexido ou cozido <br>
										Psyllium (colocar no Ovo depois de pronto)<br> 
										Batata doce cozida<br>
										Suco Verde(Limão ou laranja, couve e água)<br></td>
									
									<td>
										3 unidades inteiras<br>
										1 colher de sopa<br>
										2 rodelas pequenas (40g)<br>
										200 ml
										
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
							<table class="table" cellspacing="0" >
								<tr>
									
									<td> <h1>Opção de Refeições: </h1></td>
									
									<td>
										<h1>Quantidade:</h1>
										
									</td>
								</tr>
								<tr>
									
									<td>Ovo mexido ou cozido <br>
										Psyllium (colocar no Ovo depois de pronto)<br> 
										Batata doce cozida<br>
										Suco Verde(Limão ou laranja, couve e água)<br></td>
									
									<td>
										3 unidades inteiras<br>
										1 colher de sopa<br>
										2 rodelas pequenas (40g)<br>
										200 ml
										
									</td>
								</tr>
								<tr>
									
									<td>Ovo mexido ou cozido <br>
										Psyllium (colocar no Ovo depois de pronto)<br> 
										Batata doce cozida<br>
										Suco Verde(Limão ou laranja, couve e água)<br></td>
									
									<td>
										3 unidades inteiras<br>
										1 colher de sopa<br>
										2 rodelas pequenas (40g)<br>
										200 ml
										
									</td>
								</tr>
								<tr>
									
									<td>Ovo mexido ou cozido <br>
										Psyllium (colocar no Ovo depois de pronto)<br> 
										Batata doce cozida<br>
										Suco Verde(Limão ou laranja, couve e água)<br></td>
									
									<td>
										3 unidades inteiras<br>
										1 colher de sopa<br>
										2 rodelas pequenas (40g)<br>
										200 ml
										
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
									
									<td>Ovo mexido ou cozido <br>
										Psyllium (colocar no Ovo depois de pronto)<br> 
										Batata doce cozida<br>
										Suco Verde(Limão ou laranja, couve e água)<br></td>
									
									<td>
										3 unidades inteiras<br>
										1 colher de sopa<br>
										2 rodelas pequenas (40g)<br>
										200 ml
										
									</td>
								</tr>
								<tr>
									
									<td>Ovo mexido ou cozido <br>
										Psyllium (colocar no Ovo depois de pronto)<br> 
										Batata doce cozida<br>
										Suco Verde(Limão ou laranja, couve e água)<br></td>
									
									<td>
										3 unidades inteiras<br>
										1 colher de sopa<br>
										2 rodelas pequenas (40g)<br>
										200 ml
										
									</td>
								</tr>
								<tr>
									
									<td>Ovo mexido ou cozido <br>
										Psyllium (colocar no Ovo depois de pronto)<br> 
										Batata doce cozida<br>
										Suco Verde(Limão ou laranja, couve e água)<br></td>
									
									<td>
										3 unidades inteiras<br>
										1 colher de sopa<br>
										2 rodelas pequenas (40g)<br>
										200 ml
										
									</td>
									
								</tr>
							</table>
					</div>
				</div>
				<div class="refeicao" style="margin-bottom: 0px;">
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
									
									<td>Ovo mexido ou cozido <br>
										Psyllium (colocar no Ovo depois de pronto)<br> 
										Batata doce cozida<br>
										Suco Verde(Limão ou laranja, couve e água)<br></td>
									
									<td>
										3 unidades inteiras<br>
										1 colher de sopa<br>
										2 rodelas pequenas (40g)<br>
										200 ml
										
									</td>
								</tr>
								<tr>
									
									<td>Ovo mexido ou cozido <br>
										Psyllium (colocar no Ovo depois de pronto)<br> 
										Batata doce cozida<br>
										Suco Verde(Limão ou laranja, couve e água)<br></td>
									
									<td>
										3 unidades inteiras<br>
										1 colher de sopa<br>
										2 rodelas pequenas (40g)<br>
										200 ml
										
									</td>
								</tr>
								<tr id="bordaFinal">
									
									<td style="border-radius: 0px 0px 0px 10px">Ovo mexido ou cozido <br>
										Psyllium (colocar no Ovo depois de pronto)<br> 
										Batata doce cozida<br>
										Suco Verde(Limão ou laranja, couve e água)<br></td>
									
									<td style="border-radius: 0px 0px 10px 0px">
										3 unidades inteiras<br>
										1 colher de sopa<br>
										2 rodelas pequenas (40g)<br>
										200 ml
										
									</td>
									
								</tr>
							</table>
					</div>
				</div>								
			</div>

			<div class="col-sm-5" style="b">
				<div class="nutricionista"  >
					<label style="margin-bottom: 0px; padding-bottom: 50px; border-radius: 10px;">
						Nutricionista 
					</label>
					<h3 style="padding-left: 40px; margin-top:15px;">
						Nome do nutricionista...
					</h3>
					<p style="padding-left: 30px">
						Informação do nutricionista...
					</p>
					<p style="text-align: center">
						Telefone:(99)9999-9999
					</p>
					<p style="text-align: center">
						E-mail:teste@teste.com
					</p>

				</div>

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