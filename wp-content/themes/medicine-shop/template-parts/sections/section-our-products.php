<?php 
  $medicine_shop_aboutus = get_theme_mod('medicine_shop_our_products_show_hide_section', '1');
  
  if ($medicine_shop_aboutus == '1') {
?>
<section id="product-section" class="mx-md-0 mx-3">
  <div class="container">
    <div class="row">
      <!-- First Product Section -->
      <div class="col-lg-6 col-md-6">
        <?php if (get_theme_mod('medicine_shop_featured_section_tittle_first') != '') { ?>
          <h2 class="text-start my-3 text-uppercase"><?php echo esc_html(get_theme_mod('medicine_shop_featured_section_tittle_first', '')); ?></h2>
        <?php } ?>
        <?php if (get_theme_mod('medicine_shop_our_product_product_category_first','product_cat1') != '') { ?>
          <div class="product-main p-3">
            <?php if (class_exists('woocommerce')) : ?>
              <?php
              $medicine_shop_selected_category = get_theme_mod('medicine_shop_our_product_product_category_first','product_cat1');
              if ($medicine_shop_selected_category) {
                $medicine_shop_args = array(
                  'post_type'      => 'product',
                  'posts_per_page' => 50,
                  'product_cat'    => $medicine_shop_selected_category,
                  'order'          => 'ASC'
                );
                $loop = new WP_Query($medicine_shop_args);
                if ($loop->have_posts()) : 
              ?>
                  <div class="row">
                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                      <div class="col-lg-6 col-md-12 align-self-center">
                        <div class="product-box mb-5">
                          <?php global $product; ?>
                          <div class="product-content-box p-2">
                            <div class="row">
                              <div class="col-lg-4 col-md-5 col-5 align-self-center">
                                <div class="product-image">
                                  <?php echo woocommerce_get_product_thumbnail(); ?>
                                </div>
                              </div>
                              <div class="col-lg-8 col-md-7 col-7 align-self-center">
                                <p class="mb-2 product-price">
                                  <span class="selling-price"><?php echo wc_price($product->get_sale_price()); ?></span>
                                  <span class="actual-price"><?php echo wc_price($product->get_regular_price()); ?></span>
                                </p>
                                <h3 class="my-2"><a href="<?php the_permalink(); ?>"><?php echo esc_html(get_the_title()); ?></a></h3>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php endwhile; ?>
                  </div>
              <?php 
                endif; 
                wp_reset_postdata();
              } 
              ?>
            <?php endif; ?>
          </div>
        <?php } ?>
      </div>
      
      <!-- Second Product Section -->
      <div class="col-lg-6 col-md-6">
        <?php if (get_theme_mod('medicine_shop_featured_section_tittle') != '') { ?>
          <h2 class="text-start my-3 text-uppercase"><?php echo esc_html(get_theme_mod('medicine_shop_featured_section_tittle', '')); ?></h2>
        <?php } ?>
        <?php if (get_theme_mod('medicine_shop_our_product_product_category','product_cat2') != '') { ?>
          <div class="product-main p-3">
            <?php if (class_exists('woocommerce')) : ?>
              <?php
              $medicine_shop_selected_category = get_theme_mod('medicine_shop_our_product_product_category','product_cat2');
              if ($medicine_shop_selected_category) {
                $medicine_shop_args = array(
                  'post_type'      => 'product',
                  'posts_per_page' => 50,
                  'product_cat'    => $medicine_shop_selected_category,
                  'order'          => 'ASC'
                );
                $loop = new WP_Query($medicine_shop_args);
                if ($loop->have_posts()) : 
              ?>
                  <div class="row">
                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                      <div class="col-lg-6 col-md-12 align-self-center">
                        <div class="product-box mb-5">
                          <?php global $product; ?>
                          <div class="product-content-box p-2">
                            <div class="row">
                              <div class="col-lg-4 col-md-5 col-5 align-self-center">
                                <div class="product-image">
                                  <?php echo woocommerce_get_product_thumbnail(); ?>
                                </div>
                              </div>
                              <div class="col-lg-8 col-md-7 col-7 align-self-center">
                                <p class="mb-2 product-price">
                                  <span class="selling-price"><?php echo wc_price($product->get_sale_price()); ?></span>
                                  <span class="actual-price"><?php echo wc_price($product->get_regular_price()); ?></span>
                                </p>
                                <h3 class="my-2"><a href="<?php the_permalink(); ?>"><?php echo esc_html(get_the_title()); ?></a></h3>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php endwhile; ?>
                  </div>
              <?php 
                endif; 
                wp_reset_postdata();
              } 
              ?>
            <?php endif; ?>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>
<?php } ?>
