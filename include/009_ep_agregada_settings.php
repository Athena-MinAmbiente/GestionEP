<?php
$tdata009_ep_agregada = array();
$tdata009_ep_agregada[".searchableFields"] = array();
$tdata009_ep_agregada[".ShortName"] = "009_ep_agregada";
$tdata009_ep_agregada[".OwnerID"] = "";
$tdata009_ep_agregada[".OriginalTable"] = "009_ep_agregada";


$tdata009_ep_agregada[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdata009_ep_agregada[".originalPagesByType"] = $tdata009_ep_agregada[".pagesByType"];
$tdata009_ep_agregada[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdata009_ep_agregada[".originalPages"] = $tdata009_ep_agregada[".pages"];
$tdata009_ep_agregada[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdata009_ep_agregada[".originalDefaultPages"] = $tdata009_ep_agregada[".defaultPages"];

//	field labels
$fieldLabels009_ep_agregada = array();
$fieldToolTips009_ep_agregada = array();
$pageTitles009_ep_agregada = array();
$placeHolders009_ep_agregada = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabels009_ep_agregada["Spanish"] = array();
	$fieldToolTips009_ep_agregada["Spanish"] = array();
	$placeHolders009_ep_agregada["Spanish"] = array();
	$pageTitles009_ep_agregada["Spanish"] = array();
	$fieldLabels009_ep_agregada["Spanish"]["EPA_ID"] = "EPA ID";
	$fieldToolTips009_ep_agregada["Spanish"]["EPA_ID"] = "";
	$placeHolders009_ep_agregada["Spanish"]["EPA_ID"] = "";
	$fieldLabels009_ep_agregada["Spanish"]["UEJ"] = "UEJ";
	$fieldToolTips009_ep_agregada["Spanish"]["UEJ"] = "";
	$placeHolders009_ep_agregada["Spanish"]["UEJ"] = "";
	$fieldLabels009_ep_agregada["Spanish"]["RUBRO"] = "RUBRO";
	$fieldToolTips009_ep_agregada["Spanish"]["RUBRO"] = "";
	$placeHolders009_ep_agregada["Spanish"]["RUBRO"] = "";
	$fieldLabels009_ep_agregada["Spanish"]["FUENTE"] = "FUENTE";
	$fieldToolTips009_ep_agregada["Spanish"]["FUENTE"] = "";
	$placeHolders009_ep_agregada["Spanish"]["FUENTE"] = "";
	$fieldLabels009_ep_agregada["Spanish"]["REC"] = "REC";
	$fieldToolTips009_ep_agregada["Spanish"]["REC"] = "";
	$placeHolders009_ep_agregada["Spanish"]["REC"] = "";
	$fieldLabels009_ep_agregada["Spanish"]["SIT"] = "SIT";
	$fieldToolTips009_ep_agregada["Spanish"]["SIT"] = "";
	$placeHolders009_ep_agregada["Spanish"]["SIT"] = "";
	$fieldLabels009_ep_agregada["Spanish"]["DESCRIPCION"] = "DESCRIPCION";
	$fieldToolTips009_ep_agregada["Spanish"]["DESCRIPCION"] = "";
	$placeHolders009_ep_agregada["Spanish"]["DESCRIPCION"] = "";
	$fieldLabels009_ep_agregada["Spanish"]["NOMBRE_UEJ"] = "NOMBRE UEJ";
	$fieldToolTips009_ep_agregada["Spanish"]["NOMBRE_UEJ"] = "";
	$placeHolders009_ep_agregada["Spanish"]["NOMBRE_UEJ"] = "";
	if (count($fieldToolTips009_ep_agregada["Spanish"]))
		$tdata009_ep_agregada[".isUseToolTips"] = true;
}


	$tdata009_ep_agregada[".NCSearch"] = true;



$tdata009_ep_agregada[".shortTableName"] = "009_ep_agregada";
$tdata009_ep_agregada[".nSecOptions"] = 0;

$tdata009_ep_agregada[".mainTableOwnerID"] = "";
$tdata009_ep_agregada[".entityType"] = 0;
$tdata009_ep_agregada[".connId"] = "sep2_at_127_0_0_1";


$tdata009_ep_agregada[".strOriginalTableName"] = "009_ep_agregada";

	



$tdata009_ep_agregada[".showAddInPopup"] = false;

$tdata009_ep_agregada[".showEditInPopup"] = false;

$tdata009_ep_agregada[".showViewInPopup"] = false;

$tdata009_ep_agregada[".listAjax"] = false;
//	temporary
//$tdata009_ep_agregada[".listAjax"] = false;

	$tdata009_ep_agregada[".audit"] = true;

	$tdata009_ep_agregada[".locking"] = false;


$pages = $tdata009_ep_agregada[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdata009_ep_agregada[".edit"] = true;
	$tdata009_ep_agregada[".afterEditAction"] = 1;
	$tdata009_ep_agregada[".closePopupAfterEdit"] = 1;
	$tdata009_ep_agregada[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdata009_ep_agregada[".add"] = true;
$tdata009_ep_agregada[".afterAddAction"] = 1;
$tdata009_ep_agregada[".closePopupAfterAdd"] = 1;
$tdata009_ep_agregada[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdata009_ep_agregada[".list"] = true;
}



$tdata009_ep_agregada[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdata009_ep_agregada[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdata009_ep_agregada[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdata009_ep_agregada[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdata009_ep_agregada[".printFriendly"] = true;
}



$tdata009_ep_agregada[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdata009_ep_agregada[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdata009_ep_agregada[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdata009_ep_agregada[".isUseAjaxSuggest"] = true;



												

$tdata009_ep_agregada[".ajaxCodeSnippetAdded"] = false;

$tdata009_ep_agregada[".buttonsAdded"] = false;

$tdata009_ep_agregada[".addPageEvents"] = true;

// use timepicker for search panel
$tdata009_ep_agregada[".isUseTimeForSearch"] = false;


$tdata009_ep_agregada[".badgeColor"] = "D2AF80";


$tdata009_ep_agregada[".allSearchFields"] = array();
$tdata009_ep_agregada[".filterFields"] = array();
$tdata009_ep_agregada[".requiredSearchFields"] = array();

$tdata009_ep_agregada[".googleLikeFields"] = array();
$tdata009_ep_agregada[".googleLikeFields"][] = "EPA_ID";
$tdata009_ep_agregada[".googleLikeFields"][] = "UEJ";
$tdata009_ep_agregada[".googleLikeFields"][] = "REC";
$tdata009_ep_agregada[".googleLikeFields"][] = "RUBRO";
$tdata009_ep_agregada[".googleLikeFields"][] = "SIT";
$tdata009_ep_agregada[".googleLikeFields"][] = "DESCRIPCION";
$tdata009_ep_agregada[".googleLikeFields"][] = "FUENTE";
$tdata009_ep_agregada[".googleLikeFields"][] = "NOMBRE_UEJ";



$tdata009_ep_agregada[".tableType"] = "list";

$tdata009_ep_agregada[".printerPageOrientation"] = 0;
$tdata009_ep_agregada[".nPrinterPageScale"] = 100;

$tdata009_ep_agregada[".nPrinterSplitRecords"] = 40;

$tdata009_ep_agregada[".geocodingEnabled"] = false;










$tdata009_ep_agregada[".pageSize"] = 20;

$tdata009_ep_agregada[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdata009_ep_agregada[".strOrderBy"] = $tstrOrderBy;

$tdata009_ep_agregada[".orderindexes"] = array();


$tdata009_ep_agregada[".sqlHead"] = "SELECT EPA_ID,  	UEJ,  	REC,  	RUBRO,  	SIT,  	DESCRIPCION,  	FUENTE,  	NOMBRE_UEJ";
$tdata009_ep_agregada[".sqlFrom"] = "FROM `009_ep_agregada`";
$tdata009_ep_agregada[".sqlWhereExpr"] = "";
$tdata009_ep_agregada[".sqlTail"] = "";

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
$tdata009_ep_agregada[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata009_ep_agregada[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata009_ep_agregada[".arrGroupsPerPage"] = $arrGPP;

$tdata009_ep_agregada[".highlightSearchResults"] = true;

$tableKeys009_ep_agregada = array();
$tableKeys009_ep_agregada[] = "EPA_ID";
$tdata009_ep_agregada[".Keys"] = $tableKeys009_ep_agregada;


$tdata009_ep_agregada[".hideMobileList"] = array();




//	EPA_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "EPA_ID";
	$fdata["GoodName"] = "EPA_ID";
	$fdata["ownerTable"] = "009_ep_agregada";
	$fdata["Label"] = GetFieldLabel("009_ep_agregada","EPA_ID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "EPA_ID";

		$fdata["sourceSingle"] = "EPA_ID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EPA_ID";

	
	
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


	$tdata009_ep_agregada["EPA_ID"] = $fdata;
		$tdata009_ep_agregada[".searchableFields"][] = "EPA_ID";
//	UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "UEJ";
	$fdata["GoodName"] = "UEJ";
	$fdata["ownerTable"] = "009_ep_agregada";
	$fdata["Label"] = GetFieldLabel("009_ep_agregada","UEJ");
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
			$edata["EditParams"].= " maxlength=255";

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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "EPA_ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata009_ep_agregada["UEJ"] = $fdata;
		$tdata009_ep_agregada[".searchableFields"][] = "UEJ";
//	REC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "REC";
	$fdata["GoodName"] = "REC";
	$fdata["ownerTable"] = "009_ep_agregada";
	$fdata["Label"] = GetFieldLabel("009_ep_agregada","REC");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "REC";

		$fdata["sourceSingle"] = "REC";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "REC";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdata009_ep_agregada["REC"] = $fdata;
		$tdata009_ep_agregada[".searchableFields"][] = "REC";
//	RUBRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "RUBRO";
	$fdata["GoodName"] = "RUBRO";
	$fdata["ownerTable"] = "009_ep_agregada";
	$fdata["Label"] = GetFieldLabel("009_ep_agregada","RUBRO");
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdata009_ep_agregada["RUBRO"] = $fdata;
		$tdata009_ep_agregada[".searchableFields"][] = "RUBRO";
//	SIT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "SIT";
	$fdata["GoodName"] = "SIT";
	$fdata["ownerTable"] = "009_ep_agregada";
	$fdata["Label"] = GetFieldLabel("009_ep_agregada","SIT");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SIT";

		$fdata["sourceSingle"] = "SIT";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SIT";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdata009_ep_agregada["SIT"] = $fdata;
		$tdata009_ep_agregada[".searchableFields"][] = "SIT";
//	DESCRIPCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DESCRIPCION";
	$fdata["GoodName"] = "DESCRIPCION";
	$fdata["ownerTable"] = "009_ep_agregada";
	$fdata["Label"] = GetFieldLabel("009_ep_agregada","DESCRIPCION");
	$fdata["FieldType"] = 200;


	
	
			

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


	$tdata009_ep_agregada["DESCRIPCION"] = $fdata;
		$tdata009_ep_agregada[".searchableFields"][] = "DESCRIPCION";
//	FUENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "FUENTE";
	$fdata["GoodName"] = "FUENTE";
	$fdata["ownerTable"] = "009_ep_agregada";
	$fdata["Label"] = GetFieldLabel("009_ep_agregada","FUENTE");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "FUENTE";

		$fdata["sourceSingle"] = "FUENTE";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FUENTE";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdata009_ep_agregada["FUENTE"] = $fdata;
		$tdata009_ep_agregada[".searchableFields"][] = "FUENTE";
//	NOMBRE_UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "NOMBRE_UEJ";
	$fdata["GoodName"] = "NOMBRE_UEJ";
	$fdata["ownerTable"] = "009_ep_agregada";
	$fdata["Label"] = GetFieldLabel("009_ep_agregada","NOMBRE_UEJ");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "NOMBRE_UEJ";

		$fdata["sourceSingle"] = "NOMBRE_UEJ";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOMBRE_UEJ";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdata009_ep_agregada["NOMBRE_UEJ"] = $fdata;
		$tdata009_ep_agregada[".searchableFields"][] = "NOMBRE_UEJ";


$tables_data["009_ep_agregada"]=&$tdata009_ep_agregada;
$field_labels["009_ep_agregada"] = &$fieldLabels009_ep_agregada;
$fieldToolTips["009_ep_agregada"] = &$fieldToolTips009_ep_agregada;
$placeHolders["009_ep_agregada"] = &$placeHolders009_ep_agregada;
$page_titles["009_ep_agregada"] = &$pageTitles009_ep_agregada;


changeTextControlsToDate( "009_ep_agregada" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["009_ep_agregada"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["009_ep_agregada"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_009_ep_agregada()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "EPA_ID,  	UEJ,  	REC,  	RUBRO,  	SIT,  	DESCRIPCION,  	FUENTE,  	NOMBRE_UEJ";
$proto0["m_strFrom"] = "FROM `009_ep_agregada`";
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
	"m_strName" => "EPA_ID",
	"m_strTable" => "009_ep_agregada",
	"m_srcTableName" => "009_ep_agregada"
));

$proto6["m_sql"] = "EPA_ID";
$proto6["m_srcTableName"] = "009_ep_agregada";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "UEJ",
	"m_strTable" => "009_ep_agregada",
	"m_srcTableName" => "009_ep_agregada"
));

$proto8["m_sql"] = "UEJ";
$proto8["m_srcTableName"] = "009_ep_agregada";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "REC",
	"m_strTable" => "009_ep_agregada",
	"m_srcTableName" => "009_ep_agregada"
));

$proto10["m_sql"] = "REC";
$proto10["m_srcTableName"] = "009_ep_agregada";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "RUBRO",
	"m_strTable" => "009_ep_agregada",
	"m_srcTableName" => "009_ep_agregada"
));

$proto12["m_sql"] = "RUBRO";
$proto12["m_srcTableName"] = "009_ep_agregada";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "SIT",
	"m_strTable" => "009_ep_agregada",
	"m_srcTableName" => "009_ep_agregada"
));

$proto14["m_sql"] = "SIT";
$proto14["m_srcTableName"] = "009_ep_agregada";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION",
	"m_strTable" => "009_ep_agregada",
	"m_srcTableName" => "009_ep_agregada"
));

$proto16["m_sql"] = "DESCRIPCION";
$proto16["m_srcTableName"] = "009_ep_agregada";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "FUENTE",
	"m_strTable" => "009_ep_agregada",
	"m_srcTableName" => "009_ep_agregada"
));

$proto18["m_sql"] = "FUENTE";
$proto18["m_srcTableName"] = "009_ep_agregada";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE_UEJ",
	"m_strTable" => "009_ep_agregada",
	"m_srcTableName" => "009_ep_agregada"
));

$proto20["m_sql"] = "NOMBRE_UEJ";
$proto20["m_srcTableName"] = "009_ep_agregada";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "009_ep_agregada";
$proto23["m_srcTableName"] = "009_ep_agregada";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "EPA_ID";
$proto23["m_columns"][] = "FA";
$proto23["m_columns"][] = "UEJ";
$proto23["m_columns"][] = "NOMBRE_UEJ";
$proto23["m_columns"][] = "RUBRO";
$proto23["m_columns"][] = "TIPO";
$proto23["m_columns"][] = "CTA";
$proto23["m_columns"][] = "SUBCTA";
$proto23["m_columns"][] = "OBJ";
$proto23["m_columns"][] = "ORD";
$proto23["m_columns"][] = "SORORD";
$proto23["m_columns"][] = "ITEM";
$proto23["m_columns"][] = "SUBITEM";
$proto23["m_columns"][] = "SUBITEM2";
$proto23["m_columns"][] = "FUENTE";
$proto23["m_columns"][] = "REC";
$proto23["m_columns"][] = "SIT";
$proto23["m_columns"][] = "DESCRIPCION";
$proto23["m_columns"][] = "APR. INICIAL";
$proto23["m_columns"][] = "APR. ADICIONADA";
$proto23["m_columns"][] = "APR. REDUCIDA";
$proto23["m_columns"][] = "APR. VIGENTE";
$proto23["m_columns"][] = "APR BLOQUEADA";
$proto23["m_columns"][] = "CDP";
$proto23["m_columns"][] = "APR. DISPONIBLE";
$proto23["m_columns"][] = "COMPROMISO";
$proto23["m_columns"][] = "OBLIGACION";
$proto23["m_columns"][] = "ORDEN PAGO";
$proto23["m_columns"][] = "PAGOS";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "`009_ep_agregada`";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "009_ep_agregada";
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
$proto0["m_srcTableName"]="009_ep_agregada";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_009_ep_agregada = createSqlQuery_009_ep_agregada();


	
										;

								

$tdata009_ep_agregada[".sqlquery"] = $queryData_009_ep_agregada;



include_once(getabspath("include/009_ep_agregada_events.php"));
$tdata009_ep_agregada[".hasEvents"] = true;

?>