<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => true,
'orientation' => 'portrait',
'scale' => 100 ),
'details' => array( 'q_info_nopaa_integrado' => array( 'displayPreview' => 1,
'previewPageId' => 'print' ) ),
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
'VALOR' => array( 'totalsType' => '' ),
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
'ct_integrado' => array( 'totalsType' => '' ),
'QTYPAAINTEGRADOS' => array( 'totalsType' => '' ),
'TOTALPAAINTEGRADO' => array( 'totalsType' => 'TOTAL' ) ),
'fields' => array( 'gridFields' => array( 'PAA_ID',
'DESCRIPCION',
'DURACION_CONTRATO',
'TOTALPAAINTEGRADO',
'QTYPAAINTEGRADOS',
'sys_status' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'PAA_ID' => array( 'simple_grid_field',
'simple_grid_field1' ),
'DESCRIPCION' => array( 'simple_grid_field3',
'simple_grid_field4' ),
'DURACION_CONTRATO' => array( 'simple_grid_field7',
'simple_grid_field8' ),
'TOTALPAAINTEGRADO' => array( 'grid_field1',
'grid_field2',
'grid_field3' ),
'QTYPAAINTEGRADOS' => array( 'grid_field',
'grid_field4' ),
'sys_status' => array( 'simple_grid_field25',
'simple_grid_field26' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'print_header',
'print_subheader',
'master_info',
'image',
'print_pdf' ),
'above-grid' => array( 'print_pages' ),
'below-grid' => array(  ),
'grid' => array( 'simple_grid_field1',
'simple_grid_field',
'simple_grid_field4',
'simple_grid_field3',
'simple_grid_field8',
'simple_grid_field7',
'grid_field2',
'grid_field1',
'grid_field3',
'grid_field4',
'grid_field',
'simple_grid_field26',
'simple_grid_field25',
'details_preview' ) ),
'formXtTags' => array( 'above-grid' => array( 'print_pages' ),
'below-grid' => array(  ) ),
'itemForms' => array( 'print_header' => 'top',
'print_subheader' => 'top',
'master_info' => 'top',
'image' => 'top',
'print_pdf' => 'top',
'print_pages' => 'above-grid',
'simple_grid_field1' => 'grid',
'simple_grid_field' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field3' => 'grid',
'simple_grid_field8' => 'grid',
'simple_grid_field7' => 'grid',
'grid_field2' => 'grid',
'grid_field1' => 'grid',
'grid_field3' => 'grid',
'grid_field4' => 'grid',
'grid_field' => 'grid',
'simple_grid_field26' => 'grid',
'simple_grid_field25' => 'grid',
'details_preview' => 'grid' ),
'itemLocations' => array( 'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field8' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'grid_field2' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'grid_field3' => array( 'location' => 'grid',
'cellId' => 'footcell_field3' ),
'grid_field4' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'simple_grid_field26' => array( 'location' => 'grid',
'cellId' => 'headcell_field5' ),
'simple_grid_field25' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'details_preview' => array( 'location' => 'grid',
'cellId' => 'cell_dpreview' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'print_header' => array( 'print_header' ),
'print_subheader' => array( 'print_subheader' ),
'print_pages' => array( 'print_pages' ),
'master_info' => array( 'master_info' ),
'image' => array( 'image' ),
'print_pdf' => array( 'print_pdf' ),
'grid_field' => array( 'simple_grid_field',
'simple_grid_field3',
'simple_grid_field7',
'grid_field1',
'grid_field',
'simple_grid_field25' ),
'grid_field_label' => array( 'simple_grid_field1',
'simple_grid_field4',
'simple_grid_field8',
'grid_field2',
'grid_field4',
'simple_grid_field26' ),
'grid_field_totals' => array( 'grid_field3' ),
'details_preview' => array( 'details_preview' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array( 'PAA_ID_fieldheadercolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'DESCRIPCION_fieldheadercolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array( 'DURACION_CONTRATO_fieldheadercolumn' ),
'items' => array( 'simple_grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'TOTALPAAINTEGRADO_fieldheadercolumn' ),
'items' => array( 'grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'QTYPAAINTEGRADOS_fieldheadercolumn' ),
'items' => array( 'grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'sys_status_fieldheadercolumn' ),
'items' => array( 'simple_grid_field26' ),
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
'tags' => array( 'DESCRIPCION_fieldcolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array( 'DURACION_CONTRATO_fieldcolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'TOTALPAAINTEGRADO_fieldcolumn' ),
'items' => array( 'grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'QTYPAAINTEGRADOS_fieldcolumn' ),
'items' => array( 'grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'sys_status_fieldcolumn' ),
'items' => array( 'simple_grid_field25' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_dpreview' => array( 'cols' => array( 0,
1,
2,
3,
4,
5 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'details_preview' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 3 ),
'tags' => array( 'TOTALPAAINTEGRADO_fieldfootercolumn' ),
'items' => array( 'grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 6,
'height' => 4 ) ) ),
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
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ) ) ),
array( 'cells' => array( array( 'cell' => 'c2' ) ),
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
'_s' => 0 ),
'c' => array( 'model' => 'c2',
'items' => array( 'image' ) ),
'c1' => array( 'model' => 'c1',
'items' => array( 'print_pdf' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'print-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'print_pages' ),
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
array( 'cell' => 'headcell_field5' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_field1' ),
array( 'cell' => 'cell_field2' ),
array( 'cell' => 'cell_field3' ),
array( 'cell' => 'cell_field4' ),
array( 'cell' => 'cell_field5' ) ) ),
array( 'cells' => array( array( 'cell' => 'cell_dpreview',
'colspan' => 6 ) ),
'section' => 'body' ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_field' ),
array( 'cell' => 'footcell_field1' ),
array( 'cell' => 'footcell_field2' ),
array( 'cell' => 'footcell_field3' ),
array( 'cell' => 'footcell_field4' ),
array( 'cell' => 'footcell_field5' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field1' ),
'field' => 'PAA_ID',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'PAA_ID',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'DESCRIPCION',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'DESCRIPCION',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field8' ),
'field' => 'DURACION_CONTRATO',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field7' ),
'field' => 'DURACION_CONTRATO',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field2' ),
'field' => 'TOTALPAAINTEGRADO',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'grid_field1' ),
'field' => 'TOTALPAAINTEGRADO',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array( 'grid_field3' ),
'field' => 'TOTALPAAINTEGRADO',
'columnName' => 'field' ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field4' ),
'field' => 'QTYPAAINTEGRADOS',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'grid_field' ),
'field' => 'QTYPAAINTEGRADOS',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field5' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field26' ),
'field' => 'sys_status',
'columnName' => 'field' ),
'cell_field5' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field25' ),
'field' => 'sys_status',
'columnName' => 'field' ),
'footcell_field5' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'cell_dpreview' => array( 'model' => 'cell_dpreview',
'items' => array( 'details_preview' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'print_header' => array( 'type' => 'print_header',
'title' => array( 'page' => 'print',
'table' => 'paa_master_integrado',
'type' => 7 ) ),
'print_subheader' => array( 'type' => 'print_subheader' ),
'print_pages' => array( 'type' => 'print_pages' ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'q_recursos_gestor_c1' => 'true',
'q_recursos_gestor_f' => 'true',
'q_recursos_gestor_f_all' => 'true' ) ),
'image' => array( 'type' => 'image',
'image' => array( 'image' => 'mincit_300x50.png',
'source' => 2 ) ),
'print_pdf' => array( 'type' => 'print_pdf',
'targetPages' => array(  ),
'splitModes' => array(  ),
'scopes' => array(  ),
'buttonStyle' => 'success' ),
'simple_grid_field' => array( 'field' => 'PAA_ID',
'type' => 'grid_field',
'bold' => true ),
'simple_grid_field1' => array( 'type' => 'grid_field_label',
'field' => 'PAA_ID' ),
'simple_grid_field3' => array( 'field' => 'DESCRIPCION',
'type' => 'grid_field' ),
'simple_grid_field4' => array( 'type' => 'grid_field_label',
'field' => 'DESCRIPCION' ),
'simple_grid_field7' => array( 'field' => 'DURACION_CONTRATO',
'type' => 'grid_field' ),
'simple_grid_field8' => array( 'type' => 'grid_field_label',
'field' => 'DURACION_CONTRATO' ),
'grid_field1' => array( 'field' => 'TOTALPAAINTEGRADO',
'type' => 'grid_field' ),
'grid_field2' => array( 'type' => 'grid_field_label',
'field' => 'TOTALPAAINTEGRADO' ),
'grid_field3' => array( 'type' => 'grid_field_totals',
'field' => 'TOTALPAAINTEGRADO',
'totals' => 'TOTAL' ),
'grid_field' => array( 'field' => 'QTYPAAINTEGRADOS',
'type' => 'grid_field' ),
'grid_field4' => array( 'type' => 'grid_field_label',
'field' => 'QTYPAAINTEGRADOS' ),
'simple_grid_field25' => array( 'field' => 'sys_status',
'type' => 'grid_field' ),
'simple_grid_field26' => array( 'type' => 'grid_field_label',
'field' => 'sys_status' ),
'details_preview' => array( 'type' => 'details_preview',
'table' => 'q_info_nopaa_integrado',
'items' => array(  ),
'popup' => false,
'pageId' => 'print' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>