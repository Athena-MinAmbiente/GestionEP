Runner.buttonEvents["hb"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'hb';
	
	if ( !pageObj.buttonEventBefore['hb'] ) {
		pageObj.buttonEventBefore['hb'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
Swal.fire(
  'Solicitud NO PAA | Integrado',
  'Los recursos programados a través de esta opción requieren asociarse a un PAA que se publique en SECOP II, Integrado se refiere a un contrato financiado con varios rubros sean de inversión, funcionamiento o ambos',
  'question'
)
		}
	}
	
	if ( !pageObj.buttonEventAfter['hb'] ) {
		pageObj.buttonEventAfter['hb'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="hb"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "hb" + "_" + Runner.genId();
		
		// create object
		var button_hb = new Runner.form.Button({
			id: this.id ,
			btnName: "hb"
		});
		
		// init
		button_hb.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

