<?php
/*
 * Agrega mi menú al Control Panel del Admin
 */

// Hook el 'admin_menu' y ejecutar la función 'aawp_Agregar_Admin_Link()'
add_action('admin_menu', 'aawp_Agregar_Admin_Link()');
// Agrega un nuevo top level menu link al Control Panel del Admin
function aawp_Agregar_Admin_Link() {
    if( function_exists('add_menu_page'){
        add_menu_page (
            'Amigos Aliados', // Título de la página
            'Amigos Aliados', // Texto a mostrar en el link del menú
            'manage_options', // Capacidad requerida para mostrar el link
            'includes/aawp-first-admin-control-panel-page.php' // El 'slug' - archivo para mostrar cuando se da click al link
        );
    }
}