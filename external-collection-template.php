<?php
/*
Template Name: External Collection Page Template
*/
?>
<?php get_header('collections'); ?>

	<div class="center-content">
		<?php echo the_field('external_introduction_copy'); ?>
	</div>
	
	<?php if( have_rows('external_tapes') ): ?>
			<div class="collections">	
			<?php while( have_rows('external_tapes') ): the_row(); ?>
				
				<div class="external-tape" style="background: url('<?php echo the_sub_field('external_tape_image'); ?>') no-repeat center; background-size: cover;">
					<div class="external-tape-information">
						<?php echo the_sub_field('external_tape_copy'); ?>
					</div>
				</div>
	
			<?php endwhile; ?>
			</div> 
		<?php endif; ?>
	
	<div class="center-content">
		<?php echo the_field('external_example_introduction'); ?>
	</div>
	
	<div class="installations">
		<?php if( have_rows('external_example_images') ): ?>
			<div id="owl-demo" class="owl-carousel">	
			<?php while( have_rows('external_example_images') ): the_row(); ?>
			
				<div><img src="<?php echo the_sub_field('external_example_image'); ?>" /></div>
		
			<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>
	
	<div class="external-contact">
		<div class="center-content">
			<button onclick="location.href='mailto:<?php echo the_field('external_contact_email'); ?>?subject=<?php echo the_title(); ?>'">Contact Us</button>
			<?php echo the_field('external_contact_information'); ?>
		</div>
	</div>
	
<?php get_footer('large'); ?>