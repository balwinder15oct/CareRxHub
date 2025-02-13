<?php
/**
 * Customizer: Sanitization Callbacks
 *
 * This file demonstrates how to define sanitization callback functions for various data types.
 * 
 * @package   Medicine Shop
 * @copyright Copyright (c) 2015, WordPress Theme Review Team
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License, v2 (or newer)
 */

function medicine_shop_sanitize_checkbox( $medicine_shop_checked ) {
	return ( ( isset( $medicine_shop_checked ) && true == $medicine_shop_checked ) ? true : false );
}

/* Sanitization Text*/
function medicine_shop_sanitize_text( $medicine_shop_text ) {
	return wp_filter_post_kses( $medicine_shop_text );
}

function medicine_shop_sanitize_choices( $medicine_shop_input, $medicine_shop_setting ) {
    global $wp_customize; 
    $medicine_shop_control = $wp_customize->get_control( $medicine_shop_setting->id ); 
    if ( array_key_exists( $medicine_shop_input, $medicine_shop_control->choices ) ) {
        return $medicine_shop_input;
    } else {
        return $medicine_shop_setting->default;
    }
}

function medicine_shop_sanitize_phone_number( $medicine_shop_phone ) {
    return preg_replace( '/[^\d+]/', '', $medicine_shop_phone );
}
function medicine_shop_sanitize_copyright_position( $medicine_shop_input ) {
    $valid = array( 'right', 'left', 'center' );

    if ( in_array( $medicine_shop_input, $valid, true ) ) {
        return $medicine_shop_input;
    } else {
        return 'right';
    }
}

// Sanitization callback function for logo width
function medicine_shop_sanitize_logo_width($medicine_shop_input) {
    $medicine_shop_input = absint($medicine_shop_input); // Convert to integer
    // Ensure the value is between 1 and 150
    return ($medicine_shop_input >= 1 && $medicine_shop_input <= 300) ? $medicine_shop_input : 150; // Default to 270 if out of range
}