<?php
$tdatanopaa_master_c_s5 = array();
$tdatanopaa_master_c_s5[".searchableFields"] = array();
$tdatanopaa_master_c_s5[".ShortName"] = "nopaa_master_c_s5";
$tdatanopaa_master_c_s5[".OwnerID"] = "sys_user";
$tdatanopaa_master_c_s5[".OriginalTable"] = "nopaa_master";


$tdatanopaa_master_c_s5[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatanopaa_master_c_s5[".originalPagesByType"] = $tdatanopaa_master_c_s5[".pagesByType"];
$tdatanopaa_master_c_s5[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatanopaa_master_c_s5[".originalPages"] = $tdatanopaa_master_c_s5[".pages"];
$tdatanopaa_master_c_s5[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatanopaa_master_c_s5[".originalDefaultPages"] = $tdatanopaa_master_c_s5[".defaultPages"];

//	field labels
$fieldLabelsnopaa_master_c_s5 = array();
$fieldToolTipsnopaa_master_c_s5 = array();
$pageTitlesnopaa_master_c_s5 = array();
$placeHoldersnopaa_master_c_s5 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsnopaa_master_c_s5["Spanish"] = array();
	$fieldToolTipsnopaa_master_c_s5["Spanish"] = array();
	$placeHoldersnopaa_master_c_s5["Spanish"] = array();
	$pageTitlesnopaa_master_c_s5["Spanish"] = array();
	$fieldLabelsnopaa_master_c_s5["Spanish"]["PAA_ID"] = "PAA ID";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["PAA_ID"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["PAA_ID"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["ACT_ID"] = "ACTIVIDAD";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["ACT_ID"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["ACT_ID"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["PROD_ID"] = "PROD ID";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["PROD_ID"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["PROD_ID"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["TIPO"] = "TIPO";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["TIPO"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["TIPO"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["PAAID_INTEGRADO"] = "PAAID INTEGRADO";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["PAAID_INTEGRADO"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["PAAID_INTEGRADO"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["COD_UNSPSC"] = "COD UNSPSC";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["COD_UNSPSC"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["COD_UNSPSC"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["DESCRIPCION"] = "DESCRIPCIÓN";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["DESCRIPCION"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["DESCRIPCION"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["DESCRIPCION_NEW"] = "DESCRIPCION NEW";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["DESCRIPCION_NEW"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["DESCRIPCION_NEW"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["MES_INICIO"] = "MES INICIO";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["MES_INICIO"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["MES_INICIO"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["MES_PRESENTA"] = "MES PRESENTA";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["MES_PRESENTA"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["MES_PRESENTA"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["FECHA_PRESENTA_PROPUESTAS"] = "FECHA PRESENTA PROPUESTAS";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["FECHA_PRESENTA_PROPUESTAS"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["FECHA_PRESENTA_PROPUESTAS"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["DURACION_CONTRATO"] = "DURACION CONTRATO";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["DURACION_CONTRATO"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["DURACION_CONTRATO"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["DURACION_ESTIMADA_DMA"] = "DURACION ESTIMADA DMA";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["DURACION_ESTIMADA_DMA"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["DURACION_ESTIMADA_DMA"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["MODALIDAD"] = "MODALIDAD";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["MODALIDAD"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["MODALIDAD"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["FUENTE_RECURSOS"] = "FUENTE RECURSOS";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["FUENTE_RECURSOS"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["FUENTE_RECURSOS"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["VALOR"] = "VALOR SOLICITADO";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["VALOR"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["VALOR"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["VALOR_VIGENCIA"] = "VALOR VIGENCIA";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["VALOR_VIGENCIA"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["VALOR_VIGENCIA"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["VALOR_VIGENCIA_FUTURA"] = "VALOR VIGENCIA FUTURA";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["VALOR_VIGENCIA_FUTURA"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["VALOR_VIGENCIA_FUTURA"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["VF"] = "VF";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["VF"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["VF"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["ESTADO_VF"] = "ESTADO VF";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["ESTADO_VF"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["ESTADO_VF"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["UNIDAD_CONTRATACION"] = "UNIDAD CONTRATACION";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["UNIDAD_CONTRATACION"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["UNIDAD_CONTRATACION"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["COD_UBICACION"] = "COD UBICACION";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["COD_UBICACION"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["COD_UBICACION"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["RESPONSABLE_NOMBRE"] = "RESPONSABLE NOMBRE";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["RESPONSABLE_NOMBRE"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["RESPONSABLE_NOMBRE"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["RESPONSABLE_TELEFONO"] = "RESPONSABLE TELEFONO";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["RESPONSABLE_TELEFONO"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["RESPONSABLE_TELEFONO"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["RESPONSABLE_EMAIL"] = "RESPONSABLE EMAIL";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["RESPONSABLE_EMAIL"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["RESPONSABLE_EMAIL"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["responsable"] = "Responsable";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["responsable"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["responsable"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["vigencia"] = "VIGENCIA";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["vigencia"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["vigencia"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["sys_user"] = "GESTIONADO POR";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["sys_user"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["sys_user"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["registrado_por"] = "Registrado Por";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["registrado_por"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["registrado_por"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["sys_date"] = "Sys Date";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["sys_date"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["sys_date"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["sys_status"] = "ENVIAR A";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["sys_status"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["sys_status"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["REQ_OBS"] = "REQ OBS";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["REQ_OBS"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["REQ_OBS"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["REQ_DATE"] = "REQ DATE";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["REQ_DATE"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["REQ_DATE"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["REQ_MAILNOT"] = "NOTIFICACION";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["REQ_MAILNOT"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["REQ_MAILNOT"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["SolModifica"] = "Sol Modifica";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["SolModifica"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["SolModifica"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["ContIdFK"] = "Cont Id FK";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["ContIdFK"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["ContIdFK"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["OBS_anulacion"] = "OBS Anulacion";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["OBS_anulacion"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["OBS_anulacion"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["TIPOSOL"] = "TIPOSOL";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["TIPOSOL"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["TIPOSOL"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["USOS_TOTAL"] = "USOS TOTAL";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["USOS_TOTAL"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["USOS_TOTAL"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["responsable_dep"] = "Responsable Dep";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["responsable_dep"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["responsable_dep"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["responsable_depsup"] = "Responsable Depsup";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["responsable_depsup"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["responsable_depsup"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["transferir_a"] = "TRANSFERIR A ";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["transferir_a"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["transferir_a"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["ct_integrado"] = "Ct Integrado";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["ct_integrado"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["ct_integrado"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["cont_tipoc"] = "Cont Tipoc";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["cont_tipoc"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["cont_tipoc"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["cont_modalidad"] = "Cont Modalidad";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["cont_modalidad"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["cont_modalidad"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["justificacion"] = "Justificacion";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["justificacion"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["justificacion"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["nbc"] = "Nbc";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["nbc"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["nbc"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["nivel_formacion"] = "Nivel Formacion";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["nivel_formacion"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["nivel_formacion"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["titulo_otorgado"] = "Titulo Otorgado";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["titulo_otorgado"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["titulo_otorgado"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["nivel_formacion_a"] = "Nivel Formacion A";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["nivel_formacion_a"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["nivel_formacion_a"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["titulo_otorgado_a"] = "Titulo Otorgado A";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["titulo_otorgado_a"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["titulo_otorgado_a"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["tiempo_experiencia"] = "Tiempo Experiencia";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["tiempo_experiencia"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["tiempo_experiencia"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["experiencia"] = "Experiencia";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["experiencia"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["experiencia"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["idoneidad"] = "Idoneidad";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["idoneidad"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["idoneidad"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["cont_tipoca"] = "Cont Tipoca";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["cont_tipoca"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["cont_tipoca"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["cont_tipocb"] = "Cont Tipocb";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["cont_tipocb"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["cont_tipocb"] = "";
	$fieldLabelsnopaa_master_c_s5["Spanish"]["cont_tipocc"] = "Cont Tipocc";
	$fieldToolTipsnopaa_master_c_s5["Spanish"]["cont_tipocc"] = "";
	$placeHoldersnopaa_master_c_s5["Spanish"]["cont_tipocc"] = "";
	if (count($fieldToolTipsnopaa_master_c_s5["Spanish"]))
		$tdatanopaa_master_c_s5[".isUseToolTips"] = true;
}


	$tdatanopaa_master_c_s5[".NCSearch"] = true;



$tdatanopaa_master_c_s5[".shortTableName"] = "nopaa_master_c_s5";
$tdatanopaa_master_c_s5[".nSecOptions"] = 1;

$tdatanopaa_master_c_s5[".mainTableOwnerID"] = "sys_user";
$tdatanopaa_master_c_s5[".entityType"] = 1;
$tdatanopaa_master_c_s5[".connId"] = "mincit_global_20x_at_127_0_0_1";


$tdatanopaa_master_c_s5[".strOriginalTableName"] = "nopaa_master";

	



$tdatanopaa_master_c_s5[".showAddInPopup"] = false;

$tdatanopaa_master_c_s5[".showEditInPopup"] = false;

$tdatanopaa_master_c_s5[".showViewInPopup"] = false;

$tdatanopaa_master_c_s5[".listAjax"] = false;
//	temporary
//$tdatanopaa_master_c_s5[".listAjax"] = false;

	$tdatanopaa_master_c_s5[".audit"] = true;

	$tdatanopaa_master_c_s5[".locking"] = true;


$pages = $tdatanopaa_master_c_s5[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatanopaa_master_c_s5[".edit"] = true;
	$tdatanopaa_master_c_s5[".afterEditAction"] = 1;
	$tdatanopaa_master_c_s5[".closePopupAfterEdit"] = 1;
	$tdatanopaa_master_c_s5[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatanopaa_master_c_s5[".add"] = true;
$tdatanopaa_master_c_s5[".afterAddAction"] = 1;
$tdatanopaa_master_c_s5[".closePopupAfterAdd"] = 1;
$tdatanopaa_master_c_s5[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatanopaa_master_c_s5[".list"] = true;
}



$tdatanopaa_master_c_s5[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatanopaa_master_c_s5[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatanopaa_master_c_s5[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatanopaa_master_c_s5[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatanopaa_master_c_s5[".printFriendly"] = true;
}



$tdatanopaa_master_c_s5[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatanopaa_master_c_s5[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatanopaa_master_c_s5[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatanopaa_master_c_s5[".isUseAjaxSuggest"] = true;



												

$tdatanopaa_master_c_s5[".ajaxCodeSnippetAdded"] = false;

$tdatanopaa_master_c_s5[".buttonsAdded"] = false;

$tdatanopaa_master_c_s5[".addPageEvents"] = true;

// use timepicker for search panel
$tdatanopaa_master_c_s5[".isUseTimeForSearch"] = false;


$tdatanopaa_master_c_s5[".badgeColor"] = "008B8B";


$tdatanopaa_master_c_s5[".allSearchFields"] = array();
$tdatanopaa_master_c_s5[".filterFields"] = array();
$tdatanopaa_master_c_s5[".requiredSearchFields"] = array();

$tdatanopaa_master_c_s5[".googleLikeFields"] = array();
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "PAA_ID";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "ACT_ID";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "PROD_ID";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "TIPO";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "PAAID_INTEGRADO";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "COD_UNSPSC";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "DESCRIPCION";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "DESCRIPCION_NEW";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "MES_INICIO";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "MES_PRESENTA";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "FECHA_PRESENTA_PROPUESTAS";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "DURACION_CONTRATO";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "DURACION_ESTIMADA_DMA";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "MODALIDAD";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "FUENTE_RECURSOS";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "VALOR";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "VALOR_VIGENCIA";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "VALOR_VIGENCIA_FUTURA";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "VF";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "ESTADO_VF";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "UNIDAD_CONTRATACION";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "COD_UBICACION";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "RESPONSABLE_NOMBRE";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "RESPONSABLE_TELEFONO";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "RESPONSABLE_EMAIL";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "responsable";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "vigencia";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "sys_user";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "registrado_por";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "sys_date";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "sys_status";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "REQ_OBS";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "REQ_DATE";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "REQ_MAILNOT";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "SolModifica";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "ContIdFK";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "OBS_anulacion";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "TIPOSOL";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "USOS_TOTAL";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "responsable_dep";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "responsable_depsup";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "transferir_a";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "ct_integrado";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "cont_tipoc";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "cont_modalidad";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "justificacion";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "nbc";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "nivel_formacion";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "titulo_otorgado";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "nivel_formacion_a";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "titulo_otorgado_a";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "tiempo_experiencia";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "experiencia";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "idoneidad";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "cont_tipoca";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "cont_tipocb";
$tdatanopaa_master_c_s5[".googleLikeFields"][] = "cont_tipocc";



$tdatanopaa_master_c_s5[".tableType"] = "list";

$tdatanopaa_master_c_s5[".printerPageOrientation"] = 0;
$tdatanopaa_master_c_s5[".nPrinterPageScale"] = 100;

$tdatanopaa_master_c_s5[".nPrinterSplitRecords"] = 40;

$tdatanopaa_master_c_s5[".geocodingEnabled"] = false;










$tdatanopaa_master_c_s5[".pageSize"] = 20;

$tdatanopaa_master_c_s5[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatanopaa_master_c_s5[".strOrderBy"] = $tstrOrderBy;

$tdatanopaa_master_c_s5[".orderindexes"] = array();


$tdatanopaa_master_c_s5[".sqlHead"] = "SELECT PAA_ID,  ACT_ID,  PROD_ID,  TIPO,  PAAID_INTEGRADO,  COD_UNSPSC,  DESCRIPCION,  DESCRIPCION_NEW,  MES_INICIO,  MES_PRESENTA,  FECHA_PRESENTA_PROPUESTAS,  DURACION_CONTRATO,  DURACION_ESTIMADA_DMA,  MODALIDAD,  FUENTE_RECURSOS,  VALOR,  VALOR_VIGENCIA,  VALOR_VIGENCIA_FUTURA,  VF,  ESTADO_VF,  UNIDAD_CONTRATACION,  COD_UBICACION,  RESPONSABLE_NOMBRE,  RESPONSABLE_TELEFONO,  RESPONSABLE_EMAIL,  responsable,  vigencia,  sys_user,  registrado_por,  sys_date,  sys_status,  REQ_OBS,  REQ_DATE,  REQ_MAILNOT,  SolModifica,  ContIdFK,  OBS_anulacion,  TIPOSOL,  USOS_TOTAL,  responsable_dep,  responsable_depsup,  transferir_a,  ct_integrado,  cont_tipoc,  cont_modalidad,  justificacion,  nbc,  nivel_formacion,  titulo_otorgado,  nivel_formacion_a,  titulo_otorgado_a,  tiempo_experiencia,  experiencia,  idoneidad,  cont_tipoca,  cont_tipocb,  cont_tipocc";
$tdatanopaa_master_c_s5[".sqlFrom"] = "FROM nopaa_master";
$tdatanopaa_master_c_s5[".sqlWhereExpr"] = "(PROD_ID IS NULL) AND (PAAID_INTEGRADO IS NULL) AND (UNIDAD_CONTRATACION = 'NOPAA')";
$tdatanopaa_master_c_s5[".sqlTail"] = "";

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
$tdatanopaa_master_c_s5[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanopaa_master_c_s5[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanopaa_master_c_s5[".arrGroupsPerPage"] = $arrGPP;

$tdatanopaa_master_c_s5[".highlightSearchResults"] = true;

$tableKeysnopaa_master_c_s5 = array();
$tableKeysnopaa_master_c_s5[] = "PAA_ID";
$tdatanopaa_master_c_s5[".Keys"] = $tableKeysnopaa_master_c_s5;


$tdatanopaa_master_c_s5[".hideMobileList"] = array();




//	PAA_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PAA_ID";
	$fdata["GoodName"] = "PAA_ID";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","PAA_ID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdatanopaa_master_c_s5["PAA_ID"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "PAA_ID";
//	ACT_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ACT_ID";
	$fdata["GoodName"] = "ACT_ID";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","ACT_ID");
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

	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "q_ctrl_saldos_act_paa_1";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ACT_ID";
	$edata["LinkFieldType"] = 0;
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


	$tdatanopaa_master_c_s5["ACT_ID"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "ACT_ID";
//	PROD_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PROD_ID";
	$fdata["GoodName"] = "PROD_ID";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","PROD_ID");
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


	$tdatanopaa_master_c_s5["PROD_ID"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "PROD_ID";
//	TIPO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TIPO";
	$fdata["GoodName"] = "TIPO";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","TIPO");
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


	$tdatanopaa_master_c_s5["TIPO"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "TIPO";
//	PAAID_INTEGRADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PAAID_INTEGRADO";
	$fdata["GoodName"] = "PAAID_INTEGRADO";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","PAAID_INTEGRADO");
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


	$tdatanopaa_master_c_s5["PAAID_INTEGRADO"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "PAAID_INTEGRADO";
//	COD_UNSPSC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "COD_UNSPSC";
	$fdata["GoodName"] = "COD_UNSPSC";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","COD_UNSPSC");
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


	$tdatanopaa_master_c_s5["COD_UNSPSC"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "COD_UNSPSC";
//	DESCRIPCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DESCRIPCION";
	$fdata["GoodName"] = "DESCRIPCION";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","DESCRIPCION");
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


	$tdatanopaa_master_c_s5["DESCRIPCION"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "DESCRIPCION";
//	DESCRIPCION_NEW
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DESCRIPCION_NEW";
	$fdata["GoodName"] = "DESCRIPCION_NEW";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","DESCRIPCION_NEW");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "DESCRIPCION_NEW";

		$fdata["sourceSingle"] = "DESCRIPCION_NEW";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DESCRIPCION_NEW";

	
	
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


	$tdatanopaa_master_c_s5["DESCRIPCION_NEW"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "DESCRIPCION_NEW";
//	MES_INICIO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "MES_INICIO";
	$fdata["GoodName"] = "MES_INICIO";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","MES_INICIO");
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


	$tdatanopaa_master_c_s5["MES_INICIO"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "MES_INICIO";
//	MES_PRESENTA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "MES_PRESENTA";
	$fdata["GoodName"] = "MES_PRESENTA";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","MES_PRESENTA");
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


	$tdatanopaa_master_c_s5["MES_PRESENTA"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "MES_PRESENTA";
//	FECHA_PRESENTA_PROPUESTAS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "FECHA_PRESENTA_PROPUESTAS";
	$fdata["GoodName"] = "FECHA_PRESENTA_PROPUESTAS";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","FECHA_PRESENTA_PROPUESTAS");
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


	$tdatanopaa_master_c_s5["FECHA_PRESENTA_PROPUESTAS"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "FECHA_PRESENTA_PROPUESTAS";
//	DURACION_CONTRATO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "DURACION_CONTRATO";
	$fdata["GoodName"] = "DURACION_CONTRATO";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","DURACION_CONTRATO");
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


	$tdatanopaa_master_c_s5["DURACION_CONTRATO"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "DURACION_CONTRATO";
//	DURACION_ESTIMADA_DMA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "DURACION_ESTIMADA_DMA";
	$fdata["GoodName"] = "DURACION_ESTIMADA_DMA";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","DURACION_ESTIMADA_DMA");
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


	$tdatanopaa_master_c_s5["DURACION_ESTIMADA_DMA"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "DURACION_ESTIMADA_DMA";
//	MODALIDAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "MODALIDAD";
	$fdata["GoodName"] = "MODALIDAD";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","MODALIDAD");
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


	$tdatanopaa_master_c_s5["MODALIDAD"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "MODALIDAD";
//	FUENTE_RECURSOS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "FUENTE_RECURSOS";
	$fdata["GoodName"] = "FUENTE_RECURSOS";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","FUENTE_RECURSOS");
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


	$tdatanopaa_master_c_s5["FUENTE_RECURSOS"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "FUENTE_RECURSOS";
//	VALOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "VALOR";
	$fdata["GoodName"] = "VALOR";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","VALOR");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "VALOR";

		$fdata["sourceSingle"] = "VALOR";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VALOR";

	
	
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


	$tdatanopaa_master_c_s5["VALOR"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "VALOR";
//	VALOR_VIGENCIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "VALOR_VIGENCIA";
	$fdata["GoodName"] = "VALOR_VIGENCIA";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","VALOR_VIGENCIA");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "VALOR_VIGENCIA";

		$fdata["sourceSingle"] = "VALOR_VIGENCIA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VALOR_VIGENCIA";

	
	
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


	$tdatanopaa_master_c_s5["VALOR_VIGENCIA"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "VALOR_VIGENCIA";
//	VALOR_VIGENCIA_FUTURA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "VALOR_VIGENCIA_FUTURA";
	$fdata["GoodName"] = "VALOR_VIGENCIA_FUTURA";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","VALOR_VIGENCIA_FUTURA");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "VALOR_VIGENCIA_FUTURA";

		$fdata["sourceSingle"] = "VALOR_VIGENCIA_FUTURA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VALOR_VIGENCIA_FUTURA";

	
	
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


	$tdatanopaa_master_c_s5["VALOR_VIGENCIA_FUTURA"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "VALOR_VIGENCIA_FUTURA";
//	VF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "VF";
	$fdata["GoodName"] = "VF";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","VF");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "VF";

		$fdata["sourceSingle"] = "VF";

	
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


	$tdatanopaa_master_c_s5["VF"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "VF";
//	ESTADO_VF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "ESTADO_VF";
	$fdata["GoodName"] = "ESTADO_VF";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","ESTADO_VF");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "ESTADO_VF";

		$fdata["sourceSingle"] = "ESTADO_VF";

	
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


	$tdatanopaa_master_c_s5["ESTADO_VF"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "ESTADO_VF";
//	UNIDAD_CONTRATACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "UNIDAD_CONTRATACION";
	$fdata["GoodName"] = "UNIDAD_CONTRATACION";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","UNIDAD_CONTRATACION");
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


	$tdatanopaa_master_c_s5["UNIDAD_CONTRATACION"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "UNIDAD_CONTRATACION";
//	COD_UBICACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "COD_UBICACION";
	$fdata["GoodName"] = "COD_UBICACION";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","COD_UBICACION");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "COD_UBICACION";

		$fdata["sourceSingle"] = "COD_UBICACION";

	
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


	$tdatanopaa_master_c_s5["COD_UBICACION"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "COD_UBICACION";
//	RESPONSABLE_NOMBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "RESPONSABLE_NOMBRE";
	$fdata["GoodName"] = "RESPONSABLE_NOMBRE";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","RESPONSABLE_NOMBRE");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "RESPONSABLE_NOMBRE";

		$fdata["sourceSingle"] = "RESPONSABLE_NOMBRE";

	
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


	$tdatanopaa_master_c_s5["RESPONSABLE_NOMBRE"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "RESPONSABLE_NOMBRE";
//	RESPONSABLE_TELEFONO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "RESPONSABLE_TELEFONO";
	$fdata["GoodName"] = "RESPONSABLE_TELEFONO";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","RESPONSABLE_TELEFONO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "RESPONSABLE_TELEFONO";

		$fdata["sourceSingle"] = "RESPONSABLE_TELEFONO";

	
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


	$tdatanopaa_master_c_s5["RESPONSABLE_TELEFONO"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "RESPONSABLE_TELEFONO";
//	RESPONSABLE_EMAIL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "RESPONSABLE_EMAIL";
	$fdata["GoodName"] = "RESPONSABLE_EMAIL";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","RESPONSABLE_EMAIL");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "RESPONSABLE_EMAIL";

		$fdata["sourceSingle"] = "RESPONSABLE_EMAIL";

	
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


	$tdatanopaa_master_c_s5["RESPONSABLE_EMAIL"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "RESPONSABLE_EMAIL";
//	responsable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "responsable";
	$fdata["GoodName"] = "responsable";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","responsable");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "responsable";

		$fdata["sourceSingle"] = "responsable";

	
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


	$tdatanopaa_master_c_s5["responsable"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "responsable";
//	vigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "vigencia";
	$fdata["GoodName"] = "vigencia";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","vigencia");
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


	$tdatanopaa_master_c_s5["vigencia"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "vigencia";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","sys_user");
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


	$tdatanopaa_master_c_s5["sys_user"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "sys_user";
//	registrado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "registrado_por";
	$fdata["GoodName"] = "registrado_por";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","registrado_por");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "registrado_por";

		$fdata["sourceSingle"] = "registrado_por";

	
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


	$tdatanopaa_master_c_s5["registrado_por"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "registrado_por";
//	sys_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "sys_date";
	$fdata["GoodName"] = "sys_date";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","sys_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sys_date";

		$fdata["sourceSingle"] = "sys_date";

	
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


	$tdatanopaa_master_c_s5["sys_date"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "sys_date";
//	sys_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "sys_status";
	$fdata["GoodName"] = "sys_status";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","sys_status");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "sys_status";

		$fdata["sourceSingle"] = "sys_status";

	
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
	$edata["LinkFieldType"] = 0;
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


	$tdatanopaa_master_c_s5["sys_status"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "sys_status";
//	REQ_OBS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "REQ_OBS";
	$fdata["GoodName"] = "REQ_OBS";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","REQ_OBS");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "REQ_OBS";

		$fdata["sourceSingle"] = "REQ_OBS";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "REQ_OBS";

	
	
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


	$tdatanopaa_master_c_s5["REQ_OBS"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "REQ_OBS";
//	REQ_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "REQ_DATE";
	$fdata["GoodName"] = "REQ_DATE";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","REQ_DATE");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "REQ_DATE";

		$fdata["sourceSingle"] = "REQ_DATE";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "REQ_DATE";

	
	
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


	$tdatanopaa_master_c_s5["REQ_DATE"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "REQ_DATE";
//	REQ_MAILNOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "REQ_MAILNOT";
	$fdata["GoodName"] = "REQ_MAILNOT";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","REQ_MAILNOT");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "REQ_MAILNOT";

		$fdata["sourceSingle"] = "REQ_MAILNOT";

	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
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


	$tdatanopaa_master_c_s5["REQ_MAILNOT"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "REQ_MAILNOT";
//	SolModifica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "SolModifica";
	$fdata["GoodName"] = "SolModifica";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","SolModifica");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SolModifica";

		$fdata["sourceSingle"] = "SolModifica";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SolModifica";

	
	
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


	$tdatanopaa_master_c_s5["SolModifica"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "SolModifica";
//	ContIdFK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "ContIdFK";
	$fdata["GoodName"] = "ContIdFK";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","ContIdFK");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ContIdFK";

		$fdata["sourceSingle"] = "ContIdFK";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ContIdFK";

	
	
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


	$tdatanopaa_master_c_s5["ContIdFK"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "ContIdFK";
//	OBS_anulacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "OBS_anulacion";
	$fdata["GoodName"] = "OBS_anulacion";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","OBS_anulacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "OBS_anulacion";

		$fdata["sourceSingle"] = "OBS_anulacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OBS_anulacion";

	
	
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


	$tdatanopaa_master_c_s5["OBS_anulacion"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "OBS_anulacion";
//	TIPOSOL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "TIPOSOL";
	$fdata["GoodName"] = "TIPOSOL";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","TIPOSOL");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "TIPOSOL";

		$fdata["sourceSingle"] = "TIPOSOL";

	
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


	$tdatanopaa_master_c_s5["TIPOSOL"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "TIPOSOL";
//	USOS_TOTAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "USOS_TOTAL";
	$fdata["GoodName"] = "USOS_TOTAL";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","USOS_TOTAL");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "USOS_TOTAL";

		$fdata["sourceSingle"] = "USOS_TOTAL";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USOS_TOTAL";

	
	
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


	$tdatanopaa_master_c_s5["USOS_TOTAL"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "USOS_TOTAL";
//	responsable_dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "responsable_dep";
	$fdata["GoodName"] = "responsable_dep";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","responsable_dep");
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


	$tdatanopaa_master_c_s5["responsable_dep"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "responsable_dep";
//	responsable_depsup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "responsable_depsup";
	$fdata["GoodName"] = "responsable_depsup";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","responsable_depsup");
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


	$tdatanopaa_master_c_s5["responsable_depsup"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "responsable_depsup";
//	transferir_a
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "transferir_a";
	$fdata["GoodName"] = "transferir_a";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","transferir_a");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tparam_patrimonios";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "patrimonioid";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "patrimonio";

	

	
	$edata["LookupOrderBy"] = "patrimonioid";

	
	
	
	

	
	
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


	$tdatanopaa_master_c_s5["transferir_a"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "transferir_a";
//	ct_integrado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "ct_integrado";
	$fdata["GoodName"] = "ct_integrado";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","ct_integrado");
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


	$tdatanopaa_master_c_s5["ct_integrado"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "ct_integrado";
//	cont_tipoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "cont_tipoc";
	$fdata["GoodName"] = "cont_tipoc";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","cont_tipoc");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cont_tipoc";

		$fdata["sourceSingle"] = "cont_tipoc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_tipoc";

	
	
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


	$tdatanopaa_master_c_s5["cont_tipoc"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "cont_tipoc";
//	cont_modalidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "cont_modalidad";
	$fdata["GoodName"] = "cont_modalidad";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","cont_modalidad");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cont_modalidad";

		$fdata["sourceSingle"] = "cont_modalidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_modalidad";

	
	
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


	$tdatanopaa_master_c_s5["cont_modalidad"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "cont_modalidad";
//	justificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "justificacion";
	$fdata["GoodName"] = "justificacion";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","justificacion");
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


	$tdatanopaa_master_c_s5["justificacion"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "justificacion";
//	nbc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "nbc";
	$fdata["GoodName"] = "nbc";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","nbc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nbc";

		$fdata["sourceSingle"] = "nbc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nbc";

	
	
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


	$tdatanopaa_master_c_s5["nbc"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "nbc";
//	nivel_formacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "nivel_formacion";
	$fdata["GoodName"] = "nivel_formacion";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","nivel_formacion");
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


	$tdatanopaa_master_c_s5["nivel_formacion"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "nivel_formacion";
//	titulo_otorgado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "titulo_otorgado";
	$fdata["GoodName"] = "titulo_otorgado";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","titulo_otorgado");
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


	$tdatanopaa_master_c_s5["titulo_otorgado"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "titulo_otorgado";
//	nivel_formacion_a
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "nivel_formacion_a";
	$fdata["GoodName"] = "nivel_formacion_a";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","nivel_formacion_a");
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


	$tdatanopaa_master_c_s5["nivel_formacion_a"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "nivel_formacion_a";
//	titulo_otorgado_a
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "titulo_otorgado_a";
	$fdata["GoodName"] = "titulo_otorgado_a";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","titulo_otorgado_a");
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


	$tdatanopaa_master_c_s5["titulo_otorgado_a"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "titulo_otorgado_a";
//	tiempo_experiencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "tiempo_experiencia";
	$fdata["GoodName"] = "tiempo_experiencia";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","tiempo_experiencia");
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


	$tdatanopaa_master_c_s5["tiempo_experiencia"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "tiempo_experiencia";
//	experiencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "experiencia";
	$fdata["GoodName"] = "experiencia";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","experiencia");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=800";

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


	$tdatanopaa_master_c_s5["experiencia"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "experiencia";
//	idoneidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "idoneidad";
	$fdata["GoodName"] = "idoneidad";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","idoneidad");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=800";

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


	$tdatanopaa_master_c_s5["idoneidad"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "idoneidad";
//	cont_tipoca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "cont_tipoca";
	$fdata["GoodName"] = "cont_tipoca";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","cont_tipoca");
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


	$tdatanopaa_master_c_s5["cont_tipoca"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "cont_tipoca";
//	cont_tipocb
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "cont_tipocb";
	$fdata["GoodName"] = "cont_tipocb";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","cont_tipocb");
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


	$tdatanopaa_master_c_s5["cont_tipocb"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "cont_tipocb";
//	cont_tipocc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "cont_tipocc";
	$fdata["GoodName"] = "cont_tipocc";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_c_s5","cont_tipocc");
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


	$tdatanopaa_master_c_s5["cont_tipocc"] = $fdata;
		$tdatanopaa_master_c_s5[".searchableFields"][] = "cont_tipocc";


$tables_data["nopaa_master_c_s5"]=&$tdatanopaa_master_c_s5;
$field_labels["nopaa_master_c_s5"] = &$fieldLabelsnopaa_master_c_s5;
$fieldToolTips["nopaa_master_c_s5"] = &$fieldToolTipsnopaa_master_c_s5;
$placeHolders["nopaa_master_c_s5"] = &$placeHoldersnopaa_master_c_s5;
$page_titles["nopaa_master_c_s5"] = &$pageTitlesnopaa_master_c_s5;


changeTextControlsToDate( "nopaa_master_c_s5" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["nopaa_master_c_s5"] = array();
//	paa_master_pscdp_c_nopaa
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="paa_master_pscdp_c_nopaa";
		$detailsParam["dOriginalTable"] = "paa_master_pscdp";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "paa_master_pscdp_c_nopaa";
	$detailsParam["dCaptionTable"] = GetTableCaption("paa_master_pscdp_c_nopaa");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["nopaa_master_c_s5"][$dIndex] = $detailsParam;

	
		$detailsTablesData["nopaa_master_c_s5"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["nopaa_master_c_s5"][$dIndex]["masterKeys"][]="PAA_ID";

				$detailsTablesData["nopaa_master_c_s5"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["nopaa_master_c_s5"][$dIndex]["detailKeys"][]="PAA_ID_FK";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["nopaa_master_c_s5"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_nopaa_master_c_s5()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PAA_ID,  ACT_ID,  PROD_ID,  TIPO,  PAAID_INTEGRADO,  COD_UNSPSC,  DESCRIPCION,  DESCRIPCION_NEW,  MES_INICIO,  MES_PRESENTA,  FECHA_PRESENTA_PROPUESTAS,  DURACION_CONTRATO,  DURACION_ESTIMADA_DMA,  MODALIDAD,  FUENTE_RECURSOS,  VALOR,  VALOR_VIGENCIA,  VALOR_VIGENCIA_FUTURA,  VF,  ESTADO_VF,  UNIDAD_CONTRATACION,  COD_UBICACION,  RESPONSABLE_NOMBRE,  RESPONSABLE_TELEFONO,  RESPONSABLE_EMAIL,  responsable,  vigencia,  sys_user,  registrado_por,  sys_date,  sys_status,  REQ_OBS,  REQ_DATE,  REQ_MAILNOT,  SolModifica,  ContIdFK,  OBS_anulacion,  TIPOSOL,  USOS_TOTAL,  responsable_dep,  responsable_depsup,  transferir_a,  ct_integrado,  cont_tipoc,  cont_modalidad,  justificacion,  nbc,  nivel_formacion,  titulo_otorgado,  nivel_formacion_a,  titulo_otorgado_a,  tiempo_experiencia,  experiencia,  idoneidad,  cont_tipoca,  cont_tipocb,  cont_tipocc";
$proto0["m_strFrom"] = "FROM nopaa_master";
$proto0["m_strWhere"] = "(PROD_ID IS NULL) AND (PAAID_INTEGRADO IS NULL) AND (UNIDAD_CONTRATACION = 'NOPAA')";
$proto0["m_strOrderBy"] = "";
	
										;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(PROD_ID IS NULL) AND (PAAID_INTEGRADO IS NULL) AND (UNIDAD_CONTRATACION = 'NOPAA')";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(PROD_ID IS NULL) AND (PAAID_INTEGRADO IS NULL) AND (UNIDAD_CONTRATACION = 'NOPAA')"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "PROD_ID IS NULL";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "PROD_ID",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "IS NULL";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "PAAID_INTEGRADO IS NULL";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "PAAID_INTEGRADO",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "IS NULL";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
						$proto8=array();
$proto8["m_sql"] = "UNIDAD_CONTRATACION = 'NOPAA'";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "UNIDAD_CONTRATACION",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "= 'NOPAA'";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = true;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto10=array();
$proto10["m_sql"] = "";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PAA_ID",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto12["m_sql"] = "PAA_ID";
$proto12["m_srcTableName"] = "nopaa_master_c_s5";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_ID",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto14["m_sql"] = "ACT_ID";
$proto14["m_srcTableName"] = "nopaa_master_c_s5";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "PROD_ID",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto16["m_sql"] = "PROD_ID";
$proto16["m_srcTableName"] = "nopaa_master_c_s5";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto18["m_sql"] = "TIPO";
$proto18["m_srcTableName"] = "nopaa_master_c_s5";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "PAAID_INTEGRADO",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto20["m_sql"] = "PAAID_INTEGRADO";
$proto20["m_srcTableName"] = "nopaa_master_c_s5";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "COD_UNSPSC",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto22["m_sql"] = "COD_UNSPSC";
$proto22["m_srcTableName"] = "nopaa_master_c_s5";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto24["m_sql"] = "DESCRIPCION";
$proto24["m_srcTableName"] = "nopaa_master_c_s5";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION_NEW",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto26["m_sql"] = "DESCRIPCION_NEW";
$proto26["m_srcTableName"] = "nopaa_master_c_s5";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "MES_INICIO",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto28["m_sql"] = "MES_INICIO";
$proto28["m_srcTableName"] = "nopaa_master_c_s5";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "MES_PRESENTA",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto30["m_sql"] = "MES_PRESENTA";
$proto30["m_srcTableName"] = "nopaa_master_c_s5";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHA_PRESENTA_PROPUESTAS",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto32["m_sql"] = "FECHA_PRESENTA_PROPUESTAS";
$proto32["m_srcTableName"] = "nopaa_master_c_s5";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "DURACION_CONTRATO",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto34["m_sql"] = "DURACION_CONTRATO";
$proto34["m_srcTableName"] = "nopaa_master_c_s5";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "DURACION_ESTIMADA_DMA",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto36["m_sql"] = "DURACION_ESTIMADA_DMA";
$proto36["m_srcTableName"] = "nopaa_master_c_s5";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "MODALIDAD",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto38["m_sql"] = "MODALIDAD";
$proto38["m_srcTableName"] = "nopaa_master_c_s5";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "FUENTE_RECURSOS",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto40["m_sql"] = "FUENTE_RECURSOS";
$proto40["m_srcTableName"] = "nopaa_master_c_s5";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "VALOR",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto42["m_sql"] = "VALOR";
$proto42["m_srcTableName"] = "nopaa_master_c_s5";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "VALOR_VIGENCIA",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto44["m_sql"] = "VALOR_VIGENCIA";
$proto44["m_srcTableName"] = "nopaa_master_c_s5";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "VALOR_VIGENCIA_FUTURA",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto46["m_sql"] = "VALOR_VIGENCIA_FUTURA";
$proto46["m_srcTableName"] = "nopaa_master_c_s5";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "VF",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto48["m_sql"] = "VF";
$proto48["m_srcTableName"] = "nopaa_master_c_s5";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "ESTADO_VF",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto50["m_sql"] = "ESTADO_VF";
$proto50["m_srcTableName"] = "nopaa_master_c_s5";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "UNIDAD_CONTRATACION",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto52["m_sql"] = "UNIDAD_CONTRATACION";
$proto52["m_srcTableName"] = "nopaa_master_c_s5";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "COD_UBICACION",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto54["m_sql"] = "COD_UBICACION";
$proto54["m_srcTableName"] = "nopaa_master_c_s5";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "RESPONSABLE_NOMBRE",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto56["m_sql"] = "RESPONSABLE_NOMBRE";
$proto56["m_srcTableName"] = "nopaa_master_c_s5";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "RESPONSABLE_TELEFONO",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto58["m_sql"] = "RESPONSABLE_TELEFONO";
$proto58["m_srcTableName"] = "nopaa_master_c_s5";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "RESPONSABLE_EMAIL",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto60["m_sql"] = "RESPONSABLE_EMAIL";
$proto60["m_srcTableName"] = "nopaa_master_c_s5";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "responsable",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto62["m_sql"] = "responsable";
$proto62["m_srcTableName"] = "nopaa_master_c_s5";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto64["m_sql"] = "vigencia";
$proto64["m_srcTableName"] = "nopaa_master_c_s5";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto66["m_sql"] = "sys_user";
$proto66["m_srcTableName"] = "nopaa_master_c_s5";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "registrado_por",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto68["m_sql"] = "registrado_por";
$proto68["m_srcTableName"] = "nopaa_master_c_s5";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_date",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto70["m_sql"] = "sys_date";
$proto70["m_srcTableName"] = "nopaa_master_c_s5";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_status",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto72["m_sql"] = "sys_status";
$proto72["m_srcTableName"] = "nopaa_master_c_s5";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "REQ_OBS",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto74["m_sql"] = "REQ_OBS";
$proto74["m_srcTableName"] = "nopaa_master_c_s5";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "REQ_DATE",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto76["m_sql"] = "REQ_DATE";
$proto76["m_srcTableName"] = "nopaa_master_c_s5";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "REQ_MAILNOT",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto78["m_sql"] = "REQ_MAILNOT";
$proto78["m_srcTableName"] = "nopaa_master_c_s5";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "SolModifica",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto80["m_sql"] = "SolModifica";
$proto80["m_srcTableName"] = "nopaa_master_c_s5";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "ContIdFK",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto82["m_sql"] = "ContIdFK";
$proto82["m_srcTableName"] = "nopaa_master_c_s5";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "OBS_anulacion",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto84["m_sql"] = "OBS_anulacion";
$proto84["m_srcTableName"] = "nopaa_master_c_s5";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPOSOL",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto86["m_sql"] = "TIPOSOL";
$proto86["m_srcTableName"] = "nopaa_master_c_s5";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "USOS_TOTAL",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto88["m_sql"] = "USOS_TOTAL";
$proto88["m_srcTableName"] = "nopaa_master_c_s5";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "responsable_dep",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto90["m_sql"] = "responsable_dep";
$proto90["m_srcTableName"] = "nopaa_master_c_s5";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "responsable_depsup",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto92["m_sql"] = "responsable_depsup";
$proto92["m_srcTableName"] = "nopaa_master_c_s5";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "transferir_a",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto94["m_sql"] = "transferir_a";
$proto94["m_srcTableName"] = "nopaa_master_c_s5";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "ct_integrado",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto96["m_sql"] = "ct_integrado";
$proto96["m_srcTableName"] = "nopaa_master_c_s5";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_tipoc",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto98["m_sql"] = "cont_tipoc";
$proto98["m_srcTableName"] = "nopaa_master_c_s5";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_modalidad",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto100["m_sql"] = "cont_modalidad";
$proto100["m_srcTableName"] = "nopaa_master_c_s5";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "justificacion",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto102["m_sql"] = "justificacion";
$proto102["m_srcTableName"] = "nopaa_master_c_s5";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "nbc",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto104["m_sql"] = "nbc";
$proto104["m_srcTableName"] = "nopaa_master_c_s5";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "nivel_formacion",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto106["m_sql"] = "nivel_formacion";
$proto106["m_srcTableName"] = "nopaa_master_c_s5";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "titulo_otorgado",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto108["m_sql"] = "titulo_otorgado";
$proto108["m_srcTableName"] = "nopaa_master_c_s5";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "nivel_formacion_a",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto110["m_sql"] = "nivel_formacion_a";
$proto110["m_srcTableName"] = "nopaa_master_c_s5";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "titulo_otorgado_a",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto112["m_sql"] = "titulo_otorgado_a";
$proto112["m_srcTableName"] = "nopaa_master_c_s5";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "tiempo_experiencia",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto114["m_sql"] = "tiempo_experiencia";
$proto114["m_srcTableName"] = "nopaa_master_c_s5";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "experiencia",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto116["m_sql"] = "experiencia";
$proto116["m_srcTableName"] = "nopaa_master_c_s5";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "idoneidad",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto118["m_sql"] = "idoneidad";
$proto118["m_srcTableName"] = "nopaa_master_c_s5";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_tipoca",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto120["m_sql"] = "cont_tipoca";
$proto120["m_srcTableName"] = "nopaa_master_c_s5";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_tipocb",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto122["m_sql"] = "cont_tipocb";
$proto122["m_srcTableName"] = "nopaa_master_c_s5";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_tipocc",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_c_s5"
));

$proto124["m_sql"] = "cont_tipocc";
$proto124["m_srcTableName"] = "nopaa_master_c_s5";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto126=array();
$proto126["m_link"] = "SQLL_MAIN";
			$proto127=array();
$proto127["m_strName"] = "nopaa_master";
$proto127["m_srcTableName"] = "nopaa_master_c_s5";
$proto127["m_columns"] = array();
$proto127["m_columns"][] = "PAA_ID";
$proto127["m_columns"][] = "ACT_ID";
$proto127["m_columns"][] = "PROD_ID";
$proto127["m_columns"][] = "TIPO";
$proto127["m_columns"][] = "PAAID_INTEGRADO";
$proto127["m_columns"][] = "CDP_INTEGRADO";
$proto127["m_columns"][] = "sys_status";
$proto127["m_columns"][] = "COD_UNSPSC";
$proto127["m_columns"][] = "DESCRIPCION";
$proto127["m_columns"][] = "DESCRIPCION_NEW";
$proto127["m_columns"][] = "MES_INICIO";
$proto127["m_columns"][] = "MES_PRESENTA";
$proto127["m_columns"][] = "FECHA_PRESENTA_PROPUESTAS";
$proto127["m_columns"][] = "DURACION_CONTRATO";
$proto127["m_columns"][] = "DURACION_ESTIMADA_DMA";
$proto127["m_columns"][] = "MODALIDAD";
$proto127["m_columns"][] = "FUENTE_RECURSOS";
$proto127["m_columns"][] = "VALOR";
$proto127["m_columns"][] = "VALOR_VIGENCIA";
$proto127["m_columns"][] = "VALOR_VIGENCIA_FUTURA";
$proto127["m_columns"][] = "VF";
$proto127["m_columns"][] = "ESTADO_VF";
$proto127["m_columns"][] = "UNIDAD_CONTRATACION";
$proto127["m_columns"][] = "COD_UBICACION";
$proto127["m_columns"][] = "RESPONSABLE_NOMBRE";
$proto127["m_columns"][] = "RESPONSABLE_TELEFONO";
$proto127["m_columns"][] = "RESPONSABLE_EMAIL";
$proto127["m_columns"][] = "responsable";
$proto127["m_columns"][] = "vigencia";
$proto127["m_columns"][] = "sys_user";
$proto127["m_columns"][] = "registrado_por";
$proto127["m_columns"][] = "sys_date";
$proto127["m_columns"][] = "REQ_OBS";
$proto127["m_columns"][] = "REQ_DATE";
$proto127["m_columns"][] = "REQ_MAILNOT";
$proto127["m_columns"][] = "SolModifica";
$proto127["m_columns"][] = "ContIdFK";
$proto127["m_columns"][] = "OBS_anulacion";
$proto127["m_columns"][] = "TIPOSOL";
$proto127["m_columns"][] = "USOS_TOTAL";
$proto127["m_columns"][] = "responsable_dep";
$proto127["m_columns"][] = "responsable_depsup";
$proto127["m_columns"][] = "transferir_a";
$proto127["m_columns"][] = "ct_integrado";
$proto127["m_columns"][] = "cont_tipoc";
$proto127["m_columns"][] = "cont_modalidad";
$proto127["m_columns"][] = "justificacion";
$proto127["m_columns"][] = "nbc";
$proto127["m_columns"][] = "nivel_formacion";
$proto127["m_columns"][] = "titulo_otorgado";
$proto127["m_columns"][] = "nivel_formacion_a";
$proto127["m_columns"][] = "titulo_otorgado_a";
$proto127["m_columns"][] = "tiempo_experiencia";
$proto127["m_columns"][] = "experiencia";
$proto127["m_columns"][] = "idoneidad";
$proto127["m_columns"][] = "cont_tipoca";
$proto127["m_columns"][] = "cont_tipocb";
$proto127["m_columns"][] = "cont_tipocc";
$obj = new SQLTable($proto127);

$proto126["m_table"] = $obj;
$proto126["m_sql"] = "nopaa_master";
$proto126["m_alias"] = "";
$proto126["m_srcTableName"] = "nopaa_master_c_s5";
$proto128=array();
$proto128["m_sql"] = "";
$proto128["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto128["m_column"]=$obj;
$proto128["m_contained"] = array();
$proto128["m_strCase"] = "";
$proto128["m_havingmode"] = false;
$proto128["m_inBrackets"] = false;
$proto128["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto128);

$proto126["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto126);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="nopaa_master_c_s5";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_nopaa_master_c_s5 = createSqlQuery_nopaa_master_c_s5();


	
										;

																																																									

$tdatanopaa_master_c_s5[".sqlquery"] = $queryData_nopaa_master_c_s5;



include_once(getabspath("include/nopaa_master_c_s5_events.php"));
$tdatanopaa_master_c_s5[".hasEvents"] = true;

?>