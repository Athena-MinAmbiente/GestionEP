<?php
$tdatatparam_publicarsecop = array();
$tdatatparam_publicarsecop[".searchableFields"] = array();
$tdatatparam_publicarsecop[".ShortName"] = "tparam_publicarsecop";
$tdatatparam_publicarsecop[".OwnerID"] = "";
$tdatatparam_publicarsecop[".OriginalTable"] = "tparam_publicarsecop";


$tdatatparam_publicarsecop[".pagesByType"] = my_json_decode( "{}" );
$tdatatparam_publicarsecop[".originalPagesByType"] = $tdatatparam_publicarsecop[".pagesByType"];
$tdatatparam_publicarsecop[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatatparam_publicarsecop[".originalPages"] = $tdatatparam_publicarsecop[".pages"];
$tdatatparam_publicarsecop[".defaultPages"] = my_json_decode( "{}" );
$tdatatparam_publicarsecop[".originalDefaultPages"] = $tdatatparam_publicarsecop[".defaultPages"];

//	field labels
$fieldLabelstparam_publicarsecop = array();
$fieldToolTipstparam_publicarsecop = array();
$pageTitlestparam_publicarsecop = array();
$placeHolderstparam_publicarsecop = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_publicarsecop["Spanish"] = array();
	$fieldToolTipstparam_publicarsecop["Spanish"] = array();
	$placeHolderstparam_publicarsecop["Spanish"] = array();
	$pageTitlestparam_publicarsecop["Spanish"] = array();
	$fieldLabelstparam_publicarsecop["Spanish"]["snid"] = "Snid";
	$fieldToolTipstparam_publicarsecop["Spanish"]["snid"] = "";
	$placeHolderstparam_publicarsecop["Spanish"]["snid"] = "";
	$fieldLabelstparam_publicarsecop["Spanish"]["sn"] = "Sn";
	$fieldToolTipstparam_publicarsecop["Spanish"]["sn"] = "";
	$placeHolderstparam_publicarsecop["Spanish"]["sn"] = "";
	if (count($fieldToolTipstparam_publicarsecop["Spanish"]))
		$tdatatparam_publicarsecop[".isUseToolTips"] = true;
}


	$tdatatparam_publicarsecop[".NCSearch"] = true;



$tdatatparam_publicarsecop[".shortTableName"] = "tparam_publicarsecop";
$tdatatparam_publicarsecop[".nSecOptions"] = 0;

$tdatatparam_publicarsecop[".mainTableOwnerID"] = "";
$tdatatparam_publicarsecop[".entityType"] = 0;
$tdatatparam_publicarsecop[".connId"] = "mincit_global_20x_at_127_0_0_1";


$tdatatparam_publicarsecop[".strOriginalTableName"] = "tparam_publicarsecop";

	



$tdatatparam_publicarsecop[".showAddInPopup"] = false;

$tdatatparam_publicarsecop[".showEditInPopup"] = false;

$tdatatparam_publicarsecop[".showViewInPopup"] = false;

$tdatatparam_publicarsecop[".listAjax"] = false;
//	temporary
//$tdatatparam_publicarsecop[".listAjax"] = false;

	$tdatatparam_publicarsecop[".audit"] = true;

	$tdatatparam_publicarsecop[".locking"] = true;


$pages = $tdatatparam_publicarsecop[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_publicarsecop[".edit"] = true;
	$tdatatparam_publicarsecop[".afterEditAction"] = 1;
	$tdatatparam_publicarsecop[".closePopupAfterEdit"] = 1;
	$tdatatparam_publicarsecop[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_publicarsecop[".add"] = true;
$tdatatparam_publicarsecop[".afterAddAction"] = 1;
$tdatatparam_publicarsecop[".closePopupAfterAdd"] = 1;
$tdatatparam_publicarsecop[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_publicarsecop[".list"] = true;
}



$tdatatparam_publicarsecop[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_publicarsecop[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_publicarsecop[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_publicarsecop[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_publicarsecop[".printFriendly"] = true;
}



$tdatatparam_publicarsecop[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_publicarsecop[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_publicarsecop[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_publicarsecop[".isUseAjaxSuggest"] = true;



												

$tdatatparam_publicarsecop[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_publicarsecop[".buttonsAdded"] = false;

$tdatatparam_publicarsecop[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_publicarsecop[".isUseTimeForSearch"] = false;


$tdatatparam_publicarsecop[".badgeColor"] = "DC143C";


$tdatatparam_publicarsecop[".allSearchFields"] = array();
$tdatatparam_publicarsecop[".filterFields"] = array();
$tdatatparam_publicarsecop[".requiredSearchFields"] = array();

$tdatatparam_publicarsecop[".googleLikeFields"] = array();
$tdatatparam_publicarsecop[".googleLikeFields"][] = "snid";
$tdatatparam_publicarsecop[".googleLikeFields"][] = "sn";



$tdatatparam_publicarsecop[".tableType"] = "list";

$tdatatparam_publicarsecop[".printerPageOrientation"] = 0;
$tdatatparam_publicarsecop[".nPrinterPageScale"] = 100;

$tdatatparam_publicarsecop[".nPrinterSplitRecords"] = 40;

$tdatatparam_publicarsecop[".geocodingEnabled"] = false;










$tdatatparam_publicarsecop[".pageSize"] = 20;

$tdatatparam_publicarsecop[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatparam_publicarsecop[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_publicarsecop[".orderindexes"] = array();


$tdatatparam_publicarsecop[".sqlHead"] = "SELECT snid,  	sn";
$tdatatparam_publicarsecop[".sqlFrom"] = "FROM tparam_publicarsecop";
$tdatatparam_publicarsecop[".sqlWhereExpr"] = "";
$tdatatparam_publicarsecop[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_publicarsecop[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_publicarsecop[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_publicarsecop[".highlightSearchResults"] = true;

$tableKeystparam_publicarsecop = array();
$tableKeystparam_publicarsecop[] = "snid";
$tdatatparam_publicarsecop[".Keys"] = $tableKeystparam_publicarsecop;


$tdatatparam_publicarsecop[".hideMobileList"] = array();




//	snid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "snid";
	$fdata["GoodName"] = "snid";
	$fdata["ownerTable"] = "tparam_publicarsecop";
	$fdata["Label"] = GetFieldLabel("tparam_publicarsecop","snid");
	$fdata["FieldType"] = 16;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "snid";

		$fdata["sourceSingle"] = "snid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "snid";

	
	
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


	$tdatatparam_publicarsecop["snid"] = $fdata;
		$tdatatparam_publicarsecop[".searchableFields"][] = "snid";
//	sn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sn";
	$fdata["GoodName"] = "sn";
	$fdata["ownerTable"] = "tparam_publicarsecop";
	$fdata["Label"] = GetFieldLabel("tparam_publicarsecop","sn");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sn";

		$fdata["sourceSingle"] = "sn";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sn";

	
	
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


	$tdatatparam_publicarsecop["sn"] = $fdata;
		$tdatatparam_publicarsecop[".searchableFields"][] = "sn";


$tables_data["tparam_publicarsecop"]=&$tdatatparam_publicarsecop;
$field_labels["tparam_publicarsecop"] = &$fieldLabelstparam_publicarsecop;
$fieldToolTips["tparam_publicarsecop"] = &$fieldToolTipstparam_publicarsecop;
$placeHolders["tparam_publicarsecop"] = &$placeHolderstparam_publicarsecop;
$page_titles["tparam_publicarsecop"] = &$pageTitlestparam_publicarsecop;


changeTextControlsToDate( "tparam_publicarsecop" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tparam_publicarsecop"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tparam_publicarsecop"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tparam_publicarsecop()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "snid,  	sn";
$proto0["m_strFrom"] = "FROM tparam_publicarsecop";
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
	"m_strName" => "snid",
	"m_strTable" => "tparam_publicarsecop",
	"m_srcTableName" => "tparam_publicarsecop"
));

$proto6["m_sql"] = "snid";
$proto6["m_srcTableName"] = "tparam_publicarsecop";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sn",
	"m_strTable" => "tparam_publicarsecop",
	"m_srcTableName" => "tparam_publicarsecop"
));

$proto8["m_sql"] = "sn";
$proto8["m_srcTableName"] = "tparam_publicarsecop";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tparam_publicarsecop";
$proto11["m_srcTableName"] = "tparam_publicarsecop";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "snid";
$proto11["m_columns"][] = "sn";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tparam_publicarsecop";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tparam_publicarsecop";
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
$proto0["m_srcTableName"]="tparam_publicarsecop";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_publicarsecop = createSqlQuery_tparam_publicarsecop();


	
										;

		

$tdatatparam_publicarsecop[".sqlquery"] = $queryData_tparam_publicarsecop;



$tdatatparam_publicarsecop[".hasEvents"] = false;

?>