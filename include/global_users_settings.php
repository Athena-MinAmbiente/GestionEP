<?php
$tdataglobal_users = array();
$tdataglobal_users[".searchableFields"] = array();
$tdataglobal_users[".ShortName"] = "global_users";
$tdataglobal_users[".OwnerID"] = "";
$tdataglobal_users[".OriginalTable"] = "global_users";


$tdataglobal_users[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataglobal_users[".originalPagesByType"] = $tdataglobal_users[".pagesByType"];
$tdataglobal_users[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataglobal_users[".originalPages"] = $tdataglobal_users[".pages"];
$tdataglobal_users[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataglobal_users[".originalDefaultPages"] = $tdataglobal_users[".defaultPages"];

//	field labels
$fieldLabelsglobal_users = array();
$fieldToolTipsglobal_users = array();
$pageTitlesglobal_users = array();
$placeHoldersglobal_users = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsglobal_users["Spanish"] = array();
	$fieldToolTipsglobal_users["Spanish"] = array();
	$placeHoldersglobal_users["Spanish"] = array();
	$pageTitlesglobal_users["Spanish"] = array();
	$fieldLabelsglobal_users["Spanish"]["idusrglobal"] = "ID";
	$fieldToolTipsglobal_users["Spanish"]["idusrglobal"] = "";
	$placeHoldersglobal_users["Spanish"]["idusrglobal"] = "";
	$fieldLabelsglobal_users["Spanish"]["Username"] = "USUARIO DEL SISTEMA";
	$fieldToolTipsglobal_users["Spanish"]["Username"] = "";
	$placeHoldersglobal_users["Spanish"]["Username"] = "";
	$fieldLabelsglobal_users["Spanish"]["usr_nombresfull"] = "NOMBRE FUNCIONARIO";
	$fieldToolTipsglobal_users["Spanish"]["usr_nombresfull"] = "";
	$placeHoldersglobal_users["Spanish"]["usr_nombresfull"] = "";
	$fieldLabelsglobal_users["Spanish"]["usr_personalid"] = "DOCUMENTO";
	$fieldToolTipsglobal_users["Spanish"]["usr_personalid"] = "";
	$placeHoldersglobal_users["Spanish"]["usr_personalid"] = "";
	$fieldLabelsglobal_users["Spanish"]["id_fk"] = "Id Fk";
	$fieldToolTipsglobal_users["Spanish"]["id_fk"] = "";
	$placeHoldersglobal_users["Spanish"]["id_fk"] = "";
	$fieldLabelsglobal_users["Spanish"]["Password"] = "Password";
	$fieldToolTipsglobal_users["Spanish"]["Password"] = "";
	$placeHoldersglobal_users["Spanish"]["Password"] = "";
	$fieldLabelsglobal_users["Spanish"]["usr_email"] = "Correo electrónico";
	$fieldToolTipsglobal_users["Spanish"]["usr_email"] = "";
	$placeHoldersglobal_users["Spanish"]["usr_email"] = "";
	$fieldLabelsglobal_users["Spanish"]["usr_name"] = "Nombres";
	$fieldToolTipsglobal_users["Spanish"]["usr_name"] = "";
	$placeHoldersglobal_users["Spanish"]["usr_name"] = "";
	$fieldLabelsglobal_users["Spanish"]["usr_lname"] = "Apellidos";
	$fieldToolTipsglobal_users["Spanish"]["usr_lname"] = "";
	$placeHoldersglobal_users["Spanish"]["usr_lname"] = "";
	if (count($fieldToolTipsglobal_users["Spanish"]))
		$tdataglobal_users[".isUseToolTips"] = true;
}


	$tdataglobal_users[".NCSearch"] = true;



$tdataglobal_users[".shortTableName"] = "global_users";
$tdataglobal_users[".nSecOptions"] = 0;

$tdataglobal_users[".mainTableOwnerID"] = "";
$tdataglobal_users[".entityType"] = 0;
$tdataglobal_users[".connId"] = "dbusers_at_127_0_0_1";


$tdataglobal_users[".strOriginalTableName"] = "global_users";

	



$tdataglobal_users[".showAddInPopup"] = false;

$tdataglobal_users[".showEditInPopup"] = false;

$tdataglobal_users[".showViewInPopup"] = false;

$tdataglobal_users[".listAjax"] = false;
//	temporary
//$tdataglobal_users[".listAjax"] = false;

	$tdataglobal_users[".audit"] = true;

	$tdataglobal_users[".locking"] = true;


$pages = $tdataglobal_users[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataglobal_users[".edit"] = true;
	$tdataglobal_users[".afterEditAction"] = 1;
	$tdataglobal_users[".closePopupAfterEdit"] = 1;
	$tdataglobal_users[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataglobal_users[".add"] = true;
$tdataglobal_users[".afterAddAction"] = 1;
$tdataglobal_users[".closePopupAfterAdd"] = 1;
$tdataglobal_users[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataglobal_users[".list"] = true;
}



$tdataglobal_users[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataglobal_users[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataglobal_users[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataglobal_users[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataglobal_users[".printFriendly"] = true;
}



$tdataglobal_users[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataglobal_users[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataglobal_users[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataglobal_users[".isUseAjaxSuggest"] = true;



																								

$tdataglobal_users[".ajaxCodeSnippetAdded"] = false;

$tdataglobal_users[".buttonsAdded"] = false;

$tdataglobal_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdataglobal_users[".isUseTimeForSearch"] = false;


$tdataglobal_users[".badgeColor"] = "cd5c5c";


$tdataglobal_users[".allSearchFields"] = array();
$tdataglobal_users[".filterFields"] = array();
$tdataglobal_users[".requiredSearchFields"] = array();

$tdataglobal_users[".googleLikeFields"] = array();
$tdataglobal_users[".googleLikeFields"][] = "idusrglobal";
$tdataglobal_users[".googleLikeFields"][] = "usr_nombresfull";
$tdataglobal_users[".googleLikeFields"][] = "usr_personalid";
$tdataglobal_users[".googleLikeFields"][] = "Username";
$tdataglobal_users[".googleLikeFields"][] = "id_fk";
$tdataglobal_users[".googleLikeFields"][] = "Password";
$tdataglobal_users[".googleLikeFields"][] = "usr_email";
$tdataglobal_users[".googleLikeFields"][] = "usr_name";
$tdataglobal_users[".googleLikeFields"][] = "usr_lname";



$tdataglobal_users[".tableType"] = "list";

$tdataglobal_users[".printerPageOrientation"] = 0;
$tdataglobal_users[".nPrinterPageScale"] = 100;

$tdataglobal_users[".nPrinterSplitRecords"] = 40;

$tdataglobal_users[".geocodingEnabled"] = false;










$tdataglobal_users[".pageSize"] = 20;

$tdataglobal_users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataglobal_users[".strOrderBy"] = $tstrOrderBy;

$tdataglobal_users[".orderindexes"] = array();


$tdataglobal_users[".sqlHead"] = "SELECT idusrglobal, usr_nombresfull, usr_personalid, Username, id_fk, Password, usr_email, usr_name, usr_lname";
$tdataglobal_users[".sqlFrom"] = "FROM global_users";
$tdataglobal_users[".sqlWhereExpr"] = "";
$tdataglobal_users[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataglobal_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataglobal_users[".arrGroupsPerPage"] = $arrGPP;

$tdataglobal_users[".highlightSearchResults"] = true;

$tableKeysglobal_users = array();
$tableKeysglobal_users[] = "idusrglobal";
$tdataglobal_users[".Keys"] = $tableKeysglobal_users;


$tdataglobal_users[".hideMobileList"] = array();




//	idusrglobal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idusrglobal";
	$fdata["GoodName"] = "idusrglobal";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users","idusrglobal");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idusrglobal";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idusrglobal";

	
	
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


	$tdataglobal_users["idusrglobal"] = $fdata;
		$tdataglobal_users[".searchableFields"][] = "idusrglobal";
//	usr_nombresfull
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "usr_nombresfull";
	$fdata["GoodName"] = "usr_nombresfull";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users","usr_nombresfull");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_nombresfull";

	
	
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=150";

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


	$tdataglobal_users["usr_nombresfull"] = $fdata;
		$tdataglobal_users[".searchableFields"][] = "usr_nombresfull";
//	usr_personalid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "usr_personalid";
	$fdata["GoodName"] = "usr_personalid";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users","usr_personalid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_personalid";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_personalid";

	
	
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


	$tdataglobal_users["usr_personalid"] = $fdata;
		$tdataglobal_users[".searchableFields"][] = "usr_personalid";
//	Username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Username";
	$fdata["GoodName"] = "Username";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users","Username");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Username";

	
	
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=30";

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


	$tdataglobal_users["Username"] = $fdata;
		$tdataglobal_users[".searchableFields"][] = "Username";
//	id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "id_fk";
	$fdata["GoodName"] = "id_fk";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users","id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_fk";

		$fdata["sourceSingle"] = "id_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_fk";

	
	
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
	$edata["LookupTable"] = "funcionario";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"usr_name", 'lookupF'=>"nombre");
	$edata["autoCompleteFields"][] = array('masterF'=>"usr_lname", 'lookupF'=>"apellidos");
	$edata["autoCompleteFields"][] = array('masterF'=>"usr_personalid", 'lookupF'=>"cedula");
	$edata["autoCompleteFields"][] = array('masterF'=>"usr_dep", 'lookupF'=>"idDependencia");
	$edata["autoCompleteFields"][] = array('masterF'=>"usr_cargo", 'lookupF'=>"idCargo");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "id";

	

	
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


	$tdataglobal_users["id_fk"] = $fdata;
		$tdataglobal_users[".searchableFields"][] = "id_fk";
//	Password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Password";
	$fdata["GoodName"] = "Password";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users","Password");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Password";

		$fdata["sourceSingle"] = "Password";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Password";

	
	
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
			$edata["EditParams"].= " maxlength=35";

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


	$tdataglobal_users["Password"] = $fdata;
		$tdataglobal_users[".searchableFields"][] = "Password";
//	usr_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "usr_email";
	$fdata["GoodName"] = "usr_email";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users","usr_email");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "email";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
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


	$tdataglobal_users["usr_email"] = $fdata;
		$tdataglobal_users[".searchableFields"][] = "usr_email";
//	usr_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "usr_name";
	$fdata["GoodName"] = "usr_name";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users","usr_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_name";

		$fdata["sourceSingle"] = "usr_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_name";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdataglobal_users["usr_name"] = $fdata;
		$tdataglobal_users[".searchableFields"][] = "usr_name";
//	usr_lname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "usr_lname";
	$fdata["GoodName"] = "usr_lname";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users","usr_lname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_lname";

		$fdata["sourceSingle"] = "usr_lname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_lname";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdataglobal_users["usr_lname"] = $fdata;
		$tdataglobal_users[".searchableFields"][] = "usr_lname";


$tables_data["global_users"]=&$tdataglobal_users;
$field_labels["global_users"] = &$fieldLabelsglobal_users;
$fieldToolTips["global_users"] = &$fieldToolTipsglobal_users;
$placeHolders["global_users"] = &$placeHoldersglobal_users;
$page_titles["global_users"] = &$pageTitlesglobal_users;


changeTextControlsToDate( "global_users" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["global_users"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["global_users"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="funcionario";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="funcionario";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "funcionario";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["global_users"][0] = $masterParams;
				$masterTablesData["global_users"][0]["masterKeys"] = array();
	$masterTablesData["global_users"][0]["masterKeys"][]="cedula";
				$masterTablesData["global_users"][0]["detailKeys"] = array();
	$masterTablesData["global_users"][0]["detailKeys"][]="usr_personalid";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_global_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idusrglobal, usr_nombresfull, usr_personalid, Username, id_fk, Password, usr_email, usr_name, usr_lname";
$proto0["m_strFrom"] = "FROM global_users";
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
	"m_strName" => "idusrglobal",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users"
));

$proto6["m_sql"] = "idusrglobal";
$proto6["m_srcTableName"] = "global_users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_nombresfull",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users"
));

$proto8["m_sql"] = "usr_nombresfull";
$proto8["m_srcTableName"] = "global_users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_personalid",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users"
));

$proto10["m_sql"] = "usr_personalid";
$proto10["m_srcTableName"] = "global_users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Username",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users"
));

$proto12["m_sql"] = "Username";
$proto12["m_srcTableName"] = "global_users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "id_fk",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users"
));

$proto14["m_sql"] = "id_fk";
$proto14["m_srcTableName"] = "global_users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Password",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users"
));

$proto16["m_sql"] = "Password";
$proto16["m_srcTableName"] = "global_users";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_email",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users"
));

$proto18["m_sql"] = "usr_email";
$proto18["m_srcTableName"] = "global_users";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_name",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users"
));

$proto20["m_sql"] = "usr_name";
$proto20["m_srcTableName"] = "global_users";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_lname",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users"
));

$proto22["m_sql"] = "usr_lname";
$proto22["m_srcTableName"] = "global_users";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "global_users";
$proto25["m_srcTableName"] = "global_users";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "idusrglobal";
$proto25["m_columns"][] = "id_fk";
$proto25["m_columns"][] = "Username";
$proto25["m_columns"][] = "Password";
$proto25["m_columns"][] = "usr_email";
$proto25["m_columns"][] = "usr_name";
$proto25["m_columns"][] = "usr_lname";
$proto25["m_columns"][] = "usr_nombresfull";
$proto25["m_columns"][] = "usr_personalid";
$proto25["m_columns"][] = "usr_inicial";
$proto25["m_columns"][] = "usr_sessini";
$proto25["m_columns"][] = "usr_image";
$proto25["m_columns"][] = "usr_status_nomina";
$proto25["m_columns"][] = "usr_status";
$proto25["m_columns"][] = "usr_rdnkey";
$proto25["m_columns"][] = "usr_type_vinc";
$proto25["m_columns"][] = "usr_type_vinculacion";
$proto25["m_columns"][] = "usr_status_sol";
$proto25["m_columns"][] = "usr_dependencia";
$proto25["m_columns"][] = "user_dep";
$proto25["m_columns"][] = "usr_entidad";
$proto25["m_columns"][] = "usr_not";
$proto25["m_columns"][] = "usr_not_msj";
$proto25["m_columns"][] = "usr_jefe";
$proto25["m_columns"][] = "usr_minequipo_lider";
$proto25["m_columns"][] = "usr_minequipo_grupo";
$proto25["m_columns"][] = "global_rol_me";
$proto25["m_columns"][] = "global_rol_gh";
$proto25["m_columns"][] = "global_rol_almacen";
$proto25["m_columns"][] = "global_rol_ci";
$proto25["m_columns"][] = "global_rol_contratos";
$proto25["m_columns"][] = "global_rol_hojar";
$proto25["m_columns"][] = "global_rol_inmuebles";
$proto25["m_columns"][] = "global_rol_siis";
$proto25["m_columns"][] = "global_rol_cpanel";
$proto25["m_columns"][] = "global_rol_dashboard";
$proto25["m_columns"][] = "global_rol_zf";
$proto25["m_columns"][] = "global_rol_sipi";
$proto25["m_columns"][] = "global_rol_cej";
$proto25["m_columns"][] = "global_rol_jc3";
$proto25["m_columns"][] = "global_rol_th";
$proto25["m_columns"][] = "global_rol_sid";
$proto25["m_columns"][] = "global_rol";
$proto25["m_columns"][] = "global_rol_cont";
$proto25["m_columns"][] = "globla_rol_ct";
$proto25["m_columns"][] = "global_rol_procjur";
$proto25["m_columns"][] = "global_rol_comacc";
$proto25["m_columns"][] = "global_rol_gestion";
$proto25["m_columns"][] = "global_rol_ciudadano";
$proto25["m_columns"][] = "global_rol_ciudadano_dep";
$proto25["m_columns"][] = "sys_user";
$proto25["m_columns"][] = "sys_date";
$proto25["m_columns"][] = "sys_time";
$proto25["m_columns"][] = "sys_ntries_usr";
$proto25["m_columns"][] = "sys_registrationdate_usr";
$proto25["m_columns"][] = "sys_expiration_usr";
$proto25["m_columns"][] = "sys_disabledate_usr";
$proto25["m_columns"][] = "sys_upd_fecha";
$proto25["m_columns"][] = "sys_upd_user";
$proto25["m_columns"][] = "sys_upd_time";
$proto25["m_columns"][] = "sys_update_info";
$proto25["m_columns"][] = "sys_update_family_info";
$proto25["m_columns"][] = "usr_update_almacen";
$proto25["m_columns"][] = "sys_anio";
$proto25["m_columns"][] = "ctrl";
$proto25["m_columns"][] = "ext_security_id";
$proto25["m_columns"][] = "covid_sn";
$proto25["m_columns"][] = "covid_fecha";
$proto25["m_columns"][] = "vacuna_sn";
$proto25["m_columns"][] = "vacuna_nombre";
$proto25["m_columns"][] = "vacuna_a_fecha";
$proto25["m_columns"][] = "vacuna_b_fechaprog";
$proto25["m_columns"][] = "vacuna_b_fecha";
$proto25["m_columns"][] = "vacuna_c_fecha";
$proto25["m_columns"][] = "vacuna_consentimiento_sn";
$proto25["m_columns"][] = "vacuna_obs";
$proto25["m_columns"][] = "vacuna_dosis";
$proto25["m_columns"][] = "vacuna_interes";
$proto25["m_columns"][] = "vacuna_etapa";
$proto25["m_columns"][] = "usr_dep";
$proto25["m_columns"][] = "usr_dep_sup";
$proto25["m_columns"][] = "usr_cargo";
$proto25["m_columns"][] = "usr_regpago";
$proto25["m_columns"][] = "usr_extension";
$proto25["m_columns"][] = "usr_piso";
$proto25["m_columns"][] = "usr_datebirth";
$proto25["m_columns"][] = "ctrl_pedidoalmacen";
$proto25["m_columns"][] = "ctrl_contacto";
$proto25["m_columns"][] = "usr_emergencia";
$proto25["m_columns"][] = "upd_date";
$proto25["m_columns"][] = "active";
$proto25["m_columns"][] = "groupid";
$proto25["m_columns"][] = "habilita_almacen";
$proto25["m_columns"][] = "estado_vinculacion_mincit";
$proto25["m_columns"][] = "usr_firma";
$proto25["m_columns"][] = "usr_firma_b";
$proto25["m_columns"][] = "usr_hojaruta";
$proto25["m_columns"][] = "reset_token";
$proto25["m_columns"][] = "reset_date";
$proto25["m_columns"][] = "usr_edl";
$proto25["m_columns"][] = "userpic";
$proto25["m_columns"][] = "phone";
$proto25["m_columns"][] = "phone1";
$proto25["m_columns"][] = "usr_directivo";
$proto25["m_columns"][] = "vacuna_autoriza";
$proto25["m_columns"][] = "vacuna_autoriza_email";
$proto25["m_columns"][] = "two_factor";
$proto25["m_columns"][] = "totp";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "global_users";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "global_users";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="global_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_global_users = createSqlQuery_global_users();


	
										;

									

$tdataglobal_users[".sqlquery"] = $queryData_global_users;



$tdataglobal_users[".hasEvents"] = false;

?>