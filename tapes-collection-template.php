<?php
/*
Template Name: Tapes Collection Template
*/
?>

<?php get_header(); ?>

<div class="container">
		
		<h1><?php the_title(); ?></h1>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
				<?php the_excerpt(); ?>
			<?php else : ?>
				<?php the_content(); ?>
			<?php endif; ?>
		<?php endwhile; ?>

		<?php if( have_rows('internal_collection') ): ?>
			 
			<div class="edges">
			
			<?php while( have_rows('internal_collection') ): the_row(); ?>
			
				<div class="edge-block-thin">
					<a href="<?php echo the_sub_field('internal_collection_link'); ?>">
						<img src="<?php echo the_sub_field('internal_collection_image'); ?>" />
						<div class="edge-name"><?php echo the_sub_field('internal_collection_name'); ?></div>
					</a>
				</div>

			<?php endwhile; ?>
			
			</div>
			 
		<?php endif; ?>

</div>


<?php get_footer('large'); ?>