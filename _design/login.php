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
  	  <script src="js/tabs.js"></script>
  	  <script src="js/classie.js"></script>

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
					<li><a href="">Login</a></li>
				</ul>
			</div>
		</div>

		<div class="communication-box">
			<img src="img/icone-livro.png" />
			<h1>login</h1>
			
			<div class="div-input">
				<label>Email</label><br />
				<input placeholder="" type="email" class="input-texto"></input><br />
				<label>Senha</label><br />
				<input placeholder="" type="password" class="input-texto"></input><br />
			</div>

			<!-- <span class="aviso-email-cadastrado"><i class="fa fa-exclamation-triangle"></i> Este email j� esta cadastrado. <a href="">Esqueci minha senha</a></span> -->
			
			<button class="botao-communication-box login-normal">Criar minha conta</button><br />
			<span class="small-grey">ou</span><br />
			<button class="botao-communication-box login-facebook"><i class="fa fa-facebook-square"></i> Login com Facebook</button>
			<br />
			
			<a href="" class="usuario-sem-conta-calltoaction">N�o tenho conta ainda</a>
		
		</div>

		

		<?php
		require('componentes/footer.php');
		?>

		<script src="js/classie.js"></script>
		<script src="js/search-checkout.js"></script>
		
	</body>
</html>