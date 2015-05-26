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
<?php echo $basket; ?>
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