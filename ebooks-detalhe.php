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
					<li><a href="">Ebooks</a></li> <span>></span>
					<li><a href="">Título do Ebook</a></li>
				</ul>
			</div>
		</div>

		<div class="container-livro">
			<div class="preview-livro">
				
				<iframe src="objetos/exemploPDF.pdf" type="application/pdf" width="100%" height="100%" class="leitor-PDF">
 
				  <p>Parece que você não tem um plugin para PDF neste navegador.
				  Não tem problema! Você pode <a href="objetos/exemploPDF.pdf">baixar o PDF aqui.</a></p>
				  
				</iframe>
				<a href="" target="_blank"><i class="fa fa-download"></i> Download do PDF</a>
			</div> <!-- fecha preview livro -->

			<div class="info-livro">
				<ul id="tabs">
		            <li class="active">sobre o livro</li>
		            <li>sobre o autor</li>
		            <li>especificações</li>
		        </ul>

		        <ul id="tab">
		            <li class="active">
		                <h2>Título do Ebook</h2>
		                <h3>Subtítulo do Ebook</h3>

		                <div class="lista-autores-livros">
		                	<span><img src="" /> Autor Um</span>
		                	<span><img src="" /> Autor Dois</span>
		                	<span><img src="" /> Autor Três</span>
		                </div>

		                <div class="botoes-acoes-livros">
			                <a href="#"><span><i class="fa fa-check-circle"></i> Disponível</span> </a>
			                <a href="#"><span><i class="fa fa-file-text"></i> Resenha</span> </a>
			                <a href="#"><span><i class="fa fa-quote-right"></i> Citar livro</span></a>
			            </div>

		                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>		                
		            </li>

		            <li class="tab-sobre-autor">
		                 <br />
		                <span><img src="" /> Autor Um</span><br />
		                <a href="#">www.blogdoautor.com</a>
		                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

		                 <br />
		                <span><img src="" /> Autor Um</span><br />
		                <a href="#">www.blogdoautor.com</a>
		                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

		                 <br />
		                <span><img src="" /> Autor Um</span><br />
		                <a href="#">www.blogdoautor.com</a>
		                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		            </li>

		            <li>
		                <table class="tabela-especificacao-livro">
						  <tr>
						    <td>Idioma</td>
						    <td>Português</td>
						  </tr>
						  <tr>
						    <td>Páginas</td>
						    <td>254</td>
						  </tr>
						  <tr>
						    <td>Editora/Selo</td>
						    <td>PUCPress</td>
						  </tr>
						  <tr>
						    <td>Área</td>
						    <td>Arquitetura e Urbanismo</td>
						  </tr>
						  <tr>
						    <td>Ano</td>
						    <td>2014</td>
						  </tr>
						  <tr>
						    <td>ISBN</td>
						    <td>2518548651/8</td>
						  </tr>
						</table>
		            </li>
		           
		        </ul>

				<div class="calltoaction-comprar">
					
					<button><i class="fa fa-download"></i> Download gratuito do livro</button>
				</div> <!-- fecha calltoaction-comprar -->

				
			</div><!-- fecha info-livro -->
		</div><!-- fecha container livro -->

		<?php
		require('componentes/footer.php');
		?>

		<script src="js/classie.js"></script>
		<script src="js/search-checkout.js"></script>
		
	</body>
</html>