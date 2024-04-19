<?php
$tdatadivipola = array();
$tdatadivipola[".searchableFields"] = array();
$tdatadivipola[".ShortName"] = "divipola";
$tdatadivipola[".OwnerID"] = "";
$tdatadivipola[".OriginalTable"] = "divipola";


$tdatadivipola[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadivipola[".originalPagesByType"] = $tdatadivipola[".pagesByType"];
$tdatadivipola[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadivipola[".originalPages"] = $tdatadivipola[".pages"];
$tdatadivipola[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadivipola[".originalDefaultPages"] = $tdatadivipola[".defaultPages"];

//	field labels
$fieldLabelsdivipola = array();
$fieldToolTipsdivipola = array();
$pageTitlesdivipola = array();
$placeHoldersdivipola = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdivipola["Spanish"] = array();
	$fieldToolTipsdivipola["Spanish"] = array();
	$placeHoldersdivipola["Spanish"] = array();
	$pageTitlesdivipola["Spanish"] = array();
	$fieldLabelsdivipola["Spanish"]["CODDPTO"] = "CODDPTO";
	$fieldToolTipsdivipola["Spanish"]["CODDPTO"] = "";
	$placeHoldersdivipola["Spanish"]["CODDPTO"] = "";
	$fieldLabelsdivipola["Spanish"]["CODMUN"] = "CODMUN";
	$fieldToolTipsdivipola["Spanish"]["CODMUN"] = "";
	$placeHoldersdivipola["Spanish"]["CODMUN"] = "";
	$fieldLabelsdivipola["Spanish"]["CODCENTPOBLADO"] = "CODCENTPOBLADO";
	$fieldToolTipsdivipola["Spanish"]["CODCENTPOBLADO"] = "";
	$placeHoldersdivipola["Spanish"]["CODCENTPOBLADO"] = "";
	$fieldLabelsdivipola["Spanish"]["NOMDPTO"] = "NOMDPTO";
	$fieldToolTipsdivipola["Spanish"]["NOMDPTO"] = "";
	$placeHoldersdivipola["Spanish"]["NOMDPTO"] = "";
	$fieldLabelsdivipola["Spanish"]["NOMMUNICIPIO"] = "NOMMUNICIPIO";
	$fieldToolTipsdivipola["Spanish"]["NOMMUNICIPIO"] = "";
	$placeHoldersdivipola["Spanish"]["NOMMUNICIPIO"] = "";
	$fieldLabelsdivipola["Spanish"]["NOMCENTPOBLADO"] = "NOMCENTPOBLADO";
	$fieldToolTipsdivipola["Spanish"]["NOMCENTPOBLADO"] = "";
	$placeHoldersdivipola["Spanish"]["NOMCENTPOBLADO"] = "";
	$fieldLabelsdivipola["Spanish"]["TIPOCENTPOBLADO"] = "TIPOCENTPOBLADO";
	$fieldToolTipsdivipola["Spanish"]["TIPOCENTPOBLADO"] = "";
	$placeHoldersdivipola["Spanish"]["TIPOCENTPOBLADO"] = "";
	$fieldLabelsdivipola["Spanish"]["LON"] = "LON";
	$fieldToolTipsdivipola["Spanish"]["LON"] = "";
	$placeHoldersdivipola["Spanish"]["LON"] = "";
	$fieldLabelsdivipola["Spanish"]["F9"] = "F9";
	$fieldToolTipsdivipola["Spanish"]["F9"] = "";
	$placeHoldersdivipola["Spanish"]["F9"] = "";
	$fieldLabelsdivipola["Spanish"]["LAT"] = "LAT";
	$fieldToolTipsdivipola["Spanish"]["LAT"] = "";
	$placeHoldersdivipola["Spanish"]["LAT"] = "";
	$fieldLabelsdivipola["Spanish"]["DISTRITO"] = "DISTRITO";
	$fieldToolTipsdivipola["Spanish"]["DISTRITO"] = "";
	$placeHoldersdivipola["Spanish"]["DISTRITO"] = "";
	$fieldLabelsdivipola["Spanish"]["TIPOMUN"] = "TIPOMUN";
	$fieldToolTipsdivipola["Spanish"]["TIPOMUN"] = "";
	$placeHoldersdivipola["Spanish"]["TIPOMUN"] = "";
	$fieldLabelsdivipola["Spanish"]["AREAMETRO"] = "AREAMETRO";
	$fieldToolTipsdivipola["Spanish"]["AREAMETRO"] = "";
	$placeHoldersdivipola["Spanish"]["AREAMETRO"] = "";
	$fieldLabelsdivipola["Spanish"]["CENSO"] = "CENSO";
	$fieldToolTipsdivipola["Spanish"]["CENSO"] = "";
	$placeHoldersdivipola["Spanish"]["CENSO"] = "";
	$fieldLabelsdivipola["Spanish"]["BOL"] = "BOL";
	$fieldToolTipsdivipola["Spanish"]["BOL"] = "";
	$placeHoldersdivipola["Spanish"]["BOL"] = "";
	$fieldLabelsdivipola["Spanish"]["FECHA"] = "FECHA";
	$fieldToolTipsdivipola["Spanish"]["FECHA"] = "";
	$placeHoldersdivipola["Spanish"]["FECHA"] = "";
	$fieldLabelsdivipola["Spanish"]["HORA"] = "HORA";
	$fieldToolTipsdivipola["Spanish"]["HORA"] = "";
	$placeHoldersdivipola["Spanish"]["HORA"] = "";
	$fieldLabelsdivipola["Spanish"]["ID"] = "ID";
	$fieldToolTipsdivipola["Spanish"]["ID"] = "";
	$placeHoldersdivipola["Spanish"]["ID"] = "";
	$fieldLabelsdivipola["Spanish"]["order"] = "Order";
	$fieldToolTipsdivipola["Spanish"]["order"] = "";
	$placeHoldersdivipola["Spanish"]["order"] = "";
	$fieldLabelsdivipola["Spanish"]["PRECIO"] = "PRECIO";
	$fieldToolTipsdivipola["Spanish"]["PRECIO"] = "";
	$placeHoldersdivipola["Spanish"]["PRECIO"] = "";
	if (count($fieldToolTipsdivipola["Spanish"]))
		$tdatadivipola[".isUseToolTips"] = true;
}


	$tdatadivipola[".NCSearch"] = true;



$tdatadivipola[".shortTableName"] = "divipola";
$tdatadivipola[".nSecOptions"] = 0;

$tdatadivipola[".mainTableOwnerID"] = "";
$tdatadivipola[".entityType"] = 0;
$tdatadivipola[".connId"] = "dbusers_at_127_0_0_1";


$tdatadivipola[".strOriginalTableName"] = "divipola";

	



$tdatadivipola[".showAddInPopup"] = false;

$tdatadivipola[".showEditInPopup"] = false;

$tdatadivipola[".showViewInPopup"] = false;

$tdatadivipola[".listAjax"] = false;
//	temporary
//$tdatadivipola[".listAjax"] = false;

	$tdatadivipola[".audit"] = true;

	$tdatadivipola[".locking"] = true;


$pages = $tdatadivipola[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadivipola[".edit"] = true;
	$tdatadivipola[".afterEditAction"] = 1;
	$tdatadivipola[".closePopupAfterEdit"] = 1;
	$tdatadivipola[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadivipola[".add"] = true;
$tdatadivipola[".afterAddAction"] = 1;
$tdatadivipola[".closePopupAfterAdd"] = 1;
$tdatadivipola[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadivipola[".list"] = true;
}



$tdatadivipola[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadivipola[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadivipola[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadivipola[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadivipola[".printFriendly"] = true;
}



$tdatadivipola[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadivipola[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadivipola[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadivipola[".isUseAjaxSuggest"] = true;



												

$tdatadivipola[".ajaxCodeSnippetAdded"] = false;

$tdatadivipola[".buttonsAdded"] = false;

$tdatadivipola[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadivipola[".isUseTimeForSearch"] = false;


$tdatadivipola[".badgeColor"] = "2F4F4F";


$tdatadivipola[".allSearchFields"] = array();
$tdatadivipola[".filterFields"] = array();
$tdatadivipola[".requiredSearchFields"] = array();

$tdatadivipola[".googleLikeFields"] = array();
$tdatadivipola[".googleLikeFields"][] = "CODDPTO";
$tdatadivipola[".googleLikeFields"][] = "CODMUN";
$tdatadivipola[".googleLikeFields"][] = "CODCENTPOBLADO";
$tdatadivipola[".googleLikeFields"][] = "NOMDPTO";
$tdatadivipola[".googleLikeFields"][] = "NOMMUNICIPIO";
$tdatadivipola[".googleLikeFields"][] = "NOMCENTPOBLADO";
$tdatadivipola[".googleLikeFields"][] = "TIPOCENTPOBLADO";
$tdatadivipola[".googleLikeFields"][] = "LON";
$tdatadivipola[".googleLikeFields"][] = "F9";
$tdatadivipola[".googleLikeFields"][] = "LAT";
$tdatadivipola[".googleLikeFields"][] = "DISTRITO";
$tdatadivipola[".googleLikeFields"][] = "TIPOMUN";
$tdatadivipola[".googleLikeFields"][] = "AREAMETRO";
$tdatadivipola[".googleLikeFields"][] = "CENSO";
$tdatadivipola[".googleLikeFields"][] = "ID";
$tdatadivipola[".googleLikeFields"][] = "order";
$tdatadivipola[".googleLikeFields"][] = "FECHA";
$tdatadivipola[".googleLikeFields"][] = "PRECIO";
$tdatadivipola[".googleLikeFields"][] = "HORA";
$tdatadivipola[".googleLikeFields"][] = "BOL";



$tdatadivipola[".tableType"] = "list";

$tdatadivipola[".printerPageOrientation"] = 0;
$tdatadivipola[".nPrinterPageScale"] = 100;

$tdatadivipola[".nPrinterSplitRecords"] = 40;

$tdatadivipola[".geocodingEnabled"] = false;










$tdatadivipola[".pageSize"] = 20;

$tdatadivipola[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadivipola[".strOrderBy"] = $tstrOrderBy;

$tdatadivipola[".orderindexes"] = array();


$tdatadivipola[".sqlHead"] = "SELECT CODDPTO,  	CODMUN,  	CODCENTPOBLADO,  	NOMDPTO,  	NOMMUNICIPIO,  	NOMCENTPOBLADO,  	TIPOCENTPOBLADO,  	LON,  	F9,  	LAT,  	DISTRITO,  	TIPOMUN,  	AREAMETRO,  	CENSO,  	ID,  	`order`,  	FECHA,  	PRECIO,  	HORA,  	BOL";
$tdatadivipola[".sqlFrom"] = "FROM divipola";
$tdatadivipola[".sqlWhereExpr"] = "";
$tdatadivipola[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadivipola[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadivipola[".arrGroupsPerPage"] = $arrGPP;

$tdatadivipola[".highlightSearchResults"] = true;

$tableKeysdivipola = array();
$tdatadivipola[".Keys"] = $tableKeysdivipola;


$tdatadivipola[".hideMobileList"] = array();




//	CODDPTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CODDPTO";
	$fdata["GoodName"] = "CODDPTO";
	$fdata["ownerTable"] = "divipola";
	$fdata["Label"] = GetFieldLabel("divipola","CODDPTO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CODDPTO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CODDPTO";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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


	$tdatadivipola["CODDPTO"] = $fdata;
		$tdatadivipola[".searchableFields"][] = "CODDPTO";
//	CODMUN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CODMUN";
	$fdata["GoodName"] = "CODMUN";
	$fdata["ownerTable"] = "divipola";
	$fdata["Label"] = GetFieldLabel("divipola","CODMUN");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CODMUN";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CODMUN";

	
	
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
			$edata["EditParams"].= " maxlength=5";

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


	$tdatadivipola["CODMUN"] = $fdata;
		$tdatadivipola[".searchableFields"][] = "CODMUN";
//	CODCENTPOBLADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CODCENTPOBLADO";
	$fdata["GoodName"] = "CODCENTPOBLADO";
	$fdata["ownerTable"] = "divipola";
	$fdata["Label"] = GetFieldLabel("divipola","CODCENTPOBLADO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CODCENTPOBLADO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CODCENTPOBLADO";

	
	
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
			$edata["EditParams"].= " maxlength=8";

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


	$tdatadivipola["CODCENTPOBLADO"] = $fdata;
		$tdatadivipola[".searchableFields"][] = "CODCENTPOBLADO";
//	NOMDPTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "NOMDPTO";
	$fdata["GoodName"] = "NOMDPTO";
	$fdata["ownerTable"] = "divipola";
	$fdata["Label"] = GetFieldLabel("divipola","NOMDPTO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "NOMDPTO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOMDPTO";

	
	
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


	$tdatadivipola["NOMDPTO"] = $fdata;
		$tdatadivipola[".searchableFields"][] = "NOMDPTO";
//	NOMMUNICIPIO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "NOMMUNICIPIO";
	$fdata["GoodName"] = "NOMMUNICIPIO";
	$fdata["ownerTable"] = "divipola";
	$fdata["Label"] = GetFieldLabel("divipola","NOMMUNICIPIO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "NOMMUNICIPIO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOMMUNICIPIO";

	
	
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


	$tdatadivipola["NOMMUNICIPIO"] = $fdata;
		$tdatadivipola[".searchableFields"][] = "NOMMUNICIPIO";
//	NOMCENTPOBLADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "NOMCENTPOBLADO";
	$fdata["GoodName"] = "NOMCENTPOBLADO";
	$fdata["ownerTable"] = "divipola";
	$fdata["Label"] = GetFieldLabel("divipola","NOMCENTPOBLADO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "NOMCENTPOBLADO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOMCENTPOBLADO";

	
	
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


	$tdatadivipola["NOMCENTPOBLADO"] = $fdata;
		$tdatadivipola[".searchableFields"][] = "NOMCENTPOBLADO";
//	TIPOCENTPOBLADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "TIPOCENTPOBLADO";
	$fdata["GoodName"] = "TIPOCENTPOBLADO";
	$fdata["ownerTable"] = "divipola";
	$fdata["Label"] = GetFieldLabel("divipola","TIPOCENTPOBLADO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "TIPOCENTPOBLADO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIPOCENTPOBLADO";

	
	
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


	$tdatadivipola["TIPOCENTPOBLADO"] = $fdata;
		$tdatadivipola[".searchableFields"][] = "TIPOCENTPOBLADO";
//	LON
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "LON";
	$fdata["GoodName"] = "LON";
	$fdata["ownerTable"] = "divipola";
	$fdata["Label"] = GetFieldLabel("divipola","LON");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "LON";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LON";

	
	
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


	$tdatadivipola["LON"] = $fdata;
		$tdatadivipola[".searchableFields"][] = "LON";
//	F9
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "F9";
	$fdata["GoodName"] = "F9";
	$fdata["ownerTable"] = "divipola";
	$fdata["Label"] = GetFieldLabel("divipola","F9");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "F9";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "F9";

	
	
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


	$tdatadivipola["F9"] = $fdata;
		$tdatadivipola[".searchableFields"][] = "F9";
//	LAT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "LAT";
	$fdata["GoodName"] = "LAT";
	$fdata["ownerTable"] = "divipola";
	$fdata["Label"] = GetFieldLabel("divipola","LAT");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "LAT";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LAT";

	
	
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


	$tdatadivipola["LAT"] = $fdata;
		$tdatadivipola[".searchableFields"][] = "LAT";
//	DISTRITO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "DISTRITO";
	$fdata["GoodName"] = "DISTRITO";
	$fdata["ownerTable"] = "divipola";
	$fdata["Label"] = GetFieldLabel("divipola","DISTRITO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DISTRITO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DISTRITO";

	
	
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


	$tdatadivipola["DISTRITO"] = $fdata;
		$tdatadivipola[".searchableFields"][] = "DISTRITO";
//	TIPOMUN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "TIPOMUN";
	$fdata["GoodName"] = "TIPOMUN";
	$fdata["ownerTable"] = "divipola";
	$fdata["Label"] = GetFieldLabel("divipola","TIPOMUN");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "TIPOMUN";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIPOMUN";

	
	
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


	$tdatadivipola["TIPOMUN"] = $fdata;
		$tdatadivipola[".searchableFields"][] = "TIPOMUN";
//	AREAMETRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "AREAMETRO";
	$fdata["GoodName"] = "AREAMETRO";
	$fdata["ownerTable"] = "divipola";
	$fdata["Label"] = GetFieldLabel("divipola","AREAMETRO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "AREAMETRO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AREAMETRO";

	
	
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


	$tdatadivipola["AREAMETRO"] = $fdata;
		$tdatadivipola[".searchableFields"][] = "AREAMETRO";
//	CENSO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "CENSO";
	$fdata["GoodName"] = "CENSO";
	$fdata["ownerTable"] = "divipola";
	$fdata["Label"] = GetFieldLabel("divipola","CENSO");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "CENSO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CENSO";

	
	
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


	$tdatadivipola["CENSO"] = $fdata;
		$tdatadivipola[".searchableFields"][] = "CENSO";
//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "divipola";
	$fdata["Label"] = GetFieldLabel("divipola","ID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID";

		$fdata["sourceSingle"] = "ID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
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


	$tdatadivipola["ID"] = $fdata;
		$tdatadivipola[".searchableFields"][] = "ID";
//	order
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "order";
	$fdata["GoodName"] = "order";
	$fdata["ownerTable"] = "divipola";
	$fdata["Label"] = GetFieldLabel("divipola","order");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "order";

		$fdata["sourceSingle"] = "order";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`order`";

	
	
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


	$tdatadivipola["order"] = $fdata;
		$tdatadivipola[".searchableFields"][] = "order";
//	FECHA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "FECHA";
	$fdata["GoodName"] = "FECHA";
	$fdata["ownerTable"] = "divipola";
	$fdata["Label"] = GetFieldLabel("divipola","FECHA");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "FECHA";

		$fdata["sourceSingle"] = "FECHA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FECHA";

	
	
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


	$tdatadivipola["FECHA"] = $fdata;
		$tdatadivipola[".searchableFields"][] = "FECHA";
//	PRECIO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "PRECIO";
	$fdata["GoodName"] = "PRECIO";
	$fdata["ownerTable"] = "divipola";
	$fdata["Label"] = GetFieldLabel("divipola","PRECIO");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "PRECIO";

		$fdata["sourceSingle"] = "PRECIO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRECIO";

	
	
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


	$tdatadivipola["PRECIO"] = $fdata;
		$tdatadivipola[".searchableFields"][] = "PRECIO";
//	HORA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "HORA";
	$fdata["GoodName"] = "HORA";
	$fdata["ownerTable"] = "divipola";
	$fdata["Label"] = GetFieldLabel("divipola","HORA");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "HORA";

		$fdata["sourceSingle"] = "HORA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HORA";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
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


	$tdatadivipola["HORA"] = $fdata;
		$tdatadivipola[".searchableFields"][] = "HORA";
//	BOL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "BOL";
	$fdata["GoodName"] = "BOL";
	$fdata["ownerTable"] = "divipola";
	$fdata["Label"] = GetFieldLabel("divipola","BOL");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "BOL";

		$fdata["sourceSingle"] = "BOL";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BOL";

	
	
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


	$tdatadivipola["BOL"] = $fdata;
		$tdatadivipola[".searchableFields"][] = "BOL";


$tables_data["divipola"]=&$tdatadivipola;
$field_labels["divipola"] = &$fieldLabelsdivipola;
$fieldToolTips["divipola"] = &$fieldToolTipsdivipola;
$placeHolders["divipola"] = &$placeHoldersdivipola;
$page_titles["divipola"] = &$pageTitlesdivipola;


changeTextControlsToDate( "divipola" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["divipola"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["divipola"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_divipola()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CODDPTO,  	CODMUN,  	CODCENTPOBLADO,  	NOMDPTO,  	NOMMUNICIPIO,  	NOMCENTPOBLADO,  	TIPOCENTPOBLADO,  	LON,  	F9,  	LAT,  	DISTRITO,  	TIPOMUN,  	AREAMETRO,  	CENSO,  	ID,  	`order`,  	FECHA,  	PRECIO,  	HORA,  	BOL";
$proto0["m_strFrom"] = "FROM divipola";
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
	"m_strName" => "CODDPTO",
	"m_strTable" => "divipola",
	"m_srcTableName" => "divipola"
));

$proto6["m_sql"] = "CODDPTO";
$proto6["m_srcTableName"] = "divipola";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CODMUN",
	"m_strTable" => "divipola",
	"m_srcTableName" => "divipola"
));

$proto8["m_sql"] = "CODMUN";
$proto8["m_srcTableName"] = "divipola";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CODCENTPOBLADO",
	"m_strTable" => "divipola",
	"m_srcTableName" => "divipola"
));

$proto10["m_sql"] = "CODCENTPOBLADO";
$proto10["m_srcTableName"] = "divipola";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMDPTO",
	"m_strTable" => "divipola",
	"m_srcTableName" => "divipola"
));

$proto12["m_sql"] = "NOMDPTO";
$proto12["m_srcTableName"] = "divipola";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMMUNICIPIO",
	"m_strTable" => "divipola",
	"m_srcTableName" => "divipola"
));

$proto14["m_sql"] = "NOMMUNICIPIO";
$proto14["m_srcTableName"] = "divipola";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMCENTPOBLADO",
	"m_strTable" => "divipola",
	"m_srcTableName" => "divipola"
));

$proto16["m_sql"] = "NOMCENTPOBLADO";
$proto16["m_srcTableName"] = "divipola";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPOCENTPOBLADO",
	"m_strTable" => "divipola",
	"m_srcTableName" => "divipola"
));

$proto18["m_sql"] = "TIPOCENTPOBLADO";
$proto18["m_srcTableName"] = "divipola";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "LON",
	"m_strTable" => "divipola",
	"m_srcTableName" => "divipola"
));

$proto20["m_sql"] = "LON";
$proto20["m_srcTableName"] = "divipola";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "F9",
	"m_strTable" => "divipola",
	"m_srcTableName" => "divipola"
));

$proto22["m_sql"] = "F9";
$proto22["m_srcTableName"] = "divipola";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "LAT",
	"m_strTable" => "divipola",
	"m_srcTableName" => "divipola"
));

$proto24["m_sql"] = "LAT";
$proto24["m_srcTableName"] = "divipola";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "DISTRITO",
	"m_strTable" => "divipola",
	"m_srcTableName" => "divipola"
));

$proto26["m_sql"] = "DISTRITO";
$proto26["m_srcTableName"] = "divipola";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPOMUN",
	"m_strTable" => "divipola",
	"m_srcTableName" => "divipola"
));

$proto28["m_sql"] = "TIPOMUN";
$proto28["m_srcTableName"] = "divipola";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "AREAMETRO",
	"m_strTable" => "divipola",
	"m_srcTableName" => "divipola"
));

$proto30["m_sql"] = "AREAMETRO";
$proto30["m_srcTableName"] = "divipola";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "CENSO",
	"m_strTable" => "divipola",
	"m_srcTableName" => "divipola"
));

$proto32["m_sql"] = "CENSO";
$proto32["m_srcTableName"] = "divipola";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "divipola",
	"m_srcTableName" => "divipola"
));

$proto34["m_sql"] = "ID";
$proto34["m_srcTableName"] = "divipola";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "divipola",
	"m_srcTableName" => "divipola"
));

$proto36["m_sql"] = "`order`";
$proto36["m_srcTableName"] = "divipola";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHA",
	"m_strTable" => "divipola",
	"m_srcTableName" => "divipola"
));

$proto38["m_sql"] = "FECHA";
$proto38["m_srcTableName"] = "divipola";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "PRECIO",
	"m_strTable" => "divipola",
	"m_srcTableName" => "divipola"
));

$proto40["m_sql"] = "PRECIO";
$proto40["m_srcTableName"] = "divipola";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "HORA",
	"m_strTable" => "divipola",
	"m_srcTableName" => "divipola"
));

$proto42["m_sql"] = "HORA";
$proto42["m_srcTableName"] = "divipola";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "BOL",
	"m_strTable" => "divipola",
	"m_srcTableName" => "divipola"
));

$proto44["m_sql"] = "BOL";
$proto44["m_srcTableName"] = "divipola";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto46=array();
$proto46["m_link"] = "SQLL_MAIN";
			$proto47=array();
$proto47["m_strName"] = "divipola";
$proto47["m_srcTableName"] = "divipola";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "CODDPTO";
$proto47["m_columns"][] = "CODMUN";
$proto47["m_columns"][] = "CODCENTPOBLADO";
$proto47["m_columns"][] = "NOMDPTO";
$proto47["m_columns"][] = "NOMMUNICIPIO";
$proto47["m_columns"][] = "NOMCENTPOBLADO";
$proto47["m_columns"][] = "TIPOCENTPOBLADO";
$proto47["m_columns"][] = "LON";
$proto47["m_columns"][] = "F9";
$proto47["m_columns"][] = "LAT";
$proto47["m_columns"][] = "DISTRITO";
$proto47["m_columns"][] = "TIPOMUN";
$proto47["m_columns"][] = "AREAMETRO";
$proto47["m_columns"][] = "CENSO";
$proto47["m_columns"][] = "ID";
$proto47["m_columns"][] = "order";
$proto47["m_columns"][] = "FECHA";
$proto47["m_columns"][] = "PRECIO";
$proto47["m_columns"][] = "HORA";
$proto47["m_columns"][] = "BOL";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "divipola";
$proto46["m_alias"] = "";
$proto46["m_srcTableName"] = "divipola";
$proto48=array();
$proto48["m_sql"] = "";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="divipola";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_divipola = createSqlQuery_divipola();


	
										;

																				

$tdatadivipola[".sqlquery"] = $queryData_divipola;



$tdatadivipola[".hasEvents"] = false;

?>