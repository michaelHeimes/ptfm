<?php
/**
 * Template part for displaying a single post
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12 medium-12 large-8 large-offset-2">
					
				<header class="article-header text-center">	
					<?php get_template_part( 'parts/content', 'byline' ); ?>
					<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
				</header> <!-- end article header -->
								
				<section class="entry-content" itemprop="text">
					<?php the_content(); ?>
				</section> <!-- end article section -->
			
			</div>
						
			<footer class="article-footer cell small-12 medium-12 large-10 large-offset-1">
				
				<?php
				$featured_posts = get_field('related_post');
				if( $featured_posts ): ?>
					<?php foreach( $featured_posts as $post ):?>
				
						<?php get_template_part( 'parts/loop', 'archive' ); ?>
						
					<?php endforeach; ?>
					<?php 
					// Reset the global post object so that the rest of the page works correctly.
					wp_reset_postdata(); ?>
					
				<?php else:?>
				
					<?php			
					$terms = get_the_terms( $post->ID, 'story_type');
					$first_term = $terms[0]->slug;
					$current = get_the_ID();
					$args = array(  
						'post_type' => 'story',
						'post_status' => 'publish',
						'posts_per_page' => 1,
						'post__not_in' => array($current),
						'tax_query'      => array(
							array(
								'taxonomy' => 'story_type',
								'field'    => 'slug',
								'terms'    => array( $first_term )
							)
						)
					);
					
					$loop = new WP_Query( $args ); 
					if ( $loop->have_posts() ) : 
						while ( $loop->have_posts() ) : $loop->the_post();?>
						
						<?php get_template_part( 'parts/loop', 'archive' ); ?>
							
						<?php
						endwhile;
					endif;
					wp_reset_postdata(); 
					?>
					
				<?php endif; ?>
		
			</footer> <!-- end article footer -->
				
		</div>
	</div>
</article> <!-- end article -->