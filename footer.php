<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Siyara_Phamarcy
 */

?>

	</div><!-- #content -->
	<div class="bottom-section">
		
		<footer id="colophon" class="site-footer">
			<div class="site-info text-white">
				<div class="container">
					<div class="row">
							<div class="col-md-5"></div>
							<div class="col"></div>
							<div class="col"></div>
							<div class="col contact-us-cta">
								<a class="btn w-100 text-uppercase rounded-0 d-flex align-items-center justify-content-center" href="<?php echo home_url('contact-us'); ?>"><i class="icon ion-ios-send"></i>&nbsp;Contact Us</a>
							</div>
					</div>
					<div class="row">
						<div class="col-md-5">
							<div class="footer-excerpt">
							<h4 class="text-uppercase"><?php echo esc_html('About Us'); ?></h4>
							<p>We are community based pharmacy outlets. We value intimate relationship between pharmacist and customer. We give you professional, personal attention, privacy and trust.</p>
							</div>
						</div>
						<div class="col">
							<h4 class="text-uppercase"><?php echo esc_html('The Phamarcy'); ?></h4>
							<?php
								wp_nav_menu( array(
									'theme_location' => 'menu-2',
									'menu_id'        => 'secondary-menu',
									'menu_class'        => 'list-unstyled m-0 p-0',
								) );
							?>
						</div>
						<div class="col">
							<h4 class="text-uppercase"><?php echo esc_html('Services'); ?></h4>
							<?php 
								$services = array(
									'post_type' =>  'services', 
									'posts_per_page' =>  '-1', 
								);

								$loop = new wp_query($services);
									?>
										<ul class="list-unstyled m-0 p-0">
											<?php 
												// Lets loop titles first then the content
												while($loop->have_posts()): $loop->the_post(); 
													?>
														<li><a class="text-white" href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></li>
													<?php 
												endwhile; 
											?>
										</ul>
									<?php 
							?>
						</div>
						<div class="col">
							<h4 class="text-uppercase"><?php echo esc_html('Policies'); ?></h4>
							<?php
								wp_nav_menu( array(
									'theme_location' => 'menu-3',
									'menu_id'        => 'secondary-menu',
									'menu_class'        => 'list-unstyled m-0 p-0',
								) );
							?>
						</div>
					</div>
				</div>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->

		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-12 small text-center py-3">
						&copy; Siyara Phamarcy 2019 | Built by <a class="siyara-color" href="www.legibra.com">Legibra</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
