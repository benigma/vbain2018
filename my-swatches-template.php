<?php 
//Template Name: My Swatches
if(isset($_GET['empty'])) { 
	jigoshop_cart::empty_cart();
}
get_header();

$jigoshop_options = Jigoshop_Base::get_options(); ?>
<?php $cartcount = sizeof(jigoshop_cart::$cart_contents); ?>

<div id="body" class="wrap">
		
		<div id="swatches-container">
			<?php do_action('jck_messages'); ?>
            <?php if (sizeof(jigoshop_cart::$cart_contents) > 0) { ?>
            	<h1 class="head">Order Your Swatches</h1>
            	<ul id="swatches-list">
	                <?php foreach (jigoshop_cart::$cart_contents as $item_id => $values) :
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
							?>
	
	                            <li>
	                            	<?php echo $swatch; ?>
									<h3><?php echo $_product->get_title() . $variation; ?></h3> 
									<?php echo get_the_post_thumbnail($_product); ?>
									<div class="swatch-remove">
										<button onclick="location.href='<?php echo jigoshop_cart::get_remove_url($item_id); ?>';" class="remove">Remove this swatch</button>
									</div>
								</li>
	
						<?php endif;
					endforeach; ?>
            	</ul>
            </div>
            <div style="clear: both;"></div>
            <h3 class="get-samples">Request Samples For: <span><?php echo ($cartcount > 1) ? $cartcount . ' Swatches' : $cartcount . ' Swatch'; ?></span></h3>
            
            <div class="contact-form">
            
				<?php echo do_shortcode('[contact-form-7 id="341" title="Swatches Order Form"]'); ?>
				<p class="large-samples">Should you wish to request larger returnable samples, prices, or discuss a custom project through in more detail please add any additional comments in the field supplied or use the form on our <a href="/contact">contact page</a> and we will get back to you as soon as possible.</p>
			
			<?php } else { ?>
					
						<?php while ( have_posts() ) : the_post(); ?>
							<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
								<?php the_excerpt(); ?>
							<?php else : ?>
								<?php the_content(); ?>
							<?php endif; ?>
						<?php endwhile; ?>
				
			<?php } ?>
			
			</div>
	
</div>
<?php get_footer('large'); ?>