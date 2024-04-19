<?php
$tdataglobal_tipo_cdp = array();
$tdataglobal_tipo_cdp[".searchableFields"] = array();
$tdataglobal_tipo_cdp[".ShortName"] = "global_tipo_cdp";
$tdataglobal_tipo_cdp[".OwnerID"] = "";
$tdataglobal_tipo_cdp[".OriginalTable"] = "global_tipo_cdp";


$tdataglobal_tipo_cdp[".pagesByType"] = my_json_decode( "{}" );
$tdataglobal_tipo_cdp[".originalPagesByType"] = $tdataglobal_tipo_cdp[".pagesByType"];
$tdataglobal_tipo_cdp[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataglobal_tipo_cdp[".originalPages"] = $tdataglobal_tipo_cdp[".pages"];
$tdataglobal_tipo_cdp[".defaultPages"] = my_json_decode( "{}" );
$tdataglobal_tipo_cdp[".originalDefaultPages"] = $tdataglobal_tipo_cdp[".defaultPages"];

//	field labels
$fieldLabelsglobal_tipo_cdp = array();
$fieldToolTipsglobal_tipo_cdp = array();
$pageTitlesglobal_tipo_cdp = array();
$placeHoldersglobal_tipo_cdp = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsglobal_tipo_cdp["Spanish"] = array();
	$fieldToolTipsglobal_tipo_cdp["Spanish"] = array();
	$placeHoldersglobal_tipo_cdp["Spanish"] = array();
	$pageTitlesglobal_tipo_cdp["Spanish"] = array();
	$fieldLabelsglobal_tipo_cdp["Spanish"]["tipo_id"] = "Tipo Id";
	$fieldToolTipsglobal_tipo_cdp["Spanish"]["tipo_id"] = "";
	$placeHoldersglobal_tipo_cdp["Spanish"]["tipo_id"] = "";
	$fieldLabelsglobal_tipo_cdp["Spanish"]["tipo_cdp"] = "Tipo Cdp";
	$fieldToolTipsglobal_tipo_cdp["Spanish"]["tipo_cdp"] = "";
	$placeHoldersglobal_tipo_cdp["Spanish"]["tipo_cdp"] = "";
	if (count($fieldToolTipsglobal_tipo_cdp["Spanish"]))
		$tdataglobal_tipo_cdp[".isUseToolTips"] = true;
}


	$tdataglobal_tipo_cdp[".NCSearch"] = true;



$tdataglobal_tipo_cdp[".shortTableName"] = "global_tipo_cdp";
$tdataglobal_tipo_cdp[".nSecOptions"] = 0;

$tdataglobal_tipo_cdp[".mainTableOwnerID"] = "";
$tdataglobal_tipo_cdp[".entityType"] = 0;
$tdataglobal_tipo_cdp[".connId"] = "mincit_global_20x_at_127_0_0_1";


$tdataglobal_tipo_cdp[".strOriginalTableName"] = "global_tipo_cdp";

	



$tdataglobal_tipo_cdp[".showAddInPopup"] = false;

$tdataglobal_tipo_cdp[".showEditInPopup"] = false;

$tdataglobal_tipo_cdp[".showViewInPopup"] = false;

$tdataglobal_tipo_cdp[".listAjax"] = false;
//	temporary
//$tdataglobal_tipo_cdp[".listAjax"] = false;

	$tdataglobal_tipo_cdp[".audit"] = true;

	$tdataglobal_tipo_cdp[".locking"] = true;


$pages = $tdataglobal_tipo_cdp[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataglobal_tipo_cdp[".edit"] = true;
	$tdataglobal_tipo_cdp[".afterEditAction"] = 1;
	$tdataglobal_tipo_cdp[".closePopupAfterEdit"] = 1;
	$tdataglobal_tipo_cdp[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataglobal_tipo_cdp[".add"] = true;
$tdataglobal_tipo_cdp[".afterAddAction"] = 1;
$tdataglobal_tipo_cdp[".closePopupAfterAdd"] = 1;
$tdataglobal_tipo_cdp[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataglobal_tipo_cdp[".list"] = true;
}



$tdataglobal_tipo_cdp[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataglobal_tipo_cdp[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataglobal_tipo_cdp[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataglobal_tipo_cdp[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataglobal_tipo_cdp[".printFriendly"] = true;
}



$tdataglobal_tipo_cdp[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataglobal_tipo_cdp[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataglobal_tipo_cdp[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataglobal_tipo_cdp[".isUseAjaxSuggest"] = true;



												

$tdataglobal_tipo_cdp[".ajaxCodeSnippetAdded"] = false;

$tdataglobal_tipo_cdp[".buttonsAdded"] = false;

$tdataglobal_tipo_cdp[".addPageEvents"] = false;

// use timepicker for search panel
$tdataglobal_tipo_cdp[".isUseTimeForSearch"] = false;


$tdataglobal_tipo_cdp[".badgeColor"] = "9ACD32";


$tdataglobal_tipo_cdp[".allSearchFields"] = array();
$tdataglobal_tipo_cdp[".filterFields"] = array();
$tdataglobal_tipo_cdp[".requiredSearchFields"] = array();

$tdataglobal_tipo_cdp[".googleLikeFields"] = array();
$tdataglobal_tipo_cdp[".googleLikeFields"][] = "tipo_id";
$tdataglobal_tipo_cdp[".googleLikeFields"][] = "tipo_cdp";



$tdataglobal_tipo_cdp[".tableType"] = "list";

$tdataglobal_tipo_cdp[".printerPageOrientation"] = 0;
$tdataglobal_tipo_cdp[".nPrinterPageScale"] = 100;

$tdataglobal_tipo_cdp[".nPrinterSplitRecords"] = 40;

$tdataglobal_tipo_cdp[".geocodingEnabled"] = false;










$tdataglobal_tipo_cdp[".pageSize"] = 20;

$tdataglobal_tipo_cdp[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataglobal_tipo_cdp[".strOrderBy"] = $tstrOrderBy;

$tdataglobal_tipo_cdp[".orderindexes"] = array();


$tdataglobal_tipo_cdp[".sqlHead"] = "SELECT tipo_id,  	tipo_cdp";
$tdataglobal_tipo_cdp[".sqlFrom"] = "FROM global_tipo_cdp";
$tdataglobal_tipo_cdp[".sqlWhereExpr"] = "";
$tdataglobal_tipo_cdp[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataglobal_tipo_cdp[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataglobal_tipo_cdp[".arrGroupsPerPage"] = $arrGPP;

$tdataglobal_tipo_cdp[".highlightSearchResults"] = true;

$tableKeysglobal_tipo_cdp = array();
$tableKeysglobal_tipo_cdp[] = "tipo_id";
$tdataglobal_tipo_cdp[".Keys"] = $tableKeysglobal_tipo_cdp;


$tdataglobal_tipo_cdp[".hideMobileList"] = array();




//	tipo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tipo_id";
	$fdata["GoodName"] = "tipo_id";
	$fdata["ownerTable"] = "global_tipo_cdp";
	$fdata["Label"] = GetFieldLabel("global_tipo_cdp","tipo_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "tipo_id";

		$fdata["sourceSingle"] = "tipo_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_id";

	
	
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


	$tdataglobal_tipo_cdp["tipo_id"] = $fdata;
		$tdataglobal_tipo_cdp[".searchableFields"][] = "tipo_id";
//	tipo_cdp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tipo_cdp";
	$fdata["GoodName"] = "tipo_cdp";
	$fdata["ownerTable"] = "global_tipo_cdp";
	$fdata["Label"] = GetFieldLabel("global_tipo_cdp","tipo_cdp");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tipo_cdp";

		$fdata["sourceSingle"] = "tipo_cdp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_cdp";

	
	
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


	$tdataglobal_tipo_cdp["tipo_cdp"] = $fdata;
		$tdataglobal_tipo_cdp[".searchableFields"][] = "tipo_cdp";


$tables_data["global_tipo_cdp"]=&$tdataglobal_tipo_cdp;
$field_labels["global_tipo_cdp"] = &$fieldLabelsglobal_tipo_cdp;
$fieldToolTips["global_tipo_cdp"] = &$fieldToolTipsglobal_tipo_cdp;
$placeHolders["global_tipo_cdp"] = &$placeHoldersglobal_tipo_cdp;
$page_titles["global_tipo_cdp"] = &$pageTitlesglobal_tipo_cdp;


changeTextControlsToDate( "global_tipo_cdp" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["global_tipo_cdp"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["global_tipo_cdp"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_global_tipo_cdp()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tipo_id,  	tipo_cdp";
$proto0["m_strFrom"] = "FROM global_tipo_cdp";
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
	"m_strName" => "tipo_id",
	"m_strTable" => "global_tipo_cdp",
	"m_srcTableName" => "global_tipo_cdp"
));

$proto6["m_sql"] = "tipo_id";
$proto6["m_srcTableName"] = "global_tipo_cdp";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_cdp",
	"m_strTable" => "global_tipo_cdp",
	"m_srcTableName" => "global_tipo_cdp"
));

$proto8["m_sql"] = "tipo_cdp";
$proto8["m_srcTableName"] = "global_tipo_cdp";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "global_tipo_cdp";
$proto11["m_srcTableName"] = "global_tipo_cdp";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "tipo_id";
$proto11["m_columns"][] = "tipo_cdp";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "global_tipo_cdp";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "global_tipo_cdp";
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
$proto0["m_srcTableName"]="global_tipo_cdp";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_global_tipo_cdp = createSqlQuery_global_tipo_cdp();


	
										;

		

$tdataglobal_tipo_cdp[".sqlquery"] = $queryData_global_tipo_cdp;



$tdataglobal_tipo_cdp[".hasEvents"] = false;

?>