<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Instant_Repairs
 */

get_header(); ?>

		<!-- Search-bar Section 
    ============================== -->
    <div class="container-fluid">
        <div id="search-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 search-bar">
                    	
                    	<?php echo do_shortcode( '[searchandfilter taxonomies="business_category,business_location"]' ); ?>
                    	
                    </div>
                </div>
            </div>
        </div>
    </div>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'instant-repairs' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
