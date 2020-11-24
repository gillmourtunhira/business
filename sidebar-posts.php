<?php get_template_part( 'template-parts/content', 'share' ); ?>
<div class="post-ad">
	<?php
		if ( ! is_active_sidebar( 'post_top_banner' ) ){
			return;
		}
	?>
	<?php dynamic_sidebar( 'post_top_banner' ); ?>
</div>
<section class="search_top">
	<?php get_template_part( 'template-parts/content', 'search_top' ); ?>
</section>
<div class="sidebar-content">
		<?php
		if ( ! is_active_sidebar( 'inner_sidebar' ) ){
			return;
			}
		?>
		<?php dynamic_sidebar( 'inner_sidebar' ); ?>
</div>
<div class="post-ad">
	<?php
		if ( ! is_active_sidebar( 'post_bottom_banner' ) ){
			return;
		}
	?>
	<?php dynamic_sidebar( 'post_bottom_banner' ); ?>
</div>