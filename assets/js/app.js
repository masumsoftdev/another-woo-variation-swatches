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