<?php

/*
 * Props to the BLDR Theme: https://wordpress.org/themes/bldr/
 * */

function medicine_shop_custom_styles($medicine_shop_custom) {


	//Fonts

	$medicine_shop_headings_font = esc_html(get_theme_mod('medicine_shop_headings_text'));

	$medicine_shop_body_font = esc_html(get_theme_mod('medicine_shop_body_text'));

	if ( $medicine_shop_headings_font ) {

		$medicine_shop_font_pieces = explode(":", $medicine_shop_headings_font);

		$medicine_shop_custom .= "h1, h2, h3, h4, h5, h6 { font-family: {$medicine_shop_font_pieces[0]}; }"."\n";

	}

	if ( $medicine_shop_body_font ) {

		$medicine_shop_font_pieces = explode(":", $medicine_shop_body_font);

		$medicine_shop_custom .= "body, button, input, select, textarea { font-family: {$medicine_shop_font_pieces[0]} !important; }"."\n";

	}

	//Output all the styles

	wp_add_inline_style( 'medicine-shop-style', $medicine_shop_custom );

}

add_action( 'wp_enqueue_scripts', 'medicine_shop_custom_styles' );


//Sanitizes Fonts
function medicine_shop_sanitize_fonts( $medicine_shop_input ) {
	$medicine_shop_valid = array(
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
		'Rokkitt:400' => 'Rokkitt',
		'Jura:400' => 'Jura',
	);

	if ( array_key_exists( $medicine_shop_input, $medicine_shop_valid ) ) {
		return $medicine_shop_input;
	} else {
		return '';
	}
}