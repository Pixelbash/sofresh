<?php

//Widgets
function sofresh_widgets_init() {
	/*
	register_sidebar( array(
		'name' => __( 'Footer Widgets 1', 'sofresh' ),
		'id' => 'footer-widgets-1',
		'description' => __( 'The first footer sidebar', 'sofresh' ),
		'before_widget' => '<div id="%1$s" class="span4 widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Footer Widgets 2', 'sofresh' ),
		'id' => 'footer-widgets-2',
		'description' => __( 'The first footer sidebar', 'sofresh' ),
		'before_widget' => '<div id="%1$s" class="span4 widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Footer Widgets 3', 'sofresh' ),
		'id' => 'footer-widgets-3',
		'description' => __( 'The first footer sidebar', 'sofresh' ),
		'before_widget' => '<div id="%1$s" class="span4 widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	*/
}

add_action( 'widgets_init', 'sofresh_widgets_init' );