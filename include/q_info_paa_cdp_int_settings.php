<?php
$tdataq_info_paa_cdp_int = array();
$tdataq_info_paa_cdp_int[".searchableFields"] = array();
$tdataq_info_paa_cdp_int[".ShortName"] = "q_info_paa_cdp_int";
$tdataq_info_paa_cdp_int[".OwnerID"] = "";
$tdataq_info_paa_cdp_int[".OriginalTable"] = "q_info_paa";


$tdataq_info_paa_cdp_int[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataq_info_paa_cdp_int[".originalPagesByType"] = $tdataq_info_paa_cdp_int[".pagesByType"];
$tdataq_info_paa_cdp_int[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataq_info_paa_cdp_int[".originalPages"] = $tdataq_info_paa_cdp_int[".pages"];
$tdataq_info_paa_cdp_int[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataq_info_paa_cdp_int[".originalDefaultPages"] = $tdataq_info_paa_cdp_int[".defaultPages"];

//	field labels
$fieldLabelsq_info_paa_cdp_int = array();
$fieldToolTipsq_info_paa_cdp_int = array();
$pageTitlesq_info_paa_cdp_int = array();
$placeHoldersq_info_paa_cdp_int = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_info_paa_cdp_int["Spanish"] = array();
	$fieldToolTipsq_info_paa_cdp_int["Spanish"] = array();
	$placeHoldersq_info_paa_cdp_int["Spanish"] = array();
	$pageTitlesq_info_paa_cdp_int["Spanish"] = array();
	$fieldLabelsq_info_paa_cdp_int["Spanish"]["PAA_ID"] = "PAA ID";
	$fieldToolTipsq_info_paa_cdp_int["Spanish"]["PAA_ID"] = "";
	$placeHoldersq_info_paa_cdp_int["Spanish"]["PAA_ID"] = "";
	$fieldLabelsq_info_paa_cdp_int["Spanish"]["DESCRIPCION_PAA"] = "DESCRIPCION";
	$fieldToolTipsq_info_paa_cdp_int["Spanish"]["DESCRIPCION_PAA"] = "";
	$placeHoldersq_info_paa_cdp_int["Spanish"]["DESCRIPCION_PAA"] = "";
	$fieldLabelsq_info_paa_cdp_int["Spanish"]["DESCRIPCION_PAA_F"] = "DESCRIPCION PAA F";
	$fieldToolTipsq_info_paa_cdp_int["Spanish"]["DESCRIPCION_PAA_F"] = "";
	$placeHoldersq_info_paa_cdp_int["Spanish"]["DESCRIPCION_PAA_F"] = "";
	$fieldLabelsq_info_paa_cdp_int["Spanish"]["VALOR_SOLICITADO"] = "VALOR SOLICITADO";
	$fieldToolTipsq_info_paa_cdp_int["Spanish"]["VALOR_SOLICITADO"] = "";
	$placeHoldersq_info_paa_cdp_int["Spanish"]["VALOR_SOLICITADO"] = "";
	$fieldLabelsq_info_paa_cdp_int["Spanish"]["vigencia"] = "Vigencia";
	$fieldToolTipsq_info_paa_cdp_int["Spanish"]["vigencia"] = "";
	$placeHoldersq_info_paa_cdp_int["Spanish"]["vigencia"] = "";
	$fieldLabelsq_info_paa_cdp_int["Spanish"]["PROD_RUBRO"] = "PROD RUBRO";
	$fieldToolTipsq_info_paa_cdp_int["Spanish"]["PROD_RUBRO"] = "";
	$placeHoldersq_info_paa_cdp_int["Spanish"]["PROD_RUBRO"] = "";
	$fieldLabelsq_info_paa_cdp_int["Spanish"]["PROD_PRODUCTO"] = "PROD PRODUCTO";
	$fieldToolTipsq_info_paa_cdp_int["Spanish"]["PROD_PRODUCTO"] = "";
	$placeHoldersq_info_paa_cdp_int["Spanish"]["PROD_PRODUCTO"] = "";
	$fieldLabelsq_info_paa_cdp_int["Spanish"]["PROD_DESCRIPCION"] = "PROD DESCRIPCION";
	$fieldToolTipsq_info_paa_cdp_int["Spanish"]["PROD_DESCRIPCION"] = "";
	$placeHoldersq_info_paa_cdp_int["Spanish"]["PROD_DESCRIPCION"] = "";
	$fieldLabelsq_info_paa_cdp_int["Spanish"]["ACT_VIGENCIA"] = "ACT VIGENCIA";
	$fieldToolTipsq_info_paa_cdp_int["Spanish"]["ACT_VIGENCIA"] = "";
	$placeHoldersq_info_paa_cdp_int["Spanish"]["ACT_VIGENCIA"] = "";
	$fieldLabelsq_info_paa_cdp_int["Spanish"]["ACT_TIPO"] = "ACT TIPO";
	$fieldToolTipsq_info_paa_cdp_int["Spanish"]["ACT_TIPO"] = "";
	$placeHoldersq_info_paa_cdp_int["Spanish"]["ACT_TIPO"] = "";
	$fieldLabelsq_info_paa_cdp_int["Spanish"]["ACT_UEJ"] = "ACT UEJ";
	$fieldToolTipsq_info_paa_cdp_int["Spanish"]["ACT_UEJ"] = "";
	$placeHoldersq_info_paa_cdp_int["Spanish"]["ACT_UEJ"] = "";
	$fieldLabelsq_info_paa_cdp_int["Spanish"]["ACT_RUBRO"] = "ACT RUBRO";
	$fieldToolTipsq_info_paa_cdp_int["Spanish"]["ACT_RUBRO"] = "";
	$placeHoldersq_info_paa_cdp_int["Spanish"]["ACT_RUBRO"] = "";
	$fieldLabelsq_info_paa_cdp_int["Spanish"]["ACT_PRODUCTO"] = "ACT PRODUCTO";
	$fieldToolTipsq_info_paa_cdp_int["Spanish"]["ACT_PRODUCTO"] = "";
	$placeHoldersq_info_paa_cdp_int["Spanish"]["ACT_PRODUCTO"] = "";
	$fieldLabelsq_info_paa_cdp_int["Spanish"]["ACT_ACTIVIDAD"] = "ACT ACTIVIDAD";
	$fieldToolTipsq_info_paa_cdp_int["Spanish"]["ACT_ACTIVIDAD"] = "";
	$placeHoldersq_info_paa_cdp_int["Spanish"]["ACT_ACTIVIDAD"] = "";
	$fieldLabelsq_info_paa_cdp_int["Spanish"]["TIPO"] = "TIPO";
	$fieldToolTipsq_info_paa_cdp_int["Spanish"]["TIPO"] = "";
	$placeHoldersq_info_paa_cdp_int["Spanish"]["TIPO"] = "";
	$fieldLabelsq_info_paa_cdp_int["Spanish"]["sys_user"] = "Sys User";
	$fieldToolTipsq_info_paa_cdp_int["Spanish"]["sys_user"] = "";
	$placeHoldersq_info_paa_cdp_int["Spanish"]["sys_user"] = "";
	$fieldLabelsq_info_paa_cdp_int["Spanish"]["PROD_UEJ"] = "PROD UEJ";
	$fieldToolTipsq_info_paa_cdp_int["Spanish"]["PROD_UEJ"] = "";
	$placeHoldersq_info_paa_cdp_int["Spanish"]["PROD_UEJ"] = "";
	$fieldLabelsq_info_paa_cdp_int["Spanish"]["UNIDAD_CONTRATACION"] = "UNIDAD CONTRATACION";
	$fieldToolTipsq_info_paa_cdp_int["Spanish"]["UNIDAD_CONTRATACION"] = "";
	$placeHoldersq_info_paa_cdp_int["Spanish"]["UNIDAD_CONTRATACION"] = "";
	$fieldLabelsq_info_paa_cdp_int["Spanish"]["CDP_INTEGRADO"] = "CDP INTEGRADO";
	$fieldToolTipsq_info_paa_cdp_int["Spanish"]["CDP_INTEGRADO"] = "";
	$placeHoldersq_info_paa_cdp_int["Spanish"]["CDP_INTEGRADO"] = "";
	if (count($fieldToolTipsq_info_paa_cdp_int["Spanish"]))
		$tdataq_info_paa_cdp_int[".isUseToolTips"] = true;
}


	$tdataq_info_paa_cdp_int[".NCSearch"] = true;



$tdataq_info_paa_cdp_int[".shortTableName"] = "q_info_paa_cdp_int";
$tdataq_info_paa_cdp_int[".nSecOptions"] = 0;

$tdataq_info_paa_cdp_int[".mainTableOwnerID"] = "";
$tdataq_info_paa_cdp_int[".entityType"] = 1;
$tdataq_info_paa_cdp_int[".connId"] = "mincit_global_20x_at_127_0_0_1";


$tdataq_info_paa_cdp_int[".strOriginalTableName"] = "q_info_paa";

	



$tdataq_info_paa_cdp_int[".showAddInPopup"] = false;

$tdataq_info_paa_cdp_int[".showEditInPopup"] = false;

$tdataq_info_paa_cdp_int[".showViewInPopup"] = false;

$tdataq_info_paa_cdp_int[".listAjax"] = false;
//	temporary
//$tdataq_info_paa_cdp_int[".listAjax"] = false;

	$tdataq_info_paa_cdp_int[".audit"] = true;

	$tdataq_info_paa_cdp_int[".locking"] = true;


$pages = $tdataq_info_paa_cdp_int[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_info_paa_cdp_int[".edit"] = true;
	$tdataq_info_paa_cdp_int[".afterEditAction"] = 1;
	$tdataq_info_paa_cdp_int[".closePopupAfterEdit"] = 1;
	$tdataq_info_paa_cdp_int[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_info_paa_cdp_int[".add"] = true;
$tdataq_info_paa_cdp_int[".afterAddAction"] = 1;
$tdataq_info_paa_cdp_int[".closePopupAfterAdd"] = 1;
$tdataq_info_paa_cdp_int[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_info_paa_cdp_int[".list"] = true;
}



$tdataq_info_paa_cdp_int[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_info_paa_cdp_int[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_info_paa_cdp_int[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_info_paa_cdp_int[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_info_paa_cdp_int[".printFriendly"] = true;
}



$tdataq_info_paa_cdp_int[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_info_paa_cdp_int[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_info_paa_cdp_int[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_info_paa_cdp_int[".isUseAjaxSuggest"] = true;



																								

$tdataq_info_paa_cdp_int[".ajaxCodeSnippetAdded"] = false;

$tdataq_info_paa_cdp_int[".buttonsAdded"] = false;

$tdataq_info_paa_cdp_int[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_info_paa_cdp_int[".isUseTimeForSearch"] = false;


$tdataq_info_paa_cdp_int[".badgeColor"] = "dc143c";


$tdataq_info_paa_cdp_int[".allSearchFields"] = array();
$tdataq_info_paa_cdp_int[".filterFields"] = array();
$tdataq_info_paa_cdp_int[".requiredSearchFields"] = array();

$tdataq_info_paa_cdp_int[".googleLikeFields"] = array();
$tdataq_info_paa_cdp_int[".googleLikeFields"][] = "PAA_ID";
$tdataq_info_paa_cdp_int[".googleLikeFields"][] = "DESCRIPCION_PAA";
$tdataq_info_paa_cdp_int[".googleLikeFields"][] = "DESCRIPCION_PAA_F";
$tdataq_info_paa_cdp_int[".googleLikeFields"][] = "VALOR_SOLICITADO";
$tdataq_info_paa_cdp_int[".googleLikeFields"][] = "vigencia";
$tdataq_info_paa_cdp_int[".googleLikeFields"][] = "PROD_UEJ";
$tdataq_info_paa_cdp_int[".googleLikeFields"][] = "PROD_RUBRO";
$tdataq_info_paa_cdp_int[".googleLikeFields"][] = "PROD_PRODUCTO";
$tdataq_info_paa_cdp_int[".googleLikeFields"][] = "PROD_DESCRIPCION";
$tdataq_info_paa_cdp_int[".googleLikeFields"][] = "ACT_VIGENCIA";
$tdataq_info_paa_cdp_int[".googleLikeFields"][] = "ACT_TIPO";
$tdataq_info_paa_cdp_int[".googleLikeFields"][] = "ACT_UEJ";
$tdataq_info_paa_cdp_int[".googleLikeFields"][] = "ACT_RUBRO";
$tdataq_info_paa_cdp_int[".googleLikeFields"][] = "ACT_PRODUCTO";
$tdataq_info_paa_cdp_int[".googleLikeFields"][] = "ACT_ACTIVIDAD";
$tdataq_info_paa_cdp_int[".googleLikeFields"][] = "TIPO";
$tdataq_info_paa_cdp_int[".googleLikeFields"][] = "sys_user";
$tdataq_info_paa_cdp_int[".googleLikeFields"][] = "UNIDAD_CONTRATACION";
$tdataq_info_paa_cdp_int[".googleLikeFields"][] = "CDP_INTEGRADO";



$tdataq_info_paa_cdp_int[".tableType"] = "list";

$tdataq_info_paa_cdp_int[".printerPageOrientation"] = 0;
$tdataq_info_paa_cdp_int[".nPrinterPageScale"] = 100;

$tdataq_info_paa_cdp_int[".nPrinterSplitRecords"] = 40;

$tdataq_info_paa_cdp_int[".geocodingEnabled"] = false;










$tdataq_info_paa_cdp_int[".pageSize"] = 20;

$tdataq_info_paa_cdp_int[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataq_info_paa_cdp_int[".strOrderBy"] = $tstrOrderBy;

$tdataq_info_paa_cdp_int[".orderindexes"] = array();


$tdataq_info_paa_cdp_int[".sqlHead"] = "SELECT PAA_ID, DESCRIPCION_PAA, DESCRIPCION_PAA_F, VALOR_SOLICITADO, vigencia, PROD_UEJ, PROD_RUBRO, PROD_PRODUCTO, PROD_DESCRIPCION, ACT_VIGENCIA, ACT_TIPO, ACT_UEJ, ACT_RUBRO, ACT_PRODUCTO, ACT_ACTIVIDAD, TIPO, sys_user, UNIDAD_CONTRATACION, CDP_INTEGRADO";
$tdataq_info_paa_cdp_int[".sqlFrom"] = "FROM q_info_paa";
$tdataq_info_paa_cdp_int[".sqlWhereExpr"] = "";
$tdataq_info_paa_cdp_int[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_info_paa_cdp_int[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_info_paa_cdp_int[".arrGroupsPerPage"] = $arrGPP;

$tdataq_info_paa_cdp_int[".highlightSearchResults"] = true;

$tableKeysq_info_paa_cdp_int = array();
$tdataq_info_paa_cdp_int[".Keys"] = $tableKeysq_info_paa_cdp_int;


$tdataq_info_paa_cdp_int[".hideMobileList"] = array();




//	PAA_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PAA_ID";
	$fdata["GoodName"] = "PAA_ID";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa_cdp_int","PAA_ID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "PAA_ID";

		$fdata["sourceSingle"] = "PAA_ID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PAA_ID";

	
	
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


	$tdataq_info_paa_cdp_int["PAA_ID"] = $fdata;
		$tdataq_info_paa_cdp_int[".searchableFields"][] = "PAA_ID";
//	DESCRIPCION_PAA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DESCRIPCION_PAA";
	$fdata["GoodName"] = "DESCRIPCION_PAA";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa_cdp_int","DESCRIPCION_PAA");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "DESCRIPCION_PAA";

		$fdata["sourceSingle"] = "DESCRIPCION_PAA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DESCRIPCION_PAA";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdataq_info_paa_cdp_int["DESCRIPCION_PAA"] = $fdata;
		$tdataq_info_paa_cdp_int[".searchableFields"][] = "DESCRIPCION_PAA";
//	DESCRIPCION_PAA_F
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DESCRIPCION_PAA_F";
	$fdata["GoodName"] = "DESCRIPCION_PAA_F";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa_cdp_int","DESCRIPCION_PAA_F");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "DESCRIPCION_PAA_F";

		$fdata["sourceSingle"] = "DESCRIPCION_PAA_F";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DESCRIPCION_PAA_F";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdataq_info_paa_cdp_int["DESCRIPCION_PAA_F"] = $fdata;
		$tdataq_info_paa_cdp_int[".searchableFields"][] = "DESCRIPCION_PAA_F";
//	VALOR_SOLICITADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "VALOR_SOLICITADO";
	$fdata["GoodName"] = "VALOR_SOLICITADO";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa_cdp_int","VALOR_SOLICITADO");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "VALOR_SOLICITADO";

		$fdata["sourceSingle"] = "VALOR_SOLICITADO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VALOR_SOLICITADO";

	
	
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


	$tdataq_info_paa_cdp_int["VALOR_SOLICITADO"] = $fdata;
		$tdataq_info_paa_cdp_int[".searchableFields"][] = "VALOR_SOLICITADO";
//	vigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "vigencia";
	$fdata["GoodName"] = "vigencia";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa_cdp_int","vigencia");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "vigencia";

		$fdata["sourceSingle"] = "vigencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vigencia";

	
	
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


	$tdataq_info_paa_cdp_int["vigencia"] = $fdata;
		$tdataq_info_paa_cdp_int[".searchableFields"][] = "vigencia";
//	PROD_UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "PROD_UEJ";
	$fdata["GoodName"] = "PROD_UEJ";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa_cdp_int","PROD_UEJ");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PROD_UEJ";

		$fdata["sourceSingle"] = "PROD_UEJ";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PROD_UEJ";

	
	
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


	$tdataq_info_paa_cdp_int["PROD_UEJ"] = $fdata;
		$tdataq_info_paa_cdp_int[".searchableFields"][] = "PROD_UEJ";
//	PROD_RUBRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PROD_RUBRO";
	$fdata["GoodName"] = "PROD_RUBRO";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa_cdp_int","PROD_RUBRO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PROD_RUBRO";

		$fdata["sourceSingle"] = "PROD_RUBRO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PROD_RUBRO";

	
	
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


	$tdataq_info_paa_cdp_int["PROD_RUBRO"] = $fdata;
		$tdataq_info_paa_cdp_int[".searchableFields"][] = "PROD_RUBRO";
//	PROD_PRODUCTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "PROD_PRODUCTO";
	$fdata["GoodName"] = "PROD_PRODUCTO";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa_cdp_int","PROD_PRODUCTO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PROD_PRODUCTO";

		$fdata["sourceSingle"] = "PROD_PRODUCTO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PROD_PRODUCTO";

	
	
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


	$tdataq_info_paa_cdp_int["PROD_PRODUCTO"] = $fdata;
		$tdataq_info_paa_cdp_int[".searchableFields"][] = "PROD_PRODUCTO";
//	PROD_DESCRIPCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "PROD_DESCRIPCION";
	$fdata["GoodName"] = "PROD_DESCRIPCION";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa_cdp_int","PROD_DESCRIPCION");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PROD_DESCRIPCION";

		$fdata["sourceSingle"] = "PROD_DESCRIPCION";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PROD_DESCRIPCION";

	
	
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


	$tdataq_info_paa_cdp_int["PROD_DESCRIPCION"] = $fdata;
		$tdataq_info_paa_cdp_int[".searchableFields"][] = "PROD_DESCRIPCION";
//	ACT_VIGENCIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ACT_VIGENCIA";
	$fdata["GoodName"] = "ACT_VIGENCIA";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa_cdp_int","ACT_VIGENCIA");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "ACT_VIGENCIA";

		$fdata["sourceSingle"] = "ACT_VIGENCIA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACT_VIGENCIA";

	
	
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


	$tdataq_info_paa_cdp_int["ACT_VIGENCIA"] = $fdata;
		$tdataq_info_paa_cdp_int[".searchableFields"][] = "ACT_VIGENCIA";
//	ACT_TIPO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ACT_TIPO";
	$fdata["GoodName"] = "ACT_TIPO";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa_cdp_int","ACT_TIPO");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "ACT_TIPO";

		$fdata["sourceSingle"] = "ACT_TIPO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACT_TIPO";

	
	
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


	$tdataq_info_paa_cdp_int["ACT_TIPO"] = $fdata;
		$tdataq_info_paa_cdp_int[".searchableFields"][] = "ACT_TIPO";
//	ACT_UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ACT_UEJ";
	$fdata["GoodName"] = "ACT_UEJ";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa_cdp_int","ACT_UEJ");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ACT_UEJ";

		$fdata["sourceSingle"] = "ACT_UEJ";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACT_UEJ";

	
	
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


	$tdataq_info_paa_cdp_int["ACT_UEJ"] = $fdata;
		$tdataq_info_paa_cdp_int[".searchableFields"][] = "ACT_UEJ";
//	ACT_RUBRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ACT_RUBRO";
	$fdata["GoodName"] = "ACT_RUBRO";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa_cdp_int","ACT_RUBRO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ACT_RUBRO";

		$fdata["sourceSingle"] = "ACT_RUBRO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACT_RUBRO";

	
	
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


	$tdataq_info_paa_cdp_int["ACT_RUBRO"] = $fdata;
		$tdataq_info_paa_cdp_int[".searchableFields"][] = "ACT_RUBRO";
//	ACT_PRODUCTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ACT_PRODUCTO";
	$fdata["GoodName"] = "ACT_PRODUCTO";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa_cdp_int","ACT_PRODUCTO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ACT_PRODUCTO";

		$fdata["sourceSingle"] = "ACT_PRODUCTO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACT_PRODUCTO";

	
	
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


	$tdataq_info_paa_cdp_int["ACT_PRODUCTO"] = $fdata;
		$tdataq_info_paa_cdp_int[".searchableFields"][] = "ACT_PRODUCTO";
//	ACT_ACTIVIDAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "ACT_ACTIVIDAD";
	$fdata["GoodName"] = "ACT_ACTIVIDAD";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa_cdp_int","ACT_ACTIVIDAD");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ACT_ACTIVIDAD";

		$fdata["sourceSingle"] = "ACT_ACTIVIDAD";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACT_ACTIVIDAD";

	
	
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


	$tdataq_info_paa_cdp_int["ACT_ACTIVIDAD"] = $fdata;
		$tdataq_info_paa_cdp_int[".searchableFields"][] = "ACT_ACTIVIDAD";
//	TIPO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "TIPO";
	$fdata["GoodName"] = "TIPO";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa_cdp_int","TIPO");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=1";

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


	$tdataq_info_paa_cdp_int["TIPO"] = $fdata;
		$tdataq_info_paa_cdp_int[".searchableFields"][] = "TIPO";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa_cdp_int","sys_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sys_user";

		$fdata["sourceSingle"] = "sys_user";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_user";

	
	
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


	$tdataq_info_paa_cdp_int["sys_user"] = $fdata;
		$tdataq_info_paa_cdp_int[".searchableFields"][] = "sys_user";
//	UNIDAD_CONTRATACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "UNIDAD_CONTRATACION";
	$fdata["GoodName"] = "UNIDAD_CONTRATACION";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa_cdp_int","UNIDAD_CONTRATACION");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "UNIDAD_CONTRATACION";

		$fdata["sourceSingle"] = "UNIDAD_CONTRATACION";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UNIDAD_CONTRATACION";

	
	
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


	$tdataq_info_paa_cdp_int["UNIDAD_CONTRATACION"] = $fdata;
		$tdataq_info_paa_cdp_int[".searchableFields"][] = "UNIDAD_CONTRATACION";
//	CDP_INTEGRADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "CDP_INTEGRADO";
	$fdata["GoodName"] = "CDP_INTEGRADO";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa_cdp_int","CDP_INTEGRADO");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CDP_INTEGRADO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CDP_INTEGRADO";

	
	
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


	$tdataq_info_paa_cdp_int["CDP_INTEGRADO"] = $fdata;
		$tdataq_info_paa_cdp_int[".searchableFields"][] = "CDP_INTEGRADO";


$tables_data["q_info_paa_cdp_int"]=&$tdataq_info_paa_cdp_int;
$field_labels["q_info_paa_cdp_int"] = &$fieldLabelsq_info_paa_cdp_int;
$fieldToolTips["q_info_paa_cdp_int"] = &$fieldToolTipsq_info_paa_cdp_int;
$placeHolders["q_info_paa_cdp_int"] = &$placeHoldersq_info_paa_cdp_int;
$page_titles["q_info_paa_cdp_int"] = &$pageTitlesq_info_paa_cdp_int;


changeTextControlsToDate( "q_info_paa_cdp_int" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["q_info_paa_cdp_int"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["q_info_paa_cdp_int"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="paa_master_pscdp";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="paa_master_pscdp_integrado";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "paa_master_pscdp_integrado";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["q_info_paa_cdp_int"][0] = $masterParams;
				$masterTablesData["q_info_paa_cdp_int"][0]["masterKeys"] = array();
	$masterTablesData["q_info_paa_cdp_int"][0]["masterKeys"][]="PAAU_ID";
				$masterTablesData["q_info_paa_cdp_int"][0]["detailKeys"] = array();
	$masterTablesData["q_info_paa_cdp_int"][0]["detailKeys"][]="CDP_INTEGRADO";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_q_info_paa_cdp_int()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PAA_ID, DESCRIPCION_PAA, DESCRIPCION_PAA_F, VALOR_SOLICITADO, vigencia, PROD_UEJ, PROD_RUBRO, PROD_PRODUCTO, PROD_DESCRIPCION, ACT_VIGENCIA, ACT_TIPO, ACT_UEJ, ACT_RUBRO, ACT_PRODUCTO, ACT_ACTIVIDAD, TIPO, sys_user, UNIDAD_CONTRATACION, CDP_INTEGRADO";
$proto0["m_strFrom"] = "FROM q_info_paa";
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
	"m_strName" => "PAA_ID",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa_cdp_int"
));

$proto6["m_sql"] = "PAA_ID";
$proto6["m_srcTableName"] = "q_info_paa_cdp_int";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION_PAA",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa_cdp_int"
));

$proto8["m_sql"] = "DESCRIPCION_PAA";
$proto8["m_srcTableName"] = "q_info_paa_cdp_int";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION_PAA_F",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa_cdp_int"
));

$proto10["m_sql"] = "DESCRIPCION_PAA_F";
$proto10["m_srcTableName"] = "q_info_paa_cdp_int";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "VALOR_SOLICITADO",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa_cdp_int"
));

$proto12["m_sql"] = "VALOR_SOLICITADO";
$proto12["m_srcTableName"] = "q_info_paa_cdp_int";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa_cdp_int"
));

$proto14["m_sql"] = "vigencia";
$proto14["m_srcTableName"] = "q_info_paa_cdp_int";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "PROD_UEJ",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa_cdp_int"
));

$proto16["m_sql"] = "PROD_UEJ";
$proto16["m_srcTableName"] = "q_info_paa_cdp_int";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "PROD_RUBRO",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa_cdp_int"
));

$proto18["m_sql"] = "PROD_RUBRO";
$proto18["m_srcTableName"] = "q_info_paa_cdp_int";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "PROD_PRODUCTO",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa_cdp_int"
));

$proto20["m_sql"] = "PROD_PRODUCTO";
$proto20["m_srcTableName"] = "q_info_paa_cdp_int";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "PROD_DESCRIPCION",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa_cdp_int"
));

$proto22["m_sql"] = "PROD_DESCRIPCION";
$proto22["m_srcTableName"] = "q_info_paa_cdp_int";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_VIGENCIA",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa_cdp_int"
));

$proto24["m_sql"] = "ACT_VIGENCIA";
$proto24["m_srcTableName"] = "q_info_paa_cdp_int";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_TIPO",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa_cdp_int"
));

$proto26["m_sql"] = "ACT_TIPO";
$proto26["m_srcTableName"] = "q_info_paa_cdp_int";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_UEJ",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa_cdp_int"
));

$proto28["m_sql"] = "ACT_UEJ";
$proto28["m_srcTableName"] = "q_info_paa_cdp_int";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_RUBRO",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa_cdp_int"
));

$proto30["m_sql"] = "ACT_RUBRO";
$proto30["m_srcTableName"] = "q_info_paa_cdp_int";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_PRODUCTO",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa_cdp_int"
));

$proto32["m_sql"] = "ACT_PRODUCTO";
$proto32["m_srcTableName"] = "q_info_paa_cdp_int";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_ACTIVIDAD",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa_cdp_int"
));

$proto34["m_sql"] = "ACT_ACTIVIDAD";
$proto34["m_srcTableName"] = "q_info_paa_cdp_int";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa_cdp_int"
));

$proto36["m_sql"] = "TIPO";
$proto36["m_srcTableName"] = "q_info_paa_cdp_int";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa_cdp_int"
));

$proto38["m_sql"] = "sys_user";
$proto38["m_srcTableName"] = "q_info_paa_cdp_int";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "UNIDAD_CONTRATACION",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa_cdp_int"
));

$proto40["m_sql"] = "UNIDAD_CONTRATACION";
$proto40["m_srcTableName"] = "q_info_paa_cdp_int";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "CDP_INTEGRADO",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa_cdp_int"
));

$proto42["m_sql"] = "CDP_INTEGRADO";
$proto42["m_srcTableName"] = "q_info_paa_cdp_int";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
			$proto45=array();
$proto45["m_strName"] = "q_info_paa";
$proto45["m_srcTableName"] = "q_info_paa_cdp_int";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "PAA_ID";
$proto45["m_columns"][] = "PAAID_INTEGRADO";
$proto45["m_columns"][] = "ACT_ID";
$proto45["m_columns"][] = "PROD_ID";
$proto45["m_columns"][] = "COD_UNSPSC";
$proto45["m_columns"][] = "DESCRIPCION_PAA";
$proto45["m_columns"][] = "DESCRIPCION_PAA_F";
$proto45["m_columns"][] = "MES_INICIO";
$proto45["m_columns"][] = "MES_PRESENTA";
$proto45["m_columns"][] = "DURACION_CONTRATO";
$proto45["m_columns"][] = "DURACION_ESTIMADA_DMA";
$proto45["m_columns"][] = "MODALIDAD";
$proto45["m_columns"][] = "FUENTE_RECURSOS";
$proto45["m_columns"][] = "VALOR_SOLICITADO";
$proto45["m_columns"][] = "vigencia";
$proto45["m_columns"][] = "PROD_UEJ";
$proto45["m_columns"][] = "PROD_RUBRO";
$proto45["m_columns"][] = "PROD_PRODUCTO";
$proto45["m_columns"][] = "PROD_DESCRIPCION";
$proto45["m_columns"][] = "PROD_DEP";
$proto45["m_columns"][] = "PROD_USUARIORESP";
$proto45["m_columns"][] = "ACT_VIGENCIA";
$proto45["m_columns"][] = "ACT_TIPO";
$proto45["m_columns"][] = "ACT_UEJ";
$proto45["m_columns"][] = "ACT_RUBRO";
$proto45["m_columns"][] = "ACT_PRODUCTO";
$proto45["m_columns"][] = "ACT_ACTIVIDAD";
$proto45["m_columns"][] = "ACT_RECURSOS_aCTIVIDAD";
$proto45["m_columns"][] = "RUBRO_ID_FK";
$proto45["m_columns"][] = "REC_F";
$proto45["m_columns"][] = "REC_C";
$proto45["m_columns"][] = "TIPO";
$proto45["m_columns"][] = "ct_integrado";
$proto45["m_columns"][] = "sys_user";
$proto45["m_columns"][] = "transferir_a";
$proto45["m_columns"][] = "patrimonio";
$proto45["m_columns"][] = "UNIDAD_CONTRATACION";
$proto45["m_columns"][] = "CDP_INTEGRADO";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "q_info_paa";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "q_info_paa_cdp_int";
$proto46=array();
$proto46["m_sql"] = "";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="q_info_paa_cdp_int";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_info_paa_cdp_int = createSqlQuery_q_info_paa_cdp_int();


	
										;

																			

$tdataq_info_paa_cdp_int[".sqlquery"] = $queryData_q_info_paa_cdp_int;



$tdataq_info_paa_cdp_int[".hasEvents"] = false;

?>