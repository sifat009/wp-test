<?php
/*
Plugin Name: Test Plugin
Description: A simple test plugin with a menu item.
Version: 1.0
Author: Sifat Haque
*/


function test_plugin_display_page() {
    echo '<div class="wrap"><h1>Welcome to the Test Plugin Page</h1><p>This is a simple test plugin.</p></div>';
}


// Function to add menu item
function test_plugin_add_admin_menu() {
    add_menu_page(
        'Test Plugin Page',          // Page title
        'Test Plugin',               // Menu title
        'manage_options',            // Capability
        'test-plugin',               // Menu slug
        'test_plugin_display_page',  // Function to display the page content
        'dashicons-admin-generic',   // Icon URL
        6                            // Position
    );
}
// Hook to add admin menu
add_action('admin_menu', 'test_plugin_add_admin_menu');