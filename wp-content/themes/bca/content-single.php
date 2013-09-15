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
				<?php if (get_field('vimeo_video_number')): ?>
					<div class="column large-12 small-12">
						 <iframe src="//player.vimeo.com/video/<?php the_field('vimeo_video_number') ?>" width="950" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
						 </iframe> 
					</div>
				<?php endif; ?>

				<!-- If slider -->
				<?php if (get_field('project_image_head')): ?>
					<div class="column large-12 small-12">
						<?php the_field('project_image_head'); ?>
					</div>
				<?php endif; ?>
				<!-- End if -->
			</div>

			<div class="row content-intro">
				<div class="large-6 column">
					<h2>
						<?php the_title(); ?>
					</h2>
					<h3 class="subheader">
						<?php if(get_field('project_purpose')):
							the_field('project_purpose');
						endif; ?>
					</h3>	
				</div>

				<div class="large-6 column">
					<p>
						<?php if(get_field('project_description')):
							the_field('project_description');
						endif; ?>
					</p>
				</div>

			</div>
			</header><!-- .entry-header -->
			<div class="entry-content"> 
			

			<?php if(get_field('secondary_image_slider')): ?>
	    	<div class="row content-secondary-slider">
					<div class="large-12 column">
						<?php the_field('secondary_image_slider'); ?>
					</div>
				</div>
			<?php endif; ?>
			
			<?php if(get_field('secondary_video_conditional')): ?>
		    <?php while(the_repeater_field('secondary_video_repeat')): ?>
		    <div class="row content-secondary-video">
					 <div class="column">
						 <?php echo '<iframe src="//player.vimeo.com/video/' . get_sub_field('secondary_video_repeat') . '" width="950" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';?> 
					 </div>
		    </div>
		    <?php endwhile; ?>
			<?php endif; ?>

			<?php if(get_field('secondary_image_conditional')): ?>
		    <?php while(the_repeater_field('secondary_image_repeat')): ?>
					<div class="row content-secondary-image">
						<div class="column">
							<?php echo '<img src="' . get_sub_field('secondary_image_repeat') .'" alt="'. get_sub_field('secondary_image_repeat') . '">';?>
						</div>
			    </div>
		    <?php endwhile; ?>
			 <?php endif; ?>
			<?php if(get_field('project_secondary_photo_slider')): ?>
			<div class="row content-secondary-slider">
				<div class="large-12 column">
					<?php the_field('project_secondary_photo_slider'); ?>
				</div>
			</div>
			<?php endif; ?>
			<hr>
			
			<?php show_related_products(); ?>

			</div><!-- .entry-content -->

		<?php // edit_post_link( __( 'Edit', 'bullettshop' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
