<?php
/**
 * Plugin Name: WP Content Generator
 * Plugin URI: https://dev.onl/
 * Description: Generate WordPress posts based on user queries using AI.
 * Vetsion 1.0
 * Author: BHARATH KUMAR REDDY
 * Author URI: https://dev.onl/
 * License: GPL3
 */

 /**
  * EXIT if accessed directly
  */
  if (!defined('ABSPATH')){
    exit;
  }

  function dev_onl_wp_content_generator_add_admin_menu(){
    add_menu_page(
        'WP Content Generator', 
        'WP Content Generator', 
        'manage_options', 
        'dev-onl-wp-content-generator', 
        'dev_onl_wp_content_generator_admin_page',
        'dashicons-edit',
        20
    );
  }

  add_action('admin_menu', 'dev_onl_wp_content_generator_add_admin_menu');