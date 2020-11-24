<section class="sidebar-top">
		<section class="search_top">
			<?php get_template_part( 'template-parts/content', 'search_top' ); ?>
		</section>
		<section class="ad_one">
			<?php
				if ( ! is_active_sidebar( 'home_sidebar' ) ){
					return;
				}
			 ?>
			<?php dynamic_sidebar( 'home_sidebar' ); ?>
		</section>
		<section class="opinion_top">
				<?php 
					$opi_args = new WP_Query( array(
						'category_name' 	=> 'analysis',
						'post_type' 		=> 'post',
						'post_status' 		=> 'publish',
						'posts_per_page' 	=> 5
						// 'post__in' => array(1399)
					));
				?>
				<h2>Analysis</h2>
				<div class="opinion_tower">
					<?php if( $opi_args->have_posts() ) : while( $opi_args->have_posts() ) : $opi_args->the_post(); ?>
						<article>
							<h5 class="author_opinion"><?php the_author(); ?></h5>
							<p class="headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
						</article>
					<?php endwhile;?>
					<?php endif; ?>
				</div>
			</section>
</section>