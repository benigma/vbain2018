<?php

// adding functionality for nav menus on the admin area

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 370, 250 );

add_image_size( 'Large', 600, 600, false );

function register_theme_menus () {

	register_nav_menus(
		array(
				'home-menu' => __( 'Home Menu' ),
				'couture-menu' => __( 'Couture Menu' ),
				'collections-menu' => __( 'Collections Menu' )
			)
		);
}

add_action( 'init', 'register_theme_menus' );

function remove_admin_bar_style_frontend() { 
  echo '<style type="text/css" media="screen">
  html { margin-top: 0px !important; }
  * html body { margin-top: 0px !important; }
  </style>';
}

add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}

add_filter('wp_head','remove_admin_bar_style_frontend', 99);
add_filter('show_admin_bar', '__return_false');


function pagination($pages = '', $range = 4) {
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '') {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages) {
             $pages = 1;
         }
     }   
 
     if(1 != $pages) {
         echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
 
         for ($i=1; $i <= $pages; $i++) {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
         echo "</div>\n";
     }
}

function change_footer_admin () {
  echo 'Victoria Bain';
}  
add_filter('admin_footer_text', 'change_footer_admin');

// [swatches]
function swatches_func( $atts ) {
	extract( shortcode_atts( array(
		'foo' => 'something'
	), $atts ) );
	
	$swatches = '';
	
	if (sizeof(jigoshop_cart::$cart_contents) > 0) :
	
		foreach (jigoshop_cart::$cart_contents as $item_id => $values) :
            $_product = $values['data'];
            if ($_product->exists() && $values['quantity'] > 0) :

				$variation = jigoshop_cart::get_item_data($values);

				$customization   = '';
				$custom_products = (array) jigoshop_session::instance()->customized_products;
				$product_id      = !empty( $values['variation_id'] )      ? $values['variation_id']       : $values['product_id'];
				$custom          = isset( $custom_products[$product_id] ) ? $custom_products[$product_id] : '';
				
				if(!$_product->post) {
            		$_post = get_post_ancestors( $_product->ID );
            		$pid = ($_post[0]) ? $_post[0] : $product_id; 
            		$_parent_id = $_post[0];
            	} else {
                	$pid = ($_product->post->post_parent) ? $_product->post->post_parent : $product_id;
                	$_parent_id = $_product->post->post_parent;
            	}
            	
            	$swatch = ($_parent_id) ? wp_get_attachment_image(get_field('swatch',$_product->ID), 'product-swatch', false, array( 'class' => 'swatch-thumb' )) : wp_get_attachment_image(get_field('preview',$pid), 'product-swatch', false, array( 'class' => 'swatch-thumb' ));
            	
            	//echo $swatch;
            	$swatches .= '<a href="' . get_permalink($pid) . '">' . $_product->get_title() . $variation . '</a>';
            	$cat = get_jigoshop_cat($pid); 
            	$swatches .= $cat->name;
            
            endif;
		endforeach;
	
	endif;

	return $swatches;
}
add_shortcode( 'swatches', 'swatches_func' );

/* =============================
   Add Shortcode to CF7 for Swatches 
   ============================= */

wpcf7_add_shortcode('swatches', 'wpcf7_sourceurl_shortcode_handler', true);

function wpcf7_sourceurl_shortcode_handler() {
	$swatches = '<textarea class="hide" name="swatches">';
	
	if (sizeof(jigoshop_cart::$cart_contents) > 0) :
	
		foreach (jigoshop_cart::$cart_contents as $item_id => $values) :
            $_product = $values['data'];
            if ($_product->exists() && $values['quantity'] > 0) :
            
            						$variation = jigoshop_cart::get_item_data($values);
            
            						$customization   = '';
            						$custom_products = (array) jigoshop_session::instance()->customized_products;
            						$product_id      = !empty( $values['variation_id'] )      ? $values['variation_id']       : $values['product_id'];
            						$custom          = isset( $custom_products[$product_id] ) ? $custom_products[$product_id] : '';
            						
            						if(!$_product->post) {
                                		$_post = get_post_ancestors( $_product->ID );
                                		$pid = ($_post[0]) ? $_post[0] : $product_id; 
                                		$_parent_id = $_post[0];
                                	} else {
            	                    	$pid = ($_product->post->post_parent) ? $_product->post->post_parent : $product_id;
            	                    	$_parent_id = $_product->post->post_parent;
                                	}
            	
            	$swatches .= $_product->get_title()."\n";
            
            endif;
		endforeach;
	
	endif;
	
	$swatches .= '</textarea>';

	return $swatches;
}


//Yoast UK 
add_filter('wpseo_locale', 'override_og_locale');
function override_og_locale($locale)
{
    return "en_GB";
}

?>