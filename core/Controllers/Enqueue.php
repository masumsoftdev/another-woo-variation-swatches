<?php
namespace AnotherWooVariation\Core\Controllers;

// exit
if ( ! defined( 'ABSPATH' ) ) { exit; }

class Enqueue{
    public function __construct(){
        add_action('admin_enqueue_scripts', [$this, 'avsfw_loads_admin_scripts']);
        add_action( 'wp_ajax_avsfw_save_settings', [$this, 'avsfw_ajax_save_settings' ] );
    }

    public function avsfw_loads_admin_scripts($hook){

        if ( $hook !== 'toplevel_page_avsfw-manager' ) {
            return;
        }
        wp_enqueue_style( 'avsfw-core-css', AVSFW_URL .'assets/css/custom.css', array(), true, 'all' );
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

    public function avsfw_ajax_save_settings(){
         check_ajax_referer( 'avsfw_save_settings', 'nonce' );

    if ( ! current_user_can( 'manage_options' ) ) {
        wp_send_json_error([ 'message' => 'Permission denied' ]);
    }

    if ( empty( $_POST['settings'] ) || ! is_array( $_POST['settings'] ) ) {
        wp_send_json_error([ 'message' => 'Invalid data' ]);
    }

    $raw = wp_unslash( $_POST['settings'] );

    $sanitized = [
        'enable_stylesheet'  => ! empty( $raw['enable_stylesheet'] ) ? 1 : 0,
        'enable_tooltip'     => ! empty( $raw['enable_tooltip'] ) ? 1 : 0,
        'shape_style'        => in_array( $raw['shape_style'] ?? '', [ 'rounded', 'squared' ], true )
            ? $raw['shape_style']
            : 'squared',
        'dropdown_to_button' => ! empty( $raw['dropdown_to_button'] ) ? 1 : 0,
        'dropdown_to_image'  => ! empty( $raw['dropdown_to_image'] ) ? 1 : 0,
    ];

    global $wpdb;
    $table = $wpdb->prefix . 'avsfw_settings';

    foreach ( $sanitized as $key => $value ) {
        $wpdb->replace(
            $table,
            [
                'setting_key'   => $key,
                'setting_value' => (string) $value,
            ],
            [ '%s', '%s' ]
        );
    }

    wp_send_json_success([ 'message' => 'Settings saved' ]);
    }
}