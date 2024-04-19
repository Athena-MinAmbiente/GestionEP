<?php
$tdataq_ep_000_chart = array();
$tdataq_ep_000_chart[".searchableFields"] = array();
$tdataq_ep_000_chart[".ShortName"] = "q_ep_000_chart";
$tdataq_ep_000_chart[".OwnerID"] = "";
$tdataq_ep_000_chart[".OriginalTable"] = "q_ep_000";


$tdataq_ep_000_chart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdataq_ep_000_chart[".originalPagesByType"] = $tdataq_ep_000_chart[".pagesByType"];
$tdataq_ep_000_chart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdataq_ep_000_chart[".originalPages"] = $tdataq_ep_000_chart[".pages"];
$tdataq_ep_000_chart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdataq_ep_000_chart[".originalDefaultPages"] = $tdataq_ep_000_chart[".defaultPages"];

//	field labels
$fieldLabelsq_ep_000_chart = array();
$fieldToolTipsq_ep_000_chart = array();
$pageTitlesq_ep_000_chart = array();
$placeHoldersq_ep_000_chart = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_ep_000_chart["Spanish"] = array();
	$fieldToolTipsq_ep_000_chart["Spanish"] = array();
	$placeHoldersq_ep_000_chart["Spanish"] = array();
	$pageTitlesq_ep_000_chart["Spanish"] = array();
	$fieldLabelsq_ep_000_chart["Spanish"]["UEJ"] = "UEJ";
	$fieldToolTipsq_ep_000_chart["Spanish"]["UEJ"] = "";
	$placeHoldersq_ep_000_chart["Spanish"]["UEJ"] = "";
	$fieldLabelsq_ep_000_chart["Spanish"]["QTY"] = "QTY";
	$fieldToolTipsq_ep_000_chart["Spanish"]["QTY"] = "";
	$placeHoldersq_ep_000_chart["Spanish"]["QTY"] = "";
	$fieldLabelsq_ep_000_chart["Spanish"]["VIGENTE"] = "VIGENTE";
	$fieldToolTipsq_ep_000_chart["Spanish"]["VIGENTE"] = "";
	$placeHoldersq_ep_000_chart["Spanish"]["VIGENTE"] = "";
	$fieldLabelsq_ep_000_chart["Spanish"]["COMPROMETIDO"] = "COMPROMETIDO";
	$fieldToolTipsq_ep_000_chart["Spanish"]["COMPROMETIDO"] = "";
	$placeHoldersq_ep_000_chart["Spanish"]["COMPROMETIDO"] = "";
	$fieldLabelsq_ep_000_chart["Spanish"]["OBLIGADO"] = "OBLIGADO";
	$fieldToolTipsq_ep_000_chart["Spanish"]["OBLIGADO"] = "";
	$placeHoldersq_ep_000_chart["Spanish"]["OBLIGADO"] = "";
	$fieldLabelsq_ep_000_chart["Spanish"]["ORDENPAGO"] = "ORDENPAGO";
	$fieldToolTipsq_ep_000_chart["Spanish"]["ORDENPAGO"] = "";
	$placeHoldersq_ep_000_chart["Spanish"]["ORDENPAGO"] = "";
	$fieldLabelsq_ep_000_chart["Spanish"]["PAGADO"] = "PAGADO";
	$fieldToolTipsq_ep_000_chart["Spanish"]["PAGADO"] = "";
	$placeHoldersq_ep_000_chart["Spanish"]["PAGADO"] = "";
	$fieldLabelsq_ep_000_chart["Spanish"]["FA"] = "FA";
	$fieldToolTipsq_ep_000_chart["Spanish"]["FA"] = "";
	$placeHoldersq_ep_000_chart["Spanish"]["FA"] = "";
	if (count($fieldToolTipsq_ep_000_chart["Spanish"]))
		$tdataq_ep_000_chart[".isUseToolTips"] = true;
}


	$tdataq_ep_000_chart[".NCSearch"] = true;

	$tdataq_ep_000_chart[".ChartRefreshTime"] = 0;


$tdataq_ep_000_chart[".shortTableName"] = "q_ep_000_chart";
$tdataq_ep_000_chart[".nSecOptions"] = 0;

$tdataq_ep_000_chart[".mainTableOwnerID"] = "";
$tdataq_ep_000_chart[".entityType"] = 3;
$tdataq_ep_000_chart[".connId"] = "sep2_at_127_0_0_1";


$tdataq_ep_000_chart[".strOriginalTableName"] = "q_ep_000";

	



$tdataq_ep_000_chart[".showAddInPopup"] = false;

$tdataq_ep_000_chart[".showEditInPopup"] = false;

$tdataq_ep_000_chart[".showViewInPopup"] = false;

$tdataq_ep_000_chart[".listAjax"] = false;
//	temporary
//$tdataq_ep_000_chart[".listAjax"] = false;

	$tdataq_ep_000_chart[".audit"] = false;

	$tdataq_ep_000_chart[".locking"] = false;


$pages = $tdataq_ep_000_chart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_ep_000_chart[".edit"] = true;
	$tdataq_ep_000_chart[".afterEditAction"] = 1;
	$tdataq_ep_000_chart[".closePopupAfterEdit"] = 1;
	$tdataq_ep_000_chart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_ep_000_chart[".add"] = true;
$tdataq_ep_000_chart[".afterAddAction"] = 1;
$tdataq_ep_000_chart[".closePopupAfterAdd"] = 1;
$tdataq_ep_000_chart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_ep_000_chart[".list"] = true;
}



$tdataq_ep_000_chart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_ep_000_chart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_ep_000_chart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_ep_000_chart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_ep_000_chart[".printFriendly"] = true;
}



$tdataq_ep_000_chart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_ep_000_chart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_ep_000_chart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_ep_000_chart[".isUseAjaxSuggest"] = true;



												

$tdataq_ep_000_chart[".ajaxCodeSnippetAdded"] = false;

$tdataq_ep_000_chart[".buttonsAdded"] = false;

$tdataq_ep_000_chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_ep_000_chart[".isUseTimeForSearch"] = false;


$tdataq_ep_000_chart[".badgeColor"] = "00C2C5";


$tdataq_ep_000_chart[".allSearchFields"] = array();
$tdataq_ep_000_chart[".filterFields"] = array();
$tdataq_ep_000_chart[".requiredSearchFields"] = array();

$tdataq_ep_000_chart[".googleLikeFields"] = array();
$tdataq_ep_000_chart[".googleLikeFields"][] = "UEJ";
$tdataq_ep_000_chart[".googleLikeFields"][] = "QTY";
$tdataq_ep_000_chart[".googleLikeFields"][] = "VIGENTE";
$tdataq_ep_000_chart[".googleLikeFields"][] = "COMPROMETIDO";
$tdataq_ep_000_chart[".googleLikeFields"][] = "OBLIGADO";
$tdataq_ep_000_chart[".googleLikeFields"][] = "ORDENPAGO";
$tdataq_ep_000_chart[".googleLikeFields"][] = "PAGADO";
$tdataq_ep_000_chart[".googleLikeFields"][] = "FA";



$tdataq_ep_000_chart[".tableType"] = "chart";

$tdataq_ep_000_chart[".printerPageOrientation"] = 0;
$tdataq_ep_000_chart[".nPrinterPageScale"] = 100;

$tdataq_ep_000_chart[".nPrinterSplitRecords"] = 40;

$tdataq_ep_000_chart[".geocodingEnabled"] = false;



// chart settings
$tdataq_ep_000_chart[".chartType"] = "2DColumn";
// end of chart settings

$tdataq_ep_000_chart[".isDisplayLoading"] = true;







$tstrOrderBy = "";
$tdataq_ep_000_chart[".strOrderBy"] = $tstrOrderBy;

$tdataq_ep_000_chart[".orderindexes"] = array();


$tdataq_ep_000_chart[".sqlHead"] = "SELECT UEJ,  	QTY,  	VIGENTE,  	COMPROMETIDO,  	OBLIGADO,  	ORDENPAGO,  	PAGADO,  	FA";
$tdataq_ep_000_chart[".sqlFrom"] = "FROM q_ep_000";
$tdataq_ep_000_chart[".sqlWhereExpr"] = "";
$tdataq_ep_000_chart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_ep_000_chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_ep_000_chart[".arrGroupsPerPage"] = $arrGPP;

$tdataq_ep_000_chart[".highlightSearchResults"] = true;

$tableKeysq_ep_000_chart = array();
$tdataq_ep_000_chart[".Keys"] = $tableKeysq_ep_000_chart;


$tdataq_ep_000_chart[".hideMobileList"] = array();




//	UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "UEJ";
	$fdata["GoodName"] = "UEJ";
	$fdata["ownerTable"] = "q_ep_000";
	$fdata["Label"] = GetFieldLabel("q_ep_000_Chart","UEJ");
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
			$edata["EditParams"].= " maxlength=255";

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
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "QTY";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_ep_000_chart["UEJ"] = $fdata;
		$tdataq_ep_000_chart[".searchableFields"][] = "UEJ";
//	QTY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "QTY";
	$fdata["GoodName"] = "QTY";
	$fdata["ownerTable"] = "q_ep_000";
	$fdata["Label"] = GetFieldLabel("q_ep_000_Chart","QTY");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "QTY";

		$fdata["sourceSingle"] = "QTY";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "QTY";

	
	
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


	$tdataq_ep_000_chart["QTY"] = $fdata;
		$tdataq_ep_000_chart[".searchableFields"][] = "QTY";
//	VIGENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "VIGENTE";
	$fdata["GoodName"] = "VIGENTE";
	$fdata["ownerTable"] = "q_ep_000";
	$fdata["Label"] = GetFieldLabel("q_ep_000_Chart","VIGENTE");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "VIGENTE";

		$fdata["sourceSingle"] = "VIGENTE";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VIGENTE";

	
	
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


	$tdataq_ep_000_chart["VIGENTE"] = $fdata;
		$tdataq_ep_000_chart[".searchableFields"][] = "VIGENTE";
//	COMPROMETIDO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "COMPROMETIDO";
	$fdata["GoodName"] = "COMPROMETIDO";
	$fdata["ownerTable"] = "q_ep_000";
	$fdata["Label"] = GetFieldLabel("q_ep_000_Chart","COMPROMETIDO");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "COMPROMETIDO";

		$fdata["sourceSingle"] = "COMPROMETIDO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COMPROMETIDO";

	
	
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


	$tdataq_ep_000_chart["COMPROMETIDO"] = $fdata;
		$tdataq_ep_000_chart[".searchableFields"][] = "COMPROMETIDO";
//	OBLIGADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "OBLIGADO";
	$fdata["GoodName"] = "OBLIGADO";
	$fdata["ownerTable"] = "q_ep_000";
	$fdata["Label"] = GetFieldLabel("q_ep_000_Chart","OBLIGADO");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "OBLIGADO";

		$fdata["sourceSingle"] = "OBLIGADO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OBLIGADO";

	
	
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


	$tdataq_ep_000_chart["OBLIGADO"] = $fdata;
		$tdataq_ep_000_chart[".searchableFields"][] = "OBLIGADO";
//	ORDENPAGO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ORDENPAGO";
	$fdata["GoodName"] = "ORDENPAGO";
	$fdata["ownerTable"] = "q_ep_000";
	$fdata["Label"] = GetFieldLabel("q_ep_000_Chart","ORDENPAGO");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "ORDENPAGO";

		$fdata["sourceSingle"] = "ORDENPAGO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ORDENPAGO";

	
	
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


	$tdataq_ep_000_chart["ORDENPAGO"] = $fdata;
		$tdataq_ep_000_chart[".searchableFields"][] = "ORDENPAGO";
//	PAGADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PAGADO";
	$fdata["GoodName"] = "PAGADO";
	$fdata["ownerTable"] = "q_ep_000";
	$fdata["Label"] = GetFieldLabel("q_ep_000_Chart","PAGADO");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "PAGADO";

		$fdata["sourceSingle"] = "PAGADO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PAGADO";

	
	
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


	$tdataq_ep_000_chart["PAGADO"] = $fdata;
		$tdataq_ep_000_chart[".searchableFields"][] = "PAGADO";
//	FA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "FA";
	$fdata["GoodName"] = "FA";
	$fdata["ownerTable"] = "q_ep_000";
	$fdata["Label"] = GetFieldLabel("q_ep_000_Chart","FA");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "FA";

		$fdata["sourceSingle"] = "FA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FA";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdataq_ep_000_chart["FA"] = $fdata;
		$tdataq_ep_000_chart[".searchableFields"][] = "FA";

$tdataq_ep_000_chart[".groupChart"] = true;
$tdataq_ep_000_chart[".chartLabelInterval"] = 0;
$tdataq_ep_000_chart[".chartLabelField"] = "UEJ";
$tdataq_ep_000_chart[".chartSeries"] = array();
$tdataq_ep_000_chart[".chartSeries"][] = array(
	"field" => "VIGENTE",
	"total" => "SUM"
);
$tdataq_ep_000_chart[".chartSeries"][] = array(
	"field" => "COMPROMETIDO",
	"total" => "SUM"
);
$tdataq_ep_000_chart[".chartSeries"][] = array(
	"field" => "OBLIGADO",
	"total" => "SUM"
);
$tdataq_ep_000_chart[".chartSeries"][] = array(
	"field" => "ORDENPAGO",
	"total" => "SUM"
);
$tdataq_ep_000_chart[".chartSeries"][] = array(
	"field" => "PAGADO",
	"total" => "SUM"
);
	$tdataq_ep_000_chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">q_ep_000 Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdataq_ep_000_chart[".chartXml"] .= '<attr value="0">
			<attr value="name">VIGENTE</attr>';
	$tdataq_ep_000_chart[".chartXml"] .= '</attr>';
	$tdataq_ep_000_chart[".chartXml"] .= '<attr value="1">
			<attr value="name">COMPROMETIDO</attr>';
	$tdataq_ep_000_chart[".chartXml"] .= '</attr>';
	$tdataq_ep_000_chart[".chartXml"] .= '<attr value="2">
			<attr value="name">OBLIGADO</attr>';
	$tdataq_ep_000_chart[".chartXml"] .= '</attr>';
	$tdataq_ep_000_chart[".chartXml"] .= '<attr value="3">
			<attr value="name">ORDENPAGO</attr>';
	$tdataq_ep_000_chart[".chartXml"] .= '</attr>';
	$tdataq_ep_000_chart[".chartXml"] .= '<attr value="4">
			<attr value="name">PAGADO</attr>';
	$tdataq_ep_000_chart[".chartXml"] .= '</attr>';
	$tdataq_ep_000_chart[".chartXml"] .= '<attr value="5">
		<attr value="name">UEJ</attr>
	</attr>';
	$tdataq_ep_000_chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdataq_ep_000_chart[".chartXml"] .= '<attr value="head">'.xmlencode("EJECUCIÓN PRESUPUESTAL AGREGADA").'</attr>
<attr value="foot">'.xmlencode("CLASE").'</attr>
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
$tdataq_ep_000_chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataq_ep_000_chart[".chartXml"] .= '<attr value="0">
		<attr value="name">UEJ</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_ep_000_Chart","UEJ")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_ep_000_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">QTY</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_ep_000_Chart","QTY")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_ep_000_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">VIGENTE</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_ep_000_Chart","VIGENTE")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_ep_000_chart[".chartXml"] .= '<attr value="3">
		<attr value="name">COMPROMETIDO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_ep_000_Chart","COMPROMETIDO")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_ep_000_chart[".chartXml"] .= '<attr value="4">
		<attr value="name">OBLIGADO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_ep_000_Chart","OBLIGADO")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_ep_000_chart[".chartXml"] .= '<attr value="5">
		<attr value="name">ORDENPAGO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_ep_000_Chart","ORDENPAGO")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_ep_000_chart[".chartXml"] .= '<attr value="6">
		<attr value="name">PAGADO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_ep_000_Chart","PAGADO")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_ep_000_chart[".chartXml"] .= '<attr value="7">
		<attr value="name">FA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_ep_000_Chart","FA")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataq_ep_000_chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">q_ep_000 Chart</attr>
<attr value="short_table_name">q_ep_000_chart</attr>
</attr>

</chart>';

$tables_data["q_ep_000 Chart"]=&$tdataq_ep_000_chart;
$field_labels["q_ep_000_Chart"] = &$fieldLabelsq_ep_000_chart;
$fieldToolTips["q_ep_000_Chart"] = &$fieldToolTipsq_ep_000_chart;
$placeHolders["q_ep_000_Chart"] = &$placeHoldersq_ep_000_chart;
$page_titles["q_ep_000_Chart"] = &$pageTitlesq_ep_000_chart;


changeTextControlsToDate( "q_ep_000 Chart" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["q_ep_000 Chart"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["q_ep_000 Chart"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_q_ep_000_chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "UEJ,  	QTY,  	VIGENTE,  	COMPROMETIDO,  	OBLIGADO,  	ORDENPAGO,  	PAGADO,  	FA";
$proto0["m_strFrom"] = "FROM q_ep_000";
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
	"m_strName" => "UEJ",
	"m_strTable" => "q_ep_000",
	"m_srcTableName" => "q_ep_000 Chart"
));

$proto6["m_sql"] = "UEJ";
$proto6["m_srcTableName"] = "q_ep_000 Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "QTY",
	"m_strTable" => "q_ep_000",
	"m_srcTableName" => "q_ep_000 Chart"
));

$proto8["m_sql"] = "QTY";
$proto8["m_srcTableName"] = "q_ep_000 Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "VIGENTE",
	"m_strTable" => "q_ep_000",
	"m_srcTableName" => "q_ep_000 Chart"
));

$proto10["m_sql"] = "VIGENTE";
$proto10["m_srcTableName"] = "q_ep_000 Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "COMPROMETIDO",
	"m_strTable" => "q_ep_000",
	"m_srcTableName" => "q_ep_000 Chart"
));

$proto12["m_sql"] = "COMPROMETIDO";
$proto12["m_srcTableName"] = "q_ep_000 Chart";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "OBLIGADO",
	"m_strTable" => "q_ep_000",
	"m_srcTableName" => "q_ep_000 Chart"
));

$proto14["m_sql"] = "OBLIGADO";
$proto14["m_srcTableName"] = "q_ep_000 Chart";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ORDENPAGO",
	"m_strTable" => "q_ep_000",
	"m_srcTableName" => "q_ep_000 Chart"
));

$proto16["m_sql"] = "ORDENPAGO";
$proto16["m_srcTableName"] = "q_ep_000 Chart";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "PAGADO",
	"m_strTable" => "q_ep_000",
	"m_srcTableName" => "q_ep_000 Chart"
));

$proto18["m_sql"] = "PAGADO";
$proto18["m_srcTableName"] = "q_ep_000 Chart";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "FA",
	"m_strTable" => "q_ep_000",
	"m_srcTableName" => "q_ep_000 Chart"
));

$proto20["m_sql"] = "FA";
$proto20["m_srcTableName"] = "q_ep_000 Chart";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "q_ep_000";
$proto23["m_srcTableName"] = "q_ep_000 Chart";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "UEJ";
$proto23["m_columns"][] = "QTY";
$proto23["m_columns"][] = "VIGENTE";
$proto23["m_columns"][] = "COMPROMETIDO";
$proto23["m_columns"][] = "OBLIGADO";
$proto23["m_columns"][] = "ORDENPAGO";
$proto23["m_columns"][] = "PAGADO";
$proto23["m_columns"][] = "FA";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "q_ep_000";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "q_ep_000 Chart";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="q_ep_000 Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_ep_000_chart = createSqlQuery_q_ep_000_chart();


	
										;

								

$tdataq_ep_000_chart[".sqlquery"] = $queryData_q_ep_000_chart;



$tdataq_ep_000_chart[".hasEvents"] = false;

?>