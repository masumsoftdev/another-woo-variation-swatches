<?php
namespace AnotherWooVariation\Core\Controllers;

// Exit if accessed directly
if (!defined('ABSPATH')) { exit; }

class VariationAdmin{
    public function __construct(){
        add_action( 'woocommerce_product_data_tabs', [$this, 'avsfw_add_variable_product_tab'] );
        add_action( 'woocommerce_product_data_panels', [$this, 'avsfw_variable_product_tab_content'] );
    }

    public function avsfw_variable_product_tab_content(){
        ?>
        <div id="avsfw_variable_product_data" class="panel woocommerce_options_panel hidden">

            <div class="options_group">
                <?php
                woocommerce_wp_text_input( array(
                    'id'          => '_avsfw_custom_text',
                    'label'       => __( 'Custom Text', 'avsfw' ),
                    'desc_tip'    => true,
                    'description' => __( 'Custom field for variable products', 'avsfw' ),
                ) );
                ?>
            </div>
        </div>
        <?php
    }

    public function avsfw_add_variable_product_tab($tabs){
        $tabs['avsfw_tab'] = array(
            'label'    => __( 'My Custom Tab', 'avsfw' ),
            'target'   => 'avsfw_variable_product_data',
            'class'    => array( 'show_if_variable' ),
            'priority' => 80,
        );

        return $tabs;
    }
}