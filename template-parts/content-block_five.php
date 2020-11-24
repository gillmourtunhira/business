<?php $args = ( array( 
	'category_name' => 'stocks',
	'post_type' => 'post',
	'posts_per_page' => 8,
	'post_status' => 'publish'
	) );
	$query = new WP_Query( $args );
?>
<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
<article>
		<h5 class="cat_title"><?php the_category( ' , ' ); ?></h5>
		<h5 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
</article>
<?php endwhile; else : ?>
	<?php esc_html_e( "Sorry a 404 error occured", "business" ); ?>
	<?php endif; wp_reset_postdata(); ?>