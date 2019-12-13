<?php

function aitc_setup(){
add_theme_support('post-thumbnails');
register_nav_menus(array(
                  'primary' => __('Primary Menu')
));
}
add_action('after_setup_theme' , 'aitc_setup');

function set_excerpt_length(){
return 80;
}
add_filter('excerpt_length' , 'set_excerpt_length');

function init_widgets(){
              register_sidebar(array(
              'name'  => 'Sidebar',
              'id'         => 'sidebar',
              'before_widget' => '<div class="main-sidebar">',
              'after_widget'    =>  '</div>',
              'before_title'      =>  '<h4>',
              'after_title'         =>  '</h4>'
            ));
              register_sidebar(array(
              'name'  => 'Sidebar Recent Posts',
              'id'         => 'sidebar-recent-posts',
              'before_widget' => '<div class="main-sidebar">',
              'after_widget'    =>  '</div>',
              'before_title'      =>  '<h4>',
              'after_title'         =>  '</h4>'
            ));
register_sidebar( array(
'name' => 'Footer Sidebar 1',
'id' => 'footer-sidebar-1',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'Footer Sidebar 2',
'id' => 'footer-sidebar-2',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'Footer Sidebar 3',
'id' => 'footer-sidebar-3',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );

}

add_action('widgets_init' , init_widgets);

add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );
