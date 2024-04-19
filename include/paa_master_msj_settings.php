<?php
$tdatapaa_master_msj = array();
$tdatapaa_master_msj[".searchableFields"] = array();
$tdatapaa_master_msj[".ShortName"] = "paa_master_msj";
$tdatapaa_master_msj[".OwnerID"] = "";
$tdatapaa_master_msj[".OriginalTable"] = "paa_master_msj";


$tdatapaa_master_msj[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapaa_master_msj[".originalPagesByType"] = $tdatapaa_master_msj[".pagesByType"];
$tdatapaa_master_msj[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapaa_master_msj[".originalPages"] = $tdatapaa_master_msj[".pages"];
$tdatapaa_master_msj[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapaa_master_msj[".originalDefaultPages"] = $tdatapaa_master_msj[".defaultPages"];

//	field labels
$fieldLabelspaa_master_msj = array();
$fieldToolTipspaa_master_msj = array();
$pageTitlespaa_master_msj = array();
$placeHolderspaa_master_msj = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspaa_master_msj["Spanish"] = array();
	$fieldToolTipspaa_master_msj["Spanish"] = array();
	$placeHolderspaa_master_msj["Spanish"] = array();
	$pageTitlespaa_master_msj["Spanish"] = array();
	$fieldLabelspaa_master_msj["Spanish"]["msj_id"] = "Msj Id";
	$fieldToolTipspaa_master_msj["Spanish"]["msj_id"] = "";
	$placeHolderspaa_master_msj["Spanish"]["msj_id"] = "";
	$fieldLabelspaa_master_msj["Spanish"]["paa_id_fk"] = "PAA ID";
	$fieldToolTipspaa_master_msj["Spanish"]["paa_id_fk"] = "";
	$placeHolderspaa_master_msj["Spanish"]["paa_id_fk"] = "";
	$fieldLabelspaa_master_msj["Spanish"]["msj"] = "Mensaje";
	$fieldToolTipspaa_master_msj["Spanish"]["msj"] = "";
	$placeHolderspaa_master_msj["Spanish"]["msj"] = "";
	$fieldLabelspaa_master_msj["Spanish"]["sysdate"] = "Fecha";
	$fieldToolTipspaa_master_msj["Spanish"]["sysdate"] = "";
	$placeHolderspaa_master_msj["Spanish"]["sysdate"] = "";
	$fieldLabelspaa_master_msj["Spanish"]["user"] = "Usuario";
	$fieldToolTipspaa_master_msj["Spanish"]["user"] = "";
	$placeHolderspaa_master_msj["Spanish"]["user"] = "";
	$fieldLabelspaa_master_msj["Spanish"]["de"] = "De";
	$fieldToolTipspaa_master_msj["Spanish"]["de"] = "";
	$placeHolderspaa_master_msj["Spanish"]["de"] = "";
	$fieldLabelspaa_master_msj["Spanish"]["para"] = "Para";
	$fieldToolTipspaa_master_msj["Spanish"]["para"] = "";
	$placeHolderspaa_master_msj["Spanish"]["para"] = "";
	if (count($fieldToolTipspaa_master_msj["Spanish"]))
		$tdatapaa_master_msj[".isUseToolTips"] = true;
}


	$tdatapaa_master_msj[".NCSearch"] = true;



$tdatapaa_master_msj[".shortTableName"] = "paa_master_msj";
$tdatapaa_master_msj[".nSecOptions"] = 0;

$tdatapaa_master_msj[".mainTableOwnerID"] = "";
$tdatapaa_master_msj[".entityType"] = 0;
$tdatapaa_master_msj[".connId"] = "mincit_global_20x_at_127_0_0_1";


$tdatapaa_master_msj[".strOriginalTableName"] = "paa_master_msj";

	



$tdatapaa_master_msj[".showAddInPopup"] = false;

$tdatapaa_master_msj[".showEditInPopup"] = false;

$tdatapaa_master_msj[".showViewInPopup"] = false;

$tdatapaa_master_msj[".listAjax"] = false;
//	temporary
//$tdatapaa_master_msj[".listAjax"] = false;

	$tdatapaa_master_msj[".audit"] = true;

	$tdatapaa_master_msj[".locking"] = true;


$pages = $tdatapaa_master_msj[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapaa_master_msj[".edit"] = true;
	$tdatapaa_master_msj[".afterEditAction"] = 1;
	$tdatapaa_master_msj[".closePopupAfterEdit"] = 1;
	$tdatapaa_master_msj[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapaa_master_msj[".add"] = true;
$tdatapaa_master_msj[".afterAddAction"] = 1;
$tdatapaa_master_msj[".closePopupAfterAdd"] = 1;
$tdatapaa_master_msj[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapaa_master_msj[".list"] = true;
}



$tdatapaa_master_msj[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapaa_master_msj[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapaa_master_msj[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapaa_master_msj[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapaa_master_msj[".printFriendly"] = true;
}



$tdatapaa_master_msj[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapaa_master_msj[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapaa_master_msj[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapaa_master_msj[".isUseAjaxSuggest"] = true;



																																																

$tdatapaa_master_msj[".ajaxCodeSnippetAdded"] = false;

$tdatapaa_master_msj[".buttonsAdded"] = false;

$tdatapaa_master_msj[".addPageEvents"] = true;

// use timepicker for search panel
$tdatapaa_master_msj[".isUseTimeForSearch"] = false;


$tdatapaa_master_msj[".badgeColor"] = "6da5c8";


$tdatapaa_master_msj[".allSearchFields"] = array();
$tdatapaa_master_msj[".filterFields"] = array();
$tdatapaa_master_msj[".requiredSearchFields"] = array();

$tdatapaa_master_msj[".googleLikeFields"] = array();
$tdatapaa_master_msj[".googleLikeFields"][] = "msj_id";
$tdatapaa_master_msj[".googleLikeFields"][] = "paa_id_fk";
$tdatapaa_master_msj[".googleLikeFields"][] = "user";
$tdatapaa_master_msj[".googleLikeFields"][] = "de";
$tdatapaa_master_msj[".googleLikeFields"][] = "para";
$tdatapaa_master_msj[".googleLikeFields"][] = "msj";
$tdatapaa_master_msj[".googleLikeFields"][] = "sysdate";



$tdatapaa_master_msj[".tableType"] = "list";

$tdatapaa_master_msj[".printerPageOrientation"] = 0;
$tdatapaa_master_msj[".nPrinterPageScale"] = 100;

$tdatapaa_master_msj[".nPrinterSplitRecords"] = 40;

$tdatapaa_master_msj[".geocodingEnabled"] = false;










$tdatapaa_master_msj[".pageSize"] = 20;

$tdatapaa_master_msj[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapaa_master_msj[".strOrderBy"] = $tstrOrderBy;

$tdatapaa_master_msj[".orderindexes"] = array();


$tdatapaa_master_msj[".sqlHead"] = "SELECT msj_id, paa_id_fk, `user`, de, para, msj, `sysdate`";
$tdatapaa_master_msj[".sqlFrom"] = "FROM paa_master_msj";
$tdatapaa_master_msj[".sqlWhereExpr"] = "";
$tdatapaa_master_msj[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatapaa_master_msj[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapaa_master_msj[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapaa_master_msj[".arrGroupsPerPage"] = $arrGPP;

$tdatapaa_master_msj[".highlightSearchResults"] = true;

$tableKeyspaa_master_msj = array();
$tableKeyspaa_master_msj[] = "msj_id";
$tdatapaa_master_msj[".Keys"] = $tableKeyspaa_master_msj;


$tdatapaa_master_msj[".hideMobileList"] = array();




//	msj_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "msj_id";
	$fdata["GoodName"] = "msj_id";
	$fdata["ownerTable"] = "paa_master_msj";
	$fdata["Label"] = GetFieldLabel("paa_master_msj","msj_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "msj_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "msj_id";

	
	
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


	$tdatapaa_master_msj["msj_id"] = $fdata;
		$tdatapaa_master_msj[".searchableFields"][] = "msj_id";
//	paa_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "paa_id_fk";
	$fdata["GoodName"] = "paa_id_fk";
	$fdata["ownerTable"] = "paa_master_msj";
	$fdata["Label"] = GetFieldLabel("paa_master_msj","paa_id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "paa_id_fk";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paa_id_fk";

	
	
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
		$edata["autoCompleteFields"][] = array('masterF'=>"user", 'lookupF'=>"registrado_por");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "PAA_ID";
	$edata["LinkFieldType"] = 0;
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


	$tdatapaa_master_msj["paa_id_fk"] = $fdata;
		$tdatapaa_master_msj[".searchableFields"][] = "paa_id_fk";
//	user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "user";
	$fdata["GoodName"] = "user";
	$fdata["ownerTable"] = "paa_master_msj";
	$fdata["Label"] = GetFieldLabel("paa_master_msj","user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "user";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`";

	
	
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
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"para", 'lookupF'=>"usr_email");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Username";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "usr_nombresfull";

	

	
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


	$tdatapaa_master_msj["user"] = $fdata;
		$tdatapaa_master_msj[".searchableFields"][] = "user";
//	de
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "de";
	$fdata["GoodName"] = "de";
	$fdata["ownerTable"] = "paa_master_msj";
	$fdata["Label"] = GetFieldLabel("paa_master_msj","de");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "de";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "de";

	
	
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


	$tdatapaa_master_msj["de"] = $fdata;
		$tdatapaa_master_msj[".searchableFields"][] = "de";
//	para
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "para";
	$fdata["GoodName"] = "para";
	$fdata["ownerTable"] = "paa_master_msj";
	$fdata["Label"] = GetFieldLabel("paa_master_msj","para");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "para";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "para";

	
	
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


	$tdatapaa_master_msj["para"] = $fdata;
		$tdatapaa_master_msj[".searchableFields"][] = "para";
//	msj
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "msj";
	$fdata["GoodName"] = "msj";
	$fdata["ownerTable"] = "paa_master_msj";
	$fdata["Label"] = GetFieldLabel("paa_master_msj","msj");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "msj";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "msj";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatapaa_master_msj["msj"] = $fdata;
		$tdatapaa_master_msj[".searchableFields"][] = "msj";
//	sysdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sysdate";
	$fdata["GoodName"] = "sysdate";
	$fdata["ownerTable"] = "paa_master_msj";
	$fdata["Label"] = GetFieldLabel("paa_master_msj","sysdate");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sysdate";

	
	
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


	$tdatapaa_master_msj["sysdate"] = $fdata;
		$tdatapaa_master_msj[".searchableFields"][] = "sysdate";


$tables_data["paa_master_msj"]=&$tdatapaa_master_msj;
$field_labels["paa_master_msj"] = &$fieldLabelspaa_master_msj;
$fieldToolTips["paa_master_msj"] = &$fieldToolTipspaa_master_msj;
$placeHolders["paa_master_msj"] = &$placeHolderspaa_master_msj;
$page_titles["paa_master_msj"] = &$pageTitlespaa_master_msj;


changeTextControlsToDate( "paa_master_msj" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["paa_master_msj"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["paa_master_msj"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="paa_master";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="paa_master_stat_0";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "paa_master_stat_0";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["paa_master_msj"][0] = $masterParams;
				$masterTablesData["paa_master_msj"][0]["masterKeys"] = array();
	$masterTablesData["paa_master_msj"][0]["masterKeys"][]="PAA_ID";
				$masterTablesData["paa_master_msj"][0]["detailKeys"] = array();
	$masterTablesData["paa_master_msj"][0]["detailKeys"][]="paa_id_fk";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="paa_master";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="paa_master_stat_1";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "paa_master_stat_1";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["paa_master_msj"][1] = $masterParams;
				$masterTablesData["paa_master_msj"][1]["masterKeys"] = array();
	$masterTablesData["paa_master_msj"][1]["masterKeys"][]="PAA_ID";
				$masterTablesData["paa_master_msj"][1]["detailKeys"] = array();
	$masterTablesData["paa_master_msj"][1]["detailKeys"][]="paa_id_fk";
		
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
					$masterTablesData["paa_master_msj"][2] = $masterParams;
				$masterTablesData["paa_master_msj"][2]["masterKeys"] = array();
	$masterTablesData["paa_master_msj"][2]["masterKeys"][]="PAA_ID";
				$masterTablesData["paa_master_msj"][2]["detailKeys"] = array();
	$masterTablesData["paa_master_msj"][2]["detailKeys"][]="paa_id_fk";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_paa_master_msj()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "msj_id, paa_id_fk, `user`, de, para, msj, `sysdate`";
$proto0["m_strFrom"] = "FROM paa_master_msj";
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
	"m_strName" => "msj_id",
	"m_strTable" => "paa_master_msj",
	"m_srcTableName" => "paa_master_msj"
));

$proto6["m_sql"] = "msj_id";
$proto6["m_srcTableName"] = "paa_master_msj";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "paa_id_fk",
	"m_strTable" => "paa_master_msj",
	"m_srcTableName" => "paa_master_msj"
));

$proto8["m_sql"] = "paa_id_fk";
$proto8["m_srcTableName"] = "paa_master_msj";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "user",
	"m_strTable" => "paa_master_msj",
	"m_srcTableName" => "paa_master_msj"
));

$proto10["m_sql"] = "`user`";
$proto10["m_srcTableName"] = "paa_master_msj";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "de",
	"m_strTable" => "paa_master_msj",
	"m_srcTableName" => "paa_master_msj"
));

$proto12["m_sql"] = "de";
$proto12["m_srcTableName"] = "paa_master_msj";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "para",
	"m_strTable" => "paa_master_msj",
	"m_srcTableName" => "paa_master_msj"
));

$proto14["m_sql"] = "para";
$proto14["m_srcTableName"] = "paa_master_msj";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "msj",
	"m_strTable" => "paa_master_msj",
	"m_srcTableName" => "paa_master_msj"
));

$proto16["m_sql"] = "msj";
$proto16["m_srcTableName"] = "paa_master_msj";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "sysdate",
	"m_strTable" => "paa_master_msj",
	"m_srcTableName" => "paa_master_msj"
));

$proto18["m_sql"] = "`sysdate`";
$proto18["m_srcTableName"] = "paa_master_msj";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "paa_master_msj";
$proto21["m_srcTableName"] = "paa_master_msj";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "msj_id";
$proto21["m_columns"][] = "paa_id_fk";
$proto21["m_columns"][] = "user";
$proto21["m_columns"][] = "de";
$proto21["m_columns"][] = "para";
$proto21["m_columns"][] = "msj";
$proto21["m_columns"][] = "sysdate";
$proto21["m_columns"][] = "rmsj";
$proto21["m_columns"][] = "rsysdate";
$proto21["m_columns"][] = "rstatus";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "paa_master_msj";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "paa_master_msj";
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
$proto0["m_srcTableName"]="paa_master_msj";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_paa_master_msj = createSqlQuery_paa_master_msj();


	
										;

							

$tdatapaa_master_msj[".sqlquery"] = $queryData_paa_master_msj;



include_once(getabspath("include/paa_master_msj_events.php"));
$tdatapaa_master_msj[".hasEvents"] = true;

?>