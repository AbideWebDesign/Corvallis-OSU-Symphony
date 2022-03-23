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
<div class="wrapper bg-light py-5" id="wrapper-social">
	
	<div class="container">
		
		<div class="row justify-content-between">
			
			<div class="col-md-8 col-xl-7 mb-md-3">
				
				<a href="https://www.instagram.com/cosusymphony/" target="_blank">
						
					<span class="fa-stack">
					
						<i class="fa fa-circle fa-stack-2x"></i>
					
						<i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
					
					</span>
					
					Instagram	
			
				</a>
					
				<?php echo do_shortcode('[instagram-feed feed=1]'); ?>
				
			</div>
			
			<div class="col-md-4 col-xl-4">
				
				<div class="mb-3">
					
					<a href="https://twitter.com/COSUsymphony" target="_blank">
						
						<span class="fa-stack">
						
							<i class="fa fa-circle fa-stack-2x"></i>
						
							<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
						
						</span>
						
						Twitter	
				
					</a>
										
				</div>
				
				<?php $tweets = getTweets(1); ?>
							
				<div id="tweet" class="mb-4">
					
					<?php echo $tweets[0]['text']; ?>
					
					<div id="tweet-meta" class="mt-3">
					
						<a href="https://twitter.com/COSUSymphony/status/<?php echo $tweets[0]['id'] ?>" target="_blank">
					
							<?php echo '<span>'.humanTiming(strtotime($tweets[0]['created_at'])) . ' ago</span>'; ?>
					
						</a> /
					
						<a href="https://twitter.com/intent/retweet?tweet_id=<?php echo $tweets[0]['id'] ?>"><?php _e('Retweet'); ?></a>
					
					</div>
				
				</div>
				
				<div class="">

					<div class="mb-3">
						
						<a href="https://www.facebook.com/cosusymphony/" target="_blank">
						
							<span class="fa-stack">
						
								<i class="fa fa-circle fa-stack-2x"></i>
						
								<i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
						
							</span>
							
							Youtube
						
						</a>
				
					</div>
					
					<div class="embed-responsive embed-responsive-16by9">
					
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/videoseries?list=PLCqkk-Rs0jOSBedoc1WqHIlJuF62AbSsh" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						
					</div>
									
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div>

<div class="py-4">
	
	<div class="container">
		
		<div class="row justify-content-center">
			
			<div class="col">
				
				<div class="text-center">
					
					<div class="row justify-content-center">
						
						<?php while ( have_rows('sponsor_logos', 'options') ): the_row(); ?>
							
							<div class="col-6 col-md-3 col-lg-auto align-self-center mb-2">
								
								<div class="p-2 px-lg-5 rounded">
									
									<?php if ( get_sub_field('link') ): ?><a href="<?php the_sub_field('link'); ?>" target="_blank"><?php endif; ?>
									
									<?php if ( get_sub_field('type') == 'Landscape' ): ?>
																		
										<?php echo wp_get_attachment_image( get_sub_field('logo'), 'medium', false, array('class'=>'img-fluid', 'style'=>'max-width: 180px') ); ?>
										
									<?php else: ?>
									
										<?php echo wp_get_attachment_image( get_sub_field('logo'), 'medium', false, array('class'=>'img-fluid', 'style'=>'max-width: 100px') ); ?>
									
									<?php endif; ?>
									
									<?php if ( get_sub_field('link') ): ?></a><?php endif; ?></div>
									
								</div>
						
						<?php endwhile; ?>
						
					</div>
						
				</div>
				
			</div>
		
		</div>
		
	</div>

</div>

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
										
										<p class="mb-0"><strong><?php the_field('footer_address_name', 'options'); ?></strong></p>
										<p class="mb-0"><?php the_field('footer_address', 'options'); ?></p>
										
										<?php if ( get_field('include_directions') ): ?>
										
											<p class="mb-0"><a href="<?php echo home_url('/contact-us/parking-directions'); ?>">Parking & Directions <i class="fa fa-caret-right pl-2"></i></a></p>
											
										<?php endif; ?>

									</div>
									
									<div class="col-auto align-self-center mt-3 mt-lg-0">
										
										<p class="mb-0"><i class="fa fa-phone pr-2"></i> <?php the_field('phone', 'options'); ?></p>
										<p class="mb-0"><i class="fa fa-envelope pr-2"></i> <a href="<?php the_field('email', 'options'); ?>"><?php the_field('email', 'options'); ?></a></p>
										
									</div>
									
								</div>
							
							</div>
							
						</div>
					
					</div> <!-- row end -->
										
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