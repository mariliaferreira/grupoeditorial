<?php
require ("cab.php");
require ('componentes/cabecalho.php');
?>

<div class="header-livros">
	<?php
	/* Bread Crumb */
	$it = array();
	array_push($it, array('eBooks', 'ebook.php'));
	echo $hd -> breadcrumb($it);
	?>

	<h1>EBOOKS</h1>

	<div class="tag" id="tag-ebooks">
		<ul>
			<a href="#">
			<li>
				Tag 1
			</li></a>
			<a href="#">
			<li>
				Tag 2
			</li></a>
			<a href="#">
			<li>
				Tag 3
			</li></a>
			<a href="#">
			<li>
				Tag 4
			</li></a>
			<a href="#">
			<li>
				Tag 5
			</li></a>
			<a href="#">
			<li>
				Tag 6
			</li></a>
			<a href="#">
			<li>
				Tag 7
			</li></a>
		</ul>
	</div>

	<!-- <div>
	<p>Ebooks sobre<br />
	Tag 1, Tag 2...
	</p>
	</div> -->

</div>

<?php
require ('componentes/container-livros.php');
require ('componentes/footer.php');
?>

<script src="js/classie.js"></script>
<script src="js/search-checkout.js"></script>

</body>
</html>