<?php
if(!defined('ABSPATH')) exit;
class WNAT_Purchase_Requests {
 public function __construct(){
  add_shortcode('wnat_products',[$this,'products']);
 }
 public function products(){
  $q=new WP_Query(['post_type'=>'wnat_product','posts_per_page'=>-1]);
  ob_start();
  echo '<div class="wnat-products">';
  while($q->have_posts()){
   $q->the_post();
   echo '<div class="wnat-card"><h3>'.esc_html(get_the_title()).'</h3><p>'.wp_kses_post(get_the_content()).'</p><button>درخواست خرید</button></div>';
  }
  echo '</div>';
  wp_reset_postdata();
  return ob_get_clean();
 }
 public static function create($data){
  global $wpdb;
  return $wpdb->insert($wpdb->prefix.'wnat_requests',$data);
 }
}
new WNAT_Purchase_Requests();
