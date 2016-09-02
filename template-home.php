<?php 
/*
 * Template Name: Home
 */
get_header(); 
?>
    <div class="home-page">
        <div class="dark-glass" <?php if(get_field('banner_image')){ ?> style="background: url(<?php the_field('banner_image'); ?>) top 13% left no-repeat;background-size: cover;" <?php } ?>>
            <div class="container">
                <div class="search-section">
                    <div class="search-bar">
                        <?php if(get_field('search_title')){ ?><h2><?php the_field('search_title') ?></h2><?php } ?>
<?php
$business_city_terms = get_terms('business_city', array('hide_empty' => false));
$business_category_terms = get_terms('business_category', array('hide_empty' => false));
?>
						<form name="search-form" id="search-form" method="post" action="result">
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
                        <?php if(get_field('search_content')){ ?><p><?php the_field('search_content') ?></p><?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <?php
        if(get_field('about_repairs')){
            $about=get_field('about_repairs');
            $i=1;
        ?>
        <div class="about-instantrepair">
            <div class="container">
                <?php
                foreach ($about as $value){
                ?>
                <div class="about-item">
                    <div class="about-icon">
                        <?php
                        if($value['about_item_icon']){
                        ?>
                            <img src="<?php echo $value['about_item_icon']; ?>" alt="about icon">
                        <?php }else if($i==1){ ?>
                            <i class="fa fa-clock-o"></i>
                        <?php }else if($i==2){ ?>
                            <i class="fa fa-search"></i>
                        <?php }else if($i==3){ ?>
                            <i class="fa fa-clock-o"></i>
                        <?php } ?>
                    </div>
                    <div class="about-description">
                        <?php echo $value['about_item_content']; ?>
                    </div>
                </div>
                <?php
                $i++;
                }
                ?>
            </div>
        </div>
       <?php } ?>

        <?php if(get_field('newsletter_content')){ ?>
        <div class="newsletter-section">
            <div class="container">
                <?php the_field('newsletter_content'); ?>
            </div>
        </div>
        <?php } ?>

    </div>

<?php
    get_footer();
?>