<?php
require ("cab.php");
?>
<body>
	<?php
	require ('componentes/cabecalho.php');
	
	echo '<div class="header-livros">';
	
	/* Bread Crumb */
	$it = array();
	array_push($it, array('Busca', 'search.php'));
	echo $hd -> breadcrumb($it);

	/* titulo da pagina */
	echo '<h1>BUSCA</h1>';

	if (strlen($dd[1]) > 0) {

		/* Busca */
		require ('_class/_class_produto.php');
		$prod = new produto;

		echo $prod -> search($dd[1]);
	} else {
		echo 'Mostra formulario';
	}

	echo '</div>';
	
	require ('componentes/footer.php');
	?>
	<script src="js/classie.js"></script>
	<script src="js/search-checkout.js"></script>
</body>
</html>