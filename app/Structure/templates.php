<?php

namespace Tonik\Theme\App\Structure;

/*
|-----------------------------------------------------------
| Theme Templates Actions
|-----------------------------------------------------------
|
| This file purpose is to include your templates rendering
| actions hooks, which allows you to render specific
| partials at specific places of your theme.
|
*/

use function Tonik\Theme\App\template;


function render_post_thumbnail()
{
    template(['partials/post/thumbnail', get_post_format()]);
}
add_action('theme/index/post/thumbnail', 'Tonik\Theme\App\Structure\render_post_thumbnail');



function render_empty_content()
{
    template(['partials/index/content', 'none']);
}
add_action('theme/index/content/none', 'Tonik\Theme\App\Structure\render_empty_content');



// ACF Modules

function render_modules()
{
    template('modules/index');
}
add_action('theme/modules', 'Tonik\Theme\App\Structure\render_modules');


function render_text_module()
{
    template('modules/title');
}
add_action('theme/module/title', 'Tonik\Theme\App\Structure\render_text_module');
