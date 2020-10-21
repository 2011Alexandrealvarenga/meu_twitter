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
   
   
  }

}

Meu_twitter::getInstance();