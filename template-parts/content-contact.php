<section class="contact-form-details">
    <div class="row">
        <div class="col-md-4">
            <?php 
                if(get_field('contact_information')){

                    $i = 0; 
                    
                    while(have_rows('contact_information')): the_row(); 
                        
                        $i++; 
                        
                        ?>
                            <div class="contact-card aos-animate d-flex align-items-center" data-aos="fade-left" data-aos-delay="<?php echo ($i * 2); ?>00">
                                <div class="contact-content">
                                    <h6><?php the_sub_field('contact_heading'); ?></h6>
                                    <span>
                                        <?php 
                                            $string = str_replace('','', get_sub_field('contact_content'));
                                            // var_dump($string); 

                                            if($string === "info@giftedcommunitypwd.org"){
                                                ?>
                                                    <span><a href="mailto:<?php echo get_sub_field('contact_content'); ?>"><?php get_sub_field('contact_content') ?></a></span>
                                                <?php 
                                            } else {
                                                echo get_sub_field('contact_content'); 
                                            }
                                        ?></span>
                                </div>
                            </div>
                        <?php 
                    endwhile; 
                } else {
                    echo ""; 
                }
            ?>
        </div>

        <div class="col-md-8">
            <div class="contact-form">
                <h5>Send us a <span>message</span></h5>
                &nbsp; 
                <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>
            </div>
        </div>
    </div>
</section>

            </div> 
            </main> 

<div class="map mt-4">
    <?php echo the_field('map_location'); ?>
</div>