<!DOCTYPE html>
<html <?php language_attributes(); ?>>

  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      <?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>
    </title>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>?<?php echo time();?>" >
        <link rel="shortcut icon" href="<?Php if(get_option_tree('favicon')){echo get_option_tree('favicon');}else{echo get_template_directory_uri().'/favicon.png';} ?>" type="image/x-icon"/>

    <!-- CSS Files -->
    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>

  <!-- Header Section 
    ============================== -->
  <div id="header-section">
    <div class="container">
        <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="logo pull-left">
           <a href="<?php bloginfo('home')?>"><img class="logo-img" src="<?php get_option_tree('site-logo','', true)?>" alt=""></a>
        </div>
        <nav class="collapse navbar-collapse navbar-main" id="navbar">
	        <?php if( is_user_logged_in() ) {
	wp_nav_menu(array("menu_class" => "loggedin-menu list-inline",'container_class' => 'account-area', "theme_location" => "loggedin-header-menu"));
	} else { wp_nav_menu(array("menu_class" => "loggedin-menu list-inline main-menu-section",'container_class' => 'account-area', "theme_location" => "header-menu")); 
	        }
	        ?>  
        </nav>
	<div class="clearfix"></div>
      </div>
    </div>
    <div class="content-body-section">