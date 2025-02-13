<?php
/**
 * Displays footer widgets if assigned
 *
 * @package Online Pharmacy
 * @subpackage online_pharmacy
 */
?>
<?php

// Determine the number of columns dynamically for the footer (you can replace this with your logic).
$online_pharmacy_no_of_footer_col = get_theme_mod('online_pharmacy_footer_columns', 4); // Change this value as needed.

// Calculate the Bootstrap class for large screens (col-lg-X) for footer.
$online_pharmacy_col_lg_footer_class = 'col-lg-' . (12 / $online_pharmacy_no_of_footer_col);

// Calculate the Bootstrap class for medium screens (col-md-X) for footer.
$online_pharmacy_col_md_footer_class = 'col-md-' . (12 / $online_pharmacy_no_of_footer_col);
?>
<div class="container">
    <aside class="widget-area row py-2 pt-3" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'online-pharmacy' ); ?>">
        <div class="<?php echo esc_attr($online_pharmacy_col_lg_footer_class); ?> <?php echo esc_attr($online_pharmacy_col_md_footer_class); ?>">
            <?php dynamic_sidebar('footer-1'); ?>
        </div>
        <?php
        // Footer boxes 2 and onwards.
        for ($i = 2; $i <= $online_pharmacy_no_of_footer_col; $i++) :
            if ($i <= $online_pharmacy_no_of_footer_col) :
                ?>
               <div class="col-12 <?php echo esc_attr($online_pharmacy_col_lg_footer_class); ?> <?php echo esc_attr($online_pharmacy_col_md_footer_class); ?>">
                    <?php dynamic_sidebar('footer-' . $i); ?>
                </div><!-- .footer-one-box -->
                <?php
            endif;
        endfor;
        ?>
    </aside>
</div>