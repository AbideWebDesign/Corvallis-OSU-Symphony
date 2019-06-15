<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package abide
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

<div class="wrapper" id="wrapper-footer">

	<div class="container">

		<div class="row">

			<div class="col-12">

				<footer class="site-footer" id="colophon">
					
					<div class="row justify-content-center mb-5">
						
						<div class="col-lg-9">
							
							<?php wp_nav_menu(
								array(
									'theme_location'  => 'footer',
									'menu_id'         => 'footer-menu',
									'depth'           => 1,
								)
							); ?>
							
						</div>
												
					</div> <!-- .row end -->
					
					<div class="row">
						
						<div class="col-md-6 align-self-stretch mb-3 mb-md-0">
							
							<div class="footer-box h-100">
								
								<h4 class="mb-4">Connect with Us</h4>
								
								<ul class="list-inline mb-0 text-center">
									<li class="list-inline-item">
										<a href="https://www.facebook.com/cosusymphony/" target="_blank">
											<span class="fa-stack">
												<i class="fa fa-circle fa-stack-2x"></i>
												<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
											</span>
										</a>
									</li>
									<li class="list-inline-item">
										<a href="https://www.instagram.com/cosusymphony/" target="_blank">
											<span class="fa-stack">
												<i class="fa fa-circle fa-stack-2x"></i>
												<i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
											</span>
										</a>
									</li>
									<li class="list-inline-item">
										<a href="https://twitter.com/COSUsymphony" target="_blank">
											<span class="fa-stack">
												<i class="fa fa-circle fa-stack-2x"></i>
												<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
											</span>
										</a>
									</li>
									<li class="list-inline-item">
										<a href="https://www.youtube.com/results?search_query=corvallis-osu+symphony" target="_blank">
											<span class="fa-stack">
												<i class="fa fa-circle fa-stack-2x"></i>
												<i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
											</span>
										</a>
									</li>
								</ul>
																	
							</div>
														
						</div>
						
						<div class="col-md-6">
								
							<div class="footer-box">
								
								<h4 class="mb-4 mb-md-2">Contact & Directions</h4>
								
								<div class="row justify-content-between">
									
									<div class="col-auto">
										
										<p class="mb-0"><strong>LaSells Stewart Center</strong></p>
										<p class="mb-0">875 SW 26th St, Corvallis, OR 97331</p>
										<p class="mb-0"><a href="<?php echo home_url('/contact-us/parking-directions'); ?>">Parking & Directions <i class="fa fa-caret-right pl-2"></i></a></p>

									</div>
									
									<div class="col-auto align-self-center mt-3 mt-lg-0">
										
										<p class="mb-0"><i class="fa fa-phone pr-2"></i> 541.286.5580</p>
										<p class="mb-0"><i class="fa fa-envelope pr-2"></i> <a href="mailto:office@cosusymphony.org">office@cosusymphony.org</a></p>
										
									</div>
									
								</div>
							
							</div>
							
						</div>
					
					</div> <!-- row end -->
					
					<div class="mt-5 text-center">
						
						<a href="https://oregonstate.edu" target="_blank"><img id="osu-logo" src="<?php echo home_url('/wp-content/themes/abide-child/src/img/logo-osu.png'); ?>" class="img-fluid" /></a>
						
					</div>
					
				</footer><!-- #colophon -->
				

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->
	

</div><!-- wrapper end -->
<div class="site-footer-bottom">
					
	<div class="container">
		
		<div class="row justify-content-center">
			
			<div class="col-auto text-center">
				
				&copy; <?php echo date('Y'); ?> Corvallis-OSU Symphony Society. All Rights Reserved. | <a href="<?php echo home_url('privacy'); ?>">Privacy Policy</a> | Website Design by <a href="https://abidewebdesign.com" target="_blank">Abide Web Design</a> | Ticketing System provided by <a href="https://www.arts-people.com/" target="_blank">Arts People</a>
			
			</div>
			
		</div>
		
	</div>
	
</div>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>
</body>

</html>