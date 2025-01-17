<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), 
    filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

function ajouter_lien_personnalise_menu($items, $args) {
    // Vérifier si le menu est celui que vous voulez cibler (exemple : "primary")
    if ($args->theme_location === 'main') {
        if (is_user_logged_in()) {
            $items .= '<li class="menu-item menu-item-mon-compte"><a href="' . esc_url(site_url('/mon-compte')) . '">Mon Compte</a></li>';
        } else {
            $items .= '<li class="menu-item menu-item-se-connecter"><a href="' . esc_url(wp_login_url()) . '">Se connecter</a></li>';
        }
    }

    return $items;
}
add_filter('wp_nav_menu_items', 'ajouter_lien_personnalise_menu', 10, 2);