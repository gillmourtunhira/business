<?php $args = ( array( 
	'category_name' => 'business',
	'post_type' => 'post',
	'posts_per_page' => 4,
	'post_status' => 'publish'
	) );
	$query = new WP_Query( $args );
?>
<h5 class="cat_title">Business</h5>
	<ul class="post_list">
	<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post();  ?>
		<li class="list_item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
	</ul>
	<?php endwhile; else : ?>
	<?php esc_html_e( "Sorry a 404 error occured", "business" ); ?>
	<?php endif; wp_reset_postdata(); ?>