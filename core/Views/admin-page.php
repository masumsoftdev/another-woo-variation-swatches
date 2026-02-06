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

            <!-- Enable Stylesheet -->
            <div class="avsfw-setting-row">
                <strong>Enable Stylesheet</strong>
                <label class="avsfw-toggle">
                    <input type="checkbox" name="avsfw_settings[enable_stylesheet]" checked>
                    <span class="avsfw-toggle-slider"></span>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, porro?</p>
                </label>
            </div>

            <!-- Enable Tooltip -->
            <div class="avsfw-setting-row">
                <strong>Enable Tooltip</strong>
                <label class="avsfw-toggle">
                    <input type="checkbox" name="avsfw_settings[enable_tooltip]" checked>
                    <span class="avsfw-toggle-slider"></span>
                </label>
            </div>

            <!-- Dropdown to Button -->
            <div class="avsfw-setting-row">
                <strong>Dropdowns to Button</strong>
                <label class="avsfw-toggle">
                    <input type="checkbox" name="avsfw_settings[dropdown_to_button]" checked>
                    <span class="avsfw-toggle-slider"></span>
                </label>
            </div>

            <!-- PRO Feature -->
            <div class="avsfw-setting-row avsfw-disabled">
                <strong>Dropdowns to Image</strong>
                <div>
                    <label class="avsfw-toggle">
                        <input type="checkbox" disabled>
                        <span class="avsfw-toggle-slider"></span>
                    </label>
                    <span class="avsfw-pro-badge">PRO</span>
                </div>
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
