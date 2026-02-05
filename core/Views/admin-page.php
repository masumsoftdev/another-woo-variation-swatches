<?php
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
            <label for="avsfw_enable_stylesheet">
                <strong>Enable Stylesheet</strong>
            </label>

            <label class="avsfw-checkbox">
                <input
                    type="checkbox"
                    id="avsfw_enable_stylesheet"
                    name="avsfw_settings[enable_stylesheet]"
                    value="1"
                    <?php checked( $options['enable_stylesheet'] ?? 1 ); ?>
                />
                Enable default stylesheet.
            </label>
        </div>

        <!-- Enable Tooltip -->
        <div class="avsfw-setting-row">
            <label for="avsfw_enable_tooltip">
                <strong>Enable Tooltip</strong>
            </label>

            <label class="avsfw-checkbox">
                <input
                    type="checkbox"
                    id="avsfw_enable_tooltip"
                    name="avsfw_settings[enable_tooltip]"
                    value="1"
                    <?php checked( $options['enable_tooltip'] ?? 1 ); ?>
                />
                Enable tooltip on each product attribute.
            </label>
        </div>

        <!-- Shape Style -->
        <div class="avsfw-setting-row">
            <label>
                <strong>Shape Style</strong>
            </label>

            <div class="avsfw-radio-group">
                <label>
                    <input
                        type="radio"
                        name="avsfw_settings[shape_style]"
                        value="rounded"
                        <?php checked( $options['shape_style'] ?? 'squared', 'rounded' ); ?>
                    />
                    Rounded Shape
                </label>

                <label>
                    <input
                        type="radio"
                        name="avsfw_settings[shape_style]"
                        value="squared"
                        <?php checked( $options['shape_style'] ?? 'squared', 'squared' ); ?>
                    />
                    Squared Shape
                </label>
            </div>
        </div>

        <!-- Dropdowns to Button -->
        <div class="avsfw-setting-row">
            <label for="avsfw_dropdown_to_button">
                <strong>Dropdowns to Button</strong>
            </label>

            <label class="avsfw-checkbox">
                <input
                    type="checkbox"
                    id="avsfw_dropdown_to_button"
                    name="avsfw_settings[dropdown_to_button]"
                    value="1"
                    <?php checked( $options['dropdown_to_button'] ?? 1 ); ?>
                />
                Convert default dropdowns to button.
            </label>
        </div>

        <!-- Dropdowns to Image (Pro / Disabled) -->
        <div class="avsfw-setting-row avsfw-disabled">
            <label for="avsfw_dropdown_to_image">
                <strong>Dropdowns to Image</strong>
            </label>

            <label class="avsfw-checkbox">
                <input
                    type="checkbox"
                    id="avsfw_dropdown_to_image"
                    name="avsfw_settings[dropdown_to_image]"
                    value="1"
                    disabled
                />
                Convert default dropdowns to image type if variation has an image.
            </label>

            <span class="avsfw-pro-badge">PRO</span>
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
</div>
