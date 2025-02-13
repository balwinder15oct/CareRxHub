<?php

	$online_pharmacy_tp_theme_css = "";

	$online_pharmacy_theme_lay = get_theme_mod( 'online_pharmacy_tp_body_layout_settings','Full');
    if($online_pharmacy_theme_lay == 'Container'){
		$online_pharmacy_tp_theme_css .='body{';
			$online_pharmacy_tp_theme_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$online_pharmacy_tp_theme_css .='}';
		$online_pharmacy_tp_theme_css .='.page-template-front-page .menubar{';
			$online_pharmacy_tp_theme_css .='position: static;';
		$online_pharmacy_tp_theme_css .='}';
		$online_pharmacy_tp_theme_css .='@media screen and (max-width:575px){';
		$online_pharmacy_tp_theme_css .='body{';
			$online_pharmacy_tp_theme_css .='max-width: 100%; padding-right:0px; padding-left: 0px';
		$online_pharmacy_tp_theme_css .='} }';
		$online_pharmacy_tp_theme_css .='.scrolled{';
			$online_pharmacy_tp_theme_css .='width: auto; left:0; right:0;';
		$online_pharmacy_tp_theme_css .='}';
	}else if($online_pharmacy_theme_lay == 'Container Fluid'){
		$online_pharmacy_tp_theme_css .='body{';
			$online_pharmacy_tp_theme_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$online_pharmacy_tp_theme_css .='}';
		$online_pharmacy_tp_theme_css .='.page-template-front-page .menubar{';
			$online_pharmacy_tp_theme_css .='width: 99%';
		$online_pharmacy_tp_theme_css .='}';
		$online_pharmacy_tp_theme_css .='@media screen and (max-width:575px){';
		$online_pharmacy_tp_theme_css .='body{';
			$online_pharmacy_tp_theme_css .='max-width: 100%; padding-right:0px; padding-left:0px';
		$online_pharmacy_tp_theme_css .='} }';
		$online_pharmacy_tp_theme_css .='.scrolled{';
			$online_pharmacy_tp_theme_css .='width: auto; left:0; right:0;';
		$online_pharmacy_tp_theme_css .='}';
	}else if($online_pharmacy_theme_lay == 'Full'){
		$online_pharmacy_tp_theme_css .='body{';
			$online_pharmacy_tp_theme_css .='max-width: 100%;';
		$online_pharmacy_tp_theme_css .='}';
	}

    $online_pharmacy_scroll_position = get_theme_mod( 'online_pharmacy_scroll_top_position','Right');
    if($online_pharmacy_scroll_position == 'Right'){
        $online_pharmacy_tp_theme_css .='#return-to-top{';
            $online_pharmacy_tp_theme_css .='right: 20px;';
        $online_pharmacy_tp_theme_css .='}';
    }else if($online_pharmacy_scroll_position == 'Left'){
        $online_pharmacy_tp_theme_css .='#return-to-top{';
            $online_pharmacy_tp_theme_css .='left: 20px;';
        $online_pharmacy_tp_theme_css .='}';
    }else if($online_pharmacy_scroll_position == 'Center'){
        $online_pharmacy_tp_theme_css .='#return-to-top{';
            $online_pharmacy_tp_theme_css .='right: 50%;left: 50%;';
        $online_pharmacy_tp_theme_css .='}';
    }

		//Social icon Font size
		$online_pharmacy_social_icon_fontsize = get_theme_mod('online_pharmacy_social_icon_fontsize');
				$online_pharmacy_tp_theme_css .='.media-links i{';
		$online_pharmacy_tp_theme_css .='font-size: '.esc_attr($online_pharmacy_social_icon_fontsize).'px;';
				$online_pharmacy_tp_theme_css .='}';

		// site title and tagline font size option
		$online_pharmacy_site_title_font_size = get_theme_mod('online_pharmacy_site_title_font_size', 30);{
				$online_pharmacy_tp_theme_css .='.logo h1 a, .logo p a{';
		$online_pharmacy_tp_theme_css .='font-size: '.esc_attr($online_pharmacy_site_title_font_size).'px;';
				$online_pharmacy_tp_theme_css .='}';
		}

		$online_pharmacy_site_tagline_font_size = get_theme_mod('online_pharmacy_site_tagline_font_size', 15);{
				$online_pharmacy_tp_theme_css .='.logo p{';
		$online_pharmacy_tp_theme_css .='font-size: '.esc_attr($online_pharmacy_site_tagline_font_size).'px;';
				$online_pharmacy_tp_theme_css .='}';
		}

$online_pharmacy_footer_widget_image = get_theme_mod('online_pharmacy_footer_widget_image');
if($online_pharmacy_footer_widget_image != false){
$online_pharmacy_tp_theme_css .='#footer{';
	$online_pharmacy_tp_theme_css .='background: url('.esc_attr($online_pharmacy_footer_widget_image).');';
$online_pharmacy_tp_theme_css .='}';
}

//menu font size
$online_pharmacy_menu_font_size = get_theme_mod('online_pharmacy_menu_font_size', '');{
$online_pharmacy_tp_theme_css .='.main-navigation a{';
	$online_pharmacy_tp_theme_css .='font-size: '.esc_attr($online_pharmacy_menu_font_size).'px;';
$online_pharmacy_tp_theme_css .='}';
}

// menu text tranform
$online_pharmacy_menu_text_tranform = get_theme_mod( 'online_pharmacy_menu_text_tranform','Uppercase');
if($online_pharmacy_menu_text_tranform == 'Uppercase'){
$online_pharmacy_tp_theme_css .='.main-navigation a {';
	$online_pharmacy_tp_theme_css .='text-transform: uppercase;';
$online_pharmacy_tp_theme_css .='}';
}else if($online_pharmacy_menu_text_tranform == 'Lowercase'){
$online_pharmacy_tp_theme_css .='.main-navigation a {';
	$online_pharmacy_tp_theme_css .='text-transform: lowercase;';
$online_pharmacy_tp_theme_css .='}';
}
else if($online_pharmacy_menu_text_tranform == 'Capitalize'){
$online_pharmacy_tp_theme_css .='.main-navigation a {';
	$online_pharmacy_tp_theme_css .='text-transform: capitalize;';
$online_pharmacy_tp_theme_css .='}';
}

// related post
$online_pharmacy_related_post_mob = get_theme_mod('online_pharmacy_related_post_mob', true);
$online_pharmacy_related_post = get_theme_mod('online_pharmacy_remove_related_post', true);
$online_pharmacy_tp_theme_css .= '.related-post-block {';
if ($online_pharmacy_related_post == false) {
    $online_pharmacy_tp_theme_css .= 'display: none;';
}
$online_pharmacy_tp_theme_css .= '}';
$online_pharmacy_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($online_pharmacy_related_post == false || $online_pharmacy_related_post_mob == false) {
    $online_pharmacy_tp_theme_css .= '.related-post-block { display: none; }';
}
$online_pharmacy_tp_theme_css .= '}';

// slider btn
$online_pharmacy_slider_buttom_mob = get_theme_mod('online_pharmacy_slider_buttom_mob', true);
$online_pharmacy_slider_button = get_theme_mod('online_pharmacy_slider_button', true);
$online_pharmacy_tp_theme_css .= '#slider .more-btn {';
if ($online_pharmacy_slider_button == false) {
    $online_pharmacy_tp_theme_css .= 'display: none;';
}
$online_pharmacy_tp_theme_css .= '}';
$online_pharmacy_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($online_pharmacy_slider_button == false || $online_pharmacy_slider_buttom_mob == false) {
    $online_pharmacy_tp_theme_css .= '#slider .more-btn { display: none; }';
}
$online_pharmacy_tp_theme_css .= '}';

//return to header mobile				
$online_pharmacy_return_to_header_mob = get_theme_mod('online_pharmacy_return_to_header_mob', true);
$online_pharmacy_return_to_header = get_theme_mod('online_pharmacy_return_to_header', true);
$online_pharmacy_tp_theme_css .= '.return-to-header{';
if ($online_pharmacy_return_to_header == false) {
    $online_pharmacy_tp_theme_css .= 'display: none;';
}
$online_pharmacy_tp_theme_css .= '}';
$online_pharmacy_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($online_pharmacy_return_to_header == false || $online_pharmacy_return_to_header_mob == false) {
    $online_pharmacy_tp_theme_css .= '.return-to-header{ display: none; }';
}
$online_pharmacy_tp_theme_css .= '}';

//related products
$online_pharmacy_related_product = get_theme_mod('online_pharmacy_related_product',true);
if($online_pharmacy_related_product == false){
	$online_pharmacy_tp_theme_css .='.related.products{';
		$online_pharmacy_tp_theme_css .='display: none;';
	$online_pharmacy_tp_theme_css .='}';
}

//======================= slider Content layout ===================== //

$online_pharmacy_slider_content_layout = get_theme_mod('online_pharmacy_slider_content_layout', 'CENTER-ALIGN'); 
$online_pharmacy_tp_theme_css .= '#slider .carousel-caption{';
switch ($online_pharmacy_slider_content_layout) {
    case 'LEFT-ALIGN':
        $online_pharmacy_tp_theme_css .= 'text-align:left; right: 45%; left: 20%';
        break;
    case 'CENTER-ALIGN':
        $online_pharmacy_tp_theme_css .= 'text-align:center; right: 45%; left: 20%';
        break;
    case 'RIGHT-ALIGN':
        $online_pharmacy_tp_theme_css .= 'text-align:right; right: 45%; left: 20%';
        break;
    default:
        $online_pharmacy_tp_theme_css .= 'text-align:center; right: 45%; left: 20%';
        break;
}
$online_pharmacy_tp_theme_css .= '}';

//sale position
$online_pharmacy_scroll_position = get_theme_mod( 'online_pharmacy_sale_tag_position','right');
if($online_pharmacy_scroll_position == 'right'){
$online_pharmacy_tp_theme_css .='.woocommerce ul.products li.product .onsale{';
    $online_pharmacy_tp_theme_css .='right: 25px !important;';
$online_pharmacy_tp_theme_css .='}';
}else if($online_pharmacy_scroll_position == 'left'){
$online_pharmacy_tp_theme_css .='.woocommerce ul.products li.product .onsale{';
    $online_pharmacy_tp_theme_css .='left: 25px !important; right: auto !important;';
$online_pharmacy_tp_theme_css .='}';
}

//Font Weight
$online_pharmacy_menu_font_weight = get_theme_mod( 'online_pharmacy_menu_font_weight','600');
if($online_pharmacy_menu_font_weight == '100'){
$online_pharmacy_tp_theme_css .='.main-navigation a{';
    $online_pharmacy_tp_theme_css .='font-weight: 100;';
$online_pharmacy_tp_theme_css .='}';
}else if($online_pharmacy_menu_font_weight == '200'){
$online_pharmacy_tp_theme_css .='.main-navigation a{';
    $online_pharmacy_tp_theme_css .='font-weight: 200;';
$online_pharmacy_tp_theme_css .='}';
}else if($online_pharmacy_menu_font_weight == '300'){
$online_pharmacy_tp_theme_css .='.main-navigation a{';
    $online_pharmacy_tp_theme_css .='font-weight: 300;';
$online_pharmacy_tp_theme_css .='}';
}else if($online_pharmacy_menu_font_weight == '400'){
$online_pharmacy_tp_theme_css .='.main-navigation a{';
    $online_pharmacy_tp_theme_css .='font-weight: 400;';
$online_pharmacy_tp_theme_css .='}';
}else if($online_pharmacy_menu_font_weight == '500'){
$online_pharmacy_tp_theme_css .='.main-navigation a{';
    $online_pharmacy_tp_theme_css .='font-weight: 500;';
$online_pharmacy_tp_theme_css .='}';
}else if($online_pharmacy_menu_font_weight == '600'){
$online_pharmacy_tp_theme_css .='.main-navigation a{';
    $online_pharmacy_tp_theme_css .='font-weight: 600;';
$online_pharmacy_tp_theme_css .='}';
}else if($online_pharmacy_menu_font_weight == '700'){
$online_pharmacy_tp_theme_css .='.main-navigation a{';
    $online_pharmacy_tp_theme_css .='font-weight: 700;';
$online_pharmacy_tp_theme_css .='}';
}else if($online_pharmacy_menu_font_weight == '800'){
$online_pharmacy_tp_theme_css .='.main-navigation a{';
    $online_pharmacy_tp_theme_css .='font-weight: 800;';
$online_pharmacy_tp_theme_css .='}';
}else if($online_pharmacy_menu_font_weight == '900'){
$online_pharmacy_tp_theme_css .='.main-navigation a{';
    $online_pharmacy_tp_theme_css .='font-weight: 900;';
$online_pharmacy_tp_theme_css .='}';
}

/*------------- Blog Page------------------*/
$online_pharmacy_post_image_round = get_theme_mod('online_pharmacy_post_image_round', 0);
if($online_pharmacy_post_image_round != false){
	$online_pharmacy_tp_theme_css .='.blog .box-image img{';
		$online_pharmacy_tp_theme_css .='border-radius: '.esc_attr($online_pharmacy_post_image_round).'px;';
	$online_pharmacy_tp_theme_css .='}';
}

$online_pharmacy_post_image_width = get_theme_mod('online_pharmacy_post_image_width', '');
if($online_pharmacy_post_image_width != false){
	$online_pharmacy_tp_theme_css .='.blog .box-image img{';
		$online_pharmacy_tp_theme_css .='Width: '.esc_attr($online_pharmacy_post_image_width).'px;';
	$online_pharmacy_tp_theme_css .='}';
}

$online_pharmacy_post_image_length = get_theme_mod('online_pharmacy_post_image_length', '');
if($online_pharmacy_post_image_length != false){
	$online_pharmacy_tp_theme_css .='.blog .box-image img{';
		$online_pharmacy_tp_theme_css .='height: '.esc_attr($online_pharmacy_post_image_length).'px;';
	$online_pharmacy_tp_theme_css .='}';
}

// footer widget title font size
	$online_pharmacy_footer_widget_title_font_size = get_theme_mod('online_pharmacy_footer_widget_title_font_size', '');{
	$online_pharmacy_tp_theme_css .='#footer h3, #footer h2.wp-block-heading{';
		$online_pharmacy_tp_theme_css .='font-size: '.esc_attr($online_pharmacy_footer_widget_title_font_size).'px;';
	$online_pharmacy_tp_theme_css .='}';
	}

	// Copyright text font size
	$online_pharmacy_footer_copyright_font_size = get_theme_mod('online_pharmacy_footer_copyright_font_size', '');{
	$online_pharmacy_tp_theme_css .='#footer .site-info p{';
		$online_pharmacy_tp_theme_css .='font-size: '.esc_attr($online_pharmacy_footer_copyright_font_size).'px;';
	$online_pharmacy_tp_theme_css .='}';
	}

	// copyright padding
	$online_pharmacy_footer_copyright_top_bottom_padding = get_theme_mod('online_pharmacy_footer_copyright_top_bottom_padding', '');
	if ($online_pharmacy_footer_copyright_top_bottom_padding !== '') { 
	    $online_pharmacy_tp_theme_css .= '.site-info {';
	    $online_pharmacy_tp_theme_css .= 'padding-top: ' . esc_attr($online_pharmacy_footer_copyright_top_bottom_padding) . 'px;';
	    $online_pharmacy_tp_theme_css .= 'padding-bottom: ' . esc_attr($online_pharmacy_footer_copyright_top_bottom_padding) . 'px;';
	    $online_pharmacy_tp_theme_css .= '}';
	}

