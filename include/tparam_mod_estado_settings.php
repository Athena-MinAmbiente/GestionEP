<?php
$tdatatparam_mod_estado = array();
$tdatatparam_mod_estado[".searchableFields"] = array();
$tdatatparam_mod_estado[".ShortName"] = "tparam_mod_estado";
$tdatatparam_mod_estado[".OwnerID"] = "";
$tdatatparam_mod_estado[".OriginalTable"] = "tparam_mod_estado";


$tdatatparam_mod_estado[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" );
$tdatatparam_mod_estado[".originalPagesByType"] = $tdatatparam_mod_estado[".pagesByType"];
$tdatatparam_mod_estado[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" ) );
$tdatatparam_mod_estado[".originalPages"] = $tdatatparam_mod_estado[".pages"];
$tdatatparam_mod_estado[".defaultPages"] = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\"}" );
$tdatatparam_mod_estado[".originalDefaultPages"] = $tdatatparam_mod_estado[".defaultPages"];

//	field labels
$fieldLabelstparam_mod_estado = array();
$fieldToolTipstparam_mod_estado = array();
$pageTitlestparam_mod_estado = array();
$placeHolderstparam_mod_estado = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_mod_estado["Spanish"] = array();
	$fieldToolTipstparam_mod_estado["Spanish"] = array();
	$placeHolderstparam_mod_estado["Spanish"] = array();
	$pageTitlestparam_mod_estado["Spanish"] = array();
	$fieldLabelstparam_mod_estado["Spanish"]["tipom_id"] = "Tipom Id";
	$fieldToolTipstparam_mod_estado["Spanish"]["tipom_id"] = "";
	$placeHolderstparam_mod_estado["Spanish"]["tipom_id"] = "";
	$fieldLabelstparam_mod_estado["Spanish"]["tipom_estado"] = "Tipom Estado";
	$fieldToolTipstparam_mod_estado["Spanish"]["tipom_estado"] = "";
	$placeHolderstparam_mod_estado["Spanish"]["tipom_estado"] = "";
	if (count($fieldToolTipstparam_mod_estado["Spanish"]))
		$tdatatparam_mod_estado[".isUseToolTips"] = true;
}


	$tdatatparam_mod_estado[".NCSearch"] = true;



$tdatatparam_mod_estado[".shortTableName"] = "tparam_mod_estado";
$tdatatparam_mod_estado[".nSecOptions"] = 0;

$tdatatparam_mod_estado[".mainTableOwnerID"] = "";
$tdatatparam_mod_estado[".entityType"] = 0;
$tdatatparam_mod_estado[".connId"] = "sep2_at_127_0_0_1";


$tdatatparam_mod_estado[".strOriginalTableName"] = "tparam_mod_estado";

	



$tdatatparam_mod_estado[".showAddInPopup"] = false;

$tdatatparam_mod_estado[".showEditInPopup"] = false;

$tdatatparam_mod_estado[".showViewInPopup"] = false;

$tdatatparam_mod_estado[".listAjax"] = false;
//	temporary
//$tdatatparam_mod_estado[".listAjax"] = false;

	$tdatatparam_mod_estado[".audit"] = true;

	$tdatatparam_mod_estado[".locking"] = true;


$pages = $tdatatparam_mod_estado[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_mod_estado[".edit"] = true;
	$tdatatparam_mod_estado[".afterEditAction"] = 1;
	$tdatatparam_mod_estado[".closePopupAfterEdit"] = 1;
	$tdatatparam_mod_estado[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_mod_estado[".add"] = true;
$tdatatparam_mod_estado[".afterAddAction"] = 1;
$tdatatparam_mod_estado[".closePopupAfterAdd"] = 1;
$tdatatparam_mod_estado[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_mod_estado[".list"] = true;
}



$tdatatparam_mod_estado[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_mod_estado[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_mod_estado[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_mod_estado[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_mod_estado[".printFriendly"] = true;
}



$tdatatparam_mod_estado[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_mod_estado[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_mod_estado[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_mod_estado[".isUseAjaxSuggest"] = true;



												

$tdatatparam_mod_estado[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_mod_estado[".buttonsAdded"] = false;

$tdatatparam_mod_estado[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_mod_estado[".isUseTimeForSearch"] = false;


$tdatatparam_mod_estado[".badgeColor"] = "9ACD32";


$tdatatparam_mod_estado[".allSearchFields"] = array();
$tdatatparam_mod_estado[".filterFields"] = array();
$tdatatparam_mod_estado[".requiredSearchFields"] = array();

$tdatatparam_mod_estado[".googleLikeFields"] = array();
$tdatatparam_mod_estado[".googleLikeFields"][] = "tipom_id";
$tdatatparam_mod_estado[".googleLikeFields"][] = "tipom_estado";



$tdatatparam_mod_estado[".tableType"] = "list";

$tdatatparam_mod_estado[".printerPageOrientation"] = 0;
$tdatatparam_mod_estado[".nPrinterPageScale"] = 100;

$tdatatparam_mod_estado[".nPrinterSplitRecords"] = 40;

$tdatatparam_mod_estado[".geocodingEnabled"] = false;










$tdatatparam_mod_estado[".pageSize"] = 20;

$tdatatparam_mod_estado[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatparam_mod_estado[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_mod_estado[".orderindexes"] = array();


$tdatatparam_mod_estado[".sqlHead"] = "SELECT tipom_id,  	tipom_estado";
$tdatatparam_mod_estado[".sqlFrom"] = "FROM tparam_mod_estado";
$tdatatparam_mod_estado[".sqlWhereExpr"] = "";
$tdatatparam_mod_estado[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_mod_estado[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_mod_estado[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_mod_estado[".highlightSearchResults"] = true;

$tableKeystparam_mod_estado = array();
$tableKeystparam_mod_estado[] = "tipom_id";
$tdatatparam_mod_estado[".Keys"] = $tableKeystparam_mod_estado;


$tdatatparam_mod_estado[".hideMobileList"] = array();




//	tipom_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tipom_id";
	$fdata["GoodName"] = "tipom_id";
	$fdata["ownerTable"] = "tparam_mod_estado";
	$fdata["Label"] = GetFieldLabel("tparam_mod_estado","tipom_id");
	$fdata["FieldType"] = 16;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "tipom_id";

		$fdata["sourceSingle"] = "tipom_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipom_id";

	
	
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


	$tdatatparam_mod_estado["tipom_id"] = $fdata;
		$tdatatparam_mod_estado[".searchableFields"][] = "tipom_id";
//	tipom_estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tipom_estado";
	$fdata["GoodName"] = "tipom_estado";
	$fdata["ownerTable"] = "tparam_mod_estado";
	$fdata["Label"] = GetFieldLabel("tparam_mod_estado","tipom_estado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tipom_estado";

		$fdata["sourceSingle"] = "tipom_estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipom_estado";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatatparam_mod_estado["tipom_estado"] = $fdata;
		$tdatatparam_mod_estado[".searchableFields"][] = "tipom_estado";


$tables_data["tparam_mod_estado"]=&$tdatatparam_mod_estado;
$field_labels["tparam_mod_estado"] = &$fieldLabelstparam_mod_estado;
$fieldToolTips["tparam_mod_estado"] = &$fieldToolTipstparam_mod_estado;
$placeHolders["tparam_mod_estado"] = &$placeHolderstparam_mod_estado;
$page_titles["tparam_mod_estado"] = &$pageTitlestparam_mod_estado;


changeTextControlsToDate( "tparam_mod_estado" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tparam_mod_estado"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tparam_mod_estado"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tparam_mod_estado()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tipom_id,  	tipom_estado";
$proto0["m_strFrom"] = "FROM tparam_mod_estado";
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
	"m_strName" => "tipom_id",
	"m_strTable" => "tparam_mod_estado",
	"m_srcTableName" => "tparam_mod_estado"
));

$proto6["m_sql"] = "tipom_id";
$proto6["m_srcTableName"] = "tparam_mod_estado";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tipom_estado",
	"m_strTable" => "tparam_mod_estado",
	"m_srcTableName" => "tparam_mod_estado"
));

$proto8["m_sql"] = "tipom_estado";
$proto8["m_srcTableName"] = "tparam_mod_estado";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tparam_mod_estado";
$proto11["m_srcTableName"] = "tparam_mod_estado";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "tipom_id";
$proto11["m_columns"][] = "tipom_estado";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tparam_mod_estado";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tparam_mod_estado";
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
$proto0["m_srcTableName"]="tparam_mod_estado";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_mod_estado = createSqlQuery_tparam_mod_estado();


	
										;

		

$tdatatparam_mod_estado[".sqlquery"] = $queryData_tparam_mod_estado;



$tdatatparam_mod_estado[".hasEvents"] = false;

?>