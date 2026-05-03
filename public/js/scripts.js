tinymce.init({
  selector: '#deskripsi',
  license_key: 'gpl',
  content_css: window.APP_CONFIG.baseUrl + 'css/output.css',
  skin: 'oxide-dark',
  body_class: 'bg-slate-900 text-white grow focus:none',
  plugins: 'autosave',
  autosave_ask_before_unload: false,
  autosave_restore_when_empty: true,
});

function removeDraft() {
  tinymce.get('deskripsi').setContent('');
}