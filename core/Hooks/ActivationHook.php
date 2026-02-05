<?php
namespace AnotherWooVariation\Core\Hooks;

if ( ! defined('ABSPATH') ) exit;

class ActivationHook {

    public static function activate() {
        global $wpdb;

        require_once ABSPATH . 'wp-admin/includes/upgrade.php';

        $table_name = $wpdb->prefix . 'avsfw_settings';
        $charset_collate = $wpdb->get_charset_collate();

        $sql = "CREATE TABLE {$table_name} (
            id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
            setting_key VARCHAR(191) NOT NULL,
            setting_value LONGTEXT NULL,
            PRIMARY KEY (id),
            UNIQUE KEY setting_key (setting_key)
        ) {$charset_collate};";

        dbDelta( $sql );

        update_option( 'avsfw_db_version', '1.0.0' );
    }
}
