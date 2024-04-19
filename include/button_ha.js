Runner.buttonEvents["ha"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'ha';
	
	if ( !pageObj.buttonEventBefore['ha'] ) {
		pageObj.buttonEventBefore['ha'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
Swal.fire(
  'Solicitud NO PAA',
  'Aplica para realizar la programación de recursos que no requieren ser publicados en SECOP II, como transferencias, adiciones,modificaciones.',
  'question'
)
		}
	}
	
	if ( !pageObj.buttonEventAfter['ha'] ) {
		pageObj.buttonEventAfter['ha'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="ha"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "ha" + "_" + Runner.genId();
		
		// create object
		var button_ha = new Runner.form.Button({
			id: this.id ,
			btnName: "ha"
		});
		
		// init
		button_ha.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

