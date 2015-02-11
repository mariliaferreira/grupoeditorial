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

		<h1>meu carrinho</h1>

		<div class="meu-carrinho">
			<button>Finalizar compra</button>
			<table>
				<tr>
					<td>X</td>
					<td>imagem</td>
					<td>Livro Champagnat</td>
					<td><select>
							<option>1</option>
							<option>2</option>
							<option>3</option>
						</select>
					</td>
					<td>R$75,00</td>
				</tr>

				<tr>
					<td>X</td>
					<td>imagem</td>
					<td>Livro Champagnat</td>
					<td><select>
							<option>1</option>
							<option>2</option>
							<option>3</option>
						</select>
					</td>
					<td>R$75,00</td>
				</tr>

				<tr>
					<td>X</td>
					<td>imagem</td>
					<td>Livro Champagnat</td>
					<td><select>
							<option>1</option>
							<option>2</option>
							<option>3</option>
						</select>
					</td>
					<td>R$75,00</td>
				</tr>

				<tr>
					<td> </td>
					<td> </td>
					<td> </td>
					<td>Total da Compra</td>
					<td>R$225,00</td> 
				</tr>

				<tr>
					<td> </td>
					<td> </td>
					<td> </td>
					<td>Frete</td>
					<td>R$7,50</td> 
				</tr>

				<tr>
					<td> </td>
					<td> </td>
					<td> </td>
					<td>Total</td>
					<td>R$232,50</td> 
				</tr>
			</table>

			<button>finalizar compra</button>
			<button> < continuar comprando</button>

			<div class="formas-de-pagamento">
			</div>

		</div>

		<?php
		require('componentes/footer.php');
		?>

		<script src="js/classie.js"></script>
		<script src="js/search-checkout.js"></script>
		
	</body>
</html>