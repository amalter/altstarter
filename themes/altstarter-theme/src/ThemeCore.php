<?php
/**
 * ThemeCore module.
 *
 * @package altstarterTheme
 */

namespace altstarterTheme;

use TenupFramework\ModuleInitialization;

/**
 * ThemeCore module.
 *
 * @package altstarterTheme
 */
class ThemeCore {

	/**
	 * Default setup routine
	 *
	 * @return void
	 */
	public function setup() {
		add_action( 'init', [ $this, 'init' ], apply_filters( 'altstarter_theme_init_priority', 8 ) );
		add_action( 'after_setup_theme', [ $this, 'i18n' ] );
		add_action( 'after_setup_theme', [ $this, 'theme_setup' ] );

		do_action( 'altstarter_theme_loaded' );
	}

	/**
	 * Registers the default textdomain.
	 *
	 * @return void
	 */
	public function i18n() {
		load_theme_textdomain( 'altstarter-theme', ALTSTARTER_THEME_PATH . '/languages' );
	}

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @return void
	 */
	public function theme_setup() {
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support(
			'html5',
			array(
				'search-form',
				'gallery',
				'navigation-widgets',
			)
		);

		add_theme_support( 'editor-styles' );
		add_editor_style( 'dist/css/frontend.css' );

		remove_theme_support( 'core-block-patterns' );

		// by adding the `theme.json` file block templates automatically get enabled.
		// because the template editor will need additional QA and work to get right
		// the default is to disable this feature.
		remove_theme_support( 'block-templates' );

		// This theme uses wp_nav_menu() in three locations.
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary Menu', 'altstarter-theme' ),
			)
		);
	}

	/**
	 * Initializes the plugin and fires an action other plugins can hook into.
	 *
	 * @return void
	 */
	public function init() {
		do_action( 'altstarter_theme_before_init' );

		if ( ! class_exists( '\TenupFramework\ModuleInitialization' ) ) {
			add_action(
				'admin_notices',
				function () {
					$class = 'notice notice-error';

					printf(
						'<div class="%1$s"><p>%2$s</p></div>',
						esc_attr( $class ),
						wp_kses_post(
							__(
								'Please ensure the <a href="https://github.com/10up/wp-framework"><code>10up/wp-framework</code></a> composer package is installed.',
								'altstarter-plugin'
							)
						)
					);
				}
			);

			return;
		}

		ModuleInitialization::instance()->init_classes( ALTSTARTER_THEME_INC );
		do_action( 'altstarter_theme_init' );
	}

	/**
	 * Get an initialized class by its full class name, including namespace.
	 *
	 * @param string $class_name The class name including the namespace.
	 *
	 * @return false|\TenupFramework\ModuleInterface
	 */
	public static function get_module( $class_name ) {
		return \TenupFramework\ModuleInitialization::get_module( $class_name );
	}
}
