<?php
/**
 * Recommended way to include parent theme styles.
 * (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 *
 */  

 add_action( 'wp_enqueue_scripts', 'astra_child_style' );
  function astra_child_style() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css',array('parent-style'));
	
}


add_filter( 'wp_nav_menu_items','add_admin_link', 10, 2 );
function add_admin_link( $items, $args ) {
    // est-ce que l'utilisateur est bien connecté ?
    if (is_user_logged_in()) {
        //si oui, on affiche le lien admin
        $items .= '<li class="menu-item menu-item-type-post_type menu-item-object-page"><a class="menu-link" href="'. get_admin_url() .'">Admin</a></li>';
    }
    return $items;
}
?>


