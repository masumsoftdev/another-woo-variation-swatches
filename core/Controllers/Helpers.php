<?php
namespace AnotherWooVariation\Core\Controllers;

// Exit if accessed directly
if (!defined('ABSPATH')) { exit; }

class Helpers{
    public function __construct(){
        add_action( 'wp_ajax_avsfw_save_settings', [$this, 'avsfw_ajax_save_settings' ] );
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

    public function avsfw_get_setting( string $key, $default = '' ) {
        global $wpdb;

        $table = $wpdb->prefix . 'avsfw_settings';

        $value = $wpdb->get_var(
            $wpdb->prepare(
                "SELECT setting_value FROM $table WHERE setting_key = %s",
                $key
            )
        );

        return $value !== null ? $value : $default;
    }
}