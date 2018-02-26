<?php
/*
Template Name: Contact Page Template
*/
?>
<?php get_header(); ?>

	<div class="center-content">
		<?php echo the_field('the_studio_information'); ?>
	</div>
	
	<div class="distributors">
		<div class="distributor">
			<?php echo the_field('distributor_information'); ?>
		</div>
		
		<div class="showrooms">
			<?php if( have_rows('vb_showrooms') ): ?>
				<?php while( have_rows('vb_showrooms') ): the_row(); ?>
					
					<div class="showroom"><?php echo the_sub_field('vb_showroom_address'); ?></div>
			
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
	
	<div class="center-content">
		<?php echo the_field('vb_contact_area'); ?>
	</div>
	
	<div class="contact-form">
		<?php echo do_shortcode( '[contact-form-7 id="5" title="VB Contact Form"]' ); ?>
	</div>
	
<?php get_footer('large'); ?>