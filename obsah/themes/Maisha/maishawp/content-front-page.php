<?php
/**
 * The template used for displaying front page content
 *
 * @package Maisha
 * @since Maisha 1.0
 */
?>
	<div class="homepage">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php $image_id = get_post_thumbnail_id(); ?>
			<?php $image_url = wp_get_attachment_image_src($image_id,'full');   ?>
			<div class="cd-fixed-bg cd-bg-1" style="background-image:url(<?php echo esc_url( $image_url[0] ); ?>);"></div>
			<?php if($post->post_content=="") : ?>
			<?php else : ?>
			<?php the_content(); ?>

			<div class="content-caption">
				<div class="entry-content">
					<div class="cd-main-content">
			
					


					</div>
					<!-- cd panel cut ->
				</div><!-- .entry-content -->
			</div><!-- .content-caption -->

			<?php endif; ?>
		</article><!-- #post-## -->
	</div><!-- .homepage -->