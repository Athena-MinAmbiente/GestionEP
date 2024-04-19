<?php
$tdatapaa_master_pscdp_integrado = array();
$tdatapaa_master_pscdp_integrado[".searchableFields"] = array();
$tdatapaa_master_pscdp_integrado[".ShortName"] = "paa_master_pscdp_integrado";
$tdatapaa_master_pscdp_integrado[".OwnerID"] = "sys_user";
$tdatapaa_master_pscdp_integrado[".OriginalTable"] = "paa_master_pscdp";


$tdatapaa_master_pscdp_integrado[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapaa_master_pscdp_integrado[".originalPagesByType"] = $tdatapaa_master_pscdp_integrado[".pagesByType"];
$tdatapaa_master_pscdp_integrado[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapaa_master_pscdp_integrado[".originalPages"] = $tdatapaa_master_pscdp_integrado[".pages"];
$tdatapaa_master_pscdp_integrado[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapaa_master_pscdp_integrado[".originalDefaultPages"] = $tdatapaa_master_pscdp_integrado[".defaultPages"];

//	field labels
$fieldLabelspaa_master_pscdp_integrado = array();
$fieldToolTipspaa_master_pscdp_integrado = array();
$pageTitlespaa_master_pscdp_integrado = array();
$placeHolderspaa_master_pscdp_integrado = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspaa_master_pscdp_integrado["Spanish"] = array();
	$fieldToolTipspaa_master_pscdp_integrado["Spanish"] = array();
	$placeHolderspaa_master_pscdp_integrado["Spanish"] = array();
	$pageTitlespaa_master_pscdp_integrado["Spanish"] = array();
	$fieldLabelspaa_master_pscdp_integrado["Spanish"]["PAAU_ID"] = "CDPID";
	$fieldToolTipspaa_master_pscdp_integrado["Spanish"]["PAAU_ID"] = "";
	$placeHolderspaa_master_pscdp_integrado["Spanish"]["PAAU_ID"] = "";
	$fieldLabelspaa_master_pscdp_integrado["Spanish"]["PAA_ID_FK"] = "PAA ID";
	$fieldToolTipspaa_master_pscdp_integrado["Spanish"]["PAA_ID_FK"] = "";
	$placeHolderspaa_master_pscdp_integrado["Spanish"]["PAA_ID_FK"] = "";
	$fieldLabelspaa_master_pscdp_integrado["Spanish"]["VIGENCIA"] = "Vigencia";
	$fieldToolTipspaa_master_pscdp_integrado["Spanish"]["VIGENCIA"] = "";
	$placeHolderspaa_master_pscdp_integrado["Spanish"]["VIGENCIA"] = "";
	$fieldLabelspaa_master_pscdp_integrado["Spanish"]["UEJ"] = "UEJ";
	$fieldToolTipspaa_master_pscdp_integrado["Spanish"]["UEJ"] = "";
	$placeHolderspaa_master_pscdp_integrado["Spanish"]["UEJ"] = "";
	$fieldLabelspaa_master_pscdp_integrado["Spanish"]["RUBRO"] = "Rubro";
	$fieldToolTipspaa_master_pscdp_integrado["Spanish"]["RUBRO"] = "";
	$placeHolderspaa_master_pscdp_integrado["Spanish"]["RUBRO"] = "";
	$fieldLabelspaa_master_pscdp_integrado["Spanish"]["PRODUCTO"] = "Producto | Uso";
	$fieldToolTipspaa_master_pscdp_integrado["Spanish"]["PRODUCTO"] = "";
	$placeHolderspaa_master_pscdp_integrado["Spanish"]["PRODUCTO"] = "";
	$fieldLabelspaa_master_pscdp_integrado["Spanish"]["ACTIVIDAD"] = "Actividad";
	$fieldToolTipspaa_master_pscdp_integrado["Spanish"]["ACTIVIDAD"] = "";
	$placeHolderspaa_master_pscdp_integrado["Spanish"]["ACTIVIDAD"] = "";
	$fieldLabelspaa_master_pscdp_integrado["Spanish"]["ACT_ID"] = "ACT ID";
	$fieldToolTipspaa_master_pscdp_integrado["Spanish"]["ACT_ID"] = "";
	$placeHolderspaa_master_pscdp_integrado["Spanish"]["ACT_ID"] = "";
	$fieldLabelspaa_master_pscdp_integrado["Spanish"]["PROD_ID"] = "PROD ID";
	$fieldToolTipspaa_master_pscdp_integrado["Spanish"]["PROD_ID"] = "";
	$placeHolderspaa_master_pscdp_integrado["Spanish"]["PROD_ID"] = "";
	$fieldLabelspaa_master_pscdp_integrado["Spanish"]["SOL_FECHA"] = "Fecha de solicitud";
	$fieldToolTipspaa_master_pscdp_integrado["Spanish"]["SOL_FECHA"] = "";
	$placeHolderspaa_master_pscdp_integrado["Spanish"]["SOL_FECHA"] = "";
	$fieldLabelspaa_master_pscdp_integrado["Spanish"]["SOL_DEPENDENCIA"] = "Dependencia";
	$fieldToolTipspaa_master_pscdp_integrado["Spanish"]["SOL_DEPENDENCIA"] = "";
	$placeHolderspaa_master_pscdp_integrado["Spanish"]["SOL_DEPENDENCIA"] = "";
	$fieldLabelspaa_master_pscdp_integrado["Spanish"]["OPERACION_ID_FK"] = "Clase de solicitud";
	$fieldToolTipspaa_master_pscdp_integrado["Spanish"]["OPERACION_ID_FK"] = "";
	$placeHolderspaa_master_pscdp_integrado["Spanish"]["OPERACION_ID_FK"] = "";
	$fieldLabelspaa_master_pscdp_integrado["Spanish"]["USER_REG"] = "Registrado por";
	$fieldToolTipspaa_master_pscdp_integrado["Spanish"]["USER_REG"] = "";
	$placeHolderspaa_master_pscdp_integrado["Spanish"]["USER_REG"] = "";
	$fieldLabelspaa_master_pscdp_integrado["Spanish"]["VALOR_SOLICITADO"] = "Valor solicitado";
	$fieldToolTipspaa_master_pscdp_integrado["Spanish"]["VALOR_SOLICITADO"] = "";
	$placeHolderspaa_master_pscdp_integrado["Spanish"]["VALOR_SOLICITADO"] = "";
	$fieldLabelspaa_master_pscdp_integrado["Spanish"]["SYS_STATUS"] = "Estado";
	$fieldToolTipspaa_master_pscdp_integrado["Spanish"]["SYS_STATUS"] = "";
	$placeHolderspaa_master_pscdp_integrado["Spanish"]["SYS_STATUS"] = "";
	$fieldLabelspaa_master_pscdp_integrado["Spanish"]["NUMERO_SCDP_SIIF"] = "NUMERO SCDP SIIF";
	$fieldToolTipspaa_master_pscdp_integrado["Spanish"]["NUMERO_SCDP_SIIF"] = "";
	$placeHolderspaa_master_pscdp_integrado["Spanish"]["NUMERO_SCDP_SIIF"] = "";
	$fieldLabelspaa_master_pscdp_integrado["Spanish"]["DOCUMENTO_SCDP_SIIF"] = "DOCUMENTO SCDP SIIF";
	$fieldToolTipspaa_master_pscdp_integrado["Spanish"]["DOCUMENTO_SCDP_SIIF"] = "";
	$placeHolderspaa_master_pscdp_integrado["Spanish"]["DOCUMENTO_SCDP_SIIF"] = "";
	$fieldLabelspaa_master_pscdp_integrado["Spanish"]["FECHA_SCDP_SIIF"] = "FECHA SCDP SIIF";
	$fieldToolTipspaa_master_pscdp_integrado["Spanish"]["FECHA_SCDP_SIIF"] = "";
	$placeHolderspaa_master_pscdp_integrado["Spanish"]["FECHA_SCDP_SIIF"] = "";
	$fieldLabelspaa_master_pscdp_integrado["Spanish"]["USUARIO_SCDP_SIIF"] = "USUARIO SCDP SIIF";
	$fieldToolTipspaa_master_pscdp_integrado["Spanish"]["USUARIO_SCDP_SIIF"] = "";
	$placeHolderspaa_master_pscdp_integrado["Spanish"]["USUARIO_SCDP_SIIF"] = "";
	$fieldLabelspaa_master_pscdp_integrado["Spanish"]["TIPO_SOL"] = "TIPO SOL";
	$fieldToolTipspaa_master_pscdp_integrado["Spanish"]["TIPO_SOL"] = "";
	$placeHolderspaa_master_pscdp_integrado["Spanish"]["TIPO_SOL"] = "";
	$fieldLabelspaa_master_pscdp_integrado["Spanish"]["DEV_FECHA"] = "DEV FECHA";
	$fieldToolTipspaa_master_pscdp_integrado["Spanish"]["DEV_FECHA"] = "";
	$placeHolderspaa_master_pscdp_integrado["Spanish"]["DEV_FECHA"] = "";
	$fieldLabelspaa_master_pscdp_integrado["Spanish"]["DEV_USER"] = "DEV USER";
	$fieldToolTipspaa_master_pscdp_integrado["Spanish"]["DEV_USER"] = "";
	$placeHolderspaa_master_pscdp_integrado["Spanish"]["DEV_USER"] = "";
	$fieldLabelspaa_master_pscdp_integrado["Spanish"]["DEV_MSG"] = "DEV MSG";
	$fieldToolTipspaa_master_pscdp_integrado["Spanish"]["DEV_MSG"] = "";
	$placeHolderspaa_master_pscdp_integrado["Spanish"]["DEV_MSG"] = "";
	$fieldLabelspaa_master_pscdp_integrado["Spanish"]["DEV_MAIL"] = "DEV MAIL";
	$fieldToolTipspaa_master_pscdp_integrado["Spanish"]["DEV_MAIL"] = "";
	$placeHolderspaa_master_pscdp_integrado["Spanish"]["DEV_MAIL"] = "";
	$fieldLabelspaa_master_pscdp_integrado["Spanish"]["FECHA_REG"] = "FECHA REG";
	$fieldToolTipspaa_master_pscdp_integrado["Spanish"]["FECHA_REG"] = "";
	$placeHolderspaa_master_pscdp_integrado["Spanish"]["FECHA_REG"] = "";
	$fieldLabelspaa_master_pscdp_integrado["Spanish"]["NUMERO_CDP_SIIF"] = "NUMERO CDP SIIF";
	$fieldToolTipspaa_master_pscdp_integrado["Spanish"]["NUMERO_CDP_SIIF"] = "";
	$placeHolderspaa_master_pscdp_integrado["Spanish"]["NUMERO_CDP_SIIF"] = "";
	$fieldLabelspaa_master_pscdp_integrado["Spanish"]["DOCUMENTO_CDP_SIIF"] = "DOCUMENTO CDP SIIF";
	$fieldToolTipspaa_master_pscdp_integrado["Spanish"]["DOCUMENTO_CDP_SIIF"] = "";
	$placeHolderspaa_master_pscdp_integrado["Spanish"]["DOCUMENTO_CDP_SIIF"] = "";
	$fieldLabelspaa_master_pscdp_integrado["Spanish"]["FECHA_CDP_SIIF"] = "FECHA CDP SIIF";
	$fieldToolTipspaa_master_pscdp_integrado["Spanish"]["FECHA_CDP_SIIF"] = "";
	$placeHolderspaa_master_pscdp_integrado["Spanish"]["FECHA_CDP_SIIF"] = "";
	$fieldLabelspaa_master_pscdp_integrado["Spanish"]["USUARIO_CDP_SIIF"] = "USUARIO CDP SIIF";
	$fieldToolTipspaa_master_pscdp_integrado["Spanish"]["USUARIO_CDP_SIIF"] = "";
	$placeHolderspaa_master_pscdp_integrado["Spanish"]["USUARIO_CDP_SIIF"] = "";
	$fieldLabelspaa_master_pscdp_integrado["Spanish"]["NOT_MAIL"] = "Notificados";
	$fieldToolTipspaa_master_pscdp_integrado["Spanish"]["NOT_MAIL"] = "";
	$placeHolderspaa_master_pscdp_integrado["Spanish"]["NOT_MAIL"] = "";
	$fieldLabelspaa_master_pscdp_integrado["Spanish"]["OBS"] = "Observaciones";
	$fieldToolTipspaa_master_pscdp_integrado["Spanish"]["OBS"] = "";
	$placeHolderspaa_master_pscdp_integrado["Spanish"]["OBS"] = "";
	$fieldLabelspaa_master_pscdp_integrado["Spanish"]["DESC_PAA"] = "Descripción PAA";
	$fieldToolTipspaa_master_pscdp_integrado["Spanish"]["DESC_PAA"] = "";
	$placeHolderspaa_master_pscdp_integrado["Spanish"]["DESC_PAA"] = "";
	$fieldLabelspaa_master_pscdp_integrado["Spanish"]["sys_transac"] = "Sys Transac";
	$fieldToolTipspaa_master_pscdp_integrado["Spanish"]["sys_transac"] = "";
	$placeHolderspaa_master_pscdp_integrado["Spanish"]["sys_transac"] = "";
	$fieldLabelspaa_master_pscdp_integrado["Spanish"]["ATTACH_A"] = "Anexos";
	$fieldToolTipspaa_master_pscdp_integrado["Spanish"]["ATTACH_A"] = "";
	$placeHolderspaa_master_pscdp_integrado["Spanish"]["ATTACH_A"] = "";
	$fieldLabelspaa_master_pscdp_integrado["Spanish"]["UNIDAD_CONTRATACION"] = "UNIDAD CONTRATACION";
	$fieldToolTipspaa_master_pscdp_integrado["Spanish"]["UNIDAD_CONTRATACION"] = "";
	$placeHolderspaa_master_pscdp_integrado["Spanish"]["UNIDAD_CONTRATACION"] = "";
	$fieldLabelspaa_master_pscdp_integrado["Spanish"]["TIPO_CDP"] = "Clase de solicitud CDP";
	$fieldToolTipspaa_master_pscdp_integrado["Spanish"]["TIPO_CDP"] = "";
	$placeHolderspaa_master_pscdp_integrado["Spanish"]["TIPO_CDP"] = "";
	$fieldLabelspaa_master_pscdp_integrado["Spanish"]["MES_CDP"] = "MES CDP";
	$fieldToolTipspaa_master_pscdp_integrado["Spanish"]["MES_CDP"] = "";
	$placeHolderspaa_master_pscdp_integrado["Spanish"]["MES_CDP"] = "";
	$fieldLabelspaa_master_pscdp_integrado["Spanish"]["DESC_CDP"] = "Descripción del CDP";
	$fieldToolTipspaa_master_pscdp_integrado["Spanish"]["DESC_CDP"] = "";
	$placeHolderspaa_master_pscdp_integrado["Spanish"]["DESC_CDP"] = "";
	$fieldLabelspaa_master_pscdp_integrado["Spanish"]["sys_user"] = "Sys User";
	$fieldToolTipspaa_master_pscdp_integrado["Spanish"]["sys_user"] = "";
	$placeHolderspaa_master_pscdp_integrado["Spanish"]["sys_user"] = "";
	if (count($fieldToolTipspaa_master_pscdp_integrado["Spanish"]))
		$tdatapaa_master_pscdp_integrado[".isUseToolTips"] = true;
}


	$tdatapaa_master_pscdp_integrado[".NCSearch"] = true;



$tdatapaa_master_pscdp_integrado[".shortTableName"] = "paa_master_pscdp_integrado";
$tdatapaa_master_pscdp_integrado[".nSecOptions"] = 0;

$tdatapaa_master_pscdp_integrado[".mainTableOwnerID"] = "sys_user";
$tdatapaa_master_pscdp_integrado[".entityType"] = 1;
$tdatapaa_master_pscdp_integrado[".connId"] = "mincit_global_20x_at_127_0_0_1";


$tdatapaa_master_pscdp_integrado[".strOriginalTableName"] = "paa_master_pscdp";

	



$tdatapaa_master_pscdp_integrado[".showAddInPopup"] = false;

$tdatapaa_master_pscdp_integrado[".showEditInPopup"] = false;

$tdatapaa_master_pscdp_integrado[".showViewInPopup"] = false;

$tdatapaa_master_pscdp_integrado[".listAjax"] = false;
//	temporary
//$tdatapaa_master_pscdp_integrado[".listAjax"] = false;

	$tdatapaa_master_pscdp_integrado[".audit"] = true;

	$tdatapaa_master_pscdp_integrado[".locking"] = true;


$pages = $tdatapaa_master_pscdp_integrado[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapaa_master_pscdp_integrado[".edit"] = true;
	$tdatapaa_master_pscdp_integrado[".afterEditAction"] = 1;
	$tdatapaa_master_pscdp_integrado[".closePopupAfterEdit"] = 1;
	$tdatapaa_master_pscdp_integrado[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapaa_master_pscdp_integrado[".add"] = true;
$tdatapaa_master_pscdp_integrado[".afterAddAction"] = 1;
$tdatapaa_master_pscdp_integrado[".closePopupAfterAdd"] = 1;
$tdatapaa_master_pscdp_integrado[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapaa_master_pscdp_integrado[".list"] = true;
}



$tdatapaa_master_pscdp_integrado[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapaa_master_pscdp_integrado[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapaa_master_pscdp_integrado[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapaa_master_pscdp_integrado[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapaa_master_pscdp_integrado[".printFriendly"] = true;
}



$tdatapaa_master_pscdp_integrado[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapaa_master_pscdp_integrado[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapaa_master_pscdp_integrado[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapaa_master_pscdp_integrado[".isUseAjaxSuggest"] = true;



												

$tdatapaa_master_pscdp_integrado[".ajaxCodeSnippetAdded"] = false;

$tdatapaa_master_pscdp_integrado[".buttonsAdded"] = false;

$tdatapaa_master_pscdp_integrado[".addPageEvents"] = true;

// use timepicker for search panel
$tdatapaa_master_pscdp_integrado[".isUseTimeForSearch"] = false;


$tdatapaa_master_pscdp_integrado[".badgeColor"] = "6B8E23";


$tdatapaa_master_pscdp_integrado[".allSearchFields"] = array();
$tdatapaa_master_pscdp_integrado[".filterFields"] = array();
$tdatapaa_master_pscdp_integrado[".requiredSearchFields"] = array();

$tdatapaa_master_pscdp_integrado[".googleLikeFields"] = array();
$tdatapaa_master_pscdp_integrado[".googleLikeFields"][] = "PAAU_ID";
$tdatapaa_master_pscdp_integrado[".googleLikeFields"][] = "PAA_ID_FK";
$tdatapaa_master_pscdp_integrado[".googleLikeFields"][] = "DESC_PAA";
$tdatapaa_master_pscdp_integrado[".googleLikeFields"][] = "VIGENCIA";
$tdatapaa_master_pscdp_integrado[".googleLikeFields"][] = "UEJ";
$tdatapaa_master_pscdp_integrado[".googleLikeFields"][] = "RUBRO";
$tdatapaa_master_pscdp_integrado[".googleLikeFields"][] = "PRODUCTO";
$tdatapaa_master_pscdp_integrado[".googleLikeFields"][] = "ACTIVIDAD";
$tdatapaa_master_pscdp_integrado[".googleLikeFields"][] = "ACT_ID";
$tdatapaa_master_pscdp_integrado[".googleLikeFields"][] = "PROD_ID";
$tdatapaa_master_pscdp_integrado[".googleLikeFields"][] = "SOL_FECHA";
$tdatapaa_master_pscdp_integrado[".googleLikeFields"][] = "SOL_DEPENDENCIA";
$tdatapaa_master_pscdp_integrado[".googleLikeFields"][] = "OPERACION_ID_FK";
$tdatapaa_master_pscdp_integrado[".googleLikeFields"][] = "USER_REG";
$tdatapaa_master_pscdp_integrado[".googleLikeFields"][] = "VALOR_SOLICITADO";
$tdatapaa_master_pscdp_integrado[".googleLikeFields"][] = "ATTACH_A";
$tdatapaa_master_pscdp_integrado[".googleLikeFields"][] = "SYS_STATUS";
$tdatapaa_master_pscdp_integrado[".googleLikeFields"][] = "NUMERO_SCDP_SIIF";
$tdatapaa_master_pscdp_integrado[".googleLikeFields"][] = "DOCUMENTO_SCDP_SIIF";
$tdatapaa_master_pscdp_integrado[".googleLikeFields"][] = "FECHA_SCDP_SIIF";
$tdatapaa_master_pscdp_integrado[".googleLikeFields"][] = "USUARIO_SCDP_SIIF";
$tdatapaa_master_pscdp_integrado[".googleLikeFields"][] = "TIPO_SOL";
$tdatapaa_master_pscdp_integrado[".googleLikeFields"][] = "DEV_FECHA";
$tdatapaa_master_pscdp_integrado[".googleLikeFields"][] = "DEV_USER";
$tdatapaa_master_pscdp_integrado[".googleLikeFields"][] = "DEV_MSG";
$tdatapaa_master_pscdp_integrado[".googleLikeFields"][] = "DEV_MAIL";
$tdatapaa_master_pscdp_integrado[".googleLikeFields"][] = "FECHA_REG";
$tdatapaa_master_pscdp_integrado[".googleLikeFields"][] = "NUMERO_CDP_SIIF";
$tdatapaa_master_pscdp_integrado[".googleLikeFields"][] = "DOCUMENTO_CDP_SIIF";
$tdatapaa_master_pscdp_integrado[".googleLikeFields"][] = "FECHA_CDP_SIIF";
$tdatapaa_master_pscdp_integrado[".googleLikeFields"][] = "USUARIO_CDP_SIIF";
$tdatapaa_master_pscdp_integrado[".googleLikeFields"][] = "NOT_MAIL";
$tdatapaa_master_pscdp_integrado[".googleLikeFields"][] = "OBS";
$tdatapaa_master_pscdp_integrado[".googleLikeFields"][] = "sys_transac";
$tdatapaa_master_pscdp_integrado[".googleLikeFields"][] = "UNIDAD_CONTRATACION";
$tdatapaa_master_pscdp_integrado[".googleLikeFields"][] = "TIPO_CDP";
$tdatapaa_master_pscdp_integrado[".googleLikeFields"][] = "MES_CDP";
$tdatapaa_master_pscdp_integrado[".googleLikeFields"][] = "DESC_CDP";
$tdatapaa_master_pscdp_integrado[".googleLikeFields"][] = "sys_user";



$tdatapaa_master_pscdp_integrado[".tableType"] = "list";

$tdatapaa_master_pscdp_integrado[".printerPageOrientation"] = 0;
$tdatapaa_master_pscdp_integrado[".nPrinterPageScale"] = 100;

$tdatapaa_master_pscdp_integrado[".nPrinterSplitRecords"] = 40;

$tdatapaa_master_pscdp_integrado[".geocodingEnabled"] = false;










$tdatapaa_master_pscdp_integrado[".pageSize"] = 20;

$tdatapaa_master_pscdp_integrado[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapaa_master_pscdp_integrado[".strOrderBy"] = $tstrOrderBy;

$tdatapaa_master_pscdp_integrado[".orderindexes"] = array();


$tdatapaa_master_pscdp_integrado[".sqlHead"] = "SELECT PAAU_ID, PAA_ID_FK, DESC_PAA, VIGENCIA, UEJ, RUBRO, PRODUCTO, ACTIVIDAD, ACT_ID, PROD_ID, SOL_FECHA, SOL_DEPENDENCIA, OPERACION_ID_FK, USER_REG, VALOR_SOLICITADO, ATTACH_A, SYS_STATUS, NUMERO_SCDP_SIIF, DOCUMENTO_SCDP_SIIF, FECHA_SCDP_SIIF, USUARIO_SCDP_SIIF, TIPO_SOL, DEV_FECHA, DEV_USER, DEV_MSG, DEV_MAIL, FECHA_REG, NUMERO_CDP_SIIF, DOCUMENTO_CDP_SIIF, FECHA_CDP_SIIF, USUARIO_CDP_SIIF, NOT_MAIL, OBS, sys_transac, UNIDAD_CONTRATACION, TIPO_CDP, MES_CDP, DESC_CDP, sys_user";
$tdatapaa_master_pscdp_integrado[".sqlFrom"] = "FROM paa_master_pscdp";
$tdatapaa_master_pscdp_integrado[".sqlWhereExpr"] = "(SYS_STATUS = 9)";
$tdatapaa_master_pscdp_integrado[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapaa_master_pscdp_integrado[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapaa_master_pscdp_integrado[".arrGroupsPerPage"] = $arrGPP;

$tdatapaa_master_pscdp_integrado[".highlightSearchResults"] = true;

$tableKeyspaa_master_pscdp_integrado = array();
$tableKeyspaa_master_pscdp_integrado[] = "PAAU_ID";
$tdatapaa_master_pscdp_integrado[".Keys"] = $tableKeyspaa_master_pscdp_integrado;


$tdatapaa_master_pscdp_integrado[".hideMobileList"] = array();




//	PAAU_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PAAU_ID";
	$fdata["GoodName"] = "PAAU_ID";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_integrado","PAAU_ID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "PAAU_ID";

		$fdata["sourceSingle"] = "PAAU_ID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PAAU_ID";

	
	
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


	$tdatapaa_master_pscdp_integrado["PAAU_ID"] = $fdata;
		$tdatapaa_master_pscdp_integrado[".searchableFields"][] = "PAAU_ID";
//	PAA_ID_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PAA_ID_FK";
	$fdata["GoodName"] = "PAA_ID_FK";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_integrado","PAA_ID_FK");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "PAA_ID_FK";

		$fdata["sourceSingle"] = "PAA_ID_FK";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PAA_ID_FK";

	
	
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
	$edata["LookupTable"] = "q_info_paa";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"DESC_PAA", 'lookupF'=>"DESCRIPCION_PAA");
	$edata["autoCompleteFields"][] = array('masterF'=>"VIGENCIA", 'lookupF'=>"ACT_VIGENCIA");
	$edata["autoCompleteFields"][] = array('masterF'=>"UEJ", 'lookupF'=>"ACT_UEJ");
	$edata["autoCompleteFields"][] = array('masterF'=>"RUBRO", 'lookupF'=>"ACT_RUBRO");
	$edata["autoCompleteFields"][] = array('masterF'=>"PRODUCTO", 'lookupF'=>"ACT_PRODUCTO");
	$edata["autoCompleteFields"][] = array('masterF'=>"ACTIVIDAD", 'lookupF'=>"ACT_ACTIVIDAD");
	$edata["autoCompleteFields"][] = array('masterF'=>"ACT_ID", 'lookupF'=>"ACT_ID");
	$edata["autoCompleteFields"][] = array('masterF'=>"VALOR_SOLICITADO", 'lookupF'=>"VALOR_SOLICITADO");
	$edata["autoCompleteFields"][] = array('masterF'=>"UNIDAD_CONTRATACION", 'lookupF'=>"UNIDAD_CONTRATACION");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "PAA_ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "PAA_ID";

	

	
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


	$tdatapaa_master_pscdp_integrado["PAA_ID_FK"] = $fdata;
		$tdatapaa_master_pscdp_integrado[".searchableFields"][] = "PAA_ID_FK";
//	DESC_PAA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DESC_PAA";
	$fdata["GoodName"] = "DESC_PAA";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_integrado","DESC_PAA");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "DESC_PAA";

		$fdata["sourceSingle"] = "DESC_PAA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DESC_PAA";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
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


	$tdatapaa_master_pscdp_integrado["DESC_PAA"] = $fdata;
		$tdatapaa_master_pscdp_integrado[".searchableFields"][] = "DESC_PAA";
//	VIGENCIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "VIGENCIA";
	$fdata["GoodName"] = "VIGENCIA";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_integrado","VIGENCIA");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "global_vigencia";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "vigencia";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "vigencia";

	

	
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


	$tdatapaa_master_pscdp_integrado["VIGENCIA"] = $fdata;
		$tdatapaa_master_pscdp_integrado[".searchableFields"][] = "VIGENCIA";
//	UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "UEJ";
	$fdata["GoodName"] = "UEJ";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_integrado","UEJ");
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


	$tdatapaa_master_pscdp_integrado["UEJ"] = $fdata;
		$tdatapaa_master_pscdp_integrado[".searchableFields"][] = "UEJ";
//	RUBRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "RUBRO";
	$fdata["GoodName"] = "RUBRO";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_integrado","RUBRO");
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


	$tdatapaa_master_pscdp_integrado["RUBRO"] = $fdata;
		$tdatapaa_master_pscdp_integrado[".searchableFields"][] = "RUBRO";
//	PRODUCTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PRODUCTO";
	$fdata["GoodName"] = "PRODUCTO";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_integrado","PRODUCTO");
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


	$tdatapaa_master_pscdp_integrado["PRODUCTO"] = $fdata;
		$tdatapaa_master_pscdp_integrado[".searchableFields"][] = "PRODUCTO";
//	ACTIVIDAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ACTIVIDAD";
	$fdata["GoodName"] = "ACTIVIDAD";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_integrado","ACTIVIDAD");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ACTIVIDAD";

		$fdata["sourceSingle"] = "ACTIVIDAD";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACTIVIDAD";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatapaa_master_pscdp_integrado["ACTIVIDAD"] = $fdata;
		$tdatapaa_master_pscdp_integrado[".searchableFields"][] = "ACTIVIDAD";
//	ACT_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ACT_ID";
	$fdata["GoodName"] = "ACT_ID";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_integrado","ACT_ID");
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


	$tdatapaa_master_pscdp_integrado["ACT_ID"] = $fdata;
		$tdatapaa_master_pscdp_integrado[".searchableFields"][] = "ACT_ID";
//	PROD_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "PROD_ID";
	$fdata["GoodName"] = "PROD_ID";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_integrado","PROD_ID");
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


	$tdatapaa_master_pscdp_integrado["PROD_ID"] = $fdata;
		$tdatapaa_master_pscdp_integrado[".searchableFields"][] = "PROD_ID";
//	SOL_FECHA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "SOL_FECHA";
	$fdata["GoodName"] = "SOL_FECHA";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_integrado","SOL_FECHA");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "SOL_FECHA";

		$fdata["sourceSingle"] = "SOL_FECHA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SOL_FECHA";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatapaa_master_pscdp_integrado["SOL_FECHA"] = $fdata;
		$tdatapaa_master_pscdp_integrado[".searchableFields"][] = "SOL_FECHA";
//	SOL_DEPENDENCIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "SOL_DEPENDENCIA";
	$fdata["GoodName"] = "SOL_DEPENDENCIA";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_integrado","SOL_DEPENDENCIA");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "SOL_DEPENDENCIA";

		$fdata["sourceSingle"] = "SOL_DEPENDENCIA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SOL_DEPENDENCIA";

	
	
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


	$tdatapaa_master_pscdp_integrado["SOL_DEPENDENCIA"] = $fdata;
		$tdatapaa_master_pscdp_integrado[".searchableFields"][] = "SOL_DEPENDENCIA";
//	OPERACION_ID_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "OPERACION_ID_FK";
	$fdata["GoodName"] = "OPERACION_ID_FK";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_integrado","OPERACION_ID_FK");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "OPERACION_ID_FK";

		$fdata["sourceSingle"] = "OPERACION_ID_FK";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OPERACION_ID_FK";

	
	
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
	$edata["LookupTable"] = "global_operacion";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "COD_OPERACION";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "NOM_OPERACION";

	

	
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


	$tdatapaa_master_pscdp_integrado["OPERACION_ID_FK"] = $fdata;
		$tdatapaa_master_pscdp_integrado[".searchableFields"][] = "OPERACION_ID_FK";
//	USER_REG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "USER_REG";
	$fdata["GoodName"] = "USER_REG";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_integrado","USER_REG");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "USER_REG";

		$fdata["sourceSingle"] = "USER_REG";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USER_REG";

	
	
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


	$tdatapaa_master_pscdp_integrado["USER_REG"] = $fdata;
		$tdatapaa_master_pscdp_integrado[".searchableFields"][] = "USER_REG";
//	VALOR_SOLICITADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "VALOR_SOLICITADO";
	$fdata["GoodName"] = "VALOR_SOLICITADO";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_integrado","VALOR_SOLICITADO");
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


	$tdatapaa_master_pscdp_integrado["VALOR_SOLICITADO"] = $fdata;
		$tdatapaa_master_pscdp_integrado[".searchableFields"][] = "VALOR_SOLICITADO";
//	ATTACH_A
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "ATTACH_A";
	$fdata["GoodName"] = "ATTACH_A";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_integrado","ATTACH_A");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "ATTACH_A";

		$fdata["sourceSingle"] = "ATTACH_A";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ATTACH_A";

	
	
				$fdata["UploadFolder"] = "GesDoc/CDP/";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
				
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = array();
			$edata["acceptFileTypes"][] = strtoupper("pdf");
						$edata["acceptFileTypesHtml"] = ".pdf";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
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


	$tdatapaa_master_pscdp_integrado["ATTACH_A"] = $fdata;
		$tdatapaa_master_pscdp_integrado[".searchableFields"][] = "ATTACH_A";
//	SYS_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "SYS_STATUS";
	$fdata["GoodName"] = "SYS_STATUS";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_integrado","SYS_STATUS");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "SYS_STATUS";

		$fdata["sourceSingle"] = "SYS_STATUS";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SYS_STATUS";

	
	
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
	$edata["LookupTable"] = "global_estado_scdp";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"NOT_MAIL", 'lookupF'=>"not_mail");
	$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "status_scdp_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "status_scdp_name";

				$edata["LookupWhere"] = "status_scdp_id = 9";


	
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


	$tdatapaa_master_pscdp_integrado["SYS_STATUS"] = $fdata;
		$tdatapaa_master_pscdp_integrado[".searchableFields"][] = "SYS_STATUS";
//	NUMERO_SCDP_SIIF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "NUMERO_SCDP_SIIF";
	$fdata["GoodName"] = "NUMERO_SCDP_SIIF";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_integrado","NUMERO_SCDP_SIIF");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "NUMERO_SCDP_SIIF";

		$fdata["sourceSingle"] = "NUMERO_SCDP_SIIF";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NUMERO_SCDP_SIIF";

	
	
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


	$tdatapaa_master_pscdp_integrado["NUMERO_SCDP_SIIF"] = $fdata;
		$tdatapaa_master_pscdp_integrado[".searchableFields"][] = "NUMERO_SCDP_SIIF";
//	DOCUMENTO_SCDP_SIIF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "DOCUMENTO_SCDP_SIIF";
	$fdata["GoodName"] = "DOCUMENTO_SCDP_SIIF";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_integrado","DOCUMENTO_SCDP_SIIF");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "DOCUMENTO_SCDP_SIIF";

		$fdata["sourceSingle"] = "DOCUMENTO_SCDP_SIIF";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DOCUMENTO_SCDP_SIIF";

	
	
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


	$tdatapaa_master_pscdp_integrado["DOCUMENTO_SCDP_SIIF"] = $fdata;
		$tdatapaa_master_pscdp_integrado[".searchableFields"][] = "DOCUMENTO_SCDP_SIIF";
//	FECHA_SCDP_SIIF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "FECHA_SCDP_SIIF";
	$fdata["GoodName"] = "FECHA_SCDP_SIIF";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_integrado","FECHA_SCDP_SIIF");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "FECHA_SCDP_SIIF";

		$fdata["sourceSingle"] = "FECHA_SCDP_SIIF";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FECHA_SCDP_SIIF";

	
	
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


	$tdatapaa_master_pscdp_integrado["FECHA_SCDP_SIIF"] = $fdata;
		$tdatapaa_master_pscdp_integrado[".searchableFields"][] = "FECHA_SCDP_SIIF";
//	USUARIO_SCDP_SIIF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "USUARIO_SCDP_SIIF";
	$fdata["GoodName"] = "USUARIO_SCDP_SIIF";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_integrado","USUARIO_SCDP_SIIF");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "USUARIO_SCDP_SIIF";

		$fdata["sourceSingle"] = "USUARIO_SCDP_SIIF";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USUARIO_SCDP_SIIF";

	
	
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


	$tdatapaa_master_pscdp_integrado["USUARIO_SCDP_SIIF"] = $fdata;
		$tdatapaa_master_pscdp_integrado[".searchableFields"][] = "USUARIO_SCDP_SIIF";
//	TIPO_SOL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "TIPO_SOL";
	$fdata["GoodName"] = "TIPO_SOL";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_integrado","TIPO_SOL");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "TIPO_SOL";

		$fdata["sourceSingle"] = "TIPO_SOL";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIPO_SOL";

	
	
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


	$tdatapaa_master_pscdp_integrado["TIPO_SOL"] = $fdata;
		$tdatapaa_master_pscdp_integrado[".searchableFields"][] = "TIPO_SOL";
//	DEV_FECHA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "DEV_FECHA";
	$fdata["GoodName"] = "DEV_FECHA";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_integrado","DEV_FECHA");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "DEV_FECHA";

		$fdata["sourceSingle"] = "DEV_FECHA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEV_FECHA";

	
	
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


	$tdatapaa_master_pscdp_integrado["DEV_FECHA"] = $fdata;
		$tdatapaa_master_pscdp_integrado[".searchableFields"][] = "DEV_FECHA";
//	DEV_USER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "DEV_USER";
	$fdata["GoodName"] = "DEV_USER";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_integrado","DEV_USER");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DEV_USER";

		$fdata["sourceSingle"] = "DEV_USER";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEV_USER";

	
	
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


	$tdatapaa_master_pscdp_integrado["DEV_USER"] = $fdata;
		$tdatapaa_master_pscdp_integrado[".searchableFields"][] = "DEV_USER";
//	DEV_MSG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "DEV_MSG";
	$fdata["GoodName"] = "DEV_MSG";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_integrado","DEV_MSG");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DEV_MSG";

		$fdata["sourceSingle"] = "DEV_MSG";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEV_MSG";

	
	
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


	$tdatapaa_master_pscdp_integrado["DEV_MSG"] = $fdata;
		$tdatapaa_master_pscdp_integrado[".searchableFields"][] = "DEV_MSG";
//	DEV_MAIL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "DEV_MAIL";
	$fdata["GoodName"] = "DEV_MAIL";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_integrado","DEV_MAIL");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DEV_MAIL";

		$fdata["sourceSingle"] = "DEV_MAIL";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEV_MAIL";

	
	
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


	$tdatapaa_master_pscdp_integrado["DEV_MAIL"] = $fdata;
		$tdatapaa_master_pscdp_integrado[".searchableFields"][] = "DEV_MAIL";
//	FECHA_REG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "FECHA_REG";
	$fdata["GoodName"] = "FECHA_REG";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_integrado","FECHA_REG");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "FECHA_REG";

		$fdata["sourceSingle"] = "FECHA_REG";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FECHA_REG";

	
	
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


	$tdatapaa_master_pscdp_integrado["FECHA_REG"] = $fdata;
		$tdatapaa_master_pscdp_integrado[".searchableFields"][] = "FECHA_REG";
//	NUMERO_CDP_SIIF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "NUMERO_CDP_SIIF";
	$fdata["GoodName"] = "NUMERO_CDP_SIIF";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_integrado","NUMERO_CDP_SIIF");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "NUMERO_CDP_SIIF";

		$fdata["sourceSingle"] = "NUMERO_CDP_SIIF";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NUMERO_CDP_SIIF";

	
	
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


	$tdatapaa_master_pscdp_integrado["NUMERO_CDP_SIIF"] = $fdata;
		$tdatapaa_master_pscdp_integrado[".searchableFields"][] = "NUMERO_CDP_SIIF";
//	DOCUMENTO_CDP_SIIF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "DOCUMENTO_CDP_SIIF";
	$fdata["GoodName"] = "DOCUMENTO_CDP_SIIF";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_integrado","DOCUMENTO_CDP_SIIF");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "DOCUMENTO_CDP_SIIF";

		$fdata["sourceSingle"] = "DOCUMENTO_CDP_SIIF";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DOCUMENTO_CDP_SIIF";

	
	
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


	$tdatapaa_master_pscdp_integrado["DOCUMENTO_CDP_SIIF"] = $fdata;
		$tdatapaa_master_pscdp_integrado[".searchableFields"][] = "DOCUMENTO_CDP_SIIF";
//	FECHA_CDP_SIIF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "FECHA_CDP_SIIF";
	$fdata["GoodName"] = "FECHA_CDP_SIIF";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_integrado","FECHA_CDP_SIIF");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "FECHA_CDP_SIIF";

		$fdata["sourceSingle"] = "FECHA_CDP_SIIF";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FECHA_CDP_SIIF";

	
	
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


	$tdatapaa_master_pscdp_integrado["FECHA_CDP_SIIF"] = $fdata;
		$tdatapaa_master_pscdp_integrado[".searchableFields"][] = "FECHA_CDP_SIIF";
//	USUARIO_CDP_SIIF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "USUARIO_CDP_SIIF";
	$fdata["GoodName"] = "USUARIO_CDP_SIIF";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_integrado","USUARIO_CDP_SIIF");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "USUARIO_CDP_SIIF";

		$fdata["sourceSingle"] = "USUARIO_CDP_SIIF";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USUARIO_CDP_SIIF";

	
	
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


	$tdatapaa_master_pscdp_integrado["USUARIO_CDP_SIIF"] = $fdata;
		$tdatapaa_master_pscdp_integrado[".searchableFields"][] = "USUARIO_CDP_SIIF";
//	NOT_MAIL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "NOT_MAIL";
	$fdata["GoodName"] = "NOT_MAIL";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_integrado","NOT_MAIL");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "NOT_MAIL";

		$fdata["sourceSingle"] = "NOT_MAIL";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOT_MAIL";

	
	
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


	$tdatapaa_master_pscdp_integrado["NOT_MAIL"] = $fdata;
		$tdatapaa_master_pscdp_integrado[".searchableFields"][] = "NOT_MAIL";
//	OBS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "OBS";
	$fdata["GoodName"] = "OBS";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_integrado","OBS");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "OBS";

		$fdata["sourceSingle"] = "OBS";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OBS";

	
	
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

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatapaa_master_pscdp_integrado["OBS"] = $fdata;
		$tdatapaa_master_pscdp_integrado[".searchableFields"][] = "OBS";
//	sys_transac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "sys_transac";
	$fdata["GoodName"] = "sys_transac";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_integrado","sys_transac");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sys_transac";

		$fdata["sourceSingle"] = "sys_transac";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_transac";

	
	
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


	$tdatapaa_master_pscdp_integrado["sys_transac"] = $fdata;
		$tdatapaa_master_pscdp_integrado[".searchableFields"][] = "sys_transac";
//	UNIDAD_CONTRATACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "UNIDAD_CONTRATACION";
	$fdata["GoodName"] = "UNIDAD_CONTRATACION";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_integrado","UNIDAD_CONTRATACION");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "global_paa_nopaa";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "paan_name";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "paan_name";

	

	
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


	$tdatapaa_master_pscdp_integrado["UNIDAD_CONTRATACION"] = $fdata;
		$tdatapaa_master_pscdp_integrado[".searchableFields"][] = "UNIDAD_CONTRATACION";
//	TIPO_CDP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "TIPO_CDP";
	$fdata["GoodName"] = "TIPO_CDP";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_integrado","TIPO_CDP");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "TIPO_CDP";

		$fdata["sourceSingle"] = "TIPO_CDP";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIPO_CDP";

	
	
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
	$edata["LookupTable"] = "global_tipo_cdp";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "tipo_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "tipo_cdp";

				$edata["LookupWhere"] = "tipo_id >= 2";


	
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


	$tdatapaa_master_pscdp_integrado["TIPO_CDP"] = $fdata;
		$tdatapaa_master_pscdp_integrado[".searchableFields"][] = "TIPO_CDP";
//	MES_CDP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "MES_CDP";
	$fdata["GoodName"] = "MES_CDP";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_integrado","MES_CDP");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "MES_CDP";

		$fdata["sourceSingle"] = "MES_CDP";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MES_CDP";

	
	
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


	$tdatapaa_master_pscdp_integrado["MES_CDP"] = $fdata;
		$tdatapaa_master_pscdp_integrado[".searchableFields"][] = "MES_CDP";
//	DESC_CDP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "DESC_CDP";
	$fdata["GoodName"] = "DESC_CDP";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_integrado","DESC_CDP");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "DESC_CDP";

		$fdata["sourceSingle"] = "DESC_CDP";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DESC_CDP";

	
	
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


	$tdatapaa_master_pscdp_integrado["DESC_CDP"] = $fdata;
		$tdatapaa_master_pscdp_integrado[".searchableFields"][] = "DESC_CDP";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_integrado","sys_user");
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


	$tdatapaa_master_pscdp_integrado["sys_user"] = $fdata;
		$tdatapaa_master_pscdp_integrado[".searchableFields"][] = "sys_user";


$tables_data["paa_master_pscdp_integrado"]=&$tdatapaa_master_pscdp_integrado;
$field_labels["paa_master_pscdp_integrado"] = &$fieldLabelspaa_master_pscdp_integrado;
$fieldToolTips["paa_master_pscdp_integrado"] = &$fieldToolTipspaa_master_pscdp_integrado;
$placeHolders["paa_master_pscdp_integrado"] = &$placeHolderspaa_master_pscdp_integrado;
$page_titles["paa_master_pscdp_integrado"] = &$pageTitlespaa_master_pscdp_integrado;


changeTextControlsToDate( "paa_master_pscdp_integrado" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["paa_master_pscdp_integrado"] = array();
//	q_info_paa_cdp_int
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="q_info_paa_cdp_int";
		$detailsParam["dOriginalTable"] = "q_info_paa";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "q_info_paa_cdp_int";
	$detailsParam["dCaptionTable"] = GetTableCaption("q_info_paa_cdp_int");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["paa_master_pscdp_integrado"][$dIndex] = $detailsParam;

	
		$detailsTablesData["paa_master_pscdp_integrado"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["paa_master_pscdp_integrado"][$dIndex]["masterKeys"][]="PAAU_ID";

				$detailsTablesData["paa_master_pscdp_integrado"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["paa_master_pscdp_integrado"][$dIndex]["detailKeys"][]="CDP_INTEGRADO";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["paa_master_pscdp_integrado"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_paa_master_pscdp_integrado()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PAAU_ID, PAA_ID_FK, DESC_PAA, VIGENCIA, UEJ, RUBRO, PRODUCTO, ACTIVIDAD, ACT_ID, PROD_ID, SOL_FECHA, SOL_DEPENDENCIA, OPERACION_ID_FK, USER_REG, VALOR_SOLICITADO, ATTACH_A, SYS_STATUS, NUMERO_SCDP_SIIF, DOCUMENTO_SCDP_SIIF, FECHA_SCDP_SIIF, USUARIO_SCDP_SIIF, TIPO_SOL, DEV_FECHA, DEV_USER, DEV_MSG, DEV_MAIL, FECHA_REG, NUMERO_CDP_SIIF, DOCUMENTO_CDP_SIIF, FECHA_CDP_SIIF, USUARIO_CDP_SIIF, NOT_MAIL, OBS, sys_transac, UNIDAD_CONTRATACION, TIPO_CDP, MES_CDP, DESC_CDP, sys_user";
$proto0["m_strFrom"] = "FROM paa_master_pscdp";
$proto0["m_strWhere"] = "(SYS_STATUS = 9)";
$proto0["m_strOrderBy"] = "";
	
										;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "SYS_STATUS = 9";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SYS_STATUS",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_integrado"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 9";
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
	"m_strName" => "PAAU_ID",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_integrado"
));

$proto6["m_sql"] = "PAAU_ID";
$proto6["m_srcTableName"] = "paa_master_pscdp_integrado";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PAA_ID_FK",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_integrado"
));

$proto8["m_sql"] = "PAA_ID_FK";
$proto8["m_srcTableName"] = "paa_master_pscdp_integrado";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "DESC_PAA",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_integrado"
));

$proto10["m_sql"] = "DESC_PAA";
$proto10["m_srcTableName"] = "paa_master_pscdp_integrado";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "VIGENCIA",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_integrado"
));

$proto12["m_sql"] = "VIGENCIA";
$proto12["m_srcTableName"] = "paa_master_pscdp_integrado";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "UEJ",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_integrado"
));

$proto14["m_sql"] = "UEJ";
$proto14["m_srcTableName"] = "paa_master_pscdp_integrado";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "RUBRO",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_integrado"
));

$proto16["m_sql"] = "RUBRO";
$proto16["m_srcTableName"] = "paa_master_pscdp_integrado";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "PRODUCTO",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_integrado"
));

$proto18["m_sql"] = "PRODUCTO";
$proto18["m_srcTableName"] = "paa_master_pscdp_integrado";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ACTIVIDAD",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_integrado"
));

$proto20["m_sql"] = "ACTIVIDAD";
$proto20["m_srcTableName"] = "paa_master_pscdp_integrado";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_ID",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_integrado"
));

$proto22["m_sql"] = "ACT_ID";
$proto22["m_srcTableName"] = "paa_master_pscdp_integrado";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "PROD_ID",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_integrado"
));

$proto24["m_sql"] = "PROD_ID";
$proto24["m_srcTableName"] = "paa_master_pscdp_integrado";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "SOL_FECHA",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_integrado"
));

$proto26["m_sql"] = "SOL_FECHA";
$proto26["m_srcTableName"] = "paa_master_pscdp_integrado";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "SOL_DEPENDENCIA",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_integrado"
));

$proto28["m_sql"] = "SOL_DEPENDENCIA";
$proto28["m_srcTableName"] = "paa_master_pscdp_integrado";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "OPERACION_ID_FK",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_integrado"
));

$proto30["m_sql"] = "OPERACION_ID_FK";
$proto30["m_srcTableName"] = "paa_master_pscdp_integrado";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "USER_REG",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_integrado"
));

$proto32["m_sql"] = "USER_REG";
$proto32["m_srcTableName"] = "paa_master_pscdp_integrado";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "VALOR_SOLICITADO",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_integrado"
));

$proto34["m_sql"] = "VALOR_SOLICITADO";
$proto34["m_srcTableName"] = "paa_master_pscdp_integrado";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "ATTACH_A",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_integrado"
));

$proto36["m_sql"] = "ATTACH_A";
$proto36["m_srcTableName"] = "paa_master_pscdp_integrado";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "SYS_STATUS",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_integrado"
));

$proto38["m_sql"] = "SYS_STATUS";
$proto38["m_srcTableName"] = "paa_master_pscdp_integrado";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "NUMERO_SCDP_SIIF",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_integrado"
));

$proto40["m_sql"] = "NUMERO_SCDP_SIIF";
$proto40["m_srcTableName"] = "paa_master_pscdp_integrado";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "DOCUMENTO_SCDP_SIIF",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_integrado"
));

$proto42["m_sql"] = "DOCUMENTO_SCDP_SIIF";
$proto42["m_srcTableName"] = "paa_master_pscdp_integrado";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHA_SCDP_SIIF",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_integrado"
));

$proto44["m_sql"] = "FECHA_SCDP_SIIF";
$proto44["m_srcTableName"] = "paa_master_pscdp_integrado";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_SCDP_SIIF",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_integrado"
));

$proto46["m_sql"] = "USUARIO_SCDP_SIIF";
$proto46["m_srcTableName"] = "paa_master_pscdp_integrado";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO_SOL",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_integrado"
));

$proto48["m_sql"] = "TIPO_SOL";
$proto48["m_srcTableName"] = "paa_master_pscdp_integrado";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "DEV_FECHA",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_integrado"
));

$proto50["m_sql"] = "DEV_FECHA";
$proto50["m_srcTableName"] = "paa_master_pscdp_integrado";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "DEV_USER",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_integrado"
));

$proto52["m_sql"] = "DEV_USER";
$proto52["m_srcTableName"] = "paa_master_pscdp_integrado";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "DEV_MSG",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_integrado"
));

$proto54["m_sql"] = "DEV_MSG";
$proto54["m_srcTableName"] = "paa_master_pscdp_integrado";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "DEV_MAIL",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_integrado"
));

$proto56["m_sql"] = "DEV_MAIL";
$proto56["m_srcTableName"] = "paa_master_pscdp_integrado";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHA_REG",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_integrado"
));

$proto58["m_sql"] = "FECHA_REG";
$proto58["m_srcTableName"] = "paa_master_pscdp_integrado";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "NUMERO_CDP_SIIF",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_integrado"
));

$proto60["m_sql"] = "NUMERO_CDP_SIIF";
$proto60["m_srcTableName"] = "paa_master_pscdp_integrado";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "DOCUMENTO_CDP_SIIF",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_integrado"
));

$proto62["m_sql"] = "DOCUMENTO_CDP_SIIF";
$proto62["m_srcTableName"] = "paa_master_pscdp_integrado";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHA_CDP_SIIF",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_integrado"
));

$proto64["m_sql"] = "FECHA_CDP_SIIF";
$proto64["m_srcTableName"] = "paa_master_pscdp_integrado";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_CDP_SIIF",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_integrado"
));

$proto66["m_sql"] = "USUARIO_CDP_SIIF";
$proto66["m_srcTableName"] = "paa_master_pscdp_integrado";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "NOT_MAIL",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_integrado"
));

$proto68["m_sql"] = "NOT_MAIL";
$proto68["m_srcTableName"] = "paa_master_pscdp_integrado";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "OBS",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_integrado"
));

$proto70["m_sql"] = "OBS";
$proto70["m_srcTableName"] = "paa_master_pscdp_integrado";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_transac",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_integrado"
));

$proto72["m_sql"] = "sys_transac";
$proto72["m_srcTableName"] = "paa_master_pscdp_integrado";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "UNIDAD_CONTRATACION",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_integrado"
));

$proto74["m_sql"] = "UNIDAD_CONTRATACION";
$proto74["m_srcTableName"] = "paa_master_pscdp_integrado";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO_CDP",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_integrado"
));

$proto76["m_sql"] = "TIPO_CDP";
$proto76["m_srcTableName"] = "paa_master_pscdp_integrado";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "MES_CDP",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_integrado"
));

$proto78["m_sql"] = "MES_CDP";
$proto78["m_srcTableName"] = "paa_master_pscdp_integrado";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "DESC_CDP",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_integrado"
));

$proto80["m_sql"] = "DESC_CDP";
$proto80["m_srcTableName"] = "paa_master_pscdp_integrado";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_integrado"
));

$proto82["m_sql"] = "sys_user";
$proto82["m_srcTableName"] = "paa_master_pscdp_integrado";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto84=array();
$proto84["m_link"] = "SQLL_MAIN";
			$proto85=array();
$proto85["m_strName"] = "paa_master_pscdp";
$proto85["m_srcTableName"] = "paa_master_pscdp_integrado";
$proto85["m_columns"] = array();
$proto85["m_columns"][] = "PAAU_ID";
$proto85["m_columns"][] = "PAA_ID_FK";
$proto85["m_columns"][] = "TIPO_CDP";
$proto85["m_columns"][] = "MES_CDP";
$proto85["m_columns"][] = "DESC_CDP";
$proto85["m_columns"][] = "SYS_STATUS";
$proto85["m_columns"][] = "UNIDAD_CONTRATACION";
$proto85["m_columns"][] = "DESC_PAA";
$proto85["m_columns"][] = "VIGENCIA";
$proto85["m_columns"][] = "UEJ";
$proto85["m_columns"][] = "RUBRO";
$proto85["m_columns"][] = "PRODUCTO";
$proto85["m_columns"][] = "ACTIVIDAD";
$proto85["m_columns"][] = "ACT_ID";
$proto85["m_columns"][] = "PROD_ID";
$proto85["m_columns"][] = "SOL_FECHA";
$proto85["m_columns"][] = "SOL_DEPENDENCIA";
$proto85["m_columns"][] = "OPERACION_ID_FK";
$proto85["m_columns"][] = "USER_REG";
$proto85["m_columns"][] = "VALOR_SOLICITADO";
$proto85["m_columns"][] = "NUMERO_SCDP_SIIF";
$proto85["m_columns"][] = "DOCUMENTO_SCDP_SIIF";
$proto85["m_columns"][] = "FECHA_SCDP_SIIF";
$proto85["m_columns"][] = "USUARIO_SCDP_SIIF";
$proto85["m_columns"][] = "TIPO_SOL";
$proto85["m_columns"][] = "DEV_FECHA";
$proto85["m_columns"][] = "DEV_USER";
$proto85["m_columns"][] = "DEV_MSG";
$proto85["m_columns"][] = "DEV_MAIL";
$proto85["m_columns"][] = "FECHA_REG";
$proto85["m_columns"][] = "NUMERO_CDP_SIIF";
$proto85["m_columns"][] = "DOCUMENTO_CDP_SIIF";
$proto85["m_columns"][] = "FECHA_CDP_SIIF";
$proto85["m_columns"][] = "USUARIO_CDP_SIIF";
$proto85["m_columns"][] = "NOT_MAIL";
$proto85["m_columns"][] = "OBS";
$proto85["m_columns"][] = "sys_transac";
$proto85["m_columns"][] = "ATTACH_A";
$proto85["m_columns"][] = "sys_user";
$obj = new SQLTable($proto85);

$proto84["m_table"] = $obj;
$proto84["m_sql"] = "paa_master_pscdp";
$proto84["m_alias"] = "";
$proto84["m_srcTableName"] = "paa_master_pscdp_integrado";
$proto86=array();
$proto86["m_sql"] = "";
$proto86["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto86["m_column"]=$obj;
$proto86["m_contained"] = array();
$proto86["m_strCase"] = "";
$proto86["m_havingmode"] = false;
$proto86["m_inBrackets"] = false;
$proto86["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto86);

$proto84["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto84);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="paa_master_pscdp_integrado";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_paa_master_pscdp_integrado = createSqlQuery_paa_master_pscdp_integrado();


	
										;

																																							

$tdatapaa_master_pscdp_integrado[".sqlquery"] = $queryData_paa_master_pscdp_integrado;



include_once(getabspath("include/paa_master_pscdp_integrado_events.php"));
$tdatapaa_master_pscdp_integrado[".hasEvents"] = true;

?>