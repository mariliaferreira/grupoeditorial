<?php
class produto {
	var $tabela = '';
	var $line;
	var $esgotado = 0;
	var $autores = array();
	
	function mostra_preco($preco,$promo)
		{
			$sx = 'R$ '.number_format($preco,2,',','.');
			if ($promo > 0)
				{
					$sx = '<S>R$ '.number_format($preco,2,',','.').'</S>';
					$sx .= ' por R$ '.number_format($promo,2,',','.');		
				}
			return($sx);
		}
	function le($id)
		{
			$sql = "select * from obra 
						left join tipo on ob_tipo = to_codigo
						where id_ob = $id ";
			$rlt = db_query($sql);
			$line = db_read($rlt);
			$this->line = $line;
			
			$this->autores = $this->autores($id);
			return(1);
		}
	
	function autores($id)
		{
			$autores = array();
			array_push($autores,array('Fulano','0000001'));
			return($autores);
		}

	function search($termo, $tipo = 1) {
		$sql = "select * from obra
					where ob_titulo like '%$termo%'
					";
		$rlt = db_query($sql);
		$sx = '
			<div class="container-livros">
			<ul class="cbp-rfgrid">
			';
		while ($line = db_read($rlt)) {
			$sx .= $this -> show_produto($line);
		}
		$sx .= '</ul></div>';
		return ($sx);
	}

	function vitrine($tipo) {
		$cr = chr(13) . chr(10);
		$sx = '';
		$sx .= '<ul class="cbp-rfgrid">' . $cr;
		for ($r = 1; $r <= 10; $r++) {
			$sx .= $this -> show_produto($ln);
		}
		$sx .= '</ul>' . $cr;
		return ($sx);
	}

	function show_produto($ln) {
		$cr = chr(13) . chr(10);
		$titulo = $ln['ob_titulo'];
		$preco = $ln['ob_preco'];
		$promo = $ln['ob_preco_por'];
		$id = $ln['id_ob'];

		$comment = $ln -> coment;

		/* temporario */
		$comment = 'Comentários';
		$sx = $cr;

		/* Selo */
		$selo = '<section class="selo-livro pucpress-selo"></section>';

		/* Preco */
		$sp = '<h6>R$' . number_format($preco, 2, ',', '.') . '</h6>';
		if ($promo > 0) {
			$sp = '<h6 class="preco-promocao"><strike>R$' . number_format($preco, 2, ',', '.') . '</strike></h6>';
			$sp .= '<h6>R$' . number_format($promo, 2, ',', '.') . '</h6>';
		}

		/* Esgotado */
		$esgotado = 0;
		if ($preco == 0) {
			$sp = '<h6>Esgotado</h6>';
			$esgotado = 1;
		}
		$preco = $sp;

		$sx .= '
				<li>
					<a href="../grupoeditorial/produto-detalhe.php?dd0='.$id.'&dd90='.checkpost($id).'">
						<div>
							' . $selo . '
							<img src="img/teste-livro-1.jpg" />
						</div>
						<div>
							<h6>' . $titulo . '</h6>
							' . $preco . '
							
						</div>
					</a>';

		/* Adicionar ao carrinho */
		if ($esgotado == 1) {
			/* Esgotado */
			$sx .= '';
		} else {
			/* Mostra botao adicionar */
			$sx .= '
					<a href="">
						<span class="add-carrinho">Adicionar ao carrinho</span>
					</a>
				';
		}
		$sx .= '</li>';
		return ($sx);
	}

}
?>
