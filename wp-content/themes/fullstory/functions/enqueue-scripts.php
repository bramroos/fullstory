<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
        
    // Adding scripts file in the footer
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/scripts/scripts.js', array( 'jquery' ), filemtime(get_template_directory() . '/assets/scripts/js'), true );
   
    // Register main stylesheet
    // wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/styles/style.css', array(), filemtime(get_template_directory() . '/assets/styles/scss'), 'all' );
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/styles/style.css', array(), filemtime(get_template_directory() . '/assets/styles/style.css'), false );


    // Register Swiper
    wp_enqueue_style( 'swiper-css', get_template_directory_uri() . '/assets/styles/swiper/swiper-bundle.min.css', array(), filemtime(get_template_directory() . '/assets/styles/scss'), 'all' );

    // Adding Swiper
    wp_enqueue_script( 'swiper-js', get_template_directory_uri() . '/assets/scripts/js/swiper/swiper-bundle.min.js', array( 'jquery' ), filemtime(get_template_directory() . '/assets/scripts/js'), true );

    // Adding Aos
    wp_enqueue_script( 'aos-js', get_template_directory_uri() . '/assets/scripts/js/aos/aos.js', array( 'jquery' ), filemtime(get_template_directory() . '/assets/scripts/js'), true );

    // Register Aos
    wp_enqueue_style( 'aos-css', get_template_directory_uri() . '/assets/styles/aos/aos.css', array(), filemtime(get_template_directory() . '/assets/styles/scss'), 'all' );

    // Adding GSAP
    // wp_enqueue_script( 'gsap-js', get_template_directory_uri() . '/assets/scripts/js/gsap/gsap.min.js', array( 'jquery' ), filemtime(get_template_directory() . '/assets/scripts/js'), true );
    // wp_enqueue_script( 'morph-js', get_template_directory_uri() . '/assets/scripts/js/gsap/MorphSVGPlugin.min.js', array( 'jquery' ), filemtime(get_template_directory() . '/assets/scripts/js'), true );



    // Register Hamburgers
    wp_enqueue_style( 'hamburgers-css', get_template_directory_uri() . '/assets/styles/hamburgers/hamburgers.css', array(), filemtime(get_template_directory() . '/assets/hamburgers/hamburgers.css'), 'all' );

    
    // Comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);