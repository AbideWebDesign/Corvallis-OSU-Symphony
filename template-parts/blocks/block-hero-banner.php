<?php 

	$bg_img = wp_get_attachment_image_src(get_sub_field('hero_banner_image'), 'hero banner sm', false);
	
	if (!$bg_img) {
		
		$bg_img = wp_get_attachment_image_src(315, 'hero banner sm', false);
		
	}

?>
<div id="section-hero-banner-block" class="section-hero-banner">
	
	<div class="hero-banner-img hero-banner-lg text-center" style="background-image: url('<?php echo $bg_img[0]; ?>')">
		
		<div class="hero-banner-overlay"></div>
		
		<div class="hero-banner-content">
						
			<div class="hero-banner-title py-3 text-center">
				
				<h1 class="text-white mb-0">
					
					<?php if ( get_sub_field('hero_banner_title') ): ?>
						
						<?php the_sub_field('hero_banner_title'); ?>
						
					<?php else: ?>
					
						<?php the_title(); ?>
						
					<?php endif; ?>
				
				</h1>
				
				
				<?php if ( get_sub_field('hero_banner_bottom_text') ): ?>
				
					<p class="lead text-white mt-4 mb-0"><?php the_sub_field('hero_banner_bottom_text'); ?></p>
					
				<?php endif; ?>
				
			</div>
			
			<?php if ( get_sub_field('hero_button') ): ?>
			
				<?php $link = get_sub_field('hero_button_link'); ?>
				
				<div class="text-center mt-4">
					<a href="<?php echo $link['url']; ?>" class="btn btn-secondary btn-lg" target="<?php echo $link['target']; ?>"><?php the_sub_field('hero_button_label'); ?></a>
				</div>
			
			<?php endif; ?>
			
		</div>
		
	</div>
	
</div>