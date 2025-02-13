<?php

$online_pharmacy_post_args = array(
    'posts_per_page'    => get_theme_mod( 'online_pharmacy_related_post_per_page', 3 ),
    'orderby'           => 'rand',
    'post__not_in'      => array( get_the_ID() ),
);

$online_pharmacy_number_of_post_columns = get_theme_mod('online_pharmacy_related_post_per_columns', 3);

$online_pharmacy_col_lg_post_class = 'col-lg-' . (12 / $online_pharmacy_number_of_post_columns);

$online_pharmacy_related = wp_get_post_terms( get_the_ID(), 'category' );
$online_pharmacy_ids = array();
foreach( $online_pharmacy_related as $term ) {
    $online_pharmacy_ids[] = $term->term_id;
}

$online_pharmacy_post_args['category__in'] = $online_pharmacy_ids; 

$online_pharmacy_related_posts = new WP_Query( $online_pharmacy_post_args );

if ( $online_pharmacy_related_posts->have_posts() ) : ?>
        <div class="related-post-block">
        <h3 class="text-center mb-3"><?php echo esc_html(get_theme_mod('online_pharmacy_related_post_heading',__('Related Posts','online-pharmacy')));?></h3>
        <div class="row">
            <?php while ( $online_pharmacy_related_posts->have_posts() ) : $online_pharmacy_related_posts->the_post(); ?>
                <div class="<?php echo esc_attr($online_pharmacy_col_lg_post_class); ?> col-md-6">
                    <div id="category-post">
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="page-box">
                                <?php if(has_post_thumbnail()) { ?>
                                        <?php the_post_thumbnail();  ?>    
                                <?php } ?>
                                <div class="box-content text-start">
                                    <h4 class="text-start py-2"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?></a></h4>
                                    
                                    <p><?php echo wp_trim_words(get_the_content(), get_theme_mod('online_pharmacy_excerpt_count',10) );?></p>
                                    <?php if(get_theme_mod('online_pharmacy_remove_read_button',true) != ''){ ?>
                                    <div class="readmore-btn text-start mb-1">
                                        <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small" title="<?php esc_attr_e( 'Read More', 'online-pharmacy' ); ?>"><?php echo esc_html(get_theme_mod('online_pharmacy_read_more_text',__('Read More','online-pharmacy')));?></a>
                                    </div>
                                    <?php }?>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif;
wp_reset_postdata();