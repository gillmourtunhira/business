<?php get_header(); ?>

<!-- Main Content -->
<div class="wrapper">
	<div class="block_one">
		<section class="content">
			<section class="main-content">
				<section class="top-img">
					<?php get_template_part( 'template-parts/content', 'main_image' ); ?>
				</section>
				<section class="top-content">
					<?php get_template_part( 'template-parts/content', 'main_posts' ); ?>
				</section>
			</section>
			<section class="strip-top">
				<?php get_template_part( 'template-parts/content', 'strip' ); ?>
			</section>
			<section class="strip-middle">
				<?php get_template_part( 'template-parts/content', 'strip_middle' ); ?>
			</section>
		</section>
		<?php get_sidebar(); ?>
	</div>
	<div class="block_two">
		<section class="middle-tier-posts">
			<?php get_template_part( 'template-parts/content', 'block_two' ); ?>
			<article class="middle-tier-five">
				<?php
					if ( ! is_active_sidebar( 'home_middle_ad' ) ){
						return;
					}
				?>
				<?php dynamic_sidebar( 'home_middle_ad' ); ?>
			</article>
		</section>
	</div>
	<div class="block-back">
		<div class="block_three">
			<section class="section-three">
				<?php get_template_part( 'template-parts/content', 'video_blog' ); ?>
			</section>
		</div>
	</div>
	<div class="cat_title_four">
			<h2><?php echo get_cat_name( 78 ); ?></h2>
	</div>
	<div class="block_four">
		<?php get_template_part( 'template-parts/content', 'block_four' ); ?>
	</div>
	<div class="block-five-adtop">
		<div class="ad_block_five">
			<?php
					if ( ! is_active_sidebar( 'home_bottom_ad' ) ){
						return;
					}
				?>
				<?php dynamic_sidebar( 'home_bottom_ad' ); ?>
		</div>
	</div>
	<div class="cat_title_four">
			<h2><?php echo get_cat_name( 4 ); ?></h2>
	</div>
	<div class="block_five">
		<section class="block-five-top">
			<?php get_template_part( 'template-parts/content', 'block_five' ); ?>
		</section>
	</div>
</div>
<!-- End Main Content -->

<!-- Footer -->
	<?php get_footer(); ?>
<!-- End Footer -->