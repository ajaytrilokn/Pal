<?php
/*
Plugin Name: Contact Form Plugin
Description: A simple contact form plugin.
Version: 1.0
Author: WP Developer
*/

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Include the form and handle submissions
include plugin_dir_path(__FILE__) . 'includes/contact-form-handler.php';

// Create the shortcode for the form
function contact_form_shortcode() {
    ob_start();
    include plugin_dir_path(__FILE__) . 'includes/contact-form.php';
    return ob_get_clean();
}
add_shortcode('contact_form', 'contact_form_shortcode');

// Create database table on plugin activation
function contact_form_create_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'contact_form';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        name tinytext NOT NULL,
        email varchar(100) NOT NULL,
        phone varchar(15) NOT NULL,
        message text NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
register_activation_hook(__FILE__, 'contact_form_create_table');
?>
