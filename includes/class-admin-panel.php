<?php
if(!defined('ABSPATH')) exit;
class WNAT_Admin_Panel {
 public function __construct(){add_action('admin_menu',[$this,'menu']);}
 public function menu(){
  add_menu_page('WNat Client','WNat Client','manage_options','wnat-client',[$this,'dashboard'],'dashicons-admin-users');
  add_submenu_page('wnat-client','Purchase Requests','Requests','manage_options','wnat-requests',[$this,'requests']);
  add_submenu_page('wnat-client','Services','Services','manage_options','wnat-services',[$this,'services']);
  add_submenu_page('wnat-client','Tickets','Tickets','manage_options','wnat-tickets',[$this,'tickets']);
 }
 public function dashboard(){echo '<div class="wrap"><h1>WNat Client Area</h1><p>Management dashboard</p></div>';}
 public function requests(){global $wpdb; $rows=$wpdb->get_results("SELECT * FROM {$wpdb->prefix}wnat_requests"); echo '<div class="wrap"><h1>Purchase Requests</h1>'; foreach($rows as $r){echo '<p>#'.esc_html($r->id).' - '.esc_html($r->status).'</p>'; } echo '</div>';}
 public function services(){echo '<div class="wrap"><h1>Services</h1></div>';}
 public function tickets(){echo '<div class="wrap"><h1>Tickets</h1></div>';}
}
new WNAT_Admin_Panel();
