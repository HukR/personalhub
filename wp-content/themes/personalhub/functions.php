<?php
defined( 'ABSPATH' ) || exit;

$the_theme = wp_get_theme();

define( 'PERSONALHUB_VERSION', $the_theme->get( 'Version' ) );
define( 'PERSONALHUB_URL', get_template_directory_uri() );
define( 'PERSONALHUB_PATH', get_template_directory() );
define( 'PERSONALHUB_DOMAIN', 'personalhub' );

show_admin_bar(false);

/**
 * Theme setup and custom theme supports.
 */
require PERSONALHUB_PATH . '/inc/Setup.php';

new PersonalHub\Setup();
