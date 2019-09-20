<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package skender
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <!-- Google Web Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,300i|Roboto:300,300i,400,400i,500,500i" rel="stylesheet">

  <!-- Typekit Fonts -->
  <style>
    @import url("https://use.typekit.net/has3zba.css");
  </style>

	<?php wp_head(); ?>
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick.css"/>
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick-theme.css"/>
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">

  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/magPopup.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'skender' ); ?></a>

	<header>

    <div class="container">
      <div class="logo">
        <a href="<?php echo home_url(); ?>">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/skender-logo.svg" alt="Skender Construction">
        </a>
      </div>

      <div class="social-nav">
        <div class="text">Stay Connected</div>
        <ul>
          <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-facebook-basic.svg" alt="Facebook"></a></li>
          <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-twitter-basic.svg" alt="Twitter"></a></li>
          <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-linkedin-basic.svg" alt="LinkedIn"></a></li>
          <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-instagram-basic.svg" alt="Instagram"></a></li>
          <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-youtube-basic.svg" alt="YouTube"></a></li>
          <li class="search">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-search.svg" alt="Search">
          </li>
        </ul>
      </div>
		
      <div class="nav-toggle">
        <span></span>
        <span></span>
        <span></span>
      </div>
  		<nav class="main-nav">  			
  			<?php
  				wp_nav_menu( array(
  					'theme_location' => 'menu-1',
  					'menu_id'        => 'primary-menu',
  				) );
  			?>
  		</nav><!-- #site-navigation -->

    </div><!-- .container -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
