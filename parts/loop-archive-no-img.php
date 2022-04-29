<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('cell small-12 no-img'); ?> role="article">	
	<div class="grid-x grid-padding-x align-middle">
		<div class="right cell small-12">
			<div class="inner">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
					<header class="article-header">
						<p class="meta"><?php echo get_the_author(); ?> / 	
						<?php $post_date = get_the_date( 'F j, Y' ); echo $post_date;?></p>
						<h3><?php the_title(); ?></h3>
					</header> <!-- end article header -->
					
					<section class="entry-content" itemprop="text">
					</section> <!-- end article section -->
										
					<footer class="article-footer btn-wrap">
					</footer> <!-- end article footer -->	
				</a>
			</div>
		</div>	
	</div>
</article> <!-- end article -->