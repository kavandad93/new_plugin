<?php
if(!defined('ABSPATH')) exit;
class WNAT_Services {
 public static function user_services($id){ global $wpdb; return $wpdb->get_results($wpdb->prepare("SELECT * FROM {$wpdb->prefix}wnat_services WHERE user_id=%d",$id)); }
}
