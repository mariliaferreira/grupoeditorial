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
					<li><a href="">Finalizar Compra</a></li>
				</ul>
			</div>
		</div>

		<h1>finalizar compra</h1>

		<?php
			require('componentes/passos-checkout.php');
		?>

		<div class="checkout-box">
			<div class="div-input">
				<label>Identificação</label><br />
				<form action="" class="input-radio-button">
					<input type="radio" name="cadastro-nacional" value="pessoa-fisica">Pessoa Física </input>
					<input type="radio" name="cadastro-nacional" value="pessoa-juridica">Pessoa Jurídica </input>
				</form>

				<label>CPF/CNPJ</label><br />
				<input placeholder="" type="text" class="input-texto"></input><br />
				<label>Nome</label><br />
				<input placeholder="" type="text" class="input-texto"></input><br />
				<label>Email</label><br />
				<input placeholder="" type="email" class="input-texto"></input><br />
			</div>
			<button class="botao-continuar">CONTINUAR PARA ENDEREÇO <i class="fa fa-chevron-right"></i></button>
			<!-- <button class="botao-voltar"><i class="fa fa-chevron-left"></i> VOLTAR</button> -->
		</div>


		<?php
		require('componentes/footer.php');
		?>

		<script src="js/classie.js"></script>
		<script src="js/search-checkout.js"></script>
		
	</body>
</html>