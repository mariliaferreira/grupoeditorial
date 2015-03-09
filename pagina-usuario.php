<!DOCTYPE html>
<html>
	<head>
	  <title>Grupo Editorial PUCPR - Editora Champagnat, PUCPress e PUCSul</title>

	  <!-- Meta Tags - Informações sobre o Website -->
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta name="keywords" content="grupo editorial pucpr, champagnat, pucpress, pucsul, livro, livros, revistas, acadêmico, pucpr">
	  <meta name="description" content="Grupo Editorial PUCPR - Editora Champagnat, PUCPress e PUCSul">
	  <meta http-equiv="content-language" content="pt-br">
	  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	  <meta name="author" content="Grupo Editorial PUCPR">
	  <meta name="reply-to" content="contato@editorachampagnat.com.br">


	  <!-- Arquivos de CSS -->
	  <link rel="stylesheet" type="text/css" href="css/estilo.css">
	  <link rel="stylesheet" type="text/css" href="css/normalize.css">
	  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
	  

	  <!-- Arquivos de Javascript -->
	  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  	  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  	  <script src="js/responsive-menu.js"></script>
  	  <script src="js/tabs.js"></script>
  	  <script src="js/classie.js"></script>

  	<!--  <script type="text/javascript">
	  //   window.onload = function (){
	  //     var myPDF = new PDFObject({ url: "objetos/examplePDF.pdf" }).embed();
	  //   };
	  // </script>-->

	</head>


	<body>

		<?php
		require('componentes/cabecalho.php');
		?>

		<div class="header-livros">
			<div class="breadcrumb">
				<ul>
					<li><a href=""><i class="fa fa-home"></i></a></li> <span>></span>
					<li><a href="">Login</a></li> <span>></span>
					<li><a href="">Meus dados</a></li>
				</ul>
			</div>
		</div>

		<h1>meus dados</h1>

		<div>
			<div class="meus-dados">
				<div class="checkout-box">
			<div class="div-input">

				<h6>Dados pessoais</h6>
			
				
				<label>Nome</label><br />
				<span class="dados-preenchidos">Marilia Antunes Ferreira</span> <!-- <a href="" class="alterar-dados"><i class="fa fa-pencil-square-o"></i> alterar</a> --> <br /><br /> 

				<label>Email</label><br />
				<span class="dados-preenchidos">alguem@email.com</span> <a href="" class="alterar-dados"><i class="fa fa-pencil-square-o"></i> alterar</a> <br /><br /> 

				<label>Senha</label><br />
				<span class="dados-preenchidos">****************</span> <a href="" class="alterar-dados"><i class="fa fa-pencil-square-o"></i> alterar</a> <br /><br /> 


				<h6>Dados de entrega</h6>

				<label>CEP</label><br />
				<span class="dados-preenchidos">80250-250</span><br /><br />
								

				<label>Endereço</label><br />
				<span class="dados-preenchidos">Avenida Visconde de Guarapuava</span><br /><br />
				

				<div class="div-form-inside">
					<label class="input-texto-pequeno-2">Número</label>
					<span class="input-texto-pequeno">123</span><br /><br />
				</div>

				<div class="div-form-inside">
					<label class="input-texto-pequeno-2">Complemento</label> 
					<span class="input-texto-pequeno">Apto 1515</span><br /><br />
				</div>

				<div class="div-form-inside">
					<label class="input-texto-pequeno-2">Bairro</label> 
					<span class="input-texto-pequeno">Centro</span><br /><br />
				</div>

				<div class="div-form-inside">
					<label class="input-texto-pequeno-2">Estado</label> 
					<select class="select">
					  <option value="parana">Paraná</option>
					  <option value="riograndedosul">Rio Grande do Sul</option>
					  <option value="santacararina">Santa Catarina</option>
					  <option value="saopaulo">São Paulo</option>
					</select>
				</div>

				<label>Cidade</label><br />
				<input placeholder="" type="text" class="input-texto"></input><br />

				<button class="botao-continuar">SALVAR</button>

			</div>
			</div>
		</div>

		

		<?php
		require('componentes/footer.php');
		?>

		<script src="js/classie.js"></script>
		<script src="js/search-checkout.js"></script>
		
	</body>
</html>