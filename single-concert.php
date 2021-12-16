<?php
/**
 * The template for displaying all single concerts.
 *
 * @package abide
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

?>

<div id="single-wrapper">

	<div class="py-4 bg-light">
		
		<div class="container">
			
			<div class="row justify-content-between">
			
				<div class="col-auto align-self-center"><h3 class="mb-0">Concert Details</h3></div>
						
				<div class="col-auto align-self-center"><a href="<?php echo home_url('/concerts-tickets/calendar/'); ?>" class="btn btn-secondary btn-sm">View Concert Calendar</a></div>
									
			</div>
			
		</div>
		
	</div>						
	
	<div class="py-5">
					
		<div class="container">
			
			<div class="row">
				
				<div class="col-12">
								
					<?php while ( have_posts() ) : the_post(); ?>
	
						<?php get_template_part( 'loop-templates/content', 'single-concert' ); ?>
	
					<?php endwhile; // end of the loop. ?>
	
				</div><!-- #main -->
	
			</div><!-- .row -->
	
		</div><!-- #content -->
		
	</div>

</div><!-- #single-wrapper -->

<?php get_footer(); ?>
