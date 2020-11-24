<?php get_header();  ?>
<div class="search_page">
	<div class="searched_item">
			<h5><?php esc_html_e( 'You searched for:', 'business' ); ?></h5>
			<div class="searched_title">
				<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
				  <div>
				    <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" class="search_input" />
				    <input type="submit" id="searchsubmit" value="" class="search_button" />
				  </div>
				</form>
			</div>
	</div>
	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'template-parts/content', 'search' ); ?>

		<?php endwhile; else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

	<?php endif; ?>

	<div class="nav-previous alignleft">
		<?php previous_posts_link( '<span class="dashicons dashicons-arrow-left-alt"></span>' ); ?>
	</div>
	<div class="nav-next alignright">
		<?php next_posts_link( '<span class="dashicons dashicons-arrow-right-alt"></span>' ); ?>
	</div>

</div>

<?php get_footer(); ?>