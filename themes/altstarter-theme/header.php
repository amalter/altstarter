<?php
/**
 * The template for displaying the header.
 *
 * @package altstarterTheme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>

		<a href="#main" class="skip-to-content-link visually-hidden-focusable"><?php esc_html_e( 'Skip to main content', 'altstarter-theme' ); ?></a>

		<main id="main" role="main" tabindex="-1">

			<h1><?php bloginfo( 'name' ); ?></h1>
