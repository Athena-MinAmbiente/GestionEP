<?php
			$optionsArray = array( 'master' => array( '002_producto' => array( 'preview' => true ),
'q_recursos_gestor_c' => array( 'preview' => false ) ),
'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array( 'ACTIVIDAD',
'RECURSOS_ASIGNADOS',
'SALDO',
'PRODUCTO',
'DEPENDENCIA',
'RESPONSABLE',
'PROD_ID_FK',
'VIGENCIA',
'RUBRO_ID_FK',
'TIPO',
'UEJ',
'RUBRO',
'PROGRAMADO',
'SALDO_PROG' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'updateOnEditFields' => array( 'DEPENDENCIA',
'RESPONSABLE' ),
'fieldItems' => array( 'ACTIVIDAD' => array( 'integrated_edit_field7' ),
'RECURSOS_ASIGNADOS' => array( 'integrated_edit_field9' ),
'SALDO' => array( 'integrated_edit_field8' ),
'PRODUCTO' => array( 'integrated_edit_field6' ),
'DEPENDENCIA' => array( 'integrated_edit_field10' ),
'RESPONSABLE' => array( 'integrated_edit_field11' ),
'PROD_ID_FK' => array( 'integrated_edit_field' ),
'VIGENCIA' => array( 'integrated_edit_field2' ),
'RUBRO_ID_FK' => array( 'integrated_edit_field1' ),
'TIPO' => array( 'integrated_edit_field3' ),
'UEJ' => array( 'integrated_edit_field4' ),
'RUBRO' => array( 'integrated_edit_field5' ),
'PROGRAMADO' => array( 'integrated_edit_field12' ),
'SALDO_PROG' => array( 'integrated_edit_field13' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => true,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'edit_message' ),
'below-grid' => array( 'edit_save',
'update_records',
'edit_back_list',
'edit_close',
'hamburger' ),
'supertop' => array( 'expand_menu_button',
'collapse_button',
'loginform_login',
'username_button' ),
'left' => array( 'logo',
'expand_button',
'menu' ),
'top' => array( 'edit_header' ),
'grid' => array( 'tabs',
'integrated_edit_field12',
'integrated_edit_field13',
'master_info' ),
'section' => array( 'integrated_edit_field7',
'integrated_edit_field9',
'integrated_edit_field8',
'integrated_edit_field6',
'integrated_edit_field10',
'integrated_edit_field11' ),
'section1' => array( 'integrated_edit_field',
'integrated_edit_field2',
'integrated_edit_field1',
'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field5' ) ),
'formXtTags' => array( 'above-grid' => array( 'message_block' ) ),
'itemForms' => array( 'edit_message' => 'above-grid',
'edit_save' => 'below-grid',
'update_records' => 'below-grid',
'edit_back_list' => 'below-grid',
'edit_close' => 'below-grid',
'hamburger' => 'below-grid',
'expand_menu_button' => 'supertop',
'collapse_button' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'logo' => 'left',
'expand_button' => 'left',
'menu' => 'left',
'edit_header' => 'top',
'tabs' => 'grid',
'integrated_edit_field12' => 'grid',
'integrated_edit_field13' => 'grid',
'master_info' => 'grid',
'integrated_edit_field7' => 'section',
'integrated_edit_field9' => 'section',
'integrated_edit_field8' => 'section',
'integrated_edit_field6' => 'section',
'integrated_edit_field10' => 'section',
'integrated_edit_field11' => 'section',
'integrated_edit_field' => 'section1',
'integrated_edit_field2' => 'section1',
'integrated_edit_field1' => 'section1',
'integrated_edit_field3' => 'section1',
'integrated_edit_field4' => 'section1',
'integrated_edit_field5' => 'section1' ),
'itemLocations' => array( 'tabs' => array( 'location' => 'grid',
'cellId' => 'c4' ),
'integrated_edit_field12' => array( 'location' => 'grid',
'cellId' => 'c5' ),
'integrated_edit_field13' => array( 'location' => 'grid',
'cellId' => 'c5' ),
'master_info' => array( 'location' => 'grid',
'cellId' => 'c6' ),
'integrated_edit_field7' => array( 'location' => 'section',
'cellId' => 'c1' ),
'integrated_edit_field9' => array( 'location' => 'section',
'cellId' => 'c' ),
'integrated_edit_field8' => array( 'location' => 'section',
'cellId' => 'c3' ),
'integrated_edit_field6' => array( 'location' => 'section',
'cellId' => 'c4' ),
'integrated_edit_field10' => array( 'location' => 'section',
'cellId' => 'c6' ),
'integrated_edit_field11' => array( 'location' => 'section',
'cellId' => 'c7' ),
'integrated_edit_field' => array( 'location' => 'section1',
'cellId' => 'c1' ),
'integrated_edit_field2' => array( 'location' => 'section1',
'cellId' => 'c' ),
'integrated_edit_field1' => array( 'location' => 'section1',
'cellId' => 'c2' ),
'integrated_edit_field3' => array( 'location' => 'section1',
'cellId' => 'c6' ),
'integrated_edit_field4' => array( 'location' => 'section1',
'cellId' => 'c7' ),
'integrated_edit_field5' => array( 'location' => 'section1',
'cellId' => 'c8' ) ),
'itemVisiblity' => array( 'expand_menu_button' => 2,
'expand_button' => 5 ) ),
'itemsByType' => array( 'edit_header' => array( 'edit_header' ),
'edit_message' => array( 'edit_message' ),
'edit_save' => array( 'edit_save' ),
'edit_back_list' => array( 'edit_back_list' ),
'edit_close' => array( 'edit_close' ),
'hamburger' => array( 'hamburger' ),
'edit_reset' => array( 'edit_reset' ),
'edit_view' => array( 'edit_view' ),
'tabs' => array( 'tabs' ),
'integrated_edit_field' => array( 'integrated_edit_field7',
'integrated_edit_field9',
'integrated_edit_field8',
'integrated_edit_field6',
'integrated_edit_field10',
'integrated_edit_field11',
'integrated_edit_field',
'integrated_edit_field2',
'integrated_edit_field1',
'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field5',
'integrated_edit_field12',
'integrated_edit_field13' ),
'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ),
'expand_menu_button' => array( 'expand_menu_button' ),
'collapse_button' => array( 'collapse_button' ),
'update_records' => array( 'update_records' ),
'master_info' => array( 'master_info' ),
'adminarea_link' => array( 'adminarea_link' ),
'expand_button' => array( 'expand_button' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c6' => array( 'cols' => array( 0,
1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'master_info' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 0,
1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'tabs' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 0,
1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field12',
'integrated_edit_field13' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 4 ),
'section' => array( 'cells' => array( 'c4' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field6' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c1' => array( 'cols' => array( 0,
1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field7' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field9' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field8' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c6' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field10' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c7' => array( 'cols' => array( 1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field11' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 4 ),
'section1' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c2' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c6' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field3' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c7' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field4' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c8' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field5' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 3,
'height' => 2 ) ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'verticalBar' => true,
'labeledButtons' => array( 'update_records' => array( 'update_records' => array( 'tag' => 'UPDATE_N_RECORDS',
'type' => 2 ) ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array( array( 'id' => 'main',
'horizontal' => false ) ),
'calcTotalsFor' => 1 ),
'misc' => array( 'type' => 'edit',
'breadcrumb' => false,
'nextPrev' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'edit' => array( 'updateSelected' => true ) );
			$pageArray = array( 'id' => 'edit',
'type' => 'edit',
'layoutId' => 'leftbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'edit-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_message' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'edit-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_save',
'update_records',
'edit_back_list',
'edit_close' ),
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
'top' => array( 'modelId' => 'edit-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c6',
'colspan' => 2 ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c3' ),
array( 'cell' => 'c' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c4',
'colspan' => 2 ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c5',
'colspan' => 2 ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c' => array( 'model' => 'c3',
'items' => array(  ) ),
'c4' => array( 'model' => 'c3',
'items' => array( 'tabs' ) ),
'c5' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field12',
'integrated_edit_field13' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c6' => array( 'model' => 'c3',
'items' => array( 'master_info' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c4' ),
array( 'cell' => 'c5' ) ) ),
array( 'cells' => array( array( 'cell' => 'c1',
'colspan' => 2 ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ),
array( 'cell' => 'c3' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c6' ),
array( 'cell' => 'c7' ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field7' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0,
'useFullWidth' => true ),
'c' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field9' ) ),
'c3' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field8' ) ),
'c4' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field6' ) ),
'c5' => array( 'model' => 'c1',
'items' => array(  ) ),
'c6' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field10' ) ),
'c7' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field11' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section1' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ),
array( 'cell' => 'c' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c6' ),
array( 'cell' => 'c7' ),
array( 'cell' => 'c8' ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field2' ) ),
'c2' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field1' ) ),
'c6' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field3' ) ),
'c7' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field4' ) ),
'c8' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field5' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'edit_header' => array( 'type' => 'edit_header',
'title' => array( 'page' => 'edit',
'table' => '003_actividad',
'type' => 7 ),
'font-family' => 'Roboto',
'bold' => true ),
'edit_message' => array( 'type' => 'edit_message' ),
'edit_save' => array( 'type' => 'edit_save' ),
'edit_back_list' => array( 'type' => 'edit_back_list' ),
'edit_close' => array( 'type' => 'edit_close' ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array( 'edit_reset',
'edit_view' ) ),
'edit_reset' => array( 'type' => 'edit_reset' ),
'edit_view' => array( 'type' => 'edit_view' ),
'tabs' => array( 'type' => 'tabs',
'titles' => array( array( 'text' => 'Actividad',
'type' => 0 ),
array( 'text' => '',
'type' => 0 ) ),
'locations' => array( 'section',
'section1' ),
'bsStyle' => 'default',
'panelType' => 2 ),
'integrated_edit_field7' => array( 'field' => 'ACTIVIDAD',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field9' => array( 'field' => 'RECURSOS_ASIGNADOS',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field8' => array( 'field' => 'SALDO',
'type' => 'integrated_edit_field',
'orientation' => 0,
'label' => array( 'field' => 'SALDO',
'table' => '003_actividad',
'type' => 3 ),
'updateOnEdit' => false ),
'integrated_edit_field6' => array( 'field' => 'PRODUCTO',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field10' => array( 'field' => 'DEPENDENCIA',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => true ),
'integrated_edit_field11' => array( 'field' => 'RESPONSABLE',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => true ),
'integrated_edit_field' => array( 'field' => 'PROD_ID_FK',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field2' => array( 'field' => 'VIGENCIA',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field1' => array( 'field' => 'RUBRO_ID_FK',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field3' => array( 'field' => 'TIPO',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field4' => array( 'field' => 'UEJ',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field5' => array( 'field' => 'RUBRO',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link',
'adminarea_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login' ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'logout_link' => array( 'type' => 'logout_link' ),
'expand_menu_button' => array( 'type' => 'expand_menu_button' ),
'collapse_button' => array( 'type' => 'collapse_button' ),
'update_records' => array( 'type' => 'update_records' ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( '002_producto' => 'true' ) ),
'adminarea_link' => array( 'type' => 'adminarea_link' ),
'integrated_edit_field12' => array( 'field' => 'PROGRAMADO',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field13' => array( 'field' => 'SALDO_PROG',
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