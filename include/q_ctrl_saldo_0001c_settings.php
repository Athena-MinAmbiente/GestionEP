<?php
$tdataq_ctrl_saldo_0001c = array();
$tdataq_ctrl_saldo_0001c[".searchableFields"] = array();
$tdataq_ctrl_saldo_0001c[".ShortName"] = "q_ctrl_saldo_0001c";
$tdataq_ctrl_saldo_0001c[".OwnerID"] = "";
$tdataq_ctrl_saldo_0001c[".OriginalTable"] = "q_ctrl_saldo_0001c";


$tdataq_ctrl_saldo_0001c[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataq_ctrl_saldo_0001c[".originalPagesByType"] = $tdataq_ctrl_saldo_0001c[".pagesByType"];
$tdataq_ctrl_saldo_0001c[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataq_ctrl_saldo_0001c[".originalPages"] = $tdataq_ctrl_saldo_0001c[".pages"];
$tdataq_ctrl_saldo_0001c[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataq_ctrl_saldo_0001c[".originalDefaultPages"] = $tdataq_ctrl_saldo_0001c[".defaultPages"];

//	field labels
$fieldLabelsq_ctrl_saldo_0001c = array();
$fieldToolTipsq_ctrl_saldo_0001c = array();
$pageTitlesq_ctrl_saldo_0001c = array();
$placeHoldersq_ctrl_saldo_0001c = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_ctrl_saldo_0001c["Spanish"] = array();
	$fieldToolTipsq_ctrl_saldo_0001c["Spanish"] = array();
	$placeHoldersq_ctrl_saldo_0001c["Spanish"] = array();
	$pageTitlesq_ctrl_saldo_0001c["Spanish"] = array();
	$fieldLabelsq_ctrl_saldo_0001c["Spanish"]["RUBRO_ID_FK"] = "RUBRO ID FK";
	$fieldToolTipsq_ctrl_saldo_0001c["Spanish"]["RUBRO_ID_FK"] = "";
	$placeHoldersq_ctrl_saldo_0001c["Spanish"]["RUBRO_ID_FK"] = "";
	$fieldLabelsq_ctrl_saldo_0001c["Spanish"]["UEJ"] = "UEJ";
	$fieldToolTipsq_ctrl_saldo_0001c["Spanish"]["UEJ"] = "";
	$placeHoldersq_ctrl_saldo_0001c["Spanish"]["UEJ"] = "";
	$fieldLabelsq_ctrl_saldo_0001c["Spanish"]["VIGENCIA"] = "VIGENCIA";
	$fieldToolTipsq_ctrl_saldo_0001c["Spanish"]["VIGENCIA"] = "";
	$placeHoldersq_ctrl_saldo_0001c["Spanish"]["VIGENCIA"] = "";
	$fieldLabelsq_ctrl_saldo_0001c["Spanish"]["QTYRUBRO"] = "QTYRUBRO";
	$fieldToolTipsq_ctrl_saldo_0001c["Spanish"]["QTYRUBRO"] = "";
	$placeHoldersq_ctrl_saldo_0001c["Spanish"]["QTYRUBRO"] = "";
	$fieldLabelsq_ctrl_saldo_0001c["Spanish"]["PRESUPUESTO_OFICIAL"] = "PRESUPUESTO OFICIAL";
	$fieldToolTipsq_ctrl_saldo_0001c["Spanish"]["PRESUPUESTO_OFICIAL"] = "";
	$placeHoldersq_ctrl_saldo_0001c["Spanish"]["PRESUPUESTO_OFICIAL"] = "";
	$fieldLabelsq_ctrl_saldo_0001c["Spanish"]["PRESUPUESTO_SOLICITADO"] = "PRESUPUESTO SOLICITADO";
	$fieldToolTipsq_ctrl_saldo_0001c["Spanish"]["PRESUPUESTO_SOLICITADO"] = "";
	$placeHoldersq_ctrl_saldo_0001c["Spanish"]["PRESUPUESTO_SOLICITADO"] = "";
	$fieldLabelsq_ctrl_saldo_0001c["Spanish"]["PRESUPUESTO_DISPONIBLE"] = "PRESUPUESTO DISPONIBLE";
	$fieldToolTipsq_ctrl_saldo_0001c["Spanish"]["PRESUPUESTO_DISPONIBLE"] = "";
	$placeHoldersq_ctrl_saldo_0001c["Spanish"]["PRESUPUESTO_DISPONIBLE"] = "";
	if (count($fieldToolTipsq_ctrl_saldo_0001c["Spanish"]))
		$tdataq_ctrl_saldo_0001c[".isUseToolTips"] = true;
}


	$tdataq_ctrl_saldo_0001c[".NCSearch"] = true;



$tdataq_ctrl_saldo_0001c[".shortTableName"] = "q_ctrl_saldo_0001c";
$tdataq_ctrl_saldo_0001c[".nSecOptions"] = 0;

$tdataq_ctrl_saldo_0001c[".mainTableOwnerID"] = "";
$tdataq_ctrl_saldo_0001c[".entityType"] = 0;
$tdataq_ctrl_saldo_0001c[".connId"] = "sep2_at_127_0_0_1";


$tdataq_ctrl_saldo_0001c[".strOriginalTableName"] = "q_ctrl_saldo_0001c";

	



$tdataq_ctrl_saldo_0001c[".showAddInPopup"] = false;

$tdataq_ctrl_saldo_0001c[".showEditInPopup"] = false;

$tdataq_ctrl_saldo_0001c[".showViewInPopup"] = false;

$tdataq_ctrl_saldo_0001c[".listAjax"] = false;
//	temporary
//$tdataq_ctrl_saldo_0001c[".listAjax"] = false;

	$tdataq_ctrl_saldo_0001c[".audit"] = true;

	$tdataq_ctrl_saldo_0001c[".locking"] = true;


$pages = $tdataq_ctrl_saldo_0001c[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_ctrl_saldo_0001c[".edit"] = true;
	$tdataq_ctrl_saldo_0001c[".afterEditAction"] = 1;
	$tdataq_ctrl_saldo_0001c[".closePopupAfterEdit"] = 1;
	$tdataq_ctrl_saldo_0001c[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_ctrl_saldo_0001c[".add"] = true;
$tdataq_ctrl_saldo_0001c[".afterAddAction"] = 1;
$tdataq_ctrl_saldo_0001c[".closePopupAfterAdd"] = 1;
$tdataq_ctrl_saldo_0001c[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_ctrl_saldo_0001c[".list"] = true;
}



$tdataq_ctrl_saldo_0001c[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_ctrl_saldo_0001c[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_ctrl_saldo_0001c[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_ctrl_saldo_0001c[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_ctrl_saldo_0001c[".printFriendly"] = true;
}



$tdataq_ctrl_saldo_0001c[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_ctrl_saldo_0001c[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_ctrl_saldo_0001c[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_ctrl_saldo_0001c[".isUseAjaxSuggest"] = true;



																								

$tdataq_ctrl_saldo_0001c[".ajaxCodeSnippetAdded"] = false;

$tdataq_ctrl_saldo_0001c[".buttonsAdded"] = false;

$tdataq_ctrl_saldo_0001c[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_ctrl_saldo_0001c[".isUseTimeForSearch"] = false;


$tdataq_ctrl_saldo_0001c[".badgeColor"] = "b22222";


$tdataq_ctrl_saldo_0001c[".allSearchFields"] = array();
$tdataq_ctrl_saldo_0001c[".filterFields"] = array();
$tdataq_ctrl_saldo_0001c[".requiredSearchFields"] = array();

$tdataq_ctrl_saldo_0001c[".googleLikeFields"] = array();
$tdataq_ctrl_saldo_0001c[".googleLikeFields"][] = "RUBRO_ID_FK";
$tdataq_ctrl_saldo_0001c[".googleLikeFields"][] = "UEJ";
$tdataq_ctrl_saldo_0001c[".googleLikeFields"][] = "VIGENCIA";
$tdataq_ctrl_saldo_0001c[".googleLikeFields"][] = "QTYRUBRO";
$tdataq_ctrl_saldo_0001c[".googleLikeFields"][] = "PRESUPUESTO_OFICIAL";
$tdataq_ctrl_saldo_0001c[".googleLikeFields"][] = "PRESUPUESTO_SOLICITADO";
$tdataq_ctrl_saldo_0001c[".googleLikeFields"][] = "PRESUPUESTO_DISPONIBLE";



$tdataq_ctrl_saldo_0001c[".tableType"] = "list";

$tdataq_ctrl_saldo_0001c[".printerPageOrientation"] = 0;
$tdataq_ctrl_saldo_0001c[".nPrinterPageScale"] = 100;

$tdataq_ctrl_saldo_0001c[".nPrinterSplitRecords"] = 40;

$tdataq_ctrl_saldo_0001c[".geocodingEnabled"] = false;










$tdataq_ctrl_saldo_0001c[".pageSize"] = 20;

$tdataq_ctrl_saldo_0001c[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataq_ctrl_saldo_0001c[".strOrderBy"] = $tstrOrderBy;

$tdataq_ctrl_saldo_0001c[".orderindexes"] = array();


$tdataq_ctrl_saldo_0001c[".sqlHead"] = "SELECT RUBRO_ID_FK,  	UEJ,  	VIGENCIA,  	QTYRUBRO,  	PRESUPUESTO_OFICIAL,  	PRESUPUESTO_SOLICITADO,  	PRESUPUESTO_DISPONIBLE";
$tdataq_ctrl_saldo_0001c[".sqlFrom"] = "FROM q_ctrl_saldo_0001c";
$tdataq_ctrl_saldo_0001c[".sqlWhereExpr"] = "";
$tdataq_ctrl_saldo_0001c[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_ctrl_saldo_0001c[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_ctrl_saldo_0001c[".arrGroupsPerPage"] = $arrGPP;

$tdataq_ctrl_saldo_0001c[".highlightSearchResults"] = true;

$tableKeysq_ctrl_saldo_0001c = array();
$tdataq_ctrl_saldo_0001c[".Keys"] = $tableKeysq_ctrl_saldo_0001c;


$tdataq_ctrl_saldo_0001c[".hideMobileList"] = array();




//	RUBRO_ID_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "RUBRO_ID_FK";
	$fdata["GoodName"] = "RUBRO_ID_FK";
	$fdata["ownerTable"] = "q_ctrl_saldo_0001c";
	$fdata["Label"] = GetFieldLabel("q_ctrl_saldo_0001c","RUBRO_ID_FK");
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


	$tdataq_ctrl_saldo_0001c["RUBRO_ID_FK"] = $fdata;
		$tdataq_ctrl_saldo_0001c[".searchableFields"][] = "RUBRO_ID_FK";
//	UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "UEJ";
	$fdata["GoodName"] = "UEJ";
	$fdata["ownerTable"] = "q_ctrl_saldo_0001c";
	$fdata["Label"] = GetFieldLabel("q_ctrl_saldo_0001c","UEJ");
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdataq_ctrl_saldo_0001c["UEJ"] = $fdata;
		$tdataq_ctrl_saldo_0001c[".searchableFields"][] = "UEJ";
//	VIGENCIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "VIGENCIA";
	$fdata["GoodName"] = "VIGENCIA";
	$fdata["ownerTable"] = "q_ctrl_saldo_0001c";
	$fdata["Label"] = GetFieldLabel("q_ctrl_saldo_0001c","VIGENCIA");
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


	$tdataq_ctrl_saldo_0001c["VIGENCIA"] = $fdata;
		$tdataq_ctrl_saldo_0001c[".searchableFields"][] = "VIGENCIA";
//	QTYRUBRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "QTYRUBRO";
	$fdata["GoodName"] = "QTYRUBRO";
	$fdata["ownerTable"] = "q_ctrl_saldo_0001c";
	$fdata["Label"] = GetFieldLabel("q_ctrl_saldo_0001c","QTYRUBRO");
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


	$tdataq_ctrl_saldo_0001c["QTYRUBRO"] = $fdata;
		$tdataq_ctrl_saldo_0001c[".searchableFields"][] = "QTYRUBRO";
//	PRESUPUESTO_OFICIAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PRESUPUESTO_OFICIAL";
	$fdata["GoodName"] = "PRESUPUESTO_OFICIAL";
	$fdata["ownerTable"] = "q_ctrl_saldo_0001c";
	$fdata["Label"] = GetFieldLabel("q_ctrl_saldo_0001c","PRESUPUESTO_OFICIAL");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "PRESUPUESTO_OFICIAL";

		$fdata["sourceSingle"] = "PRESUPUESTO_OFICIAL";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRESUPUESTO_OFICIAL";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdataq_ctrl_saldo_0001c["PRESUPUESTO_OFICIAL"] = $fdata;
		$tdataq_ctrl_saldo_0001c[".searchableFields"][] = "PRESUPUESTO_OFICIAL";
//	PRESUPUESTO_SOLICITADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "PRESUPUESTO_SOLICITADO";
	$fdata["GoodName"] = "PRESUPUESTO_SOLICITADO";
	$fdata["ownerTable"] = "q_ctrl_saldo_0001c";
	$fdata["Label"] = GetFieldLabel("q_ctrl_saldo_0001c","PRESUPUESTO_SOLICITADO");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "PRESUPUESTO_SOLICITADO";

		$fdata["sourceSingle"] = "PRESUPUESTO_SOLICITADO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRESUPUESTO_SOLICITADO";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdataq_ctrl_saldo_0001c["PRESUPUESTO_SOLICITADO"] = $fdata;
		$tdataq_ctrl_saldo_0001c[".searchableFields"][] = "PRESUPUESTO_SOLICITADO";
//	PRESUPUESTO_DISPONIBLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PRESUPUESTO_DISPONIBLE";
	$fdata["GoodName"] = "PRESUPUESTO_DISPONIBLE";
	$fdata["ownerTable"] = "q_ctrl_saldo_0001c";
	$fdata["Label"] = GetFieldLabel("q_ctrl_saldo_0001c","PRESUPUESTO_DISPONIBLE");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "PRESUPUESTO_DISPONIBLE";

		$fdata["sourceSingle"] = "PRESUPUESTO_DISPONIBLE";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRESUPUESTO_DISPONIBLE";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdataq_ctrl_saldo_0001c["PRESUPUESTO_DISPONIBLE"] = $fdata;
		$tdataq_ctrl_saldo_0001c[".searchableFields"][] = "PRESUPUESTO_DISPONIBLE";


$tables_data["q_ctrl_saldo_0001c"]=&$tdataq_ctrl_saldo_0001c;
$field_labels["q_ctrl_saldo_0001c"] = &$fieldLabelsq_ctrl_saldo_0001c;
$fieldToolTips["q_ctrl_saldo_0001c"] = &$fieldToolTipsq_ctrl_saldo_0001c;
$placeHolders["q_ctrl_saldo_0001c"] = &$placeHoldersq_ctrl_saldo_0001c;
$page_titles["q_ctrl_saldo_0001c"] = &$pageTitlesq_ctrl_saldo_0001c;


changeTextControlsToDate( "q_ctrl_saldo_0001c" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["q_ctrl_saldo_0001c"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["q_ctrl_saldo_0001c"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="q_ctrl_saldo_0000c";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="q_ctrl_saldo_0000c Chart";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "q_ctrl_saldo_0000c_chart";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
			$masterParams["type"] = PAGE_CHART;
			$masterTablesData["q_ctrl_saldo_0001c"][0] = $masterParams;
				$masterTablesData["q_ctrl_saldo_0001c"][0]["masterKeys"] = array();
	$masterTablesData["q_ctrl_saldo_0001c"][0]["masterKeys"][]="UEJ";
				$masterTablesData["q_ctrl_saldo_0001c"][0]["masterKeys"][]="VIGENCIA";
				$masterTablesData["q_ctrl_saldo_0001c"][0]["detailKeys"] = array();
	$masterTablesData["q_ctrl_saldo_0001c"][0]["detailKeys"][]="UEJ";
				$masterTablesData["q_ctrl_saldo_0001c"][0]["detailKeys"][]="VIGENCIA";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_q_ctrl_saldo_0001c()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "RUBRO_ID_FK,  	UEJ,  	VIGENCIA,  	QTYRUBRO,  	PRESUPUESTO_OFICIAL,  	PRESUPUESTO_SOLICITADO,  	PRESUPUESTO_DISPONIBLE";
$proto0["m_strFrom"] = "FROM q_ctrl_saldo_0001c";
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
	"m_strName" => "RUBRO_ID_FK",
	"m_strTable" => "q_ctrl_saldo_0001c",
	"m_srcTableName" => "q_ctrl_saldo_0001c"
));

$proto6["m_sql"] = "RUBRO_ID_FK";
$proto6["m_srcTableName"] = "q_ctrl_saldo_0001c";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "UEJ",
	"m_strTable" => "q_ctrl_saldo_0001c",
	"m_srcTableName" => "q_ctrl_saldo_0001c"
));

$proto8["m_sql"] = "UEJ";
$proto8["m_srcTableName"] = "q_ctrl_saldo_0001c";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "VIGENCIA",
	"m_strTable" => "q_ctrl_saldo_0001c",
	"m_srcTableName" => "q_ctrl_saldo_0001c"
));

$proto10["m_sql"] = "VIGENCIA";
$proto10["m_srcTableName"] = "q_ctrl_saldo_0001c";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "QTYRUBRO",
	"m_strTable" => "q_ctrl_saldo_0001c",
	"m_srcTableName" => "q_ctrl_saldo_0001c"
));

$proto12["m_sql"] = "QTYRUBRO";
$proto12["m_srcTableName"] = "q_ctrl_saldo_0001c";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "PRESUPUESTO_OFICIAL",
	"m_strTable" => "q_ctrl_saldo_0001c",
	"m_srcTableName" => "q_ctrl_saldo_0001c"
));

$proto14["m_sql"] = "PRESUPUESTO_OFICIAL";
$proto14["m_srcTableName"] = "q_ctrl_saldo_0001c";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "PRESUPUESTO_SOLICITADO",
	"m_strTable" => "q_ctrl_saldo_0001c",
	"m_srcTableName" => "q_ctrl_saldo_0001c"
));

$proto16["m_sql"] = "PRESUPUESTO_SOLICITADO";
$proto16["m_srcTableName"] = "q_ctrl_saldo_0001c";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "PRESUPUESTO_DISPONIBLE",
	"m_strTable" => "q_ctrl_saldo_0001c",
	"m_srcTableName" => "q_ctrl_saldo_0001c"
));

$proto18["m_sql"] = "PRESUPUESTO_DISPONIBLE";
$proto18["m_srcTableName"] = "q_ctrl_saldo_0001c";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "q_ctrl_saldo_0001c";
$proto21["m_srcTableName"] = "q_ctrl_saldo_0001c";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "RUBRO_ID_FK";
$proto21["m_columns"][] = "UEJ";
$proto21["m_columns"][] = "VIGENCIA";
$proto21["m_columns"][] = "QTYRUBRO";
$proto21["m_columns"][] = "PRESUPUESTO_OFICIAL";
$proto21["m_columns"][] = "PRESUPUESTO_SOLICITADO";
$proto21["m_columns"][] = "PRESUPUESTO_DISPONIBLE";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "q_ctrl_saldo_0001c";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "q_ctrl_saldo_0001c";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="q_ctrl_saldo_0001c";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_ctrl_saldo_0001c = createSqlQuery_q_ctrl_saldo_0001c();


	
										;

							

$tdataq_ctrl_saldo_0001c[".sqlquery"] = $queryData_q_ctrl_saldo_0001c;



$tdataq_ctrl_saldo_0001c[".hasEvents"] = false;

?>