<?php
/**
 * Single post partial template.
 *
 * @package abide
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$date = new DateTime( get_field('date') ); 

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="entry-content">
		
		<div class="row justify-content-between">
			
			<div class="col-md-4 col-lg-5 col-xl-5 col-md-4 mb-3 mb-md-0">					
				
				<?php if ( get_field('image') ): ?>
								
					<?php echo wp_get_attachment_image( get_field('image'), 'large', false, array('class'=>'img-fluid')); ?>
					
				<?php endif; ?>
				
			</div>
			
			<div class="col-lg-7 col-xl-7 align-self-center">
				
				<?php the_title( '<h1 class="entry-title mb-2">', '</h1>' ); ?>
				
				<h5 class="text-center text-md-left mb-3"><?php echo $date->format('F d, Y'); ?> | <?php echo $date->format('h:i A'); ?></h5>
				
				<?php while ( have_rows('titles') ): the_row(); ?>
					
					<p class="lead mb-1"><?php the_sub_field('title'); ?></p>
					
					<p class="mb-4 text-muted"><?php the_sub_field('description'); ?></p>
			
				<?php endwhile; ?>
				
				<div class="mb-3"><a target="_blank" href="<?php the_field('tickets_link'); ?>" class="btn btn-primary btn-sm"><?php the_field('tickets_button_label'); ?></a></div>
														
			</div>
			
		</div>

	</div><!-- .entry-content -->

</article><!-- #post-## -->