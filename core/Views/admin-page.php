<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<div class="wrap avsfw-admin-wrap">
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
        <p>This is the General tab content.</p>
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
        <a href="#">Save Changes</a>
        <a href="#" class="avsfw-reset">Reset All</a>
    </div>
</div>
