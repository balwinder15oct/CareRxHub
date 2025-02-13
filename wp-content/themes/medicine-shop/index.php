<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Medicine Shop
 */
get_header(); 

?>

<section class="blog-area inarea-blog-2-column-area three">
	<div class="container">
		<div class="row">
			<?php 
	            $medicine_shop_index_sidebar_setting = get_theme_mod('medicine_shop_index_sidebar_setting','1');
	            $medicine_shop_sidebar_position = get_theme_mod('medicine_shop_sidebar_position', 'right');
	            $medicine_shop_content_class = ($medicine_shop_index_sidebar_setting == '') ? 'col-lg-12' : 'col-lg-8';

	            // Set classes for left or right sidebar
	            $medicine_shop_content_order_class = ($medicine_shop_sidebar_position == 'left') ? 'order-lg-2' : '';
	            $medicine_shop_sidebar_order_class = ($medicine_shop_sidebar_position == 'left') ? 'order-lg-1' : '';
            ?>
			<div class="<?php echo esc_attr($medicine_shop_content_class . ' ' . $medicine_shop_content_order_class); ?>">
				<div class="row">
					<?php 
						$medicine_shop_paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
						$args = array( 'post_type' => 'post','paged'=>$medicine_shop_paged );	
					?>
					<?php if( have_posts() ): ?>
						<?php while( have_posts() ) : the_post(); ?>
							<div class="">
								<?php get_template_part('template-parts/content/content-post', get_post_format() ); ?>
							</div>
						<?php endwhile; ?>
					<?php else: ?>
						<?php get_template_part('template-parts/content/content','none'); ?>
					<?php endif; ?>
				</div>
				<div class="row">
					<div class="col-12 text-center mt-5">
						<div class="sp-post-pagination">
							<?php
							the_posts_pagination( array(
								'prev_text'          => '<i class="fa fa-angle-double-left"></i>',
								'next_text'          => '<i class="fa fa-angle-double-right"></i>',
							) ); ?>
						</div>
					</div>
				</div>
			</div>
			<?php if( $medicine_shop_index_sidebar_setting != '') { ?> 
                <?php get_sidebar(); ?>
            <?php } ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>