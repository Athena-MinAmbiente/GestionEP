<?php
			$optionsArray = array( 'list' => array( 'inlineAdd' => false,
'detailsAdd' => true,
'inlineEdit' => false,
'spreadsheetMode' => false,
'addToBottom' => false,
'delete' => true,
'updateSelected' => true,
'clickSort' => true,
'sortDropdown' => false,
'showHideFields' => false,
'reorderFields' => false,
'fieldFilter' => false,
'hideNumberOfRecords' => false ),
'master' => array( '002_producto' => array( 'preview' => true ),
'q_recursos_gestor_c' => array( 'preview' => true ) ),
'listSearch' => array( 'alwaysOnPanelFields' => array(  ),
'searchPanel' => true,
'fixedSearchPanel' => false,
'simpleSearchOptions' => false,
'searchSaving' => false ),
'totals' => array( 'ACT_ID' => array( 'totalsType' => '' ),
'PROD_ID_FK' => array( 'totalsType' => '' ),
'RUBRO_ID_FK' => array( 'totalsType' => '' ),
'VIGENCIA' => array( 'totalsType' => '' ),
'TIPO' => array( 'totalsType' => '' ),
'UEJ' => array( 'totalsType' => '' ),
'RUBRO' => array( 'totalsType' => '' ),
'PRODUCTO' => array( 'totalsType' => '' ),
'ACTIVIDAD' => array( 'totalsType' => '' ),
'META' => array( 'totalsType' => '' ),
'RECURSOS_ASIGNADOS' => array( 'totalsType' => 'TOTAL' ),
'SALDO' => array( 'totalsType' => '' ),
'PROGRAMADO' => array( 'totalsType' => '' ),
'SALDO_PROG' => array( 'totalsType' => '' ),
'DEPENDENCIA' => array( 'totalsType' => '' ),
'RESPONSABLE' => array( 'totalsType' => '' ),
'USR_RESPONSABLE' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'PRODUCTO',
'ACTIVIDAD',
'RECURSOS_ASIGNADOS',
'DEPENDENCIA',
'RESPONSABLE',
'PROGRAMADO',
'SALDO_PROG' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array( 'ACTIVIDAD',
'SALDO_PROG',
'PROGRAMADO',
'RESPONSABLE',
'DEPENDENCIA',
'VIGENCIA',
'UEJ',
'TIPO',
'RUBRO_ID_FK',
'RUBRO',
'RECURSOS_ASIGNADOS',
'PROD_ID_FK',
'PRODUCTO' ),
'filterFields' => array(  ),
'inlineAddFields' => array( 'PROGRAMADO',
'SALDO_PROG' ),
'inlineEditFields' => array( 'PROGRAMADO',
'SALDO_PROG' ),
'fieldItems' => array( 'PRODUCTO' => array( 'simple_grid_field7',
'simple_grid_field' ),
'ACTIVIDAD' => array( 'simple_grid_field8',
'simple_grid_field9' ),
'RECURSOS_ASIGNADOS' => array( 'simple_grid_field10',
'simple_grid_field11',
'grid_field_totals' ),
'DEPENDENCIA' => array( 'simple_grid_field1',
'simple_grid_field3' ),
'RESPONSABLE' => array( 'simple_grid_field2',
'simple_grid_field4' ),
'PROGRAMADO' => array( 'grid_field',
'grid_field_label' ),
'SALDO_PROG' => array( 'grid_field1',
'grid_field_label1' ) ),
'hideEmptyFields' => array(  ),
'fieldFilterFields' => array(  ) ),
'pageLinks' => array( 'edit' => true,
'add' => true,
'view' => true,
'print' => true ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'left' => array( 'logo1',
'expand_button',
'menu',
'search_panel' ),
'supertop' => array( 'collapse_button',
'breadcrumb',
'simple_search',
'list_options',
'loginform_login',
'username_button' ),
'above-grid' => array( 'add',
'inline_add',
'delete',
'update_selected',
'details_found',
'page_size',
'print_panel' ),
'below-grid' => array( 'pagination' ),
'grid' => array( 'simple_grid_field',
'simple_grid_field7',
'simple_grid_field9',
'simple_grid_field8',
'simple_grid_field11',
'simple_grid_field10',
'grid_field_totals',
'simple_grid_field3',
'simple_grid_field1',
'simple_grid_field4',
'simple_grid_field2',
'grid_edit',
'grid_inline_cancel',
'grid_copy',
'grid_view',
'grid_checkbox_head',
'grid_checkbox',
'grid_field_label',
'grid_field',
'grid_field_label1',
'grid_field1' ),
'top' => array( 'master_info' ) ),
'formXtTags' => array( 'above-grid' => array( 'add_link',
'inlineadd_link',
'deleteselected_link',
'updateselected_link',
'details_found',
'recsPerPage',
'print_friendly' ),
'below-grid' => array( 'pagination' ),
'top' => array( 'mastertable_block' ) ),
'itemForms' => array( 'logo1' => 'left',
'expand_button' => 'left',
'menu' => 'left',
'search_panel' => 'left',
'collapse_button' => 'supertop',
'breadcrumb' => 'supertop',
'simple_search' => 'supertop',
'list_options' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'add' => 'above-grid',
'inline_add' => 'above-grid',
'delete' => 'above-grid',
'update_selected' => 'above-grid',
'details_found' => 'above-grid',
'page_size' => 'above-grid',
'print_panel' => 'above-grid',
'pagination' => 'below-grid',
'simple_grid_field' => 'grid',
'simple_grid_field7' => 'grid',
'simple_grid_field9' => 'grid',
'simple_grid_field8' => 'grid',
'simple_grid_field11' => 'grid',
'simple_grid_field10' => 'grid',
'grid_field_totals' => 'grid',
'simple_grid_field3' => 'grid',
'simple_grid_field1' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field2' => 'grid',
'grid_edit' => 'grid',
'grid_inline_cancel' => 'grid',
'grid_copy' => 'grid',
'grid_view' => 'grid',
'grid_checkbox_head' => 'grid',
'grid_checkbox' => 'grid',
'grid_field_label' => 'grid',
'grid_field' => 'grid',
'grid_field_label1' => 'grid',
'grid_field1' => 'grid',
'master_info' => 'top' ),
'itemLocations' => array( 'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field9' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field8' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field11' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field10' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'grid_field_totals' => array( 'location' => 'grid',
'cellId' => 'footcell_field2' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'grid_edit' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_inline_cancel' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_copy' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_view' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_checkbox_head' => array( 'location' => 'grid',
'cellId' => 'headcell_checkbox' ),
'grid_checkbox' => array( 'location' => 'grid',
'cellId' => 'cell_checkbox' ),
'grid_field_label' => array( 'location' => 'grid',
'cellId' => 'headcell_field5' ),
'grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'grid_field_label1' => array( 'location' => 'grid',
'cellId' => 'headcell_field6' ),
'grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field6' ) ),
'itemVisiblity' => array( 'breadcrumb' => 5,
'print_panel' => 5,
'expand_button' => 5 ) ),
'itemsByType' => array( 'page_size' => array( 'page_size' ),
'details_found' => array( 'details_found' ),
'breadcrumb' => array( 'breadcrumb' ),
'menu' => array( 'menu' ),
'simple_search' => array( 'simple_search' ),
'pagination' => array( 'pagination' ),
'search_panel' => array( 'search_panel' ),
'list_options' => array( 'list_options' ),
'show_search_panel' => array( 'show_search_panel' ),
'hide_search_panel' => array( 'hide_search_panel' ),
'search_panel_field' => array( 'search_panel_field',
'search_panel_field4',
'search_panel_field5',
'search_panel_field6',
'search_panel_field8',
'search_panel_field9',
'search_panel_field10',
'search_panel_field11',
'search_panel_field12',
'search_panel_field2',
'search_panel_field3',
'search_panel_field1',
'search_panel_field7' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'logout_link' => array( 'logout_link' ),
'adminarea_link' => array( 'adminarea_link' ),
'collapse_button' => array( 'collapse_button' ),
'add' => array( 'add' ),
'grid_edit' => array( 'grid_edit' ),
'grid_view' => array( 'grid_view' ),
'print_panel' => array( 'print_panel' ),
'print_scope' => array( 'print_scope' ),
'print_button' => array( 'print_button' ),
'print_records' => array( 'print_records' ),
'grid_checkbox' => array( 'grid_checkbox' ),
'grid_checkbox_head' => array( 'grid_checkbox_head' ),
'export' => array( 'export' ),
'-' => array( '-',
'-1',
'-2',
'-3' ),
'export_selected' => array( 'export_selected' ),
'import' => array( 'import' ),
'delete' => array( 'delete' ),
'delete_selected' => array( 'delete_selected' ),
'advsearch_link' => array( 'advsearch_link' ),
'grid_field' => array( 'simple_grid_field7',
'simple_grid_field8',
'simple_grid_field10',
'simple_grid_field1',
'simple_grid_field2',
'grid_field',
'grid_field1' ),
'master_info' => array( 'master_info' ),
'logo' => array( 'logo1' ),
'userinfo_link' => array( 'userinfo_link' ),
'update_selected' => array( 'update_selected' ),
'grid_field_label' => array( 'simple_grid_field',
'simple_grid_field9',
'simple_grid_field11',
'simple_grid_field3',
'simple_grid_field4',
'grid_field_label',
'grid_field_label1' ),
'grid_field_totals' => array( 'grid_field_totals' ),
'grid_copy' => array( 'grid_copy' ),
'expand_button' => array( 'expand_button' ),
'inline_add' => array( 'inline_add' ),
'grid_inline_cancel' => array( 'grid_inline_cancel' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'checkbox_column' ),
'items' => array( 'grid_checkbox_head' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array( 'PRODUCTO_fieldheadercolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'ACTIVIDAD_fieldheadercolumn' ),
'items' => array( 'simple_grid_field9' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'RECURSOS_ASIGNADOS_fieldheadercolumn' ),
'items' => array( 'simple_grid_field11' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'DEPENDENCIA_fieldheadercolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 6 ),
'rows' => array( 0 ),
'tags' => array( 'RESPONSABLE_fieldheadercolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field5' => array( 'cols' => array( 7 ),
'rows' => array( 0 ),
'tags' => array( 'PROGRAMADO_fieldheadercolumn' ),
'items' => array( 'grid_field_label' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field6' => array( 'cols' => array( 8 ),
'rows' => array( 0 ),
'tags' => array( 'SALDO_PROG_fieldheadercolumn' ),
'items' => array( 'grid_field_label1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'edit_column',
'inline_cancel',
'copy_column',
'view_column' ),
'items' => array( 'grid_edit',
'grid_inline_cancel',
'grid_copy',
'grid_view' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'checkbox_column' ),
'items' => array( 'grid_checkbox' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array( 'PRODUCTO_fieldcolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'ACTIVIDAD_fieldcolumn' ),
'items' => array( 'simple_grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'RECURSOS_ASIGNADOS_fieldcolumn' ),
'items' => array( 'simple_grid_field10' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'DEPENDENCIA_fieldcolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 6 ),
'rows' => array( 1 ),
'tags' => array( 'RESPONSABLE_fieldcolumn' ),
'items' => array( 'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 7 ),
'rows' => array( 1 ),
'tags' => array( 'PROGRAMADO_fieldcolumn' ),
'items' => array( 'grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field6' => array( 'cols' => array( 8 ),
'rows' => array( 1 ),
'tags' => array( 'SALDO_PROG_fieldcolumn' ),
'items' => array( 'grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 2 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 3 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 4 ),
'rows' => array( 2 ),
'tags' => array( 'RECURSOS_ASIGNADOS_fieldfootercolumn' ),
'items' => array( 'grid_field_totals' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field3' => array( 'cols' => array( 5 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field4' => array( 'cols' => array( 6 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field5' => array( 'cols' => array( 7 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field6' => array( 'cols' => array( 8 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 9,
'height' => 3 ) ) ),
'loginForm' => array( 'loginForm' => 1 ),
'page' => array( 'verticalBar' => true,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array( 'details_found' => array( 'tag' => 'DISPLAYING',
'type' => 2 ) ) ),
'gridType' => 0,
'recsPerRow' => 1,
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array( array( 'id' => 'main',
'horizontal' => false ) ),
'calcTotalsFor' => 1 ),
'misc' => array( 'type' => 'list',
'breadcrumb' => true ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'list',
'type' => 'list',
'layoutId' => 'leftbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'left' => array( 'modelId' => 'leftbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c0' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c0' => array( 'model' => 'c0',
'items' => array( 'logo1',
'expand_button' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c1' => array( 'model' => 'c1',
'items' => array( 'menu',
'search_panel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'leftbar-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'collapse_button',
'breadcrumb' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'simple_search',
'list_options',
'loginform_login',
'username_button' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'list-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add',
'inline_add',
'delete',
'update_selected' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'details_found',
'page_size',
'print_panel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'list-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'pagination' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_icons' ),
array( 'cell' => 'headcell_checkbox' ),
array( 'cell' => 'headcell_field' ),
array( 'cell' => 'headcell_field1' ),
array( 'cell' => 'headcell_field2' ),
array( 'cell' => 'headcell_field3' ),
array( 'cell' => 'headcell_field4' ),
array( 'cell' => 'headcell_field5' ),
array( 'cell' => 'headcell_field6' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_icons' ),
array( 'cell' => 'cell_checkbox' ),
array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_field1' ),
array( 'cell' => 'cell_field2' ),
array( 'cell' => 'cell_field3' ),
array( 'cell' => 'cell_field4' ),
array( 'cell' => 'cell_field5' ),
array( 'cell' => 'cell_field6' ) ) ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_icons' ),
array( 'cell' => 'footcell_checkbox' ),
array( 'cell' => 'footcell_field' ),
array( 'cell' => 'footcell_field1' ),
array( 'cell' => 'footcell_field2' ),
array( 'cell' => 'footcell_field3' ),
array( 'cell' => 'footcell_field4' ),
array( 'cell' => 'footcell_field5' ),
array( 'cell' => 'footcell_field6' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'PRODUCTO',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field7' ),
'field' => 'PRODUCTO',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field9' ),
'field' => 'ACTIVIDAD',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field8' ),
'field' => 'ACTIVIDAD',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field11' ),
'field' => 'RECURSOS_ASIGNADOS',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field10' ),
'field' => 'RECURSOS_ASIGNADOS',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array( 'grid_field_totals' ),
'field' => 'RECURSOS_ASIGNADOS',
'columnName' => 'field' ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'DEPENDENCIA',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field1' ),
'field' => 'DEPENDENCIA',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'RESPONSABLE',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field2' ),
'field' => 'RESPONSABLE',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_icons' => array( 'model' => 'headcell_icons',
'items' => array(  ) ),
'cell_icons' => array( 'model' => 'cell_icons',
'items' => array( 'grid_edit',
'grid_inline_cancel',
'grid_copy',
'grid_view' ) ),
'footcell_icons' => array( 'model' => 'footcell_icons',
'items' => array(  ) ),
'headcell_checkbox' => array( 'model' => 'headcell_checkbox',
'items' => array( 'grid_checkbox_head' ) ),
'cell_checkbox' => array( 'model' => 'cell_checkbox',
'items' => array( 'grid_checkbox' ) ),
'footcell_checkbox' => array( 'model' => 'footcell_checkbox',
'items' => array(  ) ),
'headcell_field5' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field_label' ),
'field' => 'PROGRAMADO',
'columnName' => 'field' ),
'cell_field5' => array( 'model' => 'cell_field',
'items' => array( 'grid_field' ),
'field' => 'PROGRAMADO',
'columnName' => 'field' ),
'footcell_field5' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field6' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field_label1' ),
'field' => 'SALDO_PROG',
'columnName' => 'field' ),
'cell_field6' => array( 'model' => 'cell_field',
'items' => array( 'grid_field1' ),
'field' => 'SALDO_PROG',
'columnName' => 'field' ),
'footcell_field6' => array( 'model' => 'footcell_field',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'list-sidebar-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'master_info' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'page_size' => array( 'type' => 'page_size' ),
'details_found' => array( 'type' => 'details_found' ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'menu' => array( 'type' => 'menu' ),
'simple_search' => array( 'type' => 'simple_search' ),
'pagination' => array( 'type' => 'pagination' ),
'search_panel' => array( 'type' => 'search_panel',
'items' => array( 'search_panel_field',
'search_panel_field7',
'search_panel_field1',
'search_panel_field3',
'search_panel_field2',
'search_panel_field12',
'search_panel_field11',
'search_panel_field10',
'search_panel_field9',
'search_panel_field8',
'search_panel_field6',
'search_panel_field5',
'search_panel_field4' ) ),
'list_options' => array( 'type' => 'list_options',
'items' => array( 'export_selected',
'delete_selected',
'-3',
'advsearch_link',
'show_search_panel',
'hide_search_panel',
'-1',
'export',
'-2',
'import' ) ),
'show_search_panel' => array( 'type' => 'show_search_panel' ),
'hide_search_panel' => array( 'type' => 'hide_search_panel' ),
'search_panel_field' => array( 'field' => 'ACTIVIDAD',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field4' => array( 'field' => 'PRODUCTO',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field5' => array( 'field' => 'PROD_ID_FK',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field6' => array( 'field' => 'RECURSOS_ASIGNADOS',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field8' => array( 'field' => 'RUBRO',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field9' => array( 'field' => 'RUBRO_ID_FK',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field10' => array( 'field' => 'TIPO',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field11' => array( 'field' => 'UEJ',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field12' => array( 'field' => 'VIGENCIA',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link',
'adminarea_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => true ),
'logout_link' => array( 'type' => 'logout_link' ),
'adminarea_link' => array( 'type' => 'adminarea_link' ),
'collapse_button' => array( 'type' => 'collapse_button' ),
'add' => array( 'type' => 'add',
'icon' => array( 'glyph' => 'plus' ),
'buttonStyle' => 'primary',
'label' => array( 'type' => 0,
'text' => 'Nueva actividad' ) ),
'grid_edit' => array( 'type' => 'grid_edit',
'buttonStyle' => 'success' ),
'grid_view' => array( 'type' => 'grid_view',
'buttonStyle' => 'default' ),
'print_panel' => array( 'type' => 'print_panel',
'items' => array( 'print_scope',
'print_records',
'print_button' ) ),
'print_scope' => array( 'type' => 'print_scope' ),
'print_button' => array( 'type' => 'print_button' ),
'print_records' => array( 'type' => 'print_records' ),
'grid_checkbox' => array( 'type' => 'grid_checkbox' ),
'grid_checkbox_head' => array( 'type' => 'grid_checkbox_head' ),
'export' => array( 'type' => 'export' ),
'-' => array( 'type' => '-' ),
'export_selected' => array( 'type' => 'export_selected' ),
'-1' => array( 'type' => '-' ),
'import' => array( 'type' => 'import' ),
'-2' => array( 'type' => '-' ),
'delete' => array( 'type' => 'delete',
'label' => array( 'type' => 0,
'text' => 'Borrar selección' ),
'icon' => array( 'fa' => 'trash-o' ),
'buttonStyle' => 'danger' ),
'delete_selected' => array( 'type' => 'delete_selected' ),
'advsearch_link' => array( 'type' => 'advsearch_link' ),
'-3' => array( 'type' => '-' ),
'simple_grid_field7' => array( 'field' => 'PRODUCTO',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field8' => array( 'field' => 'ACTIVIDAD',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field10' => array( 'field' => 'RECURSOS_ASIGNADOS',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( '002_producto' => 'true',
'q_recursos_gestor_c' => 'true' ) ),
'logo1' => array( 'type' => 'logo' ),
'simple_grid_field1' => array( 'field' => 'DEPENDENCIA',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field2' => array( 'field' => 'RESPONSABLE',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'search_panel_field2' => array( 'field' => 'DEPENDENCIA',
'type' => 'search_panel_field',
'alwaysOnPanel' => false,
'required' => false ),
'search_panel_field3' => array( 'field' => 'RESPONSABLE',
'type' => 'search_panel_field',
'alwaysOnPanel' => false,
'required' => false ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'update_selected' => array( 'type' => 'update_selected',
'buttonStyle' => 'info',
'label' => array( 'type' => 0,
'text' => 'Actualizar selección' ) ),
'simple_grid_field' => array( 'type' => 'grid_field_label',
'field' => 'PRODUCTO' ),
'simple_grid_field9' => array( 'type' => 'grid_field_label',
'field' => 'ACTIVIDAD' ),
'simple_grid_field11' => array( 'type' => 'grid_field_label',
'field' => 'RECURSOS_ASIGNADOS' ),
'simple_grid_field3' => array( 'type' => 'grid_field_label',
'field' => 'DEPENDENCIA' ),
'simple_grid_field4' => array( 'type' => 'grid_field_label',
'field' => 'RESPONSABLE' ),
'grid_field_totals' => array( 'type' => 'grid_field_totals',
'field' => 'RECURSOS_ASIGNADOS',
'totals' => 'TOTAL' ),
'grid_copy' => array( 'type' => 'grid_copy',
'buttonStyle' => 'info' ),
'grid_field' => array( 'field' => 'PROGRAMADO',
'type' => 'grid_field',
'inlineAdd' => true,
'inlineEdit' => true ),
'grid_field_label' => array( 'type' => 'grid_field_label',
'field' => 'PROGRAMADO' ),
'search_panel_field1' => array( 'field' => 'PROGRAMADO',
'type' => 'search_panel_field',
'required' => false ),
'grid_field1' => array( 'field' => 'SALDO_PROG',
'type' => 'grid_field',
'inlineAdd' => true,
'inlineEdit' => true ),
'grid_field_label1' => array( 'type' => 'grid_field_label',
'field' => 'SALDO_PROG' ),
'search_panel_field7' => array( 'field' => 'SALDO_PROG',
'type' => 'search_panel_field',
'required' => false ),
'expand_button' => array( 'type' => 'expand_button' ),
'inline_add' => array( 'type' => 'inline_add',
'detailsOnly' => true ),
'grid_inline_cancel' => array( 'type' => 'grid_inline_cancel' ) ),
'dbProps' => array(  ),
'spreadsheetGrid' => false,
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>