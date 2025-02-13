<?php
function medicine_shop_blog_setting( $wp_customize ) {

	$wp_customize->register_control_type( 'Medicine_Shop_Control_Upgrade' );

$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'medicine_shop_frontpage_sections', array(
			'priority' => 32,
			'title' => esc_html__( 'Frontpage Sections', 'medicine-shop' ),
		)
	);
	
	/*=========================================
	Slider Section
	=========================================*/
	$wp_customize->add_section(
		'medicine_shop_slider_section', array(
			'title' => esc_html__( 'Slider Section', 'medicine-shop' ),
			'priority' => 13,
			'panel' => 'medicine_shop_frontpage_sections',
		)
	);

	// Slider Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'medicine_shop_slider_setting' , 
			array(
			'default' => true,
			'sanitize_callback' => 'medicine_shop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'medicine_shop_slider_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Section', 'medicine-shop' ),
			'section'     => 'medicine_shop_slider_section',
			'settings'    => 'medicine_shop_slider_setting',
			'type'        => 'checkbox'
		) 
	);
	
	// Slider 1
	$wp_customize->add_setting( 
    	'medicine_shop_slider1',
    	array(
		'default'           => get_page_id_by_slug('slider-page'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'medicine_shop_slider1',
		array(
		    'label'   		=> __('Slider 1','medicine-shop'),
		    'section'		=> 'medicine_shop_slider_section',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);		

	// Slider 2
	$wp_customize->add_setting(
    	'medicine_shop_slider2',
    	array(
		'default'           => get_page_id_by_slug('slider-pages'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);

	$wp_customize->add_control( 
		'medicine_shop_slider2',
		array(
		    'label'   		=> __('Slider 2','medicine-shop'),
		    'section'		=> 'medicine_shop_slider_section',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// Slider 3
	$wp_customize->add_setting(
    	'medicine_shop_slider3',
    	array(
		'default'           => get_page_id_by_slug('slider-pagess'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);

	$wp_customize->add_control( 
		'medicine_shop_slider3',
		array(
		    'label'   		=> __('Slider 3','medicine-shop'),
		    'section'		=> 'medicine_shop_slider_section',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// Slider Text
	$wp_customize->add_setting( 
    	'medicine_shop_slider_text',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'medicine_shop_slider_text',
		array(
		    'label'   		=> __('Slider Text','medicine-shop'),
		    'section'		=> 'medicine_shop_slider_section',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)
	);

	$wp_customize->add_setting('medicine_shop_discount_sale_img1',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'medicine_shop_discount_sale_img1',array(
	    'label' => __('Select Top Product Image 1','medicine-shop'),
	     'section' => 'medicine_shop_slider_section'
	)));

	$wp_customize->add_setting('medicine_shop_topproduct_title1',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('medicine_shop_topproduct_title1',array(
		'label'	=> __('Add Top Products Text 1','medicine-shop'),
		'section'=> 'medicine_shop_slider_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('medicine_shop_product_sale_discount_title1',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('medicine_shop_product_sale_discount_title1',array(
		'label'	=> __('Add Products Title 1','medicine-shop'),
		'section'=> 'medicine_shop_slider_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('medicine_shop_product_btn_text1',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('medicine_shop_product_btn_text1',array(
		'label'	=> esc_html__('Add Product Button Text 1','medicine-shop'),
		'section'=> 'medicine_shop_slider_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('medicine_shop_product_btn_link1',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('medicine_shop_product_btn_link1',array(
		'label'	=> esc_html__('Add Product Button link 1','medicine-shop'),
		'section'=> 'medicine_shop_slider_section',
		'type'=> 'url'
	));

	$wp_customize->add_setting('medicine_shop_discount_sale_img2',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'medicine_shop_discount_sale_img2',array(
	    'label' => __('Select Top Product Image 2','medicine-shop'),
	     'section' => 'medicine_shop_slider_section'
	)));

	$wp_customize->add_setting('medicine_shop_topproduct_title2',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('medicine_shop_topproduct_title2',array(
		'label'	=> __('Add Top Products Text 2','medicine-shop'),
		'section'=> 'medicine_shop_slider_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('medicine_shop_product_sale_discount_title2',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('medicine_shop_product_sale_discount_title2',array(
		'label'	=> __('Add Products Title 2','medicine-shop'),
		'section'=> 'medicine_shop_slider_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('medicine_shop_product_btn_text2',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('medicine_shop_product_btn_text2',array(
		'label'	=> esc_html__('Add Product Button Text 2','medicine-shop'),
		'section'=> 'medicine_shop_slider_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('medicine_shop_product_btn_link2',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('medicine_shop_product_btn_link2',array(
		'label'	=> esc_html__('Add Product Button link 2','medicine-shop'),
		'section'=> 'medicine_shop_slider_section',
		'type'=> 'url'
	));

	$wp_customize->add_setting( 'medicine_shop_upgrade_page_settings_3',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new Medicine_Shop_Control_Upgrade(
        $wp_customize, 'medicine_shop_upgrade_page_settings_3',
            array(
                'priority'      => 200,
                'section'       => 'medicine_shop_slider_section',
                'settings'      => 'medicine_shop_upgrade_page_settings_3',
                'label'         => __( 'Medicine Shop Pro comes with additional features.', 'medicine-shop' ),
                'choices'       => array( __( '12+ Sections', 'medicine-shop' ), __( 'One Click Demo Importer', 'medicine-shop' ), __( 'Section Reordering Facility', 'medicine-shop' ),__( 'Advance Typography', 'medicine-shop' ),__( 'Easy Customization', 'medicine-shop' ),__( '24x7 Support', 'medicine-shop' ), )
            )
        )
    ); 

	/*=========================================
	product Section
	=========================================*/
	$wp_customize->add_section(
		'medicine_shop_our_products_section', array(
			'title' => esc_html__( 'Our Products Section', 'medicine-shop' ),
			'priority' => 13,
			'panel' => 'medicine_shop_frontpage_sections',
		)
	);

	// About Us Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'medicine_shop_our_products_show_hide_section' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'medicine_shop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'medicine_shop_our_products_show_hide_section', 
		array(
			'label'	      => esc_html__( 'Hide / Show Section', 'medicine-shop' ),
			'section'     => 'medicine_shop_our_products_section',
			'settings'    => 'medicine_shop_our_products_show_hide_section',
			'type'        => 'checkbox'
		) 
	);

	$wp_customize->add_setting('medicine_shop_featured_section_tittle_first',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('medicine_shop_featured_section_tittle_first',array(
		'label'	=> __('Add Best Selling Products Title','medicine-shop'),
		'section'	=> 'medicine_shop_our_products_section',
		'type'		=> 'text'
	));

	$medicine_shop_args = array(
	    'type'           => 'product',
	    'child_of'       => 0,
	    'parent'         => '',
	    'orderby'        => 'term_group',
	    'order'          => 'ASC',
	    'hide_empty'     => false,
	    'hierarchical'   => 1,
	    'number'         => '',
	    'taxonomy'       => 'product_cat',
	    'pad_counts'     => false
	);

	$categories = get_categories($medicine_shop_args);
	$medicine_shop_cats = array();
	$i = 0;
	foreach ($categories as $category) {
	    if ($i == 0) {
	        $default = $category->slug;
	        $i++;
	    }
	    $medicine_shop_cats[$category->slug] = $category->name;
	}

	// Set the default value to "none"
	$medicine_shop_default_value = 'product_cat1';
	$medicine_shop_default_valuee = 'product_cat2';


	// Add "None" as an option in the select dropdown
	$medicine_shop_cats_with_none = array_merge(array('none' => 'None'), $medicine_shop_cats);


	$wp_customize->add_setting(
	    'medicine_shop_our_product_product_category_first',
	    array(
	        'default'           => $medicine_shop_default_value,
	        'sanitize_callback' => 'medicine_shop_sanitize_select',
	    )
	);
	$wp_customize->add_control(
	    'medicine_shop_our_product_product_category_first',
	    array(
	        'type'    => 'select',
	        'choices' => $medicine_shop_cats_with_none,
	        'label'   => __('Select Best Selling Category', 'medicine-shop'),
	        'section' => 'medicine_shop_our_products_section',
	    )
	);

	$wp_customize->add_setting('medicine_shop_featured_section_tittle',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('medicine_shop_featured_section_tittle',array(
		'label'	=> __('Add Recommended Products Title','medicine-shop'),
		'section'	=> 'medicine_shop_our_products_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting(
	    'medicine_shop_our_product_product_category',
	    array(
	        'default'           => $medicine_shop_default_valuee,
	        'sanitize_callback' => 'medicine_shop_sanitize_select',
	    )
	);
	$wp_customize->add_control(
	    'medicine_shop_our_product_product_category',
	    array(
	        'type'    => 'select',
	        'choices' => $medicine_shop_cats_with_none,
	        'label'   => __('Select Recommended Products Category', 'medicine-shop'),
	        'section' => 'medicine_shop_our_products_section',
	    )
	);

	$wp_customize->add_setting( 'medicine_shop_upgrade_page_settings_4',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new Medicine_Shop_Control_Upgrade(
        $wp_customize, 'medicine_shop_upgrade_page_settings_4',
            array(
                'priority'      => 200,
                'section'       => 'medicine_shop_our_products_section',
                'settings'      => 'medicine_shop_upgrade_page_settings_4',
                'label'         => __( 'Medicine Shop Pro comes with additional features.', 'medicine-shop' ),
                'choices'       => array( __( '12+ Sections', 'medicine-shop' ), __( 'One Click Demo Importer', 'medicine-shop' ), __( 'Section Reordering Facility', 'medicine-shop' ),__( 'Advance Typography', 'medicine-shop' ),__( 'Easy Customization', 'medicine-shop' ),__( '24x7 Support', 'medicine-shop' ), )
            )
        )
    ); 
}

add_action( 'customize_register', 'medicine_shop_blog_setting' );

// service selective refresh
function medicine_shop_blog_section_partials( $wp_customize ){	
	// blog_title
	$wp_customize->selective_refresh->add_partial( 'blog_title', array(
		'selector'            => '.home-blog .title h6',
		'settings'            => 'blog_title',
		'render_callback'  => 'medicine_shop_blog_title_render_callback',
	
	) );
	
	// blog_subtitle
	$wp_customize->selective_refresh->add_partial( 'blog_subtitle', array(
		'selector'            => '.home-blog .title h2',
		'settings'            => 'blog_subtitle',
		'render_callback'  => 'medicine_shop_blog_subtitle_render_callback',
	
	) );
	
	// blog_description
	$wp_customize->selective_refresh->add_partial( 'blog_description', array(
		'selector'            => '.home-blog .title p',
		'settings'            => 'blog_description',
		'render_callback'  => 'medicine_shop_blog_description_render_callback',
	
	) );	
	}

add_action( 'customize_register', 'medicine_shop_blog_section_partials' );

// blog_title
function medicine_shop_blog_title_render_callback() {
	return get_theme_mod( 'blog_title' );
}

// blog_subtitle
function medicine_shop_blog_subtitle_render_callback() {
	return get_theme_mod( 'blog_subtitle' );
}

// service description
function medicine_shop_blog_description_render_callback() {
	return get_theme_mod( 'blog_description' );
}