<?php
/*
Plugin Name: Meu Twitter
Plugin URI: http://exemplo.com
Description: Plugin desenvolvido para cadastro do twitter
Version: 1.0
Author: Alexandre
Author URI: http://meusite.com.br
Text Domain: meu-twitter
License: GPL2
*/

class Meu_twitter {
  private static $instance;

  public static function getInstance() {
    if (self::$instance == NULL) {
      self::$instance = new self();
    }

    return self::$instance;
  }

  private function __construct() {
   add_action('admin_menu',array($this,'set_custom_fields'));
   
  }
  public function set_custom_fields(){
    add_menu_page('Meu twitter','Meu twitter','manage_options','meu_twitter',
      'Meu_twitter::save_custom_fields','
      dashicons-twitter','10');
  }
  public function save_custom_fields(){
    echo "ola mundo";
  }

}

Meu_twitter::getInstance();