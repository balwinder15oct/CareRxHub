<?php 
if (isset($_GET['import-demo']) && $_GET['import-demo'] == true) {

    // Function to install and activate plugins
function online_pharmacy_import_demo_content() {
    // Define the plugins you want to install and activate
    $plugins = array(
        array(
            'slug' => 'woocommerce',
            'file' => 'woocommerce/woocommerce.php',
            'url'  => 'https://downloads.wordpress.org/plugin/woocommerce.latest-stable.zip'
        ),
        array(
            'slug' => 'yith-woocommerce-wishlist',
            'file' => 'yith-woocommerce-wishlist/yith-woocommerce-wishlist.php',
            'url'  => 'https://downloads.wordpress.org/plugin/yith-woocommerce-wishlist.latest-stable.zip'
        )
    );

    // Include required files for plugin installation
    if (!function_exists('plugins_api')) {
        include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
    }
    if (!function_exists('activate_plugin')) {
        include_once(ABSPATH . 'wp-admin/includes/plugin.php');
    }
    include_once(ABSPATH . 'wp-admin/includes/file.php');
    include_once(ABSPATH . 'wp-admin/includes/misc.php');
    include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');

    // Loop through each plugin
    foreach ($plugins as $plugin) {
        $plugin_file = WP_PLUGIN_DIR . '/' . $plugin['file'];

        // Check if the plugin is installed
        if (!file_exists($plugin_file)) {
            // If the plugin is not installed, download and install it
            $upgrader = new Plugin_Upgrader();
            $result = $upgrader->install($plugin['url']);

            // Check for installation errors
            if (is_wp_error($result)) {
                error_log('Plugin installation failed: ' . $plugin['slug'] . ' - ' . $result->get_error_message());
                continue;
            }
        }

        // If the plugin folder exists but the plugin is not active, activate it
        if (file_exists($plugin_file) && !is_plugin_active($plugin['file'])) {
            $result = activate_plugin($plugin['file']);

            // Check for activation errors
            if (is_wp_error($result)) {
                error_log('Plugin activation failed: ' . $plugin['slug'] . ' - ' . $result->get_error_message());
            }
        }
    }
}

// Call the import function
online_pharmacy_import_demo_content();

    // ------- Create Nav Menu --------
$online_pharmacy_menuname = 'Main Menus';
$online_pharmacy_bpmenulocation = 'primary-menu';
$online_pharmacy_menu_exists = wp_get_nav_menu_object($online_pharmacy_menuname);

if (!$online_pharmacy_menu_exists) {
    $online_pharmacy_menu_id = wp_create_nav_menu($online_pharmacy_menuname);

    // Create Home Page
    $online_pharmacy_home_title = 'Home';
    $online_pharmacy_home = array(
        'post_type' => 'page',
        'post_title' => $online_pharmacy_home_title,
        'post_content' => '',
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'home'
    );
    $online_pharmacy_home_id = wp_insert_post($online_pharmacy_home);

    // Assign Home Page Template
    add_post_meta($online_pharmacy_home_id, '_wp_page_template', 'page-template/front-page.php');

    // Update options to set Home Page as the front page
    update_option('page_on_front', $online_pharmacy_home_id);
    update_option('show_on_front', 'page');

    // Add Home Page to Menu
    wp_update_nav_menu_item($online_pharmacy_menu_id, 0, array(
        'menu-item-title' => __('Home', 'online-pharmacy'),
        'menu-item-classes' => 'home',
        'menu-item-url' => home_url('/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $online_pharmacy_home_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Create About Us Page with Dummy Content
    $online_pharmacy_about_title = 'About Us';
    $online_pharmacy_about_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> 

                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br> 

                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
    $online_pharmacy_about = array(
        'post_type' => 'page',
        'post_title' => $online_pharmacy_about_title,
        'post_content' => $online_pharmacy_about_content,
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'about-us'
    );
    $online_pharmacy_about_id = wp_insert_post($online_pharmacy_about);

    // Add About Us Page to Menu
    wp_update_nav_menu_item($online_pharmacy_menu_id, 0, array(
        'menu-item-title' => __('About Us', 'online-pharmacy'),
        'menu-item-classes' => 'about-us',
        'menu-item-url' => home_url('/about-us/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $online_pharmacy_about_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Create Services Page with Dummy Content
    $online_pharmacy_services_title = 'Services';
    $online_pharmacy_services_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> 

                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br> 

                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
    $online_pharmacy_services = array(
        'post_type' => 'page',
        'post_title' => $online_pharmacy_services_title,
        'post_content' => $online_pharmacy_services_content,
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'services'
    );
    $online_pharmacy_services_id = wp_insert_post($online_pharmacy_services);

    // Add Services Page to Menu
    wp_update_nav_menu_item($online_pharmacy_menu_id, 0, array(
        'menu-item-title' => __('Services', 'online-pharmacy'),
        'menu-item-classes' => 'services',
        'menu-item-url' => home_url('/services/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $online_pharmacy_services_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Create Pages Page with Dummy Content
    $online_pharmacy_pages_title = 'Pages';
    $online_pharmacy_pages_content = '<h2>Our Pages</h2>
    <p>Explore all the pages we have on our website. Find information about our services, company, and more.</p>';
    $online_pharmacy_pages = array(
        'post_type' => 'page',
        'post_title' => $online_pharmacy_pages_title,
        'post_content' => $online_pharmacy_pages_content,
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'pages'
    );
    $online_pharmacy_pages_id = wp_insert_post($online_pharmacy_pages);

    // Add Pages Page to Menu
    wp_update_nav_menu_item($online_pharmacy_menu_id, 0, array(
        'menu-item-title' => __('Pages', 'online-pharmacy'),
        'menu-item-classes' => 'pages',
        'menu-item-url' => home_url('/pages/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $online_pharmacy_pages_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Create Contact Page with Dummy Content
    $online_pharmacy_contact_title = 'Contact';
    $online_pharmacy_contact_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> 

                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br> 

                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
    $online_pharmacy_contact = array(
        'post_type' => 'page',
        'post_title' => $online_pharmacy_contact_title,
        'post_content' => $online_pharmacy_contact_content,
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'contact'
    );
    $online_pharmacy_contact_id = wp_insert_post($online_pharmacy_contact);

    // Add Contact Page to Menu
    wp_update_nav_menu_item($online_pharmacy_menu_id, 0, array(
        'menu-item-title' => __('Contact', 'online-pharmacy'),
        'menu-item-classes' => 'contact',
        'menu-item-url' => home_url('/contact/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $online_pharmacy_contact_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Set the menu location if it's not already set
    if (!has_nav_menu($online_pharmacy_bpmenulocation)) {
        $locations = get_theme_mod('nav_menu_locations'); // Use 'nav_menu_locations' to get locations array
        if (empty($locations)) {
            $locations = array();
        }
        $locations[$online_pharmacy_bpmenulocation] = $online_pharmacy_menu_id;
        set_theme_mod('nav_menu_locations', $locations);
    }
}

        //---Header--//
        set_theme_mod('online_pharmacy_phone_number', '1-234-567-890');
        set_theme_mod('online_pharmacy_email_address', 'admin@ Medicine.com');

        set_theme_mod('online_pharmacy_my_account_link', '#');
        set_theme_mod('online_pharmacy_book_ticket_button', 'Order Medicine Online');
        set_theme_mod('online_pharmacy_book_ticket_link', '#');

        set_theme_mod('online_pharmacy_header_fb_new_tab', true);
        set_theme_mod('online_pharmacy_facebook_url', '#');
        set_theme_mod('online_pharmacy_facebook_icon', 'fab fa-facebook-f');

        set_theme_mod('online_pharmacy_header_twt_new_tab', true);
        set_theme_mod('online_pharmacy_twitter_url', '#');
        set_theme_mod('online_pharmacy_twitter_icon', 'fab fa-twitter');

        set_theme_mod('online_pharmacy_header_ins_new_tab', true);
        set_theme_mod('online_pharmacy_instagram_url', '#');
        set_theme_mod('online_pharmacy_instagram_icon', 'fab fa-instagram');

        set_theme_mod('online_pharmacy_header_ut_new_tab', true);
        set_theme_mod('online_pharmacy_youtube_url', '#');
        set_theme_mod('online_pharmacy_youtube_icon', 'fab fa-youtube');

        set_theme_mod('online_pharmacy_header_pint_new_tab', true);
        set_theme_mod('online_pharmacy_pint_url', '#');
        set_theme_mod('online_pharmacy_pinterest_icon', 'fab fa-pinterest');

        // Slider Section
        set_theme_mod('online_pharmacy_slider_arrows', true);
        set_theme_mod('online_pharmacy_slider_call', '1-234-567-890');

        for ($i = 1; $i <= 4; $i++) {
            $online_pharmacy_title = 'Online Pharmacy';
            $online_pharmacy_content = 'Ut enim ad minim veniam, qused do eiusmod  Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor ';

            // Create post object
            $my_post = array(
                'post_title'    => wp_strip_all_tags($online_pharmacy_title),
                'post_content'  => $online_pharmacy_content,
                'post_status'   => 'publish',
                'post_type'     => 'page',
            );

            // Insert the post into the database
            $post_id = wp_insert_post($my_post);

            if ($post_id) {
                // Set the theme mod for the slider page
                set_theme_mod('online_pharmacy_slider_page' . $i, $post_id);

                $image_url = get_template_directory_uri() . '/assets/images/slider.png';
                $image_id = media_sideload_image($image_url, $post_id, null, 'id');

                if (!is_wp_error($image_id)) {
                    // Set the downloaded image as the post's featured image
                    set_post_thumbnail($post_id, $image_id);
                }
            }
        }

         // Product Section //
    set_theme_mod('online_pharmacy_product_heading', 'New Arrival Products');
    set_theme_mod('online_pharmacy_recent_product_category', 'Product Category');

    // Define product category names and product titles
    $online_pharmacy_category_names = array('Product Category');
    $online_pharmacy_title_array = array(
        array("Lorem Ipsum simply", "Lorem Ipsum simply", "Lorem Ipsum simply", "Lorem Ipsum simply", "Lorem Ipsum simply") // Only 5 products
    );

    foreach ($online_pharmacy_category_names as $online_pharmacy_index => $online_pharmacy_category_name) {
        // Create or retrieve the product category term ID
        $online_pharmacy_term = term_exists($online_pharmacy_category_name, 'product_cat');
        if ($online_pharmacy_term === 0 || $online_pharmacy_term === null) {
            // If the term does not exist, create it
            $online_pharmacy_term = wp_insert_term($online_pharmacy_category_name, 'product_cat');
        }

        if (is_wp_error($online_pharmacy_term)) {
            error_log('Error creating category: ' . $online_pharmacy_term->get_error_message());
            continue; // Skip to the next iteration if category creation fails
        }

        // Get the term ID if it exists
        $term_id = is_array($online_pharmacy_term) ? $online_pharmacy_term['term_id'] : $online_pharmacy_term;

        // Loop to create 3 products for each category
        for ($online_pharmacy_i = 0; $online_pharmacy_i < 5; $online_pharmacy_i++) {
            // Create product content
            $online_pharmacy_title = $online_pharmacy_title_array[$online_pharmacy_index][$online_pharmacy_i];

            // Create product post object
            $online_pharmacy_my_post = array(
                'post_title'    => wp_strip_all_tags($online_pharmacy_title),
                'post_status'   => 'publish',
                'post_type'     => 'product', // Post type set to 'product'
            );

            // Insert the product into the database
            $online_pharmacy_post_id = wp_insert_post($online_pharmacy_my_post);

            if (is_wp_error($online_pharmacy_post_id)) {
                error_log('Error creating product: ' . $online_pharmacy_post_id->get_error_message());
                continue; // Skip to the next product if creation fails
            }

            // Assign the category to the product
            wp_set_object_terms($online_pharmacy_post_id, (int)$term_id, 'product_cat');

            // Set the product type as 'simple'
            wp_set_object_terms($online_pharmacy_post_id, 'simple', 'product_type');

            // Handle the featured image using media_sideload_image
            $online_pharmacy_image_url = get_template_directory_uri() . '/assets/images/product' . ($online_pharmacy_i + 1) . '.png';

            // Ensure the image URL is valid or use an external URL
            $online_pharmacy_image_id = media_sideload_image($online_pharmacy_image_url, $online_pharmacy_post_id, null, 'id');

            if (is_wp_error($online_pharmacy_image_id)) {
                error_log('Error downloading image: ' . $online_pharmacy_image_id->get_error_message());
                continue; // Skip to the next product if image download fails
            }

            // Assign featured image to product
            set_post_thumbnail($online_pharmacy_post_id, $online_pharmacy_image_id);
        }
    }



    }

?>