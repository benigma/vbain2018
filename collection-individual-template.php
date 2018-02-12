<?php
/*
Template Name: Individual Collections Page Template
*/
?>
<?php get_header(); ?>

<div class="container">

		<?php if( have_rows('first_swatch_row') ): ?>
			 
			<div class="tabs">
			
			<?php $i = 1; while( have_rows('first_swatch_row') ): the_row(); ?>
			
				<div class="tab-link" data-tab="tab-<?php echo $i; ?>"><img src="<?php echo the_sub_field('swatch_strip'); ?>" />
				<div class="tab-name"><?php echo the_sub_field('swatch_name'); ?></div></div>

			<?php $i++; endwhile; ?>
			
			</div>
			 
		<?php endif; ?>
		
	
	<?php if( have_rows('first_swatch_row') ): ?>
		 
		<?php $n = 1; while( have_rows('first_swatch_row') ): the_row(); ?>
			<div id="tab-<?php echo $n; ?>" class="tab-content">
				<div class="the-tape">
					<span class="closex"><img src="<?php echo get_template_directory_uri(); ?>/img/close-btn.png" /></span>
					
						<div class="tape-swatch">
					
							<?php $field = get_sub_field_object('swatch_single_choice'); $colors = $field['value']; if( $colors && in_array('yes', $colors) ) { ?>
							
								<div class="single-image">
									<img src="<?php echo the_sub_field('swatch_single_image'); ?>" />
									<button onclick="location.href='<?php
									$productID = get_sub_field('swatch_id');
									$_product = &new jigoshop_product( $productID );
									echo $_product->add_to_cart_url(); ?>';">Add this swatch</button>
								</div>
								
							<?php } else { ?>
					
								<div id="owl-demo" class="owl-carousel">
										 
										<?php while( have_rows('swatch_collection') ): the_row(); ?>
										
											<div><img src="<?php echo the_sub_field('sub_swatch_image'); ?>" />
											<div class="intro"><?php echo the_sub_field('sub_swatch_title'); ?></div>
											<button class="single-image" onclick="location.href='<?php
											$productID = get_sub_field('swatch_id');
											$_product = &new jigoshop_product( $productID );
											echo $_product->add_to_cart_url(); ?>';">Add this swatch</button>
											</div>
											
										<?php endwhile; ?>
								</div>
								
							<?php } ?>
					
					</div>
					
					<div class="tape-description">
						<h1><?php echo the_sub_field('swatch_name'); ?></h1>
						<?php echo the_sub_field('swatch_copy'); ?>
					</div>
				</div>
			</div>
					        
		<?php $n++; endwhile; ?>
				 
	<?php endif; ?>

</div>

		<?php if( have_rows('second_swatch_row') ): ?>
			
		<div class="container">
 
			<div class="tabs">
			
			<?php $i = 7; while( have_rows('second_swatch_row') ): the_row(); ?>
			
				<div class="tab-link" data-tab="tab-<?php echo $i; ?>"><img src="<?php echo the_sub_field('swatch_strip'); ?>" />
				<div class="tab-name"><?php echo the_sub_field('swatch_name'); ?></div></div>

			<?php $i++; endwhile; ?>
			
			</div>
			 
		<?php endif; ?>
		
	
	<?php if( have_rows('second_swatch_row') ): ?>
		 
		<?php $n = 7; while( have_rows('second_swatch_row') ): the_row(); ?>
			<div id="tab-<?php echo $n; ?>" class="tab-content">
				<div class="the-tape">
					<span class="closex"><img src="<?php echo get_template_directory_uri(); ?>/img/close-btn.png" /></span>
					<div class="tape-swatch">
					
							<?php $field = get_sub_field_object('swatch_single_choice'); $colors = $field['value']; if( $colors && in_array('yes', $colors) ) { ?>
							
								<div class="single-image">
									<img src="<?php echo the_sub_field('swatch_single_image'); ?>" />
									<button onclick="location.href='<?php
									$productID = get_sub_field('swatch_id');
									$_product = &new jigoshop_product( $productID );
									echo $_product->add_to_cart_url(); ?>';">Add this swatch</button>
								</div>
								
							<?php } else { ?>
					
								<div id="owl-demo" class="owl-carousel">
										 
										<?php while( have_rows('swatch_collection') ): the_row(); ?>
										
											<div><img src="<?php echo the_sub_field('sub_swatch_image'); ?>" />
											<div class="intro"><?php echo the_sub_field('sub_swatch_title'); ?></div>
											<button class="single-image" onclick="location.href='<?php
											$productID = get_sub_field('swatch_id');
											$_product = &new jigoshop_product( $productID );
											echo $_product->add_to_cart_url(); ?>';">Add this swatch</button>
											</div>
											
										<?php endwhile; ?>
								</div>
								
							<?php } ?>
					
					</div>
					
					<div class="tape-description">
						<h1><?php echo the_sub_field('swatch_name'); ?></h1>
						<?php echo the_sub_field('swatch_copy'); ?>
					</div>
				</div>
			</div>
					        
		<?php $n++; endwhile; ?>
	</div>
	<?php endif; ?>

		<?php if( have_rows('third_swatch_row') ): ?>

		<div class="container">
			 
			<div class="tabs">
			
			<?php $i = 13; while( have_rows('third_swatch_row') ): the_row(); ?>
			
				<div class="tab-link" data-tab="tab-<?php echo $i; ?>"><img src="<?php echo the_sub_field('swatch_strip'); ?>" />
				<div class="tab-name"><?php echo the_sub_field('swatch_name'); ?></div></div>

			<?php $i++; endwhile; ?>
			
			</div>
			 
		<?php endif; ?>
		
	
	<?php if( have_rows('third_swatch_row') ): ?>
		 
		<?php $n = 13; while( have_rows('third_swatch_row') ): the_row(); ?>
			<div id="tab-<?php echo $n; ?>" class="tab-content">
				<div class="the-tape">
					<span class="closex"><img src="<?php echo get_template_directory_uri(); ?>/img/close-btn.png" /></span>
					<div class="tape-swatch">
					
							<?php $field = get_sub_field_object('swatch_single_choice'); $colors = $field['value']; if( $colors && in_array('yes', $colors) ) { ?>
							
								<div class="single-image">
									<img src="<?php echo the_sub_field('swatch_single_image'); ?>" />
									<button onclick="location.href='<?php
									$productID = get_sub_field('swatch_id');
									$_product = &new jigoshop_product( $productID );
									echo $_product->add_to_cart_url(); ?>';">Add this swatch</button>
								</div>
								
							<?php } else { ?>
					
								<div id="owl-demo" class="owl-carousel">
										 
										<?php while( have_rows('swatch_collection') ): the_row(); ?>
										
											<div><img src="<?php echo the_sub_field('sub_swatch_image'); ?>" />
											<div class="intro"><?php echo the_sub_field('sub_swatch_title'); ?></div>
											<button class="single-image" onclick="location.href='<?php
											$productID = get_sub_field('swatch_id');
											$_product = &new jigoshop_product( $productID );
											echo $_product->add_to_cart_url(); ?>';">Add this swatch</button>
											</div>
											
										<?php endwhile; ?>
								</div>
								
							<?php } ?>
					
					</div>
					
					<div class="tape-description">
						<h1><?php echo the_sub_field('swatch_name'); ?></h1>
						<?php echo the_sub_field('swatch_copy'); ?>
					</div>
				</div>
			</div>
					        
		<?php $n++; endwhile; ?>

</div>
				 
	<?php endif; ?>
	
	<?php if( have_rows('collection_examples') ): ?>
		
		<div class="installations">
			<div id="owl-demo" class="owl-carousel">	
			<?php while( have_rows('collection_examples') ): the_row(); ?>
			
				<div><img src="<?php echo the_sub_field('collection_image'); ?>" /></div>
		
			<?php endwhile; ?>
			</div>
		</div>
		
	<?php endif; ?>

<div class="other-products">

	<h3>Other Victoria Bain Ranges</h3>
	
	<div class="product-boxes">
	
	<?php 
	$pageID = get_the_ID();
	query_posts( array( 'post_type' => 'page', 'child_of' => 43, 'post__not_in' => array(38,60,41,51,53,55,57,43,$pageID), 'exclude' => $pageID, 'orderby' => 'ID', 'order' => 'ASC') ); ?>
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		<div class="box" onclick="location.href='<?php echo the_permalink(); ?>';" style="background: #FFF url('<?php echo $image[0]; ?>') no-repeat center top; background-size: cover;">
			<h2><?php echo the_title(); ?></h2>
		</div>
	
	<?php endwhile; else: ?>
	
	<?php endif; ?>
		
	</div>

</div>

<?php get_footer('large'); ?>