<?php
/**
 * The template for displaying search form.
 *
 * @package Medicine Shop
 * @since 1.0
 */
?>

<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php esc_html_e( 'Search for:', 'medicine-shop' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php esc_attr_e( 'Search...', 'medicine-shop' ); ?>" value="" name="s">
	</label>
	<button type="submit" class="search-submit" value="<?php esc_attr_e( 'Search', 'medicine-shop' ); ?>">
		<i class="fa fa-search"></i>
	</button>
</form>