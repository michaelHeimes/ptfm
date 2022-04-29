<section class="image-left-copy-right module">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			
			<div class="left cell small-12 tablet-5 xlarge-4">
				<div class="inner">
				<?php 
				$image = get_sub_field('image');
				if( !empty( $image ) ): ?>
				    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>					
				</div>
			</div>
		
			<div class="right cell small-12 tablet-7 xlarge-offset-1">
				<div class="inner">
					<h2><?php the_sub_field('heading');?></h2>
					<?php the_sub_field('copy');?>
					
					<?php if( have_rows('cta_button') ):?>
						<?php while ( have_rows('cta_button') ) : the_row();?>	
						<div class="cta">
							<a href="<?php the_sub_field('link');?>" target="_blank">
								<div class="grid-container">
									<div class="grid-x grid-padding-x">
										
										<div class="left cell shrink grid-x align-middle">
											<div class="cell">
												<h3><?php the_sub_field('large_text');?></h3>
												<p><?php the_sub_field('small_text');?></p>				
											</div>									
										</div>
										
										<div class="right cell shrink grid-x align-middle">
											<svg width="46px" height="32px" viewBox="0 0 46 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
											    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											        <g id="right-arrow" transform="translate(0.000000, 1.591000)" stroke="#FFFFFF" stroke-width="4.5">
											            <g id="Group_95" transform="translate(0.000000, 13.552000)">
											                <line x1="0" y1="0.5" x2="41.452" y2="0.5" id="Line_1088"></line>
											            </g>
											            <polyline id="Path_35" points="27.773 0 41.825 14.052 27.773 28.1"></polyline>
											        </g>
											    </g>
											</svg>
										</div>
				
									</div>
								</div>
							</a>
						</div>						
						<?php endwhile;?>
					<?php endif;?>	
					
				</div>
			</div>		
		
		</div>
	</div>
</section>