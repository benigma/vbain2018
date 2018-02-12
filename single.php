<?php get_header(); ?>

	<div class="news-article-area">
	
		<div class="news-sidebar">
			
			
			<?php if( get_field('image_sidebar') ): ?>
				<?php while( have_rows('image_sidebar') ): the_row(); ?>
					<img src="<?php echo the_sub_field('news_story_image'); ?>" />
				<?php endwhile; ?>
			<?php endif; ?>
			
			<?php if( get_field('publication_link') ): ?>
				<button class="document" onclick="location.href='<?php echo the_field('publication_link'); ?>';">Download the Article</button>
			<?php endif; ?>
		</div>
		
		<div class="news-article">
		
			<?php while ( have_posts() ) : the_post(); ?>
				<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
					<?php the_excerpt(); ?>
				<?php else : ?>
					<h1><?php the_title(); ?></h1>
					<h5><?php echo the_field('published_date'); ?></h5>
					<?php the_content(); ?>
				<?php endif; ?>
			<?php endwhile; ?>
		
		</div>
	
	</div>
	
		<?php
			// WP_Query arguments
			$currentID = get_the_ID();
			$args = array (
				'cat'				=> '20',
				'post_type'			=> array( 'post' ),
				'posts_per_page'	=> 3,
				'post__not_in' 		=> array($currentID),
			);
			
			// The Query
			$query = new WP_Query( $args );
			
			// The Loop
			if ( $query->have_posts() ) {
			?>
			
			<div class="center-content">
				<h3>IN OTHER NEWS</h3>
			</div>
			
			<div class="news-stories">
			
			<?php
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