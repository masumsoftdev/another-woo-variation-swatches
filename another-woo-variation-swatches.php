<?php
/**
 * Plugin Name:       Another Variation Swatches for WooCommerce
 * Plugin URI:        https://anotherinfotech.com/another-woo-variation-swatches
 * Description:       Adds color, image, label, button, and radio-based variation swatches for WooCommerce variable products.
 * Version:           1.0.0
 * Requires at least: 6.0
 * Tested up to:      6.4
 * Requires PHP:      7.4
 * WC requires at least: 7.0
 * WC tested up to:      8.5
 * Author:            Another InfoTech
 * Author URI:        https://anotherinfotech.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       another-woo-variation-swatches
 * Domain Path:       /languages
 */

defined( 'ABSPATH' ) || exit;

class Asfw_Init {
    public function __construct() {
        define('AVSFW_PATH', plugin_dir_url(__FILE__));
        define('AVSFW_URL', plugin_dir_url(__FILE__));
        define('AVSFW_VERSION', '1.0.0');


        if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
            require_once __DIR__ . '/vendor/autoload.php';
        }

        //Actions
        add_action('plugins_loaded', [$this, 'avsfw_load_text_domain'], 5);
        add_action('init', array($this, 'init'));
        add_action('admin_init', array($this, 'avsfw_admin_notices'));
    }
    public function avsfw_admin_notices(){
        if (
            isset( $_GET['page'] ) &&
            $_GET['page'] === 'avsfw-manager'
        ) {
            remove_all_actions( 'admin_notices' );
            remove_all_actions( 'all_admin_notices' );

            // Show ONLY our notice if WooCommerce is missing
            if ( ! class_exists( 'WooCommerce' ) ) {
                add_action( 'admin_notices', [ $this, 'avsfw_admin_notice' ] );
            }
        }
    }

    public function init(){
       new AnotherWooVariation\Core\Controllers\Loader;  
    }

    public function avsfw_load_text_domain(){
        load_textdomain( 'another-woo-variation-swatches', false, AVSFW_PATH . '/languages' );
    }

    public function avsfw_admin_notice(){
        ?>
        <div class="notice notice-error">
            <p>
                <?php printf(
                    __( '%s requires %s to be installed and active. You can install and activate it from %s', 'another-woo-variation-swatches' ),
                    '<strong>Another Variation Swatches for WooCommerce</strong>',
                    '<strong>WooCommerce</strong>',
                    '<a href="' . esc_url( admin_url( 'plugin-install.php?tab=search&s=woocommerce' ) ) . '">here</a>.'
                ); ?>
            </p>
        </div>
        <?php
    }


}

new Asfw_Init();