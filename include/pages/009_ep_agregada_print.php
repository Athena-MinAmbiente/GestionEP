<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'totals' => array( 'EPA_ID' => array( 'totalsType' => '' ),
'UEJ' => array( 'totalsType' => '' ),
'REC' => array( 'totalsType' => '' ),
'RUBRO' => array( 'totalsType' => '' ),
'SIT' => array( 'totalsType' => '' ),
'DESCRIPCION' => array( 'totalsType' => '' ),
'FUENTE' => array( 'totalsType' => '' ),
'NOMBRE_UEJ' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'EPA_ID',
'UEJ',
'RUBRO',
'FUENTE',
'REC',
'SIT',
'DESCRIPCION',
'NOMBRE_UEJ' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'EPA_ID' => array( 'simple_grid_field',
'simple_grid_field1' ),
'UEJ' => array( 'simple_grid_field2',
'simple_grid_field5' ),
'RUBRO' => array( 'simple_grid_field4',
'simple_grid_field6' ),
'FUENTE' => array( 'simple_grid_field14',
'simple_grid_field18' ),
'REC' => array( 'simple_grid_field15',
'simple_grid_field19' ),
'SIT' => array( 'simple_grid_field16',
'simple_grid_field20' ),
'DESCRIPCION' => array( 'simple_grid_field17',
'simple_grid_field21' ),
'NOMBRE_UEJ' => array( 'simple_grid_field3',
'simple_grid_field7' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'print_pages' ),
'below-grid' => array(  ),
'top' => array( 'print_header',
'print_subheader' ),
'grid' => array( 'simple_grid_field1',
'simple_grid_field',
'simple_grid_field5',
'simple_grid_field2',
'simple_grid_field6',
'simple_grid_field4',
'simple_grid_field18',
'simple_grid_field14',
'simple_grid_field19',
'simple_grid_field15',
'simple_grid_field20',
'simple_grid_field16',
'simple_grid_field21',
'simple_grid_field17',
'simple_grid_field7',
'simple_grid_field3' ) ),
'formXtTags' => array( 'above-grid' => array( 'print_pages' ),
'below-grid' => array(  ) ),
'itemForms' => array( 'print_pages' => 'above-grid',
'print_header' => 'top',
'print_subheader' => 'top',
'simple_grid_field1' => 'grid',
'simple_grid_field' => 'grid',
'simple_grid_field5' => 'grid',
'simple_grid_field2' => 'grid',
'simple_grid_field6' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field18' => 'grid',
'simple_grid_field14' => 'grid',
'simple_grid_field19' => 'grid',
'simple_grid_field15' => 'grid',
'simple_grid_field20' => 'grid',
'simple_grid_field16' => 'grid',
'simple_grid_field21' => 'grid',
'simple_grid_field17' => 'grid',
'simple_grid_field7' => 'grid',
'simple_grid_field3' => 'grid' ),
'itemLocations' => array( 'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field18' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field14' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'simple_grid_field19' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'simple_grid_field15' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'simple_grid_field20' => array( 'location' => 'grid',
'cellId' => 'headcell_field5' ),
'simple_grid_field16' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'simple_grid_field21' => array( 'location' => 'grid',
'cellId' => 'headcell_field6' ),
'simple_grid_field17' => array( 'location' => 'grid',
'cellId' => 'cell_field6' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'headcell_field7' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_field7' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'print_header' => array( 'print_header' ),
'print_subheader' => array( 'print_subheader' ),
'print_pages' => array( 'print_pages' ),
'grid_field' => array( 'simple_grid_field',
'simple_grid_field2',
'simple_grid_field4',
'simple_grid_field14',
'simple_grid_field15',
'simple_grid_field16',
'simple_grid_field17',
'simple_grid_field3' ),
'grid_field_label' => array( 'simple_grid_field1',
'simple_grid_field5',
'simple_grid_field6',
'simple_grid_field18',
'simple_grid_field19',
'simple_grid_field20',
'simple_grid_field21',
'simple_grid_field7' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array( 'EPA_ID_fieldheadercolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'UEJ_fieldheadercolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array( 'RUBRO_fieldheadercolumn' ),
'items' => array( 'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'FUENTE_fieldheadercolumn' ),
'items' => array( 'simple_grid_field18' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'REC_fieldheadercolumn' ),
'items' => array( 'simple_grid_field19' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'SIT_fieldheadercolumn' ),
'items' => array( 'simple_grid_field20' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 0 ),
'tags' => array( 'DESCRIPCION_fieldheadercolumn' ),
'items' => array( 'simple_grid_field21' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 0 ),
'tags' => array( 'NOMBRE_UEJ_fieldheadercolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'EPA_ID_fieldcolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'UEJ_fieldcolumn' ),
'items' => array( 'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array( 'RUBRO_fieldcolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'FUENTE_fieldcolumn' ),
'items' => array( 'simple_grid_field14' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'REC_fieldcolumn' ),
'items' => array( 'simple_grid_field15' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'SIT_fieldcolumn' ),
'items' => array( 'simple_grid_field16' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 1 ),
'tags' => array( 'DESCRIPCION_fieldcolumn' ),
'items' => array( 'simple_grid_field17' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 1 ),
'tags' => array( 'NOMBRE_UEJ_fieldcolumn' ),
'items' => array( 'simple_grid_field3' ),
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
'tags' => array(  ),
'items' => array(  ),
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
'fixedAtClient' => false ) ),
'width' => 8,
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
'forms' => array( 'above-grid' => array( 'modelId' => 'print-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'print_pages' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'print-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'print-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'print_header',
'print_subheader' ) ) ),
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
array( 'cell' => 'headcell_field7' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_field1' ),
array( 'cell' => 'cell_field2' ),
array( 'cell' => 'cell_field3' ),
array( 'cell' => 'cell_field4' ),
array( 'cell' => 'cell_field5' ),
array( 'cell' => 'cell_field6' ),
array( 'cell' => 'cell_field7' ) ) ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_field' ),
array( 'cell' => 'footcell_field1' ),
array( 'cell' => 'footcell_field2' ),
array( 'cell' => 'footcell_field3' ),
array( 'cell' => 'footcell_field4' ),
array( 'cell' => 'footcell_field5' ),
array( 'cell' => 'footcell_field6' ),
array( 'cell' => 'footcell_field7' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field1' ),
'field' => 'EPA_ID',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'EPA_ID',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'UEJ',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field2' ),
'field' => 'UEJ',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field6' ),
'field' => 'RUBRO',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'RUBRO',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field18' ),
'field' => 'FUENTE',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field14' ),
'field' => 'FUENTE',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field19' ),
'field' => 'REC',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field15' ),
'field' => 'REC',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field5' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field20' ),
'field' => 'SIT',
'columnName' => 'field' ),
'cell_field5' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field16' ),
'field' => 'SIT',
'columnName' => 'field' ),
'footcell_field5' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field6' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field21' ),
'field' => 'DESCRIPCION',
'columnName' => 'field' ),
'cell_field6' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field17' ),
'field' => 'DESCRIPCION',
'columnName' => 'field' ),
'footcell_field6' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field7' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field7' ),
'field' => 'NOMBRE_UEJ',
'columnName' => 'field' ),
'cell_field7' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'NOMBRE_UEJ',
'columnName' => 'field' ),
'footcell_field7' => array( 'model' => 'footcell_field',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'print_header' => array( 'type' => 'print_header' ),
'print_subheader' => array( 'type' => 'print_subheader' ),
'print_pages' => array( 'type' => 'print_pages' ),
'simple_grid_field' => array( 'field' => 'EPA_ID',
'type' => 'grid_field' ),
'simple_grid_field1' => array( 'type' => 'grid_field_label',
'field' => 'EPA_ID' ),
'simple_grid_field2' => array( 'field' => 'UEJ',
'type' => 'grid_field' ),
'simple_grid_field5' => array( 'type' => 'grid_field_label',
'field' => 'UEJ' ),
'simple_grid_field4' => array( 'field' => 'RUBRO',
'type' => 'grid_field' ),
'simple_grid_field6' => array( 'type' => 'grid_field_label',
'field' => 'RUBRO' ),
'simple_grid_field14' => array( 'field' => 'FUENTE',
'type' => 'grid_field' ),
'simple_grid_field18' => array( 'type' => 'grid_field_label',
'field' => 'FUENTE' ),
'simple_grid_field15' => array( 'field' => 'REC',
'type' => 'grid_field' ),
'simple_grid_field19' => array( 'type' => 'grid_field_label',
'field' => 'REC' ),
'simple_grid_field16' => array( 'field' => 'SIT',
'type' => 'grid_field' ),
'simple_grid_field20' => array( 'type' => 'grid_field_label',
'field' => 'SIT' ),
'simple_grid_field17' => array( 'field' => 'DESCRIPCION',
'type' => 'grid_field' ),
'simple_grid_field21' => array( 'type' => 'grid_field_label',
'field' => 'DESCRIPCION' ),
'simple_grid_field3' => array( 'field' => 'NOMBRE_UEJ',
'type' => 'grid_field' ),
'simple_grid_field7' => array( 'type' => 'grid_field_label',
'field' => 'NOMBRE_UEJ' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>