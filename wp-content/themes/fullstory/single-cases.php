<?php 
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>
			
<div class="content">

	<main class="main" role="main">
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<section data-aos="fade-up">
				<div class="grid-container">
					<div class="grid-x pt-m pb-m">
						<div class="cell large-8">
							<div class="grid-x">
								<div class="cell hide-for-small-only">
									<p><strong><?php the_field('case_client'); ?></strong></p>
								</div>
								<div class="cell medium-8">
									<h1><?php the_title(); ?></h1>
								</div>
								<div class="cell medium-4 hide-for-small-only">
									<small>
										<?php the_field('case_details'); ?>
									</small>
								</div>
							</div>
						</div>

						
						<?php 
						$image = get_field('case_feature__item');
						$size = 'full';
						if( $image ) : { ?>
							
							<div class="cell large-4 show-for-large">
								<figure class="feature-item">
									<?php echo wp_get_attachment_image( $image, $size ); ?>
								</figure>
							</div>
						
						<?php } else: { ?>

							<div class="cell large-4 text-center align-self-middle show-for-large">
								<div class="circle-cta">
									<span class="circle">Jouw verhaal?</br>Vertel 't met een website van <strong>full story!</strong></span>
								</div>
							</div>

						<?php } endif;?>

					</div>
				</div>
				<div class="grid-container fluid case-hero mb-l">
					<div class="grid-x">
						<?php
						$video = get_field('case_video');
						if( $video ): { ?>
					
							<div class="vid-outer show-for-large">
								<video autoplay loop muted playsinline preload="auto" id="video" class="vid-inner">
									<source src="<?php echo $video; ?>" poster="<?php the_post_thumbnail('full'); ?>" type="video/mp4">
								</video>
							</div>
							<div class="hide-for-large">
								<figure>
									<?php the_post_thumbnail('large-img'); ?>
								</figure>
							</div>
					
							<script>
								var banner = document.querySelector('.vid-outer');
								var bannerVideo = document.querySelector('.vid-inner');

								if (/iPad|iPhone|iPod/.test(navigator.platform)) {
									banner.style.backgroundImage = 'url("' + bannerVideo.poster + '")';
									banner.style.backgroundSize = 'cover';
									banner.style.backgroundPosition = 'center';
									bannerVideo.style.display = 'none';
								}
							</script>

						<?php } else: { ?>

							<figure class="aspect-ratio-box wide">
								<?php the_post_thumbnail('large-img'); ?>
							</figure>
							
						<?php } endif;?>
					</div>
				</div>

			</section>



			<!-- start #content -->
			<?php get_template_part('parts/layouts/layout', 'content'); ?>
			<!-- end #content -->

			<div class="grid-container">
				<div class="grid-x">
					<div class="cell show-for-small-only text-center">
						<small><strong>Voor <?php the_field('case_client'); ?></strong></br>
							<?php the_field('case_details'); ?>
						</small>
					</div>
				</div>
			</div>
			
			<section class="next-prev-cases pt-s pb-s">
				<div class="grid-container">
					<div class="grid-x">
						<div class="cell small-6 text-left">
							<?php
							$prev_post = get_previous_post();
							if ( is_a( $prev_post , 'WP_Post' ) ) : ?>
								<a href="<?php echo get_permalink( $prev_post->ID ); ?>">
									<div class="container">
										<?php echo get_the_post_thumbnail( $prev_post->ID, 'thumbnail' ); ?>

										<div class="details">
											<small>Vorige case</small> <br/>
											<h4><?php echo get_the_title( $prev_post->ID ); ?></h4>
										</div>
									</div>
								</a>	
							<?php endif; ?>
						</div>
						<div class="cell small-6 text-right">
							<?php
							$next_post = get_next_post();
							if ( is_a( $next_post , 'WP_Post' ) ) : ?>
								<a href="<?php echo get_permalink( $next_post->ID ); ?>">
									<div class="container">
										<div class="details">
											<small>Volgende case</small> <br/>
											<h4><?php echo get_the_title( $next_post->ID ); ?></h4>
										</div>
										<?php echo get_the_post_thumbnail( $next_post->ID, 'thumbnail' ); ?>
									</div>
								</a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</section>


			<!-- start #content -->
			<?php get_template_part('parts/layouts/layout', 'cta'); ?>
			<!-- end #content -->

			

		<?php endwhile; else : ?>
	
			<?php get_template_part( 'parts/content', 'missing' ); ?>

		<?php endif; ?>

	</main> <!-- end #main -->

</div> <!-- end #content -->

<?php get_footer(); ?>