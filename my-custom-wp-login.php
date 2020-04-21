<?php
/**
 * Plugin Name: My Custom WP Login
 * Version: 0.1
 * Author: Jean(Yijing) Wang
 * License: GPL2+
 * Text Domain: cwpl
 */

add_action( 'login_enqueue_scripts', 'cwpl_login_stylesheet' );
 /**
  * Load custom login stylesheet
  */
function cwpl_login_stylesheet() {
    wp_enqueue_style( 'cwpl-custom-stylesheet', plugin_dir_url( __FILE__ ) . 'login-styles.css' );
}

add_filter( 'login_errors', 'cwpl_login_errors' );
/**
 * Returns a custom login error message.
 */
function cwpl_login_errors(){
  return 'The login info you entered was not correct!';
}