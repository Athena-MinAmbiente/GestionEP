<?php
$tdataglobal_estado_scdp = array();
$tdataglobal_estado_scdp[".searchableFields"] = array();
$tdataglobal_estado_scdp[".ShortName"] = "global_estado_scdp";
$tdataglobal_estado_scdp[".OwnerID"] = "";
$tdataglobal_estado_scdp[".OriginalTable"] = "global_estado_scdp";


$tdataglobal_estado_scdp[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdataglobal_estado_scdp[".originalPagesByType"] = $tdataglobal_estado_scdp[".pagesByType"];
$tdataglobal_estado_scdp[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdataglobal_estado_scdp[".originalPages"] = $tdataglobal_estado_scdp[".pages"];
$tdataglobal_estado_scdp[".defaultPages"] = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdataglobal_estado_scdp[".originalDefaultPages"] = $tdataglobal_estado_scdp[".defaultPages"];

//	field labels
$fieldLabelsglobal_estado_scdp = array();
$fieldToolTipsglobal_estado_scdp = array();
$pageTitlesglobal_estado_scdp = array();
$placeHoldersglobal_estado_scdp = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsglobal_estado_scdp["Spanish"] = array();
	$fieldToolTipsglobal_estado_scdp["Spanish"] = array();
	$placeHoldersglobal_estado_scdp["Spanish"] = array();
	$pageTitlesglobal_estado_scdp["Spanish"] = array();
	$fieldLabelsglobal_estado_scdp["Spanish"]["status_scdp_id"] = "Status Scdp Id";
	$fieldToolTipsglobal_estado_scdp["Spanish"]["status_scdp_id"] = "";
	$placeHoldersglobal_estado_scdp["Spanish"]["status_scdp_id"] = "";
	$fieldLabelsglobal_estado_scdp["Spanish"]["status_scdp_name"] = "Status Scdp Name";
	$fieldToolTipsglobal_estado_scdp["Spanish"]["status_scdp_name"] = "";
	$placeHoldersglobal_estado_scdp["Spanish"]["status_scdp_name"] = "";
	$fieldLabelsglobal_estado_scdp["Spanish"]["not_mail"] = "Not Mail";
	$fieldToolTipsglobal_estado_scdp["Spanish"]["not_mail"] = "";
	$placeHoldersglobal_estado_scdp["Spanish"]["not_mail"] = "";
	$fieldLabelsglobal_estado_scdp["Spanish"]["unidad_contratacion"] = "Unidad Contratacion";
	$fieldToolTipsglobal_estado_scdp["Spanish"]["unidad_contratacion"] = "";
	$placeHoldersglobal_estado_scdp["Spanish"]["unidad_contratacion"] = "";
	if (count($fieldToolTipsglobal_estado_scdp["Spanish"]))
		$tdataglobal_estado_scdp[".isUseToolTips"] = true;
}


	$tdataglobal_estado_scdp[".NCSearch"] = true;



$tdataglobal_estado_scdp[".shortTableName"] = "global_estado_scdp";
$tdataglobal_estado_scdp[".nSecOptions"] = 0;

$tdataglobal_estado_scdp[".mainTableOwnerID"] = "";
$tdataglobal_estado_scdp[".entityType"] = 0;
$tdataglobal_estado_scdp[".connId"] = "mincit_global_20x_at_127_0_0_1";


$tdataglobal_estado_scdp[".strOriginalTableName"] = "global_estado_scdp";

	



$tdataglobal_estado_scdp[".showAddInPopup"] = false;

$tdataglobal_estado_scdp[".showEditInPopup"] = false;

$tdataglobal_estado_scdp[".showViewInPopup"] = false;

$tdataglobal_estado_scdp[".listAjax"] = false;
//	temporary
//$tdataglobal_estado_scdp[".listAjax"] = false;

	$tdataglobal_estado_scdp[".audit"] = true;

	$tdataglobal_estado_scdp[".locking"] = true;


$pages = $tdataglobal_estado_scdp[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataglobal_estado_scdp[".edit"] = true;
	$tdataglobal_estado_scdp[".afterEditAction"] = 1;
	$tdataglobal_estado_scdp[".closePopupAfterEdit"] = 1;
	$tdataglobal_estado_scdp[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataglobal_estado_scdp[".add"] = true;
$tdataglobal_estado_scdp[".afterAddAction"] = 1;
$tdataglobal_estado_scdp[".closePopupAfterAdd"] = 1;
$tdataglobal_estado_scdp[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataglobal_estado_scdp[".list"] = true;
}



$tdataglobal_estado_scdp[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataglobal_estado_scdp[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataglobal_estado_scdp[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataglobal_estado_scdp[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataglobal_estado_scdp[".printFriendly"] = true;
}



$tdataglobal_estado_scdp[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataglobal_estado_scdp[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataglobal_estado_scdp[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataglobal_estado_scdp[".isUseAjaxSuggest"] = true;



												

$tdataglobal_estado_scdp[".ajaxCodeSnippetAdded"] = false;

$tdataglobal_estado_scdp[".buttonsAdded"] = false;

$tdataglobal_estado_scdp[".addPageEvents"] = false;

// use timepicker for search panel
$tdataglobal_estado_scdp[".isUseTimeForSearch"] = false;


$tdataglobal_estado_scdp[".badgeColor"] = "8FBC8B";


$tdataglobal_estado_scdp[".allSearchFields"] = array();
$tdataglobal_estado_scdp[".filterFields"] = array();
$tdataglobal_estado_scdp[".requiredSearchFields"] = array();

$tdataglobal_estado_scdp[".googleLikeFields"] = array();
$tdataglobal_estado_scdp[".googleLikeFields"][] = "status_scdp_id";
$tdataglobal_estado_scdp[".googleLikeFields"][] = "unidad_contratacion";
$tdataglobal_estado_scdp[".googleLikeFields"][] = "status_scdp_name";
$tdataglobal_estado_scdp[".googleLikeFields"][] = "not_mail";



$tdataglobal_estado_scdp[".tableType"] = "list";

$tdataglobal_estado_scdp[".printerPageOrientation"] = 0;
$tdataglobal_estado_scdp[".nPrinterPageScale"] = 100;

$tdataglobal_estado_scdp[".nPrinterSplitRecords"] = 40;

$tdataglobal_estado_scdp[".geocodingEnabled"] = false;










$tdataglobal_estado_scdp[".pageSize"] = 20;

$tdataglobal_estado_scdp[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataglobal_estado_scdp[".strOrderBy"] = $tstrOrderBy;

$tdataglobal_estado_scdp[".orderindexes"] = array();


$tdataglobal_estado_scdp[".sqlHead"] = "SELECT status_scdp_id,  	unidad_contratacion,  	status_scdp_name,  	not_mail";
$tdataglobal_estado_scdp[".sqlFrom"] = "FROM global_estado_scdp";
$tdataglobal_estado_scdp[".sqlWhereExpr"] = "";
$tdataglobal_estado_scdp[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataglobal_estado_scdp[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataglobal_estado_scdp[".arrGroupsPerPage"] = $arrGPP;

$tdataglobal_estado_scdp[".highlightSearchResults"] = true;

$tableKeysglobal_estado_scdp = array();
$tableKeysglobal_estado_scdp[] = "status_scdp_id";
$tdataglobal_estado_scdp[".Keys"] = $tableKeysglobal_estado_scdp;


$tdataglobal_estado_scdp[".hideMobileList"] = array();




//	status_scdp_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "status_scdp_id";
	$fdata["GoodName"] = "status_scdp_id";
	$fdata["ownerTable"] = "global_estado_scdp";
	$fdata["Label"] = GetFieldLabel("global_estado_scdp","status_scdp_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "status_scdp_id";

		$fdata["sourceSingle"] = "status_scdp_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status_scdp_id";

	
	
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


	$tdataglobal_estado_scdp["status_scdp_id"] = $fdata;
		$tdataglobal_estado_scdp[".searchableFields"][] = "status_scdp_id";
//	unidad_contratacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "unidad_contratacion";
	$fdata["GoodName"] = "unidad_contratacion";
	$fdata["ownerTable"] = "global_estado_scdp";
	$fdata["Label"] = GetFieldLabel("global_estado_scdp","unidad_contratacion");
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


	$tdataglobal_estado_scdp["unidad_contratacion"] = $fdata;
		$tdataglobal_estado_scdp[".searchableFields"][] = "unidad_contratacion";
//	status_scdp_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "status_scdp_name";
	$fdata["GoodName"] = "status_scdp_name";
	$fdata["ownerTable"] = "global_estado_scdp";
	$fdata["Label"] = GetFieldLabel("global_estado_scdp","status_scdp_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "status_scdp_name";

		$fdata["sourceSingle"] = "status_scdp_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status_scdp_name";

	
	
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
			$edata["EditParams"].= " maxlength=60";

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


	$tdataglobal_estado_scdp["status_scdp_name"] = $fdata;
		$tdataglobal_estado_scdp[".searchableFields"][] = "status_scdp_name";
//	not_mail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "not_mail";
	$fdata["GoodName"] = "not_mail";
	$fdata["ownerTable"] = "global_estado_scdp";
	$fdata["Label"] = GetFieldLabel("global_estado_scdp","not_mail");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "not_mail";

		$fdata["sourceSingle"] = "not_mail";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "not_mail";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdataglobal_estado_scdp["not_mail"] = $fdata;
		$tdataglobal_estado_scdp[".searchableFields"][] = "not_mail";


$tables_data["global_estado_scdp"]=&$tdataglobal_estado_scdp;
$field_labels["global_estado_scdp"] = &$fieldLabelsglobal_estado_scdp;
$fieldToolTips["global_estado_scdp"] = &$fieldToolTipsglobal_estado_scdp;
$placeHolders["global_estado_scdp"] = &$placeHoldersglobal_estado_scdp;
$page_titles["global_estado_scdp"] = &$pageTitlesglobal_estado_scdp;


changeTextControlsToDate( "global_estado_scdp" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["global_estado_scdp"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["global_estado_scdp"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_global_estado_scdp()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "status_scdp_id,  	unidad_contratacion,  	status_scdp_name,  	not_mail";
$proto0["m_strFrom"] = "FROM global_estado_scdp";
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
	"m_strName" => "status_scdp_id",
	"m_strTable" => "global_estado_scdp",
	"m_srcTableName" => "global_estado_scdp"
));

$proto6["m_sql"] = "status_scdp_id";
$proto6["m_srcTableName"] = "global_estado_scdp";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "unidad_contratacion",
	"m_strTable" => "global_estado_scdp",
	"m_srcTableName" => "global_estado_scdp"
));

$proto8["m_sql"] = "unidad_contratacion";
$proto8["m_srcTableName"] = "global_estado_scdp";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "status_scdp_name",
	"m_strTable" => "global_estado_scdp",
	"m_srcTableName" => "global_estado_scdp"
));

$proto10["m_sql"] = "status_scdp_name";
$proto10["m_srcTableName"] = "global_estado_scdp";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "not_mail",
	"m_strTable" => "global_estado_scdp",
	"m_srcTableName" => "global_estado_scdp"
));

$proto12["m_sql"] = "not_mail";
$proto12["m_srcTableName"] = "global_estado_scdp";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "global_estado_scdp";
$proto15["m_srcTableName"] = "global_estado_scdp";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "status_scdp_id";
$proto15["m_columns"][] = "unidad_contratacion";
$proto15["m_columns"][] = "status_scdp_name";
$proto15["m_columns"][] = "not_mail";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "global_estado_scdp";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "global_estado_scdp";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="global_estado_scdp";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_global_estado_scdp = createSqlQuery_global_estado_scdp();


	
										;

				

$tdataglobal_estado_scdp[".sqlquery"] = $queryData_global_estado_scdp;



$tdataglobal_estado_scdp[".hasEvents"] = false;

?>