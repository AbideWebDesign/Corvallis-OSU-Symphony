<div id="section-call-out" class="bg-secondary">
	
	<div class="container">

		<div class="row justify-content-center align-items-center">
			
			<?php if ( get_sub_field('call_out_type') == 'Default' ): ?>
			
				<div class="col-md-7 col-lg-8">
					
					<h2 class="text-white mb-0"><?php the_sub_field('call_out_text'); ?></h2>
					
				</div>
				
				<div class="col-md-5 col-lg-4 align-self-center">
					
					<?php $link = get_sub_field('call_out_button_link'); ?>
					
					<a href="<?php echo $link['url']; ?>" class="btn btn-lg btn-light" target="<?php echo $link['target']; ?>"><?php the_sub_field('call_out_button_label'); ?></a>
					
				</div>
				
			<?php else: ?>
			
				<div class="col-lg-10">
					
					<h3 class="text-white"><?php the_sub_field('call_out_text'); ?></h3>
					
					<?php if ( get_sub_field('call_out_quote_name') ): ?>
						
						<p class="text-white"><strong>- <?php the_sub_field('call_out_quote_name'); ?></strong></p>
						
					<?php endif; ?>
					
				</div>
			
			<?php endif; ?>
			
		</div>
		
	</div>

</div>