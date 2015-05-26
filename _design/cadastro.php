<?php
require ("cab.php");
require ('componentes/cabecalho.php');

/* Cadastro */
$nome = $dd[1];
$email = $dd[2];
$senha = $dd[3];

if (strlen($email) > 0)
	{
		require("_class/_class_cliente.php");
		$cli = new cliente;
		
		$ok = $cli->existe_cliente($email);
		
		if ($ok == 0)
			{
				$erro = '';
				$cli->cadastra_cliente($nome,$email,$senha);
			} else {
				$erro = '<span class="email_error">e-mail já cadastrado</span>';				
			}

	}


$sx = '
<body>
	<div class="header-livros">
		<div class="breadcrumb">
			<ul>
				<li>
					<a href=""><i class="fa fa-home"></i></a>
				</li>
				<span>></span>
				<li>
					<a href="">Cadastro</a>
				</li>
			</ul>
		</div>
	</div>
	<form method="post">
		<div class="communication-box">
			<img src="img/icone-livro.png" />
			<h1>cadastro</h1>

			<div class="div-input">
				<label>Nome</label>
				<br />
				<input placeholder="" type="text" class="input-texto" name="dd1" value="'.$dd[1].'">
				</input>
				<br />
				<label>Email</label>
				<br />
				<input placeholder="" type="email" class="input-texto" name="dd2" value="'.$dd[2].'">
				</input>
				<br />
				<label>Senha</label>
				<br />
				<input placeholder="" type="password" class="input-texto" name="dd3" value="'.$dd[3].'">
				</input>
				<br />
				'.$erro.'
			</div>

			<button class="botao-communication-box login-normal">
				Criar minha conta
			</button>
			<br />
			<span class="small-grey">ou</span>
			<br />
			<button class="botao-communication-box login-facebook">
				<i class="fa fa-facebook-square"></i> Login com Facebook
			</button>
			<br />

			<a href="" class="usuario-sem-conta-calltoaction">Não tenho conta ainda</a>

		</div>
	</form>
';
echo $sx;

require ('componentes/footer.php');

?>

	<script src="js/classie.js"></script>
	<script src="js/search-checkout.js"></script>

</body>
</html>