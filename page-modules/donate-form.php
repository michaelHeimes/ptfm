<section class="contact module">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			
			<div class="left cell small-12 tablet-4 show-for-tablet">
				
				<div class="location-wrap">					
					<div class="copy-wrap">
						<?php the_sub_field('copy');?>
					</div>
				</div>
				
			</div>			
			
			<div class="right cell small-12 tablet-7 tablet-offset-1">
					
				<?php 
				$form_id = get_sub_field('give_form_id');
					echo do_shortcode( '[give_form id="' . $form_id . '"]' );
				?>
				
			</div>
			
			
		</div>
	</div>
</section>