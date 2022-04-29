<?php
/**
 * Displays archive pages if a speicifc template is not set. 
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header(); ?>
			
	<div class="content">
		<?php get_template_part('parts/content', 'story-banner');?>
		<div class="inner-content">
		
		    <main class="main" role="main">
			    
		    	<header class="show-for-sr">
		    		<h1 class="page-title"><?php the_archive_title();?></h1>
					<?php the_archive_description('<div class="taxonomy-description">', '</div>');?>
		    	</header>
				
				<div class="grid-container">
					<div class="grid-padding-x align-center">
						<div class="cell">
							<nav class="type-links">
								<ul class="menu grid-x grid-padding-x align-center">
									<li class="cell shrink"><a class="<?php if(is_post_type_archive()):?>current-menu-item<?php endif;?>" href="/stories/">All Posts</a></li>
									<?php
										$q_object = get_queried_object();
										$archive_slug = $q_object->slug;
	
										$terms = get_terms( 
											[
												'taxonomy' => 'story_type',
												'hide_empty' => true,
											]
										);
										foreach ($terms as $term):
											$term_name = $term->name;
											$term_slug = $term->slug;
											$term_link = get_term_link( $term );?>
											
											<li class="cell shrink"><a class="<?php if($archive_slug == $term_slug):?>current-menu-item<?php endif;?>" href="<?php echo $term_link;?>"><?php echo $term_name;?></a></li>
											
										<?php endforeach ;?>
											
								</ul>
							</nav>
							<div class="articles-wrap">
		    				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			 			
								<!-- To see additional archive styles, visit the /parts directory -->

								<?php get_template_part( 'parts/loop', 'archive' ); ?>

							<?php endwhile; ?>	
							</div>
			
								<?php joints_page_navi(); ?>
								
							<?php else : ?>
														
								<?php get_template_part( 'parts/content', 'missing' ); ?>
									
							<?php endif; ?>
						</div>
					</div>
				</div>
			</main> <!-- end #main -->
	    
	    </div> <!-- end #inner-content -->
	    
	</div> <!-- end #content -->

<?php get_footer(); ?>