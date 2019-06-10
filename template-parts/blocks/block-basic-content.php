<div class="section-basic-content section bg-light">
	
	<div class="container">
		
		<div class="row justify-content-center bg-white">
			
			<div class="col-lg-10 py-5">
			
				<?php if ( get_sub_field('basic_content_heading') ): ?>
				
					<h2 class="mb-5 text-center"><?php the_sub_field('basic_content_heading'); ?></h2>
				
				<?php endif; ?>
			
				<?php the_sub_field('basic_content'); ?>
				
				<?php if ( get_sub_field('include_button') ): ?>
				
					<?php $link = get_sub_field('basic_content_button_link'); ?>
					
					<div class="mt-5 text-center">
						
						<a href="<?php echo $link['url']; ?>" class="btn btn-secondary btn-lg" target="<?php echo $link['target']; ?>"><?php the_sub_field('basic_content_button_label'); ?></a>
				
					</div>	
					
				<?php endif; ?>
				
			</div>
			
		</div>
		
	</div>
	
</div>