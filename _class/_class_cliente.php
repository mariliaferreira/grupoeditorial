<?php
class cliente
{
	var $tabela = 'cliente';
	
	function existe_cliente($email)
		{
				
				$sql = "select * from ".$this->tabela." where clie_email = '$email' ";
				$rlt = db_query($sql);
				
				if ($line = db_read($rlt))
					{
						return(1);
					} else {
						return(0);
					}
		}
	function cadastra_cliente($nome,$email,$senha)
		{
			$sql = "insert into ".$this->tabela." 
				(
				clie_nome, clie_email, clie_senha
				) values (
					'$nome','$email','$senha'
				)
			";
			echo $sql;
		}
}
?>