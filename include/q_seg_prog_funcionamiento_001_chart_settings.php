<?php
$tdataq_seg_prog_funcionamiento_001_chart = array();
$tdataq_seg_prog_funcionamiento_001_chart[".searchableFields"] = array();
$tdataq_seg_prog_funcionamiento_001_chart[".ShortName"] = "q_seg_prog_funcionamiento_001_chart";
$tdataq_seg_prog_funcionamiento_001_chart[".OwnerID"] = "";
$tdataq_seg_prog_funcionamiento_001_chart[".OriginalTable"] = "q_seg_prog_funcionamiento_001";


$tdataq_seg_prog_funcionamiento_001_chart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdataq_seg_prog_funcionamiento_001_chart[".originalPagesByType"] = $tdataq_seg_prog_funcionamiento_001_chart[".pagesByType"];
$tdataq_seg_prog_funcionamiento_001_chart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdataq_seg_prog_funcionamiento_001_chart[".originalPages"] = $tdataq_seg_prog_funcionamiento_001_chart[".pages"];
$tdataq_seg_prog_funcionamiento_001_chart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdataq_seg_prog_funcionamiento_001_chart[".originalDefaultPages"] = $tdataq_seg_prog_funcionamiento_001_chart[".defaultPages"];

//	field labels
$fieldLabelsq_seg_prog_funcionamiento_001_chart = array();
$fieldToolTipsq_seg_prog_funcionamiento_001_chart = array();
$pageTitlesq_seg_prog_funcionamiento_001_chart = array();
$placeHoldersq_seg_prog_funcionamiento_001_chart = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_seg_prog_funcionamiento_001_chart["Spanish"] = array();
	$fieldToolTipsq_seg_prog_funcionamiento_001_chart["Spanish"] = array();
	$placeHoldersq_seg_prog_funcionamiento_001_chart["Spanish"] = array();
	$pageTitlesq_seg_prog_funcionamiento_001_chart["Spanish"] = array();
	$fieldLabelsq_seg_prog_funcionamiento_001_chart["Spanish"]["PROD_PRESUPUESTO"] = "PRESUPUESTO";
	$fieldToolTipsq_seg_prog_funcionamiento_001_chart["Spanish"]["PROD_PRESUPUESTO"] = "";
	$placeHoldersq_seg_prog_funcionamiento_001_chart["Spanish"]["PROD_PRESUPUESTO"] = "";
	$fieldLabelsq_seg_prog_funcionamiento_001_chart["Spanish"]["SUM_ACT"] = "PROGRAMADO";
	$fieldToolTipsq_seg_prog_funcionamiento_001_chart["Spanish"]["SUM_ACT"] = "";
	$placeHoldersq_seg_prog_funcionamiento_001_chart["Spanish"]["SUM_ACT"] = "";
	$fieldLabelsq_seg_prog_funcionamiento_001_chart["Spanish"]["PENDIENTE_PROG"] = "PENDIENTE PROG";
	$fieldToolTipsq_seg_prog_funcionamiento_001_chart["Spanish"]["PENDIENTE_PROG"] = "";
	$placeHoldersq_seg_prog_funcionamiento_001_chart["Spanish"]["PENDIENTE_PROG"] = "";
	$fieldLabelsq_seg_prog_funcionamiento_001_chart["Spanish"]["Dependencia"] = "DEPENDENCIA";
	$fieldToolTipsq_seg_prog_funcionamiento_001_chart["Spanish"]["Dependencia"] = "";
	$placeHoldersq_seg_prog_funcionamiento_001_chart["Spanish"]["Dependencia"] = "";
	$fieldLabelsq_seg_prog_funcionamiento_001_chart["Spanish"]["UsuarioResp"] = "Usuario Resp";
	$fieldToolTipsq_seg_prog_funcionamiento_001_chart["Spanish"]["UsuarioResp"] = "";
	$placeHoldersq_seg_prog_funcionamiento_001_chart["Spanish"]["UsuarioResp"] = "";
	$fieldLabelsq_seg_prog_funcionamiento_001_chart["Spanish"]["PRODUCTO"] = "PRODUCTO";
	$fieldToolTipsq_seg_prog_funcionamiento_001_chart["Spanish"]["PRODUCTO"] = "";
	$placeHoldersq_seg_prog_funcionamiento_001_chart["Spanish"]["PRODUCTO"] = "";
	if (count($fieldToolTipsq_seg_prog_funcionamiento_001_chart["Spanish"]))
		$tdataq_seg_prog_funcionamiento_001_chart[".isUseToolTips"] = true;
}


	$tdataq_seg_prog_funcionamiento_001_chart[".NCSearch"] = true;

	$tdataq_seg_prog_funcionamiento_001_chart[".ChartRefreshTime"] = 0;


$tdataq_seg_prog_funcionamiento_001_chart[".shortTableName"] = "q_seg_prog_funcionamiento_001_chart";
$tdataq_seg_prog_funcionamiento_001_chart[".nSecOptions"] = 0;

$tdataq_seg_prog_funcionamiento_001_chart[".mainTableOwnerID"] = "";
$tdataq_seg_prog_funcionamiento_001_chart[".entityType"] = 3;
$tdataq_seg_prog_funcionamiento_001_chart[".connId"] = "sep2_at_127_0_0_1";


$tdataq_seg_prog_funcionamiento_001_chart[".strOriginalTableName"] = "q_seg_prog_funcionamiento_001";

	



$tdataq_seg_prog_funcionamiento_001_chart[".showAddInPopup"] = false;

$tdataq_seg_prog_funcionamiento_001_chart[".showEditInPopup"] = false;

$tdataq_seg_prog_funcionamiento_001_chart[".showViewInPopup"] = false;

$tdataq_seg_prog_funcionamiento_001_chart[".listAjax"] = false;
//	temporary
//$tdataq_seg_prog_funcionamiento_001_chart[".listAjax"] = false;

	$tdataq_seg_prog_funcionamiento_001_chart[".audit"] = false;

	$tdataq_seg_prog_funcionamiento_001_chart[".locking"] = false;


$pages = $tdataq_seg_prog_funcionamiento_001_chart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_seg_prog_funcionamiento_001_chart[".edit"] = true;
	$tdataq_seg_prog_funcionamiento_001_chart[".afterEditAction"] = 1;
	$tdataq_seg_prog_funcionamiento_001_chart[".closePopupAfterEdit"] = 1;
	$tdataq_seg_prog_funcionamiento_001_chart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_seg_prog_funcionamiento_001_chart[".add"] = true;
$tdataq_seg_prog_funcionamiento_001_chart[".afterAddAction"] = 1;
$tdataq_seg_prog_funcionamiento_001_chart[".closePopupAfterAdd"] = 1;
$tdataq_seg_prog_funcionamiento_001_chart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_seg_prog_funcionamiento_001_chart[".list"] = true;
}



$tdataq_seg_prog_funcionamiento_001_chart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_seg_prog_funcionamiento_001_chart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_seg_prog_funcionamiento_001_chart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_seg_prog_funcionamiento_001_chart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_seg_prog_funcionamiento_001_chart[".printFriendly"] = true;
}



$tdataq_seg_prog_funcionamiento_001_chart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_seg_prog_funcionamiento_001_chart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_seg_prog_funcionamiento_001_chart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_seg_prog_funcionamiento_001_chart[".isUseAjaxSuggest"] = true;



												

$tdataq_seg_prog_funcionamiento_001_chart[".ajaxCodeSnippetAdded"] = false;

$tdataq_seg_prog_funcionamiento_001_chart[".buttonsAdded"] = false;

$tdataq_seg_prog_funcionamiento_001_chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_seg_prog_funcionamiento_001_chart[".isUseTimeForSearch"] = false;


$tdataq_seg_prog_funcionamiento_001_chart[".badgeColor"] = "E8926F";


$tdataq_seg_prog_funcionamiento_001_chart[".allSearchFields"] = array();
$tdataq_seg_prog_funcionamiento_001_chart[".filterFields"] = array();
$tdataq_seg_prog_funcionamiento_001_chart[".requiredSearchFields"] = array();

$tdataq_seg_prog_funcionamiento_001_chart[".googleLikeFields"] = array();
$tdataq_seg_prog_funcionamiento_001_chart[".googleLikeFields"][] = "Dependencia";
$tdataq_seg_prog_funcionamiento_001_chart[".googleLikeFields"][] = "PROD_PRESUPUESTO";
$tdataq_seg_prog_funcionamiento_001_chart[".googleLikeFields"][] = "SUM_ACT";
$tdataq_seg_prog_funcionamiento_001_chart[".googleLikeFields"][] = "PENDIENTE_PROG";
$tdataq_seg_prog_funcionamiento_001_chart[".googleLikeFields"][] = "UsuarioResp";
$tdataq_seg_prog_funcionamiento_001_chart[".googleLikeFields"][] = "PRODUCTO";



$tdataq_seg_prog_funcionamiento_001_chart[".tableType"] = "chart";

$tdataq_seg_prog_funcionamiento_001_chart[".printerPageOrientation"] = 0;
$tdataq_seg_prog_funcionamiento_001_chart[".nPrinterPageScale"] = 100;

$tdataq_seg_prog_funcionamiento_001_chart[".nPrinterSplitRecords"] = 40;

$tdataq_seg_prog_funcionamiento_001_chart[".geocodingEnabled"] = false;



// chart settings
$tdataq_seg_prog_funcionamiento_001_chart[".chartType"] = "Combined";
// end of chart settings

$tdataq_seg_prog_funcionamiento_001_chart[".isDisplayLoading"] = true;



$tdataq_seg_prog_funcionamiento_001_chart[".noRecordsFirstPage"] = true;




$tstrOrderBy = "";
$tdataq_seg_prog_funcionamiento_001_chart[".strOrderBy"] = $tstrOrderBy;

$tdataq_seg_prog_funcionamiento_001_chart[".orderindexes"] = array();


$tdataq_seg_prog_funcionamiento_001_chart[".sqlHead"] = "SELECT Dependencia, PROD_PRESUPUESTO, SUM_ACT, PENDIENTE_PROG, UsuarioResp, PRODUCTO";
$tdataq_seg_prog_funcionamiento_001_chart[".sqlFrom"] = "FROM q_seg_prog_funcionamiento_001";
$tdataq_seg_prog_funcionamiento_001_chart[".sqlWhereExpr"] = "(VIGENCIA =2022) AND (sol_paa = 1)";
$tdataq_seg_prog_funcionamiento_001_chart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_seg_prog_funcionamiento_001_chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_seg_prog_funcionamiento_001_chart[".arrGroupsPerPage"] = $arrGPP;

$tdataq_seg_prog_funcionamiento_001_chart[".highlightSearchResults"] = true;

$tableKeysq_seg_prog_funcionamiento_001_chart = array();
$tdataq_seg_prog_funcionamiento_001_chart[".Keys"] = $tableKeysq_seg_prog_funcionamiento_001_chart;


$tdataq_seg_prog_funcionamiento_001_chart[".hideMobileList"] = array();




//	Dependencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Dependencia";
	$fdata["GoodName"] = "Dependencia";
	$fdata["ownerTable"] = "q_seg_prog_funcionamiento_001";
	$fdata["Label"] = GetFieldLabel("q_seg_prog_funcionamiento_001_Chart","Dependencia");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Dependencia";

		$fdata["sourceSingle"] = "Dependencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Dependencia";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dependencia";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "Dependencia";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_seg_prog_funcionamiento_001_chart["Dependencia"] = $fdata;
		$tdataq_seg_prog_funcionamiento_001_chart[".searchableFields"][] = "Dependencia";
//	PROD_PRESUPUESTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PROD_PRESUPUESTO";
	$fdata["GoodName"] = "PROD_PRESUPUESTO";
	$fdata["ownerTable"] = "q_seg_prog_funcionamiento_001";
	$fdata["Label"] = GetFieldLabel("q_seg_prog_funcionamiento_001_Chart","PROD_PRESUPUESTO");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "PROD_PRESUPUESTO";

		$fdata["sourceSingle"] = "PROD_PRESUPUESTO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PROD_PRESUPUESTO";

	
	
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


	$tdataq_seg_prog_funcionamiento_001_chart["PROD_PRESUPUESTO"] = $fdata;
		$tdataq_seg_prog_funcionamiento_001_chart[".searchableFields"][] = "PROD_PRESUPUESTO";
//	SUM_ACT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "SUM_ACT";
	$fdata["GoodName"] = "SUM_ACT";
	$fdata["ownerTable"] = "q_seg_prog_funcionamiento_001";
	$fdata["Label"] = GetFieldLabel("q_seg_prog_funcionamiento_001_Chart","SUM_ACT");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "SUM_ACT";

		$fdata["sourceSingle"] = "SUM_ACT";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM_ACT";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdataq_seg_prog_funcionamiento_001_chart["SUM_ACT"] = $fdata;
		$tdataq_seg_prog_funcionamiento_001_chart[".searchableFields"][] = "SUM_ACT";
//	PENDIENTE_PROG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PENDIENTE_PROG";
	$fdata["GoodName"] = "PENDIENTE_PROG";
	$fdata["ownerTable"] = "q_seg_prog_funcionamiento_001";
	$fdata["Label"] = GetFieldLabel("q_seg_prog_funcionamiento_001_Chart","PENDIENTE_PROG");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "PENDIENTE_PROG";

		$fdata["sourceSingle"] = "PENDIENTE_PROG";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PENDIENTE_PROG";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdataq_seg_prog_funcionamiento_001_chart["PENDIENTE_PROG"] = $fdata;
		$tdataq_seg_prog_funcionamiento_001_chart[".searchableFields"][] = "PENDIENTE_PROG";
//	UsuarioResp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "UsuarioResp";
	$fdata["GoodName"] = "UsuarioResp";
	$fdata["ownerTable"] = "q_seg_prog_funcionamiento_001";
	$fdata["Label"] = GetFieldLabel("q_seg_prog_funcionamiento_001_Chart","UsuarioResp");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "UsuarioResp";

		$fdata["sourceSingle"] = "UsuarioResp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UsuarioResp";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "global_users";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Username";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "usr_nombresfull";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataq_seg_prog_funcionamiento_001_chart["UsuarioResp"] = $fdata;
		$tdataq_seg_prog_funcionamiento_001_chart[".searchableFields"][] = "UsuarioResp";
//	PRODUCTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "PRODUCTO";
	$fdata["GoodName"] = "PRODUCTO";
	$fdata["ownerTable"] = "q_seg_prog_funcionamiento_001";
	$fdata["Label"] = GetFieldLabel("q_seg_prog_funcionamiento_001_Chart","PRODUCTO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PRODUCTO";

		$fdata["sourceSingle"] = "PRODUCTO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRODUCTO";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "Dependencia";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_seg_prog_funcionamiento_001_chart["PRODUCTO"] = $fdata;
		$tdataq_seg_prog_funcionamiento_001_chart[".searchableFields"][] = "PRODUCTO";

$tdataq_seg_prog_funcionamiento_001_chart[".chartLabelField"] = "Dependencia";
$tdataq_seg_prog_funcionamiento_001_chart[".chartSeries"] = array();
$tdataq_seg_prog_funcionamiento_001_chart[".chartSeries"][] = array(
	"field" => "PROD_PRESUPUESTO",
	"total" => ""
);
$tdataq_seg_prog_funcionamiento_001_chart[".chartSeries"][] = array(
	"field" => "SUM_ACT",
	"total" => ""
);
	$tdataq_seg_prog_funcionamiento_001_chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">q_seg_prog_funcionamiento_001 Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">combined</attr>
		</attr>

		<attr value="parameters">';
	$tdataq_seg_prog_funcionamiento_001_chart[".chartXml"] .= '<attr value="0">
			<attr value="name">PROD_PRESUPUESTO</attr>';
	$tdataq_seg_prog_funcionamiento_001_chart[".chartXml"] .= '</attr>';
	$tdataq_seg_prog_funcionamiento_001_chart[".chartXml"] .= '<attr value="1">
			<attr value="name">SUM_ACT</attr>';
	$tdataq_seg_prog_funcionamiento_001_chart[".chartXml"] .= '</attr>';
	$tdataq_seg_prog_funcionamiento_001_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">Dependencia</attr>
	</attr>';
	$tdataq_seg_prog_funcionamiento_001_chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdataq_seg_prog_funcionamiento_001_chart[".chartXml"] .= '<attr value="head">'.xmlencode("q_seg_prog_funcionamiento_001 Chart").'</attr>
<attr value="foot">'.xmlencode("DEPENDENCIA").'</attr>
<attr value="y_axis_label">'.xmlencode("PRESUPUESTO ASIGNADO").'</attr>


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
$tdataq_seg_prog_funcionamiento_001_chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataq_seg_prog_funcionamiento_001_chart[".chartXml"] .= '<attr value="0">
		<attr value="name">Dependencia</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_seg_prog_funcionamiento_001_Chart","Dependencia")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_seg_prog_funcionamiento_001_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">PROD_PRESUPUESTO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_seg_prog_funcionamiento_001_Chart","PROD_PRESUPUESTO")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_seg_prog_funcionamiento_001_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">SUM_ACT</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_seg_prog_funcionamiento_001_Chart","SUM_ACT")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_seg_prog_funcionamiento_001_chart[".chartXml"] .= '<attr value="3">
		<attr value="name">PENDIENTE_PROG</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_seg_prog_funcionamiento_001_Chart","PENDIENTE_PROG")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_seg_prog_funcionamiento_001_chart[".chartXml"] .= '<attr value="4">
		<attr value="name">UsuarioResp</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_seg_prog_funcionamiento_001_Chart","UsuarioResp")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_seg_prog_funcionamiento_001_chart[".chartXml"] .= '<attr value="5">
		<attr value="name">PRODUCTO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_seg_prog_funcionamiento_001_Chart","PRODUCTO")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataq_seg_prog_funcionamiento_001_chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">q_seg_prog_funcionamiento_001 Chart</attr>
<attr value="short_table_name">q_seg_prog_funcionamiento_001_chart</attr>
</attr>

</chart>';

$tables_data["q_seg_prog_funcionamiento_001 Chart"]=&$tdataq_seg_prog_funcionamiento_001_chart;
$field_labels["q_seg_prog_funcionamiento_001_Chart"] = &$fieldLabelsq_seg_prog_funcionamiento_001_chart;
$fieldToolTips["q_seg_prog_funcionamiento_001_Chart"] = &$fieldToolTipsq_seg_prog_funcionamiento_001_chart;
$placeHolders["q_seg_prog_funcionamiento_001_Chart"] = &$placeHoldersq_seg_prog_funcionamiento_001_chart;
$page_titles["q_seg_prog_funcionamiento_001_Chart"] = &$pageTitlesq_seg_prog_funcionamiento_001_chart;


changeTextControlsToDate( "q_seg_prog_funcionamiento_001 Chart" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["q_seg_prog_funcionamiento_001 Chart"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["q_seg_prog_funcionamiento_001 Chart"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_q_seg_prog_funcionamiento_001_chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Dependencia, PROD_PRESUPUESTO, SUM_ACT, PENDIENTE_PROG, UsuarioResp, PRODUCTO";
$proto0["m_strFrom"] = "FROM q_seg_prog_funcionamiento_001";
$proto0["m_strWhere"] = "(VIGENCIA =2022) AND (sol_paa = 1)";
$proto0["m_strOrderBy"] = "";
	
										;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(VIGENCIA =2022) AND (sol_paa = 1)";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(VIGENCIA =2022) AND (sol_paa = 1)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "VIGENCIA =2022";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "VIGENCIA",
	"m_strTable" => "q_seg_prog_funcionamiento_001",
	"m_srcTableName" => "q_seg_prog_funcionamiento_001 Chart"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "=2022";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "sol_paa = 1";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sol_paa",
	"m_strTable" => "q_seg_prog_funcionamiento_001",
	"m_srcTableName" => "q_seg_prog_funcionamiento_001 Chart"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "= 1";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto8=array();
$proto8["m_sql"] = "";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Dependencia",
	"m_strTable" => "q_seg_prog_funcionamiento_001",
	"m_srcTableName" => "q_seg_prog_funcionamiento_001 Chart"
));

$proto10["m_sql"] = "Dependencia";
$proto10["m_srcTableName"] = "q_seg_prog_funcionamiento_001 Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PROD_PRESUPUESTO",
	"m_strTable" => "q_seg_prog_funcionamiento_001",
	"m_srcTableName" => "q_seg_prog_funcionamiento_001 Chart"
));

$proto12["m_sql"] = "PROD_PRESUPUESTO";
$proto12["m_srcTableName"] = "q_seg_prog_funcionamiento_001 Chart";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "SUM_ACT",
	"m_strTable" => "q_seg_prog_funcionamiento_001",
	"m_srcTableName" => "q_seg_prog_funcionamiento_001 Chart"
));

$proto14["m_sql"] = "SUM_ACT";
$proto14["m_srcTableName"] = "q_seg_prog_funcionamiento_001 Chart";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "PENDIENTE_PROG",
	"m_strTable" => "q_seg_prog_funcionamiento_001",
	"m_srcTableName" => "q_seg_prog_funcionamiento_001 Chart"
));

$proto16["m_sql"] = "PENDIENTE_PROG";
$proto16["m_srcTableName"] = "q_seg_prog_funcionamiento_001 Chart";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "UsuarioResp",
	"m_strTable" => "q_seg_prog_funcionamiento_001",
	"m_srcTableName" => "q_seg_prog_funcionamiento_001 Chart"
));

$proto18["m_sql"] = "UsuarioResp";
$proto18["m_srcTableName"] = "q_seg_prog_funcionamiento_001 Chart";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "PRODUCTO",
	"m_strTable" => "q_seg_prog_funcionamiento_001",
	"m_srcTableName" => "q_seg_prog_funcionamiento_001 Chart"
));

$proto20["m_sql"] = "PRODUCTO";
$proto20["m_srcTableName"] = "q_seg_prog_funcionamiento_001 Chart";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "q_seg_prog_funcionamiento_001";
$proto23["m_srcTableName"] = "q_seg_prog_funcionamiento_001 Chart";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "PROD_ID";
$proto23["m_columns"][] = "VIGENCIA";
$proto23["m_columns"][] = "UEJ";
$proto23["m_columns"][] = "RUBRO";
$proto23["m_columns"][] = "PRODUCTO";
$proto23["m_columns"][] = "DESCRIPCION";
$proto23["m_columns"][] = "PROD_PRESUPUESTO";
$proto23["m_columns"][] = "QTY_ACT";
$proto23["m_columns"][] = "SUM_ACT";
$proto23["m_columns"][] = "PENDIENTE_PROG";
$proto23["m_columns"][] = "Dependencia";
$proto23["m_columns"][] = "UsuarioResp";
$proto23["m_columns"][] = "sol_paa";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "q_seg_prog_funcionamiento_001";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "q_seg_prog_funcionamiento_001 Chart";
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
$proto0["m_srcTableName"]="q_seg_prog_funcionamiento_001 Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_seg_prog_funcionamiento_001_chart = createSqlQuery_q_seg_prog_funcionamiento_001_chart();


	
										;

						

$tdataq_seg_prog_funcionamiento_001_chart[".sqlquery"] = $queryData_q_seg_prog_funcionamiento_001_chart;



include_once(getabspath("include/q_seg_prog_funcionamiento_001_chart_events.php"));
$tdataq_seg_prog_funcionamiento_001_chart[".hasEvents"] = true;

?>