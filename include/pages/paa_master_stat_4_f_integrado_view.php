<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'details' => array( 'paa_master_pscdp_f' => array( 'displayPreview' => 2,
'previewPageId' => '' ) ),
'fields' => array( 'gridFields' => array( 'ACT_ID',
'COD_UNSPSC',
'DESCRIPCION',
'registrado_por',
'MES_PRESENTA',
'DURACION_CONTRATO',
'DURACION_ESTIMADA_DMA',
'MODALIDAD',
'FUENTE_RECURSOS',
'VALOR',
'VALOR_VIGENCIA',
'VALOR_VIGENCIA_FUTURA',
'VF',
'ESTADO_VF',
'UNIDAD_CONTRATACION',
'COD_UBICACION',
'RESPONSABLE_NOMBRE',
'RESPONSABLE_TELEFONO',
'transferir_a',
'vigencia',
'sys_user',
'sys_date',
'sys_status',
'TIPOSOL',
'MES_INICIO',
'responsable',
'REQ_MAILNOT',
'TIPO',
'PROD_ID',
'PAAID_INTEGRADO' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'ACT_ID' => array( 'integrated_edit_field' ),
'COD_UNSPSC' => array( 'integrated_edit_field1' ),
'DESCRIPCION' => array( 'integrated_edit_field2' ),
'registrado_por' => array( 'integrated_edit_field3' ),
'MES_PRESENTA' => array( 'integrated_edit_field5' ),
'DURACION_CONTRATO' => array( 'integrated_edit_field6' ),
'DURACION_ESTIMADA_DMA' => array( 'integrated_edit_field7' ),
'MODALIDAD' => array( 'integrated_edit_field8' ),
'FUENTE_RECURSOS' => array( 'integrated_edit_field9' ),
'VALOR' => array( 'integrated_edit_field10' ),
'VALOR_VIGENCIA' => array( 'integrated_edit_field11' ),
'VALOR_VIGENCIA_FUTURA' => array( 'integrated_edit_field12' ),
'VF' => array( 'integrated_edit_field13' ),
'ESTADO_VF' => array( 'integrated_edit_field14' ),
'UNIDAD_CONTRATACION' => array( 'integrated_edit_field15' ),
'COD_UBICACION' => array( 'integrated_edit_field16' ),
'RESPONSABLE_NOMBRE' => array( 'integrated_edit_field17' ),
'RESPONSABLE_TELEFONO' => array( 'integrated_edit_field18' ),
'transferir_a' => array( 'integrated_edit_field19' ),
'vigencia' => array( 'integrated_edit_field21' ),
'sys_user' => array( 'integrated_edit_field22' ),
'sys_date' => array( 'integrated_edit_field23' ),
'sys_status' => array( 'integrated_edit_field24' ),
'TIPOSOL' => array( 'integrated_edit_field25' ),
'MES_INICIO' => array( 'integrated_edit_field4' ),
'responsable' => array( 'integrated_edit_field20' ),
'REQ_MAILNOT' => array( 'integrated_edit_field27' ),
'TIPO' => array( 'integrated_edit_field26' ),
'PROD_ID' => array( 'integrated_edit_field28' ),
'PAAID_INTEGRADO' => array( 'integrated_edit_field29' ) ) ),
'pageLinks' => array( 'edit' => true,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'view_header' ),
'above-grid' => array(  ),
'below-grid' => array( 'view_back_list',
'view_close',
'hamburger' ),
'grid' => array( 'tabs',
'integrated_edit_field29' ),
'section' => array( 'integrated_edit_field2',
'integrated_edit_field21',
'integrated_edit_field1',
'integrated_edit_field6',
'integrated_edit_field7',
'integrated_edit_field4',
'integrated_edit_field5',
'integrated_edit_field24',
'integrated_edit_field19' ),
'section1' => array( 'integrated_edit_field10',
'integrated_edit_field11',
'integrated_edit_field15',
'integrated_edit_field16',
'integrated_edit_field8',
'integrated_edit_field9' ),
'section3' => array( 'integrated_edit_field13',
'integrated_edit_field14',
'integrated_edit_field12',
'integrated_edit_field3',
'integrated_edit_field25' ),
'section4' => array(  ),
'section2' => array( 'integrated_edit_field17',
'integrated_edit_field18',
'integrated_edit_field20',
'integrated_edit_field22',
'integrated_edit_field23',
'integrated_edit_field27',
'integrated_edit_field26',
'integrated_edit_field28',
'integrated_edit_field' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'view_header' => 'top',
'view_back_list' => 'below-grid',
'view_close' => 'below-grid',
'hamburger' => 'below-grid',
'tabs' => 'grid',
'integrated_edit_field29' => 'grid',
'integrated_edit_field2' => 'section',
'integrated_edit_field21' => 'section',
'integrated_edit_field1' => 'section',
'integrated_edit_field6' => 'section',
'integrated_edit_field7' => 'section',
'integrated_edit_field4' => 'section',
'integrated_edit_field5' => 'section',
'integrated_edit_field24' => 'section',
'integrated_edit_field19' => 'section',
'integrated_edit_field10' => 'section1',
'integrated_edit_field11' => 'section1',
'integrated_edit_field15' => 'section1',
'integrated_edit_field16' => 'section1',
'integrated_edit_field8' => 'section1',
'integrated_edit_field9' => 'section1',
'integrated_edit_field13' => 'section3',
'integrated_edit_field14' => 'section3',
'integrated_edit_field12' => 'section3',
'integrated_edit_field3' => 'section3',
'integrated_edit_field25' => 'section3',
'integrated_edit_field17' => 'section2',
'integrated_edit_field18' => 'section2',
'integrated_edit_field20' => 'section2',
'integrated_edit_field22' => 'section2',
'integrated_edit_field23' => 'section2',
'integrated_edit_field27' => 'section2',
'integrated_edit_field26' => 'section2',
'integrated_edit_field28' => 'section2',
'integrated_edit_field' => 'section2' ),
'itemLocations' => array( 'tabs' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field29' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field2' => array( 'location' => 'section',
'cellId' => 'c1' ),
'integrated_edit_field21' => array( 'location' => 'section',
'cellId' => 'c2' ),
'integrated_edit_field1' => array( 'location' => 'section',
'cellId' => 'c4' ),
'integrated_edit_field6' => array( 'location' => 'section',
'cellId' => 'c6' ),
'integrated_edit_field7' => array( 'location' => 'section',
'cellId' => 'c7' ),
'integrated_edit_field4' => array( 'location' => 'section',
'cellId' => 'c8' ),
'integrated_edit_field5' => array( 'location' => 'section',
'cellId' => 'c9' ),
'integrated_edit_field24' => array( 'location' => 'section',
'cellId' => 'c11' ),
'integrated_edit_field19' => array( 'location' => 'section',
'cellId' => 'c12' ),
'integrated_edit_field10' => array( 'location' => 'section1',
'cellId' => 'c1' ),
'integrated_edit_field11' => array( 'location' => 'section1',
'cellId' => 'c' ),
'integrated_edit_field15' => array( 'location' => 'section1',
'cellId' => 'c4' ),
'integrated_edit_field16' => array( 'location' => 'section1',
'cellId' => 'c5' ),
'integrated_edit_field8' => array( 'location' => 'section1',
'cellId' => 'c6' ),
'integrated_edit_field9' => array( 'location' => 'section1',
'cellId' => 'c7' ),
'integrated_edit_field13' => array( 'location' => 'section3',
'cellId' => 'c1' ),
'integrated_edit_field14' => array( 'location' => 'section3',
'cellId' => 'c' ),
'integrated_edit_field12' => array( 'location' => 'section3',
'cellId' => 'c2' ),
'integrated_edit_field3' => array( 'location' => 'section3',
'cellId' => 'c4' ),
'integrated_edit_field25' => array( 'location' => 'section3',
'cellId' => 'c5' ),
'integrated_edit_field17' => array( 'location' => 'section2',
'cellId' => 'c1' ),
'integrated_edit_field18' => array( 'location' => 'section2',
'cellId' => 'c' ),
'integrated_edit_field20' => array( 'location' => 'section2',
'cellId' => 'c2' ),
'integrated_edit_field22' => array( 'location' => 'section2',
'cellId' => 'c3' ),
'integrated_edit_field23' => array( 'location' => 'section2',
'cellId' => 'c4' ),
'integrated_edit_field27' => array( 'location' => 'section2',
'cellId' => 'c5' ),
'integrated_edit_field26' => array( 'location' => 'section2',
'cellId' => 'c6' ),
'integrated_edit_field28' => array( 'location' => 'section2',
'cellId' => 'c7' ),
'integrated_edit_field' => array( 'location' => 'section2',
'cellId' => 'c8' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'view_header' => array( 'view_header' ),
'view_back_list' => array( 'view_back_list' ),
'view_close' => array( 'view_close' ),
'hamburger' => array( 'hamburger' ),
'view_edit' => array( 'view_edit' ),
'integrated_edit_field' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field5',
'integrated_edit_field6',
'integrated_edit_field7',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field10',
'integrated_edit_field11',
'integrated_edit_field12',
'integrated_edit_field13',
'integrated_edit_field14',
'integrated_edit_field15',
'integrated_edit_field16',
'integrated_edit_field17',
'integrated_edit_field18',
'integrated_edit_field19',
'integrated_edit_field21',
'integrated_edit_field22',
'integrated_edit_field23',
'integrated_edit_field24',
'integrated_edit_field25',
'integrated_edit_field4',
'integrated_edit_field20',
'integrated_edit_field27',
'integrated_edit_field26',
'integrated_edit_field28',
'integrated_edit_field29' ),
'tabs' => array( 'tabs' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'tabs',
'integrated_edit_field29' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ),
'section' => array( 'cells' => array( 'c2' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field21' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c1' => array( 'cols' => array( 0,
1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c8' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field4' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c9' => array( 'cols' => array( 1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field5' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c6' => array( 'cols' => array( 0 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field6' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c7' => array( 'cols' => array( 1 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field7' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c11' => array( 'cols' => array( 0 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field24' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c12' => array( 'cols' => array( 1 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field19' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 6 ),
'section1' => array( 'cells' => array( 'c6' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field8' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c7' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field9' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c1' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field10' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field11' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field15' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field16' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 3 ),
'section3' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field13' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field14' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c2' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field12' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field3' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field25' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 3 ),
'section4' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ),
'section2' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field17' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c2' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field20' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field18' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c6' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field26' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c7' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field28' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c8' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field22' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field23' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 2 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field27' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 3,
'height' => 3 ) ) ),
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
'misc' => array( 'type' => 'view',
'breadcrumb' => false,
'nextPrev' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'view',
'type' => 'view',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'view-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'view-above-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'view-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_back_list',
'view_close' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'hamburger' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'tabs',
'integrated_edit_field29' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c2' ),
array( 'cell' => 'c3' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c4' ),
array( 'cell' => 'c5' ) ) ),
array( 'cells' => array( array( 'cell' => 'c1',
'colspan' => 2 ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c8' ),
array( 'cell' => 'c9' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c6' ),
array( 'cell' => 'c7' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c11' ),
array( 'cell' => 'c12' ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field2' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0,
'useFullWidth' => true ),
'c2' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field21' ) ),
'c3' => array( 'model' => 'c1',
'items' => array(  ) ),
'c4' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field1' ) ),
'c5' => array( 'model' => 'c1',
'items' => array(  ) ),
'c6' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field6' ) ),
'c7' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field7' ) ),
'c8' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field4' ) ),
'c9' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field5' ) ),
'c11' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field24' ) ),
'c12' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field19' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section1' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c6' ),
array( 'cell' => 'c7' ) ) ),
array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c4' ),
array( 'cell' => 'c5' ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field10' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field11' ) ),
'c4' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field15' ) ),
'c5' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field16' ) ),
'c6' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field8' ) ),
'c7' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field9' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section3' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c2' ),
array( 'cell' => 'c3' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c4' ),
array( 'cell' => 'c5' ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field13' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field14' ) ),
'c2' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field12' ) ),
'c3' => array( 'model' => 'c1',
'items' => array(  ) ),
'c4' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field3' ) ),
'c5' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field25' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section4' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0,
'useFullWidth' => true ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section2' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ),
array( 'cell' => 'c' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c6' ),
array( 'cell' => 'c7' ),
array( 'cell' => 'c8' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c3' ),
array( 'cell' => 'c4' ),
array( 'cell' => 'c5' ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field17' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field18' ) ),
'c2' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field20' ) ),
'c3' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field22' ) ),
'c4' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field23' ) ),
'c5' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field27' ) ),
'c6' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field26' ) ),
'c7' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field28' ) ),
'c8' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'view_header' => array( 'type' => 'view_header',
'title' => array( 'page' => 'view',
'table' => 'paa_master',
'type' => 7 ) ),
'view_back_list' => array( 'type' => 'view_back_list' ),
'view_close' => array( 'type' => 'view_close' ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array( 'view_edit' ) ),
'view_edit' => array( 'type' => 'view_edit' ),
'integrated_edit_field' => array( 'field' => 'ACT_ID',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field1' => array( 'field' => 'COD_UNSPSC',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field2' => array( 'field' => 'DESCRIPCION',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field3' => array( 'field' => 'registrado_por',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field5' => array( 'field' => 'MES_PRESENTA',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field6' => array( 'field' => 'DURACION_CONTRATO',
'type' => 'integrated_edit_field',
'orientation' => 0,
'tooltip' => array( 'field' => 'DURACION_CONTRATO',
'table' => 'paa_master',
'type' => 4 ),
'updateOnEdit' => false ),
'integrated_edit_field7' => array( 'field' => 'DURACION_ESTIMADA_DMA',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field8' => array( 'field' => 'MODALIDAD',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field9' => array( 'field' => 'FUENTE_RECURSOS',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field10' => array( 'field' => 'VALOR',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field11' => array( 'field' => 'VALOR_VIGENCIA',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field12' => array( 'field' => 'VALOR_VIGENCIA_FUTURA',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field13' => array( 'field' => 'VF',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field14' => array( 'field' => 'ESTADO_VF',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field15' => array( 'field' => 'UNIDAD_CONTRATACION',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field16' => array( 'field' => 'COD_UBICACION',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field17' => array( 'field' => 'RESPONSABLE_NOMBRE',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field18' => array( 'field' => 'RESPONSABLE_TELEFONO',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field19' => array( 'field' => 'transferir_a',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field21' => array( 'field' => 'vigencia',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field22' => array( 'field' => 'sys_user',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field23' => array( 'field' => 'sys_date',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field24' => array( 'field' => 'sys_status',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => true ),
'integrated_edit_field25' => array( 'field' => 'TIPOSOL',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false,
'label' => array( 'field' => 'TIPOSOL',
'table' => 'paa_master_stat_0',
'type' => 3 ) ),
'integrated_edit_field4' => array( 'field' => 'MES_INICIO',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field20' => array( 'field' => 'responsable',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'tabs' => array( 'type' => 'tabs',
'titles' => array( array( 'text' => 'Ficha técnica',
'type' => 0 ),
array( 'text' => 'Objeto y duración',
'type' => 0 ),
array( 'text' => 'Valor y Modalidad',
'type' => 0 ),
array( 'text' => 'Vigencias futuras',
'type' => 0 ),
array( 'text' => '',
'type' => 0 ) ),
'locations' => array( 'section4',
'section',
'section1',
'section3',
'section2' ),
'bsStyle' => 'default',
'panelType' => 2 ),
'integrated_edit_field27' => array( 'field' => 'REQ_MAILNOT',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field26' => array( 'field' => 'TIPO',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field28' => array( 'field' => 'PROD_ID',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field29' => array( 'field' => 'PAAID_INTEGRADO',
'type' => 'integrated_edit_field',
'orientation' => 0 ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>