<?php
/*
Template Name: Home
*/

get_header(); ?>
			
	<div class="content">
		
		<main class="main" role="main">
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<!-- start #content -->
				<?php get_template_part('parts/layouts/layout', 'hero-fancy'); ?>
				<!-- end #content -->
				<div class="mb-s"></div>
				
				<?php
                $args = array(
                    'posts_per_page' => -1,
                    'post_type'      => 'cases',
                );
                $loop = new WP_Query($args);

                $i = 1;
                
                echo '<div class="grid-container fluid mb-l">';
                echo '<div class="grid-x grid-margin-x grid-margin-y">';

                while ($loop->have_posts()) : $loop->the_post();

                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

                ?>
                
                <!-- Full -->
                <?php if($i % 3 == 1) { ?> 
                    <div class="cell small-12 img-grid" data-aos="fade-up">
						<a href="<?php the_permalink() ?>">
							
							<?php
							$video = get_field('case_video');

							if( $video ): { ?>
								<div class="video-wrap aspect-ratio-box wide">
									<video autoplay loop muted playsinline preload="auto" id="video">
										<div class="overlay"></div>
										<source src="<?php echo $video; ?>" poster="<?php the_post_thumbnail('large-img'); ?>" type="video/mp4">
									</video>
								</div>

							<?php } else: { ?>
								<figure class="aspect-ratio-box wide">
									<div class="overlay"></div>
									<?php the_post_thumbnail('large-img'); ?>
								</figure>

							<?php } endif;?>
                            
							<div class="details-container">
								<span><small><?php the_field('case_client'); ?></small></span>
								<?php the_title( '<h3  class="h2">', '</h3>' ); ?>
							</div>
                        </a>
                    </div>

                <!-- Two Thirds -->
                <?php } elseif($i % 3 == 2) { ?> 
                    <div class="cell small-12 medium-8 img-grid" data-aos="fade-up">
                    	<a href="<?php the_permalink() ?>">
							<?php
							$video = get_field('case_video');

							if( $video ): { ?>
								<div class="video-wrap aspect-ratio-box medium">
									<video autoplay loop muted playsinline preload="auto" id="video">
										<div class="overlay"></div>
										<source src="<?php echo $video; ?>" poster="<?php the_post_thumbnail('medium-img'); ?>" type="video/mp4">
									</video>
								</div>

							<?php } else: { ?>
								<figure class="aspect-ratio-box medium">
									<div class="overlay"></div>
									<?php the_post_thumbnail('medium-img'); ?>
								</figure>

							<?php } endif;?>

                            <div class="details-container">
								<span><small><?php the_field('case_client'); ?></small></span>
								<?php the_title( '<h3  class="h2">', '</h3>' ); ?>
							</div>
                        </a>
                    </div>

                <!-- One Third -->
                <?php } elseif($i % 3 == 0) { ?>
                    <div class="cell small-12 medium-4 img-grid" data-aos="fade-up">
                    	<a href="<?php the_permalink() ?>">
							<div class="aspect-ratio-box square">
								<figure class="">
									<div class="overlay"></div>
									<?php the_post_thumbnail('large-grid-img'); ?>
								</figure>
								<div class="details-container">
									<span><small><?php the_field('case_client'); ?></small></span>
									<?php the_title( '<h3  class="h2">', '</h3>' ); ?>
								</div>
							</div>
                        </a>
                    </div>
                        
                <?php } $i++;  endwhile;
                    echo '</div>';
                    echo '</div>';
                    ?>

				<?php wp_reset_query(); ?>
				
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
