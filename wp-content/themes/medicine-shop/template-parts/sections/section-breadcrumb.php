<?php 
	$medicine_shop_hs_breadcrumb = get_theme_mod('medicine_shop_hs_breadcrumb','1');
?>
<?php if ( get_header_image() ) : ?>
	<section class="slider-area breadcrumb-section">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
		</a>
        <div class="about-banner-text">
        	<?php if($medicine_shop_hs_breadcrumb == '1') { ?>
	        	<ol class="breadcrumb-list">
					<?php medicine_shop_breadcrumbs(); ?>
				</ol>
			<?php } ?>
			<h1><?php medicine_shop_breadcrumb_title(); ?></h1>
        </div>
    </section>
<?php endif; ?>