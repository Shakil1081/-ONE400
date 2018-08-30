<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Bootstrap to WordPress
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


	<!-- Bootstrap core CSS -->
      <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
	  
      <!-- Font Awesome Icons -->
      <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	  
      <!-- Custom CSS -->
      <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/style.css" rel="stylesheet">
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
      <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
     <body>
      <!-- HEADER
         ================================================== -->
      <header class="site-header" role="banner">
         <!-- NAVBAR
            ================================================== -->
         <div class="navbar-wrapper ">
            <div class="navbar navbar-inverse navbar-fixed-top custommcl" role="navigation">
               <div class="container">
				   <div class="row">
                     <div class="col-sm-10">
                        <div class="row">
                           <div class="navbar-header">
                              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              </button>
                              <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="Bootstrap to Wordpress"></a>
                           </div>
                          <!-- <div class="navbar-collapse collapse">
                              <ul class="nav navbar-nav mr-auto text-center">
                                 <li class="active"><a href="#">ATTORNEYS</a></li>
                                 <li><a href="#">PRACTICE AREAS</a></li>
                                 <li><a href="#">ABOUT</a></li>
                                 <li><a href="#">SUCCESSES</a></li>
                                 <li><a href="#">BLOG</a></li>
                                 <li><a href="#">CONTACT</a></li>
                              </ul>
                           </div>-->
						<?php
		wp_nav_menu( array(
			'theme_location'    => 'primary',
			'depth'             => 2,
			'container'         => 'div',
			'container_class'   => 'navbar-collapse collapse',
			'container_id'      => 'bs-example-navbar-collapse-1',
			'menu_class'        => 'nav navbar-nav mr-auto text-center',
			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			'walker'            => new WP_Bootstrap_Navwalker(),
		) );
		?> </div>
                     </div>
                     <div class="col-sm-2 phon-n">
                        <div class="row">
                           (410) 554-3600
                        </div>
					</div>
				</div>
               </div>
            </div>
         </div>
      </header>
