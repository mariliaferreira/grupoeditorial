<?php
/* Codigo do PHP */
?>
<header>
	<div class="logo" id="logo">
		<a href="index.php">
			<img src="img/editoriais-pucpr.png" />
		</a>
	</div><!-- /logo -->
	
	<div class="selos" id="selos">
		<ul>
			<li><a href="#" target="_blank"><img src="img/selo-pucsul.png" /></a></li>
			<li><a href="#" target="_blank"><img src="img/selo-champagnat.png" /></a></li>
			<li><a href="#" target="_blank"><img src="img/selo-pucpress.png" /></a></li>
		</ul>
	</div><!-- /selos -->

	<div class="user-acess">
		<ul>
			<li><a href="cadastro.php">Cadastrar-se</a></li>
			<li><a href="login.php">Login</a></li>
		</ul>
	</div><!-- /user-acess -->

	<div class="search">
		<a class="search__button" href="#"><!-- Fallback location -->
			<span class="search__text">
				<img src="img/search-icon.png" class="search-icon" />
			</span>
		</a>

		<div class="search__order">
			<div class="search__order-inner">
				<form action="search.php" method="get">
				<input placeholder="Qual título?" name="dd1" class="input-buscar"></input>
				<button class="search__close search__cancel"><i class="icon fa fa-fw fa-close"></i>Close</button>
				<button class="button-buscar" name="acao">buscar</button>
				</form>
			</div><!-- /search__order-inner -->
		</div><!-- /search__order -->
	</div><!-- /search -->

<?php
$carrinho_items = 2;
if ($carrinho_items == 0)
{
	$sx = '
	<section class="content">
		<div class="checkout">
			<a class="checkout__button" href="meucarrinho.php">
				<span class="checkout__text">
					<span class="numero-produtos-adicionados">2</span>
					<svg class="checkout__icon" width="30px" height="30px" viewBox="0 0 35 35">
						<path fill="#fff" d="M33.623,8.004c-0.185-0.268-0.486-0.434-0.812-0.447L12.573,6.685c-0.581-0.025-1.066,0.423-1.091,1.001 c-0.025,0.578,0.423,1.065,1.001,1.091L31.35,9.589l-3.709,11.575H11.131L8.149,4.924c-0.065-0.355-0.31-0.652-0.646-0.785 L2.618,2.22C2.079,2.01,1.472,2.274,1.26,2.812s0.053,1.146 0.591,1.357l4.343,1.706L9.23,22.4c0.092,0.497,0.524,0.857,1.03,0.857 h0.504l-1.15,3.193c-0.096,0.268-0.057,0.565,0.108,0.798c0.163,0.232,0.429,0.37,0.713,0.37h0.807 c-0.5,0.556-0.807,1.288-0.807,2.093c0,1.732,1.409,3.141,3.14,3.141c1.732,0,3.141-1.408,3.141-3.141c0-0.805-0.307-1.537-0.807-2.093h6.847c-0.5,0.556-0.806,1.288-0.806,2.093c0,1.732,1.407,3.141,3.14,3.141 c1.731,0,3.14-1.408,3.14-3.141c0-0.805-0.307-1.537-0.806-2.093h0.98c0.482,0,0.872-0.391,0.872-0.872s-0.39-0.873-0.872-0.873 H11.675l0.942-2.617h15.786c0.455,0,0.857-0.294,0.996-0.727l4.362-13.608C33.862,8.612,33.811,8.272,33.623,8.004z M13.574,31.108c-0.769,0-1.395-0.626-1.395-1.396s0.626-1.396,1.395-1.396c0.77,0,1.396,0.626,1.396,1.396S14.344,31.108,13.574,31.108z M25.089,31.108c-0.771,0-1.396 0.626-1.396-1.396s0.626-1.396,1.396-1.396c0.77,0,1.396,0.626,1.396,1.396 S25.858,31.108,25.089,31.108z"/>
					</svg>
				</span>
			</a>
		</div><!-- /checkout -->
	</section><!-- /content -->
	';
} else {
	$sx = '
	<section class="content">
		<div class="checkout">
			<a class="checkout__button" href="meucarrinho.php">
				<span class="checkout__text" class="numero-produtos-adicionados">
					<svg class="checkout__icon" width="30px" height="30px" viewBox="0 0 35 35">
						<path fill="#fff" d="M33.623,8.004c-0.185-0.268-0.486-0.434-0.812-0.447L12.573,6.685c-0.581-0.025-1.066,0.423-1.091,1.001 c-0.025,0.578,0.423,1.065,1.001,1.091L31.35,9.589l-3.709,11.575H11.131L8.149,4.924c-0.065-0.355-0.31-0.652-0.646-0.785 L2.618,2.22C2.079,2.01,1.472,2.274,1.26,2.812s0.053,1.146 0.591,1.357l4.343,1.706L9.23,22.4c0.092,0.497,0.524,0.857,1.03,0.857 h0.504l-1.15,3.193c-0.096,0.268-0.057,0.565,0.108,0.798c0.163,0.232,0.429,0.37,0.713,0.37h0.807 c-0.5,0.556-0.807,1.288-0.807,2.093c0,1.732,1.409,3.141,3.14,3.141c1.732,0,3.141-1.408,3.141-3.141c0-0.805-0.307-1.537-0.807-2.093h6.847c-0.5,0.556-0.806,1.288-0.806,2.093c0,1.732,1.407,3.141,3.14,3.141 c1.731,0,3.14-1.408,3.14-3.141c0-0.805-0.307-1.537-0.806-2.093h0.98c0.482,0,0.872-0.391,0.872-0.872s-0.39-0.873-0.872-0.873 H11.675l0.942-2.617h15.786c0.455,0,0.857-0.294,0.996-0.727l4.362-13.608C33.862,8.612,33.811,8.272,33.623,8.004z M13.574,31.108c-0.769,0-1.395-0.626-1.395-1.396s0.626-1.396,1.395-1.396c0.77,0,1.396,0.626,1.396,1.396S14.344,31.108,13.574,31.108z M25.089,31.108c-0.771,0-1.396 0.626-1.396-1.396s0.626-1.396,1.396-1.396c0.77,0,1.396,0.626,1.396,1.396 S25.858,31.108,25.089,31.108z"/>
					</svg>
					2
				</span>
			</a>
		</div><!-- /checkout -->
	</section><!-- /content -->
	';	
}
echo $sx;
?>
</header> 

<input type="checkbox" name="toggle" id="toggle" />
<label for="toggle" id="labelmenu"><img src="img/menu-teste.png" class="icon-menu"/></label>



<nav id="nav-main2" class="nav-main2">
	<ul>
	    <li><a href="livros.php">Livros</a></li>
	    <li><a href="ebooks.php">E-books</a></li>
	    <li><a href="revistas.php">Revistas</a></li>
	    <li><a href="colecoes.php">Coleções</a></li>
	    <li><a href="promocoes.php">Promoções</a></li>
	    <li><a href="lancamento.php">Lançamentos</a></li>
	    <li><a href="resenhas.php">Resenhas</a></li>
	    <li><a href="index.php">Editora Champagnat</a></li>
	</ul>
</nav>