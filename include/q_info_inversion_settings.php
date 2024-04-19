<?php
$tdataq_info_inversion = array();
$tdataq_info_inversion[".searchableFields"] = array();
$tdataq_info_inversion[".ShortName"] = "q_info_inversion";
$tdataq_info_inversion[".OwnerID"] = "RESPONSABLE_003";
$tdataq_info_inversion[".OriginalTable"] = "q_recursos_gestor_c1";


$tdataq_info_inversion[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataq_info_inversion[".originalPagesByType"] = $tdataq_info_inversion[".pagesByType"];
$tdataq_info_inversion[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataq_info_inversion[".originalPages"] = $tdataq_info_inversion[".pages"];
$tdataq_info_inversion[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataq_info_inversion[".originalDefaultPages"] = $tdataq_info_inversion[".defaultPages"];

//	field labels
$fieldLabelsq_info_inversion = array();
$fieldToolTipsq_info_inversion = array();
$pageTitlesq_info_inversion = array();
$placeHoldersq_info_inversion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_info_inversion["Spanish"] = array();
	$fieldToolTipsq_info_inversion["Spanish"] = array();
	$placeHoldersq_info_inversion["Spanish"] = array();
	$pageTitlesq_info_inversion["Spanish"] = array();
	$fieldLabelsq_info_inversion["Spanish"]["RUBRO_ID"] = "RUBRO ID";
	$fieldToolTipsq_info_inversion["Spanish"]["RUBRO_ID"] = "";
	$placeHoldersq_info_inversion["Spanish"]["RUBRO_ID"] = "";
	$fieldLabelsq_info_inversion["Spanish"]["VIGENCIA"] = "Periodo";
	$fieldToolTipsq_info_inversion["Spanish"]["VIGENCIA"] = "";
	$placeHoldersq_info_inversion["Spanish"]["VIGENCIA"] = "";
	$fieldLabelsq_info_inversion["Spanish"]["UEJ"] = "UEJ";
	$fieldToolTipsq_info_inversion["Spanish"]["UEJ"] = "";
	$placeHoldersq_info_inversion["Spanish"]["UEJ"] = "";
	$fieldLabelsq_info_inversion["Spanish"]["DESCRIPCION"] = "DESCRIPCION";
	$fieldToolTipsq_info_inversion["Spanish"]["DESCRIPCION"] = "";
	$placeHoldersq_info_inversion["Spanish"]["DESCRIPCION"] = "";
	$fieldLabelsq_info_inversion["Spanish"]["PRESUPUESTO_000"] = "PRESUPUESTO";
	$fieldToolTipsq_info_inversion["Spanish"]["PRESUPUESTO_000"] = "";
	$placeHoldersq_info_inversion["Spanish"]["PRESUPUESTO_000"] = "";
	$fieldLabelsq_info_inversion["Spanish"]["RUBRO_001"] = "RUBRO 001";
	$fieldToolTipsq_info_inversion["Spanish"]["RUBRO_001"] = "";
	$placeHoldersq_info_inversion["Spanish"]["RUBRO_001"] = "";
	$fieldLabelsq_info_inversion["Spanish"]["RUBRO"] = "RUBRO";
	$fieldToolTipsq_info_inversion["Spanish"]["RUBRO"] = "";
	$placeHoldersq_info_inversion["Spanish"]["RUBRO"] = "";
	$fieldLabelsq_info_inversion["Spanish"]["DESCRIPCION_001"] = "DESCRIPCION";
	$fieldToolTipsq_info_inversion["Spanish"]["DESCRIPCION_001"] = "";
	$placeHoldersq_info_inversion["Spanish"]["DESCRIPCION_001"] = "";
	$fieldLabelsq_info_inversion["Spanish"]["REC_001"] = "REC";
	$fieldToolTipsq_info_inversion["Spanish"]["REC_001"] = "";
	$placeHoldersq_info_inversion["Spanish"]["REC_001"] = "";
	$fieldLabelsq_info_inversion["Spanish"]["BPIN"] = "BPIN";
	$fieldToolTipsq_info_inversion["Spanish"]["BPIN"] = "";
	$placeHoldersq_info_inversion["Spanish"]["BPIN"] = "";
	$fieldLabelsq_info_inversion["Spanish"]["PRESUPUESTO_001"] = "PRESUPUESTO";
	$fieldToolTipsq_info_inversion["Spanish"]["PRESUPUESTO_001"] = "";
	$placeHoldersq_info_inversion["Spanish"]["PRESUPUESTO_001"] = "";
	$fieldLabelsq_info_inversion["Spanish"]["DEP_001"] = "DEP 001";
	$fieldToolTipsq_info_inversion["Spanish"]["DEP_001"] = "";
	$placeHoldersq_info_inversion["Spanish"]["DEP_001"] = "";
	$fieldLabelsq_info_inversion["Spanish"]["PROD_ID"] = "PROD ID";
	$fieldToolTipsq_info_inversion["Spanish"]["PROD_ID"] = "";
	$placeHoldersq_info_inversion["Spanish"]["PROD_ID"] = "";
	$fieldLabelsq_info_inversion["Spanish"]["PRODUCTO"] = "Código de producto";
	$fieldToolTipsq_info_inversion["Spanish"]["PRODUCTO"] = "";
	$placeHoldersq_info_inversion["Spanish"]["PRODUCTO"] = "";
	$fieldLabelsq_info_inversion["Spanish"]["DESCRIPCION_002"] = "<p><strong>Descripción de producto</strong></p>";
	$fieldToolTipsq_info_inversion["Spanish"]["DESCRIPCION_002"] = "";
	$placeHoldersq_info_inversion["Spanish"]["DESCRIPCION_002"] = "";
	$fieldLabelsq_info_inversion["Spanish"]["REC_002"] = "REC";
	$fieldToolTipsq_info_inversion["Spanish"]["REC_002"] = "";
	$placeHoldersq_info_inversion["Spanish"]["REC_002"] = "";
	$fieldLabelsq_info_inversion["Spanish"]["DEP_002"] = "D";
	$fieldToolTipsq_info_inversion["Spanish"]["DEP_002"] = "";
	$placeHoldersq_info_inversion["Spanish"]["DEP_002"] = "";
	$fieldLabelsq_info_inversion["Spanish"]["RESPONSABLE_002"] = "Líder del proyecto";
	$fieldToolTipsq_info_inversion["Spanish"]["RESPONSABLE_002"] = "";
	$placeHoldersq_info_inversion["Spanish"]["RESPONSABLE_002"] = "";
	$fieldLabelsq_info_inversion["Spanish"]["ACT_ID"] = "Código actividad";
	$fieldToolTipsq_info_inversion["Spanish"]["ACT_ID"] = "";
	$placeHoldersq_info_inversion["Spanish"]["ACT_ID"] = "";
	$fieldLabelsq_info_inversion["Spanish"]["ACTIVIDAD"] = "<p><strong style=\"color: rgb(0, 102, 204);\">Actividad</strong></p>";
	$fieldToolTipsq_info_inversion["Spanish"]["ACTIVIDAD"] = "";
	$placeHoldersq_info_inversion["Spanish"]["ACTIVIDAD"] = "";
	$fieldLabelsq_info_inversion["Spanish"]["META"] = "META";
	$fieldToolTipsq_info_inversion["Spanish"]["META"] = "";
	$placeHoldersq_info_inversion["Spanish"]["META"] = "";
	$fieldLabelsq_info_inversion["Spanish"]["RECURSOS_ASIGNADOS"] = "Presupuesto actividad";
	$fieldToolTipsq_info_inversion["Spanish"]["RECURSOS_ASIGNADOS"] = "";
	$placeHoldersq_info_inversion["Spanish"]["RECURSOS_ASIGNADOS"] = "";
	$fieldLabelsq_info_inversion["Spanish"]["DEP_003"] = "Dependencia";
	$fieldToolTipsq_info_inversion["Spanish"]["DEP_003"] = "";
	$placeHoldersq_info_inversion["Spanish"]["DEP_003"] = "";
	$fieldLabelsq_info_inversion["Spanish"]["RESPONSABLE_003"] = "Gestor de proyecto";
	$fieldToolTipsq_info_inversion["Spanish"]["RESPONSABLE_003"] = "";
	$placeHoldersq_info_inversion["Spanish"]["RESPONSABLE_003"] = "";
	$fieldLabelsq_info_inversion["Spanish"]["PRESUPUESTO_002"] = "Presupuesto producto";
	$fieldToolTipsq_info_inversion["Spanish"]["PRESUPUESTO_002"] = "";
	$placeHoldersq_info_inversion["Spanish"]["PRESUPUESTO_002"] = "";
	$fieldLabelsq_info_inversion["Spanish"]["PROGRAMADO"] = "PROGRAMADO";
	$fieldToolTipsq_info_inversion["Spanish"]["PROGRAMADO"] = "";
	$placeHoldersq_info_inversion["Spanish"]["PROGRAMADO"] = "";
	$fieldLabelsq_info_inversion["Spanish"]["SALDO_PROG"] = "SALDO PROG";
	$fieldToolTipsq_info_inversion["Spanish"]["SALDO_PROG"] = "";
	$placeHoldersq_info_inversion["Spanish"]["SALDO_PROG"] = "";
	if (count($fieldToolTipsq_info_inversion["Spanish"]))
		$tdataq_info_inversion[".isUseToolTips"] = true;
}


	$tdataq_info_inversion[".NCSearch"] = true;



$tdataq_info_inversion[".shortTableName"] = "q_info_inversion";
$tdataq_info_inversion[".nSecOptions"] = 0;

$tdataq_info_inversion[".mainTableOwnerID"] = "RESPONSABLE_003";
$tdataq_info_inversion[".entityType"] = 1;
$tdataq_info_inversion[".connId"] = "sep2_at_127_0_0_1";


$tdataq_info_inversion[".strOriginalTableName"] = "q_recursos_gestor_c1";

	



$tdataq_info_inversion[".showAddInPopup"] = false;

$tdataq_info_inversion[".showEditInPopup"] = false;

$tdataq_info_inversion[".showViewInPopup"] = false;

$tdataq_info_inversion[".listAjax"] = false;
//	temporary
//$tdataq_info_inversion[".listAjax"] = false;

	$tdataq_info_inversion[".audit"] = true;

	$tdataq_info_inversion[".locking"] = true;


$pages = $tdataq_info_inversion[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_info_inversion[".edit"] = true;
	$tdataq_info_inversion[".afterEditAction"] = 1;
	$tdataq_info_inversion[".closePopupAfterEdit"] = 1;
	$tdataq_info_inversion[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_info_inversion[".add"] = true;
$tdataq_info_inversion[".afterAddAction"] = 1;
$tdataq_info_inversion[".closePopupAfterAdd"] = 1;
$tdataq_info_inversion[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_info_inversion[".list"] = true;
}



$tdataq_info_inversion[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_info_inversion[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_info_inversion[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_info_inversion[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_info_inversion[".printFriendly"] = true;
}



$tdataq_info_inversion[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_info_inversion[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_info_inversion[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_info_inversion[".isUseAjaxSuggest"] = true;



																																																																								

$tdataq_info_inversion[".ajaxCodeSnippetAdded"] = false;

$tdataq_info_inversion[".buttonsAdded"] = false;

$tdataq_info_inversion[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_info_inversion[".isUseTimeForSearch"] = false;


$tdataq_info_inversion[".badgeColor"] = "0000ff";


$tdataq_info_inversion[".allSearchFields"] = array();
$tdataq_info_inversion[".filterFields"] = array();
$tdataq_info_inversion[".requiredSearchFields"] = array();

$tdataq_info_inversion[".googleLikeFields"] = array();
$tdataq_info_inversion[".googleLikeFields"][] = "RUBRO_ID";
$tdataq_info_inversion[".googleLikeFields"][] = "VIGENCIA";
$tdataq_info_inversion[".googleLikeFields"][] = "UEJ";
$tdataq_info_inversion[".googleLikeFields"][] = "DESCRIPCION";
$tdataq_info_inversion[".googleLikeFields"][] = "PRESUPUESTO_000";
$tdataq_info_inversion[".googleLikeFields"][] = "RUBRO_001";
$tdataq_info_inversion[".googleLikeFields"][] = "RUBRO";
$tdataq_info_inversion[".googleLikeFields"][] = "DESCRIPCION_001";
$tdataq_info_inversion[".googleLikeFields"][] = "REC_001";
$tdataq_info_inversion[".googleLikeFields"][] = "BPIN";
$tdataq_info_inversion[".googleLikeFields"][] = "PRESUPUESTO_001";
$tdataq_info_inversion[".googleLikeFields"][] = "DEP_001";
$tdataq_info_inversion[".googleLikeFields"][] = "PROD_ID";
$tdataq_info_inversion[".googleLikeFields"][] = "PRODUCTO";
$tdataq_info_inversion[".googleLikeFields"][] = "DESCRIPCION_002";
$tdataq_info_inversion[".googleLikeFields"][] = "PRESUPUESTO_002";
$tdataq_info_inversion[".googleLikeFields"][] = "REC_002";
$tdataq_info_inversion[".googleLikeFields"][] = "DEP_002";
$tdataq_info_inversion[".googleLikeFields"][] = "RESPONSABLE_002";
$tdataq_info_inversion[".googleLikeFields"][] = "ACT_ID";
$tdataq_info_inversion[".googleLikeFields"][] = "ACTIVIDAD";
$tdataq_info_inversion[".googleLikeFields"][] = "META";
$tdataq_info_inversion[".googleLikeFields"][] = "RECURSOS_ASIGNADOS";
$tdataq_info_inversion[".googleLikeFields"][] = "DEP_003";
$tdataq_info_inversion[".googleLikeFields"][] = "RESPONSABLE_003";
$tdataq_info_inversion[".googleLikeFields"][] = "PROGRAMADO";
$tdataq_info_inversion[".googleLikeFields"][] = "SALDO_PROG";



$tdataq_info_inversion[".tableType"] = "list";

$tdataq_info_inversion[".printerPageOrientation"] = 0;
$tdataq_info_inversion[".nPrinterPageScale"] = 100;

$tdataq_info_inversion[".nPrinterSplitRecords"] = 40;

$tdataq_info_inversion[".geocodingEnabled"] = false;




$tdataq_info_inversion[".isDisplayLoading"] = true;






$tdataq_info_inversion[".pageSize"] = 20;

$tdataq_info_inversion[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataq_info_inversion[".strOrderBy"] = $tstrOrderBy;

$tdataq_info_inversion[".orderindexes"] = array();


$tdataq_info_inversion[".sqlHead"] = "SELECT RUBRO_ID,  	VIGENCIA,  	UEJ,  	DESCRIPCION,  	PRESUPUESTO_000,  	RUBRO_001,  	RUBRO,  	DESCRIPCION_001,  	REC_001,  	BPIN,  	PRESUPUESTO_001,  	DEP_001,  	PROD_ID,  	PRODUCTO,  	DESCRIPCION_002,  	PRESUPUESTO_002,  	REC_002,  	DEP_002,  	RESPONSABLE_002,  	ACT_ID,  	ACTIVIDAD,  	META,  	RECURSOS_ASIGNADOS,  	DEP_003,  	RESPONSABLE_003,  	PROGRAMADO,  	SALDO_PROG";
$tdataq_info_inversion[".sqlFrom"] = "FROM q_recursos_gestor_c1";
$tdataq_info_inversion[".sqlWhereExpr"] = "";
$tdataq_info_inversion[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_info_inversion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_info_inversion[".arrGroupsPerPage"] = $arrGPP;

$tdataq_info_inversion[".highlightSearchResults"] = true;

$tableKeysq_info_inversion = array();
$tableKeysq_info_inversion[] = "RUBRO_ID";
$tdataq_info_inversion[".Keys"] = $tableKeysq_info_inversion;


$tdataq_info_inversion[".hideMobileList"] = array();




//	RUBRO_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "RUBRO_ID";
	$fdata["GoodName"] = "RUBRO_ID";
	$fdata["ownerTable"] = "q_recursos_gestor_c1";
	$fdata["Label"] = GetFieldLabel("q_info_inversion","RUBRO_ID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "RUBRO_ID";

	
	
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


	$tdataq_info_inversion["RUBRO_ID"] = $fdata;
		$tdataq_info_inversion[".searchableFields"][] = "RUBRO_ID";
//	VIGENCIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "VIGENCIA";
	$fdata["GoodName"] = "VIGENCIA";
	$fdata["ownerTable"] = "q_recursos_gestor_c1";
	$fdata["Label"] = GetFieldLabel("q_info_inversion","VIGENCIA");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "VIGENCIA";

	
	
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


	$tdataq_info_inversion["VIGENCIA"] = $fdata;
		$tdataq_info_inversion[".searchableFields"][] = "VIGENCIA";
//	UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "UEJ";
	$fdata["GoodName"] = "UEJ";
	$fdata["ownerTable"] = "q_recursos_gestor_c1";
	$fdata["Label"] = GetFieldLabel("q_info_inversion","UEJ");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "UEJ";

	
	
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


	$tdataq_info_inversion["UEJ"] = $fdata;
		$tdataq_info_inversion[".searchableFields"][] = "UEJ";
//	DESCRIPCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DESCRIPCION";
	$fdata["GoodName"] = "DESCRIPCION";
	$fdata["ownerTable"] = "q_recursos_gestor_c1";
	$fdata["Label"] = GetFieldLabel("q_info_inversion","DESCRIPCION");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DESCRIPCION";

	
	
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


	$tdataq_info_inversion["DESCRIPCION"] = $fdata;
		$tdataq_info_inversion[".searchableFields"][] = "DESCRIPCION";
//	PRESUPUESTO_000
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PRESUPUESTO_000";
	$fdata["GoodName"] = "PRESUPUESTO_000";
	$fdata["ownerTable"] = "q_recursos_gestor_c1";
	$fdata["Label"] = GetFieldLabel("q_info_inversion","PRESUPUESTO_000");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "PRESUPUESTO_000";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRESUPUESTO_000";

	
	
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


	$tdataq_info_inversion["PRESUPUESTO_000"] = $fdata;
		$tdataq_info_inversion[".searchableFields"][] = "PRESUPUESTO_000";
//	RUBRO_001
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "RUBRO_001";
	$fdata["GoodName"] = "RUBRO_001";
	$fdata["ownerTable"] = "q_recursos_gestor_c1";
	$fdata["Label"] = GetFieldLabel("q_info_inversion","RUBRO_001");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "RUBRO_001";

	
	
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


	$tdataq_info_inversion["RUBRO_001"] = $fdata;
		$tdataq_info_inversion[".searchableFields"][] = "RUBRO_001";
//	RUBRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "RUBRO";
	$fdata["GoodName"] = "RUBRO";
	$fdata["ownerTable"] = "q_recursos_gestor_c1";
	$fdata["Label"] = GetFieldLabel("q_info_inversion","RUBRO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "RUBRO";

	
	
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


	$tdataq_info_inversion["RUBRO"] = $fdata;
		$tdataq_info_inversion[".searchableFields"][] = "RUBRO";
//	DESCRIPCION_001
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DESCRIPCION_001";
	$fdata["GoodName"] = "DESCRIPCION_001";
	$fdata["ownerTable"] = "q_recursos_gestor_c1";
	$fdata["Label"] = GetFieldLabel("q_info_inversion","DESCRIPCION_001");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DESCRIPCION_001";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DESCRIPCION_001";

	
	
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


	$tdataq_info_inversion["DESCRIPCION_001"] = $fdata;
		$tdataq_info_inversion[".searchableFields"][] = "DESCRIPCION_001";
//	REC_001
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "REC_001";
	$fdata["GoodName"] = "REC_001";
	$fdata["ownerTable"] = "q_recursos_gestor_c1";
	$fdata["Label"] = GetFieldLabel("q_info_inversion","REC_001");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "REC_001";

	
	
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


	$tdataq_info_inversion["REC_001"] = $fdata;
		$tdataq_info_inversion[".searchableFields"][] = "REC_001";
//	BPIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "BPIN";
	$fdata["GoodName"] = "BPIN";
	$fdata["ownerTable"] = "q_recursos_gestor_c1";
	$fdata["Label"] = GetFieldLabel("q_info_inversion","BPIN");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BPIN";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BPIN";

	
	
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
			$edata["EditParams"].= " maxlength=13";

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


	$tdataq_info_inversion["BPIN"] = $fdata;
		$tdataq_info_inversion[".searchableFields"][] = "BPIN";
//	PRESUPUESTO_001
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "PRESUPUESTO_001";
	$fdata["GoodName"] = "PRESUPUESTO_001";
	$fdata["ownerTable"] = "q_recursos_gestor_c1";
	$fdata["Label"] = GetFieldLabel("q_info_inversion","PRESUPUESTO_001");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "PRESUPUESTO_001";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRESUPUESTO_001";

	
	
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


	$tdataq_info_inversion["PRESUPUESTO_001"] = $fdata;
		$tdataq_info_inversion[".searchableFields"][] = "PRESUPUESTO_001";
//	DEP_001
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "DEP_001";
	$fdata["GoodName"] = "DEP_001";
	$fdata["ownerTable"] = "q_recursos_gestor_c1";
	$fdata["Label"] = GetFieldLabel("q_info_inversion","DEP_001");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "DEP_001";

	
	
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


	$tdataq_info_inversion["DEP_001"] = $fdata;
		$tdataq_info_inversion[".searchableFields"][] = "DEP_001";
//	PROD_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "PROD_ID";
	$fdata["GoodName"] = "PROD_ID";
	$fdata["ownerTable"] = "q_recursos_gestor_c1";
	$fdata["Label"] = GetFieldLabel("q_info_inversion","PROD_ID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "PROD_ID";

	
	
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


	$tdataq_info_inversion["PROD_ID"] = $fdata;
		$tdataq_info_inversion[".searchableFields"][] = "PROD_ID";
//	PRODUCTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "PRODUCTO";
	$fdata["GoodName"] = "PRODUCTO";
	$fdata["ownerTable"] = "q_recursos_gestor_c1";
	$fdata["Label"] = GetFieldLabel("q_info_inversion","PRODUCTO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PRODUCTO";

	
	
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


	$tdataq_info_inversion["PRODUCTO"] = $fdata;
		$tdataq_info_inversion[".searchableFields"][] = "PRODUCTO";
//	DESCRIPCION_002
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "DESCRIPCION_002";
	$fdata["GoodName"] = "DESCRIPCION_002";
	$fdata["ownerTable"] = "q_recursos_gestor_c1";
	$fdata["Label"] = GetFieldLabel("q_info_inversion","DESCRIPCION_002");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DESCRIPCION_002";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DESCRIPCION_002";

	
	
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


	$tdataq_info_inversion["DESCRIPCION_002"] = $fdata;
		$tdataq_info_inversion[".searchableFields"][] = "DESCRIPCION_002";
//	PRESUPUESTO_002
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "PRESUPUESTO_002";
	$fdata["GoodName"] = "PRESUPUESTO_002";
	$fdata["ownerTable"] = "q_recursos_gestor_c1";
	$fdata["Label"] = GetFieldLabel("q_info_inversion","PRESUPUESTO_002");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "PRESUPUESTO_002";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRESUPUESTO_002";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
							
	
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


	$tdataq_info_inversion["PRESUPUESTO_002"] = $fdata;
		$tdataq_info_inversion[".searchableFields"][] = "PRESUPUESTO_002";
//	REC_002
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "REC_002";
	$fdata["GoodName"] = "REC_002";
	$fdata["ownerTable"] = "q_recursos_gestor_c1";
	$fdata["Label"] = GetFieldLabel("q_info_inversion","REC_002");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "REC_002";

	
	
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


	$tdataq_info_inversion["REC_002"] = $fdata;
		$tdataq_info_inversion[".searchableFields"][] = "REC_002";
//	DEP_002
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "DEP_002";
	$fdata["GoodName"] = "DEP_002";
	$fdata["ownerTable"] = "q_recursos_gestor_c1";
	$fdata["Label"] = GetFieldLabel("q_info_inversion","DEP_002");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "DEP_002";

	
	
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


	$tdataq_info_inversion["DEP_002"] = $fdata;
		$tdataq_info_inversion[".searchableFields"][] = "DEP_002";
//	RESPONSABLE_002
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "RESPONSABLE_002";
	$fdata["GoodName"] = "RESPONSABLE_002";
	$fdata["ownerTable"] = "q_recursos_gestor_c1";
	$fdata["Label"] = GetFieldLabel("q_info_inversion","RESPONSABLE_002");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "RESPONSABLE_002";

	
	
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=60";

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


	$tdataq_info_inversion["RESPONSABLE_002"] = $fdata;
		$tdataq_info_inversion[".searchableFields"][] = "RESPONSABLE_002";
//	ACT_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "ACT_ID";
	$fdata["GoodName"] = "ACT_ID";
	$fdata["ownerTable"] = "q_recursos_gestor_c1";
	$fdata["Label"] = GetFieldLabel("q_info_inversion","ACT_ID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ACT_ID";

	
	
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


	$tdataq_info_inversion["ACT_ID"] = $fdata;
		$tdataq_info_inversion[".searchableFields"][] = "ACT_ID";
//	ACTIVIDAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "ACTIVIDAD";
	$fdata["GoodName"] = "ACTIVIDAD";
	$fdata["ownerTable"] = "q_recursos_gestor_c1";
	$fdata["Label"] = GetFieldLabel("q_info_inversion","ACTIVIDAD");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ACTIVIDAD";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACTIVIDAD";

	
	
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


	$tdataq_info_inversion["ACTIVIDAD"] = $fdata;
		$tdataq_info_inversion[".searchableFields"][] = "ACTIVIDAD";
//	META
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "META";
	$fdata["GoodName"] = "META";
	$fdata["ownerTable"] = "q_recursos_gestor_c1";
	$fdata["Label"] = GetFieldLabel("q_info_inversion","META");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "META";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "META";

	
	
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


	$tdataq_info_inversion["META"] = $fdata;
		$tdataq_info_inversion[".searchableFields"][] = "META";
//	RECURSOS_ASIGNADOS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "RECURSOS_ASIGNADOS";
	$fdata["GoodName"] = "RECURSOS_ASIGNADOS";
	$fdata["ownerTable"] = "q_recursos_gestor_c1";
	$fdata["Label"] = GetFieldLabel("q_info_inversion","RECURSOS_ASIGNADOS");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "RECURSOS_ASIGNADOS";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RECURSOS_ASIGNADOS";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Currency");
							
	
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
		$fdata["filterTotalFields"] = "RUBRO_ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_info_inversion["RECURSOS_ASIGNADOS"] = $fdata;
		$tdataq_info_inversion[".searchableFields"][] = "RECURSOS_ASIGNADOS";
//	DEP_003
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "DEP_003";
	$fdata["GoodName"] = "DEP_003";
	$fdata["ownerTable"] = "q_recursos_gestor_c1";
	$fdata["Label"] = GetFieldLabel("q_info_inversion","DEP_003");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "DEP_003";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEP_003";

	
	
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


	$tdataq_info_inversion["DEP_003"] = $fdata;
		$tdataq_info_inversion[".searchableFields"][] = "DEP_003";
//	RESPONSABLE_003
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "RESPONSABLE_003";
	$fdata["GoodName"] = "RESPONSABLE_003";
	$fdata["ownerTable"] = "q_recursos_gestor_c1";
	$fdata["Label"] = GetFieldLabel("q_info_inversion","RESPONSABLE_003");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "RESPONSABLE_003";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RESPONSABLE_003";

	
	
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

	
		
	$edata["LinkField"] = "idusrglobal";
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


	$tdataq_info_inversion["RESPONSABLE_003"] = $fdata;
		$tdataq_info_inversion[".searchableFields"][] = "RESPONSABLE_003";
//	PROGRAMADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "PROGRAMADO";
	$fdata["GoodName"] = "PROGRAMADO";
	$fdata["ownerTable"] = "q_recursos_gestor_c1";
	$fdata["Label"] = GetFieldLabel("q_info_inversion","PROGRAMADO");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "PROGRAMADO";

		$fdata["sourceSingle"] = "PROGRAMADO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PROGRAMADO";

	
	
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


	$tdataq_info_inversion["PROGRAMADO"] = $fdata;
		$tdataq_info_inversion[".searchableFields"][] = "PROGRAMADO";
//	SALDO_PROG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "SALDO_PROG";
	$fdata["GoodName"] = "SALDO_PROG";
	$fdata["ownerTable"] = "q_recursos_gestor_c1";
	$fdata["Label"] = GetFieldLabel("q_info_inversion","SALDO_PROG");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "SALDO_PROG";

		$fdata["sourceSingle"] = "SALDO_PROG";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SALDO_PROG";

	
	
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


	$tdataq_info_inversion["SALDO_PROG"] = $fdata;
		$tdataq_info_inversion[".searchableFields"][] = "SALDO_PROG";


$tables_data["q_info_inversion"]=&$tdataq_info_inversion;
$field_labels["q_info_inversion"] = &$fieldLabelsq_info_inversion;
$fieldToolTips["q_info_inversion"] = &$fieldToolTipsq_info_inversion;
$placeHolders["q_info_inversion"] = &$placeHoldersq_info_inversion;
$page_titles["q_info_inversion"] = &$pageTitlesq_info_inversion;


changeTextControlsToDate( "q_info_inversion" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["q_info_inversion"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["q_info_inversion"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="paa_master";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="paa_master_stat_0";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "paa_master_stat_0";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["q_info_inversion"][0] = $masterParams;
				$masterTablesData["q_info_inversion"][0]["masterKeys"] = array();
	$masterTablesData["q_info_inversion"][0]["masterKeys"][]="ACT_ID";
				$masterTablesData["q_info_inversion"][0]["detailKeys"] = array();
	$masterTablesData["q_info_inversion"][0]["detailKeys"][]="ACT_ID";
		
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
					$masterTablesData["q_info_inversion"][1] = $masterParams;
				$masterTablesData["q_info_inversion"][1]["masterKeys"] = array();
	$masterTablesData["q_info_inversion"][1]["masterKeys"][]="ACT_ID";
				$masterTablesData["q_info_inversion"][1]["detailKeys"] = array();
	$masterTablesData["q_info_inversion"][1]["detailKeys"][]="ACT_ID";
		
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
					$masterTablesData["q_info_inversion"][2] = $masterParams;
				$masterTablesData["q_info_inversion"][2]["masterKeys"] = array();
	$masterTablesData["q_info_inversion"][2]["masterKeys"][]="ACT_ID";
				$masterTablesData["q_info_inversion"][2]["detailKeys"] = array();
	$masterTablesData["q_info_inversion"][2]["detailKeys"][]="ACT_ID";
		
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
					$masterTablesData["q_info_inversion"][3] = $masterParams;
				$masterTablesData["q_info_inversion"][3]["masterKeys"] = array();
	$masterTablesData["q_info_inversion"][3]["masterKeys"][]="ACT_ID";
				$masterTablesData["q_info_inversion"][3]["detailKeys"] = array();
	$masterTablesData["q_info_inversion"][3]["detailKeys"][]="ACT_ID";
		
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
					$masterTablesData["q_info_inversion"][4] = $masterParams;
				$masterTablesData["q_info_inversion"][4]["masterKeys"] = array();
	$masterTablesData["q_info_inversion"][4]["masterKeys"][]="ACT_ID";
				$masterTablesData["q_info_inversion"][4]["detailKeys"] = array();
	$masterTablesData["q_info_inversion"][4]["detailKeys"][]="ACT_ID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_q_info_inversion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "RUBRO_ID,  	VIGENCIA,  	UEJ,  	DESCRIPCION,  	PRESUPUESTO_000,  	RUBRO_001,  	RUBRO,  	DESCRIPCION_001,  	REC_001,  	BPIN,  	PRESUPUESTO_001,  	DEP_001,  	PROD_ID,  	PRODUCTO,  	DESCRIPCION_002,  	PRESUPUESTO_002,  	REC_002,  	DEP_002,  	RESPONSABLE_002,  	ACT_ID,  	ACTIVIDAD,  	META,  	RECURSOS_ASIGNADOS,  	DEP_003,  	RESPONSABLE_003,  	PROGRAMADO,  	SALDO_PROG";
$proto0["m_strFrom"] = "FROM q_recursos_gestor_c1";
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
	"m_strTable" => "q_recursos_gestor_c1",
	"m_srcTableName" => "q_info_inversion"
));

$proto6["m_sql"] = "RUBRO_ID";
$proto6["m_srcTableName"] = "q_info_inversion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "VIGENCIA",
	"m_strTable" => "q_recursos_gestor_c1",
	"m_srcTableName" => "q_info_inversion"
));

$proto8["m_sql"] = "VIGENCIA";
$proto8["m_srcTableName"] = "q_info_inversion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "UEJ",
	"m_strTable" => "q_recursos_gestor_c1",
	"m_srcTableName" => "q_info_inversion"
));

$proto10["m_sql"] = "UEJ";
$proto10["m_srcTableName"] = "q_info_inversion";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION",
	"m_strTable" => "q_recursos_gestor_c1",
	"m_srcTableName" => "q_info_inversion"
));

$proto12["m_sql"] = "DESCRIPCION";
$proto12["m_srcTableName"] = "q_info_inversion";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "PRESUPUESTO_000",
	"m_strTable" => "q_recursos_gestor_c1",
	"m_srcTableName" => "q_info_inversion"
));

$proto14["m_sql"] = "PRESUPUESTO_000";
$proto14["m_srcTableName"] = "q_info_inversion";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "RUBRO_001",
	"m_strTable" => "q_recursos_gestor_c1",
	"m_srcTableName" => "q_info_inversion"
));

$proto16["m_sql"] = "RUBRO_001";
$proto16["m_srcTableName"] = "q_info_inversion";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "RUBRO",
	"m_strTable" => "q_recursos_gestor_c1",
	"m_srcTableName" => "q_info_inversion"
));

$proto18["m_sql"] = "RUBRO";
$proto18["m_srcTableName"] = "q_info_inversion";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION_001",
	"m_strTable" => "q_recursos_gestor_c1",
	"m_srcTableName" => "q_info_inversion"
));

$proto20["m_sql"] = "DESCRIPCION_001";
$proto20["m_srcTableName"] = "q_info_inversion";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "REC_001",
	"m_strTable" => "q_recursos_gestor_c1",
	"m_srcTableName" => "q_info_inversion"
));

$proto22["m_sql"] = "REC_001";
$proto22["m_srcTableName"] = "q_info_inversion";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "BPIN",
	"m_strTable" => "q_recursos_gestor_c1",
	"m_srcTableName" => "q_info_inversion"
));

$proto24["m_sql"] = "BPIN";
$proto24["m_srcTableName"] = "q_info_inversion";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "PRESUPUESTO_001",
	"m_strTable" => "q_recursos_gestor_c1",
	"m_srcTableName" => "q_info_inversion"
));

$proto26["m_sql"] = "PRESUPUESTO_001";
$proto26["m_srcTableName"] = "q_info_inversion";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "DEP_001",
	"m_strTable" => "q_recursos_gestor_c1",
	"m_srcTableName" => "q_info_inversion"
));

$proto28["m_sql"] = "DEP_001";
$proto28["m_srcTableName"] = "q_info_inversion";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "PROD_ID",
	"m_strTable" => "q_recursos_gestor_c1",
	"m_srcTableName" => "q_info_inversion"
));

$proto30["m_sql"] = "PROD_ID";
$proto30["m_srcTableName"] = "q_info_inversion";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "PRODUCTO",
	"m_strTable" => "q_recursos_gestor_c1",
	"m_srcTableName" => "q_info_inversion"
));

$proto32["m_sql"] = "PRODUCTO";
$proto32["m_srcTableName"] = "q_info_inversion";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION_002",
	"m_strTable" => "q_recursos_gestor_c1",
	"m_srcTableName" => "q_info_inversion"
));

$proto34["m_sql"] = "DESCRIPCION_002";
$proto34["m_srcTableName"] = "q_info_inversion";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "PRESUPUESTO_002",
	"m_strTable" => "q_recursos_gestor_c1",
	"m_srcTableName" => "q_info_inversion"
));

$proto36["m_sql"] = "PRESUPUESTO_002";
$proto36["m_srcTableName"] = "q_info_inversion";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "REC_002",
	"m_strTable" => "q_recursos_gestor_c1",
	"m_srcTableName" => "q_info_inversion"
));

$proto38["m_sql"] = "REC_002";
$proto38["m_srcTableName"] = "q_info_inversion";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "DEP_002",
	"m_strTable" => "q_recursos_gestor_c1",
	"m_srcTableName" => "q_info_inversion"
));

$proto40["m_sql"] = "DEP_002";
$proto40["m_srcTableName"] = "q_info_inversion";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "RESPONSABLE_002",
	"m_strTable" => "q_recursos_gestor_c1",
	"m_srcTableName" => "q_info_inversion"
));

$proto42["m_sql"] = "RESPONSABLE_002";
$proto42["m_srcTableName"] = "q_info_inversion";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_ID",
	"m_strTable" => "q_recursos_gestor_c1",
	"m_srcTableName" => "q_info_inversion"
));

$proto44["m_sql"] = "ACT_ID";
$proto44["m_srcTableName"] = "q_info_inversion";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "ACTIVIDAD",
	"m_strTable" => "q_recursos_gestor_c1",
	"m_srcTableName" => "q_info_inversion"
));

$proto46["m_sql"] = "ACTIVIDAD";
$proto46["m_srcTableName"] = "q_info_inversion";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "META",
	"m_strTable" => "q_recursos_gestor_c1",
	"m_srcTableName" => "q_info_inversion"
));

$proto48["m_sql"] = "META";
$proto48["m_srcTableName"] = "q_info_inversion";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "RECURSOS_ASIGNADOS",
	"m_strTable" => "q_recursos_gestor_c1",
	"m_srcTableName" => "q_info_inversion"
));

$proto50["m_sql"] = "RECURSOS_ASIGNADOS";
$proto50["m_srcTableName"] = "q_info_inversion";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "DEP_003",
	"m_strTable" => "q_recursos_gestor_c1",
	"m_srcTableName" => "q_info_inversion"
));

$proto52["m_sql"] = "DEP_003";
$proto52["m_srcTableName"] = "q_info_inversion";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "RESPONSABLE_003",
	"m_strTable" => "q_recursos_gestor_c1",
	"m_srcTableName" => "q_info_inversion"
));

$proto54["m_sql"] = "RESPONSABLE_003";
$proto54["m_srcTableName"] = "q_info_inversion";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "PROGRAMADO",
	"m_strTable" => "q_recursos_gestor_c1",
	"m_srcTableName" => "q_info_inversion"
));

$proto56["m_sql"] = "PROGRAMADO";
$proto56["m_srcTableName"] = "q_info_inversion";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "SALDO_PROG",
	"m_strTable" => "q_recursos_gestor_c1",
	"m_srcTableName" => "q_info_inversion"
));

$proto58["m_sql"] = "SALDO_PROG";
$proto58["m_srcTableName"] = "q_info_inversion";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto60=array();
$proto60["m_link"] = "SQLL_MAIN";
			$proto61=array();
$proto61["m_strName"] = "q_recursos_gestor_c1";
$proto61["m_srcTableName"] = "q_info_inversion";
$proto61["m_columns"] = array();
$proto61["m_columns"][] = "RUBRO_ID";
$proto61["m_columns"][] = "VIGENCIA";
$proto61["m_columns"][] = "UEJ";
$proto61["m_columns"][] = "DESCRIPCION";
$proto61["m_columns"][] = "PRESUPUESTO_000";
$proto61["m_columns"][] = "RUBRO_001";
$proto61["m_columns"][] = "RUBRO";
$proto61["m_columns"][] = "DESCRIPCION_001";
$proto61["m_columns"][] = "REC_001";
$proto61["m_columns"][] = "BPIN";
$proto61["m_columns"][] = "PRESUPUESTO_001";
$proto61["m_columns"][] = "DEP_001";
$proto61["m_columns"][] = "PROD_ID";
$proto61["m_columns"][] = "PRODUCTO";
$proto61["m_columns"][] = "DESCRIPCION_002";
$proto61["m_columns"][] = "PRESUPUESTO_002";
$proto61["m_columns"][] = "REC_002";
$proto61["m_columns"][] = "DEP_002";
$proto61["m_columns"][] = "RESPONSABLE_002";
$proto61["m_columns"][] = "ACT_ID";
$proto61["m_columns"][] = "ACTIVIDAD";
$proto61["m_columns"][] = "META";
$proto61["m_columns"][] = "RECURSOS_ASIGNADOS";
$proto61["m_columns"][] = "DEP_003";
$proto61["m_columns"][] = "RESPONSABLE_003";
$proto61["m_columns"][] = "PROGRAMADO";
$proto61["m_columns"][] = "SALDO_PROG";
$obj = new SQLTable($proto61);

$proto60["m_table"] = $obj;
$proto60["m_sql"] = "q_recursos_gestor_c1";
$proto60["m_alias"] = "";
$proto60["m_srcTableName"] = "q_info_inversion";
$proto62=array();
$proto62["m_sql"] = "";
$proto62["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto62["m_column"]=$obj;
$proto62["m_contained"] = array();
$proto62["m_strCase"] = "";
$proto62["m_havingmode"] = false;
$proto62["m_inBrackets"] = false;
$proto62["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto62);

$proto60["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto60);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="q_info_inversion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_info_inversion = createSqlQuery_q_info_inversion();


	
										;

																											

$tdataq_info_inversion[".sqlquery"] = $queryData_q_info_inversion;



$tdataq_info_inversion[".hasEvents"] = false;

?>