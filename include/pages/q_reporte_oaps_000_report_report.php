<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => true,
'orientation' => 'portrait',
'scale' => 100 ),
'listSearch' => array( 'alwaysOnPanelFields' => array(  ),
'searchPanel' => true,
'fixedSearchPanel' => false,
'simpleSearchOptions' => false,
'searchSaving' => false ),
'fields' => array( 'gridFields' => array( 'REC',
'BPIN',
'PRODUCTO',
'DESCPRODUCTO',
'PROD_PRESUPUESTO' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array( 'BPIN',
'VIGENCIA',
'UEJ',
'RUBRO',
'REC',
'PROD_PRESUPUESTO',
'PRODUCTO',
'PRESUPUESTO',
'DESCRUBRO',
'DESCPRODUCTO' ),
'filterFields' => array( 'UEJ',
'RUBRO',
'PRODUCTO',
'BPIN',
'VIGENCIA' ),
'fieldItems' => array( 'REC' => array( 'report_grid_field5' ),
'BPIN' => array( 'report_grid_field6' ),
'PRODUCTO' => array( 'report_grid_field8' ),
'DESCPRODUCTO' => array( 'report_grid_field9' ),
'PROD_PRESUPUESTO' => array( 'report_grid_field10' ),
'VIGENCIA' => array( 'report_group_field' ),
'UEJ' => array( 'report_group_field1' ),
'RUBRO' => array( 'report_group_field2' ),
'DESCRUBRO' => array( 'report_group_field3' ),
'PRESUPUESTO' => array( 'report_group_field4' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'export_report_pdf',
'export_report_excel',
'details_found',
'page_size',
'print_panel',
'filter_panel' ),
'below-grid' => array( 'pagination' ),
'left' => array( 'logo',
'expand_button',
'menu',
'search_panel' ),
'supertop' => array( 'expand_menu_button',
'collapse_button',
'breadcrumb',
'simple_search',
'list_options',
'loginform_login',
'username_button' ),
'grid' => array( 'report_group_field',
'report_group_field1',
'report_group_field2',
'report_group_field3',
'report_group_field4',
'report_grid_field8',
'report_grid_field5',
'report_grid_field6',
'report_grid_field9',
'report_grid_field10' ),
'top' => array(  ) ),
'formXtTags' => array( 'below-grid' => array( 'pagination' ),
'top' => array(  ) ),
'itemForms' => array( 'export_report_pdf' => 'above-grid',
'export_report_excel' => 'above-grid',
'details_found' => 'above-grid',
'page_size' => 'above-grid',
'print_panel' => 'above-grid',
'filter_panel' => 'above-grid',
'pagination' => 'below-grid',
'logo' => 'left',
'expand_button' => 'left',
'menu' => 'left',
'search_panel' => 'left',
'expand_menu_button' => 'supertop',
'collapse_button' => 'supertop',
'breadcrumb' => 'supertop',
'simple_search' => 'supertop',
'list_options' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'report_group_field' => 'grid',
'report_group_field1' => 'grid',
'report_group_field2' => 'grid',
'report_group_field3' => 'grid',
'report_group_field4' => 'grid',
'report_grid_field8' => 'grid',
'report_grid_field5' => 'grid',
'report_grid_field6' => 'grid',
'report_grid_field9' => 'grid',
'report_grid_field10' => 'grid' ),
'itemLocations' => array(  ),
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
'export_report_excel' => array( 'export_report_excel' ),
'search_panel' => array( 'search_panel' ),
'show_search_panel' => array( 'show_search_panel' ),
'-' => array( '-',
'-1' ),
'hide_search_panel' => array( 'hide_search_panel' ),
'search_panel_field' => array( 'search_panel_field',
'search_panel_field1',
'search_panel_field2',
'search_panel_field3',
'search_panel_field4',
'search_panel_field5',
'search_panel_field6',
'search_panel_field7',
'search_panel_field9',
'search_panel_field10' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ),
'adminarea_link' => array( 'adminarea_link' ),
'expand_menu_button' => array( 'expand_menu_button' ),
'collapse_button' => array( 'collapse_button' ),
'print_panel' => array( 'print_panel' ),
'print_scope' => array( 'print_scope' ),
'print_button' => array( 'print_button' ),
'print_records' => array( 'print_records' ),
'advsearch_link' => array( 'advsearch_link' ),
'report_grid_field' => array( 'report_grid_field5',
'report_grid_field6',
'report_grid_field8',
'report_grid_field9',
'report_grid_field10' ),
'report_group_field' => array( 'report_group_field',
'report_group_field1',
'report_group_field2',
'report_group_field3',
'report_group_field4' ),
'export_report_pdf' => array( 'export_report_pdf' ),
'filter_panel' => array( 'filter_panel' ),
'filter_panel_field' => array( 'filter_panel_field',
'filter_panel_field1',
'filter_panel_field2',
'filter_panel_field3',
'filter_panel_field4' ),
'expand_button' => array( 'expand_button' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 1 ),
'page' => array( 'verticalBar' => true,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array( 'details_found' => array( 'tag' => 'DISPLAYING',
'type' => 2 ) ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array( array( 'id' => 'main',
'horizontal' => false ) ),
'calcTotalsFor' => 1 ),
'misc' => array( 'type' => 'report',
'breadcrumb' => true ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'newreport' => array( 'reportInfo' => array( 'groupFields' => array( array( 'interval' => 0,
'summary' => true,
'axis' => 0,
'color' => array( 'header' => '7ACA7A',
'summary' => '90EE90' ),
'field' => 'VIGENCIA' ),
array( 'interval' => 0,
'summary' => true,
'axis' => 0,
'color' => array( 'header' => '93B7C3',
'summary' => 'ADD8E6' ),
'field' => 'UEJ' ),
array( 'interval' => 0,
'summary' => true,
'axis' => 0,
'color' => array( 'header' => 'D89AA4',
'summary' => 'FFB6C1' ),
'field' => 'RUBRO' ),
array( 'interval' => 0,
'summary' => true,
'axis' => 0,
'color' => array( 'header' => 'D8D4AE',
'summary' => 'FFFACD' ),
'field' => 'DESCRUBRO' ),
array( 'interval' => 0,
'summary' => true,
'axis' => 0,
'color' => array( 'header' => '6BD8B4',
'summary' => '7FFFD4' ),
'field' => 'PRESUPUESTO' ) ),
'fields' => array( array( 'field' => 'PRODUCTO',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'REC',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'BPIN',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'DESCPRODUCTO',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'PROD_PRESUPUESTO',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ) ),
'showData' => true,
'pageSummary' => true,
'globalSummary' => true,
'crosstab' => false,
'colors' => array(  ),
'horizSummary' => false,
'layout' => 'align',
'vertSummary' => false ) ) );
			$pageArray = array( 'id' => 'report',
'type' => 'report',
'layoutId' => 'leftbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'report-above-grid',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ),
array( 'cell' => 'c3' ) ) ),
array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_report_pdf',
'export_report_excel' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'details_found',
'page_size',
'print_panel' ) ),
'c' => array( 'model' => 'c1',
'items' => array( 'filter_panel' ) ),
'c3' => array( 'model' => 'c2',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'report-below-grid',
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
'search_panel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'leftbar-top-chart',
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
'grid' => array( 'modelId' => 'report-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'report_group_field',
'report_group_field1',
'report_group_field2',
'report_group_field3',
'report_group_field4' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'report_grid_field8',
'report_grid_field5',
'report_grid_field6',
'report_grid_field9',
'report_grid_field10' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1,
'reportInfo' => array( 'groupFields' => array( array( 'interval' => 0,
'summary' => true,
'axis' => 0,
'color' => array( 'header' => '7ACA7A',
'summary' => '90EE90' ),
'field' => 'VIGENCIA' ),
array( 'interval' => 0,
'summary' => true,
'axis' => 0,
'color' => array( 'header' => '93B7C3',
'summary' => 'ADD8E6' ),
'field' => 'UEJ' ),
array( 'interval' => 0,
'summary' => true,
'axis' => 0,
'color' => array( 'header' => 'D89AA4',
'summary' => 'FFB6C1' ),
'field' => 'RUBRO' ),
array( 'interval' => 0,
'summary' => true,
'axis' => 0,
'color' => array( 'header' => 'D8D4AE',
'summary' => 'FFFACD' ),
'field' => 'DESCRUBRO' ),
array( 'interval' => 0,
'summary' => true,
'axis' => 0,
'color' => array( 'header' => '6BD8B4',
'summary' => '7FFFD4' ),
'field' => 'PRESUPUESTO' ) ),
'fields' => array( array( 'field' => 'PRODUCTO',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'REC',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'BPIN',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'DESCPRODUCTO',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'PROD_PRESUPUESTO',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ) ),
'showData' => true,
'pageSummary' => true,
'globalSummary' => true,
'crosstab' => false,
'colors' => array(  ),
'horizSummary' => false,
'layout' => 'align',
'vertSummary' => false ) ),
'top' => array( 'modelId' => 'list-sidebar-top',
'grid' => array(  ),
'cells' => array(  ),
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
'items' => array( 'advsearch_link',
'show_search_panel',
'hide_search_panel',
'-1' ) ),
'export_report_excel' => array( 'type' => 'export_report_excel',
'buttonStyle' => 'info',
'icon' => array( 'fa' => 'file-excel-o' ) ),
'search_panel' => array( 'type' => 'search_panel',
'items' => array( 'search_panel_field',
'search_panel_field10',
'search_panel_field9',
'search_panel_field7',
'search_panel_field6',
'search_panel_field5',
'search_panel_field4',
'search_panel_field3',
'search_panel_field2',
'search_panel_field1' ) ),
'show_search_panel' => array( 'type' => 'show_search_panel' ),
'-' => array( 'type' => '-' ),
'hide_search_panel' => array( 'type' => 'hide_search_panel' ),
'search_panel_field' => array( 'field' => 'BPIN',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field1' => array( 'field' => 'DESCPRODUCTO',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field2' => array( 'field' => 'DESCRUBRO',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field3' => array( 'field' => 'PRESUPUESTO',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field4' => array( 'field' => 'PRODUCTO',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field5' => array( 'field' => 'PROD_PRESUPUESTO',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field6' => array( 'field' => 'REC',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field7' => array( 'field' => 'RUBRO',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field9' => array( 'field' => 'UEJ',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field10' => array( 'field' => 'VIGENCIA',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
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
'print_panel' => array( 'type' => 'print_panel',
'items' => array( 'print_scope',
'print_records',
'print_button' ) ),
'print_scope' => array( 'type' => 'print_scope' ),
'print_button' => array( 'type' => 'print_button' ),
'print_records' => array( 'type' => 'print_records' ),
'advsearch_link' => array( 'type' => 'advsearch_link' ),
'-1' => array( 'type' => '-' ),
'report_grid_field5' => array( 'field' => 'REC',
'type' => 'report_grid_field',
'inlineAdd' => true,
'inlineEdit' => true,
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field6' => array( 'field' => 'BPIN',
'type' => 'report_grid_field',
'inlineAdd' => true,
'inlineEdit' => true,
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field8' => array( 'field' => 'PRODUCTO',
'type' => 'report_grid_field',
'inlineAdd' => true,
'inlineEdit' => true,
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field9' => array( 'field' => 'DESCPRODUCTO',
'type' => 'report_grid_field',
'inlineAdd' => true,
'inlineEdit' => true,
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field10' => array( 'field' => 'PROD_PRESUPUESTO',
'type' => 'report_grid_field',
'inlineAdd' => true,
'inlineEdit' => true,
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_group_field' => array( 'field' => 'VIGENCIA',
'type' => 'report_group_field',
'summary' => true,
'axis' => 0,
'interval' => 0 ),
'report_group_field1' => array( 'field' => 'UEJ',
'type' => 'report_group_field',
'summary' => true,
'axis' => 0,
'interval' => 0 ),
'report_group_field2' => array( 'field' => 'RUBRO',
'type' => 'report_group_field',
'summary' => true,
'axis' => 0,
'interval' => 0 ),
'report_group_field3' => array( 'field' => 'DESCRUBRO',
'type' => 'report_group_field',
'summary' => true,
'axis' => 0,
'interval' => 0 ),
'report_group_field4' => array( 'field' => 'PRESUPUESTO',
'type' => 'report_group_field',
'summary' => true,
'axis' => 0,
'interval' => 0 ),
'export_report_pdf' => array( 'type' => 'export_report_pdf',
'targetPages' => array(  ),
'splitModes' => array(  ),
'scopes' => array(  ),
'filename' => 'RepDesagInversion',
'buttonStyle' => 'info',
'icon' => array( 'fa' => 'file-pdf-o' ) ),
'filter_panel' => array( 'type' => 'filter_panel',
'items' => array( 'filter_panel_field1',
'filter_panel_field4',
'filter_panel_field2',
'filter_panel_field',
'filter_panel_field3' ) ),
'filter_panel_field' => array( 'field' => 'UEJ',
'type' => 'filter_panel_field' ),
'filter_panel_field1' => array( 'field' => 'RUBRO',
'type' => 'filter_panel_field' ),
'filter_panel_field2' => array( 'field' => 'PRODUCTO',
'type' => 'filter_panel_field' ),
'filter_panel_field3' => array( 'field' => 'BPIN',
'type' => 'filter_panel_field' ),
'filter_panel_field4' => array( 'field' => 'VIGENCIA',
'type' => 'filter_panel_field' ),
'expand_button' => array( 'type' => 'expand_button' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>