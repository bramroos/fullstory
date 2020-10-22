<div class="full-width">
    <div class="grid-x align-middle">
        <div class="cell medium-4">
            <h1 class="h2"><?php the_field('hero_title'); ?></h1>
            <a class="button">Meer over ons</a>
        </div>
        <div class="cell medium-8">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php
                        $args = array(
                            'post_type'      => 'cases',
                            'order' => 'ASC',
                        );
                        $loop = new WP_Query($args);

                        while ($loop->have_posts()) : $loop->the_post();

                        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

                        ?>

                        <div class="cell swiper-slide slide-grid" data-class="serve">
                            <a href="<?php the_permalink() ?>">
                                <div class="overlay"></div>
                                <figure>
                                    <?php the_post_thumbnail('medium-img'); ?>
                                </figure>
                                
                                <div class="details-container" style="width:50%">
                                    <span><small><?php the_field('case_client'); ?></small></span>
                                    <?php the_title( '<h3 class="h2">', '</h3>' ); ?>
                                </div>
                            </a>
                        </div>

                        <?php endwhile; ?>

                    <?php wp_reset_query(); ?>
                </div>
                <div class="swiper-pagination"></div>

            </div>
        </div>
    </div>
</div>	