<?php
/**
 * @package bullettshop
 */
?>

<?php 
	$classes = array(
    'element'
	);
?>
<?php if ( 'videos' == get_post_type() ||  'fashions' == get_post_type() ||  'commercials' == get_post_type() ||  'short-films' == get_post_type() ) : ?>

  <div <?php echo 'width="' . get_option( 'medium_size_w' ) . '" '. 'height="' .  get_option( 'medium_size_h' ) . '" '; ?> id="post-<?php the_ID(); ?>" <?php post_class( $classes ); ?>>
    <a href="<?php the_permalink(); ?>" rel="bookmark">  
      <?php echo get_the_post_thumbnail( get_the_ID(), 'medium' ); ?>
    </a>
    <h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
  </div>

<?php else : ?>

  <div     <?php echo 'width="' . get_option( 'thumbnail_size_w' ) . '" '.'height="' .  get_option( 'thumbnail_size_h' ) . '" '; ?> id="post-<?php the_ID(); ?>" <?php post_class( $classes ); ?>>
    <a href="<?php the_permalink(); ?>" rel="bookmark">
      <?php echo get_the_post_thumbnail( get_the_ID(), 'thumbnail' ); ?> 
    </a>  
  	<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
  </div><!-- #post-## -->

<?php endif; ?>