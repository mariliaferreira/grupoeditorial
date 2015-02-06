
			(function() {
				[].slice.call( document.querySelectorAll( '.search' ) ).forEach( function( el ) {
					var openCtrl = el.querySelector( '.search__button' ),
						closeCtrls = el.querySelectorAll( '.search__cancel' );

					openCtrl.addEventListener( 'click', function(ev) {
						ev.preventDefault();
						classie.add( el, 'search--active' );
					} );

					[].slice.call( closeCtrls ).forEach( function( ctrl ) {
						ctrl.addEventListener( 'click', function() {
							classie.remove( el, 'search--active' );
						} );
					} );
				} );
			})();
