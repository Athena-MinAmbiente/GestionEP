<?php
			$optionsArray = array( 'totals' => array( 'RUBRO_ID' => array( 'totalsType' => '' ),
'VIGENCIA' => array( 'totalsType' => '' ),
'UEJ' => array( 'totalsType' => '' ),
'DESCRIPCION' => array( 'totalsType' => '' ),
'PRESUPUESTO_000' => array( 'totalsType' => '' ),
'RUBRO_001' => array( 'totalsType' => '' ),
'RUBRO' => array( 'totalsType' => '' ),
'DESCRIPCION_001' => array( 'totalsType' => '' ),
'REC_001' => array( 'totalsType' => '' ),
'BPIN' => array( 'totalsType' => '' ),
'PRESUPUESTO_001' => array( 'totalsType' => '' ),
'DEP_001' => array( 'totalsType' => '' ),
'PROD_ID' => array( 'totalsType' => '' ),
'PRODUCTO' => array( 'totalsType' => '' ),
'DESCRIPCION_002' => array( 'totalsType' => '' ),
'PRESUPUESTO_002' => array( 'totalsType' => '' ),
'REC_002' => array( 'totalsType' => '' ),
'DEP_002' => array( 'totalsType' => '' ),
'RESPONSABLE_002' => array( 'totalsType' => '' ),
'sol_paa' => array( 'totalsType' => '' ),
'META' => array( 'totalsType' => '' ),
'PROGRAMADO' => array( 'totalsType' => '' ),
'SALDO_PROG' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'VIGENCIA',
'UEJ',
'DESCRIPCION',
'PRESUPUESTO_000',
'RUBRO_001',
'RUBRO',
'DESCRIPCION_001',
'PRODUCTO',
'DESCRIPCION_002',
'PRESUPUESTO_002',
'PROGRAMADO',
'SALDO_PROG' ),
'exportFields' => array( 'VIGENCIA',
'UEJ',
'DESCRIPCION',
'PRESUPUESTO_000',
'RUBRO_001',
'RUBRO',
'DESCRIPCION_001',
'PRODUCTO',
'DESCRIPCION_002',
'PRESUPUESTO_002',
'PROGRAMADO',
'SALDO_PROG' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'VIGENCIA' => array( 'export_field1' ),
'UEJ' => array( 'export_field2' ),
'DESCRIPCION' => array( 'export_field3' ),
'PRESUPUESTO_000' => array( 'export_field4' ),
'RUBRO_001' => array( 'export_field5' ),
'RUBRO' => array( 'export_field6' ),
'DESCRIPCION_001' => array( 'export_field7' ),
'PRODUCTO' => array( 'export_field13' ),
'DESCRIPCION_002' => array( 'export_field14' ),
'PRESUPUESTO_002' => array( 'export_field15' ),
'PROGRAMADO' => array( 'export_field' ),
'SALDO_PROG' => array( 'export_field8' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field13',
'export_field14',
'export_field15',
'export_field',
'export_field8' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field1' => 'grid',
'export_field2' => 'grid',
'export_field3' => 'grid',
'export_field4' => 'grid',
'export_field5' => 'grid',
'export_field6' => 'grid',
'export_field7' => 'grid',
'export_field13' => 'grid',
'export_field14' => 'grid',
'export_field15' => 'grid',
'export_field' => 'grid',
'export_field8' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field13',
'export_field14',
'export_field15',
'export_field',
'export_field8' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array(  ),
'calcTotalsFor' => 1 ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'export' => array( 'format' => 2,
'selectFields' => false,
'delimiter' => ',',
'selectDelimiter' => false,
'exportFileTypes' => array( 'excel' => true,
'word' => true,
'csv' => true,
'xml' => false ) ) );
			$pageArray = array( 'id' => 'export',
'type' => 'export',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field13',
'export_field14',
'export_field15',
'export_field',
'export_field8' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field1' => array( 'field' => 'VIGENCIA',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'UEJ',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'DESCRIPCION',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'PRESUPUESTO_000',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'RUBRO_001',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'RUBRO',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'DESCRIPCION_001',
'type' => 'export_field' ),
'export_field13' => array( 'field' => 'PRODUCTO',
'type' => 'export_field' ),
'export_field14' => array( 'field' => 'DESCRIPCION_002',
'type' => 'export_field' ),
'export_field15' => array( 'field' => 'PRESUPUESTO_002',
'type' => 'export_field' ),
'export_field' => array( 'field' => 'PROGRAMADO',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'SALDO_PROG',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1,
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>