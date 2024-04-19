<?php
$tdataglobal_uc = array();
$tdataglobal_uc[".searchableFields"] = array();
$tdataglobal_uc[".ShortName"] = "global_uc";
$tdataglobal_uc[".OwnerID"] = "";
$tdataglobal_uc[".OriginalTable"] = "global_uc";


$tdataglobal_uc[".pagesByType"] = my_json_decode( "{}" );
$tdataglobal_uc[".originalPagesByType"] = $tdataglobal_uc[".pagesByType"];
$tdataglobal_uc[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataglobal_uc[".originalPages"] = $tdataglobal_uc[".pages"];
$tdataglobal_uc[".defaultPages"] = my_json_decode( "{}" );
$tdataglobal_uc[".originalDefaultPages"] = $tdataglobal_uc[".defaultPages"];

//	field labels
$fieldLabelsglobal_uc = array();
$fieldToolTipsglobal_uc = array();
$pageTitlesglobal_uc = array();
$placeHoldersglobal_uc = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsglobal_uc["Spanish"] = array();
	$fieldToolTipsglobal_uc["Spanish"] = array();
	$placeHoldersglobal_uc["Spanish"] = array();
	$pageTitlesglobal_uc["Spanish"] = array();
	$fieldLabelsglobal_uc["Spanish"]["unidad_contratacion"] = "Unidad Contratacion";
	$fieldToolTipsglobal_uc["Spanish"]["unidad_contratacion"] = "";
	$placeHoldersglobal_uc["Spanish"]["unidad_contratacion"] = "";
	if (count($fieldToolTipsglobal_uc["Spanish"]))
		$tdataglobal_uc[".isUseToolTips"] = true;
}


	$tdataglobal_uc[".NCSearch"] = true;



$tdataglobal_uc[".shortTableName"] = "global_uc";
$tdataglobal_uc[".nSecOptions"] = 0;

$tdataglobal_uc[".mainTableOwnerID"] = "";
$tdataglobal_uc[".entityType"] = 0;
$tdataglobal_uc[".connId"] = "mincit_global_20x_at_127_0_0_1";


$tdataglobal_uc[".strOriginalTableName"] = "global_uc";

	



$tdataglobal_uc[".showAddInPopup"] = false;

$tdataglobal_uc[".showEditInPopup"] = false;

$tdataglobal_uc[".showViewInPopup"] = false;

$tdataglobal_uc[".listAjax"] = false;
//	temporary
//$tdataglobal_uc[".listAjax"] = false;

	$tdataglobal_uc[".audit"] = true;

	$tdataglobal_uc[".locking"] = true;


$pages = $tdataglobal_uc[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataglobal_uc[".edit"] = true;
	$tdataglobal_uc[".afterEditAction"] = 1;
	$tdataglobal_uc[".closePopupAfterEdit"] = 1;
	$tdataglobal_uc[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataglobal_uc[".add"] = true;
$tdataglobal_uc[".afterAddAction"] = 1;
$tdataglobal_uc[".closePopupAfterAdd"] = 1;
$tdataglobal_uc[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataglobal_uc[".list"] = true;
}



$tdataglobal_uc[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataglobal_uc[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataglobal_uc[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataglobal_uc[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataglobal_uc[".printFriendly"] = true;
}



$tdataglobal_uc[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataglobal_uc[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataglobal_uc[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataglobal_uc[".isUseAjaxSuggest"] = true;



												

$tdataglobal_uc[".ajaxCodeSnippetAdded"] = false;

$tdataglobal_uc[".buttonsAdded"] = false;

$tdataglobal_uc[".addPageEvents"] = false;

// use timepicker for search panel
$tdataglobal_uc[".isUseTimeForSearch"] = false;


$tdataglobal_uc[".badgeColor"] = "CD5C5C";


$tdataglobal_uc[".allSearchFields"] = array();
$tdataglobal_uc[".filterFields"] = array();
$tdataglobal_uc[".requiredSearchFields"] = array();

$tdataglobal_uc[".googleLikeFields"] = array();
$tdataglobal_uc[".googleLikeFields"][] = "unidad_contratacion";



$tdataglobal_uc[".tableType"] = "list";

$tdataglobal_uc[".printerPageOrientation"] = 0;
$tdataglobal_uc[".nPrinterPageScale"] = 100;

$tdataglobal_uc[".nPrinterSplitRecords"] = 40;

$tdataglobal_uc[".geocodingEnabled"] = false;










$tdataglobal_uc[".pageSize"] = 20;

$tdataglobal_uc[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataglobal_uc[".strOrderBy"] = $tstrOrderBy;

$tdataglobal_uc[".orderindexes"] = array();


$tdataglobal_uc[".sqlHead"] = "SELECT unidad_contratacion";
$tdataglobal_uc[".sqlFrom"] = "FROM global_uc";
$tdataglobal_uc[".sqlWhereExpr"] = "";
$tdataglobal_uc[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataglobal_uc[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataglobal_uc[".arrGroupsPerPage"] = $arrGPP;

$tdataglobal_uc[".highlightSearchResults"] = true;

$tableKeysglobal_uc = array();
$tdataglobal_uc[".Keys"] = $tableKeysglobal_uc;


$tdataglobal_uc[".hideMobileList"] = array();




//	unidad_contratacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "unidad_contratacion";
	$fdata["GoodName"] = "unidad_contratacion";
	$fdata["ownerTable"] = "global_uc";
	$fdata["Label"] = GetFieldLabel("global_uc","unidad_contratacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "unidad_contratacion";

		$fdata["sourceSingle"] = "unidad_contratacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "unidad_contratacion";

	
	
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
			$edata["EditParams"].= " maxlength=5";

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


	$tdataglobal_uc["unidad_contratacion"] = $fdata;
		$tdataglobal_uc[".searchableFields"][] = "unidad_contratacion";


$tables_data["global_uc"]=&$tdataglobal_uc;
$field_labels["global_uc"] = &$fieldLabelsglobal_uc;
$fieldToolTips["global_uc"] = &$fieldToolTipsglobal_uc;
$placeHolders["global_uc"] = &$placeHoldersglobal_uc;
$page_titles["global_uc"] = &$pageTitlesglobal_uc;


changeTextControlsToDate( "global_uc" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["global_uc"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["global_uc"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_global_uc()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "unidad_contratacion";
$proto0["m_strFrom"] = "FROM global_uc";
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
	"m_strName" => "unidad_contratacion",
	"m_strTable" => "global_uc",
	"m_srcTableName" => "global_uc"
));

$proto6["m_sql"] = "unidad_contratacion";
$proto6["m_srcTableName"] = "global_uc";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "global_uc";
$proto9["m_srcTableName"] = "global_uc";
$proto9["m_columns"] = array();
$proto9["m_columns"][] = "unidad_contratacion";
$obj = new SQLTable($proto9);

$proto8["m_table"] = $obj;
$proto8["m_sql"] = "global_uc";
$proto8["m_alias"] = "";
$proto8["m_srcTableName"] = "global_uc";
$proto10=array();
$proto10["m_sql"] = "";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

$proto8["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto8);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="global_uc";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_global_uc = createSqlQuery_global_uc();


	
										;

	

$tdataglobal_uc[".sqlquery"] = $queryData_global_uc;



$tdataglobal_uc[".hasEvents"] = false;

?>