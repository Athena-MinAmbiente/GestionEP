Runner.buttonEvents["help_a"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'help_a';
	
	if ( !pageObj.buttonEventBefore['help_a'] ) {
		pageObj.buttonEventBefore['help_a'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
Swal.fire({
	position: 'center',
	icon: 'question',
	title: '¿Cómo veo la información?',
	html: 'Para ver los resultados haga clic en el bloque izquierdo sobre el rubro que desea analizar y listo!</br></br>',
	background: '#F7F7F7',
	timerProgressBar: true,
	showConfirmButton: false,
	timer: 9000
})

		}
	}
	
	if ( !pageObj.buttonEventAfter['help_a'] ) {
		pageObj.buttonEventAfter['help_a'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="help_a"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "help_a" + "_" + Runner.genId();
		
		// create object
		var button_help_a = new Runner.form.Button({
			id: this.id ,
			btnName: "help_a"
		});
		
		// init
		button_help_a.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

