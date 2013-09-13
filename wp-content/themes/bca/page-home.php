<?php
/**
 * Template Name: Home Page
 * The template for displaying home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package bullettshop
 */

get_header(); ?>


	<div id="primary" class="content-area">
		
		<main id="main" class="row site-main row" role="main">
			<div id="slide-case" class="column">
        <?php wooslider( array( 'slide_page'=>'home-page', 'slider_type' => 'slides', 'smoothheight' => 'true' ) ); ?>
      </div>
    </main>
    <div class="">
      <div class=" large-12" id="isotopin">
        <?php 
          query_posts( array( 
            'posts_per_page' => -1, 
            'post_type' => array( 'photography', 'videos', 'interactives', 'designs', '360_media', 'fashions' , 'commercials' , 'short-films' ), 
            'paged' => get_query_var( 'paged' ) 
          ) );
        ?>
        
        <?php while ( have_posts() ) : the_post(); ?>
          
          <?php get_template_part( 'content', 'home' ); ?>

        <?php endwhile; // end of the loop. ?>
      </div>
  
    </div><!-- #main -->
  </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>