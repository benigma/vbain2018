<?php
/*
Template Name: Gallery Page Template
*/
?>

<?php get_header(); ?>

<div class="gallery-container">

		<div class="installations">
			
			<?php if( have_rows('gallery_images') ): ?>
				<div id="owl-demo" class="owl-carousel">	
					<?php while( have_rows('gallery_images') ): the_row(); ?>
					
						<div><img src="<?php echo the_sub_field('gallery_example_image'); ?>" />
						<div class="installation-desc"><?php echo the_sub_field('gallery_example_description'); ?></div>
						</div>
				
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
			
		</div>

</div>


<?php get_footer('gallery'); ?>