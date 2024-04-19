<?php
$tdataq_ctrl_saldo_0000c_chart = array();
$tdataq_ctrl_saldo_0000c_chart[".searchableFields"] = array();
$tdataq_ctrl_saldo_0000c_chart[".ShortName"] = "q_ctrl_saldo_0000c_chart";
$tdataq_ctrl_saldo_0000c_chart[".OwnerID"] = "";
$tdataq_ctrl_saldo_0000c_chart[".OriginalTable"] = "q_ctrl_saldo_0000c";


$tdataq_ctrl_saldo_0000c_chart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"masterchart\":[\"masterchart\"],\"search\":[\"search\"]}" );
$tdataq_ctrl_saldo_0000c_chart[".originalPagesByType"] = $tdataq_ctrl_saldo_0000c_chart[".pagesByType"];
$tdataq_ctrl_saldo_0000c_chart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"masterchart\":[\"masterchart\"],\"search\":[\"search\"]}" ) );
$tdataq_ctrl_saldo_0000c_chart[".originalPages"] = $tdataq_ctrl_saldo_0000c_chart[".pages"];
$tdataq_ctrl_saldo_0000c_chart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"masterchart\":\"masterchart\",\"search\":\"search\"}" );
$tdataq_ctrl_saldo_0000c_chart[".originalDefaultPages"] = $tdataq_ctrl_saldo_0000c_chart[".defaultPages"];

//	field labels
$fieldLabelsq_ctrl_saldo_0000c_chart = array();
$fieldToolTipsq_ctrl_saldo_0000c_chart = array();
$pageTitlesq_ctrl_saldo_0000c_chart = array();
$placeHoldersq_ctrl_saldo_0000c_chart = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_ctrl_saldo_0000c_chart["Spanish"] = array();
	$fieldToolTipsq_ctrl_saldo_0000c_chart["Spanish"] = array();
	$placeHoldersq_ctrl_saldo_0000c_chart["Spanish"] = array();
	$pageTitlesq_ctrl_saldo_0000c_chart["Spanish"] = array();
	$fieldLabelsq_ctrl_saldo_0000c_chart["Spanish"]["RUBRO_ID_FK"] = "RUBRO ID FK";
	$fieldToolTipsq_ctrl_saldo_0000c_chart["Spanish"]["RUBRO_ID_FK"] = "";
	$placeHoldersq_ctrl_saldo_0000c_chart["Spanish"]["RUBRO_ID_FK"] = "";
	$fieldLabelsq_ctrl_saldo_0000c_chart["Spanish"]["UEJ"] = "UEJ";
	$fieldToolTipsq_ctrl_saldo_0000c_chart["Spanish"]["UEJ"] = "";
	$placeHoldersq_ctrl_saldo_0000c_chart["Spanish"]["UEJ"] = "";
	$fieldLabelsq_ctrl_saldo_0000c_chart["Spanish"]["VIGENCIA"] = "VIGENCIA";
	$fieldToolTipsq_ctrl_saldo_0000c_chart["Spanish"]["VIGENCIA"] = "";
	$placeHoldersq_ctrl_saldo_0000c_chart["Spanish"]["VIGENCIA"] = "";
	$fieldLabelsq_ctrl_saldo_0000c_chart["Spanish"]["QTYRUBRO"] = "QTYRUBRO";
	$fieldToolTipsq_ctrl_saldo_0000c_chart["Spanish"]["QTYRUBRO"] = "";
	$placeHoldersq_ctrl_saldo_0000c_chart["Spanish"]["QTYRUBRO"] = "";
	$fieldLabelsq_ctrl_saldo_0000c_chart["Spanish"]["PRESUPUESTO_OFICIAL"] = "PRESUPUESTO OFICIAL";
	$fieldToolTipsq_ctrl_saldo_0000c_chart["Spanish"]["PRESUPUESTO_OFICIAL"] = "";
	$placeHoldersq_ctrl_saldo_0000c_chart["Spanish"]["PRESUPUESTO_OFICIAL"] = "";
	$fieldLabelsq_ctrl_saldo_0000c_chart["Spanish"]["PRESUPUESTO_SOLICITADO"] = "PRESUPUESTO PROGRAMADO";
	$fieldToolTipsq_ctrl_saldo_0000c_chart["Spanish"]["PRESUPUESTO_SOLICITADO"] = "";
	$placeHoldersq_ctrl_saldo_0000c_chart["Spanish"]["PRESUPUESTO_SOLICITADO"] = "";
	if (count($fieldToolTipsq_ctrl_saldo_0000c_chart["Spanish"]))
		$tdataq_ctrl_saldo_0000c_chart[".isUseToolTips"] = true;
}


	$tdataq_ctrl_saldo_0000c_chart[".NCSearch"] = true;

	$tdataq_ctrl_saldo_0000c_chart[".ChartRefreshTime"] = 0;


$tdataq_ctrl_saldo_0000c_chart[".shortTableName"] = "q_ctrl_saldo_0000c_chart";
$tdataq_ctrl_saldo_0000c_chart[".nSecOptions"] = 0;

$tdataq_ctrl_saldo_0000c_chart[".mainTableOwnerID"] = "";
$tdataq_ctrl_saldo_0000c_chart[".entityType"] = 3;
$tdataq_ctrl_saldo_0000c_chart[".connId"] = "sep2_at_127_0_0_1";


$tdataq_ctrl_saldo_0000c_chart[".strOriginalTableName"] = "q_ctrl_saldo_0000c";

	



$tdataq_ctrl_saldo_0000c_chart[".showAddInPopup"] = false;

$tdataq_ctrl_saldo_0000c_chart[".showEditInPopup"] = false;

$tdataq_ctrl_saldo_0000c_chart[".showViewInPopup"] = false;

$tdataq_ctrl_saldo_0000c_chart[".listAjax"] = false;
//	temporary
//$tdataq_ctrl_saldo_0000c_chart[".listAjax"] = false;

	$tdataq_ctrl_saldo_0000c_chart[".audit"] = false;

	$tdataq_ctrl_saldo_0000c_chart[".locking"] = false;


$pages = $tdataq_ctrl_saldo_0000c_chart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_ctrl_saldo_0000c_chart[".edit"] = true;
	$tdataq_ctrl_saldo_0000c_chart[".afterEditAction"] = 1;
	$tdataq_ctrl_saldo_0000c_chart[".closePopupAfterEdit"] = 1;
	$tdataq_ctrl_saldo_0000c_chart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_ctrl_saldo_0000c_chart[".add"] = true;
$tdataq_ctrl_saldo_0000c_chart[".afterAddAction"] = 1;
$tdataq_ctrl_saldo_0000c_chart[".closePopupAfterAdd"] = 1;
$tdataq_ctrl_saldo_0000c_chart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_ctrl_saldo_0000c_chart[".list"] = true;
}



$tdataq_ctrl_saldo_0000c_chart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_ctrl_saldo_0000c_chart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_ctrl_saldo_0000c_chart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_ctrl_saldo_0000c_chart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_ctrl_saldo_0000c_chart[".printFriendly"] = true;
}



$tdataq_ctrl_saldo_0000c_chart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_ctrl_saldo_0000c_chart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_ctrl_saldo_0000c_chart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_ctrl_saldo_0000c_chart[".isUseAjaxSuggest"] = true;



												

$tdataq_ctrl_saldo_0000c_chart[".ajaxCodeSnippetAdded"] = false;

$tdataq_ctrl_saldo_0000c_chart[".buttonsAdded"] = false;

$tdataq_ctrl_saldo_0000c_chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_ctrl_saldo_0000c_chart[".isUseTimeForSearch"] = false;


$tdataq_ctrl_saldo_0000c_chart[".badgeColor"] = "BC8F8F";


$tdataq_ctrl_saldo_0000c_chart[".allSearchFields"] = array();
$tdataq_ctrl_saldo_0000c_chart[".filterFields"] = array();
$tdataq_ctrl_saldo_0000c_chart[".requiredSearchFields"] = array();

$tdataq_ctrl_saldo_0000c_chart[".googleLikeFields"] = array();
$tdataq_ctrl_saldo_0000c_chart[".googleLikeFields"][] = "RUBRO_ID_FK";
$tdataq_ctrl_saldo_0000c_chart[".googleLikeFields"][] = "UEJ";
$tdataq_ctrl_saldo_0000c_chart[".googleLikeFields"][] = "VIGENCIA";
$tdataq_ctrl_saldo_0000c_chart[".googleLikeFields"][] = "QTYRUBRO";
$tdataq_ctrl_saldo_0000c_chart[".googleLikeFields"][] = "PRESUPUESTO_OFICIAL";
$tdataq_ctrl_saldo_0000c_chart[".googleLikeFields"][] = "PRESUPUESTO_SOLICITADO";



$tdataq_ctrl_saldo_0000c_chart[".tableType"] = "chart";

$tdataq_ctrl_saldo_0000c_chart[".printerPageOrientation"] = 0;
$tdataq_ctrl_saldo_0000c_chart[".nPrinterPageScale"] = 100;

$tdataq_ctrl_saldo_0000c_chart[".nPrinterSplitRecords"] = 40;

$tdataq_ctrl_saldo_0000c_chart[".geocodingEnabled"] = false;



// chart settings
$tdataq_ctrl_saldo_0000c_chart[".chartType"] = "Combined";
// end of chart settings








$tstrOrderBy = "ORDER BY UEJ";
$tdataq_ctrl_saldo_0000c_chart[".strOrderBy"] = $tstrOrderBy;

$tdataq_ctrl_saldo_0000c_chart[".orderindexes"] = array();
			$tdataq_ctrl_saldo_0000c_chart[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "UEJ");


$tdataq_ctrl_saldo_0000c_chart[".sqlHead"] = "SELECT RUBRO_ID_FK, UEJ, VIGENCIA, QTYRUBRO, PRESUPUESTO_OFICIAL, PRESUPUESTO_SOLICITADO";
$tdataq_ctrl_saldo_0000c_chart[".sqlFrom"] = "FROM q_ctrl_saldo_0000c";
$tdataq_ctrl_saldo_0000c_chart[".sqlWhereExpr"] = "";
$tdataq_ctrl_saldo_0000c_chart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_ctrl_saldo_0000c_chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_ctrl_saldo_0000c_chart[".arrGroupsPerPage"] = $arrGPP;

$tdataq_ctrl_saldo_0000c_chart[".highlightSearchResults"] = true;

$tableKeysq_ctrl_saldo_0000c_chart = array();
$tdataq_ctrl_saldo_0000c_chart[".Keys"] = $tableKeysq_ctrl_saldo_0000c_chart;


$tdataq_ctrl_saldo_0000c_chart[".hideMobileList"] = array();




//	RUBRO_ID_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "RUBRO_ID_FK";
	$fdata["GoodName"] = "RUBRO_ID_FK";
	$fdata["ownerTable"] = "q_ctrl_saldo_0000c";
	$fdata["Label"] = GetFieldLabel("q_ctrl_saldo_0000c_Chart","RUBRO_ID_FK");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "RUBRO_ID_FK";

		$fdata["sourceSingle"] = "RUBRO_ID_FK";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RUBRO_ID_FK";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_ctrl_saldo_0000c_chart["RUBRO_ID_FK"] = $fdata;
		$tdataq_ctrl_saldo_0000c_chart[".searchableFields"][] = "RUBRO_ID_FK";
//	UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "UEJ";
	$fdata["GoodName"] = "UEJ";
	$fdata["ownerTable"] = "q_ctrl_saldo_0000c";
	$fdata["Label"] = GetFieldLabel("q_ctrl_saldo_0000c_Chart","UEJ");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "UEJ";

		$fdata["sourceSingle"] = "UEJ";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UEJ";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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
			$edata["EditParams"].= " maxlength=10";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_ctrl_saldo_0000c_chart["UEJ"] = $fdata;
		$tdataq_ctrl_saldo_0000c_chart[".searchableFields"][] = "UEJ";
//	VIGENCIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "VIGENCIA";
	$fdata["GoodName"] = "VIGENCIA";
	$fdata["ownerTable"] = "q_ctrl_saldo_0000c";
	$fdata["Label"] = GetFieldLabel("q_ctrl_saldo_0000c_Chart","VIGENCIA");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "VIGENCIA";

		$fdata["sourceSingle"] = "VIGENCIA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VIGENCIA";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_ctrl_saldo_0000c_chart["VIGENCIA"] = $fdata;
		$tdataq_ctrl_saldo_0000c_chart[".searchableFields"][] = "VIGENCIA";
//	QTYRUBRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "QTYRUBRO";
	$fdata["GoodName"] = "QTYRUBRO";
	$fdata["ownerTable"] = "q_ctrl_saldo_0000c";
	$fdata["Label"] = GetFieldLabel("q_ctrl_saldo_0000c_Chart","QTYRUBRO");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "QTYRUBRO";

		$fdata["sourceSingle"] = "QTYRUBRO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "QTYRUBRO";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_ctrl_saldo_0000c_chart["QTYRUBRO"] = $fdata;
		$tdataq_ctrl_saldo_0000c_chart[".searchableFields"][] = "QTYRUBRO";
//	PRESUPUESTO_OFICIAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PRESUPUESTO_OFICIAL";
	$fdata["GoodName"] = "PRESUPUESTO_OFICIAL";
	$fdata["ownerTable"] = "q_ctrl_saldo_0000c";
	$fdata["Label"] = GetFieldLabel("q_ctrl_saldo_0000c_Chart","PRESUPUESTO_OFICIAL");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "PRESUPUESTO_OFICIAL";

		$fdata["sourceSingle"] = "PRESUPUESTO_OFICIAL";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRESUPUESTO_OFICIAL";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_ctrl_saldo_0000c_chart["PRESUPUESTO_OFICIAL"] = $fdata;
		$tdataq_ctrl_saldo_0000c_chart[".searchableFields"][] = "PRESUPUESTO_OFICIAL";
//	PRESUPUESTO_SOLICITADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "PRESUPUESTO_SOLICITADO";
	$fdata["GoodName"] = "PRESUPUESTO_SOLICITADO";
	$fdata["ownerTable"] = "q_ctrl_saldo_0000c";
	$fdata["Label"] = GetFieldLabel("q_ctrl_saldo_0000c_Chart","PRESUPUESTO_SOLICITADO");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "PRESUPUESTO_SOLICITADO";

		$fdata["sourceSingle"] = "PRESUPUESTO_SOLICITADO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRESUPUESTO_SOLICITADO";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_ctrl_saldo_0000c_chart["PRESUPUESTO_SOLICITADO"] = $fdata;
		$tdataq_ctrl_saldo_0000c_chart[".searchableFields"][] = "PRESUPUESTO_SOLICITADO";

$tdataq_ctrl_saldo_0000c_chart[".chartLabelField"] = "UEJ";
$tdataq_ctrl_saldo_0000c_chart[".chartSeries"] = array();
$tdataq_ctrl_saldo_0000c_chart[".chartSeries"][] = array(
	"field" => "PRESUPUESTO_OFICIAL",
	"total" => ""
);
$tdataq_ctrl_saldo_0000c_chart[".chartSeries"][] = array(
	"field" => "PRESUPUESTO_SOLICITADO",
	"total" => ""
);
	$tdataq_ctrl_saldo_0000c_chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">q_ctrl_saldo_0000c Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">combined</attr>
		</attr>

		<attr value="parameters">';
	$tdataq_ctrl_saldo_0000c_chart[".chartXml"] .= '<attr value="0">
			<attr value="name">PRESUPUESTO_OFICIAL</attr>';
	$tdataq_ctrl_saldo_0000c_chart[".chartXml"] .= '</attr>';
	$tdataq_ctrl_saldo_0000c_chart[".chartXml"] .= '<attr value="1">
			<attr value="name">PRESUPUESTO_SOLICITADO</attr>';
	$tdataq_ctrl_saldo_0000c_chart[".chartXml"] .= '</attr>';
	$tdataq_ctrl_saldo_0000c_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">UEJ</attr>
	</attr>';
	$tdataq_ctrl_saldo_0000c_chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdataq_ctrl_saldo_0000c_chart[".chartXml"] .= '<attr value="head">'.xmlencode("q_ctrl_saldo_0000c Chart").'</attr>
<attr value="foot">'.xmlencode("UNIDAD EJECUTORA").'</attr>
<attr value="y_axis_label">'.xmlencode("PRESUPUESTO").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">true</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdataq_ctrl_saldo_0000c_chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataq_ctrl_saldo_0000c_chart[".chartXml"] .= '<attr value="0">
		<attr value="name">RUBRO_ID_FK</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_ctrl_saldo_0000c_Chart","RUBRO_ID_FK")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_ctrl_saldo_0000c_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">UEJ</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_ctrl_saldo_0000c_Chart","UEJ")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_ctrl_saldo_0000c_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">VIGENCIA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_ctrl_saldo_0000c_Chart","VIGENCIA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_ctrl_saldo_0000c_chart[".chartXml"] .= '<attr value="3">
		<attr value="name">QTYRUBRO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_ctrl_saldo_0000c_Chart","QTYRUBRO")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_ctrl_saldo_0000c_chart[".chartXml"] .= '<attr value="4">
		<attr value="name">PRESUPUESTO_OFICIAL</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_ctrl_saldo_0000c_Chart","PRESUPUESTO_OFICIAL")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_ctrl_saldo_0000c_chart[".chartXml"] .= '<attr value="5">
		<attr value="name">PRESUPUESTO_SOLICITADO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_ctrl_saldo_0000c_Chart","PRESUPUESTO_SOLICITADO")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataq_ctrl_saldo_0000c_chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">q_ctrl_saldo_0000c Chart</attr>
<attr value="short_table_name">q_ctrl_saldo_0000c_chart</attr>
</attr>

</chart>';

$tables_data["q_ctrl_saldo_0000c Chart"]=&$tdataq_ctrl_saldo_0000c_chart;
$field_labels["q_ctrl_saldo_0000c_Chart"] = &$fieldLabelsq_ctrl_saldo_0000c_chart;
$fieldToolTips["q_ctrl_saldo_0000c_Chart"] = &$fieldToolTipsq_ctrl_saldo_0000c_chart;
$placeHolders["q_ctrl_saldo_0000c_Chart"] = &$placeHoldersq_ctrl_saldo_0000c_chart;
$page_titles["q_ctrl_saldo_0000c_Chart"] = &$pageTitlesq_ctrl_saldo_0000c_chart;


changeTextControlsToDate( "q_ctrl_saldo_0000c Chart" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["q_ctrl_saldo_0000c Chart"] = array();
//	q_ctrl_saldo_0001c
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="q_ctrl_saldo_0001c";
		$detailsParam["dOriginalTable"] = "q_ctrl_saldo_0001c";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "q_ctrl_saldo_0001c";
	$detailsParam["dCaptionTable"] = GetTableCaption("q_ctrl_saldo_0001c");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["q_ctrl_saldo_0000c Chart"][$dIndex] = $detailsParam;

	
		$detailsTablesData["q_ctrl_saldo_0000c Chart"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["q_ctrl_saldo_0000c Chart"][$dIndex]["masterKeys"][]="UEJ";

	$detailsTablesData["q_ctrl_saldo_0000c Chart"][$dIndex]["masterKeys"][]="VIGENCIA";

				$detailsTablesData["q_ctrl_saldo_0000c Chart"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["q_ctrl_saldo_0000c Chart"][$dIndex]["detailKeys"][]="UEJ";

		
	$detailsTablesData["q_ctrl_saldo_0000c Chart"][$dIndex]["detailKeys"][]="VIGENCIA";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["q_ctrl_saldo_0000c Chart"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_q_ctrl_saldo_0000c_chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "RUBRO_ID_FK, UEJ, VIGENCIA, QTYRUBRO, PRESUPUESTO_OFICIAL, PRESUPUESTO_SOLICITADO";
$proto0["m_strFrom"] = "FROM q_ctrl_saldo_0000c";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY UEJ";
	
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
	"m_strName" => "RUBRO_ID_FK",
	"m_strTable" => "q_ctrl_saldo_0000c",
	"m_srcTableName" => "q_ctrl_saldo_0000c Chart"
));

$proto6["m_sql"] = "RUBRO_ID_FK";
$proto6["m_srcTableName"] = "q_ctrl_saldo_0000c Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "UEJ",
	"m_strTable" => "q_ctrl_saldo_0000c",
	"m_srcTableName" => "q_ctrl_saldo_0000c Chart"
));

$proto8["m_sql"] = "UEJ";
$proto8["m_srcTableName"] = "q_ctrl_saldo_0000c Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "VIGENCIA",
	"m_strTable" => "q_ctrl_saldo_0000c",
	"m_srcTableName" => "q_ctrl_saldo_0000c Chart"
));

$proto10["m_sql"] = "VIGENCIA";
$proto10["m_srcTableName"] = "q_ctrl_saldo_0000c Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "QTYRUBRO",
	"m_strTable" => "q_ctrl_saldo_0000c",
	"m_srcTableName" => "q_ctrl_saldo_0000c Chart"
));

$proto12["m_sql"] = "QTYRUBRO";
$proto12["m_srcTableName"] = "q_ctrl_saldo_0000c Chart";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "PRESUPUESTO_OFICIAL",
	"m_strTable" => "q_ctrl_saldo_0000c",
	"m_srcTableName" => "q_ctrl_saldo_0000c Chart"
));

$proto14["m_sql"] = "PRESUPUESTO_OFICIAL";
$proto14["m_srcTableName"] = "q_ctrl_saldo_0000c Chart";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "PRESUPUESTO_SOLICITADO",
	"m_strTable" => "q_ctrl_saldo_0000c",
	"m_srcTableName" => "q_ctrl_saldo_0000c Chart"
));

$proto16["m_sql"] = "PRESUPUESTO_SOLICITADO";
$proto16["m_srcTableName"] = "q_ctrl_saldo_0000c Chart";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "q_ctrl_saldo_0000c";
$proto19["m_srcTableName"] = "q_ctrl_saldo_0000c Chart";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "RUBRO_ID_FK";
$proto19["m_columns"][] = "UEJ";
$proto19["m_columns"][] = "VIGENCIA";
$proto19["m_columns"][] = "QTYRUBRO";
$proto19["m_columns"][] = "PRESUPUESTO_OFICIAL";
$proto19["m_columns"][] = "PRESUPUESTO_SOLICITADO";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "q_ctrl_saldo_0000c";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "q_ctrl_saldo_0000c Chart";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto22=array();
						$obj = new SQLField(array(
	"m_strName" => "UEJ",
	"m_strTable" => "q_ctrl_saldo_0000c",
	"m_srcTableName" => "q_ctrl_saldo_0000c Chart"
));

$proto22["m_column"]=$obj;
$proto22["m_bAsc"] = 1;
$proto22["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto22);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="q_ctrl_saldo_0000c Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_ctrl_saldo_0000c_chart = createSqlQuery_q_ctrl_saldo_0000c_chart();


	
										;

						

$tdataq_ctrl_saldo_0000c_chart[".sqlquery"] = $queryData_q_ctrl_saldo_0000c_chart;



include_once(getabspath("include/q_ctrl_saldo_0000c_chart_events.php"));
$tdataq_ctrl_saldo_0000c_chart[".hasEvents"] = true;

?>