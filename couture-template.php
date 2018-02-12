<?php
/*
Template Name: Couture Page Template
*/
?>
<?php get_header(); ?>

	<div class="center-content">
		<?php echo the_field('about_section'); ?>
	</div>
	
	<div class="center-content">
		<?php echo the_field('process_copy'); ?>
	</div>
	
	<div class="process-imagery">
		<img src="<?php echo the_field('large_process_image'); ?>" />
	</div>
	
	<!--<div class="processes">
		<?php if( have_rows('process_sequence') ): ?>
			<ol>
				<?php while( have_rows('process_sequence') ): the_row(); ?>
					<li><?php echo the_sub_field('process_sequence_copy'); ?></li>
				<?php endwhile; ?>
			</ol>
		<?php endif; ?>
	</div>-->
	
	<div class="center-content">
		<?php echo the_field('work_with_copy'); ?>
	</div>
	
	<div class="installations">
		<?php if( have_rows('installations') ): ?>
			<div id="owl-demo" class="owl-carousel">	
			<?php while( have_rows('installations') ): the_row(); ?>
			
				<div><img src="<?php echo the_sub_field('installation_image'); ?>" />
					<div class="installation-desc"><?php echo the_sub_field('installations_description'); ?></div>
				</div>
		
			<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>
	
	<div class="center-content">
		<?php echo the_field('couture_contact_copy'); ?>
	</div>
	
<?php get_footer('gallery'); ?>