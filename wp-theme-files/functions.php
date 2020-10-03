<?php
//add_action('wp_footer', 'show_template');
//function show_template() {
//	global $template;
//	print_r($template);
//}

add_action('wp_enqueue_scripts', 'jquery_cdn');
function jquery_cdn()
{
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', false, null, true);
        wp_enqueue_script('jquery');
    }
}

add_action('wp_enqueue_scripts', 'cai_scripts');
function cai_scripts()
{
    wp_register_script(
        'bootstrap-popper',
        'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js',
        array('jquery'),
        '',
        true
    );

    wp_register_script(
        'bootstrap-scripts',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js',
        array('jquery', 'bootstrap-popper'),
        '',
        true
    );

    wp_register_script(
        'cai-scripts',
        get_stylesheet_directory_uri() . '/js/custom-scripts.min.js',
        array('jquery', 'bootstrap-scripts'),
        '',
        true
    );

    wp_localize_script('cai-scripts', 'wp_params', array(
        'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php',
    ));

    wp_register_script(
        'jqui',
        'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js',
        array('jquery'),
        '',
        true
    );

    wp_register_script(
        'waypoints',
        'https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js',
        array('jquery'),
        '',
        true
    );

    wp_enqueue_script('bootstrap-popper');
    wp_enqueue_script('bootstrap-scripts');
    wp_enqueue_script('cai-scripts');
    wp_enqueue_script('jqui');
    wp_enqueue_script('waypoints');
}

add_filter('script_loader_tag', 'cai_add_script_meta', 10, 2);
function cai_add_script_meta($tag, $handle)
{
    switch ($handle) {
        case 'jquery':
            $tag = str_replace('></script>', ' integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>', $tag);
            break;

        case 'bootstrap-popper':
            $tag = str_replace('></script>', ' integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>', $tag);
            break;

        case 'bootstrap-scripts':
            $tag = str_replace('></script>', ' integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>', $tag);
            break;
    }

    return $tag;
}

add_action('wp_enqueue_scripts', 'cai_styles');
function cai_styles()
{
    wp_register_style(
        'google-fonts',
        'https://fonts.googleapis.com/css?family=Maitree:400,700|Nunito+Sans:400,600,700|Nunito:700'
    );

    wp_register_style(
        'fontawesome',
        'https://use.fontawesome.com/releases/v5.6.3/css/all.css'
    );

    wp_register_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap'
    );

    wp_register_style(
        'cai-css',
        get_stylesheet_directory_uri() . '/style.css'
    );

    wp_enqueue_style('google-fonts');
    wp_enqueue_style('fontawesome');
    wp_enqueue_style('google-fonts');
    wp_enqueue_style('cai-css');
}

add_filter('style_loader_tag', 'cai_add_css_meta', 10, 2);
function cai_add_css_meta($link, $handle)
{
    switch ($handle) {
        case 'fontawesome':
            $link = str_replace('/>', ' integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">', $link);
            break;
    }

    return $link;
}

add_action('after_setup_theme', 'cai_setup');
function cai_setup()
{
    add_theme_support('post-thumbnails');
    //set_post_thumbnail_size(320, 320);

    register_nav_menus(array(
        'menu' => 'Main Menu',
    ));

    load_theme_textdomain('cai', get_stylesheet_directory_uri() . '/languages');
}

add_filter('excerpt_more', 'cai_excerpt_ellipsis');
function cai_excerpt_ellipsis()
{
    return '...';
}

add_filter('excerpt_length', 'cai_excerpt_length', 999);
function cai_excerpt_length($length)
{
    return 20;
}

add_action('init', 'cai_create_post_types');
function cai_create_post_types()
{
    register_post_type("piercer", array(
        "public" => true,
        "menu_icon" => "dashicons-id",
        "labels" => array(
            "name" => "Piercers",
            "singular" => "Piercer",
            'search_items' => 'Search Piercers',
            'all_items' => 'All Piercers',
            'edit_item' => 'Edit Piercer',
            'update_item' => 'Update Piercer',
            'add_new_item' => 'Add New Piercer',
            'menu_name' => 'Piercers',
        ),
        'supports' => array('title', 'editor', 'thumbnail')
    ));
    register_post_type("review", array(
        "public" => true,
        "menu_icon" => "dashicons-star-filled",
        "labels" => array(
            "name" => "Reviews",
            "singular" => "Review",
            'search_items' => 'Search Reviews',
            'all_items' => 'All Reviews',
            'edit_item' => 'Edit Review',
            'update_item' => 'Update Review',
            'add_new_item' => 'Add New Review',
            'menu_name' => 'Reviews',
        ),
        'supports' => array('title', 'editor')
    ));
    register_post_type("slider", array(
        "public" => true,
        "menu_icon" => "dashicons-admin-page",
        "labels" => array(
            "name" => "Sliders",
            "singular" => "Slider",
            'search_items' => 'Search Sliders',
            'all_items' => 'All Sliders',
            'edit_item' => 'Edit Slider',
            'update_item' => 'Update Slider',
            'add_new_item' => 'Add New Slider',
            'menu_name' => 'Sliders',
        ),
        'supports' => array('title', 'thumbnail')
    ));
    flush_rewrite_rules();
}


require_once dirname(__FILE__) . '/includes/class-wp-bootstrap-navwalker.php';
require_once dirname(__FILE__) . '/includes/loadmore.php';

add_action('acf/init', 'cai_add_custom_fields');
function cai_add_custom_fields()
{
    require_once dirname(__FILE__) . '/includes/custom-fields.php';
}
