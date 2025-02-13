<?php
/**
 * Template part for displaying slider section
 *
 * @package Online Pharmacy
 * @subpackage online_pharmacy
 */

?>
<?php $online_pharmacy_static_image = get_stylesheet_directory_uri() . '/assets/images/sliderimage.png'; ?>
<?php if ( get_theme_mod( 'online_pharmacy_slider_arrows') != '' ) : ?>

<section id="slider" class="slider-area">
  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <?php
      $online_pharmacy_slider_page = array();
      for ( $online_pharmacy_count = 1; $online_pharmacy_count <= 3; $online_pharmacy_count++ ) {
        $mod = intval( get_theme_mod( 'online_pharmacy_slider_page' . $online_pharmacy_count ));
        if ( 'page-none-selected' != $mod ) {
          $online_pharmacy_slider_page[] = $mod;
        }
      }
      if ( !empty($online_pharmacy_slider_page) ) :
        $args = array(
          'post_type' => 'page',
          'post__in' => $online_pharmacy_slider_page, // corrected variable name
          'orderby' => 'post__in'
        );
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
          $i = 0; // start from 0 for correct array indexing
    ?>
    <div class="carousel-inner" role="listbox">
      <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="carousel-item <?php if($i == 0){ echo 'active'; } ?>">
          <div class="row">
            <div class="col-lg-7 col-md-7 col-12">
              <div class="carousel-caption">
                <div class="inner_carousel">
                  <div class="slidercontent-bg">
                    <?php
                      $online_pharmacy_slider_text = get_theme_mod( 'online_pharmacy_slider_text' );
                      if ( $online_pharmacy_slider_text != '' ) : ?>
                      <div class="border-heading">
                        <p class="mb-3 slider-top-text"><?php echo esc_html( apply_filters('online_pharmacy_topheader', $online_pharmacy_slider_text)); ?></p>
                      </div>
                    <?php endif; ?>
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <p><?php echo esc_html( wp_trim_words(get_the_content(), 20) ); ?></p>
                  </div>
                  <div class="read-btn mt-md-4 mt-3">
                    <a href="<?php the_permalink(); ?>"><?php echo esc_html('Shop Now','online-pharmacy'); ?></a>
                  </div>
                  <div class="slider-call mt-4">
                    <?php if ( get_theme_mod( 'online_pharmacy_slider_call' ) != '' ) : ?>
                      <a class="phn text-uppercase" href="tel:<?php echo esc_url( get_theme_mod('online_pharmacy_slider_call','' )); ?>"><i class="fas fa-phone me-3"></i><?php echo esc_html( get_theme_mod('online_pharmacy_slider_call','')); ?></a>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-md-5 col-12 slider-img-col">
              <div class="sliderimg">
                <?php if ( has_post_thumbnail() ) { ?>
                  <img src="<?php the_post_thumbnail_url('full'); ?>" class="masked-img"/>
                <?php } else { ?>
                  <div class="slider-color-box"></div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      <?php $i++; endwhile; wp_reset_postdata(); ?>
    </div>
    <?php else : ?>
      <div class="no-postfound"></div>
    <?php endif; ?>
    <?php endif; ?>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <i class="fas fa-angle-left" aria-hidden="true"></i>
      <span class="screen-reader-text"><?php echo esc_html('Previous','online-pharmacy'); ?></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <i class="fas fa-angle-right" aria-hidden="true"></i>
      <span class="screen-reader-text"><?php echo esc_html('Next','online-pharmacy'); ?></span>
    </button>
  </div>
</section>
<?php endif; ?>
