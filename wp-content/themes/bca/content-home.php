<?php
/**
 * @package bullettshop
 */
?>

<?php 
  $classes = array(
    'element'
  );
  $tn_id = get_post_thumbnail_id( $post->ID );
  $img = wp_get_attachment_image_src( $tn_id, 'full' );
  $image = $img[0];
  $width = $img[1];
  $height = $img[2]+10;
?>
<?php if ( 'videos' == get_post_type() ||  'fashions' == get_post_type() ||  'commercials' == get_post_type() ||  'short-films' == get_post_type() ) : ?>

  <a style='<?php echo 'width:' . $width . 'px;' . 'height:'.  $height . 'px;'; ?> background:url("<?php echo $image ?> ") no-repeat;' id="post-<?php the_ID(); ?>" href="<?php the_permalink(); ?>" <?php post_class( $classes ); ?> rel="bookmark">  
    <h1 class="entry-title"><?php the_title(); ?></h1>
  </a>

<?php else : ?>

  <a style='<?php echo 'width:' . $width . 'px;' . 'height:'.  $height . 'px;'; ?> background:url("<?php echo $image ?> ") no-repeat;' id="post-<?php the_ID(); ?>" href="<?php the_permalink(); ?>" <?php post_class( $classes ); ?> rel="bookmark">  
    <h1 class="entry-title"><?php the_title(); ?></h1>
  </a>  

<?php endif; ?>