<?php
/*
Template Name: Test
*/

get_header(); ?>
			
	<div class="content">
	
	
		    <main class="main" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			
				





					
				<?php endwhile; endif; ?>							

			</main> <!-- end #main -->
		    
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
