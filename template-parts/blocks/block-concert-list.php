<?php 
	
	$date_now = new DateTime();
	$tz = new DateTimeZone('America/Los_Angeles');
	$date_now->setTimeZone($tz);

	$meta_query = array(
		array(
			'key' => 'date',
			'value' => $date_now->format('Y-m-d H:i:s'),
			'type' => 'DATETIME',
			'compare' => '>'
		)
	);
	
	$args = array (
		'post_type' => 'concert',
		'post_status' => 'publish',
		'meta_query' => $meta_query,
		'meta_key' => 'date',
		'orderby' => 'meta_value',
		'order' => 'ASC',
	);
	
	$upcoming = new WP_Query($args);
	
	$meta_query = array(
		array(
			'key' => 'date',
			'value' => $date_now->format('Y-m-d H:i:s'),
			'type' => 'DATETIME',
			'compare' => '<'
		)
	);
	
	$args = array (
		'post_type' => 'concert',
		'post_count' => 10,
		'post_status' => 'publish',
		'meta_query' => $meta_query,
		'meta_key' => 'date',
		'orderby' => 'meta_value',
		'order' => 'ASC',
	);
	
	$past = new WP_Query($args);

?>

<div id="wrapper-concerts" class="section">
	
	<div class="container">
		
		<div class="row">
			
			<div class="col-12">
				
				<h2 class="pb-4">Upcoming Concerts</h2>
				
			</div>
			
		</div>
		
		<?php if ( $upcoming->have_posts() ): ?>
		
			<?php while ( $upcoming->have_posts() ): $upcoming->the_post(); ?>
			
				<?php $date = new DateTime( get_field('date') ); ?>
				
				<div class="row mb-4">
					
					<div class="col-12 concert-list-item">
						
						<div class="bg-light rounded p-4">
							
							<div class="row align-content-center">
								
								<?php if ( get_field('image', get_the_id()) ): ?>
								
									<div class="col-lg-3 col-md-4 mb-3 mb-md-0">
										
										<?php echo wp_get_attachment_image( get_field('image', get_the_id()), 'concert', false, array('class'=>'img-fluid')); ?>
										
									</div>
								
								<?php endif; ?>
								
								<div class="col-lg-5 col-md-8 align-self-center">
									
									<h3 class="text-center text-md-left mb-4"><?php echo $date->format('F d, Y'); ?> | <?php echo $date->format('h:i A'); ?></h3>
									
									<?php while ( have_rows('titles') ): the_row(); ?>
										
										<h4><?php the_sub_field('title'); ?></h4>
										<p class="text-muted"><?php the_sub_field('description'); ?></p>
								
									<?php endwhile; ?>
																			
								</div>
								
								<div class="col-lg-auto col-md-auto offset-md-4 ml-lg-auto align-self-center mt-3 mt-lg-0 text-center text-md-left">
									<a target="_blank" href="<?php the_field('tickets_link'); ?>" class="btn btn-primary btn-sm"><?php the_field('tickets_button_label'); ?></a> 
								</div>
								
							</div>
							
						</div>
						
					</div>
					
				</div>
				
			<?php endwhile; ?>
			
		<?php else: ?>
		
			<h4>No Upcoming Concerts Scheduled</h4>
		
		<?php endif; ?>
		
		<?php wp_reset_postdata(); ?>
		
		<div class="row">
			
			<div class="col-12">
				
				<h2 class="py-4">Past Concerts</h2>
				
			</div>
			
		</div>
		
		<?php if ( $past->have_posts() ): ?>
		
			<?php while ( $past->have_posts() ): $past->the_post(); ?>
			
				<?php $date = new DateTime( get_field('date') ); ?>
				
				<div class="row mb-4">
					
					<div class="col-12 concert-list-item">
						
						<div class="bg-light rounded p-4">
							
							<div class="row align-content-center">
								
								<?php if ( get_field('image', get_the_id()) ): ?>
								
									<div class="col-lg-3 col-md-4 mb-3 mb-md-0">
										
										<?php echo wp_get_attachment_image( get_field('image', get_the_id()), 'concert', false, array('class'=>'img-fluid')); ?>
										
									</div>
								
								<?php endif; ?>
								
								<div class="col-lg-5 col-md-8 align-self-center">
									
									<h3 class="text-center text-md-left mb-4"><?php echo $date->format('F d, Y'); ?> | <?php echo $date->format('h:i A'); ?></h3>
									
									<?php while ( have_rows('titles') ): the_row(); ?>
										
										<h4><?php the_sub_field('title'); ?></h4>
										<p class="text-muted"><?php the_sub_field('description'); ?></p>
								
									<?php endwhile; ?>
																			
								</div>
								
							</div>
							
						</div>
						
					</div>
					
				</div>
				
			<?php endwhile; ?>
		
		<?php endif; ?>
		
		<?php wp_reset_postdata(); ?>	
			
	</div>
	
</div>