<?php
if(!defined('ABSPATH')) exit;
class WNAT_Products {
 public function __construct(){ add_action('init',[$this,'register']); }
 public function register(){
  register_post_type('wnat_product',[ 'label'=>'Products','public'=>true,'supports'=>['title','editor','thumbnail'],'menu_icon'=>'dashicons-cart' ]);
 }
}
new WNAT_Products();
