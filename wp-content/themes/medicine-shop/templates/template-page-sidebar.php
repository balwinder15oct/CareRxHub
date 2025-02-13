<?php 
/**
	*Template Name: Page with Sidebar
*/

get_header(); ?>

<section id="post-section" class="blog-area inarea-blog-2-column-area three">
	<div class="container">
		<div class="row row-cols-1 gy-5">
		<?php 
                $medicine_shop_single_page_sidebar_setting = get_theme_mod('medicine_shop_single_page_sidebar_setting','1');
                $medicine_shop_sidebar_position = get_theme_mod('medicine_shop_sidebar_position', 'right');
                $medicine_shop_content_class = ($medicine_shop_single_page_sidebar_setting == '') ? 'col-lg-12' : 'col-lg-8';

				// Set classes for left or right sidebar
	            $medicine_shop_content_order_class = ($medicine_shop_sidebar_position == 'left') ? 'order-lg-2' : '';
	            $medicine_shop_sidebar_order_class = ($medicine_shop_sidebar_position == 'left') ? 'order-lg-1' : '';
            ?>
            <div class="<?php echo esc_attr($medicine_shop_content_class . ' ' . $medicine_shop_content_order_class); ?>">
				<?php the_post(); ?>
				<article class="post-items">
					<div class="post-content">
						<?php
							the_content();
						?>
					</div>
				</article>
				<?php
					if( $post->comment_status == 'open' ) { 
						comments_template( '', true ); // show comments 
					}
				?>
			</div>
            <?php if( $medicine_shop_single_page_sidebar_setting != '') { ?> 
                <?php get_sidebar(); ?>
            <?php } ?>
		</div>
	</div>
</section>
	
<?php get_footer(); ?>