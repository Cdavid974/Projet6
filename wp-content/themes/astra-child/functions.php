<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

// Ajouter un lien dans le menu via le hook wp_nav_menu_items
function custom_menu_link($items, $args)
{
    // Vérifier si l'utilisateur est connecté
    if (is_user_logged_in()) {
        // L'utilisateur est connecté, ajouter un lien vers la page de profil
        $profile_link = '<li class="menu-item"><a href="' . esc_url(home_url('/profile')) . '"></a></li>';
        // Ajouter le lien après les autres éléments du menu
        $items .= $profile_link;
    } else {
        // L'utilisateur n'est pas connecté, ajouter un lien vers la page de connexion
        $login_link = '<li class="menu-item"><a href="' . esc_url(wp_login_url()) . '">Admin</a></li>';
        // Ajouter le lien après les autres éléments du menu
        $items .= $login_link;
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'custom_menu_link', 10, 2);
