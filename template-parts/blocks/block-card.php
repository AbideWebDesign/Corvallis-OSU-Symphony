<?php $text_column = get_sub_field('text_column'); ?>
<?php $other_column = get_sub_field('other_column'); ?>
<?php $image = $other_column['card_image']; ?>
<?php $type = get_sub_field('card_type'); ?>

<div id="section-card" class="section">
	
	<div class="container">
		
		<div class="row justify-content-between align-items-center <?php echo ( get_sub_field('card_direction') == 'Right' ? 'flex-row-reverse' : '' ); ?>">
		
			<div class="<?php echo ($type == 'image' ? 'col-lg-5' : 'col-md-7'); ?>">
			
				<div class="card-content mb-4 mb-lg-0 <?php echo ( get_sub_field('card_direction') == 'Right' ? 'right' : '' ); ?>">
			
					<div class="card-label"><?php echo $text_column['card_subtitle']; ?></div>
			
					<h2 class="card-title"><?php echo $text_column['card_title']; ?></h2>
					<p><?php echo $text_column['card_text']; ?></p>
					
					<?php if ( $text_column['card_link_label'] ): ?>
					
						<a href="<?php echo $text_column['card_link']; ?>"><?php echo $text_column['card_link_label']; ?></a>
					
					<?php endif; ?>
				
				</div>
			
			</div>
			
			<div class="<?php echo ($type == 'image' ? 'col-lg-6' : 'col-md-5 col-xl-4'); ?>">
				
				<?php if ( $type == 'image' ): ?>
				
					<?php if ( $text_column['card_link_label'] ): ?>
					
						<a href="<?php echo $text_column['card_link']; ?>"><?php echo wp_get_attachment_image($image, 'col-6', false, array('class'=>'img-fluid rounded')); ?></a>
						
					<?php else: ?>
					
						<?php echo wp_get_attachment_image($image, 'col-6', false, array('class'=>'img-fluid rounded')); ?>
					
					<?php endif; ?>
					
				<?php elseif ( $type == 'buttons' ): ?>
				
					<ul class="list-unstyled m-0">
						
						<?php while ( have_rows('other_column') ): the_row() ?>
							
							<?php while ( have_rows('card_buttons') ): the_row(); ?>
							
								<li><a href="<?php the_sub_field('card_button_link'); ?>" class="btn btn-block btn-<?php the_sub_field('card_button_color'); ?>"><?php the_sub_field('card_button_label'); ?></a></li>
								
							<?php endwhile; ?>
						
						<?php endwhile; ?>
						
					</ul>
				
				<?php endif; ?>
				
			</div>
			
		</div>
		
	</div>
	
</div>