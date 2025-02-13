<?php
function medicine_shop_general_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'medicine_shop_general', array(
			'priority' => 31,
			'title' => esc_html__( 'General', 'medicine-shop' ),
		)
	);

	/*=========================================
	Breadcrumb  Section
	=========================================*/
	$wp_customize->add_section(
		'medicine_shop_breadcrumb_setting', array(
			'title' => esc_html__( 'Breadcrumb Section', 'medicine-shop' ),
			'priority' => 1,
			'panel' => 'medicine_shop_general',
		)
	);
	
	// Settings 
	$wp_customize->add_setting(
		'medicine_shop_breadcrumb_settings'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'medicine_shop_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'medicine_shop_breadcrumb_settings',
		array(
			'type' => 'hidden',
			'label' => __('Settings','medicine-shop'),
			'section' => 'medicine_shop_breadcrumb_setting',
		)
	);
	
	// Breadcrumb Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'medicine_shop_hs_breadcrumb' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'medicine_shop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'medicine_shop_hs_breadcrumb', 
		array(
			'label'	      => esc_html__( 'Hide / Show Section', 'medicine-shop' ),
			'section'     => 'medicine_shop_breadcrumb_setting',
			'settings'    => 'medicine_shop_hs_breadcrumb',
			'type'        => 'checkbox'
		) 
	);

	$wp_customize->add_setting(
    	'medicine_shop_breadcrumb_seprator',
    	array(
			'default' => '/',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'medicine_shop_breadcrumb_seprator',
		array(
		    'label'   		=> __('Breadcrumb separator','medicine-shop'),
		    'section'		=> 'medicine_shop_breadcrumb_setting',
			'type' 			=> 'text',
		)  
	);

	$wp_customize->add_setting( 'medicine_shop_upgrade_page_settings_5',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new Medicine_Shop_Control_Upgrade(
        $wp_customize, 'medicine_shop_upgrade_page_settings_5',
            array(
                'priority'      => 200,
                'section'       => 'medicine_shop_breadcrumb_setting',
                'settings'      => 'medicine_shop_upgrade_page_settings_5',
                'label'         => __( 'Medicine Shop Pro comes with additional features.', 'medicine-shop' ),
                'choices'       => array( __( '12+ Sections', 'medicine-shop' ), __( 'One Click Demo Importer', 'medicine-shop' ), __( 'Section Reordering Facility', 'medicine-shop' ),__( 'Advance Typography', 'medicine-shop' ),__( 'Easy Customization', 'medicine-shop' ),__( '24x7 Support', 'medicine-shop' ), )
            )
        )
    ); 

	/*=========================================
	Preloader Section
	=========================================*/
	$wp_customize->add_section(
		'medicine_shop_preloader_section_setting', array(
			'title' => esc_html__( 'Preloader', 'medicine-shop' ),
			'priority' => 3,
			'panel' => 'medicine_shop_general',
		)
	);

	// Preloader Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'medicine_shop_preloader_setting' , 
			array(
			'sanitize_callback' => 'medicine_shop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
		) 
	);
	
	$wp_customize->add_control(
	'medicine_shop_preloader_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Preloader', 'medicine-shop' ),
			'section'     => 'medicine_shop_preloader_section_setting',
			'settings'    => 'medicine_shop_preloader_setting',
			'type'        => 'checkbox'
		) 
	);

	$wp_customize->add_setting(
    	'medicine_shop_preloader_text',
    	array(
			'default' => 'Loading',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'medicine_shop_preloader_text',
		array(
		    'label'   		=> __('Preloader Text','medicine-shop'),
		    'section'		=> 'medicine_shop_preloader_section_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)
	);

	// Preloader Background Color Setting
    $wp_customize->add_setting(
        'medicine_shop_preloader_bg_color',
        array(
            'default' => '#ffffff',
            'sanitize_callback' => 'sanitize_hex_color',
            'capability' => 'edit_theme_options',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'medicine_shop_preloader_bg_color',
            array(
                'label' => esc_html__('Preloader Background Color', 'medicine-shop'),
                'section' => 'medicine_shop_preloader_section_setting', // Adjust section if needed
                'settings' => 'medicine_shop_preloader_bg_color',
            )
        )
    );

    // Preloader Color Setting
    $wp_customize->add_setting(
        'medicine_shop_preloader_color',
        array(
            'default' => '#35c7e0',
            'sanitize_callback' => 'sanitize_hex_color',
            'capability' => 'edit_theme_options',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'medicine_shop_preloader_color',
            array(
                'label' => esc_html__('Preloader Color', 'medicine-shop'),
                'section' => 'medicine_shop_preloader_section_setting', // Adjust section if needed
                'settings' => 'medicine_shop_preloader_color',
            )
        )
    );

    $wp_customize->add_setting( 'medicine_shop_upgrade_page_settings_6',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new Medicine_Shop_Control_Upgrade(
        $wp_customize, 'medicine_shop_upgrade_page_settings_6',
            array(
                'priority'      => 200,
                'section'       => 'medicine_shop_preloader_section_setting',
                'settings'      => 'medicine_shop_upgrade_page_settings_6',
                'label'         => __( 'Medicine Shop Pro comes with additional features.', 'medicine-shop' ),
                'choices'       => array( __( '12+ Sections', 'medicine-shop' ), __( 'One Click Demo Importer', 'medicine-shop' ), __( 'Section Reordering Facility', 'medicine-shop' ),__( 'Advance Typography', 'medicine-shop' ),__( 'Easy Customization', 'medicine-shop' ),__( '24x7 Support', 'medicine-shop' ), )
            )
        )
    ); 

	/*=========================================
	Scroll To Top Section
	=========================================*/
	$wp_customize->add_section(
		'medicine_shop_scroll_to_top_section_setting', array(
			'title' => esc_html__( 'Scroll To Top', 'medicine-shop' ),
			'priority' => 3,
			'panel' => 'medicine_shop_general',
		)
	);

	// Scroll To Top Hide/ Show Setting 
	$wp_customize->add_setting( 
		'medicine_shop_scroll_top_setting' , 
		array(
			'default' => '1',
			'sanitize_callback' => 'medicine_shop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
		) 
	);

	$wp_customize->add_control(
	'medicine_shop_scroll_top_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Scroll To Top', 'medicine-shop' ),
			'section'     => 'medicine_shop_scroll_to_top_section_setting',
			'settings'    => 'medicine_shop_scroll_top_setting',
			'type'        => 'checkbox'
		) 
	);

	// Scroll To Top Color Setting
	$wp_customize->add_setting(
		'medicine_shop_scroll_top_color',
		array(
			'default'           => '#fff',
			'sanitize_callback' => 'sanitize_hex_color',
			'capability'        => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'medicine_shop_scroll_top_color',
			array(
				'label'    => esc_html__( 'Scroll To Top Color', 'medicine-shop' ),
				'section'  => 'medicine_shop_scroll_to_top_section_setting',
				'settings' => 'medicine_shop_scroll_top_color',
			)
		)
	);

	// Scroll To Top Background Color Setting
	$wp_customize->add_setting(
		'medicine_shop_scroll_top_bg_color',
		array(
			'default'           => '#35c7e0',
			'sanitize_callback' => 'sanitize_hex_color',
			'capability'        => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'medicine_shop_scroll_top_bg_color',
			array(
				'label'    => esc_html__( 'Scroll To Top Background Color', 'medicine-shop' ),
				'section'  => 'medicine_shop_scroll_to_top_section_setting',
				'settings' => 'medicine_shop_scroll_top_bg_color',
			)
		)
	);

	$wp_customize->add_setting( 'medicine_shop_upgrade_page_settings_7',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new Medicine_Shop_Control_Upgrade(
        $wp_customize, 'medicine_shop_upgrade_page_settings_7',
            array(
                'priority'      => 200,
                'section'       => 'medicine_shop_scroll_to_top_section_setting',
                'settings'      => 'medicine_shop_upgrade_page_settings_7',
                'label'         => __( 'Medicine Shop Pro comes with additional features.', 'medicine-shop' ),
                'choices'       => array( __( '12+ Sections', 'medicine-shop' ), __( 'One Click Demo Importer', 'medicine-shop' ), __( 'Section Reordering Facility', 'medicine-shop' ),__( 'Advance Typography', 'medicine-shop' ),__( 'Easy Customization', 'medicine-shop' ),__( '24x7 Support', 'medicine-shop' ), )
            )
        )
    ); 


	/*=========================================
	Woocommerce Section
	=========================================*/
	$wp_customize->add_section(
		'medicine_shop_woocommerce_section_setting', array(
			'title' => esc_html__( 'Woocommerce Settings', 'medicine-shop' ),
			'priority' => 3,
			'panel' => 'woocommerce',
		)
	);

	$wp_customize->add_setting(
    	'medicine_shop_custom_shop_per_columns',
    	array(
			'default' => '3',
			'sanitize_callback' => 'absint',
		)
	);	
	$wp_customize->add_control( 
		'medicine_shop_custom_shop_per_columns',
		array(
		    'label'   		=> __('Product Per Columns','medicine-shop'),
		    'section'		=> 'medicine_shop_woocommerce_section_setting',
			'type' 			=> 'number',
			'transport'         => $selective_refresh,
		)  
	);

	$wp_customize->add_setting(
    	'medicine_shop_custom_shop_product_per_page',
    	array(
			'default' => '9',
			'sanitize_callback' => 'absint',
		)
	);	
	$wp_customize->add_control( 
		'medicine_shop_custom_shop_product_per_page',
		array(
		    'label'   		=> __('Product Per Page','medicine-shop'),
		    'section'		=> 'medicine_shop_woocommerce_section_setting',
			'type' 			=> 'number',
			'transport'         => $selective_refresh,
		)  
	);

	// Woocommerce Sidebar Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'medicine_shop_wocommerce_sidebar_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'medicine_shop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
		) 
	);
	
	$wp_customize->add_control(
	'medicine_shop_wocommerce_sidebar_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Woocommerce Sidebar', 'medicine-shop' ),
			'section'     => 'medicine_shop_woocommerce_section_setting',
			'settings'    => 'medicine_shop_wocommerce_sidebar_setting',
			'type'        => 'checkbox'
		)
	);

	$wp_customize->add_setting( 'medicine_shop_upgrade_page_settings_8',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new Medicine_Shop_Control_Upgrade(
        $wp_customize, 'medicine_shop_upgrade_page_settings_8',
            array(
                'priority'      => 200,
                'section'       => 'medicine_shop_woocommerce_section_setting',
                'settings'      => 'medicine_shop_upgrade_page_settings_8',
                'label'         => __( 'Medicine Shop Pro comes with additional features.', 'medicine-shop' ),
                'choices'       => array( __( '12+ Sections', 'medicine-shop' ), __( 'One Click Demo Importer', 'medicine-shop' ), __( 'Section Reordering Facility', 'medicine-shop' ),__( 'Advance Typography', 'medicine-shop' ),__( 'Easy Customization', 'medicine-shop' ),__( '24x7 Support', 'medicine-shop' ), )
            )
        )
    ); 

	/*=========================================
	Sticky Header Section
	=========================================*/
	$wp_customize->add_section(
		'sticky_header_section_setting', array(
			'title' => esc_html__( 'Sticky Header Settings', 'medicine-shop' ),
			'priority' => 3,
			'panel' => 'medicine_shop_general',
		)
	);

	// Sticky Header Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'medicine_shop_sticky_header' , 
			array(
			'sanitize_callback' => 'medicine_shop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
		) 
	);
	
	$wp_customize->add_control(
	'medicine_shop_sticky_header', 
		array(
			'label'	      => esc_html__( 'Hide / Show Sticky Header', 'medicine-shop' ),
			'section'     => 'sticky_header_section_setting',
			'settings'    => 'medicine_shop_sticky_header',
			'type'        => 'checkbox'
		) 
	);

	 $wp_customize->add_setting( 'medicine_shop_upgrade_page_settings_9',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new Medicine_Shop_Control_Upgrade(
        $wp_customize, 'medicine_shop_upgrade_page_settings_9',
            array(
                'priority'      => 200,
                'section'       => 'sticky_header_section_setting',
                'settings'      => 'medicine_shop_upgrade_page_settings_9',
                'label'         => __( 'Medicine Shop Pro comes with additional features.', 'medicine-shop' ),
                'choices'       => array( __( '12+ Sections', 'medicine-shop' ), __( 'One Click Demo Importer', 'medicine-shop' ), __( 'Section Reordering Facility', 'medicine-shop' ),__( 'Advance Typography', 'medicine-shop' ),__( 'Easy Customization', 'medicine-shop' ),__( '24x7 Support', 'medicine-shop' ), )
            )
        )
    ); 

	/*=========================================
	404 Section
	=========================================*/
	$wp_customize->add_section(
		'medicine_shop_404_section', array(
			'title' => esc_html__( '404 Section', 'medicine-shop' ),
			'priority' => 1,
			'panel' => 'medicine_shop_general',
		)
	);

	$wp_customize->add_setting(
    	'medicine_shop_404_title',
    	array(
			'default' => '404',
			'sanitize_callback' => 'sanitize_text_field',
			'priority' => 2,
		)
	);	
	$wp_customize->add_control( 
		'medicine_shop_404_title',
		array(
		    'label'   		=> __('404 Heading','medicine-shop'),
		    'section'		=> 'medicine_shop_404_section',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	$wp_customize->add_setting(
    	'medicine_shop_404_Text',
    	array(
			'default' => 'Page Not Found',
			'sanitize_callback' => 'sanitize_text_field',
			'priority' => 2,
		)
	);	
	$wp_customize->add_control( 
		'medicine_shop_404_Text',
		array(
		    'label'   		=> __('404 Title','medicine-shop'),
		    'section'		=> 'medicine_shop_404_section',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	$wp_customize->add_setting(
    	'medicine_shop_404_content',
    	array(
			'default' => 'The page you were looking for could not be found.',
			'sanitize_callback' => 'sanitize_text_field',
			'priority' => 2,
		)
	);	
	$wp_customize->add_control( 
		'medicine_shop_404_content',
		array(
		    'label'   		=> __('404 Content','medicine-shop'),
		    'section'		=> 'medicine_shop_404_section',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	 $wp_customize->add_setting( 'medicine_shop_upgrade_page_settings_10',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new Medicine_Shop_Control_Upgrade(
        $wp_customize, 'medicine_shop_upgrade_page_settings_10',
            array(
                'priority'      => 200,
                'section'       => 'medicine_shop_404_section',
                'settings'      => 'medicine_shop_upgrade_page_settings_10',
                'label'         => __( 'Medicine Shop Pro comes with additional features.', 'medicine-shop' ),
                'choices'       => array( __( '12+ Sections', 'medicine-shop' ), __( 'One Click Demo Importer', 'medicine-shop' ), __( 'Section Reordering Facility', 'medicine-shop' ),__( 'Advance Typography', 'medicine-shop' ),__( 'Easy Customization', 'medicine-shop' ),__( '24x7 Support', 'medicine-shop' ), )
            )
        )
    ); 

}

add_action( 'customize_register', 'medicine_shop_general_setting' );