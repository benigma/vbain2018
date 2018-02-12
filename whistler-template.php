<?php
/*
Template Name: Whistler Collection Page Template
*/
?>
<?php get_header('collections'); ?>

<div class="container-whistler">

		<?php if( have_rows('first_swatch_row') ): ?>
			 
			<div class="collections">
			
			<?php $i = 1; while( have_rows('first_swatch_row') ): the_row(); ?>
			
				<div class="external-tape" data-tab="tab-<?php echo $i; ?>" style="background: url('<?php echo the_sub_field('external_tape_image'); ?>') no-repeat center; background-size: cover;">
					<div class="external-tape-information">
						<?php echo the_sub_field('external_tape_copy'); ?>
					</div>
				</div>

			<?php $i++; endwhile; ?>
			
			</div>
			 
		<?php endif; ?>
		
	
	<?php if( have_rows('first_swatch_row') ): ?>
		 
		<?php $n = 1; while( have_rows('first_swatch_row') ): the_row(); ?>
			<div id="tab-<?php echo $n; ?>" class="tape-content">
				<div class="the-tape">
					<span class="closex"><img src="<?php echo get_template_directory_uri(); ?>/img/close-btn.png" /></span>
					<img src="<?php echo the_sub_field('external_full_tape'); ?>" />
				</div>
			</div>
					        
		<?php $n++; endwhile; ?>
				 
	<?php endif; ?>

</div>

	<?php 
		$row2 = get_field('activate_second_row');
		$value2 = $row2['value'];
		if($value2 == 'y') {
	 ?>
		<?php if( have_rows('second_swatch_row') ): ?>
			
		<div class="container-whistler">
 
			<div class="collections">
			
			<?php $i = 7; while( have_rows('second_swatch_row') ): the_row(); ?>
			
				<div class="external-tape" data-tab="tab-<?php echo $i; ?>" style="background: url('<?php echo the_sub_field('external_tape_image'); ?>') no-repeat center; background-size: cover;">
					<div class="external-tape-information">
						<?php echo the_sub_field('external_tape_copy'); ?>
					</div>
				</div>

			<?php $i++; endwhile; ?>
			
			</div>
			 
		<?php endif; ?>
	
		<?php if( have_rows('second_swatch_row') ): ?>
			 
			<?php $n = 7; while( have_rows('second_swatch_row') ): the_row(); ?>
				
					<div id="tab-<?php echo $n; ?>" class="tape-content">
						<div class="the-tape">
							<span class="closex"><img src="<?php echo get_template_directory_uri(); ?>/img/close-btn.png" /></span>
							<img src="<?php echo the_sub_field('external_full_tape'); ?>" />
						</div>
					</div>
						        
			<?php $n++; endwhile; ?>
		</div>
		<?php endif; ?>
		<?php } else { } ?>
		
		<?php 
			$row3 = get_field('activate_third_row');
			$value3 = $row3['value'];
			if($value3 == 'y') {
		 ?>

		<?php if( have_rows('third_swatch_row') ): ?>

		<div class="container-whistler">
			 
			<div class="collections">
			
			<?php $i = 13; while( have_rows('third_swatch_row') ): the_row(); ?>
			
				<div class="external-tape" data-tab="tab-<?php echo $i; ?>" style="background: url('<?php echo the_sub_field('external_tape_image'); ?>') no-repeat center; background-size: cover;">
					<div class="external-tape-information">
						<?php echo the_sub_field('external_tape_copy'); ?>
					</div>
				</div>

			<?php $i++; endwhile; ?>
			
			</div>
			 
		<?php endif; ?>
		
		<?php if( have_rows('third_swatch_row') ): ?>
			 
			<?php $n = 13; while( have_rows('third_swatch_row') ): the_row(); ?>
				
					<div id="tab-<?php echo $n; ?>" class="tape-content">
						<div class="the-tape">
							<span class="closex"><img src="<?php echo get_template_directory_uri(); ?>/img/close-btn.png" /></span>
							<img src="<?php echo the_sub_field('external_full_tape'); ?>" />
						</div>
					</div>
						        
			<?php $n++; endwhile; ?>
	
		</div>	 
		<?php endif; ?>
		<?php } else { } ?>
	

<div class="center-content">
	<?php echo the_field('external_how_it_works'); ?>
</div>

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

<?php get_footer('whistler'); ?>