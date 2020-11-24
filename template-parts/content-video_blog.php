<?php $args = ( array( 
	'category_name' => 'video_blog',
	'post_type' => 'post',
	'posts_per_page' => 4,
	'post_status' => 'publish'
	) );
	$query = new WP_Query( $args );
?>
<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
<article>
		<?php $content = do_shortcode( apply_filters( 'the_content', $post->post_content ) ); ?>
		<?php $embed = get_media_embedded_in_content( $content, array('video','iframe') ); ?>
		<?php echo $embed[0]; ?>
		<h5><?php the_title(); ?></h5>
</article>
<?php endwhile; else : ?>
	<?php esc_html_e( "Sorry a 404 error occured", "businessman" ); ?>
	<?php endif; wp_reset_postdata(); ?>
