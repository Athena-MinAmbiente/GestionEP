<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'EPA_ID',
'UEJ',
'RUBRO',
'FUENTE',
'REC',
'SIT',
'DESCRIPCION',
'NOMBRE_UEJ' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'EPA_ID' => array( 'import_field' ),
'UEJ' => array( 'import_field2' ),
'NOMBRE_UEJ' => array( 'import_field3' ),
'RUBRO' => array( 'import_field4' ),
'FUENTE' => array( 'import_field14' ),
'REC' => array( 'import_field15' ),
'SIT' => array( 'import_field16' ),
'DESCRIPCION' => array( 'import_field17' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field',
'import_field2',
'import_field4',
'import_field14',
'import_field15',
'import_field16',
'import_field17',
'import_field3' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field' => 'grid',
'import_field2' => 'grid',
'import_field4' => 'grid',
'import_field14' => 'grid',
'import_field15' => 'grid',
'import_field16' => 'grid',
'import_field17' => 'grid',
'import_field3' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field',
'import_field2',
'import_field3',
'import_field4',
'import_field14',
'import_field15',
'import_field16',
'import_field17' ) ),
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
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'import-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'import-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_field',
'import_field2',
'import_field4',
'import_field14',
'import_field15',
'import_field16',
'import_field17',
'import_field3' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field' => array( 'field' => 'EPA_ID',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'UEJ',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'NOMBRE_UEJ',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'RUBRO',
'type' => 'import_field' ),
'import_field14' => array( 'field' => 'FUENTE',
'type' => 'import_field' ),
'import_field15' => array( 'field' => 'REC',
'type' => 'import_field' ),
'import_field16' => array( 'field' => 'SIT',
'type' => 'import_field' ),
'import_field17' => array( 'field' => 'DESCRIPCION',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>