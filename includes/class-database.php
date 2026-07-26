<?php
if(!defined('ABSPATH')) exit;
class WNAT_Database {
 public static function install(){
  global $wpdb;
  $charset=$wpdb->get_charset_collate();
  $tables=[
   "CREATE TABLE {$wpdb->prefix}wnat_requests (id bigint unsigned NOT NULL AUTO_INCREMENT,user_id bigint unsigned NOT NULL,product_id bigint unsigned NOT NULL,message text,status varchar(20) DEFAULT 'pending',created datetime DEFAULT CURRENT_TIMESTAMP,PRIMARY KEY(id)) $charset;",
   "CREATE TABLE {$wpdb->prefix}wnat_services (id bigint unsigned NOT NULL AUTO_INCREMENT,user_id bigint unsigned NOT NULL,name varchar(255),status varchar(20) DEFAULT 'active',created datetime DEFAULT CURRENT_TIMESTAMP,PRIMARY KEY(id)) $charset;",
   "CREATE TABLE {$wpdb->prefix}wnat_tickets (id bigint unsigned NOT NULL AUTO_INCREMENT,user_id bigint unsigned NOT NULL,title varchar(255),message text,status varchar(20) DEFAULT 'open',reply text,created datetime DEFAULT CURRENT_TIMESTAMP,PRIMARY KEY(id)) $charset;"
  ];
  require_once ABSPATH.'wp-admin/includes/upgrade.php'; foreach($tables as $sql) dbDelta($sql);
 }
}
