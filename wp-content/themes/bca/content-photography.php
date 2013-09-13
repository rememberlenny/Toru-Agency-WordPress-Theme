<?php
/**
 * @package bullettshop
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

			
			<!-- If none -->
			<div class="row" style="margin-top: 1em;">
			<!-- If video -->
				<div class="column large-12 small-12">
				
					 <iframe src="//player.vimeo.com/video/<?php the_field('vimeo_video_number') ?>" width="950" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
					 	
					 </iframe> 

				</div>

			<!-- If slider -->

				<div class="column large-12 small-12">

					<?php the_field('project_image_head'); ?>

				</div>

			<!-- End if -->
			</div>

			<div class="row content-intro">
				
				<div class="large-6 column">
					<h2>
						<?php the_title(); ?>
					</h2>
					<h3 class="subheader">
						<?php the_field('project_purpose'); ?>
					</h3>	
				</div>

				<div class="large-6 column">
					<p>
						<?php the_field('project_description'); ?>
					</p>
				</div>

			</div>
			</header><!-- .entry-header -->
			<div class="entry-content">

			<div class="row content-secondary-slider">
				<div class="large-12 column">
					<?php the_field('project_secondary_photo_slider'); ?>
				</div>
			</div>
		
			<hr>
		
				<?php show_related_products(); ?>

	</div><!-- .entry-content -->

		<?php // edit_post_link( __( 'Edit', 'bullettshop' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
