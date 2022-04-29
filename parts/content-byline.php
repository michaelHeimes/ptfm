<?php
/**
 * The template part for displaying an author byline
 */
?>

<p class="byline">
	<?php echo get_the_time( __('F j Y', 'jointswp') );?>
	<span>|</span>
	<?php 
		$first_term_name = get_the_terms( $post->ID, 'story_type' )[0]->name;
		$first_term_slug = get_the_terms( $post->ID, 'story_type' )[0]->slug;
		$term_link = get_term_link($first_term_slug, 'story_type');
		echo '<a href="' . $term_link . '">' . $first_term_name . '</a>'
	?>
</p>	
