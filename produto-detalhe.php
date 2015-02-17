<?php
require ("cab.php");

require ('componentes/cabecalho.php');

$id = sonumero($dd[0]);

require ("_class/_class_produto.php");
$prod = new produto;
$prod -> le($id);

/* Dados do produto */
$tipo_obra = trim($prod -> line['to_nome']);
$titulo_obra = trim($prod -> line['ob_titulo']);
$preco = $prod -> line['ob_preco'];
$promo = $prod -> line['ob_preco_por'];
$sinop = $prod -> line['ob_sinopse'];

$autor = $prod-> autores;

$sx = '
		<div class="header-livros">
			<div class="breadcrumb">
				<ul>
					<li><a href=""><i class="fa fa-home"></i></a></li> <span>></span>
					<li><a href="">' . $tipo_obra . '</a></li> <span>></span>
					<li><a href="">' . $titulo_obra . '</a></li>
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
		                <h2>' . $titulo_obra . '</h2>
		                <h3>' . $titulo_obra_subtitulo . '</h3>

		                <div class="lista-autores-livros">
		                	<span><img src="" /> Autor Um</span>
		                	<span><img src="" /> Autor Dois</span>
		                	<span><img src="" /> Autor Três</span>
		                </div>

		                <div class="botoes-acoes-livros">
			                <a href="#"><span><i class="fa fa-minus-circle indisponivel"></i> Indisponível</span> </a>
			                <a href="#"><span><i class="fa fa-file-text"></i> Resenha</span> </a>
			                <a href="#"><span><i class="fa fa-quote-right"></i> Citar livro</span></a>
			            </div>
						<P>' . ($sinop) . '</P>
		                
		            </li>

		            <li class="tab-sobre-autor">
		                <br />
		                <span><img src="" /> Autor Um</span><br />
		                <a href="#">www.blogdoautor.com</a>
		                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

		                <br />
		                <span><img src="" /> Autor Dois</span><br />
		                <a href="#">www.blogdoautor.com</a>
		                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

		                <br />
		                <span><img src="" /> Autor Três</span><br />
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
					<span>' . $prod -> mostra_preco($preco, $promo) . '</span>
					<button>Adicionar ao Carrinho</button>
				</div> <!-- fecha calltoaction-comprar -->

				<div class="frete-prazo">
					<span>Frete e Prazo</span><br />
					<input placeholder="CEP"></input> - <input></input>
					<button>Calcular</button>
				</div><!-- fecha frete-prazo -->


			</div><!-- fecha info-livro -->
		</div><!-- fecha container livro -->
		';
echo $sx;
require ('componentes/footer.php');
?>

<script src="js/classie.js"></script>
<script src="js/search-checkout.js"></script>

</body>
</html>