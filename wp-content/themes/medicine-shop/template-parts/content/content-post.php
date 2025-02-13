<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Medicine Shop
 */

// For archive post setting
$medicine_shop_post_heading = get_theme_mod('medicine_shop_post_heading_settings', '1');
$medicine_shop_post_content = get_theme_mod('medicine_shop_post_content_settings', '1');
$medicine_shop_post_feature_image = get_theme_mod('medicine_shop_post_featured_image_settings', '1');
$medicine_shop_post_date = get_theme_mod('medicine_shop_post_date_settings', '1');
$medicine_shop_post_comments = get_theme_mod('medicine_shop_post_comments_settings', '1');
$medicine_shop_post_author = get_theme_mod('medicine_shop_post_author_settings', '1');
$medicine_shop_post_timing = get_theme_mod('medicine_shop_post_timing_settings', '1');
$medicine_shop_post_tags = get_theme_mod('medicine_shop_post_tags_settings', '1');

// For single post setting
$medicine_shop_single_post_heading = get_theme_mod('medicine_shop_single_post_heading_settings', '1');
$medicine_shop_single_post_content = get_theme_mod('medicine_shop_single_post_content_settings', '1');
$medicine_shop_single_post_feature_image = get_theme_mod('medicine_shop_single_post_featured_image_settings', '1');
$medicine_shop_single_post_date = get_theme_mod('medicine_shop_single_post_date_settings', '1');
$medicine_shop_single_post_comments = get_theme_mod('medicine_shop_single_post_comments_settings', '1');
$medicine_shop_single_post_author = get_theme_mod('medicine_shop_single_post_author_settings', '1');
$medicine_shop_single_post_timing = get_theme_mod('medicine_shop_single_post_timing_settings', '1');
$medicine_shop_single_post_tags = get_theme_mod('medicine_shop_single_post_tags_settings', '1');

$medicine_shop_is_archive_visible = (
    $medicine_shop_post_heading == '1' ||
    $medicine_shop_post_content == '1' ||
    $medicine_shop_post_feature_image == '1' ||
    $medicine_shop_post_date == '1' ||
    $medicine_shop_post_comments == '1' ||
    $medicine_shop_post_author == '1' ||
    $medicine_shop_post_timing == '1' ||
    $medicine_shop_post_tags == '1'
);

$medicine_shop_is_single_visible = (
    $medicine_shop_single_post_heading == '1' ||
    $medicine_shop_single_post_content == '1' ||
    $medicine_shop_single_post_feature_image == '1' ||
    $medicine_shop_single_post_date == '1' ||
    $medicine_shop_single_post_comments == '1' ||
    $medicine_shop_single_post_author == '1' ||
    $medicine_shop_single_post_timing == '1' ||
    $medicine_shop_single_post_tags == '1'
);

if (!is_single() && !$medicine_shop_is_archive_visible) {
    return;
}

if (is_single() && !$medicine_shop_is_single_visible) {
    return;
}

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('blog-item'); ?>>
    <?php
    if (is_single()) :
        // Single post settings
        if ($medicine_shop_single_post_feature_image == '1' && has_post_thumbnail()) :
            echo '<div class="blog-thumb">' . get_the_post_thumbnail() . '</div>';
        endif;
    else :
        // Archive post settings
        if ($medicine_shop_post_feature_image == '1' && has_post_thumbnail()) :
            echo '<div class="blog-thumb">' . get_the_post_thumbnail() . '</div>';
        endif;
    endif;

    if (is_single()) :
        if ($medicine_shop_single_post_date == '1') : ?>
            <h6 class="theme-button"><?php echo esc_html(get_the_date('j')); ?>, <?php echo esc_html(get_the_date('M')); ?> <?php echo esc_html(get_the_date('Y')); ?></h6>
        <?php endif;
    else :
        if ($medicine_shop_post_date == '1') : ?>
            <h6 class="theme-button"><?php echo esc_html(get_the_date('j')); ?>, <?php echo esc_html(get_the_date('M')); ?> <?php echo esc_html(get_the_date('Y')); ?></h6>
        <?php endif;
    endif;
    ?>

    <div class="blog-content">
        <?php
        if (is_single()) :
            if ($medicine_shop_single_post_heading == '1') :
                the_title('<h5 class="post-title">', '</h5>');
            endif;
        else :
            if ($medicine_shop_post_heading == '1') :
                the_title(sprintf('<h5 class="post-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h5>');
            endif;
        endif;

        if (is_singular()) :
            if ($medicine_shop_single_post_content == '1') :
                the_content();
            endif;
        else :
            $medicine_shop_excerpt_limit = get_theme_mod('medicine_shop_excerpt_limit', 50);

            if ($medicine_shop_post_content == '1') :
                echo "<p>" . wp_trim_words(get_the_excerpt(), $medicine_shop_excerpt_limit) . "</p>";
            endif;
        endif;
        ?>
    </div>

    <?php if (is_singular()) : ?>
        <ul class="comment-timing">
            <?php if ($medicine_shop_single_post_comments == '1') : ?>
                <li><a href="javascript:void(0);"><i class="fa fa-comment"></i> <?php echo esc_html(get_comments_number($post->ID)); ?></a></li>
            <?php endif; ?>

            <?php if ($medicine_shop_single_post_author == '1') : ?>
                <li><a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><i class="fa fa-user"></i><?php esc_html_e('By', 'medicine-shop'); ?> <?php the_author(); ?></a></li>
            <?php endif; ?>

            <?php if ($medicine_shop_single_post_timing == '1') : ?>
                <li><a href="javascript:void(0);"><i class="fas fa-clock pe-1"></i> <?php echo esc_html( get_the_time( 'F j, Y' ) ); ?> <?php echo esc_html( get_the_time( 'H:i A' ) ); ?></li>
            <?php endif; ?>

            
        </ul>
        <?php else : ?>
        <ul class="comment-timing">
            <?php if ($medicine_shop_post_comments == '1') : ?>
                <li><a href="javascript:void(0);"><i class="fa fa-comment"></i> <?php echo esc_html(get_comments_number($post->ID)); ?></a></li>
            <?php endif; ?>

            <?php if ($medicine_shop_post_author == '1') : ?>
                <li><a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><i class="fa fa-user"></i><?php esc_html_e('By', 'medicine-shop'); ?> <?php the_author(); ?></a></li>
            <?php endif; ?>

            <?php if ($medicine_shop_post_timing == '1') : ?>
                <li><a href="javascript:void(0);"><i class="fas fa-clock pe-1"></i> <?php echo esc_html( get_the_time( 'F j, Y' ) ); ?> <?php echo esc_html( get_the_time( 'H:i A' ) ); ?></a></li>
            <?php endif; ?>
        </ul>
    <?php endif; ?>

    <?php
    if (is_singular()) :
        if ($medicine_shop_single_post_tags == '1') : ?>
            <div class="blog-tags mt-3">
                <?php the_tags(); ?>
            </div>
        <?php endif;
        else :
        if ($medicine_shop_post_tags == '1') : ?>
            <div class="blog-tags mt-3">
                <?php the_tags(); ?>
            </div>
        <?php endif;
    endif;
    ?>
</div>