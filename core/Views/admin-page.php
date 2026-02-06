<?php

use AnotherWooVariation\Core\Controllers\Helpers;

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<div class="avsfw-admin-wrap">
    <h1 class="avsfw-title">Another Woo Variation Swatches</h1>

    <!-- Tabs -->
    <div class="avsfw-tabs">
        <button class="avsfw-tab-button avsfw-active" data-tab="general">General</button>
        <button class="avsfw-tab-button" data-tab="advanced">Advanced</button>
        <button class="avsfw-tab-button" data-tab="styling">Styling</button>
        <button class="avsfw-tab-button" data-tab="product-page">Product Page</button>
        <button class="avsfw-tab-button" data-tab="archive-page">Archive/Shop Page</button>
    </div>

    <!-- Tab Contents -->
    <div class="avsfw-tab-content avsfw-active" id="avsfw-tab-general">
        <h2>General Settings</h2>
        <div class="avsfw-settings-group">
           <div class="avsfw-left">
                 <!-- Enable Stylesheet -->
                <div class="avsfw-setting-row">
                    <div class="avsfw-setting-text">
                        <strong>Enable Stylesheet</strong>
                        <p class="avsfw-setting-desc">
                            Enable or disable the default stylesheet for variation swatches.
                        </p>
                    </div>

                    <label class="avsfw-toggle">
                        <input type="checkbox" name="avsfw_settings[enable_stylesheet]" checked>
                        <span class="avsfw-toggle-slider"></span>
                    </label>
                </div>

                <!-- Enable Tooltip -->
                <div class="avsfw-setting-row">
                    <div class="avsfw-setting-text">
                        <strong>Enable Tooltip</strong>
                        <p class="avsfw-setting-desc">
                            Show tooltip on each product attribute swatch.
                        </p>
                    </div>

                    <label class="avsfw-toggle">
                        <input type="checkbox" name="avsfw_settings[enable_tooltip]" checked>
                        <span class="avsfw-toggle-slider"></span>
                    </label>
                </div>

                <!-- Dropdown to Button -->
                <div class="avsfw-setting-row">
                    <div class="avsfw-setting-text">
                        <strong>Dropdowns to Button</strong>
                        <p class="avsfw-setting-desc">
                            Convert default WooCommerce dropdowns into button-style swatches.
                        </p>
                    </div>

                    <label class="avsfw-toggle">
                        <input type="checkbox" name="avsfw_settings[dropdown_to_button]" checked>
                        <span class="avsfw-toggle-slider"></span>
                    </label>
                </div>

                <!-- PRO Feature -->
                <div class="avsfw-setting-row avsfw-disabled">
                    <div class="avsfw-setting-text">
                        <strong>Dropdowns to Image</strong>
                        <p class="avsfw-setting-desc">
                            Automatically convert variations to image swatches (Pro feature).
                        </p>
                    </div>

                    <div class="avsfw-pro-action">
                        <span class="avsfw-pro-badge">PRO</span>
                        <label class="avsfw-toggle">
                            <input type="checkbox" disabled>
                            <span class="avsfw-toggle-slider"></span>
                        </label>
                    </div>
                </div>
           </div>
           <div class="avsfw-right">
                <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, autem, dicta quos harum porro veniam culpa recusandae aliquid nobis hic pariatur cumque! Quidem amet, consequatur animi, labore aliquam repudiandae quisquam aspernatur soluta iusto nesciunt veritatis? Rerum sed deleniti vel, incidunt, voluptas quod id tempora reiciendis aperiam minus in soluta perferendis?</h1>
           </div>
        </div>
    </div>

    <div class="avsfw-tab-content" id="avsfw-tab-display">
        <h2>Display Settings</h2>
        <p>This is the Display tab content.</p>
    </div>

    <div class="avsfw-tab-content" id="avsfw-tab-advanced">
        <h2>Advanced Settings</h2>
        <p>This is the Advanced tab content.</p>
    </div>
    <div class="avsfw-submit">
        <a href="#" id="avsfw-submit-btn">Save Changes</a>
        <a href="#" class="avsfw-reset">Reset All</a>
    </div>
    <div id="avsfw-toast-container"></div>
</div>
