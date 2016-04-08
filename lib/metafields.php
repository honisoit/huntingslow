<?php

// namespace Roots\Sage\Metafields;

/**
 * Custom menu walker to implement Bootstrap menus
 */


add_action( 'fm_post_post', function() {
	$fm = new Fieldmanager_Textfield( array (
		'name' => 'standfirst',
		'label' => 'Label giving brief instructions on what we use for a standfirst'
	));
	$fm->add_meta_box( 'Standfirst', 'post');


	$fm = new Fieldmanager_Radios( false, array (
			'name'    => 'post_format',
			'default_value' => '1',
			'options' => array (
				1 => 'Regular', 2 => 'Feature (for Feature articles and those with large, impressive images)', 3 => 'Shell (for apps; only if you know what is going on)' )
	));
	$fm->add_meta_box( 'Format', 'post' );

	$primary_tag_datasource = new Fieldmanager_Datasource_Term( array(
		'taxonomy' => 'post_tag',
		'taxonomy_save_to_terms' => false
	) );
	$fm = new Fieldmanager_Autocomplete( array(
		'name' => 'primary_tag',
		'label' => 'This tag will be shown alongside the category and should be used to group stories by topic. E.g. "Student Politics" or "SUSF"',
		'datasource' => $primary_tag_datasource
	) );
	$fm->add_meta_box( 'Primary Tag', 'post');
} );
