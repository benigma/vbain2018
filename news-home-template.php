<?php
/*
Template Name: News Home Template
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
	
	<div class="news-stories">
		
		<?php
			// WP_Query arguments
			$args = array (
				'cat' => '20',
				'post_type' => array( 'post' ),
			);
			
			// The Query
			$query = new WP_Query( $args );
			
			// The Loop
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
					// do something
			?>
					
					<div class="news-box">
						<?php the_post_thumbnail(); ?>
						<h3><?php the_title(); ?></h3>
						<p><?php the_excerpt(); ?></p>
						<button onclick="location.href='<?php echo the_permalink(); ?>';">Read More</button>
					</div>
			<?php		
				}
			} else {
				// no posts found
			}
			
			// Restore original Post Data
			wp_reset_postdata();
		?>
	
	</div>
	
<?php get_footer('large'); ?>