<section class="siyara-page-title position-relative d-flex align-items-end" style="background-image: url('<?php echo wp_get_attachment_image_url('29', 'full'); ?>')">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-white">
                <h2><?php
                    if(is_archive()): 
                        echo "Shop"; 
                    else: 
                        echo the_title(); 
                    endif; 
                ?></h2>
                <?php do_action('dbp_show_bread_crumb'); ?>
            </div>
        </div>
    </div>
</section>