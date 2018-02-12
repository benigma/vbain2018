<?php
/*
Template Name: Whistler Product Page Template
*/
?>

<?php get_header(); ?>

<div class="container">

	<div class="product-details">
	
		<div class="image-section">
			<?php 
			$images = get_field('image_gallery');
			if( $images ): 
			$startImage  = $images[0];
			?>
						
			<div id="main-gallery-area">
				<img src="<?php echo $startImage['sizes']['large']; ?>" class="zoooom" id="large-image" />
			</div>
			            
			<ul class="gallery-thumbnails" id="gallery-small">
				<?php $i = 1; foreach( $images as $image ): ?>
					<li id="thumb-image-<?php echo $i; ?>"><img src="<?php echo $image['sizes']['thumbnail']; ?>" class="thumb" /></li>
				<?php $i++; endforeach; ?>
			</ul>
			            
			<?php endif; ?>
		</div>
		
		<div class="product-information">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
					<?php the_excerpt(); ?>
				<?php else : ?>
				<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				<?php endif; ?>
			<?php endwhile; ?>
		</div>
		
	</div>

</div>


<?php get_footer('gallery'); ?>