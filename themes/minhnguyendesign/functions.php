<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/utils.php',                    // Utility functions
  'lib/init.php',                     // Initial theme setup and constants
  'lib/wrapper.php',                  // Theme wrapper class
  'lib/conditional-tag-check.php',    // ConditionalTagCheck class
  'lib/config.php',                   // Configuration
  'lib/assets.php',                   // Scripts and stylesheets
  'lib/titles.php',                   // Page titles
  'lib/extras.php',                   // Custom functions
  'lib/custom/custom_post_types.php', // Custom Post Types
  'lib/acf/contact-page.php',         // ACF for Contact Page
  'lib/acf/members-info.php',         // ACF for Members
  'lib/acf/projects-info.php',        // ACF for Projects
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);

function special_nav_class($classes, $item) {
    if (in_array('current-menu-item', $classes)) {
        $classes[] = 'active ';
    }
    return $classes;
}

function change_default_title_project( $title ){

    $screen = get_current_screen();

    if ( 'members' == $screen->post_type ){
        $title = 'Member name';
    }

    return $title;
}

add_filter( 'enter_title_here', 'change_default_title_project' );

