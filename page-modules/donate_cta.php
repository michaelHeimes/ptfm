<section class="donate-cta module" style="background-image: url(<?php the_field('donate_cta_background_image', 'option')?>);">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">

			<div class="cta-donate cell small-12 tablet-10 tablet-offset-1 large-8 large-offset-2">
				<a class="inner" href="<?php the_field('donate_cta_page', 'option');?>" target="_blank">
					<div class="grid-container">
					<div class="grid-x grid-padding-x">
						<div class="cell shrink grid-x">
							<?php 
							$image = get_field('donate_cta_accent_icon', 'option');
							if( !empty( $image ) ): ?>
							    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>
						</div>
						
						<div class="text-wrap cell auto">
							<h3><?php the_field('donate_cta_large_text', 'option');?></h3>
							<p><?php the_field('donate_cta_small_text', 'option');?></p>
						</div>
						
						<div class="arrow-box cell shrink grid-x">
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
			
		</div>
	</div>		
</section>