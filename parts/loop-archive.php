<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('cell small-12'); ?> role="article">	
	<div class="grid-x grid-padding-x align-middle">
		<div class="left cell small-12 tablet-6">
			<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full'); ?></a>
		</div>				

		<div class="right cell small-12 tablet-6">
			<div class="inner">
				<header class="article-header">
					<?php get_template_part( 'parts/content', 'byline' ); ?>
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				</header> <!-- end article header -->
				
				<section class="entry-content" itemprop="text">
					<?php the_excerpt();?>
				</section> <!-- end article section -->
									
				<footer class="article-footer btn-wrap">
					<a class="button" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">Read More</a>
				</footer> <!-- end article footer -->	
			</div>
		</div>	
	</div>
</article> <!-- end article -->