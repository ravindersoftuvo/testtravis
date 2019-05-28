<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage CanozVisa
 * @since CanozVisa 1.0
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
 	<?php wp_head(); ?> 
</head>
<body class="slides scroll defaultScroll animated">
<div class="header"> 
	<span class="actionButton sidebarTrigger" data-sidebar-id="1">
		<img src="<?php echo get_template_directory_uri()."/images/menu.png"?>" alt="Icon"/>
	</span>
   <?php
      if(is_active_sidebar('header-social-icon')){
      dynamic_sidebar('header-social-icon');
      }
      ?>
  
  
  <!-- Sidebar -->
  <nav class="sidebar" data-sidebar-id="1">
    <div class="close"><img src="<?php echo get_template_directory_uri()."/images/cross.png"?>" alt="Icon"/></div>
    <div class="search_nav">
    	<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  			<label>
  				<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'CanozVisa' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
  			</label>
  			<button type="submit" class="search-submit">
  				<span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'CanozVisa' ); ?></span>
  			</button>
  		</form> 
      <img id="search" src="<?php echo get_template_directory_uri()."/images/search.png"?>" alt="Icon"/></div>
      <div class="content"> <a href="<?php echo site_url();?>" class="logo">
      <img src="<?php echo get_template_directory_uri()."/images/logo.png"?>" alt="Icon"/></a>
        <?php wp_nav_menu( array( 
            'theme_location' => 'primary',
            'menu_class'      => 'mainMenu',
             ) 
           );
            

            ?>
      </div>
  </nav>
</div>

