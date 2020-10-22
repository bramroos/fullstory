<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>


<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left float-left">
		<a href="<?php echo home_url(); ?>">
		<svg class="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 84 84"><circle cx="42" cy="42" r="42" fill="#1e3163"/><path class="b" d="M27.52 54.18V40.73H24.6a.79.79 0 01-.88-.88v-4.07a.79.79 0 01.88-.88h2.93v-1.88c0-6 3.47-9.64 9.73-9.64a10.06 10.06 0 014.77 1.12.83.83 0 01.35 1.18l-1.78 3.7a.91.91 0 01-1.18.44 4.69 4.69 0 00-1.32-.18 3.53 3.53 0 00-3.65 3.86v1.4h4.95a.78.78 0 01.87.88v4.07a.78.78 0 01-.87.88h-4.95v13.45a.78.78 0 01-.88.87H28.4a.78.78 0 01-.88-.87zM42.6 53.3a.84.84 0 01-.3-1.23l1.93-3.5a.74.74 0 011.18-.31 12.46 12.46 0 006.13 1.75c1.1 0 1.62-.3 1.62-1s-1-1-3.11-1.49c-3-.66-7.27-2.1-7.27-6.39 0-4.08 3.5-6.66 8.85-6.66a17.69 17.69 0 018.15 1.92.78.78 0 01.3 1.19l-1.84 3.5a.8.8 0 01-1.22.31 12.23 12.23 0 00-5.42-1.45c-1.13 0-1.66.31-1.66 1s1 .92 3.64 1.49c2.45.53 6.74 1.58 6.74 6.22 0 4-3.11 6.84-9.59 6.84a15.93 15.93 0 01-8.13-2.19z"/></svg>
		<!-- <img class="logo" src=" -->
		<?php 
		// echo get_template_directory_uri(); 
		?>
		<!-- /assets/images/fs.svg" alt="Full Story" title="Full Story" /> -->
		</a>
	</div>
	<div class="top-bar-right show-for-medium">
		<?php joints_top_nav(); ?>	
	</div>
</div>