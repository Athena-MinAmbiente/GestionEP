<?php
$tdataq_info_funcionamiento = array();
$tdataq_info_funcionamiento[".searchableFields"] = array();
$tdataq_info_funcionamiento[".ShortName"] = "q_info_funcionamiento";
$tdataq_info_funcionamiento[".OwnerID"] = "";
$tdataq_info_funcionamiento[".OriginalTable"] = "q_recursos_gestor_f1";


$tdataq_info_funcionamiento[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataq_info_funcionamiento[".originalPagesByType"] = $tdataq_info_funcionamiento[".pagesByType"];
$tdataq_info_funcionamiento[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataq_info_funcionamiento[".originalPages"] = $tdataq_info_funcionamiento[".pages"];
$tdataq_info_funcionamiento[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataq_info_funcionamiento[".originalDefaultPages"] = $tdataq_info_funcionamiento[".defaultPages"];

//	field labels
$fieldLabelsq_info_funcionamiento = array();
$fieldToolTipsq_info_funcionamiento = array();
$pageTitlesq_info_funcionamiento = array();
$placeHoldersq_info_funcionamiento = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_info_funcionamiento["Spanish"] = array();
	$fieldToolTipsq_info_funcionamiento["Spanish"] = array();
	$placeHoldersq_info_funcionamiento["Spanish"] = array();
	$pageTitlesq_info_funcionamiento["Spanish"] = array();
	$fieldLabelsq_info_funcionamiento["Spanish"]["RUBRO_ID"] = "RUBRO ID";
	$fieldToolTipsq_info_funcionamiento["Spanish"]["RUBRO_ID"] = "";
	$placeHoldersq_info_funcionamiento["Spanish"]["RUBRO_ID"] = "";
	$fieldLabelsq_info_funcionamiento["Spanish"]["VIGENCIA"] = "VIGENCIA";
	$fieldToolTipsq_info_funcionamiento["Spanish"]["VIGENCIA"] = "";
	$placeHoldersq_info_funcionamiento["Spanish"]["VIGENCIA"] = "";
	$fieldLabelsq_info_funcionamiento["Spanish"]["UEJ"] = "UEJ";
	$fieldToolTipsq_info_funcionamiento["Spanish"]["UEJ"] = "";
	$placeHoldersq_info_funcionamiento["Spanish"]["UEJ"] = "";
	$fieldLabelsq_info_funcionamiento["Spanish"]["DESCRIPCION"] = "DESCRIPCION";
	$fieldToolTipsq_info_funcionamiento["Spanish"]["DESCRIPCION"] = "";
	$placeHoldersq_info_funcionamiento["Spanish"]["DESCRIPCION"] = "";
	$fieldLabelsq_info_funcionamiento["Spanish"]["PRESUPUESTO_000"] = "PRESUPUESTO GENERAL";
	$fieldToolTipsq_info_funcionamiento["Spanish"]["PRESUPUESTO_000"] = "";
	$placeHoldersq_info_funcionamiento["Spanish"]["PRESUPUESTO_000"] = "";
	$fieldLabelsq_info_funcionamiento["Spanish"]["RUBRO_001"] = "RUBRO 001";
	$fieldToolTipsq_info_funcionamiento["Spanish"]["RUBRO_001"] = "";
	$placeHoldersq_info_funcionamiento["Spanish"]["RUBRO_001"] = "";
	$fieldLabelsq_info_funcionamiento["Spanish"]["RUBRO"] = "RUBRO";
	$fieldToolTipsq_info_funcionamiento["Spanish"]["RUBRO"] = "";
	$placeHoldersq_info_funcionamiento["Spanish"]["RUBRO"] = "";
	$fieldLabelsq_info_funcionamiento["Spanish"]["DESCRIPCION_001"] = "DESCRIPCION PRODUCTO";
	$fieldToolTipsq_info_funcionamiento["Spanish"]["DESCRIPCION_001"] = "";
	$placeHoldersq_info_funcionamiento["Spanish"]["DESCRIPCION_001"] = "";
	$fieldLabelsq_info_funcionamiento["Spanish"]["REC_001"] = "REC";
	$fieldToolTipsq_info_funcionamiento["Spanish"]["REC_001"] = "";
	$placeHoldersq_info_funcionamiento["Spanish"]["REC_001"] = "";
	$fieldLabelsq_info_funcionamiento["Spanish"]["PRESUPUESTO_001"] = "PRESUPUESTO RUBRO";
	$fieldToolTipsq_info_funcionamiento["Spanish"]["PRESUPUESTO_001"] = "";
	$placeHoldersq_info_funcionamiento["Spanish"]["PRESUPUESTO_001"] = "";
	$fieldLabelsq_info_funcionamiento["Spanish"]["DEP_001"] = "DEP. SUPERIOR";
	$fieldToolTipsq_info_funcionamiento["Spanish"]["DEP_001"] = "";
	$placeHoldersq_info_funcionamiento["Spanish"]["DEP_001"] = "";
	$fieldLabelsq_info_funcionamiento["Spanish"]["PROD_ID"] = "PROD ID";
	$fieldToolTipsq_info_funcionamiento["Spanish"]["PROD_ID"] = "";
	$placeHoldersq_info_funcionamiento["Spanish"]["PROD_ID"] = "";
	$fieldLabelsq_info_funcionamiento["Spanish"]["PRODUCTO"] = "PRODUCTO";
	$fieldToolTipsq_info_funcionamiento["Spanish"]["PRODUCTO"] = "";
	$placeHoldersq_info_funcionamiento["Spanish"]["PRODUCTO"] = "";
	$fieldLabelsq_info_funcionamiento["Spanish"]["DESCRIPCION_002"] = "DESCRIPCION";
	$fieldToolTipsq_info_funcionamiento["Spanish"]["DESCRIPCION_002"] = "";
	$placeHoldersq_info_funcionamiento["Spanish"]["DESCRIPCION_002"] = "";
	$fieldLabelsq_info_funcionamiento["Spanish"]["REC_002"] = "REC";
	$fieldToolTipsq_info_funcionamiento["Spanish"]["REC_002"] = "";
	$placeHoldersq_info_funcionamiento["Spanish"]["REC_002"] = "";
	$fieldLabelsq_info_funcionamiento["Spanish"]["DEP_002"] = "DEPENDENCIA";
	$fieldToolTipsq_info_funcionamiento["Spanish"]["DEP_002"] = "";
	$placeHoldersq_info_funcionamiento["Spanish"]["DEP_002"] = "";
	$fieldLabelsq_info_funcionamiento["Spanish"]["RESPONSABLE_002"] = "ENLACE";
	$fieldToolTipsq_info_funcionamiento["Spanish"]["RESPONSABLE_002"] = "";
	$placeHoldersq_info_funcionamiento["Spanish"]["RESPONSABLE_002"] = "";
	$fieldLabelsq_info_funcionamiento["Spanish"]["TIPO"] = "TIPO";
	$fieldToolTipsq_info_funcionamiento["Spanish"]["TIPO"] = "";
	$placeHoldersq_info_funcionamiento["Spanish"]["TIPO"] = "";
	$fieldLabelsq_info_funcionamiento["Spanish"]["PROD_PRESUPUESTO"] = "<p><strong>PRESUPUESTO ASIGNADO</strong></p>";
	$fieldToolTipsq_info_funcionamiento["Spanish"]["PROD_PRESUPUESTO"] = "";
	$placeHoldersq_info_funcionamiento["Spanish"]["PROD_PRESUPUESTO"] = "";
	if (count($fieldToolTipsq_info_funcionamiento["Spanish"]))
		$tdataq_info_funcionamiento[".isUseToolTips"] = true;
}


	$tdataq_info_funcionamiento[".NCSearch"] = true;



$tdataq_info_funcionamiento[".shortTableName"] = "q_info_funcionamiento";
$tdataq_info_funcionamiento[".nSecOptions"] = 0;

$tdataq_info_funcionamiento[".mainTableOwnerID"] = "";
$tdataq_info_funcionamiento[".entityType"] = 1;
$tdataq_info_funcionamiento[".connId"] = "sep2_at_127_0_0_1";


$tdataq_info_funcionamiento[".strOriginalTableName"] = "q_recursos_gestor_f1";

	



$tdataq_info_funcionamiento[".showAddInPopup"] = false;

$tdataq_info_funcionamiento[".showEditInPopup"] = false;

$tdataq_info_funcionamiento[".showViewInPopup"] = false;

$tdataq_info_funcionamiento[".listAjax"] = false;
//	temporary
//$tdataq_info_funcionamiento[".listAjax"] = false;

	$tdataq_info_funcionamiento[".audit"] = true;

	$tdataq_info_funcionamiento[".locking"] = true;


$pages = $tdataq_info_funcionamiento[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_info_funcionamiento[".edit"] = true;
	$tdataq_info_funcionamiento[".afterEditAction"] = 1;
	$tdataq_info_funcionamiento[".closePopupAfterEdit"] = 1;
	$tdataq_info_funcionamiento[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_info_funcionamiento[".add"] = true;
$tdataq_info_funcionamiento[".afterAddAction"] = 1;
$tdataq_info_funcionamiento[".closePopupAfterAdd"] = 1;
$tdataq_info_funcionamiento[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_info_funcionamiento[".list"] = true;
}



$tdataq_info_funcionamiento[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_info_funcionamiento[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_info_funcionamiento[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_info_funcionamiento[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_info_funcionamiento[".printFriendly"] = true;
}



$tdataq_info_funcionamiento[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_info_funcionamiento[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_info_funcionamiento[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_info_funcionamiento[".isUseAjaxSuggest"] = true;



																																																												

$tdataq_info_funcionamiento[".ajaxCodeSnippetAdded"] = false;

$tdataq_info_funcionamiento[".buttonsAdded"] = false;

$tdataq_info_funcionamiento[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_info_funcionamiento[".isUseTimeForSearch"] = false;


$tdataq_info_funcionamiento[".badgeColor"] = "00ff00";


$tdataq_info_funcionamiento[".allSearchFields"] = array();
$tdataq_info_funcionamiento[".filterFields"] = array();
$tdataq_info_funcionamiento[".requiredSearchFields"] = array();

$tdataq_info_funcionamiento[".googleLikeFields"] = array();
$tdataq_info_funcionamiento[".googleLikeFields"][] = "RUBRO_ID";
$tdataq_info_funcionamiento[".googleLikeFields"][] = "VIGENCIA";
$tdataq_info_funcionamiento[".googleLikeFields"][] = "UEJ";
$tdataq_info_funcionamiento[".googleLikeFields"][] = "RUBRO";
$tdataq_info_funcionamiento[".googleLikeFields"][] = "DESCRIPCION";
$tdataq_info_funcionamiento[".googleLikeFields"][] = "PRESUPUESTO_000";
$tdataq_info_funcionamiento[".googleLikeFields"][] = "RUBRO_001";
$tdataq_info_funcionamiento[".googleLikeFields"][] = "DESCRIPCION_001";
$tdataq_info_funcionamiento[".googleLikeFields"][] = "REC_001";
$tdataq_info_funcionamiento[".googleLikeFields"][] = "PRESUPUESTO_001";
$tdataq_info_funcionamiento[".googleLikeFields"][] = "DEP_001";
$tdataq_info_funcionamiento[".googleLikeFields"][] = "PROD_ID";
$tdataq_info_funcionamiento[".googleLikeFields"][] = "PRODUCTO";
$tdataq_info_funcionamiento[".googleLikeFields"][] = "DESCRIPCION_002";
$tdataq_info_funcionamiento[".googleLikeFields"][] = "REC_002";
$tdataq_info_funcionamiento[".googleLikeFields"][] = "DEP_002";
$tdataq_info_funcionamiento[".googleLikeFields"][] = "RESPONSABLE_002";
$tdataq_info_funcionamiento[".googleLikeFields"][] = "TIPO";
$tdataq_info_funcionamiento[".googleLikeFields"][] = "PROD_PRESUPUESTO";



$tdataq_info_funcionamiento[".tableType"] = "list";

$tdataq_info_funcionamiento[".printerPageOrientation"] = 0;
$tdataq_info_funcionamiento[".nPrinterPageScale"] = 100;

$tdataq_info_funcionamiento[".nPrinterSplitRecords"] = 40;

$tdataq_info_funcionamiento[".geocodingEnabled"] = false;










$tdataq_info_funcionamiento[".pageSize"] = 20;

$tdataq_info_funcionamiento[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataq_info_funcionamiento[".strOrderBy"] = $tstrOrderBy;

$tdataq_info_funcionamiento[".orderindexes"] = array();


$tdataq_info_funcionamiento[".sqlHead"] = "SELECT RUBRO_ID, 	VIGENCIA, 	UEJ, 	RUBRO, 	DESCRIPCION, 	PRESUPUESTO_000, 	RUBRO_001, 	DESCRIPCION_001, 	REC_001, 	PRESUPUESTO_001, 	DEP_001, 	PROD_ID, 	PRODUCTO, 	DESCRIPCION_002, 	REC_002, 	DEP_002, 	RESPONSABLE_002, 	TIPO, 	PROD_PRESUPUESTO";
$tdataq_info_funcionamiento[".sqlFrom"] = "FROM q_recursos_gestor_f1";
$tdataq_info_funcionamiento[".sqlWhereExpr"] = "";
$tdataq_info_funcionamiento[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_info_funcionamiento[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_info_funcionamiento[".arrGroupsPerPage"] = $arrGPP;

$tdataq_info_funcionamiento[".highlightSearchResults"] = true;

$tableKeysq_info_funcionamiento = array();
$tdataq_info_funcionamiento[".Keys"] = $tableKeysq_info_funcionamiento;


$tdataq_info_funcionamiento[".hideMobileList"] = array();




//	RUBRO_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "RUBRO_ID";
	$fdata["GoodName"] = "RUBRO_ID";
	$fdata["ownerTable"] = "q_recursos_gestor_f1";
	$fdata["Label"] = GetFieldLabel("q_info_funcionamiento","RUBRO_ID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "RUBRO_ID";

		$fdata["sourceSingle"] = "RUBRO_ID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RUBRO_ID";

	
	
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


	$tdataq_info_funcionamiento["RUBRO_ID"] = $fdata;
		$tdataq_info_funcionamiento[".searchableFields"][] = "RUBRO_ID";
//	VIGENCIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "VIGENCIA";
	$fdata["GoodName"] = "VIGENCIA";
	$fdata["ownerTable"] = "q_recursos_gestor_f1";
	$fdata["Label"] = GetFieldLabel("q_info_funcionamiento","VIGENCIA");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "VIGENCIA";

		$fdata["sourceSingle"] = "VIGENCIA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VIGENCIA";

	
	
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


	$tdataq_info_funcionamiento["VIGENCIA"] = $fdata;
		$tdataq_info_funcionamiento[".searchableFields"][] = "VIGENCIA";
//	UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "UEJ";
	$fdata["GoodName"] = "UEJ";
	$fdata["ownerTable"] = "q_recursos_gestor_f1";
	$fdata["Label"] = GetFieldLabel("q_info_funcionamiento","UEJ");
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdataq_info_funcionamiento["UEJ"] = $fdata;
		$tdataq_info_funcionamiento[".searchableFields"][] = "UEJ";
//	RUBRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "RUBRO";
	$fdata["GoodName"] = "RUBRO";
	$fdata["ownerTable"] = "q_recursos_gestor_f1";
	$fdata["Label"] = GetFieldLabel("q_info_funcionamiento","RUBRO");
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


	$tdataq_info_funcionamiento["RUBRO"] = $fdata;
		$tdataq_info_funcionamiento[".searchableFields"][] = "RUBRO";
//	DESCRIPCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DESCRIPCION";
	$fdata["GoodName"] = "DESCRIPCION";
	$fdata["ownerTable"] = "q_recursos_gestor_f1";
	$fdata["Label"] = GetFieldLabel("q_info_funcionamiento","DESCRIPCION");
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


	$tdataq_info_funcionamiento["DESCRIPCION"] = $fdata;
		$tdataq_info_funcionamiento[".searchableFields"][] = "DESCRIPCION";
//	PRESUPUESTO_000
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "PRESUPUESTO_000";
	$fdata["GoodName"] = "PRESUPUESTO_000";
	$fdata["ownerTable"] = "q_recursos_gestor_f1";
	$fdata["Label"] = GetFieldLabel("q_info_funcionamiento","PRESUPUESTO_000");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "PRESUPUESTO_000";

		$fdata["sourceSingle"] = "PRESUPUESTO_000";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRESUPUESTO_000";

	
	
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


	$tdataq_info_funcionamiento["PRESUPUESTO_000"] = $fdata;
		$tdataq_info_funcionamiento[".searchableFields"][] = "PRESUPUESTO_000";
//	RUBRO_001
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "RUBRO_001";
	$fdata["GoodName"] = "RUBRO_001";
	$fdata["ownerTable"] = "q_recursos_gestor_f1";
	$fdata["Label"] = GetFieldLabel("q_info_funcionamiento","RUBRO_001");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "RUBRO_001";

		$fdata["sourceSingle"] = "RUBRO_001";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RUBRO_001";

	
	
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


	$tdataq_info_funcionamiento["RUBRO_001"] = $fdata;
		$tdataq_info_funcionamiento[".searchableFields"][] = "RUBRO_001";
//	DESCRIPCION_001
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DESCRIPCION_001";
	$fdata["GoodName"] = "DESCRIPCION_001";
	$fdata["ownerTable"] = "q_recursos_gestor_f1";
	$fdata["Label"] = GetFieldLabel("q_info_funcionamiento","DESCRIPCION_001");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DESCRIPCION_001";

		$fdata["sourceSingle"] = "DESCRIPCION_001";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DESCRIPCION_001";

	
	
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


	$tdataq_info_funcionamiento["DESCRIPCION_001"] = $fdata;
		$tdataq_info_funcionamiento[".searchableFields"][] = "DESCRIPCION_001";
//	REC_001
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "REC_001";
	$fdata["GoodName"] = "REC_001";
	$fdata["ownerTable"] = "q_recursos_gestor_f1";
	$fdata["Label"] = GetFieldLabel("q_info_funcionamiento","REC_001");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "REC_001";

		$fdata["sourceSingle"] = "REC_001";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "REC_001";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdataq_info_funcionamiento["REC_001"] = $fdata;
		$tdataq_info_funcionamiento[".searchableFields"][] = "REC_001";
//	PRESUPUESTO_001
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "PRESUPUESTO_001";
	$fdata["GoodName"] = "PRESUPUESTO_001";
	$fdata["ownerTable"] = "q_recursos_gestor_f1";
	$fdata["Label"] = GetFieldLabel("q_info_funcionamiento","PRESUPUESTO_001");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "PRESUPUESTO_001";

		$fdata["sourceSingle"] = "PRESUPUESTO_001";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRESUPUESTO_001";

	
	
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


	$tdataq_info_funcionamiento["PRESUPUESTO_001"] = $fdata;
		$tdataq_info_funcionamiento[".searchableFields"][] = "PRESUPUESTO_001";
//	DEP_001
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "DEP_001";
	$fdata["GoodName"] = "DEP_001";
	$fdata["ownerTable"] = "q_recursos_gestor_f1";
	$fdata["Label"] = GetFieldLabel("q_info_funcionamiento","DEP_001");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "DEP_001";

		$fdata["sourceSingle"] = "DEP_001";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEP_001";

	
	
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
	$edata["LookupTable"] = "dependencia";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";

	

	
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


	$tdataq_info_funcionamiento["DEP_001"] = $fdata;
		$tdataq_info_funcionamiento[".searchableFields"][] = "DEP_001";
//	PROD_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "PROD_ID";
	$fdata["GoodName"] = "PROD_ID";
	$fdata["ownerTable"] = "q_recursos_gestor_f1";
	$fdata["Label"] = GetFieldLabel("q_info_funcionamiento","PROD_ID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "PROD_ID";

		$fdata["sourceSingle"] = "PROD_ID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PROD_ID";

	
	
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
	$edata["LookupTable"] = "002_producto";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "PROD_ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "DESCRIPCION";

	

	
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


	$tdataq_info_funcionamiento["PROD_ID"] = $fdata;
		$tdataq_info_funcionamiento[".searchableFields"][] = "PROD_ID";
//	PRODUCTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "PRODUCTO";
	$fdata["GoodName"] = "PRODUCTO";
	$fdata["ownerTable"] = "q_recursos_gestor_f1";
	$fdata["Label"] = GetFieldLabel("q_info_funcionamiento","PRODUCTO");
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


	$tdataq_info_funcionamiento["PRODUCTO"] = $fdata;
		$tdataq_info_funcionamiento[".searchableFields"][] = "PRODUCTO";
//	DESCRIPCION_002
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "DESCRIPCION_002";
	$fdata["GoodName"] = "DESCRIPCION_002";
	$fdata["ownerTable"] = "q_recursos_gestor_f1";
	$fdata["Label"] = GetFieldLabel("q_info_funcionamiento","DESCRIPCION_002");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DESCRIPCION_002";

		$fdata["sourceSingle"] = "DESCRIPCION_002";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DESCRIPCION_002";

	
	
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


	$tdataq_info_funcionamiento["DESCRIPCION_002"] = $fdata;
		$tdataq_info_funcionamiento[".searchableFields"][] = "DESCRIPCION_002";
//	REC_002
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "REC_002";
	$fdata["GoodName"] = "REC_002";
	$fdata["ownerTable"] = "q_recursos_gestor_f1";
	$fdata["Label"] = GetFieldLabel("q_info_funcionamiento","REC_002");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "REC_002";

		$fdata["sourceSingle"] = "REC_002";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "REC_002";

	
	
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


	$tdataq_info_funcionamiento["REC_002"] = $fdata;
		$tdataq_info_funcionamiento[".searchableFields"][] = "REC_002";
//	DEP_002
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "DEP_002";
	$fdata["GoodName"] = "DEP_002";
	$fdata["ownerTable"] = "q_recursos_gestor_f1";
	$fdata["Label"] = GetFieldLabel("q_info_funcionamiento","DEP_002");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "DEP_002";

		$fdata["sourceSingle"] = "DEP_002";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEP_002";

	
	
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
	$edata["LookupTable"] = "dependencia";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";

	

	
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


	$tdataq_info_funcionamiento["DEP_002"] = $fdata;
		$tdataq_info_funcionamiento[".searchableFields"][] = "DEP_002";
//	RESPONSABLE_002
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "RESPONSABLE_002";
	$fdata["GoodName"] = "RESPONSABLE_002";
	$fdata["ownerTable"] = "q_recursos_gestor_f1";
	$fdata["Label"] = GetFieldLabel("q_info_funcionamiento","RESPONSABLE_002");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "RESPONSABLE_002";

		$fdata["sourceSingle"] = "RESPONSABLE_002";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RESPONSABLE_002";

	
	
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


	$tdataq_info_funcionamiento["RESPONSABLE_002"] = $fdata;
		$tdataq_info_funcionamiento[".searchableFields"][] = "RESPONSABLE_002";
//	TIPO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "TIPO";
	$fdata["GoodName"] = "TIPO";
	$fdata["ownerTable"] = "q_recursos_gestor_f1";
	$fdata["Label"] = GetFieldLabel("q_info_funcionamiento","TIPO");
	$fdata["FieldType"] = 16;


	
	
			

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


	$tdataq_info_funcionamiento["TIPO"] = $fdata;
		$tdataq_info_funcionamiento[".searchableFields"][] = "TIPO";
//	PROD_PRESUPUESTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "PROD_PRESUPUESTO";
	$fdata["GoodName"] = "PROD_PRESUPUESTO";
	$fdata["ownerTable"] = "q_recursos_gestor_f1";
	$fdata["Label"] = GetFieldLabel("q_info_funcionamiento","PROD_PRESUPUESTO");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "PROD_PRESUPUESTO";

		$fdata["sourceSingle"] = "PROD_PRESUPUESTO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PROD_PRESUPUESTO";

	
	
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


	$tdataq_info_funcionamiento["PROD_PRESUPUESTO"] = $fdata;
		$tdataq_info_funcionamiento[".searchableFields"][] = "PROD_PRESUPUESTO";


$tables_data["q_info_funcionamiento"]=&$tdataq_info_funcionamiento;
$field_labels["q_info_funcionamiento"] = &$fieldLabelsq_info_funcionamiento;
$fieldToolTips["q_info_funcionamiento"] = &$fieldToolTipsq_info_funcionamiento;
$placeHolders["q_info_funcionamiento"] = &$placeHoldersq_info_funcionamiento;
$page_titles["q_info_funcionamiento"] = &$pageTitlesq_info_funcionamiento;


changeTextControlsToDate( "q_info_funcionamiento" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["q_info_funcionamiento"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["q_info_funcionamiento"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="paa_master";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="paa_master_stat_1";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "paa_master_stat_1";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["q_info_funcionamiento"][0] = $masterParams;
				$masterTablesData["q_info_funcionamiento"][0]["masterKeys"] = array();
	$masterTablesData["q_info_funcionamiento"][0]["masterKeys"][]="PROD_ID";
				$masterTablesData["q_info_funcionamiento"][0]["detailKeys"] = array();
	$masterTablesData["q_info_funcionamiento"][0]["detailKeys"][]="PROD_ID";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="paa_master";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="paa_master_stat_2";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "paa_master_stat_2";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["q_info_funcionamiento"][1] = $masterParams;
				$masterTablesData["q_info_funcionamiento"][1]["masterKeys"] = array();
	$masterTablesData["q_info_funcionamiento"][1]["masterKeys"][]="PROD_ID";
				$masterTablesData["q_info_funcionamiento"][1]["detailKeys"] = array();
	$masterTablesData["q_info_funcionamiento"][1]["detailKeys"][]="PROD_ID";
		
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
					$masterTablesData["q_info_funcionamiento"][2] = $masterParams;
				$masterTablesData["q_info_funcionamiento"][2]["masterKeys"] = array();
	$masterTablesData["q_info_funcionamiento"][2]["masterKeys"][]="PROD_ID";
				$masterTablesData["q_info_funcionamiento"][2]["detailKeys"] = array();
	$masterTablesData["q_info_funcionamiento"][2]["detailKeys"][]="PROD_ID";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="paa_master";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="paa_master_stat_6";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "paa_master_stat_6";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["q_info_funcionamiento"][3] = $masterParams;
				$masterTablesData["q_info_funcionamiento"][3]["masterKeys"] = array();
	$masterTablesData["q_info_funcionamiento"][3]["masterKeys"][]="PROD_ID";
				$masterTablesData["q_info_funcionamiento"][3]["detailKeys"] = array();
	$masterTablesData["q_info_funcionamiento"][3]["detailKeys"][]="PROD_ID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_q_info_funcionamiento()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "RUBRO_ID, 	VIGENCIA, 	UEJ, 	RUBRO, 	DESCRIPCION, 	PRESUPUESTO_000, 	RUBRO_001, 	DESCRIPCION_001, 	REC_001, 	PRESUPUESTO_001, 	DEP_001, 	PROD_ID, 	PRODUCTO, 	DESCRIPCION_002, 	REC_002, 	DEP_002, 	RESPONSABLE_002, 	TIPO, 	PROD_PRESUPUESTO";
$proto0["m_strFrom"] = "FROM q_recursos_gestor_f1";
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
	"m_strName" => "RUBRO_ID",
	"m_strTable" => "q_recursos_gestor_f1",
	"m_srcTableName" => "q_info_funcionamiento"
));

$proto6["m_sql"] = "RUBRO_ID";
$proto6["m_srcTableName"] = "q_info_funcionamiento";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "VIGENCIA",
	"m_strTable" => "q_recursos_gestor_f1",
	"m_srcTableName" => "q_info_funcionamiento"
));

$proto8["m_sql"] = "VIGENCIA";
$proto8["m_srcTableName"] = "q_info_funcionamiento";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "UEJ",
	"m_strTable" => "q_recursos_gestor_f1",
	"m_srcTableName" => "q_info_funcionamiento"
));

$proto10["m_sql"] = "UEJ";
$proto10["m_srcTableName"] = "q_info_funcionamiento";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "RUBRO",
	"m_strTable" => "q_recursos_gestor_f1",
	"m_srcTableName" => "q_info_funcionamiento"
));

$proto12["m_sql"] = "RUBRO";
$proto12["m_srcTableName"] = "q_info_funcionamiento";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION",
	"m_strTable" => "q_recursos_gestor_f1",
	"m_srcTableName" => "q_info_funcionamiento"
));

$proto14["m_sql"] = "DESCRIPCION";
$proto14["m_srcTableName"] = "q_info_funcionamiento";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "PRESUPUESTO_000",
	"m_strTable" => "q_recursos_gestor_f1",
	"m_srcTableName" => "q_info_funcionamiento"
));

$proto16["m_sql"] = "PRESUPUESTO_000";
$proto16["m_srcTableName"] = "q_info_funcionamiento";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "RUBRO_001",
	"m_strTable" => "q_recursos_gestor_f1",
	"m_srcTableName" => "q_info_funcionamiento"
));

$proto18["m_sql"] = "RUBRO_001";
$proto18["m_srcTableName"] = "q_info_funcionamiento";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION_001",
	"m_strTable" => "q_recursos_gestor_f1",
	"m_srcTableName" => "q_info_funcionamiento"
));

$proto20["m_sql"] = "DESCRIPCION_001";
$proto20["m_srcTableName"] = "q_info_funcionamiento";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "REC_001",
	"m_strTable" => "q_recursos_gestor_f1",
	"m_srcTableName" => "q_info_funcionamiento"
));

$proto22["m_sql"] = "REC_001";
$proto22["m_srcTableName"] = "q_info_funcionamiento";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "PRESUPUESTO_001",
	"m_strTable" => "q_recursos_gestor_f1",
	"m_srcTableName" => "q_info_funcionamiento"
));

$proto24["m_sql"] = "PRESUPUESTO_001";
$proto24["m_srcTableName"] = "q_info_funcionamiento";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "DEP_001",
	"m_strTable" => "q_recursos_gestor_f1",
	"m_srcTableName" => "q_info_funcionamiento"
));

$proto26["m_sql"] = "DEP_001";
$proto26["m_srcTableName"] = "q_info_funcionamiento";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "PROD_ID",
	"m_strTable" => "q_recursos_gestor_f1",
	"m_srcTableName" => "q_info_funcionamiento"
));

$proto28["m_sql"] = "PROD_ID";
$proto28["m_srcTableName"] = "q_info_funcionamiento";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "PRODUCTO",
	"m_strTable" => "q_recursos_gestor_f1",
	"m_srcTableName" => "q_info_funcionamiento"
));

$proto30["m_sql"] = "PRODUCTO";
$proto30["m_srcTableName"] = "q_info_funcionamiento";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION_002",
	"m_strTable" => "q_recursos_gestor_f1",
	"m_srcTableName" => "q_info_funcionamiento"
));

$proto32["m_sql"] = "DESCRIPCION_002";
$proto32["m_srcTableName"] = "q_info_funcionamiento";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "REC_002",
	"m_strTable" => "q_recursos_gestor_f1",
	"m_srcTableName" => "q_info_funcionamiento"
));

$proto34["m_sql"] = "REC_002";
$proto34["m_srcTableName"] = "q_info_funcionamiento";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "DEP_002",
	"m_strTable" => "q_recursos_gestor_f1",
	"m_srcTableName" => "q_info_funcionamiento"
));

$proto36["m_sql"] = "DEP_002";
$proto36["m_srcTableName"] = "q_info_funcionamiento";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "RESPONSABLE_002",
	"m_strTable" => "q_recursos_gestor_f1",
	"m_srcTableName" => "q_info_funcionamiento"
));

$proto38["m_sql"] = "RESPONSABLE_002";
$proto38["m_srcTableName"] = "q_info_funcionamiento";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "q_recursos_gestor_f1",
	"m_srcTableName" => "q_info_funcionamiento"
));

$proto40["m_sql"] = "TIPO";
$proto40["m_srcTableName"] = "q_info_funcionamiento";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "PROD_PRESUPUESTO",
	"m_strTable" => "q_recursos_gestor_f1",
	"m_srcTableName" => "q_info_funcionamiento"
));

$proto42["m_sql"] = "PROD_PRESUPUESTO";
$proto42["m_srcTableName"] = "q_info_funcionamiento";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
			$proto45=array();
$proto45["m_strName"] = "q_recursos_gestor_f1";
$proto45["m_srcTableName"] = "q_info_funcionamiento";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "RUBRO_ID";
$proto45["m_columns"][] = "VIGENCIA";
$proto45["m_columns"][] = "UEJ";
$proto45["m_columns"][] = "DESCRIPCION";
$proto45["m_columns"][] = "PRESUPUESTO_000";
$proto45["m_columns"][] = "RUBRO_001";
$proto45["m_columns"][] = "RUBRO";
$proto45["m_columns"][] = "DESCRIPCION_001";
$proto45["m_columns"][] = "REC_001";
$proto45["m_columns"][] = "BPIN";
$proto45["m_columns"][] = "PRESUPUESTO_001";
$proto45["m_columns"][] = "DEP_001";
$proto45["m_columns"][] = "PROD_ID";
$proto45["m_columns"][] = "PRODUCTO";
$proto45["m_columns"][] = "DESCRIPCION_002";
$proto45["m_columns"][] = "REC_002";
$proto45["m_columns"][] = "DEP_002";
$proto45["m_columns"][] = "RESPONSABLE_002";
$proto45["m_columns"][] = "TIPO";
$proto45["m_columns"][] = "PROD_PRESUPUESTO";
$proto45["m_columns"][] = "PROGRAMADO";
$proto45["m_columns"][] = "SALDO_PROG";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "q_recursos_gestor_f1";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "q_info_funcionamiento";
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
$proto0["m_srcTableName"]="q_info_funcionamiento";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_info_funcionamiento = createSqlQuery_q_info_funcionamiento();


	
										;

																			

$tdataq_info_funcionamiento[".sqlquery"] = $queryData_q_info_funcionamiento;



$tdataq_info_funcionamiento[".hasEvents"] = false;

?>