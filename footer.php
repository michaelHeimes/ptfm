<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
					
				<footer class="footer" role="contentinfo">
					
					<div class="inner-footer grid-x grid-padding-x">
						<div class="cell small-12 tablet-10 tablet-offset-1 large-8 large-offset-2">
							<h2>Sign up for <strong>Updates</strong></h2>
							<?php gravity_form( 1, false, false, false, '', true );?>
						</div>
						<div class="cell">
							<nav role="navigation">
	    						<?php joints_footer_links(); ?>
	    					</nav>
	    				</div>
					</div> <!-- end #inner-footer -->
						
					<div class="bottom grid-x grid-padding-x align-middle">
						<div class="left cell small-12 medium-shrink">
							<?php joints_social_links(); ?>
						</div>
						<div class="right cell small-12 medium-auto small">
								<p class="source-org copyright">&copy;Copyright <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | <a href="https://proprdesign.com/" target="_blank">Made by Propr Design</a></p>
						</div>						
					</div>
				
				</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>
		
	</body>
	
</html> <!-- end page -->