<?php
$tdataglobal_estado = array();
$tdataglobal_estado[".searchableFields"] = array();
$tdataglobal_estado[".ShortName"] = "global_estado";
$tdataglobal_estado[".OwnerID"] = "";
$tdataglobal_estado[".OriginalTable"] = "global_estado";


$tdataglobal_estado[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdataglobal_estado[".originalPagesByType"] = $tdataglobal_estado[".pagesByType"];
$tdataglobal_estado[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdataglobal_estado[".originalPages"] = $tdataglobal_estado[".pages"];
$tdataglobal_estado[".defaultPages"] = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdataglobal_estado[".originalDefaultPages"] = $tdataglobal_estado[".defaultPages"];

//	field labels
$fieldLabelsglobal_estado = array();
$fieldToolTipsglobal_estado = array();
$pageTitlesglobal_estado = array();
$placeHoldersglobal_estado = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsglobal_estado["Spanish"] = array();
	$fieldToolTipsglobal_estado["Spanish"] = array();
	$placeHoldersglobal_estado["Spanish"] = array();
	$pageTitlesglobal_estado["Spanish"] = array();
	$fieldLabelsglobal_estado["Spanish"]["status_id"] = "Status Id";
	$fieldToolTipsglobal_estado["Spanish"]["status_id"] = "";
	$placeHoldersglobal_estado["Spanish"]["status_id"] = "";
	$fieldLabelsglobal_estado["Spanish"]["status_name"] = "Status Name";
	$fieldToolTipsglobal_estado["Spanish"]["status_name"] = "";
	$placeHoldersglobal_estado["Spanish"]["status_name"] = "";
	$fieldLabelsglobal_estado["Spanish"]["status_name_a"] = "Status Name A";
	$fieldToolTipsglobal_estado["Spanish"]["status_name_a"] = "";
	$placeHoldersglobal_estado["Spanish"]["status_name_a"] = "";
	$fieldLabelsglobal_estado["Spanish"]["ctrl"] = "Ctrl";
	$fieldToolTipsglobal_estado["Spanish"]["ctrl"] = "";
	$placeHoldersglobal_estado["Spanish"]["ctrl"] = "";
	$fieldLabelsglobal_estado["Spanish"]["not_mail"] = "Not Mail";
	$fieldToolTipsglobal_estado["Spanish"]["not_mail"] = "";
	$placeHoldersglobal_estado["Spanish"]["not_mail"] = "";
	if (count($fieldToolTipsglobal_estado["Spanish"]))
		$tdataglobal_estado[".isUseToolTips"] = true;
}


	$tdataglobal_estado[".NCSearch"] = true;



$tdataglobal_estado[".shortTableName"] = "global_estado";
$tdataglobal_estado[".nSecOptions"] = 0;

$tdataglobal_estado[".mainTableOwnerID"] = "";
$tdataglobal_estado[".entityType"] = 0;
$tdataglobal_estado[".connId"] = "mincit_global_20x_at_127_0_0_1";


$tdataglobal_estado[".strOriginalTableName"] = "global_estado";

	



$tdataglobal_estado[".showAddInPopup"] = false;

$tdataglobal_estado[".showEditInPopup"] = false;

$tdataglobal_estado[".showViewInPopup"] = false;

$tdataglobal_estado[".listAjax"] = false;
//	temporary
//$tdataglobal_estado[".listAjax"] = false;

	$tdataglobal_estado[".audit"] = true;

	$tdataglobal_estado[".locking"] = true;


$pages = $tdataglobal_estado[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataglobal_estado[".edit"] = true;
	$tdataglobal_estado[".afterEditAction"] = 1;
	$tdataglobal_estado[".closePopupAfterEdit"] = 1;
	$tdataglobal_estado[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataglobal_estado[".add"] = true;
$tdataglobal_estado[".afterAddAction"] = 1;
$tdataglobal_estado[".closePopupAfterAdd"] = 1;
$tdataglobal_estado[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataglobal_estado[".list"] = true;
}



$tdataglobal_estado[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataglobal_estado[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataglobal_estado[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataglobal_estado[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataglobal_estado[".printFriendly"] = true;
}



$tdataglobal_estado[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataglobal_estado[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataglobal_estado[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataglobal_estado[".isUseAjaxSuggest"] = true;



												

$tdataglobal_estado[".ajaxCodeSnippetAdded"] = false;

$tdataglobal_estado[".buttonsAdded"] = false;

$tdataglobal_estado[".addPageEvents"] = false;

// use timepicker for search panel
$tdataglobal_estado[".isUseTimeForSearch"] = false;


$tdataglobal_estado[".badgeColor"] = "CD853F";


$tdataglobal_estado[".allSearchFields"] = array();
$tdataglobal_estado[".filterFields"] = array();
$tdataglobal_estado[".requiredSearchFields"] = array();

$tdataglobal_estado[".googleLikeFields"] = array();
$tdataglobal_estado[".googleLikeFields"][] = "status_id";
$tdataglobal_estado[".googleLikeFields"][] = "status_name";
$tdataglobal_estado[".googleLikeFields"][] = "status_name_a";
$tdataglobal_estado[".googleLikeFields"][] = "ctrl";
$tdataglobal_estado[".googleLikeFields"][] = "not_mail";



$tdataglobal_estado[".tableType"] = "list";

$tdataglobal_estado[".printerPageOrientation"] = 0;
$tdataglobal_estado[".nPrinterPageScale"] = 100;

$tdataglobal_estado[".nPrinterSplitRecords"] = 40;

$tdataglobal_estado[".geocodingEnabled"] = false;










$tdataglobal_estado[".pageSize"] = 20;

$tdataglobal_estado[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataglobal_estado[".strOrderBy"] = $tstrOrderBy;

$tdataglobal_estado[".orderindexes"] = array();


$tdataglobal_estado[".sqlHead"] = "SELECT status_id,  	status_name,  	status_name_a,  	ctrl,  	not_mail";
$tdataglobal_estado[".sqlFrom"] = "FROM global_estado";
$tdataglobal_estado[".sqlWhereExpr"] = "";
$tdataglobal_estado[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataglobal_estado[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataglobal_estado[".arrGroupsPerPage"] = $arrGPP;

$tdataglobal_estado[".highlightSearchResults"] = true;

$tableKeysglobal_estado = array();
$tableKeysglobal_estado[] = "status_id";
$tdataglobal_estado[".Keys"] = $tableKeysglobal_estado;


$tdataglobal_estado[".hideMobileList"] = array();




//	status_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "status_id";
	$fdata["GoodName"] = "status_id";
	$fdata["ownerTable"] = "global_estado";
	$fdata["Label"] = GetFieldLabel("global_estado","status_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "status_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status_id";

	
	
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


	$tdataglobal_estado["status_id"] = $fdata;
		$tdataglobal_estado[".searchableFields"][] = "status_id";
//	status_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "status_name";
	$fdata["GoodName"] = "status_name";
	$fdata["ownerTable"] = "global_estado";
	$fdata["Label"] = GetFieldLabel("global_estado","status_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "status_name";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status_name";

	
	
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


	$tdataglobal_estado["status_name"] = $fdata;
		$tdataglobal_estado[".searchableFields"][] = "status_name";
//	status_name_a
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "status_name_a";
	$fdata["GoodName"] = "status_name_a";
	$fdata["ownerTable"] = "global_estado";
	$fdata["Label"] = GetFieldLabel("global_estado","status_name_a");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "status_name_a";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status_name_a";

	
	
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


	$tdataglobal_estado["status_name_a"] = $fdata;
		$tdataglobal_estado[".searchableFields"][] = "status_name_a";
//	ctrl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ctrl";
	$fdata["GoodName"] = "ctrl";
	$fdata["ownerTable"] = "global_estado";
	$fdata["Label"] = GetFieldLabel("global_estado","ctrl");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "ctrl";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ctrl";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdataglobal_estado["ctrl"] = $fdata;
		$tdataglobal_estado[".searchableFields"][] = "ctrl";
//	not_mail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "not_mail";
	$fdata["GoodName"] = "not_mail";
	$fdata["ownerTable"] = "global_estado";
	$fdata["Label"] = GetFieldLabel("global_estado","not_mail");
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


	$tdataglobal_estado["not_mail"] = $fdata;
		$tdataglobal_estado[".searchableFields"][] = "not_mail";


$tables_data["global_estado"]=&$tdataglobal_estado;
$field_labels["global_estado"] = &$fieldLabelsglobal_estado;
$fieldToolTips["global_estado"] = &$fieldToolTipsglobal_estado;
$placeHolders["global_estado"] = &$placeHoldersglobal_estado;
$page_titles["global_estado"] = &$pageTitlesglobal_estado;


changeTextControlsToDate( "global_estado" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["global_estado"] = array();
//	paa_master_stat_0f
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="paa_master_stat_0f";
		$detailsParam["dOriginalTable"] = "paa_master";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "paa_master_stat_0f";
	$detailsParam["dCaptionTable"] = GetTableCaption("paa_master_stat_0f");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["global_estado"][$dIndex] = $detailsParam;

	
		$detailsTablesData["global_estado"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["global_estado"][$dIndex]["masterKeys"][]="status_id";

				$detailsTablesData["global_estado"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["global_estado"][$dIndex]["detailKeys"][]="sys_status";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["global_estado"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_global_estado()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "status_id,  	status_name,  	status_name_a,  	ctrl,  	not_mail";
$proto0["m_strFrom"] = "FROM global_estado";
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
	"m_strName" => "status_id",
	"m_strTable" => "global_estado",
	"m_srcTableName" => "global_estado"
));

$proto6["m_sql"] = "status_id";
$proto6["m_srcTableName"] = "global_estado";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "status_name",
	"m_strTable" => "global_estado",
	"m_srcTableName" => "global_estado"
));

$proto8["m_sql"] = "status_name";
$proto8["m_srcTableName"] = "global_estado";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "status_name_a",
	"m_strTable" => "global_estado",
	"m_srcTableName" => "global_estado"
));

$proto10["m_sql"] = "status_name_a";
$proto10["m_srcTableName"] = "global_estado";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ctrl",
	"m_strTable" => "global_estado",
	"m_srcTableName" => "global_estado"
));

$proto12["m_sql"] = "ctrl";
$proto12["m_srcTableName"] = "global_estado";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "not_mail",
	"m_strTable" => "global_estado",
	"m_srcTableName" => "global_estado"
));

$proto14["m_sql"] = "not_mail";
$proto14["m_srcTableName"] = "global_estado";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "global_estado";
$proto17["m_srcTableName"] = "global_estado";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "status_id";
$proto17["m_columns"][] = "status_name";
$proto17["m_columns"][] = "status_name_a";
$proto17["m_columns"][] = "ctrl";
$proto17["m_columns"][] = "not_mail";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "global_estado";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "global_estado";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="global_estado";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_global_estado = createSqlQuery_global_estado();


	
										;

					

$tdataglobal_estado[".sqlquery"] = $queryData_global_estado;



$tdataglobal_estado[".hasEvents"] = false;

?>