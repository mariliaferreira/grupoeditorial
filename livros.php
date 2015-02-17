<?php
require("cab.php");

		require('componentes/cabecalho.php');
		?>

		<div class="header-livros">
			<div class="breadcrumb">
				<ul>
					<li><a href=""><i class="fa fa-home"></i></a></li> <span>></span>
					<li><a href="">Livros</a></li>
					
				</ul>
			</div>

			<h1>LIVROS</h1>

			<div class="tag" id="tag-livros">
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

			<!-- <div>
				<p>Livros sobre<br />
					Tag 1, Tag 2...
				</p>
			</div> -->


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