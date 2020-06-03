<?php

function ms_supports()
{
    add_theme_support('titel-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'en tête du menu');
    register_nav_menu('footer', 'pied de page');
    

    add_image_size('post-thumbnail', 350, 215, true);
}

function ms_register_assets()
{
    wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_register_script('bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js", ['popper', 'jquery'], false, true);
    wp_register_script('poppeer', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", [], null, true);
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

function ms_menu_class($classes)
{

    $classes[] = 'nav-item';
    return $classes;
}

function ms_menu_link_class($attrs)
{

    $attrs['class'] = 'nav-link';
    return $attrs;
}

function ms_pagination()
{
    $pages = paginate_links(['type' => 'array']);
    if ($pages === null) {
        return;
    }
    echo '<nav aria-label="Pagination" class="my-4">';
    echo '<ul class="pagination">';
    $pages = paginate_links(['type' => 'array']);
    foreach ($pages as $page) {
        $active = strpos($page, 'current') !== false;
        $active = 'page-item';
        if ($active) {
            $class = 'active';
        }
        echo '<li class="' . $class . '">';
        echo str_replace('page-numbers', 'page-link', $page);
        echo '</li>';
    }

    echo '</ul>';
    echo '</nav>';
}


add_action('after_setup_theme', 'ms_supports');
add_action('wp_enqueue_scripts', 'ms_register_assets');
add_filter('nav_menu_css_class', 'ms_menu_class');
add_filter('nav_menu_link_attributes', 'ms_menu_class');

