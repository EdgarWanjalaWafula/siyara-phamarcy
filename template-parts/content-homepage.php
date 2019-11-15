<section class="landing-slider">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-md-6">
                <div class="d-flex align-items-center h-100">
                    <div class="card rounded-0 border-0">
                        <ul class="d-flex p-0 list-unstyled tag-line text-uppercase">
                            <?php 
                                if(have_rows('tag_line')): 
                                    while(have_rows('tag_line')): the_row(); 
                                        ?>
                                            <li><span><?php echo the_sub_field('tag_line'); ?></span></li>
                                        <?php 
                                    endwhile; 
                                endif; 
                            ?> 
                        </ul> 

                        <!-- Who we are -->
                        <div class="who-we-are text-justify">
                            <?php echo the_field('who_we_are'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-section">
        <div class="slider position-relative">
            <div class="owl-carousel owl-theme slider-content">
                <?php 
                    if(have_rows('homepage_slider')): 
                        while(have_rows('homepage_slider')): the_row(); 
                            ?>
                                <div class="slider-item position-relative">
                                    <img src="<?php echo the_sub_field('background_image'); ?>" alt="">
                                </div>
                            <?php 
                        endwhile; 
                    endif;
                    wp_reset_postdata(); 
                ?> 
            </div>
        </div>
    </div>
</section>

<div class="our-services bg-light">
    <div class="container">
        <div class="row">
            <?php 
                $services = array(
                    'post_type' =>  'services', 
                    'posts_per_page' =>  '-1', 
                );

                $i = 0; 
                $active = ""; 

                $loop = new wp_query($services);
                    ?>
                        <div class="col-md-4">
                            <div class="nav h-100 flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <?php 
                                                                
                                    // Lets loop titles first then the content
                                    while($loop->have_posts()): $loop->the_post(); 
                                        ?>
                                            <a class="nav-link text-white position-relative d-flex align-items-center text-uppercase" id="v-pills-<?php echo the_id(); ?>-tab" data-toggle="pill" href="#v-pills-<?php echo the_id(); ?>" role="tab" aria-controls="v-pills-<?php echo the_id(); ?>" aria-selected="true"> <i class="icon ion-ios-arrow-round-forward"></i><?php echo the_title(); ?></a>
                                        <?php 
                                    endwhile; 
                                ?>
                            </div> 
                        </div>  

                        <div class="col-md-8">
                            <div class="tab-content" id="v-pills-tabContent">
                                <h2><?php echo esc_html('Our Services') ?></h2>
                                
                                <?php                                 
                                    // Lets loop titles first then the content
                                    while($loop->have_posts()): $loop->the_post(); 
                                        $i++; 

                                        ?>
                                            <div class="tab-pane fade show <?php echo $active = ($i==1) ? 'active show': ''; ?>" id="v-pills-<?php echo the_id(); ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo the_id(); ?>-tab">
                                                <h5 class="siyara-color"><?php echo the_title(); ?></h5>
                                                
                                                <div class="service-content d-block mb-4">
                                                    <?php 
                                                        echo wp_trim_words(get_the_content(), '50', ''); 
                                                    ?>  
                                                </div>

                                                <!-- Read more  -->
                                                <a class="section-link" href="<?php echo the_permalink(); ?>">Read More</a>
                                            </div>
                                        <?php 
                                    endwhile; 
                                ?>
                               
                            </div>
                        </div>
                    <?php 
                //

                wp_reset_postdata(); 
            ?>
        </div>
    </div>
</div>

<section class="background-parallax"  style="background-image:url('<?php echo the_field('background_parallax'); ?>')">

</section>