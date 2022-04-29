<?php if ( have_rows('page_modules') ) : ?>
<?php while ( have_rows('page_modules') ) : ?> 
	<?php the_row(); ?>

	<?php if ( get_row_layout() == 'callout' ) : 
	
		get_template_part('page-modules/callout');
	
	endif;?>

	<?php if ( get_row_layout() == 'contact' ) : 
	
		get_template_part('page-modules/contact');
	
	endif;?>

	<?php if ( get_row_layout() == 'donate_cta' ) : 
	
		get_template_part('page-modules/donate_cta');
	
	endif;?>

	<?php if ( get_row_layout() == 'heading_left_copy_right' ) : 
	
		get_template_part('page-modules/heading_left_copy_right');
	
	endif;?>

	<?php if ( get_row_layout() == 'image_left_copy_right' ) : 
	
		get_template_part('page-modules/image_left_copy_right');
	
	endif;?>


	<?php if ( get_row_layout() == 'recent_press' ) : 
	
		get_template_part('page-modules/recent_press');
	
	endif;?>
	
	<?php if ( get_row_layout() == 'social_cta' ) : 
	
		get_template_part('page-modules/social_cta');
	
	endif;?>
	
	<?php if ( get_row_layout() == 'volunteer_form' ) : 
	
		get_template_part('page-modules/volunteer_form');
	
	endif;?>

	<?php if ( get_row_layout() == 'wysiwyg_editor' ) : 
	
		get_template_part('page-modules/wysiwyg');
	
	endif;?>
	
	<?php endwhile;?>
<?php endif;?>