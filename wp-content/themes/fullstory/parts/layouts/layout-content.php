<?php if( have_rows('content_section') ): ?>
    <?php while( have_rows('content_section') ): the_row(); ?>
        <?php if( get_row_layout() == 'text_column' ): ?>

            <div class="grid-container" data-aos="fade-up">
                <div class="grid-x align-center pb-l">
                    <div class="cell medium-8">
                        <?php the_sub_field('text_column'); ?>
                    </div>
                </div>
            </div>
        


        <?php elseif( get_row_layout() == 'text_columns' ): ?>

            <?php 
            $count = count( get_sub_field( 'text_columns_item' ));

            if( have_rows('text_columns_item') ): 

                ?>
                <div class="grid-container mb-l">
                    <div class="grid-x grid-margin-x align-center">
                        <?php while( have_rows('text_columns_item') ): the_row(); 

                            if ( $count == 3 ) { ?>

                                <div class="cell large-auto">

                            <?php } if ( $count == 2 ){ ?>

                                <div class="cell medium-5">

                            <?php } if ( $count == 1 ) { ?>

                                <div class="cell medium-8">

                            <?php } ?>

                                <?php the_sub_field('text_column'); ?>

                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php endif; ?>



            <?php elseif( get_row_layout() == 'image_single' ): ?>

                <!-- Single Image / Full / Fluid  -->
                <?php 
                    $image_size = get_sub_field('image_size');

                    echo '<div class="grid-container ';
                    echo esc_attr($image_size['value']); 
                    echo '" data-aos="fade-up">';
                ?>
                    <div class="grid-x align-center text-center mb-l">
                        <div class="cell">
                            <?php 
                                $image_id = get_sub_field('image_single');
                                if( $image_id ) {
                                    $size = 'full';   
                                    $caption = wp_get_attachment_caption( $image_id );  

                                    $attr['title'] = $title;
                                    // $attr['caption'] = $caption;

                                    $img_html = wp_get_attachment_image( $image_id, $size, false, $attr);
                            
                                    echo '<figure>';
                                    echo $img_html;
                                    echo '</figure>';
                                    echo '<div class="caption">';
                                    echo $caption;
                                    echo '</div>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
































                <?php elseif( get_row_layout() == 'content_media' ): ?>

                    <div class="grid-container" data-aos="fade-up">
                        <div class="grid-x grid-margin-x align-center align-middle mb-l <?php if( get_sub_field('content_media__row_rev') ) { echo 'large-flex-dir-row-reverse'; } ?>">
                            <div class="cell medium-5">
                                <?php the_sub_field('content_media__content'); ?>
                            </div>
                            <div class="cell medium-7 text-center">

                                <?php if( get_sub_field('content_media__media_type') == 'image' )  { ?>

                                    <?php 
                                        $content_media__img = get_sub_field('content_media__img');
                                        $size = 'large';
                                        if( $content_media__img ) {
                                            echo '<figure>';
                                            echo wp_get_attachment_image( $content_media__img, $size );
                                            echo '</figure>';
                                        } 
                                    ?>

                                <?php } else if( get_sub_field('content_media__media_type') == 'video' ) { ?>

                                    <video class="inline" autoplay muted loop>
                                        <source src="<?php the_sub_field('content_media__vid'); ?>" type="video/mp4" >
                                        Your browser does not support the video tag.
                                    </video>

                                <?php } else if( get_sub_field('content_media__media_type') == 'slider' ) { ?>


                                <?php } ?>


                                
                            </div>
                        </div>
                    </div>



                <?php elseif( get_row_layout() == 'image_text_duo' ): ?>
                    <div class="grid-container" data-aos="fade-up">
                        <div class="grid-x grid-margin-x align-center align-middle mb-l <?php if( get_sub_field('row_reverse') ) { echo 'large-flex-dir-row-reverse'; } ?>">
                            <div class="cell medium-5">
                                <?php the_sub_field('text_duo'); ?>
                            </div>
                            <div class="cell medium-7 text-center">
                                <?php 
                                    $image = get_sub_field('image_duo');
                                    $size = 'large';
                                    if( $image ) {
                                        echo '<figure>';
                                        echo wp_get_attachment_image( $image, $size );
                                        echo '</figure>';
                                    } 
                                ?>
                            </div>
                        </div>
                    </div>

        
                <?php elseif( get_row_layout() == 'sticky_image' ): ?>
                    <div class="grid-container">
                        <div class="grid-x grid-margin-x">

                            <div class="cell medium-6" data-sticky-container>
                                <div class="sticky" data-sticky data-anchor="foo">
                                    <?php 
                                        $image = get_sub_field('image_sticky');
                                        $size = 'large';
                                        if( $image ) {
                                            echo '<figure data-aos="fade-up">';
                                            echo wp_get_attachment_image( $image, $size );
                                            echo '</figure>';
                                        } 
                                    ?>
                                </div>
                            </div>
                        
                            <div class="cell medium-6" id="foo" data-aos="fade-up">
                                <div class="grid-x">

                                    <?php if( have_rows('content_block_sticky') ): ?>
                                        <?php while( have_rows('content_block_sticky') ): the_row(); ?>
                                            <div class="cell mb-l">
                                                <?php the_sub_field('text_block'); ?>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>




                <?php elseif( get_row_layout() == 'video_single' ): ?>
                    <div class="grid-container" data-aos="fade-up">
                        <div class="grid-x align-center pb-l">
                            <div class="cell">
                                <video class="inline" autoplay muted loop controls>
                                    <source src="<?php the_sub_field('video_single'); ?>" type="video/mp4" >
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    </div>


        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>