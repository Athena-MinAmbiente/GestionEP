<?php
$tdatapaa_master = array();
$tdatapaa_master[".searchableFields"] = array();
$tdatapaa_master[".ShortName"] = "paa_master";
$tdatapaa_master[".OwnerID"] = "";
$tdatapaa_master[".OriginalTable"] = "paa_master";


$tdatapaa_master[".pagesByType"] = my_json_decode( "{\"add\":[\"add\",\"add1\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapaa_master[".originalPagesByType"] = $tdatapaa_master[".pagesByType"];
$tdatapaa_master[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\",\"add1\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapaa_master[".originalPages"] = $tdatapaa_master[".pages"];
$tdatapaa_master[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapaa_master[".originalDefaultPages"] = $tdatapaa_master[".defaultPages"];

//	field labels
$fieldLabelspaa_master = array();
$fieldToolTipspaa_master = array();
$pageTitlespaa_master = array();
$placeHolderspaa_master = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspaa_master["Spanish"] = array();
	$fieldToolTipspaa_master["Spanish"] = array();
	$placeHolderspaa_master["Spanish"] = array();
	$pageTitlespaa_master["Spanish"] = array();
	$fieldLabelspaa_master["Spanish"]["PAA_ID"] = "PAA ID";
	$fieldToolTipspaa_master["Spanish"]["PAA_ID"] = "";
	$placeHolderspaa_master["Spanish"]["PAA_ID"] = "";
	$fieldLabelspaa_master["Spanish"]["ACT_ID"] = "Cod. Actividad";
	$fieldToolTipspaa_master["Spanish"]["ACT_ID"] = "";
	$placeHolderspaa_master["Spanish"]["ACT_ID"] = "";
	$fieldLabelspaa_master["Spanish"]["COD_UNSPSC"] = "UNSPSC";
	$fieldToolTipspaa_master["Spanish"]["COD_UNSPSC"] = "";
	$placeHolderspaa_master["Spanish"]["COD_UNSPSC"] = "";
	$fieldLabelspaa_master["Spanish"]["DESCRIPCION"] = "Descripción | Objeto";
	$fieldToolTipspaa_master["Spanish"]["DESCRIPCION"] = "";
	$placeHolderspaa_master["Spanish"]["DESCRIPCION"] = "Objeto del contrato a realizar";
	$fieldLabelspaa_master["Spanish"]["MES_INICIO"] = "Mes de inicio del proceso";
	$fieldToolTipspaa_master["Spanish"]["MES_INICIO"] = "";
	$placeHolderspaa_master["Spanish"]["MES_INICIO"] = "";
	$fieldLabelspaa_master["Spanish"]["MES_PRESENTA"] = "Mes presentación de propuestas";
	$fieldToolTipspaa_master["Spanish"]["MES_PRESENTA"] = "";
	$placeHolderspaa_master["Spanish"]["MES_PRESENTA"] = "";
	$fieldLabelspaa_master["Spanish"]["DURACION_CONTRATO"] = "Duración del contrato";
	$fieldToolTipspaa_master["Spanish"]["DURACION_CONTRATO"] = "<p><em>No usar decimales</em></p>";
	$placeHolderspaa_master["Spanish"]["DURACION_CONTRATO"] = "";
	$fieldLabelspaa_master["Spanish"]["DURACION_ESTIMADA_DMA"] = "Duración estimada en Dias | Meses | Años";
	$fieldToolTipspaa_master["Spanish"]["DURACION_ESTIMADA_DMA"] = "";
	$placeHolderspaa_master["Spanish"]["DURACION_ESTIMADA_DMA"] = "";
	$fieldLabelspaa_master["Spanish"]["MODALIDAD"] = "Modalidad de contratación";
	$fieldToolTipspaa_master["Spanish"]["MODALIDAD"] = "";
	$placeHolderspaa_master["Spanish"]["MODALIDAD"] = "";
	$fieldLabelspaa_master["Spanish"]["FUENTE_RECURSOS"] = "Fuente de recursos";
	$fieldToolTipspaa_master["Spanish"]["FUENTE_RECURSOS"] = "";
	$placeHolderspaa_master["Spanish"]["FUENTE_RECURSOS"] = "";
	$fieldLabelspaa_master["Spanish"]["VALOR"] = "Valor solicitado en la presente solicitud";
	$fieldToolTipspaa_master["Spanish"]["VALOR"] = "";
	$placeHolderspaa_master["Spanish"]["VALOR"] = "";
	$fieldLabelspaa_master["Spanish"]["VALOR_VIGENCIA"] = "Saldo disponible por solicitar";
	$fieldToolTipspaa_master["Spanish"]["VALOR_VIGENCIA"] = "";
	$placeHolderspaa_master["Spanish"]["VALOR_VIGENCIA"] = "";
	$fieldLabelspaa_master["Spanish"]["VALOR_VIGENCIA_FUTURA"] = "Valor de la Vigencia Futura";
	$fieldToolTipspaa_master["Spanish"]["VALOR_VIGENCIA_FUTURA"] = "";
	$placeHolderspaa_master["Spanish"]["VALOR_VIGENCIA_FUTURA"] = "Escriba cero (0) si no aplica";
	$fieldLabelspaa_master["Spanish"]["VF"] = "¿Esta solicitud cuenta con Vigencias Futuras?";
	$fieldToolTipspaa_master["Spanish"]["VF"] = "";
	$placeHolderspaa_master["Spanish"]["VF"] = "";
	$fieldLabelspaa_master["Spanish"]["ESTADO_VF"] = "Estado de la Vigencia Futura";
	$fieldToolTipspaa_master["Spanish"]["ESTADO_VF"] = "";
	$placeHolderspaa_master["Spanish"]["ESTADO_VF"] = "";
	$fieldLabelspaa_master["Spanish"]["UNIDAD_CONTRATACION"] = "Unidad de Contratación";
	$fieldToolTipspaa_master["Spanish"]["UNIDAD_CONTRATACION"] = "";
	$placeHolderspaa_master["Spanish"]["UNIDAD_CONTRATACION"] = "";
	$fieldLabelspaa_master["Spanish"]["COD_UBICACION"] = "Ubicación de la contratación";
	$fieldToolTipspaa_master["Spanish"]["COD_UBICACION"] = "";
	$placeHolderspaa_master["Spanish"]["COD_UBICACION"] = "";
	$fieldLabelspaa_master["Spanish"]["RESPONSABLE_NOMBRE"] = "Enlace";
	$fieldToolTipspaa_master["Spanish"]["RESPONSABLE_NOMBRE"] = "";
	$placeHolderspaa_master["Spanish"]["RESPONSABLE_NOMBRE"] = "";
	$fieldLabelspaa_master["Spanish"]["RESPONSABLE_TELEFONO"] = "Teléfono";
	$fieldToolTipspaa_master["Spanish"]["RESPONSABLE_TELEFONO"] = "";
	$placeHolderspaa_master["Spanish"]["RESPONSABLE_TELEFONO"] = "";
	$fieldLabelspaa_master["Spanish"]["RESPONSABLE_EMAIL"] = "RESPONSABLE EMAIL";
	$fieldToolTipspaa_master["Spanish"]["RESPONSABLE_EMAIL"] = "";
	$placeHolderspaa_master["Spanish"]["RESPONSABLE_EMAIL"] = "";
	$fieldLabelspaa_master["Spanish"]["responsable"] = "Enlace";
	$fieldToolTipspaa_master["Spanish"]["responsable"] = "";
	$placeHolderspaa_master["Spanish"]["responsable"] = "";
	$fieldLabelspaa_master["Spanish"]["vigencia"] = "Vigencia";
	$fieldToolTipspaa_master["Spanish"]["vigencia"] = "";
	$placeHolderspaa_master["Spanish"]["vigencia"] = "";
	$fieldLabelspaa_master["Spanish"]["sys_user"] = "Registrado por";
	$fieldToolTipspaa_master["Spanish"]["sys_user"] = "";
	$placeHolderspaa_master["Spanish"]["sys_user"] = "";
	$fieldLabelspaa_master["Spanish"]["sys_date"] = "Fecha de registro";
	$fieldToolTipspaa_master["Spanish"]["sys_date"] = "";
	$placeHolderspaa_master["Spanish"]["sys_date"] = "";
	$fieldLabelspaa_master["Spanish"]["sys_status"] = "Estado";
	$fieldToolTipspaa_master["Spanish"]["sys_status"] = "";
	$placeHolderspaa_master["Spanish"]["sys_status"] = "";
	$fieldLabelspaa_master["Spanish"]["REQ_MAILNOT"] = "Notificar solicitud";
	$fieldToolTipspaa_master["Spanish"]["REQ_MAILNOT"] = "";
	$placeHolderspaa_master["Spanish"]["REQ_MAILNOT"] = "";
	$fieldLabelspaa_master["Spanish"]["TIPOSOL"] = "Marcar esta solicitud para...";
	$fieldToolTipspaa_master["Spanish"]["TIPOSOL"] = "";
	$placeHolderspaa_master["Spanish"]["TIPOSOL"] = "";
	$fieldLabelspaa_master["Spanish"]["registrado_por"] = "Registrado Por";
	$fieldToolTipspaa_master["Spanish"]["registrado_por"] = "";
	$placeHolderspaa_master["Spanish"]["registrado_por"] = "";
	$fieldLabelspaa_master["Spanish"]["FECHA_PRESENTA_PROPUESTAS"] = "Fecha de radicación en el grupo de contratos";
	$fieldToolTipspaa_master["Spanish"]["FECHA_PRESENTA_PROPUESTAS"] = "<p><em>Con esta fecha se realizará el seguimiento a la ejecución por el Ordenador del Gasto</em></p>";
	$placeHolderspaa_master["Spanish"]["FECHA_PRESENTA_PROPUESTAS"] = "";
	$fieldLabelspaa_master["Spanish"]["responsable_depsup"] = "Despacho | Dirección";
	$fieldToolTipspaa_master["Spanish"]["responsable_depsup"] = "";
	$placeHolderspaa_master["Spanish"]["responsable_depsup"] = "";
	$fieldLabelspaa_master["Spanish"]["responsable_dep"] = "Dependencia | Grupo de trabajo";
	$fieldToolTipspaa_master["Spanish"]["responsable_dep"] = "";
	$placeHolderspaa_master["Spanish"]["responsable_dep"] = "";
	$fieldLabelspaa_master["Spanish"]["PAAID_INTEGRADO"] = "Publicación en SECOP";
	$fieldToolTipspaa_master["Spanish"]["PAAID_INTEGRADO"] = "<p><span style=\"color: rgb(153, 51, 255);\">Por favor, tenga en cuenta que en este espacio solo se atienden solicitudes correspondientes a publicaciones en </span><strong style=\"color: rgb(153, 51, 255);\">SECOP</strong><span style=\"color: rgb(153, 51, 255);\">. Además, si esta solicitud forma parte de un proceso integrado, le recomendamos realizarla a través de la opción de </span><strong style=\"color: rgb(178, 107, 0);\">NOPAA</strong><span style=\"color: rgb(153, 51, 255);\">.</span></p>";
	$placeHolderspaa_master["Spanish"]["PAAID_INTEGRADO"] = "";
	$fieldLabelspaa_master["Spanish"]["TIPO"] = "Tipo";
	$fieldToolTipspaa_master["Spanish"]["TIPO"] = "";
	$placeHolderspaa_master["Spanish"]["TIPO"] = "";
	$fieldLabelspaa_master["Spanish"]["justificacion"] = "Justificación de la necesidad de contratación";
	$fieldToolTipspaa_master["Spanish"]["justificacion"] = "";
	$placeHolderspaa_master["Spanish"]["justificacion"] = "Justificación de la necesidad de contratación";
	$fieldLabelspaa_master["Spanish"]["experiencia"] = "Experiencia relacionada";
	$fieldToolTipspaa_master["Spanish"]["experiencia"] = "";
	$placeHolderspaa_master["Spanish"]["experiencia"] = "";
	$fieldLabelspaa_master["Spanish"]["idoneidad"] = "Idoneidad";
	$fieldToolTipspaa_master["Spanish"]["idoneidad"] = "<p><em style=\"color: rgb(68, 68, 68); background-color: rgb(255, 255, 255);\">Competencia, tanto a nivel de conocimientos como de experiencia, para ejercer la profesión o cargo determinado.</em></p>";
	$placeHolderspaa_master["Spanish"]["idoneidad"] = "";
	$fieldLabelspaa_master["Spanish"]["cont_tipoca"] = "Grupo";
	$fieldToolTipspaa_master["Spanish"]["cont_tipoca"] = "";
	$placeHolderspaa_master["Spanish"]["cont_tipoca"] = "";
	$fieldLabelspaa_master["Spanish"]["cont_tipocb"] = "Modalidad";
	$fieldToolTipspaa_master["Spanish"]["cont_tipocb"] = "";
	$placeHolderspaa_master["Spanish"]["cont_tipocb"] = "";
	$fieldLabelspaa_master["Spanish"]["cont_tipocc"] = "Tipo de contrato";
	$fieldToolTipspaa_master["Spanish"]["cont_tipocc"] = "";
	$placeHolderspaa_master["Spanish"]["cont_tipocc"] = "";
	$fieldLabelspaa_master["Spanish"]["nivel_formacion"] = "Nivel Formación";
	$fieldToolTipspaa_master["Spanish"]["nivel_formacion"] = "";
	$placeHolderspaa_master["Spanish"]["nivel_formacion"] = "";
	$fieldLabelspaa_master["Spanish"]["titulo_otorgado"] = "Titulo Otorgado";
	$fieldToolTipspaa_master["Spanish"]["titulo_otorgado"] = "";
	$placeHolderspaa_master["Spanish"]["titulo_otorgado"] = "";
	$fieldLabelspaa_master["Spanish"]["nivel_formacion_a"] = "Posgrado";
	$fieldToolTipspaa_master["Spanish"]["nivel_formacion_a"] = "";
	$placeHolderspaa_master["Spanish"]["nivel_formacion_a"] = "";
	$fieldLabelspaa_master["Spanish"]["titulo_otorgado_a"] = "Titulo Otorgado";
	$fieldToolTipspaa_master["Spanish"]["titulo_otorgado_a"] = "";
	$placeHolderspaa_master["Spanish"]["titulo_otorgado_a"] = "";
	$fieldLabelspaa_master["Spanish"]["tiempo_experiencia"] = "Tiempo Experiencia (meses)";
	$fieldToolTipspaa_master["Spanish"]["tiempo_experiencia"] = "<p><em>Tiempo de experiencia en meses</em></p>";
	$placeHolderspaa_master["Spanish"]["tiempo_experiencia"] = "";
	$fieldLabelspaa_master["Spanish"]["VALOR_MENSUAL"] = "Valor mensual programado";
	$fieldToolTipspaa_master["Spanish"]["VALOR_MENSUAL"] = "Escriba cero si no aplica";
	$placeHolderspaa_master["Spanish"]["VALOR_MENSUAL"] = "";
	$pageTitlespaa_master["Spanish"]["add"] = "Solicitud de programación en PAA | Inversión | Persona Natural";
	$pageTitlespaa_master["Spanish"]["edit"] = "PAA ID  [{%PAA_ID}]";
	$pageTitlespaa_master["Spanish"]["view"] = "PAA_ID {%PAA_ID}";
	$pageTitlespaa_master["Spanish"]["add1"] = "Solicitud de programación en PAA | Inversión | Persona Juridica -Otro";
	if (count($fieldToolTipspaa_master["Spanish"]))
		$tdatapaa_master[".isUseToolTips"] = true;
}


	$tdatapaa_master[".NCSearch"] = true;



$tdatapaa_master[".shortTableName"] = "paa_master";
$tdatapaa_master[".nSecOptions"] = 0;

$tdatapaa_master[".mainTableOwnerID"] = "";
$tdatapaa_master[".entityType"] = 0;
$tdatapaa_master[".connId"] = "mincit_global_20x_at_127_0_0_1";


$tdatapaa_master[".strOriginalTableName"] = "paa_master";

	



$tdatapaa_master[".showAddInPopup"] = false;

$tdatapaa_master[".showEditInPopup"] = false;

$tdatapaa_master[".showViewInPopup"] = false;

$tdatapaa_master[".listAjax"] = false;
//	temporary
//$tdatapaa_master[".listAjax"] = false;

	$tdatapaa_master[".audit"] = true;

	$tdatapaa_master[".locking"] = true;


$pages = $tdatapaa_master[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapaa_master[".edit"] = true;
	$tdatapaa_master[".afterEditAction"] = 1;
	$tdatapaa_master[".closePopupAfterEdit"] = 1;
	$tdatapaa_master[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapaa_master[".add"] = true;
$tdatapaa_master[".afterAddAction"] = 1;
$tdatapaa_master[".closePopupAfterAdd"] = 1;
$tdatapaa_master[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapaa_master[".list"] = true;
}



$tdatapaa_master[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapaa_master[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapaa_master[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapaa_master[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapaa_master[".printFriendly"] = true;
}



$tdatapaa_master[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapaa_master[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapaa_master[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapaa_master[".isUseAjaxSuggest"] = true;



																								

$tdatapaa_master[".ajaxCodeSnippetAdded"] = false;

$tdatapaa_master[".buttonsAdded"] = false;

$tdatapaa_master[".addPageEvents"] = true;

// use timepicker for search panel
$tdatapaa_master[".isUseTimeForSearch"] = false;


$tdatapaa_master[".badgeColor"] = "ff8000";


$tdatapaa_master[".allSearchFields"] = array();
$tdatapaa_master[".filterFields"] = array();
$tdatapaa_master[".requiredSearchFields"] = array();

$tdatapaa_master[".googleLikeFields"] = array();
$tdatapaa_master[".googleLikeFields"][] = "PAA_ID";
$tdatapaa_master[".googleLikeFields"][] = "ACT_ID";
$tdatapaa_master[".googleLikeFields"][] = "COD_UNSPSC";
$tdatapaa_master[".googleLikeFields"][] = "DESCRIPCION";
$tdatapaa_master[".googleLikeFields"][] = "MES_INICIO";
$tdatapaa_master[".googleLikeFields"][] = "MES_PRESENTA";
$tdatapaa_master[".googleLikeFields"][] = "DURACION_CONTRATO";
$tdatapaa_master[".googleLikeFields"][] = "DURACION_ESTIMADA_DMA";
$tdatapaa_master[".googleLikeFields"][] = "MODALIDAD";
$tdatapaa_master[".googleLikeFields"][] = "FUENTE_RECURSOS";
$tdatapaa_master[".googleLikeFields"][] = "VALOR";
$tdatapaa_master[".googleLikeFields"][] = "VALOR_VIGENCIA";
$tdatapaa_master[".googleLikeFields"][] = "VALOR_VIGENCIA_FUTURA";
$tdatapaa_master[".googleLikeFields"][] = "VF";
$tdatapaa_master[".googleLikeFields"][] = "ESTADO_VF";
$tdatapaa_master[".googleLikeFields"][] = "UNIDAD_CONTRATACION";
$tdatapaa_master[".googleLikeFields"][] = "COD_UBICACION";
$tdatapaa_master[".googleLikeFields"][] = "RESPONSABLE_NOMBRE";
$tdatapaa_master[".googleLikeFields"][] = "RESPONSABLE_TELEFONO";
$tdatapaa_master[".googleLikeFields"][] = "RESPONSABLE_EMAIL";
$tdatapaa_master[".googleLikeFields"][] = "responsable";
$tdatapaa_master[".googleLikeFields"][] = "vigencia";
$tdatapaa_master[".googleLikeFields"][] = "sys_user";
$tdatapaa_master[".googleLikeFields"][] = "sys_date";
$tdatapaa_master[".googleLikeFields"][] = "sys_status";
$tdatapaa_master[".googleLikeFields"][] = "REQ_MAILNOT";
$tdatapaa_master[".googleLikeFields"][] = "TIPOSOL";
$tdatapaa_master[".googleLikeFields"][] = "registrado_por";
$tdatapaa_master[".googleLikeFields"][] = "FECHA_PRESENTA_PROPUESTAS";
$tdatapaa_master[".googleLikeFields"][] = "responsable_depsup";
$tdatapaa_master[".googleLikeFields"][] = "responsable_dep";
$tdatapaa_master[".googleLikeFields"][] = "PAAID_INTEGRADO";
$tdatapaa_master[".googleLikeFields"][] = "TIPO";
$tdatapaa_master[".googleLikeFields"][] = "justificacion";
$tdatapaa_master[".googleLikeFields"][] = "experiencia";
$tdatapaa_master[".googleLikeFields"][] = "idoneidad";
$tdatapaa_master[".googleLikeFields"][] = "cont_tipoca";
$tdatapaa_master[".googleLikeFields"][] = "cont_tipocb";
$tdatapaa_master[".googleLikeFields"][] = "cont_tipocc";
$tdatapaa_master[".googleLikeFields"][] = "nivel_formacion";
$tdatapaa_master[".googleLikeFields"][] = "titulo_otorgado";
$tdatapaa_master[".googleLikeFields"][] = "nivel_formacion_a";
$tdatapaa_master[".googleLikeFields"][] = "titulo_otorgado_a";
$tdatapaa_master[".googleLikeFields"][] = "tiempo_experiencia";
$tdatapaa_master[".googleLikeFields"][] = "VALOR_MENSUAL";



$tdatapaa_master[".tableType"] = "list";

$tdatapaa_master[".printerPageOrientation"] = 0;
$tdatapaa_master[".nPrinterPageScale"] = 100;

$tdatapaa_master[".nPrinterSplitRecords"] = 40;

$tdatapaa_master[".geocodingEnabled"] = false;




$tdatapaa_master[".isDisplayLoading"] = true;






$tdatapaa_master[".pageSize"] = 20;

$tdatapaa_master[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapaa_master[".strOrderBy"] = $tstrOrderBy;

$tdatapaa_master[".orderindexes"] = array();


$tdatapaa_master[".sqlHead"] = "SELECT PAA_ID, ACT_ID, COD_UNSPSC, DESCRIPCION, MES_INICIO, MES_PRESENTA, DURACION_CONTRATO, DURACION_ESTIMADA_DMA, MODALIDAD, FUENTE_RECURSOS, VALOR, VALOR_VIGENCIA, VALOR_VIGENCIA_FUTURA, VF, ESTADO_VF, UNIDAD_CONTRATACION, COD_UBICACION, RESPONSABLE_NOMBRE, RESPONSABLE_TELEFONO, RESPONSABLE_EMAIL, responsable, vigencia, sys_user, sys_date, sys_status, REQ_MAILNOT, TIPOSOL, registrado_por, FECHA_PRESENTA_PROPUESTAS, responsable_depsup, responsable_dep, PAAID_INTEGRADO, TIPO, justificacion, experiencia, idoneidad, cont_tipoca, cont_tipocb, cont_tipocc, nivel_formacion, titulo_otorgado, nivel_formacion_a, titulo_otorgado_a, tiempo_experiencia, VALOR_MENSUAL";
$tdatapaa_master[".sqlFrom"] = "FROM paa_master";
$tdatapaa_master[".sqlWhereExpr"] = "(UNIDAD_CONTRATACION ='PAA')";
$tdatapaa_master[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "0",
	'name' => "2024",
	'nameType' => 'Text',
	'where' => "vigencia = 2024",
	'showRowCount' => 1,
	'hideEmpty' => 0,
);
$arrGridTabs[] = array(
	'tabId' => "1",
	'name' => "2023",
	'nameType' => 'Text',
	'where' => "vigencia = 2023",
	'showRowCount' => 1,
	'hideEmpty' => 0,
);
$tdatapaa_master[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapaa_master[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapaa_master[".arrGroupsPerPage"] = $arrGPP;

$tdatapaa_master[".highlightSearchResults"] = true;

$tableKeyspaa_master = array();
$tableKeyspaa_master[] = "PAA_ID";
$tdatapaa_master[".Keys"] = $tableKeyspaa_master;


$tdatapaa_master[".hideMobileList"] = array();




//	PAA_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PAA_ID";
	$fdata["GoodName"] = "PAA_ID";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","PAA_ID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "PAA_ID";

	
	
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


	$tdatapaa_master["PAA_ID"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "PAA_ID";
//	ACT_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ACT_ID";
	$fdata["GoodName"] = "ACT_ID";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","ACT_ID");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "003_actividad";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"VALOR_VIGENCIA", 'lookupF'=>"SALDO_PROG");
	$edata["autoCompleteFields"][] = array('masterF'=>"RESPONSABLE_NOMBRE", 'lookupF'=>"USR_RESPONSABLE");
	$edata["autoCompleteFields"][] = array('masterF'=>"responsable", 'lookupF'=>"USR_RESPONSABLE");
	$edata["autoCompleteFields"][] = array('masterF'=>"vigencia", 'lookupF'=>"VIGENCIA");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ACT_ID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "ACTIVIDAD";

	

	
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


	$tdatapaa_master["ACT_ID"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "ACT_ID";
//	COD_UNSPSC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "COD_UNSPSC";
	$fdata["GoodName"] = "COD_UNSPSC";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","COD_UNSPSC");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "COD_UNSPSC";

	
	
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


	$tdatapaa_master["COD_UNSPSC"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "COD_UNSPSC";
//	DESCRIPCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DESCRIPCION";
	$fdata["GoodName"] = "DESCRIPCION";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","DESCRIPCION");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "DESCRIPCION";

	
	
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


	$tdatapaa_master["DESCRIPCION"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "DESCRIPCION";
//	MES_INICIO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "MES_INICIO";
	$fdata["GoodName"] = "MES_INICIO";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","MES_INICIO");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "MES_INICIO";

	
	
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


	$tdatapaa_master["MES_INICIO"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "MES_INICIO";
//	MES_PRESENTA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "MES_PRESENTA";
	$fdata["GoodName"] = "MES_PRESENTA";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","MES_PRESENTA");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "MES_PRESENTA";

	
	
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


	$tdatapaa_master["MES_PRESENTA"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "MES_PRESENTA";
//	DURACION_CONTRATO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DURACION_CONTRATO";
	$fdata["GoodName"] = "DURACION_CONTRATO";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","DURACION_CONTRATO");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "DURACION_CONTRATO";

	
	
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


	$tdatapaa_master["DURACION_CONTRATO"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "DURACION_CONTRATO";
//	DURACION_ESTIMADA_DMA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DURACION_ESTIMADA_DMA";
	$fdata["GoodName"] = "DURACION_ESTIMADA_DMA";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","DURACION_ESTIMADA_DMA");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "DURACION_ESTIMADA_DMA";

	
	
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


	$tdatapaa_master["DURACION_ESTIMADA_DMA"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "DURACION_ESTIMADA_DMA";
//	MODALIDAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "MODALIDAD";
	$fdata["GoodName"] = "MODALIDAD";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","MODALIDAD");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "MODALIDAD";

	
	
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


	$tdatapaa_master["MODALIDAD"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "MODALIDAD";
//	FUENTE_RECURSOS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "FUENTE_RECURSOS";
	$fdata["GoodName"] = "FUENTE_RECURSOS";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","FUENTE_RECURSOS");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "FUENTE_RECURSOS";

	
	
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


	$tdatapaa_master["FUENTE_RECURSOS"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "FUENTE_RECURSOS";
//	VALOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "VALOR";
	$fdata["GoodName"] = "VALOR";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","VALOR");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "VALOR";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VALOR";

	
	
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


	$tdatapaa_master["VALOR"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "VALOR";
//	VALOR_VIGENCIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "VALOR_VIGENCIA";
	$fdata["GoodName"] = "VALOR_VIGENCIA";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","VALOR_VIGENCIA");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "VALOR_VIGENCIA";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VALOR_VIGENCIA";

	
	
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


	$tdatapaa_master["VALOR_VIGENCIA"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "VALOR_VIGENCIA";
//	VALOR_VIGENCIA_FUTURA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "VALOR_VIGENCIA_FUTURA";
	$fdata["GoodName"] = "VALOR_VIGENCIA_FUTURA";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","VALOR_VIGENCIA_FUTURA");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "VALOR_VIGENCIA_FUTURA";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VALOR_VIGENCIA_FUTURA";

	
	
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


	$tdatapaa_master["VALOR_VIGENCIA_FUTURA"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "VALOR_VIGENCIA_FUTURA";
//	VF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "VF";
	$fdata["GoodName"] = "VF";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","VF");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "VF";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VF";

	
	
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


	$tdatapaa_master["VF"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "VF";
//	ESTADO_VF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "ESTADO_VF";
	$fdata["GoodName"] = "ESTADO_VF";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","ESTADO_VF");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "ESTADO_VF";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ESTADO_VF";

	
	
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


	$tdatapaa_master["ESTADO_VF"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "ESTADO_VF";
//	UNIDAD_CONTRATACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "UNIDAD_CONTRATACION";
	$fdata["GoodName"] = "UNIDAD_CONTRATACION";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","UNIDAD_CONTRATACION");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "UNIDAD_CONTRATACION";

	
	
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


	$tdatapaa_master["UNIDAD_CONTRATACION"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "UNIDAD_CONTRATACION";
//	COD_UBICACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "COD_UBICACION";
	$fdata["GoodName"] = "COD_UBICACION";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","COD_UBICACION");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "COD_UBICACION";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COD_UBICACION";

	
	
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


	$tdatapaa_master["COD_UBICACION"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "COD_UBICACION";
//	RESPONSABLE_NOMBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "RESPONSABLE_NOMBRE";
	$fdata["GoodName"] = "RESPONSABLE_NOMBRE";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","RESPONSABLE_NOMBRE");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "RESPONSABLE_NOMBRE";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RESPONSABLE_NOMBRE";

	
	
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


	$tdatapaa_master["RESPONSABLE_NOMBRE"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "RESPONSABLE_NOMBRE";
//	RESPONSABLE_TELEFONO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "RESPONSABLE_TELEFONO";
	$fdata["GoodName"] = "RESPONSABLE_TELEFONO";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","RESPONSABLE_TELEFONO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "RESPONSABLE_TELEFONO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RESPONSABLE_TELEFONO";

	
	
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


	$tdatapaa_master["RESPONSABLE_TELEFONO"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "RESPONSABLE_TELEFONO";
//	RESPONSABLE_EMAIL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "RESPONSABLE_EMAIL";
	$fdata["GoodName"] = "RESPONSABLE_EMAIL";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","RESPONSABLE_EMAIL");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "RESPONSABLE_EMAIL";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RESPONSABLE_EMAIL";

	
	
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


	$tdatapaa_master["RESPONSABLE_EMAIL"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "RESPONSABLE_EMAIL";
//	responsable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "responsable";
	$fdata["GoodName"] = "responsable";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","responsable");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "responsable";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "responsable";

	
	
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


	$tdatapaa_master["responsable"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "responsable";
//	vigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "vigencia";
	$fdata["GoodName"] = "vigencia";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","vigencia");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "vigencia";

	
	
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


	$tdatapaa_master["vigencia"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "vigencia";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","sys_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sys_user";

	
	
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


	$tdatapaa_master["sys_user"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "sys_user";
//	sys_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "sys_date";
	$fdata["GoodName"] = "sys_date";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","sys_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sys_date";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_date";

	
	
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


	$tdatapaa_master["sys_date"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "sys_date";
//	sys_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "sys_status";
	$fdata["GoodName"] = "sys_status";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","sys_status");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "sys_status";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_status";

	
	
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

				$edata["LookupWhere"] = "status_id = 0";


	
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


	$tdatapaa_master["sys_status"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "sys_status";
//	REQ_MAILNOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "REQ_MAILNOT";
	$fdata["GoodName"] = "REQ_MAILNOT";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","REQ_MAILNOT");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "REQ_MAILNOT";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "REQ_MAILNOT";

	
	
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


	$tdatapaa_master["REQ_MAILNOT"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "REQ_MAILNOT";
//	TIPOSOL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "TIPOSOL";
	$fdata["GoodName"] = "TIPOSOL";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","TIPOSOL");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "TIPOSOL";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIPOSOL";

	
	
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

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "PAAID_INTEGRADO";

	
	
	
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


	$tdatapaa_master["TIPOSOL"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "TIPOSOL";
//	registrado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "registrado_por";
	$fdata["GoodName"] = "registrado_por";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","registrado_por");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "registrado_por";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "registrado_por";

	
	
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


	$tdatapaa_master["registrado_por"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "registrado_por";
//	FECHA_PRESENTA_PROPUESTAS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "FECHA_PRESENTA_PROPUESTAS";
	$fdata["GoodName"] = "FECHA_PRESENTA_PROPUESTAS";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","FECHA_PRESENTA_PROPUESTAS");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "FECHA_PRESENTA_PROPUESTAS";

		$fdata["sourceSingle"] = "FECHA_PRESENTA_PROPUESTAS";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FECHA_PRESENTA_PROPUESTAS";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[1,2,3,4,5]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 0;
	$edata["LastYearFactor"] = 1;

	
	
	
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


	$tdatapaa_master["FECHA_PRESENTA_PROPUESTAS"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "FECHA_PRESENTA_PROPUESTAS";
//	responsable_depsup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "responsable_depsup";
	$fdata["GoodName"] = "responsable_depsup";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","responsable_depsup");
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


	$tdatapaa_master["responsable_depsup"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "responsable_depsup";
//	responsable_dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "responsable_dep";
	$fdata["GoodName"] = "responsable_dep";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","responsable_dep");
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


	$tdatapaa_master["responsable_dep"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "responsable_dep";
//	PAAID_INTEGRADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "PAAID_INTEGRADO";
	$fdata["GoodName"] = "PAAID_INTEGRADO";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","PAAID_INTEGRADO");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "q_paa_integrados";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "PAA_ID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "DESCRIPCION";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "TIPOSOL", "lookup" => "ct_integrado" );

	
	

	
	
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


	$tdatapaa_master["PAAID_INTEGRADO"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "PAAID_INTEGRADO";
//	TIPO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "TIPO";
	$fdata["GoodName"] = "TIPO";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","TIPO");
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


	$tdatapaa_master["TIPO"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "TIPO";
//	justificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "justificacion";
	$fdata["GoodName"] = "justificacion";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","justificacion");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "justificacion";

		$fdata["sourceSingle"] = "justificacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "justificacion";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 150;
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


	$tdatapaa_master["justificacion"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "justificacion";
//	experiencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "experiencia";
	$fdata["GoodName"] = "experiencia";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","experiencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "experiencia";

		$fdata["sourceSingle"] = "experiencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "experiencia";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 150;
			$edata["nCols"] = 200;

	
	
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


	$tdatapaa_master["experiencia"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "experiencia";
//	idoneidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "idoneidad";
	$fdata["GoodName"] = "idoneidad";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","idoneidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "idoneidad";

		$fdata["sourceSingle"] = "idoneidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idoneidad";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 150;
			$edata["nCols"] = 200;

	
	
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


	$tdatapaa_master["idoneidad"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "idoneidad";
//	cont_tipoca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "cont_tipoca";
	$fdata["GoodName"] = "cont_tipoca";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","cont_tipoca");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cont_tipoca";

		$fdata["sourceSingle"] = "cont_tipoca";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_tipoca";

	
	
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
	$edata["LookupTable"] = "tparam_tipo_ct_000";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ct_tipo_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ct_tipo_nombre";

	

	
	$edata["LookupOrderBy"] = "ct_tipo_nombre";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "cont_tipocb";

	
	
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


	$tdatapaa_master["cont_tipoca"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "cont_tipoca";
//	cont_tipocb
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "cont_tipocb";
	$fdata["GoodName"] = "cont_tipocb";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","cont_tipocb");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cont_tipocb";

		$fdata["sourceSingle"] = "cont_tipocb";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_tipocb";

	
	
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
	$edata["LookupTable"] = "tparam_tipo_ct_001";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "cta_tipo_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "cta_tipo_nombre";

	

	
	$edata["LookupOrderBy"] = "cta_tipo_nombre";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "cont_tipoca", "lookup" => "ct_tipo_id_fk" );

	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "cont_tipocc";

	
	
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


	$tdatapaa_master["cont_tipocb"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "cont_tipocb";
//	cont_tipocc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "cont_tipocc";
	$fdata["GoodName"] = "cont_tipocc";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","cont_tipocc");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cont_tipocc";

		$fdata["sourceSingle"] = "cont_tipocc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_tipocc";

	
	
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
	$edata["LookupTable"] = "tparam_tipo_ct_002";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ctb_tipo_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ctb_tipo_nombre";

	

	
	$edata["LookupOrderBy"] = "ctb_tipo_nombre";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "cont_tipocb", "lookup" => "cta_tipo_id_fk" );

	
	

	
	
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


	$tdatapaa_master["cont_tipocc"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "cont_tipocc";
//	nivel_formacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "nivel_formacion";
	$fdata["GoodName"] = "nivel_formacion";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","nivel_formacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nivel_formacion";

		$fdata["sourceSingle"] = "nivel_formacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nivel_formacion";

	
	
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
	$edata["LookupTable"] = "";
	$edata["LookupConnId"] = "";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "nf";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "nf";

				$edata["LookupWhere"] = "nf_grupo = '1'";


	
	$edata["LookupOrderBy"] = "nf";

	
	
	
		$edata["SimpleAdd"] = true;

				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "titulo_otorgado";

	
	
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


	$tdatapaa_master["nivel_formacion"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "nivel_formacion";
//	titulo_otorgado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "titulo_otorgado";
	$fdata["GoodName"] = "titulo_otorgado";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","titulo_otorgado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "titulo_otorgado";

		$fdata["sourceSingle"] = "titulo_otorgado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "titulo_otorgado";

	
	
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
	$edata["LookupTable"] = "";
	$edata["LookupConnId"] = "";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "TITULO_OTORGADO";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "TITULO_OTORGADO";

	

	
	$edata["LookupOrderBy"] = "TITULO_OTORGADO";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "nivel_formacion", "lookup" => "NIVEL_DE_FORMACION" );

	
		$edata["SimpleAdd"] = true;


	
	
	
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


	$tdatapaa_master["titulo_otorgado"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "titulo_otorgado";
//	nivel_formacion_a
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "nivel_formacion_a";
	$fdata["GoodName"] = "nivel_formacion_a";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","nivel_formacion_a");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nivel_formacion_a";

		$fdata["sourceSingle"] = "nivel_formacion_a";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nivel_formacion_a";

	
	
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
	$edata["LookupTable"] = "";
	$edata["LookupConnId"] = "";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "nf";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nf";

				$edata["LookupWhere"] = "nf_grupo = '2'";


	
	$edata["LookupOrderBy"] = "nf";

	
	
	
		$edata["SimpleAdd"] = true;

				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "titulo_otorgado_a";

	
	
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


	$tdatapaa_master["nivel_formacion_a"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "nivel_formacion_a";
//	titulo_otorgado_a
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "titulo_otorgado_a";
	$fdata["GoodName"] = "titulo_otorgado_a";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","titulo_otorgado_a");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "titulo_otorgado_a";

		$fdata["sourceSingle"] = "titulo_otorgado_a";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "titulo_otorgado_a";

	
	
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
	$edata["LookupTable"] = "";
	$edata["LookupConnId"] = "";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "TITULO_OTORGADO";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "TITULO_OTORGADO";

	

	
	$edata["LookupOrderBy"] = "TITULO_OTORGADO";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "nivel_formacion_a", "lookup" => "NIVEL_DE_FORMACION" );

	
		$edata["SimpleAdd"] = true;


	
	
	
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


	$tdatapaa_master["titulo_otorgado_a"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "titulo_otorgado_a";
//	tiempo_experiencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "tiempo_experiencia";
	$fdata["GoodName"] = "tiempo_experiencia";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","tiempo_experiencia");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "tiempo_experiencia";

		$fdata["sourceSingle"] = "tiempo_experiencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tiempo_experiencia";

	
	
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


	$tdatapaa_master["tiempo_experiencia"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "tiempo_experiencia";
//	VALOR_MENSUAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "VALOR_MENSUAL";
	$fdata["GoodName"] = "VALOR_MENSUAL";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","VALOR_MENSUAL");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "VALOR_MENSUAL";

		$fdata["sourceSingle"] = "VALOR_MENSUAL";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VALOR_MENSUAL";

	
	
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


	$tdatapaa_master["VALOR_MENSUAL"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "VALOR_MENSUAL";


$tables_data["paa_master"]=&$tdatapaa_master;
$field_labels["paa_master"] = &$fieldLabelspaa_master;
$fieldToolTips["paa_master"] = &$fieldToolTipspaa_master;
$placeHolders["paa_master"] = &$placeHolderspaa_master;
$page_titles["paa_master"] = &$pageTitlespaa_master;


changeTextControlsToDate( "paa_master" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["paa_master"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["paa_master"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="q_recursos_gestor_c1";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="q_recursos_gestor_c1";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "q_recursos_gestor_c1";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["paa_master"][0] = $masterParams;
				$masterTablesData["paa_master"][0]["masterKeys"] = array();
	$masterTablesData["paa_master"][0]["masterKeys"][]="ACT_ID";
				$masterTablesData["paa_master"][0]["detailKeys"] = array();
	$masterTablesData["paa_master"][0]["detailKeys"][]="ACT_ID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_paa_master()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PAA_ID, ACT_ID, COD_UNSPSC, DESCRIPCION, MES_INICIO, MES_PRESENTA, DURACION_CONTRATO, DURACION_ESTIMADA_DMA, MODALIDAD, FUENTE_RECURSOS, VALOR, VALOR_VIGENCIA, VALOR_VIGENCIA_FUTURA, VF, ESTADO_VF, UNIDAD_CONTRATACION, COD_UBICACION, RESPONSABLE_NOMBRE, RESPONSABLE_TELEFONO, RESPONSABLE_EMAIL, responsable, vigencia, sys_user, sys_date, sys_status, REQ_MAILNOT, TIPOSOL, registrado_por, FECHA_PRESENTA_PROPUESTAS, responsable_depsup, responsable_dep, PAAID_INTEGRADO, TIPO, justificacion, experiencia, idoneidad, cont_tipoca, cont_tipocb, cont_tipocc, nivel_formacion, titulo_otorgado, nivel_formacion_a, titulo_otorgado_a, tiempo_experiencia, VALOR_MENSUAL";
$proto0["m_strFrom"] = "FROM paa_master";
$proto0["m_strWhere"] = "(UNIDAD_CONTRATACION ='PAA')";
$proto0["m_strOrderBy"] = "";
	
										;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "UNIDAD_CONTRATACION ='PAA'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "UNIDAD_CONTRATACION",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "='PAA'";
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
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto6["m_sql"] = "PAA_ID";
$proto6["m_srcTableName"] = "paa_master";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_ID",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto8["m_sql"] = "ACT_ID";
$proto8["m_srcTableName"] = "paa_master";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "COD_UNSPSC",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto10["m_sql"] = "COD_UNSPSC";
$proto10["m_srcTableName"] = "paa_master";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto12["m_sql"] = "DESCRIPCION";
$proto12["m_srcTableName"] = "paa_master";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "MES_INICIO",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto14["m_sql"] = "MES_INICIO";
$proto14["m_srcTableName"] = "paa_master";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "MES_PRESENTA",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto16["m_sql"] = "MES_PRESENTA";
$proto16["m_srcTableName"] = "paa_master";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DURACION_CONTRATO",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto18["m_sql"] = "DURACION_CONTRATO";
$proto18["m_srcTableName"] = "paa_master";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "DURACION_ESTIMADA_DMA",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto20["m_sql"] = "DURACION_ESTIMADA_DMA";
$proto20["m_srcTableName"] = "paa_master";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "MODALIDAD",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto22["m_sql"] = "MODALIDAD";
$proto22["m_srcTableName"] = "paa_master";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "FUENTE_RECURSOS",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto24["m_sql"] = "FUENTE_RECURSOS";
$proto24["m_srcTableName"] = "paa_master";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "VALOR",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto26["m_sql"] = "VALOR";
$proto26["m_srcTableName"] = "paa_master";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "VALOR_VIGENCIA",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto28["m_sql"] = "VALOR_VIGENCIA";
$proto28["m_srcTableName"] = "paa_master";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "VALOR_VIGENCIA_FUTURA",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto30["m_sql"] = "VALOR_VIGENCIA_FUTURA";
$proto30["m_srcTableName"] = "paa_master";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "VF",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto32["m_sql"] = "VF";
$proto32["m_srcTableName"] = "paa_master";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "ESTADO_VF",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto34["m_sql"] = "ESTADO_VF";
$proto34["m_srcTableName"] = "paa_master";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "UNIDAD_CONTRATACION",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto36["m_sql"] = "UNIDAD_CONTRATACION";
$proto36["m_srcTableName"] = "paa_master";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "COD_UBICACION",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto38["m_sql"] = "COD_UBICACION";
$proto38["m_srcTableName"] = "paa_master";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "RESPONSABLE_NOMBRE",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto40["m_sql"] = "RESPONSABLE_NOMBRE";
$proto40["m_srcTableName"] = "paa_master";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "RESPONSABLE_TELEFONO",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto42["m_sql"] = "RESPONSABLE_TELEFONO";
$proto42["m_srcTableName"] = "paa_master";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "RESPONSABLE_EMAIL",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto44["m_sql"] = "RESPONSABLE_EMAIL";
$proto44["m_srcTableName"] = "paa_master";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "responsable",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto46["m_sql"] = "responsable";
$proto46["m_srcTableName"] = "paa_master";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto48["m_sql"] = "vigencia";
$proto48["m_srcTableName"] = "paa_master";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto50["m_sql"] = "sys_user";
$proto50["m_srcTableName"] = "paa_master";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_date",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto52["m_sql"] = "sys_date";
$proto52["m_srcTableName"] = "paa_master";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_status",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto54["m_sql"] = "sys_status";
$proto54["m_srcTableName"] = "paa_master";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "REQ_MAILNOT",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto56["m_sql"] = "REQ_MAILNOT";
$proto56["m_srcTableName"] = "paa_master";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPOSOL",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto58["m_sql"] = "TIPOSOL";
$proto58["m_srcTableName"] = "paa_master";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "registrado_por",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto60["m_sql"] = "registrado_por";
$proto60["m_srcTableName"] = "paa_master";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHA_PRESENTA_PROPUESTAS",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto62["m_sql"] = "FECHA_PRESENTA_PROPUESTAS";
$proto62["m_srcTableName"] = "paa_master";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "responsable_depsup",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto64["m_sql"] = "responsable_depsup";
$proto64["m_srcTableName"] = "paa_master";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "responsable_dep",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto66["m_sql"] = "responsable_dep";
$proto66["m_srcTableName"] = "paa_master";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "PAAID_INTEGRADO",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto68["m_sql"] = "PAAID_INTEGRADO";
$proto68["m_srcTableName"] = "paa_master";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto70["m_sql"] = "TIPO";
$proto70["m_srcTableName"] = "paa_master";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "justificacion",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto72["m_sql"] = "justificacion";
$proto72["m_srcTableName"] = "paa_master";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "experiencia",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto74["m_sql"] = "experiencia";
$proto74["m_srcTableName"] = "paa_master";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "idoneidad",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto76["m_sql"] = "idoneidad";
$proto76["m_srcTableName"] = "paa_master";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_tipoca",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto78["m_sql"] = "cont_tipoca";
$proto78["m_srcTableName"] = "paa_master";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_tipocb",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto80["m_sql"] = "cont_tipocb";
$proto80["m_srcTableName"] = "paa_master";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_tipocc",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto82["m_sql"] = "cont_tipocc";
$proto82["m_srcTableName"] = "paa_master";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "nivel_formacion",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto84["m_sql"] = "nivel_formacion";
$proto84["m_srcTableName"] = "paa_master";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "titulo_otorgado",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto86["m_sql"] = "titulo_otorgado";
$proto86["m_srcTableName"] = "paa_master";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "nivel_formacion_a",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto88["m_sql"] = "nivel_formacion_a";
$proto88["m_srcTableName"] = "paa_master";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "titulo_otorgado_a",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto90["m_sql"] = "titulo_otorgado_a";
$proto90["m_srcTableName"] = "paa_master";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "tiempo_experiencia",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto92["m_sql"] = "tiempo_experiencia";
$proto92["m_srcTableName"] = "paa_master";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "VALOR_MENSUAL",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto94["m_sql"] = "VALOR_MENSUAL";
$proto94["m_srcTableName"] = "paa_master";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto96=array();
$proto96["m_link"] = "SQLL_MAIN";
			$proto97=array();
$proto97["m_strName"] = "paa_master";
$proto97["m_srcTableName"] = "paa_master";
$proto97["m_columns"] = array();
$proto97["m_columns"][] = "PAA_ID";
$proto97["m_columns"][] = "ACT_ID";
$proto97["m_columns"][] = "PROD_ID";
$proto97["m_columns"][] = "CDP_ID_FK";
$proto97["m_columns"][] = "TIPO";
$proto97["m_columns"][] = "CDP_INTEGRADO";
$proto97["m_columns"][] = "PAAID_INTEGRADO";
$proto97["m_columns"][] = "sys_status";
$proto97["m_columns"][] = "COD_UNSPSC";
$proto97["m_columns"][] = "DESCRIPCION";
$proto97["m_columns"][] = "DESCRIPCION_NEW";
$proto97["m_columns"][] = "MES_INICIO";
$proto97["m_columns"][] = "MES_PRESENTA";
$proto97["m_columns"][] = "FECHA_PRESENTA_PROPUESTAS";
$proto97["m_columns"][] = "DURACION_CONTRATO";
$proto97["m_columns"][] = "DURACION_ESTIMADA_DMA";
$proto97["m_columns"][] = "MODALIDAD";
$proto97["m_columns"][] = "FUENTE_RECURSOS";
$proto97["m_columns"][] = "VALOR";
$proto97["m_columns"][] = "VALOR_ORIGINAL";
$proto97["m_columns"][] = "VALOR_VIGENCIA";
$proto97["m_columns"][] = "VALOR_VIGENCIA_FUTURA";
$proto97["m_columns"][] = "VF";
$proto97["m_columns"][] = "ESTADO_VF";
$proto97["m_columns"][] = "UNIDAD_CONTRATACION";
$proto97["m_columns"][] = "COD_UBICACION";
$proto97["m_columns"][] = "RESPONSABLE_NOMBRE";
$proto97["m_columns"][] = "RESPONSABLE_TELEFONO";
$proto97["m_columns"][] = "RESPONSABLE_EMAIL";
$proto97["m_columns"][] = "responsable";
$proto97["m_columns"][] = "vigencia";
$proto97["m_columns"][] = "sys_user";
$proto97["m_columns"][] = "registrado_por";
$proto97["m_columns"][] = "sys_date";
$proto97["m_columns"][] = "REQ_OBS";
$proto97["m_columns"][] = "REQ_DATE";
$proto97["m_columns"][] = "REQ_MAILNOT";
$proto97["m_columns"][] = "SolModifica";
$proto97["m_columns"][] = "ContIdFK";
$proto97["m_columns"][] = "OBS_anulacion";
$proto97["m_columns"][] = "TIPOSOL";
$proto97["m_columns"][] = "USOS_TOTAL";
$proto97["m_columns"][] = "responsable_dep";
$proto97["m_columns"][] = "responsable_depsup";
$proto97["m_columns"][] = "transferir_a";
$proto97["m_columns"][] = "ct_integrado";
$proto97["m_columns"][] = "cont_tipoc";
$proto97["m_columns"][] = "cont_modalidad";
$proto97["m_columns"][] = "justificacion";
$proto97["m_columns"][] = "nbc";
$proto97["m_columns"][] = "nivel_formacion";
$proto97["m_columns"][] = "titulo_otorgado";
$proto97["m_columns"][] = "nivel_formacion_a";
$proto97["m_columns"][] = "titulo_otorgado_a";
$proto97["m_columns"][] = "tiempo_experiencia";
$proto97["m_columns"][] = "experiencia";
$proto97["m_columns"][] = "idoneidad";
$proto97["m_columns"][] = "cont_tipoca";
$proto97["m_columns"][] = "cont_tipocb";
$proto97["m_columns"][] = "cont_tipocc";
$proto97["m_columns"][] = "VALOR_MENSUAL";
$obj = new SQLTable($proto97);

$proto96["m_table"] = $obj;
$proto96["m_sql"] = "paa_master";
$proto96["m_alias"] = "";
$proto96["m_srcTableName"] = "paa_master";
$proto98=array();
$proto98["m_sql"] = "";
$proto98["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto98["m_column"]=$obj;
$proto98["m_contained"] = array();
$proto98["m_strCase"] = "";
$proto98["m_havingmode"] = false;
$proto98["m_inBrackets"] = false;
$proto98["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto98);

$proto96["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto96);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="paa_master";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_paa_master = createSqlQuery_paa_master();


	
										;

																																													

$tdatapaa_master[".sqlquery"] = $queryData_paa_master;



include_once(getabspath("include/paa_master_events.php"));
$tdatapaa_master[".hasEvents"] = true;

?>