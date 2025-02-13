<?php
/**
 * Medicine Shop Theme Customizer.
 *
 * @package Medicine Shop
 */

 if ( ! class_exists( 'Medicine_Shop_Customizer' ) ) {

	/**
	 * Customizer Loader
	 *
	 * @since 1.0.0
	 */
	class Medicine_Shop_Customizer {

		/**
		 * Instance
		 *
		 * @access private
		 * @var object
		 */
		private static $medicine_shop_instance;

		/**
		 * Initiator
		 */
		public static function get_instance() {
			if ( ! isset( self::$medicine_shop_instance ) ) {
				self::$medicine_shop_instance = new self;
			}
			return self::$medicine_shop_instance;
		}

		/**
		 * Constructor
		 */
		public function __construct() {
			/**
			 * Customizer
			 */
			add_action( 'customize_preview_init',                  array( $this, 'Medicine_Shop_Customize_preview_js' ) );
			add_action( 'customize_controls_enqueue_scripts', 	   array( $this, 'Medicine_Shop_Customizer_script' ) );
			add_action( 'customize_register',                      array( $this, 'Medicine_Shop_Customizer_register' ) );
			add_action( 'after_setup_theme',                       array( $this, 'Medicine_Shop_Customizer_settings' ) );
		}
		
		/**
		 * Add postMessage support for site title and description for the Theme Customizer.
		 *
		 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
		 */
		function Medicine_Shop_Customizer_register( $wp_customize ) {
			
			$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
			$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
			$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
			$wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
			$wp_customize->get_setting('custom_logo')->transport = 'refresh';			
			
			/**
			 * Helper files
			 */
			require MEDICINE_SHOP_PARENT_INC_DIR . '/customizer/sanitization.php';
		} 
		
		/**
		 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
		 */
		function Medicine_Shop_Customize_preview_js() {
			wp_enqueue_script( 'medicine-shop-customizer', MEDICINE_SHOP_PARENT_INC_URI . '/customizer/assets/js/customizer-preview.js', array( 'customize-preview' ), '20151215', true );
		}		
		
		function Medicine_Shop_Customizer_script() {
			 wp_enqueue_script( 'medicine-shop-customizer-section', MEDICINE_SHOP_PARENT_INC_URI .'/customizer/assets/js/customizer-section.js', array("jquery"),'', true  );
		}

		// Include customizer customizer settings.
			
		function Medicine_Shop_Customizer_settings() {
			require MEDICINE_SHOP_PARENT_INC_DIR . '/customizer/customizer-options/header.php';
			require MEDICINE_SHOP_PARENT_INC_DIR . '/customizer/customizer-options/frontpage.php';
			require MEDICINE_SHOP_PARENT_INC_DIR . '/customizer/customizer-options/footer.php';
			require MEDICINE_SHOP_PARENT_INC_DIR . '/customizer/customizer-options/post.php';
			require MEDICINE_SHOP_PARENT_INC_DIR . '/customizer/customizer-options/general.php';
			require MEDICINE_SHOP_PARENT_INC_DIR . '/customizer/customizer-options/typography.php';
			require MEDICINE_SHOP_PARENT_INC_DIR . '/customizer/customizer-pro/class-customize.php';
			require MEDICINE_SHOP_PARENT_INC_DIR . '/customizer/customizer-options/sidebar-option.php';
			require MEDICINE_SHOP_PARENT_INC_DIR . '/customizer/customizer-pro/customizer-upgrade-class.php';
		}

	}
}

/**
 *  Kicking this off by calling 'get_instance()' method
 */
Medicine_Shop_Customizer::get_instance();