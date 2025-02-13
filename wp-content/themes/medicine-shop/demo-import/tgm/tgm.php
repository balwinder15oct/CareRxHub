<?php

	require get_template_directory() . '/demo-import/tgm/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function medicine_shop_register_recommended_plugins() {
	$plugins = array(
		
		array(
			'name'             => __( 'WooCommerce', 'medicine-shop' ),
			'slug'             => 'woocommerce',
			'required'         => false,
			'force_activation' => false,
		)

	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'medicine_shop_register_recommended_plugins' );