<?php
function medicine_shop_typography_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'medicine_shop_typography', array(
			'priority' => 31,
			'title' => esc_html__( 'Typography', 'medicine-shop' ),
		)
	);

	/*=========================================
	Archive Post  Section
	=========================================*/
	$wp_customize->add_section(
		'medicine_shop_typography_settings', array(
			'title' => esc_html__( 'Typography Option', 'medicine-shop' ),
			'priority' => 1,
			'panel' => 'medicine_shop_typography',
		)
	);
	$medicine_shop_font_choices = array(
		'' => 'Select',
		'Source Sans Pro:400,700,400italic,700italic' => 'Source Sans Pro',
		'Open Sans:400italic,700italic,400,700' => 'Open Sans',
		'Oswald:400,700' => 'Oswald',
		'Playfair Display:400,700,400italic' => 'Playfair Display',
		'Montserrat:400,700' => 'Montserrat',
		'Raleway:400,700' => 'Raleway',
		'Droid Sans:400,700' => 'Droid Sans',
		'Lato:400,700,400italic,700italic' => 'Lato',
		'Arvo:400,700,400italic,700italic' => 'Arvo',
		'Lora:400,700,400italic,700italic' => 'Lora',
		'Merriweather:400,300italic,300,400italic,700,700italic' => 'Merriweather',
		'Oxygen:400,300,700' => 'Oxygen',
		'PT Serif:400,700' => 'PT Serif',
		'PT Sans:400,700,400italic,700italic' => 'PT Sans',
		'PT Sans Narrow:400,700' => 'PT Sans Narrow',
		'Cabin:400,700,400italic' => 'Cabin',
		'Fjalla One:400' => 'Fjalla One',
		'Francois One:400' => 'Francois One',
		'Josefin Sans:400,300,600,700' => 'Josefin Sans',
		'Libre Baskerville:400,400italic,700' => 'Libre Baskerville',
		'Arimo:400,700,400italic,700italic' => 'Arimo',
		'Ubuntu:400,700,400italic,700italic' => 'Ubuntu',
		'Bitter:400,700,400italic' => 'Bitter',
		'Droid Serif:400,700,400italic,700italic' => 'Droid Serif',
		'Roboto:400,400italic,700,700italic' => 'Roboto',
		'Open Sans Condensed:700,300italic,300' => 'Open Sans Condensed',
		'Roboto Condensed:400italic,700italic,400,700' => 'Roboto Condensed',
		'Roboto Slab:400,700' => 'Roboto Slab',
		'Yanone Kaffeesatz:400,700' => 'Yanone Kaffeesatz',
		'Jura:400' => 'Jura',
		'Rokkitt:400' => 'Rokkitt',
	);

	$wp_customize->add_setting( 'medicine_shop_headings_text', array(
		'sanitize_callback' => 'medicine_shop_sanitize_fonts',
	));

	$wp_customize->add_control( 'medicine_shop_headings_text', array(
		'type' => 'select',
		'description' => __('Select your appropriate font for the headings.', 'medicine-shop'),
		'section' => 'medicine_shop_typography_settings',
		'choices' => $medicine_shop_font_choices

	));

	$wp_customize->add_setting( 'medicine_shop_body_text', array(
		'sanitize_callback' => 'medicine_shop_sanitize_fonts'
	));

	$wp_customize->add_control( 'medicine_shop_body_text', array(
		'type' => 'select',
		'description' => __( 'Select your appropriate font for the body.', 'medicine-shop' ),
		'section' => 'medicine_shop_typography_settings',
		'choices' => $medicine_shop_font_choices
	) );


	$wp_customize->add_setting( 'medicine_shop_upgrade_page_settings_20',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new Medicine_Shop_Control_Upgrade(
        $wp_customize, 'medicine_shop_upgrade_page_settings_20',
            array(
                'priority'      => 200,
                'section'       => 'medicine_shop_typography_settings',
                'settings'      => 'medicine_shop_upgrade_page_settings_20',
                'label'         => __( 'Medicine Shop Pro comes with additional features.', 'medicine-shop' ),
                'choices'       => array( __( '12+ Sections', 'medicine-shop' ), __( 'One Click Demo Importer', 'medicine-shop' ), __( 'Section Reordering Facility', 'medicine-shop' ),__( 'Advance Typography', 'medicine-shop' ),__( 'Easy Customization', 'medicine-shop' ),__( '24x7 Support', 'medicine-shop' ), )
            )
        )
    ); 
	
	$wp_customize->add_section(
	'medicine_shop_dynamic_color_settings', array(
		'title' => esc_html__( 'Dynamic Color Options', 'medicine-shop' ),
		'priority' => 1,
		'panel' => 'medicine_shop_typography',
		)
	);

	$wp_customize->add_setting('medicine_shop_dynamic_color_one', array(
        'default'           => '#35c7e0',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'medicine_shop_dynamic_color_one', array(
        'label'    => __('First Dynamic Color', 'medicine-shop'),
        'section'  => 'medicine_shop_dynamic_color_settings',
    )));

	$wp_customize->add_setting( 'medicine_shop_upgrade_page_settings_20_color',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new Medicine_Shop_Control_Upgrade(
        $wp_customize, 'medicine_shop_upgrade_page_settings_20_color',
            array(
                'priority'      => 200,
                'section'       => 'medicine_shop_dynamic_color_settings',
                'settings'      => 'medicine_shop_upgrade_page_settings_20_color',
                'label'         => __( 'Medicine Shop Pro comes with additional features.', 'medicine-shop' ),
                'choices'       => array( __( '12+ Sections', 'medicine-shop' ), __( 'One Click Demo Importer', 'medicine-shop' ), __( 'Section Reordering Facility', 'medicine-shop' ),__( 'Advance Typography', 'medicine-shop' ),__( 'Easy Customization', 'medicine-shop' ),__( '24x7 Support', 'medicine-shop' ), )
            )
        )
    ); 

}

add_action( 'customize_register', 'medicine_shop_typography_setting' );