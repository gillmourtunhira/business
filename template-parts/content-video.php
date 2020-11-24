<div class="top-post-title">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
	<h5 class="category-title"><?php the_category( ', ' ); ?></h5>
	<section class="ins-post-title">
		<h3><?php the_title(); ?> <span class="dashicons dashicons-format-<?php echo get_post_format( $post->ID ); ?>"></span></h3>
		<address>
			<div class="author">By <?php the_author(); ?> <span class="post-timestamp"><?php the_time( 'M, j, Y' ); ?></span></div>
		</address>
	</section>
	<?php endwhile; ?>
	<?php endif; ?>
</div>
<div class="post-block">
	<section class="post-content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
		<?php the_post_thumbnail( 'medium_large' ) ?>
		<article>			
			<?php the_content(); ?>
			<div class="social-icons">
				<ul>
					<h5>Share this Article</h5>
					<li><span class="dashicons dashicons-facebook"></span></li>
					<li><span class="dashicons dashicons-twitter"></span></li>
					<li><span class="dashicons dashicons-rss"></span></li>
					<li><span class="dashicons dashicons-email"></span></li>
				</ul>
			</div>
		</article>
		<?php endwhile; ?>
		<?php endif; ?>
		<?php //comments_template(); ?>
	</section>
	<section class="post-sidebar">
		<?php get_sidebar( 'posts' ); ?>
	</section>
</div>