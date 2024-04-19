<?php
$tdataq_info_paa_secgen_report_f = array();
$tdataq_info_paa_secgen_report_f[".searchableFields"] = array();
$tdataq_info_paa_secgen_report_f[".ShortName"] = "q_info_paa_secgen_report_f";
$tdataq_info_paa_secgen_report_f[".OwnerID"] = "";
$tdataq_info_paa_secgen_report_f[".OriginalTable"] = "q_info_paa_secgen";


$tdataq_info_paa_secgen_report_f[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdataq_info_paa_secgen_report_f[".originalPagesByType"] = $tdataq_info_paa_secgen_report_f[".pagesByType"];
$tdataq_info_paa_secgen_report_f[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdataq_info_paa_secgen_report_f[".originalPages"] = $tdataq_info_paa_secgen_report_f[".pages"];
$tdataq_info_paa_secgen_report_f[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdataq_info_paa_secgen_report_f[".originalDefaultPages"] = $tdataq_info_paa_secgen_report_f[".defaultPages"];

//	field labels
$fieldLabelsq_info_paa_secgen_report_f = array();
$fieldToolTipsq_info_paa_secgen_report_f = array();
$pageTitlesq_info_paa_secgen_report_f = array();
$placeHoldersq_info_paa_secgen_report_f = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_info_paa_secgen_report_f["Spanish"] = array();
	$fieldToolTipsq_info_paa_secgen_report_f["Spanish"] = array();
	$placeHoldersq_info_paa_secgen_report_f["Spanish"] = array();
	$pageTitlesq_info_paa_secgen_report_f["Spanish"] = array();
	$fieldLabelsq_info_paa_secgen_report_f["Spanish"]["PAA_ID"] = "PAA ID";
	$fieldToolTipsq_info_paa_secgen_report_f["Spanish"]["PAA_ID"] = "";
	$placeHoldersq_info_paa_secgen_report_f["Spanish"]["PAA_ID"] = "";
	$fieldLabelsq_info_paa_secgen_report_f["Spanish"]["ACT_ID"] = "ACTIVIDAD";
	$fieldToolTipsq_info_paa_secgen_report_f["Spanish"]["ACT_ID"] = "";
	$placeHoldersq_info_paa_secgen_report_f["Spanish"]["ACT_ID"] = "";
	$fieldLabelsq_info_paa_secgen_report_f["Spanish"]["FUENTER"] = "FUENTER";
	$fieldToolTipsq_info_paa_secgen_report_f["Spanish"]["FUENTER"] = "";
	$placeHoldersq_info_paa_secgen_report_f["Spanish"]["FUENTER"] = "";
	$fieldLabelsq_info_paa_secgen_report_f["Spanish"]["PROD_ID"] = "PROD ID";
	$fieldToolTipsq_info_paa_secgen_report_f["Spanish"]["PROD_ID"] = "";
	$placeHoldersq_info_paa_secgen_report_f["Spanish"]["PROD_ID"] = "";
	$fieldLabelsq_info_paa_secgen_report_f["Spanish"]["COD_UNSPSC"] = "COD UNSPSC";
	$fieldToolTipsq_info_paa_secgen_report_f["Spanish"]["COD_UNSPSC"] = "";
	$placeHoldersq_info_paa_secgen_report_f["Spanish"]["COD_UNSPSC"] = "";
	$fieldLabelsq_info_paa_secgen_report_f["Spanish"]["DESCRIPCION"] = "DESCRIPCION";
	$fieldToolTipsq_info_paa_secgen_report_f["Spanish"]["DESCRIPCION"] = "";
	$placeHoldersq_info_paa_secgen_report_f["Spanish"]["DESCRIPCION"] = "";
	$fieldLabelsq_info_paa_secgen_report_f["Spanish"]["MES_INICIO"] = "MES INICIO";
	$fieldToolTipsq_info_paa_secgen_report_f["Spanish"]["MES_INICIO"] = "";
	$placeHoldersq_info_paa_secgen_report_f["Spanish"]["MES_INICIO"] = "";
	$fieldLabelsq_info_paa_secgen_report_f["Spanish"]["MES_PRESENTA"] = "MES PRESENTA";
	$fieldToolTipsq_info_paa_secgen_report_f["Spanish"]["MES_PRESENTA"] = "";
	$placeHoldersq_info_paa_secgen_report_f["Spanish"]["MES_PRESENTA"] = "";
	$fieldLabelsq_info_paa_secgen_report_f["Spanish"]["DURACION_CONTRATO"] = "DURACION CONTRATO";
	$fieldToolTipsq_info_paa_secgen_report_f["Spanish"]["DURACION_CONTRATO"] = "";
	$placeHoldersq_info_paa_secgen_report_f["Spanish"]["DURACION_CONTRATO"] = "";
	$fieldLabelsq_info_paa_secgen_report_f["Spanish"]["DURACION_ESTIMADA_DMA"] = "DURACION ESTIMADA DMA";
	$fieldToolTipsq_info_paa_secgen_report_f["Spanish"]["DURACION_ESTIMADA_DMA"] = "";
	$placeHoldersq_info_paa_secgen_report_f["Spanish"]["DURACION_ESTIMADA_DMA"] = "";
	$fieldLabelsq_info_paa_secgen_report_f["Spanish"]["MODALIDAD"] = "MODALIDAD";
	$fieldToolTipsq_info_paa_secgen_report_f["Spanish"]["MODALIDAD"] = "";
	$placeHoldersq_info_paa_secgen_report_f["Spanish"]["MODALIDAD"] = "";
	$fieldLabelsq_info_paa_secgen_report_f["Spanish"]["MODALIDAD_CONT"] = "MODALIDAD";
	$fieldToolTipsq_info_paa_secgen_report_f["Spanish"]["MODALIDAD_CONT"] = "";
	$placeHoldersq_info_paa_secgen_report_f["Spanish"]["MODALIDAD_CONT"] = "";
	$fieldLabelsq_info_paa_secgen_report_f["Spanish"]["FUENTE_RECURSOS"] = "FUENTE RECURSOS";
	$fieldToolTipsq_info_paa_secgen_report_f["Spanish"]["FUENTE_RECURSOS"] = "";
	$placeHoldersq_info_paa_secgen_report_f["Spanish"]["FUENTE_RECURSOS"] = "";
	$fieldLabelsq_info_paa_secgen_report_f["Spanish"]["VALOR_SOLICITADO"] = "VALOR SOLICITADO";
	$fieldToolTipsq_info_paa_secgen_report_f["Spanish"]["VALOR_SOLICITADO"] = "";
	$placeHoldersq_info_paa_secgen_report_f["Spanish"]["VALOR_SOLICITADO"] = "";
	$fieldLabelsq_info_paa_secgen_report_f["Spanish"]["vigencia"] = "VIGENCIA";
	$fieldToolTipsq_info_paa_secgen_report_f["Spanish"]["vigencia"] = "";
	$placeHoldersq_info_paa_secgen_report_f["Spanish"]["vigencia"] = "";
	$fieldLabelsq_info_paa_secgen_report_f["Spanish"]["PROD_RUBRO"] = "PROD RUBRO";
	$fieldToolTipsq_info_paa_secgen_report_f["Spanish"]["PROD_RUBRO"] = "";
	$placeHoldersq_info_paa_secgen_report_f["Spanish"]["PROD_RUBRO"] = "";
	$fieldLabelsq_info_paa_secgen_report_f["Spanish"]["PROD_PRODUCTO"] = "PROD PRODUCTO";
	$fieldToolTipsq_info_paa_secgen_report_f["Spanish"]["PROD_PRODUCTO"] = "";
	$placeHoldersq_info_paa_secgen_report_f["Spanish"]["PROD_PRODUCTO"] = "";
	$fieldLabelsq_info_paa_secgen_report_f["Spanish"]["PROD_DESCRIPCION"] = "PROD DESCRIPCION";
	$fieldToolTipsq_info_paa_secgen_report_f["Spanish"]["PROD_DESCRIPCION"] = "";
	$placeHoldersq_info_paa_secgen_report_f["Spanish"]["PROD_DESCRIPCION"] = "";
	$fieldLabelsq_info_paa_secgen_report_f["Spanish"]["PROD_DEP"] = "PROD DEP";
	$fieldToolTipsq_info_paa_secgen_report_f["Spanish"]["PROD_DEP"] = "";
	$placeHoldersq_info_paa_secgen_report_f["Spanish"]["PROD_DEP"] = "";
	$fieldLabelsq_info_paa_secgen_report_f["Spanish"]["PROD_USUARIORESP"] = "PROD USUARIORESP";
	$fieldToolTipsq_info_paa_secgen_report_f["Spanish"]["PROD_USUARIORESP"] = "";
	$placeHoldersq_info_paa_secgen_report_f["Spanish"]["PROD_USUARIORESP"] = "";
	$fieldLabelsq_info_paa_secgen_report_f["Spanish"]["ACT_VIGENCIA"] = "ACT VIGENCIA";
	$fieldToolTipsq_info_paa_secgen_report_f["Spanish"]["ACT_VIGENCIA"] = "";
	$placeHoldersq_info_paa_secgen_report_f["Spanish"]["ACT_VIGENCIA"] = "";
	$fieldLabelsq_info_paa_secgen_report_f["Spanish"]["ACT_TIPO"] = "ACT TIPO";
	$fieldToolTipsq_info_paa_secgen_report_f["Spanish"]["ACT_TIPO"] = "";
	$placeHoldersq_info_paa_secgen_report_f["Spanish"]["ACT_TIPO"] = "";
	$fieldLabelsq_info_paa_secgen_report_f["Spanish"]["ACT_UEJ"] = "UEJ";
	$fieldToolTipsq_info_paa_secgen_report_f["Spanish"]["ACT_UEJ"] = "";
	$placeHoldersq_info_paa_secgen_report_f["Spanish"]["ACT_UEJ"] = "";
	$fieldLabelsq_info_paa_secgen_report_f["Spanish"]["ACT_RUBRO"] = "RUBRO";
	$fieldToolTipsq_info_paa_secgen_report_f["Spanish"]["ACT_RUBRO"] = "";
	$placeHoldersq_info_paa_secgen_report_f["Spanish"]["ACT_RUBRO"] = "";
	$fieldLabelsq_info_paa_secgen_report_f["Spanish"]["ACT_PRODUCTO"] = "PRODUCTO";
	$fieldToolTipsq_info_paa_secgen_report_f["Spanish"]["ACT_PRODUCTO"] = "";
	$placeHoldersq_info_paa_secgen_report_f["Spanish"]["ACT_PRODUCTO"] = "";
	$fieldLabelsq_info_paa_secgen_report_f["Spanish"]["ACT_ACTIVIDAD"] = "ACT ACTIVIDAD";
	$fieldToolTipsq_info_paa_secgen_report_f["Spanish"]["ACT_ACTIVIDAD"] = "";
	$placeHoldersq_info_paa_secgen_report_f["Spanish"]["ACT_ACTIVIDAD"] = "";
	$fieldLabelsq_info_paa_secgen_report_f["Spanish"]["ACT_RECURSOS_aCTIVIDAD"] = "ACT RECURSOS ACTIVIDAD";
	$fieldToolTipsq_info_paa_secgen_report_f["Spanish"]["ACT_RECURSOS_aCTIVIDAD"] = "";
	$placeHoldersq_info_paa_secgen_report_f["Spanish"]["ACT_RECURSOS_aCTIVIDAD"] = "";
	$fieldLabelsq_info_paa_secgen_report_f["Spanish"]["UNIDAD_CONTRATACION"] = "UNIDAD CONTRATACION";
	$fieldToolTipsq_info_paa_secgen_report_f["Spanish"]["UNIDAD_CONTRATACION"] = "";
	$placeHoldersq_info_paa_secgen_report_f["Spanish"]["UNIDAD_CONTRATACION"] = "";
	$fieldLabelsq_info_paa_secgen_report_f["Spanish"]["transferir_a"] = "Transferir A";
	$fieldToolTipsq_info_paa_secgen_report_f["Spanish"]["transferir_a"] = "";
	$placeHoldersq_info_paa_secgen_report_f["Spanish"]["transferir_a"] = "";
	$fieldLabelsq_info_paa_secgen_report_f["Spanish"]["patrimonio"] = "Patrimonio";
	$fieldToolTipsq_info_paa_secgen_report_f["Spanish"]["patrimonio"] = "";
	$placeHoldersq_info_paa_secgen_report_f["Spanish"]["patrimonio"] = "";
	$fieldLabelsq_info_paa_secgen_report_f["Spanish"]["TIPO"] = "TIPO";
	$fieldToolTipsq_info_paa_secgen_report_f["Spanish"]["TIPO"] = "";
	$placeHoldersq_info_paa_secgen_report_f["Spanish"]["TIPO"] = "";
	$fieldLabelsq_info_paa_secgen_report_f["Spanish"]["UEJ"] = "UEJ";
	$fieldToolTipsq_info_paa_secgen_report_f["Spanish"]["UEJ"] = "";
	$placeHoldersq_info_paa_secgen_report_f["Spanish"]["UEJ"] = "";
	$fieldLabelsq_info_paa_secgen_report_f["Spanish"]["responsable_dep"] = "DEPENDENCIA";
	$fieldToolTipsq_info_paa_secgen_report_f["Spanish"]["responsable_dep"] = "";
	$placeHoldersq_info_paa_secgen_report_f["Spanish"]["responsable_dep"] = "";
	$fieldLabelsq_info_paa_secgen_report_f["Spanish"]["responsable_depsup"] = "DESPACHO | DIRECCION";
	$fieldToolTipsq_info_paa_secgen_report_f["Spanish"]["responsable_depsup"] = "";
	$placeHoldersq_info_paa_secgen_report_f["Spanish"]["responsable_depsup"] = "";
	$pageTitlesq_info_paa_secgen_report_f["Spanish"]["rprint"] = "Reporte Funcionamiento";
	if (count($fieldToolTipsq_info_paa_secgen_report_f["Spanish"]))
		$tdataq_info_paa_secgen_report_f[".isUseToolTips"] = true;
}


	$tdataq_info_paa_secgen_report_f[".NCSearch"] = true;



$tdataq_info_paa_secgen_report_f[".shortTableName"] = "q_info_paa_secgen_report_f";
$tdataq_info_paa_secgen_report_f[".nSecOptions"] = 0;

$tdataq_info_paa_secgen_report_f[".mainTableOwnerID"] = "";
$tdataq_info_paa_secgen_report_f[".entityType"] = 2;
$tdataq_info_paa_secgen_report_f[".connId"] = "mincit_global_20x_at_127_0_0_1";


$tdataq_info_paa_secgen_report_f[".strOriginalTableName"] = "q_info_paa_secgen";

	



$tdataq_info_paa_secgen_report_f[".showAddInPopup"] = false;

$tdataq_info_paa_secgen_report_f[".showEditInPopup"] = false;

$tdataq_info_paa_secgen_report_f[".showViewInPopup"] = false;

$tdataq_info_paa_secgen_report_f[".listAjax"] = false;
//	temporary
//$tdataq_info_paa_secgen_report_f[".listAjax"] = false;

	$tdataq_info_paa_secgen_report_f[".audit"] = false;

	$tdataq_info_paa_secgen_report_f[".locking"] = false;


$pages = $tdataq_info_paa_secgen_report_f[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_info_paa_secgen_report_f[".edit"] = true;
	$tdataq_info_paa_secgen_report_f[".afterEditAction"] = 1;
	$tdataq_info_paa_secgen_report_f[".closePopupAfterEdit"] = 1;
	$tdataq_info_paa_secgen_report_f[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_info_paa_secgen_report_f[".add"] = true;
$tdataq_info_paa_secgen_report_f[".afterAddAction"] = 1;
$tdataq_info_paa_secgen_report_f[".closePopupAfterAdd"] = 1;
$tdataq_info_paa_secgen_report_f[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_info_paa_secgen_report_f[".list"] = true;
}



$tdataq_info_paa_secgen_report_f[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_info_paa_secgen_report_f[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_info_paa_secgen_report_f[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_info_paa_secgen_report_f[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_info_paa_secgen_report_f[".printFriendly"] = true;
}



$tdataq_info_paa_secgen_report_f[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_info_paa_secgen_report_f[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_info_paa_secgen_report_f[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_info_paa_secgen_report_f[".isUseAjaxSuggest"] = true;



												

$tdataq_info_paa_secgen_report_f[".ajaxCodeSnippetAdded"] = false;

$tdataq_info_paa_secgen_report_f[".buttonsAdded"] = false;

$tdataq_info_paa_secgen_report_f[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_info_paa_secgen_report_f[".isUseTimeForSearch"] = false;


$tdataq_info_paa_secgen_report_f[".badgeColor"] = "008B8B";


$tdataq_info_paa_secgen_report_f[".allSearchFields"] = array();
$tdataq_info_paa_secgen_report_f[".filterFields"] = array();
$tdataq_info_paa_secgen_report_f[".requiredSearchFields"] = array();

$tdataq_info_paa_secgen_report_f[".googleLikeFields"] = array();
$tdataq_info_paa_secgen_report_f[".googleLikeFields"][] = "PAA_ID";
$tdataq_info_paa_secgen_report_f[".googleLikeFields"][] = "ACT_ID";
$tdataq_info_paa_secgen_report_f[".googleLikeFields"][] = "FUENTER";
$tdataq_info_paa_secgen_report_f[".googleLikeFields"][] = "PROD_ID";
$tdataq_info_paa_secgen_report_f[".googleLikeFields"][] = "COD_UNSPSC";
$tdataq_info_paa_secgen_report_f[".googleLikeFields"][] = "DESCRIPCION";
$tdataq_info_paa_secgen_report_f[".googleLikeFields"][] = "MES_INICIO";
$tdataq_info_paa_secgen_report_f[".googleLikeFields"][] = "MES_PRESENTA";
$tdataq_info_paa_secgen_report_f[".googleLikeFields"][] = "DURACION_CONTRATO";
$tdataq_info_paa_secgen_report_f[".googleLikeFields"][] = "DURACION_ESTIMADA_DMA";
$tdataq_info_paa_secgen_report_f[".googleLikeFields"][] = "MODALIDAD";
$tdataq_info_paa_secgen_report_f[".googleLikeFields"][] = "MODALIDAD_CONT";
$tdataq_info_paa_secgen_report_f[".googleLikeFields"][] = "FUENTE_RECURSOS";
$tdataq_info_paa_secgen_report_f[".googleLikeFields"][] = "VALOR_SOLICITADO";
$tdataq_info_paa_secgen_report_f[".googleLikeFields"][] = "vigencia";
$tdataq_info_paa_secgen_report_f[".googleLikeFields"][] = "PROD_RUBRO";
$tdataq_info_paa_secgen_report_f[".googleLikeFields"][] = "PROD_PRODUCTO";
$tdataq_info_paa_secgen_report_f[".googleLikeFields"][] = "PROD_DESCRIPCION";
$tdataq_info_paa_secgen_report_f[".googleLikeFields"][] = "PROD_DEP";
$tdataq_info_paa_secgen_report_f[".googleLikeFields"][] = "PROD_USUARIORESP";
$tdataq_info_paa_secgen_report_f[".googleLikeFields"][] = "ACT_VIGENCIA";
$tdataq_info_paa_secgen_report_f[".googleLikeFields"][] = "ACT_TIPO";
$tdataq_info_paa_secgen_report_f[".googleLikeFields"][] = "ACT_UEJ";
$tdataq_info_paa_secgen_report_f[".googleLikeFields"][] = "ACT_RUBRO";
$tdataq_info_paa_secgen_report_f[".googleLikeFields"][] = "ACT_PRODUCTO";
$tdataq_info_paa_secgen_report_f[".googleLikeFields"][] = "ACT_ACTIVIDAD";
$tdataq_info_paa_secgen_report_f[".googleLikeFields"][] = "ACT_RECURSOS_aCTIVIDAD";
$tdataq_info_paa_secgen_report_f[".googleLikeFields"][] = "UNIDAD_CONTRATACION";
$tdataq_info_paa_secgen_report_f[".googleLikeFields"][] = "transferir_a";
$tdataq_info_paa_secgen_report_f[".googleLikeFields"][] = "patrimonio";
$tdataq_info_paa_secgen_report_f[".googleLikeFields"][] = "TIPO";
$tdataq_info_paa_secgen_report_f[".googleLikeFields"][] = "UEJ";
$tdataq_info_paa_secgen_report_f[".googleLikeFields"][] = "responsable_dep";
$tdataq_info_paa_secgen_report_f[".googleLikeFields"][] = "responsable_depsup";



$tdataq_info_paa_secgen_report_f[".tableType"] = "report";

$tdataq_info_paa_secgen_report_f[".printerPageOrientation"] = 1;
$tdataq_info_paa_secgen_report_f[".isPrinterPageFitToPage"] = 0;
$tdataq_info_paa_secgen_report_f[".nPrinterPageScale"] = 100;

$tdataq_info_paa_secgen_report_f[".nPrinterSplitRecords"] = 40;

$tdataq_info_paa_secgen_report_f[".geocodingEnabled"] = false;

//report settings

$tdataq_info_paa_secgen_report_f[".reportPrintGroupsPerPage"] = 3;
$tdataq_info_paa_secgen_report_f[".reportPrintRecordsPerPage"] = 40;

$tdataq_info_paa_secgen_report_f[".pageSizeGroups"] = 5;
$tdataq_info_paa_secgen_report_f[".pageSizeRecords"] = 20;


//end of report settings










$tstrOrderBy = "";
$tdataq_info_paa_secgen_report_f[".strOrderBy"] = $tstrOrderBy;

$tdataq_info_paa_secgen_report_f[".orderindexes"] = array();


$tdataq_info_paa_secgen_report_f[".sqlHead"] = "SELECT PAA_ID, ACT_ID, FUENTER, PROD_ID, COD_UNSPSC, DESCRIPCION, MES_INICIO, MES_PRESENTA, DURACION_CONTRATO, DURACION_ESTIMADA_DMA, MODALIDAD, MODALIDAD_CONT, FUENTE_RECURSOS, VALOR_SOLICITADO, vigencia, PROD_RUBRO, PROD_PRODUCTO, PROD_DESCRIPCION, PROD_DEP, PROD_USUARIORESP, ACT_VIGENCIA, ACT_TIPO, ACT_UEJ, ACT_RUBRO, ACT_PRODUCTO, ACT_ACTIVIDAD, ACT_RECURSOS_aCTIVIDAD, UNIDAD_CONTRATACION, transferir_a, patrimonio, TIPO, UEJ, responsable_dep, responsable_depsup";
$tdataq_info_paa_secgen_report_f[".sqlFrom"] = "FROM q_info_paa_secgen";
$tdataq_info_paa_secgen_report_f[".sqlWhereExpr"] = "(TIPO = 'A')";
$tdataq_info_paa_secgen_report_f[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_info_paa_secgen_report_f[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_info_paa_secgen_report_f[".arrGroupsPerPage"] = $arrGPP;

$tdataq_info_paa_secgen_report_f[".highlightSearchResults"] = true;

$tableKeysq_info_paa_secgen_report_f = array();
$tdataq_info_paa_secgen_report_f[".Keys"] = $tableKeysq_info_paa_secgen_report_f;


$tdataq_info_paa_secgen_report_f[".hideMobileList"] = array();




//	PAA_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PAA_ID";
	$fdata["GoodName"] = "PAA_ID";
	$fdata["ownerTable"] = "q_info_paa_secgen";
	$fdata["Label"] = GetFieldLabel("q_info_paa_secgen_report_f","PAA_ID");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_info_paa_secgen_report_f["PAA_ID"] = $fdata;
		$tdataq_info_paa_secgen_report_f[".searchableFields"][] = "PAA_ID";
//	ACT_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ACT_ID";
	$fdata["GoodName"] = "ACT_ID";
	$fdata["ownerTable"] = "q_info_paa_secgen";
	$fdata["Label"] = GetFieldLabel("q_info_paa_secgen_report_f","ACT_ID");
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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "003_actividad";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ACT_ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ACTIVIDAD";

	

	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_info_paa_secgen_report_f["ACT_ID"] = $fdata;
		$tdataq_info_paa_secgen_report_f[".searchableFields"][] = "ACT_ID";
//	FUENTER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FUENTER";
	$fdata["GoodName"] = "FUENTER";
	$fdata["ownerTable"] = "q_info_paa_secgen";
	$fdata["Label"] = GetFieldLabel("q_info_paa_secgen_report_f","FUENTER");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "FUENTER";

		$fdata["sourceSingle"] = "FUENTER";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FUENTER";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_info_paa_secgen_report_f["FUENTER"] = $fdata;
		$tdataq_info_paa_secgen_report_f[".searchableFields"][] = "FUENTER";
//	PROD_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PROD_ID";
	$fdata["GoodName"] = "PROD_ID";
	$fdata["ownerTable"] = "q_info_paa_secgen";
	$fdata["Label"] = GetFieldLabel("q_info_paa_secgen_report_f","PROD_ID");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_info_paa_secgen_report_f["PROD_ID"] = $fdata;
		$tdataq_info_paa_secgen_report_f[".searchableFields"][] = "PROD_ID";
//	COD_UNSPSC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "COD_UNSPSC";
	$fdata["GoodName"] = "COD_UNSPSC";
	$fdata["ownerTable"] = "q_info_paa_secgen";
	$fdata["Label"] = GetFieldLabel("q_info_paa_secgen_report_f","COD_UNSPSC");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_info_paa_secgen_report_f["COD_UNSPSC"] = $fdata;
		$tdataq_info_paa_secgen_report_f[".searchableFields"][] = "COD_UNSPSC";
//	DESCRIPCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DESCRIPCION";
	$fdata["GoodName"] = "DESCRIPCION";
	$fdata["ownerTable"] = "q_info_paa_secgen";
	$fdata["Label"] = GetFieldLabel("q_info_paa_secgen_report_f","DESCRIPCION");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "DESCRIPCION";

		$fdata["sourceSingle"] = "DESCRIPCION";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DESCRIPCION";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_info_paa_secgen_report_f["DESCRIPCION"] = $fdata;
		$tdataq_info_paa_secgen_report_f[".searchableFields"][] = "DESCRIPCION";
//	MES_INICIO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "MES_INICIO";
	$fdata["GoodName"] = "MES_INICIO";
	$fdata["ownerTable"] = "q_info_paa_secgen";
	$fdata["Label"] = GetFieldLabel("q_info_paa_secgen_report_f","MES_INICIO");
	$fdata["FieldType"] = 200;


	
	
			

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_info_paa_secgen_report_f["MES_INICIO"] = $fdata;
		$tdataq_info_paa_secgen_report_f[".searchableFields"][] = "MES_INICIO";
//	MES_PRESENTA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "MES_PRESENTA";
	$fdata["GoodName"] = "MES_PRESENTA";
	$fdata["ownerTable"] = "q_info_paa_secgen";
	$fdata["Label"] = GetFieldLabel("q_info_paa_secgen_report_f","MES_PRESENTA");
	$fdata["FieldType"] = 200;


	
	
			

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_info_paa_secgen_report_f["MES_PRESENTA"] = $fdata;
		$tdataq_info_paa_secgen_report_f[".searchableFields"][] = "MES_PRESENTA";
//	DURACION_CONTRATO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "DURACION_CONTRATO";
	$fdata["GoodName"] = "DURACION_CONTRATO";
	$fdata["ownerTable"] = "q_info_paa_secgen";
	$fdata["Label"] = GetFieldLabel("q_info_paa_secgen_report_f","DURACION_CONTRATO");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_info_paa_secgen_report_f["DURACION_CONTRATO"] = $fdata;
		$tdataq_info_paa_secgen_report_f[".searchableFields"][] = "DURACION_CONTRATO";
//	DURACION_ESTIMADA_DMA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "DURACION_ESTIMADA_DMA";
	$fdata["GoodName"] = "DURACION_ESTIMADA_DMA";
	$fdata["ownerTable"] = "q_info_paa_secgen";
	$fdata["Label"] = GetFieldLabel("q_info_paa_secgen_report_f","DURACION_ESTIMADA_DMA");
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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "global_duracion";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "COD_DURACION";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "NOM_DURACION";

	

	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_info_paa_secgen_report_f["DURACION_ESTIMADA_DMA"] = $fdata;
		$tdataq_info_paa_secgen_report_f[".searchableFields"][] = "DURACION_ESTIMADA_DMA";
//	MODALIDAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "MODALIDAD";
	$fdata["GoodName"] = "MODALIDAD";
	$fdata["ownerTable"] = "q_info_paa_secgen";
	$fdata["Label"] = GetFieldLabel("q_info_paa_secgen_report_f","MODALIDAD");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_info_paa_secgen_report_f["MODALIDAD"] = $fdata;
		$tdataq_info_paa_secgen_report_f[".searchableFields"][] = "MODALIDAD";
//	MODALIDAD_CONT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "MODALIDAD_CONT";
	$fdata["GoodName"] = "MODALIDAD_CONT";
	$fdata["ownerTable"] = "q_info_paa_secgen";
	$fdata["Label"] = GetFieldLabel("q_info_paa_secgen_report_f","MODALIDAD_CONT");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "MODALIDAD_CONT";

		$fdata["sourceSingle"] = "MODALIDAD_CONT";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MODALIDAD_CONT";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_info_paa_secgen_report_f["MODALIDAD_CONT"] = $fdata;
		$tdataq_info_paa_secgen_report_f[".searchableFields"][] = "MODALIDAD_CONT";
//	FUENTE_RECURSOS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "FUENTE_RECURSOS";
	$fdata["GoodName"] = "FUENTE_RECURSOS";
	$fdata["ownerTable"] = "q_info_paa_secgen";
	$fdata["Label"] = GetFieldLabel("q_info_paa_secgen_report_f","FUENTE_RECURSOS");
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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "global_fuenterec";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "COD_FUENTE";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "NOM_FUENTE";

	

	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_info_paa_secgen_report_f["FUENTE_RECURSOS"] = $fdata;
		$tdataq_info_paa_secgen_report_f[".searchableFields"][] = "FUENTE_RECURSOS";
//	VALOR_SOLICITADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "VALOR_SOLICITADO";
	$fdata["GoodName"] = "VALOR_SOLICITADO";
	$fdata["ownerTable"] = "q_info_paa_secgen";
	$fdata["Label"] = GetFieldLabel("q_info_paa_secgen_report_f","VALOR_SOLICITADO");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "VALOR_SOLICITADO";

		$fdata["sourceSingle"] = "VALOR_SOLICITADO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VALOR_SOLICITADO";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_info_paa_secgen_report_f["VALOR_SOLICITADO"] = $fdata;
		$tdataq_info_paa_secgen_report_f[".searchableFields"][] = "VALOR_SOLICITADO";
//	vigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "vigencia";
	$fdata["GoodName"] = "vigencia";
	$fdata["ownerTable"] = "q_info_paa_secgen";
	$fdata["Label"] = GetFieldLabel("q_info_paa_secgen_report_f","vigencia");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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
		$fdata["filterTotalFields"] = "PAA_ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = true;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_info_paa_secgen_report_f["vigencia"] = $fdata;
		$tdataq_info_paa_secgen_report_f[".searchableFields"][] = "vigencia";
//	PROD_RUBRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "PROD_RUBRO";
	$fdata["GoodName"] = "PROD_RUBRO";
	$fdata["ownerTable"] = "q_info_paa_secgen";
	$fdata["Label"] = GetFieldLabel("q_info_paa_secgen_report_f","PROD_RUBRO");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_info_paa_secgen_report_f["PROD_RUBRO"] = $fdata;
		$tdataq_info_paa_secgen_report_f[".searchableFields"][] = "PROD_RUBRO";
//	PROD_PRODUCTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "PROD_PRODUCTO";
	$fdata["GoodName"] = "PROD_PRODUCTO";
	$fdata["ownerTable"] = "q_info_paa_secgen";
	$fdata["Label"] = GetFieldLabel("q_info_paa_secgen_report_f","PROD_PRODUCTO");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_info_paa_secgen_report_f["PROD_PRODUCTO"] = $fdata;
		$tdataq_info_paa_secgen_report_f[".searchableFields"][] = "PROD_PRODUCTO";
//	PROD_DESCRIPCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "PROD_DESCRIPCION";
	$fdata["GoodName"] = "PROD_DESCRIPCION";
	$fdata["ownerTable"] = "q_info_paa_secgen";
	$fdata["Label"] = GetFieldLabel("q_info_paa_secgen_report_f","PROD_DESCRIPCION");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_info_paa_secgen_report_f["PROD_DESCRIPCION"] = $fdata;
		$tdataq_info_paa_secgen_report_f[".searchableFields"][] = "PROD_DESCRIPCION";
//	PROD_DEP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "PROD_DEP";
	$fdata["GoodName"] = "PROD_DEP";
	$fdata["ownerTable"] = "q_info_paa_secgen";
	$fdata["Label"] = GetFieldLabel("q_info_paa_secgen_report_f","PROD_DEP");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_info_paa_secgen_report_f["PROD_DEP"] = $fdata;
		$tdataq_info_paa_secgen_report_f[".searchableFields"][] = "PROD_DEP";
//	PROD_USUARIORESP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "PROD_USUARIORESP";
	$fdata["GoodName"] = "PROD_USUARIORESP";
	$fdata["ownerTable"] = "q_info_paa_secgen";
	$fdata["Label"] = GetFieldLabel("q_info_paa_secgen_report_f","PROD_USUARIORESP");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_info_paa_secgen_report_f["PROD_USUARIORESP"] = $fdata;
		$tdataq_info_paa_secgen_report_f[".searchableFields"][] = "PROD_USUARIORESP";
//	ACT_VIGENCIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "ACT_VIGENCIA";
	$fdata["GoodName"] = "ACT_VIGENCIA";
	$fdata["ownerTable"] = "q_info_paa_secgen";
	$fdata["Label"] = GetFieldLabel("q_info_paa_secgen_report_f","ACT_VIGENCIA");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_info_paa_secgen_report_f["ACT_VIGENCIA"] = $fdata;
		$tdataq_info_paa_secgen_report_f[".searchableFields"][] = "ACT_VIGENCIA";
//	ACT_TIPO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "ACT_TIPO";
	$fdata["GoodName"] = "ACT_TIPO";
	$fdata["ownerTable"] = "q_info_paa_secgen";
	$fdata["Label"] = GetFieldLabel("q_info_paa_secgen_report_f","ACT_TIPO");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_info_paa_secgen_report_f["ACT_TIPO"] = $fdata;
		$tdataq_info_paa_secgen_report_f[".searchableFields"][] = "ACT_TIPO";
//	ACT_UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "ACT_UEJ";
	$fdata["GoodName"] = "ACT_UEJ";
	$fdata["ownerTable"] = "q_info_paa_secgen";
	$fdata["Label"] = GetFieldLabel("q_info_paa_secgen_report_f","ACT_UEJ");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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
		$fdata["filterTotalFields"] = "PAA_ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = true;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_info_paa_secgen_report_f["ACT_UEJ"] = $fdata;
		$tdataq_info_paa_secgen_report_f[".searchableFields"][] = "ACT_UEJ";
//	ACT_RUBRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "ACT_RUBRO";
	$fdata["GoodName"] = "ACT_RUBRO";
	$fdata["ownerTable"] = "q_info_paa_secgen";
	$fdata["Label"] = GetFieldLabel("q_info_paa_secgen_report_f","ACT_RUBRO");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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
		$fdata["filterTotalFields"] = "PAA_ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = true;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_info_paa_secgen_report_f["ACT_RUBRO"] = $fdata;
		$tdataq_info_paa_secgen_report_f[".searchableFields"][] = "ACT_RUBRO";
//	ACT_PRODUCTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "ACT_PRODUCTO";
	$fdata["GoodName"] = "ACT_PRODUCTO";
	$fdata["ownerTable"] = "q_info_paa_secgen";
	$fdata["Label"] = GetFieldLabel("q_info_paa_secgen_report_f","ACT_PRODUCTO");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_info_paa_secgen_report_f["ACT_PRODUCTO"] = $fdata;
		$tdataq_info_paa_secgen_report_f[".searchableFields"][] = "ACT_PRODUCTO";
//	ACT_ACTIVIDAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "ACT_ACTIVIDAD";
	$fdata["GoodName"] = "ACT_ACTIVIDAD";
	$fdata["ownerTable"] = "q_info_paa_secgen";
	$fdata["Label"] = GetFieldLabel("q_info_paa_secgen_report_f","ACT_ACTIVIDAD");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_info_paa_secgen_report_f["ACT_ACTIVIDAD"] = $fdata;
		$tdataq_info_paa_secgen_report_f[".searchableFields"][] = "ACT_ACTIVIDAD";
//	ACT_RECURSOS_aCTIVIDAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "ACT_RECURSOS_aCTIVIDAD";
	$fdata["GoodName"] = "ACT_RECURSOS_aCTIVIDAD";
	$fdata["ownerTable"] = "q_info_paa_secgen";
	$fdata["Label"] = GetFieldLabel("q_info_paa_secgen_report_f","ACT_RECURSOS_aCTIVIDAD");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_info_paa_secgen_report_f["ACT_RECURSOS_aCTIVIDAD"] = $fdata;
		$tdataq_info_paa_secgen_report_f[".searchableFields"][] = "ACT_RECURSOS_aCTIVIDAD";
//	UNIDAD_CONTRATACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "UNIDAD_CONTRATACION";
	$fdata["GoodName"] = "UNIDAD_CONTRATACION";
	$fdata["ownerTable"] = "q_info_paa_secgen";
	$fdata["Label"] = GetFieldLabel("q_info_paa_secgen_report_f","UNIDAD_CONTRATACION");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_info_paa_secgen_report_f["UNIDAD_CONTRATACION"] = $fdata;
		$tdataq_info_paa_secgen_report_f[".searchableFields"][] = "UNIDAD_CONTRATACION";
//	transferir_a
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "transferir_a";
	$fdata["GoodName"] = "transferir_a";
	$fdata["ownerTable"] = "q_info_paa_secgen";
	$fdata["Label"] = GetFieldLabel("q_info_paa_secgen_report_f","transferir_a");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_info_paa_secgen_report_f["transferir_a"] = $fdata;
		$tdataq_info_paa_secgen_report_f[".searchableFields"][] = "transferir_a";
//	patrimonio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "patrimonio";
	$fdata["GoodName"] = "patrimonio";
	$fdata["ownerTable"] = "q_info_paa_secgen";
	$fdata["Label"] = GetFieldLabel("q_info_paa_secgen_report_f","patrimonio");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_info_paa_secgen_report_f["patrimonio"] = $fdata;
		$tdataq_info_paa_secgen_report_f[".searchableFields"][] = "patrimonio";
//	TIPO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "TIPO";
	$fdata["GoodName"] = "TIPO";
	$fdata["ownerTable"] = "q_info_paa_secgen";
	$fdata["Label"] = GetFieldLabel("q_info_paa_secgen_report_f","TIPO");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_info_paa_secgen_report_f["TIPO"] = $fdata;
		$tdataq_info_paa_secgen_report_f[".searchableFields"][] = "TIPO";
//	UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "UEJ";
	$fdata["GoodName"] = "UEJ";
	$fdata["ownerTable"] = "q_info_paa_secgen";
	$fdata["Label"] = GetFieldLabel("q_info_paa_secgen_report_f","UEJ");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_info_paa_secgen_report_f["UEJ"] = $fdata;
		$tdataq_info_paa_secgen_report_f[".searchableFields"][] = "UEJ";
//	responsable_dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "responsable_dep";
	$fdata["GoodName"] = "responsable_dep";
	$fdata["ownerTable"] = "q_info_paa_secgen";
	$fdata["Label"] = GetFieldLabel("q_info_paa_secgen_report_f","responsable_dep");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "responsable_dep";

		$fdata["sourceSingle"] = "responsable_dep";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "responsable_dep";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "responsable_depsup", "lookup" => "id_depto_superior" );

	
	

	
	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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
		$fdata["filterTotalFields"] = "PAA_ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = true;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_info_paa_secgen_report_f["responsable_dep"] = $fdata;
		$tdataq_info_paa_secgen_report_f[".searchableFields"][] = "responsable_dep";
//	responsable_depsup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "responsable_depsup";
	$fdata["GoodName"] = "responsable_depsup";
	$fdata["ownerTable"] = "q_info_paa_secgen";
	$fdata["Label"] = GetFieldLabel("q_info_paa_secgen_report_f","responsable_depsup");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "responsable_depsup";

		$fdata["sourceSingle"] = "responsable_depsup";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "responsable_depsup";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dependencias_001";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_depto_superior";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Departamento_superior";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "responsable_dep";

	
	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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
		$fdata["filterTotalFields"] = "PAA_ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = true;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_info_paa_secgen_report_f["responsable_depsup"] = $fdata;
		$tdataq_info_paa_secgen_report_f[".searchableFields"][] = "responsable_depsup";


$tables_data["q_info_paa_secgen_report_f"]=&$tdataq_info_paa_secgen_report_f;
$field_labels["q_info_paa_secgen_report_f"] = &$fieldLabelsq_info_paa_secgen_report_f;
$fieldToolTips["q_info_paa_secgen_report_f"] = &$fieldToolTipsq_info_paa_secgen_report_f;
$placeHolders["q_info_paa_secgen_report_f"] = &$placeHoldersq_info_paa_secgen_report_f;
$page_titles["q_info_paa_secgen_report_f"] = &$pageTitlesq_info_paa_secgen_report_f;


changeTextControlsToDate( "q_info_paa_secgen_report_f" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["q_info_paa_secgen_report_f"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["q_info_paa_secgen_report_f"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_q_info_paa_secgen_report_f()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PAA_ID, ACT_ID, FUENTER, PROD_ID, COD_UNSPSC, DESCRIPCION, MES_INICIO, MES_PRESENTA, DURACION_CONTRATO, DURACION_ESTIMADA_DMA, MODALIDAD, MODALIDAD_CONT, FUENTE_RECURSOS, VALOR_SOLICITADO, vigencia, PROD_RUBRO, PROD_PRODUCTO, PROD_DESCRIPCION, PROD_DEP, PROD_USUARIORESP, ACT_VIGENCIA, ACT_TIPO, ACT_UEJ, ACT_RUBRO, ACT_PRODUCTO, ACT_ACTIVIDAD, ACT_RECURSOS_aCTIVIDAD, UNIDAD_CONTRATACION, transferir_a, patrimonio, TIPO, UEJ, responsable_dep, responsable_depsup";
$proto0["m_strFrom"] = "FROM q_info_paa_secgen";
$proto0["m_strWhere"] = "(TIPO = 'A')";
$proto0["m_strOrderBy"] = "";
	
										;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "TIPO = 'A'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "q_info_paa_secgen",
	"m_srcTableName" => "q_info_paa_secgen_report_f"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 'A'";
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
	"m_strTable" => "q_info_paa_secgen",
	"m_srcTableName" => "q_info_paa_secgen_report_f"
));

$proto6["m_sql"] = "PAA_ID";
$proto6["m_srcTableName"] = "q_info_paa_secgen_report_f";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_ID",
	"m_strTable" => "q_info_paa_secgen",
	"m_srcTableName" => "q_info_paa_secgen_report_f"
));

$proto8["m_sql"] = "ACT_ID";
$proto8["m_srcTableName"] = "q_info_paa_secgen_report_f";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "FUENTER",
	"m_strTable" => "q_info_paa_secgen",
	"m_srcTableName" => "q_info_paa_secgen_report_f"
));

$proto10["m_sql"] = "FUENTER";
$proto10["m_srcTableName"] = "q_info_paa_secgen_report_f";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PROD_ID",
	"m_strTable" => "q_info_paa_secgen",
	"m_srcTableName" => "q_info_paa_secgen_report_f"
));

$proto12["m_sql"] = "PROD_ID";
$proto12["m_srcTableName"] = "q_info_paa_secgen_report_f";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "COD_UNSPSC",
	"m_strTable" => "q_info_paa_secgen",
	"m_srcTableName" => "q_info_paa_secgen_report_f"
));

$proto14["m_sql"] = "COD_UNSPSC";
$proto14["m_srcTableName"] = "q_info_paa_secgen_report_f";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION",
	"m_strTable" => "q_info_paa_secgen",
	"m_srcTableName" => "q_info_paa_secgen_report_f"
));

$proto16["m_sql"] = "DESCRIPCION";
$proto16["m_srcTableName"] = "q_info_paa_secgen_report_f";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "MES_INICIO",
	"m_strTable" => "q_info_paa_secgen",
	"m_srcTableName" => "q_info_paa_secgen_report_f"
));

$proto18["m_sql"] = "MES_INICIO";
$proto18["m_srcTableName"] = "q_info_paa_secgen_report_f";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "MES_PRESENTA",
	"m_strTable" => "q_info_paa_secgen",
	"m_srcTableName" => "q_info_paa_secgen_report_f"
));

$proto20["m_sql"] = "MES_PRESENTA";
$proto20["m_srcTableName"] = "q_info_paa_secgen_report_f";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "DURACION_CONTRATO",
	"m_strTable" => "q_info_paa_secgen",
	"m_srcTableName" => "q_info_paa_secgen_report_f"
));

$proto22["m_sql"] = "DURACION_CONTRATO";
$proto22["m_srcTableName"] = "q_info_paa_secgen_report_f";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "DURACION_ESTIMADA_DMA",
	"m_strTable" => "q_info_paa_secgen",
	"m_srcTableName" => "q_info_paa_secgen_report_f"
));

$proto24["m_sql"] = "DURACION_ESTIMADA_DMA";
$proto24["m_srcTableName"] = "q_info_paa_secgen_report_f";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "MODALIDAD",
	"m_strTable" => "q_info_paa_secgen",
	"m_srcTableName" => "q_info_paa_secgen_report_f"
));

$proto26["m_sql"] = "MODALIDAD";
$proto26["m_srcTableName"] = "q_info_paa_secgen_report_f";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "MODALIDAD_CONT",
	"m_strTable" => "q_info_paa_secgen",
	"m_srcTableName" => "q_info_paa_secgen_report_f"
));

$proto28["m_sql"] = "MODALIDAD_CONT";
$proto28["m_srcTableName"] = "q_info_paa_secgen_report_f";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "FUENTE_RECURSOS",
	"m_strTable" => "q_info_paa_secgen",
	"m_srcTableName" => "q_info_paa_secgen_report_f"
));

$proto30["m_sql"] = "FUENTE_RECURSOS";
$proto30["m_srcTableName"] = "q_info_paa_secgen_report_f";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "VALOR_SOLICITADO",
	"m_strTable" => "q_info_paa_secgen",
	"m_srcTableName" => "q_info_paa_secgen_report_f"
));

$proto32["m_sql"] = "VALOR_SOLICITADO";
$proto32["m_srcTableName"] = "q_info_paa_secgen_report_f";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia",
	"m_strTable" => "q_info_paa_secgen",
	"m_srcTableName" => "q_info_paa_secgen_report_f"
));

$proto34["m_sql"] = "vigencia";
$proto34["m_srcTableName"] = "q_info_paa_secgen_report_f";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "PROD_RUBRO",
	"m_strTable" => "q_info_paa_secgen",
	"m_srcTableName" => "q_info_paa_secgen_report_f"
));

$proto36["m_sql"] = "PROD_RUBRO";
$proto36["m_srcTableName"] = "q_info_paa_secgen_report_f";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "PROD_PRODUCTO",
	"m_strTable" => "q_info_paa_secgen",
	"m_srcTableName" => "q_info_paa_secgen_report_f"
));

$proto38["m_sql"] = "PROD_PRODUCTO";
$proto38["m_srcTableName"] = "q_info_paa_secgen_report_f";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "PROD_DESCRIPCION",
	"m_strTable" => "q_info_paa_secgen",
	"m_srcTableName" => "q_info_paa_secgen_report_f"
));

$proto40["m_sql"] = "PROD_DESCRIPCION";
$proto40["m_srcTableName"] = "q_info_paa_secgen_report_f";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "PROD_DEP",
	"m_strTable" => "q_info_paa_secgen",
	"m_srcTableName" => "q_info_paa_secgen_report_f"
));

$proto42["m_sql"] = "PROD_DEP";
$proto42["m_srcTableName"] = "q_info_paa_secgen_report_f";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "PROD_USUARIORESP",
	"m_strTable" => "q_info_paa_secgen",
	"m_srcTableName" => "q_info_paa_secgen_report_f"
));

$proto44["m_sql"] = "PROD_USUARIORESP";
$proto44["m_srcTableName"] = "q_info_paa_secgen_report_f";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_VIGENCIA",
	"m_strTable" => "q_info_paa_secgen",
	"m_srcTableName" => "q_info_paa_secgen_report_f"
));

$proto46["m_sql"] = "ACT_VIGENCIA";
$proto46["m_srcTableName"] = "q_info_paa_secgen_report_f";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_TIPO",
	"m_strTable" => "q_info_paa_secgen",
	"m_srcTableName" => "q_info_paa_secgen_report_f"
));

$proto48["m_sql"] = "ACT_TIPO";
$proto48["m_srcTableName"] = "q_info_paa_secgen_report_f";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_UEJ",
	"m_strTable" => "q_info_paa_secgen",
	"m_srcTableName" => "q_info_paa_secgen_report_f"
));

$proto50["m_sql"] = "ACT_UEJ";
$proto50["m_srcTableName"] = "q_info_paa_secgen_report_f";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_RUBRO",
	"m_strTable" => "q_info_paa_secgen",
	"m_srcTableName" => "q_info_paa_secgen_report_f"
));

$proto52["m_sql"] = "ACT_RUBRO";
$proto52["m_srcTableName"] = "q_info_paa_secgen_report_f";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_PRODUCTO",
	"m_strTable" => "q_info_paa_secgen",
	"m_srcTableName" => "q_info_paa_secgen_report_f"
));

$proto54["m_sql"] = "ACT_PRODUCTO";
$proto54["m_srcTableName"] = "q_info_paa_secgen_report_f";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_ACTIVIDAD",
	"m_strTable" => "q_info_paa_secgen",
	"m_srcTableName" => "q_info_paa_secgen_report_f"
));

$proto56["m_sql"] = "ACT_ACTIVIDAD";
$proto56["m_srcTableName"] = "q_info_paa_secgen_report_f";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_RECURSOS_aCTIVIDAD",
	"m_strTable" => "q_info_paa_secgen",
	"m_srcTableName" => "q_info_paa_secgen_report_f"
));

$proto58["m_sql"] = "ACT_RECURSOS_aCTIVIDAD";
$proto58["m_srcTableName"] = "q_info_paa_secgen_report_f";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "UNIDAD_CONTRATACION",
	"m_strTable" => "q_info_paa_secgen",
	"m_srcTableName" => "q_info_paa_secgen_report_f"
));

$proto60["m_sql"] = "UNIDAD_CONTRATACION";
$proto60["m_srcTableName"] = "q_info_paa_secgen_report_f";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "transferir_a",
	"m_strTable" => "q_info_paa_secgen",
	"m_srcTableName" => "q_info_paa_secgen_report_f"
));

$proto62["m_sql"] = "transferir_a";
$proto62["m_srcTableName"] = "q_info_paa_secgen_report_f";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "patrimonio",
	"m_strTable" => "q_info_paa_secgen",
	"m_srcTableName" => "q_info_paa_secgen_report_f"
));

$proto64["m_sql"] = "patrimonio";
$proto64["m_srcTableName"] = "q_info_paa_secgen_report_f";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "q_info_paa_secgen",
	"m_srcTableName" => "q_info_paa_secgen_report_f"
));

$proto66["m_sql"] = "TIPO";
$proto66["m_srcTableName"] = "q_info_paa_secgen_report_f";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "UEJ",
	"m_strTable" => "q_info_paa_secgen",
	"m_srcTableName" => "q_info_paa_secgen_report_f"
));

$proto68["m_sql"] = "UEJ";
$proto68["m_srcTableName"] = "q_info_paa_secgen_report_f";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "responsable_dep",
	"m_strTable" => "q_info_paa_secgen",
	"m_srcTableName" => "q_info_paa_secgen_report_f"
));

$proto70["m_sql"] = "responsable_dep";
$proto70["m_srcTableName"] = "q_info_paa_secgen_report_f";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "responsable_depsup",
	"m_strTable" => "q_info_paa_secgen",
	"m_srcTableName" => "q_info_paa_secgen_report_f"
));

$proto72["m_sql"] = "responsable_depsup";
$proto72["m_srcTableName"] = "q_info_paa_secgen_report_f";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto74=array();
$proto74["m_link"] = "SQLL_MAIN";
			$proto75=array();
$proto75["m_strName"] = "q_info_paa_secgen";
$proto75["m_srcTableName"] = "q_info_paa_secgen_report_f";
$proto75["m_columns"] = array();
$proto75["m_columns"][] = "PAA_ID";
$proto75["m_columns"][] = "ACT_ID";
$proto75["m_columns"][] = "FUENTER";
$proto75["m_columns"][] = "PROD_ID";
$proto75["m_columns"][] = "COD_UNSPSC";
$proto75["m_columns"][] = "DESCRIPCION";
$proto75["m_columns"][] = "MES_INICIO";
$proto75["m_columns"][] = "MES_PRESENTA";
$proto75["m_columns"][] = "DURACION_CONTRATO";
$proto75["m_columns"][] = "DURACION_ESTIMADA_DMA";
$proto75["m_columns"][] = "MODALIDAD";
$proto75["m_columns"][] = "MODALIDAD_CONT";
$proto75["m_columns"][] = "FUENTE_RECURSOS";
$proto75["m_columns"][] = "VALOR_SOLICITADO";
$proto75["m_columns"][] = "vigencia";
$proto75["m_columns"][] = "PROD_RUBRO";
$proto75["m_columns"][] = "PROD_PRODUCTO";
$proto75["m_columns"][] = "PROD_DESCRIPCION";
$proto75["m_columns"][] = "PROD_DEP";
$proto75["m_columns"][] = "PROD_USUARIORESP";
$proto75["m_columns"][] = "ACT_VIGENCIA";
$proto75["m_columns"][] = "ACT_TIPO";
$proto75["m_columns"][] = "ACT_UEJ";
$proto75["m_columns"][] = "ACT_RUBRO";
$proto75["m_columns"][] = "ACT_PRODUCTO";
$proto75["m_columns"][] = "ACT_ACTIVIDAD";
$proto75["m_columns"][] = "ACT_RECURSOS_aCTIVIDAD";
$proto75["m_columns"][] = "UNIDAD_CONTRATACION";
$proto75["m_columns"][] = "transferir_a";
$proto75["m_columns"][] = "patrimonio";
$proto75["m_columns"][] = "TIPO";
$proto75["m_columns"][] = "UEJ";
$proto75["m_columns"][] = "responsable_dep";
$proto75["m_columns"][] = "responsable_depsup";
$obj = new SQLTable($proto75);

$proto74["m_table"] = $obj;
$proto74["m_sql"] = "q_info_paa_secgen";
$proto74["m_alias"] = "";
$proto74["m_srcTableName"] = "q_info_paa_secgen_report_f";
$proto76=array();
$proto76["m_sql"] = "";
$proto76["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto76["m_column"]=$obj;
$proto76["m_contained"] = array();
$proto76["m_strCase"] = "";
$proto76["m_havingmode"] = false;
$proto76["m_inBrackets"] = false;
$proto76["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto76);

$proto74["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto74);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="q_info_paa_secgen_report_f";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_info_paa_secgen_report_f = createSqlQuery_q_info_paa_secgen_report_f();


	
										;

																																		

$tdataq_info_paa_secgen_report_f[".sqlquery"] = $queryData_q_info_paa_secgen_report_f;



$tdataq_info_paa_secgen_report_f[".hasEvents"] = false;

?>