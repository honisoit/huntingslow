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
                 'media'  => new Fieldmanager_Media( array (
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

   $args = array (
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
			'menu_icon' => 'dashicons-media-document',
      'supports' => 'title'
		);

		register_post_type( 'embedded', $args );
}

add_action( 'init', 'embedded_cpt' );

// CUSTOM METABOXES - Standfirst, Post Format, Creative Commons License and
// Primary Tag. Assigns them to the relevant post types

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
add_action( 'fm_post_post', 'add_cc_license' );
add_action( 'fm_post_podcast', 'add_cc_license' );

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

function add_embedded_content() {
  $fm = new Fieldmanager_Group( array (
    'name' => 'embedded',
    'limit' => 0,
    'label' => 'Embed',
    'label_macro' => array( 'Slide: %s', 'title' ),
    'add_more_label' => 'Add another embedded thing',
    'sortable' => true,
    'children' => array(
      'embed-type' => new Fieldmanager_Select( array(
        'label' => 'Type',
        'options' => array(
            'raw-code' => 'Raw styles, script or data',
            'github' => 'Github repository',
            'google-sheet' => 'Google Sheet data import',
        )
      )),
      'github-option' => new Fieldmanager_Group( array(
        'display_if' => array(
          'src' => 'embed-type',
          'value' => 'github'
        ),
        'children' => array(
          'github-link' => new Fieldmanager_Link( array (
            'label' => 'Full link to Github account/repository',
            'description' => 'This presumes an index.html awaits in the directory at the end of the URL rainbow',
          )),
          'github-checkbox' => new Fieldmanager_Checkbox( array (
            'label' => 'This is safe and I have no idea what I is doing'
          ))
        )
      )),
      'google-sheet-option' => new Fieldmanager_Group( array(
        'display_if' => array(
          'src' => 'embed-type',
          'value' => 'google-sheet'
        ),
        'children' => array(
          'github-link' => new Fieldmanager_Link( array (
            'label' => 'Link to the .json output of a google sheet',
          )),
        )
      )),
      'raw-code-option' => new Fieldmanager_Group( array(
        'display_if' => array(
          'src' => 'embed-type',
          'value' => 'raw-code'
        ),
        'children' => array(
          'raw-code-location' => new Fieldmanager_Select( array(
            'label' => 'Where do you want the code?',
            'options' => array(
                'header' => 'Header',
                'body' => 'Body',
                'bottom' => 'Force to the bottom of the body',
            )
          )),
          'raw-code-content' => new Fieldmanager_TextArea( array(
            'label' => 'Paste your code in this box right here...'
          ))
        )
      )),
    ),
  ) );
  $fm->add_meta_box( 'Embeds', 'embedded' );
}
add_action( 'fm_post_embedded', 'add_embedded_content' );

function add_embedded_global_styles() {
  $fm = new Fieldmanager_Checkbox ( array (
    'name' => 'embedded_global_styles',
    'label' => 'Include the main site stylesheet. (Easy way of keeping the embedded contents consistent and future proof.)'
  ) );
  $fm->add_meta_box( 'Global Styles', 'embedded' );
}
add_action( 'fm_post_embedded', 'add_embedded_global_styles' );

?>
