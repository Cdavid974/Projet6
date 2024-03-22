<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
};
// Fonction pour ajouter le lien "Admin" dans le menu
function ajouter_lien_admin_dans_menu($items, $args)
{
    // Vérifier si l'utilisateur est connecté
    if (is_user_logged_in()) {
        // Construire le lien
        $lien_admin = '<li class="menu-item"><a href="' . admin_url() . '">Admin</a></li>';

        // Ajouter le lien à la fin du menu
        $items .= $lien_admin;
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'ajouter_lien_admin_dans_menu', 10, 2);
