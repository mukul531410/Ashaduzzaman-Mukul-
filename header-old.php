<!DOCTYPE html>
<html <?php language_attributes(); ?>>

  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      <?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>
    </title>
        <link rel="shortcut icon" href="<?Php if(get_option_tree('favicon')){echo get_option_tree('favicon');}else{echo get_template_directory_uri().'/favicon.png';} ?>" type="image/x-icon"/>

    <!-- CSS Files -->
    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>

  <!-- Header Section 
    ============================== -->
  <div class="container">
    <div id="header-section">
      <div class="row hidden-xs">
        <div class="col-sm-6 header-col">
          <div class="logo pull-left">
            <a href="<?php bloginfo('home')?>"><img class="logo-img" src="<?php get_option_tree('site-logo','', true)?>" alt=""></a>
          </div>
        </div>
        <div class="col-sm-6 header-col">
            
            <?php if( is_user_logged_in() ) { ?>
            	
				<?php
				
					$default = array (
	            		'theme_location'	=> 'loggedin-header-menu',
	            		'menu_class'		=> 'loggedin-menu list-inline',
	            		'container'			=> 'div',
	        			'container_class'	=> 'account-area pull-right',
	            	);
	            	
	            	wp_nav_menu($default);
				
				?>
                
            	
            <?php } else {
            	
            	$default = array (
            		'theme_location'	=> 'header-menu',
            		'menu_class'		=> 'header-menu',
            		'container'			=> 'div',
        			'container_class'	=> 'login-area pull-right',
            	);
            	
            	wp_nav_menu($default);
            }
            ?>
            
        </div>
      </div>
      <div class="visible-xs">
        <nav class="navbar navbar-main">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">
                <ul class="list-inline">
                  <li><img class="logo-img" src="<?php echo get_template_directory_uri()?>/assets/images/instantrepair_logo.png" alt=""></li>
                  <li>
                    <h1 class="logo-text">Instant <span>Repairs</span></h1></li>
                </ul>
              </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        
    
            </div>
            <!-- /.navbar-collapse -->
          </div>
          <!-- /.container-fluid -->
        </nav>
      </div>
    </div>
  </div>