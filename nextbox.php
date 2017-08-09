<?php
/**
 * @package NextBox
 * @version 1.0.1.2
 */
/*
Plugin Name: NextBox
Plugin URI: http://chipree.com/nextbox/
Description: An update for the regular alertbox. A facelift design for the standard messagebox.
Author: Ciprian Turcu
Version: 1.0.1.2
Author URI: http://chipree.com/
  */
function nextbox_scripts() {
    wp_deregister_script( 'jquery');
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js');
    wp_register_script( 'nextboxjs', plugins_url( 'NextBox.js' , __FILE__ ));
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'nextboxjs' );
}    
function nextbox_styles() {
     wp_register_style('nextboxstyle', plugins_url( 'NextBox.css' , __FILE__ ));
     wp_enqueue_style('nextboxstyle');
}    
 
add_action('wp_enqueue_scripts', 'nextbox_scripts');
add_action('wp_print_styles', 'nextbox_styles');
?>