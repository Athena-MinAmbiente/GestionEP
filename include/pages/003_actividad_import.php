<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'PROD_ID_FK',
'RUBRO_ID_FK',
'VIGENCIA',
'TIPO',
'UEJ',
'RUBRO',
'PRODUCTO',
'ACTIVIDAD',
'RECURSOS_ASIGNADOS',
'SALDO',
'DEPENDENCIA',
'RESPONSABLE',
'PROGRAMADO',
'SALDO_PROG' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'PROD_ID_FK' => array( 'import_field1' ),
'RUBRO_ID_FK' => array( 'import_field2' ),
'VIGENCIA' => array( 'import_field3' ),
'TIPO' => array( 'import_field4' ),
'UEJ' => array( 'import_field5' ),
'RUBRO' => array( 'import_field6' ),
'PRODUCTO' => array( 'import_field7' ),
'ACTIVIDAD' => array( 'import_field8' ),
'RECURSOS_ASIGNADOS' => array( 'import_field10' ),
'SALDO' => array( 'import_field' ),
'DEPENDENCIA' => array( 'import_field9' ),
'RESPONSABLE' => array( 'import_field11' ),
'PROGRAMADO' => array( 'import_field12' ),
'SALDO_PROG' => array( 'import_field13' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field10',
'import_field',
'import_field9',
'import_field11',
'import_field12',
'import_field13' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field1' => 'grid',
'import_field2' => 'grid',
'import_field3' => 'grid',
'import_field4' => 'grid',
'import_field5' => 'grid',
'import_field6' => 'grid',
'import_field7' => 'grid',
'import_field8' => 'grid',
'import_field10' => 'grid',
'import_field' => 'grid',
'import_field9' => 'grid',
'import_field11' => 'grid',
'import_field12' => 'grid',
'import_field13' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field10',
'import_field',
'import_field9',
'import_field11',
'import_field12',
'import_field13' ) ),
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
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'import',
'type' => 'import',
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
'top' => array( 'modelId' => 'import-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'import-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field10',
'import_field',
'import_field9',
'import_field11',
'import_field12',
'import_field13' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field1' => array( 'field' => 'PROD_ID_FK',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'RUBRO_ID_FK',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'VIGENCIA',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'TIPO',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'UEJ',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'RUBRO',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 'PRODUCTO',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'ACTIVIDAD',
'type' => 'import_field' ),
'import_field10' => array( 'field' => 'RECURSOS_ASIGNADOS',
'type' => 'import_field' ),
'import_field' => array( 'field' => 'SALDO',
'type' => 'import_field' ),
'import_field9' => array( 'field' => 'DEPENDENCIA',
'type' => 'import_field' ),
'import_field11' => array( 'field' => 'RESPONSABLE',
'type' => 'import_field' ),
'import_field12' => array( 'field' => 'PROGRAMADO',
'type' => 'import_field' ),
'import_field13' => array( 'field' => 'SALDO_PROG',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>