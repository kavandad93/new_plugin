<?php
if(!defined('ABSPATH')) exit;
class WNAT_User_Panel {
 public function __construct(){add_action('wp_enqueue_scripts',[$this,'assets']);}
 public function assets(){wp_enqueue_style('wnat-style',plugins_url('../assets/css/style.css',__FILE__));}
}
new WNAT_User_Panel();
