<section class="partner-rows module">
	<div class="grid-container">

		<div class="partners-wrap">
		<?php if( have_rows('partner_rows') ):?>
			<?php while ( have_rows('partner_rows') ) : the_row();?>
	
				<?php if( have_rows('single_row') ):?>
					<?php while ( have_rows('single_row') ) : the_row();?>	
					
					<div class="single-row grid-x grid-padding-x">
					
						<div class="left cell small-12 medium-5">							
							<?php 
							$image = get_sub_field('logo');
							if( !empty( $image ) ): ?>
							    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>						
							
						</div>
		
						<div class="right cell small-12 medium-7">
							<div class="inner">
								<div class="pipe"></div>
								<?php the_sub_field('copy');?>
							</div>
						</div>
					
					</div>
				
					<?php endwhile;?>
				<?php endif;?>
			
			<?php endwhile;?>
		<?php endif;?>
		</div>
		
	</div>
</section>