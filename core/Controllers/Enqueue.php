<?php
namespace AnotherWooVariation\Core\Controllers;

// exit
if ( ! defined( 'ABSPATH' ) ) { exit; }

class Enqueue{
    public function __construct(){
        add_action('admin_enqueue_scripts', [$this, 'avsfw_loads_admin_scripts']);
    }

    public function avsfw_loads_admin_scripts(){

        // wp_enqueue_script('woonxt-app-script', WOONXTM_URL . 'assets/admin/js/main.js', array('jquery'), null, true);
        // wp_enqueue_script('thb-app-script', THB_URL . 'assets/admin/js/main.js', array('jquery'), null, true);
        wp_enqueue_style('avsfw-vue-css', 'http://localhost:5173/src/assets/dashboard/dashboard.css', array(), time(), 'all');
        wp_enqueue_script('avsfw-vue-core', AVSFW_URL .'admin/src/main.js', array(), time(), true);
        wp_localize_script('avsfw-vue-core', 'avsfw_core_apps', [
            'avsfwt_url'    => AVSFW_URL,
            'rest_nonce'    => wp_create_nonce( 'wp_rest' ),
            'admin_url'     => site_url(),
            'ajax_url'      => admin_url('admin-ajax.php'),
            'rest_url'      => rest_url(),
            // 'trans' => TransStrings::getTransStrings(),
        ]);

        if (function_exists('wp_enqueue_media')) {
            wp_enqueue_media();
         }
   
    }
}