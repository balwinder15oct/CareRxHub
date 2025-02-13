<?php
/**
 * Online Pharmacy functions and definitions
 *
 * @package Online Pharmacy
 * @subpackage online_pharmacy
 */

function online_pharmacy_setup() {

	load_theme_textdomain( 'online-pharmacy', get_template_directory() . '/language' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'title-tag' );
	add_theme_support( "responsive-embeds" );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'online-pharmacy-featured-image', 2000, 1200, true );
	add_image_size( 'online-pharmacy-thumbnail-avatar', 100, 100, true );

	// Set the default content width.
	$GLOBALS['content_width'] = 525;

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary-menu'    => __( 'Primary Menu', 'online-pharmacy' ),
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
		'flex-height'  => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

	add_theme_support( 'html5', array('comment-form','comment-list','gallery','caption',) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	add_editor_style( array( 'assets/css/editor-style.css', online_pharmacy_fonts_url() ) );
}
add_action( 'after_setup_theme', 'online_pharmacy_setup' );

/**
 * Register custom fonts.
 */
function online_pharmacy_fonts_url(){
	$font_url = '';
	$online_pharmacy_font_family = array();
	$online_pharmacy_font_family[] = 'Roboto Slab:wght@100;200;300;400;500;600;700;800;900';
	$online_pharmacy_font_family[] = 'Work Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$online_pharmacy_font_family[] = 'Viga';

	$online_pharmacy_font_family[] = 'Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$online_pharmacy_font_family[] = 'Bad Script';
	$online_pharmacy_font_family[] = 'Bebas Neue';
	$online_pharmacy_font_family[] = 'Fjalla One';
	$online_pharmacy_font_family[] = 'PT Sans:ital,wght@0,400;0,700;1,400;1,700';
	$online_pharmacy_font_family[] = 'PT Serif:ital,wght@0,400;0,700;1,400;1,700';
	$online_pharmacy_font_family[] = 'Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900';
	$online_pharmacy_font_family[] = 'Roboto Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700';
	$online_pharmacy_font_family[] = 'Alex Brush';
	$online_pharmacy_font_family[] = 'Overpass:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$online_pharmacy_font_family[] = 'Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$online_pharmacy_font_family[] = 'Playball';
	$online_pharmacy_font_family[] = 'Alegreya:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900';
	$online_pharmacy_font_family[] = 'Julius Sans One';
	$online_pharmacy_font_family[] = 'Arsenal:ital,wght@0,400;0,700;1,400;1,700';
	$online_pharmacy_font_family[] = 'Slabo 13px';
	$online_pharmacy_font_family[] = 'Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900';
	$online_pharmacy_font_family[] = 'Overpass Mono:wght@300;400;500;600;700';
	$online_pharmacy_font_family[] = 'Source Sans Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900';
	$online_pharmacy_font_family[] = 'Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$online_pharmacy_font_family[] = 'Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900';
	$online_pharmacy_font_family[] = 'Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$online_pharmacy_font_family[] = 'Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$online_pharmacy_font_family[] = 'Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700';
	$online_pharmacy_font_family[] = 'Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$online_pharmacy_font_family[] = 'Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$online_pharmacy_font_family[] = 'Playfair Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900';
	$online_pharmacy_font_family[] = 'Quicksand:wght@300;400;500;600;700';
	$online_pharmacy_font_family[] = 'Padauk:wght@400;700';
	$online_pharmacy_font_family[] = 'Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000';
	$online_pharmacy_font_family[] = 'Inconsolata:wght@200;300;400;500;600;700;800;900&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000';
	$online_pharmacy_font_family[] = 'Bitter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000';
	$online_pharmacy_font_family[] = 'Pacifico';
	$online_pharmacy_font_family[] = 'Indie Flower';
	$online_pharmacy_font_family[] = 'VT323';
	$online_pharmacy_font_family[] = 'Dosis:wght@200;300;400;500;600;700;800';
	$online_pharmacy_font_family[] = 'Frank Ruhl Libre:wght@300;400;500;700;900';
	$online_pharmacy_font_family[] = 'Fjalla One';
	$online_pharmacy_font_family[] = 'Figtree:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$online_pharmacy_font_family[] = 'Oxygen:wght@300;400;700';
	$online_pharmacy_font_family[] = 'Arvo:ital,wght@0,400;0,700;1,400;1,700';
	$online_pharmacy_font_family[] = 'Noto Serif:ital,wght@0,400;0,700;1,400;1,700';
	$online_pharmacy_font_family[] = 'Lobster';
	$online_pharmacy_font_family[] = 'Crimson Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700';
	$online_pharmacy_font_family[] = 'Yanone Kaffeesatz:wght@200;300;400;500;600;700';
	$online_pharmacy_font_family[] = 'Anton';
	$online_pharmacy_font_family[] = 'Libre Baskerville:ital,wght@0,400;0,700;1,400';
	$online_pharmacy_font_family[] = 'Bree Serif';
	$online_pharmacy_font_family[] = 'Gloria Hallelujah';
	$online_pharmacy_font_family[] = 'Abril Fatface';
	$online_pharmacy_font_family[] = 'Varela Round';
	$online_pharmacy_font_family[] = 'Vampiro One';
	$online_pharmacy_font_family[] = 'Shadows Into Light';
	$online_pharmacy_font_family[] = 'Cuprum:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$online_pharmacy_font_family[] = 'Rokkitt:wght@100;200;300;400;500;600;700;800;900';
	$online_pharmacy_font_family[] = 'Vollkorn:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900';
	$online_pharmacy_font_family[] = 'Francois One';
	$online_pharmacy_font_family[] = 'Orbitron:wght@400;500;600;700;800;900';
	$online_pharmacy_font_family[] = 'Patua One';
	$online_pharmacy_font_family[] = 'Acme';
	$online_pharmacy_font_family[] = 'Satisfy';
	$online_pharmacy_font_family[] = 'Josefin Slab:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700';
	$online_pharmacy_font_family[] = 'Quattrocento Sans:ital,wght@0,400;0,700;1,400;1,700';
	$online_pharmacy_font_family[] = 'Architects Daughter';
	$online_pharmacy_font_family[] = 'Russo One';
	$online_pharmacy_font_family[] = 'Monda:wght@400;700';
	$online_pharmacy_font_family[] = 'Righteous';
	$online_pharmacy_font_family[] = 'Lobster Two:ital,wght@0,400;0,700;1,400;1,700';
	$online_pharmacy_font_family[] = 'Hammersmith One';
	$online_pharmacy_font_family[] = 'Courgette';
	$online_pharmacy_font_family[] = 'Permanent Marke';
	$online_pharmacy_font_family[] = 'Cherry Swash:wght@400;700';
	$online_pharmacy_font_family[] = 'Cormorant Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700';
	$online_pharmacy_font_family[] = 'Poiret One';
	$online_pharmacy_font_family[] = 'BenchNine:wght@300;400;700';
	$online_pharmacy_font_family[] = 'Economica:ital,wght@0,400;0,700;1,400;1,700';
	$online_pharmacy_font_family[] = 'Handlee';
	$online_pharmacy_font_family[] = 'Cardo:ital,wght@0,400;0,700;1,400';
	$online_pharmacy_font_family[] = 'Alfa Slab One';
	$online_pharmacy_font_family[] = 'Averia Serif Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700';
	$online_pharmacy_font_family[] = 'Cookie';
	$online_pharmacy_font_family[] = 'Chewy';
	$online_pharmacy_font_family[] = 'Great Vibes';
	$online_pharmacy_font_family[] = 'Coming Soon';
	$online_pharmacy_font_family[] = 'Philosopher:ital,wght@0,400;0,700;1,400;1,700';
	$online_pharmacy_font_family[] = 'Days One';
	$online_pharmacy_font_family[] = 'Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$online_pharmacy_font_family[] = 'Shrikhand';
	$online_pharmacy_font_family[] = 'Tangerine:wght@400;700';
	$online_pharmacy_font_family[] = 'IM Fell English SC';
	$online_pharmacy_font_family[] = 'Boogaloo';
	$online_pharmacy_font_family[] = 'Bangers';
	$online_pharmacy_font_family[] = 'Fredoka One';
	$online_pharmacy_font_family[] = 'Volkhov:ital,wght@0,400;0,700;1,400;1,700';
	$online_pharmacy_font_family[] = 'Shadows Into Light Two';
	$online_pharmacy_font_family[] = 'Marck Script';
	$online_pharmacy_font_family[] = 'Sacramento';
	$online_pharmacy_font_family[] = 'Unica One';
	$online_pharmacy_font_family[] = 'Dancing Script:wght@400;500;600;700';
	$online_pharmacy_font_family[] = 'Exo 2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$online_pharmacy_font_family[] = 'Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$online_pharmacy_font_family[] = 'Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$online_pharmacy_font_family[] = 'DM Serif Display:ital@0;1';
	$online_pharmacy_font_family[] = 'Open Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800';

	$online_pharmacy_query_args = array(
		'family'	=> rawurlencode(implode('|',$online_pharmacy_font_family)),
	);
	$font_url = add_query_arg($online_pharmacy_query_args,'//fonts.googleapis.com/css');
	return $font_url;
	$contents = wptt_get_webfont_url( esc_url_raw( $fonts_url ) );
}

/**
 * Register widget area.
 */
function online_pharmacy_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'online-pharmacy' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'online-pharmacy' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'online-pharmacy' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your sidebar on pages.', 'online-pharmacy' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'online-pharmacy' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'online-pharmacy' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'online-pharmacy' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'online-pharmacy' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'online-pharmacy' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'online-pharmacy' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'online-pharmacy' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'online-pharmacy' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'online-pharmacy' ),
		'id'            => 'footer-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'online-pharmacy' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'online_pharmacy_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function online_pharmacy_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'online-pharmacy-fonts', online_pharmacy_fonts_url(), array(), null );

	// Bootstrap
	wp_enqueue_style( 'bootstrap-css', get_theme_file_uri( '/assets/css/bootstrap.css' ) );
	
	// Theme stylesheet.
	wp_enqueue_style( 'online-pharmacy-style', get_stylesheet_uri() );
	require get_parent_theme_file_path( '/tp-theme-color.php' );
	wp_add_inline_style( 'online-pharmacy-style',$online_pharmacy_tp_theme_css );
	require get_parent_theme_file_path( '/tp-body-width-layout.php' );
	wp_add_inline_style( 'online-pharmacy-style',$online_pharmacy_tp_theme_css );
	wp_style_add_data('online-pharmacy-style', 'rtl', 'replace');

	// Theme block stylesheet.
	wp_enqueue_style( 'online-pharmacy-block-style', get_theme_file_uri( '/assets/css/blocks.css' ), array( 'online-pharmacy-style' ), '1.0' );

	// Fontawesome
	wp_enqueue_style( 'fontawesome-css', get_theme_file_uri( '/assets/css/fontawesome-all.css' ) );

	wp_enqueue_script( 'bootstrap-js', get_theme_file_uri( '/assets/js/bootstrap.js' ), array( 'jquery' ), true );
	
	wp_enqueue_script( 'online-pharmacy-custom-scripts',( get_template_directory_uri() ) . '/assets/js/online-pharmacy-custom.js', array('jquery'), true);

	wp_enqueue_script( 'online-pharmacy-focus-nav',( get_template_directory_uri() ) . '/assets/js/focus-nav.js', array('jquery'), true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	$online_pharmacy_body_font_family = get_theme_mod('online_pharmacy_body_font_family', '');

	$online_pharmacy_heading_font_family = get_theme_mod('online_pharmacy_heading_font_family', '');

	$online_pharmacy_menu_font_family = get_theme_mod('online_pharmacy_menu_font_family', '');

	$online_pharmacy_tp_theme_css = '
		body{
		    font-family: '.esc_html($online_pharmacy_body_font_family).';
		}
		p.simplep{
		    font-family: '.esc_html($online_pharmacy_body_font_family).';
		}
		.more-btn a{
		    font-family: '.esc_html($online_pharmacy_body_font_family).';
		}
		h1,h2.woocommerce-loop-product__title,.woocommerce div.product .product_title {
		    font-family: '.esc_html($online_pharmacy_heading_font_family).';
		}
		h2{
		    font-family: '.esc_html($online_pharmacy_heading_font_family).';
		}
		h3{
		    font-family: '.esc_html($online_pharmacy_heading_font_family).';
		}
		h4{
		    font-family: '.esc_html($online_pharmacy_heading_font_family).';
		}
		h5{
		    font-family: '.esc_html($online_pharmacy_heading_font_family).';
		}
		h6{
		    font-family: '.esc_html($online_pharmacy_heading_font_family).';
		}
		#theme-sidebar .wp-block-search .wp-block-search__label{
		    font-family: '.esc_html($online_pharmacy_heading_font_family).';
		}
		.main-navigation a {
		    font-family: '.esc_html($online_pharmacy_menu_font_family).';
		}
	';
	wp_add_inline_style('online-pharmacy-style', $online_pharmacy_tp_theme_css);
}
add_action( 'wp_enqueue_scripts', 'online_pharmacy_scripts' );

//Admin Enqueue for Admin
function online_pharmacy_admin_enqueue_scripts(){
	wp_enqueue_style('online-pharmacy-admin-style',( get_template_directory_uri() ) . '/assets/css/admin.css');
	wp_enqueue_script( 'online-pharmacy-custom-scripts',( get_template_directory_uri() ). '/assets/js/online-pharmacy-custom.js', array('jquery'), true);
	wp_register_script( 'online-pharmacy-admin-script', get_template_directory_uri() . '/assets/js/online-pharmacy-admin.js', array( 'jquery' ), '', true );

	wp_localize_script(
		'online-pharmacy-admin-script',
		'online_pharmacy',
		array(
			'admin_ajax'	=>	admin_url('admin-ajax.php'),
			'wpnonce'			=>	wp_create_nonce('online_pharmacy_dismissed_notice_nonce')
		)
	);
	wp_enqueue_script('online-pharmacy-admin-script');

    wp_localize_script( 'online-pharmacy-admin-script', 'online_pharmacy_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
}
add_action( 'admin_enqueue_scripts', 'online_pharmacy_admin_enqueue_scripts' );

/*radio button sanitization*/
function online_pharmacy_sanitize_choices( $input, $setting ) {
    global $wp_customize;
    $control = $wp_customize->get_control( $setting->id );
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

/* Excerpt Limit Begin */
function online_pharmacy_excerpt_function($excerpt_count = 35) {
    $online_pharmacy_excerpt = get_the_excerpt();

    $online_pharmacy_text_excerpt = wp_strip_all_tags($online_pharmacy_excerpt);

    $online_pharmacy_excerpt_limit = esc_attr(get_theme_mod('online_pharmacy_excerpt_count', $excerpt_count));

    $online_pharmacy_theme_excerpt = implode(' ', array_slice(explode(' ', $online_pharmacy_text_excerpt), 0, $online_pharmacy_excerpt_limit));

    return $online_pharmacy_theme_excerpt;
}

function online_pharmacy_sanitize_dropdown_pages( $page_id, $setting ) {
  // Ensure $input is an absolute integer.
  $page_id = absint( $page_id );
  // If $page_id is an ID of a published page, return it; otherwise, return the default.
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}
// Sanitize Sortable control.
function online_pharmacy_sanitize_sortable( $val, $setting ) {
	if ( is_string( $val ) || is_numeric( $val ) ) {
		return array(
			esc_attr( $val ),
		);
	}
	$sanitized_value = array();
	foreach ( $val as $item ) {
		if ( isset( $setting->manager->get_control( $setting->id )->choices[ $item ] ) ) {
			$sanitized_value[] = esc_attr( $item );
		}
	}
	return $sanitized_value;
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'online_pharmacy_loop_columns');
if (!function_exists('online_pharmacy_loop_columns')) {
	function online_pharmacy_loop_columns() {
		$columns = get_theme_mod( 'online_pharmacy_per_columns', 3 );
		return $columns;
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'online_pharmacy_per_page', 20 );
function online_pharmacy_per_page( $online_pharmacy_cols ) {
  	$online_pharmacy_cols = get_theme_mod( 'online_pharmacy_product_per_page', 9 );
	return $online_pharmacy_cols;
}
// Category count 
function online_pharmacy_display_post_category_count() {
    $online_pharmacy_category = get_the_category();
    $online_pharmacy_category_count = ($online_pharmacy_category) ? count($online_pharmacy_category) : 0;
    $online_pharmacy_category_text = ($online_pharmacy_category_count === 1) ? 'category' : 'categories'; // Check for pluralization
    echo $online_pharmacy_category_count . ' ' . $online_pharmacy_category_text;
}

//post tag
function custom_tags_filter($online_pharmacy_tag_list) {
    // Replace the comma (,) with an empty string
    $online_pharmacy_tag_list = str_replace(', ', '', $online_pharmacy_tag_list);

    return $online_pharmacy_tag_list;
}
add_filter('the_tags', 'custom_tags_filter');

function custom_output_tags() {
    $online_pharmacy_tags = get_the_tags();

    if ($online_pharmacy_tags) {
        $online_pharmacy_tags_output = '<div class="post_tag">Tags: ';

        $online_pharmacy_first_tag = reset($online_pharmacy_tags);

        foreach ($online_pharmacy_tags as $tag) {
            $online_pharmacy_tags_output .= '<a href="' . esc_url(get_tag_link($tag)) . '" rel="tag" class="me-2">' . esc_html($tag->name) . '</a>';
            if ($tag !== $online_pharmacy_first_tag) {
                $online_pharmacy_tags_output .= ' ';
            }
        }

        $online_pharmacy_tags_output .= '</div>';

        echo $online_pharmacy_tags_output;
    }
}


function online_pharmacy_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

function online_pharmacy_sanitize_number_range( $number, $setting ) {

	// Ensure input is an absolute integer.
	$number = absint( $number );

	// Get the input attributes associated with the setting.
	$atts = $setting->manager->get_control( $setting->id )->input_attrs;

	// Get minimum number in the range.
	$min = ( isset( $atts['min'] ) ? $atts['min'] : $number );

	// Get maximum number in the range.
	$max = ( isset( $atts['max'] ) ? $atts['max'] : $number );

	// Get step.
	$step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );

	// If the number is within the valid range, return it; otherwise, return the default
	return ( $min <= $number && $number <= $max && is_int( $number / $step ) ? $number : $setting->default );
}

function online_pharmacy_sanitize_checkbox( $input ) {
	// Boolean check
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function online_pharmacy_sanitize_number_absint( $number, $setting ) {
	// Ensure $number is an absolute integer (whole number, zero or greater).
	$number = absint( $number );

	// If the input is an absolute integer, return it; otherwise, return the default
	return ( $number ? $number : $setting->default );
}

/**
  * Use front-page.php when Front page displays is set to a static page.
 */
function online_pharmacy_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template','online_pharmacy_front_page_template' );

define('ONLINE_PHARMACY_CREDIT',__('https://www.themespride.com/themes/free-pharmacy-wordpress-theme','online-pharmacy') );
if ( ! function_exists( 'online_pharmacy_credit' ) ) {
	function online_pharmacy_credit(){
		echo "<a href=".esc_url(ONLINE_PHARMACY_CREDIT)." target='_blank'>".esc_html__(get_theme_mod('online_pharmacy_footer_text',__('Online Pharmacy WordPress Theme','online-pharmacy')))."</a>";
	}
}

add_action( 'wp_ajax_online_pharmacy_dismissed_notice_handler', 'online_pharmacy_ajax_notice_handler' );

function online_pharmacy_ajax_notice_handler() {
	if (!wp_verify_nonce($_POST['wpnonce'], 'online_pharmacy_dismissed_notice_nonce')) {
		exit;
	}
    if ( isset( $_POST['type'] ) ) {
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        update_option( 'dismissed-' . $type, TRUE );
    }
}

function online_pharmacy_sanitize_select( $input, $setting ){
    $input = sanitize_key($input);
    $choices = $setting->manager->get_control( $setting->id )->choices;
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

function online_pharmacy_activation_notice() { 

	if ( ! get_option('dismissed-get_started', FALSE ) ) { ?>

    <div class="online-pharmacy-notice-wrapper updated notice notice-get-started-class is-dismissible" data-notice="get_started">
        <div class="online-pharmacy-getting-started-notice clearfix">
            <div class="online-pharmacy-theme-notice-content">
                <h2 class="online-pharmacy-notice-h2">
                    <?php
                printf(
                /* translators: 1: welcome page link starting html tag, 2: welcome page link ending html tag. */
                    esc_html__( 'Welcome! Thank you for choosing %1$s!', 'online-pharmacy' ), '<strong>'. wp_get_theme()->get('Name'). '</strong>' );
                ?>
                </h2>

                <p class="plugin-install-notice"><?php echo sprintf(__('Click here to get started with the theme set-up.', 'online-pharmacy')) ?></p>

                <a class="online-pharmacy-btn-get-started button button-primary button-hero online-pharmacy-button-padding" href="<?php echo esc_url( admin_url( 'themes.php?page=online-pharmacy-about' )); ?>" ><?php esc_html_e( 'Begin Installation - Import Demo', 'online-pharmacy' ) ?></a><span class="online-pharmacy-push-down">
                <?php
                    /* translators: %1$s: Anchor link start %2$s: Anchor link end */
                    printf(
                        'or %1$sCustomize theme%2$s</a></span>',
                        '<a target="_blank" href="' . esc_url( admin_url( 'customize.php' ) ) . '">',
                        '</a>'
                    );
                ?>
            </div>
        </div>
    </div>
<?php }

}

add_action( 'admin_notices', 'online_pharmacy_activation_notice' );

add_action('after_switch_theme', 'online_pharmacy_setup_options');
function online_pharmacy_setup_options () {
    update_option('dismissed-get_started', FALSE );
}
/**
 * Logo Custamization.
 */

function online_pharmacy_logo_width(){

	$online_pharmacy_logo_width   = get_theme_mod( 'online_pharmacy_logo_width', 150 );

	echo "<style type='text/css' media='all'>"; ?>
		img.custom-logo{
		    width: <?php echo absint( $online_pharmacy_logo_width ); ?>px;
		    max-width: 100%;
	}
	<?php echo "</style>";
}

add_action( 'wp_head', 'online_pharmacy_logo_width' );

/**
 * Implement the Custom Header feature.
 */
require get_parent_theme_file_path( '/inc/custom-header.php' );

/**
 * Custom template tags for this theme.
 */
require get_parent_theme_file_path( '/inc/template-tags.php' );

/**
 * Additional features to allow styling of the templates.
 */
require get_parent_theme_file_path( '/inc/template-functions.php' );

/**
 * Customizer additions.
 */
require get_parent_theme_file_path( '/inc/customizer.php' );

/**
 * About Theme Page
 */
require get_parent_theme_file_path( '/inc/about-theme.php' );

/**
 * Load Theme Web File
 */
require get_parent_theme_file_path('/inc/wptt-webfont-loader.php' );
/**
 * Load Toggle file
 */
require get_parent_theme_file_path( '/inc/controls/customize-control-toggle.php' );

/**
 * load sortable file
 */
require get_parent_theme_file_path( '/inc/controls/sortable-control.php' );

/**
 * TGM Recommendation
 */
require get_parent_theme_file_path( '/inc/TGM/tgm.php' );