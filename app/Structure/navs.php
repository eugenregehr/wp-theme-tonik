<?php

namespace Tonik\Theme\App\Structure;

/*
|----------------------------------------------------------------
| Theme Navigation Areas
|----------------------------------------------------------------
|
| This file is for registering your theme custom navigation areas
| where various menus can be assigned by site administrators.
|
*/

use function Tonik\Theme\App\config;

/**
 * Register Custom Navigation Walker
 */
if (!file_exists(get_template_directory() . '/app/navwalker.php')) {
    // File does not exist... return an error.
    return new WP_Error('navwalker-missing', __('It appears the navwalker.php file may be missing.', 'wp-bootstrap-navwalker'));
} else {
    // File exists... require it.
    require_once get_template_directory() . '/app/navwalker.php';
}


/**
 * Registers navigation areas.
 *
 * @return void
 */
function register_navigation_areas()
{
    register_nav_menus([
        'primary' => __('Primary', config('textdomain')),
    ]);
}
add_action('after_setup_theme', 'Tonik\Theme\App\Structure\register_navigation_areas');
