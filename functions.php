<?php

/* 
1.0		CONTANTS
2.0		VERSION COMPATIBILITY
3.0		BITWALI SETUP
4.0		content width
5.0 	Register Widgets Area
6.0		excerpt_more
7.0		javascript detection
8.0 	pingback
9.0		Custom Color
10.0	Enqueue scripts and styles
11.0	content image size attr
12.0	header image tag
13.0 	post thumbnail size attr
14.0	Front page templates

*/
/*3.0	BITWALI SETUP */

function bitwalitwo_setup(){
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'bitwalitwo-featured-image', 2000, 1200, true );
	add_image_size( 'bitwalitwo-thumbnail-avatar', 100, 100, true );
	$GLOBALS['content_width'] = 525;

	 // unregister_nav_menu( 'top' );
	 // unregister_nav_menu( 'social' );

	
	register_nav_menus( array(
		'header'    => __( 'Header Menu', 'bitwalitwo' ),
		'footer' => __( 'Footer Menu', 'bitwalitwo' ),
	) );
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,

	) );
	add_theme_support( 'customize-selective-refresh-widgets' );
	$starter_content = array(
		'widgets' => array(
			// Place three core-defined widgets in the sidebar area.
			'sidebar-1' => array(
				'text_business_info',
				'search',
				'text_about',
			),

			// Add the core-defined business info widget to the footer 1 area.
			'sidebar-2' => array(
				'text_business_info',
			),

			// Put two core-defined widgets in the footer 2 area.
			'sidebar-3' => array(
				'text_about',
				'search',
			),
		),//end of widgets

		// Specify the core-defined pages to create and add custom thumbnails to some of them.
		'posts' => array(
			'home',
			'about' => array(
				'thumbnail' => '{{image-sandwich}}',
				'post_content' => '<p class="lead">Babybel cheese slices say cheese. Pepper jack red leicester macaroni cheese.</p><p>Cheese triangles caerphilly manchego cheese triangles fromage frais gouda melted cheese red leicester. Hard cheese port-salut caerphilly cheese slices cottage cheese fromage frais pecorino.</p><p><img src="https://unsplash.it/1600/500/?random" alt="Placeholder image"></p><blockquote class="blockquote"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p></blockquote><p><b>Cheesecake boursin cheese and wine. Ricotta swiss cheese strings fromage cheese and wine red leicester emmental croque monsieur.</b> Fondue smelly cheese red leicester lancashire when the cheese comes out everybodys happy emmental babybel when the cheese comes out everybodys happy.</p>',
			),
			'contact' => array(
				'thumbnail' => '{{image-espresso}}',
			),
			'blog' => array(
				'thumbnail' => '{{image-coffee}}',
			),
			'homepage-section' => array(
				'thumbnail' => '{{image-espresso}}',
			),
		),

// 		// Create the custom image attachments used as post thumbnails for pages.
		'attachments' => array(
			'image-espresso' => array(
				'post_title' => _x( 'Espresso', 'Theme starter content', 'bitwalitwo' ),
				'file' => 'assets/images/espresso.jpg', // URL relative to the template directory.
			),
			'image-sandwich' => array(
				'post_title' => _x( 'Sandwich', 'Theme starter content', 'bitwalitwo' ),
				'file' => 'assets/images/sandwich.jpg',
			),
			'image-coffee' => array(
				'post_title' => _x( 'Coffee', 'Theme starter content', 'bitwalitwo' ),
				'file' => 'assets/images/coffee.jpg',
			),
		),

// 		// Default to a static front page and assign the front and posts pages.
		'options' => array(
			'show_on_front' => 'page',
			'page_on_front' => '{{home}}',
			'page_for_posts' => '{{blog}}',
		),

// 		// Set the front page section theme mods to the IDs of the core-registered pages.
		'theme_mods' => array(
			'panel_1' => '{{homepage-section}}',
			'panel_2' => '{{about}}',
			'panel_3' => '{{blog}}',
			'panel_4' => '{{contact}}',
		),

// 		// Set up nav menus for each of the two areas registered in the theme.
		'nav_menus' => array(
			// Assign a menu to the "Header" location.
			'header' => array(
				'name' => __( 'Header Menu', 'bitwalitwo' ),
				'items' => array(
					'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
					'page_about',
					'page_blog',
					'page_contact',
				),
			),

			// Assign a menu to the "Footer" location.
			'footer' => array(
				'name' => __( 'Footer Links Menu', 'bitwalitwo' ),
				'items' => array(
					'link_yelp',
					'link_facebook',
					'link_twitter',
					'link_instagram',
					'link_email',
				),
			),
		),// nav_menus
	);//end of starter_content array

// 	/**
// 	 * Filters Twenty Seventeen array of starter content.
// 	 *
// 	 * @since Twenty Seventeen 1.1
// 	 *
// 	 * @param array $starter_content Array of starter content.
// 	 */
	$starter_content = apply_filters( 'bitwalitwo_starter_content', $starter_content );

	add_theme_support( 'starter-content', $starter_content );

}//end of function bitwalitwo_setup
add_action( 'after_setup_theme', 'bitwalitwo_setup' );
require get_parent_theme_file_path( 'custom-header.php' );


// /*4.0	content width */
// function bitwalitwo_content_width() {


// 	$content_width = $GLOBALS['content_width'];

// 	// Get layout.
// 	$page_layout = get_theme_mod( 'page_layout' );
	
// 	// Check if layout is one column.
// 	if ( 'one-column' === $page_layout ) {
		
// 		if ( bitwalitwo_is_frontpage() ) {
// 			$content_width = 644;
// 		} elseif ( is_page() ) {
// 			$content_width = 740;
// 		}
// 	}

// 	// Check if is single post and there is no sidebar.
// 	if ( is_single() && ! is_active_sidebar( 'sidebar-1' ) ) {
// 		$content_width = 740;
// 	}

	
// 	$GLOBALS['content_width'] = apply_filters( 'bitwalitwo_content_width', $content_width );
	
// }
// add_action( 'template_redirect', 'bitwalitwo_content_width', 0 );

// /*	5.0 Register Widgets Area*/
function bitwalitwo_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'bitwalitwo' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'bitwalitwo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'bitwalitwo' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'bitwalitwo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'bitwalitwo' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'bitwalitwo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bitwalitwo_widgets_init' );
// /*6.0	excerpt_more */
// function bitwalitwo_excerpt_more( $link ) {
// 	if ( is_admin() ) {
// 		return $link;
// 	}

// 	$link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
// 		esc_url( get_permalink( get_the_ID() ) ),
// 		/* translators: %s: Name of current post */
// 		sprintf( __( 'Continue reading<span class="oooscreen-reader-text"> "%s"</span>', 'bitwalitwo' ), get_the_title( get_the_ID() ) )
// 	);
// 	return ' &hellip; ' . $link;
// }
// add_filter( 'excerpt_more', 'bitwalitwo_excerpt_more' );

// /*7.0	javascript detection */
// function bitwalitwo_javascript_detection() {
			
// 	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
// }
// add_action( 'wp_head', 'bitwalitwo_javascript_detection', 0 );

// /*8.0 pingback*/
// function bitwalitwo_pingback_header() {
// 	if ( is_singular() && pings_open() ) {
// 		printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
// 	}
// }
// add_action( 'wp_head', 'bitwalitwo_pingback_header' );

// /*9.0	Custom Color */
// function bitwali_colors_css_wrap() {
// 	if ( 'custom' !== get_theme_mod( 'colorscheme' ) && ! is_customize_preview() ) {
// 		return;
// 	}

// 	require_once( get_parent_theme_file_path( '/includes/color-patterns.php' ) );
// 	$hue = absint( get_theme_mod( 'colorscheme_hue', 250 ) );
// ?>
 	<style type="text/css" id="custom-theme-colors" <?php //if ( is_customize_preview() ) { echo 'data-hue="' . $hue . '"'; } ?>>
 		<?php // echo bitwalitwo_custom_colors_css(); ?>
 	</style>
 <?php //}
// add_action( 'wp_head', 'bitwali_colors_css_wrap' );

// /*10.0	Enqueue scripts and styles */

 

 function bitwalitwo_scripts() {
// 	// Add custom fonts, used in the main stylesheet.
// 	// wp_enqueue_style( 'bitwalitwo-fonts', bitwalitwo_fonts_url(), array(), null );

	// Theme stylesheet.
	wp_enqueue_style( 'bitwalitwo-style', get_stylesheet_uri(),'2.1',True );

// 	// Load the dark colorscheme.
// 	// if ( 'dark' === get_theme_mod( 'colorscheme', 'light' ) || is_customize_preview() ) {
// 	// 	wp_enqueue_style( 'bitwalitwo-colors-dark', get_theme_file_uri( '/assets/css/colors-dark.css' ), array( 'bitwalitwo-style' ), '1.0' );
// 	// }

// 	// Load the Internet Explorer 9 specific stylesheet, to fix display issues in the Customizer.
// 	// if ( is_customize_preview() ) {
// 	// 	wp_enqueue_style( 'bitwalitwo-ie9', get_theme_file_uri( '/assets/css/ie9.css' ), array( 'bitwalitwo-style' ), '1.0' );
// 	// 	wp_style_add_data( 'bitwalitwo-ie9', 'conditional', 'IE 9' );
// 	// }

// 	// // Load the Internet Explorer 8 specific stylesheet.
// 	// wp_enqueue_style( 'bitwalitwo-ie8', get_theme_file_uri( '/assets/css/ie8.css' ), array( 'bitwalitwo-style' ), '1.0' );
// 	// wp_style_add_data( 'bitwalitwo-ie8', 'conditional', 'lt IE 9' );

// 	// // Load the html5 shiv.
// 	// wp_enqueue_script( 'html5', get_theme_file_uri( '/assets/js/html5.js' ), array(), '3.7.3' );
// 	// wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

// 	// wp_enqueue_script( 'bitwalitwo-skip-link-focus-fix', get_theme_file_uri( '/assets/js/skip-link-focus-fix.js' ), array(), '1.0', true );

// 	$bitwalitwo_l10n = array(
// 		'quote'          => bitwalitwo_get_svg( array( 'icon' => 'quote-right' ) ),
// 	);
	
// 	if ( has_nav_menu( 'top' ) ) {
// 		wp_enqueue_script( 'bitwalitwo-navigation', get_theme_file_uri( '/assets/js/navigation.js' ), array( 'jquery' ), '1.0', true );
	
// 		$bitwalitwo_l10n['expand']         = __( 'Expand child menu', 'bitwalitwo' );
// 		$bitwalitwo_l10n['collapse']       = __( 'Collapse child menu', 'bitwalitwo' );
// 		$bitwalitwo_l10n['icon']           = bitwalitwo_get_svg( array( 'icon' => 'angle-down', 'fallback' => true ) );
// 	}
// 	wp_enqueue_script( 'bitwalitwo-global', get_theme_file_uri( '/assets/js/global.js' ), array( 'jquery' ), '1.0', true );

// 	wp_enqueue_script( 'jquery-scrollto', get_theme_file_uri( '/assets/js/jquery.scrollTo.js' ), array( 'jquery' ), '2.1.2', true );

// 	wp_localize_script( 'bitwalitwo-skip-link-focus-fix', 'bitwalitwoScreenReaderText', $bitwalitwo_l10n );

// 	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
// 		wp_enqueue_script( 'comment-reply' );
// 	}
 }
 add_action( 'wp_enqueue_scripts', 'bitwalitwo_scripts' );

 /*
 	11.0	content image size attr
 */
// function bitwalitwo_content_image_sizes_attr( $sizes, $size ) {
	
// 	$width = $size[0];
// 	if ( 740 <= $width ) {
// 		$sizes = '(max-width: 706px) 89vw, (max-width: 767px) 82vw, 740px';
// 	}


// 	if ( is_active_sidebar( 'sidebar-1' ) || is_archive() || is_search() || is_home() || is_page() ) {
// 		if ( ! ( is_page() && 'one-column' === get_theme_mod( 'page_options' ) ) && 767 <= $width ) {
// 			 $sizes = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
// 		}
// 	}

// 	return $sizes;
// }
// //this filter called on the_custom_logo();
// add_filter( 'wp_calculate_image_sizes', 'bitwalitwo_content_image_sizes_attr', 10, 2 );
// /*12.0		header image tag*/
// function bitwalitwo_header_image_tag( $html, $header, $attr ) {
// 	if ( isset( $attr['sizes'] ) ) {
// 		$html = str_replace( $attr['sizes'], '100vw', $html );
// 	}
// 	return $html;
// }
// add_filter( 'get_header_image_tag', 'bitwalitwo_header_image_tag', 10, 3 );
// /* 13.0		post thumbnail size attr*/
// function bitwalitwo_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
// 	if ( is_archive() || is_search() || is_home() ) {
// 		$attr['sizes'] = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
// 	} else {
// 		$attr['sizes'] = '100vw';
// 	}
// 	return $attr;
// }
// add_filter( 'wp_get_attachment_image_attributes', 'bitwalitwo_post_thumbnail_sizes_attr', 10, 3 );
// /* 14.0		Front page templates */
// /**
//  * Use front-page.php when Front page displays is set to a static page.
//  *
//  * @since Twenty Seventeen 1.0
//  *
//  * @param string $template front-page.php.
//  *
//  * @return string The template to be used: blank if is_home() is true (defaults to index.php), else $template.
//  */
// function bitwalitwo_front_page_template( $template ) {

// 	return is_home() ? '' : $template;
// }
// add_filter( 'frontpage_template',  'bitwalitwo_front_page_template' );

// /* bitwalitwo_is_frontpage*/
// function bitwalitwo_is_frontpage( )
// {
// 	return ( is_front_page() && ! is_home() );
// }

// /**
//  * Implement the Custom Header feature.
//  */
// require get_parent_theme_file_path( '/includes/custom-header.php' );
// /**
//  * SVG icons functions and filters.
//  */
// require get_parent_theme_file_path( '/includes/icon-functions.php' );
// /**
//  * Implement the Custom Header feature.
//  */
// // require get_parent_theme_file_path( '/inc/custom-header.php' );

// /**
//  * Custom template tags for this theme.
//  */
// require get_parent_theme_file_path( '/templates/template-tags.php' );

// /**
//  * Additional features to allow styling of the templates.
//  */
// require get_parent_theme_file_path( '/includes/addbody-classes.php' );
// // require get_parent_theme_file_path( '/inc/template-functions.php' );

// // /**
// //  * Customizer additions.
// //  */
// require get_parent_theme_file_path( '/includes/customizer.php' );

// // /**
// //  * SVG icons functions and filters.
// //  */
// // require get_parent_theme_file_path( '/inc/icon-functions.php' );

