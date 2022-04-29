<?php

add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'large-colored-copy',
            'title'             => __('Large Colored Copy'),
            'description'       => __('A custom Large Colored Copy block.'),
            'render_template'   => 'parts/blocks/large-colored-copy.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'large', 'colored', 'copy', 'text' ),
        ));
    }
}
