<?php
$tdatapaa_master_integrado = array();
$tdatapaa_master_integrado[".searchableFields"] = array();
$tdatapaa_master_integrado[".ShortName"] = "paa_master_integrado";
$tdatapaa_master_integrado[".OwnerID"] = "sys_user";
$tdatapaa_master_integrado[".OriginalTable"] = "paa_master";


$tdatapaa_master_integrado[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapaa_master_integrado[".originalPagesByType"] = $tdatapaa_master_integrado[".pagesByType"];
$tdatapaa_master_integrado[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapaa_master_integrado[".originalPages"] = $tdatapaa_master_integrado[".pages"];
$tdatapaa_master_integrado[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapaa_master_integrado[".originalDefaultPages"] = $tdatapaa_master_integrado[".defaultPages"];

//	field labels
$fieldLabelspaa_master_integrado = array();
$fieldToolTipspaa_master_integrado = array();
$pageTitlespaa_master_integrado = array();
$placeHolderspaa_master_integrado = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspaa_master_integrado["Spanish"] = array();
	$fieldToolTipspaa_master_integrado["Spanish"] = array();
	$placeHolderspaa_master_integrado["Spanish"] = array();
	$pageTitlespaa_master_integrado["Spanish"] = array();
	$fieldLabelspaa_master_integrado["Spanish"]["PAA_ID"] = "PAA ID";
	$fieldToolTipspaa_master_integrado["Spanish"]["PAA_ID"] = "";
	$placeHolderspaa_master_integrado["Spanish"]["PAA_ID"] = "";
	$fieldLabelspaa_master_integrado["Spanish"]["COD_UNSPSC"] = "UNSPSC";
	$fieldToolTipspaa_master_integrado["Spanish"]["COD_UNSPSC"] = "";
	$placeHolderspaa_master_integrado["Spanish"]["COD_UNSPSC"] = "";
	$fieldLabelspaa_master_integrado["Spanish"]["DESCRIPCION"] = "Descripción | Objeto";
	$fieldToolTipspaa_master_integrado["Spanish"]["DESCRIPCION"] = "";
	$placeHolderspaa_master_integrado["Spanish"]["DESCRIPCION"] = "";
	$fieldLabelspaa_master_integrado["Spanish"]["MES_INICIO"] = "Mes de inicio del proceso";
	$fieldToolTipspaa_master_integrado["Spanish"]["MES_INICIO"] = "";
	$placeHolderspaa_master_integrado["Spanish"]["MES_INICIO"] = "";
	$fieldLabelspaa_master_integrado["Spanish"]["MES_PRESENTA"] = "Mes presentación de propuestas";
	$fieldToolTipspaa_master_integrado["Spanish"]["MES_PRESENTA"] = "";
	$placeHolderspaa_master_integrado["Spanish"]["MES_PRESENTA"] = "";
	$fieldLabelspaa_master_integrado["Spanish"]["DURACION_CONTRATO"] = "Duración del contrato";
	$fieldToolTipspaa_master_integrado["Spanish"]["DURACION_CONTRATO"] = "";
	$placeHolderspaa_master_integrado["Spanish"]["DURACION_CONTRATO"] = "";
	$fieldLabelspaa_master_integrado["Spanish"]["DURACION_ESTIMADA_DMA"] = "Duración estimada en Dias | Meses | Años";
	$fieldToolTipspaa_master_integrado["Spanish"]["DURACION_ESTIMADA_DMA"] = "";
	$placeHolderspaa_master_integrado["Spanish"]["DURACION_ESTIMADA_DMA"] = "";
	$fieldLabelspaa_master_integrado["Spanish"]["MODALIDAD"] = "Modalidad de contratación";
	$fieldToolTipspaa_master_integrado["Spanish"]["MODALIDAD"] = "";
	$placeHolderspaa_master_integrado["Spanish"]["MODALIDAD"] = "";
	$fieldLabelspaa_master_integrado["Spanish"]["FUENTE_RECURSOS"] = "Fuente de recursos";
	$fieldToolTipspaa_master_integrado["Spanish"]["FUENTE_RECURSOS"] = "";
	$placeHolderspaa_master_integrado["Spanish"]["FUENTE_RECURSOS"] = "";
	$fieldLabelspaa_master_integrado["Spanish"]["VALOR"] = "Valor solicitado en la presente publicación";
	$fieldToolTipspaa_master_integrado["Spanish"]["VALOR"] = "";
	$placeHolderspaa_master_integrado["Spanish"]["VALOR"] = "";
	$fieldLabelspaa_master_integrado["Spanish"]["VALOR_VIGENCIA"] = "Saldo disponible por solicitar";
	$fieldToolTipspaa_master_integrado["Spanish"]["VALOR_VIGENCIA"] = "";
	$placeHolderspaa_master_integrado["Spanish"]["VALOR_VIGENCIA"] = "";
	$fieldLabelspaa_master_integrado["Spanish"]["VALOR_VIGENCIA_FUTURA"] = "Valor de la Vigencia Futura";
	$fieldToolTipspaa_master_integrado["Spanish"]["VALOR_VIGENCIA_FUTURA"] = "";
	$placeHolderspaa_master_integrado["Spanish"]["VALOR_VIGENCIA_FUTURA"] = "";
	$fieldLabelspaa_master_integrado["Spanish"]["VF"] = "¿Esta solicitud cuenta con Vigencias Futuras?";
	$fieldToolTipspaa_master_integrado["Spanish"]["VF"] = "";
	$placeHolderspaa_master_integrado["Spanish"]["VF"] = "";
	$fieldLabelspaa_master_integrado["Spanish"]["ESTADO_VF"] = "Estado de la Vigencia Futura";
	$fieldToolTipspaa_master_integrado["Spanish"]["ESTADO_VF"] = "";
	$placeHolderspaa_master_integrado["Spanish"]["ESTADO_VF"] = "";
	$fieldLabelspaa_master_integrado["Spanish"]["UNIDAD_CONTRATACION"] = "Unidad de Contratación";
	$fieldToolTipspaa_master_integrado["Spanish"]["UNIDAD_CONTRATACION"] = "";
	$placeHolderspaa_master_integrado["Spanish"]["UNIDAD_CONTRATACION"] = "";
	$fieldLabelspaa_master_integrado["Spanish"]["COD_UBICACION"] = "Ubicación de la contratación";
	$fieldToolTipspaa_master_integrado["Spanish"]["COD_UBICACION"] = "";
	$placeHolderspaa_master_integrado["Spanish"]["COD_UBICACION"] = "";
	$fieldLabelspaa_master_integrado["Spanish"]["RESPONSABLE_NOMBRE"] = "Enlace";
	$fieldToolTipspaa_master_integrado["Spanish"]["RESPONSABLE_NOMBRE"] = "";
	$placeHolderspaa_master_integrado["Spanish"]["RESPONSABLE_NOMBRE"] = "";
	$fieldLabelspaa_master_integrado["Spanish"]["RESPONSABLE_TELEFONO"] = "Teléfono";
	$fieldToolTipspaa_master_integrado["Spanish"]["RESPONSABLE_TELEFONO"] = "";
	$placeHolderspaa_master_integrado["Spanish"]["RESPONSABLE_TELEFONO"] = "";
	$fieldLabelspaa_master_integrado["Spanish"]["RESPONSABLE_EMAIL"] = "RESPONSABLE EMAIL";
	$fieldToolTipspaa_master_integrado["Spanish"]["RESPONSABLE_EMAIL"] = "";
	$placeHolderspaa_master_integrado["Spanish"]["RESPONSABLE_EMAIL"] = "";
	$fieldLabelspaa_master_integrado["Spanish"]["responsable"] = "Responsable de la contratación | Ejecución";
	$fieldToolTipspaa_master_integrado["Spanish"]["responsable"] = "";
	$placeHolderspaa_master_integrado["Spanish"]["responsable"] = "";
	$fieldLabelspaa_master_integrado["Spanish"]["vigencia"] = "Vigencia";
	$fieldToolTipspaa_master_integrado["Spanish"]["vigencia"] = "";
	$placeHolderspaa_master_integrado["Spanish"]["vigencia"] = "";
	$fieldLabelspaa_master_integrado["Spanish"]["sys_user"] = "Registrado por";
	$fieldToolTipspaa_master_integrado["Spanish"]["sys_user"] = "";
	$placeHolderspaa_master_integrado["Spanish"]["sys_user"] = "";
	$fieldLabelspaa_master_integrado["Spanish"]["sys_date"] = "Fecha de registro";
	$fieldToolTipspaa_master_integrado["Spanish"]["sys_date"] = "";
	$placeHolderspaa_master_integrado["Spanish"]["sys_date"] = "";
	$fieldLabelspaa_master_integrado["Spanish"]["sys_status"] = "Estado";
	$fieldToolTipspaa_master_integrado["Spanish"]["sys_status"] = "";
	$placeHolderspaa_master_integrado["Spanish"]["sys_status"] = "";
	$fieldLabelspaa_master_integrado["Spanish"]["REQ_MAILNOT"] = "Notificar solicitud";
	$fieldToolTipspaa_master_integrado["Spanish"]["REQ_MAILNOT"] = "";
	$placeHolderspaa_master_integrado["Spanish"]["REQ_MAILNOT"] = "";
	$fieldLabelspaa_master_integrado["Spanish"]["TIPOSOL"] = "Marcar esta solicitud para...";
	$fieldToolTipspaa_master_integrado["Spanish"]["TIPOSOL"] = "";
	$placeHolderspaa_master_integrado["Spanish"]["TIPOSOL"] = "";
	$fieldLabelspaa_master_integrado["Spanish"]["registrado_por"] = "Registrado Por";
	$fieldToolTipspaa_master_integrado["Spanish"]["registrado_por"] = "";
	$placeHolderspaa_master_integrado["Spanish"]["registrado_por"] = "";
	$fieldLabelspaa_master_integrado["Spanish"]["ACT_ID"] = "Cod. Actividad";
	$fieldToolTipspaa_master_integrado["Spanish"]["ACT_ID"] = "";
	$placeHolderspaa_master_integrado["Spanish"]["ACT_ID"] = "";
	$fieldLabelspaa_master_integrado["Spanish"]["ct_integrado"] = "Integrado";
	$fieldToolTipspaa_master_integrado["Spanish"]["ct_integrado"] = "";
	$placeHolderspaa_master_integrado["Spanish"]["ct_integrado"] = "";
	$fieldLabelspaa_master_integrado["Spanish"]["QTYPAAINTEGRADOS"] = "Solicitudes asociadas";
	$fieldToolTipspaa_master_integrado["Spanish"]["QTYPAAINTEGRADOS"] = "";
	$placeHolderspaa_master_integrado["Spanish"]["QTYPAAINTEGRADOS"] = "";
	$fieldLabelspaa_master_integrado["Spanish"]["TOTALPAAINTEGRADO"] = "Valor solicitado en la presente publicación";
	$fieldToolTipspaa_master_integrado["Spanish"]["TOTALPAAINTEGRADO"] = "";
	$placeHolderspaa_master_integrado["Spanish"]["TOTALPAAINTEGRADO"] = "";
	$pageTitlespaa_master_integrado["Spanish"]["add"] = "Registrar nueva solicitud PAA | Integrado";
	$pageTitlespaa_master_integrado["Spanish"]["print"] = "Programación contratación integrada";
	if (count($fieldToolTipspaa_master_integrado["Spanish"]))
		$tdatapaa_master_integrado[".isUseToolTips"] = true;
}


	$tdatapaa_master_integrado[".NCSearch"] = true;



$tdatapaa_master_integrado[".shortTableName"] = "paa_master_integrado";
$tdatapaa_master_integrado[".nSecOptions"] = 2;

$tdatapaa_master_integrado[".mainTableOwnerID"] = "sys_user";
$tdatapaa_master_integrado[".entityType"] = 1;
$tdatapaa_master_integrado[".connId"] = "mincit_global_20x_at_127_0_0_1";


$tdatapaa_master_integrado[".strOriginalTableName"] = "paa_master";

	



$tdatapaa_master_integrado[".showAddInPopup"] = false;

$tdatapaa_master_integrado[".showEditInPopup"] = false;

$tdatapaa_master_integrado[".showViewInPopup"] = false;

$tdatapaa_master_integrado[".listAjax"] = false;
//	temporary
//$tdatapaa_master_integrado[".listAjax"] = false;

	$tdatapaa_master_integrado[".audit"] = true;

	$tdatapaa_master_integrado[".locking"] = true;


$pages = $tdatapaa_master_integrado[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapaa_master_integrado[".edit"] = true;
	$tdatapaa_master_integrado[".afterEditAction"] = 0;
	$tdatapaa_master_integrado[".closePopupAfterEdit"] = 1;
	$tdatapaa_master_integrado[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatapaa_master_integrado[".add"] = true;
$tdatapaa_master_integrado[".afterAddAction"] = 0;
$tdatapaa_master_integrado[".closePopupAfterAdd"] = 1;
$tdatapaa_master_integrado[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatapaa_master_integrado[".list"] = true;
}



$tdatapaa_master_integrado[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapaa_master_integrado[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapaa_master_integrado[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapaa_master_integrado[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapaa_master_integrado[".printFriendly"] = true;
}



$tdatapaa_master_integrado[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapaa_master_integrado[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapaa_master_integrado[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapaa_master_integrado[".isUseAjaxSuggest"] = true;



												

$tdatapaa_master_integrado[".ajaxCodeSnippetAdded"] = false;

$tdatapaa_master_integrado[".buttonsAdded"] = false;

$tdatapaa_master_integrado[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapaa_master_integrado[".isUseTimeForSearch"] = false;


$tdatapaa_master_integrado[".badgeColor"] = "CD5C5C";


$tdatapaa_master_integrado[".allSearchFields"] = array();
$tdatapaa_master_integrado[".filterFields"] = array();
$tdatapaa_master_integrado[".requiredSearchFields"] = array();

$tdatapaa_master_integrado[".googleLikeFields"] = array();
$tdatapaa_master_integrado[".googleLikeFields"][] = "PAA_ID";
$tdatapaa_master_integrado[".googleLikeFields"][] = "ACT_ID";
$tdatapaa_master_integrado[".googleLikeFields"][] = "COD_UNSPSC";
$tdatapaa_master_integrado[".googleLikeFields"][] = "DESCRIPCION";
$tdatapaa_master_integrado[".googleLikeFields"][] = "MES_INICIO";
$tdatapaa_master_integrado[".googleLikeFields"][] = "MES_PRESENTA";
$tdatapaa_master_integrado[".googleLikeFields"][] = "DURACION_CONTRATO";
$tdatapaa_master_integrado[".googleLikeFields"][] = "DURACION_ESTIMADA_DMA";
$tdatapaa_master_integrado[".googleLikeFields"][] = "MODALIDAD";
$tdatapaa_master_integrado[".googleLikeFields"][] = "FUENTE_RECURSOS";
$tdatapaa_master_integrado[".googleLikeFields"][] = "VALOR";
$tdatapaa_master_integrado[".googleLikeFields"][] = "VALOR_VIGENCIA";
$tdatapaa_master_integrado[".googleLikeFields"][] = "VALOR_VIGENCIA_FUTURA";
$tdatapaa_master_integrado[".googleLikeFields"][] = "VF";
$tdatapaa_master_integrado[".googleLikeFields"][] = "ESTADO_VF";
$tdatapaa_master_integrado[".googleLikeFields"][] = "UNIDAD_CONTRATACION";
$tdatapaa_master_integrado[".googleLikeFields"][] = "COD_UBICACION";
$tdatapaa_master_integrado[".googleLikeFields"][] = "RESPONSABLE_NOMBRE";
$tdatapaa_master_integrado[".googleLikeFields"][] = "RESPONSABLE_TELEFONO";
$tdatapaa_master_integrado[".googleLikeFields"][] = "RESPONSABLE_EMAIL";
$tdatapaa_master_integrado[".googleLikeFields"][] = "responsable";
$tdatapaa_master_integrado[".googleLikeFields"][] = "vigencia";
$tdatapaa_master_integrado[".googleLikeFields"][] = "sys_user";
$tdatapaa_master_integrado[".googleLikeFields"][] = "sys_date";
$tdatapaa_master_integrado[".googleLikeFields"][] = "sys_status";
$tdatapaa_master_integrado[".googleLikeFields"][] = "REQ_MAILNOT";
$tdatapaa_master_integrado[".googleLikeFields"][] = "TIPOSOL";
$tdatapaa_master_integrado[".googleLikeFields"][] = "registrado_por";
$tdatapaa_master_integrado[".googleLikeFields"][] = "ct_integrado";
$tdatapaa_master_integrado[".googleLikeFields"][] = "QTYPAAINTEGRADOS";
$tdatapaa_master_integrado[".googleLikeFields"][] = "TOTALPAAINTEGRADO";



$tdatapaa_master_integrado[".tableType"] = "list";

$tdatapaa_master_integrado[".printerPageOrientation"] = 0;
$tdatapaa_master_integrado[".nPrinterPageScale"] = 100;

$tdatapaa_master_integrado[".nPrinterSplitRecords"] = 40;

$tdatapaa_master_integrado[".geocodingEnabled"] = false;










$tdatapaa_master_integrado[".pageSize"] = 20;

$tdatapaa_master_integrado[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapaa_master_integrado[".strOrderBy"] = $tstrOrderBy;

$tdatapaa_master_integrado[".orderindexes"] = array();


$tdatapaa_master_integrado[".sqlHead"] = "SELECT paa_master.PAA_ID,  paa_master.ACT_ID,  paa_master.COD_UNSPSC,  paa_master.DESCRIPCION,  paa_master.MES_INICIO,  paa_master.MES_PRESENTA,  paa_master.DURACION_CONTRATO,  paa_master.DURACION_ESTIMADA_DMA,  paa_master.MODALIDAD,  paa_master.FUENTE_RECURSOS,  paa_master.VALOR,  paa_master.VALOR_VIGENCIA,  paa_master.VALOR_VIGENCIA_FUTURA,  paa_master.VF,  paa_master.ESTADO_VF,  paa_master.UNIDAD_CONTRATACION,  paa_master.COD_UBICACION,  paa_master.RESPONSABLE_NOMBRE,  paa_master.RESPONSABLE_TELEFONO,  paa_master.RESPONSABLE_EMAIL,  paa_master.responsable,  paa_master.vigencia,  paa_master.sys_user,  paa_master.sys_date,  paa_master.sys_status,  paa_master.REQ_MAILNOT,  paa_master.TIPOSOL,  paa_master.registrado_por,  paa_master.ct_integrado,  q_sumatotal_nopaa_integrados.QTYPAAINTEGRADOS,  q_sumatotal_nopaa_integrados.TOTALPAAINTEGRADO";
$tdatapaa_master_integrado[".sqlFrom"] = "FROM paa_master  LEFT OUTER JOIN q_sumatotal_nopaa_integrados ON paa_master.PAA_ID = q_sumatotal_nopaa_integrados.PAA_ID_FK";
$tdatapaa_master_integrado[".sqlWhereExpr"] = "(paa_master.UNIDAD_CONTRATACION ='PAA') AND (paa_master.ct_integrado = 2)";
$tdatapaa_master_integrado[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "0",
	'name' => "2024",
	'nameType' => 'Text',
	'where' => "vigencia = 2024",
	'showRowCount' => 1,
	'hideEmpty' => 1,
);
$arrGridTabs[] = array(
	'tabId' => "1",
	'name' => "2023",
	'nameType' => 'Text',
	'where' => "vigencia = 2023",
	'showRowCount' => 1,
	'hideEmpty' => 0,
);
$tdatapaa_master_integrado[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapaa_master_integrado[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapaa_master_integrado[".arrGroupsPerPage"] = $arrGPP;

$tdatapaa_master_integrado[".highlightSearchResults"] = true;

$tableKeyspaa_master_integrado = array();
$tableKeyspaa_master_integrado[] = "PAA_ID";
$tdatapaa_master_integrado[".Keys"] = $tableKeyspaa_master_integrado;


$tdatapaa_master_integrado[".hideMobileList"] = array();




//	PAA_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PAA_ID";
	$fdata["GoodName"] = "PAA_ID";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_integrado","PAA_ID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "PAA_ID";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paa_master.PAA_ID";

	
	
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


	$tdatapaa_master_integrado["PAA_ID"] = $fdata;
		$tdatapaa_master_integrado[".searchableFields"][] = "PAA_ID";
//	ACT_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ACT_ID";
	$fdata["GoodName"] = "ACT_ID";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_integrado","ACT_ID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ACT_ID";

		$fdata["sourceSingle"] = "ACT_ID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paa_master.ACT_ID";

	
	
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "q_ctrl_saldos_act_paa";
	$edata["LookupConnId"] = "sep2_at_127_0_0_1";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"VALOR_VIGENCIA", 'lookupF'=>"SALDO_DISPONIBLE");
	$edata["autoCompleteFields"][] = array('masterF'=>"RESPONSABLE_NOMBRE", 'lookupF'=>"RESPONSABLE_002");
	$edata["autoCompleteFields"][] = array('masterF'=>"responsable", 'lookupF'=>"RESPONSABLE_002");
	$edata["autoCompleteFields"][] = array('masterF'=>"vigencia", 'lookupF'=>"VIGENCIA");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ACT_ID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "ACTIVIDAD";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
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


	$tdatapaa_master_integrado["ACT_ID"] = $fdata;
		$tdatapaa_master_integrado[".searchableFields"][] = "ACT_ID";
//	COD_UNSPSC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "COD_UNSPSC";
	$fdata["GoodName"] = "COD_UNSPSC";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_integrado","COD_UNSPSC");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "COD_UNSPSC";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paa_master.COD_UNSPSC";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Email Hyperlink");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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
	$edata["LookupTable"] = "global_unspsc";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "COD_UNSPSC";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "COD_UNSPSC";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
		$edata["Multiselect"] = true;

	
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


	$tdatapaa_master_integrado["COD_UNSPSC"] = $fdata;
		$tdatapaa_master_integrado[".searchableFields"][] = "COD_UNSPSC";
//	DESCRIPCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DESCRIPCION";
	$fdata["GoodName"] = "DESCRIPCION";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_integrado","DESCRIPCION");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "DESCRIPCION";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paa_master.DESCRIPCION";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
	
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
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Objeto ya existe, verifique antes de solicitar", "messageType" => "Text");

	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
		$edata["denyDuplicates"] = true;

	
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


	$tdatapaa_master_integrado["DESCRIPCION"] = $fdata;
		$tdatapaa_master_integrado[".searchableFields"][] = "DESCRIPCION";
//	MES_INICIO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "MES_INICIO";
	$fdata["GoodName"] = "MES_INICIO";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_integrado","MES_INICIO");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "MES_INICIO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paa_master.MES_INICIO";

	
	
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
	$edata["LookupTable"] = "global_meses";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "COD_MES";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "NOM_MES";

	

	
	$edata["LookupOrderBy"] = "COD_MES";

	
	
	
	

	
	
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


	$tdatapaa_master_integrado["MES_INICIO"] = $fdata;
		$tdatapaa_master_integrado[".searchableFields"][] = "MES_INICIO";
//	MES_PRESENTA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "MES_PRESENTA";
	$fdata["GoodName"] = "MES_PRESENTA";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_integrado","MES_PRESENTA");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "MES_PRESENTA";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paa_master.MES_PRESENTA";

	
	
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
	$edata["LookupTable"] = "global_meses";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "COD_MES";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "NOM_MES";

	

	
	$edata["LookupOrderBy"] = "COD_MES";

	
	
	
	

	
	
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


	$tdatapaa_master_integrado["MES_PRESENTA"] = $fdata;
		$tdatapaa_master_integrado[".searchableFields"][] = "MES_PRESENTA";
//	DURACION_CONTRATO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DURACION_CONTRATO";
	$fdata["GoodName"] = "DURACION_CONTRATO";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_integrado","DURACION_CONTRATO");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "DURACION_CONTRATO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paa_master.DURACION_CONTRATO";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdatapaa_master_integrado["DURACION_CONTRATO"] = $fdata;
		$tdatapaa_master_integrado[".searchableFields"][] = "DURACION_CONTRATO";
//	DURACION_ESTIMADA_DMA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DURACION_ESTIMADA_DMA";
	$fdata["GoodName"] = "DURACION_ESTIMADA_DMA";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_integrado","DURACION_ESTIMADA_DMA");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "DURACION_ESTIMADA_DMA";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paa_master.DURACION_ESTIMADA_DMA";

	
	
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
	$edata["LookupTable"] = "global_duracion";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "COD_DURACION";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "NOM_DURACION";

	

	
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


	$tdatapaa_master_integrado["DURACION_ESTIMADA_DMA"] = $fdata;
		$tdatapaa_master_integrado[".searchableFields"][] = "DURACION_ESTIMADA_DMA";
//	MODALIDAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "MODALIDAD";
	$fdata["GoodName"] = "MODALIDAD";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_integrado","MODALIDAD");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "MODALIDAD";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paa_master.MODALIDAD";

	
	
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
	$edata["LookupTable"] = "global_modalidad";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "COD_MODALIDAD";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "NOM_MODALIDAD";

	

	
	$edata["LookupOrderBy"] = "NOM_MODALIDAD";

	
	
	
	

	
	
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


	$tdatapaa_master_integrado["MODALIDAD"] = $fdata;
		$tdatapaa_master_integrado[".searchableFields"][] = "MODALIDAD";
//	FUENTE_RECURSOS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "FUENTE_RECURSOS";
	$fdata["GoodName"] = "FUENTE_RECURSOS";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_integrado","FUENTE_RECURSOS");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "FUENTE_RECURSOS";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paa_master.FUENTE_RECURSOS";

	
	
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
	$edata["LookupTable"] = "global_fuenterec";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "COD_FUENTE";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "NOM_FUENTE";

	

	
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


	$tdatapaa_master_integrado["FUENTE_RECURSOS"] = $fdata;
		$tdatapaa_master_integrado[".searchableFields"][] = "FUENTE_RECURSOS";
//	VALOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "VALOR";
	$fdata["GoodName"] = "VALOR";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_integrado","VALOR");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "VALOR";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paa_master.VALOR";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Currency");
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


	$tdatapaa_master_integrado["VALOR"] = $fdata;
		$tdatapaa_master_integrado[".searchableFields"][] = "VALOR";
//	VALOR_VIGENCIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "VALOR_VIGENCIA";
	$fdata["GoodName"] = "VALOR_VIGENCIA";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_integrado","VALOR_VIGENCIA");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "VALOR_VIGENCIA";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paa_master.VALOR_VIGENCIA";

	
	
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


	$tdatapaa_master_integrado["VALOR_VIGENCIA"] = $fdata;
		$tdatapaa_master_integrado[".searchableFields"][] = "VALOR_VIGENCIA";
//	VALOR_VIGENCIA_FUTURA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "VALOR_VIGENCIA_FUTURA";
	$fdata["GoodName"] = "VALOR_VIGENCIA_FUTURA";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_integrado","VALOR_VIGENCIA_FUTURA");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "VALOR_VIGENCIA_FUTURA";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paa_master.VALOR_VIGENCIA_FUTURA";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Currency");
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


	$tdatapaa_master_integrado["VALOR_VIGENCIA_FUTURA"] = $fdata;
		$tdatapaa_master_integrado[".searchableFields"][] = "VALOR_VIGENCIA_FUTURA";
//	VF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "VF";
	$fdata["GoodName"] = "VF";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_integrado","VF");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "VF";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paa_master.VF";

	
	
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
	$edata["LookupTable"] = "global_vf";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "COD_VF";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "NOM_VF";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "ESTADO_VF";

	
	
	
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


	$tdatapaa_master_integrado["VF"] = $fdata;
		$tdatapaa_master_integrado[".searchableFields"][] = "VF";
//	ESTADO_VF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "ESTADO_VF";
	$fdata["GoodName"] = "ESTADO_VF";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_integrado","ESTADO_VF");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "ESTADO_VF";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paa_master.ESTADO_VF";

	
	
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
	$edata["LookupTable"] = "global_estvf";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

	
		
	$edata["LinkField"] = "COD_ESTVF";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "NOM_ESTVF";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "VF", "lookup" => "COD_VF" );

	
	

	
	
	
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


	$tdatapaa_master_integrado["ESTADO_VF"] = $fdata;
		$tdatapaa_master_integrado[".searchableFields"][] = "ESTADO_VF";
//	UNIDAD_CONTRATACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "UNIDAD_CONTRATACION";
	$fdata["GoodName"] = "UNIDAD_CONTRATACION";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_integrado","UNIDAD_CONTRATACION");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "UNIDAD_CONTRATACION";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paa_master.UNIDAD_CONTRATACION";

	
	
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


	$tdatapaa_master_integrado["UNIDAD_CONTRATACION"] = $fdata;
		$tdatapaa_master_integrado[".searchableFields"][] = "UNIDAD_CONTRATACION";
//	COD_UBICACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "COD_UBICACION";
	$fdata["GoodName"] = "COD_UBICACION";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_integrado","COD_UBICACION");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "COD_UBICACION";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paa_master.COD_UBICACION";

	
	
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
	$edata["LookupTable"] = "global_ubicacion";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "COD_UBICA";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "NOM_UBICA";

	

	
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


	$tdatapaa_master_integrado["COD_UBICACION"] = $fdata;
		$tdatapaa_master_integrado[".searchableFields"][] = "COD_UBICACION";
//	RESPONSABLE_NOMBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "RESPONSABLE_NOMBRE";
	$fdata["GoodName"] = "RESPONSABLE_NOMBRE";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_integrado","RESPONSABLE_NOMBRE");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "RESPONSABLE_NOMBRE";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paa_master.RESPONSABLE_NOMBRE";

	
	
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


	$tdatapaa_master_integrado["RESPONSABLE_NOMBRE"] = $fdata;
		$tdatapaa_master_integrado[".searchableFields"][] = "RESPONSABLE_NOMBRE";
//	RESPONSABLE_TELEFONO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "RESPONSABLE_TELEFONO";
	$fdata["GoodName"] = "RESPONSABLE_TELEFONO";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_integrado","RESPONSABLE_TELEFONO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "RESPONSABLE_TELEFONO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paa_master.RESPONSABLE_TELEFONO";

	
	
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


	$tdatapaa_master_integrado["RESPONSABLE_TELEFONO"] = $fdata;
		$tdatapaa_master_integrado[".searchableFields"][] = "RESPONSABLE_TELEFONO";
//	RESPONSABLE_EMAIL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "RESPONSABLE_EMAIL";
	$fdata["GoodName"] = "RESPONSABLE_EMAIL";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_integrado","RESPONSABLE_EMAIL");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "RESPONSABLE_EMAIL";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paa_master.RESPONSABLE_EMAIL";

	
	
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


	$tdatapaa_master_integrado["RESPONSABLE_EMAIL"] = $fdata;
		$tdatapaa_master_integrado[".searchableFields"][] = "RESPONSABLE_EMAIL";
//	responsable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "responsable";
	$fdata["GoodName"] = "responsable";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_integrado","responsable");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "responsable";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paa_master.responsable";

	
	
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
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "Username";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "usr_nombresfull";

	

	
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


	$tdatapaa_master_integrado["responsable"] = $fdata;
		$tdatapaa_master_integrado[".searchableFields"][] = "responsable";
//	vigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "vigencia";
	$fdata["GoodName"] = "vigencia";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_integrado","vigencia");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "vigencia";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paa_master.vigencia";

	
	
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
	$edata["LookupTable"] = "tparam_vigencia";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "anio_id";
	$edata["LinkFieldType"] = 2;
	$edata["DisplayField"] = "anio_id";

				$edata["LookupWhere"] = "estado = 1";


	
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


	$tdatapaa_master_integrado["vigencia"] = $fdata;
		$tdatapaa_master_integrado[".searchableFields"][] = "vigencia";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_integrado","sys_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sys_user";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paa_master.sys_user";

	
	
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


	$tdatapaa_master_integrado["sys_user"] = $fdata;
		$tdatapaa_master_integrado[".searchableFields"][] = "sys_user";
//	sys_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "sys_date";
	$fdata["GoodName"] = "sys_date";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_integrado","sys_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sys_date";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paa_master.sys_date";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
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


	$tdatapaa_master_integrado["sys_date"] = $fdata;
		$tdatapaa_master_integrado[".searchableFields"][] = "sys_date";
//	sys_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "sys_status";
	$fdata["GoodName"] = "sys_status";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_integrado","sys_status");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "sys_status";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paa_master.sys_status";

	
	
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
	$edata["LookupTable"] = "global_estado";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"REQ_MAILNOT", 'lookupF'=>"not_mail");
	$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "status_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "status_name";

				$edata["LookupWhere"] = "status_id = 1";


	
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


	$tdatapaa_master_integrado["sys_status"] = $fdata;
		$tdatapaa_master_integrado[".searchableFields"][] = "sys_status";
//	REQ_MAILNOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "REQ_MAILNOT";
	$fdata["GoodName"] = "REQ_MAILNOT";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_integrado","REQ_MAILNOT");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "REQ_MAILNOT";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paa_master.REQ_MAILNOT";

	
	
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


	$tdatapaa_master_integrado["REQ_MAILNOT"] = $fdata;
		$tdatapaa_master_integrado[".searchableFields"][] = "REQ_MAILNOT";
//	TIPOSOL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "TIPOSOL";
	$fdata["GoodName"] = "TIPOSOL";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_integrado","TIPOSOL");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "TIPOSOL";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paa_master.TIPOSOL";

	
	
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
	$edata["LookupTable"] = "tparam_publicarsecop";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

	
		
	$edata["LinkField"] = "snid";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "sn";

				$edata["LookupWhere"] = "snid = 1";


	
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
		
		$edata["autoUpdatable"] = true;

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


	$tdatapaa_master_integrado["TIPOSOL"] = $fdata;
		$tdatapaa_master_integrado[".searchableFields"][] = "TIPOSOL";
//	registrado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "registrado_por";
	$fdata["GoodName"] = "registrado_por";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_integrado","registrado_por");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "registrado_por";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paa_master.registrado_por";

	
	
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


	$tdatapaa_master_integrado["registrado_por"] = $fdata;
		$tdatapaa_master_integrado[".searchableFields"][] = "registrado_por";
//	ct_integrado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "ct_integrado";
	$fdata["GoodName"] = "ct_integrado";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_integrado","ct_integrado");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "ct_integrado";

		$fdata["sourceSingle"] = "ct_integrado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paa_master.ct_integrado";

	
	
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


	$tdatapaa_master_integrado["ct_integrado"] = $fdata;
		$tdatapaa_master_integrado[".searchableFields"][] = "ct_integrado";
//	QTYPAAINTEGRADOS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "QTYPAAINTEGRADOS";
	$fdata["GoodName"] = "QTYPAAINTEGRADOS";
	$fdata["ownerTable"] = "q_sumatotal_nopaa_integrados";
	$fdata["Label"] = GetFieldLabel("paa_master_integrado","QTYPAAINTEGRADOS");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "QTYPAAINTEGRADOS";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "q_sumatotal_nopaa_integrados.QTYPAAINTEGRADOS";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatapaa_master_integrado["QTYPAAINTEGRADOS"] = $fdata;
		$tdatapaa_master_integrado[".searchableFields"][] = "QTYPAAINTEGRADOS";
//	TOTALPAAINTEGRADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "TOTALPAAINTEGRADO";
	$fdata["GoodName"] = "TOTALPAAINTEGRADO";
	$fdata["ownerTable"] = "q_sumatotal_nopaa_integrados";
	$fdata["Label"] = GetFieldLabel("paa_master_integrado","TOTALPAAINTEGRADO");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "TOTALPAAINTEGRADO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "q_sumatotal_nopaa_integrados.TOTALPAAINTEGRADO";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatapaa_master_integrado["TOTALPAAINTEGRADO"] = $fdata;
		$tdatapaa_master_integrado[".searchableFields"][] = "TOTALPAAINTEGRADO";


$tables_data["paa_master_integrado"]=&$tdatapaa_master_integrado;
$field_labels["paa_master_integrado"] = &$fieldLabelspaa_master_integrado;
$fieldToolTips["paa_master_integrado"] = &$fieldToolTipspaa_master_integrado;
$placeHolders["paa_master_integrado"] = &$placeHolderspaa_master_integrado;
$page_titles["paa_master_integrado"] = &$pageTitlespaa_master_integrado;


changeTextControlsToDate( "paa_master_integrado" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["paa_master_integrado"] = array();
//	q_info_nopaa_integrado
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="q_info_nopaa_integrado";
		$detailsParam["dOriginalTable"] = "q_info_nopaa_integrado";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "q_info_nopaa_integrado";
	$detailsParam["dCaptionTable"] = GetTableCaption("q_info_nopaa_integrado");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["paa_master_integrado"][$dIndex] = $detailsParam;

	
		$detailsTablesData["paa_master_integrado"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["paa_master_integrado"][$dIndex]["masterKeys"][]="PAA_ID";

				$detailsTablesData["paa_master_integrado"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["paa_master_integrado"][$dIndex]["detailKeys"][]="PAAID_INTEGRADO";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["paa_master_integrado"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_paa_master_integrado()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "paa_master.PAA_ID,  paa_master.ACT_ID,  paa_master.COD_UNSPSC,  paa_master.DESCRIPCION,  paa_master.MES_INICIO,  paa_master.MES_PRESENTA,  paa_master.DURACION_CONTRATO,  paa_master.DURACION_ESTIMADA_DMA,  paa_master.MODALIDAD,  paa_master.FUENTE_RECURSOS,  paa_master.VALOR,  paa_master.VALOR_VIGENCIA,  paa_master.VALOR_VIGENCIA_FUTURA,  paa_master.VF,  paa_master.ESTADO_VF,  paa_master.UNIDAD_CONTRATACION,  paa_master.COD_UBICACION,  paa_master.RESPONSABLE_NOMBRE,  paa_master.RESPONSABLE_TELEFONO,  paa_master.RESPONSABLE_EMAIL,  paa_master.responsable,  paa_master.vigencia,  paa_master.sys_user,  paa_master.sys_date,  paa_master.sys_status,  paa_master.REQ_MAILNOT,  paa_master.TIPOSOL,  paa_master.registrado_por,  paa_master.ct_integrado,  q_sumatotal_nopaa_integrados.QTYPAAINTEGRADOS,  q_sumatotal_nopaa_integrados.TOTALPAAINTEGRADO";
$proto0["m_strFrom"] = "FROM paa_master  LEFT OUTER JOIN q_sumatotal_nopaa_integrados ON paa_master.PAA_ID = q_sumatotal_nopaa_integrados.PAA_ID_FK";
$proto0["m_strWhere"] = "(paa_master.UNIDAD_CONTRATACION ='PAA') AND (paa_master.ct_integrado = 2)";
$proto0["m_strOrderBy"] = "";
	
										;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(paa_master.UNIDAD_CONTRATACION ='PAA') AND (paa_master.ct_integrado = 2)";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(paa_master.UNIDAD_CONTRATACION ='PAA') AND (paa_master.ct_integrado = 2)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "paa_master.UNIDAD_CONTRATACION ='PAA'";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "UNIDAD_CONTRATACION",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_integrado"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "='PAA'";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "paa_master.ct_integrado = 2";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ct_integrado",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_integrado"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "= 2";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto8=array();
$proto8["m_sql"] = "";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "PAA_ID",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_integrado"
));

$proto10["m_sql"] = "paa_master.PAA_ID";
$proto10["m_srcTableName"] = "paa_master_integrado";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_ID",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_integrado"
));

$proto12["m_sql"] = "paa_master.ACT_ID";
$proto12["m_srcTableName"] = "paa_master_integrado";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "COD_UNSPSC",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_integrado"
));

$proto14["m_sql"] = "paa_master.COD_UNSPSC";
$proto14["m_srcTableName"] = "paa_master_integrado";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_integrado"
));

$proto16["m_sql"] = "paa_master.DESCRIPCION";
$proto16["m_srcTableName"] = "paa_master_integrado";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "MES_INICIO",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_integrado"
));

$proto18["m_sql"] = "paa_master.MES_INICIO";
$proto18["m_srcTableName"] = "paa_master_integrado";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "MES_PRESENTA",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_integrado"
));

$proto20["m_sql"] = "paa_master.MES_PRESENTA";
$proto20["m_srcTableName"] = "paa_master_integrado";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "DURACION_CONTRATO",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_integrado"
));

$proto22["m_sql"] = "paa_master.DURACION_CONTRATO";
$proto22["m_srcTableName"] = "paa_master_integrado";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "DURACION_ESTIMADA_DMA",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_integrado"
));

$proto24["m_sql"] = "paa_master.DURACION_ESTIMADA_DMA";
$proto24["m_srcTableName"] = "paa_master_integrado";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "MODALIDAD",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_integrado"
));

$proto26["m_sql"] = "paa_master.MODALIDAD";
$proto26["m_srcTableName"] = "paa_master_integrado";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "FUENTE_RECURSOS",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_integrado"
));

$proto28["m_sql"] = "paa_master.FUENTE_RECURSOS";
$proto28["m_srcTableName"] = "paa_master_integrado";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "VALOR",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_integrado"
));

$proto30["m_sql"] = "paa_master.VALOR";
$proto30["m_srcTableName"] = "paa_master_integrado";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "VALOR_VIGENCIA",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_integrado"
));

$proto32["m_sql"] = "paa_master.VALOR_VIGENCIA";
$proto32["m_srcTableName"] = "paa_master_integrado";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "VALOR_VIGENCIA_FUTURA",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_integrado"
));

$proto34["m_sql"] = "paa_master.VALOR_VIGENCIA_FUTURA";
$proto34["m_srcTableName"] = "paa_master_integrado";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "VF",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_integrado"
));

$proto36["m_sql"] = "paa_master.VF";
$proto36["m_srcTableName"] = "paa_master_integrado";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "ESTADO_VF",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_integrado"
));

$proto38["m_sql"] = "paa_master.ESTADO_VF";
$proto38["m_srcTableName"] = "paa_master_integrado";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "UNIDAD_CONTRATACION",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_integrado"
));

$proto40["m_sql"] = "paa_master.UNIDAD_CONTRATACION";
$proto40["m_srcTableName"] = "paa_master_integrado";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "COD_UBICACION",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_integrado"
));

$proto42["m_sql"] = "paa_master.COD_UBICACION";
$proto42["m_srcTableName"] = "paa_master_integrado";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "RESPONSABLE_NOMBRE",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_integrado"
));

$proto44["m_sql"] = "paa_master.RESPONSABLE_NOMBRE";
$proto44["m_srcTableName"] = "paa_master_integrado";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "RESPONSABLE_TELEFONO",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_integrado"
));

$proto46["m_sql"] = "paa_master.RESPONSABLE_TELEFONO";
$proto46["m_srcTableName"] = "paa_master_integrado";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "RESPONSABLE_EMAIL",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_integrado"
));

$proto48["m_sql"] = "paa_master.RESPONSABLE_EMAIL";
$proto48["m_srcTableName"] = "paa_master_integrado";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "responsable",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_integrado"
));

$proto50["m_sql"] = "paa_master.responsable";
$proto50["m_srcTableName"] = "paa_master_integrado";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_integrado"
));

$proto52["m_sql"] = "paa_master.vigencia";
$proto52["m_srcTableName"] = "paa_master_integrado";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_integrado"
));

$proto54["m_sql"] = "paa_master.sys_user";
$proto54["m_srcTableName"] = "paa_master_integrado";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_date",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_integrado"
));

$proto56["m_sql"] = "paa_master.sys_date";
$proto56["m_srcTableName"] = "paa_master_integrado";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_status",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_integrado"
));

$proto58["m_sql"] = "paa_master.sys_status";
$proto58["m_srcTableName"] = "paa_master_integrado";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "REQ_MAILNOT",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_integrado"
));

$proto60["m_sql"] = "paa_master.REQ_MAILNOT";
$proto60["m_srcTableName"] = "paa_master_integrado";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPOSOL",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_integrado"
));

$proto62["m_sql"] = "paa_master.TIPOSOL";
$proto62["m_srcTableName"] = "paa_master_integrado";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "registrado_por",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_integrado"
));

$proto64["m_sql"] = "paa_master.registrado_por";
$proto64["m_srcTableName"] = "paa_master_integrado";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "ct_integrado",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_integrado"
));

$proto66["m_sql"] = "paa_master.ct_integrado";
$proto66["m_srcTableName"] = "paa_master_integrado";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "QTYPAAINTEGRADOS",
	"m_strTable" => "q_sumatotal_nopaa_integrados",
	"m_srcTableName" => "paa_master_integrado"
));

$proto68["m_sql"] = "q_sumatotal_nopaa_integrados.QTYPAAINTEGRADOS";
$proto68["m_srcTableName"] = "paa_master_integrado";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "TOTALPAAINTEGRADO",
	"m_strTable" => "q_sumatotal_nopaa_integrados",
	"m_srcTableName" => "paa_master_integrado"
));

$proto70["m_sql"] = "q_sumatotal_nopaa_integrados.TOTALPAAINTEGRADO";
$proto70["m_srcTableName"] = "paa_master_integrado";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto72=array();
$proto72["m_link"] = "SQLL_MAIN";
			$proto73=array();
$proto73["m_strName"] = "paa_master";
$proto73["m_srcTableName"] = "paa_master_integrado";
$proto73["m_columns"] = array();
$proto73["m_columns"][] = "PAA_ID";
$proto73["m_columns"][] = "ACT_ID";
$proto73["m_columns"][] = "PROD_ID";
$proto73["m_columns"][] = "CDP_ID_FK";
$proto73["m_columns"][] = "TIPO";
$proto73["m_columns"][] = "CDP_INTEGRADO";
$proto73["m_columns"][] = "PAAID_INTEGRADO";
$proto73["m_columns"][] = "sys_status";
$proto73["m_columns"][] = "COD_UNSPSC";
$proto73["m_columns"][] = "DESCRIPCION";
$proto73["m_columns"][] = "DESCRIPCION_NEW";
$proto73["m_columns"][] = "MES_INICIO";
$proto73["m_columns"][] = "MES_PRESENTA";
$proto73["m_columns"][] = "FECHA_PRESENTA_PROPUESTAS";
$proto73["m_columns"][] = "DURACION_CONTRATO";
$proto73["m_columns"][] = "DURACION_ESTIMADA_DMA";
$proto73["m_columns"][] = "MODALIDAD";
$proto73["m_columns"][] = "FUENTE_RECURSOS";
$proto73["m_columns"][] = "VALOR";
$proto73["m_columns"][] = "VALOR_ORIGINAL";
$proto73["m_columns"][] = "VALOR_VIGENCIA";
$proto73["m_columns"][] = "VALOR_VIGENCIA_FUTURA";
$proto73["m_columns"][] = "VF";
$proto73["m_columns"][] = "ESTADO_VF";
$proto73["m_columns"][] = "UNIDAD_CONTRATACION";
$proto73["m_columns"][] = "COD_UBICACION";
$proto73["m_columns"][] = "RESPONSABLE_NOMBRE";
$proto73["m_columns"][] = "RESPONSABLE_TELEFONO";
$proto73["m_columns"][] = "RESPONSABLE_EMAIL";
$proto73["m_columns"][] = "responsable";
$proto73["m_columns"][] = "vigencia";
$proto73["m_columns"][] = "sys_user";
$proto73["m_columns"][] = "registrado_por";
$proto73["m_columns"][] = "sys_date";
$proto73["m_columns"][] = "REQ_OBS";
$proto73["m_columns"][] = "REQ_DATE";
$proto73["m_columns"][] = "REQ_MAILNOT";
$proto73["m_columns"][] = "SolModifica";
$proto73["m_columns"][] = "ContIdFK";
$proto73["m_columns"][] = "OBS_anulacion";
$proto73["m_columns"][] = "TIPOSOL";
$proto73["m_columns"][] = "USOS_TOTAL";
$proto73["m_columns"][] = "responsable_dep";
$proto73["m_columns"][] = "responsable_depsup";
$proto73["m_columns"][] = "transferir_a";
$proto73["m_columns"][] = "ct_integrado";
$proto73["m_columns"][] = "cont_tipoc";
$proto73["m_columns"][] = "cont_modalidad";
$proto73["m_columns"][] = "justificacion";
$proto73["m_columns"][] = "nbc";
$proto73["m_columns"][] = "nivel_formacion";
$proto73["m_columns"][] = "titulo_otorgado";
$proto73["m_columns"][] = "nivel_formacion_a";
$proto73["m_columns"][] = "titulo_otorgado_a";
$proto73["m_columns"][] = "tiempo_experiencia";
$proto73["m_columns"][] = "experiencia";
$proto73["m_columns"][] = "idoneidad";
$proto73["m_columns"][] = "cont_tipoca";
$proto73["m_columns"][] = "cont_tipocb";
$proto73["m_columns"][] = "cont_tipocc";
$proto73["m_columns"][] = "VALOR_MENSUAL";
$obj = new SQLTable($proto73);

$proto72["m_table"] = $obj;
$proto72["m_sql"] = "paa_master";
$proto72["m_alias"] = "";
$proto72["m_srcTableName"] = "paa_master_integrado";
$proto74=array();
$proto74["m_sql"] = "";
$proto74["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto74["m_column"]=$obj;
$proto74["m_contained"] = array();
$proto74["m_strCase"] = "";
$proto74["m_havingmode"] = false;
$proto74["m_inBrackets"] = false;
$proto74["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto74);

$proto72["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto72);

$proto0["m_fromlist"][]=$obj;
												$proto76=array();
$proto76["m_link"] = "SQLL_LEFTJOIN";
			$proto77=array();
$proto77["m_strName"] = "q_sumatotal_nopaa_integrados";
$proto77["m_srcTableName"] = "paa_master_integrado";
$proto77["m_columns"] = array();
$proto77["m_columns"][] = "PAA_ID_FK";
$proto77["m_columns"][] = "QTYPAAINTEGRADOS";
$proto77["m_columns"][] = "TOTALPAAINTEGRADO";
$obj = new SQLTable($proto77);

$proto76["m_table"] = $obj;
$proto76["m_sql"] = "LEFT OUTER JOIN q_sumatotal_nopaa_integrados ON paa_master.PAA_ID = q_sumatotal_nopaa_integrados.PAA_ID_FK";
$proto76["m_alias"] = "";
$proto76["m_srcTableName"] = "paa_master_integrado";
$proto78=array();
$proto78["m_sql"] = "q_sumatotal_nopaa_integrados.PAA_ID_FK = paa_master.PAA_ID";
$proto78["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "PAA_ID_FK",
	"m_strTable" => "q_sumatotal_nopaa_integrados",
	"m_srcTableName" => "paa_master_integrado"
));

$proto78["m_column"]=$obj;
$proto78["m_contained"] = array();
$proto78["m_strCase"] = "= paa_master.PAA_ID";
$proto78["m_havingmode"] = false;
$proto78["m_inBrackets"] = false;
$proto78["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto78);

$proto76["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto76);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="paa_master_integrado";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_paa_master_integrado = createSqlQuery_paa_master_integrado();


	
										;

																															

$tdatapaa_master_integrado[".sqlquery"] = $queryData_paa_master_integrado;



include_once(getabspath("include/paa_master_integrado_events.php"));
$tdatapaa_master_integrado[".hasEvents"] = true;

?>