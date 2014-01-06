<?php 


register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'primary' ),
) );

// Enable support for Post Formats.
add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

// Enable support for Post Thumbnails, and declare two sizes.
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 630, 410, true );
add_image_size( 'theme-medium-width', 630, 410, true );
add_image_size( 'theme-full-width', 950, 610, true );



// Custom template tags for this theme.
require get_template_directory() . '/inc/template-tags.php';



?>