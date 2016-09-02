<?php 
/*
*  Template Name: Result
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
		<div class="clearfix"></div>
            </div>
        </div>
        
        <!-- Business List Section 
        ============================== -->
        <div class="container">
            <div id="business-list-section">                	
                    <!-- Business List Area -->
                    <div class="col-xs-12 col-sm-8 business-list">
                        <ul class="list-inline" style="display:none;">
                            <li><span class="badge search-badge">1280</span></li>
                            <li>Result found for category</li>
                            <li><a href="#"><?php $businessTermObject = get_term_by( 'term_id', $_POST['category'], 'business_category' );
echo $quantityTermObject->name; ?></a> </li>
                        </ul>
                        <div class="list-box">
                            <!-- Business List -->
                            
                            <?php $args = array( 
                            	'post_type' => 'business', 
                            	'posts_per_page' => 5,
                            	'tax_query' => array(
                            		                    'relation' => 'AND',
												        array(
												        'taxonomy' => 'business_city',
												        'field' => 'term_id',
												        'terms' => $_POST['city']),
												        array(
												        'taxonomy' => 'business_category',
												        'field' => 'term_id',
												        'terms' => $_POST['category'])
												    
												)
								);
							$loop = new WP_Query( $args );
							if($loop->post_count == 0){
								 $args = array( 
                            	'post_type' => 'business', 
                            	'posts_per_page' => 5,
                            	'tax_query' => array(
                            		                    'relation' => 'OR',
												        array(
												        'taxonomy' => 'business_city',
												        'field' => 'term_id',
												        'terms' => $_POST['city']),
												        array(
												        'taxonomy' => 'business_category',
												        'field' => 'term_id',
												        'terms' => $_POST['category'])
												    
												)
								);
							$loop = new WP_Query( $args );
							
							}
							while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            
                            <div class="single-business">
                                <div class="row">
                                    <div class="col-sm-8 col-xs-12 business-listing">
                                        <a href="<?php the_permalink()?>"><h4 class="business-title"><?php the_title(); ?></h4></a>
                                        <p class="business-description">
                                            <?php the_excerpt();?>
                                        </p>
                                    </div>
                                    <div class="col-sm-4 col-xs-12 business-contact">
                                        <ul class="list-unstyled contact-list center-block">
                                            <li class="col-xs-6 col-sm-12"><a href="#"><?php $terms = wp_get_post_terms(get_the_ID(), 'business_city',array("fields" => "names")); echo $terms[0]; ?></a></li>
                                            <li class="col-xs-6 col-sm-12"><a href="tel:<?php the_field('business_phone');?>"><?php echo '('.substr(get_field('business_phone'),0,2).')'.substr(get_field('business_phone'),2);?></a></li>
                                            <li class="col-xs-6 col-sm-12"><a href="mailto:<?php the_field('business_email');?>">Send Email</a></li>
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
                    <div class=" col-sm-4  col-xs-12 advert-area">
                        <img class="img-responsive hidden-xs" src="<?php echo get_template_directory_uri()?>/assets/images/right-ad.png" alt="">
                        <img class="img-responsive  hidden-lg hidden-md hidden-sm" src="<?php echo get_template_directory_uri()?>/assets/images/result-mobile-bottom.jpg" alt="mobile banner">
                    </div>
					<div class="clearfix"></div>
            </div>
        </div>

<?php
get_footer();