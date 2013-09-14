<?php
/**
 * Template Name: 360 Media Page
 * The template for displaying home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package bullettshop
 */

get_header(); 

if(have_posts()) : 
  while(have_posts( { 'post-type': '360_media' })) : 

    the_post(); 

    the_title(); 

    echo '<div class="entry-content">'; 

    the_content(); 

    echo '</div>'; 

  endwhile; 
endif; 

get_footer(); ?>

