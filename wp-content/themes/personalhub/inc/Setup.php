<?php
/**
 * Theme basic setup.
 */

namespace PersonalHub;

class Setup {

	public function __construct() {
		add_action( 'after_setup_theme', [ $this, 'setup' ] );
		add_action( 'upload_mimes', [ $this, 'upload_mimes' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_assets' ] );

		$this->register_image_sizes();
	}

	public function setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 */
		load_theme_textdomain( PERSONALHUB_DOMAIN, PERSONALHUB_PATH . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( [
			                    'primary' => __( 'Primary Menu', PERSONALHUB_DOMAIN ),
		                    ]);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', [
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		]);

		/*
		 * Adding Thumbnail basic support
		 */
		add_theme_support( 'post-thumbnails' );

		/*
		 * Adding support for Widget edit icons in customizer
		 */
		add_theme_support( 'customize-selective-refresh-widgets' );

		/*
		 * Enable support for Post Formats.
		 * See http://codex.wordpress.org/Post_Formats
		 */
		add_theme_support( 'post-formats', [
			'aside',
			'image',
			'video',
			'quote',
			'link',
		]);

		// Set up the WordPress Theme logo feature.
		add_theme_support( 'custom-logo', [
			'width'       => 170,
			'height'      => 30,
			'flex-height' => true,
		]);
	}

	public function upload_mimes( $mimes ) {
		$mimes['svg'] = 'image/svg+xml';

		return $mimes;
	}

	public function enqueue_assets() {
		wp_enqueue_style('personalhub-font', 'https://fonts.googleapis.com/css?family=Hind+Guntur:300,400,500,600,700&display=swap', [], PERSONALHUB_VERSION );

		wp_enqueue_style('personalhub-styles', PERSONALHUB_URL . '/assets/css/styles.css', [], PERSONALHUB_VERSION );

		wp_enqueue_script( 'personalhub-scripts', PERSONALHUB_URL . '/assets/js/scripts.js', ['jquery'], PERSONALHUB_VERSION, true );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}

	public function register_image_sizes() {
//		add_image_size( 'medium', 160, 124, true );
	}

}
