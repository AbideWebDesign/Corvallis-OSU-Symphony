<div id="section-lead-text" class="section">
	
	<div class="container">
		
		<div class="row justify-content-center">
		
			<div class="col-lg-9">
			
				<div class="lead-text text-center">
					
					<?php if ( get_sub_field('lead_text_title') ): ?>
					
						<h2 class="mb-0"><?php the_sub_field('lead_text_title'); ?></h2>
						
					<?php endif; ?>
					
					<?php if ( get_sub_field('lead_text') ): ?>
					
						<p class="mb-0">
							
							<?php the_sub_field('lead_text'); ?>
							
							<?php if ( get_sub_field('lead_text_button') ): ?>
								
								<br>
								<a href="<?php the_sub_field('lead_text_button_link'); ?>" class="btn btn-secondary mt-5"><?php the_sub_field('lead_text_button_label'); ?></a>
								
							<?php endif; ?>
							
						</p>
					
					<?php else: ?>
					
						<div class="lead-text-spacer"></div>
							
					<?php endif; ?>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div>