<div id="section-call-out" class="bg-secondary">
	
	<div class="container">

		<div class="row justify-content-center">
			
			<div class="col-md-7 col-lg-6">
				
				<h2 class="text-white"><?php the_sub_field('call_out_text'); ?></h2>
				
			</div>
			
			<div class="col-md-5 col-lg-4 align-self-center">
				
				
				<?php $link = get_sub_field('call_out_button_link'); ?>
				
				<a href="<?php echo $link['url']; ?>" class="btn btn-lg btn-light" target="<?php echo $link['target']; ?>"><?php the_sub_field('call_out_button_label'); ?></a>
				
			</div>
			
		</div>
		
	</div>

</div>