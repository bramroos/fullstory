<?php
/*
Template Name: General
*/

get_header(); ?>
			
	<div class="content">
		
		<main class="main" role="main">
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php if( get_field('pages_hero_title') ): ?>
					<div class="grid-container">
						<div class="grid-x">
							<div class="cell medium-8 mt-m mb-m">
								<?php the_field('pages_hero_title'); ?>
							</div>
						</div>
					</div>
				<?php endif; ?>
				
				<!-- start #content -->
				<?php get_template_part('parts/layouts/layout', 'content'); ?>
				<!-- end #content -->

				<!-- start #content -->
				<?php get_template_part('parts/layouts/layout', 'cta'); ?>
				<!-- end #content -->
	

			<?php endwhile; endif; ?>							

		</main> <!-- end #main -->
		    	
	</div> <!-- end #content -->

<?php get_footer(); ?>
