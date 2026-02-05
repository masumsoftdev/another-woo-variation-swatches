document.addEventListener('DOMContentLoaded', function () {
    const tabButtons = document.querySelectorAll('.avsfw-tab-button');
    const tabContents = document.querySelectorAll('.avsfw-tab-content');

    tabButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            const tab = this.getAttribute('data-tab');

            // Remove active class
            tabButtons.forEach(btn => btn.classList.remove('avsfw-active'));
            tabContents.forEach(content => content.classList.remove('avsfw-active'));

            // Activate selected
            this.classList.add('avsfw-active');
            document.getElementById('avsfw-tab-' + tab).classList.add('avsfw-active');
        });
    });
});