<?php
/*
Template Name: Collections Page Template
*/
?>
<?php get_header(); ?>

	<div class="collections">
		<?php if( have_rows('collection_sections') ): ?>
				
			<?php while( have_rows('collection_sections') ): the_row(); ?>
				
				<div class="box" style="background: url('<?php echo the_sub_field('section_image'); ?>') no-repeat left top; background-size: cover;" onClick="parent.location='<?php echo the_sub_field('section_link'); ?>'">
					<div class="information">
						<?php echo the_sub_field('section_copy'); ?>
					</div>
				</div>
	
			<?php endwhile; ?>
				 
		<?php endif; ?>
	</div>

<?php get_footer('large'); ?>