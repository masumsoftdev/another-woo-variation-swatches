function avsfwToast(message, type = 'success') {

  const container = document.getElementById('avsfw-toast-container');
  if (!container) return;

  const toast = document.createElement('div');
  toast.className = `avsfw-toast ${type}`;
  toast.textContent = message;

  container.appendChild(toast);

  // trigger animation
  requestAnimationFrame(() => {
    toast.classList.add('show');
  });

  // hide after 3s
  setTimeout(() => {
    toast.classList.remove('show');
    toast.classList.add('hide');
  }, 3000);

  // remove from DOM
  setTimeout(() => {
    toast.remove();
  }, 3500);
}

function avsfwConfirmModal(message, onConfirm, onCancel) {

  // Create overlay
  const overlay = document.createElement('div');
  overlay.className = 'avsfw-modal-overlay';

  // Create modal
  const modal = document.createElement('div');
  modal.className = 'avsfw-modal';

  modal.innerHTML = `
    <div class="avsfw-modal-message">${message}</div>
    <div class="avsfw-modal-actions">
      <button class="avsfw-btn avsfw-confirm">Confirm</button>
      <button class="avsfw-btn avsfw-cancel">Cancel</button>
    </div>
  `;

  overlay.appendChild(modal);
  document.body.appendChild(overlay);

  // Confirm button
  modal.querySelector('.avsfw-confirm').addEventListener('click', () => {
    document.body.removeChild(overlay);
    if (onConfirm) onConfirm();
  });

  // Cancel button
  modal.querySelector('.avsfw-cancel').addEventListener('click', () => {
    document.body.removeChild(overlay);
    if (onCancel) onCancel();
  });

  // Close when clicking outside
  overlay.addEventListener('click', (e) => {
    if (e.target === overlay) {
      document.body.removeChild(overlay);
      if (onCancel) onCancel();
    }
  });
}

/**
 * Header Tabs
 */
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

/**
 * Saving / Update the Settings Data
 */

document.addEventListener('DOMContentLoaded', () => {

  const saveBtn = document.getElementById('avsfw-submit-btn');

  saveBtn.addEventListener('click', (e) => {

    e.preventDefault();

    const formData = new FormData();

    formData.append('action', 'avsfw_save_settings');
    formData.append('nonce', avsfw_core_apps.nonce);

    formData.append('settings[enable_stylesheet]',
      document.getElementById('avsfw_enable_stylesheet')?.checked ? 1 : 0
    );

    formData.append('settings[enable_tooltip]',
      document.getElementById('avsfw_enable_tooltip')?.checked ? 1 : 0
    );

    formData.append(
      'settings[shape_style]',
      document.querySelector('input[name="avsfw_settings[shape_style]"]:checked')?.value || 'squared'
    );

    formData.append('settings[dropdown_to_button]',
      document.getElementById('avsfw_dropdown_to_button')?.checked ? 1 : 0
    );

    formData.append('settings[dropdown_to_image]',
      document.getElementById('avsfw_dropdown_to_image')?.checked ? 1 : 0
    );

    saveBtn.disabled = true;
    saveBtn.textContent = 'Saving...';

    console.log(formData)

    fetch(avsfw_core_apps.ajax_url, {
      method: 'POST',
      credentials: 'same-origin',
      body: formData
    })
      .then(res => res.json())
      .then(res => {
        if (res.success) {
          avsfwToast('Settings saved successfully');
          console.log('Settings saved successfully');
        } else {
          console.log(res.data?.message || 'Save failed');
        }
      })
      .catch(() => {
        console.log('AJAX error');
      })
      .finally(() => {
        saveBtn.disabled = false;
        saveBtn.textContent = 'Save Settings';
      });

  });

});

/**
 * Reset Button Confirmation
 */

document.addEventListener('DOMContentLoaded', () => {
  let resetBtn = document.querySelector('.avsfw-reset');

  resetBtn.addEventListener('click', function (e){
    e.preventDefault();
    avsfwConfirmModal(
      'Are you sure you want to reset?',
      function () {
        avsfwToast('Reset successfully');
      },
      function () {
        avsfwToast('Thank you');
      }
    );
  });
});
