<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'PAA_ID',
'COD_UNSPSC',
'DESCRIPCION',
'MES_INICIO',
'MES_PRESENTA',
'DURACION_CONTRATO',
'DURACION_ESTIMADA_DMA',
'MODALIDAD',
'FUENTE_RECURSOS',
'VALOR_VIGENCIA_FUTURA',
'VF',
'ESTADO_VF',
'UNIDAD_CONTRATACION',
'COD_UBICACION',
'RESPONSABLE_NOMBRE',
'RESPONSABLE_TELEFONO',
'responsable',
'vigencia',
'sys_user',
'sys_date',
'sys_status',
'REQ_MAILNOT',
'TIPOSOL',
'registrado_por',
'ct_integrado',
'QTYPAAINTEGRADOS',
'TOTALPAAINTEGRADO' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'PAA_ID' => array( 'import_field' ),
'COD_UNSPSC' => array( 'import_field2' ),
'DESCRIPCION' => array( 'import_field3' ),
'MES_INICIO' => array( 'import_field5' ),
'MES_PRESENTA' => array( 'import_field6' ),
'DURACION_CONTRATO' => array( 'import_field7' ),
'DURACION_ESTIMADA_DMA' => array( 'import_field8' ),
'MODALIDAD' => array( 'import_field9' ),
'FUENTE_RECURSOS' => array( 'import_field10' ),
'VALOR_VIGENCIA_FUTURA' => array( 'import_field13' ),
'VF' => array( 'import_field14' ),
'ESTADO_VF' => array( 'import_field15' ),
'UNIDAD_CONTRATACION' => array( 'import_field16' ),
'COD_UBICACION' => array( 'import_field17' ),
'RESPONSABLE_NOMBRE' => array( 'import_field18' ),
'RESPONSABLE_TELEFONO' => array( 'import_field19' ),
'responsable' => array( 'import_field21' ),
'vigencia' => array( 'import_field22' ),
'sys_user' => array( 'import_field23' ),
'sys_date' => array( 'import_field24' ),
'sys_status' => array( 'import_field25' ),
'REQ_MAILNOT' => array( 'import_field28' ),
'TIPOSOL' => array( 'import_field4' ),
'registrado_por' => array( 'import_field20' ),
'ct_integrado' => array( 'import_field12' ),
'QTYPAAINTEGRADOS' => array( 'import_field1' ),
'TOTALPAAINTEGRADO' => array( 'import_field26' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field',
'import_field2',
'import_field3',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field13',
'import_field14',
'import_field15',
'import_field16',
'import_field17',
'import_field18',
'import_field19',
'import_field21',
'import_field22',
'import_field23',
'import_field24',
'import_field25',
'import_field28',
'import_field4',
'import_field20',
'import_field12',
'import_field1',
'import_field26' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field' => 'grid',
'import_field2' => 'grid',
'import_field3' => 'grid',
'import_field5' => 'grid',
'import_field6' => 'grid',
'import_field7' => 'grid',
'import_field8' => 'grid',
'import_field9' => 'grid',
'import_field10' => 'grid',
'import_field13' => 'grid',
'import_field14' => 'grid',
'import_field15' => 'grid',
'import_field16' => 'grid',
'import_field17' => 'grid',
'import_field18' => 'grid',
'import_field19' => 'grid',
'import_field21' => 'grid',
'import_field22' => 'grid',
'import_field23' => 'grid',
'import_field24' => 'grid',
'import_field25' => 'grid',
'import_field28' => 'grid',
'import_field4' => 'grid',
'import_field20' => 'grid',
'import_field12' => 'grid',
'import_field1' => 'grid',
'import_field26' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field',
'import_field2',
'import_field3',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field13',
'import_field14',
'import_field15',
'import_field16',
'import_field17',
'import_field18',
'import_field19',
'import_field21',
'import_field22',
'import_field23',
'import_field24',
'import_field25',
'import_field28',
'import_field4',
'import_field20',
'import_field12',
'import_field1',
'import_field26' ) ),
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
'items' => array( 'import_field',
'import_field2',
'import_field3',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field13',
'import_field14',
'import_field15',
'import_field16',
'import_field17',
'import_field18',
'import_field19',
'import_field21',
'import_field22',
'import_field23',
'import_field24',
'import_field25',
'import_field28',
'import_field4',
'import_field20',
'import_field12',
'import_field1',
'import_field26' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field' => array( 'field' => 'PAA_ID',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'COD_UNSPSC',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'DESCRIPCION',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'MES_INICIO',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'MES_PRESENTA',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 'DURACION_CONTRATO',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'DURACION_ESTIMADA_DMA',
'type' => 'import_field' ),
'import_field9' => array( 'field' => 'MODALIDAD',
'type' => 'import_field' ),
'import_field10' => array( 'field' => 'FUENTE_RECURSOS',
'type' => 'import_field' ),
'import_field13' => array( 'field' => 'VALOR_VIGENCIA_FUTURA',
'type' => 'import_field' ),
'import_field14' => array( 'field' => 'VF',
'type' => 'import_field' ),
'import_field15' => array( 'field' => 'ESTADO_VF',
'type' => 'import_field' ),
'import_field16' => array( 'field' => 'UNIDAD_CONTRATACION',
'type' => 'import_field' ),
'import_field17' => array( 'field' => 'COD_UBICACION',
'type' => 'import_field' ),
'import_field18' => array( 'field' => 'RESPONSABLE_NOMBRE',
'type' => 'import_field' ),
'import_field19' => array( 'field' => 'RESPONSABLE_TELEFONO',
'type' => 'import_field' ),
'import_field21' => array( 'field' => 'responsable',
'type' => 'import_field' ),
'import_field22' => array( 'field' => 'vigencia',
'type' => 'import_field' ),
'import_field23' => array( 'field' => 'sys_user',
'type' => 'import_field' ),
'import_field24' => array( 'field' => 'sys_date',
'type' => 'import_field' ),
'import_field25' => array( 'field' => 'sys_status',
'type' => 'import_field' ),
'import_field28' => array( 'field' => 'REQ_MAILNOT',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'TIPOSOL',
'type' => 'import_field' ),
'import_field20' => array( 'field' => 'registrado_por',
'type' => 'import_field' ),
'import_field12' => array( 'field' => 'ct_integrado',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 'QTYPAAINTEGRADOS',
'type' => 'import_field' ),
'import_field26' => array( 'field' => 'TOTALPAAINTEGRADO',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>