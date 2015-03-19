function adicionar_na_cesta(prod,div)
	{
		div = '#'+div;		
		$.ajax({
		  	url: "_ajax_carrinho.php"
		}).done(function(data) {
  			$( div ).html(data);
  			$( div ).html(data);
		});
	}
