<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'details' => array( '002_producto_sad' => array( 'displayPreview' => 1 ) ),
'master' => array( '000_global_sad' => array( 'preview' => true ) ),
'totals' => array( 'RUBRO_ID' => array( 'totalsType' => '' ),
'RUBRO_ID_FK' => array( 'totalsType' => '' ),
'VIGENCIA' => array( 'totalsType' => '' ),
'UEJ' => array( 'totalsType' => '' ),
'RUBRO' => array( 'totalsType' => '' ),
'DESCRIPCION' => array( 'totalsType' => '' ),
'REC' => array( 'totalsType' => '' ),
'FUENTE' => array( 'totalsType' => '' ),
'TIPO' => array( 'totalsType' => '' ),
'TIPO_FUENTE' => array( 'totalsType' => '' ),
'BPIN' => array( 'totalsType' => '' ),
'PRESUPUESTO' => array( 'totalsType' => '' ),
'SALDO' => array( 'totalsType' => '' ),
'Dependencia' => array( 'totalsType' => '' ),
'UsuarioResp' => array( 'totalsType' => '' ),
'CATEGORIA' => array( 'totalsType' => '' ),
'OBJ_GENERAL' => array( 'totalsType' => '' ),
'OBJ_ESPECIFICO' => array( 'totalsType' => '' ),
'UTILIZADO' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'VIGENCIA',
'TIPO',
'UEJ',
'RUBRO',
'REC',
'FUENTE',
'PRESUPUESTO',
'Dependencia',
'DESCRIPCION',
'TIPO_FUENTE',
'RUBRO_ID_FK',
'UTILIZADO',
'UsuarioResp' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'VIGENCIA' => array( 'simple_grid_field1',
'simple_grid_field5' ),
'TIPO' => array( 'simple_grid_field2',
'simple_grid_field11' ),
'UEJ' => array( 'simple_grid_field3',
'simple_grid_field13' ),
'RUBRO' => array( 'simple_grid_field4',
'simple_grid_field16' ),
'REC' => array( 'simple_grid_field6',
'simple_grid_field17' ),
'FUENTE' => array( 'simple_grid_field7',
'simple_grid_field18' ),
'PRESUPUESTO' => array( 'simple_grid_field9',
'simple_grid_field19' ),
'Dependencia' => array( 'simple_grid_field10',
'simple_grid_field20' ),
'DESCRIPCION' => array( 'simple_grid_field',
'simple_grid_field21' ),
'TIPO_FUENTE' => array( 'simple_grid_field8',
'simple_grid_field22' ),
'RUBRO_ID_FK' => array( 'simple_grid_field14',
'simple_grid_field23' ),
'UTILIZADO' => array( 'simple_grid_field12',
'simple_grid_field24' ),
'UsuarioResp' => array( 'simple_grid_field15',
'simple_grid_field25' ) ),
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
'grid' => array( 'simple_grid_field5',
'simple_grid_field1',
'simple_grid_field11',
'simple_grid_field2',
'simple_grid_field13',
'simple_grid_field3',
'simple_grid_field16',
'simple_grid_field4',
'simple_grid_field17',
'simple_grid_field6',
'simple_grid_field18',
'simple_grid_field7',
'simple_grid_field19',
'simple_grid_field9',
'simple_grid_field20',
'simple_grid_field10',
'simple_grid_field21',
'simple_grid_field',
'simple_grid_field22',
'simple_grid_field8',
'simple_grid_field23',
'simple_grid_field14',
'simple_grid_field24',
'simple_grid_field12',
'simple_grid_field25',
'simple_grid_field15',
'details_preview' ) ),
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
'simple_grid_field5' => 'grid',
'simple_grid_field1' => 'grid',
'simple_grid_field11' => 'grid',
'simple_grid_field2' => 'grid',
'simple_grid_field13' => 'grid',
'simple_grid_field3' => 'grid',
'simple_grid_field16' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field17' => 'grid',
'simple_grid_field6' => 'grid',
'simple_grid_field18' => 'grid',
'simple_grid_field7' => 'grid',
'simple_grid_field19' => 'grid',
'simple_grid_field9' => 'grid',
'simple_grid_field20' => 'grid',
'simple_grid_field10' => 'grid',
'simple_grid_field21' => 'grid',
'simple_grid_field' => 'grid',
'simple_grid_field22' => 'grid',
'simple_grid_field8' => 'grid',
'simple_grid_field23' => 'grid',
'simple_grid_field14' => 'grid',
'simple_grid_field24' => 'grid',
'simple_grid_field12' => 'grid',
'simple_grid_field25' => 'grid',
'simple_grid_field15' => 'grid',
'details_preview' => 'grid' ),
'itemLocations' => array( 'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field11' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field13' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field16' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'simple_grid_field17' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'simple_grid_field18' => array( 'location' => 'grid',
'cellId' => 'headcell_field5' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'simple_grid_field19' => array( 'location' => 'grid',
'cellId' => 'headcell_field6' ),
'simple_grid_field9' => array( 'location' => 'grid',
'cellId' => 'cell_field6' ),
'simple_grid_field20' => array( 'location' => 'grid',
'cellId' => 'headcell_field7' ),
'simple_grid_field10' => array( 'location' => 'grid',
'cellId' => 'cell_field7' ),
'simple_grid_field21' => array( 'location' => 'grid',
'cellId' => 'headcell_field8' ),
'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field8' ),
'simple_grid_field22' => array( 'location' => 'grid',
'cellId' => 'headcell_field9' ),
'simple_grid_field8' => array( 'location' => 'grid',
'cellId' => 'cell_field9' ),
'simple_grid_field23' => array( 'location' => 'grid',
'cellId' => 'headcell_field10' ),
'simple_grid_field14' => array( 'location' => 'grid',
'cellId' => 'cell_field10' ),
'simple_grid_field24' => array( 'location' => 'grid',
'cellId' => 'headcell_field11' ),
'simple_grid_field12' => array( 'location' => 'grid',
'cellId' => 'cell_field11' ),
'simple_grid_field25' => array( 'location' => 'grid',
'cellId' => 'headcell_field12' ),
'simple_grid_field15' => array( 'location' => 'grid',
'cellId' => 'cell_field12' ),
'details_preview' => array( 'location' => 'grid',
'cellId' => 'cell_dpreview' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'print_header' => array( 'print_header' ),
'print_subheader' => array( 'print_subheader' ),
'print_pages' => array( 'print_pages' ),
'master_info' => array( 'master_info' ),
'grid_field' => array( 'simple_grid_field1',
'simple_grid_field2',
'simple_grid_field3',
'simple_grid_field4',
'simple_grid_field6',
'simple_grid_field7',
'simple_grid_field9',
'simple_grid_field10',
'simple_grid_field',
'simple_grid_field8',
'simple_grid_field14',
'simple_grid_field12',
'simple_grid_field15' ),
'grid_field_label' => array( 'simple_grid_field5',
'simple_grid_field11',
'simple_grid_field13',
'simple_grid_field16',
'simple_grid_field17',
'simple_grid_field18',
'simple_grid_field19',
'simple_grid_field20',
'simple_grid_field21',
'simple_grid_field22',
'simple_grid_field23',
'simple_grid_field24',
'simple_grid_field25' ),
'details_preview' => array( 'details_preview' ),
'inline_add' => array( 'inline_add' ),
'grid_inline_cancel' => array( 'grid_inline_cancel' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array( 'VIGENCIA_fieldheadercolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'TIPO_fieldheadercolumn' ),
'items' => array( 'simple_grid_field11' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array( 'UEJ_fieldheadercolumn' ),
'items' => array( 'simple_grid_field13' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'RUBRO_fieldheadercolumn' ),
'items' => array( 'simple_grid_field16' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'REC_fieldheadercolumn' ),
'items' => array( 'simple_grid_field17' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'FUENTE_fieldheadercolumn' ),
'items' => array( 'simple_grid_field18' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 0 ),
'tags' => array( 'PRESUPUESTO_fieldheadercolumn' ),
'items' => array( 'simple_grid_field19' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 0 ),
'tags' => array( 'Dependencia_fieldheadercolumn' ),
'items' => array( 'simple_grid_field20' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field8' => array( 'cols' => array( 8 ),
'rows' => array( 0 ),
'tags' => array( 'DESCRIPCION_fieldheadercolumn' ),
'items' => array( 'simple_grid_field21' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field9' => array( 'cols' => array( 9 ),
'rows' => array( 0 ),
'tags' => array( 'TIPO_FUENTE_fieldheadercolumn' ),
'items' => array( 'simple_grid_field22' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field10' => array( 'cols' => array( 10 ),
'rows' => array( 0 ),
'tags' => array( 'RUBRO_ID_FK_fieldheadercolumn' ),
'items' => array( 'simple_grid_field23' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field11' => array( 'cols' => array( 11 ),
'rows' => array( 0 ),
'tags' => array( 'UTILIZADO_fieldheadercolumn' ),
'items' => array( 'simple_grid_field24' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field12' => array( 'cols' => array( 12 ),
'rows' => array( 0 ),
'tags' => array( 'UsuarioResp_fieldheadercolumn' ),
'items' => array( 'simple_grid_field25' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'VIGENCIA_fieldcolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'TIPO_fieldcolumn' ),
'items' => array( 'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array( 'UEJ_fieldcolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'RUBRO_fieldcolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'REC_fieldcolumn' ),
'items' => array( 'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'FUENTE_fieldcolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 1 ),
'tags' => array( 'PRESUPUESTO_fieldcolumn' ),
'items' => array( 'simple_grid_field9' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 1 ),
'tags' => array( 'Dependencia_fieldcolumn' ),
'items' => array( 'simple_grid_field10' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field8' => array( 'cols' => array( 8 ),
'rows' => array( 1 ),
'tags' => array( 'DESCRIPCION_fieldcolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field9' => array( 'cols' => array( 9 ),
'rows' => array( 1 ),
'tags' => array( 'TIPO_FUENTE_fieldcolumn' ),
'items' => array( 'simple_grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field10' => array( 'cols' => array( 10 ),
'rows' => array( 1 ),
'tags' => array( 'RUBRO_ID_FK_fieldcolumn' ),
'items' => array( 'simple_grid_field14' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field11' => array( 'cols' => array( 11 ),
'rows' => array( 1 ),
'tags' => array( 'UTILIZADO_fieldcolumn' ),
'items' => array( 'simple_grid_field12' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field12' => array( 'cols' => array( 12 ),
'rows' => array( 1 ),
'tags' => array( 'UsuarioResp_fieldcolumn' ),
'items' => array( 'simple_grid_field15' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_dpreview' => array( 'cols' => array( 0,
1,
2,
3,
4,
5,
6,
7,
8,
9,
10,
11,
12 ),
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
'tags' => array(  ),
'items' => array(  ),
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
'fixedAtClient' => false ),
'footcell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field8' => array( 'cols' => array( 8 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field9' => array( 'cols' => array( 9 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field10' => array( 'cols' => array( 10 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field11' => array( 'cols' => array( 11 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field12' => array( 'cols' => array( 12 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 13,
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
array( 'cell' => 'headcell_field12' ) ) ),
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
array( 'cell' => 'cell_field12' ) ) ),
array( 'cells' => array( array( 'cell' => 'cell_dpreview',
'colspan' => 13 ) ),
'section' => 'body' ),
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
array( 'cell' => 'footcell_field12' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'VIGENCIA',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field1' ),
'field' => 'VIGENCIA',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field11' ),
'field' => 'TIPO',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field2' ),
'field' => 'TIPO',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field13' ),
'field' => 'UEJ',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'UEJ',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field16' ),
'field' => 'RUBRO',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'RUBRO',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field17' ),
'field' => 'REC',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field6' ),
'field' => 'REC',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field5' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field18' ),
'field' => 'FUENTE',
'columnName' => 'field' ),
'cell_field5' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field7' ),
'field' => 'FUENTE',
'columnName' => 'field' ),
'footcell_field5' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field6' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field19' ),
'field' => 'PRESUPUESTO',
'columnName' => 'field' ),
'cell_field6' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field9' ),
'field' => 'PRESUPUESTO',
'columnName' => 'field' ),
'footcell_field6' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field7' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field20' ),
'field' => 'Dependencia',
'columnName' => 'field' ),
'cell_field7' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field10' ),
'field' => 'Dependencia',
'columnName' => 'field' ),
'footcell_field7' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field8' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field21' ),
'field' => 'DESCRIPCION',
'columnName' => 'field' ),
'cell_field8' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'DESCRIPCION',
'columnName' => 'field' ),
'footcell_field8' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field9' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field22' ),
'field' => 'TIPO_FUENTE',
'columnName' => 'field' ),
'cell_field9' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field8' ),
'field' => 'TIPO_FUENTE',
'columnName' => 'field' ),
'footcell_field9' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field10' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field23' ),
'field' => 'RUBRO_ID_FK',
'columnName' => 'field' ),
'cell_field10' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field14' ),
'field' => 'RUBRO_ID_FK',
'columnName' => 'field' ),
'footcell_field10' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field11' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field24' ),
'field' => 'UTILIZADO',
'columnName' => 'field' ),
'cell_field11' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field12' ),
'field' => 'UTILIZADO',
'columnName' => 'field' ),
'footcell_field11' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field12' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field25' ),
'field' => 'UsuarioResp',
'columnName' => 'field' ),
'cell_field12' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field15' ),
'field' => 'UsuarioResp',
'columnName' => 'field' ),
'footcell_field12' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'cell_dpreview' => array( 'model' => 'cell_dpreview',
'items' => array( 'details_preview' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'print_header' => array( 'type' => 'print_header' ),
'print_subheader' => array( 'type' => 'print_subheader' ),
'print_pages' => array( 'type' => 'print_pages' ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( '000_global_fun' => 'true',
'000_global_sad' => 'true' ) ),
'simple_grid_field1' => array( 'field' => 'VIGENCIA',
'type' => 'grid_field' ),
'simple_grid_field5' => array( 'type' => 'grid_field_label',
'field' => 'VIGENCIA' ),
'simple_grid_field2' => array( 'field' => 'TIPO',
'type' => 'grid_field' ),
'simple_grid_field11' => array( 'type' => 'grid_field_label',
'field' => 'TIPO' ),
'simple_grid_field3' => array( 'field' => 'UEJ',
'type' => 'grid_field' ),
'simple_grid_field13' => array( 'type' => 'grid_field_label',
'field' => 'UEJ' ),
'simple_grid_field4' => array( 'field' => 'RUBRO',
'type' => 'grid_field' ),
'simple_grid_field16' => array( 'type' => 'grid_field_label',
'field' => 'RUBRO' ),
'simple_grid_field6' => array( 'field' => 'REC',
'type' => 'grid_field' ),
'simple_grid_field17' => array( 'type' => 'grid_field_label',
'field' => 'REC' ),
'simple_grid_field7' => array( 'field' => 'FUENTE',
'type' => 'grid_field' ),
'simple_grid_field18' => array( 'type' => 'grid_field_label',
'field' => 'FUENTE' ),
'simple_grid_field9' => array( 'field' => 'PRESUPUESTO',
'type' => 'grid_field' ),
'simple_grid_field19' => array( 'type' => 'grid_field_label',
'field' => 'PRESUPUESTO' ),
'simple_grid_field10' => array( 'field' => 'Dependencia',
'type' => 'grid_field' ),
'simple_grid_field20' => array( 'type' => 'grid_field_label',
'field' => 'Dependencia' ),
'simple_grid_field' => array( 'field' => 'DESCRIPCION',
'type' => 'grid_field' ),
'simple_grid_field21' => array( 'type' => 'grid_field_label',
'field' => 'DESCRIPCION' ),
'simple_grid_field8' => array( 'field' => 'TIPO_FUENTE',
'type' => 'grid_field' ),
'simple_grid_field22' => array( 'type' => 'grid_field_label',
'field' => 'TIPO_FUENTE' ),
'simple_grid_field14' => array( 'field' => 'RUBRO_ID_FK',
'type' => 'grid_field' ),
'simple_grid_field23' => array( 'type' => 'grid_field_label',
'field' => 'RUBRO_ID_FK' ),
'simple_grid_field12' => array( 'field' => 'UTILIZADO',
'type' => 'grid_field' ),
'simple_grid_field24' => array( 'type' => 'grid_field_label',
'field' => 'UTILIZADO' ),
'simple_grid_field15' => array( 'field' => 'UsuarioResp',
'type' => 'grid_field' ),
'simple_grid_field25' => array( 'type' => 'grid_field_label',
'field' => 'UsuarioResp' ),
'details_preview' => array( 'type' => 'details_preview',
'table' => '002_producto_sad',
'items' => array(  ),
'popup' => false ),
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