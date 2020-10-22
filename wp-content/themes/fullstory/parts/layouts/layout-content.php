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

            <?php 
                if( get_sub_field('image_size') == 'grid' ) {
                    echo '<div class="grid-container" data-aos="fade-up">';
                }
                if( get_sub_field('image_size') == 'fluid' ) {
                    echo '<div class="grid-container fluid" data-aos="fade-up">';
                }
                if( get_sub_field('image_size') == 'full-width' ) {
                    echo '<div class="no-border-radius" data-aos="fade-up">';
                }
            ?>


                <div class="grid-x align-center text-center mb-l">
                    <div class="cell">
                        <?php 
                            $image_id = get_sub_field('image_single');
                            if( $image_id ) {
                                $size = 'full'; // or whatever size you want    
                                // $title = get_the_title( $image_id );  // 1. NOTE: use image ID here, you have no $attach_id!
                                $caption = wp_get_attachment_caption( $image_id );  

                                // 2. set up your attributes array to pass in the title
                                $attr['title'] = $title;
                                // $attr['caption'] = $caption;

                        
                                // 3. Take note of the parameters for this you were passing values in the wrong positions
                               $img_html = wp_get_attachment_image( $image_id, $size, false, $attr);
                        
                                // 4. do whatever you want with the image e.g. return it or display it
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

            <?php 
                if( get_sub_field('image_size') == 'grid' ) {
                    echo '</div>';
                }
                if( get_sub_field('image_size') == 'fluid' ) {
                    echo '</div>';
                }
                if( get_sub_field('image_size') == 'full-width' ) {
                    echo '</div>';
                }
            ?>

        <?php elseif( get_row_layout() == 'image_duo' ): ?>
            <div class="grid-container" data-aos="fade-up">
                <div class="grid-x grid-margin-x align-center mb-l">
                    <div class="cell medium-6 text-center">
                        <?php 
                            $image = get_sub_field('image_duo_one');
                            $size = 'full';
                            if( $image ) {
                                echo '<figure>';
                                echo wp_get_attachment_image( $image, $size );
                                echo '</figure>';
                            } 
                        ?>
                    </div>
                    <div class="cell medium-6 text-center">
                        <?php 
                            $image = get_sub_field('image_duo_two');
                            $size = 'full';
                            if( $image ) {
                                echo '<figure>';
                                echo wp_get_attachment_image( $image, $size );
                                echo '</figure>';
                            } 
                        ?>
                    </div>
                </div>
            </div>



            <?php elseif( get_row_layout() == 'image_text_duo' ): ?>
                <div class="grid-container" data-aos="fade-up">
                    <div class="grid-x grid-margin-x align-center align-middle mb-l <?php if( get_sub_field('row_reverse') ) { echo 'large-flex-dir-row-reverse'; } ?>
">
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


            
 
        <?php elseif( get_row_layout() == 'content_block' ): ?>
            <div class="waves-bg-blue pt-m pb-l">

                <div class="grid-container">
                    <div class="grid-x align-center ">   
                        <div class="cell small-11 medium-10 salmon pt-m pb-s">
                            <!-- <div class="corner"></div> -->
                            <div class="grid-x align-center">

                                <?php if( have_rows('content') ): ?>
                                    <?php while( have_rows('content') ): the_row(); ?>

                                        <?php if( get_row_layout() == 'contact_form_block' ): ?>
                                            <div class="cell small-10 pb-s">
                                                <?php the_sub_field('contact_form'); ?>
                                            </div>

                                        <?php elseif( get_row_layout() == 'text_block' ): ?>
                                            <div class="cell small-10 pb-s">
                                                <?php the_sub_field('text'); ?>
                                            </div>

                                        <?php elseif( get_row_layout() == 'downloads_block' ): ?>
                                            <div class="cell small-10 pb-s">
                                                <!-- Start #downloads -->
				                                    <?php get_template_part('parts/layouts/layout', 'downloads'); ?>
                                                <!-- End #downloads -->
                                            </div>

                                        <?php elseif( get_row_layout() == 'program_block' ): ?>
                                            <div class="cell small-10 pb-s">
                                                <!-- Start #downloads -->
				                                    <?php get_template_part('parts/layouts/layout', 'program'); ?>
                                                <!-- End #downloads -->
                                            </div>

                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>




        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>