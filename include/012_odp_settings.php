<?php
$tdata012_odp = array();
$tdata012_odp[".searchableFields"] = array();
$tdata012_odp[".ShortName"] = "012_odp";
$tdata012_odp[".OwnerID"] = "";
$tdata012_odp[".OriginalTable"] = "012_odp";


$tdata012_odp[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdata012_odp[".originalPagesByType"] = $tdata012_odp[".pagesByType"];
$tdata012_odp[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdata012_odp[".originalPages"] = $tdata012_odp[".pages"];
$tdata012_odp[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdata012_odp[".originalDefaultPages"] = $tdata012_odp[".defaultPages"];

//	field labels
$fieldLabels012_odp = array();
$fieldToolTips012_odp = array();
$pageTitles012_odp = array();
$placeHolders012_odp = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabels012_odp["Spanish"] = array();
	$fieldToolTips012_odp["Spanish"] = array();
	$placeHolders012_odp["Spanish"] = array();
	$pageTitles012_odp["Spanish"] = array();
	$fieldLabels012_odp["Spanish"]["ODP_ID"] = "ODP ID";
	$fieldToolTips012_odp["Spanish"]["ODP_ID"] = "";
	$placeHolders012_odp["Spanish"]["ODP_ID"] = "";
	$fieldLabels012_odp["Spanish"]["FA"] = "Fecha de corte";
	$fieldToolTips012_odp["Spanish"]["FA"] = "";
	$placeHolders012_odp["Spanish"]["FA"] = "";
	$fieldLabels012_odp["Spanish"]["Numero_Documento"] = "Numero Documento";
	$fieldToolTips012_odp["Spanish"]["Numero_Documento"] = "";
	$placeHolders012_odp["Spanish"]["Numero_Documento"] = "";
	$fieldLabels012_odp["Spanish"]["Fecha_de_Registro"] = "Fecha de Registro";
	$fieldToolTips012_odp["Spanish"]["Fecha_de_Registro"] = "";
	$placeHolders012_odp["Spanish"]["Fecha_de_Registro"] = "";
	$fieldLabels012_odp["Spanish"]["Fecha_de_pago"] = "Fecha de pago";
	$fieldToolTips012_odp["Spanish"]["Fecha_de_pago"] = "";
	$placeHolders012_odp["Spanish"]["Fecha_de_pago"] = "";
	$fieldLabels012_odp["Spanish"]["Estado"] = "Estado";
	$fieldToolTips012_odp["Spanish"]["Estado"] = "";
	$placeHolders012_odp["Spanish"]["Estado"] = "";
	$fieldLabels012_odp["Spanish"]["Valor_Bruto"] = "Valor Bruto";
	$fieldToolTips012_odp["Spanish"]["Valor_Bruto"] = "";
	$placeHolders012_odp["Spanish"]["Valor_Bruto"] = "";
	$fieldLabels012_odp["Spanish"]["Valor_Deducciones"] = "Valor Deducciones";
	$fieldToolTips012_odp["Spanish"]["Valor_Deducciones"] = "";
	$placeHolders012_odp["Spanish"]["Valor_Deducciones"] = "";
	$fieldLabels012_odp["Spanish"]["Valor_Neto"] = "Valor Neto";
	$fieldToolTips012_odp["Spanish"]["Valor_Neto"] = "";
	$placeHolders012_odp["Spanish"]["Valor_Neto"] = "";
	$fieldLabels012_odp["Spanish"]["Tipo_Beneficiario"] = "Tipo Beneficiario";
	$fieldToolTips012_odp["Spanish"]["Tipo_Beneficiario"] = "";
	$placeHolders012_odp["Spanish"]["Tipo_Beneficiario"] = "";
	$fieldLabels012_odp["Spanish"]["Vigencia_Presupuestal"] = "Vigencia Presupuestal";
	$fieldToolTips012_odp["Spanish"]["Vigencia_Presupuestal"] = "";
	$placeHolders012_odp["Spanish"]["Vigencia_Presupuestal"] = "";
	$fieldLabels012_odp["Spanish"]["Tipo_Identificacion"] = "Tipo Identificacion";
	$fieldToolTips012_odp["Spanish"]["Tipo_Identificacion"] = "";
	$placeHolders012_odp["Spanish"]["Tipo_Identificacion"] = "";
	$fieldLabels012_odp["Spanish"]["Identificacion"] = "Identificacion";
	$fieldToolTips012_odp["Spanish"]["Identificacion"] = "";
	$placeHolders012_odp["Spanish"]["Identificacion"] = "";
	$fieldLabels012_odp["Spanish"]["Nombre_Razon_Social"] = "Nombre Razon Social";
	$fieldToolTips012_odp["Spanish"]["Nombre_Razon_Social"] = "";
	$placeHolders012_odp["Spanish"]["Nombre_Razon_Social"] = "";
	$fieldLabels012_odp["Spanish"]["Medio_de_Pago"] = "Medio de Pago";
	$fieldToolTips012_odp["Spanish"]["Medio_de_Pago"] = "";
	$placeHolders012_odp["Spanish"]["Medio_de_Pago"] = "";
	$fieldLabels012_odp["Spanish"]["Tipo_Cuenta"] = "Tipo Cuenta";
	$fieldToolTips012_odp["Spanish"]["Tipo_Cuenta"] = "";
	$placeHolders012_odp["Spanish"]["Tipo_Cuenta"] = "";
	$fieldLabels012_odp["Spanish"]["Numero_Cuenta"] = "Numero Cuenta";
	$fieldToolTips012_odp["Spanish"]["Numero_Cuenta"] = "";
	$placeHolders012_odp["Spanish"]["Numero_Cuenta"] = "";
	$fieldLabels012_odp["Spanish"]["Estado_Cuenta"] = "Estado Cuenta";
	$fieldToolTips012_odp["Spanish"]["Estado_Cuenta"] = "";
	$placeHolders012_odp["Spanish"]["Estado_Cuenta"] = "";
	$fieldLabels012_odp["Spanish"]["Entidad_Nit"] = "Entidad Nit";
	$fieldToolTips012_odp["Spanish"]["Entidad_Nit"] = "";
	$placeHolders012_odp["Spanish"]["Entidad_Nit"] = "";
	$fieldLabels012_odp["Spanish"]["Entidad_Descripcion"] = "Entidad Descripcion";
	$fieldToolTips012_odp["Spanish"]["Entidad_Descripcion"] = "";
	$placeHolders012_odp["Spanish"]["Entidad_Descripcion"] = "";
	$fieldLabels012_odp["Spanish"]["Dependencia"] = "Dependencia";
	$fieldToolTips012_odp["Spanish"]["Dependencia"] = "";
	$placeHolders012_odp["Spanish"]["Dependencia"] = "";
	$fieldLabels012_odp["Spanish"]["Dependencia_Descripcion"] = "Dependencia Descripcion";
	$fieldToolTips012_odp["Spanish"]["Dependencia_Descripcion"] = "";
	$placeHolders012_odp["Spanish"]["Dependencia_Descripcion"] = "";
	$fieldLabels012_odp["Spanish"]["Rubro"] = "Rubro";
	$fieldToolTips012_odp["Spanish"]["Rubro"] = "";
	$placeHolders012_odp["Spanish"]["Rubro"] = "";
	$fieldLabels012_odp["Spanish"]["Descripcion"] = "Descripcion";
	$fieldToolTips012_odp["Spanish"]["Descripcion"] = "";
	$placeHolders012_odp["Spanish"]["Descripcion"] = "";
	$fieldLabels012_odp["Spanish"]["Fuente"] = "Fuente";
	$fieldToolTips012_odp["Spanish"]["Fuente"] = "";
	$placeHolders012_odp["Spanish"]["Fuente"] = "";
	$fieldLabels012_odp["Spanish"]["Recurso"] = "Recurso";
	$fieldToolTips012_odp["Spanish"]["Recurso"] = "";
	$placeHolders012_odp["Spanish"]["Recurso"] = "";
	$fieldLabels012_odp["Spanish"]["Sit"] = "Sit";
	$fieldToolTips012_odp["Spanish"]["Sit"] = "";
	$placeHolders012_odp["Spanish"]["Sit"] = "";
	$fieldLabels012_odp["Spanish"]["Valor_Pesos"] = "Valor Pesos";
	$fieldToolTips012_odp["Spanish"]["Valor_Pesos"] = "";
	$placeHolders012_odp["Spanish"]["Valor_Pesos"] = "";
	$fieldLabels012_odp["Spanish"]["Valor_Moneda"] = "Valor Moneda";
	$fieldToolTips012_odp["Spanish"]["Valor_Moneda"] = "";
	$placeHolders012_odp["Spanish"]["Valor_Moneda"] = "";
	$fieldLabels012_odp["Spanish"]["Valor_Reintegrado_Pesos"] = "Valor Reintegrado Pesos";
	$fieldToolTips012_odp["Spanish"]["Valor_Reintegrado_Pesos"] = "";
	$placeHolders012_odp["Spanish"]["Valor_Reintegrado_Pesos"] = "";
	$fieldLabels012_odp["Spanish"]["Valor_Reintegrado_Moneda"] = "Valor Reintegrado Moneda";
	$fieldToolTips012_odp["Spanish"]["Valor_Reintegrado_Moneda"] = "";
	$placeHolders012_odp["Spanish"]["Valor_Reintegrado_Moneda"] = "";
	$fieldLabels012_odp["Spanish"]["Tesoreria_Pagadora"] = "Tesoreria Pagadora";
	$fieldToolTips012_odp["Spanish"]["Tesoreria_Pagadora"] = "";
	$placeHolders012_odp["Spanish"]["Tesoreria_Pagadora"] = "";
	$fieldLabels012_odp["Spanish"]["Identificacion_Pagaduria"] = "Identificacion Pagaduria";
	$fieldToolTips012_odp["Spanish"]["Identificacion_Pagaduria"] = "";
	$placeHolders012_odp["Spanish"]["Identificacion_Pagaduria"] = "";
	$fieldLabels012_odp["Spanish"]["Cuenta_Pagaduria"] = "Cuenta Pagaduria";
	$fieldToolTips012_odp["Spanish"]["Cuenta_Pagaduria"] = "";
	$placeHolders012_odp["Spanish"]["Cuenta_Pagaduria"] = "";
	$fieldLabels012_odp["Spanish"]["Endosada"] = "Endosada";
	$fieldToolTips012_odp["Spanish"]["Endosada"] = "";
	$placeHolders012_odp["Spanish"]["Endosada"] = "";
	$fieldLabels012_odp["Spanish"]["Tipo_Identificacion1"] = "Tipo Identificacion1";
	$fieldToolTips012_odp["Spanish"]["Tipo_Identificacion1"] = "";
	$placeHolders012_odp["Spanish"]["Tipo_Identificacion1"] = "";
	$fieldLabels012_odp["Spanish"]["Identificacion1"] = "Identificacion1";
	$fieldToolTips012_odp["Spanish"]["Identificacion1"] = "";
	$placeHolders012_odp["Spanish"]["Identificacion1"] = "";
	$fieldLabels012_odp["Spanish"]["Razon_social"] = "Razon Social";
	$fieldToolTips012_odp["Spanish"]["Razon_social"] = "";
	$placeHolders012_odp["Spanish"]["Razon_social"] = "";
	$fieldLabels012_odp["Spanish"]["Numero_Cuenta1"] = "Numero Cuenta1";
	$fieldToolTips012_odp["Spanish"]["Numero_Cuenta1"] = "";
	$placeHolders012_odp["Spanish"]["Numero_Cuenta1"] = "";
	$fieldLabels012_odp["Spanish"]["Concepto_Pago"] = "Concepto Pago";
	$fieldToolTips012_odp["Spanish"]["Concepto_Pago"] = "";
	$placeHolders012_odp["Spanish"]["Concepto_Pago"] = "";
	$fieldLabels012_odp["Spanish"]["Solicitud_CDP"] = "Solicitud CDP";
	$fieldToolTips012_odp["Spanish"]["Solicitud_CDP"] = "";
	$placeHolders012_odp["Spanish"]["Solicitud_CDP"] = "";
	$fieldLabels012_odp["Spanish"]["CDP"] = "CDP";
	$fieldToolTips012_odp["Spanish"]["CDP"] = "";
	$placeHolders012_odp["Spanish"]["CDP"] = "";
	$fieldLabels012_odp["Spanish"]["Compromisos"] = "Compromisos";
	$fieldToolTips012_odp["Spanish"]["Compromisos"] = "";
	$placeHolders012_odp["Spanish"]["Compromisos"] = "";
	$fieldLabels012_odp["Spanish"]["Cuentas_por_Pagar"] = "Cuentas por Pagar";
	$fieldToolTips012_odp["Spanish"]["Cuentas_por_Pagar"] = "";
	$placeHolders012_odp["Spanish"]["Cuentas_por_Pagar"] = "";
	$fieldLabels012_odp["Spanish"]["Fecha_Cuentas_por_Pagar"] = "Fecha Cuentas por Pagar";
	$fieldToolTips012_odp["Spanish"]["Fecha_Cuentas_por_Pagar"] = "";
	$placeHolders012_odp["Spanish"]["Fecha_Cuentas_por_Pagar"] = "";
	$fieldLabels012_odp["Spanish"]["Obligaciones"] = "Obligaciones";
	$fieldToolTips012_odp["Spanish"]["Obligaciones"] = "";
	$placeHolders012_odp["Spanish"]["Obligaciones"] = "";
	$fieldLabels012_odp["Spanish"]["Ordenes_de_Pago"] = "Ordenes de Pago";
	$fieldToolTips012_odp["Spanish"]["Ordenes_de_Pago"] = "";
	$placeHolders012_odp["Spanish"]["Ordenes_de_Pago"] = "";
	$fieldLabels012_odp["Spanish"]["Reintegros"] = "Reintegros";
	$fieldToolTips012_odp["Spanish"]["Reintegros"] = "";
	$placeHolders012_odp["Spanish"]["Reintegros"] = "";
	$fieldLabels012_odp["Spanish"]["Fecha_Doc_Soporte_Compromiso"] = "Fecha Doc Soporte Compromiso";
	$fieldToolTips012_odp["Spanish"]["Fecha_Doc_Soporte_Compromiso"] = "";
	$placeHolders012_odp["Spanish"]["Fecha_Doc_Soporte_Compromiso"] = "";
	$fieldLabels012_odp["Spanish"]["Tipo_Doc_Soporte_Compromiso"] = "Tipo Doc Soporte Compromiso";
	$fieldToolTips012_odp["Spanish"]["Tipo_Doc_Soporte_Compromiso"] = "";
	$placeHolders012_odp["Spanish"]["Tipo_Doc_Soporte_Compromiso"] = "";
	$fieldLabels012_odp["Spanish"]["Num_Doc_Soporte_Compromiso"] = "Num Doc Soporte Compromiso";
	$fieldToolTips012_odp["Spanish"]["Num_Doc_Soporte_Compromiso"] = "";
	$placeHolders012_odp["Spanish"]["Num_Doc_Soporte_Compromiso"] = "";
	$fieldLabels012_odp["Spanish"]["Objeto_del_Compromiso"] = "Objeto del Compromiso";
	$fieldToolTips012_odp["Spanish"]["Objeto_del_Compromiso"] = "";
	$placeHolders012_odp["Spanish"]["Objeto_del_Compromiso"] = "";
	if (count($fieldToolTips012_odp["Spanish"]))
		$tdata012_odp[".isUseToolTips"] = true;
}


	$tdata012_odp[".NCSearch"] = true;



$tdata012_odp[".shortTableName"] = "012_odp";
$tdata012_odp[".nSecOptions"] = 0;

$tdata012_odp[".mainTableOwnerID"] = "";
$tdata012_odp[".entityType"] = 0;
$tdata012_odp[".connId"] = "sep2_at_127_0_0_1";


$tdata012_odp[".strOriginalTableName"] = "012_odp";

	



$tdata012_odp[".showAddInPopup"] = false;

$tdata012_odp[".showEditInPopup"] = false;

$tdata012_odp[".showViewInPopup"] = false;

$tdata012_odp[".listAjax"] = false;
//	temporary
//$tdata012_odp[".listAjax"] = false;

	$tdata012_odp[".audit"] = true;

	$tdata012_odp[".locking"] = false;


$pages = $tdata012_odp[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdata012_odp[".edit"] = true;
	$tdata012_odp[".afterEditAction"] = 1;
	$tdata012_odp[".closePopupAfterEdit"] = 1;
	$tdata012_odp[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdata012_odp[".add"] = true;
$tdata012_odp[".afterAddAction"] = 1;
$tdata012_odp[".closePopupAfterAdd"] = 1;
$tdata012_odp[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdata012_odp[".list"] = true;
}



$tdata012_odp[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdata012_odp[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdata012_odp[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdata012_odp[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdata012_odp[".printFriendly"] = true;
}



$tdata012_odp[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdata012_odp[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdata012_odp[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdata012_odp[".isUseAjaxSuggest"] = true;



												

$tdata012_odp[".ajaxCodeSnippetAdded"] = false;

$tdata012_odp[".buttonsAdded"] = false;

$tdata012_odp[".addPageEvents"] = true;

// use timepicker for search panel
$tdata012_odp[".isUseTimeForSearch"] = false;


$tdata012_odp[".badgeColor"] = "CFAE83";


$tdata012_odp[".allSearchFields"] = array();
$tdata012_odp[".filterFields"] = array();
$tdata012_odp[".requiredSearchFields"] = array();

$tdata012_odp[".googleLikeFields"] = array();
$tdata012_odp[".googleLikeFields"][] = "ODP_ID";
$tdata012_odp[".googleLikeFields"][] = "FA";
$tdata012_odp[".googleLikeFields"][] = "Numero Documento";
$tdata012_odp[".googleLikeFields"][] = "Fecha de Registro";
$tdata012_odp[".googleLikeFields"][] = "Fecha de pago";
$tdata012_odp[".googleLikeFields"][] = "Estado";
$tdata012_odp[".googleLikeFields"][] = "Valor Bruto";
$tdata012_odp[".googleLikeFields"][] = "Valor Deducciones";
$tdata012_odp[".googleLikeFields"][] = "Valor Neto";
$tdata012_odp[".googleLikeFields"][] = "Tipo Beneficiario";
$tdata012_odp[".googleLikeFields"][] = "Vigencia Presupuestal";
$tdata012_odp[".googleLikeFields"][] = "Tipo Identificacion";
$tdata012_odp[".googleLikeFields"][] = "Identificacion";
$tdata012_odp[".googleLikeFields"][] = "Nombre Razon Social";
$tdata012_odp[".googleLikeFields"][] = "Medio de Pago";
$tdata012_odp[".googleLikeFields"][] = "Tipo Cuenta";
$tdata012_odp[".googleLikeFields"][] = "Numero Cuenta";
$tdata012_odp[".googleLikeFields"][] = "Estado Cuenta";
$tdata012_odp[".googleLikeFields"][] = "Entidad Nit";
$tdata012_odp[".googleLikeFields"][] = "Entidad Descripcion";
$tdata012_odp[".googleLikeFields"][] = "Dependencia";
$tdata012_odp[".googleLikeFields"][] = "Dependencia Descripcion";
$tdata012_odp[".googleLikeFields"][] = "Rubro";
$tdata012_odp[".googleLikeFields"][] = "Descripcion";
$tdata012_odp[".googleLikeFields"][] = "Fuente";
$tdata012_odp[".googleLikeFields"][] = "Recurso";
$tdata012_odp[".googleLikeFields"][] = "Sit";
$tdata012_odp[".googleLikeFields"][] = "Valor Pesos";
$tdata012_odp[".googleLikeFields"][] = "Valor Moneda";
$tdata012_odp[".googleLikeFields"][] = "Valor Reintegrado Pesos";
$tdata012_odp[".googleLikeFields"][] = "Valor Reintegrado Moneda";
$tdata012_odp[".googleLikeFields"][] = "Tesoreria Pagadora";
$tdata012_odp[".googleLikeFields"][] = "Identificacion Pagaduria";
$tdata012_odp[".googleLikeFields"][] = "Cuenta Pagaduria";
$tdata012_odp[".googleLikeFields"][] = "Endosada";
$tdata012_odp[".googleLikeFields"][] = "Tipo Identificacion1";
$tdata012_odp[".googleLikeFields"][] = "Identificacion1";
$tdata012_odp[".googleLikeFields"][] = "Razon social";
$tdata012_odp[".googleLikeFields"][] = "Numero Cuenta1";
$tdata012_odp[".googleLikeFields"][] = "Concepto Pago";
$tdata012_odp[".googleLikeFields"][] = "Solicitud CDP";
$tdata012_odp[".googleLikeFields"][] = "CDP";
$tdata012_odp[".googleLikeFields"][] = "Compromisos";
$tdata012_odp[".googleLikeFields"][] = "Cuentas por Pagar";
$tdata012_odp[".googleLikeFields"][] = "Fecha Cuentas por Pagar";
$tdata012_odp[".googleLikeFields"][] = "Obligaciones";
$tdata012_odp[".googleLikeFields"][] = "Ordenes de Pago";
$tdata012_odp[".googleLikeFields"][] = "Reintegros";
$tdata012_odp[".googleLikeFields"][] = "Fecha Doc Soporte Compromiso";
$tdata012_odp[".googleLikeFields"][] = "Tipo Doc Soporte Compromiso";
$tdata012_odp[".googleLikeFields"][] = "Num Doc Soporte Compromiso";
$tdata012_odp[".googleLikeFields"][] = "Objeto del Compromiso";



$tdata012_odp[".tableType"] = "list";

$tdata012_odp[".printerPageOrientation"] = 0;
$tdata012_odp[".nPrinterPageScale"] = 100;

$tdata012_odp[".nPrinterSplitRecords"] = 40;

$tdata012_odp[".geocodingEnabled"] = false;




$tdata012_odp[".isDisplayLoading"] = true;






$tdata012_odp[".pageSize"] = 20;

$tdata012_odp[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdata012_odp[".strOrderBy"] = $tstrOrderBy;

$tdata012_odp[".orderindexes"] = array();


$tdata012_odp[".sqlHead"] = "SELECT ODP_ID,  	FA,  	`Numero Documento`,  	`Fecha de Registro`,  	`Fecha de pago`,  	Estado,  	`Valor Bruto`,  	`Valor Deducciones`,  	`Valor Neto`,  	`Tipo Beneficiario`,  	`Vigencia Presupuestal`,  	`Tipo Identificacion`,  	Identificacion,  	`Nombre Razon Social`,  	`Medio de Pago`,  	`Tipo Cuenta`,  	`Numero Cuenta`,  	`Estado Cuenta`,  	`Entidad Nit`,  	`Entidad Descripcion`,  	Dependencia,  	`Dependencia Descripcion`,  	Rubro,  	Descripcion,  	Fuente,  	Recurso,  	Sit,  	`Valor Pesos`,  	`Valor Moneda`,  	`Valor Reintegrado Pesos`,  	`Valor Reintegrado Moneda`,  	`Tesoreria Pagadora`,  	`Identificacion Pagaduria`,  	`Cuenta Pagaduria`,  	Endosada,  	`Tipo Identificacion1`,  	Identificacion1,  	`Razon social`,  	`Numero Cuenta1`,  	`Concepto Pago`,  	`Solicitud CDP`,  	CDP,  	Compromisos,  	`Cuentas por Pagar`,  	`Fecha Cuentas por Pagar`,  	Obligaciones,  	`Ordenes de Pago`,  	Reintegros,  	`Fecha Doc Soporte Compromiso`,  	`Tipo Doc Soporte Compromiso`,  	`Num Doc Soporte Compromiso`,  	`Objeto del Compromiso`";
$tdata012_odp[".sqlFrom"] = "FROM `012_odp`";
$tdata012_odp[".sqlWhereExpr"] = "";
$tdata012_odp[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata012_odp[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata012_odp[".arrGroupsPerPage"] = $arrGPP;

$tdata012_odp[".highlightSearchResults"] = true;

$tableKeys012_odp = array();
$tableKeys012_odp[] = "ODP_ID";
$tdata012_odp[".Keys"] = $tableKeys012_odp;


$tdata012_odp[".hideMobileList"] = array();




//	ODP_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ODP_ID";
	$fdata["GoodName"] = "ODP_ID";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","ODP_ID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ODP_ID";

		$fdata["sourceSingle"] = "ODP_ID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ODP_ID";

	
	
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


	$tdata012_odp["ODP_ID"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "ODP_ID";
//	FA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FA";
	$fdata["GoodName"] = "FA";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","FA");
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
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
		$fdata["filterTotalFields"] = "ODP_ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 5;

	

	
	
//end of Filters settings


	$tdata012_odp["FA"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "FA";
//	Numero Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Numero Documento";
	$fdata["GoodName"] = "Numero_Documento";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Numero_Documento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Numero Documento";

		$fdata["sourceSingle"] = "Numero Documento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Numero Documento`";

	
	
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


	$tdata012_odp["Numero Documento"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Numero Documento";
//	Fecha de Registro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Fecha de Registro";
	$fdata["GoodName"] = "Fecha_de_Registro";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Fecha_de_Registro");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Fecha de Registro";

		$fdata["sourceSingle"] = "Fecha de Registro";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Fecha de Registro`";

	
	
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


	$tdata012_odp["Fecha de Registro"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Fecha de Registro";
//	Fecha de pago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Fecha de pago";
	$fdata["GoodName"] = "Fecha_de_pago";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Fecha_de_pago");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "Fecha de pago";

		$fdata["sourceSingle"] = "Fecha de pago";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Fecha de pago`";

	
	
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


	$tdata012_odp["Fecha de pago"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Fecha de pago";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Estado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Estado";

		$fdata["sourceSingle"] = "Estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Estado";

	
	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "ODP_ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata012_odp["Estado"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Estado";
//	Valor Bruto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Valor Bruto";
	$fdata["GoodName"] = "Valor_Bruto";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Valor_Bruto");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Valor Bruto";

		$fdata["sourceSingle"] = "Valor Bruto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Valor Bruto`";

	
	
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
		$fdata["filterTotalFields"] = "ODP_ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata012_odp["Valor Bruto"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Valor Bruto";
//	Valor Deducciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Valor Deducciones";
	$fdata["GoodName"] = "Valor_Deducciones";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Valor_Deducciones");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Valor Deducciones";

		$fdata["sourceSingle"] = "Valor Deducciones";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Valor Deducciones`";

	
	
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


	$tdata012_odp["Valor Deducciones"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Valor Deducciones";
//	Valor Neto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Valor Neto";
	$fdata["GoodName"] = "Valor_Neto";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Valor_Neto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Valor Neto";

		$fdata["sourceSingle"] = "Valor Neto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Valor Neto`";

	
	
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


	$tdata012_odp["Valor Neto"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Valor Neto";
//	Tipo Beneficiario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Tipo Beneficiario";
	$fdata["GoodName"] = "Tipo_Beneficiario";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Tipo_Beneficiario");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Tipo Beneficiario";

		$fdata["sourceSingle"] = "Tipo Beneficiario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Tipo Beneficiario`";

	
	
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


	$tdata012_odp["Tipo Beneficiario"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Tipo Beneficiario";
//	Vigencia Presupuestal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Vigencia Presupuestal";
	$fdata["GoodName"] = "Vigencia_Presupuestal";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Vigencia_Presupuestal");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Vigencia Presupuestal";

		$fdata["sourceSingle"] = "Vigencia Presupuestal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Vigencia Presupuestal`";

	
	
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


	$tdata012_odp["Vigencia Presupuestal"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Vigencia Presupuestal";
//	Tipo Identificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Tipo Identificacion";
	$fdata["GoodName"] = "Tipo_Identificacion";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Tipo_Identificacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Tipo Identificacion";

		$fdata["sourceSingle"] = "Tipo Identificacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Tipo Identificacion`";

	
	
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


	$tdata012_odp["Tipo Identificacion"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Tipo Identificacion";
//	Identificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Identificacion";
	$fdata["GoodName"] = "Identificacion";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Identificacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Identificacion";

		$fdata["sourceSingle"] = "Identificacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Identificacion";

	
	
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
	$edata["LookupTable"] = "contractor_master";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "contractor_doc_id";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "contractor_doc_id";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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
		$fdata["filterTotalFields"] = "ODP_ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata012_odp["Identificacion"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Identificacion";
//	Nombre Razon Social
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Nombre Razon Social";
	$fdata["GoodName"] = "Nombre_Razon_Social";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Nombre_Razon_Social");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Nombre Razon Social";

		$fdata["sourceSingle"] = "Nombre Razon Social";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Nombre Razon Social`";

	
	
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


	$tdata012_odp["Nombre Razon Social"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Nombre Razon Social";
//	Medio de Pago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Medio de Pago";
	$fdata["GoodName"] = "Medio_de_Pago";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Medio_de_Pago");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Medio de Pago";

		$fdata["sourceSingle"] = "Medio de Pago";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Medio de Pago`";

	
	
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


	$tdata012_odp["Medio de Pago"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Medio de Pago";
//	Tipo Cuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Tipo Cuenta";
	$fdata["GoodName"] = "Tipo_Cuenta";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Tipo_Cuenta");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Tipo Cuenta";

		$fdata["sourceSingle"] = "Tipo Cuenta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Tipo Cuenta`";

	
	
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


	$tdata012_odp["Tipo Cuenta"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Tipo Cuenta";
//	Numero Cuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Numero Cuenta";
	$fdata["GoodName"] = "Numero_Cuenta";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Numero_Cuenta");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Numero Cuenta";

		$fdata["sourceSingle"] = "Numero Cuenta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Numero Cuenta`";

	
	
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


	$tdata012_odp["Numero Cuenta"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Numero Cuenta";
//	Estado Cuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Estado Cuenta";
	$fdata["GoodName"] = "Estado_Cuenta";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Estado_Cuenta");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Estado Cuenta";

		$fdata["sourceSingle"] = "Estado Cuenta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Estado Cuenta`";

	
	
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


	$tdata012_odp["Estado Cuenta"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Estado Cuenta";
//	Entidad Nit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Entidad Nit";
	$fdata["GoodName"] = "Entidad_Nit";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Entidad_Nit");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Entidad Nit";

		$fdata["sourceSingle"] = "Entidad Nit";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Entidad Nit`";

	
	
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


	$tdata012_odp["Entidad Nit"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Entidad Nit";
//	Entidad Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Entidad Descripcion";
	$fdata["GoodName"] = "Entidad_Descripcion";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Entidad_Descripcion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Entidad Descripcion";

		$fdata["sourceSingle"] = "Entidad Descripcion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Entidad Descripcion`";

	
	
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


	$tdata012_odp["Entidad Descripcion"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Entidad Descripcion";
//	Dependencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Dependencia";
	$fdata["GoodName"] = "Dependencia";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Dependencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Dependencia";

		$fdata["sourceSingle"] = "Dependencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Dependencia";

	
	
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


	$tdata012_odp["Dependencia"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Dependencia";
//	Dependencia Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Dependencia Descripcion";
	$fdata["GoodName"] = "Dependencia_Descripcion";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Dependencia_Descripcion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Dependencia Descripcion";

		$fdata["sourceSingle"] = "Dependencia Descripcion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Dependencia Descripcion`";

	
	
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


	$tdata012_odp["Dependencia Descripcion"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Dependencia Descripcion";
//	Rubro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Rubro";
	$fdata["GoodName"] = "Rubro";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Rubro");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Rubro";

		$fdata["sourceSingle"] = "Rubro";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Rubro";

	
	
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


	$tdata012_odp["Rubro"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Rubro";
//	Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Descripcion";
	$fdata["GoodName"] = "Descripcion";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Descripcion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Descripcion";

		$fdata["sourceSingle"] = "Descripcion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Descripcion";

	
	
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


	$tdata012_odp["Descripcion"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Descripcion";
//	Fuente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "Fuente";
	$fdata["GoodName"] = "Fuente";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Fuente");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Fuente";

		$fdata["sourceSingle"] = "Fuente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fuente";

	
	
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


	$tdata012_odp["Fuente"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Fuente";
//	Recurso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "Recurso";
	$fdata["GoodName"] = "Recurso";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Recurso");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Recurso";

		$fdata["sourceSingle"] = "Recurso";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Recurso";

	
	
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


	$tdata012_odp["Recurso"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Recurso";
//	Sit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "Sit";
	$fdata["GoodName"] = "Sit";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Sit");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Sit";

		$fdata["sourceSingle"] = "Sit";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sit";

	
	
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


	$tdata012_odp["Sit"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Sit";
//	Valor Pesos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "Valor Pesos";
	$fdata["GoodName"] = "Valor_Pesos";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Valor_Pesos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Valor Pesos";

		$fdata["sourceSingle"] = "Valor Pesos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Valor Pesos`";

	
	
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


	$tdata012_odp["Valor Pesos"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Valor Pesos";
//	Valor Moneda
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "Valor Moneda";
	$fdata["GoodName"] = "Valor_Moneda";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Valor_Moneda");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Valor Moneda";

		$fdata["sourceSingle"] = "Valor Moneda";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Valor Moneda`";

	
	
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


	$tdata012_odp["Valor Moneda"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Valor Moneda";
//	Valor Reintegrado Pesos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "Valor Reintegrado Pesos";
	$fdata["GoodName"] = "Valor_Reintegrado_Pesos";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Valor_Reintegrado_Pesos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Valor Reintegrado Pesos";

		$fdata["sourceSingle"] = "Valor Reintegrado Pesos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Valor Reintegrado Pesos`";

	
	
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


	$tdata012_odp["Valor Reintegrado Pesos"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Valor Reintegrado Pesos";
//	Valor Reintegrado Moneda
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "Valor Reintegrado Moneda";
	$fdata["GoodName"] = "Valor_Reintegrado_Moneda";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Valor_Reintegrado_Moneda");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Valor Reintegrado Moneda";

		$fdata["sourceSingle"] = "Valor Reintegrado Moneda";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Valor Reintegrado Moneda`";

	
	
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


	$tdata012_odp["Valor Reintegrado Moneda"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Valor Reintegrado Moneda";
//	Tesoreria Pagadora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "Tesoreria Pagadora";
	$fdata["GoodName"] = "Tesoreria_Pagadora";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Tesoreria_Pagadora");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Tesoreria Pagadora";

		$fdata["sourceSingle"] = "Tesoreria Pagadora";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Tesoreria Pagadora`";

	
	
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


	$tdata012_odp["Tesoreria Pagadora"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Tesoreria Pagadora";
//	Identificacion Pagaduria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "Identificacion Pagaduria";
	$fdata["GoodName"] = "Identificacion_Pagaduria";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Identificacion_Pagaduria");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Identificacion Pagaduria";

		$fdata["sourceSingle"] = "Identificacion Pagaduria";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Identificacion Pagaduria`";

	
	
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


	$tdata012_odp["Identificacion Pagaduria"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Identificacion Pagaduria";
//	Cuenta Pagaduria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "Cuenta Pagaduria";
	$fdata["GoodName"] = "Cuenta_Pagaduria";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Cuenta_Pagaduria");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Cuenta Pagaduria";

		$fdata["sourceSingle"] = "Cuenta Pagaduria";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Cuenta Pagaduria`";

	
	
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


	$tdata012_odp["Cuenta Pagaduria"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Cuenta Pagaduria";
//	Endosada
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "Endosada";
	$fdata["GoodName"] = "Endosada";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Endosada");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Endosada";

		$fdata["sourceSingle"] = "Endosada";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Endosada";

	
	
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


	$tdata012_odp["Endosada"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Endosada";
//	Tipo Identificacion1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Tipo Identificacion1";
	$fdata["GoodName"] = "Tipo_Identificacion1";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Tipo_Identificacion1");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Tipo Identificacion1";

		$fdata["sourceSingle"] = "Tipo Identificacion1";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Tipo Identificacion1`";

	
	
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


	$tdata012_odp["Tipo Identificacion1"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Tipo Identificacion1";
//	Identificacion1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "Identificacion1";
	$fdata["GoodName"] = "Identificacion1";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Identificacion1");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Identificacion1";

		$fdata["sourceSingle"] = "Identificacion1";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Identificacion1";

	
	
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


	$tdata012_odp["Identificacion1"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Identificacion1";
//	Razon social
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "Razon social";
	$fdata["GoodName"] = "Razon_social";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Razon_social");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Razon social";

		$fdata["sourceSingle"] = "Razon social";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Razon social`";

	
	
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


	$tdata012_odp["Razon social"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Razon social";
//	Numero Cuenta1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "Numero Cuenta1";
	$fdata["GoodName"] = "Numero_Cuenta1";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Numero_Cuenta1");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Numero Cuenta1";

		$fdata["sourceSingle"] = "Numero Cuenta1";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Numero Cuenta1`";

	
	
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


	$tdata012_odp["Numero Cuenta1"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Numero Cuenta1";
//	Concepto Pago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "Concepto Pago";
	$fdata["GoodName"] = "Concepto_Pago";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Concepto_Pago");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Concepto Pago";

		$fdata["sourceSingle"] = "Concepto Pago";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Concepto Pago`";

	
	
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


	$tdata012_odp["Concepto Pago"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Concepto Pago";
//	Solicitud CDP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "Solicitud CDP";
	$fdata["GoodName"] = "Solicitud_CDP";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Solicitud_CDP");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Solicitud CDP";

		$fdata["sourceSingle"] = "Solicitud CDP";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Solicitud CDP`";

	
	
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


	$tdata012_odp["Solicitud CDP"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Solicitud CDP";
//	CDP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "CDP";
	$fdata["GoodName"] = "CDP";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","CDP");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CDP";

		$fdata["sourceSingle"] = "CDP";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CDP";

	
	
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


	$tdata012_odp["CDP"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "CDP";
//	Compromisos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "Compromisos";
	$fdata["GoodName"] = "Compromisos";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Compromisos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Compromisos";

		$fdata["sourceSingle"] = "Compromisos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Compromisos";

	
	
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


	$tdata012_odp["Compromisos"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Compromisos";
//	Cuentas por Pagar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "Cuentas por Pagar";
	$fdata["GoodName"] = "Cuentas_por_Pagar";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Cuentas_por_Pagar");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Cuentas por Pagar";

		$fdata["sourceSingle"] = "Cuentas por Pagar";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Cuentas por Pagar`";

	
	
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


	$tdata012_odp["Cuentas por Pagar"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Cuentas por Pagar";
//	Fecha Cuentas por Pagar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "Fecha Cuentas por Pagar";
	$fdata["GoodName"] = "Fecha_Cuentas_por_Pagar";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Fecha_Cuentas_por_Pagar");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Fecha Cuentas por Pagar";

		$fdata["sourceSingle"] = "Fecha Cuentas por Pagar";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Fecha Cuentas por Pagar`";

	
	
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


	$tdata012_odp["Fecha Cuentas por Pagar"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Fecha Cuentas por Pagar";
//	Obligaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "Obligaciones";
	$fdata["GoodName"] = "Obligaciones";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Obligaciones");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Obligaciones";

		$fdata["sourceSingle"] = "Obligaciones";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Obligaciones";

	
	
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


	$tdata012_odp["Obligaciones"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Obligaciones";
//	Ordenes de Pago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "Ordenes de Pago";
	$fdata["GoodName"] = "Ordenes_de_Pago";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Ordenes_de_Pago");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Ordenes de Pago";

		$fdata["sourceSingle"] = "Ordenes de Pago";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Ordenes de Pago`";

	
	
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


	$tdata012_odp["Ordenes de Pago"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Ordenes de Pago";
//	Reintegros
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "Reintegros";
	$fdata["GoodName"] = "Reintegros";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Reintegros");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Reintegros";

		$fdata["sourceSingle"] = "Reintegros";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Reintegros";

	
	
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


	$tdata012_odp["Reintegros"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Reintegros";
//	Fecha Doc Soporte Compromiso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "Fecha Doc Soporte Compromiso";
	$fdata["GoodName"] = "Fecha_Doc_Soporte_Compromiso";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Fecha_Doc_Soporte_Compromiso");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Fecha Doc Soporte Compromiso";

		$fdata["sourceSingle"] = "Fecha Doc Soporte Compromiso";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Fecha Doc Soporte Compromiso`";

	
	
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


	$tdata012_odp["Fecha Doc Soporte Compromiso"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Fecha Doc Soporte Compromiso";
//	Tipo Doc Soporte Compromiso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "Tipo Doc Soporte Compromiso";
	$fdata["GoodName"] = "Tipo_Doc_Soporte_Compromiso";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Tipo_Doc_Soporte_Compromiso");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Tipo Doc Soporte Compromiso";

		$fdata["sourceSingle"] = "Tipo Doc Soporte Compromiso";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Tipo Doc Soporte Compromiso`";

	
	
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


	$tdata012_odp["Tipo Doc Soporte Compromiso"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Tipo Doc Soporte Compromiso";
//	Num Doc Soporte Compromiso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "Num Doc Soporte Compromiso";
	$fdata["GoodName"] = "Num_Doc_Soporte_Compromiso";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Num_Doc_Soporte_Compromiso");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Num Doc Soporte Compromiso";

		$fdata["sourceSingle"] = "Num Doc Soporte Compromiso";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Num Doc Soporte Compromiso`";

	
	
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


	$tdata012_odp["Num Doc Soporte Compromiso"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Num Doc Soporte Compromiso";
//	Objeto del Compromiso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "Objeto del Compromiso";
	$fdata["GoodName"] = "Objeto_del_Compromiso";
	$fdata["ownerTable"] = "012_odp";
	$fdata["Label"] = GetFieldLabel("012_odp","Objeto_del_Compromiso");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Objeto del Compromiso";

		$fdata["sourceSingle"] = "Objeto del Compromiso";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Objeto del Compromiso`";

	
	
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


	$tdata012_odp["Objeto del Compromiso"] = $fdata;
		$tdata012_odp[".searchableFields"][] = "Objeto del Compromiso";


$tables_data["012_odp"]=&$tdata012_odp;
$field_labels["012_odp"] = &$fieldLabels012_odp;
$fieldToolTips["012_odp"] = &$fieldToolTips012_odp;
$placeHolders["012_odp"] = &$placeHolders012_odp;
$page_titles["012_odp"] = &$pageTitles012_odp;


changeTextControlsToDate( "012_odp" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["012_odp"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["012_odp"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_012_odp()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ODP_ID,  	FA,  	`Numero Documento`,  	`Fecha de Registro`,  	`Fecha de pago`,  	Estado,  	`Valor Bruto`,  	`Valor Deducciones`,  	`Valor Neto`,  	`Tipo Beneficiario`,  	`Vigencia Presupuestal`,  	`Tipo Identificacion`,  	Identificacion,  	`Nombre Razon Social`,  	`Medio de Pago`,  	`Tipo Cuenta`,  	`Numero Cuenta`,  	`Estado Cuenta`,  	`Entidad Nit`,  	`Entidad Descripcion`,  	Dependencia,  	`Dependencia Descripcion`,  	Rubro,  	Descripcion,  	Fuente,  	Recurso,  	Sit,  	`Valor Pesos`,  	`Valor Moneda`,  	`Valor Reintegrado Pesos`,  	`Valor Reintegrado Moneda`,  	`Tesoreria Pagadora`,  	`Identificacion Pagaduria`,  	`Cuenta Pagaduria`,  	Endosada,  	`Tipo Identificacion1`,  	Identificacion1,  	`Razon social`,  	`Numero Cuenta1`,  	`Concepto Pago`,  	`Solicitud CDP`,  	CDP,  	Compromisos,  	`Cuentas por Pagar`,  	`Fecha Cuentas por Pagar`,  	Obligaciones,  	`Ordenes de Pago`,  	Reintegros,  	`Fecha Doc Soporte Compromiso`,  	`Tipo Doc Soporte Compromiso`,  	`Num Doc Soporte Compromiso`,  	`Objeto del Compromiso`";
$proto0["m_strFrom"] = "FROM `012_odp`";
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
	"m_strName" => "ODP_ID",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto6["m_sql"] = "ODP_ID";
$proto6["m_srcTableName"] = "012_odp";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FA",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto8["m_sql"] = "FA";
$proto8["m_srcTableName"] = "012_odp";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero Documento",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto10["m_sql"] = "`Numero Documento`";
$proto10["m_srcTableName"] = "012_odp";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha de Registro",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto12["m_sql"] = "`Fecha de Registro`";
$proto12["m_srcTableName"] = "012_odp";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha de pago",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto14["m_sql"] = "`Fecha de pago`";
$proto14["m_srcTableName"] = "012_odp";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto16["m_sql"] = "Estado";
$proto16["m_srcTableName"] = "012_odp";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor Bruto",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto18["m_sql"] = "`Valor Bruto`";
$proto18["m_srcTableName"] = "012_odp";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor Deducciones",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto20["m_sql"] = "`Valor Deducciones`";
$proto20["m_srcTableName"] = "012_odp";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor Neto",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto22["m_sql"] = "`Valor Neto`";
$proto22["m_srcTableName"] = "012_odp";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo Beneficiario",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto24["m_sql"] = "`Tipo Beneficiario`";
$proto24["m_srcTableName"] = "012_odp";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Vigencia Presupuestal",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto26["m_sql"] = "`Vigencia Presupuestal`";
$proto26["m_srcTableName"] = "012_odp";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo Identificacion",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto28["m_sql"] = "`Tipo Identificacion`";
$proto28["m_srcTableName"] = "012_odp";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Identificacion",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto30["m_sql"] = "Identificacion";
$proto30["m_srcTableName"] = "012_odp";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre Razon Social",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto32["m_sql"] = "`Nombre Razon Social`";
$proto32["m_srcTableName"] = "012_odp";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Medio de Pago",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto34["m_sql"] = "`Medio de Pago`";
$proto34["m_srcTableName"] = "012_odp";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo Cuenta",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto36["m_sql"] = "`Tipo Cuenta`";
$proto36["m_srcTableName"] = "012_odp";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero Cuenta",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto38["m_sql"] = "`Numero Cuenta`";
$proto38["m_srcTableName"] = "012_odp";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado Cuenta",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto40["m_sql"] = "`Estado Cuenta`";
$proto40["m_srcTableName"] = "012_odp";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Entidad Nit",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto42["m_sql"] = "`Entidad Nit`";
$proto42["m_srcTableName"] = "012_odp";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Entidad Descripcion",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto44["m_sql"] = "`Entidad Descripcion`";
$proto44["m_srcTableName"] = "012_odp";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Dependencia",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto46["m_sql"] = "Dependencia";
$proto46["m_srcTableName"] = "012_odp";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "Dependencia Descripcion",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto48["m_sql"] = "`Dependencia Descripcion`";
$proto48["m_srcTableName"] = "012_odp";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "Rubro",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto50["m_sql"] = "Rubro";
$proto50["m_srcTableName"] = "012_odp";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Descripcion",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto52["m_sql"] = "Descripcion";
$proto52["m_srcTableName"] = "012_odp";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "Fuente",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto54["m_sql"] = "Fuente";
$proto54["m_srcTableName"] = "012_odp";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "Recurso",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto56["m_sql"] = "Recurso";
$proto56["m_srcTableName"] = "012_odp";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "Sit",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto58["m_sql"] = "Sit";
$proto58["m_srcTableName"] = "012_odp";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor Pesos",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto60["m_sql"] = "`Valor Pesos`";
$proto60["m_srcTableName"] = "012_odp";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor Moneda",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto62["m_sql"] = "`Valor Moneda`";
$proto62["m_srcTableName"] = "012_odp";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor Reintegrado Pesos",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto64["m_sql"] = "`Valor Reintegrado Pesos`";
$proto64["m_srcTableName"] = "012_odp";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor Reintegrado Moneda",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto66["m_sql"] = "`Valor Reintegrado Moneda`";
$proto66["m_srcTableName"] = "012_odp";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "Tesoreria Pagadora",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto68["m_sql"] = "`Tesoreria Pagadora`";
$proto68["m_srcTableName"] = "012_odp";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "Identificacion Pagaduria",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto70["m_sql"] = "`Identificacion Pagaduria`";
$proto70["m_srcTableName"] = "012_odp";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "Cuenta Pagaduria",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto72["m_sql"] = "`Cuenta Pagaduria`";
$proto72["m_srcTableName"] = "012_odp";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "Endosada",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto74["m_sql"] = "Endosada";
$proto74["m_srcTableName"] = "012_odp";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo Identificacion1",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto76["m_sql"] = "`Tipo Identificacion1`";
$proto76["m_srcTableName"] = "012_odp";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "Identificacion1",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto78["m_sql"] = "Identificacion1";
$proto78["m_srcTableName"] = "012_odp";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "Razon social",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto80["m_sql"] = "`Razon social`";
$proto80["m_srcTableName"] = "012_odp";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero Cuenta1",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto82["m_sql"] = "`Numero Cuenta1`";
$proto82["m_srcTableName"] = "012_odp";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "Concepto Pago",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto84["m_sql"] = "`Concepto Pago`";
$proto84["m_srcTableName"] = "012_odp";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "Solicitud CDP",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto86["m_sql"] = "`Solicitud CDP`";
$proto86["m_srcTableName"] = "012_odp";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "CDP",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto88["m_sql"] = "CDP";
$proto88["m_srcTableName"] = "012_odp";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "Compromisos",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto90["m_sql"] = "Compromisos";
$proto90["m_srcTableName"] = "012_odp";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "Cuentas por Pagar",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto92["m_sql"] = "`Cuentas por Pagar`";
$proto92["m_srcTableName"] = "012_odp";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha Cuentas por Pagar",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto94["m_sql"] = "`Fecha Cuentas por Pagar`";
$proto94["m_srcTableName"] = "012_odp";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "Obligaciones",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto96["m_sql"] = "Obligaciones";
$proto96["m_srcTableName"] = "012_odp";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "Ordenes de Pago",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto98["m_sql"] = "`Ordenes de Pago`";
$proto98["m_srcTableName"] = "012_odp";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "Reintegros",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto100["m_sql"] = "Reintegros";
$proto100["m_srcTableName"] = "012_odp";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha Doc Soporte Compromiso",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto102["m_sql"] = "`Fecha Doc Soporte Compromiso`";
$proto102["m_srcTableName"] = "012_odp";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo Doc Soporte Compromiso",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto104["m_sql"] = "`Tipo Doc Soporte Compromiso`";
$proto104["m_srcTableName"] = "012_odp";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "Num Doc Soporte Compromiso",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto106["m_sql"] = "`Num Doc Soporte Compromiso`";
$proto106["m_srcTableName"] = "012_odp";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "Objeto del Compromiso",
	"m_strTable" => "012_odp",
	"m_srcTableName" => "012_odp"
));

$proto108["m_sql"] = "`Objeto del Compromiso`";
$proto108["m_srcTableName"] = "012_odp";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto110=array();
$proto110["m_link"] = "SQLL_MAIN";
			$proto111=array();
$proto111["m_strName"] = "012_odp";
$proto111["m_srcTableName"] = "012_odp";
$proto111["m_columns"] = array();
$proto111["m_columns"][] = "ODP_ID";
$proto111["m_columns"][] = "FA";
$proto111["m_columns"][] = "Numero Documento";
$proto111["m_columns"][] = "Fecha de Registro";
$proto111["m_columns"][] = "Fecha de pago";
$proto111["m_columns"][] = "Estado";
$proto111["m_columns"][] = "Valor Bruto";
$proto111["m_columns"][] = "Valor Deducciones";
$proto111["m_columns"][] = "Valor Neto";
$proto111["m_columns"][] = "Tipo Beneficiario";
$proto111["m_columns"][] = "Vigencia Presupuestal";
$proto111["m_columns"][] = "Tipo Identificacion";
$proto111["m_columns"][] = "Identificacion";
$proto111["m_columns"][] = "Nombre Razon Social";
$proto111["m_columns"][] = "Medio de Pago";
$proto111["m_columns"][] = "Tipo Cuenta";
$proto111["m_columns"][] = "Numero Cuenta";
$proto111["m_columns"][] = "Estado Cuenta";
$proto111["m_columns"][] = "Entidad Nit";
$proto111["m_columns"][] = "Entidad Descripcion";
$proto111["m_columns"][] = "Dependencia";
$proto111["m_columns"][] = "Dependencia Descripcion";
$proto111["m_columns"][] = "Rubro";
$proto111["m_columns"][] = "Descripcion";
$proto111["m_columns"][] = "Fuente";
$proto111["m_columns"][] = "Recurso";
$proto111["m_columns"][] = "Sit";
$proto111["m_columns"][] = "Valor Pesos";
$proto111["m_columns"][] = "Valor Moneda";
$proto111["m_columns"][] = "Valor Reintegrado Pesos";
$proto111["m_columns"][] = "Valor Reintegrado Moneda";
$proto111["m_columns"][] = "Tesoreria Pagadora";
$proto111["m_columns"][] = "Identificacion Pagaduria";
$proto111["m_columns"][] = "Cuenta Pagaduria";
$proto111["m_columns"][] = "Endosada";
$proto111["m_columns"][] = "Tipo Identificacion1";
$proto111["m_columns"][] = "Identificacion1";
$proto111["m_columns"][] = "Razon social";
$proto111["m_columns"][] = "Numero Cuenta1";
$proto111["m_columns"][] = "Concepto Pago";
$proto111["m_columns"][] = "Solicitud CDP";
$proto111["m_columns"][] = "CDP";
$proto111["m_columns"][] = "Compromisos";
$proto111["m_columns"][] = "Cuentas por Pagar";
$proto111["m_columns"][] = "Fecha Cuentas por Pagar";
$proto111["m_columns"][] = "Obligaciones";
$proto111["m_columns"][] = "Ordenes de Pago";
$proto111["m_columns"][] = "Reintegros";
$proto111["m_columns"][] = "Fecha Doc Soporte Compromiso";
$proto111["m_columns"][] = "Tipo Doc Soporte Compromiso";
$proto111["m_columns"][] = "Num Doc Soporte Compromiso";
$proto111["m_columns"][] = "Objeto del Compromiso";
$obj = new SQLTable($proto111);

$proto110["m_table"] = $obj;
$proto110["m_sql"] = "`012_odp`";
$proto110["m_alias"] = "";
$proto110["m_srcTableName"] = "012_odp";
$proto112=array();
$proto112["m_sql"] = "";
$proto112["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto112["m_column"]=$obj;
$proto112["m_contained"] = array();
$proto112["m_strCase"] = "";
$proto112["m_havingmode"] = false;
$proto112["m_inBrackets"] = false;
$proto112["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto112);

$proto110["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto110);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="012_odp";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_012_odp = createSqlQuery_012_odp();


	
										;

																																																				

$tdata012_odp[".sqlquery"] = $queryData_012_odp;



include_once(getabspath("include/012_odp_events.php"));
$tdata012_odp[".hasEvents"] = true;

?>