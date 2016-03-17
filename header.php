<!doctype html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>
<meta charset="utf-8">
<?php // force Internet Explorer to use the latest rendering engine available ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php wp_title(''); ?></title>
<?php // mobile meta (hooray!) ?>
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
<!--[if IE]>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
<![endif]-->
<?php // or, set /favicon.ico for IE10 win ?>
<meta name="msapplication-TileColor" content="#f01d4f">
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
<meta name="theme-color" content="#121212">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<?php // wordpress head functions ?>
<?php wp_head(); ?>
<?php // end of wordpress head ?>
<?php // drop Google Analytics Here ?>
<?php // end analytics ?>
</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
	<div class="main-wrapper">
		<div class="left-sidebar">
			<div id="nav-icon">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="nav-wrapper">
				<nav>
					<?php wp_nav_menu(array(
						'container' => false,			// remove nav container
						'container_class' => 'menu cf',	// class of container (should you choose to use it)
						'menu' => __( 'The Main Menu' ),	// nav name
						'menu_class' => 'main-nav',		// adding custom nav class
						'theme_location' => 'main-nav',	// where it's located in the theme
						'before' => '',				// before the menu
						'after' => '',				 	// after the menu
						'link_before' => '',				// before each link
						'link_after' => '',				// after each link
						'depth' => 0,				// limit the depth of the nav
						'fallback_cb' => ''				// fallback function (if there is one)
					)); ?>
					<ul>
						<li><a href="http://peterkingsonchan.co.uk/wp-content/uploads/2016/03/website-cv.pdf" download>Resume</a></li>
					</ul>
				</nav>
				<ul class="social-links">
					<li class="social"><a href="https://www.facebook.com/ChickenAndRice" target="_blank" class="fa fa-facebook"></a></li>
					<li class="social"><a href="https://twitter.com/madeinthearcade" target="_blank" class="fa fa-twitter"></a></li>
					<li class="social"><a href="https://www.linkedin.com/in/madeinthearcade" target="_blank" class="fa fa-linkedin"></a></li>
					<li class="social"><a href="https://www.instagram.com/tychannosaurus/" target="_blank" class="fa fa-instagram"></a></li>
					<li class="social"><a href="http://koikoi-me.tumblr.com/" target="_blank" class="fa fa-tumblr"></a></li>	
				</ul>			
				<!-- /nav-wrapper -->
			</div>
			<!-- /left-sidebar -->
		</div>
		<div class="body-wrapper">
			<?php if(is_front_page() ) { ?>
				<div class="homepage-main-slide">
					<div class="container">
						<div class="col-1">
							<div id="particles-js" class="wow fadeIn" data-wow-delay="2s"></div>
							<div class="logo">
								<div id="triangle" class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.5s"></div>
								<div class="logo-text wow fadeInDown" data-wow-duration="2s">
									<h1>Rise above</h1>
									<h4 class="shout">Elevating design &amp; functionality to it's limits</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } //end if front page ?>