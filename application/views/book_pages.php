<meta name="viewport" content="width = 1050, user-scalable = no" />
<script type="text/javascript" src="<?php echo base_url('js/modernizr.2.5.3.min.js');?>"></script>
<body>

	<div class="flipbook-viewport">
		<div class="container">
			<div class="flipbook">
				<?php
				$pags = 50;
				$link = '_livros/ebook/001/pages/';
				$npags = '<div class="page" style="background-image:url('.($link.'1.jpg').')"></div>'.chr(13).chr(10);
				for ($r = 2; $r < $pags; $r++) {
					$npags .= '<div class="double" style="background-image:url('.($link.$r.'.jpg').'"></div>'.chr(13).chr(10);
				}
				$npags .= '<div class="page" style="background-image:url('.($link.$pags.'.jpg').'"></div>'.chr(13).chr(10);
				echo $npags;
				?>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		function loadApp() {
			var flipbook = $('.flipbook');
			// Check if the CSS was already loaded
			if (flipbook.width() == 0 || flipbook.height() == 0) {
				setTimeout(loadApp, 10);
				return;
			}
			$('.flipbook .double').scissor();
			// Create the flipbook
			$('.flipbook').turn({
				// Elevation
				elevation : 50,
				// Enable gradients
				gradients : true,
				// Auto center this flipbook
				autoCenter : true
			});
		}

		// Load the HTML4 version if there's not CSS transform
		yepnope({
			test : Modernizr.csstransforms,
			yep : ['js/turn/turn.min.js'],
			nope : ['js/turn/turn.html4.min.js'],
			both : ['js/turn/scissor.min.js', 'css/double-page.css'],
			complete : loadApp
		});

	</script>
