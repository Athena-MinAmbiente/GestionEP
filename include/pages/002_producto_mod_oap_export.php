<?php
			$optionsArray = array( 'totals' => array( 'mod_id' => array( 'totalsType' => '' ),
'prod_id_fk' => array( 'totalsType' => '' ),
'tipo_mod' => array( 'totalsType' => '' ),
'email_not' => array( 'totalsType' => '' ),
'email_user' => array( 'totalsType' => '' ),
'valor_actual' => array( 'totalsType' => '' ),
'valor_nuevo' => array( 'totalsType' => '' ),
'mod_justificacion' => array( 'totalsType' => '' ),
'mod_estado' => array( 'totalsType' => '' ),
'mod_file' => array( 'totalsType' => '' ),
'sys_user' => array( 'totalsType' => '' ),
'sys_date' => array( 'totalsType' => '' ),
'sys_last_act' => array( 'totalsType' => '' ),
'resp_user' => array( 'totalsType' => '' ),
'resp_date' => array( 'totalsType' => '' ),
'resp_msj' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'tipo_mod',
'email_user',
'valor_actual',
'valor_nuevo',
'mod_justificacion',
'mod_estado',
'mod_file',
'sys_user',
'sys_date',
'resp_user',
'resp_date',
'resp_msj' ),
'exportFields' => array( 'tipo_mod',
'email_user',
'valor_actual',
'valor_nuevo',
'mod_justificacion',
'mod_estado',
'mod_file',
'sys_user',
'sys_date',
'resp_user',
'resp_date',
'resp_msj' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'tipo_mod' => array( 'export_field2' ),
'email_user' => array( 'export_field4' ),
'valor_actual' => array( 'export_field5' ),
'valor_nuevo' => array( 'export_field6' ),
'mod_justificacion' => array( 'export_field7' ),
'mod_estado' => array( 'export_field8' ),
'mod_file' => array( 'export_field9' ),
'sys_user' => array( 'export_field10' ),
'sys_date' => array( 'export_field11' ),
'resp_user' => array( 'export_field1' ),
'resp_date' => array( 'export_field12' ),
'resp_msj' => array( 'export_field13' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field2',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field1',
'export_field12',
'export_field13' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field2' => 'grid',
'export_field4' => 'grid',
'export_field5' => 'grid',
'export_field6' => 'grid',
'export_field7' => 'grid',
'export_field8' => 'grid',
'export_field9' => 'grid',
'export_field10' => 'grid',
'export_field11' => 'grid',
'export_field1' => 'grid',
'export_field12' => 'grid',
'export_field13' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field2',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field1',
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
'items' => array( 'export_field2',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field1',
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
'export_field2' => array( 'field' => 'tipo_mod',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'email_user',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'valor_actual',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'valor_nuevo',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'mod_justificacion',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'mod_estado',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'mod_file',
'type' => 'export_field' ),
'export_field10' => array( 'field' => 'sys_user',
'type' => 'export_field' ),
'export_field11' => array( 'field' => 'sys_date',
'type' => 'export_field' ),
'export_field1' => array( 'field' => 'resp_user',
'type' => 'export_field' ),
'export_field12' => array( 'field' => 'resp_date',
'type' => 'export_field' ),
'export_field13' => array( 'field' => 'resp_msj',
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