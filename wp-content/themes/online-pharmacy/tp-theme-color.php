<?php

$online_pharmacy_tp_theme_css = '';

//theme color
$online_pharmacy_tp_color_option = get_theme_mod('online_pharmacy_tp_color_option');

if($online_pharmacy_tp_color_option != false){
$online_pharmacy_tp_theme_css .='button[type="submit"], .center1 .ring::before, .top-header, .main-navigation .menu > ul > li.highlight, #slider .read-btn a, #slider .slider-color-box, .woocommerce ul.products li.product .onsale,.woocommerce span.onsale, .wc-block-checkout__actions_row .wc-block-components-checkout-place-order-button,.wc-block-cart__submit-container a,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .page-numbers, .prev.page-numbers,
.next.page-numbers, span.meta-nav, .error-404 [type="submit"], #theme-sidebar .wp-block-search .wp-block-search__label:before,#theme-sidebar h3:before, #theme-sidebar h1.wp-block-heading:before, #theme-sidebar h2.wp-block-heading:before, #theme-sidebar h3.wp-block-heading:before,#theme-sidebar h4.wp-block-heading:before, #theme-sidebar h5.wp-block-heading:before, #theme-sidebar h6.wp-block-heading:before, #theme-sidebar button[type="submit"],
#footer button[type="submit"], #comments input[type="submit"], .site-info, .toggle-nav button{';
$online_pharmacy_tp_theme_css .='background-color: '.esc_attr($online_pharmacy_tp_color_option).';';
$online_pharmacy_tp_theme_css .='}';
}
if($online_pharmacy_tp_color_option != false){
$online_pharmacy_tp_theme_css .='a,a:hover, #theme-sidebar .textwidget a,
#footer .textwidget a,
.comment-body a,
.entry-content a,
.entry-summary a,
.box-content a, .box-info i, .readmore-btn a, #slider h1 a, #slider .slider-top-text, #slider .read-btn a:hover, .serv-sec-btn a:hover, #slider .slider-call a, a.added_to_cart.wc-forward, #theme-sidebar h3,  h1.wp-block-heading,  #theme-sidebar .wp-block-search .wp-block-search__label, #theme-sidebar h2.wp-block-heading, #theme-sidebar h3.wp-block-heading,#theme-sidebar h4.wp-block-heading, #theme-sidebar h5.wp-block-heading, #theme-sidebar h6.wp-block-heading, #theme-sidebar a:hover, #theme-sidebar .tagcloud a:hover,#sidebar p.wp-block-tag-cloud a:hover, .post_tag a:hover,#theme-sidebar .widget_tag_cloud a:hover, #footer li a:hover, #footer .tagcloud a:hover,#footer p.wp-block-tag-cloud a:hover{';
$online_pharmacy_tp_theme_css .='color: '.esc_attr($online_pharmacy_tp_color_option).';';
$online_pharmacy_tp_theme_css .='}';
}

if($online_pharmacy_tp_color_option != false){
$online_pharmacy_tp_theme_css .='.readmore-btn a, #footer li a:hover, #theme-sidebar li a:hover, p.wp-block-tag-cloud a:hover, #theme-sidebar .tagcloud a:hover,#sidebar p.wp-block-tag-cloud a:hover, .post_tag a:hover,#theme-sidebar .widget_tag_cloud a:hover, #footer .tagcloud a:hover,#footer p.wp-block-tag-cloud a:hover{';
	$online_pharmacy_tp_theme_css .='border-color: '.esc_attr($online_pharmacy_tp_color_option).';';
$online_pharmacy_tp_theme_css .='}';
}
if($online_pharmacy_tp_color_option != false){
$online_pharmacy_tp_theme_css .='.center1, .page-box, #theme-sidebar section{';
    $online_pharmacy_tp_theme_css .='border-left-color: '.esc_attr($online_pharmacy_tp_color_option).';';
$online_pharmacy_tp_theme_css .='}';
}
if($online_pharmacy_tp_color_option != false){
$online_pharmacy_tp_theme_css .='.center1{';
    $online_pharmacy_tp_theme_css .='border-top-color: '.esc_attr($online_pharmacy_tp_color_option).';';
$online_pharmacy_tp_theme_css .='}';
}
if($online_pharmacy_tp_color_option != false){
$online_pharmacy_tp_theme_css .='.page-box, #theme-sidebar section{';
    $online_pharmacy_tp_theme_css .='border-bottom-color: '.esc_attr($online_pharmacy_tp_color_option).';';
$online_pharmacy_tp_theme_css .='}';
}
// second color
$online_pharmacy_tp_color_sec = get_theme_mod('online_pharmacy_tp_color_sec');

if($online_pharmacy_tp_color_sec != false){
$online_pharmacy_tp_theme_css .='.book-tkt-btn a{';
$online_pharmacy_tp_theme_css .='background-color: '.esc_attr($online_pharmacy_tp_color_sec).';';
$online_pharmacy_tp_theme_css .='}';
}
if($online_pharmacy_tp_color_sec != false){
$online_pharmacy_tp_theme_css .='.top-header a:hover, .main-navigation a:hover, .logo h1 a:hover, .logo p a:hover,
.media-links i:hover, #product h3 a:hover, #slider .slider-call i{';
$online_pharmacy_tp_theme_css .='color: '.esc_attr($online_pharmacy_tp_color_sec).';';
$online_pharmacy_tp_theme_css .='}';
}
if($online_pharmacy_tp_color_sec != false){
$online_pharmacy_tp_theme_css .='#slider .slider-call i{';
$online_pharmacy_tp_theme_css .='border-color: '.esc_attr($online_pharmacy_tp_color_sec).';';
$online_pharmacy_tp_theme_css .='}';
}
//preloader

$online_pharmacy_tp_preloader_color1_option = get_theme_mod('online_pharmacy_tp_preloader_color1_option');
$online_pharmacy_tp_preloader_color2_option = get_theme_mod('online_pharmacy_tp_preloader_color2_option');
$online_pharmacy_tp_preloader_bg_color_option = get_theme_mod('online_pharmacy_tp_preloader_bg_color_option');

if($online_pharmacy_tp_preloader_color1_option != false){
$online_pharmacy_tp_theme_css .='.center1{';
	$online_pharmacy_tp_theme_css .='border-color: '.esc_attr($online_pharmacy_tp_preloader_color1_option).' !important;';
$online_pharmacy_tp_theme_css .='}';
}
if($online_pharmacy_tp_preloader_color1_option != false){
$online_pharmacy_tp_theme_css .='.center1 .ring::before{';
	$online_pharmacy_tp_theme_css .='background: '.esc_attr($online_pharmacy_tp_preloader_color1_option).' !important;';
$online_pharmacy_tp_theme_css .='}';
}
if($online_pharmacy_tp_preloader_color2_option != false){
$online_pharmacy_tp_theme_css .='.center2{';
	$online_pharmacy_tp_theme_css .='border-color: '.esc_attr($online_pharmacy_tp_preloader_color2_option).' !important;';
$online_pharmacy_tp_theme_css .='}';
}
if($online_pharmacy_tp_preloader_color2_option != false){
$online_pharmacy_tp_theme_css .='.center2 .ring::before{';
	$online_pharmacy_tp_theme_css .='background: '.esc_attr($online_pharmacy_tp_preloader_color2_option).' !important;';
$online_pharmacy_tp_theme_css .='}';
}
if($online_pharmacy_tp_preloader_bg_color_option != false){
$online_pharmacy_tp_theme_css .='.loader{';
	$online_pharmacy_tp_theme_css .='background: '.esc_attr($online_pharmacy_tp_preloader_bg_color_option).';';
$online_pharmacy_tp_theme_css .='}';
}

// footer-bg-color
$online_pharmacy_tp_footer_bg_color_option = get_theme_mod('online_pharmacy_tp_footer_bg_color_option');

if($online_pharmacy_tp_footer_bg_color_option != false){
$online_pharmacy_tp_theme_css .='#footer{';
	$online_pharmacy_tp_theme_css .='background: '.esc_attr($online_pharmacy_tp_footer_bg_color_option).' !important;';
$online_pharmacy_tp_theme_css .='}';
}

// logo tagline color
$online_pharmacy_site_tagline_color = get_theme_mod('online_pharmacy_site_tagline_color');

if($online_pharmacy_site_tagline_color != false){
$online_pharmacy_tp_theme_css .='.logo h1 a, .logo p, .logo p.site-title a{';
$online_pharmacy_tp_theme_css .='color: '.esc_attr($online_pharmacy_site_tagline_color).';';
$online_pharmacy_tp_theme_css .='}';
}

$online_pharmacy_logo_tagline_color = get_theme_mod('online_pharmacy_logo_tagline_color');
if($online_pharmacy_logo_tagline_color != false){
$online_pharmacy_tp_theme_css .='p.site-description{';
$online_pharmacy_tp_theme_css .='color: '.esc_attr($online_pharmacy_logo_tagline_color).';';
$online_pharmacy_tp_theme_css .='}';
}

// footer widget title color
$online_pharmacy_footer_widget_title_color = get_theme_mod('online_pharmacy_footer_widget_title_color');
if($online_pharmacy_footer_widget_title_color != false){
$online_pharmacy_tp_theme_css .='#footer h3, #footer h2.wp-block-heading{';
$online_pharmacy_tp_theme_css .='color: '.esc_attr($online_pharmacy_footer_widget_title_color).';';
$online_pharmacy_tp_theme_css .='}';
}

// copyright text color
$online_pharmacy_footer_copyright_text_color = get_theme_mod('online_pharmacy_footer_copyright_text_color');
if($online_pharmacy_footer_copyright_text_color != false){
$online_pharmacy_tp_theme_css .='#footer .site-info p, #footer .site-info a {';
$online_pharmacy_tp_theme_css .='color: '.esc_attr($online_pharmacy_footer_copyright_text_color).';';
$online_pharmacy_tp_theme_css .='}';
}