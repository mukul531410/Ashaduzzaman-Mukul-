</div>
<!-- Footer Section 
        ============================== -->
<div id="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="footer-nav">
                    <ul class="list-inline">
                        <li><b><?php echo get_option_tree('footer-title') ?></b></li>
                        <li>
                            <ul class="social-nav list-inline">
                                <?php if (get_option_tree('facebook-link')) { ?><li><a href="<?php echo get_option_tree('facebook-link') ?>"><i class="fa fa-facebook"></i></a></li><?php } ?>
                                <?php if (get_option_tree('twitter-link')) { ?><li><a href="<?php echo get_option_tree('twitter-link') ?>"><i class="fa fa-twitter"></i></a></li><?php } ?>
                                <?php if (get_option_tree('googleplus-link')) { ?><li><a href="<?php get_option_tree('googleplus-link') ?>"><i class="fa fa-google-plus"></i></a></li><?php } ?>
                                <?php if (get_option_tree('linkedin-link')) { ?><li><a href="<?php echo get_option_tree('linkedin-link') ?>"><i class="fa fa-linkedin"></i></a></li><?php } ?>
                                <?php if (get_option_tree('instagram-link')) { ?><li><a href="<?php echo get_option_tree('instagram-link') ?>"><i class="fa fa-instagram"></i></a></li><?php } ?>
                            </ul>
                        </li>
                        <li>
	                            <?php if(is_front_page()){
		                            $default = array (
				                		'theme_location'		=> 'home-footer-menu',
				                		'menu_class'			=> 'foot-nav list-inline'
				                	);
				                	
				                	wp_nav_menu($default);
	                            } else {
	                            	$defaults = array(
		                                'theme_location' => 'footer-menu',
		                                'menu_class' => 'foot-nav list-inline',
		                            );
		                            wp_nav_menu($defaults); 
	                            }
	                            ?>
                        </li>
                    </ul>
                </div>
                <div class="footer-copyright text-center">
                	
                    <?php echo get_option_tree('test-link'); ?>
                    <p class="text-center"><?php echo get_option_tree('footer-copyright') ?></p>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- JS Files -->
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js?<?php echo time(); ?>"></script>
<?php wp_footer(); ?>
</body>
</html>