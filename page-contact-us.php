<?php
/**
 * The template for displaying terms and conditions, privacy policies and other pages that dont require styling. 
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
                    <div class="col-md-12">
                        <?php
                            while ( have_posts() ) :
                                the_post();

                                get_template_part( 'template-parts/content', 'contact' );

                            endwhile; // End of the loop.
                        ?>
                    </div>
                </div>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
