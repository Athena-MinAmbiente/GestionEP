<?php
$tdatatparam_fuente_siif = array();
$tdatatparam_fuente_siif[".searchableFields"] = array();
$tdatatparam_fuente_siif[".ShortName"] = "tparam_fuente_siif";
$tdatatparam_fuente_siif[".OwnerID"] = "";
$tdatatparam_fuente_siif[".OriginalTable"] = "tparam_fuente_siif";


$tdatatparam_fuente_siif[".pagesByType"] = my_json_decode( "{}" );
$tdatatparam_fuente_siif[".originalPagesByType"] = $tdatatparam_fuente_siif[".pagesByType"];
$tdatatparam_fuente_siif[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatatparam_fuente_siif[".originalPages"] = $tdatatparam_fuente_siif[".pages"];
$tdatatparam_fuente_siif[".defaultPages"] = my_json_decode( "{}" );
$tdatatparam_fuente_siif[".originalDefaultPages"] = $tdatatparam_fuente_siif[".defaultPages"];

//	field labels
$fieldLabelstparam_fuente_siif = array();
$fieldToolTipstparam_fuente_siif = array();
$pageTitlestparam_fuente_siif = array();
$placeHolderstparam_fuente_siif = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_fuente_siif["Spanish"] = array();
	$fieldToolTipstparam_fuente_siif["Spanish"] = array();
	$placeHolderstparam_fuente_siif["Spanish"] = array();
	$pageTitlestparam_fuente_siif["Spanish"] = array();
	$fieldLabelstparam_fuente_siif["Spanish"]["fuentes_id"] = "Fuentes Id";
	$fieldToolTipstparam_fuente_siif["Spanish"]["fuentes_id"] = "";
	$placeHolderstparam_fuente_siif["Spanish"]["fuentes_id"] = "";
	$fieldLabelstparam_fuente_siif["Spanish"]["fuentes_name"] = "Fuentes Name";
	$fieldToolTipstparam_fuente_siif["Spanish"]["fuentes_name"] = "";
	$placeHolderstparam_fuente_siif["Spanish"]["fuentes_name"] = "";
	if (count($fieldToolTipstparam_fuente_siif["Spanish"]))
		$tdatatparam_fuente_siif[".isUseToolTips"] = true;
}


	$tdatatparam_fuente_siif[".NCSearch"] = true;



$tdatatparam_fuente_siif[".shortTableName"] = "tparam_fuente_siif";
$tdatatparam_fuente_siif[".nSecOptions"] = 0;

$tdatatparam_fuente_siif[".mainTableOwnerID"] = "";
$tdatatparam_fuente_siif[".entityType"] = 0;
$tdatatparam_fuente_siif[".connId"] = "sep2_at_127_0_0_1";


$tdatatparam_fuente_siif[".strOriginalTableName"] = "tparam_fuente_siif";

	



$tdatatparam_fuente_siif[".showAddInPopup"] = false;

$tdatatparam_fuente_siif[".showEditInPopup"] = false;

$tdatatparam_fuente_siif[".showViewInPopup"] = false;

$tdatatparam_fuente_siif[".listAjax"] = false;
//	temporary
//$tdatatparam_fuente_siif[".listAjax"] = false;

	$tdatatparam_fuente_siif[".audit"] = false;

	$tdatatparam_fuente_siif[".locking"] = false;


$pages = $tdatatparam_fuente_siif[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_fuente_siif[".edit"] = true;
	$tdatatparam_fuente_siif[".afterEditAction"] = 1;
	$tdatatparam_fuente_siif[".closePopupAfterEdit"] = 1;
	$tdatatparam_fuente_siif[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_fuente_siif[".add"] = true;
$tdatatparam_fuente_siif[".afterAddAction"] = 1;
$tdatatparam_fuente_siif[".closePopupAfterAdd"] = 1;
$tdatatparam_fuente_siif[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_fuente_siif[".list"] = true;
}



$tdatatparam_fuente_siif[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_fuente_siif[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_fuente_siif[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_fuente_siif[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_fuente_siif[".printFriendly"] = true;
}



$tdatatparam_fuente_siif[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_fuente_siif[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_fuente_siif[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_fuente_siif[".isUseAjaxSuggest"] = true;



												

$tdatatparam_fuente_siif[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_fuente_siif[".buttonsAdded"] = false;

$tdatatparam_fuente_siif[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_fuente_siif[".isUseTimeForSearch"] = false;


$tdatatparam_fuente_siif[".badgeColor"] = "1E90FF";


$tdatatparam_fuente_siif[".allSearchFields"] = array();
$tdatatparam_fuente_siif[".filterFields"] = array();
$tdatatparam_fuente_siif[".requiredSearchFields"] = array();

$tdatatparam_fuente_siif[".googleLikeFields"] = array();
$tdatatparam_fuente_siif[".googleLikeFields"][] = "fuentes_id";
$tdatatparam_fuente_siif[".googleLikeFields"][] = "fuentes_name";



$tdatatparam_fuente_siif[".tableType"] = "list";

$tdatatparam_fuente_siif[".printerPageOrientation"] = 0;
$tdatatparam_fuente_siif[".nPrinterPageScale"] = 100;

$tdatatparam_fuente_siif[".nPrinterSplitRecords"] = 40;

$tdatatparam_fuente_siif[".geocodingEnabled"] = false;










$tdatatparam_fuente_siif[".pageSize"] = 20;

$tdatatparam_fuente_siif[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatparam_fuente_siif[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_fuente_siif[".orderindexes"] = array();


$tdatatparam_fuente_siif[".sqlHead"] = "SELECT fuentes_id,  	fuentes_name";
$tdatatparam_fuente_siif[".sqlFrom"] = "FROM tparam_fuente_siif";
$tdatatparam_fuente_siif[".sqlWhereExpr"] = "";
$tdatatparam_fuente_siif[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_fuente_siif[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_fuente_siif[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_fuente_siif[".highlightSearchResults"] = true;

$tableKeystparam_fuente_siif = array();
$tableKeystparam_fuente_siif[] = "fuentes_id";
$tdatatparam_fuente_siif[".Keys"] = $tableKeystparam_fuente_siif;


$tdatatparam_fuente_siif[".hideMobileList"] = array();




//	fuentes_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "fuentes_id";
	$fdata["GoodName"] = "fuentes_id";
	$fdata["ownerTable"] = "tparam_fuente_siif";
	$fdata["Label"] = GetFieldLabel("tparam_fuente_siif","fuentes_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fuentes_id";

		$fdata["sourceSingle"] = "fuentes_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fuentes_id";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=1";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
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


	$tdatatparam_fuente_siif["fuentes_id"] = $fdata;
		$tdatatparam_fuente_siif[".searchableFields"][] = "fuentes_id";
//	fuentes_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fuentes_name";
	$fdata["GoodName"] = "fuentes_name";
	$fdata["ownerTable"] = "tparam_fuente_siif";
	$fdata["Label"] = GetFieldLabel("tparam_fuente_siif","fuentes_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fuentes_name";

		$fdata["sourceSingle"] = "fuentes_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fuentes_name";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
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


	$tdatatparam_fuente_siif["fuentes_name"] = $fdata;
		$tdatatparam_fuente_siif[".searchableFields"][] = "fuentes_name";


$tables_data["tparam_fuente_siif"]=&$tdatatparam_fuente_siif;
$field_labels["tparam_fuente_siif"] = &$fieldLabelstparam_fuente_siif;
$fieldToolTips["tparam_fuente_siif"] = &$fieldToolTipstparam_fuente_siif;
$placeHolders["tparam_fuente_siif"] = &$placeHolderstparam_fuente_siif;
$page_titles["tparam_fuente_siif"] = &$pageTitlestparam_fuente_siif;


changeTextControlsToDate( "tparam_fuente_siif" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tparam_fuente_siif"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tparam_fuente_siif"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tparam_fuente_siif()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "fuentes_id,  	fuentes_name";
$proto0["m_strFrom"] = "FROM tparam_fuente_siif";
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
	"m_strName" => "fuentes_id",
	"m_strTable" => "tparam_fuente_siif",
	"m_srcTableName" => "tparam_fuente_siif"
));

$proto6["m_sql"] = "fuentes_id";
$proto6["m_srcTableName"] = "tparam_fuente_siif";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fuentes_name",
	"m_strTable" => "tparam_fuente_siif",
	"m_srcTableName" => "tparam_fuente_siif"
));

$proto8["m_sql"] = "fuentes_name";
$proto8["m_srcTableName"] = "tparam_fuente_siif";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tparam_fuente_siif";
$proto11["m_srcTableName"] = "tparam_fuente_siif";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "fuentes_id";
$proto11["m_columns"][] = "fuentes_name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tparam_fuente_siif";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tparam_fuente_siif";
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
$proto0["m_srcTableName"]="tparam_fuente_siif";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_fuente_siif = createSqlQuery_tparam_fuente_siif();


	
										;

		

$tdatatparam_fuente_siif[".sqlquery"] = $queryData_tparam_fuente_siif;



$tdatatparam_fuente_siif[".hasEvents"] = false;

?>