<?php
/*
Template Name: Embroidered Tapes Page Template
*/
?>

<?php get_header(); ?>

<div class="container">

		<?php if( have_rows('leading_edges') ): ?>
			 
			<div class="edges">
			
			<?php while( have_rows('leading_edges') ): the_row(); ?>
			
				<div class="edge-block-thin">
					<a href="<?php echo the_sub_field('leading_edge_link'); ?>">
						<img src="<?php echo the_sub_field('leading_edge_image'); ?>" />
						<div class="edge-name"><?php echo the_sub_field('leading_edge_name'); ?></div>
					</a>
				</div>

			<?php endwhile; ?>
			
			</div>
			 
		<?php endif; ?>

</div>


<?php get_footer('large'); ?>