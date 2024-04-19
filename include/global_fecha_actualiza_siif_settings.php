<?php
$tdataglobal_fecha_actualiza_siif = array();
$tdataglobal_fecha_actualiza_siif[".searchableFields"] = array();
$tdataglobal_fecha_actualiza_siif[".ShortName"] = "global_fecha_actualiza_siif";
$tdataglobal_fecha_actualiza_siif[".OwnerID"] = "";
$tdataglobal_fecha_actualiza_siif[".OriginalTable"] = "global_fecha_actualiza_siif";


$tdataglobal_fecha_actualiza_siif[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataglobal_fecha_actualiza_siif[".originalPagesByType"] = $tdataglobal_fecha_actualiza_siif[".pagesByType"];
$tdataglobal_fecha_actualiza_siif[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataglobal_fecha_actualiza_siif[".originalPages"] = $tdataglobal_fecha_actualiza_siif[".pages"];
$tdataglobal_fecha_actualiza_siif[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataglobal_fecha_actualiza_siif[".originalDefaultPages"] = $tdataglobal_fecha_actualiza_siif[".defaultPages"];

//	field labels
$fieldLabelsglobal_fecha_actualiza_siif = array();
$fieldToolTipsglobal_fecha_actualiza_siif = array();
$pageTitlesglobal_fecha_actualiza_siif = array();
$placeHoldersglobal_fecha_actualiza_siif = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsglobal_fecha_actualiza_siif["Spanish"] = array();
	$fieldToolTipsglobal_fecha_actualiza_siif["Spanish"] = array();
	$placeHoldersglobal_fecha_actualiza_siif["Spanish"] = array();
	$pageTitlesglobal_fecha_actualiza_siif["Spanish"] = array();
	$fieldLabelsglobal_fecha_actualiza_siif["Spanish"]["id_fs"] = "Id Fs";
	$fieldToolTipsglobal_fecha_actualiza_siif["Spanish"]["id_fs"] = "";
	$placeHoldersglobal_fecha_actualiza_siif["Spanish"]["id_fs"] = "";
	$fieldLabelsglobal_fecha_actualiza_siif["Spanish"]["fecha_actualiza_siif"] = "Fecha Actualización SIIF";
	$fieldToolTipsglobal_fecha_actualiza_siif["Spanish"]["fecha_actualiza_siif"] = "<p><em>Seleccione la fecha con la que quedará actualizado el archivo que va a cargar en el sistema</em></p>";
	$placeHoldersglobal_fecha_actualiza_siif["Spanish"]["fecha_actualiza_siif"] = "";
	if (count($fieldToolTipsglobal_fecha_actualiza_siif["Spanish"]))
		$tdataglobal_fecha_actualiza_siif[".isUseToolTips"] = true;
}


	$tdataglobal_fecha_actualiza_siif[".NCSearch"] = true;



$tdataglobal_fecha_actualiza_siif[".shortTableName"] = "global_fecha_actualiza_siif";
$tdataglobal_fecha_actualiza_siif[".nSecOptions"] = 0;

$tdataglobal_fecha_actualiza_siif[".mainTableOwnerID"] = "";
$tdataglobal_fecha_actualiza_siif[".entityType"] = 0;
$tdataglobal_fecha_actualiza_siif[".connId"] = "sep2_at_127_0_0_1";


$tdataglobal_fecha_actualiza_siif[".strOriginalTableName"] = "global_fecha_actualiza_siif";

	



$tdataglobal_fecha_actualiza_siif[".showAddInPopup"] = false;

$tdataglobal_fecha_actualiza_siif[".showEditInPopup"] = false;

$tdataglobal_fecha_actualiza_siif[".showViewInPopup"] = false;

$tdataglobal_fecha_actualiza_siif[".listAjax"] = false;
//	temporary
//$tdataglobal_fecha_actualiza_siif[".listAjax"] = false;

	$tdataglobal_fecha_actualiza_siif[".audit"] = true;

	$tdataglobal_fecha_actualiza_siif[".locking"] = false;


$pages = $tdataglobal_fecha_actualiza_siif[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataglobal_fecha_actualiza_siif[".edit"] = true;
	$tdataglobal_fecha_actualiza_siif[".afterEditAction"] = 1;
	$tdataglobal_fecha_actualiza_siif[".closePopupAfterEdit"] = 1;
	$tdataglobal_fecha_actualiza_siif[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataglobal_fecha_actualiza_siif[".add"] = true;
$tdataglobal_fecha_actualiza_siif[".afterAddAction"] = 1;
$tdataglobal_fecha_actualiza_siif[".closePopupAfterAdd"] = 1;
$tdataglobal_fecha_actualiza_siif[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataglobal_fecha_actualiza_siif[".list"] = true;
}



$tdataglobal_fecha_actualiza_siif[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataglobal_fecha_actualiza_siif[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataglobal_fecha_actualiza_siif[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataglobal_fecha_actualiza_siif[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataglobal_fecha_actualiza_siif[".printFriendly"] = true;
}



$tdataglobal_fecha_actualiza_siif[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataglobal_fecha_actualiza_siif[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataglobal_fecha_actualiza_siif[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataglobal_fecha_actualiza_siif[".isUseAjaxSuggest"] = true;



												

$tdataglobal_fecha_actualiza_siif[".ajaxCodeSnippetAdded"] = false;

$tdataglobal_fecha_actualiza_siif[".buttonsAdded"] = false;

$tdataglobal_fecha_actualiza_siif[".addPageEvents"] = false;

// use timepicker for search panel
$tdataglobal_fecha_actualiza_siif[".isUseTimeForSearch"] = false;


$tdataglobal_fecha_actualiza_siif[".badgeColor"] = "DB7093";


$tdataglobal_fecha_actualiza_siif[".allSearchFields"] = array();
$tdataglobal_fecha_actualiza_siif[".filterFields"] = array();
$tdataglobal_fecha_actualiza_siif[".requiredSearchFields"] = array();

$tdataglobal_fecha_actualiza_siif[".googleLikeFields"] = array();
$tdataglobal_fecha_actualiza_siif[".googleLikeFields"][] = "id_fs";
$tdataglobal_fecha_actualiza_siif[".googleLikeFields"][] = "fecha_actualiza_siif";



$tdataglobal_fecha_actualiza_siif[".tableType"] = "list";

$tdataglobal_fecha_actualiza_siif[".printerPageOrientation"] = 0;
$tdataglobal_fecha_actualiza_siif[".nPrinterPageScale"] = 100;

$tdataglobal_fecha_actualiza_siif[".nPrinterSplitRecords"] = 40;

$tdataglobal_fecha_actualiza_siif[".geocodingEnabled"] = false;










$tdataglobal_fecha_actualiza_siif[".pageSize"] = 20;

$tdataglobal_fecha_actualiza_siif[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataglobal_fecha_actualiza_siif[".strOrderBy"] = $tstrOrderBy;

$tdataglobal_fecha_actualiza_siif[".orderindexes"] = array();


$tdataglobal_fecha_actualiza_siif[".sqlHead"] = "SELECT id_fs,  	fecha_actualiza_siif";
$tdataglobal_fecha_actualiza_siif[".sqlFrom"] = "FROM global_fecha_actualiza_siif";
$tdataglobal_fecha_actualiza_siif[".sqlWhereExpr"] = "";
$tdataglobal_fecha_actualiza_siif[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataglobal_fecha_actualiza_siif[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataglobal_fecha_actualiza_siif[".arrGroupsPerPage"] = $arrGPP;

$tdataglobal_fecha_actualiza_siif[".highlightSearchResults"] = true;

$tableKeysglobal_fecha_actualiza_siif = array();
$tableKeysglobal_fecha_actualiza_siif[] = "id_fs";
$tdataglobal_fecha_actualiza_siif[".Keys"] = $tableKeysglobal_fecha_actualiza_siif;


$tdataglobal_fecha_actualiza_siif[".hideMobileList"] = array();




//	id_fs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_fs";
	$fdata["GoodName"] = "id_fs";
	$fdata["ownerTable"] = "global_fecha_actualiza_siif";
	$fdata["Label"] = GetFieldLabel("global_fecha_actualiza_siif","id_fs");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "id_fs";

		$fdata["sourceSingle"] = "id_fs";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_fs";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_fecha_actualiza_siif["id_fs"] = $fdata;
		$tdataglobal_fecha_actualiza_siif[".searchableFields"][] = "id_fs";
//	fecha_actualiza_siif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fecha_actualiza_siif";
	$fdata["GoodName"] = "fecha_actualiza_siif";
	$fdata["ownerTable"] = "global_fecha_actualiza_siif";
	$fdata["Label"] = GetFieldLabel("global_fecha_actualiza_siif","fecha_actualiza_siif");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_actualiza_siif";

		$fdata["sourceSingle"] = "fecha_actualiza_siif";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_actualiza_siif";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 10;
	$edata["LastYearFactor"] = 1;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_fecha_actualiza_siif["fecha_actualiza_siif"] = $fdata;
		$tdataglobal_fecha_actualiza_siif[".searchableFields"][] = "fecha_actualiza_siif";


$tables_data["global_fecha_actualiza_siif"]=&$tdataglobal_fecha_actualiza_siif;
$field_labels["global_fecha_actualiza_siif"] = &$fieldLabelsglobal_fecha_actualiza_siif;
$fieldToolTips["global_fecha_actualiza_siif"] = &$fieldToolTipsglobal_fecha_actualiza_siif;
$placeHolders["global_fecha_actualiza_siif"] = &$placeHoldersglobal_fecha_actualiza_siif;
$page_titles["global_fecha_actualiza_siif"] = &$pageTitlesglobal_fecha_actualiza_siif;


changeTextControlsToDate( "global_fecha_actualiza_siif" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["global_fecha_actualiza_siif"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["global_fecha_actualiza_siif"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_global_fecha_actualiza_siif()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_fs,  	fecha_actualiza_siif";
$proto0["m_strFrom"] = "FROM global_fecha_actualiza_siif";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
										;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id_fs",
	"m_strTable" => "global_fecha_actualiza_siif",
	"m_srcTableName" => "global_fecha_actualiza_siif"
));

$proto6["m_sql"] = "id_fs";
$proto6["m_srcTableName"] = "global_fecha_actualiza_siif";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_actualiza_siif",
	"m_strTable" => "global_fecha_actualiza_siif",
	"m_srcTableName" => "global_fecha_actualiza_siif"
));

$proto8["m_sql"] = "fecha_actualiza_siif";
$proto8["m_srcTableName"] = "global_fecha_actualiza_siif";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "global_fecha_actualiza_siif";
$proto11["m_srcTableName"] = "global_fecha_actualiza_siif";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_fs";
$proto11["m_columns"][] = "fecha_actualiza_siif";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "global_fecha_actualiza_siif";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "global_fecha_actualiza_siif";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="global_fecha_actualiza_siif";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_global_fecha_actualiza_siif = createSqlQuery_global_fecha_actualiza_siif();


	
										;

		

$tdataglobal_fecha_actualiza_siif[".sqlquery"] = $queryData_global_fecha_actualiza_siif;



$tdataglobal_fecha_actualiza_siif[".hasEvents"] = false;

?>