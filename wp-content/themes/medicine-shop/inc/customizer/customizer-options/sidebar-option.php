<?php
function medicine_shop_sidebar_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'medicine_shop_sidebar', array(
			'priority' => 31,
			'title' => esc_html__( 'Sidebar Option', 'medicine-shop' ),
		)
	);

	/*=========================================
	Archive Post  Section
	=========================================*/
	$wp_customize->add_section(
		'medicine_shop_sidebar_settings', array(
			'title' => esc_html__( 'Sidebar Option', 'medicine-shop' ),
			'priority' => 1,
			'panel' => 'medicine_shop_sidebar',
		)
	);
	
	// Archive Post Settings 
	$wp_customize->add_setting(
		'archive_post_settings'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'medicine_shop_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'archive_post_settings',
		array(
			'type' => 'hidden',
			'label' => __('All Sidebar Setting','medicine-shop'),
			'section' => 'medicine_shop_sidebar_settings',
		)
	);
	

	// Archive Sidebar Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'medicine_shop_archive_sidebar_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'medicine_shop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'medicine_shop_archive_sidebar_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Archive Sidebar', 'medicine-shop' ),
			'section'     => 'medicine_shop_sidebar_settings',
			'settings'    => 'medicine_shop_archive_sidebar_setting',
			'type'        => 'checkbox'
		) 
	);

	// Index Sidebar Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'medicine_shop_index_sidebar_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'medicine_shop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'medicine_shop_index_sidebar_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Index Sidebar', 'medicine-shop' ),
			'section'     => 'medicine_shop_sidebar_settings',
			'settings'    => 'medicine_shop_index_sidebar_setting',
			'type'        => 'checkbox'
		) 
	);

	// Pages Sidebar Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'medicine_shop_paged_sidebar_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'medicine_shop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'medicine_shop_paged_sidebar_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Pages Sidebar', 'medicine-shop' ),
			'section'     => 'medicine_shop_sidebar_settings',
			'settings'    => 'medicine_shop_paged_sidebar_setting',
			'type'        => 'checkbox'
		) 
	);

	// Search Result Sidebar Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'medicine_shop_search_result_sidebar_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'medicine_shop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'medicine_shop_search_result_sidebar_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Search Result Sidebar', 'medicine-shop' ),
			'section'     => 'medicine_shop_sidebar_settings',
			'settings'    => 'medicine_shop_search_result_sidebar_setting',
			'type'        => 'checkbox'
		) 
	);

	// Single Post Sidebar Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'medicine_shop_single_post_sidebar_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'medicine_shop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'medicine_shop_single_post_sidebar_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Single Post Sidebar', 'medicine-shop' ),
			'section'     => 'medicine_shop_sidebar_settings',
			'settings'    => 'medicine_shop_single_post_sidebar_setting',
			'type'        => 'checkbox'
		) 
	);

	// Sidebar Page Sidebar Date Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'medicine_shop_single_page_sidebar_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'medicine_shop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'medicine_shop_single_page_sidebar_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Page Width Sidebar', 'medicine-shop' ),
			'section'     => 'medicine_shop_sidebar_settings',
			'settings'    => 'medicine_shop_single_page_sidebar_setting',
			'type'        => 'checkbox'
		) 
	);

	$wp_customize->add_setting( 'medicine_shop_sidebar_position', array(
        'default'   => 'right',
        'sanitize_callback' => 'medicine_shop_sanitize_sidebar_position',
    ));

    $wp_customize->add_control( 'medicine_shop_sidebar_position', array(
        'label'    => __( 'Sidebar Position', 'medicine-shop' ),
        'section'  => 'medicine_shop_sidebar_settings',
        'settings' => 'medicine_shop_sidebar_position',
        'type'     => 'radio',
        'choices'  => array(
            'right' => __( 'Right Sidebar', 'medicine-shop' ),
            'left'  => __( 'Left Sidebar', 'medicine-shop' ),
        ),
    ));

	 $wp_customize->add_setting( 'medicine_shop_upgrade_page_settings_15',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new Medicine_Shop_Control_Upgrade(
        $wp_customize, 'medicine_shop_upgrade_page_settings_15',
            array(
                'priority'      => 200,
                'section'       => 'medicine_shop_sidebar_settings',
                'settings'      => 'medicine_shop_upgrade_page_settings_15',
                'label'         => __( 'Medicine Shop Pro comes with additional features.', 'medicine-shop' ),
                'choices'       => array( __( '12+ Sections', 'medicine-shop' ), __( 'One Click Demo Importer', 'medicine-shop' ), __( 'Section Reordering Facility', 'medicine-shop' ),__( 'Advance Typography', 'medicine-shop' ),__( 'Easy Customization', 'medicine-shop' ),__( '24x7 Support', 'medicine-shop' ), )
            )
        )
    ); 
}

add_action( 'customize_register', 'medicine_shop_sidebar_setting' );