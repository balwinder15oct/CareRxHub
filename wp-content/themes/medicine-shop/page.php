<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Medicine Shop
 */

get_header(); ?>

<section class="blog-area inarea-blog-2-column-area three">
	<div class="container">
		<div class="row">
			<?php 
                $medicine_shop_paged_sidebar_setting = get_theme_mod('medicine_shop_paged_sidebar_setting','1');
                $medicine_shop_sidebar_position = get_theme_mod('medicine_shop_sidebar_position', 'right');
                $medicine_shop_content_class = ($medicine_shop_paged_sidebar_setting == '') ? 'col-lg-12' : 'col-lg-8';

                // Set classes for left or right sidebar
                $medicine_shop_content_order_class = ($medicine_shop_sidebar_position == 'left') ? 'order-lg-2' : '';
                $medicine_shop_sidebar_order_class = ($medicine_shop_sidebar_position == 'left') ? 'order-lg-1' : '';
	        ?>
	            <?php 
	                if ( class_exists( 'woocommerce' ) ) {
	                    if( is_account_page() || is_cart() || is_checkout() ) {
	                        echo '<div class="' . esc_attr($medicine_shop_content_class . ' ' . $medicine_shop_content_order_class) . '">';
	                    }
	                    else{
	                        echo '<div class="' . esc_attr($medicine_shop_content_class . ' ' . $medicine_shop_content_order_class) . '">';
	                    }
	                }
	                else {
	                    echo '<div class="' . esc_attr($medicine_shop_content_class . ' ' . $medicine_shop_content_order_class) . '">';
	                }
	            ?>
				<?php 	if( have_posts()) : the_post(); ?>
					<article class="post-items post-single">
						<?php if ( has_post_thumbnail() ) : ?>
							<div class="post-thumb mb-3"><?php the_post_thumbnail(); ?></div>
						<?php endif; ?>
						<div class="post-content">
							<?php the_content();
							wp_link_pages( array(
				                'before' => '<div class="page-links">' . __( 'Pages:', 'medicine-shop' ),
				                'after'  => '</div>',
				            ) ); ?>
						</div>
					</article>
				<?php
					endif;
					
					if( $post->comment_status == 'open' ) { 
						comments_template( '', true ); // show comments 
					}
				?>
			</div>	
			<?php if( $medicine_shop_paged_sidebar_setting != '') { ?> 
                <?php get_sidebar(); ?>
            <?php } ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>