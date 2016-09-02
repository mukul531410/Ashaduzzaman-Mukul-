<?php
/*
* Template Name: Edit Business
*/

get_header();
?>

<!-- Breadcrumb Section 
============================== -->
<div class="container-fluid">
    <div id="breadcrumb-section">
        <div class="container">
            <?php
                custom_breadcrumbs();
            ?>
        </div>
    </div>
</div>

<!-- Edit Content Section 
============================== -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="container">
    <div id="content-section">
        <h3 class="edit-head"><?php echo get_the_title(); ?></h3>
        <div class="row">
            <!-- Content Body -->
            <div class="col-sm-7 edit-form">

			<?php if(get_field('edit_business_form')){  ?>
                <?php the_field('edit_business_form') ?>
			<?php } ?>

			<?php if(get_field('add_more_service')){  ?>
                <a class="add-more-service" href="<?php the_field('add_more_service') ?>"><i class="fa fa-plus"></i> Add More Service</a>
			<?php } ?>
		
            </div>
            <!-- Business Overview -->
	<?php if(get_field('additional_charge_content')){  ?>
            <div class="col-sm-5 additional-charge">
                <div class="charge-box">
                    <p class="add-charge content-head">Additional charge <span class="charge-amount"><?php the_field('additional_charge_amount'); ?></span></p>
                        <?php the_field('additional_charge_content'); ?>
                </div>
            </div>
	<?php } ?>
        </div>
    </div>
</div>

<?php
    endwhile;
endif; 
wp_reset_postdata();
    get_footer();
?>