<?php
$tdatascdp_event_type_actividad = array();
$tdatascdp_event_type_actividad[".searchableFields"] = array();
$tdatascdp_event_type_actividad[".ShortName"] = "scdp_event_type_actividad";
$tdatascdp_event_type_actividad[".OwnerID"] = "";
$tdatascdp_event_type_actividad[".OriginalTable"] = "scdp_event_type_actividad";


$tdatascdp_event_type_actividad[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatascdp_event_type_actividad[".originalPagesByType"] = $tdatascdp_event_type_actividad[".pagesByType"];
$tdatascdp_event_type_actividad[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatascdp_event_type_actividad[".originalPages"] = $tdatascdp_event_type_actividad[".pages"];
$tdatascdp_event_type_actividad[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatascdp_event_type_actividad[".originalDefaultPages"] = $tdatascdp_event_type_actividad[".defaultPages"];

//	field labels
$fieldLabelsscdp_event_type_actividad = array();
$fieldToolTipsscdp_event_type_actividad = array();
$pageTitlesscdp_event_type_actividad = array();
$placeHoldersscdp_event_type_actividad = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsscdp_event_type_actividad["Spanish"] = array();
	$fieldToolTipsscdp_event_type_actividad["Spanish"] = array();
	$placeHoldersscdp_event_type_actividad["Spanish"] = array();
	$pageTitlesscdp_event_type_actividad["Spanish"] = array();
	$fieldLabelsscdp_event_type_actividad["Spanish"]["usuario_id"] = "Usuario Id";
	$fieldToolTipsscdp_event_type_actividad["Spanish"]["usuario_id"] = "";
	$placeHoldersscdp_event_type_actividad["Spanish"]["usuario_id"] = "";
	$fieldLabelsscdp_event_type_actividad["Spanish"]["evento_type_id_fk"] = "Estado";
	$fieldToolTipsscdp_event_type_actividad["Spanish"]["evento_type_id_fk"] = "";
	$placeHoldersscdp_event_type_actividad["Spanish"]["evento_type_id_fk"] = "";
	$fieldLabelsscdp_event_type_actividad["Spanish"]["idusrglobal_fk"] = "Usuario ID";
	$fieldToolTipsscdp_event_type_actividad["Spanish"]["idusrglobal_fk"] = "";
	$placeHoldersscdp_event_type_actividad["Spanish"]["idusrglobal_fk"] = "";
	$fieldLabelsscdp_event_type_actividad["Spanish"]["Username"] = "Username";
	$fieldToolTipsscdp_event_type_actividad["Spanish"]["Username"] = "";
	$placeHoldersscdp_event_type_actividad["Spanish"]["Username"] = "";
	$fieldLabelsscdp_event_type_actividad["Spanish"]["usr_email"] = "Email";
	$fieldToolTipsscdp_event_type_actividad["Spanish"]["usr_email"] = "";
	$placeHoldersscdp_event_type_actividad["Spanish"]["usr_email"] = "";
	$fieldLabelsscdp_event_type_actividad["Spanish"]["usr_nombresfull"] = "Nombres y Apellidos";
	$fieldToolTipsscdp_event_type_actividad["Spanish"]["usr_nombresfull"] = "";
	$placeHoldersscdp_event_type_actividad["Spanish"]["usr_nombresfull"] = "";
	if (count($fieldToolTipsscdp_event_type_actividad["Spanish"]))
		$tdatascdp_event_type_actividad[".isUseToolTips"] = true;
}


	$tdatascdp_event_type_actividad[".NCSearch"] = true;



$tdatascdp_event_type_actividad[".shortTableName"] = "scdp_event_type_actividad";
$tdatascdp_event_type_actividad[".nSecOptions"] = 0;

$tdatascdp_event_type_actividad[".mainTableOwnerID"] = "";
$tdatascdp_event_type_actividad[".entityType"] = 0;
$tdatascdp_event_type_actividad[".connId"] = "mincit_global_20x_at_127_0_0_1";


$tdatascdp_event_type_actividad[".strOriginalTableName"] = "scdp_event_type_actividad";

	



$tdatascdp_event_type_actividad[".showAddInPopup"] = false;

$tdatascdp_event_type_actividad[".showEditInPopup"] = false;

$tdatascdp_event_type_actividad[".showViewInPopup"] = false;

$tdatascdp_event_type_actividad[".listAjax"] = false;
//	temporary
//$tdatascdp_event_type_actividad[".listAjax"] = false;

	$tdatascdp_event_type_actividad[".audit"] = true;

	$tdatascdp_event_type_actividad[".locking"] = true;


$pages = $tdatascdp_event_type_actividad[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatascdp_event_type_actividad[".edit"] = true;
	$tdatascdp_event_type_actividad[".afterEditAction"] = 1;
	$tdatascdp_event_type_actividad[".closePopupAfterEdit"] = 1;
	$tdatascdp_event_type_actividad[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatascdp_event_type_actividad[".add"] = true;
$tdatascdp_event_type_actividad[".afterAddAction"] = 1;
$tdatascdp_event_type_actividad[".closePopupAfterAdd"] = 1;
$tdatascdp_event_type_actividad[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatascdp_event_type_actividad[".list"] = true;
}



$tdatascdp_event_type_actividad[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatascdp_event_type_actividad[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatascdp_event_type_actividad[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatascdp_event_type_actividad[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatascdp_event_type_actividad[".printFriendly"] = true;
}



$tdatascdp_event_type_actividad[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatascdp_event_type_actividad[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatascdp_event_type_actividad[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatascdp_event_type_actividad[".isUseAjaxSuggest"] = true;



																								

$tdatascdp_event_type_actividad[".ajaxCodeSnippetAdded"] = false;

$tdatascdp_event_type_actividad[".buttonsAdded"] = false;

$tdatascdp_event_type_actividad[".addPageEvents"] = false;

// use timepicker for search panel
$tdatascdp_event_type_actividad[".isUseTimeForSearch"] = false;


$tdatascdp_event_type_actividad[".badgeColor"] = "BC8F8F";


$tdatascdp_event_type_actividad[".allSearchFields"] = array();
$tdatascdp_event_type_actividad[".filterFields"] = array();
$tdatascdp_event_type_actividad[".requiredSearchFields"] = array();

$tdatascdp_event_type_actividad[".googleLikeFields"] = array();
$tdatascdp_event_type_actividad[".googleLikeFields"][] = "usuario_id";
$tdatascdp_event_type_actividad[".googleLikeFields"][] = "evento_type_id_fk";
$tdatascdp_event_type_actividad[".googleLikeFields"][] = "idusrglobal_fk";
$tdatascdp_event_type_actividad[".googleLikeFields"][] = "Username";
$tdatascdp_event_type_actividad[".googleLikeFields"][] = "usr_email";
$tdatascdp_event_type_actividad[".googleLikeFields"][] = "usr_nombresfull";



$tdatascdp_event_type_actividad[".tableType"] = "list";

$tdatascdp_event_type_actividad[".printerPageOrientation"] = 0;
$tdatascdp_event_type_actividad[".nPrinterPageScale"] = 100;

$tdatascdp_event_type_actividad[".nPrinterSplitRecords"] = 40;

$tdatascdp_event_type_actividad[".geocodingEnabled"] = false;










$tdatascdp_event_type_actividad[".pageSize"] = 20;

$tdatascdp_event_type_actividad[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatascdp_event_type_actividad[".strOrderBy"] = $tstrOrderBy;

$tdatascdp_event_type_actividad[".orderindexes"] = array();


$tdatascdp_event_type_actividad[".sqlHead"] = "SELECT usuario_id,  	evento_type_id_fk,  	idusrglobal_fk,  	Username,  	usr_email,  	usr_nombresfull";
$tdatascdp_event_type_actividad[".sqlFrom"] = "FROM scdp_event_type_actividad";
$tdatascdp_event_type_actividad[".sqlWhereExpr"] = "";
$tdatascdp_event_type_actividad[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatascdp_event_type_actividad[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatascdp_event_type_actividad[".arrGroupsPerPage"] = $arrGPP;

$tdatascdp_event_type_actividad[".highlightSearchResults"] = true;

$tableKeysscdp_event_type_actividad = array();
$tableKeysscdp_event_type_actividad[] = "usuario_id";
$tdatascdp_event_type_actividad[".Keys"] = $tableKeysscdp_event_type_actividad;


$tdatascdp_event_type_actividad[".hideMobileList"] = array();




//	usuario_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "usuario_id";
	$fdata["GoodName"] = "usuario_id";
	$fdata["ownerTable"] = "scdp_event_type_actividad";
	$fdata["Label"] = GetFieldLabel("scdp_event_type_actividad","usuario_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "usuario_id";

		$fdata["sourceSingle"] = "usuario_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usuario_id";

	
	
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


	$tdatascdp_event_type_actividad["usuario_id"] = $fdata;
		$tdatascdp_event_type_actividad[".searchableFields"][] = "usuario_id";
//	evento_type_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "evento_type_id_fk";
	$fdata["GoodName"] = "evento_type_id_fk";
	$fdata["ownerTable"] = "scdp_event_type_actividad";
	$fdata["Label"] = GetFieldLabel("scdp_event_type_actividad","evento_type_id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "evento_type_id_fk";

		$fdata["sourceSingle"] = "evento_type_id_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evento_type_id_fk";

	
	
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
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "evento_type_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatascdp_event_type_actividad["evento_type_id_fk"] = $fdata;
		$tdatascdp_event_type_actividad[".searchableFields"][] = "evento_type_id_fk";
//	idusrglobal_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "idusrglobal_fk";
	$fdata["GoodName"] = "idusrglobal_fk";
	$fdata["ownerTable"] = "scdp_event_type_actividad";
	$fdata["Label"] = GetFieldLabel("scdp_event_type_actividad","idusrglobal_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idusrglobal_fk";

		$fdata["sourceSingle"] = "idusrglobal_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idusrglobal_fk";

	
	
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
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"Username", 'lookupF'=>"Username");
	$edata["autoCompleteFields"][] = array('masterF'=>"usr_email", 'lookupF'=>"usr_email");
	$edata["autoCompleteFields"][] = array('masterF'=>"usr_nombresfull", 'lookupF'=>"usr_nombresfull");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "idusrglobal";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "idusrglobal";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatascdp_event_type_actividad["idusrglobal_fk"] = $fdata;
		$tdatascdp_event_type_actividad[".searchableFields"][] = "idusrglobal_fk";
//	Username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Username";
	$fdata["GoodName"] = "Username";
	$fdata["ownerTable"] = "scdp_event_type_actividad";
	$fdata["Label"] = GetFieldLabel("scdp_event_type_actividad","Username");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Username";

		$fdata["sourceSingle"] = "Username";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Username";

	
	
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


	$tdatascdp_event_type_actividad["Username"] = $fdata;
		$tdatascdp_event_type_actividad[".searchableFields"][] = "Username";
//	usr_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "usr_email";
	$fdata["GoodName"] = "usr_email";
	$fdata["ownerTable"] = "scdp_event_type_actividad";
	$fdata["Label"] = GetFieldLabel("scdp_event_type_actividad","usr_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_email";

		$fdata["sourceSingle"] = "usr_email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_email";

	
	
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


	$tdatascdp_event_type_actividad["usr_email"] = $fdata;
		$tdatascdp_event_type_actividad[".searchableFields"][] = "usr_email";
//	usr_nombresfull
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "usr_nombresfull";
	$fdata["GoodName"] = "usr_nombresfull";
	$fdata["ownerTable"] = "scdp_event_type_actividad";
	$fdata["Label"] = GetFieldLabel("scdp_event_type_actividad","usr_nombresfull");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_nombresfull";

		$fdata["sourceSingle"] = "usr_nombresfull";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_nombresfull";

	
	
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


	$tdatascdp_event_type_actividad["usr_nombresfull"] = $fdata;
		$tdatascdp_event_type_actividad[".searchableFields"][] = "usr_nombresfull";


$tables_data["scdp_event_type_actividad"]=&$tdatascdp_event_type_actividad;
$field_labels["scdp_event_type_actividad"] = &$fieldLabelsscdp_event_type_actividad;
$fieldToolTips["scdp_event_type_actividad"] = &$fieldToolTipsscdp_event_type_actividad;
$placeHolders["scdp_event_type_actividad"] = &$placeHoldersscdp_event_type_actividad;
$page_titles["scdp_event_type_actividad"] = &$pageTitlesscdp_event_type_actividad;


changeTextControlsToDate( "scdp_event_type_actividad" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["scdp_event_type_actividad"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["scdp_event_type_actividad"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="scdp_event_type";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="scdp_event_type";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "scdp_event_type";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["scdp_event_type_actividad"][0] = $masterParams;
				$masterTablesData["scdp_event_type_actividad"][0]["masterKeys"] = array();
	$masterTablesData["scdp_event_type_actividad"][0]["masterKeys"][]="evento_type_id";
				$masterTablesData["scdp_event_type_actividad"][0]["detailKeys"] = array();
	$masterTablesData["scdp_event_type_actividad"][0]["detailKeys"][]="evento_type_id_fk";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_scdp_event_type_actividad()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "usuario_id,  	evento_type_id_fk,  	idusrglobal_fk,  	Username,  	usr_email,  	usr_nombresfull";
$proto0["m_strFrom"] = "FROM scdp_event_type_actividad";
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
	"m_strName" => "usuario_id",
	"m_strTable" => "scdp_event_type_actividad",
	"m_srcTableName" => "scdp_event_type_actividad"
));

$proto6["m_sql"] = "usuario_id";
$proto6["m_srcTableName"] = "scdp_event_type_actividad";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "evento_type_id_fk",
	"m_strTable" => "scdp_event_type_actividad",
	"m_srcTableName" => "scdp_event_type_actividad"
));

$proto8["m_sql"] = "evento_type_id_fk";
$proto8["m_srcTableName"] = "scdp_event_type_actividad";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "idusrglobal_fk",
	"m_strTable" => "scdp_event_type_actividad",
	"m_srcTableName" => "scdp_event_type_actividad"
));

$proto10["m_sql"] = "idusrglobal_fk";
$proto10["m_srcTableName"] = "scdp_event_type_actividad";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Username",
	"m_strTable" => "scdp_event_type_actividad",
	"m_srcTableName" => "scdp_event_type_actividad"
));

$proto12["m_sql"] = "Username";
$proto12["m_srcTableName"] = "scdp_event_type_actividad";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_email",
	"m_strTable" => "scdp_event_type_actividad",
	"m_srcTableName" => "scdp_event_type_actividad"
));

$proto14["m_sql"] = "usr_email";
$proto14["m_srcTableName"] = "scdp_event_type_actividad";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_nombresfull",
	"m_strTable" => "scdp_event_type_actividad",
	"m_srcTableName" => "scdp_event_type_actividad"
));

$proto16["m_sql"] = "usr_nombresfull";
$proto16["m_srcTableName"] = "scdp_event_type_actividad";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "scdp_event_type_actividad";
$proto19["m_srcTableName"] = "scdp_event_type_actividad";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "usuario_id";
$proto19["m_columns"][] = "evento_type_id_fk";
$proto19["m_columns"][] = "idusrglobal_fk";
$proto19["m_columns"][] = "Username";
$proto19["m_columns"][] = "usr_email";
$proto19["m_columns"][] = "usr_nombresfull";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "scdp_event_type_actividad";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "scdp_event_type_actividad";
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
$proto0["m_srcTableName"]="scdp_event_type_actividad";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_scdp_event_type_actividad = createSqlQuery_scdp_event_type_actividad();


	
										;

						

$tdatascdp_event_type_actividad[".sqlquery"] = $queryData_scdp_event_type_actividad;



$tdatascdp_event_type_actividad[".hasEvents"] = false;

?>