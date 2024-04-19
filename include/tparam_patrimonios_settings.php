<?php
$tdatatparam_patrimonios = array();
$tdatatparam_patrimonios[".searchableFields"] = array();
$tdatatparam_patrimonios[".ShortName"] = "tparam_patrimonios";
$tdatatparam_patrimonios[".OwnerID"] = "";
$tdatatparam_patrimonios[".OriginalTable"] = "tparam_patrimonios";


$tdatatparam_patrimonios[".pagesByType"] = my_json_decode( "{}" );
$tdatatparam_patrimonios[".originalPagesByType"] = $tdatatparam_patrimonios[".pagesByType"];
$tdatatparam_patrimonios[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatatparam_patrimonios[".originalPages"] = $tdatatparam_patrimonios[".pages"];
$tdatatparam_patrimonios[".defaultPages"] = my_json_decode( "{}" );
$tdatatparam_patrimonios[".originalDefaultPages"] = $tdatatparam_patrimonios[".defaultPages"];

//	field labels
$fieldLabelstparam_patrimonios = array();
$fieldToolTipstparam_patrimonios = array();
$pageTitlestparam_patrimonios = array();
$placeHolderstparam_patrimonios = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_patrimonios["Spanish"] = array();
	$fieldToolTipstparam_patrimonios["Spanish"] = array();
	$placeHolderstparam_patrimonios["Spanish"] = array();
	$pageTitlestparam_patrimonios["Spanish"] = array();
	$fieldLabelstparam_patrimonios["Spanish"]["patrimonioid"] = "Patrimonioid";
	$fieldToolTipstparam_patrimonios["Spanish"]["patrimonioid"] = "";
	$placeHolderstparam_patrimonios["Spanish"]["patrimonioid"] = "";
	$fieldLabelstparam_patrimonios["Spanish"]["patrimonio"] = "Patrimonio";
	$fieldToolTipstparam_patrimonios["Spanish"]["patrimonio"] = "";
	$placeHolderstparam_patrimonios["Spanish"]["patrimonio"] = "";
	if (count($fieldToolTipstparam_patrimonios["Spanish"]))
		$tdatatparam_patrimonios[".isUseToolTips"] = true;
}


	$tdatatparam_patrimonios[".NCSearch"] = true;



$tdatatparam_patrimonios[".shortTableName"] = "tparam_patrimonios";
$tdatatparam_patrimonios[".nSecOptions"] = 0;

$tdatatparam_patrimonios[".mainTableOwnerID"] = "";
$tdatatparam_patrimonios[".entityType"] = 0;
$tdatatparam_patrimonios[".connId"] = "mincit_global_20x_at_127_0_0_1";


$tdatatparam_patrimonios[".strOriginalTableName"] = "tparam_patrimonios";

	



$tdatatparam_patrimonios[".showAddInPopup"] = false;

$tdatatparam_patrimonios[".showEditInPopup"] = false;

$tdatatparam_patrimonios[".showViewInPopup"] = false;

$tdatatparam_patrimonios[".listAjax"] = false;
//	temporary
//$tdatatparam_patrimonios[".listAjax"] = false;

	$tdatatparam_patrimonios[".audit"] = true;

	$tdatatparam_patrimonios[".locking"] = true;


$pages = $tdatatparam_patrimonios[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_patrimonios[".edit"] = true;
	$tdatatparam_patrimonios[".afterEditAction"] = 1;
	$tdatatparam_patrimonios[".closePopupAfterEdit"] = 1;
	$tdatatparam_patrimonios[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_patrimonios[".add"] = true;
$tdatatparam_patrimonios[".afterAddAction"] = 1;
$tdatatparam_patrimonios[".closePopupAfterAdd"] = 1;
$tdatatparam_patrimonios[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_patrimonios[".list"] = true;
}



$tdatatparam_patrimonios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_patrimonios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_patrimonios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_patrimonios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_patrimonios[".printFriendly"] = true;
}



$tdatatparam_patrimonios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_patrimonios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_patrimonios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_patrimonios[".isUseAjaxSuggest"] = true;



												

$tdatatparam_patrimonios[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_patrimonios[".buttonsAdded"] = false;

$tdatatparam_patrimonios[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_patrimonios[".isUseTimeForSearch"] = false;


$tdatatparam_patrimonios[".badgeColor"] = "6DA5C8";


$tdatatparam_patrimonios[".allSearchFields"] = array();
$tdatatparam_patrimonios[".filterFields"] = array();
$tdatatparam_patrimonios[".requiredSearchFields"] = array();

$tdatatparam_patrimonios[".googleLikeFields"] = array();
$tdatatparam_patrimonios[".googleLikeFields"][] = "patrimonioid";
$tdatatparam_patrimonios[".googleLikeFields"][] = "patrimonio";



$tdatatparam_patrimonios[".tableType"] = "list";

$tdatatparam_patrimonios[".printerPageOrientation"] = 0;
$tdatatparam_patrimonios[".nPrinterPageScale"] = 100;

$tdatatparam_patrimonios[".nPrinterSplitRecords"] = 40;

$tdatatparam_patrimonios[".geocodingEnabled"] = false;










$tdatatparam_patrimonios[".pageSize"] = 20;

$tdatatparam_patrimonios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatparam_patrimonios[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_patrimonios[".orderindexes"] = array();


$tdatatparam_patrimonios[".sqlHead"] = "SELECT patrimonioid,  	patrimonio";
$tdatatparam_patrimonios[".sqlFrom"] = "FROM tparam_patrimonios";
$tdatatparam_patrimonios[".sqlWhereExpr"] = "";
$tdatatparam_patrimonios[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_patrimonios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_patrimonios[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_patrimonios[".highlightSearchResults"] = true;

$tableKeystparam_patrimonios = array();
$tableKeystparam_patrimonios[] = "patrimonioid";
$tdatatparam_patrimonios[".Keys"] = $tableKeystparam_patrimonios;


$tdatatparam_patrimonios[".hideMobileList"] = array();




//	patrimonioid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "patrimonioid";
	$fdata["GoodName"] = "patrimonioid";
	$fdata["ownerTable"] = "tparam_patrimonios";
	$fdata["Label"] = GetFieldLabel("tparam_patrimonios","patrimonioid");
	$fdata["FieldType"] = 16;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "patrimonioid";

		$fdata["sourceSingle"] = "patrimonioid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "patrimonioid";

	
	
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


	$tdatatparam_patrimonios["patrimonioid"] = $fdata;
		$tdatatparam_patrimonios[".searchableFields"][] = "patrimonioid";
//	patrimonio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "patrimonio";
	$fdata["GoodName"] = "patrimonio";
	$fdata["ownerTable"] = "tparam_patrimonios";
	$fdata["Label"] = GetFieldLabel("tparam_patrimonios","patrimonio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "patrimonio";

		$fdata["sourceSingle"] = "patrimonio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "patrimonio";

	
	
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


	$tdatatparam_patrimonios["patrimonio"] = $fdata;
		$tdatatparam_patrimonios[".searchableFields"][] = "patrimonio";


$tables_data["tparam_patrimonios"]=&$tdatatparam_patrimonios;
$field_labels["tparam_patrimonios"] = &$fieldLabelstparam_patrimonios;
$fieldToolTips["tparam_patrimonios"] = &$fieldToolTipstparam_patrimonios;
$placeHolders["tparam_patrimonios"] = &$placeHolderstparam_patrimonios;
$page_titles["tparam_patrimonios"] = &$pageTitlestparam_patrimonios;


changeTextControlsToDate( "tparam_patrimonios" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tparam_patrimonios"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tparam_patrimonios"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tparam_patrimonios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "patrimonioid,  	patrimonio";
$proto0["m_strFrom"] = "FROM tparam_patrimonios";
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
	"m_strName" => "patrimonioid",
	"m_strTable" => "tparam_patrimonios",
	"m_srcTableName" => "tparam_patrimonios"
));

$proto6["m_sql"] = "patrimonioid";
$proto6["m_srcTableName"] = "tparam_patrimonios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "patrimonio",
	"m_strTable" => "tparam_patrimonios",
	"m_srcTableName" => "tparam_patrimonios"
));

$proto8["m_sql"] = "patrimonio";
$proto8["m_srcTableName"] = "tparam_patrimonios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tparam_patrimonios";
$proto11["m_srcTableName"] = "tparam_patrimonios";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "patrimonioid";
$proto11["m_columns"][] = "patrimonio";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tparam_patrimonios";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tparam_patrimonios";
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
$proto0["m_srcTableName"]="tparam_patrimonios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_patrimonios = createSqlQuery_tparam_patrimonios();


	
										;

		

$tdatatparam_patrimonios[".sqlquery"] = $queryData_tparam_patrimonios;



$tdatatparam_patrimonios[".hasEvents"] = false;

?>