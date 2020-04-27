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
    wp_enqueue_style( 'cwpl-custom-stylesheet', plugin_dir_url( __FILE__ ) . 'login-styles.css', array(), '1.0' );
}

add_filter( 'login_errors', 'cwpl_login_errors' );
/**
 * Returns a custom login error message.
 */
function cwpl_login_errors() {
  return 'The login info you entered was not correct!';
}

add_filter( 'login_headertext', 'cwpl_wp_login_title' );
/**
 * Change wp login title
 */
function cwpl_wp_login_title() {
  return 'something new!';
}

add_filter( 'login_headerurl', 'cwpl_change_header_url' );
/**
 * Change Login page Header URL
 */
function cwpl_change_header_url() {
    $url = 'https://jeanwang2dev.com';
    return $url;
}

add_action( 'login_footer', 'cwpl_remove_shake' );
/**
 * Remove login page shake effect when login info is wrong
 */
function cwpl_remove_shake() {
  remove_action( 'login_footer', 'wp_shake_js', 12 );
}

