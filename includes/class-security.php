<?php
if(!defined('ABSPATH')) exit;
class WNAT_Security {
 public static function clean($v){ return sanitize_text_field($v); }
 public static function textarea($v){ return sanitize_textarea_field($v); }
 public static function nonce(){ return wp_create_nonce('wnat_nonce'); }
 public static function verify($nonce){ return wp_verify_nonce($nonce,'wnat_nonce'); }
 public static function can_manage(){ return current_user_can('manage_options'); }
 public static function prepare($query,$args=[]){ global $wpdb; return $wpdb->prepare($query,...$args); }
}
