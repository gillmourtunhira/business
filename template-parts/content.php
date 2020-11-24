<div class="top-post-title">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
	<h5 class="category-title"><?php the_category( ', ' ); ?></h5>
	<section class="ins-post-title">
		<?php business_save_post_views( get_the_ID() ); ?>
		<h3><?php the_title(); ?></h3>
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
			<?php get_template_part( 'template-parts/content', 'share' ); ?>
		</article>
		<?php endwhile; ?>
		<?php endif; wp_reset_postdata();?>
		<?php echo business_post_navigation(); ?>
		<?php comments_template(); ?>
	</section>
	<section class="post-sidebar">
		<?php get_sidebar( 'posts' ); ?>
	</section>
</div>
