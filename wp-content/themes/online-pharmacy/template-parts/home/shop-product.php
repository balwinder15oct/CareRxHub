<?php
/**
 * Template part for displaying product section
 *
 * @package Online Pharmacy
 * @subpackage online_pharmacy
 */

?>
<?php if (get_theme_mod('online_pharmacy_show_hide_product_section', true)) : ?>
  <section id="product" class="my-5 mx-lg-5">
    <div class="container-fluid">
      <?php if (get_theme_mod('online_pharmacy_product_heading')) : ?>
        <div class="heading-det">
          <h2 class="text-center mb-4"><?php echo esc_html(get_theme_mod('online_pharmacy_product_heading')); ?></h2>
        </div>
      <?php endif; ?>
      <?php if (class_exists('woocommerce')) : ?>
        <div class="product_kit">
            <?php
            $online_pharmacy_args = array(
              'post_type'      => 'product',
              'posts_per_page' => 10,
              'product_cat'    => get_theme_mod('online_pharmacy_recent_product_category')
            );
            $loop = new WP_Query($online_pharmacy_args);
            while ($loop->have_posts()) : $loop->the_post();
            ?>
              <div class="product-box mb-5 mt-3">
                <?php global $product; ?>
                <div class="product-image">
                  <?php echo woocommerce_get_product_thumbnail(); ?>
                </div>
                <div class="product-content flash_product mt-4">
                  <h3 class="mb-2 text-center"><a href="<?php the_permalink(); ?>"><?php echo esc_html(get_the_title()); ?></a></h3>
                  <div class="text-center">
                    <?php if ($product->is_type('simple')) : ?>
                      <div class="rating-container mb-3">
                        <?php woocommerce_template_loop_rating($loop->post, $product); ?>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            <?php endwhile;
            wp_reset_postdata();
            ?>
        </div>
      <?php endif; ?>
    </div>
  </section>
<?php endif; ?>








