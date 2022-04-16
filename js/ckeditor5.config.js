ClassicEditor
	.create(document.querySelector('.editor'), {
		removePlugins: [ 'Title'],
  fontFamily: {
    options: [
        'default',
        'Poppins,Arial, sans-serif',
        'Ubuntu, Arial, sans-serif',
    	'Ubuntu Mono, Courier New, Courier, monospace',
    	'Arial, Helvetica, sans-serif',
    	'Courier New, Courier, monospace',
    	'Georgia, serif',
    	'Lucida Sans Unicode, Lucida Grande, sans-serif',
    	'Tahoma, Geneva, sans-serif',
    	'Times New Roman, Times, serif',
    	'Trebuchet MS, Helvetica, sans-serif',
    	'Verdana, Geneva, sans-serif'
    ]
},
  toolbar: {
    items: [
      'undo',
      'redo',
      '|',
      'heading',
      '|',
      'fontColor',
      'fontBackgroundColor',
      'fontFamily',
      'bold',
      'fontSize',
      'italic',
      'underline',
      'removeFormat',
      'link',
      '|',
      'bulletedList',
      'numberedList',
      '|',
      'alignment',
      'outdent',
      'indent',
      'horizontalLine',
      '|',
      'imageUpload',
      'insertTable',
      'mediaEmbed',
      'blockQuote',
      'findAndReplace',
      '-',
      'highlight',
      'subscript',
      'specialCharacters',
      '|',
      'code',
      'codeBlock',
      'htmlEmbed',
      'sourceEditing'
    ],
    shouldNotGroupWhenFull: true
  },

  language: 'fr',
  image: {
    toolbar: [
      'imageTextAlternative',
      'imageStyle:inline',
      'imageStyle:block',
      'imageStyle:side'
    ]
  },
  table: {
    contentToolbar: [
      'tableColumn',
      'tableRow',
      'mergeTableCells'
    ]
  },
  licenseKey: '',



})
.then(editor => {
  window.editor = editor;




})
.catch(error => {
  console.error('Oops, something went wrong!');
  console.error('Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:');
  console.warn('Build id: xwj33697g579-28oxcqx3b7n9');
  console.error(error);
});

