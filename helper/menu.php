<?php

function rossport_sea_nav_menu(){
    wp_nav_menu( array(
        'theme_location'  => 'header-menu',
        'menu_class'      => 'menu-area',
    ) );
}


function rossport_sea_nav_menu_footer(){
    wp_nav_menu( array(
        'theme_location'  => 'footer-menu-about',
        'menu_class'      => 'footer-list',
    ) );
}

function rossport_sea_nav_menu_footer_services(){
    wp_nav_menu( array(
        'theme_location'  => 'footer-menu-services',
        'menu_class'      => 'footer-list',
    ) );
}

function rossport_sea_nav_menu_footer_bottom(){
    wp_nav_menu( array(
        'theme_location'  => 'footer-menu-bottom',
        'menu_class'      => 'footer-bottom-area-nav-menu-area',
    ) );
}
?>