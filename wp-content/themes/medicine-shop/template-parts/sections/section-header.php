<div class="headerbox main-header">
  <div class="container-fluid">
    <div class="row head-bg">
      <div class="col-lg-3 col-md-4 logo-box p-0">
        <div class="logo">
          <?php 
            if (has_custom_logo()) {
                the_custom_logo();
            } else {
                // Check if both title and tagline settings are disabled
                $pet_house_tagline_enabled = get_theme_mod('pet_house_tagline_setting', false);
                $pet_house_title_enabled = get_theme_mod('pet_house_site_title_setting', false);

                if (!$pet_house_tagline_enabled && !$pet_house_title_enabled) {
                    // Display the default logo
                    $default_logo_url = get_template_directory_uri() . '/assets/images/logo.png'; // Replace with your default logo path
                    echo '<a href="' . esc_url(home_url('/')) . '">';
                    echo '<img src="' . esc_url($default_logo_url) . '" alt="' . esc_attr(get_bloginfo('name')) . '">';
                    echo '</a>';
                }

                // Display site title if the setting is enabled
                if ($pet_house_title_enabled) : ?>
                    <p class="site-title">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <?php echo esc_html(get_bloginfo('name')); ?>
                        </a>
                    </p>
                <?php endif; ?>
            <?php } ?>
          </div>
          <div class="logo-text text-center py-3">
            <?php 
            $medicine_shop_tagline = get_theme_mod('medicine_shop_tagline_setting', true);
            if ($medicine_shop_tagline) {
                $medicine_shop_site_desc = get_bloginfo('description'); ?>
                <p class="site-description mb-0 text-capitalize"><?php echo esc_html($medicine_shop_site_desc); ?></p>
            <?php } else { ?>
                <p class="site-description mb-0 text-capitalize"><?php echo esc_html__('Hi Welcome To Supplement WP Store', 'medicine-shop'); ?></p>
            <?php } ?>
          </div>
        </div>
      <div class="col-lg-9 col-md-8 p-0">
          <div class="row m-0 headertext py-2">
            <div class="col-lg-4 col-md-12 align-self-center aa">
              <?php if(class_exists('woocommerce')){ ?>
                <button class="category-btn text-capitalize"><i class="fa fa-bars" aria-hidden="true"></i><?php echo esc_html(get_theme_mod('medicine_shop_category_text','Shop By Category','medicine-shop')); ?><i class="fas fa-chevron-right cat-icon"></i></button>
                <div class="category-dropdown">
                  <?php
                    $medicine_shop_args = array(
                      'number'     => get_theme_mod('medicine_shop_product_category_number'),
                      'orderby'    => 'title',
                      'order'      => 'ASC',
                      'hide_empty' => 0,
                      'parent'  => 0
                    );
                    $medicine_shop_product_categories = get_terms( 'product_cat', $medicine_shop_args );
                    $medicine_shop_count = count($medicine_shop_product_categories);
                    if ( $medicine_shop_count > 0 ){
                      foreach ( $medicine_shop_product_categories as $medicine_shop_product_category ) {
                        $medicine_shop_cat_id   = $medicine_shop_product_category->term_id;
                        $medicine_shop_cat_link = get_category_link( $medicine_shop_cat_id );
                        if ($medicine_shop_product_category->category_parent == 0) { ?>
                      <li class="drp_dwn_menu"><a href="<?php echo esc_url(get_term_link( $medicine_shop_product_category ) ); ?>">
                      <?php
                    }
                      echo esc_html( $medicine_shop_product_category->name ); ?></a></li>
                      <?php
                      }
                    }
                  ?>
                </div>
              <?php }?>
            </div>
            <div class="col-lg-4 col-md-6 align-self-center pr-lg-0 aa">
              <div class="search-block">
                <?php get_search_form(); ?>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 woo-content align-self-center text-md-center aa">
              <div class="top-woo">
                <?php if(get_theme_mod('medicine_shop_user_icon',true) != ''){ ?>
                    <?php if(class_exists('woocommerce')){ ?>
                      <?php if (is_user_logged_in()) : ?>
                        <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>"><i class="fas fa-user pe-2"></i><?php esc_html_e( 'Sign In/ Register', 'medicine-shop' ); ?></a>
                      <?php else : ?>
                        <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>"><i class="fas fa-user px-lg-2"></i><?php esc_html_e( 'Login', 'medicine-shop' ); ?></a>
                      <?php endif;?>
                    <?php } ?>
                <?php }?>
                <?php if(get_theme_mod('medicine_shop_cart_icon',true) != ''){ ?>
                    <?php if(class_exists('woocommerce')){ ?>
                      <span class="product-cart text-center position-relative ps-4 ps-lg-4 ps-md-3">
                        <a href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" title="<?php esc_attr_e( 'shopping cart','medicine-shop' ); ?>"><i class="fas fa-shopping-basket"></i></a>
                        <?php 
                        $medicine_shop_cart_count = WC()->cart->get_cart_contents_count();
                        if($medicine_shop_cart_count > 0): ?>
                            <span class="cart-count"><?php echo $medicine_shop_cart_count; ?></span>
                        <?php endif; ?>
                      </span>
                    <?php } ?>
                <?php } ?>
              </div>
            </div>
          </div>
        <div class="<?php if( get_theme_mod( 'medicine_shop_sticky_header', '0')) { ?>sticky-header<?php } else { ?>close-sticky<?php } ?>">
          <div class="menubox innermenuboxupper">
            <nav class="navbar navbar-expand-lg navbaroffcanvase innermenubox">
                <div class="navbar-menubar responsive-menu">
                    <button class="navbar-toggler align-self-center" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-menu"  aria-label="<?php echo esc_attr__('Toggle navigation','medicine-shop'); ?>"> 
                        <i class="fa fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse navbar-menu">
                        <button class="navbar-toggler navbar-toggler-close" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-menu" aria-label="<?php echo esc_attr__('Close navigation','medicine-shop'); ?>"> 
                            <i class="fa fa-times"></i>
                        </button> 
                        <?php
                        wp_nav_menu(array( 
                            'theme_location' => 'primary',
                            'container_class' => 'main-menu clearfix' ,
                            'menu_class' => 'clearfix',
                            'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                            'fallback_cb' => 'wp_page_menu',
                        ));
                        ?>
                    </div>
                </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>