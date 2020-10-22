<?php
/**
 * The template part for displaying offcanvas content
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="off-canvas position-right" id="off-canvas" data-off-canvas data-transition="overlap" data-content-scroll="false">
	<div class="grid-container">
		<div class="grid-x align-middle full-canvas text-center">
			<div class="cell">
				<?php joints_off_canvas_nav(); ?>
				<?php if( get_field('facebook', 'option') ): ?>
					<a href="<?php the_field('facebook', 'option'); ?>" target="_blank" class="button hollow mt-s btn-facebook">
						<?php _e( 'Volg ons op facebook', 'surf-fest' ); ?> <i class="fab fa-facebook-f"></i>
					</a>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<?php if ( is_active_sidebar( 'offcanvas' ) ) : ?>

		<?php dynamic_sidebar( 'offcanvas' ); ?>

	<?php endif; ?>

</div>
