	<script>

	  (jQuery)(document).ready(function() {  

	    var deck = new (jQuery).scrolldeck({

	        buttons: '.nav-button', 

	        slides: '.slide',

	        duration: 1000,

	        easing: 'easeInOutExpo'

	    });

	    // animate the parallaxing

		// deck.controller.animate('#parallax2',{ delay: 400, duration: 600, property:'top', start:800, end:-800 });

		// deck.controller.animate('.parallax3',{ delay: 200, duration: 1200, property:'top', start:500, end:-500 });

	});

	</script>

	<?php wp_footer(); ?>

</body>
</html>