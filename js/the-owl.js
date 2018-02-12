var owl;
	
	$(document).ready(function () {
	
		$('.owl-carousel').owlCarousel({
			stagePadding: 0,
		    margin:0,
		    nav:false,
		    autoplay: true,
		    onResize: false,
		    autoHeight:false,
		    center: true,
		    singleItem: true,
		    items:1,
		    responsiveClass: false,
		    loop: true,
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
		
	});
	
	