<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Instant_Repairs
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
<div class="container">
    <div id="content-section">
<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		//
		the_content();
		//
	} // end while
} // end if
?>
    </div>
</div>

<?php
get_footer();
?>
