// Posts The Loop
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
		
		<article <?php post_class(); ?>>
			<h1><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>
			<footer>
				<p class="byline">
					Author:<a href="<?php echo get_author_posts_url( $post->post_author ); ?>">
						<?php the_author(); ?>
					</a> | <?php the_time( 'M, j, Y' ); ?> | <?php the_category( ', ' ); ?> |
					 <?php the_tags( '', ', ', ''); ?>
				</p>
			</footer>
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail() ?>
			<?php endif; ?>
			<?php the_excerpt(); ?>
		</article>

		<?php endwhile; else : ?>

		<?php esc_html_e( "Sorry a 404 error occured", "businessman" ); ?>

		<?php endif; ?>

// Conditional Tags
	<!-- Static Front Page -->
		<?php if ( is_front_page() && !is_home() ) : ?>

			<h1>Static Front Page</h1>

		<?php endif; ?>
		
		<!-- Blog Home -->
		<?php if( is_home() ) : ?>
			
			<h1>Blog Home</h1>

		<?php endif; ?>

		<!-- Page (But not Frontpage) -->
		<?php if( is_page() && !is_front_page() ) : ?>
			
			<h1>Page</h1>

		<?php endif; ?>

		<!-- Single Post -->
		<?php if( is_single() && !is_attachment() ) : ?>

			<h1>Post</h1>

		<?php endif; ?>

		<!-- Attachment (Media) -->
		<?php if( is_attachment() ) : ?>

			<h1>Attachment</h1>

		<?php endif; ?>

		<!-- Category -->
		<?php if( is_category() ) : ?>

			<h1><?php single_cat_title(); ?></h1>

		<?php endif; ?>

// Post Excerpt
<?php
function custom_excerpt_length( $length ) {
	return 18;
}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

	function new_excerpt_more( $more ) {
	    return ' ';
	}
	add_filter('excerpt_more', 'new_excerpt_more');
?>

//Main Post Thumbnail 
<?php $wp_args = ( array( 
						'category_name' => 'Pinned',
						'post_type' => 'post',
						'posts_per_page' => 1,
						'post_status' => 'publish'
						) );
						$wp_query = new WP_Query( $wp_args );
					?>
					<?php if( $wp_query->have_posts() ) : while( $wp_query->have_posts() ) : $wp_query->the_post();  ?>
						<?php the_post_thumbnail(); ?>
					<?php endwhile; ?>
					<?php endif; ?>