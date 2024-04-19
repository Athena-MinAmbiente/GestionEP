<?php
$tdata010_ep_desagregada = array();
$tdata010_ep_desagregada[".searchableFields"] = array();
$tdata010_ep_desagregada[".ShortName"] = "010_ep_desagregada";
$tdata010_ep_desagregada[".OwnerID"] = "";
$tdata010_ep_desagregada[".OriginalTable"] = "010_ep_desagregada";


$tdata010_ep_desagregada[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdata010_ep_desagregada[".originalPagesByType"] = $tdata010_ep_desagregada[".pagesByType"];
$tdata010_ep_desagregada[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdata010_ep_desagregada[".originalPages"] = $tdata010_ep_desagregada[".pages"];
$tdata010_ep_desagregada[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdata010_ep_desagregada[".originalDefaultPages"] = $tdata010_ep_desagregada[".defaultPages"];

//	field labels
$fieldLabels010_ep_desagregada = array();
$fieldToolTips010_ep_desagregada = array();
$pageTitles010_ep_desagregada = array();
$placeHolders010_ep_desagregada = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabels010_ep_desagregada["Spanish"] = array();
	$fieldToolTips010_ep_desagregada["Spanish"] = array();
	$placeHolders010_ep_desagregada["Spanish"] = array();
	$pageTitles010_ep_desagregada["Spanish"] = array();
	$fieldLabels010_ep_desagregada["Spanish"]["EPD_ID"] = "EPD ID";
	$fieldToolTips010_ep_desagregada["Spanish"]["EPD_ID"] = "";
	$placeHolders010_ep_desagregada["Spanish"]["EPD_ID"] = "";
	$fieldLabels010_ep_desagregada["Spanish"]["FA"] = "Fecha de subida";
	$fieldToolTips010_ep_desagregada["Spanish"]["FA"] = "";
	$placeHolders010_ep_desagregada["Spanish"]["FA"] = "";
	$fieldLabels010_ep_desagregada["Spanish"]["UEJ"] = "UEJ";
	$fieldToolTips010_ep_desagregada["Spanish"]["UEJ"] = "";
	$placeHolders010_ep_desagregada["Spanish"]["UEJ"] = "";
	$fieldLabels010_ep_desagregada["Spanish"]["RUBRO"] = "RUBRO";
	$fieldToolTips010_ep_desagregada["Spanish"]["RUBRO"] = "";
	$placeHolders010_ep_desagregada["Spanish"]["RUBRO"] = "";
	$fieldLabels010_ep_desagregada["Spanish"]["TIPO"] = "TIPO";
	$fieldToolTips010_ep_desagregada["Spanish"]["TIPO"] = "";
	$placeHolders010_ep_desagregada["Spanish"]["TIPO"] = "";
	$fieldLabels010_ep_desagregada["Spanish"]["CTA"] = "CTA";
	$fieldToolTips010_ep_desagregada["Spanish"]["CTA"] = "";
	$placeHolders010_ep_desagregada["Spanish"]["CTA"] = "";
	$fieldLabels010_ep_desagregada["Spanish"]["OBJ"] = "OBJ";
	$fieldToolTips010_ep_desagregada["Spanish"]["OBJ"] = "";
	$placeHolders010_ep_desagregada["Spanish"]["OBJ"] = "";
	$fieldLabels010_ep_desagregada["Spanish"]["ORD"] = "ORD";
	$fieldToolTips010_ep_desagregada["Spanish"]["ORD"] = "";
	$placeHolders010_ep_desagregada["Spanish"]["ORD"] = "";
	$fieldLabels010_ep_desagregada["Spanish"]["ITEM"] = "ITEM";
	$fieldToolTips010_ep_desagregada["Spanish"]["ITEM"] = "";
	$placeHolders010_ep_desagregada["Spanish"]["ITEM"] = "";
	$fieldLabels010_ep_desagregada["Spanish"]["FUENTE"] = "FUENTE";
	$fieldToolTips010_ep_desagregada["Spanish"]["FUENTE"] = "";
	$placeHolders010_ep_desagregada["Spanish"]["FUENTE"] = "";
	$fieldLabels010_ep_desagregada["Spanish"]["REC"] = "REC";
	$fieldToolTips010_ep_desagregada["Spanish"]["REC"] = "";
	$placeHolders010_ep_desagregada["Spanish"]["REC"] = "10,11,12,...";
	$fieldLabels010_ep_desagregada["Spanish"]["SIT"] = "SIT";
	$fieldToolTips010_ep_desagregada["Spanish"]["SIT"] = "";
	$placeHolders010_ep_desagregada["Spanish"]["SIT"] = "CSF, SSF";
	$fieldLabels010_ep_desagregada["Spanish"]["DESCRIPCION"] = "DESCRIPCION";
	$fieldToolTips010_ep_desagregada["Spanish"]["DESCRIPCION"] = "";
	$placeHolders010_ep_desagregada["Spanish"]["DESCRIPCION"] = "";
	$fieldLabels010_ep_desagregada["Spanish"]["APR__INICIAL"] = "APR. INICIAL";
	$fieldToolTips010_ep_desagregada["Spanish"]["APR__INICIAL"] = "";
	$placeHolders010_ep_desagregada["Spanish"]["APR__INICIAL"] = "";
	$fieldLabels010_ep_desagregada["Spanish"]["APR__ADICIONADA"] = "APR. ADICIONADA";
	$fieldToolTips010_ep_desagregada["Spanish"]["APR__ADICIONADA"] = "";
	$placeHolders010_ep_desagregada["Spanish"]["APR__ADICIONADA"] = "";
	$fieldLabels010_ep_desagregada["Spanish"]["APR__REDUCIDA"] = "APR. REDUCIDA";
	$fieldToolTips010_ep_desagregada["Spanish"]["APR__REDUCIDA"] = "";
	$placeHolders010_ep_desagregada["Spanish"]["APR__REDUCIDA"] = "";
	$fieldLabels010_ep_desagregada["Spanish"]["APR__VIGENTE"] = "APR. VIGENTE";
	$fieldToolTips010_ep_desagregada["Spanish"]["APR__VIGENTE"] = "";
	$placeHolders010_ep_desagregada["Spanish"]["APR__VIGENTE"] = "";
	$fieldLabels010_ep_desagregada["Spanish"]["APR_BLOQUEADA"] = "APR BLOQUEADA";
	$fieldToolTips010_ep_desagregada["Spanish"]["APR_BLOQUEADA"] = "";
	$placeHolders010_ep_desagregada["Spanish"]["APR_BLOQUEADA"] = "";
	$fieldLabels010_ep_desagregada["Spanish"]["CDP"] = "CDP";
	$fieldToolTips010_ep_desagregada["Spanish"]["CDP"] = "";
	$placeHolders010_ep_desagregada["Spanish"]["CDP"] = "";
	$fieldLabels010_ep_desagregada["Spanish"]["APR__DISPONIBLE"] = "APR. DISPONIBLE";
	$fieldToolTips010_ep_desagregada["Spanish"]["APR__DISPONIBLE"] = "";
	$placeHolders010_ep_desagregada["Spanish"]["APR__DISPONIBLE"] = "";
	$fieldLabels010_ep_desagregada["Spanish"]["COMPROMISO"] = "COMPROMISO";
	$fieldToolTips010_ep_desagregada["Spanish"]["COMPROMISO"] = "";
	$placeHolders010_ep_desagregada["Spanish"]["COMPROMISO"] = "";
	$fieldLabels010_ep_desagregada["Spanish"]["OBLIGACION"] = "OBLIGACION";
	$fieldToolTips010_ep_desagregada["Spanish"]["OBLIGACION"] = "";
	$placeHolders010_ep_desagregada["Spanish"]["OBLIGACION"] = "";
	$fieldLabels010_ep_desagregada["Spanish"]["ORDEN_PAGO"] = "ORDEN PAGO";
	$fieldToolTips010_ep_desagregada["Spanish"]["ORDEN_PAGO"] = "";
	$placeHolders010_ep_desagregada["Spanish"]["ORDEN_PAGO"] = "";
	$fieldLabels010_ep_desagregada["Spanish"]["PAGOS"] = "PAGOS";
	$fieldToolTips010_ep_desagregada["Spanish"]["PAGOS"] = "";
	$placeHolders010_ep_desagregada["Spanish"]["PAGOS"] = "";
	$fieldLabels010_ep_desagregada["Spanish"]["NOMBRE_UEJ"] = "NOMBRE UEJ";
	$fieldToolTips010_ep_desagregada["Spanish"]["NOMBRE_UEJ"] = "";
	$placeHolders010_ep_desagregada["Spanish"]["NOMBRE_UEJ"] = "";
	$fieldLabels010_ep_desagregada["Spanish"]["SUBCTA"] = "SUBCTA";
	$fieldToolTips010_ep_desagregada["Spanish"]["SUBCTA"] = "";
	$placeHolders010_ep_desagregada["Spanish"]["SUBCTA"] = "";
	$fieldLabels010_ep_desagregada["Spanish"]["SORORD"] = "SORORD";
	$fieldToolTips010_ep_desagregada["Spanish"]["SORORD"] = "";
	$placeHolders010_ep_desagregada["Spanish"]["SORORD"] = "";
	$fieldLabels010_ep_desagregada["Spanish"]["SUBITEM"] = "SUBITEM";
	$fieldToolTips010_ep_desagregada["Spanish"]["SUBITEM"] = "";
	$placeHolders010_ep_desagregada["Spanish"]["SUBITEM"] = "";
	$fieldLabels010_ep_desagregada["Spanish"]["SUBITEM2"] = "SUBITEM2";
	$fieldToolTips010_ep_desagregada["Spanish"]["SUBITEM2"] = "";
	$placeHolders010_ep_desagregada["Spanish"]["SUBITEM2"] = "";
	if (count($fieldToolTips010_ep_desagregada["Spanish"]))
		$tdata010_ep_desagregada[".isUseToolTips"] = true;
}


	$tdata010_ep_desagregada[".NCSearch"] = true;



$tdata010_ep_desagregada[".shortTableName"] = "010_ep_desagregada";
$tdata010_ep_desagregada[".nSecOptions"] = 0;

$tdata010_ep_desagregada[".mainTableOwnerID"] = "";
$tdata010_ep_desagregada[".entityType"] = 0;
$tdata010_ep_desagregada[".connId"] = "sep2_at_127_0_0_1";


$tdata010_ep_desagregada[".strOriginalTableName"] = "010_ep_desagregada";

	



$tdata010_ep_desagregada[".showAddInPopup"] = false;

$tdata010_ep_desagregada[".showEditInPopup"] = false;

$tdata010_ep_desagregada[".showViewInPopup"] = false;

$tdata010_ep_desagregada[".listAjax"] = false;
//	temporary
//$tdata010_ep_desagregada[".listAjax"] = false;

	$tdata010_ep_desagregada[".audit"] = true;

	$tdata010_ep_desagregada[".locking"] = false;


$pages = $tdata010_ep_desagregada[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdata010_ep_desagregada[".edit"] = true;
	$tdata010_ep_desagregada[".afterEditAction"] = 1;
	$tdata010_ep_desagregada[".closePopupAfterEdit"] = 1;
	$tdata010_ep_desagregada[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdata010_ep_desagregada[".add"] = true;
$tdata010_ep_desagregada[".afterAddAction"] = 1;
$tdata010_ep_desagregada[".closePopupAfterAdd"] = 1;
$tdata010_ep_desagregada[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdata010_ep_desagregada[".list"] = true;
}



$tdata010_ep_desagregada[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdata010_ep_desagregada[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdata010_ep_desagregada[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdata010_ep_desagregada[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdata010_ep_desagregada[".printFriendly"] = true;
}



$tdata010_ep_desagregada[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdata010_ep_desagregada[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdata010_ep_desagregada[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdata010_ep_desagregada[".isUseAjaxSuggest"] = true;



												

$tdata010_ep_desagregada[".ajaxCodeSnippetAdded"] = false;

$tdata010_ep_desagregada[".buttonsAdded"] = false;

$tdata010_ep_desagregada[".addPageEvents"] = true;

// use timepicker for search panel
$tdata010_ep_desagregada[".isUseTimeForSearch"] = false;


$tdata010_ep_desagregada[".badgeColor"] = "1E90FF";


$tdata010_ep_desagregada[".allSearchFields"] = array();
$tdata010_ep_desagregada[".filterFields"] = array();
$tdata010_ep_desagregada[".requiredSearchFields"] = array();

$tdata010_ep_desagregada[".googleLikeFields"] = array();
$tdata010_ep_desagregada[".googleLikeFields"][] = "EPD_ID";
$tdata010_ep_desagregada[".googleLikeFields"][] = "FA";
$tdata010_ep_desagregada[".googleLikeFields"][] = "UEJ";
$tdata010_ep_desagregada[".googleLikeFields"][] = "NOMBRE_UEJ";
$tdata010_ep_desagregada[".googleLikeFields"][] = "RUBRO";
$tdata010_ep_desagregada[".googleLikeFields"][] = "TIPO";
$tdata010_ep_desagregada[".googleLikeFields"][] = "CTA";
$tdata010_ep_desagregada[".googleLikeFields"][] = "SUBCTA";
$tdata010_ep_desagregada[".googleLikeFields"][] = "OBJ";
$tdata010_ep_desagregada[".googleLikeFields"][] = "ORD";
$tdata010_ep_desagregada[".googleLikeFields"][] = "SORORD";
$tdata010_ep_desagregada[".googleLikeFields"][] = "ITEM";
$tdata010_ep_desagregada[".googleLikeFields"][] = "SUBITEM";
$tdata010_ep_desagregada[".googleLikeFields"][] = "SUBITEM2";
$tdata010_ep_desagregada[".googleLikeFields"][] = "FUENTE";
$tdata010_ep_desagregada[".googleLikeFields"][] = "REC";
$tdata010_ep_desagregada[".googleLikeFields"][] = "SIT";
$tdata010_ep_desagregada[".googleLikeFields"][] = "DESCRIPCION";
$tdata010_ep_desagregada[".googleLikeFields"][] = "APR. INICIAL";
$tdata010_ep_desagregada[".googleLikeFields"][] = "APR. ADICIONADA";
$tdata010_ep_desagregada[".googleLikeFields"][] = "APR. REDUCIDA";
$tdata010_ep_desagregada[".googleLikeFields"][] = "APR. VIGENTE";
$tdata010_ep_desagregada[".googleLikeFields"][] = "APR BLOQUEADA";
$tdata010_ep_desagregada[".googleLikeFields"][] = "CDP";
$tdata010_ep_desagregada[".googleLikeFields"][] = "APR. DISPONIBLE";
$tdata010_ep_desagregada[".googleLikeFields"][] = "COMPROMISO";
$tdata010_ep_desagregada[".googleLikeFields"][] = "OBLIGACION";
$tdata010_ep_desagregada[".googleLikeFields"][] = "ORDEN PAGO";
$tdata010_ep_desagregada[".googleLikeFields"][] = "PAGOS";



$tdata010_ep_desagregada[".tableType"] = "list";

$tdata010_ep_desagregada[".printerPageOrientation"] = 0;
$tdata010_ep_desagregada[".nPrinterPageScale"] = 100;

$tdata010_ep_desagregada[".nPrinterSplitRecords"] = 40;

$tdata010_ep_desagregada[".geocodingEnabled"] = false;




$tdata010_ep_desagregada[".isDisplayLoading"] = true;






$tdata010_ep_desagregada[".pageSize"] = 20;

$tdata010_ep_desagregada[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdata010_ep_desagregada[".strOrderBy"] = $tstrOrderBy;

$tdata010_ep_desagregada[".orderindexes"] = array();


$tdata010_ep_desagregada[".sqlHead"] = "SELECT EPD_ID,  	FA,  	UEJ,  	NOMBRE_UEJ,  	RUBRO,  	TIPO,  	CTA,  	SUBCTA,  	OBJ,  	ORD,  	SORORD,  	ITEM,  	SUBITEM,  	SUBITEM2,  	FUENTE,  	REC,  	SIT,  	DESCRIPCION,  	`APR. INICIAL`,  	`APR. ADICIONADA`,  	`APR. REDUCIDA`,  	`APR. VIGENTE`,  	`APR BLOQUEADA`,  	CDP,  	`APR. DISPONIBLE`,  	COMPROMISO,  	OBLIGACION,  	`ORDEN PAGO`,  	PAGOS";
$tdata010_ep_desagregada[".sqlFrom"] = "FROM `010_ep_desagregada`";
$tdata010_ep_desagregada[".sqlWhereExpr"] = "";
$tdata010_ep_desagregada[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata010_ep_desagregada[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata010_ep_desagregada[".arrGroupsPerPage"] = $arrGPP;

$tdata010_ep_desagregada[".highlightSearchResults"] = true;

$tableKeys010_ep_desagregada = array();
$tableKeys010_ep_desagregada[] = "EPD_ID";
$tdata010_ep_desagregada[".Keys"] = $tableKeys010_ep_desagregada;


$tdata010_ep_desagregada[".hideMobileList"] = array();




//	EPD_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "EPD_ID";
	$fdata["GoodName"] = "EPD_ID";
	$fdata["ownerTable"] = "010_ep_desagregada";
	$fdata["Label"] = GetFieldLabel("010_ep_desagregada","EPD_ID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "EPD_ID";

		$fdata["sourceSingle"] = "EPD_ID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EPD_ID";

	
	
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


	$tdata010_ep_desagregada["EPD_ID"] = $fdata;
		$tdata010_ep_desagregada[".searchableFields"][] = "EPD_ID";
//	FA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FA";
	$fdata["GoodName"] = "FA";
	$fdata["ownerTable"] = "010_ep_desagregada";
	$fdata["Label"] = GetFieldLabel("010_ep_desagregada","FA");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "FA";

		$fdata["sourceSingle"] = "FA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FA";

	
	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "EPD_ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 5;

	

	
	
//end of Filters settings


	$tdata010_ep_desagregada["FA"] = $fdata;
		$tdata010_ep_desagregada[".searchableFields"][] = "FA";
//	UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "UEJ";
	$fdata["GoodName"] = "UEJ";
	$fdata["ownerTable"] = "010_ep_desagregada";
	$fdata["Label"] = GetFieldLabel("010_ep_desagregada","UEJ");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tparam_uej";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"NOMBRE_UEJ", 'lookupF'=>"sector_name");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "sector_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "sector_id";

	

	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "EPD_ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata010_ep_desagregada["UEJ"] = $fdata;
		$tdata010_ep_desagregada[".searchableFields"][] = "UEJ";
//	NOMBRE_UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "NOMBRE_UEJ";
	$fdata["GoodName"] = "NOMBRE_UEJ";
	$fdata["ownerTable"] = "010_ep_desagregada";
	$fdata["Label"] = GetFieldLabel("010_ep_desagregada","NOMBRE_UEJ");
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


	$tdata010_ep_desagregada["NOMBRE_UEJ"] = $fdata;
		$tdata010_ep_desagregada[".searchableFields"][] = "NOMBRE_UEJ";
//	RUBRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "RUBRO";
	$fdata["GoodName"] = "RUBRO";
	$fdata["ownerTable"] = "010_ep_desagregada";
	$fdata["Label"] = GetFieldLabel("010_ep_desagregada","RUBRO");
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


	$tdata010_ep_desagregada["RUBRO"] = $fdata;
		$tdata010_ep_desagregada[".searchableFields"][] = "RUBRO";
//	TIPO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TIPO";
	$fdata["GoodName"] = "TIPO";
	$fdata["ownerTable"] = "010_ep_desagregada";
	$fdata["Label"] = GetFieldLabel("010_ep_desagregada","TIPO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "TIPO";

		$fdata["sourceSingle"] = "TIPO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIPO";

	
	
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
	$edata["LookupTable"] = "tparam_tiporubro";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "uej_id";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "uej_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdata010_ep_desagregada["TIPO"] = $fdata;
		$tdata010_ep_desagregada[".searchableFields"][] = "TIPO";
//	CTA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "CTA";
	$fdata["GoodName"] = "CTA";
	$fdata["ownerTable"] = "010_ep_desagregada";
	$fdata["Label"] = GetFieldLabel("010_ep_desagregada","CTA");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CTA";

		$fdata["sourceSingle"] = "CTA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CTA";

	
	
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


	$tdata010_ep_desagregada["CTA"] = $fdata;
		$tdata010_ep_desagregada[".searchableFields"][] = "CTA";
//	SUBCTA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SUBCTA";
	$fdata["GoodName"] = "SUBCTA";
	$fdata["ownerTable"] = "010_ep_desagregada";
	$fdata["Label"] = GetFieldLabel("010_ep_desagregada","SUBCTA");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SUBCTA";

		$fdata["sourceSingle"] = "SUBCTA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUBCTA";

	
	
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


	$tdata010_ep_desagregada["SUBCTA"] = $fdata;
		$tdata010_ep_desagregada[".searchableFields"][] = "SUBCTA";
//	OBJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "OBJ";
	$fdata["GoodName"] = "OBJ";
	$fdata["ownerTable"] = "010_ep_desagregada";
	$fdata["Label"] = GetFieldLabel("010_ep_desagregada","OBJ");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "OBJ";

		$fdata["sourceSingle"] = "OBJ";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OBJ";

	
	
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


	$tdata010_ep_desagregada["OBJ"] = $fdata;
		$tdata010_ep_desagregada[".searchableFields"][] = "OBJ";
//	ORD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ORD";
	$fdata["GoodName"] = "ORD";
	$fdata["ownerTable"] = "010_ep_desagregada";
	$fdata["Label"] = GetFieldLabel("010_ep_desagregada","ORD");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ORD";

		$fdata["sourceSingle"] = "ORD";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ORD";

	
	
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


	$tdata010_ep_desagregada["ORD"] = $fdata;
		$tdata010_ep_desagregada[".searchableFields"][] = "ORD";
//	SORORD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "SORORD";
	$fdata["GoodName"] = "SORORD";
	$fdata["ownerTable"] = "010_ep_desagregada";
	$fdata["Label"] = GetFieldLabel("010_ep_desagregada","SORORD");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SORORD";

		$fdata["sourceSingle"] = "SORORD";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SORORD";

	
	
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


	$tdata010_ep_desagregada["SORORD"] = $fdata;
		$tdata010_ep_desagregada[".searchableFields"][] = "SORORD";
//	ITEM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ITEM";
	$fdata["GoodName"] = "ITEM";
	$fdata["ownerTable"] = "010_ep_desagregada";
	$fdata["Label"] = GetFieldLabel("010_ep_desagregada","ITEM");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ITEM";

		$fdata["sourceSingle"] = "ITEM";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ITEM";

	
	
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


	$tdata010_ep_desagregada["ITEM"] = $fdata;
		$tdata010_ep_desagregada[".searchableFields"][] = "ITEM";
//	SUBITEM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "SUBITEM";
	$fdata["GoodName"] = "SUBITEM";
	$fdata["ownerTable"] = "010_ep_desagregada";
	$fdata["Label"] = GetFieldLabel("010_ep_desagregada","SUBITEM");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SUBITEM";

		$fdata["sourceSingle"] = "SUBITEM";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUBITEM";

	
	
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


	$tdata010_ep_desagregada["SUBITEM"] = $fdata;
		$tdata010_ep_desagregada[".searchableFields"][] = "SUBITEM";
//	SUBITEM2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "SUBITEM2";
	$fdata["GoodName"] = "SUBITEM2";
	$fdata["ownerTable"] = "010_ep_desagregada";
	$fdata["Label"] = GetFieldLabel("010_ep_desagregada","SUBITEM2");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SUBITEM2";

		$fdata["sourceSingle"] = "SUBITEM2";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUBITEM2";

	
	
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


	$tdata010_ep_desagregada["SUBITEM2"] = $fdata;
		$tdata010_ep_desagregada[".searchableFields"][] = "SUBITEM2";
//	FUENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "FUENTE";
	$fdata["GoodName"] = "FUENTE";
	$fdata["ownerTable"] = "010_ep_desagregada";
	$fdata["Label"] = GetFieldLabel("010_ep_desagregada","FUENTE");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
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


	$tdata010_ep_desagregada["FUENTE"] = $fdata;
		$tdata010_ep_desagregada[".searchableFields"][] = "FUENTE";
//	REC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "REC";
	$fdata["GoodName"] = "REC";
	$fdata["ownerTable"] = "010_ep_desagregada";
	$fdata["Label"] = GetFieldLabel("010_ep_desagregada","REC");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdata010_ep_desagregada["REC"] = $fdata;
		$tdata010_ep_desagregada[".searchableFields"][] = "REC";
//	SIT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "SIT";
	$fdata["GoodName"] = "SIT";
	$fdata["ownerTable"] = "010_ep_desagregada";
	$fdata["Label"] = GetFieldLabel("010_ep_desagregada","SIT");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdata010_ep_desagregada["SIT"] = $fdata;
		$tdata010_ep_desagregada[".searchableFields"][] = "SIT";
//	DESCRIPCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "DESCRIPCION";
	$fdata["GoodName"] = "DESCRIPCION";
	$fdata["ownerTable"] = "010_ep_desagregada";
	$fdata["Label"] = GetFieldLabel("010_ep_desagregada","DESCRIPCION");
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


	$tdata010_ep_desagregada["DESCRIPCION"] = $fdata;
		$tdata010_ep_desagregada[".searchableFields"][] = "DESCRIPCION";
//	APR. INICIAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "APR. INICIAL";
	$fdata["GoodName"] = "APR__INICIAL";
	$fdata["ownerTable"] = "010_ep_desagregada";
	$fdata["Label"] = GetFieldLabel("010_ep_desagregada","APR__INICIAL");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "APR. INICIAL";

		$fdata["sourceSingle"] = "APR. INICIAL";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`APR. INICIAL`";

	
	
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


	$tdata010_ep_desagregada["APR. INICIAL"] = $fdata;
		$tdata010_ep_desagregada[".searchableFields"][] = "APR. INICIAL";
//	APR. ADICIONADA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "APR. ADICIONADA";
	$fdata["GoodName"] = "APR__ADICIONADA";
	$fdata["ownerTable"] = "010_ep_desagregada";
	$fdata["Label"] = GetFieldLabel("010_ep_desagregada","APR__ADICIONADA");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "APR. ADICIONADA";

		$fdata["sourceSingle"] = "APR. ADICIONADA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`APR. ADICIONADA`";

	
	
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


	$tdata010_ep_desagregada["APR. ADICIONADA"] = $fdata;
		$tdata010_ep_desagregada[".searchableFields"][] = "APR. ADICIONADA";
//	APR. REDUCIDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "APR. REDUCIDA";
	$fdata["GoodName"] = "APR__REDUCIDA";
	$fdata["ownerTable"] = "010_ep_desagregada";
	$fdata["Label"] = GetFieldLabel("010_ep_desagregada","APR__REDUCIDA");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "APR. REDUCIDA";

		$fdata["sourceSingle"] = "APR. REDUCIDA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`APR. REDUCIDA`";

	
	
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


	$tdata010_ep_desagregada["APR. REDUCIDA"] = $fdata;
		$tdata010_ep_desagregada[".searchableFields"][] = "APR. REDUCIDA";
//	APR. VIGENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "APR. VIGENTE";
	$fdata["GoodName"] = "APR__VIGENTE";
	$fdata["ownerTable"] = "010_ep_desagregada";
	$fdata["Label"] = GetFieldLabel("010_ep_desagregada","APR__VIGENTE");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "APR. VIGENTE";

		$fdata["sourceSingle"] = "APR. VIGENTE";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`APR. VIGENTE`";

	
	
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


	$tdata010_ep_desagregada["APR. VIGENTE"] = $fdata;
		$tdata010_ep_desagregada[".searchableFields"][] = "APR. VIGENTE";
//	APR BLOQUEADA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "APR BLOQUEADA";
	$fdata["GoodName"] = "APR_BLOQUEADA";
	$fdata["ownerTable"] = "010_ep_desagregada";
	$fdata["Label"] = GetFieldLabel("010_ep_desagregada","APR_BLOQUEADA");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "APR BLOQUEADA";

		$fdata["sourceSingle"] = "APR BLOQUEADA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`APR BLOQUEADA`";

	
	
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


	$tdata010_ep_desagregada["APR BLOQUEADA"] = $fdata;
		$tdata010_ep_desagregada[".searchableFields"][] = "APR BLOQUEADA";
//	CDP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "CDP";
	$fdata["GoodName"] = "CDP";
	$fdata["ownerTable"] = "010_ep_desagregada";
	$fdata["Label"] = GetFieldLabel("010_ep_desagregada","CDP");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "CDP";

		$fdata["sourceSingle"] = "CDP";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CDP";

	
	
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


	$tdata010_ep_desagregada["CDP"] = $fdata;
		$tdata010_ep_desagregada[".searchableFields"][] = "CDP";
//	APR. DISPONIBLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "APR. DISPONIBLE";
	$fdata["GoodName"] = "APR__DISPONIBLE";
	$fdata["ownerTable"] = "010_ep_desagregada";
	$fdata["Label"] = GetFieldLabel("010_ep_desagregada","APR__DISPONIBLE");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "APR. DISPONIBLE";

		$fdata["sourceSingle"] = "APR. DISPONIBLE";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`APR. DISPONIBLE`";

	
	
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


	$tdata010_ep_desagregada["APR. DISPONIBLE"] = $fdata;
		$tdata010_ep_desagregada[".searchableFields"][] = "APR. DISPONIBLE";
//	COMPROMISO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "COMPROMISO";
	$fdata["GoodName"] = "COMPROMISO";
	$fdata["ownerTable"] = "010_ep_desagregada";
	$fdata["Label"] = GetFieldLabel("010_ep_desagregada","COMPROMISO");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "COMPROMISO";

		$fdata["sourceSingle"] = "COMPROMISO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COMPROMISO";

	
	
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


	$tdata010_ep_desagregada["COMPROMISO"] = $fdata;
		$tdata010_ep_desagregada[".searchableFields"][] = "COMPROMISO";
//	OBLIGACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "OBLIGACION";
	$fdata["GoodName"] = "OBLIGACION";
	$fdata["ownerTable"] = "010_ep_desagregada";
	$fdata["Label"] = GetFieldLabel("010_ep_desagregada","OBLIGACION");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "OBLIGACION";

		$fdata["sourceSingle"] = "OBLIGACION";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OBLIGACION";

	
	
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


	$tdata010_ep_desagregada["OBLIGACION"] = $fdata;
		$tdata010_ep_desagregada[".searchableFields"][] = "OBLIGACION";
//	ORDEN PAGO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "ORDEN PAGO";
	$fdata["GoodName"] = "ORDEN_PAGO";
	$fdata["ownerTable"] = "010_ep_desagregada";
	$fdata["Label"] = GetFieldLabel("010_ep_desagregada","ORDEN_PAGO");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "ORDEN PAGO";

		$fdata["sourceSingle"] = "ORDEN PAGO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ORDEN PAGO`";

	
	
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


	$tdata010_ep_desagregada["ORDEN PAGO"] = $fdata;
		$tdata010_ep_desagregada[".searchableFields"][] = "ORDEN PAGO";
//	PAGOS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "PAGOS";
	$fdata["GoodName"] = "PAGOS";
	$fdata["ownerTable"] = "010_ep_desagregada";
	$fdata["Label"] = GetFieldLabel("010_ep_desagregada","PAGOS");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "PAGOS";

		$fdata["sourceSingle"] = "PAGOS";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PAGOS";

	
	
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


	$tdata010_ep_desagregada["PAGOS"] = $fdata;
		$tdata010_ep_desagregada[".searchableFields"][] = "PAGOS";


$tables_data["010_ep_desagregada"]=&$tdata010_ep_desagregada;
$field_labels["010_ep_desagregada"] = &$fieldLabels010_ep_desagregada;
$fieldToolTips["010_ep_desagregada"] = &$fieldToolTips010_ep_desagregada;
$placeHolders["010_ep_desagregada"] = &$placeHolders010_ep_desagregada;
$page_titles["010_ep_desagregada"] = &$pageTitles010_ep_desagregada;


changeTextControlsToDate( "010_ep_desagregada" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["010_ep_desagregada"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["010_ep_desagregada"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_010_ep_desagregada()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "EPD_ID,  	FA,  	UEJ,  	NOMBRE_UEJ,  	RUBRO,  	TIPO,  	CTA,  	SUBCTA,  	OBJ,  	ORD,  	SORORD,  	ITEM,  	SUBITEM,  	SUBITEM2,  	FUENTE,  	REC,  	SIT,  	DESCRIPCION,  	`APR. INICIAL`,  	`APR. ADICIONADA`,  	`APR. REDUCIDA`,  	`APR. VIGENTE`,  	`APR BLOQUEADA`,  	CDP,  	`APR. DISPONIBLE`,  	COMPROMISO,  	OBLIGACION,  	`ORDEN PAGO`,  	PAGOS";
$proto0["m_strFrom"] = "FROM `010_ep_desagregada`";
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
	"m_strName" => "EPD_ID",
	"m_strTable" => "010_ep_desagregada",
	"m_srcTableName" => "010_ep_desagregada"
));

$proto6["m_sql"] = "EPD_ID";
$proto6["m_srcTableName"] = "010_ep_desagregada";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FA",
	"m_strTable" => "010_ep_desagregada",
	"m_srcTableName" => "010_ep_desagregada"
));

$proto8["m_sql"] = "FA";
$proto8["m_srcTableName"] = "010_ep_desagregada";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "UEJ",
	"m_strTable" => "010_ep_desagregada",
	"m_srcTableName" => "010_ep_desagregada"
));

$proto10["m_sql"] = "UEJ";
$proto10["m_srcTableName"] = "010_ep_desagregada";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE_UEJ",
	"m_strTable" => "010_ep_desagregada",
	"m_srcTableName" => "010_ep_desagregada"
));

$proto12["m_sql"] = "NOMBRE_UEJ";
$proto12["m_srcTableName"] = "010_ep_desagregada";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "RUBRO",
	"m_strTable" => "010_ep_desagregada",
	"m_srcTableName" => "010_ep_desagregada"
));

$proto14["m_sql"] = "RUBRO";
$proto14["m_srcTableName"] = "010_ep_desagregada";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "010_ep_desagregada",
	"m_srcTableName" => "010_ep_desagregada"
));

$proto16["m_sql"] = "TIPO";
$proto16["m_srcTableName"] = "010_ep_desagregada";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "CTA",
	"m_strTable" => "010_ep_desagregada",
	"m_srcTableName" => "010_ep_desagregada"
));

$proto18["m_sql"] = "CTA";
$proto18["m_srcTableName"] = "010_ep_desagregada";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "SUBCTA",
	"m_strTable" => "010_ep_desagregada",
	"m_srcTableName" => "010_ep_desagregada"
));

$proto20["m_sql"] = "SUBCTA";
$proto20["m_srcTableName"] = "010_ep_desagregada";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "OBJ",
	"m_strTable" => "010_ep_desagregada",
	"m_srcTableName" => "010_ep_desagregada"
));

$proto22["m_sql"] = "OBJ";
$proto22["m_srcTableName"] = "010_ep_desagregada";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ORD",
	"m_strTable" => "010_ep_desagregada",
	"m_srcTableName" => "010_ep_desagregada"
));

$proto24["m_sql"] = "ORD";
$proto24["m_srcTableName"] = "010_ep_desagregada";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "SORORD",
	"m_strTable" => "010_ep_desagregada",
	"m_srcTableName" => "010_ep_desagregada"
));

$proto26["m_sql"] = "SORORD";
$proto26["m_srcTableName"] = "010_ep_desagregada";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "ITEM",
	"m_strTable" => "010_ep_desagregada",
	"m_srcTableName" => "010_ep_desagregada"
));

$proto28["m_sql"] = "ITEM";
$proto28["m_srcTableName"] = "010_ep_desagregada";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "SUBITEM",
	"m_strTable" => "010_ep_desagregada",
	"m_srcTableName" => "010_ep_desagregada"
));

$proto30["m_sql"] = "SUBITEM";
$proto30["m_srcTableName"] = "010_ep_desagregada";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "SUBITEM2",
	"m_strTable" => "010_ep_desagregada",
	"m_srcTableName" => "010_ep_desagregada"
));

$proto32["m_sql"] = "SUBITEM2";
$proto32["m_srcTableName"] = "010_ep_desagregada";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "FUENTE",
	"m_strTable" => "010_ep_desagregada",
	"m_srcTableName" => "010_ep_desagregada"
));

$proto34["m_sql"] = "FUENTE";
$proto34["m_srcTableName"] = "010_ep_desagregada";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "REC",
	"m_strTable" => "010_ep_desagregada",
	"m_srcTableName" => "010_ep_desagregada"
));

$proto36["m_sql"] = "REC";
$proto36["m_srcTableName"] = "010_ep_desagregada";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "SIT",
	"m_strTable" => "010_ep_desagregada",
	"m_srcTableName" => "010_ep_desagregada"
));

$proto38["m_sql"] = "SIT";
$proto38["m_srcTableName"] = "010_ep_desagregada";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION",
	"m_strTable" => "010_ep_desagregada",
	"m_srcTableName" => "010_ep_desagregada"
));

$proto40["m_sql"] = "DESCRIPCION";
$proto40["m_srcTableName"] = "010_ep_desagregada";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "APR. INICIAL",
	"m_strTable" => "010_ep_desagregada",
	"m_srcTableName" => "010_ep_desagregada"
));

$proto42["m_sql"] = "`APR. INICIAL`";
$proto42["m_srcTableName"] = "010_ep_desagregada";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "APR. ADICIONADA",
	"m_strTable" => "010_ep_desagregada",
	"m_srcTableName" => "010_ep_desagregada"
));

$proto44["m_sql"] = "`APR. ADICIONADA`";
$proto44["m_srcTableName"] = "010_ep_desagregada";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "APR. REDUCIDA",
	"m_strTable" => "010_ep_desagregada",
	"m_srcTableName" => "010_ep_desagregada"
));

$proto46["m_sql"] = "`APR. REDUCIDA`";
$proto46["m_srcTableName"] = "010_ep_desagregada";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "APR. VIGENTE",
	"m_strTable" => "010_ep_desagregada",
	"m_srcTableName" => "010_ep_desagregada"
));

$proto48["m_sql"] = "`APR. VIGENTE`";
$proto48["m_srcTableName"] = "010_ep_desagregada";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "APR BLOQUEADA",
	"m_strTable" => "010_ep_desagregada",
	"m_srcTableName" => "010_ep_desagregada"
));

$proto50["m_sql"] = "`APR BLOQUEADA`";
$proto50["m_srcTableName"] = "010_ep_desagregada";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "CDP",
	"m_strTable" => "010_ep_desagregada",
	"m_srcTableName" => "010_ep_desagregada"
));

$proto52["m_sql"] = "CDP";
$proto52["m_srcTableName"] = "010_ep_desagregada";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "APR. DISPONIBLE",
	"m_strTable" => "010_ep_desagregada",
	"m_srcTableName" => "010_ep_desagregada"
));

$proto54["m_sql"] = "`APR. DISPONIBLE`";
$proto54["m_srcTableName"] = "010_ep_desagregada";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "COMPROMISO",
	"m_strTable" => "010_ep_desagregada",
	"m_srcTableName" => "010_ep_desagregada"
));

$proto56["m_sql"] = "COMPROMISO";
$proto56["m_srcTableName"] = "010_ep_desagregada";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "OBLIGACION",
	"m_strTable" => "010_ep_desagregada",
	"m_srcTableName" => "010_ep_desagregada"
));

$proto58["m_sql"] = "OBLIGACION";
$proto58["m_srcTableName"] = "010_ep_desagregada";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "ORDEN PAGO",
	"m_strTable" => "010_ep_desagregada",
	"m_srcTableName" => "010_ep_desagregada"
));

$proto60["m_sql"] = "`ORDEN PAGO`";
$proto60["m_srcTableName"] = "010_ep_desagregada";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "PAGOS",
	"m_strTable" => "010_ep_desagregada",
	"m_srcTableName" => "010_ep_desagregada"
));

$proto62["m_sql"] = "PAGOS";
$proto62["m_srcTableName"] = "010_ep_desagregada";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto64=array();
$proto64["m_link"] = "SQLL_MAIN";
			$proto65=array();
$proto65["m_strName"] = "010_ep_desagregada";
$proto65["m_srcTableName"] = "010_ep_desagregada";
$proto65["m_columns"] = array();
$proto65["m_columns"][] = "EPD_ID";
$proto65["m_columns"][] = "FA";
$proto65["m_columns"][] = "UEJ";
$proto65["m_columns"][] = "NOMBRE_UEJ";
$proto65["m_columns"][] = "RUBRO";
$proto65["m_columns"][] = "TIPO";
$proto65["m_columns"][] = "CTA";
$proto65["m_columns"][] = "SUBCTA";
$proto65["m_columns"][] = "OBJ";
$proto65["m_columns"][] = "ORD";
$proto65["m_columns"][] = "SORORD";
$proto65["m_columns"][] = "ITEM";
$proto65["m_columns"][] = "SUBITEM";
$proto65["m_columns"][] = "SUBITEM2";
$proto65["m_columns"][] = "FUENTE";
$proto65["m_columns"][] = "REC";
$proto65["m_columns"][] = "SIT";
$proto65["m_columns"][] = "DESCRIPCION";
$proto65["m_columns"][] = "APR. INICIAL";
$proto65["m_columns"][] = "APR. ADICIONADA";
$proto65["m_columns"][] = "APR. REDUCIDA";
$proto65["m_columns"][] = "APR. VIGENTE";
$proto65["m_columns"][] = "APR BLOQUEADA";
$proto65["m_columns"][] = "CDP";
$proto65["m_columns"][] = "APR. DISPONIBLE";
$proto65["m_columns"][] = "COMPROMISO";
$proto65["m_columns"][] = "OBLIGACION";
$proto65["m_columns"][] = "ORDEN PAGO";
$proto65["m_columns"][] = "PAGOS";
$obj = new SQLTable($proto65);

$proto64["m_table"] = $obj;
$proto64["m_sql"] = "`010_ep_desagregada`";
$proto64["m_alias"] = "";
$proto64["m_srcTableName"] = "010_ep_desagregada";
$proto66=array();
$proto66["m_sql"] = "";
$proto66["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto66["m_column"]=$obj;
$proto66["m_contained"] = array();
$proto66["m_strCase"] = "";
$proto66["m_havingmode"] = false;
$proto66["m_inBrackets"] = false;
$proto66["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto66);

$proto64["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto64);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="010_ep_desagregada";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_010_ep_desagregada = createSqlQuery_010_ep_desagregada();


	
										;

																													

$tdata010_ep_desagregada[".sqlquery"] = $queryData_010_ep_desagregada;



include_once(getabspath("include/010_ep_desagregada_events.php"));
$tdata010_ep_desagregada[".hasEvents"] = true;

?>