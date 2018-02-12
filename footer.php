<footer>
	<div class="address">
	Victoria Bain Embroidered Textiles, Studio 34, Archway Studios, Bickerton House, 25 – 27 Bickerton Road, London, N19 5JT <br /><span>Telephone</span> +44 (0)20 7263 7518 <span class="email">Email</span> <a href="mailto:sales@victoriabain.co.uk">sales@victoriabain.co.uk</a>
	</div>

<div class="copyright">
		<a href="https://twitter.com/VictoriaBainTex" target="_blank"><img src="http://www.victoriabain.co.uk/wp-content/uploads/2017/01/twitter.png" width="26" border="0" /></a> 
        <a href="https://www.pinterest.co.uk/victoriabaintex/" target="_blank"><img src="http://www.victoriabain.co.uk/wp-content/uploads/2017/01/pinterest.png" width="26" border="0" hspace="10" /></a> 
       <a href="https://www.instagram.com/victoriabaintex/" target="_blank"><img src="http://www.victoriabain.co.uk/wp-content/uploads/2017/01/instagram.png" width="26" border="0" /></a> 
	</div>

	<div class="copyright">

		&copy; Victoria Bain <?php echo date('Y'); ?>
	</div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>


<script>
	
	$(document).ready(function(){
	
		$('#menuIcon').click( function () {
			$("#navigationArea").toggleClass("click");
			$("#menuIcon").toggleClass("open");
		} );
	
	})
	
</script>

<script src="<?php echo get_template_directory_uri(); ?>/js/rebound.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/util.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js" type="text/javascript"></script>

<link href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css" type="text/css" rel="stylesheet">

<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js" type="text/javascript"></script>

<script>
	var owl;
	
	$(document).ready(function () {
	
	function customPager() {
	
	    $.each(this.owl.userItems, function (i) {
	
	        var titleData = jQuery(this).find('img').attr('title');
	        var paginationLinks = jQuery('.owl-controls .owl-pagination .owl-page span');
	
	    $(paginationLinks[i]).append(titleData);
	
	    });
	
	}
		$('.owl-carousel').owlCarousel({stagePadding: 0,
		    margin:0,
		    nav:false,
		    autoplay: true,
		    onResize: true,
		    autoHeight:false,
		    center: true,
		    singleItem: true,
		    items:1,
		    responsiveClass:true,
		    loop:true,
			responsive:{
			    0:{
			        items:1,
			        nav:false,
			        singleItem: true,
			  		stagePadding: 0
			    },
			    768:{
			        items:1,
			        nav:false,
			        singleItem: true,
			        loop:true,
  			        stagePadding: 0
			    },
			    1280:{
			        items:1,
			        nav:false,
			        singleItem: true,
			        loop:true,
			          stagePadding: 0
			    },
			    375:{
			        items:1,
			        nav:false,
			        singleItem: true,
			        stagePadding: 0
			    }
			}
		})
		
		owl = $('.owl-carousel').owlCarousel();
		$(".prev").click(function () {
		owl.trigger('prev.owl.carousel');
		});
		
		$(".next").click(function () {
		owl.trigger('next.owl.carousel');
		});
		
	});
		
</script>

<?php wp_footer(); ?>

<script async defer data-pin-hover="true" data-pin-tall="true" data-pin-lang="en" src="//assets.pinterest.com/js/pinit.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-84336454-1', 'auto');
  ga('send', 'pageview');

</script>
	
</body>
</html>