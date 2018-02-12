<?php
/*
Template Name: JRScott Collection Page Template
*/
?>
<?php get_header(); ?>

<div class="center-content">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
			<?php the_excerpt(); ?>
		<?php else : ?>
			<?php the_content(); ?>
		<?php endif; ?>
	<?php endwhile; ?>
</div>

<?php get_footer('whistler'); ?>