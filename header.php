<!DOCTYPE html>
<html lang="en">
<head>
	<?php get_template_part( 'template-parts/content', 'meta' ); ?>
	<?php wp_head(); ?>
	<meta name="pushsdk" content="5fbe28e921663e6f6c6804f704eb4cd6">
	<!-- Begin Mailchimp Signup Form -->
	<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
	<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}
	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	  We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
	</style>
</head>
<body <?php body_class(); ?>>
	<!-- <header>
		<h1><a href="#"><?php bloginfo( 'name' ); ?></a></h1>
	</header> -->
	<!-- Navbar -->
<div class="navbar">
	<header class="header-region" role="banner">
		<section class="logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" >
				<?php 
					if ( function_exists( 'the_custom_logo' ) ) {
					    the_custom_logo();
					}
					else{
						bloginfo( 'name' );
					}
				?>
			</a>
		</section>
		<section class="in-menu">
			<label class="_toggle" for="toggle">&#9776;</label>
			<input type="checkbox" id="toggle" name="">
			<ul class="menu-items" role="navigation">
				<?php wp_nav_menu( array(	
					'theme_location'  => 'primary_menu'
				) ); ?>	
			</ul>
		</section>
	</header>
</div>
<!-- End Navbar -->

<!-- Market Scroller -->
<?php
	if ( ! is_active_sidebar( 'top_banner' ) ){
	 	return;
	 }
?>
<?php 
	 dynamic_sidebar( 'top_banner' );
?>
<!-- End Market Scroller -->
	