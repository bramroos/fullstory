<?php
/**
 * The template part for displaying offcanvas content
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="off-canvas position-right" id="off-canvas" data-off-canvas data-transition="overlap" data-content-scroll="false">
	<div class="grid-container">
		<div class="grid-x align-middle full-canvas">
			<div class="cell">
				<?php joints_off_canvas_nav(); ?>
				<div class="mt-m">
					<a href="https://www.facebook.com/fullstorycreative" target="_blank" class="social mt-s btn-facebook">
						<svg viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg"><path d="M46.394 0H3.606A3.606 3.606 0 000 3.606v42.788A3.606 3.606 0 003.606 50h23.103V30.664h-6.494v-7.568h6.494v-5.57c0-6.46 3.943-9.975 9.705-9.975 2.76 0 5.131.206 5.822.298v6.75h-3.973c-3.135 0-3.742 1.49-3.742 3.676v4.82h7.496l-.977 7.57h-6.519V50h11.873A3.606 3.606 0 0050 46.394V3.606A3.606 3.606 0 0046.394 0z" fill="#FAD9E7" fill-rule="nonzero"></path></svg>
					</a>
					<a href="https://www.linkedin.com/company/full-story-creative/" target="_blank" class="social mt-s btn-facebook">
						<svg viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg"><path d="M46.394 0A3.606 3.606 0 0150 3.606v42.788A3.606 3.606 0 0146.394 50H3.606A3.606 3.606 0 010 46.394V3.606A3.606 3.606 0 013.606 0zM15.936 19.449H8.13V42h7.806V19.449zm17.65-.043c-3.469 0-5.68 1.344-6.634 3.079h-.174v-3.036h-6.071V42h6.505V30.898c0-2.992.607-5.855 4.293-5.855 3.6 0 3.947 3.383 3.947 6.028V42H42V29.36c-.04-5.96-1.368-9.954-8.413-9.954zM11.99 8A3.98 3.98 0 008 11.99a3.98 3.98 0 003.99 3.99c2.168 0 3.946-1.778 3.99-3.99A3.98 3.98 0 0011.99 8z" fill="#FAD9E7" fill-rule="nonzero"></path></svg>
					</a>
				</div>
			</div>
		</div>
	</div>

	<?php if ( is_active_sidebar( 'offcanvas' ) ) : ?>

		<?php dynamic_sidebar( 'offcanvas' ); ?>

	<?php endif; ?>

</div>
