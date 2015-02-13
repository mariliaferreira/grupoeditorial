<?php
class produto
	{
	var $tabela = '';
	
	function vitrine($tipo)
		{
			$cr = chr(13).chr(10);
			$sx = '';
			$sx .= '<ul class="cbp-rfgrid">'.$cr;
			for ($r=1; $r <= 10;$r++)
				{
					$sx .= $this->show_produto($ln);
				}
			$sx .= '</ul>'.$cr;
			return($sx);
		}
		
	function show_produto($ln)
		{
			$cr = chr(13).chr(10);
			$titulo = $ln->titulo;
			$comment = $ln->coment;
			
			/* temporario */
			$titulo = 'Título obra';
			$comment = 'Comentários';
			$sx = $cr;
			$sx .= '<li>
					<a href="#"><img src="" />
						<div><h3>'.$titulo.'</h3>
					</div></a>
					<a href="">'.$comment.'</a>
					</li>';

			/* substituir por:
			(tirar linha preço promoção para produtos que não estão em promoção)

				<li>
					<a href="../grupoeditorial/livros-detalhe.php">
						<div>
							<section class="selo-livro pucpress-selo"></section>
							<img src="img/teste-livro-1.jpg" />
						</div>
						<div>
							<h6>Título do Livro Título do Livro</h6>
							<h6 class="preco-promocao"><strike>R$45,00</strike></h6>
							<h6>R$45,00</h6>
						</div>
					</a>
					<a href="">
						<span class="add-carrinho">Adicionar ao carrinho</span>
					</a>
					</li>

			*/
			return($sx);
		}	
	}
?>
