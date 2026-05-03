const tugas = document.getElementById('tugas');

tinymce.init({
  selector: '#deskripsi',
  license_key: 'gpl',
  setup: (editor) => {
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