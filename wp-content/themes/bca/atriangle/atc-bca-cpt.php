<?php

add_action('init', 'cptui_register_my_cpt');
function cptui_register_my_cpt() {
register_post_type('photos', array( 
'label' => '__('Photos')',
'description' => '',
'public' => 'true',
'show_ui' => 'true',
'show_in_menu' => 'true',
'capability_type' => 'post',
'hierarchical' => 'false',
'rewrite' => array('slug' => 'photos', 'with_front' => '1'),
'query_var' => 'true',
'exclude_from_search' => 'false',
'supports' => array(''title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats','),
'labels' => 'array (
  'name' => 'Photos',
  'singular_name' => 'Photo',
  'menu_name' => 'Photos',
  'add_new' => 'Add Photo',
  'add_new_item' => 'Add New Photo',
  'edit' => 'Edit',
  'edit_item' => 'Edit Photo',
  'new_item' => 'New Photo',
  'view' => 'View Photo',
  'view_item' => 'View Photo',
  'search_items' => 'Search Photos',
  'not_found' => 'No Photos Found',
  'not_found_in_trash' => 'No Photos Found in Trash',
  'parent' => 'Parent Photo',
)'
) ); }

add_action('init', 'cptui_register_my_cpt');
function cptui_register_my_cpt() {
register_post_type('films', array( 
'label' => '__('Films')',
'description' => '',
'public' => 'true',
'show_ui' => 'true',
'show_in_menu' => 'true',
'capability_type' => 'post',
'hierarchical' => 'false',
'rewrite' => array('slug' => 'films', 'with_front' => '1'),
'query_var' => 'true',
'exclude_from_search' => 'false',
'supports' => array(''title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats','),
'labels' => 'array (
  'name' => 'Films',
  'singular_name' => 'Film',
  'menu_name' => 'Films',
  'add_new' => 'Add Film',
  'add_new_item' => 'Add New Film',
  'edit' => 'Edit',
  'edit_item' => 'Edit Film',
  'new_item' => 'New Film',
  'view' => 'View Film',
  'view_item' => 'View Film',
  'search_items' => 'Search Films',
  'not_found' => 'No Films Found',
  'not_found_in_trash' => 'No Films Found in Trash',
  'parent' => 'Parent Film',
)'
) ); }

add_action('init', 'cptui_register_my_cpt');
function cptui_register_my_cpt() {
register_post_type('interactives', array( 
'label' => '__('Interactives')',
'description' => '',
'public' => 'true',
'show_ui' => 'true',
'show_in_menu' => 'true',
'capability_type' => 'post',
'hierarchical' => 'false',
'rewrite' => array('slug' => 'interactives', 'with_front' => '1'),
'query_var' => 'true',
'exclude_from_search' => 'false',
'supports' => array(''title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats','),
'labels' => 'array (
  'name' => 'Interactives',
  'singular_name' => 'Interactive',
  'menu_name' => 'Interactives',
  'add_new' => 'Add Interactive',
  'add_new_item' => 'Add New Interactive',
  'edit' => 'Edit',
  'edit_item' => 'Edit Interactive',
  'new_item' => 'New Interactive',
  'view' => 'View Interactive',
  'view_item' => 'View Interactive',
  'search_items' => 'Search Interactives',
  'not_found' => 'No Interactives Found',
  'not_found_in_trash' => 'No Interactives Found in Trash',
  'parent' => 'Parent Interactive',
)'
) ); }

add_action('init', 'cptui_register_my_cpt');
function cptui_register_my_cpt() {
register_post_type('designs', array( 
'label' => '__('Designs')',
'description' => '',
'public' => 'true',
'show_ui' => 'true',
'show_in_menu' => 'true',
'capability_type' => 'post',
'hierarchical' => 'false',
'rewrite' => array('slug' => 'designs', 'with_front' => '1'),
'query_var' => 'true',
'exclude_from_search' => 'false',
'supports' => array(''title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats','),
'labels' => 'array (
  'name' => 'Designs',
  'singular_name' => 'Design',
  'menu_name' => 'Designs',
  'add_new' => 'Add Design',
  'add_new_item' => 'Add New Design',
  'edit' => 'Edit',
  'edit_item' => 'Edit Design',
  'new_item' => 'New Design',
  'view' => 'View Design',
  'view_item' => 'View Design',
  'search_items' => 'Search Designs',
  'not_found' => 'No Designs Found',
  'not_found_in_trash' => 'No Designs Found in Trash',
  'parent' => 'Parent Design',
)'
) ); }

add_action('init', 'cptui_register_my_cpt');
function cptui_register_my_cpt() {
register_post_type('events', array( 
'label' => '__('Events')',
'description' => '',
'public' => 'true',
'show_ui' => 'true',
'show_in_menu' => 'true',
'capability_type' => 'post',
'hierarchical' => 'false',
'rewrite' => array('slug' => 'events', 'with_front' => '1'),
'query_var' => 'true',
'exclude_from_search' => 'false',
'supports' => array(''title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats','),
'labels' => 'array (
  'name' => 'Events',
  'singular_name' => 'Event',
  'menu_name' => 'Events',
  'add_new' => 'Add Event',
  'add_new_item' => 'Add New Event',
  'edit' => 'Edit',
  'edit_item' => 'Edit Event',
  'new_item' => 'New Event',
  'view' => 'View Event',
  'view_item' => 'View Event',
  'search_items' => 'Search Events',
  'not_found' => 'No Events Found',
  'not_found_in_trash' => 'No Events Found in Trash',
  'parent' => 'Parent Event',
)'
) ); }

add_action('init', 'cptui_register_my_cpt');
function cptui_register_my_cpt() {
register_post_type('360_media', array( 
'label' => '__('360 Media Packages')',
'description' => '',
'public' => 'true',
'show_ui' => 'true',
'show_in_menu' => 'true',
'capability_type' => 'post',
'hierarchical' => 'false',
'rewrite' => array('slug' => '360_media', 'with_front' => '1'),
'query_var' => 'true',
'exclude_from_search' => 'false',
'supports' => array(''title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats','),
'labels' => 'array (
  'name' => '360 Media Packages',
  'singular_name' => '360 Media Package',
  'menu_name' => '360 Media Packages',
  'add_new' => 'Add 360 Media Package',
  'add_new_item' => 'Add New 360 Media Package',
  'edit' => 'Edit',
  'edit_item' => 'Edit 360 Media Package',
  'new_item' => 'New 360 Media Package',
  'view' => 'View 360 Media Package',
  'view_item' => 'View 360 Media Package',
  'search_items' => 'Search 360 Media Packages',
  'not_found' => 'No 360 Media Packages Found',
  'not_found_in_trash' => 'No 360 Media Packages Found in Trash',
  'parent' => 'Parent 360 Media Package',
)'
) ); }

?>