<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
					
				<footer class="footer" role="contentinfo">
					
					<div class="inner-footer grid-x grid-margin-x grid-padding-x align-middle">
						
						<div class="small-12 medium-12 large-4 cell">
							<h3>wat is jouw verhaal?</h3>
	    				</div>

						<div class="small-12 medium-12 large-4 cell">
							<div class="profile">
								<figure class="hide-for-small-only">
									<span class="online"></span>
									<?php 
										$image = get_field('profile_img', 'option');
										$size = 'thumbnail';
										if( $image ) {
											echo wp_get_attachment_image( $image, $size );
										} 
									?>
								</figure>
								<div class="profile-details">
									<small>
										<?php the_field('mobile', 'option'); ?><br/>
										<a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
									</small>
								</div>
							</div>
						</div>

						<div class="small-12 medium-12 large-3 cell">
							<small><?php the_field('address', 'option'); ?></small>
	    				</div>
						
						<div class="small-12 medium-12 large-12 cell">
							<nav role="navigation">
	    						<?php joints_footer_links(); ?>
	    					</nav>
	    				</div>

						<div class="small-12 medium-12 large-12 cell">
							<p class="source-org copyright"><small>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</small></p>
						</div>
					
					</div> <!-- end #inner-footer -->
				
				</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>

		


		<script>
			AOS.init();
		</script>

        <script>
            // var mySwiper = new Swiper ('.swiper-container', {
			// 	slidesPerView: 'auto',
            //     loop: true,
            //     speed:1000,
			// 	spaceBetween: 30,
			// 	pagination: {
			// 		el: '.swiper-pagination',
			// 		clickable: true,
			// 	},
            //     autoplay: {
            //         delay: 4000,
            //         disableOnInteraction: false,
            //     },			
            // });
			var mySwiper = new Swiper ('.swiper-container', {
				slidesPerView: 3,
                loop: true,
                speed:1000,
				spaceBetween: 60,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },	
				navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev',
				},
				breakpoints: {
				320: {
				slidesPerView: 2,
				spaceBetween: 20
				},
				640: {
				slidesPerView: 3,
				spaceBetween: 30
				}
			}		
            });
		</script>

	</body>
	
</html> <!-- end page -->