<?php
/*
Template Name: Product Detail Page Template
*/
?>

<?php get_header(); ?>

<div class="container">

	<div class="product-details">
	
		<div class="image-section">
			<?php 
			$images = get_field('image_gallery');
			$image__count = count($images);
			if( $images ): 
			$startImage  = $images[0];
			?>
						
			<div id="main-gallery-area">
				<img src="<?php echo $startImage['sizes']['large']; ?>" class="zoooom" id="large-image" />
			</div>
			
			<?php if ($image__count > 1 ) { ?>			
			<ul class="gallery-thumbnails" id="gallery-small">
				<?php $i = 1; foreach( $images as $image ): ?>
					<li id="thumb-image-<?php echo $i; ?>">
						<div class="tooltip">
							<span class="tooltiptext"><?php echo $image['title']; ?></span>
							<img src="<?php echo $image['sizes']['thumbnail']; ?>" class="thumb" />
						</div>
					</li>
				<?php $i++; endforeach; ?>
			</ul>
			            
			<?php } endif; ?>
		</div>
		
		<div class="product-information">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
					<?php the_excerpt(); ?>
				<?php else : ?>
				<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
					<pre>All designs copyright Victoria Bain Embroidered Textiles.</pre>
					
					
					
					<div class="button__group">
						<?php if( get_field('tearsheet') ): ?>
							<a href="<?php the_field('tearsheet'); ?>" target="_blank"><button class="tearsheet__button">Download Tearsheet</button></a>
						
						<?php endif; ?>
						
						<button id="contactBtn" class="contact__button">Contact Us</button>
					</div>
				<?php endif; ?>
			<?php endwhile; ?>
			
			<?php if( have_rows('product_swatches') ): ?>
				
				<form>
				<div class="selectdiv">
				<label>
				<select name="swatchList" id="swatches" onchange="post();">
				<option value="0">Please select a swatch</option>
				<?php while( have_rows('product_swatches') ): the_row(); ?>
					<option value="<?php the_sub_field('swatch_id'); ?>"><?php the_sub_field('swatch_name'); ?></option>
				<?php endwhile; ?>
				</select>
				</label>
				</div>
				</form>
				
				
				<input type="hidden" name="swatch" id="hiddenSwatch" value="0" />
				<button id="getSwatch" onclick="">Add this swatch</button>
				
				</div>
			<?php endif; ?>
		</div>
		
	</div>

</div>

<div class="contact-form-area" id="contact-form-area">
	
	<div class="closeBtn"><img src="<?php echo get_template_directory_uri(); ?>/img/close-btn.png" /></div>
	<p class="tel"><a href="tel:442072637518">+44 (0)20 7263 7518</a></p>
	
	<div class="contact-form">
		<?php echo do_shortcode( '[contact-form-7 id="623" title="VB Swatch Enquiry Form"]' ); ?>
	</div>

</div>


<?php get_footer('large'); ?>