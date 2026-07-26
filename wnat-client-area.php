<?php
/**
 * Plugin Name: WNat Client Area
 * Description: Simple hosting/service customer panel for WNat.
 * Version: 1.0.0
 * Author: WNat
 * Text Domain: wnat-client-area
 */
if (!defined('ABSPATH')) exit;

define('WNAT_CA_VERSION','1.0.0');
define('WNAT_CA_PATH', plugin_dir_path(__FILE__));

action_exists('plugins_loaded') && add_action('plugins_loaded', function(){
    require_once WNAT_CA_PATH.'includes/class-database.php';
});

register_activation_hook(__FILE__, function(){
    if (class_exists('WNAT_Database')) WNAT_Database::install();
});

function wnat_panel_shortcode(){
    if (!is_user_logged_in()) return '<p>لطفاً وارد شوید.</p>';
    ob_start();
    include WNAT_CA_PATH.'templates/dashboard.php';
    return ob_get_clean();
}
add_shortcode('wnat_panel','wnat_panel_shortcode');
