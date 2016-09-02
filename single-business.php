<?php 

/*
	Template Name: Details
*/

get_header(); ?>
<?php
$business_city_terms = get_terms('business_city', array('hide_empty' => false));
$business_category_terms = get_terms('business_category', array('hide_empty' => false));
?>
        <!-- Search-bar Section 
        ============================== -->
            <div id="search-section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 search-bar">
                        	<form name="search-form" id="search-form" method="post" action="/result">
                            <ul class="list-inline search-input-list">
                                <li class="search-input search-cat">
		                            <select name="category">
		                                <option value="">Select a category</option>
		                                <?php for($i = 0; $i < count($business_category_terms); $i++) echo '<option value="'.$business_category_terms[$i]->term_id.'">'.$business_category_terms[$i]->name.'</option>'; ?>
		                            </select>
                                </li>
                                <li class="search-input search-city">
                                    <select name="city">
		                                <option value="">Select city</option>
		                                <?php for($i = 0; $i < count($business_city_terms); $i++) echo '<option value="'.$business_city_terms[$i]->term_id.'">'.$business_city_terms[$i]->name.'</option>'; ?>
		                            </select>
                                </li>
                                <li class="search-input search-btn">
                                    <button class="btn btn-md btn-search-submit">
                                        <span class="pull-left">Search</span>
                                        <i class="pull-right fa fa-search"></i>
                                    </button>
                                </li>
                            </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        
        <!-- Main Content Section 
        ============================== -->
        <div class="container">
            <div id="content-section">
                <div class="row">
                	
                	<?php
 if (have_posts()) : while (have_posts()) : the_post(); $terms = wp_get_post_terms( get_the_ID(), 'business_city' );
$featImage = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
?>
                    <!-- Content Body -->
                    <div class="col-sm-8 col-xs-12 business-details">
	                        <h3 class="business-name"><?php the_title() ?></h3>
<div class="featured-image-section">							                        
                	<a  class="popup" title="" href="<?php echo $featImage[0]; ?>" rel="prettyphoto[group]">
<?php the_post_thumbnail('full', array( 'class' => 'img-responsive  business-img set_padd' ) );?>
</a>
<?php
if( function_exists( 'easy_image_gallery' ) ) {
?>
<div class="image-gallery">
   <?php echo easy_image_gallery();?>
</div>
<?php
}
 ?>
</div>

	                        <h4 class="content-head">Description</h4>
	                        <div class="business-description">
	                        	<?php echo get_the_content(); ?>    
	                        </div>
                        
                        
                        
                        <h4 class="content-head">Contact The Business / Services Name</h4>
                        <?php echo do_shortcode('[contact-form-7 id="208" title="Contact Form"]'); ?>
                    </div>
                    
                    <!-- Business Overview -->
                    <div class="col-sm-4 col-xs-12 business-overview">
                        <div class="overview-box">
                            <div class="about-business set_padd">
                                <?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) );?>
                                <h4 class="content-head">About Business Name</h4>
                                <div class="about-body">
                                    <?php  echo get_post_meta(get_the_ID(),'business_excerpt',true); ?>
                                </div>
                                <a href="<?php echo get_post_meta(get_the_ID(),'business_website',true);  ?>" class="btn-more">More Details</a>
                            </div>
                            <div class="about-services set_padd">
                                <h4 class="content-head">Provided Services</h4>
                                <div class="service-list">
				<?php 
				if(get_post_meta(get_the_ID(),'provided_services',true)){
					echo get_post_meta(get_the_ID(),'provided_services',true);  
				}
				?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
<?php 
    endwhile;
endif; 
wp_reset_postdata();
?>
                
            </div>
        </div>

<?php
get_footer();