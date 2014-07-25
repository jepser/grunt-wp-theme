<?php
/**
 * The template for displaying the header.
 *
 * @package {%= title %}
 * @since 0.1.0
 */
 ?><!DOCTYPE html>
 <head>
 	<title><?php wp_title( '-', true, 'right' ); echo esc_html( get_bloginfo('name'), 1 ); ?></title>
 	<?php wp_head(); ?>
 </head>
 <body <?php body_class(); ?>>
 	