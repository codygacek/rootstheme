<?php

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	function roots_register_menus() {
		register_nav_menu( 'main-menu', __( 'Main Menu' )) ;
	}
	add_action( 'init', 'roots_register_menus' );

	/**
	 * Enqueue scripts and styles.
	 */
	function roots_scripts() {
		wp_enqueue_style( 'tailwind', get_stylesheet_directory_uri().'/assets/css/tailwind.css' );
		wp_enqueue_style( 'app', get_stylesheet_uri() );

		wp_enqueue_script( 'font-awesome', get_theme_file_uri( '/assets/js/fontawesome-all.js' ), array( 'jquery' ), '1.0', true );
		wp_enqueue_script( 'app', get_theme_file_uri( '/assets/js/app.js' ), array( 'jquery' ), '1.0', true );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
	add_action( 'wp_enqueue_scripts', 'roots_scripts' );

	function catch_that_image() {
		global $post, $posts;
		$first_img = '';
		ob_start();
		ob_end_clean();
		$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
		$first_img = $matches[1][0];

		if(empty($first_img)) {
			$first_img = "";
		}

		return $first_img;
	}

	add_filter( 'body_class', function( $classes ) {
			$fd_body_classes = [];
	    return array_merge( $classes, $fd_body_classes );
	} );

	register_sidebar( array(
		'name'          => __( 'Default Sidebar', 'roots' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'roots' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s mb-4">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title mb-3">',
		'after_title'   => '</h3>',
	) );

	function wrap_content($content) {
	    global $post;
	    return '<div class="content">'.$content.'</div>';
	}

	add_filter('the_content', 'wrap_content');

	if( function_exists('acf_add_options_page') ) {
		acf_add_options_page();
	}