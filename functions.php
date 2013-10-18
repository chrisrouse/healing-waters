<?php

/*
/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\ INSTRUCTIONS /\/\/\/\/\/\/\/\/\/\/\/\/\//\/\/\/\/\

	The following functions in Standard 3 are able to be overridden in your child
	theme.

		standard_page_menu
		standard_add_theme_background
		standard_add_theme_editor_style
		standard_add_theme_menus
		standard_add_theme_sidebars
		standard_add_theme_features
		standard_set_theme_colors
		standard_header_style
		standard_admin_header_style
		standard_admin_header_image
		standard_custom_comment
		standard_process_link_post_format_content
		standard_process_link_post_format_title
		standard_remove_paragraph_on_media
		standard_wrap_embeds
		standard_search_form
		standard_post_format_rss
		standard_modify_widget_titles
		standard_add_title_to_single_post_pagination
		standard_comment_form

    Do not modify anything in-between the "DO NOT MODIFY" start and end sections.

	You may place any functions outlined in our FAQs & tutorials on the support
	forum in this file, as instructed, or any other code you create yourself or find
	from around the web below the "CUSTOMIZATIONS" section at the end of the file.

	Be forewarned that even the simplest mistake within this file can completely
	bring down your website. Please make sure to create backups and have FTP
	access to your server before modifying this file so you amy correct any issues.

/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\//\/\/\/\/\/\/\/\/\/\
*/


/* /\/\/\/\/\/\/\/\/\/\/\/\/\/\/ DO NOT MODIFY START /\/\/\/\/\/\/\/\/\/\/\/\/\/\/ */

/**
 * Reorders the loading of Standard's styles to ensure that the child theme kit's
 * styles.css gets loaded last. This allows the child theme kit to override all
 * Standard styles.
 *
 * @since	3.2.1
 * @version	1.0
 */
function standard_child_theme_kit_reorder_styles() {
    wp_dequeue_style( 'theme-responsive' );
} // end standard_child_theme_kit_reorder_styles

add_action( 'wp_enqueue_scripts', 'standard_child_theme_kit_reorder_styles', 1000 );

/* /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\ DO NOT MODIFY END /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\ */



/* /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\ CUSTOMIZATIONS /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ */

//load google webfont
	wp_register_style( 'google_font_sans_serif_alt', 'http://fonts.googleapis.com/css?family=Exo:300,400' );
wp_enqueue_style( 'google_font_sans_serif_alt' );

	wp_register_style( 'google_font_sans_serif', 'http://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700' );
wp_enqueue_style( 'google_font_sans_serif' );

//load google webfont
	wp_register_style( 'google_font_serif', 'http://fonts.googleapis.com/css?family=Droid+Serif:400,700' );
wp_enqueue_style( 'google_font_serif' );


/**
 * Adds custom sidebars
 */
function add_admin_sidebars() {

    //Add Home sidebar
    register_sidebar(
        array(
        	'name'          => __( 'Homepage Sidebar', 'standard' ),
        	'id'            => 'homepage-sidebar',
        	'description'   => 'Sidebar on the custom homepage',
        	'before_widget' => '<div id="%1$s" class="widget %2$s">',
        	'after_widget'  => '</div>',
        	'before_title'  => '<h3 class="widget-title">',
        	'after_title'   => '</h3>'
        	)
    );

    //Add Homepage Widget Left
    register_sidebar(
     array(
     'name' => __( 'Homepage Widget Left', 'standard' ),
     'id' => 'sidebar-7',
     'description' => 'Left Sidebar on the custom homepage',
     'before_widget' => '<div id="%1$s" class="widget %2$s">',
     'after_widget' => '</div>',
     'before_title' => '<h3 class="widget-title">',
     'after_title' => '</h3>'
     )
    );

     // Add Homepage Widget Left
    register_sidebar(
     array(
     'name' => __('Homepage Widget Center', 'standard'),
     'id' => 'sidebar-8',
     'description' => __( 'Center Sidebar on the custom homepage', 'standard' ),
     'before_widget' => '<div id="%1$s" class="widget %2$s">',
     'after_widget' => '</div>',
     'before_title' => '<h3 class="widget-title">',
     'after_title' => '</h3>'
     )
    );

      // Add Homepage Widget Left
    register_sidebar(
     array(
     'name' => __('Homepage Widget Right', 'standard'),
     'id' => 'sidebar-9',
     'description' => __( 'Right Sidebar on the custom homepage', 'standard' ),
     'before_widget' => '<div id="%1$s" class="widget %2$s">',
     'after_widget' => '</div>',
     'before_title' => '<h3 class="widget-title">',
     'after_title' => '</h3>'
     )
    );

} // end add_theme_sidebars
add_action('init', 'add_admin_sidebars');


// exclude gallery category from post page
function exclude_category($query) {
if ( $query->is_home() ) {
$query->set('cat', '-15');
}
return $query;
}
add_filter('pre_get_posts', 'exclude_category');

