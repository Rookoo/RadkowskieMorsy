<?php?><!DOCTYPE html>
<html>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Radkowskie Morsy</title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
    </head>
    <body>
<header class="page-head">
   <div id="facebook_slider_widget" style="display: none"></div>
   
	<a href="http://radkowskie.morsy.ct8.pl/" title="Go back to homepage" class="logo-link">
		<div class= "logotxt">radkowskie.morsy.pl</div></a>
		<button onclick="myFunction()" id="nav-toggle" href="#"><span></span></button>
	
		<div class="page-nav">
              <nav id="myDropdown" class="navigation-menu">
  				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'fallback_cb' => 'wp_fanzone_menu', 'menu_id' => 'page-nav') ); ?>
              </nav>
        </div>
		
</header>
<div class="logo">
			<img src="<?php bloginfo('stylesheet_directory');?>/img/logomobile-min.png" class="logo-mobile"/> 
			<img src="<?php bloginfo('stylesheet_directory');?>/img/logofb.jpg" class="logo-desktop"/> 
		</div>

				