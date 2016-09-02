<?php 
/*
*  Template Name: Result
*/
get_header(); ?>

	<!-- Search-bar Section 
    ============================== -->
            <div id="search-section">
	        <div class="container">
                <div class="col-sm-12 search-bar">
                    <ul class="list-inline search-input-list">
                        <li class="search-input search-cat">
                            <select>
                                <option>Select a category ...</option>
                                <option>Option</option>
                                <option>Option</option>
                            </select>
                        </li>
                        <li class="search-input search-city">
                            <select>
                                <option>Select city ...</option>
                                <option>Option</option>
                                <option>Option</option>
                            </select>
                        </li>
                        <li class="search-input search-btn">
                            <button class="btn btn-md btn-search-submit">
                                <span class="pull-left">Search</span>
                                <i class="pull-right fa fa-search"></i>
                            </button>
                        </li>
                    </ul>
                </div>
		<div class="clearfix"></div>
            </div>
        </div>
        
        <!-- Business List Section 
        ============================== -->
        <div class="container">
            <div id="business-list-section">
                <div class="row">
                	
                    <!-- Business List Area -->
                    <div class="col-xs-12 col-sm-9 business-list">
                        <ul class="list-inline">
                            <li><span class="badge search-badge">1280</span></li>
                            <li>Result found for category</li>
                            <li><a href="#">Car Services</a> </li>
                        </ul>
                        <div class="list-box">
                            <!-- Business List -->
                            
                            <?php $args = array( 'post_type' => 'business', 'posts_per_page' => 5 );
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            
                            <div class="single-business">
                                <div class="row">
                                    <div class="col-sm-9 business-listing">
                                        <a href="<?php the_permalink()?>"><h4 class="business-title"><?php the_title(); ?></h4></a>
                                        <p class="business-description">
                                            <?php the_field('business_excerpt');?>
                                        </p>
                                    </div>
                                    <div class="col-sm-3 business-contact">
                                        <ul class="list-unstyled contact-list center-block">
                                            <li class="col-xs-6 col-sm-12"><a href="#"><?php the_field('business_location');?></a></li>
                                            <li class="col-xs-6 col-sm-12"><a href="#"><?php the_field('business_phone');?></a></li>
                                            <li class="col-xs-6 col-sm-12"><a href="mainto:<?php the_field('business_email');?>">Send Email</a></li>
                                            <li class="col-xs-6 col-sm-12"><a href="<?php the_field('business_website');?>" target="blank">Visit Website</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

							<?php endwhile; ?>

                            <nav class="text-center">
                            	
                            	<?php wp_pagenavi(); ?>
                            	
                            </nav>
                        </div>
                    </div>
                    
                    <!-- Ads Area -->
                    <div class=" col-sm-3 advert-area">
                        <img class="img-responsive" src="<?php echo get_template_directory_uri()?>/assets/images/right-ad.png" alt="">
                    </div>
                </div>
            </div>
        </div>

<?php
get_footer();