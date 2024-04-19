<?php
$tdataq_info_paa = array();
$tdataq_info_paa[".searchableFields"] = array();
$tdataq_info_paa[".ShortName"] = "q_info_paa";
$tdataq_info_paa[".OwnerID"] = "";
$tdataq_info_paa[".OriginalTable"] = "q_info_paa";


$tdataq_info_paa[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataq_info_paa[".originalPagesByType"] = $tdataq_info_paa[".pagesByType"];
$tdataq_info_paa[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataq_info_paa[".originalPages"] = $tdataq_info_paa[".pages"];
$tdataq_info_paa[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataq_info_paa[".originalDefaultPages"] = $tdataq_info_paa[".defaultPages"];

//	field labels
$fieldLabelsq_info_paa = array();
$fieldToolTipsq_info_paa = array();
$pageTitlesq_info_paa = array();
$placeHoldersq_info_paa = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_info_paa["Spanish"] = array();
	$fieldToolTipsq_info_paa["Spanish"] = array();
	$placeHoldersq_info_paa["Spanish"] = array();
	$pageTitlesq_info_paa["Spanish"] = array();
	$fieldLabelsq_info_paa["Spanish"]["PAA_ID"] = "PAA ID";
	$fieldToolTipsq_info_paa["Spanish"]["PAA_ID"] = "";
	$placeHoldersq_info_paa["Spanish"]["PAA_ID"] = "";
	$fieldLabelsq_info_paa["Spanish"]["ACT_ID"] = "ACT ID";
	$fieldToolTipsq_info_paa["Spanish"]["ACT_ID"] = "";
	$placeHoldersq_info_paa["Spanish"]["ACT_ID"] = "";
	$fieldLabelsq_info_paa["Spanish"]["PROD_ID"] = "PROD ID";
	$fieldToolTipsq_info_paa["Spanish"]["PROD_ID"] = "";
	$placeHoldersq_info_paa["Spanish"]["PROD_ID"] = "";
	$fieldLabelsq_info_paa["Spanish"]["COD_UNSPSC"] = "COD UNSPSC";
	$fieldToolTipsq_info_paa["Spanish"]["COD_UNSPSC"] = "";
	$placeHoldersq_info_paa["Spanish"]["COD_UNSPSC"] = "";
	$fieldLabelsq_info_paa["Spanish"]["DESCRIPCION_PAA"] = "DESCRIPCION";
	$fieldToolTipsq_info_paa["Spanish"]["DESCRIPCION_PAA"] = "";
	$placeHoldersq_info_paa["Spanish"]["DESCRIPCION_PAA"] = "";
	$fieldLabelsq_info_paa["Spanish"]["DESCRIPCION_PAA_F"] = "DESCRIPCION PAA F";
	$fieldToolTipsq_info_paa["Spanish"]["DESCRIPCION_PAA_F"] = "";
	$placeHoldersq_info_paa["Spanish"]["DESCRIPCION_PAA_F"] = "";
	$fieldLabelsq_info_paa["Spanish"]["MES_INICIO"] = "MES INICIO";
	$fieldToolTipsq_info_paa["Spanish"]["MES_INICIO"] = "";
	$placeHoldersq_info_paa["Spanish"]["MES_INICIO"] = "";
	$fieldLabelsq_info_paa["Spanish"]["MES_PRESENTA"] = "MES PRESENTA";
	$fieldToolTipsq_info_paa["Spanish"]["MES_PRESENTA"] = "";
	$placeHoldersq_info_paa["Spanish"]["MES_PRESENTA"] = "";
	$fieldLabelsq_info_paa["Spanish"]["DURACION_CONTRATO"] = "DURACION CONTRATO";
	$fieldToolTipsq_info_paa["Spanish"]["DURACION_CONTRATO"] = "";
	$placeHoldersq_info_paa["Spanish"]["DURACION_CONTRATO"] = "";
	$fieldLabelsq_info_paa["Spanish"]["DURACION_ESTIMADA_DMA"] = "DURACION ESTIMADA DMA";
	$fieldToolTipsq_info_paa["Spanish"]["DURACION_ESTIMADA_DMA"] = "";
	$placeHoldersq_info_paa["Spanish"]["DURACION_ESTIMADA_DMA"] = "";
	$fieldLabelsq_info_paa["Spanish"]["MODALIDAD"] = "MODALIDAD";
	$fieldToolTipsq_info_paa["Spanish"]["MODALIDAD"] = "";
	$placeHoldersq_info_paa["Spanish"]["MODALIDAD"] = "";
	$fieldLabelsq_info_paa["Spanish"]["FUENTE_RECURSOS"] = "FUENTE RECURSOS";
	$fieldToolTipsq_info_paa["Spanish"]["FUENTE_RECURSOS"] = "";
	$placeHoldersq_info_paa["Spanish"]["FUENTE_RECURSOS"] = "";
	$fieldLabelsq_info_paa["Spanish"]["VALOR_SOLICITADO"] = "VALOR SOLICITADO";
	$fieldToolTipsq_info_paa["Spanish"]["VALOR_SOLICITADO"] = "";
	$placeHoldersq_info_paa["Spanish"]["VALOR_SOLICITADO"] = "";
	$fieldLabelsq_info_paa["Spanish"]["vigencia"] = "Vigencia";
	$fieldToolTipsq_info_paa["Spanish"]["vigencia"] = "";
	$placeHoldersq_info_paa["Spanish"]["vigencia"] = "";
	$fieldLabelsq_info_paa["Spanish"]["PROD_RUBRO"] = "PROD RUBRO";
	$fieldToolTipsq_info_paa["Spanish"]["PROD_RUBRO"] = "";
	$placeHoldersq_info_paa["Spanish"]["PROD_RUBRO"] = "";
	$fieldLabelsq_info_paa["Spanish"]["PROD_PRODUCTO"] = "PROD PRODUCTO";
	$fieldToolTipsq_info_paa["Spanish"]["PROD_PRODUCTO"] = "";
	$placeHoldersq_info_paa["Spanish"]["PROD_PRODUCTO"] = "";
	$fieldLabelsq_info_paa["Spanish"]["PROD_DESCRIPCION"] = "PROD DESCRIPCION";
	$fieldToolTipsq_info_paa["Spanish"]["PROD_DESCRIPCION"] = "";
	$placeHoldersq_info_paa["Spanish"]["PROD_DESCRIPCION"] = "";
	$fieldLabelsq_info_paa["Spanish"]["PROD_DEP"] = "PROD DEP";
	$fieldToolTipsq_info_paa["Spanish"]["PROD_DEP"] = "";
	$placeHoldersq_info_paa["Spanish"]["PROD_DEP"] = "";
	$fieldLabelsq_info_paa["Spanish"]["PROD_USUARIORESP"] = "PROD USUARIORESP";
	$fieldToolTipsq_info_paa["Spanish"]["PROD_USUARIORESP"] = "";
	$placeHoldersq_info_paa["Spanish"]["PROD_USUARIORESP"] = "";
	$fieldLabelsq_info_paa["Spanish"]["ACT_VIGENCIA"] = "ACT VIGENCIA";
	$fieldToolTipsq_info_paa["Spanish"]["ACT_VIGENCIA"] = "";
	$placeHoldersq_info_paa["Spanish"]["ACT_VIGENCIA"] = "";
	$fieldLabelsq_info_paa["Spanish"]["ACT_TIPO"] = "ACT TIPO";
	$fieldToolTipsq_info_paa["Spanish"]["ACT_TIPO"] = "";
	$placeHoldersq_info_paa["Spanish"]["ACT_TIPO"] = "";
	$fieldLabelsq_info_paa["Spanish"]["ACT_UEJ"] = "ACT UEJ";
	$fieldToolTipsq_info_paa["Spanish"]["ACT_UEJ"] = "";
	$placeHoldersq_info_paa["Spanish"]["ACT_UEJ"] = "";
	$fieldLabelsq_info_paa["Spanish"]["ACT_RUBRO"] = "ACT RUBRO";
	$fieldToolTipsq_info_paa["Spanish"]["ACT_RUBRO"] = "";
	$placeHoldersq_info_paa["Spanish"]["ACT_RUBRO"] = "";
	$fieldLabelsq_info_paa["Spanish"]["ACT_PRODUCTO"] = "ACT PRODUCTO";
	$fieldToolTipsq_info_paa["Spanish"]["ACT_PRODUCTO"] = "";
	$placeHoldersq_info_paa["Spanish"]["ACT_PRODUCTO"] = "";
	$fieldLabelsq_info_paa["Spanish"]["ACT_ACTIVIDAD"] = "ACT ACTIVIDAD";
	$fieldToolTipsq_info_paa["Spanish"]["ACT_ACTIVIDAD"] = "";
	$placeHoldersq_info_paa["Spanish"]["ACT_ACTIVIDAD"] = "";
	$fieldLabelsq_info_paa["Spanish"]["ACT_RECURSOS_aCTIVIDAD"] = "ACT RECURSOS ACTIVIDAD";
	$fieldToolTipsq_info_paa["Spanish"]["ACT_RECURSOS_aCTIVIDAD"] = "";
	$placeHoldersq_info_paa["Spanish"]["ACT_RECURSOS_aCTIVIDAD"] = "";
	$fieldLabelsq_info_paa["Spanish"]["RUBRO_ID_FK"] = "RUBRO ID FK";
	$fieldToolTipsq_info_paa["Spanish"]["RUBRO_ID_FK"] = "";
	$placeHoldersq_info_paa["Spanish"]["RUBRO_ID_FK"] = "";
	$fieldLabelsq_info_paa["Spanish"]["REC_F"] = "REC F";
	$fieldToolTipsq_info_paa["Spanish"]["REC_F"] = "";
	$placeHoldersq_info_paa["Spanish"]["REC_F"] = "";
	$fieldLabelsq_info_paa["Spanish"]["REC_C"] = "REC C";
	$fieldToolTipsq_info_paa["Spanish"]["REC_C"] = "";
	$placeHoldersq_info_paa["Spanish"]["REC_C"] = "";
	$fieldLabelsq_info_paa["Spanish"]["TIPO"] = "TIPO";
	$fieldToolTipsq_info_paa["Spanish"]["TIPO"] = "";
	$placeHoldersq_info_paa["Spanish"]["TIPO"] = "";
	$fieldLabelsq_info_paa["Spanish"]["ct_integrado"] = "Ct Integrado";
	$fieldToolTipsq_info_paa["Spanish"]["ct_integrado"] = "";
	$placeHoldersq_info_paa["Spanish"]["ct_integrado"] = "";
	$fieldLabelsq_info_paa["Spanish"]["PAAID_INTEGRADO"] = "PAAID INTEGRADO";
	$fieldToolTipsq_info_paa["Spanish"]["PAAID_INTEGRADO"] = "";
	$placeHoldersq_info_paa["Spanish"]["PAAID_INTEGRADO"] = "";
	$fieldLabelsq_info_paa["Spanish"]["sys_user"] = "Sys User";
	$fieldToolTipsq_info_paa["Spanish"]["sys_user"] = "";
	$placeHoldersq_info_paa["Spanish"]["sys_user"] = "";
	$fieldLabelsq_info_paa["Spanish"]["transferir_a"] = "Transferir A";
	$fieldToolTipsq_info_paa["Spanish"]["transferir_a"] = "";
	$placeHoldersq_info_paa["Spanish"]["transferir_a"] = "";
	$fieldLabelsq_info_paa["Spanish"]["patrimonio"] = "Patrimonio";
	$fieldToolTipsq_info_paa["Spanish"]["patrimonio"] = "";
	$placeHoldersq_info_paa["Spanish"]["patrimonio"] = "";
	$fieldLabelsq_info_paa["Spanish"]["PROD_UEJ"] = "PROD UEJ";
	$fieldToolTipsq_info_paa["Spanish"]["PROD_UEJ"] = "";
	$placeHoldersq_info_paa["Spanish"]["PROD_UEJ"] = "";
	$fieldLabelsq_info_paa["Spanish"]["UNIDAD_CONTRATACION"] = "UNIDAD CONTRATACION";
	$fieldToolTipsq_info_paa["Spanish"]["UNIDAD_CONTRATACION"] = "";
	$placeHoldersq_info_paa["Spanish"]["UNIDAD_CONTRATACION"] = "";
	$fieldLabelsq_info_paa["Spanish"]["CDP_INTEGRADO"] = "CDP INTEGRADO";
	$fieldToolTipsq_info_paa["Spanish"]["CDP_INTEGRADO"] = "";
	$placeHoldersq_info_paa["Spanish"]["CDP_INTEGRADO"] = "";
	if (count($fieldToolTipsq_info_paa["Spanish"]))
		$tdataq_info_paa[".isUseToolTips"] = true;
}


	$tdataq_info_paa[".NCSearch"] = true;



$tdataq_info_paa[".shortTableName"] = "q_info_paa";
$tdataq_info_paa[".nSecOptions"] = 0;

$tdataq_info_paa[".mainTableOwnerID"] = "";
$tdataq_info_paa[".entityType"] = 0;
$tdataq_info_paa[".connId"] = "mincit_global_20x_at_127_0_0_1";


$tdataq_info_paa[".strOriginalTableName"] = "q_info_paa";

	



$tdataq_info_paa[".showAddInPopup"] = false;

$tdataq_info_paa[".showEditInPopup"] = false;

$tdataq_info_paa[".showViewInPopup"] = false;

$tdataq_info_paa[".listAjax"] = false;
//	temporary
//$tdataq_info_paa[".listAjax"] = false;

	$tdataq_info_paa[".audit"] = true;

	$tdataq_info_paa[".locking"] = true;


$pages = $tdataq_info_paa[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_info_paa[".edit"] = true;
	$tdataq_info_paa[".afterEditAction"] = 1;
	$tdataq_info_paa[".closePopupAfterEdit"] = 1;
	$tdataq_info_paa[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_info_paa[".add"] = true;
$tdataq_info_paa[".afterAddAction"] = 1;
$tdataq_info_paa[".closePopupAfterAdd"] = 1;
$tdataq_info_paa[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_info_paa[".list"] = true;
}



$tdataq_info_paa[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_info_paa[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_info_paa[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_info_paa[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_info_paa[".printFriendly"] = true;
}



$tdataq_info_paa[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_info_paa[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_info_paa[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_info_paa[".isUseAjaxSuggest"] = true;



																																				

$tdataq_info_paa[".ajaxCodeSnippetAdded"] = false;

$tdataq_info_paa[".buttonsAdded"] = false;

$tdataq_info_paa[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_info_paa[".isUseTimeForSearch"] = false;


$tdataq_info_paa[".badgeColor"] = "804000";


$tdataq_info_paa[".allSearchFields"] = array();
$tdataq_info_paa[".filterFields"] = array();
$tdataq_info_paa[".requiredSearchFields"] = array();

$tdataq_info_paa[".googleLikeFields"] = array();
$tdataq_info_paa[".googleLikeFields"][] = "PAA_ID";
$tdataq_info_paa[".googleLikeFields"][] = "PAAID_INTEGRADO";
$tdataq_info_paa[".googleLikeFields"][] = "ACT_ID";
$tdataq_info_paa[".googleLikeFields"][] = "PROD_ID";
$tdataq_info_paa[".googleLikeFields"][] = "COD_UNSPSC";
$tdataq_info_paa[".googleLikeFields"][] = "DESCRIPCION_PAA";
$tdataq_info_paa[".googleLikeFields"][] = "DESCRIPCION_PAA_F";
$tdataq_info_paa[".googleLikeFields"][] = "MES_INICIO";
$tdataq_info_paa[".googleLikeFields"][] = "MES_PRESENTA";
$tdataq_info_paa[".googleLikeFields"][] = "DURACION_CONTRATO";
$tdataq_info_paa[".googleLikeFields"][] = "DURACION_ESTIMADA_DMA";
$tdataq_info_paa[".googleLikeFields"][] = "MODALIDAD";
$tdataq_info_paa[".googleLikeFields"][] = "FUENTE_RECURSOS";
$tdataq_info_paa[".googleLikeFields"][] = "VALOR_SOLICITADO";
$tdataq_info_paa[".googleLikeFields"][] = "vigencia";
$tdataq_info_paa[".googleLikeFields"][] = "PROD_UEJ";
$tdataq_info_paa[".googleLikeFields"][] = "PROD_RUBRO";
$tdataq_info_paa[".googleLikeFields"][] = "PROD_PRODUCTO";
$tdataq_info_paa[".googleLikeFields"][] = "PROD_DESCRIPCION";
$tdataq_info_paa[".googleLikeFields"][] = "PROD_DEP";
$tdataq_info_paa[".googleLikeFields"][] = "PROD_USUARIORESP";
$tdataq_info_paa[".googleLikeFields"][] = "ACT_VIGENCIA";
$tdataq_info_paa[".googleLikeFields"][] = "ACT_TIPO";
$tdataq_info_paa[".googleLikeFields"][] = "ACT_UEJ";
$tdataq_info_paa[".googleLikeFields"][] = "ACT_RUBRO";
$tdataq_info_paa[".googleLikeFields"][] = "ACT_PRODUCTO";
$tdataq_info_paa[".googleLikeFields"][] = "ACT_ACTIVIDAD";
$tdataq_info_paa[".googleLikeFields"][] = "ACT_RECURSOS_aCTIVIDAD";
$tdataq_info_paa[".googleLikeFields"][] = "RUBRO_ID_FK";
$tdataq_info_paa[".googleLikeFields"][] = "REC_F";
$tdataq_info_paa[".googleLikeFields"][] = "REC_C";
$tdataq_info_paa[".googleLikeFields"][] = "TIPO";
$tdataq_info_paa[".googleLikeFields"][] = "ct_integrado";
$tdataq_info_paa[".googleLikeFields"][] = "sys_user";
$tdataq_info_paa[".googleLikeFields"][] = "transferir_a";
$tdataq_info_paa[".googleLikeFields"][] = "patrimonio";
$tdataq_info_paa[".googleLikeFields"][] = "UNIDAD_CONTRATACION";
$tdataq_info_paa[".googleLikeFields"][] = "CDP_INTEGRADO";



$tdataq_info_paa[".tableType"] = "list";

$tdataq_info_paa[".printerPageOrientation"] = 0;
$tdataq_info_paa[".nPrinterPageScale"] = 100;

$tdataq_info_paa[".nPrinterSplitRecords"] = 40;

$tdataq_info_paa[".geocodingEnabled"] = false;










$tdataq_info_paa[".pageSize"] = 20;

$tdataq_info_paa[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataq_info_paa[".strOrderBy"] = $tstrOrderBy;

$tdataq_info_paa[".orderindexes"] = array();


$tdataq_info_paa[".sqlHead"] = "SELECT PAA_ID,  	PAAID_INTEGRADO,  	ACT_ID,  	PROD_ID,  	COD_UNSPSC,  	DESCRIPCION_PAA,  	DESCRIPCION_PAA_F,  	MES_INICIO,  	MES_PRESENTA,  	DURACION_CONTRATO,  	DURACION_ESTIMADA_DMA,  	MODALIDAD,  	FUENTE_RECURSOS,  	VALOR_SOLICITADO,  	vigencia,  	PROD_UEJ,  	PROD_RUBRO,  	PROD_PRODUCTO,  	PROD_DESCRIPCION,  	PROD_DEP,  	PROD_USUARIORESP,  	ACT_VIGENCIA,  	ACT_TIPO,  	ACT_UEJ,  	ACT_RUBRO,  	ACT_PRODUCTO,  	ACT_ACTIVIDAD,  	ACT_RECURSOS_aCTIVIDAD,  	RUBRO_ID_FK,  	REC_F,  	REC_C,  	TIPO,  	ct_integrado,  	sys_user,  	transferir_a,  	patrimonio,  	UNIDAD_CONTRATACION,  	CDP_INTEGRADO";
$tdataq_info_paa[".sqlFrom"] = "FROM q_info_paa";
$tdataq_info_paa[".sqlWhereExpr"] = "";
$tdataq_info_paa[".sqlTail"] = "";

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
$tdataq_info_paa[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_info_paa[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_info_paa[".arrGroupsPerPage"] = $arrGPP;

$tdataq_info_paa[".highlightSearchResults"] = true;

$tableKeysq_info_paa = array();
$tdataq_info_paa[".Keys"] = $tableKeysq_info_paa;


$tdataq_info_paa[".hideMobileList"] = array();




//	PAA_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PAA_ID";
	$fdata["GoodName"] = "PAA_ID";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa","PAA_ID");
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


	$tdataq_info_paa["PAA_ID"] = $fdata;
		$tdataq_info_paa[".searchableFields"][] = "PAA_ID";
//	PAAID_INTEGRADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PAAID_INTEGRADO";
	$fdata["GoodName"] = "PAAID_INTEGRADO";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa","PAAID_INTEGRADO");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "PAAID_INTEGRADO";

		$fdata["sourceSingle"] = "PAAID_INTEGRADO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PAAID_INTEGRADO";

	
	
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


	$tdataq_info_paa["PAAID_INTEGRADO"] = $fdata;
		$tdataq_info_paa[".searchableFields"][] = "PAAID_INTEGRADO";
//	ACT_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ACT_ID";
	$fdata["GoodName"] = "ACT_ID";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa","ACT_ID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ACT_ID";

		$fdata["sourceSingle"] = "ACT_ID";

	
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


	$tdataq_info_paa["ACT_ID"] = $fdata;
		$tdataq_info_paa[".searchableFields"][] = "ACT_ID";
//	PROD_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PROD_ID";
	$fdata["GoodName"] = "PROD_ID";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa","PROD_ID");
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


	$tdataq_info_paa["PROD_ID"] = $fdata;
		$tdataq_info_paa[".searchableFields"][] = "PROD_ID";
//	COD_UNSPSC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "COD_UNSPSC";
	$fdata["GoodName"] = "COD_UNSPSC";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa","COD_UNSPSC");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "COD_UNSPSC";

		$fdata["sourceSingle"] = "COD_UNSPSC";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COD_UNSPSC";

	
	
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
			$edata["EditParams"].= " maxlength=1000";

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


	$tdataq_info_paa["COD_UNSPSC"] = $fdata;
		$tdataq_info_paa[".searchableFields"][] = "COD_UNSPSC";
//	DESCRIPCION_PAA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DESCRIPCION_PAA";
	$fdata["GoodName"] = "DESCRIPCION_PAA";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa","DESCRIPCION_PAA");
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


	$tdataq_info_paa["DESCRIPCION_PAA"] = $fdata;
		$tdataq_info_paa[".searchableFields"][] = "DESCRIPCION_PAA";
//	DESCRIPCION_PAA_F
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DESCRIPCION_PAA_F";
	$fdata["GoodName"] = "DESCRIPCION_PAA_F";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa","DESCRIPCION_PAA_F");
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


	$tdataq_info_paa["DESCRIPCION_PAA_F"] = $fdata;
		$tdataq_info_paa[".searchableFields"][] = "DESCRIPCION_PAA_F";
//	MES_INICIO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "MES_INICIO";
	$fdata["GoodName"] = "MES_INICIO";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa","MES_INICIO");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "MES_INICIO";

		$fdata["sourceSingle"] = "MES_INICIO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MES_INICIO";

	
	
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


	$tdataq_info_paa["MES_INICIO"] = $fdata;
		$tdataq_info_paa[".searchableFields"][] = "MES_INICIO";
//	MES_PRESENTA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "MES_PRESENTA";
	$fdata["GoodName"] = "MES_PRESENTA";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa","MES_PRESENTA");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "MES_PRESENTA";

		$fdata["sourceSingle"] = "MES_PRESENTA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MES_PRESENTA";

	
	
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


	$tdataq_info_paa["MES_PRESENTA"] = $fdata;
		$tdataq_info_paa[".searchableFields"][] = "MES_PRESENTA";
//	DURACION_CONTRATO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "DURACION_CONTRATO";
	$fdata["GoodName"] = "DURACION_CONTRATO";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa","DURACION_CONTRATO");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "DURACION_CONTRATO";

		$fdata["sourceSingle"] = "DURACION_CONTRATO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DURACION_CONTRATO";

	
	
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


	$tdataq_info_paa["DURACION_CONTRATO"] = $fdata;
		$tdataq_info_paa[".searchableFields"][] = "DURACION_CONTRATO";
//	DURACION_ESTIMADA_DMA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "DURACION_ESTIMADA_DMA";
	$fdata["GoodName"] = "DURACION_ESTIMADA_DMA";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa","DURACION_ESTIMADA_DMA");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "DURACION_ESTIMADA_DMA";

		$fdata["sourceSingle"] = "DURACION_ESTIMADA_DMA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DURACION_ESTIMADA_DMA";

	
	
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


	$tdataq_info_paa["DURACION_ESTIMADA_DMA"] = $fdata;
		$tdataq_info_paa[".searchableFields"][] = "DURACION_ESTIMADA_DMA";
//	MODALIDAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "MODALIDAD";
	$fdata["GoodName"] = "MODALIDAD";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa","MODALIDAD");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "MODALIDAD";

		$fdata["sourceSingle"] = "MODALIDAD";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MODALIDAD";

	
	
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
			$edata["EditParams"].= " maxlength=15";

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


	$tdataq_info_paa["MODALIDAD"] = $fdata;
		$tdataq_info_paa[".searchableFields"][] = "MODALIDAD";
//	FUENTE_RECURSOS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "FUENTE_RECURSOS";
	$fdata["GoodName"] = "FUENTE_RECURSOS";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa","FUENTE_RECURSOS");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "FUENTE_RECURSOS";

		$fdata["sourceSingle"] = "FUENTE_RECURSOS";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FUENTE_RECURSOS";

	
	
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


	$tdataq_info_paa["FUENTE_RECURSOS"] = $fdata;
		$tdataq_info_paa[".searchableFields"][] = "FUENTE_RECURSOS";
//	VALOR_SOLICITADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "VALOR_SOLICITADO";
	$fdata["GoodName"] = "VALOR_SOLICITADO";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa","VALOR_SOLICITADO");
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


	$tdataq_info_paa["VALOR_SOLICITADO"] = $fdata;
		$tdataq_info_paa[".searchableFields"][] = "VALOR_SOLICITADO";
//	vigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "vigencia";
	$fdata["GoodName"] = "vigencia";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa","vigencia");
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


	$tdataq_info_paa["vigencia"] = $fdata;
		$tdataq_info_paa[".searchableFields"][] = "vigencia";
//	PROD_UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "PROD_UEJ";
	$fdata["GoodName"] = "PROD_UEJ";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa","PROD_UEJ");
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


	$tdataq_info_paa["PROD_UEJ"] = $fdata;
		$tdataq_info_paa[".searchableFields"][] = "PROD_UEJ";
//	PROD_RUBRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "PROD_RUBRO";
	$fdata["GoodName"] = "PROD_RUBRO";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa","PROD_RUBRO");
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


	$tdataq_info_paa["PROD_RUBRO"] = $fdata;
		$tdataq_info_paa[".searchableFields"][] = "PROD_RUBRO";
//	PROD_PRODUCTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "PROD_PRODUCTO";
	$fdata["GoodName"] = "PROD_PRODUCTO";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa","PROD_PRODUCTO");
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


	$tdataq_info_paa["PROD_PRODUCTO"] = $fdata;
		$tdataq_info_paa[".searchableFields"][] = "PROD_PRODUCTO";
//	PROD_DESCRIPCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "PROD_DESCRIPCION";
	$fdata["GoodName"] = "PROD_DESCRIPCION";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa","PROD_DESCRIPCION");
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


	$tdataq_info_paa["PROD_DESCRIPCION"] = $fdata;
		$tdataq_info_paa[".searchableFields"][] = "PROD_DESCRIPCION";
//	PROD_DEP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "PROD_DEP";
	$fdata["GoodName"] = "PROD_DEP";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa","PROD_DEP");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "PROD_DEP";

		$fdata["sourceSingle"] = "PROD_DEP";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PROD_DEP";

	
	
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


	$tdataq_info_paa["PROD_DEP"] = $fdata;
		$tdataq_info_paa[".searchableFields"][] = "PROD_DEP";
//	PROD_USUARIORESP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "PROD_USUARIORESP";
	$fdata["GoodName"] = "PROD_USUARIORESP";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa","PROD_USUARIORESP");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PROD_USUARIORESP";

		$fdata["sourceSingle"] = "PROD_USUARIORESP";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PROD_USUARIORESP";

	
	
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


	$tdataq_info_paa["PROD_USUARIORESP"] = $fdata;
		$tdataq_info_paa[".searchableFields"][] = "PROD_USUARIORESP";
//	ACT_VIGENCIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "ACT_VIGENCIA";
	$fdata["GoodName"] = "ACT_VIGENCIA";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa","ACT_VIGENCIA");
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


	$tdataq_info_paa["ACT_VIGENCIA"] = $fdata;
		$tdataq_info_paa[".searchableFields"][] = "ACT_VIGENCIA";
//	ACT_TIPO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "ACT_TIPO";
	$fdata["GoodName"] = "ACT_TIPO";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa","ACT_TIPO");
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


	$tdataq_info_paa["ACT_TIPO"] = $fdata;
		$tdataq_info_paa[".searchableFields"][] = "ACT_TIPO";
//	ACT_UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "ACT_UEJ";
	$fdata["GoodName"] = "ACT_UEJ";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa","ACT_UEJ");
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


	$tdataq_info_paa["ACT_UEJ"] = $fdata;
		$tdataq_info_paa[".searchableFields"][] = "ACT_UEJ";
//	ACT_RUBRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "ACT_RUBRO";
	$fdata["GoodName"] = "ACT_RUBRO";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa","ACT_RUBRO");
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


	$tdataq_info_paa["ACT_RUBRO"] = $fdata;
		$tdataq_info_paa[".searchableFields"][] = "ACT_RUBRO";
//	ACT_PRODUCTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "ACT_PRODUCTO";
	$fdata["GoodName"] = "ACT_PRODUCTO";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa","ACT_PRODUCTO");
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


	$tdataq_info_paa["ACT_PRODUCTO"] = $fdata;
		$tdataq_info_paa[".searchableFields"][] = "ACT_PRODUCTO";
//	ACT_ACTIVIDAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "ACT_ACTIVIDAD";
	$fdata["GoodName"] = "ACT_ACTIVIDAD";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa","ACT_ACTIVIDAD");
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


	$tdataq_info_paa["ACT_ACTIVIDAD"] = $fdata;
		$tdataq_info_paa[".searchableFields"][] = "ACT_ACTIVIDAD";
//	ACT_RECURSOS_aCTIVIDAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "ACT_RECURSOS_aCTIVIDAD";
	$fdata["GoodName"] = "ACT_RECURSOS_aCTIVIDAD";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa","ACT_RECURSOS_aCTIVIDAD");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "ACT_RECURSOS_aCTIVIDAD";

		$fdata["sourceSingle"] = "ACT_RECURSOS_aCTIVIDAD";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACT_RECURSOS_aCTIVIDAD";

	
	
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


	$tdataq_info_paa["ACT_RECURSOS_aCTIVIDAD"] = $fdata;
		$tdataq_info_paa[".searchableFields"][] = "ACT_RECURSOS_aCTIVIDAD";
//	RUBRO_ID_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "RUBRO_ID_FK";
	$fdata["GoodName"] = "RUBRO_ID_FK";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa","RUBRO_ID_FK");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "RUBRO_ID_FK";

		$fdata["sourceSingle"] = "RUBRO_ID_FK";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RUBRO_ID_FK";

	
	
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


	$tdataq_info_paa["RUBRO_ID_FK"] = $fdata;
		$tdataq_info_paa[".searchableFields"][] = "RUBRO_ID_FK";
//	REC_F
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "REC_F";
	$fdata["GoodName"] = "REC_F";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa","REC_F");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "REC_F";

		$fdata["sourceSingle"] = "REC_F";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "REC_F";

	
	
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


	$tdataq_info_paa["REC_F"] = $fdata;
		$tdataq_info_paa[".searchableFields"][] = "REC_F";
//	REC_C
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "REC_C";
	$fdata["GoodName"] = "REC_C";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa","REC_C");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "REC_C";

		$fdata["sourceSingle"] = "REC_C";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "REC_C";

	
	
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


	$tdataq_info_paa["REC_C"] = $fdata;
		$tdataq_info_paa[".searchableFields"][] = "REC_C";
//	TIPO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "TIPO";
	$fdata["GoodName"] = "TIPO";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa","TIPO");
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


	$tdataq_info_paa["TIPO"] = $fdata;
		$tdataq_info_paa[".searchableFields"][] = "TIPO";
//	ct_integrado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "ct_integrado";
	$fdata["GoodName"] = "ct_integrado";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa","ct_integrado");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "ct_integrado";

		$fdata["sourceSingle"] = "ct_integrado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ct_integrado";

	
	
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


	$tdataq_info_paa["ct_integrado"] = $fdata;
		$tdataq_info_paa[".searchableFields"][] = "ct_integrado";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa","sys_user");
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


	$tdataq_info_paa["sys_user"] = $fdata;
		$tdataq_info_paa[".searchableFields"][] = "sys_user";
//	transferir_a
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "transferir_a";
	$fdata["GoodName"] = "transferir_a";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa","transferir_a");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "transferir_a";

		$fdata["sourceSingle"] = "transferir_a";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "transferir_a";

	
	
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


	$tdataq_info_paa["transferir_a"] = $fdata;
		$tdataq_info_paa[".searchableFields"][] = "transferir_a";
//	patrimonio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "patrimonio";
	$fdata["GoodName"] = "patrimonio";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa","patrimonio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "patrimonio";

		$fdata["sourceSingle"] = "patrimonio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "patrimonio";

	
	
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


	$tdataq_info_paa["patrimonio"] = $fdata;
		$tdataq_info_paa[".searchableFields"][] = "patrimonio";
//	UNIDAD_CONTRATACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "UNIDAD_CONTRATACION";
	$fdata["GoodName"] = "UNIDAD_CONTRATACION";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa","UNIDAD_CONTRATACION");
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


	$tdataq_info_paa["UNIDAD_CONTRATACION"] = $fdata;
		$tdataq_info_paa[".searchableFields"][] = "UNIDAD_CONTRATACION";
//	CDP_INTEGRADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "CDP_INTEGRADO";
	$fdata["GoodName"] = "CDP_INTEGRADO";
	$fdata["ownerTable"] = "q_info_paa";
	$fdata["Label"] = GetFieldLabel("q_info_paa","CDP_INTEGRADO");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CDP_INTEGRADO";

		$fdata["sourceSingle"] = "CDP_INTEGRADO";

	
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


	$tdataq_info_paa["CDP_INTEGRADO"] = $fdata;
		$tdataq_info_paa[".searchableFields"][] = "CDP_INTEGRADO";


$tables_data["q_info_paa"]=&$tdataq_info_paa;
$field_labels["q_info_paa"] = &$fieldLabelsq_info_paa;
$fieldToolTips["q_info_paa"] = &$fieldToolTipsq_info_paa;
$placeHolders["q_info_paa"] = &$placeHoldersq_info_paa;
$page_titles["q_info_paa"] = &$pageTitlesq_info_paa;


changeTextControlsToDate( "q_info_paa" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["q_info_paa"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["q_info_paa"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="q_seg_prog_inversion_x_rubro_001";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="q_seg_prog_inversion_x_rubro_001";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "q_seg_prog_inversion_x_rubro_001";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["q_info_paa"][0] = $masterParams;
				$masterTablesData["q_info_paa"][0]["masterKeys"] = array();
	$masterTablesData["q_info_paa"][0]["masterKeys"][]="RUBRO";
				$masterTablesData["q_info_paa"][0]["masterKeys"][]="VIGENCIA";
				$masterTablesData["q_info_paa"][0]["masterKeys"][]="UEJ";
				$masterTablesData["q_info_paa"][0]["detailKeys"] = array();
	$masterTablesData["q_info_paa"][0]["detailKeys"][]="ACT_RUBRO";
				$masterTablesData["q_info_paa"][0]["detailKeys"][]="vigencia";
				$masterTablesData["q_info_paa"][0]["detailKeys"][]="ACT_UEJ";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="q_seg_prog_inversion_001";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="q_seg_prog_inversion_001";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "q_seg_prog_inversion_001";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["q_info_paa"][1] = $masterParams;
				$masterTablesData["q_info_paa"][1]["masterKeys"] = array();
	$masterTablesData["q_info_paa"][1]["masterKeys"][]="ACT_ID";
				$masterTablesData["q_info_paa"][1]["detailKeys"] = array();
	$masterTablesData["q_info_paa"][1]["detailKeys"][]="ACT_ID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_q_info_paa()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PAA_ID,  	PAAID_INTEGRADO,  	ACT_ID,  	PROD_ID,  	COD_UNSPSC,  	DESCRIPCION_PAA,  	DESCRIPCION_PAA_F,  	MES_INICIO,  	MES_PRESENTA,  	DURACION_CONTRATO,  	DURACION_ESTIMADA_DMA,  	MODALIDAD,  	FUENTE_RECURSOS,  	VALOR_SOLICITADO,  	vigencia,  	PROD_UEJ,  	PROD_RUBRO,  	PROD_PRODUCTO,  	PROD_DESCRIPCION,  	PROD_DEP,  	PROD_USUARIORESP,  	ACT_VIGENCIA,  	ACT_TIPO,  	ACT_UEJ,  	ACT_RUBRO,  	ACT_PRODUCTO,  	ACT_ACTIVIDAD,  	ACT_RECURSOS_aCTIVIDAD,  	RUBRO_ID_FK,  	REC_F,  	REC_C,  	TIPO,  	ct_integrado,  	sys_user,  	transferir_a,  	patrimonio,  	UNIDAD_CONTRATACION,  	CDP_INTEGRADO";
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
	"m_srcTableName" => "q_info_paa"
));

$proto6["m_sql"] = "PAA_ID";
$proto6["m_srcTableName"] = "q_info_paa";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PAAID_INTEGRADO",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa"
));

$proto8["m_sql"] = "PAAID_INTEGRADO";
$proto8["m_srcTableName"] = "q_info_paa";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_ID",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa"
));

$proto10["m_sql"] = "ACT_ID";
$proto10["m_srcTableName"] = "q_info_paa";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PROD_ID",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa"
));

$proto12["m_sql"] = "PROD_ID";
$proto12["m_srcTableName"] = "q_info_paa";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "COD_UNSPSC",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa"
));

$proto14["m_sql"] = "COD_UNSPSC";
$proto14["m_srcTableName"] = "q_info_paa";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION_PAA",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa"
));

$proto16["m_sql"] = "DESCRIPCION_PAA";
$proto16["m_srcTableName"] = "q_info_paa";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION_PAA_F",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa"
));

$proto18["m_sql"] = "DESCRIPCION_PAA_F";
$proto18["m_srcTableName"] = "q_info_paa";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "MES_INICIO",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa"
));

$proto20["m_sql"] = "MES_INICIO";
$proto20["m_srcTableName"] = "q_info_paa";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "MES_PRESENTA",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa"
));

$proto22["m_sql"] = "MES_PRESENTA";
$proto22["m_srcTableName"] = "q_info_paa";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "DURACION_CONTRATO",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa"
));

$proto24["m_sql"] = "DURACION_CONTRATO";
$proto24["m_srcTableName"] = "q_info_paa";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "DURACION_ESTIMADA_DMA",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa"
));

$proto26["m_sql"] = "DURACION_ESTIMADA_DMA";
$proto26["m_srcTableName"] = "q_info_paa";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "MODALIDAD",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa"
));

$proto28["m_sql"] = "MODALIDAD";
$proto28["m_srcTableName"] = "q_info_paa";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "FUENTE_RECURSOS",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa"
));

$proto30["m_sql"] = "FUENTE_RECURSOS";
$proto30["m_srcTableName"] = "q_info_paa";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "VALOR_SOLICITADO",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa"
));

$proto32["m_sql"] = "VALOR_SOLICITADO";
$proto32["m_srcTableName"] = "q_info_paa";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa"
));

$proto34["m_sql"] = "vigencia";
$proto34["m_srcTableName"] = "q_info_paa";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "PROD_UEJ",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa"
));

$proto36["m_sql"] = "PROD_UEJ";
$proto36["m_srcTableName"] = "q_info_paa";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "PROD_RUBRO",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa"
));

$proto38["m_sql"] = "PROD_RUBRO";
$proto38["m_srcTableName"] = "q_info_paa";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "PROD_PRODUCTO",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa"
));

$proto40["m_sql"] = "PROD_PRODUCTO";
$proto40["m_srcTableName"] = "q_info_paa";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "PROD_DESCRIPCION",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa"
));

$proto42["m_sql"] = "PROD_DESCRIPCION";
$proto42["m_srcTableName"] = "q_info_paa";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "PROD_DEP",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa"
));

$proto44["m_sql"] = "PROD_DEP";
$proto44["m_srcTableName"] = "q_info_paa";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "PROD_USUARIORESP",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa"
));

$proto46["m_sql"] = "PROD_USUARIORESP";
$proto46["m_srcTableName"] = "q_info_paa";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_VIGENCIA",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa"
));

$proto48["m_sql"] = "ACT_VIGENCIA";
$proto48["m_srcTableName"] = "q_info_paa";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_TIPO",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa"
));

$proto50["m_sql"] = "ACT_TIPO";
$proto50["m_srcTableName"] = "q_info_paa";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_UEJ",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa"
));

$proto52["m_sql"] = "ACT_UEJ";
$proto52["m_srcTableName"] = "q_info_paa";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_RUBRO",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa"
));

$proto54["m_sql"] = "ACT_RUBRO";
$proto54["m_srcTableName"] = "q_info_paa";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_PRODUCTO",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa"
));

$proto56["m_sql"] = "ACT_PRODUCTO";
$proto56["m_srcTableName"] = "q_info_paa";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_ACTIVIDAD",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa"
));

$proto58["m_sql"] = "ACT_ACTIVIDAD";
$proto58["m_srcTableName"] = "q_info_paa";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_RECURSOS_aCTIVIDAD",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa"
));

$proto60["m_sql"] = "ACT_RECURSOS_aCTIVIDAD";
$proto60["m_srcTableName"] = "q_info_paa";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "RUBRO_ID_FK",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa"
));

$proto62["m_sql"] = "RUBRO_ID_FK";
$proto62["m_srcTableName"] = "q_info_paa";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "REC_F",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa"
));

$proto64["m_sql"] = "REC_F";
$proto64["m_srcTableName"] = "q_info_paa";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "REC_C",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa"
));

$proto66["m_sql"] = "REC_C";
$proto66["m_srcTableName"] = "q_info_paa";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa"
));

$proto68["m_sql"] = "TIPO";
$proto68["m_srcTableName"] = "q_info_paa";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "ct_integrado",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa"
));

$proto70["m_sql"] = "ct_integrado";
$proto70["m_srcTableName"] = "q_info_paa";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa"
));

$proto72["m_sql"] = "sys_user";
$proto72["m_srcTableName"] = "q_info_paa";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "transferir_a",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa"
));

$proto74["m_sql"] = "transferir_a";
$proto74["m_srcTableName"] = "q_info_paa";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "patrimonio",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa"
));

$proto76["m_sql"] = "patrimonio";
$proto76["m_srcTableName"] = "q_info_paa";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "UNIDAD_CONTRATACION",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa"
));

$proto78["m_sql"] = "UNIDAD_CONTRATACION";
$proto78["m_srcTableName"] = "q_info_paa";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "CDP_INTEGRADO",
	"m_strTable" => "q_info_paa",
	"m_srcTableName" => "q_info_paa"
));

$proto80["m_sql"] = "CDP_INTEGRADO";
$proto80["m_srcTableName"] = "q_info_paa";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto82=array();
$proto82["m_link"] = "SQLL_MAIN";
			$proto83=array();
$proto83["m_strName"] = "q_info_paa";
$proto83["m_srcTableName"] = "q_info_paa";
$proto83["m_columns"] = array();
$proto83["m_columns"][] = "PAA_ID";
$proto83["m_columns"][] = "PAAID_INTEGRADO";
$proto83["m_columns"][] = "ACT_ID";
$proto83["m_columns"][] = "PROD_ID";
$proto83["m_columns"][] = "COD_UNSPSC";
$proto83["m_columns"][] = "DESCRIPCION_PAA";
$proto83["m_columns"][] = "DESCRIPCION_PAA_F";
$proto83["m_columns"][] = "MES_INICIO";
$proto83["m_columns"][] = "MES_PRESENTA";
$proto83["m_columns"][] = "DURACION_CONTRATO";
$proto83["m_columns"][] = "DURACION_ESTIMADA_DMA";
$proto83["m_columns"][] = "MODALIDAD";
$proto83["m_columns"][] = "FUENTE_RECURSOS";
$proto83["m_columns"][] = "VALOR_SOLICITADO";
$proto83["m_columns"][] = "vigencia";
$proto83["m_columns"][] = "PROD_UEJ";
$proto83["m_columns"][] = "PROD_RUBRO";
$proto83["m_columns"][] = "PROD_PRODUCTO";
$proto83["m_columns"][] = "PROD_DESCRIPCION";
$proto83["m_columns"][] = "PROD_DEP";
$proto83["m_columns"][] = "PROD_USUARIORESP";
$proto83["m_columns"][] = "ACT_VIGENCIA";
$proto83["m_columns"][] = "ACT_TIPO";
$proto83["m_columns"][] = "ACT_UEJ";
$proto83["m_columns"][] = "ACT_RUBRO";
$proto83["m_columns"][] = "ACT_PRODUCTO";
$proto83["m_columns"][] = "ACT_ACTIVIDAD";
$proto83["m_columns"][] = "ACT_RECURSOS_aCTIVIDAD";
$proto83["m_columns"][] = "RUBRO_ID_FK";
$proto83["m_columns"][] = "REC_F";
$proto83["m_columns"][] = "REC_C";
$proto83["m_columns"][] = "TIPO";
$proto83["m_columns"][] = "ct_integrado";
$proto83["m_columns"][] = "sys_user";
$proto83["m_columns"][] = "transferir_a";
$proto83["m_columns"][] = "patrimonio";
$proto83["m_columns"][] = "UNIDAD_CONTRATACION";
$proto83["m_columns"][] = "CDP_INTEGRADO";
$obj = new SQLTable($proto83);

$proto82["m_table"] = $obj;
$proto82["m_sql"] = "q_info_paa";
$proto82["m_alias"] = "";
$proto82["m_srcTableName"] = "q_info_paa";
$proto84=array();
$proto84["m_sql"] = "";
$proto84["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto84["m_column"]=$obj;
$proto84["m_contained"] = array();
$proto84["m_strCase"] = "";
$proto84["m_havingmode"] = false;
$proto84["m_inBrackets"] = false;
$proto84["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto84);

$proto82["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto82);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="q_info_paa";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_info_paa = createSqlQuery_q_info_paa();


	
										;

																																						

$tdataq_info_paa[".sqlquery"] = $queryData_q_info_paa;



$tdataq_info_paa[".hasEvents"] = false;

?>