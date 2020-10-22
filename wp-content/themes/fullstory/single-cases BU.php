<?php 
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>
			
<div class="content">

	<main class="main" role="main">
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<section class="">
			<div class="grid-container">
				<div class="grid-x pt-m pb-m">
					<div class="cell large-8">
						<div class="grid-x">
							<div class="cell">
								<p><strong><?php the_field('case_client'); ?></strong></p>
							</div>
							<div class="cell medium-8">
								<h1><?php the_title(); ?></h1>
							</div>
							<div class="cell medium-4">
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

			<?php
            $video = get_field('case_video');

            if( $video ): { ?>
				<div class="grid-container fluid mb-l">
					<div class="grid-x">
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
					</div>
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

                <div class="grid-container fluid mb-l case-hero">
					<div class="grid-x">
						<figure>
							<?php the_post_thumbnail('large-img'); ?>
						</figure>
					</div>
				</div>

            <?php } endif;?>
		</section>



			<!-- <div id="growContainer">
				<div class="grow" style="background-color:#2A75A9;"><p><small>Light Blue </br>#123456</small></p></div>
				<div class="grow" style="background-color:#274257;"><p><small>Light Blue </br>#123456</small></p></div>
				<div class="grow" style="background-color:#644436;"><p><small>Light Blue </br>#123456</small></p></div>
			</div> -->

			<!-- <div class="grid-container">
				<div class="grid-x">
					<div class="small-6">
						Text
					</div>
					<div class="small-6">
						<div class="grid-x grid-margin-x grid-margin-y small-up-2 medium-up-2 large-up-3 align-center text-center">
							<div class="cell">
								<div class="c-container">
									<div class="circle">
										<p class="text">Light Blue </br> #123456</p>
									</div>
								</div>
							</div>
							<div class="cell">
								<div class="c-container">
									<div class="circle">
									<p class="text">Light Blue </br> #123456</p>
									</div>
								</div>
							</div>
							
							<div class="cell">
								<div class="c-container">
									<div class="circle">
									<p class="text">Light Blue </br> #123456</p>
									</div>
								</div>
							</div>

							<div class="cell">
								<div class="c-container">
									<div class="circle">
									<p class="text">Light Blue </br> #123456</p>
									</div>
								</div>
							</div>

							<div class="cell">
								<div class="c-container">
									<div class="circle">
									<p class="text">Light Blue </br> #123456</p>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div> -->

			<!-- start #content -->
			<?php get_template_part('parts/layouts/layout', 'content'); ?>
			<!-- end #content -->
			
			<div class="grid-container">
				<div class="grid-x mb-m">
					<div class="cell medium-6">
						<?php
						$prev_post = get_previous_post();
						if ( is_a( $prev_post , 'WP_Post' ) ) : ?>
							<p>Vorige case</p>
							<a class="h3" href="<?php echo get_permalink( $prev_post->ID ); ?>"><?php echo get_the_title( $prev_post->ID ); ?></a>
						<?php endif; ?>
					</div>
					<div class="cell medium-6 text-right">
						<?php
						$next_post = get_next_post();
						if ( is_a( $next_post , 'WP_Post' ) ) : ?>
							<p>Volgende case</p>
							<a class="h3" href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo get_the_title( $next_post->ID ); ?></a>
						<?php endif; ?>
					</div>
				</div>
			</div>

			<!-- start #content -->
			<?php get_template_part('parts/layouts/layout', 'cta'); ?>
			<!-- end #content -->

			<div class="grid-container fluid mt-m">
				<div class="grid-x">
					<div class="cell cta-grid-header">
						<h2>Meer cases</h2>
					</div>
				</div>
			</div>






			<!-- start #cases-slider -->
			<div class="grid-container fluid mt-m">
				<div class="swiper-container pb-s">
					<div class="swiper-wrapper">

						<?php
							$args = array(
								'post_type' => 'cases',
								'posts_per_page' => -1,
								'post__not_in'           => array(get_the_ID())

							);
							$loop = new WP_Query($args);

							while ($loop->have_posts()) : $loop->the_post();

							$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

							?>

							<div class="swiper-slide img-grid">
								<a href="<?php the_permalink() ?>">
									
									<figure>
										<div class="overlay"></div>
										<?php the_post_thumbnail('large-grid-img'); ?>
									</figure>

									<div class="details-container">
										<span><small><?php the_field('case_client'); ?></small></span>
										<?php the_title( '<h3  class="h2">', '</h3>' ); ?>
									</div>
								</a>
							</div>

							<?php endwhile; ?>

						<?php wp_reset_query(); ?>
					</div>
					<div class="swiper-button-next"></div>
    				<div class="swiper-button-prev"></div>
				</div>	
			</div>
			<!-- end #cases-slider -->


		<?php endwhile; else : ?>
	
			<?php get_template_part( 'parts/content', 'missing' ); ?>

		<?php endif; ?>

	</main> <!-- end #main -->

</div> <!-- end #content -->

<?php get_footer(); ?>