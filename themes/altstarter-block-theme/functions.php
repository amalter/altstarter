<?php
/**
 * Theme constants and setup functions
 *
 * @package altstarterBlockTheme
 */

// Useful global constants.
define( 'ALTSTARTER_BLOCK_THEME_VERSION', '1.0.0' );
define( 'ALTSTARTER_BLOCK_THEME_TEMPLATE_URL', get_template_directory_uri() );
define( 'ALTSTARTER_BLOCK_THEME_PATH', get_template_directory() . '/' );
define( 'ALTSTARTER_BLOCK_THEME_DIST_PATH', ALTSTARTER_BLOCK_THEME_PATH . 'dist/' );
define( 'ALTSTARTER_BLOCK_THEME_DIST_URL', ALTSTARTER_BLOCK_THEME_TEMPLATE_URL . '/dist/' );
define( 'ALTSTARTER_BLOCK_THEME_INC', ALTSTARTER_BLOCK_THEME_PATH . 'src/' );
define( 'ALTSTARTER_BLOCK_THEME_BLOCK_DIST_DIR', ALTSTARTER_BLOCK_THEME_DIST_PATH . '/blocks/' );

// Require Composer autoloader if it exists.
if ( ! file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	throw new Exception( 'Please run `composer install` in your theme directory.' );
}

$is_local_env = in_array( wp_get_environment_type(), [ 'local', 'development' ], true );
$is_local_url = strpos( home_url(), '.test' ) || strpos( home_url(), '.local' ) || strpos( home_url(), '.lndo.site' );
$is_local     = $is_local_env || $is_local_url;

if ( $is_local && file_exists( __DIR__ . '/dist/fast-refresh.php' ) ) {
	require_once __DIR__ . '/dist/fast-refresh.php';

	if ( function_exists( 'TenUpToolkit\set_dist_url_path' ) ) {
		TenUpToolkit\set_dist_url_path( basename( __DIR__ ), ALTSTARTER_BLOCK_THEME_DIST_URL, ALTSTARTER_BLOCK_THEME_DIST_PATH );
	}
}

require_once __DIR__ . '/vendor/autoload.php';

require_once __DIR__ . '/template-tags.php';

$theme_core = new \altstarterBlockTheme\ThemeCore();
$theme_core->setup();
