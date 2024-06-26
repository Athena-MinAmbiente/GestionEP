<?php
			$optionsArray = array( 'list' => array( 'inlineAdd' => false,
'detailsAdd' => false,
'inlineEdit' => false,
'spreadsheetMode' => false,
'addToBottom' => false,
'delete' => true,
'updateSelected' => false,
'clickSort' => true,
'sortDropdown' => false,
'showHideFields' => false,
'reorderFields' => false,
'fieldFilter' => false,
'hideNumberOfRecords' => false ),
'allDetails' => array( 'linkType' => 0 ),
'details' => array( 'scdp_tracking' => array( 'displayPreview' => 1,
'previewPageId' => 'list',
'showCount' => true,
'hideEmptyChild' => false,
'hideEmptyPreview' => false,
'showProceedLink' => false,
'printDetails' => true ) ),
'listSearch' => array( 'alwaysOnPanelFields' => array(  ),
'searchPanel' => true,
'fixedSearchPanel' => false,
'simpleSearchOptions' => false,
'searchSaving' => false ),
'totals' => array( 'PAAU_ID' => array( 'totalsType' => '' ),
'PAA_ID_FK' => array( 'totalsType' => '' ),
'VIGENCIA' => array( 'totalsType' => '' ),
'UEJ' => array( 'totalsType' => '' ),
'RUBRO' => array( 'totalsType' => '' ),
'PRODUCTO' => array( 'totalsType' => '' ),
'ACTIVIDAD' => array( 'totalsType' => '' ),
'ACT_ID' => array( 'totalsType' => '' ),
'PROD_ID' => array( 'totalsType' => '' ),
'SOL_FECHA' => array( 'totalsType' => '' ),
'SOL_DEPENDENCIA' => array( 'totalsType' => '' ),
'OPERACION_ID_FK' => array( 'totalsType' => '' ),
'USER_REG' => array( 'totalsType' => '' ),
'VALOR_SOLICITADO' => array( 'totalsType' => '' ),
'SYS_STATUS' => array( 'totalsType' => '' ),
'NUMERO_SCDP_SIIF' => array( 'totalsType' => '' ),
'DOCUMENTO_SCDP_SIIF' => array( 'totalsType' => '' ),
'FECHA_SCDP_SIIF' => array( 'totalsType' => '' ),
'USUARIO_SCDP_SIIF' => array( 'totalsType' => '' ),
'TIPO_SOL' => array( 'totalsType' => '' ),
'NOT_MAIL' => array( 'totalsType' => '' ),
'OBS' => array( 'totalsType' => '' ),
'DESC_PAA' => array( 'totalsType' => '' ),
'ATTACH_A' => array( 'totalsType' => '' ),
'sys_user' => array( 'totalsType' => '' ),
'UNIDAD_CONTRATACION' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'PAA_ID_FK',
'SOL_FECHA',
'OPERACION_ID_FK',
'USER_REG',
'VALOR_SOLICITADO',
'UEJ',
'OBS',
'ATTACH_A',
'sys_user',
'UNIDAD_CONTRATACION' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array( 'ACTIVIDAD',
'UNIDAD_CONTRATACION',
'sys_user',
'ATTACH_A',
'DESC_PAA',
'OBS',
'NOT_MAIL',
'VIGENCIA',
'VALOR_SOLICITADO',
'USER_REG',
'UEJ',
'SYS_STATUS',
'SOL_FECHA',
'RUBRO',
'PRODUCTO',
'PAA_ID_FK',
'PAAU_ID',
'OPERACION_ID_FK' ),
'filterFields' => array( 'USER_REG',
'UEJ' ),
'inlineAddFields' => array(  ),
'inlineEditFields' => array(  ),
'fieldItems' => array( 'PAA_ID_FK' => array( 'simple_grid_field1',
'simple_grid_field4' ),
'SOL_FECHA' => array( 'simple_grid_field9',
'simple_grid_field10' ),
'OPERACION_ID_FK' => array( 'simple_grid_field11',
'simple_grid_field14' ),
'USER_REG' => array( 'simple_grid_field12',
'simple_grid_field15' ),
'VALOR_SOLICITADO' => array( 'simple_grid_field13',
'simple_grid_field17' ),
'UEJ' => array( 'grid_field',
'grid_field1' ),
'OBS' => array( 'simple_grid_field16',
'simple_grid_field18' ),
'ATTACH_A' => array( 'simple_grid_field',
'simple_grid_field5' ),
'sys_user' => array( 'simple_grid_field2',
'simple_grid_field6' ),
'UNIDAD_CONTRATACION' => array( 'simple_grid_field3',
'simple_grid_field7' ) ),
'hideEmptyFields' => array(  ),
'fieldFilterFields' => array(  ) ),
'pageLinks' => array( 'edit' => true,
'add' => true,
'view' => true,
'print' => true ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'add',
'delete',
'details_found',
'page_size',
'print_panel' ),
'below-grid' => array( 'pagination' ),
'left' => array( 'logo',
'expand_button',
'menu',
'search_panel',
'filter_panel' ),
'supertop' => array( 'expand_menu_button',
'collapse_button',
'breadcrumb',
'simple_search',
'list_options',
'loginform_login',
'username_button' ),
'top' => array( 'master_info' ),
'grid' => array( 'simple_grid_field4',
'simple_grid_field1',
'simple_grid_field10',
'simple_grid_field9',
'simple_grid_field14',
'simple_grid_field11',
'simple_grid_field15',
'simple_grid_field12',
'simple_grid_field17',
'simple_grid_field13',
'grid_field1',
'grid_field',
'simple_grid_field18',
'simple_grid_field16',
'simple_grid_field5',
'simple_grid_field',
'simple_grid_field6',
'simple_grid_field2',
'simple_grid_field7',
'simple_grid_field3',
'details_preview',
'grid_checkbox_head',
'grid_checkbox',
'grid_edit',
'grid_view',
'grid_alldetails_link',
'grid_details_link' ) ),
'formXtTags' => array( 'above-grid' => array( 'add_link',
'deleteselected_link',
'details_found',
'recsPerPage',
'print_friendly' ),
'below-grid' => array( 'pagination' ),
'top' => array( 'mastertable_block' ) ),
'itemForms' => array( 'add' => 'above-grid',
'delete' => 'above-grid',
'details_found' => 'above-grid',
'page_size' => 'above-grid',
'print_panel' => 'above-grid',
'pagination' => 'below-grid',
'logo' => 'left',
'expand_button' => 'left',
'menu' => 'left',
'search_panel' => 'left',
'filter_panel' => 'left',
'expand_menu_button' => 'supertop',
'collapse_button' => 'supertop',
'breadcrumb' => 'supertop',
'simple_search' => 'supertop',
'list_options' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'master_info' => 'top',
'simple_grid_field4' => 'grid',
'simple_grid_field1' => 'grid',
'simple_grid_field10' => 'grid',
'simple_grid_field9' => 'grid',
'simple_grid_field14' => 'grid',
'simple_grid_field11' => 'grid',
'simple_grid_field15' => 'grid',
'simple_grid_field12' => 'grid',
'simple_grid_field17' => 'grid',
'simple_grid_field13' => 'grid',
'grid_field1' => 'grid',
'grid_field' => 'grid',
'simple_grid_field18' => 'grid',
'simple_grid_field16' => 'grid',
'simple_grid_field5' => 'grid',
'simple_grid_field' => 'grid',
'simple_grid_field6' => 'grid',
'simple_grid_field2' => 'grid',
'simple_grid_field7' => 'grid',
'simple_grid_field3' => 'grid',
'details_preview' => 'grid',
'grid_checkbox_head' => 'grid',
'grid_checkbox' => 'grid',
'grid_edit' => 'grid',
'grid_view' => 'grid',
'grid_alldetails_link' => 'grid',
'grid_details_link' => 'grid' ),
'itemLocations' => array( 'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field10' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field9' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field14' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field11' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field15' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field12' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'simple_grid_field17' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'simple_grid_field13' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'grid_field1' => array( 'location' => 'grid',
'cellId' => 'headcell_field5' ),
'grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'simple_grid_field18' => array( 'location' => 'grid',
'cellId' => 'headcell_field6' ),
'simple_grid_field16' => array( 'location' => 'grid',
'cellId' => 'cell_field6' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'headcell_field7' ),
'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field7' ),
'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'headcell_field8' ),
'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field8' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'headcell_field9' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_field9' ),
'details_preview' => array( 'location' => 'grid',
'cellId' => 'cell_dpreview' ),
'grid_checkbox_head' => array( 'location' => 'grid',
'cellId' => 'headcell_checkbox' ),
'grid_checkbox' => array( 'location' => 'grid',
'cellId' => 'cell_checkbox' ),
'grid_edit' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_view' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_alldetails_link' => array( 'location' => 'grid',
'cellId' => 'cell_details' ),
'grid_details_link' => array( 'location' => 'grid',
'cellId' => 'cell_details' ) ),
'itemVisiblity' => array( 'breadcrumb' => 5,
'expand_menu_button' => 2,
'print_panel' => 5,
'expand_button' => 5 ) ),
'itemsByType' => array( 'page_size' => array( 'page_size' ),
'details_found' => array( 'details_found' ),
'breadcrumb' => array( 'breadcrumb' ),
'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'simple_search' => array( 'simple_search' ),
'pagination' => array( 'pagination' ),
'list_options' => array( 'list_options' ),
'-' => array( '-3',
'-',
'-1',
'-2' ),
'advsearch_link' => array( 'advsearch_link' ),
'delete_selected' => array( 'delete_selected' ),
'delete' => array( 'delete' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ),
'adminarea_link' => array( 'adminarea_link' ),
'expand_menu_button' => array( 'expand_menu_button' ),
'collapse_button' => array( 'collapse_button' ),
'add' => array( 'add' ),
'print_panel' => array( 'print_panel' ),
'print_scope' => array( 'print_scope' ),
'print_button' => array( 'print_button' ),
'print_records' => array( 'print_records' ),
'export' => array( 'export' ),
'export_selected' => array( 'export_selected' ),
'import' => array( 'import' ),
'search_panel' => array( 'search_panel' ),
'show_search_panel' => array( 'show_search_panel' ),
'hide_search_panel' => array( 'hide_search_panel' ),
'search_panel_field' => array( 'search_panel_field',
'search_panel_field2',
'search_panel_field3',
'search_panel_field13',
'search_panel_field14',
'search_panel_field15',
'search_panel_field16',
'search_panel_field18',
'search_panel_field20',
'search_panel_field21',
'search_panel_field23',
'search_panel_field24',
'search_panel_field27',
'search_panel_field28',
'search_panel_field1',
'search_panel_field4',
'search_panel_field5',
'search_panel_field6' ),
'master_info' => array( 'master_info' ),
'filter_panel' => array( 'filter_panel' ),
'filter_panel_field' => array( 'filter_panel_field',
'filter_panel_field1' ),
'print_details' => array( 'print_details' ),
'grid_field' => array( 'simple_grid_field1',
'simple_grid_field9',
'simple_grid_field11',
'simple_grid_field12',
'simple_grid_field13',
'grid_field',
'simple_grid_field16',
'simple_grid_field',
'simple_grid_field2',
'simple_grid_field3' ),
'grid_field_label' => array( 'simple_grid_field4',
'simple_grid_field10',
'simple_grid_field14',
'simple_grid_field15',
'simple_grid_field17',
'grid_field1',
'simple_grid_field18',
'simple_grid_field5',
'simple_grid_field6',
'simple_grid_field7' ),
'details_preview' => array( 'details_preview' ),
'grid_checkbox_head' => array( 'grid_checkbox_head' ),
'grid_edit' => array( 'grid_edit' ),
'grid_view' => array( 'grid_view' ),
'grid_checkbox' => array( 'grid_checkbox' ),
'grid_alldetails_link' => array( 'grid_alldetails_link' ),
'grid_details_link' => array( 'grid_details_link' ),
'expand_button' => array( 'expand_button' ) ),
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
'headcell_details' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'PAA_ID_FK_fieldheadercolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'SOL_FECHA_fieldheadercolumn' ),
'items' => array( 'simple_grid_field10' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'OPERACION_ID_FK_fieldheadercolumn' ),
'items' => array( 'simple_grid_field14' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 6 ),
'rows' => array( 0 ),
'tags' => array( 'USER_REG_fieldheadercolumn' ),
'items' => array( 'simple_grid_field15' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 7 ),
'rows' => array( 0 ),
'tags' => array( 'VALOR_SOLICITADO_fieldheadercolumn' ),
'items' => array( 'simple_grid_field17' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field5' => array( 'cols' => array( 8 ),
'rows' => array( 0 ),
'tags' => array( 'UEJ_fieldheadercolumn' ),
'items' => array( 'grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field6' => array( 'cols' => array( 9 ),
'rows' => array( 0 ),
'tags' => array( 'OBS_fieldheadercolumn' ),
'items' => array( 'simple_grid_field18' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field7' => array( 'cols' => array( 10 ),
'rows' => array( 0 ),
'tags' => array( 'ATTACH_A_fieldheadercolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field8' => array( 'cols' => array( 11 ),
'rows' => array( 0 ),
'tags' => array( 'sys_user_fieldheadercolumn' ),
'items' => array( 'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field9' => array( 'cols' => array( 12 ),
'rows' => array( 0 ),
'tags' => array( 'UNIDAD_CONTRATACION_fieldheadercolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'edit_column',
'view_column' ),
'items' => array( 'grid_edit',
'grid_view' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'checkbox_column' ),
'items' => array( 'grid_checkbox' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_details' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'grid_alldetails_link',
'grid_details_link' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'PAA_ID_FK_fieldcolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'SOL_FECHA_fieldcolumn' ),
'items' => array( 'simple_grid_field9' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'OPERACION_ID_FK_fieldcolumn' ),
'items' => array( 'simple_grid_field11' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 6 ),
'rows' => array( 1 ),
'tags' => array( 'USER_REG_fieldcolumn' ),
'items' => array( 'simple_grid_field12' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 7 ),
'rows' => array( 1 ),
'tags' => array( 'VALOR_SOLICITADO_fieldcolumn' ),
'items' => array( 'simple_grid_field13' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 8 ),
'rows' => array( 1 ),
'tags' => array( 'UEJ_fieldcolumn' ),
'items' => array( 'grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field6' => array( 'cols' => array( 9 ),
'rows' => array( 1 ),
'tags' => array( 'OBS_fieldcolumn' ),
'items' => array( 'simple_grid_field16' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field7' => array( 'cols' => array( 10 ),
'rows' => array( 1 ),
'tags' => array( 'ATTACH_A_fieldcolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field8' => array( 'cols' => array( 11 ),
'rows' => array( 1 ),
'tags' => array( 'sys_user_fieldcolumn' ),
'items' => array( 'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field9' => array( 'cols' => array( 12 ),
'rows' => array( 1 ),
'tags' => array( 'UNIDAD_CONTRATACION_fieldcolumn' ),
'items' => array( 'simple_grid_field3' ),
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
'footcell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_details' => array( 'cols' => array( 2 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 3 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 4 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 5 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field3' => array( 'cols' => array( 6 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field4' => array( 'cols' => array( 7 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field5' => array( 'cols' => array( 8 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field6' => array( 'cols' => array( 9 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field7' => array( 'cols' => array( 10 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field8' => array( 'cols' => array( 11 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field9' => array( 'cols' => array( 12 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 13,
'height' => 4 ) ) ),
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
'forms' => array( 'above-grid' => array( 'modelId' => 'list-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add',
'delete' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'details_found',
'page_size',
'print_panel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'list-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'pagination' ) ) ),
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
'items' => array( 'menu',
'search_panel',
'filter_panel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'leftbar-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'expand_menu_button',
'collapse_button',
'breadcrumb' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'simple_search',
'list_options',
'loginform_login',
'username_button' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'list-sidebar-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'master_info' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_icons' ),
array( 'cell' => 'headcell_checkbox' ),
array( 'cell' => 'headcell_details' ),
array( 'cell' => 'headcell_field' ),
array( 'cell' => 'headcell_field1' ),
array( 'cell' => 'headcell_field2' ),
array( 'cell' => 'headcell_field3' ),
array( 'cell' => 'headcell_field4' ),
array( 'cell' => 'headcell_field5' ),
array( 'cell' => 'headcell_field6' ),
array( 'cell' => 'headcell_field7' ),
array( 'cell' => 'headcell_field8' ),
array( 'cell' => 'headcell_field9' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_icons' ),
array( 'cell' => 'cell_checkbox' ),
array( 'cell' => 'cell_details' ),
array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_field1' ),
array( 'cell' => 'cell_field2' ),
array( 'cell' => 'cell_field3' ),
array( 'cell' => 'cell_field4' ),
array( 'cell' => 'cell_field5' ),
array( 'cell' => 'cell_field6' ),
array( 'cell' => 'cell_field7' ),
array( 'cell' => 'cell_field8' ),
array( 'cell' => 'cell_field9' ) ) ),
array( 'cells' => array( array( 'cell' => 'cell_dpreview',
'colspan' => 13 ) ),
'section' => 'body' ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_icons' ),
array( 'cell' => 'footcell_checkbox' ),
array( 'cell' => 'footcell_details' ),
array( 'cell' => 'footcell_field' ),
array( 'cell' => 'footcell_field1' ),
array( 'cell' => 'footcell_field2' ),
array( 'cell' => 'footcell_field3' ),
array( 'cell' => 'footcell_field4' ),
array( 'cell' => 'footcell_field5' ),
array( 'cell' => 'footcell_field6' ),
array( 'cell' => 'footcell_field7' ),
array( 'cell' => 'footcell_field8' ),
array( 'cell' => 'footcell_field9' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'PAA_ID_FK',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field1' ),
'field' => 'PAA_ID_FK',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field10' ),
'field' => 'SOL_FECHA',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field9' ),
'field' => 'SOL_FECHA',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field14' ),
'field' => 'OPERACION_ID_FK',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field11' ),
'field' => 'OPERACION_ID_FK',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field15' ),
'field' => 'USER_REG',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field12' ),
'field' => 'USER_REG',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field17' ),
'field' => 'VALOR_SOLICITADO',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field13' ),
'field' => 'VALOR_SOLICITADO',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field5' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field1' ),
'field' => 'UEJ',
'columnName' => 'field' ),
'cell_field5' => array( 'model' => 'cell_field',
'items' => array( 'grid_field' ),
'field' => 'UEJ',
'columnName' => 'field' ),
'footcell_field5' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field6' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field18' ),
'field' => 'OBS',
'columnName' => 'field' ),
'cell_field6' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field16' ),
'field' => 'OBS',
'columnName' => 'field' ),
'footcell_field6' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field7' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'ATTACH_A',
'columnName' => 'field' ),
'cell_field7' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'ATTACH_A',
'columnName' => 'field' ),
'footcell_field7' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field8' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field6' ),
'field' => 'sys_user',
'columnName' => 'field' ),
'cell_field8' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field2' ),
'field' => 'sys_user',
'columnName' => 'field' ),
'footcell_field8' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field9' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field7' ),
'field' => 'UNIDAD_CONTRATACION',
'columnName' => 'field' ),
'cell_field9' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'UNIDAD_CONTRATACION',
'columnName' => 'field' ),
'footcell_field9' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'cell_dpreview' => array( 'model' => 'cell_dpreview',
'items' => array( 'details_preview' ) ),
'headcell_checkbox' => array( 'model' => 'headcell_checkbox',
'items' => array( 'grid_checkbox_head' ) ),
'cell_checkbox' => array( 'model' => 'cell_checkbox',
'items' => array( 'grid_checkbox' ) ),
'footcell_checkbox' => array( 'model' => 'footcell_checkbox',
'items' => array(  ) ),
'headcell_icons' => array( 'model' => 'headcell_icons',
'items' => array(  ) ),
'cell_icons' => array( 'model' => 'cell_icons',
'items' => array( 'grid_edit',
'grid_view' ) ),
'footcell_icons' => array( 'model' => 'footcell_icons',
'items' => array(  ) ),
'headcell_details' => array( 'model' => 'headcell_details',
'items' => array(  ) ),
'cell_details' => array( 'model' => 'cell_details',
'items' => array( 'grid_alldetails_link',
'grid_details_link' ) ),
'footcell_details' => array( 'model' => 'footcell_details',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'page_size' => array( 'type' => 'page_size' ),
'details_found' => array( 'type' => 'details_found' ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'simple_search' => array( 'type' => 'simple_search' ),
'pagination' => array( 'type' => 'pagination' ),
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
'-3' => array( 'type' => '-' ),
'advsearch_link' => array( 'type' => 'advsearch_link' ),
'delete_selected' => array( 'type' => 'delete_selected' ),
'delete' => array( 'type' => 'delete' ),
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
'add' => array( 'type' => 'add',
'label' => array( 'type' => 0,
'text' => 'Nuevo CDP' ) ),
'print_panel' => array( 'type' => 'print_panel',
'items' => array( 'print_scope',
'print_details',
'print_records',
'print_button' ) ),
'print_scope' => array( 'type' => 'print_scope' ),
'print_button' => array( 'type' => 'print_button' ),
'print_records' => array( 'type' => 'print_records' ),
'export' => array( 'type' => 'export' ),
'-' => array( 'type' => '-' ),
'export_selected' => array( 'type' => 'export_selected' ),
'-1' => array( 'type' => '-' ),
'import' => array( 'type' => 'import' ),
'-2' => array( 'type' => '-' ),
'search_panel' => array( 'type' => 'search_panel',
'items' => array( 'search_panel_field',
'search_panel_field6',
'search_panel_field5',
'search_panel_field4',
'search_panel_field1',
'search_panel_field3',
'search_panel_field2',
'search_panel_field28',
'search_panel_field27',
'search_panel_field24',
'search_panel_field23',
'search_panel_field21',
'search_panel_field20',
'search_panel_field18',
'search_panel_field16',
'search_panel_field15',
'search_panel_field14',
'search_panel_field13' ) ),
'show_search_panel' => array( 'type' => 'show_search_panel' ),
'hide_search_panel' => array( 'type' => 'hide_search_panel' ),
'search_panel_field' => array( 'field' => 'ACTIVIDAD',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field2' => array( 'field' => 'NOT_MAIL',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field3' => array( 'field' => 'OBS',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field13' => array( 'field' => 'OPERACION_ID_FK',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field14' => array( 'field' => 'PAAU_ID',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field15' => array( 'field' => 'PAA_ID_FK',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field16' => array( 'field' => 'PRODUCTO',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field18' => array( 'field' => 'RUBRO',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field20' => array( 'field' => 'SOL_FECHA',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field21' => array( 'field' => 'SYS_STATUS',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field23' => array( 'field' => 'UEJ',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field24' => array( 'field' => 'USER_REG',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field27' => array( 'field' => 'VALOR_SOLICITADO',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field28' => array( 'field' => 'VIGENCIA',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'paa_master_stat_4_c' => 'true',
'paa_master_stat_4_c_nopaa' => 'true' ) ),
'search_panel_field1' => array( 'field' => 'DESC_PAA',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'filter_panel' => array( 'type' => 'filter_panel',
'items' => array( 'filter_panel_field',
'filter_panel_field1' ) ),
'filter_panel_field' => array( 'field' => 'USER_REG',
'type' => 'filter_panel_field' ),
'filter_panel_field1' => array( 'field' => 'UEJ',
'type' => 'filter_panel_field' ),
'search_panel_field4' => array( 'field' => 'ATTACH_A',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field5' => array( 'field' => 'sys_user',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'print_details' => array( 'type' => 'print_details',
'tables' => array( 'scdp_tracking' => true ) ),
'search_panel_field6' => array( 'field' => 'UNIDAD_CONTRATACION',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'simple_grid_field1' => array( 'field' => 'PAA_ID_FK',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field4' => array( 'type' => 'grid_field_label',
'field' => 'PAA_ID_FK' ),
'simple_grid_field9' => array( 'field' => 'SOL_FECHA',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field10' => array( 'type' => 'grid_field_label',
'field' => 'SOL_FECHA' ),
'simple_grid_field11' => array( 'field' => 'OPERACION_ID_FK',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field14' => array( 'type' => 'grid_field_label',
'field' => 'OPERACION_ID_FK' ),
'simple_grid_field12' => array( 'field' => 'USER_REG',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field15' => array( 'type' => 'grid_field_label',
'field' => 'USER_REG' ),
'simple_grid_field13' => array( 'field' => 'VALOR_SOLICITADO',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field17' => array( 'type' => 'grid_field_label',
'field' => 'VALOR_SOLICITADO' ),
'grid_field' => array( 'field' => 'UEJ',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'grid_field1' => array( 'type' => 'grid_field_label',
'field' => 'UEJ' ),
'simple_grid_field16' => array( 'field' => 'OBS',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field18' => array( 'type' => 'grid_field_label',
'field' => 'OBS' ),
'simple_grid_field' => array( 'field' => 'ATTACH_A',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'label' => array( 'field' => 'ATTACH_A',
'table' => 'paa_master_pscdp_0',
'type' => 3 ) ),
'simple_grid_field5' => array( 'type' => 'grid_field_label',
'field' => 'ATTACH_A' ),
'simple_grid_field2' => array( 'field' => 'sys_user',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field6' => array( 'type' => 'grid_field_label',
'field' => 'sys_user' ),
'simple_grid_field3' => array( 'field' => 'UNIDAD_CONTRATACION',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field7' => array( 'type' => 'grid_field_label',
'field' => 'UNIDAD_CONTRATACION' ),
'details_preview' => array( 'type' => 'details_preview',
'table' => 'scdp_tracking',
'items' => array(  ),
'popup' => false,
'hideEmptyPreview' => false,
'proceedLink' => false,
'pageId' => 'list' ),
'grid_checkbox_head' => array( 'type' => 'grid_checkbox_head' ),
'grid_edit' => array( 'type' => 'grid_edit',
'label' => array( 'type' => 0,
'text' => 'Gestionar' ),
'icon' => array( 'glyph' => 'edit' ),
'buttonStyle' => 'success',
'buttonSize' => 'normal' ),
'grid_view' => array( 'type' => 'grid_view',
'buttonStyle' => 'info' ),
'grid_checkbox' => array( 'type' => 'grid_checkbox' ),
'grid_alldetails_link' => array( 'type' => 'grid_alldetails_link' ),
'grid_details_link' => array( 'type' => 'grid_details_link',
'table' => 'scdp_tracking',
'badge' => true,
'hideIfNone' => false,
'showCount' => true ),
'expand_button' => array( 'type' => 'expand_button' ) ),
'dbProps' => array(  ),
'spreadsheetGrid' => false,
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>