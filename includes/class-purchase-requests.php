<?php
if(!defined('ABSPATH')) exit;
class WNAT_Purchase_Requests {
 public static function create($data){ global $wpdb; return $wpdb->insert($wpdb->prefix.'wnat_requests',$data); }
}
