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