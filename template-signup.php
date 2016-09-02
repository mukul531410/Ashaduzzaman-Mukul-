<?php
/*
  Template Name: Signup
 */

get_header();
?>

<!-- Sign Up Section 
============================== -->
<div id="signup-section" <?php if(get_field('banner_image')){ ?> style="background: url(<?php the_field('banner_image'); ?>) top left no-repeat;background-size: cover;" <?php } ?>>
    <div class="dark-glass">
        <div class="container">
            <div class="row">
                <!-- Signup Content -->
                <div class="col-sm-7 signup-content">
                    <h2 class="signup-head"><?php the_field('benefit_heading'); ?></h2>
                    <div class="sign-advant">
                        <?php the_field('benefit_list'); ?>
                    </div>
                    
                    <div class="testimonial">
                    <?php the_field('testimonial_heading'); ?>
              			<div class="row test-content">
                            
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

							  <!-- Wrapper for slides -->
							  <div class="carousel-inner" role="listbox">
							  	
							  	<?php
								$i=1;
								$args = array('post_type' => 'testimonial', 'posts_per_page' => 10);
								$loop = new WP_Query($args);
								while ($loop->have_posts()) : $loop->the_post();
								?>
								<div class="item <?php if($i==1){ ?>active<?php } ?>">
							      <div class="col-sm-3">
                                                <img class="img-responsive border-circle client-img" src="<?php the_field('client_image'); ?>" alt="client image">
	                              </div>
		                            <div class="col-sm-9">
		                                <p class="client-name"><?php the_title(); ?><br>
		                                <p class="small"><?php the_field('client_designation'); ?></p>
		                                <div class="quote">
		                                    <?php the_field('client_feedback'); ?>
		                                </div>
		                            </div>
							    </div>
							    <?php 
								$i++;
								endwhile;
								 ?>
					
							  </div>
							  
  							  <!-- Controls -->
							  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							  </a>
							
							</div>
                        </div>
                    </div> 
                </div>
              
                <?php wp_reset_query(); ?>
                <!-- Signup Form -->
                <div class="col-sm-5 signup-form">
                    <div class="signup-form-box">
                        <h3 class="form-head"><?php the_field('signup_form_heading'); ?></h3>
                        <?php the_field('signup_form'); ?>  
                    </div>
                </div>
<div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>