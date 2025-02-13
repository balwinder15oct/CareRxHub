<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Medicine Shop
 */

if ( ! function_exists( 'medicine_shop_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function medicine_shop_posted_on() {
	$medicine_shop_time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$medicine_shop_time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$medicine_shop_time_string = sprintf( $medicine_shop_time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$medicine_shop_posted_on = sprintf(
		/* translators: %s: Date. */
		esc_html_x( 'Posted on %s', 'post date', 'medicine-shop' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $medicine_shop_time_string . '</a>'
	);

	$medicine_shop_byline = sprintf(
		/* translators: %s: by. */
		esc_html_x( 'by %s', 'post author', 'medicine-shop' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);
	echo '<span class="posted-on">' . $medicine_shop_posted_on . '</span><span class="byline"> ' . $medicine_shop_byline . '</span>'; // WPCS: XSS OK.
}
endif;


if ( ! function_exists( 'medicine_shop_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function medicine_shop_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$medicine_shop_categories_list = get_the_category_list( esc_html__( ', ', 'medicine-shop' ) );
		if ( $medicine_shop_categories_list && medicine_shop_categorized_blog() ) {
			/* translators: %1$s: Posted. */
			printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'medicine-shop' ) . '</span>', $medicine_shop_categories_list ); // WPCS: XSS OK.
		}

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'medicine-shop' ) );
		if ( $tags_list ) {
			/* translators: %1$s: Tagged. */
			printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'medicine-shop' ) . '</span>', $tags_list ); // WPCS: XSS OK.
		}
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		/* translators: %s: post title */
		comments_popup_link( sprintf( wp_kses( __( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'medicine-shop' ), array( 'span' => array( 'class' => array() ) ) ), get_the_title() ) );
		echo '</span>';
	}

	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'medicine-shop' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link">',
		'</span>'
	);
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function medicine_shop_categorized_blog() {
	if ( false === ( $medicine_shop_all_the_cool_cats = get_transient( 'medicine_shop_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$medicine_shop_all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$medicine_shop_all_the_cool_cats = count( $medicine_shop_all_the_cool_cats );

		set_transient( 'medicine_shop_categories', $medicine_shop_all_the_cool_cats );
	}

	if ( $medicine_shop_all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so medicine_shop_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so medicine_shop_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in medicine_shop_categorized_blog.
 */
function medicine_shop_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'medicine_shop_categories' );
}
add_action( 'edit_category', 'medicine_shop_category_transient_flusher' );
add_action( 'save_post',     'medicine_shop_category_transient_flusher' );

/**
 * Register Google fonts.
 */
function medicine_shop_google_font() {
	$medicine_shop_font_url = '';
    $medicine_shop_font_family = array(
        'Jura:wght@300..700',
        'Anton'
    );

    $query_args = array(
		'family'	=> rawurlencode(implode('|',$medicine_shop_font_family)),
	);
	$medicine_shop_font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $medicine_shop_font_url;
	$contents = wptt_get_webfont_url( esc_url_raw( $medicine_shop_fonts_url ) );
}

/**
 * Enqueue styles and scripts.
 */
function medicine_shop_scripts_styles() {
    wp_enqueue_style( 'medicine-shop-fonts', medicine_shop_google_font(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'medicine_shop_scripts_styles' );


/**
 * Register Breadcrumb for Multiple Variation
 */
function medicine_shop_breadcrumbs_style() {
	get_template_part('./template-parts/sections/section','breadcrumb');
}

/**
 * This Function Check whether Sidebar active or Not
 */
if(!function_exists( 'medicine_shop_post_layout' )) :
function medicine_shop_post_layout(){
	if(is_active_sidebar('medicine-shop-sidebar-primary'))
		{ echo 'col-lg-8'; } 
	else 
		{ echo 'col-lg-12'; }  
} endif;