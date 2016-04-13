<?php

/**
 * Create options, Custom Post Types and metaboxes throughout the site
 */


 // THEME SETTINGS

 if ( function_exists( 'fm_register_submenu_page' ) ) {
     fm_register_submenu_page( 'global_options', 'options-general.php', 'Huntingslow Options' );
     add_action( 'fm_submenu_global_options', function() {
         $fm = new Fieldmanager_Group( array(
             'name'     => 'global_options',
             'children' => array(
                 'acknowledgment_text' => new Fieldmanager_Textfield( array (
 									'label' => 'Text for the Acknowledgment of Country contained in the footer.'
 								) ),
 								'copyright' => new Fieldmanager_Textfield( array (
 									'label' => 'Text for the copyright in the footer.'
 								) ),
                 'media'        => new Fieldmanager_Media( array (
 									'label' => 'Label describing the format (SVG), location and parameters for the site logo'
 								) ),
 								'license' => new Fieldmanager_Group( array (
 									'label' => 'Creative Commons Options',
 									'children' => array(
 										'license_info' => new Fieldmanager_Textfield( 'License_Info' )
 									)
 								))
             )
         ) );
         $fm->activate_submenu_page();
     } );
 }

// CUSTOM POST TYPES - Podcast, Embedded

function podcast_cpt() {

   $args = array(
       'label'  => 'Podcast',
       'public' => true,
				'menu_position' => 15,
				'menu_icon' => 'dashicons-controls-volumeon'
   );

   register_post_type( 'podcast', $args );
}

add_action( 'init', 'podcast_cpt' );

function embedded_cpt() {

		$args = array (
			'label' => 'Embedded',
			'public' => true,
			'menu_position' => 15,
			'menu_icon' => 'dashicons-media-document'
		);

		register_post_type( 'embedded_cpt', $args );
}

add_action( 'init', 'embedded_cpt' );

// CUSTOM METABOXES - Standfirst, Post Format, Creative Commons License and Primary Tag. Assigns them to the relevant post types

function add_standfirst() {
  $fm = new Fieldmanager_Textfield( array (
    'name' => 'standfirst',
    'label' => 'Label giving brief instructions on what we use for a standfirst'
  ));
  $fm->add_meta_box( 'Standfirst', array( 'post', 'podcast' ) );
}
add_action( 'fm_post_post', 'add_standfirst' );
add_action( 'fm_post_podcast', 'add_standfirst' );

function add_primary_tag() {
  $primary_tag_datasource = new Fieldmanager_Datasource_Term( array(
    'taxonomy' => 'post_tag',
    'taxonomy_save_to_terms' => false
  ) );
  $fm = new Fieldmanager_Autocomplete( array(
    'name' => 'primary_tag',
    'label' => 'This tag will be shown alongside the category and should be used to group stories by topic. E.g. "Student Politics" or "SUSF"',
    'datasource' => $primary_tag_datasource
  ) );
  $fm->add_meta_box( 'Primary Tag', array( 'post', 'podcast' ) );
}
add_action( 'fm_post_post', 'add_primary_tag' );
add_action( 'fm_post_podcast', 'add_primary_tag' );

function add_cc_license() {
  $fm = new Fieldmanager_Checkbox ( array (
    'name' => 'cc_license',
    'label' => 'This article is Creative Commons licensed'
  ) );
  $fm->add_meta_box( 'Creative Commons Licensing', array( 'post', 'podcast' ) );
}
add_action( 'fm_post_post', 'add_podcast' );
add_action( 'fm_post_podcast', 'add_podcast' );

function add_post_format() {
  $fm = new Fieldmanager_Radios( false, array (
      'name'    => 'post_format',
      'default_value' => '1',
      'options' => array (
        1 => 'Regular', 2 => 'Feature (for Feature articles and those with large, impressive images)', 3 => 'Podcast', 4 => 'Shell (for apps; only if you know what is going on)' )
  ));
  $fm->add_meta_box( 'Format', 'post' );
}
add_action( 'fm_post_post', 'add_post_format' );

?>
