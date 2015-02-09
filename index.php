<?php
require("_class/_class_header.php");
$hd = new header;

/* Header */
echo $hd->header();
?>
<body>
		<?php
		require('componentes/cabecalho.php');
		require('componentes/banners.php');
		require('componentes/vitrine.php');
		require('componentes/footer.php');
		?>
		<script src="js/classie.js"></script>
		<script src="js/search-checkout.js"></script>	
	</body>
</html>