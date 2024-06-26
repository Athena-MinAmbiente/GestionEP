<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => true,
'orientation' => 'portrait',
'scale' => 100 ),
'master' => array( '002_producto_m' => array( 'preview' => false ) ),
'fields' => array( 'gridFields' => array( 'prod_id_fk',
'email_not',
'email_user',
'valor_actual',
'valor_nuevo',
'mod_justificacion',
'mod_estado',
'mod_file',
'sys_user',
'sys_date',
'mod_id',
'tipo_mod' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'prod_id_fk' => array( 'integrated_edit_field' ),
'email_not' => array( 'integrated_edit_field2' ),
'email_user' => array( 'integrated_edit_field3' ),
'valor_actual' => array( 'integrated_edit_field4' ),
'valor_nuevo' => array( 'integrated_edit_field5' ),
'mod_justificacion' => array( 'integrated_edit_field6' ),
'mod_estado' => array( 'integrated_edit_field7' ),
'mod_file' => array( 'integrated_edit_field8' ),
'sys_user' => array( 'integrated_edit_field9' ),
'sys_date' => array( 'integrated_edit_field10' ),
'mod_id' => array( 'integrated_edit_field11' ),
'tipo_mod' => array( 'integrated_edit_field1' ) ) ),
'pageLinks' => array( 'edit' => true,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array(  ),
'below-grid' => array( 'view_back_list',
'view_close',
'hamburger' ),
'supertop' => array( 'expand_menu_button',
'collapse_button',
'loginform_login',
'username_button' ),
'left' => array( 'logo',
'expand_button',
'menu' ),
'top' => array( 'view_header' ),
'grid' => array( 'integrated_edit_field7',
'integrated_edit_field10',
'integrated_edit_field11',
'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field9',
'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field5',
'integrated_edit_field6',
'integrated_edit_field8',
'integrated_edit_field' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'view_back_list' => 'below-grid',
'view_close' => 'below-grid',
'hamburger' => 'below-grid',
'expand_menu_button' => 'supertop',
'collapse_button' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'logo' => 'left',
'expand_button' => 'left',
'menu' => 'left',
'view_header' => 'top',
'integrated_edit_field7' => 'grid',
'integrated_edit_field10' => 'grid',
'integrated_edit_field11' => 'grid',
'integrated_edit_field1' => 'grid',
'integrated_edit_field2' => 'grid',
'integrated_edit_field9' => 'grid',
'integrated_edit_field3' => 'grid',
'integrated_edit_field4' => 'grid',
'integrated_edit_field5' => 'grid',
'integrated_edit_field6' => 'grid',
'integrated_edit_field8' => 'grid',
'integrated_edit_field' => 'grid' ),
'itemLocations' => array( 'integrated_edit_field7' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field10' => array( 'location' => 'grid',
'cellId' => 'c' ),
'integrated_edit_field11' => array( 'location' => 'grid',
'cellId' => 'c' ),
'integrated_edit_field1' => array( 'location' => 'grid',
'cellId' => 'c4' ),
'integrated_edit_field2' => array( 'location' => 'grid',
'cellId' => 'c5' ),
'integrated_edit_field9' => array( 'location' => 'grid',
'cellId' => 'c6' ),
'integrated_edit_field3' => array( 'location' => 'grid',
'cellId' => 'c7' ),
'integrated_edit_field4' => array( 'location' => 'grid',
'cellId' => 'c8' ),
'integrated_edit_field5' => array( 'location' => 'grid',
'cellId' => 'c9' ),
'integrated_edit_field6' => array( 'location' => 'grid',
'cellId' => 'c10' ),
'integrated_edit_field8' => array( 'location' => 'grid',
'cellId' => 'c11' ),
'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c14' ) ),
'itemVisiblity' => array( 'expand_menu_button' => 2,
'expand_button' => 5 ) ),
'itemsByType' => array( 'view_header' => array( 'view_header' ),
'view_back_list' => array( 'view_back_list' ),
'view_close' => array( 'view_close' ),
'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ),
'adminarea_link' => array( 'adminarea_link' ),
'expand_menu_button' => array( 'expand_menu_button' ),
'collapse_button' => array( 'collapse_button' ),
'hamburger' => array( 'hamburger' ),
'view_edit' => array( 'view_edit' ),
'integrated_edit_field' => array( 'integrated_edit_field',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field5',
'integrated_edit_field6',
'integrated_edit_field7',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field10',
'integrated_edit_field11',
'integrated_edit_field1' ),
'view_pdf' => array( 'view_pdf' ),
'expand_button' => array( 'expand_button' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c14' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c15' => array( 'cols' => array( 1 ),
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
'items' => array( 'integrated_edit_field2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c6' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field9' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c7' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field3' ),
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
'c10' => array( 'cols' => array( 0,
1 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field6' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c11' => array( 'cols' => array( 0,
1 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field8' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 0 ),
'rows' => array( 6 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field7' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 1 ),
'rows' => array( 6 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field10',
'integrated_edit_field11' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 7 ) ) ),
'loginForm' => array( 'loginForm' => 1 ),
'page' => array( 'verticalBar' => true,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array( array( 'id' => 'main',
'horizontal' => false ) ),
'calcTotalsFor' => 1 ),
'misc' => array( 'type' => 'view',
'breadcrumb' => false,
'nextPrev' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'view',
'type' => 'view',
'layoutId' => 'leftbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'view-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1',
'colspan' => 2 ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'view-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_back_list',
'view_close' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'hamburger' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'leftbar-top-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'expand_menu_button',
'collapse_button' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'loginform_login',
'username_button' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'left' => array( 'modelId' => 'leftbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c0' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c0' => array( 'model' => 'c0',
'items' => array( 'logo',
'expand_button' ) ),
'c1' => array( 'model' => 'c1',
'items' => array( 'menu' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'view-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c14' ),
array( 'cell' => 'c15' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c4' ),
array( 'cell' => 'c5' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c6' ),
array( 'cell' => 'c7' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c8' ),
array( 'cell' => 'c9' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c10',
'colspan' => 2 ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c11',
'colspan' => 2 ) ) ),
array( 'cells' => array( array( 'cell' => 'c3' ),
array( 'cell' => 'c' ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field7' ) ),
'c' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field10',
'integrated_edit_field11' ) ),
'c4' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field1' ) ),
'c5' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field2' ) ),
'c6' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field9' ) ),
'c7' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field3' ) ),
'c8' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field4' ) ),
'c9' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field5' ) ),
'c10' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field6' ),
'useFullWidth' => true ),
'c11' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field8' ),
'useFullWidth' => true ),
'c14' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field' ) ),
'c15' => array( 'model' => 'c3',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'view_header' => array( 'type' => 'view_header' ),
'view_back_list' => array( 'type' => 'view_back_list' ),
'view_close' => array( 'type' => 'view_close' ),
'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link',
'adminarea_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => true ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'logout_link' => array( 'type' => 'logout_link' ),
'adminarea_link' => array( 'type' => 'adminarea_link' ),
'expand_menu_button' => array( 'type' => 'expand_menu_button' ),
'collapse_button' => array( 'type' => 'collapse_button' ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array( 'view_edit',
'view_pdf' ) ),
'view_edit' => array( 'type' => 'view_edit' ),
'integrated_edit_field' => array( 'field' => 'prod_id_fk',
'type' => 'integrated_edit_field',
'orientation' => 0,
'label' => array( 'field' => 'prod_id_fk',
'table' => '002_producto_mod',
'type' => 3 ) ),
'integrated_edit_field2' => array( 'field' => 'email_not',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field3' => array( 'field' => 'email_user',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field4' => array( 'field' => 'valor_actual',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field5' => array( 'field' => 'valor_nuevo',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field6' => array( 'field' => 'mod_justificacion',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field7' => array( 'field' => 'mod_estado',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field8' => array( 'field' => 'mod_file',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field9' => array( 'field' => 'sys_user',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field10' => array( 'field' => 'sys_date',
'type' => 'integrated_edit_field',
'orientation' => 0,
'label' => array( 'field' => 'sys_date',
'table' => '002_producto_mod',
'type' => 3 ) ),
'integrated_edit_field11' => array( 'field' => 'mod_id',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'view_pdf' => array( 'type' => 'view_pdf',
'targetPages' => array(  ),
'splitModes' => array(  ),
'scopes' => array(  ) ),
'integrated_edit_field1' => array( 'field' => 'tipo_mod',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'expand_button' => array( 'type' => 'expand_button' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>