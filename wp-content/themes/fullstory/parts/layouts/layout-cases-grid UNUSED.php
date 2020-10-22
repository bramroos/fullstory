
			<!-- start #cases -->
			<div class="grid-container fluid mt-m">
				<div class="grid-x grid-margin-x grid-margin-y small-up-1 medium-up-2 large-up-3 pb-s">
					<?php
						$args = array(
							'post_type' => 'cases',
							'posts_per_page' => 3,
							'post__not_in'           => array(get_the_ID())

						);
						$loop = new WP_Query($args);

						while ($loop->have_posts()) : $loop->the_post();

						$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

						?>

						<div class="cell img-grid">
							<a href="<?php the_permalink() ?>">

							<?php
								$video = get_field('case_video');

								if( $video ): { ?>
									<div class="overlay"></div>
									<video autoplay loop muted playsinline preload="auto" id="video" class="vid-inner">
										<source src="<?php echo $video; ?>" poster="<?php the_post_thumbnail('full'); ?>" type="video/mp4">
									</video>

								<?php } else: { ?>
									<figure>
										<div class="overlay"></div>
										<?php the_post_thumbnail('large-grid-img'); ?>
									</figure>

								<?php } endif;?>
								
								<div class="details-container">
									<span><small><?php the_field('case_client'); ?></small></span>
									<?php the_title( '<h3  class="h2">', '</h3>' ); ?>
								</div>
							</a>
						</div>

						<?php endwhile; ?>

					<?php wp_reset_query(); ?>
				</div>					
			</div>
			<!-- end #cases -->