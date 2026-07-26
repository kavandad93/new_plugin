<?php
if(!defined('ABSPATH')) exit;
class WNAT_Security {
 public static function clean($v){ return sanitize_text_field($v); }
 public static function nonce(){ return wp_create_nonce('wnat_nonce'); }
}
