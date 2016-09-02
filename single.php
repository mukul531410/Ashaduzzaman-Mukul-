<?php 

get_header(); ?>

        <!-- Search-bar Section 
        ============================== -->
        <div class="container-fluid">
            <div id="search-section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 search-bar">
                            <ul class="list-inline search-input-list">
                                <li class="search-input search-cat">
                                    <select>
                                        <option>Select a category</option>
                                        <option>Option</option>
                                        <option>Option</option>
                                    </select>
                                </li>
                                <li class="search-input search-city">
                                    <select>
                                        <option>Select city</option>
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
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Main Content Section 
        ============================== -->
        <div class="container">
            <div id="content-section">
                <div class="row">
                    <!-- Content Body -->
                    <div class="col-sm-9 business-details">
                    	
                    	<?php $args = array( 'post_type' => 'business', 'posts_per_page' => 1 );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post(); ?>
						
	                        <h3 class="business-name"><?php the_title() ?></h3>
	                        <img class="img-responsive img-thumbnail business-img set_padd" src="<?php echo get_post_thumbnail_id(get_the_ID())?>" alt="">
	                        <h4 class="content-head">Description</h4>
	                        <div class="business-description">
	                        	<?php the_content(); ?>    
	                        </div>
                        
                        <?php endwhile; ?>
                        
                        <h4 class="content-head">Contact The Business / Services Name</h4>
                        <form class="form-horizontal business_contact">
                            <div>
                                <div class="form-group row col-sm-6">
                                    <div class="row">
                                        <label for="first_name" class="col-sm-4 control-label text-left">First Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control contact-input" id="first_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-6 pull-right">
                                    <div class="row">
                                        <label for="last_name" class="col-sm-4 control-label  text-left">Last Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control contact-input" id="last_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-6">
                                    <div class="row">
                                        <label for="user_email" class="col-sm-4 control-label">Email</label>
                                        <div class="col-sm-8">
                                            <input type="email" class="form-control contact-input" id="user_email">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-6 pull-right">
                                    <div class="row">
                                        <label for="user_phone" class="col-sm-4 control-label">Phone</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control contact-input" id="user_phone">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="form-group col-sm-12">
                                    <div class="row">
                                        <label for="user_phone" class="col-sm-2 control-label">Message</label>
                                        <div class="col-sm-10 msg-col">
                                            <textarea class="form-control contact-input" id="user_phone" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-12">
                                    <button class="btn btn-md btn-org btn-message pull-right">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                    <!-- Business Overview -->
                    <div class="col-sm-3 business-overview">
                        <div class="overview-box">
                            <div class="about-business set_padd">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri()?>/assets/images/banner-1.jpg" alt="">
                                <h4 class="content-head">About Business Name</h4>
                                <div class="about-body">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis</p>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum accumsan et iusto odio dignissim qui duis dolore te feugait nulla facilisi</p>
                                </div>
                                <button class="btn btn-md btn-org btn-more">More Details</button>
                            </div>
                            <div class="about-services set_padd">
                                <h4 class="content-head">Provided Services</h4>
                                <ul class="service-list">
                                   <li>Lorem ipsum dolor</li>
                                   <li>Consecteuer elit adipiscing</li>
                                   <li>Sego bakar pake ayam</li>
                                   <li>Ngumbe es teh disiang bolong</li>
                                   <li>Akhir bulan mangan mie</li>
                                   <li>Lorem ipsum dolor</li>
                                   <li>Consecteuer elit adipiscing</li>
                                   <li>Sego bakar pake ayam</li>
                                   <li>Ngumbe es teh disiang bolong</li>
                                   <li>Akhir bulan mangan mie</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
get_footer();
