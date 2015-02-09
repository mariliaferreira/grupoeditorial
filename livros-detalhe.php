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
		</div>

		<div class="container-livro">
			<div class="preview-livro">
			</div> <!-- fecha preview livro -->

			<div class="info-livro">
				<ul id="tabs">
            <li class="active">sobre o livro</li>
            <li>sobre o autor</li>
            <li>especifica��es</li>
        </ul>
        <ul id="tab">
            <li class="active">
                <h2>T�tulo do Livro</h2>
                <h3>Subt�tulo do Livro</h3>

                <div class="lista-autores-livros">
                	<span><img src="" /> Autor Um</span>
                	<span><img src="" /> Autor Dois</span>
                	<span><img src="" /> Autor Tr�s</span>
                </div>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <p>Voc� gostaria da vers�o e-book deste livro? <a href="#">Conte para o autor.</a></p>

                <div>
	                <span><i class="fa fa-check-circle"></i> Dispon�vel</span> 
	                <span><i class="fa fa-file-text"></i> Resenha</span> 
	                <span><i class="fa fa-quote-right"></i> Citar este livro</span> 
	                <span><i class="fa fa-download"></i> Download PDF Cap�tulo 1 (Gratuito)</span>
	            </div>
            </li>

            <li>
                <span><img src="" /> Autor Um</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                <span><img src="" /> Autor Dois</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                <span><img src="" /> Autor Tr�s</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </li>

            <li>
                <table>
				  <tr>
				    <td>Idioma</td>
				    <td>Portugu�s</td>
				  </tr>
				  <tr>
				    <td>P�ginas</td>
				    <td>254</td>
				  </tr>
				  <tr>
				    <td>Editora/Selo</td>
				    <td>PUCPress</td>
				  </tr>
				  <tr>
				    <td>�rea</td>
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
					<span>R$25,00</span>
					<button>Adicinar ao Carrinho</button>
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