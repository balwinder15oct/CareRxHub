jQuery(document).ready(function($) {
    $('.notice[data-notice="get_started"]').on('click', '.notice-dismiss', function() {
        var notice = $(this).closest('.notice');
        
        // Perform the AJAX request to dismiss the notice
        $.ajax({
            type: 'POST',
            data: {
                action: 'medicine_shop_dismiss_notice',
            },
            url: ajaxurl,
            success: function(response) {
                // On success, hide the notice immediately
                if(response.success) {
                    notice.fadeOut();
                }
            }
        });
    });
});

(function($) {
    $(document).on('click', '#medicine-shop-import-button', function(e) {
        e.preventDefault();
        const redirectUrl = $(this).attr('href');
        // Send AJAX request to dismiss the notice
        $.post(ajaxurl, { action: 'medicine_shop_dismiss_notice' }, function() {
            // Redirect after successfully dismissing
            window.location.href = redirectUrl;
        });
    });
})(jQuery);