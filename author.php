<?php get_header(); ?>

<!-- Main Post Content-->
	<div class="wrapper">
	<div class="author">By <?php the_author(); ?></div>
<div class="post-block">
	<section class="post-content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
		<?php the_post_thumbnail( 'medium_large' ) ?>
		<article>
			<section class="ins-post-title">
				<h3><?php the_title(); ?></h3>		
				<?php the_excerpt(); ?>
			</section>
		</article>
		<?php endwhile; ?>
		<?php endif; ?>
		<?php //comments_template(); ?>
	</section>
	<section class="post-sidebar">
		<?php get_sidebar( 'posts' ); ?>
	</section>
</div>
	</div>
<!-- End Main Post Content -->

<!-- Footer -->
	<?php get_footer(); ?>
<!-- End Footer -->