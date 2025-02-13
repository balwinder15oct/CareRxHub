<?php
/**
 * Theme Page
 *
 * @package Medicine Shop
 */

if ( ! defined( 'MEDICINE_SHOP_FREE_THEME_URL' ) ) {
	define( 'MEDICINE_SHOP_FREE_THEME_URL', 'https://www.seothemesexpert.com/products/free-medicine-wordpress-theme' );
}
if ( ! defined( 'MEDICINE_SHOP_PRO_THEME_URL' ) ) {
	define( 'MEDICINE_SHOP_PRO_THEME_URL', 'https://www.seothemesexpert.com/products/medicine-shop-website-template' );
}
if ( ! defined( 'MEDICINE_SHOP_FREE_DOC_URL' ) ) {
	define( 'MEDICINE_SHOP_FREE_DOC_URL', 'https://demo.seothemesexpert.com/documentation/expert-medicine-shop/' );
}
if ( ! defined( 'MEDICINE_SHOP_DEMO_THEME_URL' ) ) {
	define( 'MEDICINE_SHOP_DEMO_THEME_URL', 'https://demo.seothemesexpert.com/medicine-shop/' );
}
if ( ! defined( 'MEDICINE_SHOP_RATE_THEME_URL' ) ) {
    define( 'MEDICINE_SHOP_RATE_THEME_URL', 'https://wordpress.org/support/theme/medicine-shop/reviews/#new-post' );
}
if ( ! defined( 'MEDICINE_SHOP_SUPPORT_THEME_URL' ) ) {
    define( 'MEDICINE_SHOP_SUPPORT_THEME_URL', 'https://wordpress.org/support/theme/medicine-shop/' );
}
if ( ! defined( 'MEDICINE_SHOP_THEME_BUNDLE_URL' ) ) {
    define( 'MEDICINE_SHOP_THEME_BUNDLE_URL', 'https://www.seothemesexpert.com/products/wordpress-theme-bundle' );
}


/**
 * Add theme page
 */
function medicine_shop_menu() {
	add_theme_page( esc_html__( 'About Theme', 'medicine-shop' ), esc_html__( 'About Theme', 'medicine-shop' ), 'edit_theme_options', 'medicine-shop-about', 'medicine_shop_about_display' );
}
add_action( 'admin_menu', 'medicine_shop_menu' );

/**
 * Display About page
 */
function medicine_shop_about_display() { ?>
	<div class="wrap about-wrap full-width-layout">		
		<nav class="nav-tab-wrapper wp-clearfix" aria-label="<?php esc_attr_e( 'Secondary menu', 'medicine-shop' ); ?>">
			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'medicine-shop-about' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['page'] ) && 'medicine-shop-about' === $_GET['page'] && ! isset( $_GET['tab'] ) ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'About', 'medicine-shop' ); ?></a>

			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'medicine-shop-about', 'tab' => 'free_vs_pro' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'free_vs_pro' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'Compare free Vs Pro', 'medicine-shop' ); ?></a>
		</nav>

		<?php
			medicine_shop_main_screen();

			medicine_shop_free_vs_pro();
		?>

		<div class="return-to-dashboard">
			<?php if ( current_user_can( 'update_core' ) && isset( $_GET['updated'] ) ) : ?>
				<a href="<?php echo esc_url( self_admin_url( 'update-core.php' ) ); ?>" target="_blank">
					<?php is_multisite() ? esc_html_e( 'Return to Updates', 'medicine-shop' ) : esc_html_e( 'Return to Dashboard &rarr; Updates', 'medicine-shop' ); ?>
				</a> |
			<?php endif; ?>
			<a href="<?php echo esc_url( self_admin_url() ); ?>" target="_blank"><?php is_blog_admin() ? esc_html_e( 'Go to Dashboard &rarr; Home', 'medicine-shop' ) : esc_html_e( 'Go to Dashboard', 'medicine-shop' ); ?></a>
		</div>
	</div>
	<?php
}

/**
 * Output the main about screen.
 */
function medicine_shop_main_screen() {
	if ( isset( $_GET['page'] ) && 'medicine-shop-about' === $_GET['page'] && ! isset( $_GET['tab'] ) ) {
	?>
		<div class="main-col-box">
			<div class="feature-section two-col">
				<div class="card">
					<h2 class="title"><?php esc_html_e( 'Upgrade To Pro', 'medicine-shop' ); ?></h2>
					<p><?php esc_html_e( 'Take a step towards excellence, try our premium theme. Use Code', 'medicine-shop' ) ?><span class="usecode"><?php esc_html_e('" expert20 "', 'medicine-shop'); ?></span></p>
					<p><a href="<?php echo esc_url( MEDICINE_SHOP_PRO_THEME_URL ); ?>" class="button button-primary" target="_blank"><?php esc_html_e( 'Upgrade Pro', 'medicine-shop' ); ?></a></p>
				</div>

				<div class="card">
					<h2 class="title"><?php esc_html_e( 'Lite Documentation', 'medicine-shop' ); ?></h2>
					<p><?php esc_html_e( 'The free theme documentation can help you set up the theme.', 'medicine-shop' ) ?></p>
					<p><a href="<?php echo esc_url( MEDICINE_SHOP_FREE_DOC_URL ); ?>" class="button button-primary" target="_blank"><?php esc_html_e( 'Lite Documentation', 'medicine-shop' ); ?></a></p>
				</div>

				<div class="card">
					<h2 class="title"><?php esc_html_e( 'Theme Info', 'medicine-shop' ); ?></h2>
					<p><?php esc_html_e( 'Know more about Medicine Shop.', 'medicine-shop' ) ?></p>
					<p><a href="<?php echo esc_url( MEDICINE_SHOP_FREE_THEME_URL ); ?>" class="button button-primary" target="_blank"><?php esc_html_e( 'Theme Info', 'medicine-shop' ); ?></a></p>
				</div>

				<div class="card">
					<h2 class="title"><?php esc_html_e( 'Theme Customizer', 'medicine-shop' ); ?></h2>
					<p><?php esc_html_e( 'You can get all theme options in customizer.', 'medicine-shop' ) ?></p>
					<p><a href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" class="button button-primary" target="_blank"><?php esc_html_e( 'Customize', 'medicine-shop' ); ?></a></p>
				</div>

				<div class="card">
					<h2 class="title"><?php esc_html_e( 'Need Support?', 'medicine-shop' ); ?></h2>
					<p><?php esc_html_e( 'If you are having some issues with the theme or you want to tweak some thing, you can contact us our expert team will help you.', 'medicine-shop' ) ?></p>
					<p><a href="<?php echo esc_url( MEDICINE_SHOP_SUPPORT_THEME_URL ); ?>" class="button button-primary" target="_blank"><?php esc_html_e( 'Support Forum', 'medicine-shop' ); ?></a></p>
				</div>

				<div class="card">
					<h2 class="title"><?php esc_html_e( 'Review', 'medicine-shop' ); ?></h2>
					<p><?php esc_html_e( 'If you have loved our theme please show your support with the review.', 'medicine-shop' ) ?></p>
					<p><a href="<?php echo esc_url( MEDICINE_SHOP_RATE_THEME_URL ); ?>" class="button button-primary" target="_blank"><?php esc_html_e( 'Rate Us', 'medicine-shop' ); ?></a></p>
				</div>		
			</div>
			<div class="about-theme">
				<?php $medicine_shop_theme = wp_get_theme(); ?>

				<h1><?php echo esc_html( $medicine_shop_theme ); ?></h1>
				<p class="version"><?php esc_html_e( 'Version', 'medicine-shop' ); ?>: <?php echo esc_html($medicine_shop_theme['Version']);?></p>
				<div class="theme-description">
					<p class="actions">
						<a href="<?php echo esc_url( MEDICINE_SHOP_PRO_THEME_URL ); ?>" class="protheme button button-secondary" target="_blank"><?php esc_html_e( 'Upgrade to pro', 'medicine-shop' ); ?></a>
						<a href="<?php echo esc_url( MEDICINE_SHOP_DEMO_THEME_URL ); ?>" class="demo button button-secondary" target="_blank"><?php esc_html_e( 'View Demo', 'medicine-shop' ); ?></a>
						<a href="<?php echo esc_url( MEDICINE_SHOP_FREE_DOC_URL ); ?>" class="docs button button-secondary" target="_blank"><?php esc_html_e( 'Theme Instructions', 'medicine-shop' ); ?></a>
						<a href="<?php echo esc_url( MEDICINE_SHOP_THEME_BUNDLE_URL ); ?>" class="bundle button button-secondary" target="_blank"><?php esc_html_e( 'Buy All Themes', 'medicine-shop' ); ?></a>
					</p>
				</div>
				<div class="theme-screenshot">
					<img src="<?php echo esc_url( $medicine_shop_theme->get_screenshot() ); ?>" />
				</div>
			</div>
		</div>
	<?php
	}
}

/**
 * Import Demo data for theme using catch themes demo import plugin
 */
function medicine_shop_free_vs_pro() {
	if ( isset( $_GET['tab'] ) && 'free_vs_pro' === $_GET['tab'] ) {
	?>
		<div class="wrap about-wrap">

			<div class="theme-description">
				<p class="actions">
					<a href="<?php echo esc_url( MEDICINE_SHOP_PRO_THEME_URL ); ?>" class="protheme button button-secondary" target="_blank"><?php esc_html_e( 'Upgrade to pro', 'medicine-shop' ); ?></a>

					<a href="<?php echo esc_url( MEDICINE_SHOP_DEMO_THEME_URL ); ?>" class="demo button button-secondary" target="_blank"><?php esc_html_e( 'View Demo', 'medicine-shop' ); ?></a>

					<a href="<?php echo esc_url( MEDICINE_SHOP_THEME_BUNDLE_URL ); ?>" class="bundle button button-secondary" target="_blank"><?php esc_html_e( 'Buy All Themes', 'medicine-shop' ); ?></a>
		
					<a href="<?php echo esc_url( MEDICINE_SHOP_FREE_DOC_URL ); ?>" class="docs button button-secondary" target="_blank"><?php esc_html_e( 'Theme Instructions', 'medicine-shop' ); ?></a>
				</p>
			</div>
			<p class="about-description"><?php esc_html_e( 'View Free vs Pro Table below:', 'medicine-shop' ); ?></p>
			<div class="vs-theme-table">
				<table>
					<thead>
						<tr><th scope="col"></th>
							<th class="head" scope="col"><?php esc_html_e( 'Free Theme', 'medicine-shop' ); ?></th>
							<th class="head" scope="col"><?php esc_html_e( 'Pro Theme', 'medicine-shop' ); ?></th>
						</tr>
					</thead>
					<tbody>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><span><?php esc_html_e( 'One click demo import', 'medicine-shop' ); ?></span></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Color pallete and font options', 'medicine-shop' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Demo Content has 8 to 10 sections', 'medicine-shop' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Rearrange sections as per your need', 'medicine-shop' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Internal Pages', 'medicine-shop' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Plugin Integration', 'medicine-shop' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Ultimate technical support', 'medicine-shop' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Access our Support Forums', 'medicine-shop' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Get regular updates', 'medicine-shop' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Install theme on unlimited domains', 'medicine-shop' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Mobile Responsive', 'medicine-shop' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Easy Customization', 'medicine-shop' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td class="feature feature--empty"></td>
							<td class="feature feature--empty"></td>
							<td headers="comp-2" class="td-btn-2"><a class="sidebar-button single-btn protheme button button-secondary" href="<?php echo esc_url(MEDICINE_SHOP_PRO_THEME_URL);?>" target="_blank"><?php esc_html_e( 'Go for Premium', 'medicine-shop' ); ?></a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	<?php
	}
}