<?php if ( have_rows('blocks') ): ?>

	<?php while ( have_rows('blocks') ): the_row(); ?>
		
		<?php if ( get_row_layout() == 'hero_banner' ): ?>

			<?php get_template_part( 'template-parts/blocks/block', 'hero-banner' ); ?>
		
		<?php endif; ?>
		
		<?php if ( get_row_layout() == 'breadcrumb' ): ?>

			<?php get_template_part( 'template-parts/blocks/block', 'breadcrumb' ); ?>
		
		<?php endif; ?>
		
		<?php if( get_row_layout() == 'lead_text' ): ?>

			<?php get_template_part( 'template-parts/blocks/block', 'lead-text' ); ?>
		
		<?php endif; ?>
		
		<?php if( get_row_layout() == 'card' ): ?>

			<?php get_template_part( 'template-parts/blocks/block', 'card' ); ?>
		
		<?php endif; ?>
		
		<?php if( get_row_layout() == 'concert_list' ): ?>

			<?php get_template_part( 'template-parts/blocks/block', 'concert-list' ); ?>
		
		<?php endif; ?>
		
		<?php if( get_row_layout() == 'list_group' ): ?>

			<?php get_template_part( 'template-parts/blocks/block', 'list-group' ); ?>
		
		<?php endif; ?>
		
		<?php if( get_row_layout() == 'basic_content' ): ?>

			<?php get_template_part( 'template-parts/blocks/block', 'basic-content' ); ?>
		
		<?php endif; ?>
		
		<?php if( get_row_layout() == 'call_out' ): ?>

			<?php get_template_part( 'template-parts/blocks/block', 'call-out' ); ?>
		
		<?php endif; ?>
			
	<?php endwhile; ?>
	
<?php endif; ?>
