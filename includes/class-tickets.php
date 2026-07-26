<?php
if(!defined('ABSPATH')) exit;
class WNAT_Tickets {
 public static function create($data){ global $wpdb; return $wpdb->insert($wpdb->prefix.'wnat_tickets',$data); }
}
