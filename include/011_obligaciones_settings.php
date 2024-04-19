<?php
$tdata011_obligaciones = array();
$tdata011_obligaciones[".searchableFields"] = array();
$tdata011_obligaciones[".ShortName"] = "011_obligaciones";
$tdata011_obligaciones[".OwnerID"] = "";
$tdata011_obligaciones[".OriginalTable"] = "011_obligaciones";


$tdata011_obligaciones[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdata011_obligaciones[".originalPagesByType"] = $tdata011_obligaciones[".pagesByType"];
$tdata011_obligaciones[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdata011_obligaciones[".originalPages"] = $tdata011_obligaciones[".pages"];
$tdata011_obligaciones[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdata011_obligaciones[".originalDefaultPages"] = $tdata011_obligaciones[".defaultPages"];

//	field labels
$fieldLabels011_obligaciones = array();
$fieldToolTips011_obligaciones = array();
$pageTitles011_obligaciones = array();
$placeHolders011_obligaciones = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabels011_obligaciones["Spanish"] = array();
	$fieldToolTips011_obligaciones["Spanish"] = array();
	$placeHolders011_obligaciones["Spanish"] = array();
	$pageTitles011_obligaciones["Spanish"] = array();
	$fieldLabels011_obligaciones["Spanish"]["OID"] = "OID";
	$fieldToolTips011_obligaciones["Spanish"]["OID"] = "";
	$placeHolders011_obligaciones["Spanish"]["OID"] = "";
	$fieldLabels011_obligaciones["Spanish"]["FA"] = "Fecha de subida";
	$fieldToolTips011_obligaciones["Spanish"]["FA"] = "";
	$placeHolders011_obligaciones["Spanish"]["FA"] = "";
	$fieldLabels011_obligaciones["Spanish"]["Numero_Documento"] = "Numero Documento";
	$fieldToolTips011_obligaciones["Spanish"]["Numero_Documento"] = "";
	$placeHolders011_obligaciones["Spanish"]["Numero_Documento"] = "";
	$fieldLabels011_obligaciones["Spanish"]["Fecha_de_Registro"] = "Fecha de Registro";
	$fieldToolTips011_obligaciones["Spanish"]["Fecha_de_Registro"] = "";
	$placeHolders011_obligaciones["Spanish"]["Fecha_de_Registro"] = "";
	$fieldLabels011_obligaciones["Spanish"]["Fecha_de_Creacion"] = "Fecha de Creacion";
	$fieldToolTips011_obligaciones["Spanish"]["Fecha_de_Creacion"] = "";
	$placeHolders011_obligaciones["Spanish"]["Fecha_de_Creacion"] = "";
	$fieldLabels011_obligaciones["Spanish"]["Estado"] = "Estado";
	$fieldToolTips011_obligaciones["Spanish"]["Estado"] = "";
	$placeHolders011_obligaciones["Spanish"]["Estado"] = "";
	$fieldLabels011_obligaciones["Spanish"]["Valor_Actual"] = "Valor Actual";
	$fieldToolTips011_obligaciones["Spanish"]["Valor_Actual"] = "";
	$placeHolders011_obligaciones["Spanish"]["Valor_Actual"] = "";
	$fieldLabels011_obligaciones["Spanish"]["Valor_Deducciones"] = "Valor Deducciones";
	$fieldToolTips011_obligaciones["Spanish"]["Valor_Deducciones"] = "";
	$placeHolders011_obligaciones["Spanish"]["Valor_Deducciones"] = "";
	$fieldLabels011_obligaciones["Spanish"]["Valor_Oblig_no_Orden"] = "Valor Oblig no Orden";
	$fieldToolTips011_obligaciones["Spanish"]["Valor_Oblig_no_Orden"] = "";
	$placeHolders011_obligaciones["Spanish"]["Valor_Oblig_no_Orden"] = "";
	$fieldLabels011_obligaciones["Spanish"]["Tipo_Identificacion"] = "Tipo Identificacion";
	$fieldToolTips011_obligaciones["Spanish"]["Tipo_Identificacion"] = "";
	$placeHolders011_obligaciones["Spanish"]["Tipo_Identificacion"] = "";
	$fieldLabels011_obligaciones["Spanish"]["Identificacion"] = "Identificacion";
	$fieldToolTips011_obligaciones["Spanish"]["Identificacion"] = "";
	$placeHolders011_obligaciones["Spanish"]["Identificacion"] = "";
	$fieldLabels011_obligaciones["Spanish"]["Nombre_Razon_Social"] = "Nombre Razon Social";
	$fieldToolTips011_obligaciones["Spanish"]["Nombre_Razon_Social"] = "";
	$placeHolders011_obligaciones["Spanish"]["Nombre_Razon_Social"] = "";
	$fieldLabels011_obligaciones["Spanish"]["Medio_de_Pago"] = "Medio de Pago";
	$fieldToolTips011_obligaciones["Spanish"]["Medio_de_Pago"] = "";
	$placeHolders011_obligaciones["Spanish"]["Medio_de_Pago"] = "";
	$fieldLabels011_obligaciones["Spanish"]["Tipo_Cuenta"] = "Tipo Cuenta";
	$fieldToolTips011_obligaciones["Spanish"]["Tipo_Cuenta"] = "";
	$placeHolders011_obligaciones["Spanish"]["Tipo_Cuenta"] = "";
	$fieldLabels011_obligaciones["Spanish"]["Numero_Cuenta"] = "Numero Cuenta";
	$fieldToolTips011_obligaciones["Spanish"]["Numero_Cuenta"] = "";
	$placeHolders011_obligaciones["Spanish"]["Numero_Cuenta"] = "";
	$fieldLabels011_obligaciones["Spanish"]["Estado_Cuenta"] = "Estado Cuenta";
	$fieldToolTips011_obligaciones["Spanish"]["Estado_Cuenta"] = "";
	$placeHolders011_obligaciones["Spanish"]["Estado_Cuenta"] = "";
	$fieldLabels011_obligaciones["Spanish"]["Entidad_Nit"] = "Entidad Nit";
	$fieldToolTips011_obligaciones["Spanish"]["Entidad_Nit"] = "";
	$placeHolders011_obligaciones["Spanish"]["Entidad_Nit"] = "";
	$fieldLabels011_obligaciones["Spanish"]["Entidad_Descripcion"] = "Entidad Descripcion";
	$fieldToolTips011_obligaciones["Spanish"]["Entidad_Descripcion"] = "";
	$placeHolders011_obligaciones["Spanish"]["Entidad_Descripcion"] = "";
	$fieldLabels011_obligaciones["Spanish"]["Dependencia"] = "Dependencia";
	$fieldToolTips011_obligaciones["Spanish"]["Dependencia"] = "";
	$placeHolders011_obligaciones["Spanish"]["Dependencia"] = "";
	$fieldLabels011_obligaciones["Spanish"]["Dependencia_Descripcion"] = "Dependencia Descripcion";
	$fieldToolTips011_obligaciones["Spanish"]["Dependencia_Descripcion"] = "";
	$placeHolders011_obligaciones["Spanish"]["Dependencia_Descripcion"] = "";
	$fieldLabels011_obligaciones["Spanish"]["Rubro"] = "Rubro";
	$fieldToolTips011_obligaciones["Spanish"]["Rubro"] = "";
	$placeHolders011_obligaciones["Spanish"]["Rubro"] = "";
	$fieldLabels011_obligaciones["Spanish"]["Descripcion"] = "Descripcion";
	$fieldToolTips011_obligaciones["Spanish"]["Descripcion"] = "";
	$placeHolders011_obligaciones["Spanish"]["Descripcion"] = "";
	$fieldLabels011_obligaciones["Spanish"]["Valor_Inicial"] = "Valor Inicial";
	$fieldToolTips011_obligaciones["Spanish"]["Valor_Inicial"] = "";
	$placeHolders011_obligaciones["Spanish"]["Valor_Inicial"] = "";
	$fieldLabels011_obligaciones["Spanish"]["Valor_Operaciones"] = "Valor Operaciones";
	$fieldToolTips011_obligaciones["Spanish"]["Valor_Operaciones"] = "";
	$placeHolders011_obligaciones["Spanish"]["Valor_Operaciones"] = "";
	$fieldLabels011_obligaciones["Spanish"]["Valor_Actual1"] = "Valor Actual1";
	$fieldToolTips011_obligaciones["Spanish"]["Valor_Actual1"] = "";
	$placeHolders011_obligaciones["Spanish"]["Valor_Actual1"] = "";
	$fieldLabels011_obligaciones["Spanish"]["Saldo_por_Utilizar"] = "Saldo por Utilizar";
	$fieldToolTips011_obligaciones["Spanish"]["Saldo_por_Utilizar"] = "";
	$placeHolders011_obligaciones["Spanish"]["Saldo_por_Utilizar"] = "";
	$fieldLabels011_obligaciones["Spanish"]["Fuente"] = "Fuente";
	$fieldToolTips011_obligaciones["Spanish"]["Fuente"] = "";
	$placeHolders011_obligaciones["Spanish"]["Fuente"] = "";
	$fieldLabels011_obligaciones["Spanish"]["Situacion"] = "Situacion";
	$fieldToolTips011_obligaciones["Spanish"]["Situacion"] = "";
	$placeHolders011_obligaciones["Spanish"]["Situacion"] = "";
	$fieldLabels011_obligaciones["Spanish"]["Recurso"] = "Recurso";
	$fieldToolTips011_obligaciones["Spanish"]["Recurso"] = "";
	$placeHolders011_obligaciones["Spanish"]["Recurso"] = "";
	$fieldLabels011_obligaciones["Spanish"]["Concepto"] = "Concepto";
	$fieldToolTips011_obligaciones["Spanish"]["Concepto"] = "";
	$placeHolders011_obligaciones["Spanish"]["Concepto"] = "";
	$fieldLabels011_obligaciones["Spanish"]["Solicitud_CDP"] = "Solicitud CDP";
	$fieldToolTips011_obligaciones["Spanish"]["Solicitud_CDP"] = "";
	$placeHolders011_obligaciones["Spanish"]["Solicitud_CDP"] = "";
	$fieldLabels011_obligaciones["Spanish"]["CDP"] = "CDP";
	$fieldToolTips011_obligaciones["Spanish"]["CDP"] = "";
	$placeHolders011_obligaciones["Spanish"]["CDP"] = "";
	$fieldLabels011_obligaciones["Spanish"]["Compromisos"] = "Compromisos";
	$fieldToolTips011_obligaciones["Spanish"]["Compromisos"] = "";
	$placeHolders011_obligaciones["Spanish"]["Compromisos"] = "";
	$fieldLabels011_obligaciones["Spanish"]["Cuentas_por_Pagar"] = "Cuentas por Pagar";
	$fieldToolTips011_obligaciones["Spanish"]["Cuentas_por_Pagar"] = "";
	$placeHolders011_obligaciones["Spanish"]["Cuentas_por_Pagar"] = "";
	$fieldLabels011_obligaciones["Spanish"]["Fecha_Cuentas_por_Pagar"] = "Fecha Cuentas por Pagar";
	$fieldToolTips011_obligaciones["Spanish"]["Fecha_Cuentas_por_Pagar"] = "";
	$placeHolders011_obligaciones["Spanish"]["Fecha_Cuentas_por_Pagar"] = "";
	$fieldLabels011_obligaciones["Spanish"]["Obligaciones"] = "Obligaciones";
	$fieldToolTips011_obligaciones["Spanish"]["Obligaciones"] = "";
	$placeHolders011_obligaciones["Spanish"]["Obligaciones"] = "";
	$fieldLabels011_obligaciones["Spanish"]["Ordenes_de_Pago"] = "Ordenes de Pago";
	$fieldToolTips011_obligaciones["Spanish"]["Ordenes_de_Pago"] = "";
	$placeHolders011_obligaciones["Spanish"]["Ordenes_de_Pago"] = "";
	$fieldLabels011_obligaciones["Spanish"]["Reintegros"] = "Reintegros";
	$fieldToolTips011_obligaciones["Spanish"]["Reintegros"] = "";
	$placeHolders011_obligaciones["Spanish"]["Reintegros"] = "";
	$fieldLabels011_obligaciones["Spanish"]["Fecha_Doc_Soporte_Compromiso"] = "Fecha Doc Soporte Compromiso";
	$fieldToolTips011_obligaciones["Spanish"]["Fecha_Doc_Soporte_Compromiso"] = "";
	$placeHolders011_obligaciones["Spanish"]["Fecha_Doc_Soporte_Compromiso"] = "";
	$fieldLabels011_obligaciones["Spanish"]["Tipo_Doc_Soporte_Compromiso"] = "Tipo Doc Soporte Compromiso";
	$fieldToolTips011_obligaciones["Spanish"]["Tipo_Doc_Soporte_Compromiso"] = "";
	$placeHolders011_obligaciones["Spanish"]["Tipo_Doc_Soporte_Compromiso"] = "";
	$fieldLabels011_obligaciones["Spanish"]["Num_Doc_Soporte_Compromiso"] = "Num Doc Soporte Compromiso";
	$fieldToolTips011_obligaciones["Spanish"]["Num_Doc_Soporte_Compromiso"] = "";
	$placeHolders011_obligaciones["Spanish"]["Num_Doc_Soporte_Compromiso"] = "";
	$fieldLabels011_obligaciones["Spanish"]["Objeto_del_Compromiso"] = "Objeto del Compromiso";
	$fieldToolTips011_obligaciones["Spanish"]["Objeto_del_Compromiso"] = "";
	$placeHolders011_obligaciones["Spanish"]["Objeto_del_Compromiso"] = "";
	if (count($fieldToolTips011_obligaciones["Spanish"]))
		$tdata011_obligaciones[".isUseToolTips"] = true;
}


	$tdata011_obligaciones[".NCSearch"] = true;



$tdata011_obligaciones[".shortTableName"] = "011_obligaciones";
$tdata011_obligaciones[".nSecOptions"] = 0;

$tdata011_obligaciones[".mainTableOwnerID"] = "";
$tdata011_obligaciones[".entityType"] = 0;
$tdata011_obligaciones[".connId"] = "sep2_at_127_0_0_1";


$tdata011_obligaciones[".strOriginalTableName"] = "011_obligaciones";

	



$tdata011_obligaciones[".showAddInPopup"] = false;

$tdata011_obligaciones[".showEditInPopup"] = false;

$tdata011_obligaciones[".showViewInPopup"] = false;

$tdata011_obligaciones[".listAjax"] = false;
//	temporary
//$tdata011_obligaciones[".listAjax"] = false;

	$tdata011_obligaciones[".audit"] = true;

	$tdata011_obligaciones[".locking"] = false;


$pages = $tdata011_obligaciones[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdata011_obligaciones[".edit"] = true;
	$tdata011_obligaciones[".afterEditAction"] = 1;
	$tdata011_obligaciones[".closePopupAfterEdit"] = 1;
	$tdata011_obligaciones[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdata011_obligaciones[".add"] = true;
$tdata011_obligaciones[".afterAddAction"] = 1;
$tdata011_obligaciones[".closePopupAfterAdd"] = 1;
$tdata011_obligaciones[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdata011_obligaciones[".list"] = true;
}



$tdata011_obligaciones[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdata011_obligaciones[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdata011_obligaciones[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdata011_obligaciones[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdata011_obligaciones[".printFriendly"] = true;
}



$tdata011_obligaciones[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdata011_obligaciones[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdata011_obligaciones[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdata011_obligaciones[".isUseAjaxSuggest"] = true;



												

$tdata011_obligaciones[".ajaxCodeSnippetAdded"] = false;

$tdata011_obligaciones[".buttonsAdded"] = false;

$tdata011_obligaciones[".addPageEvents"] = true;

// use timepicker for search panel
$tdata011_obligaciones[".isUseTimeForSearch"] = false;


$tdata011_obligaciones[".badgeColor"] = "6DA5C8";


$tdata011_obligaciones[".allSearchFields"] = array();
$tdata011_obligaciones[".filterFields"] = array();
$tdata011_obligaciones[".requiredSearchFields"] = array();

$tdata011_obligaciones[".googleLikeFields"] = array();
$tdata011_obligaciones[".googleLikeFields"][] = "OID";
$tdata011_obligaciones[".googleLikeFields"][] = "FA";
$tdata011_obligaciones[".googleLikeFields"][] = "Numero Documento";
$tdata011_obligaciones[".googleLikeFields"][] = "Fecha de Registro";
$tdata011_obligaciones[".googleLikeFields"][] = "Fecha de Creacion";
$tdata011_obligaciones[".googleLikeFields"][] = "Estado";
$tdata011_obligaciones[".googleLikeFields"][] = "Valor Actual";
$tdata011_obligaciones[".googleLikeFields"][] = "Valor Deducciones";
$tdata011_obligaciones[".googleLikeFields"][] = "Valor Oblig no Orden";
$tdata011_obligaciones[".googleLikeFields"][] = "Tipo Identificacion";
$tdata011_obligaciones[".googleLikeFields"][] = "Identificacion";
$tdata011_obligaciones[".googleLikeFields"][] = "Nombre Razon Social";
$tdata011_obligaciones[".googleLikeFields"][] = "Medio de Pago";
$tdata011_obligaciones[".googleLikeFields"][] = "Tipo Cuenta";
$tdata011_obligaciones[".googleLikeFields"][] = "Numero Cuenta";
$tdata011_obligaciones[".googleLikeFields"][] = "Estado Cuenta";
$tdata011_obligaciones[".googleLikeFields"][] = "Entidad Nit";
$tdata011_obligaciones[".googleLikeFields"][] = "Entidad Descripcion";
$tdata011_obligaciones[".googleLikeFields"][] = "Dependencia";
$tdata011_obligaciones[".googleLikeFields"][] = "Dependencia Descripcion";
$tdata011_obligaciones[".googleLikeFields"][] = "Rubro";
$tdata011_obligaciones[".googleLikeFields"][] = "Descripcion";
$tdata011_obligaciones[".googleLikeFields"][] = "Valor Inicial";
$tdata011_obligaciones[".googleLikeFields"][] = "Valor Operaciones";
$tdata011_obligaciones[".googleLikeFields"][] = "Valor Actual1";
$tdata011_obligaciones[".googleLikeFields"][] = "Saldo por Utilizar";
$tdata011_obligaciones[".googleLikeFields"][] = "Fuente";
$tdata011_obligaciones[".googleLikeFields"][] = "Situacion";
$tdata011_obligaciones[".googleLikeFields"][] = "Recurso";
$tdata011_obligaciones[".googleLikeFields"][] = "Concepto";
$tdata011_obligaciones[".googleLikeFields"][] = "Solicitud CDP";
$tdata011_obligaciones[".googleLikeFields"][] = "CDP";
$tdata011_obligaciones[".googleLikeFields"][] = "Compromisos";
$tdata011_obligaciones[".googleLikeFields"][] = "Cuentas por Pagar";
$tdata011_obligaciones[".googleLikeFields"][] = "Fecha Cuentas por Pagar";
$tdata011_obligaciones[".googleLikeFields"][] = "Obligaciones";
$tdata011_obligaciones[".googleLikeFields"][] = "Ordenes de Pago";
$tdata011_obligaciones[".googleLikeFields"][] = "Reintegros";
$tdata011_obligaciones[".googleLikeFields"][] = "Fecha Doc Soporte Compromiso";
$tdata011_obligaciones[".googleLikeFields"][] = "Tipo Doc Soporte Compromiso";
$tdata011_obligaciones[".googleLikeFields"][] = "Num Doc Soporte Compromiso";
$tdata011_obligaciones[".googleLikeFields"][] = "Objeto del Compromiso";



$tdata011_obligaciones[".tableType"] = "list";

$tdata011_obligaciones[".printerPageOrientation"] = 0;
$tdata011_obligaciones[".nPrinterPageScale"] = 100;

$tdata011_obligaciones[".nPrinterSplitRecords"] = 40;

$tdata011_obligaciones[".geocodingEnabled"] = false;










$tdata011_obligaciones[".pageSize"] = 20;

$tdata011_obligaciones[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdata011_obligaciones[".strOrderBy"] = $tstrOrderBy;

$tdata011_obligaciones[".orderindexes"] = array();


$tdata011_obligaciones[".sqlHead"] = "SELECT OID,  	FA,  	`Numero Documento`,  	`Fecha de Registro`,  	`Fecha de Creacion`,  	Estado,  	`Valor Actual`,  	`Valor Deducciones`,  	`Valor Oblig no Orden`,  	`Tipo Identificacion`,  	Identificacion,  	`Nombre Razon Social`,  	`Medio de Pago`,  	`Tipo Cuenta`,  	`Numero Cuenta`,  	`Estado Cuenta`,  	`Entidad Nit`,  	`Entidad Descripcion`,  	Dependencia,  	`Dependencia Descripcion`,  	Rubro,  	Descripcion,  	`Valor Inicial`,  	`Valor Operaciones`,  	`Valor Actual1`,  	`Saldo por Utilizar`,  	Fuente,  	Situacion,  	Recurso,  	Concepto,  	`Solicitud CDP`,  	CDP,  	Compromisos,  	`Cuentas por Pagar`,  	`Fecha Cuentas por Pagar`,  	Obligaciones,  	`Ordenes de Pago`,  	Reintegros,  	`Fecha Doc Soporte Compromiso`,  	`Tipo Doc Soporte Compromiso`,  	`Num Doc Soporte Compromiso`,  	`Objeto del Compromiso`";
$tdata011_obligaciones[".sqlFrom"] = "FROM `011_obligaciones`";
$tdata011_obligaciones[".sqlWhereExpr"] = "";
$tdata011_obligaciones[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata011_obligaciones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata011_obligaciones[".arrGroupsPerPage"] = $arrGPP;

$tdata011_obligaciones[".highlightSearchResults"] = true;

$tableKeys011_obligaciones = array();
$tableKeys011_obligaciones[] = "OID";
$tdata011_obligaciones[".Keys"] = $tableKeys011_obligaciones;


$tdata011_obligaciones[".hideMobileList"] = array();




//	OID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "OID";
	$fdata["GoodName"] = "OID";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","OID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "OID";

		$fdata["sourceSingle"] = "OID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdata011_obligaciones["OID"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "OID";
//	FA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FA";
	$fdata["GoodName"] = "FA";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","FA");
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
		$fdata["filterTotalFields"] = "OID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 5;

	

	
	
//end of Filters settings


	$tdata011_obligaciones["FA"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "FA";
//	Numero Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Numero Documento";
	$fdata["GoodName"] = "Numero_Documento";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","Numero_Documento");
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


	$tdata011_obligaciones["Numero Documento"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "Numero Documento";
//	Fecha de Registro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Fecha de Registro";
	$fdata["GoodName"] = "Fecha_de_Registro";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","Fecha_de_Registro");
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


	$tdata011_obligaciones["Fecha de Registro"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "Fecha de Registro";
//	Fecha de Creacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Fecha de Creacion";
	$fdata["GoodName"] = "Fecha_de_Creacion";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","Fecha_de_Creacion");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "Fecha de Creacion";

		$fdata["sourceSingle"] = "Fecha de Creacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Fecha de Creacion`";

	
	
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


	$tdata011_obligaciones["Fecha de Creacion"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "Fecha de Creacion";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","Estado");
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
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata011_obligaciones["Estado"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "Estado";
//	Valor Actual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Valor Actual";
	$fdata["GoodName"] = "Valor_Actual";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","Valor_Actual");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Valor Actual";

		$fdata["sourceSingle"] = "Valor Actual";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Valor Actual`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdata011_obligaciones["Valor Actual"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "Valor Actual";
//	Valor Deducciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Valor Deducciones";
	$fdata["GoodName"] = "Valor_Deducciones";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","Valor_Deducciones");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Valor Deducciones";

		$fdata["sourceSingle"] = "Valor Deducciones";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Valor Deducciones`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdata011_obligaciones["Valor Deducciones"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "Valor Deducciones";
//	Valor Oblig no Orden
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Valor Oblig no Orden";
	$fdata["GoodName"] = "Valor_Oblig_no_Orden";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","Valor_Oblig_no_Orden");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Valor Oblig no Orden";

		$fdata["sourceSingle"] = "Valor Oblig no Orden";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Valor Oblig no Orden`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdata011_obligaciones["Valor Oblig no Orden"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "Valor Oblig no Orden";
//	Tipo Identificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Tipo Identificacion";
	$fdata["GoodName"] = "Tipo_Identificacion";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","Tipo_Identificacion");
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


	$tdata011_obligaciones["Tipo Identificacion"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "Tipo Identificacion";
//	Identificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Identificacion";
	$fdata["GoodName"] = "Identificacion";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","Identificacion");
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


	$tdata011_obligaciones["Identificacion"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "Identificacion";
//	Nombre Razon Social
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Nombre Razon Social";
	$fdata["GoodName"] = "Nombre_Razon_Social";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","Nombre_Razon_Social");
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


	$tdata011_obligaciones["Nombre Razon Social"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "Nombre Razon Social";
//	Medio de Pago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Medio de Pago";
	$fdata["GoodName"] = "Medio_de_Pago";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","Medio_de_Pago");
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


	$tdata011_obligaciones["Medio de Pago"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "Medio de Pago";
//	Tipo Cuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Tipo Cuenta";
	$fdata["GoodName"] = "Tipo_Cuenta";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","Tipo_Cuenta");
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


	$tdata011_obligaciones["Tipo Cuenta"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "Tipo Cuenta";
//	Numero Cuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Numero Cuenta";
	$fdata["GoodName"] = "Numero_Cuenta";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","Numero_Cuenta");
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


	$tdata011_obligaciones["Numero Cuenta"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "Numero Cuenta";
//	Estado Cuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Estado Cuenta";
	$fdata["GoodName"] = "Estado_Cuenta";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","Estado_Cuenta");
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


	$tdata011_obligaciones["Estado Cuenta"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "Estado Cuenta";
//	Entidad Nit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Entidad Nit";
	$fdata["GoodName"] = "Entidad_Nit";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","Entidad_Nit");
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


	$tdata011_obligaciones["Entidad Nit"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "Entidad Nit";
//	Entidad Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Entidad Descripcion";
	$fdata["GoodName"] = "Entidad_Descripcion";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","Entidad_Descripcion");
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


	$tdata011_obligaciones["Entidad Descripcion"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "Entidad Descripcion";
//	Dependencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Dependencia";
	$fdata["GoodName"] = "Dependencia";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","Dependencia");
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


	$tdata011_obligaciones["Dependencia"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "Dependencia";
//	Dependencia Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Dependencia Descripcion";
	$fdata["GoodName"] = "Dependencia_Descripcion";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","Dependencia_Descripcion");
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "OID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata011_obligaciones["Dependencia Descripcion"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "Dependencia Descripcion";
//	Rubro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Rubro";
	$fdata["GoodName"] = "Rubro";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","Rubro");
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


	$tdata011_obligaciones["Rubro"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "Rubro";
//	Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Descripcion";
	$fdata["GoodName"] = "Descripcion";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","Descripcion");
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


	$tdata011_obligaciones["Descripcion"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "Descripcion";
//	Valor Inicial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Valor Inicial";
	$fdata["GoodName"] = "Valor_Inicial";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","Valor_Inicial");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Valor Inicial";

		$fdata["sourceSingle"] = "Valor Inicial";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Valor Inicial`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdata011_obligaciones["Valor Inicial"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "Valor Inicial";
//	Valor Operaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Valor Operaciones";
	$fdata["GoodName"] = "Valor_Operaciones";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","Valor_Operaciones");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Valor Operaciones";

		$fdata["sourceSingle"] = "Valor Operaciones";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Valor Operaciones`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdata011_obligaciones["Valor Operaciones"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "Valor Operaciones";
//	Valor Actual1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "Valor Actual1";
	$fdata["GoodName"] = "Valor_Actual1";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","Valor_Actual1");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Valor Actual1";

		$fdata["sourceSingle"] = "Valor Actual1";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Valor Actual1`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdata011_obligaciones["Valor Actual1"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "Valor Actual1";
//	Saldo por Utilizar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "Saldo por Utilizar";
	$fdata["GoodName"] = "Saldo_por_Utilizar";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","Saldo_por_Utilizar");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Saldo por Utilizar";

		$fdata["sourceSingle"] = "Saldo por Utilizar";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Saldo por Utilizar`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdata011_obligaciones["Saldo por Utilizar"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "Saldo por Utilizar";
//	Fuente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "Fuente";
	$fdata["GoodName"] = "Fuente";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","Fuente");
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


	$tdata011_obligaciones["Fuente"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "Fuente";
//	Situacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "Situacion";
	$fdata["GoodName"] = "Situacion";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","Situacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Situacion";

		$fdata["sourceSingle"] = "Situacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Situacion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdata011_obligaciones["Situacion"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "Situacion";
//	Recurso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "Recurso";
	$fdata["GoodName"] = "Recurso";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","Recurso");
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


	$tdata011_obligaciones["Recurso"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "Recurso";
//	Concepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "Concepto";
	$fdata["GoodName"] = "Concepto";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","Concepto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Concepto";

		$fdata["sourceSingle"] = "Concepto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Concepto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdata011_obligaciones["Concepto"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "Concepto";
//	Solicitud CDP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "Solicitud CDP";
	$fdata["GoodName"] = "Solicitud_CDP";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","Solicitud_CDP");
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


	$tdata011_obligaciones["Solicitud CDP"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "Solicitud CDP";
//	CDP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "CDP";
	$fdata["GoodName"] = "CDP";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","CDP");
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


	$tdata011_obligaciones["CDP"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "CDP";
//	Compromisos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "Compromisos";
	$fdata["GoodName"] = "Compromisos";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","Compromisos");
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


	$tdata011_obligaciones["Compromisos"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "Compromisos";
//	Cuentas por Pagar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "Cuentas por Pagar";
	$fdata["GoodName"] = "Cuentas_por_Pagar";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","Cuentas_por_Pagar");
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


	$tdata011_obligaciones["Cuentas por Pagar"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "Cuentas por Pagar";
//	Fecha Cuentas por Pagar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "Fecha Cuentas por Pagar";
	$fdata["GoodName"] = "Fecha_Cuentas_por_Pagar";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","Fecha_Cuentas_por_Pagar");
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


	$tdata011_obligaciones["Fecha Cuentas por Pagar"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "Fecha Cuentas por Pagar";
//	Obligaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Obligaciones";
	$fdata["GoodName"] = "Obligaciones";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","Obligaciones");
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


	$tdata011_obligaciones["Obligaciones"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "Obligaciones";
//	Ordenes de Pago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "Ordenes de Pago";
	$fdata["GoodName"] = "Ordenes_de_Pago";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","Ordenes_de_Pago");
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


	$tdata011_obligaciones["Ordenes de Pago"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "Ordenes de Pago";
//	Reintegros
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "Reintegros";
	$fdata["GoodName"] = "Reintegros";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","Reintegros");
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


	$tdata011_obligaciones["Reintegros"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "Reintegros";
//	Fecha Doc Soporte Compromiso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "Fecha Doc Soporte Compromiso";
	$fdata["GoodName"] = "Fecha_Doc_Soporte_Compromiso";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","Fecha_Doc_Soporte_Compromiso");
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


	$tdata011_obligaciones["Fecha Doc Soporte Compromiso"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "Fecha Doc Soporte Compromiso";
//	Tipo Doc Soporte Compromiso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "Tipo Doc Soporte Compromiso";
	$fdata["GoodName"] = "Tipo_Doc_Soporte_Compromiso";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","Tipo_Doc_Soporte_Compromiso");
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


	$tdata011_obligaciones["Tipo Doc Soporte Compromiso"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "Tipo Doc Soporte Compromiso";
//	Num Doc Soporte Compromiso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "Num Doc Soporte Compromiso";
	$fdata["GoodName"] = "Num_Doc_Soporte_Compromiso";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","Num_Doc_Soporte_Compromiso");
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


	$tdata011_obligaciones["Num Doc Soporte Compromiso"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "Num Doc Soporte Compromiso";
//	Objeto del Compromiso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "Objeto del Compromiso";
	$fdata["GoodName"] = "Objeto_del_Compromiso";
	$fdata["ownerTable"] = "011_obligaciones";
	$fdata["Label"] = GetFieldLabel("011_obligaciones","Objeto_del_Compromiso");
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


	$tdata011_obligaciones["Objeto del Compromiso"] = $fdata;
		$tdata011_obligaciones[".searchableFields"][] = "Objeto del Compromiso";


$tables_data["011_obligaciones"]=&$tdata011_obligaciones;
$field_labels["011_obligaciones"] = &$fieldLabels011_obligaciones;
$fieldToolTips["011_obligaciones"] = &$fieldToolTips011_obligaciones;
$placeHolders["011_obligaciones"] = &$placeHolders011_obligaciones;
$page_titles["011_obligaciones"] = &$pageTitles011_obligaciones;


changeTextControlsToDate( "011_obligaciones" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["011_obligaciones"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["011_obligaciones"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_011_obligaciones()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "OID,  	FA,  	`Numero Documento`,  	`Fecha de Registro`,  	`Fecha de Creacion`,  	Estado,  	`Valor Actual`,  	`Valor Deducciones`,  	`Valor Oblig no Orden`,  	`Tipo Identificacion`,  	Identificacion,  	`Nombre Razon Social`,  	`Medio de Pago`,  	`Tipo Cuenta`,  	`Numero Cuenta`,  	`Estado Cuenta`,  	`Entidad Nit`,  	`Entidad Descripcion`,  	Dependencia,  	`Dependencia Descripcion`,  	Rubro,  	Descripcion,  	`Valor Inicial`,  	`Valor Operaciones`,  	`Valor Actual1`,  	`Saldo por Utilizar`,  	Fuente,  	Situacion,  	Recurso,  	Concepto,  	`Solicitud CDP`,  	CDP,  	Compromisos,  	`Cuentas por Pagar`,  	`Fecha Cuentas por Pagar`,  	Obligaciones,  	`Ordenes de Pago`,  	Reintegros,  	`Fecha Doc Soporte Compromiso`,  	`Tipo Doc Soporte Compromiso`,  	`Num Doc Soporte Compromiso`,  	`Objeto del Compromiso`";
$proto0["m_strFrom"] = "FROM `011_obligaciones`";
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
	"m_strName" => "OID",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto6["m_sql"] = "OID";
$proto6["m_srcTableName"] = "011_obligaciones";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FA",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto8["m_sql"] = "FA";
$proto8["m_srcTableName"] = "011_obligaciones";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero Documento",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto10["m_sql"] = "`Numero Documento`";
$proto10["m_srcTableName"] = "011_obligaciones";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha de Registro",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto12["m_sql"] = "`Fecha de Registro`";
$proto12["m_srcTableName"] = "011_obligaciones";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha de Creacion",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto14["m_sql"] = "`Fecha de Creacion`";
$proto14["m_srcTableName"] = "011_obligaciones";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto16["m_sql"] = "Estado";
$proto16["m_srcTableName"] = "011_obligaciones";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor Actual",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto18["m_sql"] = "`Valor Actual`";
$proto18["m_srcTableName"] = "011_obligaciones";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor Deducciones",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto20["m_sql"] = "`Valor Deducciones`";
$proto20["m_srcTableName"] = "011_obligaciones";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor Oblig no Orden",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto22["m_sql"] = "`Valor Oblig no Orden`";
$proto22["m_srcTableName"] = "011_obligaciones";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo Identificacion",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto24["m_sql"] = "`Tipo Identificacion`";
$proto24["m_srcTableName"] = "011_obligaciones";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Identificacion",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto26["m_sql"] = "Identificacion";
$proto26["m_srcTableName"] = "011_obligaciones";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre Razon Social",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto28["m_sql"] = "`Nombre Razon Social`";
$proto28["m_srcTableName"] = "011_obligaciones";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Medio de Pago",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto30["m_sql"] = "`Medio de Pago`";
$proto30["m_srcTableName"] = "011_obligaciones";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo Cuenta",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto32["m_sql"] = "`Tipo Cuenta`";
$proto32["m_srcTableName"] = "011_obligaciones";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero Cuenta",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto34["m_sql"] = "`Numero Cuenta`";
$proto34["m_srcTableName"] = "011_obligaciones";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado Cuenta",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto36["m_sql"] = "`Estado Cuenta`";
$proto36["m_srcTableName"] = "011_obligaciones";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Entidad Nit",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto38["m_sql"] = "`Entidad Nit`";
$proto38["m_srcTableName"] = "011_obligaciones";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Entidad Descripcion",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto40["m_sql"] = "`Entidad Descripcion`";
$proto40["m_srcTableName"] = "011_obligaciones";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Dependencia",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto42["m_sql"] = "Dependencia";
$proto42["m_srcTableName"] = "011_obligaciones";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Dependencia Descripcion",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto44["m_sql"] = "`Dependencia Descripcion`";
$proto44["m_srcTableName"] = "011_obligaciones";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Rubro",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto46["m_sql"] = "Rubro";
$proto46["m_srcTableName"] = "011_obligaciones";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "Descripcion",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto48["m_sql"] = "Descripcion";
$proto48["m_srcTableName"] = "011_obligaciones";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor Inicial",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto50["m_sql"] = "`Valor Inicial`";
$proto50["m_srcTableName"] = "011_obligaciones";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor Operaciones",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto52["m_sql"] = "`Valor Operaciones`";
$proto52["m_srcTableName"] = "011_obligaciones";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor Actual1",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto54["m_sql"] = "`Valor Actual1`";
$proto54["m_srcTableName"] = "011_obligaciones";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "Saldo por Utilizar",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto56["m_sql"] = "`Saldo por Utilizar`";
$proto56["m_srcTableName"] = "011_obligaciones";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "Fuente",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto58["m_sql"] = "Fuente";
$proto58["m_srcTableName"] = "011_obligaciones";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "Situacion",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto60["m_sql"] = "Situacion";
$proto60["m_srcTableName"] = "011_obligaciones";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "Recurso",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto62["m_sql"] = "Recurso";
$proto62["m_srcTableName"] = "011_obligaciones";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "Concepto",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto64["m_sql"] = "Concepto";
$proto64["m_srcTableName"] = "011_obligaciones";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "Solicitud CDP",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto66["m_sql"] = "`Solicitud CDP`";
$proto66["m_srcTableName"] = "011_obligaciones";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "CDP",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto68["m_sql"] = "CDP";
$proto68["m_srcTableName"] = "011_obligaciones";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "Compromisos",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto70["m_sql"] = "Compromisos";
$proto70["m_srcTableName"] = "011_obligaciones";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "Cuentas por Pagar",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto72["m_sql"] = "`Cuentas por Pagar`";
$proto72["m_srcTableName"] = "011_obligaciones";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha Cuentas por Pagar",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto74["m_sql"] = "`Fecha Cuentas por Pagar`";
$proto74["m_srcTableName"] = "011_obligaciones";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "Obligaciones",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto76["m_sql"] = "Obligaciones";
$proto76["m_srcTableName"] = "011_obligaciones";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "Ordenes de Pago",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto78["m_sql"] = "`Ordenes de Pago`";
$proto78["m_srcTableName"] = "011_obligaciones";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "Reintegros",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto80["m_sql"] = "Reintegros";
$proto80["m_srcTableName"] = "011_obligaciones";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha Doc Soporte Compromiso",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto82["m_sql"] = "`Fecha Doc Soporte Compromiso`";
$proto82["m_srcTableName"] = "011_obligaciones";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo Doc Soporte Compromiso",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto84["m_sql"] = "`Tipo Doc Soporte Compromiso`";
$proto84["m_srcTableName"] = "011_obligaciones";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "Num Doc Soporte Compromiso",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto86["m_sql"] = "`Num Doc Soporte Compromiso`";
$proto86["m_srcTableName"] = "011_obligaciones";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "Objeto del Compromiso",
	"m_strTable" => "011_obligaciones",
	"m_srcTableName" => "011_obligaciones"
));

$proto88["m_sql"] = "`Objeto del Compromiso`";
$proto88["m_srcTableName"] = "011_obligaciones";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto90=array();
$proto90["m_link"] = "SQLL_MAIN";
			$proto91=array();
$proto91["m_strName"] = "011_obligaciones";
$proto91["m_srcTableName"] = "011_obligaciones";
$proto91["m_columns"] = array();
$proto91["m_columns"][] = "OID";
$proto91["m_columns"][] = "FA";
$proto91["m_columns"][] = "Numero Documento";
$proto91["m_columns"][] = "Fecha de Registro";
$proto91["m_columns"][] = "Fecha de Creacion";
$proto91["m_columns"][] = "Estado";
$proto91["m_columns"][] = "Valor Actual";
$proto91["m_columns"][] = "Valor Deducciones";
$proto91["m_columns"][] = "Valor Oblig no Orden";
$proto91["m_columns"][] = "Tipo Identificacion";
$proto91["m_columns"][] = "Identificacion";
$proto91["m_columns"][] = "Nombre Razon Social";
$proto91["m_columns"][] = "Medio de Pago";
$proto91["m_columns"][] = "Tipo Cuenta";
$proto91["m_columns"][] = "Numero Cuenta";
$proto91["m_columns"][] = "Estado Cuenta";
$proto91["m_columns"][] = "Entidad Nit";
$proto91["m_columns"][] = "Entidad Descripcion";
$proto91["m_columns"][] = "Dependencia";
$proto91["m_columns"][] = "Dependencia Descripcion";
$proto91["m_columns"][] = "Rubro";
$proto91["m_columns"][] = "Descripcion";
$proto91["m_columns"][] = "Valor Inicial";
$proto91["m_columns"][] = "Valor Operaciones";
$proto91["m_columns"][] = "Valor Actual1";
$proto91["m_columns"][] = "Saldo por Utilizar";
$proto91["m_columns"][] = "Fuente";
$proto91["m_columns"][] = "Situacion";
$proto91["m_columns"][] = "Recurso";
$proto91["m_columns"][] = "Concepto";
$proto91["m_columns"][] = "Solicitud CDP";
$proto91["m_columns"][] = "CDP";
$proto91["m_columns"][] = "Compromisos";
$proto91["m_columns"][] = "Cuentas por Pagar";
$proto91["m_columns"][] = "Fecha Cuentas por Pagar";
$proto91["m_columns"][] = "Obligaciones";
$proto91["m_columns"][] = "Ordenes de Pago";
$proto91["m_columns"][] = "Reintegros";
$proto91["m_columns"][] = "Fecha Doc Soporte Compromiso";
$proto91["m_columns"][] = "Tipo Doc Soporte Compromiso";
$proto91["m_columns"][] = "Num Doc Soporte Compromiso";
$proto91["m_columns"][] = "Objeto del Compromiso";
$obj = new SQLTable($proto91);

$proto90["m_table"] = $obj;
$proto90["m_sql"] = "`011_obligaciones`";
$proto90["m_alias"] = "";
$proto90["m_srcTableName"] = "011_obligaciones";
$proto92=array();
$proto92["m_sql"] = "";
$proto92["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto92["m_column"]=$obj;
$proto92["m_contained"] = array();
$proto92["m_strCase"] = "";
$proto92["m_havingmode"] = false;
$proto92["m_inBrackets"] = false;
$proto92["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto92);

$proto90["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto90);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="011_obligaciones";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_011_obligaciones = createSqlQuery_011_obligaciones();


	
										;

																																										

$tdata011_obligaciones[".sqlquery"] = $queryData_011_obligaciones;



include_once(getabspath("include/011_obligaciones_events.php"));
$tdata011_obligaciones[".hasEvents"] = true;

?>