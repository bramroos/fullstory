<?php
/*
Template Name: Cases Overzicht
*/

get_header(); ?>
			
	<div class="content">
		
		<main class="main small-12 medium-12 large-12 cell" role="main">
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div class="grid-container">
					<div class="grid-x">
						<div class="cell medium-6">

							<h1><?php the_field('hero_title'); ?></h1>

							<a class="button large">Meer over ons</a>
						</div>
					</div>
				</div>	

				<!-- #start Stappen -->
				<div class="grid-container">
					<div class="grid-x grid-margin-x small-up-1 medium-up-2 pb-s">
						<?php
							$args = array(
								'post_type'      => 'cases',
								'order' => 'ASC',
							);
							$loop = new WP_Query($args);

							while ($loop->have_posts()) : $loop->the_post();

							$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

							?>

							<div class="cell">
								<a href="<?php the_permalink() ?>">
									<figure>
										<?php the_post_thumbnail(); ?>
									</figure>
									<?php the_title( '<h3>', '</h3>' ); ?>
								</a>
							</div>

							<?php endwhile; ?>

						<?php wp_reset_query(); ?>
					</div>
					<?php if( get_field('call_to_action_button', 'option') ): ?>
						<div class="grid-x">
							<div class="cell text-center">
                       			<a href="<?php the_field('call_to_action_button', 'option'); ?>" class="button">Starten met verduurzamen</a>
							</div>
						</div>
					<?php endif; ?>						
				</div>
				<!-- #end Stappen -->







			<?php endwhile; endif; ?>							

		</main> <!-- end #main -->
		    	
	</div> <!-- end #content -->

<?php get_footer(); ?>
