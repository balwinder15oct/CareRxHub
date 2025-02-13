<?php
function medicine_shop_header_settings( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';

    // Site Title Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'medicine_shop_site_title_setting' , 
			array(
			'default' => '0',
			'sanitize_callback' => 'medicine_shop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
		) 
	);
	
	$wp_customize->add_control(
	'medicine_shop_site_title_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Site Title', 'medicine-shop' ),
			'section'     => 'title_tagline',
			'settings'    => 'medicine_shop_site_title_setting',
			'type'        => 'checkbox'
		) 
	);

	// Tagline Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'medicine_shop_tagline_setting' , 
			array(
			'default' => true,
			'sanitize_callback' => 'medicine_shop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
		) 
	);

	
	$wp_customize->add_control(
	'medicine_shop_tagline_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Tagline', 'medicine-shop' ),
			'section'     => 'title_tagline',
			'settings'    => 'medicine_shop_tagline_setting',
			'type'        => 'checkbox'
		) 
	);

	// Add the setting for logo width
	$wp_customize->add_setting(
		'medicine_shop_logo_width',
		array(
			'sanitize_callback' => 'medicine_shop_sanitize_logo_width',
			'priority'          => 2,
		)
	);

	// Add control for logo width
	$wp_customize->add_control( 
		'medicine_shop_logo_width',
		array(
			'label'     => __('Logo Width', 'medicine-shop'),
			'section'   => 'title_tagline',
			'type'      => 'number',
			'input_attrs' => array(
				'min'   => 1,
				'max'   => 150,
				'step'  => 1,
			),
			'transport' => $selective_refresh,
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
                'section'       => 'title_tagline',
                'settings'      => 'medicine_shop_upgrade_page_settings_9',
                'label'         => __( 'Medicine Shop Pro comes with additional features.', 'medicine-shop' ),
                'choices'       => array( __( '12+ Sections', 'medicine-shop' ), __( 'One Click Demo Importer', 'medicine-shop' ), __( 'Section Reordering Facility', 'medicine-shop' ),__( 'Advance Typography', 'medicine-shop' ),__( 'Easy Customization', 'medicine-shop' ),__( '24x7 Support', 'medicine-shop' ), )
            )
        )
    ); 

	/*=========================================
	Header Settings Panel
	=========================================*/
	$wp_customize->add_panel( 
		'medicine_shop_header_section', 
		array(
			'priority'      => 2,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Header', 'medicine-shop'),
		) 
	);

	/*=========================================
	Medicine Shop Site Identity
	=========================================*/
	$wp_customize->add_section(
        'title_tagline',
        array(
        	'priority'      => 1,
            'title' 		=> __('Site Identity','medicine-shop'),
			'panel'  		=> 'medicine_shop_header_section',
		)
    );

	$wp_customize->register_panel_type( 'Medicine_Shop_WP_Customize_Panel' );
	$wp_customize->register_section_type( 'Medicine_Shop_WP_Customize_Section' );

}
add_action( 'customize_register', 'medicine_shop_header_settings' );

if ( class_exists( 'WP_Customize_Panel' ) ) {
  	class Medicine_Shop_WP_Customize_Panel extends WP_Customize_Panel {
	   public $panel;
	   public $type = 'medicine_shop_panel';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'type', 'panel', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;
	      return $array;
    	}
  	}
}

if ( class_exists( 'WP_Customize_Section' ) ) {
  	class Medicine_Shop_WP_Customize_Section extends WP_Customize_Section {
	   public $section;
	   public $type = 'medicine_shop_section';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'panel', 'type', 'description_hidden', 'section', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;

	      if ( $this->panel ) {
	        $array['customizeAction'] = sprintf( 'Customizing &#9656; %s', esc_html( $this->manager->get_panel( $this->panel )->title ) );
	      } else {
	        $array['customizeAction'] = 'Customizing';
	      }
	      return $array;
    	}
  	}
}