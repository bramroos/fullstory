<?php
/*
Template Name: Full Width (No Sidebar)
*/

get_header(); ?>
			
	<div class="content">
	
		<div class="inner-content grid-x grid-margin-x grid-padding-x">
	
		    <main class="main small-12 medium-12 large-12 cell" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="content content--demo-3">
				<div class="hamburger hamburger--demo-3 js-hover">
					<div class="hamburger__line hamburger__line--01">
						<div class="hamburger__line-in hamburger__line-in--01"></div>
					</div>
					<div class="hamburger__line hamburger__line--02">
						<div class="hamburger__line-in hamburger__line-in--02"></div>
					</div>
					<div class="hamburger__line hamburger__line--03">
						<div class="hamburger__line-in hamburger__line-in--03"></div>
					</div>
					<div class="hamburger__line hamburger__line--cross01">
						<div class="hamburger__line-in hamburger__line-in--cross01"></div>
					</div>
					<div class="hamburger__line hamburger__line--cross02">
						<div class="hamburger__line-in hamburger__line-in--cross02"></div>
					</div>
				</div>

				<div class="demo-title demo-title--demo-3">Artificial Intelligence</div>
				<div class="global-menu">
					<div class="global-menu__wrap">
						<a class="global-menu__item global-menu__item--demo-3" href="#">Home</a>
						<a class="global-menu__item global-menu__item--demo-3" href="#">Introduction</a>
						<a class="global-menu__item global-menu__item--demo-3" href="#">Learning</a>
						<a class="global-menu__item global-menu__item--demo-3" href="#">Resources</a>
					</div>
				</div>
				<svg class="shape-overlays" viewBox="0 0 100 100" preserveAspectRatio="none">
					<path class="shape-overlays__path"></path>
					<path class="shape-overlays__path"></path>
					<path class="shape-overlays__path"></path>
				</svg>
			</div>







					
					<?php get_template_part( 'parts/loop', 'page' ); ?>




					
				<?php endwhile; endif; ?>							

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
