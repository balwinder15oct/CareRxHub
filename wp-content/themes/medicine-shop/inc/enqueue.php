<?php

// Load the JS and CSS.
add_action( 'customize_controls_enqueue_scripts', function() {

	$version = wp_get_theme()->get( 'Version' );

	wp_enqueue_script(
		'medicine-shop-customize-section-button',
		get_theme_file_uri( 'assets/js/customize-controls.js' ),
		[ 'customize-controls' ],
		$version,
		true
	);
	wp_localize_script(
		'medicine-shop-customize-section-button',
		'Medicine_Shop_Customizer_params',
		array(
			'ajaxurl' =>	admin_url( 'admin-ajax.php' )
		)
	);

	wp_enqueue_style(
		'medicine-shop-customize-section-button',
		get_theme_file_uri( 'assets/css/customize-controls.css' ),
		[ 'customize-controls' ],
 		$version
	);

} );

 /**
 * Enqueue scripts and styles.
 */
function medicine_shop_scripts() {
    // Styles
    wp_enqueue_style('all-min', get_template_directory_uri().'/assets/css/all.min.css');
    wp_enqueue_style('bootstrap-min', get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri().'/assets/css/fonts/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style('medicine-shop-editor-style', get_template_directory_uri().'/assets/css/editor-style.css');
    wp_enqueue_style('medicine-shop-main', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style('medicine-shop-woo', get_template_directory_uri() . '/assets/css/woo.css');
    wp_enqueue_style('medicine-shop-style', get_stylesheet_uri(), array());
    wp_style_add_data('medicine-shop-style', 'rtl', 'replace');

    // Define a unique handle for your inline stylesheet
    $handle = 'medicine-shop-style';
    
    // Get the generated custom CSS
    $medicine_shop_custom_css = "";

    $medicine_shop_blog_layouts = get_theme_mod('medicine_shop_blog_layout_option_setting', 'Default');
    if ($medicine_shop_blog_layouts == 'Default') {
        $medicine_shop_custom_css .= '.blog-item{';
        $medicine_shop_custom_css .= 'text-align:center;';
        $medicine_shop_custom_css .= '}';
    } elseif ($medicine_shop_blog_layouts == 'Left') {
        $medicine_shop_custom_css .= '.blog-item{';
        $medicine_shop_custom_css .= 'text-align:Left;';
        $medicine_shop_custom_css .= '}';
    } elseif ($medicine_shop_blog_layouts == 'Right') {
        $medicine_shop_custom_css .= '.blog-item{';
        $medicine_shop_custom_css .= 'text-align:Right;';
        $medicine_shop_custom_css .= '}';
    }

    // Enqueue the inline stylesheet
    wp_add_inline_style($handle, $medicine_shop_custom_css);

    // Add inline style for Scroll to Top
    $medicine_shop_scroll_top_bg_color = get_theme_mod('medicine_shop_scroll_top_bg_color', '#35c7e0');
    $medicine_shop_scroll_top_color = get_theme_mod('medicine_shop_scroll_top_color', '#fff');
    $medicine_shop_scroll_custom_css = "
        #scrolltop {
            background-color: {$medicine_shop_scroll_top_bg_color};
        }
        #scrolltop span {
            color: {$medicine_shop_scroll_top_color};
        }
    ";
    wp_add_inline_style('medicine-shop-style', $medicine_shop_scroll_custom_css);

    // Add inline style for Preloader
    $medicine_shop_preloader_bg_color = get_theme_mod('medicine_shop_preloader_bg_color', '#ffffff');
    $medicine_shop_preloader_color = get_theme_mod('medicine_shop_preloader_color', '#35c7e0');
    $medicine_shop_preloader_custom_css = "
        .loading {
            background-color: {$medicine_shop_preloader_bg_color};
        }
        .loader {
            border-color: {$medicine_shop_preloader_color};
            color: {$medicine_shop_preloader_color};
            text-shadow: 0 0 10px {$medicine_shop_preloader_color};
        }
        .loader::before {
            border-top-color: {$medicine_shop_preloader_color};
            border-right-color: {$medicine_shop_preloader_color};
        }
        .loader span::before {
            background: {$medicine_shop_preloader_color};
            box-shadow: 0 0 10px {$medicine_shop_preloader_color};
        }
    ";
    wp_add_inline_style('medicine-shop-style', $medicine_shop_preloader_custom_css);

    // Scripts
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), false, true);
    wp_enqueue_script('medicine-shop-theme-js', get_template_directory_uri() . '/assets/js/theme.js', array('jquery'), false, true);
    wp_enqueue_script('jquery-superfish', get_theme_file_uri('/assets/js/jquery.superfish.js'), array('jquery'), '2.1.2', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'medicine_shop_scripts');


//Admin Enqueue for Admin
function medicine_shop_admin_enqueue_scripts(){
	wp_enqueue_style('medicine-shop-admin-style', esc_url( get_template_directory_uri() ) . '/inc/aboutthemes/admin.css');
	wp_enqueue_script('dismiss-notice-script', get_stylesheet_directory_uri() . '/inc/aboutthemes/theme-admin-notice.js', array('jquery'), null, true);
}
add_action( 'admin_enqueue_scripts', 'medicine_shop_admin_enqueue_scripts' );