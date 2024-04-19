<?php
$tdataq_info_actividad = array();
$tdataq_info_actividad[".searchableFields"] = array();
$tdataq_info_actividad[".ShortName"] = "q_info_actividad";
$tdataq_info_actividad[".OwnerID"] = "";
$tdataq_info_actividad[".OriginalTable"] = "q_info_actividad";


$tdataq_info_actividad[".pagesByType"] = my_json_decode( "{}" );
$tdataq_info_actividad[".originalPagesByType"] = $tdataq_info_actividad[".pagesByType"];
$tdataq_info_actividad[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataq_info_actividad[".originalPages"] = $tdataq_info_actividad[".pages"];
$tdataq_info_actividad[".defaultPages"] = my_json_decode( "{}" );
$tdataq_info_actividad[".originalDefaultPages"] = $tdataq_info_actividad[".defaultPages"];

//	field labels
$fieldLabelsq_info_actividad = array();
$fieldToolTipsq_info_actividad = array();
$pageTitlesq_info_actividad = array();
$placeHoldersq_info_actividad = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_info_actividad["Spanish"] = array();
	$fieldToolTipsq_info_actividad["Spanish"] = array();
	$placeHoldersq_info_actividad["Spanish"] = array();
	$pageTitlesq_info_actividad["Spanish"] = array();
	$fieldLabelsq_info_actividad["Spanish"]["ACT_ID"] = "ACT ID";
	$fieldToolTipsq_info_actividad["Spanish"]["ACT_ID"] = "";
	$placeHoldersq_info_actividad["Spanish"]["ACT_ID"] = "";
	$fieldLabelsq_info_actividad["Spanish"]["UEJ"] = "UEJ";
	$fieldToolTipsq_info_actividad["Spanish"]["UEJ"] = "";
	$placeHoldersq_info_actividad["Spanish"]["UEJ"] = "";
	$fieldLabelsq_info_actividad["Spanish"]["RUBRO"] = "RUBRO";
	$fieldToolTipsq_info_actividad["Spanish"]["RUBRO"] = "";
	$placeHoldersq_info_actividad["Spanish"]["RUBRO"] = "";
	$fieldLabelsq_info_actividad["Spanish"]["PRODUCTO"] = "PRODUCTO";
	$fieldToolTipsq_info_actividad["Spanish"]["PRODUCTO"] = "";
	$placeHoldersq_info_actividad["Spanish"]["PRODUCTO"] = "";
	$fieldLabelsq_info_actividad["Spanish"]["ACTIVIDAD"] = "ACTIVIDAD";
	$fieldToolTipsq_info_actividad["Spanish"]["ACTIVIDAD"] = "";
	$placeHoldersq_info_actividad["Spanish"]["ACTIVIDAD"] = "";
	$fieldLabelsq_info_actividad["Spanish"]["RECURSOS_ASIGNADOS"] = "RECURSOS ASIGNADOS";
	$fieldToolTipsq_info_actividad["Spanish"]["RECURSOS_ASIGNADOS"] = "";
	$placeHoldersq_info_actividad["Spanish"]["RECURSOS_ASIGNADOS"] = "";
	$fieldLabelsq_info_actividad["Spanish"]["info_actividad"] = "Info Actividad";
	$fieldToolTipsq_info_actividad["Spanish"]["info_actividad"] = "";
	$placeHoldersq_info_actividad["Spanish"]["info_actividad"] = "";
	if (count($fieldToolTipsq_info_actividad["Spanish"]))
		$tdataq_info_actividad[".isUseToolTips"] = true;
}


	$tdataq_info_actividad[".NCSearch"] = true;



$tdataq_info_actividad[".shortTableName"] = "q_info_actividad";
$tdataq_info_actividad[".nSecOptions"] = 0;

$tdataq_info_actividad[".mainTableOwnerID"] = "";
$tdataq_info_actividad[".entityType"] = 0;
$tdataq_info_actividad[".connId"] = "sep2_at_127_0_0_1";


$tdataq_info_actividad[".strOriginalTableName"] = "q_info_actividad";

	



$tdataq_info_actividad[".showAddInPopup"] = false;

$tdataq_info_actividad[".showEditInPopup"] = false;

$tdataq_info_actividad[".showViewInPopup"] = false;

$tdataq_info_actividad[".listAjax"] = false;
//	temporary
//$tdataq_info_actividad[".listAjax"] = false;

	$tdataq_info_actividad[".audit"] = true;

	$tdataq_info_actividad[".locking"] = true;


$pages = $tdataq_info_actividad[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_info_actividad[".edit"] = true;
	$tdataq_info_actividad[".afterEditAction"] = 1;
	$tdataq_info_actividad[".closePopupAfterEdit"] = 1;
	$tdataq_info_actividad[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_info_actividad[".add"] = true;
$tdataq_info_actividad[".afterAddAction"] = 1;
$tdataq_info_actividad[".closePopupAfterAdd"] = 1;
$tdataq_info_actividad[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_info_actividad[".list"] = true;
}



$tdataq_info_actividad[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_info_actividad[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_info_actividad[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_info_actividad[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_info_actividad[".printFriendly"] = true;
}



$tdataq_info_actividad[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_info_actividad[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_info_actividad[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_info_actividad[".isUseAjaxSuggest"] = true;



												

$tdataq_info_actividad[".ajaxCodeSnippetAdded"] = false;

$tdataq_info_actividad[".buttonsAdded"] = false;

$tdataq_info_actividad[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_info_actividad[".isUseTimeForSearch"] = false;


$tdataq_info_actividad[".badgeColor"] = "008B8B";


$tdataq_info_actividad[".allSearchFields"] = array();
$tdataq_info_actividad[".filterFields"] = array();
$tdataq_info_actividad[".requiredSearchFields"] = array();

$tdataq_info_actividad[".googleLikeFields"] = array();
$tdataq_info_actividad[".googleLikeFields"][] = "ACT_ID";
$tdataq_info_actividad[".googleLikeFields"][] = "UEJ";
$tdataq_info_actividad[".googleLikeFields"][] = "RUBRO";
$tdataq_info_actividad[".googleLikeFields"][] = "PRODUCTO";
$tdataq_info_actividad[".googleLikeFields"][] = "ACTIVIDAD";
$tdataq_info_actividad[".googleLikeFields"][] = "RECURSOS_ASIGNADOS";
$tdataq_info_actividad[".googleLikeFields"][] = "info_actividad";



$tdataq_info_actividad[".tableType"] = "list";

$tdataq_info_actividad[".printerPageOrientation"] = 0;
$tdataq_info_actividad[".nPrinterPageScale"] = 100;

$tdataq_info_actividad[".nPrinterSplitRecords"] = 40;

$tdataq_info_actividad[".geocodingEnabled"] = false;










$tdataq_info_actividad[".pageSize"] = 20;

$tdataq_info_actividad[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataq_info_actividad[".strOrderBy"] = $tstrOrderBy;

$tdataq_info_actividad[".orderindexes"] = array();


$tdataq_info_actividad[".sqlHead"] = "SELECT ACT_ID,  	UEJ,  	RUBRO,  	PRODUCTO,  	ACTIVIDAD,  	RECURSOS_ASIGNADOS,  	info_actividad";
$tdataq_info_actividad[".sqlFrom"] = "FROM q_info_actividad";
$tdataq_info_actividad[".sqlWhereExpr"] = "";
$tdataq_info_actividad[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_info_actividad[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_info_actividad[".arrGroupsPerPage"] = $arrGPP;

$tdataq_info_actividad[".highlightSearchResults"] = true;

$tableKeysq_info_actividad = array();
$tdataq_info_actividad[".Keys"] = $tableKeysq_info_actividad;


$tdataq_info_actividad[".hideMobileList"] = array();




//	ACT_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ACT_ID";
	$fdata["GoodName"] = "ACT_ID";
	$fdata["ownerTable"] = "q_info_actividad";
	$fdata["Label"] = GetFieldLabel("q_info_actividad","ACT_ID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ACT_ID";

		$fdata["sourceSingle"] = "ACT_ID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACT_ID";

	
	
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


	$tdataq_info_actividad["ACT_ID"] = $fdata;
		$tdataq_info_actividad[".searchableFields"][] = "ACT_ID";
//	UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "UEJ";
	$fdata["GoodName"] = "UEJ";
	$fdata["ownerTable"] = "q_info_actividad";
	$fdata["Label"] = GetFieldLabel("q_info_actividad","UEJ");
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdataq_info_actividad["UEJ"] = $fdata;
		$tdataq_info_actividad[".searchableFields"][] = "UEJ";
//	RUBRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "RUBRO";
	$fdata["GoodName"] = "RUBRO";
	$fdata["ownerTable"] = "q_info_actividad";
	$fdata["Label"] = GetFieldLabel("q_info_actividad","RUBRO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "RUBRO";

		$fdata["sourceSingle"] = "RUBRO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RUBRO";

	
	
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


	$tdataq_info_actividad["RUBRO"] = $fdata;
		$tdataq_info_actividad[".searchableFields"][] = "RUBRO";
//	PRODUCTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PRODUCTO";
	$fdata["GoodName"] = "PRODUCTO";
	$fdata["ownerTable"] = "q_info_actividad";
	$fdata["Label"] = GetFieldLabel("q_info_actividad","PRODUCTO");
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


	$tdataq_info_actividad["PRODUCTO"] = $fdata;
		$tdataq_info_actividad[".searchableFields"][] = "PRODUCTO";
//	ACTIVIDAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ACTIVIDAD";
	$fdata["GoodName"] = "ACTIVIDAD";
	$fdata["ownerTable"] = "q_info_actividad";
	$fdata["Label"] = GetFieldLabel("q_info_actividad","ACTIVIDAD");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ACTIVIDAD";

		$fdata["sourceSingle"] = "ACTIVIDAD";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACTIVIDAD";

	
	
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
			$edata["EditParams"].= " maxlength=500";

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


	$tdataq_info_actividad["ACTIVIDAD"] = $fdata;
		$tdataq_info_actividad[".searchableFields"][] = "ACTIVIDAD";
//	RECURSOS_ASIGNADOS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "RECURSOS_ASIGNADOS";
	$fdata["GoodName"] = "RECURSOS_ASIGNADOS";
	$fdata["ownerTable"] = "q_info_actividad";
	$fdata["Label"] = GetFieldLabel("q_info_actividad","RECURSOS_ASIGNADOS");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "RECURSOS_ASIGNADOS";

		$fdata["sourceSingle"] = "RECURSOS_ASIGNADOS";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RECURSOS_ASIGNADOS";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	$tdataq_info_actividad["RECURSOS_ASIGNADOS"] = $fdata;
		$tdataq_info_actividad[".searchableFields"][] = "RECURSOS_ASIGNADOS";
//	info_actividad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "info_actividad";
	$fdata["GoodName"] = "info_actividad";
	$fdata["ownerTable"] = "q_info_actividad";
	$fdata["Label"] = GetFieldLabel("q_info_actividad","info_actividad");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "info_actividad";

		$fdata["sourceSingle"] = "info_actividad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "info_actividad";

	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdataq_info_actividad["info_actividad"] = $fdata;
		$tdataq_info_actividad[".searchableFields"][] = "info_actividad";


$tables_data["q_info_actividad"]=&$tdataq_info_actividad;
$field_labels["q_info_actividad"] = &$fieldLabelsq_info_actividad;
$fieldToolTips["q_info_actividad"] = &$fieldToolTipsq_info_actividad;
$placeHolders["q_info_actividad"] = &$placeHoldersq_info_actividad;
$page_titles["q_info_actividad"] = &$pageTitlesq_info_actividad;


changeTextControlsToDate( "q_info_actividad" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["q_info_actividad"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["q_info_actividad"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_q_info_actividad()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ACT_ID,  	UEJ,  	RUBRO,  	PRODUCTO,  	ACTIVIDAD,  	RECURSOS_ASIGNADOS,  	info_actividad";
$proto0["m_strFrom"] = "FROM q_info_actividad";
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
	"m_strName" => "ACT_ID",
	"m_strTable" => "q_info_actividad",
	"m_srcTableName" => "q_info_actividad"
));

$proto6["m_sql"] = "ACT_ID";
$proto6["m_srcTableName"] = "q_info_actividad";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "UEJ",
	"m_strTable" => "q_info_actividad",
	"m_srcTableName" => "q_info_actividad"
));

$proto8["m_sql"] = "UEJ";
$proto8["m_srcTableName"] = "q_info_actividad";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "RUBRO",
	"m_strTable" => "q_info_actividad",
	"m_srcTableName" => "q_info_actividad"
));

$proto10["m_sql"] = "RUBRO";
$proto10["m_srcTableName"] = "q_info_actividad";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PRODUCTO",
	"m_strTable" => "q_info_actividad",
	"m_srcTableName" => "q_info_actividad"
));

$proto12["m_sql"] = "PRODUCTO";
$proto12["m_srcTableName"] = "q_info_actividad";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ACTIVIDAD",
	"m_strTable" => "q_info_actividad",
	"m_srcTableName" => "q_info_actividad"
));

$proto14["m_sql"] = "ACTIVIDAD";
$proto14["m_srcTableName"] = "q_info_actividad";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "RECURSOS_ASIGNADOS",
	"m_strTable" => "q_info_actividad",
	"m_srcTableName" => "q_info_actividad"
));

$proto16["m_sql"] = "RECURSOS_ASIGNADOS";
$proto16["m_srcTableName"] = "q_info_actividad";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "info_actividad",
	"m_strTable" => "q_info_actividad",
	"m_srcTableName" => "q_info_actividad"
));

$proto18["m_sql"] = "info_actividad";
$proto18["m_srcTableName"] = "q_info_actividad";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "q_info_actividad";
$proto21["m_srcTableName"] = "q_info_actividad";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "ACT_ID";
$proto21["m_columns"][] = "UEJ";
$proto21["m_columns"][] = "RUBRO";
$proto21["m_columns"][] = "PRODUCTO";
$proto21["m_columns"][] = "ACTIVIDAD";
$proto21["m_columns"][] = "RECURSOS_ASIGNADOS";
$proto21["m_columns"][] = "info_actividad";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "q_info_actividad";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "q_info_actividad";
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
$proto0["m_srcTableName"]="q_info_actividad";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_info_actividad = createSqlQuery_q_info_actividad();


	
										;

							

$tdataq_info_actividad[".sqlquery"] = $queryData_q_info_actividad;



$tdataq_info_actividad[".hasEvents"] = false;

?>