<?php
			$optionsArray = array( 'totals' => array( 'ACT_ID' => array( 'totalsType' => '' ),
'VIGENCIA' => array( 'totalsType' => '' ),
'UEJ' => array( 'totalsType' => '' ),
'RUBRO' => array( 'totalsType' => '' ),
'PRODUCTO' => array( 'totalsType' => '' ),
'ACTIVIDAD' => array( 'totalsType' => '' ),
'RECURSOS_ASIGNADOS' => array( 'totalsType' => '' ),
'DEPENDENCIA' => array( 'totalsType' => '' ),
'RESPONSABLE' => array( 'totalsType' => '' ),
'QTY_ACT' => array( 'totalsType' => '' ),
'SUM_ACT' => array( 'totalsType' => '' ),
'PENDIENTE_PROG' => array( 'totalsType' => '' ),
'RUBRO_ID_FK' => array( 'totalsType' => '' ),
'REC' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'ACT_ID',
'VIGENCIA',
'UEJ',
'RUBRO',
'PRODUCTO',
'ACTIVIDAD',
'RECURSOS_ASIGNADOS',
'DEPENDENCIA',
'RESPONSABLE',
'QTY_ACT',
'SUM_ACT',
'PENDIENTE_PROG',
'RUBRO_ID_FK',
'REC' ),
'exportFields' => array( 'ACT_ID',
'VIGENCIA',
'UEJ',
'RUBRO',
'PRODUCTO',
'ACTIVIDAD',
'RECURSOS_ASIGNADOS',
'DEPENDENCIA',
'RESPONSABLE',
'QTY_ACT',
'SUM_ACT',
'PENDIENTE_PROG',
'RUBRO_ID_FK',
'REC' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'ACT_ID' => array( 'export_field' ),
'VIGENCIA' => array( 'export_field1' ),
'UEJ' => array( 'export_field2' ),
'RUBRO' => array( 'export_field3' ),
'PRODUCTO' => array( 'export_field4' ),
'ACTIVIDAD' => array( 'export_field5' ),
'RECURSOS_ASIGNADOS' => array( 'export_field6' ),
'DEPENDENCIA' => array( 'export_field7' ),
'RESPONSABLE' => array( 'export_field8' ),
'QTY_ACT' => array( 'export_field9' ),
'SUM_ACT' => array( 'export_field10' ),
'PENDIENTE_PROG' => array( 'export_field11' ),
'RUBRO_ID_FK' => array( 'export_field12' ),
'REC' => array( 'export_field13' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field13' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field' => 'grid',
'export_field1' => 'grid',
'export_field2' => 'grid',
'export_field3' => 'grid',
'export_field4' => 'grid',
'export_field5' => 'grid',
'export_field6' => 'grid',
'export_field7' => 'grid',
'export_field8' => 'grid',
'export_field9' => 'grid',
'export_field10' => 'grid',
'export_field11' => 'grid',
'export_field12' => 'grid',
'export_field13' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field13' ) ),
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
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field13' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field' => array( 'field' => 'ACT_ID',
'type' => 'export_field' ),
'export_field1' => array( 'field' => 'VIGENCIA',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'UEJ',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'RUBRO',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'PRODUCTO',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'ACTIVIDAD',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'RECURSOS_ASIGNADOS',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'DEPENDENCIA',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'RESPONSABLE',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'QTY_ACT',
'type' => 'export_field' ),
'export_field10' => array( 'field' => 'SUM_ACT',
'type' => 'export_field' ),
'export_field11' => array( 'field' => 'PENDIENTE_PROG',
'type' => 'export_field' ),
'export_field12' => array( 'field' => 'RUBRO_ID_FK',
'type' => 'export_field' ),
'export_field13' => array( 'field' => 'REC',
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