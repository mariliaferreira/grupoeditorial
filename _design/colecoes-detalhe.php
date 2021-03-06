<!DOCTYPE html>
<html>
	<head>
	  <title>Grupo Editorial PUCPR - Editora Champagnat, PUCPress e PUCSul</title>

	  <!-- Meta Tags - Informa��es sobre o Website -->
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta name="keywords" content="grupo editorial pucpr, champagnat, pucpress, pucsul, livro, livros, revistas, acad�mico, pucpr">
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

  	   <link rel="icon" type="image/png" sizes="192x192"  href="img/android-icon-192x192.png">
	  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
	  <link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
	  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
  	  
	</head>


	<body>

		<?php
		require('componentes/cabecalho.php');
		?>

		<div class="header-livros">
			<div class="breadcrumb">
				<ul>
					<li><a href=""><i class="fa fa-home"></i></a></li> <span>></span>
					<li><a href="">breadcrumb one</a></li> <span>></span>
					<li><a href="">breadcrumb two</a></li>
				</ul>
			</div>

			<h1>COLE��ES</h1>

			<div class="tag" id="tag-colecoes">
				<ul>
					<a href="#"><li>Tag 1</li></a>
					<a href="#"><li>Tag 2</li></a>
					<a href="#"><li>Tag 3</li></a>
					<a href="#"><li>Tag 4</li></a>
					<a href="#"><li>Tag 5</li></a>
					<a href="#"><li>Tag 6</li></a>
					<a href="#"><li>Tag 7</li></a>
				</ul>
			</div>

			<div>
				<p>Livros sobre<br />
					Tag 1, Tag 2...
				</p>
			</div>


		</div>


		<?php
		require('componentes/container-livros.php');
		?>
		
		<?php
		require('componentes/footer.php');
		?>

		<script src="js/classie.js"></script>
		<script src="js/search-checkout.js"></script>
		
	</body>
</html>