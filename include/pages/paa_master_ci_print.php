<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'master' => array( 'q_recursos_gestor_c1' => array( 'preview' => true ) ),
'totals' => array( 'PAA_ID' => array( 'totalsType' => '' ),
'ACT_ID' => array( 'totalsType' => '' ),
'COD_UNSPSC' => array( 'totalsType' => '' ),
'DESCRIPCION' => array( 'totalsType' => '' ),
'MES_INICIO' => array( 'totalsType' => '' ),
'MES_PRESENTA' => array( 'totalsType' => '' ),
'DURACION_CONTRATO' => array( 'totalsType' => '' ),
'DURACION_ESTIMADA_DMA' => array( 'totalsType' => '' ),
'MODALIDAD' => array( 'totalsType' => '' ),
'FUENTE_RECURSOS' => array( 'totalsType' => '' ),
'VALOR' => array( 'totalsType' => 'TOTAL' ),
'VALOR_VIGENCIA' => array( 'totalsType' => '' ),
'VALOR_VIGENCIA_FUTURA' => array( 'totalsType' => '' ),
'VF' => array( 'totalsType' => '' ),
'ESTADO_VF' => array( 'totalsType' => '' ),
'UNIDAD_CONTRATACION' => array( 'totalsType' => '' ),
'COD_UBICACION' => array( 'totalsType' => '' ),
'RESPONSABLE_NOMBRE' => array( 'totalsType' => '' ),
'RESPONSABLE_TELEFONO' => array( 'totalsType' => '' ),
'RESPONSABLE_EMAIL' => array( 'totalsType' => '' ),
'responsable' => array( 'totalsType' => '' ),
'vigencia' => array( 'totalsType' => '' ),
'sys_user' => array( 'totalsType' => '' ),
'sys_date' => array( 'totalsType' => '' ),
'sys_status' => array( 'totalsType' => '' ),
'REQ_MAILNOT' => array( 'totalsType' => '' ),
'TIPOSOL' => array( 'totalsType' => '' ),
'registrado_por' => array( 'totalsType' => '' ),
'FECHA_PRESENTA_PROPUESTAS' => array( 'totalsType' => '' ),
'responsable_depsup' => array( 'totalsType' => '' ),
'responsable_dep' => array( 'totalsType' => '' ),
'PAAID_INTEGRADO' => array( 'totalsType' => '' ),
'TIPO' => array( 'totalsType' => '' ),
'justificacion' => array( 'totalsType' => '' ),
'nbc' => array( 'totalsType' => '' ),
'experiencia' => array( 'totalsType' => '' ),
'idoneidad' => array( 'totalsType' => '' ),
'cont_tipoca' => array( 'totalsType' => '' ),
'cont_tipocb' => array( 'totalsType' => '' ),
'cont_tipocc' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'PAA_ID',
'ACT_ID',
'DESCRIPCION',
'VALOR',
'VALOR_VIGENCIA',
'UNIDAD_CONTRATACION',
'vigencia',
'sys_user',
'sys_date',
'sys_status',
'REQ_MAILNOT',
'TIPOSOL',
'registrado_por',
'PAAID_INTEGRADO',
'TIPO' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'PAA_ID' => array( 'simple_grid_field',
'simple_grid_field2' ),
'ACT_ID' => array( 'simple_grid_field1',
'simple_grid_field5' ),
'DESCRIPCION' => array( 'simple_grid_field3',
'simple_grid_field6' ),
'VALOR' => array( 'simple_grid_field11',
'simple_grid_field13',
'simple_grid_field14' ),
'VALOR_VIGENCIA' => array( 'simple_grid_field12',
'simple_grid_field15' ),
'UNIDAD_CONTRATACION' => array( 'simple_grid_field16',
'simple_grid_field17' ),
'vigencia' => array( 'simple_grid_field22',
'simple_grid_field26' ),
'sys_user' => array( 'simple_grid_field23',
'simple_grid_field27' ),
'sys_date' => array( 'simple_grid_field24',
'simple_grid_field29' ),
'sys_status' => array( 'simple_grid_field25',
'simple_grid_field32' ),
'REQ_MAILNOT' => array( 'simple_grid_field28',
'simple_grid_field33' ),
'TIPOSOL' => array( 'simple_grid_field4',
'simple_grid_field7' ),
'registrado_por' => array( 'simple_grid_field20',
'simple_grid_field21' ),
'PAAID_INTEGRADO' => array( 'simple_grid_field30',
'simple_grid_field34' ),
'TIPO' => array( 'simple_grid_field31',
'simple_grid_field35' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'print_header',
'print_subheader',
'master_info' ),
'above-grid' => array( 'print_pages',
'grid_inline_cancel',
'inline_add' ),
'below-grid' => array(  ),
'grid' => array( 'simple_grid_field2',
'simple_grid_field',
'simple_grid_field5',
'simple_grid_field1',
'simple_grid_field6',
'simple_grid_field3',
'simple_grid_field13',
'simple_grid_field11',
'simple_grid_field14',
'simple_grid_field15',
'simple_grid_field12',
'simple_grid_field17',
'simple_grid_field16',
'simple_grid_field26',
'simple_grid_field22',
'simple_grid_field27',
'simple_grid_field23',
'simple_grid_field29',
'simple_grid_field24',
'simple_grid_field32',
'simple_grid_field25',
'simple_grid_field33',
'simple_grid_field28',
'simple_grid_field7',
'simple_grid_field4',
'simple_grid_field21',
'simple_grid_field20',
'simple_grid_field34',
'simple_grid_field30',
'simple_grid_field35',
'simple_grid_field31' ) ),
'formXtTags' => array( 'above-grid' => array( 'print_pages',
'inline_cancel',
'inlineadd_link' ),
'below-grid' => array(  ) ),
'itemForms' => array( 'print_header' => 'top',
'print_subheader' => 'top',
'master_info' => 'top',
'print_pages' => 'above-grid',
'grid_inline_cancel' => 'above-grid',
'inline_add' => 'above-grid',
'simple_grid_field2' => 'grid',
'simple_grid_field' => 'grid',
'simple_grid_field5' => 'grid',
'simple_grid_field1' => 'grid',
'simple_grid_field6' => 'grid',
'simple_grid_field3' => 'grid',
'simple_grid_field13' => 'grid',
'simple_grid_field11' => 'grid',
'simple_grid_field14' => 'grid',
'simple_grid_field15' => 'grid',
'simple_grid_field12' => 'grid',
'simple_grid_field17' => 'grid',
'simple_grid_field16' => 'grid',
'simple_grid_field26' => 'grid',
'simple_grid_field22' => 'grid',
'simple_grid_field27' => 'grid',
'simple_grid_field23' => 'grid',
'simple_grid_field29' => 'grid',
'simple_grid_field24' => 'grid',
'simple_grid_field32' => 'grid',
'simple_grid_field25' => 'grid',
'simple_grid_field33' => 'grid',
'simple_grid_field28' => 'grid',
'simple_grid_field7' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field21' => 'grid',
'simple_grid_field20' => 'grid',
'simple_grid_field34' => 'grid',
'simple_grid_field30' => 'grid',
'simple_grid_field35' => 'grid',
'simple_grid_field31' => 'grid' ),
'itemLocations' => array( 'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field13' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field11' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'simple_grid_field14' => array( 'location' => 'grid',
'cellId' => 'footcell_field3' ),
'simple_grid_field15' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'simple_grid_field12' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'simple_grid_field17' => array( 'location' => 'grid',
'cellId' => 'headcell_field5' ),
'simple_grid_field16' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'simple_grid_field26' => array( 'location' => 'grid',
'cellId' => 'headcell_field6' ),
'simple_grid_field22' => array( 'location' => 'grid',
'cellId' => 'cell_field6' ),
'simple_grid_field27' => array( 'location' => 'grid',
'cellId' => 'headcell_field7' ),
'simple_grid_field23' => array( 'location' => 'grid',
'cellId' => 'cell_field7' ),
'simple_grid_field29' => array( 'location' => 'grid',
'cellId' => 'headcell_field8' ),
'simple_grid_field24' => array( 'location' => 'grid',
'cellId' => 'cell_field8' ),
'simple_grid_field32' => array( 'location' => 'grid',
'cellId' => 'headcell_field9' ),
'simple_grid_field25' => array( 'location' => 'grid',
'cellId' => 'cell_field9' ),
'simple_grid_field33' => array( 'location' => 'grid',
'cellId' => 'headcell_field10' ),
'simple_grid_field28' => array( 'location' => 'grid',
'cellId' => 'cell_field10' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'headcell_field11' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_field11' ),
'simple_grid_field21' => array( 'location' => 'grid',
'cellId' => 'headcell_field12' ),
'simple_grid_field20' => array( 'location' => 'grid',
'cellId' => 'cell_field12' ),
'simple_grid_field34' => array( 'location' => 'grid',
'cellId' => 'headcell_field13' ),
'simple_grid_field30' => array( 'location' => 'grid',
'cellId' => 'cell_field13' ),
'simple_grid_field35' => array( 'location' => 'grid',
'cellId' => 'headcell_field14' ),
'simple_grid_field31' => array( 'location' => 'grid',
'cellId' => 'cell_field14' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'print_header' => array( 'print_header' ),
'print_subheader' => array( 'print_subheader' ),
'print_pages' => array( 'print_pages' ),
'master_info' => array( 'master_info' ),
'grid_field' => array( 'simple_grid_field',
'simple_grid_field1',
'simple_grid_field3',
'simple_grid_field11',
'simple_grid_field12',
'simple_grid_field16',
'simple_grid_field22',
'simple_grid_field23',
'simple_grid_field24',
'simple_grid_field25',
'simple_grid_field28',
'simple_grid_field4',
'simple_grid_field20',
'simple_grid_field30',
'simple_grid_field31' ),
'grid_field_label' => array( 'simple_grid_field2',
'simple_grid_field5',
'simple_grid_field6',
'simple_grid_field13',
'simple_grid_field15',
'simple_grid_field17',
'simple_grid_field26',
'simple_grid_field27',
'simple_grid_field29',
'simple_grid_field32',
'simple_grid_field33',
'simple_grid_field7',
'simple_grid_field21',
'simple_grid_field34',
'simple_grid_field35' ),
'grid_field_totals' => array( 'simple_grid_field14' ),
'inline_add' => array( 'inline_add' ),
'grid_inline_cancel' => array( 'grid_inline_cancel' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array( 'PAA_ID_fieldheadercolumn' ),
'items' => array( 'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'ACT_ID_fieldheadercolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array( 'DESCRIPCION_fieldheadercolumn' ),
'items' => array( 'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'VALOR_fieldheadercolumn' ),
'items' => array( 'simple_grid_field13' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'VALOR_VIGENCIA_fieldheadercolumn' ),
'items' => array( 'simple_grid_field15' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'UNIDAD_CONTRATACION_fieldheadercolumn' ),
'items' => array( 'simple_grid_field17' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 0 ),
'tags' => array( 'vigencia_fieldheadercolumn' ),
'items' => array( 'simple_grid_field26' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 0 ),
'tags' => array( 'sys_user_fieldheadercolumn' ),
'items' => array( 'simple_grid_field27' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field8' => array( 'cols' => array( 8 ),
'rows' => array( 0 ),
'tags' => array( 'sys_date_fieldheadercolumn' ),
'items' => array( 'simple_grid_field29' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field9' => array( 'cols' => array( 9 ),
'rows' => array( 0 ),
'tags' => array( 'sys_status_fieldheadercolumn' ),
'items' => array( 'simple_grid_field32' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field10' => array( 'cols' => array( 10 ),
'rows' => array( 0 ),
'tags' => array( 'REQ_MAILNOT_fieldheadercolumn' ),
'items' => array( 'simple_grid_field33' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field11' => array( 'cols' => array( 11 ),
'rows' => array( 0 ),
'tags' => array( 'TIPOSOL_fieldheadercolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field12' => array( 'cols' => array( 12 ),
'rows' => array( 0 ),
'tags' => array( 'registrado_por_fieldheadercolumn' ),
'items' => array( 'simple_grid_field21' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field13' => array( 'cols' => array( 13 ),
'rows' => array( 0 ),
'tags' => array( 'PAAID_INTEGRADO_fieldheadercolumn' ),
'items' => array( 'simple_grid_field34' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field14' => array( 'cols' => array( 14 ),
'rows' => array( 0 ),
'tags' => array( 'TIPO_fieldheadercolumn' ),
'items' => array( 'simple_grid_field35' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'PAA_ID_fieldcolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'ACT_ID_fieldcolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array( 'DESCRIPCION_fieldcolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'VALOR_fieldcolumn' ),
'items' => array( 'simple_grid_field11' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'VALOR_VIGENCIA_fieldcolumn' ),
'items' => array( 'simple_grid_field12' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'UNIDAD_CONTRATACION_fieldcolumn' ),
'items' => array( 'simple_grid_field16' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 1 ),
'tags' => array( 'vigencia_fieldcolumn' ),
'items' => array( 'simple_grid_field22' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 1 ),
'tags' => array( 'sys_user_fieldcolumn' ),
'items' => array( 'simple_grid_field23' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field8' => array( 'cols' => array( 8 ),
'rows' => array( 1 ),
'tags' => array( 'sys_date_fieldcolumn' ),
'items' => array( 'simple_grid_field24' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field9' => array( 'cols' => array( 9 ),
'rows' => array( 1 ),
'tags' => array( 'sys_status_fieldcolumn' ),
'items' => array( 'simple_grid_field25' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field10' => array( 'cols' => array( 10 ),
'rows' => array( 1 ),
'tags' => array( 'REQ_MAILNOT_fieldcolumn' ),
'items' => array( 'simple_grid_field28' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field11' => array( 'cols' => array( 11 ),
'rows' => array( 1 ),
'tags' => array( 'TIPOSOL_fieldcolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field12' => array( 'cols' => array( 12 ),
'rows' => array( 1 ),
'tags' => array( 'registrado_por_fieldcolumn' ),
'items' => array( 'simple_grid_field20' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field13' => array( 'cols' => array( 13 ),
'rows' => array( 1 ),
'tags' => array( 'PAAID_INTEGRADO_fieldcolumn' ),
'items' => array( 'simple_grid_field30' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field14' => array( 'cols' => array( 14 ),
'rows' => array( 1 ),
'tags' => array( 'TIPO_fieldcolumn' ),
'items' => array( 'simple_grid_field31' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 2 ),
'tags' => array( 'VALOR_fieldfootercolumn' ),
'items' => array( 'simple_grid_field14' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field8' => array( 'cols' => array( 8 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field9' => array( 'cols' => array( 9 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field10' => array( 'cols' => array( 10 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field11' => array( 'cols' => array( 11 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field12' => array( 'cols' => array( 12 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field13' => array( 'cols' => array( 13 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field14' => array( 'cols' => array( 14 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 15,
'height' => 3 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array( 'print_pages' => array( 'tag' => 'PRINT_PAGES',
'type' => 2 ) ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'gridType' => 0,
'recsPerRow' => 1,
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array(  ),
'calcTotalsFor' => 1 ),
'misc' => array( 'type' => 'print',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'print',
'type' => 'print',
'layoutId' => 'basic',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'print-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c4' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'print_header',
'print_subheader' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c4' => array( 'model' => 'c4',
'items' => array( 'master_info' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'print-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'print_pages',
'grid_inline_cancel',
'inline_add' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'print-below-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_field' ),
array( 'cell' => 'headcell_field1' ),
array( 'cell' => 'headcell_field2' ),
array( 'cell' => 'headcell_field3' ),
array( 'cell' => 'headcell_field4' ),
array( 'cell' => 'headcell_field5' ),
array( 'cell' => 'headcell_field6' ),
array( 'cell' => 'headcell_field7' ),
array( 'cell' => 'headcell_field8' ),
array( 'cell' => 'headcell_field9' ),
array( 'cell' => 'headcell_field10' ),
array( 'cell' => 'headcell_field11' ),
array( 'cell' => 'headcell_field12' ),
array( 'cell' => 'headcell_field13' ),
array( 'cell' => 'headcell_field14' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_field1' ),
array( 'cell' => 'cell_field2' ),
array( 'cell' => 'cell_field3' ),
array( 'cell' => 'cell_field4' ),
array( 'cell' => 'cell_field5' ),
array( 'cell' => 'cell_field6' ),
array( 'cell' => 'cell_field7' ),
array( 'cell' => 'cell_field8' ),
array( 'cell' => 'cell_field9' ),
array( 'cell' => 'cell_field10' ),
array( 'cell' => 'cell_field11' ),
array( 'cell' => 'cell_field12' ),
array( 'cell' => 'cell_field13' ),
array( 'cell' => 'cell_field14' ) ) ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_field' ),
array( 'cell' => 'footcell_field1' ),
array( 'cell' => 'footcell_field2' ),
array( 'cell' => 'footcell_field3' ),
array( 'cell' => 'footcell_field4' ),
array( 'cell' => 'footcell_field5' ),
array( 'cell' => 'footcell_field6' ),
array( 'cell' => 'footcell_field7' ),
array( 'cell' => 'footcell_field8' ),
array( 'cell' => 'footcell_field9' ),
array( 'cell' => 'footcell_field10' ),
array( 'cell' => 'footcell_field11' ),
array( 'cell' => 'footcell_field12' ),
array( 'cell' => 'footcell_field13' ),
array( 'cell' => 'footcell_field14' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field2' ),
'field' => 'PAA_ID',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'PAA_ID',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'ACT_ID',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field1' ),
'field' => 'ACT_ID',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field6' ),
'field' => 'DESCRIPCION',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'DESCRIPCION',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field13' ),
'field' => 'VALOR',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field11' ),
'field' => 'VALOR',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array( 'simple_grid_field14' ),
'field' => 'VALOR',
'columnName' => 'field' ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field15' ),
'field' => 'VALOR_VIGENCIA',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field12' ),
'field' => 'VALOR_VIGENCIA',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field5' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field17' ),
'field' => 'UNIDAD_CONTRATACION',
'columnName' => 'field' ),
'cell_field5' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field16' ),
'field' => 'UNIDAD_CONTRATACION',
'columnName' => 'field' ),
'footcell_field5' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field6' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field26' ),
'field' => 'vigencia',
'columnName' => 'field' ),
'cell_field6' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field22' ),
'field' => 'vigencia',
'columnName' => 'field' ),
'footcell_field6' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field7' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field27' ),
'field' => 'sys_user',
'columnName' => 'field' ),
'cell_field7' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field23' ),
'field' => 'sys_user',
'columnName' => 'field' ),
'footcell_field7' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field8' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field29' ),
'field' => 'sys_date',
'columnName' => 'field' ),
'cell_field8' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field24' ),
'field' => 'sys_date',
'columnName' => 'field' ),
'footcell_field8' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field9' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field32' ),
'field' => 'sys_status',
'columnName' => 'field' ),
'cell_field9' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field25' ),
'field' => 'sys_status',
'columnName' => 'field' ),
'footcell_field9' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field10' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field33' ),
'field' => 'REQ_MAILNOT',
'columnName' => 'field' ),
'cell_field10' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field28' ),
'field' => 'REQ_MAILNOT',
'columnName' => 'field' ),
'footcell_field10' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field11' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field7' ),
'field' => 'TIPOSOL',
'columnName' => 'field' ),
'cell_field11' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'TIPOSOL',
'columnName' => 'field' ),
'footcell_field11' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field12' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field21' ),
'field' => 'registrado_por',
'columnName' => 'field' ),
'cell_field12' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field20' ),
'field' => 'registrado_por',
'columnName' => 'field' ),
'footcell_field12' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field13' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field34' ),
'field' => 'PAAID_INTEGRADO',
'columnName' => 'field' ),
'cell_field13' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field30' ),
'field' => 'PAAID_INTEGRADO',
'columnName' => 'field' ),
'footcell_field13' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field14' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field35' ),
'field' => 'TIPO',
'columnName' => 'field' ),
'cell_field14' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field31' ),
'field' => 'TIPO',
'columnName' => 'field' ),
'footcell_field14' => array( 'model' => 'footcell_field',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'print_header' => array( 'type' => 'print_header' ),
'print_subheader' => array( 'type' => 'print_subheader' ),
'print_pages' => array( 'type' => 'print_pages' ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'q_recursos_gestor_c1' => 'true' ) ),
'simple_grid_field' => array( 'field' => 'PAA_ID',
'type' => 'grid_field' ),
'simple_grid_field2' => array( 'type' => 'grid_field_label',
'field' => 'PAA_ID' ),
'simple_grid_field1' => array( 'field' => 'ACT_ID',
'type' => 'grid_field' ),
'simple_grid_field5' => array( 'type' => 'grid_field_label',
'field' => 'ACT_ID' ),
'simple_grid_field3' => array( 'field' => 'DESCRIPCION',
'type' => 'grid_field' ),
'simple_grid_field6' => array( 'type' => 'grid_field_label',
'field' => 'DESCRIPCION' ),
'simple_grid_field11' => array( 'field' => 'VALOR',
'type' => 'grid_field' ),
'simple_grid_field13' => array( 'type' => 'grid_field_label',
'field' => 'VALOR' ),
'simple_grid_field14' => array( 'type' => 'grid_field_totals',
'field' => 'VALOR',
'totals' => 'TOTAL' ),
'simple_grid_field12' => array( 'field' => 'VALOR_VIGENCIA',
'type' => 'grid_field' ),
'simple_grid_field15' => array( 'type' => 'grid_field_label',
'field' => 'VALOR_VIGENCIA' ),
'simple_grid_field16' => array( 'field' => 'UNIDAD_CONTRATACION',
'type' => 'grid_field' ),
'simple_grid_field17' => array( 'type' => 'grid_field_label',
'field' => 'UNIDAD_CONTRATACION' ),
'simple_grid_field22' => array( 'field' => 'vigencia',
'type' => 'grid_field' ),
'simple_grid_field26' => array( 'type' => 'grid_field_label',
'field' => 'vigencia' ),
'simple_grid_field23' => array( 'field' => 'sys_user',
'type' => 'grid_field' ),
'simple_grid_field27' => array( 'type' => 'grid_field_label',
'field' => 'sys_user' ),
'simple_grid_field24' => array( 'field' => 'sys_date',
'type' => 'grid_field' ),
'simple_grid_field29' => array( 'type' => 'grid_field_label',
'field' => 'sys_date' ),
'simple_grid_field25' => array( 'field' => 'sys_status',
'type' => 'grid_field' ),
'simple_grid_field32' => array( 'type' => 'grid_field_label',
'field' => 'sys_status' ),
'simple_grid_field28' => array( 'field' => 'REQ_MAILNOT',
'type' => 'grid_field' ),
'simple_grid_field33' => array( 'type' => 'grid_field_label',
'field' => 'REQ_MAILNOT' ),
'simple_grid_field4' => array( 'field' => 'TIPOSOL',
'type' => 'grid_field' ),
'simple_grid_field7' => array( 'type' => 'grid_field_label',
'field' => 'TIPOSOL' ),
'simple_grid_field20' => array( 'field' => 'registrado_por',
'type' => 'grid_field' ),
'simple_grid_field21' => array( 'type' => 'grid_field_label',
'field' => 'registrado_por' ),
'simple_grid_field30' => array( 'field' => 'PAAID_INTEGRADO',
'type' => 'grid_field' ),
'simple_grid_field34' => array( 'type' => 'grid_field_label',
'field' => 'PAAID_INTEGRADO' ),
'simple_grid_field31' => array( 'field' => 'TIPO',
'type' => 'grid_field' ),
'simple_grid_field35' => array( 'type' => 'grid_field_label',
'field' => 'TIPO' ),
'inline_add' => array( 'type' => 'inline_add',
'detailsOnly' => true ),
'grid_inline_cancel' => array( 'type' => 'grid_inline_cancel' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>