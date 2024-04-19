<?php
$tdatatparam_estado = array();
$tdatatparam_estado[".searchableFields"] = array();
$tdatatparam_estado[".ShortName"] = "tparam_estado";
$tdatatparam_estado[".OwnerID"] = "";
$tdatatparam_estado[".OriginalTable"] = "tparam_estado";


$tdatatparam_estado[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" );
$tdatatparam_estado[".originalPagesByType"] = $tdatatparam_estado[".pagesByType"];
$tdatatparam_estado[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" ) );
$tdatatparam_estado[".originalPages"] = $tdatatparam_estado[".pages"];
$tdatatparam_estado[".defaultPages"] = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\"}" );
$tdatatparam_estado[".originalDefaultPages"] = $tdatatparam_estado[".defaultPages"];

//	field labels
$fieldLabelstparam_estado = array();
$fieldToolTipstparam_estado = array();
$pageTitlestparam_estado = array();
$placeHolderstparam_estado = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_estado["Spanish"] = array();
	$fieldToolTipstparam_estado["Spanish"] = array();
	$placeHolderstparam_estado["Spanish"] = array();
	$pageTitlestparam_estado["Spanish"] = array();
	$fieldLabelstparam_estado["Spanish"]["estado_id"] = "Estado Id";
	$fieldToolTipstparam_estado["Spanish"]["estado_id"] = "";
	$placeHolderstparam_estado["Spanish"]["estado_id"] = "";
	$fieldLabelstparam_estado["Spanish"]["estado"] = "Estado";
	$fieldToolTipstparam_estado["Spanish"]["estado"] = "";
	$placeHolderstparam_estado["Spanish"]["estado"] = "";
	if (count($fieldToolTipstparam_estado["Spanish"]))
		$tdatatparam_estado[".isUseToolTips"] = true;
}


	$tdatatparam_estado[".NCSearch"] = true;



$tdatatparam_estado[".shortTableName"] = "tparam_estado";
$tdatatparam_estado[".nSecOptions"] = 0;

$tdatatparam_estado[".mainTableOwnerID"] = "";
$tdatatparam_estado[".entityType"] = 0;
$tdatatparam_estado[".connId"] = "sep2_at_127_0_0_1";


$tdatatparam_estado[".strOriginalTableName"] = "tparam_estado";

	



$tdatatparam_estado[".showAddInPopup"] = false;

$tdatatparam_estado[".showEditInPopup"] = false;

$tdatatparam_estado[".showViewInPopup"] = false;

$tdatatparam_estado[".listAjax"] = false;
//	temporary
//$tdatatparam_estado[".listAjax"] = false;

	$tdatatparam_estado[".audit"] = true;

	$tdatatparam_estado[".locking"] = true;


$pages = $tdatatparam_estado[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_estado[".edit"] = true;
	$tdatatparam_estado[".afterEditAction"] = 1;
	$tdatatparam_estado[".closePopupAfterEdit"] = 1;
	$tdatatparam_estado[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_estado[".add"] = true;
$tdatatparam_estado[".afterAddAction"] = 1;
$tdatatparam_estado[".closePopupAfterAdd"] = 1;
$tdatatparam_estado[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_estado[".list"] = true;
}



$tdatatparam_estado[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_estado[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_estado[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_estado[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_estado[".printFriendly"] = true;
}



$tdatatparam_estado[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_estado[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_estado[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_estado[".isUseAjaxSuggest"] = true;



												

$tdatatparam_estado[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_estado[".buttonsAdded"] = false;

$tdatatparam_estado[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_estado[".isUseTimeForSearch"] = false;


$tdatatparam_estado[".badgeColor"] = "4169E1";


$tdatatparam_estado[".allSearchFields"] = array();
$tdatatparam_estado[".filterFields"] = array();
$tdatatparam_estado[".requiredSearchFields"] = array();

$tdatatparam_estado[".googleLikeFields"] = array();
$tdatatparam_estado[".googleLikeFields"][] = "estado_id";
$tdatatparam_estado[".googleLikeFields"][] = "estado";



$tdatatparam_estado[".tableType"] = "list";

$tdatatparam_estado[".printerPageOrientation"] = 0;
$tdatatparam_estado[".nPrinterPageScale"] = 100;

$tdatatparam_estado[".nPrinterSplitRecords"] = 40;

$tdatatparam_estado[".geocodingEnabled"] = false;










$tdatatparam_estado[".pageSize"] = 20;

$tdatatparam_estado[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatparam_estado[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_estado[".orderindexes"] = array();


$tdatatparam_estado[".sqlHead"] = "SELECT estado_id,  	estado";
$tdatatparam_estado[".sqlFrom"] = "FROM tparam_estado";
$tdatatparam_estado[".sqlWhereExpr"] = "";
$tdatatparam_estado[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_estado[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_estado[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_estado[".highlightSearchResults"] = true;

$tableKeystparam_estado = array();
$tableKeystparam_estado[] = "estado_id";
$tdatatparam_estado[".Keys"] = $tableKeystparam_estado;


$tdatatparam_estado[".hideMobileList"] = array();




//	estado_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "estado_id";
	$fdata["GoodName"] = "estado_id";
	$fdata["ownerTable"] = "tparam_estado";
	$fdata["Label"] = GetFieldLabel("tparam_estado","estado_id");
	$fdata["FieldType"] = 16;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "estado_id";

		$fdata["sourceSingle"] = "estado_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado_id";

	
	
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


	$tdatatparam_estado["estado_id"] = $fdata;
		$tdatatparam_estado[".searchableFields"][] = "estado_id";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "tparam_estado";
	$fdata["Label"] = GetFieldLabel("tparam_estado","estado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "estado";

		$fdata["sourceSingle"] = "estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado";

	
	
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


	$tdatatparam_estado["estado"] = $fdata;
		$tdatatparam_estado[".searchableFields"][] = "estado";


$tables_data["tparam_estado"]=&$tdatatparam_estado;
$field_labels["tparam_estado"] = &$fieldLabelstparam_estado;
$fieldToolTips["tparam_estado"] = &$fieldToolTipstparam_estado;
$placeHolders["tparam_estado"] = &$placeHolderstparam_estado;
$page_titles["tparam_estado"] = &$pageTitlestparam_estado;


changeTextControlsToDate( "tparam_estado" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tparam_estado"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tparam_estado"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tparam_estado()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "estado_id,  	estado";
$proto0["m_strFrom"] = "FROM tparam_estado";
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
	"m_strName" => "estado_id",
	"m_strTable" => "tparam_estado",
	"m_srcTableName" => "tparam_estado"
));

$proto6["m_sql"] = "estado_id";
$proto6["m_srcTableName"] = "tparam_estado";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "tparam_estado",
	"m_srcTableName" => "tparam_estado"
));

$proto8["m_sql"] = "estado";
$proto8["m_srcTableName"] = "tparam_estado";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tparam_estado";
$proto11["m_srcTableName"] = "tparam_estado";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "estado_id";
$proto11["m_columns"][] = "estado";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tparam_estado";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tparam_estado";
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
$proto0["m_srcTableName"]="tparam_estado";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_estado = createSqlQuery_tparam_estado();


	
										;

		

$tdatatparam_estado[".sqlquery"] = $queryData_tparam_estado;



$tdatatparam_estado[".hasEvents"] = false;

?>