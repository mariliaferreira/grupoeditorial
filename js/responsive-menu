function init() {
		        window.addEventListener('scroll', function(e){
		            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
		                shrinkOn = 300,
		                header = document.querySelector("header");
		                nav = document.querySelector("nav");
		                label = document.querySelector("label");
		            
		            if (distanceY > shrinkOn) {
		                classie.add(header,"smaller");
		                classie.add(nav,"smallernav");
		                classie.add(nav,"smallerlabel");
		            } else {
		                if (classie.has(header,"smaller")) {
		                    classie.remove(header,"smaller");
		                }

		                if (classie.has(nav,"smallernav")) {
		                    classie.remove(nav,"smallernav");
		                }

		                if (classie.has(label,"smallerlabel")) {
		                    classie.remove(lavel,"smallerlabel");
		                }
		            }
		        });
		    }
		    window.onload = init();