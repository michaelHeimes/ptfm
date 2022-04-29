<?php
	$num_posts = get_sub_field('number_of_post_to_show');
	$press_cat = get_sub_field('category_to_show');
?>

<section class="recent-press module green-bg<?php if ( $num_posts == 'all' ):?> all-posts<?php endif;?>">
	<div class="grid-container">
		
		<div class="grid-x grid-padding-x align-middle">

			<div class="cell auto text-center">					
					<div class="heading-wrap">
						<h2><a href="/stories">
							<?php 
							$image = get_sub_field('accent_icon');
							if( !empty( $image ) ): ?>
								<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>

							Recent Stories</a>
						</h2>
					</div>			
			</div>
		</div>
	
		<div class="press-wrap grid-x grid-padding-x small-up-1 tablet-up-2">

		<?php
										
		if ( $press_cat != false) {
		    $args = array(  
		        'post_type' => 'story',
		        'post_status' => 'publish',
		        'posts_per_page' => $num_posts, 
				'tax_query' => array(
				    array(
				    'taxonomy' => 'story_type',
				    'field' => 'term_id',
				    'terms' => $press_cat
				     )
				)						    					        
		    );
		    
		} else {
		    $args = array(  
		        'post_type' => 'story',
		        'post_status' => 'publish',
		        'posts_per_page' => $num_posts, 
		    );						
			
		}
	
	    $loop = new WP_Query( $args ); 
	        
	    while ( $loop->have_posts() ) : $loop->the_post();
			get_template_part('parts/loop', 'archive-no-img');
	    endwhile;
	
	    wp_reset_postdata();?>
	    
		</div>

	</div>
</section>