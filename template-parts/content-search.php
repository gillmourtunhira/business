<section class="search_page_content">
	<section class="search_cat_content">
		<article>
			<h5 class="search_cat_title"><?php the_category( ', ' ); ?> <span><?php the_time( 'M, j, Y' ); ?></span></h5>
			<h5 class="search_post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
			<div class="search_results_content">
				<?php the_excerpt(); ?>
			</div>
		</article>
	</section>
	<section class="search_cat_image">
		<?php the_post_thumbnail( 'medium' ) ?>
	</section>
</section>