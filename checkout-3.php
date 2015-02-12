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
					<li><a href="">Checkout</a></li>
				</ul>
			</div>
		</div>

		<h1>checkout</h1>

		<?php
			require('componentes/passos-checkout.php');
		?>

		<div class="checkout-box">

			<div class="div-input">
				<label>Qual a sua forma de pagamento?</label><br />
				<form action="" class="input-radio-button">
					<input type="radio" name="forma-pagamento" value="pessoa-fisica">Boleto Bancário </input>
					<input type="radio" name="forma-pagamento" value="pessoa-juridica">Cartão de Crédito </input>
				</form>


			<div class="pagamento-cartao-de-credito">
				<label>Cartão de Crédito</label><br />
				<select class="select">
					<option value="volvo">Mastercard</option>
					<option value="saab">Visa</option>
					<option value="opel">American Express</option>
				</select><br />
				<label>Nome</label> <span class="small-grey">(mesmo impresso no cartão)</span><br />
				<input placeholder="" type="text" class="input-texto"></input><br />
				<label>Validade</label> <span class="small-grey">(impresso na frente do cartão)</span><br />
				<select class="select">
					<option value="mes01">01</option>
					<option value="mes02">02</option>
					<option value="mes03">03</option>
				</select> /
				<select class="select">
					<option value="ano13">13</option>
					<option value="ano14">14</option>
					<option value="ano15">15</option>
				</select><br />
				<label>Código de Segurança</label> <span class="small-grey">(impresso no verso do cartão)</span><br />
				<input placeholder="" type="text" class="input-texto"></input><br />
				<label>Parcelar em</label> <span class="small-grey">(para compras acima de R$50,00)</span><br />
				<select class="select">
					<option value="1vez">1 vez</option>
					<option value="2vezes">2 vezes</option>
					<option value="3vezes">3 vezes</option>
				</select>
			</div>

		</div>
			
			<button class="botao-continuar">REALIZAR PAGAMENTO</button>
			<button class="botao-voltar">VOLTAR</button>
		</div>

		

		<?php
		require('componentes/footer.php');
		?>

		<script src="js/classie.js"></script>
		<script src="js/search-checkout.js"></script>
		
	</body>
</html>