<?php 

	$bg_img = wp_get_attachment_image_src(get_field('hero_banner_image'), 'hero banner', false);

?>
<div id="section-hero-banner" class="section-hero-banner">
	
	<div class="hero-banner-img hero-banner-lg text-center" style="background-image: url('<?php echo $bg_img[0]; ?>')">
		
		<div class="hero-banner-overlay"></div>
		
		<div class="hero-banner-content">
			
			<?php if ( get_field('hero_banner_top_text') ): ?>
			
				<div class="hero-banner-top-text mb-3 text-white"><?php the_field('hero_banner_top_text'); ?></div>
				
			<?php endif; ?>
						
			<div class="hero-banner-title p-5 text-center">
				
				<h1 class="text-white mb-2"><?php the_field('hero_banner_title'); ?></h1>
				
				<?php if ( get_field('hero_bannertitle') ): ?>
				
					<h5 class="text-white mb-5"><?php the_field('hero_bannertitle'); ?></h5>
					
				<?php endif; ?>
				
				<?php if ( get_field('hero_banner_bottom_text') ): ?>
				
					<h4 class="text-white mb-0"><?php the_field('hero_banner_bottom_text'); ?></h4>
					
				<?php endif; ?>
				
			</div>

			<?php if ( get_field('hero_button') ): ?>
			
				<div class="text-center mt-5">
					<a href="<?php the_field('hero_button_link'); ?>" class="btn btn-secondary btn-lg"><?php the_field('hero_button_label'); ?></a>
				</div>
			
			<?php endif; ?>
			
		</div>
		
	</div>
	
</div>

<?php if ( get_field('include_calendar_bar') ): ?>
	
	<?php get_template_part( 'template-parts/blocks/block', 'calendar-bar' ); ?>
	
<?php endif; ?>
