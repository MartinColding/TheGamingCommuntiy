<?php

register_sidebar(array(
    'name'          => 'Main Sidebar',
    'id'            => 'sidebar-widget',
    'before_widget' => '<li>',
    'after_widget'  => '</li>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>'
));

add_theme_support('menus');

add_theme_support('$register_widget_settings = new ')
?>