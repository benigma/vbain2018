<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php wp_title('|','true','right'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet">
	
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png" sizes="32x32" />
	<link href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-180x180.png" rel="apple-touch-icon" sizes="180x180" />
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/android-chrome-192x192.png" sizes="192x192">
	
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<?php wp_head(); ?>
	
</head>
<body <?php body_class(); ?>>


<div id="introduction">
	<header>
		<nav>
			<?php 
				$defaults = array(	
					'container' => false, 
					'container_id' => false,
					'theme_location' => 'home-menu'
				);
												
				wp_nav_menu( $defaults );
			?>
			<?php if (sizeof(jigoshop_cart::$cart_contents) > 0) { ?>
				<div class="swatches"><a href="/swatches/">Swatches <span class="swatch-count"><?php echo sizeof(jigoshop_cart::$cart_contents); ?></a></span></div>
			<?php } else { } ?>
			<div class="logo">
				<a href="<?php echo get_site_url(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/img/SVG/vb-logo.svg" alt="Victoria Bain Embroidered Textiles" title="Victoria Bain Embroidered Textiles" />
				</a>
			</div>
		</nav>
		
	</header>
</div>