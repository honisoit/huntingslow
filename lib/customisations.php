<?php
// Custom options for Huntingslow

/**
 * Unregister the default widgets which we won't be using.
 * That's everything apart from text.
 */

function huntingslow_unregister_default_widgets() {
  unregister_widget('WP_Widget_Pages');
  unregister_widget('WP_Widget_Calendar');
  unregister_widget('WP_Widget_Archives');
  unregister_widget('WP_Widget_Links');
  unregister_widget('WP_Widget_Meta');
  unregister_widget('WP_Widget_Search');
  // unregister_widget('WP_Widget_Text');
  unregister_widget('WP_Widget_Categories');
  unregister_widget('WP_Widget_Recent_Posts');
  unregister_widget('WP_Widget_Recent_Comments');
  unregister_widget('WP_Widget_RSS');
  unregister_widget('WP_Widget_Tag_Cloud');
  unregister_widget('WP_Nav_Menu_Widget');
}
add_action( 'widgets_init', 'huntingslow_unregister_default_widgets' );

/**
 * Filter the text widget to allow shortcodes.
 */
add_filter('widget_text', 'do_shortcode');

/*
* Theme settings
*/

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
                'not_found_media' => new Fieldmanager_Media ( array (
                  'button_label' => 'Add 404 page Image',
                  'modal_title' => 'Select 404 Image',
                  'modal_button_label' => 'Use Image on 404 page',
                  'preview_size' => 'icon',
                ) ),
                'not_found_title' => new Fieldmanager_Textfield( array (
									'label' => 'Prominent text for error page.'
								) ),
                'not_found_subtitle' => new Fieldmanager_Textfield( array (
									'label' => 'Small text for the error page.'
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

function add_cc_license() {
  $fm = new Fieldmanager_Checkbox ( array (
    'name' => 'cc_license',
    'label' => 'This article is Creative Commons licensed'
  ) );
  $fm->add_meta_box( 'Creative Commons Licensing', array( 'post', 'podcast' ) );
}
add_action( 'fm_post_post', 'add_cc_license' );

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
