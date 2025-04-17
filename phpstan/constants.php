<?php
/**
 * WP Constants used by PHPStan
 *
 * These should be updated to match constants that are set in any custom plugins or themes that will be anylised.
 *
 * @package TenUpPhpStan
 */

// Change these when you update the constants in the plugin.
define( 'ALTSTARTER_PLUGIN_VERSION', '0.1.0' );
define( 'ALTSTARTER_PLUGIN_URL', '' );
define( 'ALTSTARTER_PLUGIN_PATH', '' );
define( 'ALTSTARTER_PLUGIN_INC', ALTSTARTER_PLUGIN_PATH . 'includes/' );

// Change these when you update the constants in the theme.
define( 'ALTSTARTER_THEME_VERSION', '0.1.0' );
define( 'ALTSTARTER_THEME_TEMPLATE_URL', '' );
define( 'ALTSTARTER_THEME_PATH', '/' );
define( 'ALTSTARTER_THEME_DIST_PATH', ALTSTARTER_THEME_PATH . 'dist/' );
define( 'ALTSTARTER_THEME_DIST_URL', ALTSTARTER_THEME_TEMPLATE_URL . '/dist/' );
define( 'ALTSTARTER_THEME_INC', ALTSTARTER_THEME_PATH . 'includes/' );
define( 'ALTSTARTER_THEME_BLOCK_DIR', ALTSTARTER_THEME_INC . 'blocks/' );

define( 'ALTSTARTER_BLOCK_THEME_VERSION', '1.0.0' );
define( 'ALTSTARTER_BLOCK_THEME_TEMPLATE_URL', '' );
define( 'ALTSTARTER_BLOCK_THEME_PATH', '/' );
define( 'ALTSTARTER_BLOCK_THEME_DIST_PATH', ALTSTARTER_BLOCK_THEME_PATH . 'dist/' );
define( 'ALTSTARTER_BLOCK_THEME_DIST_URL', ALTSTARTER_BLOCK_THEME_TEMPLATE_URL . '/dist/' );
define( 'ALTSTARTER_BLOCK_THEME_INC', ALTSTARTER_BLOCK_THEME_PATH . 'includes/' );
define( 'ALTSTARTER_BLOCK_THEME_BLOCK_DIST_DIR', ALTSTARTER_BLOCK_THEME_DIST_PATH . '/blocks/' );
