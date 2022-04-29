<?php $modal = get_row_index();?>

<section class="video text-center" data-open="modal-<?php echo $modal;?>">
	<?php 
	$image = get_sub_field('placeholder_image');
	$size = 'full'; // (thumbnail, medium, large, full or custom size)
	if( $image ) {
	    echo wp_get_attachment_image( $image, $size );
	} ?>
	
	<svg xmlns="http://www.w3.org/2000/svg" width="88" height="88" viewBox="0 0 88 88"><g data-name="Group 489"><path data-name="Polygon 1" d="M62 44L34 61V27z" fill="#efeded"/><g data-name="Ellipse 54" fill="none" stroke="#efeded" stroke-width="5.5"><circle cx="44" cy="44" r="44" stroke="none"/><circle cx="44" cy="44" r="41.25"/></g></g></svg>
	
</section>


<div class="reveal video-reveal large" id="modal-<?php echo $modal;?>" data-reveal data-animation-in="fade-in" data-animation-out="fade-out">
	
	<div class="btn-wrap text-right">
		<button class="close-button" data-close aria-label="Close modal" type="button">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>

	<?php
	
	// Load value.
	$iframe = get_sub_field('video_url');
	
	// Use preg_match to find iframe src.
	preg_match('/src="(.+?)"/', $iframe, $matches);
	$src = $matches[1];
	
	// Add extra parameters to src and replcae HTML.
	$params = array(
	    'controls'  => 0,
	    'hd'        => 1,
	    'autohide'  => 1
	);
	$new_src = add_query_arg($params, $src);
	$iframe = str_replace($src, $new_src, $iframe);
	
	// Add extra attributes to iframe HTML.
	$attributes = 'frameborder="0"';
	$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);
	
	// Display customized HTML.
	echo $iframe;
	?>

</div>