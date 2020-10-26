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
							<span><small>
								<?php the_field('case_client'); ?>
							</small></span>
							<?php the_title( '<h3>', '</h3>' ); ?>
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