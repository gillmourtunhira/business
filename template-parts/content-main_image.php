<?php
	$f_query = new WP_Query( array(
		'category_name' => 'business',
		'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => 1
		// 'post__in' => array(1399)
	));
?>
<?php if( $f_query->have_posts() ) : while( $f_query->have_posts() ) : $f_query->the_post(); ?>
	<a href="<?php the_permalink();?>"><?php the_post_thumbnail() ?></a>
<?php endwhile;?>
<?php endif;?>