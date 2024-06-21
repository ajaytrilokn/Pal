<?php
if (!defined('ABSPATH')) {
    exit;
}

function handle_contact_form_submission() {
    if (isset($_POST['contact_form_submit'])) {
        global $wpdb;
        $table_name = $wpdb->prefix . 'contact_form';

        $name = sanitize_text_field($_POST['your_name']);
        $email = sanitize_email($_POST['your_email']);
        $phone = sanitize_text_field($_POST['your_phone']);
        $message = sanitize_textarea_field($_POST['your_message']);

        $wpdb->insert(
            $table_name,
            array(
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'message' => $message
            )
        );

        // Redirect or display a success message
        // wp_redirect(home_url('/thank-you'));
        // exit;
    }
}
add_action('admin_post_contact_form', 'handle_contact_form_submission');
add_action('admin_post_nopriv_contact_form', 'handle_contact_form_submission');
?>
