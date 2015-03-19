<?php
class header {
	
	function breadcrumb($it=array())
		{
			
			for ($r=0;$r<count($it);$r++)
				{
					if ($r > 0)
						{
							$items .= '<span>></span>'.chr(13).chr(10);
						}
					$items .= '<li><a href="'.$it[$r][1].'">'.$it[$r][0].'</a></li>';
					
				}
			$sx = '
			<div class="breadcrumb">
				<ul>
					<li><a href="index.php"><i class="fa fa-home"></i></a></li><span>></span>
					'.$items.'
				</ul>
			</div>
			';
			return($sx);			
		}

	function header() {
		$cr = chr(13) . chr(10);
		$sx = '<!DOCTYPE html>' . $cr;
		$sx .= '<html>' . $cr;
		$sx .= '	<head>' . $cr;
		$sx .= '	  <title>Grupo Editorial PUCPR - Editora Champagnat, PUCPress e PUCSul</title>' . $cr;

		$sx .= '	  <!-- Meta Tags - Informacoes sobre o Website -->' . $cr;
		$sx .= '	  <meta name="viewport" content="width=device-width, initial-scale=1">' . $cr;
		$sx .= '	  <meta name="keywords" content="grupo editorial pucpr, champagnat, pucpress, pucsul, livro, livros, revistas, acadêmico, pucpr">' . $cr;
		$sx .= '	  <meta name="description" content="Grupo Editorial PUCPR - Editora Champagnat, PUCPress e PUCSul">' . $cr;
		$sx .= '	  <meta http-equiv="content-language" content="pt-br">' . $cr;
		$sx .= '	  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">' . $cr;
		$sx .= '	  <meta name="author" content="Grupo Editorial PUCPR">' . $cr;
		$sx .= '	  <meta name="reply-to" content="contato@editorachampagnat.com.br">' . $cr;

		$sx .= '	  <!-- Arquivos de CSS -->' . $cr;
		$sx .= '	  <link rel="stylesheet" type="text/css" href="css/estilo.css">' . $cr;
		$sx .= '	  <link rel="stylesheet" type="text/css" href="css/normalize.css">' . $cr;
		$sx .= '	  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />' . $cr;

		$sx .= '	  <!-- Arquivos de Javascript -->' . $cr;
		$sx .= '	  <script src="//code.jquery.com/jquery-1.10.2.js"></script>' . $cr;
		$sx .= '  	  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>' . $cr;
		$sx .= '  	  <script src="js/responsive-menu.js"></script>' . $cr;
		$sx .= '  	  <script src="js/_cesta_compras.js"></script>' . $cr;
		
		$sx .= '	</head>' . $cr;
		return ($sx);
	}

}
?>
