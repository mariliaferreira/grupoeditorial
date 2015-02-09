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
			return($sx);
		}	
	}
?>
