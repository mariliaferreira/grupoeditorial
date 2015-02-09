<?php
require("_class/_class_produto.php");
$pd = new produto;

?>
<ul class="icones-vitrine">
	<li><img src="img/icone-mais-vendido.png" /></li>
	<li><img src="img/icone-promocao.png" /></li>
	<li><img src="img/icone-lancamento.png" /></li>
	<li><img src="img/icone-mais-vendido-ebook.png" /></li>
	<li><img src="img/icone-mais-vendido-ebook.png" /></li>
</ul>

<?php
echo $pd->vitrine("A");
?>
