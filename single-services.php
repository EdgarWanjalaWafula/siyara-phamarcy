<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Siyara_Phamarcy
 */

get_header();                          

get_template_part( 'template-parts/content', 'pagetitle' );
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <?php
                            while ( have_posts() ) :
                                the_post();

      
                                get_template_part( 'template-parts/content', get_post_type() );

                            endwhile; // End of the loop.
                        ?>
                    </div>

                    <div class="col-md-3">
                        <?php get_sidebar('services'); ?>
                    </div>
                </div>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
