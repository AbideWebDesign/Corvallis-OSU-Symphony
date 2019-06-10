<div id="wrapper-breadcrumb" class="pt-5 <?php echo (get_sub_field('breadcrumb_background_color') == 'Gray' ? 'bg-light' : ''); ?>">
	
	<div class="container">
		
		<div class="row">
		
			<div class="col">
				
				<?php if ( function_exists('yoast_breadcrumb') ): ?>
				
					<?php yoast_breadcrumb( '<p id="breadcrumbs" class="mb-0">','</p>' ); ?>
					
				<?php endif; ?>
				
			</div>
			
		</div>
		
	</div>
	
</div>