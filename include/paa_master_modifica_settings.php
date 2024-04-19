<?php
$tdatapaa_master_modifica = array();
$tdatapaa_master_modifica[".searchableFields"] = array();
$tdatapaa_master_modifica[".ShortName"] = "paa_master_modifica";
$tdatapaa_master_modifica[".OwnerID"] = "";
$tdatapaa_master_modifica[".OriginalTable"] = "paa_master_modifica";


$tdatapaa_master_modifica[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapaa_master_modifica[".originalPagesByType"] = $tdatapaa_master_modifica[".pagesByType"];
$tdatapaa_master_modifica[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapaa_master_modifica[".originalPages"] = $tdatapaa_master_modifica[".pages"];
$tdatapaa_master_modifica[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapaa_master_modifica[".originalDefaultPages"] = $tdatapaa_master_modifica[".defaultPages"];

//	field labels
$fieldLabelspaa_master_modifica = array();
$fieldToolTipspaa_master_modifica = array();
$pageTitlespaa_master_modifica = array();
$placeHolderspaa_master_modifica = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspaa_master_modifica["Spanish"] = array();
	$fieldToolTipspaa_master_modifica["Spanish"] = array();
	$placeHolderspaa_master_modifica["Spanish"] = array();
	$pageTitlespaa_master_modifica["Spanish"] = array();
	$fieldLabelspaa_master_modifica["Spanish"]["PAAM_ID"] = "PAAM ID";
	$fieldToolTipspaa_master_modifica["Spanish"]["PAAM_ID"] = "";
	$placeHolderspaa_master_modifica["Spanish"]["PAAM_ID"] = "";
	$fieldLabelspaa_master_modifica["Spanish"]["PAA_ID_FK"] = "PAA ID";
	$fieldToolTipspaa_master_modifica["Spanish"]["PAA_ID_FK"] = "";
	$placeHolderspaa_master_modifica["Spanish"]["PAA_ID_FK"] = "";
	$fieldLabelspaa_master_modifica["Spanish"]["PAAM_FECHA"] = "Fecha";
	$fieldToolTipspaa_master_modifica["Spanish"]["PAAM_FECHA"] = "";
	$placeHolderspaa_master_modifica["Spanish"]["PAAM_FECHA"] = "";
	$fieldLabelspaa_master_modifica["Spanish"]["PAA_MODIFICA"] = "Modificación a realizar";
	$fieldToolTipspaa_master_modifica["Spanish"]["PAA_MODIFICA"] = "";
	$placeHolderspaa_master_modifica["Spanish"]["PAA_MODIFICA"] = "";
	$fieldLabelspaa_master_modifica["Spanish"]["PAA_JUSTIFICA"] = "Jutificar modificación";
	$fieldToolTipspaa_master_modifica["Spanish"]["PAA_JUSTIFICA"] = "";
	$placeHolderspaa_master_modifica["Spanish"]["PAA_JUSTIFICA"] = "";
	$fieldLabelspaa_master_modifica["Spanish"]["SYSUSER"] = "SYSUSER";
	$fieldToolTipspaa_master_modifica["Spanish"]["SYSUSER"] = "";
	$placeHolderspaa_master_modifica["Spanish"]["SYSUSER"] = "";
	$fieldLabelspaa_master_modifica["Spanish"]["MAIL_NOT"] = "MAIL NOT";
	$fieldToolTipspaa_master_modifica["Spanish"]["MAIL_NOT"] = "";
	$placeHolderspaa_master_modifica["Spanish"]["MAIL_NOT"] = "";
	$fieldLabelspaa_master_modifica["Spanish"]["PAAM_ST"] = "Estado";
	$fieldToolTipspaa_master_modifica["Spanish"]["PAAM_ST"] = "";
	$placeHolderspaa_master_modifica["Spanish"]["PAAM_ST"] = "";
	$fieldLabelspaa_master_modifica["Spanish"]["SYS_USER"] = "SYS USER";
	$fieldToolTipspaa_master_modifica["Spanish"]["SYS_USER"] = "";
	$placeHolderspaa_master_modifica["Spanish"]["SYS_USER"] = "";
	$fieldLabelspaa_master_modifica["Spanish"]["SYS_DATE"] = "SYS DATE";
	$fieldToolTipspaa_master_modifica["Spanish"]["SYS_DATE"] = "";
	$placeHolderspaa_master_modifica["Spanish"]["SYS_DATE"] = "";
	$fieldLabelspaa_master_modifica["Spanish"]["DESCRIPCION"] = "Descripción actual";
	$fieldToolTipspaa_master_modifica["Spanish"]["DESCRIPCION"] = "";
	$placeHolderspaa_master_modifica["Spanish"]["DESCRIPCION"] = "";
	$fieldLabelspaa_master_modifica["Spanish"]["OBS"] = "OBS";
	$fieldToolTipspaa_master_modifica["Spanish"]["OBS"] = "";
	$placeHolderspaa_master_modifica["Spanish"]["OBS"] = "";
	if (count($fieldToolTipspaa_master_modifica["Spanish"]))
		$tdatapaa_master_modifica[".isUseToolTips"] = true;
}


	$tdatapaa_master_modifica[".NCSearch"] = true;



$tdatapaa_master_modifica[".shortTableName"] = "paa_master_modifica";
$tdatapaa_master_modifica[".nSecOptions"] = 0;

$tdatapaa_master_modifica[".mainTableOwnerID"] = "";
$tdatapaa_master_modifica[".entityType"] = 0;
$tdatapaa_master_modifica[".connId"] = "mincit_global_20x_at_127_0_0_1";


$tdatapaa_master_modifica[".strOriginalTableName"] = "paa_master_modifica";

	



$tdatapaa_master_modifica[".showAddInPopup"] = false;

$tdatapaa_master_modifica[".showEditInPopup"] = false;

$tdatapaa_master_modifica[".showViewInPopup"] = false;

$tdatapaa_master_modifica[".listAjax"] = false;
//	temporary
//$tdatapaa_master_modifica[".listAjax"] = false;

	$tdatapaa_master_modifica[".audit"] = true;

	$tdatapaa_master_modifica[".locking"] = true;


$pages = $tdatapaa_master_modifica[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapaa_master_modifica[".edit"] = true;
	$tdatapaa_master_modifica[".afterEditAction"] = 1;
	$tdatapaa_master_modifica[".closePopupAfterEdit"] = 1;
	$tdatapaa_master_modifica[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapaa_master_modifica[".add"] = true;
$tdatapaa_master_modifica[".afterAddAction"] = 1;
$tdatapaa_master_modifica[".closePopupAfterAdd"] = 1;
$tdatapaa_master_modifica[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapaa_master_modifica[".list"] = true;
}



$tdatapaa_master_modifica[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapaa_master_modifica[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapaa_master_modifica[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapaa_master_modifica[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapaa_master_modifica[".printFriendly"] = true;
}



$tdatapaa_master_modifica[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapaa_master_modifica[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapaa_master_modifica[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapaa_master_modifica[".isUseAjaxSuggest"] = true;



																																																												

$tdatapaa_master_modifica[".ajaxCodeSnippetAdded"] = false;

$tdatapaa_master_modifica[".buttonsAdded"] = false;

$tdatapaa_master_modifica[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapaa_master_modifica[".isUseTimeForSearch"] = false;


$tdatapaa_master_modifica[".badgeColor"] = "0000ff";


$tdatapaa_master_modifica[".allSearchFields"] = array();
$tdatapaa_master_modifica[".filterFields"] = array();
$tdatapaa_master_modifica[".requiredSearchFields"] = array();

$tdatapaa_master_modifica[".googleLikeFields"] = array();
$tdatapaa_master_modifica[".googleLikeFields"][] = "PAAM_ID";
$tdatapaa_master_modifica[".googleLikeFields"][] = "PAA_ID_FK";
$tdatapaa_master_modifica[".googleLikeFields"][] = "DESCRIPCION";
$tdatapaa_master_modifica[".googleLikeFields"][] = "PAAM_FECHA";
$tdatapaa_master_modifica[".googleLikeFields"][] = "PAA_MODIFICA";
$tdatapaa_master_modifica[".googleLikeFields"][] = "PAA_JUSTIFICA";
$tdatapaa_master_modifica[".googleLikeFields"][] = "SYSUSER";
$tdatapaa_master_modifica[".googleLikeFields"][] = "MAIL_NOT";
$tdatapaa_master_modifica[".googleLikeFields"][] = "PAAM_ST";
$tdatapaa_master_modifica[".googleLikeFields"][] = "SYS_USER";
$tdatapaa_master_modifica[".googleLikeFields"][] = "SYS_DATE";
$tdatapaa_master_modifica[".googleLikeFields"][] = "OBS";



$tdatapaa_master_modifica[".tableType"] = "list";

$tdatapaa_master_modifica[".printerPageOrientation"] = 0;
$tdatapaa_master_modifica[".nPrinterPageScale"] = 100;

$tdatapaa_master_modifica[".nPrinterSplitRecords"] = 40;

$tdatapaa_master_modifica[".geocodingEnabled"] = false;










$tdatapaa_master_modifica[".pageSize"] = 20;

$tdatapaa_master_modifica[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapaa_master_modifica[".strOrderBy"] = $tstrOrderBy;

$tdatapaa_master_modifica[".orderindexes"] = array();


$tdatapaa_master_modifica[".sqlHead"] = "SELECT PAAM_ID,  	PAA_ID_FK,  	DESCRIPCION,  	PAAM_FECHA,  	PAA_MODIFICA,  	PAA_JUSTIFICA,  	SYSUSER,  	MAIL_NOT,  	PAAM_ST,  	SYS_USER,  	SYS_DATE,  	OBS";
$tdatapaa_master_modifica[".sqlFrom"] = "FROM paa_master_modifica";
$tdatapaa_master_modifica[".sqlWhereExpr"] = "";
$tdatapaa_master_modifica[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapaa_master_modifica[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapaa_master_modifica[".arrGroupsPerPage"] = $arrGPP;

$tdatapaa_master_modifica[".highlightSearchResults"] = true;

$tableKeyspaa_master_modifica = array();
$tableKeyspaa_master_modifica[] = "PAAM_ID";
$tdatapaa_master_modifica[".Keys"] = $tableKeyspaa_master_modifica;


$tdatapaa_master_modifica[".hideMobileList"] = array();




//	PAAM_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PAAM_ID";
	$fdata["GoodName"] = "PAAM_ID";
	$fdata["ownerTable"] = "paa_master_modifica";
	$fdata["Label"] = GetFieldLabel("paa_master_modifica","PAAM_ID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "PAAM_ID";

		$fdata["sourceSingle"] = "PAAM_ID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PAAM_ID";

	
	
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


	$tdatapaa_master_modifica["PAAM_ID"] = $fdata;
		$tdatapaa_master_modifica[".searchableFields"][] = "PAAM_ID";
//	PAA_ID_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PAA_ID_FK";
	$fdata["GoodName"] = "PAA_ID_FK";
	$fdata["ownerTable"] = "paa_master_modifica";
	$fdata["Label"] = GetFieldLabel("paa_master_modifica","PAA_ID_FK");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "PAA_ID_FK";

		$fdata["sourceSingle"] = "PAA_ID_FK";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PAA_ID_FK";

	
	
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
	$edata["LookupTable"] = "paa_master";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"DESCRIPCION", 'lookupF'=>"DESCRIPCION");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "PAA_ID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "PAA_ID";

	

	
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


	$tdatapaa_master_modifica["PAA_ID_FK"] = $fdata;
		$tdatapaa_master_modifica[".searchableFields"][] = "PAA_ID_FK";
//	DESCRIPCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DESCRIPCION";
	$fdata["GoodName"] = "DESCRIPCION";
	$fdata["ownerTable"] = "paa_master_modifica";
	$fdata["Label"] = GetFieldLabel("paa_master_modifica","DESCRIPCION");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "DESCRIPCION";

		$fdata["sourceSingle"] = "DESCRIPCION";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DESCRIPCION";

	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
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


	$tdatapaa_master_modifica["DESCRIPCION"] = $fdata;
		$tdatapaa_master_modifica[".searchableFields"][] = "DESCRIPCION";
//	PAAM_FECHA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PAAM_FECHA";
	$fdata["GoodName"] = "PAAM_FECHA";
	$fdata["ownerTable"] = "paa_master_modifica";
	$fdata["Label"] = GetFieldLabel("paa_master_modifica","PAAM_FECHA");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "PAAM_FECHA";

		$fdata["sourceSingle"] = "PAAM_FECHA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PAAM_FECHA";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

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


	$tdatapaa_master_modifica["PAAM_FECHA"] = $fdata;
		$tdatapaa_master_modifica[".searchableFields"][] = "PAAM_FECHA";
//	PAA_MODIFICA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PAA_MODIFICA";
	$fdata["GoodName"] = "PAA_MODIFICA";
	$fdata["ownerTable"] = "paa_master_modifica";
	$fdata["Label"] = GetFieldLabel("paa_master_modifica","PAA_MODIFICA");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "PAA_MODIFICA";

		$fdata["sourceSingle"] = "PAA_MODIFICA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PAA_MODIFICA";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatapaa_master_modifica["PAA_MODIFICA"] = $fdata;
		$tdatapaa_master_modifica[".searchableFields"][] = "PAA_MODIFICA";
//	PAA_JUSTIFICA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "PAA_JUSTIFICA";
	$fdata["GoodName"] = "PAA_JUSTIFICA";
	$fdata["ownerTable"] = "paa_master_modifica";
	$fdata["Label"] = GetFieldLabel("paa_master_modifica","PAA_JUSTIFICA");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "PAA_JUSTIFICA";

		$fdata["sourceSingle"] = "PAA_JUSTIFICA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PAA_JUSTIFICA";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatapaa_master_modifica["PAA_JUSTIFICA"] = $fdata;
		$tdatapaa_master_modifica[".searchableFields"][] = "PAA_JUSTIFICA";
//	SYSUSER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "SYSUSER";
	$fdata["GoodName"] = "SYSUSER";
	$fdata["ownerTable"] = "paa_master_modifica";
	$fdata["Label"] = GetFieldLabel("paa_master_modifica","SYSUSER");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SYSUSER";

		$fdata["sourceSingle"] = "SYSUSER";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SYSUSER";

	
	
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
	
		$edata["autoUpdatable"] = true;

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


	$tdatapaa_master_modifica["SYSUSER"] = $fdata;
		$tdatapaa_master_modifica[".searchableFields"][] = "SYSUSER";
//	MAIL_NOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "MAIL_NOT";
	$fdata["GoodName"] = "MAIL_NOT";
	$fdata["ownerTable"] = "paa_master_modifica";
	$fdata["Label"] = GetFieldLabel("paa_master_modifica","MAIL_NOT");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "MAIL_NOT";

		$fdata["sourceSingle"] = "MAIL_NOT";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MAIL_NOT";

	
	
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


	$tdatapaa_master_modifica["MAIL_NOT"] = $fdata;
		$tdatapaa_master_modifica[".searchableFields"][] = "MAIL_NOT";
//	PAAM_ST
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "PAAM_ST";
	$fdata["GoodName"] = "PAAM_ST";
	$fdata["ownerTable"] = "paa_master_modifica";
	$fdata["Label"] = GetFieldLabel("paa_master_modifica","PAAM_ST");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "PAAM_ST";

		$fdata["sourceSingle"] = "PAAM_ST";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PAAM_ST";

	
	
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
	$edata["LookupTable"] = "global_estado_mod";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"MAIL_NOT", 'lookupF'=>"not_mail");
	$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "status_mod_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "status_mod_name";

				$edata["LookupWhere"] = "status_mod_id = 0";


	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
		$edata["autoUpdatable"] = true;

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


	$tdatapaa_master_modifica["PAAM_ST"] = $fdata;
		$tdatapaa_master_modifica[".searchableFields"][] = "PAAM_ST";
//	SYS_USER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "SYS_USER";
	$fdata["GoodName"] = "SYS_USER";
	$fdata["ownerTable"] = "paa_master_modifica";
	$fdata["Label"] = GetFieldLabel("paa_master_modifica","SYS_USER");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SYS_USER";

		$fdata["sourceSingle"] = "SYS_USER";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SYS_USER";

	
	
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
	
		$edata["autoUpdatable"] = true;

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


	$tdatapaa_master_modifica["SYS_USER"] = $fdata;
		$tdatapaa_master_modifica[".searchableFields"][] = "SYS_USER";
//	SYS_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "SYS_DATE";
	$fdata["GoodName"] = "SYS_DATE";
	$fdata["ownerTable"] = "paa_master_modifica";
	$fdata["Label"] = GetFieldLabel("paa_master_modifica","SYS_DATE");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "SYS_DATE";

		$fdata["sourceSingle"] = "SYS_DATE";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SYS_DATE";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

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


	$tdatapaa_master_modifica["SYS_DATE"] = $fdata;
		$tdatapaa_master_modifica[".searchableFields"][] = "SYS_DATE";
//	OBS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "OBS";
	$fdata["GoodName"] = "OBS";
	$fdata["ownerTable"] = "paa_master_modifica";
	$fdata["Label"] = GetFieldLabel("paa_master_modifica","OBS");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "OBS";

		$fdata["sourceSingle"] = "OBS";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OBS";

	
	
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


	$tdatapaa_master_modifica["OBS"] = $fdata;
		$tdatapaa_master_modifica[".searchableFields"][] = "OBS";


$tables_data["paa_master_modifica"]=&$tdatapaa_master_modifica;
$field_labels["paa_master_modifica"] = &$fieldLabelspaa_master_modifica;
$fieldToolTips["paa_master_modifica"] = &$fieldToolTipspaa_master_modifica;
$placeHolders["paa_master_modifica"] = &$placeHolderspaa_master_modifica;
$page_titles["paa_master_modifica"] = &$pageTitlespaa_master_modifica;


changeTextControlsToDate( "paa_master_modifica" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["paa_master_modifica"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["paa_master_modifica"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="paa_master";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="paa_master_stat_4_c";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "paa_master_stat_4_c";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["paa_master_modifica"][0] = $masterParams;
				$masterTablesData["paa_master_modifica"][0]["masterKeys"] = array();
	$masterTablesData["paa_master_modifica"][0]["masterKeys"][]="PAA_ID";
				$masterTablesData["paa_master_modifica"][0]["detailKeys"] = array();
	$masterTablesData["paa_master_modifica"][0]["detailKeys"][]="PAA_ID_FK";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="paa_master";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="paa_master_stat_4_f";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "paa_master_stat_4_f";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["paa_master_modifica"][1] = $masterParams;
				$masterTablesData["paa_master_modifica"][1]["masterKeys"] = array();
	$masterTablesData["paa_master_modifica"][1]["masterKeys"][]="PAA_ID";
				$masterTablesData["paa_master_modifica"][1]["detailKeys"] = array();
	$masterTablesData["paa_master_modifica"][1]["detailKeys"][]="PAA_ID_FK";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="paa_master";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="paa_master_stat_0f";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "paa_master_stat_0f";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["paa_master_modifica"][2] = $masterParams;
				$masterTablesData["paa_master_modifica"][2]["masterKeys"] = array();
	$masterTablesData["paa_master_modifica"][2]["masterKeys"][]="PAA_ID";
				$masterTablesData["paa_master_modifica"][2]["detailKeys"] = array();
	$masterTablesData["paa_master_modifica"][2]["detailKeys"][]="PAA_ID_FK";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="paa_master";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="paa_master_admin";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "paa_master_admin";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["paa_master_modifica"][3] = $masterParams;
				$masterTablesData["paa_master_modifica"][3]["masterKeys"] = array();
	$masterTablesData["paa_master_modifica"][3]["masterKeys"][]="PAA_ID";
				$masterTablesData["paa_master_modifica"][3]["detailKeys"] = array();
	$masterTablesData["paa_master_modifica"][3]["detailKeys"][]="PAA_ID_FK";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_paa_master_modifica()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PAAM_ID,  	PAA_ID_FK,  	DESCRIPCION,  	PAAM_FECHA,  	PAA_MODIFICA,  	PAA_JUSTIFICA,  	SYSUSER,  	MAIL_NOT,  	PAAM_ST,  	SYS_USER,  	SYS_DATE,  	OBS";
$proto0["m_strFrom"] = "FROM paa_master_modifica";
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
	"m_strName" => "PAAM_ID",
	"m_strTable" => "paa_master_modifica",
	"m_srcTableName" => "paa_master_modifica"
));

$proto6["m_sql"] = "PAAM_ID";
$proto6["m_srcTableName"] = "paa_master_modifica";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PAA_ID_FK",
	"m_strTable" => "paa_master_modifica",
	"m_srcTableName" => "paa_master_modifica"
));

$proto8["m_sql"] = "PAA_ID_FK";
$proto8["m_srcTableName"] = "paa_master_modifica";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION",
	"m_strTable" => "paa_master_modifica",
	"m_srcTableName" => "paa_master_modifica"
));

$proto10["m_sql"] = "DESCRIPCION";
$proto10["m_srcTableName"] = "paa_master_modifica";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PAAM_FECHA",
	"m_strTable" => "paa_master_modifica",
	"m_srcTableName" => "paa_master_modifica"
));

$proto12["m_sql"] = "PAAM_FECHA";
$proto12["m_srcTableName"] = "paa_master_modifica";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "PAA_MODIFICA",
	"m_strTable" => "paa_master_modifica",
	"m_srcTableName" => "paa_master_modifica"
));

$proto14["m_sql"] = "PAA_MODIFICA";
$proto14["m_srcTableName"] = "paa_master_modifica";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "PAA_JUSTIFICA",
	"m_strTable" => "paa_master_modifica",
	"m_srcTableName" => "paa_master_modifica"
));

$proto16["m_sql"] = "PAA_JUSTIFICA";
$proto16["m_srcTableName"] = "paa_master_modifica";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "SYSUSER",
	"m_strTable" => "paa_master_modifica",
	"m_srcTableName" => "paa_master_modifica"
));

$proto18["m_sql"] = "SYSUSER";
$proto18["m_srcTableName"] = "paa_master_modifica";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "MAIL_NOT",
	"m_strTable" => "paa_master_modifica",
	"m_srcTableName" => "paa_master_modifica"
));

$proto20["m_sql"] = "MAIL_NOT";
$proto20["m_srcTableName"] = "paa_master_modifica";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "PAAM_ST",
	"m_strTable" => "paa_master_modifica",
	"m_srcTableName" => "paa_master_modifica"
));

$proto22["m_sql"] = "PAAM_ST";
$proto22["m_srcTableName"] = "paa_master_modifica";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "SYS_USER",
	"m_strTable" => "paa_master_modifica",
	"m_srcTableName" => "paa_master_modifica"
));

$proto24["m_sql"] = "SYS_USER";
$proto24["m_srcTableName"] = "paa_master_modifica";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "SYS_DATE",
	"m_strTable" => "paa_master_modifica",
	"m_srcTableName" => "paa_master_modifica"
));

$proto26["m_sql"] = "SYS_DATE";
$proto26["m_srcTableName"] = "paa_master_modifica";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "OBS",
	"m_strTable" => "paa_master_modifica",
	"m_srcTableName" => "paa_master_modifica"
));

$proto28["m_sql"] = "OBS";
$proto28["m_srcTableName"] = "paa_master_modifica";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "paa_master_modifica";
$proto31["m_srcTableName"] = "paa_master_modifica";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "PAAM_ID";
$proto31["m_columns"][] = "PAA_ID_FK";
$proto31["m_columns"][] = "DESCRIPCION";
$proto31["m_columns"][] = "PAAM_FECHA";
$proto31["m_columns"][] = "PAA_MODIFICA";
$proto31["m_columns"][] = "PAA_JUSTIFICA";
$proto31["m_columns"][] = "SYSUSER";
$proto31["m_columns"][] = "MAIL_NOT";
$proto31["m_columns"][] = "PAAM_ST";
$proto31["m_columns"][] = "SYS_USER";
$proto31["m_columns"][] = "SYS_DATE";
$proto31["m_columns"][] = "OBS";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "paa_master_modifica";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "paa_master_modifica";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="paa_master_modifica";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_paa_master_modifica = createSqlQuery_paa_master_modifica();


	
										;

												

$tdatapaa_master_modifica[".sqlquery"] = $queryData_paa_master_modifica;



include_once(getabspath("include/paa_master_modifica_events.php"));
$tdatapaa_master_modifica[".hasEvents"] = true;

?>