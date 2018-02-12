<?php
/*
Template Name: Upholstery Page Template
*/
?>

<?php get_header(); ?>

<div class="container">

		<?php if( have_rows('upholstery') ): ?>
			 
			<div class="edges">
			
			<?php while( have_rows('upholstery') ): the_row(); ?>
			
				<div class="edge-block">
					<a href="<?php echo the_sub_field('upholstery_link'); ?>">
						<img src="<?php echo the_sub_field('upholstery_image'); ?>" />
						<div class="edge-name"><?php echo the_sub_field('upholstery_name'); ?></div>
					</a>
				</div>

			<?php endwhile; ?>
			
			</div>
			 
		<?php endif; ?>

</div>


<?php get_footer('large'); ?>