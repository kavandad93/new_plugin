<?php
if(!defined('ABSPATH')) exit;
class WNAT_Tickets {
 public function __construct(){
  add_shortcode('wnat_tickets',[$this,'form']);
  add_action('wp_ajax_wnat_create_ticket',[$this,'create_ajax']);
 }
 public function form(){
  if(!is_user_logged_in()) return '<p>Login required</p>';
  return '<form id="wnat-ticket"><input name="title" placeholder="عنوان"><textarea name="message" placeholder="پیام"></textarea><button>ارسال</button></form>';
 }
 public function create_ajax(){
  check_ajax_referer('wnat_nonce','nonce');
  global $wpdb;
  $wpdb->insert($wpdb->prefix.'wnat_tickets',[
   'user_id'=>get_current_user_id(),
   'title'=>sanitize_text_field($_POST['title']),
   'message'=>sanitize_textarea_field($_POST['message'])
  ]);
  wp_send_json_success();
 }
 public static function create($data){
  global $wpdb;
  return $wpdb->insert($wpdb->prefix.'wnat_tickets',$data);
 }
}
new WNAT_Tickets();
