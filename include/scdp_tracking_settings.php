<?php
$tdatascdp_tracking = array();
$tdatascdp_tracking[".searchableFields"] = array();
$tdatascdp_tracking[".ShortName"] = "scdp_tracking";
$tdatascdp_tracking[".OwnerID"] = "";
$tdatascdp_tracking[".OriginalTable"] = "scdp_tracking";


$tdatascdp_tracking[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatascdp_tracking[".originalPagesByType"] = $tdatascdp_tracking[".pagesByType"];
$tdatascdp_tracking[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatascdp_tracking[".originalPages"] = $tdatascdp_tracking[".pages"];
$tdatascdp_tracking[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatascdp_tracking[".originalDefaultPages"] = $tdatascdp_tracking[".defaultPages"];

//	field labels
$fieldLabelsscdp_tracking = array();
$fieldToolTipsscdp_tracking = array();
$pageTitlesscdp_tracking = array();
$placeHoldersscdp_tracking = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsscdp_tracking["Spanish"] = array();
	$fieldToolTipsscdp_tracking["Spanish"] = array();
	$placeHoldersscdp_tracking["Spanish"] = array();
	$pageTitlesscdp_tracking["Spanish"] = array();
	$fieldLabelsscdp_tracking["Spanish"]["track_id"] = "Transacción ID";
	$fieldToolTipsscdp_tracking["Spanish"]["track_id"] = "";
	$placeHoldersscdp_tracking["Spanish"]["track_id"] = "";
	$fieldLabelsscdp_tracking["Spanish"]["scdpid_fk"] = "Scdpid Fk";
	$fieldToolTipsscdp_tracking["Spanish"]["scdpid_fk"] = "";
	$placeHoldersscdp_tracking["Spanish"]["scdpid_fk"] = "";
	$fieldLabelsscdp_tracking["Spanish"]["sys_status"] = "Estado";
	$fieldToolTipsscdp_tracking["Spanish"]["sys_status"] = "";
	$placeHoldersscdp_tracking["Spanish"]["sys_status"] = "";
	$fieldLabelsscdp_tracking["Spanish"]["hr_valor"] = "Valor solicitado";
	$fieldToolTipsscdp_tracking["Spanish"]["hr_valor"] = "";
	$placeHoldersscdp_tracking["Spanish"]["hr_valor"] = "";
	$fieldLabelsscdp_tracking["Spanish"]["sol_fecha"] = "Fecha de actividad";
	$fieldToolTipsscdp_tracking["Spanish"]["sol_fecha"] = "";
	$placeHoldersscdp_tracking["Spanish"]["sol_fecha"] = "";
	$fieldLabelsscdp_tracking["Spanish"]["user_from"] = "Gestionado por";
	$fieldToolTipsscdp_tracking["Spanish"]["user_from"] = "";
	$placeHoldersscdp_tracking["Spanish"]["user_from"] = "";
	$fieldLabelsscdp_tracking["Spanish"]["user_to"] = "Enviado a";
	$fieldToolTipsscdp_tracking["Spanish"]["user_to"] = "";
	$placeHoldersscdp_tracking["Spanish"]["user_to"] = "";
	$fieldLabelsscdp_tracking["Spanish"]["not_date"] = "Not Date";
	$fieldToolTipsscdp_tracking["Spanish"]["not_date"] = "";
	$placeHoldersscdp_tracking["Spanish"]["not_date"] = "";
	$fieldLabelsscdp_tracking["Spanish"]["not_mail"] = "Notificado a";
	$fieldToolTipsscdp_tracking["Spanish"]["not_mail"] = "";
	$placeHoldersscdp_tracking["Spanish"]["not_mail"] = "";
	$fieldLabelsscdp_tracking["Spanish"]["not_msg"] = "Comentarios";
	$fieldToolTipsscdp_tracking["Spanish"]["not_msg"] = "";
	$placeHoldersscdp_tracking["Spanish"]["not_msg"] = "";
	$fieldLabelsscdp_tracking["Spanish"]["sysdate"] = "Sysdate";
	$fieldToolTipsscdp_tracking["Spanish"]["sysdate"] = "";
	$placeHoldersscdp_tracking["Spanish"]["sysdate"] = "";
	if (count($fieldToolTipsscdp_tracking["Spanish"]))
		$tdatascdp_tracking[".isUseToolTips"] = true;
}


	$tdatascdp_tracking[".NCSearch"] = true;



$tdatascdp_tracking[".shortTableName"] = "scdp_tracking";
$tdatascdp_tracking[".nSecOptions"] = 0;

$tdatascdp_tracking[".mainTableOwnerID"] = "";
$tdatascdp_tracking[".entityType"] = 0;
$tdatascdp_tracking[".connId"] = "mincit_global_20x_at_127_0_0_1";


$tdatascdp_tracking[".strOriginalTableName"] = "scdp_tracking";

	



$tdatascdp_tracking[".showAddInPopup"] = false;

$tdatascdp_tracking[".showEditInPopup"] = false;

$tdatascdp_tracking[".showViewInPopup"] = false;

$tdatascdp_tracking[".listAjax"] = false;
//	temporary
//$tdatascdp_tracking[".listAjax"] = false;

	$tdatascdp_tracking[".audit"] = true;

	$tdatascdp_tracking[".locking"] = true;


$pages = $tdatascdp_tracking[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatascdp_tracking[".edit"] = true;
	$tdatascdp_tracking[".afterEditAction"] = 1;
	$tdatascdp_tracking[".closePopupAfterEdit"] = 1;
	$tdatascdp_tracking[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatascdp_tracking[".add"] = true;
$tdatascdp_tracking[".afterAddAction"] = 1;
$tdatascdp_tracking[".closePopupAfterAdd"] = 1;
$tdatascdp_tracking[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatascdp_tracking[".list"] = true;
}



$tdatascdp_tracking[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatascdp_tracking[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatascdp_tracking[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatascdp_tracking[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatascdp_tracking[".printFriendly"] = true;
}



$tdatascdp_tracking[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatascdp_tracking[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatascdp_tracking[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatascdp_tracking[".isUseAjaxSuggest"] = true;



																																																

$tdatascdp_tracking[".ajaxCodeSnippetAdded"] = false;

$tdatascdp_tracking[".buttonsAdded"] = false;

$tdatascdp_tracking[".addPageEvents"] = false;

// use timepicker for search panel
$tdatascdp_tracking[".isUseTimeForSearch"] = false;


$tdatascdp_tracking[".badgeColor"] = "1e90ff";


$tdatascdp_tracking[".allSearchFields"] = array();
$tdatascdp_tracking[".filterFields"] = array();
$tdatascdp_tracking[".requiredSearchFields"] = array();

$tdatascdp_tracking[".googleLikeFields"] = array();
$tdatascdp_tracking[".googleLikeFields"][] = "track_id";
$tdatascdp_tracking[".googleLikeFields"][] = "scdpid_fk";
$tdatascdp_tracking[".googleLikeFields"][] = "sys_status";
$tdatascdp_tracking[".googleLikeFields"][] = "hr_valor";
$tdatascdp_tracking[".googleLikeFields"][] = "sol_fecha";
$tdatascdp_tracking[".googleLikeFields"][] = "user_from";
$tdatascdp_tracking[".googleLikeFields"][] = "user_to";
$tdatascdp_tracking[".googleLikeFields"][] = "not_date";
$tdatascdp_tracking[".googleLikeFields"][] = "not_mail";
$tdatascdp_tracking[".googleLikeFields"][] = "not_msg";
$tdatascdp_tracking[".googleLikeFields"][] = "sysdate";



$tdatascdp_tracking[".tableType"] = "list";

$tdatascdp_tracking[".printerPageOrientation"] = 0;
$tdatascdp_tracking[".nPrinterPageScale"] = 100;

$tdatascdp_tracking[".nPrinterSplitRecords"] = 40;

$tdatascdp_tracking[".geocodingEnabled"] = false;










$tdatascdp_tracking[".pageSize"] = 20;

$tdatascdp_tracking[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatascdp_tracking[".strOrderBy"] = $tstrOrderBy;

$tdatascdp_tracking[".orderindexes"] = array();


$tdatascdp_tracking[".sqlHead"] = "SELECT track_id,  	scdpid_fk,  	sys_status,  	hr_valor,  	sol_fecha,  	user_from,  	user_to,  	not_date,  	not_mail,  	not_msg,  	`sysdate`";
$tdatascdp_tracking[".sqlFrom"] = "FROM scdp_tracking";
$tdatascdp_tracking[".sqlWhereExpr"] = "";
$tdatascdp_tracking[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatascdp_tracking[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatascdp_tracking[".arrGroupsPerPage"] = $arrGPP;

$tdatascdp_tracking[".highlightSearchResults"] = true;

$tableKeysscdp_tracking = array();
$tableKeysscdp_tracking[] = "track_id";
$tdatascdp_tracking[".Keys"] = $tableKeysscdp_tracking;


$tdatascdp_tracking[".hideMobileList"] = array();




//	track_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "track_id";
	$fdata["GoodName"] = "track_id";
	$fdata["ownerTable"] = "scdp_tracking";
	$fdata["Label"] = GetFieldLabel("scdp_tracking","track_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "track_id";

		$fdata["sourceSingle"] = "track_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "track_id";

	
	
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


	$tdatascdp_tracking["track_id"] = $fdata;
		$tdatascdp_tracking[".searchableFields"][] = "track_id";
//	scdpid_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "scdpid_fk";
	$fdata["GoodName"] = "scdpid_fk";
	$fdata["ownerTable"] = "scdp_tracking";
	$fdata["Label"] = GetFieldLabel("scdp_tracking","scdpid_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "scdpid_fk";

		$fdata["sourceSingle"] = "scdpid_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "scdpid_fk";

	
	
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


	$tdatascdp_tracking["scdpid_fk"] = $fdata;
		$tdatascdp_tracking[".searchableFields"][] = "scdpid_fk";
//	sys_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sys_status";
	$fdata["GoodName"] = "sys_status";
	$fdata["ownerTable"] = "scdp_tracking";
	$fdata["Label"] = GetFieldLabel("scdp_tracking","sys_status");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "sys_status";

		$fdata["sourceSingle"] = "sys_status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_status";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "scdp_event_type";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "evento_type_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "evento_type_desc";

	

	
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatascdp_tracking["sys_status"] = $fdata;
		$tdatascdp_tracking[".searchableFields"][] = "sys_status";
//	hr_valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "hr_valor";
	$fdata["GoodName"] = "hr_valor";
	$fdata["ownerTable"] = "scdp_tracking";
	$fdata["Label"] = GetFieldLabel("scdp_tracking","hr_valor");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "hr_valor";

		$fdata["sourceSingle"] = "hr_valor";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hr_valor";

	
	
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


	$tdatascdp_tracking["hr_valor"] = $fdata;
		$tdatascdp_tracking[".searchableFields"][] = "hr_valor";
//	sol_fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sol_fecha";
	$fdata["GoodName"] = "sol_fecha";
	$fdata["ownerTable"] = "scdp_tracking";
	$fdata["Label"] = GetFieldLabel("scdp_tracking","sol_fecha");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sol_fecha";

		$fdata["sourceSingle"] = "sol_fecha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sol_fecha";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatascdp_tracking["sol_fecha"] = $fdata;
		$tdatascdp_tracking[".searchableFields"][] = "sol_fecha";
//	user_from
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "user_from";
	$fdata["GoodName"] = "user_from";
	$fdata["ownerTable"] = "scdp_tracking";
	$fdata["Label"] = GetFieldLabel("scdp_tracking","user_from");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "user_from";

		$fdata["sourceSingle"] = "user_from";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_from";

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatascdp_tracking["user_from"] = $fdata;
		$tdatascdp_tracking[".searchableFields"][] = "user_from";
//	user_to
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "user_to";
	$fdata["GoodName"] = "user_to";
	$fdata["ownerTable"] = "scdp_tracking";
	$fdata["Label"] = GetFieldLabel("scdp_tracking","user_to");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "user_to";

		$fdata["sourceSingle"] = "user_to";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_to";

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatascdp_tracking["user_to"] = $fdata;
		$tdatascdp_tracking[".searchableFields"][] = "user_to";
//	not_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "not_date";
	$fdata["GoodName"] = "not_date";
	$fdata["ownerTable"] = "scdp_tracking";
	$fdata["Label"] = GetFieldLabel("scdp_tracking","not_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "not_date";

		$fdata["sourceSingle"] = "not_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "not_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatascdp_tracking["not_date"] = $fdata;
		$tdatascdp_tracking[".searchableFields"][] = "not_date";
//	not_mail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "not_mail";
	$fdata["GoodName"] = "not_mail";
	$fdata["ownerTable"] = "scdp_tracking";
	$fdata["Label"] = GetFieldLabel("scdp_tracking","not_mail");
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatascdp_tracking["not_mail"] = $fdata;
		$tdatascdp_tracking[".searchableFields"][] = "not_mail";
//	not_msg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "not_msg";
	$fdata["GoodName"] = "not_msg";
	$fdata["ownerTable"] = "scdp_tracking";
	$fdata["Label"] = GetFieldLabel("scdp_tracking","not_msg");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "not_msg";

		$fdata["sourceSingle"] = "not_msg";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "not_msg";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
	
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
			$edata["EditParams"].= " maxlength=800";

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


	$tdatascdp_tracking["not_msg"] = $fdata;
		$tdatascdp_tracking[".searchableFields"][] = "not_msg";
//	sysdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "sysdate";
	$fdata["GoodName"] = "sysdate";
	$fdata["ownerTable"] = "scdp_tracking";
	$fdata["Label"] = GetFieldLabel("scdp_tracking","sysdate");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sysdate";

		$fdata["sourceSingle"] = "sysdate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sysdate`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatascdp_tracking["sysdate"] = $fdata;
		$tdatascdp_tracking[".searchableFields"][] = "sysdate";


$tables_data["scdp_tracking"]=&$tdatascdp_tracking;
$field_labels["scdp_tracking"] = &$fieldLabelsscdp_tracking;
$fieldToolTips["scdp_tracking"] = &$fieldToolTipsscdp_tracking;
$placeHolders["scdp_tracking"] = &$placeHoldersscdp_tracking;
$page_titles["scdp_tracking"] = &$pageTitlesscdp_tracking;


changeTextControlsToDate( "scdp_tracking" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["scdp_tracking"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["scdp_tracking"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="paa_master_pscdp";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="paa_master_pscdp_00";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "paa_master_pscdp_00";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["scdp_tracking"][0] = $masterParams;
				$masterTablesData["scdp_tracking"][0]["masterKeys"] = array();
	$masterTablesData["scdp_tracking"][0]["masterKeys"][]="PAAU_ID";
				$masterTablesData["scdp_tracking"][0]["detailKeys"] = array();
	$masterTablesData["scdp_tracking"][0]["detailKeys"][]="scdpid_fk";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="paa_master_pscdp";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="paa_master_pscdp_0";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "paa_master_pscdp_0";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["scdp_tracking"][1] = $masterParams;
				$masterTablesData["scdp_tracking"][1]["masterKeys"] = array();
	$masterTablesData["scdp_tracking"][1]["masterKeys"][]="PAAU_ID";
				$masterTablesData["scdp_tracking"][1]["detailKeys"] = array();
	$masterTablesData["scdp_tracking"][1]["detailKeys"][]="scdpid_fk";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="paa_master_pscdp";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="paa_master_pscdp_1";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "paa_master_pscdp_1";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["scdp_tracking"][2] = $masterParams;
				$masterTablesData["scdp_tracking"][2]["masterKeys"] = array();
	$masterTablesData["scdp_tracking"][2]["masterKeys"][]="PAAU_ID";
				$masterTablesData["scdp_tracking"][2]["detailKeys"] = array();
	$masterTablesData["scdp_tracking"][2]["detailKeys"][]="scdpid_fk";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_scdp_tracking()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "track_id,  	scdpid_fk,  	sys_status,  	hr_valor,  	sol_fecha,  	user_from,  	user_to,  	not_date,  	not_mail,  	not_msg,  	`sysdate`";
$proto0["m_strFrom"] = "FROM scdp_tracking";
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
	"m_strName" => "track_id",
	"m_strTable" => "scdp_tracking",
	"m_srcTableName" => "scdp_tracking"
));

$proto6["m_sql"] = "track_id";
$proto6["m_srcTableName"] = "scdp_tracking";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "scdpid_fk",
	"m_strTable" => "scdp_tracking",
	"m_srcTableName" => "scdp_tracking"
));

$proto8["m_sql"] = "scdpid_fk";
$proto8["m_srcTableName"] = "scdp_tracking";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_status",
	"m_strTable" => "scdp_tracking",
	"m_srcTableName" => "scdp_tracking"
));

$proto10["m_sql"] = "sys_status";
$proto10["m_srcTableName"] = "scdp_tracking";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "hr_valor",
	"m_strTable" => "scdp_tracking",
	"m_srcTableName" => "scdp_tracking"
));

$proto12["m_sql"] = "hr_valor";
$proto12["m_srcTableName"] = "scdp_tracking";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "sol_fecha",
	"m_strTable" => "scdp_tracking",
	"m_srcTableName" => "scdp_tracking"
));

$proto14["m_sql"] = "sol_fecha";
$proto14["m_srcTableName"] = "scdp_tracking";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "user_from",
	"m_strTable" => "scdp_tracking",
	"m_srcTableName" => "scdp_tracking"
));

$proto16["m_sql"] = "user_from";
$proto16["m_srcTableName"] = "scdp_tracking";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "user_to",
	"m_strTable" => "scdp_tracking",
	"m_srcTableName" => "scdp_tracking"
));

$proto18["m_sql"] = "user_to";
$proto18["m_srcTableName"] = "scdp_tracking";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "not_date",
	"m_strTable" => "scdp_tracking",
	"m_srcTableName" => "scdp_tracking"
));

$proto20["m_sql"] = "not_date";
$proto20["m_srcTableName"] = "scdp_tracking";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "not_mail",
	"m_strTable" => "scdp_tracking",
	"m_srcTableName" => "scdp_tracking"
));

$proto22["m_sql"] = "not_mail";
$proto22["m_srcTableName"] = "scdp_tracking";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "not_msg",
	"m_strTable" => "scdp_tracking",
	"m_srcTableName" => "scdp_tracking"
));

$proto24["m_sql"] = "not_msg";
$proto24["m_srcTableName"] = "scdp_tracking";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "sysdate",
	"m_strTable" => "scdp_tracking",
	"m_srcTableName" => "scdp_tracking"
));

$proto26["m_sql"] = "`sysdate`";
$proto26["m_srcTableName"] = "scdp_tracking";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "scdp_tracking";
$proto29["m_srcTableName"] = "scdp_tracking";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "track_id";
$proto29["m_columns"][] = "scdpid_fk";
$proto29["m_columns"][] = "sys_status";
$proto29["m_columns"][] = "hr_valor";
$proto29["m_columns"][] = "sol_fecha";
$proto29["m_columns"][] = "user_from";
$proto29["m_columns"][] = "user_to";
$proto29["m_columns"][] = "not_date";
$proto29["m_columns"][] = "not_mail";
$proto29["m_columns"][] = "not_msg";
$proto29["m_columns"][] = "sysdate";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "scdp_tracking";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "scdp_tracking";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="scdp_tracking";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_scdp_tracking = createSqlQuery_scdp_tracking();


	
										;

											

$tdatascdp_tracking[".sqlquery"] = $queryData_scdp_tracking;



$tdatascdp_tracking[".hasEvents"] = false;

?>