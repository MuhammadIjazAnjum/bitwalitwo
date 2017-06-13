<?php
function testing_customize_register( $wp_customize )
{
   //All our sections, settings, and controls will be added here

	// Add Theme Options Panel.
	$wp_customize->add_panel( 'testing_options_panel', array(
		'priority'       => 1,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __( 'Bit Theme Options', 'bloggerz' ),
		'description'    => __( 'This panel allow you to customize your Theme.', 'bloggerz' ),
	) );

	$wp_customize->add_section( 'themename_color_scheme', array(
        'title'    => __('Color Scheme', 'themename'),
        'description' => '',
        'priority' => 120,
        'panel' => 'testing_options_panel'
    ));

    //  =============================
    //  = Text Input                =
    //  =============================
    $wp_customize->add_setting('testing_bitwali', array(
        'default'        => 'Arse!',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('testing_bitwali', array(
        'label'      => __('Text Test', 'themename'),
        'section'    => 'themename_color_scheme',
        'settings'   => 'testing_bitwali',
    ));
}
add_action( 'customize_register', 'testing_customize_register' );