<script src="<?=base_url('js/ckeditor_bible.js')?>"></script>
<script src="<?=base_url('js/UploadAdapter.js')?>"></script>

<script>
ClassicEditor
	.create( document.querySelector( '.editor' ), {
		height: 500,
		toolbar: {
			items: [
				'imageUpload'
			],
			shouldNotGroupWhenFull: true
		},
		language: 'ko',
		image: {
			styles: [
                'alignLeft', 'alignCenter', 'alignRight'
            ],

            // Configure the available image resize options.
            resizeOptions: [
                {
                    name: 'imageResize:original',
                    label: 'Original',
                    value: null
                },
                {
                    name: 'imageResize:50',
                    label: '50%',
                    value: '50'
                },
                {
                    name: 'imageResize:75',
                    label: '75%',
                    value: '75'
                }
            ],

            // You need to configure the image toolbar, too, so it shows the new style
            // buttons as well as the resize buttons.
            toolbar: [
                'imageStyle:alignLeft', 'imageStyle:alignCenter', 'imageStyle:alignRight',
                '|',
                'imageResize',
                '|',
                'imageTextAlternative'
            ]
		},
		table: {
					contentToolbar: [
						'tableColumn',
						'tableRow',
						'mergeTableCells',
						'tableCellProperties',
						'tableProperties'
					]
				},
		extraPlugins: [
			MyCustomUploadAdapterPlugin
		],
		licenseKey: '',
		
	} )
	.then( editor => {
		window.editor = editor;
		
	} )
	.catch( error => {
		console.error( 'Oops, something went wrong!' );
		console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
		console.warn( 'Build id: fepq96jhsms8-h3nws7rbnl2x' );
		console.error( error );
	} );

	function MyCustomUploadAdapterPlugin(editor) {
    	editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
        return new UploadAdapter(loader)
    }
}
</script>