<?php get_header(); ?>

<div class="home-content">

	<div class="home-box" onclick="location.href='<?php echo the_field('couture_panel_link'); ?>';">
		<?php echo the_field('couture_panel_copy'); ?>
	</div>
	<div class="home-box" onclick="location.href='<?php echo the_field('collections_panel_link'); ?>';">
		<?php echo the_field('collections_panel_copy'); ?>
	</div>

</div>

<?php get_footer(); ?>