<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
	
	<?php $banner_style = get_field('banner_style');?>	
						
	<?php if ($banner_style == 'home-page' ):?>			
	
		<?php if( have_rows('home_banner') ):?>
			<?php while ( have_rows('home_banner') ) : the_row();?>
			
			<?php $image = get_sub_field('image');?>
	
			<header class="article-header banner style-<?php echo $banner_style;?>">

					<div class="bg" style="background-image: url(<?php echo esc_url($image['url']); ?>);"></div>
<!-- 					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /> -->
					    		    
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
												
							<div class="cell small-8 tablet-6">
								<h1><?php the_sub_field('heading');?></h1>
							</div>
							
							<?php if( have_rows('cta') ):?>
							<div class="cta-donate cell small-12 tablet-10 tablet-offset-1 large-8 large-offset-2">
								<?php while ( have_rows('cta') ) : the_row();?>	
								<a class="inner" href="<?php the_sub_field('link');?>" target="_blank">
									<div class="grid-container">
									<div class="grid-x grid-padding-x">
										<div class="cell shrink grid-x">
											<?php 
											$image = get_sub_field('accent_icon');
											if( !empty( $image ) ): ?>
											    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
											<?php endif; ?>
										</div>
										
										<div class="text-wrap cell auto">
											<h3 class="black-weight"><?php the_sub_field('large_text');?></h3>
											<p><?php the_sub_field('small_text');?></p>
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
							
								<?php endwhile;?>
							</div>
							<?php endif;?>
							
							<div class="copy-box cell small-12 tablet-10 tablet-offset-1 large-8 large-offset-2">
								<div class="inner">
									<?php the_sub_field('box_copy');?>
									
									
									<?php 
									$link = get_sub_field('box_link');
									if( $link ): 
									    $link_url = $link['url'];
									    $link_title = $link['title'];
									    $link_target = $link['target'] ? $link['target'] : '_self';
									    ?>
									    <a class="lm-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
									<?php endif; ?>

								</div>
							</div>			
							
						</div>
					</div>

			</header> <!-- end article header -->	
			
			<?php endwhile;?>
		<?php endif;?>			
	
	
	<?php elseif( $banner_style == 'image-overlap' ):?>
		<?php if( have_rows('image_overlap_banner') ):?>
			<?php while ( have_rows('image_overlap_banner') ) : the_row();?>
	
			<header class="article-header banner style-<?php echo $banner_style;?>">
				<div class="top" style="background-image: url(<?php the_field('background_image');?>)">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">	
							
							<?php if( $alt_heading = get_sub_field('alternative_heading') ):?>
								<div class="cell">
									<h1 class="page-title"><?php echo $alt_heading; ?></h1>
								</div>
							<?php else:?>
								<div class="cell">
									<h1 class="page-title"><?php the_title(); ?></h1>
								</div>
							<?php endif;?>
							
						</div>
					</div>
				</div>
				
				<div class="bottom">
					<div class="grid-container">
						<div class="inner grid-x grid-padding-x">	
					
							<div class="left cell small-12 medium-6">
							
								<?php the_sub_field('copy');?>
								
							</div>
							
							<div class="right cell small-12 medium-6">
								<div class="inner">
								
									<?php 
									$image = get_sub_field('image');
									if( !empty( $image ) ): ?>
									<div class="banner-img-wrap">
									    <img class="banner-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />	

											<?php 
											$image = get_sub_field('accent_icon');
											if( !empty( $image ) ): ?>
											<div class="logo-wrap">
												<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
											</div>
											<?php endif; ?>
												
									</div>
									<?php endif; ?>		

								</div>
							</div>
				
						</div>
					</div>
				</div>
								
			</header> <!-- end article header -->
			
			<?php endwhile;?>
		<?php endif;?>
	
	
	<?php elseif( $banner_style == 'just-title' ):?>
	
	<header class="article-header banner style-<?php echo $banner_style;?>">
		<div class="top" style="background-image: url(<?php the_field('background_image');?>)">
			<div class="grid-container">
				<div class="grid-x grid-padding-x">	
					<div class="cell">
						<div class="text-wrap">
	
							<?php if( $alt_heading = get_sub_field('alternative_heading') ):?>
					
								<h1 class="page-title"><?php echo $alt_heading; ?></h1>
					
							<?php else:?>
							
								<h1 class="page-title"><?php the_title(); ?></h1>
								
							<?php endif;?>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</header> <!-- end article header -->

	<?php endif;?>
				

	
	<section class="entry-content" itemprop="text">
	    <?php the_content(); ?>
	    
	    <?php get_template_part( 'parts/loop', 'modules' ); ?>
	    
	</section> <!-- end article section -->
						    					
</article> <!-- end article -->