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

        //Actions
        add_action('plugins_loaded', [$this, 'avsfw_load_text_domain']);
    }

    public function avsfw_load_text_domain(){
        load_textdomain( 'another-woo-variation-swatches', false, AVSFW_PATH . '/languages' );

        //Check wooCommerce Dependency
        if ( !class_exists( 'WooCommerce' ) ) {
            add_action( 'admin_notices', array( $this, 'avsfw_admin_notice' ) );
        }
    }

    public function avsfw_admin_notice(){
        ?>
        <div class="notice notice-error">
            <p>
                <?php printf(
                    e_( '%s requires %s to be installed and active. You can install and activate it from %s', 'another-woo-variation-swatches' ),
                    '<strong>Another Variation Swatches for WooCommerce</strong>',
                    '<strong>WooCommerce</strong>',
                    '<a href="' . esc_url( admin_url( 'plugin-install.php?tab=search&s=woocommerce' ) ) . '">here</a>.'
                ); ?>
            </p>
        </div>
        <?php
    }


}