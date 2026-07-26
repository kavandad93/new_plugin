<?php
if(!defined('ABSPATH')) exit;
class WNAT_Admin_Panel {
 public function __construct(){add_action('admin_menu',[$this,'menu']);}
 public function menu(){add_menu_page('WNat Client','WNat Client','manage_options','wnat-client',[$this,'page'],'dashicons-admin-users');}
 public function page(){echo '<div class="wrap"><h1>WNat Client Area</h1></div>';}
}
new WNAT_Admin_Panel();
