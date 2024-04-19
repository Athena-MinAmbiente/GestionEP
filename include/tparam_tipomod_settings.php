<?php
$tdatatparam_tipomod = array();
$tdatatparam_tipomod[".searchableFields"] = array();
$tdatatparam_tipomod[".ShortName"] = "tparam_tipomod";
$tdatatparam_tipomod[".OwnerID"] = "";
$tdatatparam_tipomod[".OriginalTable"] = "tparam_tipomod";


$tdatatparam_tipomod[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" );
$tdatatparam_tipomod[".originalPagesByType"] = $tdatatparam_tipomod[".pagesByType"];
$tdatatparam_tipomod[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" ) );
$tdatatparam_tipomod[".originalPages"] = $tdatatparam_tipomod[".pages"];
$tdatatparam_tipomod[".defaultPages"] = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\"}" );
$tdatatparam_tipomod[".originalDefaultPages"] = $tdatatparam_tipomod[".defaultPages"];

//	field labels
$fieldLabelstparam_tipomod = array();
$fieldToolTipstparam_tipomod = array();
$pageTitlestparam_tipomod = array();
$placeHolderstparam_tipomod = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_tipomod["Spanish"] = array();
	$fieldToolTipstparam_tipomod["Spanish"] = array();
	$placeHolderstparam_tipomod["Spanish"] = array();
	$pageTitlestparam_tipomod["Spanish"] = array();
	$fieldLabelstparam_tipomod["Spanish"]["mtipo_id"] = "Mtipo Id";
	$fieldToolTipstparam_tipomod["Spanish"]["mtipo_id"] = "";
	$placeHolderstparam_tipomod["Spanish"]["mtipo_id"] = "";
	$fieldLabelstparam_tipomod["Spanish"]["tipo_mod"] = "Tipo Mod";
	$fieldToolTipstparam_tipomod["Spanish"]["tipo_mod"] = "";
	$placeHolderstparam_tipomod["Spanish"]["tipo_mod"] = "";
	$fieldLabelstparam_tipomod["Spanish"]["mod_email_not"] = "Mod Email Not";
	$fieldToolTipstparam_tipomod["Spanish"]["mod_email_not"] = "";
	$placeHolderstparam_tipomod["Spanish"]["mod_email_not"] = "";
	if (count($fieldToolTipstparam_tipomod["Spanish"]))
		$tdatatparam_tipomod[".isUseToolTips"] = true;
}


	$tdatatparam_tipomod[".NCSearch"] = true;



$tdatatparam_tipomod[".shortTableName"] = "tparam_tipomod";
$tdatatparam_tipomod[".nSecOptions"] = 0;

$tdatatparam_tipomod[".mainTableOwnerID"] = "";
$tdatatparam_tipomod[".entityType"] = 0;
$tdatatparam_tipomod[".connId"] = "sep2_at_127_0_0_1";


$tdatatparam_tipomod[".strOriginalTableName"] = "tparam_tipomod";

	



$tdatatparam_tipomod[".showAddInPopup"] = false;

$tdatatparam_tipomod[".showEditInPopup"] = false;

$tdatatparam_tipomod[".showViewInPopup"] = false;

$tdatatparam_tipomod[".listAjax"] = false;
//	temporary
//$tdatatparam_tipomod[".listAjax"] = false;

	$tdatatparam_tipomod[".audit"] = true;

	$tdatatparam_tipomod[".locking"] = true;


$pages = $tdatatparam_tipomod[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_tipomod[".edit"] = true;
	$tdatatparam_tipomod[".afterEditAction"] = 1;
	$tdatatparam_tipomod[".closePopupAfterEdit"] = 1;
	$tdatatparam_tipomod[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_tipomod[".add"] = true;
$tdatatparam_tipomod[".afterAddAction"] = 1;
$tdatatparam_tipomod[".closePopupAfterAdd"] = 1;
$tdatatparam_tipomod[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_tipomod[".list"] = true;
}



$tdatatparam_tipomod[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_tipomod[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_tipomod[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_tipomod[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_tipomod[".printFriendly"] = true;
}



$tdatatparam_tipomod[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_tipomod[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_tipomod[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_tipomod[".isUseAjaxSuggest"] = true;



												

$tdatatparam_tipomod[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_tipomod[".buttonsAdded"] = false;

$tdatatparam_tipomod[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_tipomod[".isUseTimeForSearch"] = false;


$tdatatparam_tipomod[".badgeColor"] = "1E90FF";


$tdatatparam_tipomod[".allSearchFields"] = array();
$tdatatparam_tipomod[".filterFields"] = array();
$tdatatparam_tipomod[".requiredSearchFields"] = array();

$tdatatparam_tipomod[".googleLikeFields"] = array();
$tdatatparam_tipomod[".googleLikeFields"][] = "mtipo_id";
$tdatatparam_tipomod[".googleLikeFields"][] = "tipo_mod";
$tdatatparam_tipomod[".googleLikeFields"][] = "mod_email_not";



$tdatatparam_tipomod[".tableType"] = "list";

$tdatatparam_tipomod[".printerPageOrientation"] = 0;
$tdatatparam_tipomod[".nPrinterPageScale"] = 100;

$tdatatparam_tipomod[".nPrinterSplitRecords"] = 40;

$tdatatparam_tipomod[".geocodingEnabled"] = false;










$tdatatparam_tipomod[".pageSize"] = 20;

$tdatatparam_tipomod[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatparam_tipomod[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_tipomod[".orderindexes"] = array();


$tdatatparam_tipomod[".sqlHead"] = "SELECT mtipo_id,  	tipo_mod,  	mod_email_not";
$tdatatparam_tipomod[".sqlFrom"] = "FROM tparam_tipomod";
$tdatatparam_tipomod[".sqlWhereExpr"] = "";
$tdatatparam_tipomod[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_tipomod[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_tipomod[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_tipomod[".highlightSearchResults"] = true;

$tableKeystparam_tipomod = array();
$tableKeystparam_tipomod[] = "mtipo_id";
$tdatatparam_tipomod[".Keys"] = $tableKeystparam_tipomod;


$tdatatparam_tipomod[".hideMobileList"] = array();




//	mtipo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "mtipo_id";
	$fdata["GoodName"] = "mtipo_id";
	$fdata["ownerTable"] = "tparam_tipomod";
	$fdata["Label"] = GetFieldLabel("tparam_tipomod","mtipo_id");
	$fdata["FieldType"] = 16;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "mtipo_id";

		$fdata["sourceSingle"] = "mtipo_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mtipo_id";

	
	
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


	$tdatatparam_tipomod["mtipo_id"] = $fdata;
		$tdatatparam_tipomod[".searchableFields"][] = "mtipo_id";
//	tipo_mod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tipo_mod";
	$fdata["GoodName"] = "tipo_mod";
	$fdata["ownerTable"] = "tparam_tipomod";
	$fdata["Label"] = GetFieldLabel("tparam_tipomod","tipo_mod");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tipo_mod";

		$fdata["sourceSingle"] = "tipo_mod";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_mod";

	
	
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
			$edata["EditParams"].= " maxlength=40";

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


	$tdatatparam_tipomod["tipo_mod"] = $fdata;
		$tdatatparam_tipomod[".searchableFields"][] = "tipo_mod";
//	mod_email_not
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "mod_email_not";
	$fdata["GoodName"] = "mod_email_not";
	$fdata["ownerTable"] = "tparam_tipomod";
	$fdata["Label"] = GetFieldLabel("tparam_tipomod","mod_email_not");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "mod_email_not";

		$fdata["sourceSingle"] = "mod_email_not";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mod_email_not";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatatparam_tipomod["mod_email_not"] = $fdata;
		$tdatatparam_tipomod[".searchableFields"][] = "mod_email_not";


$tables_data["tparam_tipomod"]=&$tdatatparam_tipomod;
$field_labels["tparam_tipomod"] = &$fieldLabelstparam_tipomod;
$fieldToolTips["tparam_tipomod"] = &$fieldToolTipstparam_tipomod;
$placeHolders["tparam_tipomod"] = &$placeHolderstparam_tipomod;
$page_titles["tparam_tipomod"] = &$pageTitlestparam_tipomod;


changeTextControlsToDate( "tparam_tipomod" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tparam_tipomod"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tparam_tipomod"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tparam_tipomod()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "mtipo_id,  	tipo_mod,  	mod_email_not";
$proto0["m_strFrom"] = "FROM tparam_tipomod";
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
	"m_strName" => "mtipo_id",
	"m_strTable" => "tparam_tipomod",
	"m_srcTableName" => "tparam_tipomod"
));

$proto6["m_sql"] = "mtipo_id";
$proto6["m_srcTableName"] = "tparam_tipomod";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_mod",
	"m_strTable" => "tparam_tipomod",
	"m_srcTableName" => "tparam_tipomod"
));

$proto8["m_sql"] = "tipo_mod";
$proto8["m_srcTableName"] = "tparam_tipomod";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "mod_email_not",
	"m_strTable" => "tparam_tipomod",
	"m_srcTableName" => "tparam_tipomod"
));

$proto10["m_sql"] = "mod_email_not";
$proto10["m_srcTableName"] = "tparam_tipomod";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "tparam_tipomod";
$proto13["m_srcTableName"] = "tparam_tipomod";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "mtipo_id";
$proto13["m_columns"][] = "tipo_mod";
$proto13["m_columns"][] = "mod_email_not";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "tparam_tipomod";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "tparam_tipomod";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tparam_tipomod";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_tipomod = createSqlQuery_tparam_tipomod();


	
										;

			

$tdatatparam_tipomod[".sqlquery"] = $queryData_tparam_tipomod;



$tdatatparam_tipomod[".hasEvents"] = false;

?>