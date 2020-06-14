<?php
/**
 * sb-portfolio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package sb-portfolio
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'sb_portfolio_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function sb_portfolio_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on sb-portfolio, use a find and replace
		 * to change 'sb-portfolio' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'sb-portfolio', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary-menu' => esc_html__( 'Primary Menu', 'sb-portfolio' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'sb_portfolio_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}

	function new_excerpt_more( $more ) {
		return '...';
	}

	add_filter( 'excerpt_more', 'new_excerpt_more' );
	function custom_excerpt_length( $length ) {
		// return 20;
		if ( is_home() ) {
			return 70;
		} else {
			return 20;
		}

	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

	add_filter('term_links-post_tag','limit_to_five_tags');
	function limit_to_five_tags($terms) {
		return array_slice($terms,0,100,true);
	}
	function wpb_related_author_posts($content) {

		if ( is_single() ) {
			global $authordata, $post;

			$content .= '<h4>Similar Posts by The Author:</h4> ';

			$authors_posts = get_posts( array( 'author' => $authordata->ID, 'post__not_in' => array( $post->ID ), 'posts_per_page' => 5 ) );

			$content .= '<ul>';
			foreach ( $authors_posts as $authors_post ) {
				$content .= '<li><a href="' . get_permalink( $authors_post->ID ) . '">' . apply_filters( 'the_title', $authors_post->post_title, $authors_post->ID ) . '</a></li>';
			}
			$content .= '</ul>';

			return $content;
		}
		else {
			return $content;
		}
	}

	add_filter('the_content','wpb_related_author_posts');
	function my_change_comment_date_format( $date, $date_format, $comment ) {
		return date( 'F j', strtotime( $comment->comment_date ) );
	}
	add_filter( 'get_comment_date', 'my_change_comment_date_format', 10, 3 );

	function wporg_more_comments( $content ) {
    echo '123';
    return $content;
    add_filter('wp_comment_reply','wporg_more_comments',5,1);
}

add_filter( 'wp_comment_reply', 'wporg_more_comments', 5, 1 );
endif;
add_action( 'after_setup_theme', 'sb_portfolio_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sb_portfolio_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'sb_portfolio_content_width', 640 );
}

add_action( 'after_setup_theme', 'sb_portfolio_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sb_portfolio_widgets_init() {
//	register_sidebar(
//		array(
//			'name'          => esc_html__( 'Sidebar', 'sb-portfolio' ),
//			'id'            => 'sidebar-1',
//			'description'   => esc_html__( 'Add widgets here.', 'sb-portfolio' ),
//			'before_widget' => '<section id="%1$s" class="widget %2$s">',
//			'after_widget'  => '</section>',
//			'before_title'  => '<h2 class="widget-title">',
//			'after_title'   => '</h2>',
//		)
//	);
	for ( $i = 1; $i < 5; $i ++ ):
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Widget ' . $i, 'sb-portfolio' ),
			'id'            => 'footer-widget-' . $i,
			'description'   => esc_html__( 'Add widgets here.', 'sb-portfolio' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
	endfor;
}

add_action( 'widgets_init', 'sb_portfolio_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sb_portfolio_scripts() {
	wp_enqueue_style( 'sb-portfolio-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'sb-portfolio-style', 'rtl', 'replace' );

	wp_enqueue_script( 'sb-portfolio-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	/*
	 * Custom Enqueue
	 */
	wp_enqueue_style( 'google-font-1', 'https://fonts.googleapis.com/css?family=Karla:400,700', array(), time() );
	wp_enqueue_style( 'google-font-2', 'https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700', array(), time() );
	wp_enqueue_style( 'animate.css', get_template_directory_uri() . '/assets/css/animate.css', array(), time() );
	wp_enqueue_style( 'icomoon.css', get_template_directory_uri() . '/assets/css/icomoon.css', array(), time() );
	wp_enqueue_style( 'bootstrap.css', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), time() );
	wp_enqueue_style( 'owl.carousel.min.css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), time() );
	wp_enqueue_style( 'owl.theme.default.min.css', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), time() );
	wp_enqueue_style( 'magnific-popup.css', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), time() );
	wp_enqueue_style( 'style.css-theme', get_template_directory_uri() . '/assets/css/style.css', array(), time() );

	wp_enqueue_script( 'modernizr-2.6.2.min.js', get_template_directory_uri() . '/assets/js/modernizr-2.6.2.min.js', array(), time(), false );
	wp_enqueue_script( 'respond.min.js', get_template_directory_uri() . '/assets/js/respond.min.js', array(), time(), false );
	wp_enqueue_script( 'jquery.min.js', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), time(), true );
	wp_enqueue_script( 'jquery.easing.1.3.js', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', array(), time(), true );
	wp_enqueue_script( 'bootstrap.min.js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), time(), true );
	wp_enqueue_script( 'jquery.waypoints.min.js', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array(), time(), true );
	wp_enqueue_script( 'owl.carousel.min.js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), time(), true );
	wp_enqueue_script( 'jquery.magnific-popup.min.js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), time(), true );
	wp_enqueue_script( 'magnific-popup-options.js', get_template_directory_uri() . '/assets/js/magnific-popup-options.js', array(), time(), true );
	wp_enqueue_script( 'main.js', get_template_directory_uri() . '/assets/js/main.js', array(), time(), true );
}

add_action( 'wp_enqueue_scripts', 'sb_portfolio_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Implementing Custom Post Types
 */
require get_template_directory() . '/cpts/work.php';
require get_template_directory() . '/cpts/testimony.php';
require get_template_directory() . '/shortcodes/footer-shortcodes.php';