<?php get_header(); ?>


<!-- Main Post Content-->

	<!-- Search Box -->
	<div class="search-box">
		<!-- <div class="flexbox">
		  <div class="search">
		    <h1>Search this site</h1>
		    <div>
		      <input type="text" placeholder="       Search . . ." required>
		    </div>
		  </div>
		</div> -->
	</div>
	<!-- Search Box -->
	<div class="wrapper-category">
			<section class="main-cats">
				<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
				<article>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'home_thumb' ); ?></a>
						<h5 class="cat_title"><?php the_category( ', ' ); ?></h5>
						<h5 class="post-title"><?php the_title(); ?></h5>
				</article>
					<?php endwhile; else : ?>
					<?php esc_html_e( "Sorry a 404 error occured", "businessman" ); ?>
				<?php endif; wp_reset_postdata(); ?>
				<?php //echo paginate_links(); ?>			
			</section>
		<!--<section class="post-sidebar">-->
		<!--	<?php // get_sidebar( 'posts' ); ?>-->
		<!--</section>-->
		<div class="nav-previous alignleft"><?php previous_posts_link( '<span class="dashicons dashicons-arrow-left-alt"></span>' ); ?></div>
		<div class="nav-next alignright"><?php next_posts_link( '<span class="dashicons dashicons-arrow-right-alt"></span>' ); ?></div>
	</div>
<!-- End Main Post Content-->

<!-- Footer -->
	<?php get_footer(); ?>
<!-- End Footer -->