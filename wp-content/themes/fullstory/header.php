<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section
 *
 */
?>

<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />	
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>	
		
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-24952873-10"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-24952873-10');
		</script>

	</head>
			
	<body <?php body_class(); ?> data-barba="wrapper">

		<div class="off-canvas-wrapper">
			
			<!-- Load off-canvas container. Feel free to remove if not using. -->			
			<?php get_template_part( 'parts/content', 'offcanvas' ); ?>
			
			<div class="off-canvas-content" data-off-canvas-content>
				
				<?php if( is_page_template( 'template-home.php' ) ) { ?>

					<header class="header on-top" role="banner">

					<div class="hide-for-large hamburger-container">
						<a class="hamburger hamburger--collapse" type="button" aria-label="Menu" data-toggle="off-canvas">
							<span class="hamburger-box">
								<span class="hamburger-inner"></span>
							</span>
						</a>
					</div>

				<?php } elseif ( ( is_page_template( 'template-contact.php' )
							|| is_page_template('template-general.php')
							|| is_singular('cases')) ) { ?>
							
					<header class="header" role="banner">

					<div class="hide-for-large hamburger-container">
						<a class="hamburger hamburger--collapse" type="button" aria-label="Menu" data-toggle="off-canvas">
							<span class="hamburger-box">
								<span class="hamburger-inner"></span>
							</span>
						</a>
					</div>

				<?php } ?>
							
					 <!-- This navs will be applied to the topbar, above all content 
						  To see additional nav styles, visit the /parts directory -->
					 <?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>
	 	
				</header> <!-- end .header -->