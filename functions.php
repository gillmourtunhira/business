<?php 
	// Enqueue Scripts CSS / JS 
	// ========================
	function business_theme_styles(){
		wp_enqueue_style( 'wp_style', get_stylesheet_uri(), get_the_time() );
		wp_enqueue_style( 'main_style', get_template_directory_uri() . '/css/business.css',array(), filemtime(get_template_directory() . '/css/business.css'), false );
		 wp_enqueue_script( 'businessjs', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
	}
	add_action( 'wp_enqueue_scripts', 'business_theme_styles', 10 );

	// Filters
	// =======
	function business_excerpt_length ( $length ){
		if ( is_front_page() ){
			return 20;
		}
		else{
			return 80;
		}
	}
	add_filter( 'excerpt_length', 'business_excerpt_length', 10 );

	function business_excerpt_more( $excerpt_more ){
		return '';
	}
	add_filter( 'excerpt_more', 'business_excerpt_more', 10 );

	function business_read_more( $excerpt ){
		//create a variable called $extended_excerpt and assign it a value $excerpt
		$extended_excerpt = $excerpt;

		//append the read more link with the get_permalink() as the url
		$extended_excerpt .= '<a href="' . get_permalink() . '">';
		$extended_excerpt .= ' <span class="dashicons dashicons-arrow-right"></span>';	
		$extended_excerpt .= '</a>';

		//return the $extended_excerpt
		return $extended_excerpt;
	}
	add_filter( 'get_the_excerpt', 'business_read_more', 10 );

	// Theme Support 
	// =============
	add_action( 'after_setup_theme', 'business_theme_setup' );
	function business_theme_setup() {
		// Post Thumbnails
	    add_theme_support( 'post-thumbnails');
	    add_image_size( 'home_thumb', 285, 190 );

	    //Post Formats
	    add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat', 'search-form' ) );

	    //Custom background
	    add_theme_support( 'custom-background' );

	    //Custom Header 
	    add_theme_support( 'custom-header' );

	    //Custom logo
	    add_theme_support( 'custom-logo' );

	    //HTML5 
	    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

	    //Customize Selective Refresh Widgets 
	    add_theme_support( 'customize-selective-refresh-widgets' );

	    //Title Tag 
	    add_theme_support( 'title-tag' );

	    //Automatic Feedlinks
	    add_theme_support( 'automatic-feed-links' );

	    //Starter Theme Content 
	    add_theme_support( 'starter-content' );

	    //Register Menu 
	    register_nav_menus( array( 
			'primary_menu' => esc_html__('Primary Menu','business' ),
			'footer_menu'  => esc_html__('Footer Menu','business' ),
		) );

	}

	// Setup Widget Areas 
	// ===================
	function business_widgets_init(){

		register_sidebar( array(
			'name'          => esc_html__( 'Market Indexes Scroller', 'business' ),
			'id'            => 'top_banner',
			'description'   => esc_html__('Add widgets for index scroller, top position'),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => '</h2>',
		));

		register_sidebar( array(
			'name'          => esc_html__( 'Home-Side Ad', 'business' ),
			'id'            => 'home_sidebar',
			'description'   => esc_html__('Add widgets for the home page, top position'),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => '</h2>',
		));

		register_sidebar( array(
			'name'          => esc_html__( 'Home-Middle Ad', 'business' ),
			'id'            => 'home_middle_ad',
			'description'   => esc_html__('Add widgets for the Home Middle Ad, middle position'),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => '</h2>',
		));

		register_sidebar( array(
			'name'          => esc_html__( 'Home-Bottom Ad', 'business' ),
			'id'            => 'home_bottom_ad',
			'description'   => esc_html__('Add widgets for the Home Bottom Ad, bottom position'),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => '</h2>',
		));

		register_sidebar( array(
			'name'          => esc_html__( 'Post Inner Sidebar', 'business' ),
			'id'            => 'inner_sidebar',
			'description'   => esc_html__('Add widgets for the posts page, right position'),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<div class="most-read-title">',
			'after_title'   => '</div>',
		));

		register_sidebar( array(
			'name'          => esc_html__( 'Post-Top Ad', 'business' ),
			'id'            => 'post_top_banner',
			'description'   => esc_html__('Add widgets for the top banner, top position'),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => '</h2>',
		));

		register_sidebar( array(
			'name'          => esc_html__( 'Post-Bottom Ad', 'business' ),
			'id'            => 'post_bottom_banner',
			'description'   => esc_html__('Add widgets for the side bottom banner, bottom position'),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => '</h2>',
		));

		register_sidebar( array(
			'name'          => esc_html__( 'Sidebar Stocks', 'business' ),
			'id'            => 'stocks_widget',
			'description'   => esc_html__('Add widgets for Stocks Widget, side position'),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => '</h2>',
		));
	}
	add_action( 'widgets_init', 'business_widgets_init' );

	function business_load_dashicons(){
	   wp_enqueue_style('dashicons');
	}
	add_action( 'wp_enqueue_scripts', 'business_load_dashicons' );
	
	// Popular Posts Widget Save Views
	// ===============================
	function business_save_post_views( $postID ){
		$metaKey = 'business_post_views';
		$views = get_post_meta( $postID, $metaKey, true );
		$count = ( empty( $views ) ? '0' : $views );
		$count++;

		update_post_meta( $postID, $metaKey, $count );

	}
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 ); 

	// Popular Posts Widget
	//======================
	class Business_Popular_Posts_Widget extends WP_Widget{
		public function __construct(){
			$widget_ops = array(
				'classname' => 'business-popular-posts-widget',
				'description' => 'Popular Posts Widget',
			);
			parent::__construct( 'business_popular_posts', 'Business Popular Posts', $widget_ops );
		}

		// Back-End display of widget
		public function form( $instance ){

			$title = ( !empty( $instance[ 'title' ] ) ? $instance[ 'title' ] : 'Popular Posts' );
			$tot = ( !empty( $instance[ 'tot' ] ) ? absint( $instance[ 'tot' ] ) : 4 );

			$output = '<p>';
			$output .= '<label for="'. esc_attr( $this->get_field_id( 'title' ) ) .'">Title:</label>';
			$output .= '<input type="text" class="widefat" id="'.esc_attr( $this->get_field_id( 'title' ) ).'" name="'.esc_attr( $this->get_field_name( 'title' ) ) .'" value="'. esc_attr( $title ) .'">';
			$output .= '</p>';

			$output .= '<p>';
			$output .= '<label for="'. esc_attr( $this->get_field_id( 'tot' ) ). '">Number of Posts:</label>';
			$output .= '<input type="number" class="widefat" id="'.esc_attr( $this->get_field_id( 'tot' ) ).'" name="'.esc_attr( $this->get_field_name( 'tot' ) ).'" value="'. esc_attr( $tot ) .'">';
			$output .= '</p>';

			echo $output;
		}

		// Update Widget
		public function update( $new_instance, $old_instance ){
			$instance = array();
			$instance[ 'title' ] = ( !empty( $new_instance['title'] ) ? strip_tags( $new_instance[ 'title' ] ) : '' );
			$instance[ 'tot' ] = ( !empty( $new_instance['tot'] ) ? absint(strip_tags( $new_instance[ 'tot' ] )) : 0 );

			return $instance;
		}

		// Front-end Widget Display
		public function widget( $args, $instance ){

			$tot = absint( $instance[ 'tot' ] );

			$posts_args = array(
				'post_type'			=>	'post',
				'posts_per_page'	=>	$tot,
				'meta_key'			=>	'business_post_views',
				'orderby'			=>	'meta_value_num',
				'order'				=>  'DESC',
			);

			$posts_query = new WP_Query( $posts_args );

			echo $args[ 'before_widget' ];

			if( !empty( $instance[ 'title' ] ) ) :

				echo $args[ 'before_title' ] . apply_filters( 'widget_title', $instance[ 'title' ] ) . $args[ 'after_title' ];

			endif;

			if( $posts_query->have_posts() ) : 

				echo '<ul>';

					while( $posts_query->have_posts() ) : $posts_query->the_post();
						$c = get_the_category();
						echo '<li><h5>'. $c[0]->cat_name .'</h5><a href="' . get_the_permalink() . '" title="' . get_the_title() . '">' . get_the_title() . '</a></li>';
					endwhile;

				echo '</ul>';

			endif;

			echo $args[ 'after_widget' ];
		}
	}
	add_action( 'widgets_init', function(){
		register_widget( 'Business_Popular_Posts_Widget' );
	} );

	// Post Navigation 
	function business_post_navigation(){
		$nav = '<div class="nav-links">';

		$prev = get_previous_post_link( ' <h4>'.
			esc_html__('Previous') .'</h4><div class="nav-previous"><span class="dashicons dashicons-arrow-left-alt2"></span>%link</div>', '%title' );
		$nav .= '<div class="_previous">'. $prev .'</div>';

		$next = get_next_post_link( '<h4>'.
			esc_html__('Next') .'</h4><div class="nav-previous">%link<span class="dashicons dashicons-arrow-right-alt2"></span></div>', '%title' );
		$nav .= '<div class="_next">'. $next .'</div>';

		$nav .= '</div>';
		return $nav;
	}

	// Custom Theme Logo
	// =================
	function business_theme_logo() {
	
	add_theme_support( 'custom-logo', array(
		'height'      => 55,
		'width'       => 280,
		'flex-width' => true,
		) );
	}
	add_action( 'after_setup_theme', 'business_theme_logo' );

	// Contact Form Shortcode
	// ======================
	function business_contact_form( $atts ){

		// return HTML
		ob_start();
		include 'template-parts/contact-form.php';
		return ob_get_clean();
	}
	add_shortcode( 'contact_form', 'business_contact_form' );
	

?>