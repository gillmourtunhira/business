<?php get_header(); ?>

<div class="page_wrapper">
	
	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

		<section>
			<h5><?php the_title(); ?></h5>
			<article>
				<p><?php the_content(); ?></p>
			</article>
		</section>

	<?php endwhile; ?>
	<?php endif; ?>

</div>

<!-- Footer -->
	<?php get_footer(); ?>
<!-- End Footer -->