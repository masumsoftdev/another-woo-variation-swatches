<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<div class="wrap avsfw-admin-wrap">
    <h1 class="avsfw-title">Another Woo Variation Swatches</h1>

    <!-- Tabs -->
    <div class="avsfw-tabs">
        <button class="avsfw-tab-button active" data-tab="general">General</button>
        <button class="avsfw-tab-button" data-tab="display">Display</button>
        <button class="avsfw-tab-button" data-tab="advanced">Advanced</button>
    </div>

    <!-- Tab Contents -->
    <div class="avsfw-tab-content active" id="avsfw-tab-general">
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
</div>

<!-- Styles -->
<style>
.avsfw-admin-wrap {
    background: #fff;
    padding: 20px;
    border-radius: 6px;
}

.avsfw-title {
    margin-bottom: 20px;
    color: #d97706; /* orange title */
}

.avsfw-tabs {
    display: flex;
    border-bottom: 1px solid #f3d19c;
    margin-bottom: 20px;
}

.avsfw-tab-button {
    background: none;
    border: none;
    padding: 10px 18px;
    cursor: pointer;
    font-size: 14px;
    color: #92400e;
    border-bottom: 3px solid transparent;
    transition: all 0.2s ease;
}

.avsfw-tab-button:hover {
    color: #ea580c;
}

.avsfw-tab-button.active {
    border-bottom-color: #f97316; /* main orange */
    font-weight: 600;
    color: #f97316;
}

.avsfw-tab-button:focus {
    outline: none;
    box-shadow: none;
}

.avsfw-tab-content {
    display: none;
    padding: 10px 0;
}

.avsfw-tab-content.active {
    display: block;
}

.avsfw-tab-content h2 {
    color: #c2410c;
}
</style>


<!-- Scripts -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const tabButtons = document.querySelectorAll('.avsfw-tab-button');
    const tabContents = document.querySelectorAll('.avsfw-tab-content');

    tabButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            const tab = this.getAttribute('data-tab');

            // Remove active class
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabContents.forEach(content => content.classList.remove('active'));

            // Activate selected
            this.classList.add('active');
            document.getElementById('avsfw-tab-' + tab).classList.add('active');
        });
    });
});
</script>
