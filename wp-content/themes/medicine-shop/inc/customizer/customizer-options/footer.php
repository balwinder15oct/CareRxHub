<?php

function medicine_shop_footer( $wp_customize ) {
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	// Footer Panel // 
	$wp_customize->add_panel( 
		'medicine_shop_footer_section', 
		array(
			'priority'      => 34,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Footer', 'medicine-shop'),
		) 
	);

	// Footer Widgets // 
	$wp_customize->add_section(
        'footer_top',
        array(
            'title' 		=> __('Footer Widgets','medicine-shop'),
			'panel'  		=> 'medicine_shop_footer_section',
			'priority'      => 3,
		)
    );

    // Footer Widgets Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'medicine_shop_footer_widgets_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'medicine_shop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
		) 
	);
	
	$wp_customize->add_control(
	'medicine_shop_footer_widgets_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Footer Widgets', 'medicine-shop' ),
			'section'     => 'footer_top',
			'settings'    => 'medicine_shop_footer_widgets_setting',
			'type'        => 'checkbox'
		) 
	);

	 $wp_customize->add_setting( 'medicine_shop_upgrade_page_settings_1',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new Medicine_Shop_Control_Upgrade(
        $wp_customize, 'medicine_shop_upgrade_page_settings_1',
            array(
                'priority'      => 200,
                'section'       => 'footer_top',
                'settings'      => 'medicine_shop_upgrade_page_settings_1',
                'label'         => __( 'Medicine Shop Pro comes with additional features.', 'medicine-shop' ),
                'choices'       => array( __( '12+ Sections', 'medicine-shop' ), __( 'One Click Demo Importer', 'medicine-shop' ), __( 'Section Reordering Facility', 'medicine-shop' ),__( 'Advance Typography', 'medicine-shop' ),__( 'Easy Customization', 'medicine-shop' ),__( '24x7 Support', 'medicine-shop' ), )
            )
        )
    ); 

	// Footer Bottom // 
	$wp_customize->add_section(
        'medicine_shop_footer_bottom',
        array(
            'title' 		=> __('Footer Bottom','medicine-shop'),
			'panel'  		=> 'medicine_shop_footer_section',
			'priority'      => 3,
		)
    );
	
	// Footer Copyright Head
	$wp_customize->add_setting(
		'medicine_shop_footer_btm_copy_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'medicine_shop_sanitize_text',
			'priority'  => 3,
		)
	);

	// Site Title Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'medicine_shop_footer_copyright_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'medicine_shop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
		) 
	);
	
	$wp_customize->add_control(
	'medicine_shop_footer_copyright_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Footer Copytight', 'medicine-shop' ),
			'section'     => 'medicine_shop_footer_bottom',
			'settings'    => 'medicine_shop_footer_copyright_setting',
			'type'        => 'checkbox'
		) 
	);
	
	// Footer Copyright 
	$wp_customize->add_setting(
    	'medicine_shop_footer_copyright',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);

	$wp_customize->add_control( 
		'medicine_shop_footer_copyright',
		array(
		    'label'   		=> __('Copyright','medicine-shop'),
		    'section'		=> 'medicine_shop_footer_bottom',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	$wp_customize->add_setting( 'medicine_shop_copyright_alignment', array(
        'default'   => 'center',
        'sanitize_callback' => 'medicine_shop_sanitize_copyright_position',
    ));

    $wp_customize->add_control( 'medicine_shop_copyright_alignment', array(
        'label'    => __( 'Copyright Position', 'medicine-shop' ),
        'section'  => 'medicine_shop_footer_bottom',
        'settings' => 'medicine_shop_copyright_alignment',
        'type'     => 'radio',
        'choices'  => array(
            'right' => __( 'Right Align', 'medicine-shop' ),
            'left'  => __( 'Left Align', 'medicine-shop' ),
            'center'  => __( 'Center Align', 'medicine-shop' ),
        ),
    ));

	$wp_customize->add_setting( 'medicine_shop_upgrade_page_settings_2',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new Medicine_Shop_Control_Upgrade(
        $wp_customize, 'medicine_shop_upgrade_page_settings_2',
            array(
                'priority'      => 200,
                'section'       => 'medicine_shop_footer_bottom',
                'settings'      => 'medicine_shop_upgrade_page_settings_2',
                'label'         => __( 'Medicine Shop Pro comes with additional features.', 'medicine-shop' ),
                'choices'       => array( __( '12+ Sections', 'medicine-shop' ), __( 'One Click Demo Importer', 'medicine-shop' ), __( 'Section Reordering Facility', 'medicine-shop' ),__( 'Advance Typography', 'medicine-shop' ),__( 'Easy Customization', 'medicine-shop' ),__( '24x7 Support', 'medicine-shop' ), )
            )
        )
    ); 
}
add_action( 'customize_register', 'medicine_shop_footer' );

// Footer selective refresh
function medicine_shop_footer_partials( $wp_customize ){
	// footer_copyright
	$wp_customize->selective_refresh->add_partial( 'footer_copyright', array(
		'selector'            => '.copy-right .copyright-text',
		'settings'            => 'footer_copyright',
		'render_callback'  => 'medicine_shop_footer_copyright_render_callback',
	) );
}
add_action( 'customize_register', 'medicine_shop_footer_partials' );

// copyright_content
function medicine_shop_footer_copyright_render_callback() {
	return get_theme_mod( 'footer_copyright' );
}