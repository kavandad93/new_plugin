<?php
/**
 * Plugin Name: WNat Client Area
 * Description: Simple hosting/service customer panel for WNat.
 * Version: 1.0.0
 * Author: WNat
 */
if (!defined('ABSPATH')) exit;

define('WNAT_CA_VERSION','1.0.0');
define('WNAT_CA_PATH', plugin_dir_path(__FILE__));
define('WNAT_CA_URL', plugin_dir_url(__FILE__));

function wnat_ca_load(){
    $classes = [
        'class-database.php',
        'class-security.php',
        'class-products.php',
        'class-purchase-requests.php',
        'class-services.php',
        'class-tickets.php',
        'class-user-panel.php',
        'class-admin-panel.php'
    ];
    foreach($classes as $class){
        require_once WNAT_CA_PATH.'includes/'.$class;
    }
    wp_enqueue_script('wnat-app', WNAT_CA_URL.'assets/js/app.js', [], WNAT_CA_VERSION, true);
}
add_action('plugins_loaded','wnat_ca_load');

register_activation_hook(__FILE__, function(){
    require_once WNAT_CA_PATH.'includes/class-database.php';
    WNAT_Database::install();
});

function wnat_panel_shortcode(){
    if (!is_user_logged_in()) {
        return '<div class="wnat-card">لطفاً وارد حساب کاربری شوید.</div>';
    }
    ob_start();
    include WNAT_CA_PATH.'templates/dashboard.php';
    return ob_get_clean();
}
add_shortcode('wnat_panel','wnat_panel_shortcode');
