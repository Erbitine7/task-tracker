const tugas = document.getElementById('tugas');
const notification = document.getElementById('notification');
const notificationText = document.getElementById('notification-text');

tinymce.init({
  selector: '#deskripsi',
  license_key: 'gpl',
  setup: (editor) => {
    editor.on('keyup', () => {
      editor.save();
    });
    editor.on('keyup', () => {
      saveDraft();
    });
    editor.on('init', function() {
      loadDraft();
    });
  },
  content_css: window.APP_CONFIG.baseUrl + 'css/output.css',
  skin: 'oxide-dark',
  body_class: 'bg-slate-900 text-white grow focus:none',
  promotion: false,
  resize: false,
});

tugas.addEventListener('keyup', function() {
  saveDraft();
});

function loadDraft() {
  const draft = JSON.parse(localStorage.getItem('draft'));

  if (draft) {
    console.log('Draft loaded');
    tugas.value = draft.tugas;
    tinymce.get('deskripsi').setContent(draft.deskripsi);
  } else {
    console.log('No draft found');
  }
}

function saveDraft() {
  console.log('Draft saved');

  localStorage.setItem('draft', JSON.stringify({
    tugas: tugas.value,
    deskripsi: tinymce.get('deskripsi').getContent(),
  }));
}

function removeDraft() {
  console.log('Draft removed');
  localStorage.removeItem('draft');
}

function toggleDescription(id) {
  const deskripsi = document.getElementById(`deskripsi_${id}`);

  deskripsi.classList.toggle('hidden');
}

function showNotification(message) {
  notificationText.textContent = message;
  notification.classList.remove('opacity-0');
  notification.classList.remove('pointer-events-none');

  setTimeout(() => {
    notification.classList.add('opacity-0');
    notification.classList.add('pointer-events-none');
  }, 5000);
}

document.addEventListener('DOMContentLoaded', function() {
  const created = window.flashData.created;
  const updated = window.flashData.updated;
  const deleted = window.flashData.deleted;

  if (created) {
    showNotification(created);
    removeDraft();
  } else if (updated) {
    showNotification(updated);
  } else if (deleted) {
    showNotification(deleted);
  }
});