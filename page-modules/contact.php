<section class="contact module">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			
			<div class="left cell small-12 tablet-4 show-for-tablet">
				
				<div class="location-wrap">					
					<div class="copy-wrap">
						<h2>Press</h2>
						<a href="mailto:<?php the_sub_field('press_email');?>"><?php the_sub_field('press_email');?></a>
					</div>
				</div>
				
			</div>			
			
			<div class="right cell small-12 tablet-7 tablet-offset-1">
	
				<h2>Get In Touch</h2>
				
				<?php gravity_form( 2, false, false, false, '', true );?>
				
			</div>
			
			
		</div>
	</div>
</section>