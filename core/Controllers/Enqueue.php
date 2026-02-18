<?php
namespace AnotherWooVariation\Core\Controllers;

// exit
if ( ! defined( 'ABSPATH' ) ) { exit; }

class Enqueue{
    public function __construct(){
        add_action('admin_enqueue_scripts', [$this, 'avsfw_loads_admin_scripts']);
    }

    public function avsfw_loads_admin_scripts($hook){

        if ( $hook !== 'toplevel_page_avsfw-manager' ) {
            return;
        }
        wp_enqueue_style( 'avsfw-toast', AVSFW_URL .'assets/css/helper.css', array(), true, 'all' );
        wp_enqueue_style( 'avsfw-core-css', AVSFW_URL .'assets/css/custom.css', array(), true, 'all' );
        wp_enqueue_script('avsfw-helper-js', AVSFW_URL .'assets/js/helper.js', array('jquery'), time(), true);
        wp_enqueue_script('avsfw-core-js', AVSFW_URL .'assets/js/app.js', array('jquery'), time(), true);
        wp_localize_script('avsfw-core-js', 'avsfw_core_apps', [
            'avsfwt_url' => AVSFW_URL,
            'nonce'      => wp_create_nonce( 'avsfw_save_settings' ),
            'admin_url'  => site_url(),
            'ajax_url'   => admin_url('admin-ajax.php'),
            'rest_url'   => rest_url(),
            // 'trans' => TransStrings::getTransStrings(),
        ]);

        if (function_exists('wp_enqueue_media')) {
            wp_enqueue_media();
         }
   
    }
}