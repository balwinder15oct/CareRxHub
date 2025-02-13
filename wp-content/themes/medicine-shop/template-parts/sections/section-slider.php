<div class="row p-4">
  <div class="col-lg-8 col-md-8">
    <?php 
      $medicine_shop_slider = get_theme_mod('medicine_shop_slider_setting',true);
      
      if ($medicine_shop_slider == '1') :
    ?>
    <section id="slider-section" class="slider-area mb-3">
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <?php 

          $medicine_shop_pages = array();
          for ($medicine_shop_count = 1; $medicine_shop_count <= 3; $medicine_shop_count++) {
              $medicine_shop_mod = intval(get_theme_mod('medicine_shop_slider' . $medicine_shop_count));
          
              // Check that the value is valid and not the placeholder value 'page-none-selected'
              if ('page-none-selected' !== $medicine_shop_mod && $medicine_shop_mod > 0) {
                  $medicine_shop_pages[] = $medicine_shop_mod;
              }
          }
            
          if( !empty($medicine_shop_pages) ) :
            $medicine_shop_args = array(
              'post_type' => 'page',
              'post__in' => $medicine_shop_pages,
              'orderby' => 'post__in'
            );
            $medicine_shop_query = new WP_Query( $medicine_shop_args );
            if ( $medicine_shop_query->have_posts() ) :
              $i = 1;
        ?>
        <div class="carousel-inner" role="listbox">
          <?php while ( $medicine_shop_query->have_posts() ) : $medicine_shop_query->the_post(); ?>
            <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
              <?php if(has_post_thumbnail()){ ?>
                <img src="<?php the_post_thumbnail_url('full'); ?>"/>
              <?php }else { ?><div class="slider-color-box"></div> <?php } ?>
              <div class="carousel-caption">
                <div class="inner_carousel">
                  <?php
                    $medicine_shop_slider_text = get_theme_mod( 'medicine_shop_slider_text' );
                    if( $medicine_shop_slider_text != ''){?>
                    <div class="border-heading">
                      <p class="mb-3 slider-top-text"><?php echo esc_html( apply_filters('medicine_shop_topheader', $medicine_shop_slider_text)); ?></p>
                    </div>
                  <?php } ?>
                  <h1>
                    <?php
                      $medicine_shop_title = get_the_title();
                      $medicine_shop_words = explode(' ', $medicine_shop_title);
                      $medicine_shop_last_word = array_pop($medicine_shop_words);
                      $medicine_shop_rest_of_title = implode(' ', $medicine_shop_words);
                      ?>
                      <a href="<?php the_permalink(); ?>">
                          <?php echo esc_html($medicine_shop_rest_of_title); ?>
                          <span style="color: #34c7e0;"><?php echo esc_html($medicine_shop_last_word); ?></span>
                      </a>
                  </h1>
                  <div class="read-btn mt-md-4 mt-3">
                    <a href="<?php the_permalink(); ?>"><?php echo esc_html('SHOP NOW','medicine-shop'); ?></a>
                  </div>
                </div>
              </div>
            </div>
          <?php $i++; endwhile;
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
          <div class="no-postfound"></div>
        <?php endif;
        endif;?>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" id="prev" data-bs-slide="prev">
        <i class="fas fa-angle-left" aria-hidden="true"></i>
        <span class="screen-reader-text"><?php echo esc_html('Previous','medicine-shop'); ?></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next" id="next">
        <i class="fas fa-angle-right" aria-hidden="true"></i>
        <span class="screen-reader-text"><?php echo esc_html('Next','medicine-shop'); ?></span>
        </button>
      </div>
    </section>
    <?php endif; ?>
  </div>
  <div class="col-lg-4 col-md-4">
    <div class="slide-banner">
      <?php if( get_theme_mod( 'medicine_shop_discount_sale_img1') != '') { ?>
        <div class="banner-1 mb-3">
          <div class="product-img">
            <img src="<?php echo esc_url(get_theme_mod('medicine_shop_discount_sale_img1')); ?>" alt="" />
            <div class="product-content first">
              <p class="toppro-text text-uppercase m-0"><?php echo esc_html(get_theme_mod('medicine_shop_topproduct_title1')); ?></p>
              <h2 class="discount-text m-0 text-uppercase"><a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('medicine_shop_product_sale_discount_title1')); ?></a></h2>
              <div class="product-btn mt-3" data-wow-duration="2s">
                <?php if(get_theme_mod('medicine_shop_product_btn_text1') != ''){ ?>
                  <a href="<?php echo esc_url(get_theme_mod('medicine_shop_product_btn_link1')); ?>"><?php echo esc_html(get_theme_mod('medicine_shop_product_btn_text1')); ?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('medicine_shop_product_btn_text1')); ?></span></a>
                <?php }?>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
      <?php if( get_theme_mod( 'medicine_shop_discount_sale_img2') != '') { ?>
        <div class="banner-2">
          <div class="product-img">
            <img src="<?php echo esc_url(get_theme_mod('medicine_shop_discount_sale_img2')); ?>" alt="" />
            <div class="product-content second">
              <p class="toppro-text text-uppercase m-0"><?php echo esc_html(get_theme_mod('medicine_shop_topproduct_title2')); ?></p>
              <h2 class="discount-text m-0 text-uppercase"><a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('medicine_shop_product_sale_discount_title2')); ?></a></h2>
              <div class="product-btn mt-3" data-wow-duration="2s">
                <?php if(get_theme_mod('medicine_shop_product_btn_text2') != ''){ ?>
                  <a href="<?php echo esc_url(get_theme_mod('medicine_shop_product_btn_link2')); ?>"><?php echo esc_html(get_theme_mod('medicine_shop_product_btn_text2')); ?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('medicine_shop_product_btn_text2')); ?></span></a>
                <?php }?>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>