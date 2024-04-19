<?php
$tdataq_informe_export_secop = array();
$tdataq_informe_export_secop[".searchableFields"] = array();
$tdataq_informe_export_secop[".ShortName"] = "q_informe_export_secop";
$tdataq_informe_export_secop[".OwnerID"] = "";
$tdataq_informe_export_secop[".OriginalTable"] = "q_informe_export_secop";


$tdataq_informe_export_secop[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataq_informe_export_secop[".originalPagesByType"] = $tdataq_informe_export_secop[".pagesByType"];
$tdataq_informe_export_secop[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataq_informe_export_secop[".originalPages"] = $tdataq_informe_export_secop[".pages"];
$tdataq_informe_export_secop[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataq_informe_export_secop[".originalDefaultPages"] = $tdataq_informe_export_secop[".defaultPages"];

//	field labels
$fieldLabelsq_informe_export_secop = array();
$fieldToolTipsq_informe_export_secop = array();
$pageTitlesq_informe_export_secop = array();
$placeHoldersq_informe_export_secop = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_informe_export_secop["Spanish"] = array();
	$fieldToolTipsq_informe_export_secop["Spanish"] = array();
	$placeHoldersq_informe_export_secop["Spanish"] = array();
	$pageTitlesq_informe_export_secop["Spanish"] = array();
	$fieldLabelsq_informe_export_secop["Spanish"]["COD_UNSPSC"] = "Cod. UNSPSC";
	$fieldToolTipsq_informe_export_secop["Spanish"]["COD_UNSPSC"] = "";
	$placeHoldersq_informe_export_secop["Spanish"]["COD_UNSPSC"] = "";
	$fieldLabelsq_informe_export_secop["Spanish"]["DESCRIPCION"] = "Descripción";
	$fieldToolTipsq_informe_export_secop["Spanish"]["DESCRIPCION"] = "";
	$placeHoldersq_informe_export_secop["Spanish"]["DESCRIPCION"] = "";
	$fieldLabelsq_informe_export_secop["Spanish"]["MES_INICIO"] = "Fecha estimada inici de proceso";
	$fieldToolTipsq_informe_export_secop["Spanish"]["MES_INICIO"] = "";
	$placeHoldersq_informe_export_secop["Spanish"]["MES_INICIO"] = "";
	$fieldLabelsq_informe_export_secop["Spanish"]["MES_PRESENTA"] = "Fecha estimada presentacion de ofertas";
	$fieldToolTipsq_informe_export_secop["Spanish"]["MES_PRESENTA"] = "";
	$placeHoldersq_informe_export_secop["Spanish"]["MES_PRESENTA"] = "";
	$fieldLabelsq_informe_export_secop["Spanish"]["DURACION_CONTRATO"] = "Duración del contrato";
	$fieldToolTipsq_informe_export_secop["Spanish"]["DURACION_CONTRATO"] = "";
	$placeHoldersq_informe_export_secop["Spanish"]["DURACION_CONTRATO"] = "";
	$fieldLabelsq_informe_export_secop["Spanish"]["DURACION_ESTIMADA_DMA"] = "Duración del contrato (intervalo)";
	$fieldToolTipsq_informe_export_secop["Spanish"]["DURACION_ESTIMADA_DMA"] = "";
	$placeHoldersq_informe_export_secop["Spanish"]["DURACION_ESTIMADA_DMA"] = "";
	$fieldLabelsq_informe_export_secop["Spanish"]["MODALIDAD"] = "Modalidad";
	$fieldToolTipsq_informe_export_secop["Spanish"]["MODALIDAD"] = "";
	$placeHoldersq_informe_export_secop["Spanish"]["MODALIDAD"] = "";
	$fieldLabelsq_informe_export_secop["Spanish"]["FUENTE_RECURSOS"] = "Fuente de los recursos";
	$fieldToolTipsq_informe_export_secop["Spanish"]["FUENTE_RECURSOS"] = "";
	$placeHoldersq_informe_export_secop["Spanish"]["FUENTE_RECURSOS"] = "";
	$fieldLabelsq_informe_export_secop["Spanish"]["VALOR"] = "Valor total estimado";
	$fieldToolTipsq_informe_export_secop["Spanish"]["VALOR"] = "";
	$placeHoldersq_informe_export_secop["Spanish"]["VALOR"] = "";
	$fieldLabelsq_informe_export_secop["Spanish"]["VALOR_VIGENCIA"] = "Valor estimado en la vigencia actual";
	$fieldToolTipsq_informe_export_secop["Spanish"]["VALOR_VIGENCIA"] = "";
	$placeHoldersq_informe_export_secop["Spanish"]["VALOR_VIGENCIA"] = "";
	$fieldLabelsq_informe_export_secop["Spanish"]["VF"] = "Se requieren vigencias futuras";
	$fieldToolTipsq_informe_export_secop["Spanish"]["VF"] = "";
	$placeHoldersq_informe_export_secop["Spanish"]["VF"] = "";
	$fieldLabelsq_informe_export_secop["Spanish"]["ESTADO_VF"] = "Estado de solicitud de la VF";
	$fieldToolTipsq_informe_export_secop["Spanish"]["ESTADO_VF"] = "";
	$placeHoldersq_informe_export_secop["Spanish"]["ESTADO_VF"] = "";
	$fieldLabelsq_informe_export_secop["Spanish"]["UNIDAD_CONTRATACION"] = "Unidad de contratacion";
	$fieldToolTipsq_informe_export_secop["Spanish"]["UNIDAD_CONTRATACION"] = "";
	$placeHoldersq_informe_export_secop["Spanish"]["UNIDAD_CONTRATACION"] = "";
	$fieldLabelsq_informe_export_secop["Spanish"]["COD_UBICACION"] = "Ubicación";
	$fieldToolTipsq_informe_export_secop["Spanish"]["COD_UBICACION"] = "";
	$placeHoldersq_informe_export_secop["Spanish"]["COD_UBICACION"] = "";
	$fieldLabelsq_informe_export_secop["Spanish"]["nombresfunc"] = "Nombre del responsable";
	$fieldToolTipsq_informe_export_secop["Spanish"]["nombresfunc"] = "";
	$placeHoldersq_informe_export_secop["Spanish"]["nombresfunc"] = "";
	$fieldLabelsq_informe_export_secop["Spanish"]["TELEFONO"] = "Telefono del responsable";
	$fieldToolTipsq_informe_export_secop["Spanish"]["TELEFONO"] = "";
	$placeHoldersq_informe_export_secop["Spanish"]["TELEFONO"] = "";
	$fieldLabelsq_informe_export_secop["Spanish"]["usr_email"] = "Correo electrónico del responsable";
	$fieldToolTipsq_informe_export_secop["Spanish"]["usr_email"] = "";
	$placeHoldersq_informe_export_secop["Spanish"]["usr_email"] = "";
	$fieldLabelsq_informe_export_secop["Spanish"]["PAA_ID"] = "PAA ID";
	$fieldToolTipsq_informe_export_secop["Spanish"]["PAA_ID"] = "";
	$placeHoldersq_informe_export_secop["Spanish"]["PAA_ID"] = "";
	if (count($fieldToolTipsq_informe_export_secop["Spanish"]))
		$tdataq_informe_export_secop[".isUseToolTips"] = true;
}


	$tdataq_informe_export_secop[".NCSearch"] = true;



$tdataq_informe_export_secop[".shortTableName"] = "q_informe_export_secop";
$tdataq_informe_export_secop[".nSecOptions"] = 0;

$tdataq_informe_export_secop[".mainTableOwnerID"] = "";
$tdataq_informe_export_secop[".entityType"] = 0;
$tdataq_informe_export_secop[".connId"] = "mincit_global_20x_at_127_0_0_1";


$tdataq_informe_export_secop[".strOriginalTableName"] = "q_informe_export_secop";

	



$tdataq_informe_export_secop[".showAddInPopup"] = false;

$tdataq_informe_export_secop[".showEditInPopup"] = false;

$tdataq_informe_export_secop[".showViewInPopup"] = false;

$tdataq_informe_export_secop[".listAjax"] = false;
//	temporary
//$tdataq_informe_export_secop[".listAjax"] = false;

	$tdataq_informe_export_secop[".audit"] = true;

	$tdataq_informe_export_secop[".locking"] = true;


$pages = $tdataq_informe_export_secop[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_informe_export_secop[".edit"] = true;
	$tdataq_informe_export_secop[".afterEditAction"] = 1;
	$tdataq_informe_export_secop[".closePopupAfterEdit"] = 1;
	$tdataq_informe_export_secop[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_informe_export_secop[".add"] = true;
$tdataq_informe_export_secop[".afterAddAction"] = 1;
$tdataq_informe_export_secop[".closePopupAfterAdd"] = 1;
$tdataq_informe_export_secop[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_informe_export_secop[".list"] = true;
}



$tdataq_informe_export_secop[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_informe_export_secop[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_informe_export_secop[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_informe_export_secop[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_informe_export_secop[".printFriendly"] = true;
}



$tdataq_informe_export_secop[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_informe_export_secop[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_informe_export_secop[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_informe_export_secop[".isUseAjaxSuggest"] = true;



												

$tdataq_informe_export_secop[".ajaxCodeSnippetAdded"] = false;

$tdataq_informe_export_secop[".buttonsAdded"] = false;

$tdataq_informe_export_secop[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_informe_export_secop[".isUseTimeForSearch"] = false;


$tdataq_informe_export_secop[".badgeColor"] = "7B68EE";


$tdataq_informe_export_secop[".allSearchFields"] = array();
$tdataq_informe_export_secop[".filterFields"] = array();
$tdataq_informe_export_secop[".requiredSearchFields"] = array();

$tdataq_informe_export_secop[".googleLikeFields"] = array();
$tdataq_informe_export_secop[".googleLikeFields"][] = "COD_UNSPSC";
$tdataq_informe_export_secop[".googleLikeFields"][] = "DESCRIPCION";
$tdataq_informe_export_secop[".googleLikeFields"][] = "MES_INICIO";
$tdataq_informe_export_secop[".googleLikeFields"][] = "MES_PRESENTA";
$tdataq_informe_export_secop[".googleLikeFields"][] = "DURACION_CONTRATO";
$tdataq_informe_export_secop[".googleLikeFields"][] = "DURACION_ESTIMADA_DMA";
$tdataq_informe_export_secop[".googleLikeFields"][] = "MODALIDAD";
$tdataq_informe_export_secop[".googleLikeFields"][] = "FUENTE_RECURSOS";
$tdataq_informe_export_secop[".googleLikeFields"][] = "VALOR";
$tdataq_informe_export_secop[".googleLikeFields"][] = "VALOR_VIGENCIA";
$tdataq_informe_export_secop[".googleLikeFields"][] = "VF";
$tdataq_informe_export_secop[".googleLikeFields"][] = "ESTADO_VF";
$tdataq_informe_export_secop[".googleLikeFields"][] = "UNIDAD_CONTRATACION";
$tdataq_informe_export_secop[".googleLikeFields"][] = "COD_UBICACION";
$tdataq_informe_export_secop[".googleLikeFields"][] = "nombresfunc";
$tdataq_informe_export_secop[".googleLikeFields"][] = "TELEFONO";
$tdataq_informe_export_secop[".googleLikeFields"][] = "usr_email";
$tdataq_informe_export_secop[".googleLikeFields"][] = "PAA_ID";



$tdataq_informe_export_secop[".tableType"] = "list";

$tdataq_informe_export_secop[".printerPageOrientation"] = 0;
$tdataq_informe_export_secop[".nPrinterPageScale"] = 100;

$tdataq_informe_export_secop[".nPrinterSplitRecords"] = 40;

$tdataq_informe_export_secop[".geocodingEnabled"] = false;










$tdataq_informe_export_secop[".pageSize"] = 20;

$tdataq_informe_export_secop[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataq_informe_export_secop[".strOrderBy"] = $tstrOrderBy;

$tdataq_informe_export_secop[".orderindexes"] = array();


$tdataq_informe_export_secop[".sqlHead"] = "SELECT COD_UNSPSC,  	DESCRIPCION,  	MES_INICIO,  	MES_PRESENTA,  	DURACION_CONTRATO,  	DURACION_ESTIMADA_DMA,  	MODALIDAD,  	FUENTE_RECURSOS,  	VALOR,  	VALOR_VIGENCIA,  	VF,  	ESTADO_VF,  	UNIDAD_CONTRATACION,  	COD_UBICACION,  	nombresfunc,  	TELEFONO,  	usr_email,  	PAA_ID";
$tdataq_informe_export_secop[".sqlFrom"] = "FROM q_informe_export_secop";
$tdataq_informe_export_secop[".sqlWhereExpr"] = "";
$tdataq_informe_export_secop[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_informe_export_secop[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_informe_export_secop[".arrGroupsPerPage"] = $arrGPP;

$tdataq_informe_export_secop[".highlightSearchResults"] = true;

$tableKeysq_informe_export_secop = array();
$tdataq_informe_export_secop[".Keys"] = $tableKeysq_informe_export_secop;


$tdataq_informe_export_secop[".hideMobileList"] = array();




//	COD_UNSPSC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "COD_UNSPSC";
	$fdata["GoodName"] = "COD_UNSPSC";
	$fdata["ownerTable"] = "q_informe_export_secop";
	$fdata["Label"] = GetFieldLabel("q_informe_export_secop","COD_UNSPSC");
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


	$tdataq_informe_export_secop["COD_UNSPSC"] = $fdata;
		$tdataq_informe_export_secop[".searchableFields"][] = "COD_UNSPSC";
//	DESCRIPCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DESCRIPCION";
	$fdata["GoodName"] = "DESCRIPCION";
	$fdata["ownerTable"] = "q_informe_export_secop";
	$fdata["Label"] = GetFieldLabel("q_informe_export_secop","DESCRIPCION");
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


	$tdataq_informe_export_secop["DESCRIPCION"] = $fdata;
		$tdataq_informe_export_secop[".searchableFields"][] = "DESCRIPCION";
//	MES_INICIO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "MES_INICIO";
	$fdata["GoodName"] = "MES_INICIO";
	$fdata["ownerTable"] = "q_informe_export_secop";
	$fdata["Label"] = GetFieldLabel("q_informe_export_secop","MES_INICIO");
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


	$tdataq_informe_export_secop["MES_INICIO"] = $fdata;
		$tdataq_informe_export_secop[".searchableFields"][] = "MES_INICIO";
//	MES_PRESENTA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "MES_PRESENTA";
	$fdata["GoodName"] = "MES_PRESENTA";
	$fdata["ownerTable"] = "q_informe_export_secop";
	$fdata["Label"] = GetFieldLabel("q_informe_export_secop","MES_PRESENTA");
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


	$tdataq_informe_export_secop["MES_PRESENTA"] = $fdata;
		$tdataq_informe_export_secop[".searchableFields"][] = "MES_PRESENTA";
//	DURACION_CONTRATO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DURACION_CONTRATO";
	$fdata["GoodName"] = "DURACION_CONTRATO";
	$fdata["ownerTable"] = "q_informe_export_secop";
	$fdata["Label"] = GetFieldLabel("q_informe_export_secop","DURACION_CONTRATO");
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


	$tdataq_informe_export_secop["DURACION_CONTRATO"] = $fdata;
		$tdataq_informe_export_secop[".searchableFields"][] = "DURACION_CONTRATO";
//	DURACION_ESTIMADA_DMA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DURACION_ESTIMADA_DMA";
	$fdata["GoodName"] = "DURACION_ESTIMADA_DMA";
	$fdata["ownerTable"] = "q_informe_export_secop";
	$fdata["Label"] = GetFieldLabel("q_informe_export_secop","DURACION_ESTIMADA_DMA");
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


	$tdataq_informe_export_secop["DURACION_ESTIMADA_DMA"] = $fdata;
		$tdataq_informe_export_secop[".searchableFields"][] = "DURACION_ESTIMADA_DMA";
//	MODALIDAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "MODALIDAD";
	$fdata["GoodName"] = "MODALIDAD";
	$fdata["ownerTable"] = "q_informe_export_secop";
	$fdata["Label"] = GetFieldLabel("q_informe_export_secop","MODALIDAD");
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


	$tdataq_informe_export_secop["MODALIDAD"] = $fdata;
		$tdataq_informe_export_secop[".searchableFields"][] = "MODALIDAD";
//	FUENTE_RECURSOS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "FUENTE_RECURSOS";
	$fdata["GoodName"] = "FUENTE_RECURSOS";
	$fdata["ownerTable"] = "q_informe_export_secop";
	$fdata["Label"] = GetFieldLabel("q_informe_export_secop","FUENTE_RECURSOS");
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


	$tdataq_informe_export_secop["FUENTE_RECURSOS"] = $fdata;
		$tdataq_informe_export_secop[".searchableFields"][] = "FUENTE_RECURSOS";
//	VALOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "VALOR";
	$fdata["GoodName"] = "VALOR";
	$fdata["ownerTable"] = "q_informe_export_secop";
	$fdata["Label"] = GetFieldLabel("q_informe_export_secop","VALOR");
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


	$tdataq_informe_export_secop["VALOR"] = $fdata;
		$tdataq_informe_export_secop[".searchableFields"][] = "VALOR";
//	VALOR_VIGENCIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "VALOR_VIGENCIA";
	$fdata["GoodName"] = "VALOR_VIGENCIA";
	$fdata["ownerTable"] = "q_informe_export_secop";
	$fdata["Label"] = GetFieldLabel("q_informe_export_secop","VALOR_VIGENCIA");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "VALOR_VIGENCIA";

		$fdata["sourceSingle"] = "VALOR_VIGENCIA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VALOR_VIGENCIA";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdataq_informe_export_secop["VALOR_VIGENCIA"] = $fdata;
		$tdataq_informe_export_secop[".searchableFields"][] = "VALOR_VIGENCIA";
//	VF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "VF";
	$fdata["GoodName"] = "VF";
	$fdata["ownerTable"] = "q_informe_export_secop";
	$fdata["Label"] = GetFieldLabel("q_informe_export_secop","VF");
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


	$tdataq_informe_export_secop["VF"] = $fdata;
		$tdataq_informe_export_secop[".searchableFields"][] = "VF";
//	ESTADO_VF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ESTADO_VF";
	$fdata["GoodName"] = "ESTADO_VF";
	$fdata["ownerTable"] = "q_informe_export_secop";
	$fdata["Label"] = GetFieldLabel("q_informe_export_secop","ESTADO_VF");
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


	$tdataq_informe_export_secop["ESTADO_VF"] = $fdata;
		$tdataq_informe_export_secop[".searchableFields"][] = "ESTADO_VF";
//	UNIDAD_CONTRATACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "UNIDAD_CONTRATACION";
	$fdata["GoodName"] = "UNIDAD_CONTRATACION";
	$fdata["ownerTable"] = "q_informe_export_secop";
	$fdata["Label"] = GetFieldLabel("q_informe_export_secop","UNIDAD_CONTRATACION");
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


	$tdataq_informe_export_secop["UNIDAD_CONTRATACION"] = $fdata;
		$tdataq_informe_export_secop[".searchableFields"][] = "UNIDAD_CONTRATACION";
//	COD_UBICACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "COD_UBICACION";
	$fdata["GoodName"] = "COD_UBICACION";
	$fdata["ownerTable"] = "q_informe_export_secop";
	$fdata["Label"] = GetFieldLabel("q_informe_export_secop","COD_UBICACION");
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


	$tdataq_informe_export_secop["COD_UBICACION"] = $fdata;
		$tdataq_informe_export_secop[".searchableFields"][] = "COD_UBICACION";
//	nombresfunc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "nombresfunc";
	$fdata["GoodName"] = "nombresfunc";
	$fdata["ownerTable"] = "q_informe_export_secop";
	$fdata["Label"] = GetFieldLabel("q_informe_export_secop","nombresfunc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombresfunc";

		$fdata["sourceSingle"] = "nombresfunc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombresfunc";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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
			$edata["EditParams"].= " maxlength=121";

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


	$tdataq_informe_export_secop["nombresfunc"] = $fdata;
		$tdataq_informe_export_secop[".searchableFields"][] = "nombresfunc";
//	TELEFONO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "TELEFONO";
	$fdata["GoodName"] = "TELEFONO";
	$fdata["ownerTable"] = "q_informe_export_secop";
	$fdata["Label"] = GetFieldLabel("q_informe_export_secop","TELEFONO");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "TELEFONO";

		$fdata["sourceSingle"] = "TELEFONO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TELEFONO";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdataq_informe_export_secop["TELEFONO"] = $fdata;
		$tdataq_informe_export_secop[".searchableFields"][] = "TELEFONO";
//	usr_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "usr_email";
	$fdata["GoodName"] = "usr_email";
	$fdata["ownerTable"] = "q_informe_export_secop";
	$fdata["Label"] = GetFieldLabel("q_informe_export_secop","usr_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_email";

		$fdata["sourceSingle"] = "usr_email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_email";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdataq_informe_export_secop["usr_email"] = $fdata;
		$tdataq_informe_export_secop[".searchableFields"][] = "usr_email";
//	PAA_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "PAA_ID";
	$fdata["GoodName"] = "PAA_ID";
	$fdata["ownerTable"] = "q_informe_export_secop";
	$fdata["Label"] = GetFieldLabel("q_informe_export_secop","PAA_ID");
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


	$tdataq_informe_export_secop["PAA_ID"] = $fdata;
		$tdataq_informe_export_secop[".searchableFields"][] = "PAA_ID";


$tables_data["q_informe_export_secop"]=&$tdataq_informe_export_secop;
$field_labels["q_informe_export_secop"] = &$fieldLabelsq_informe_export_secop;
$fieldToolTips["q_informe_export_secop"] = &$fieldToolTipsq_informe_export_secop;
$placeHolders["q_informe_export_secop"] = &$placeHoldersq_informe_export_secop;
$page_titles["q_informe_export_secop"] = &$pageTitlesq_informe_export_secop;


changeTextControlsToDate( "q_informe_export_secop" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["q_informe_export_secop"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["q_informe_export_secop"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_q_informe_export_secop()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "COD_UNSPSC,  	DESCRIPCION,  	MES_INICIO,  	MES_PRESENTA,  	DURACION_CONTRATO,  	DURACION_ESTIMADA_DMA,  	MODALIDAD,  	FUENTE_RECURSOS,  	VALOR,  	VALOR_VIGENCIA,  	VF,  	ESTADO_VF,  	UNIDAD_CONTRATACION,  	COD_UBICACION,  	nombresfunc,  	TELEFONO,  	usr_email,  	PAA_ID";
$proto0["m_strFrom"] = "FROM q_informe_export_secop";
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
	"m_strName" => "COD_UNSPSC",
	"m_strTable" => "q_informe_export_secop",
	"m_srcTableName" => "q_informe_export_secop"
));

$proto6["m_sql"] = "COD_UNSPSC";
$proto6["m_srcTableName"] = "q_informe_export_secop";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION",
	"m_strTable" => "q_informe_export_secop",
	"m_srcTableName" => "q_informe_export_secop"
));

$proto8["m_sql"] = "DESCRIPCION";
$proto8["m_srcTableName"] = "q_informe_export_secop";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "MES_INICIO",
	"m_strTable" => "q_informe_export_secop",
	"m_srcTableName" => "q_informe_export_secop"
));

$proto10["m_sql"] = "MES_INICIO";
$proto10["m_srcTableName"] = "q_informe_export_secop";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "MES_PRESENTA",
	"m_strTable" => "q_informe_export_secop",
	"m_srcTableName" => "q_informe_export_secop"
));

$proto12["m_sql"] = "MES_PRESENTA";
$proto12["m_srcTableName"] = "q_informe_export_secop";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "DURACION_CONTRATO",
	"m_strTable" => "q_informe_export_secop",
	"m_srcTableName" => "q_informe_export_secop"
));

$proto14["m_sql"] = "DURACION_CONTRATO";
$proto14["m_srcTableName"] = "q_informe_export_secop";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DURACION_ESTIMADA_DMA",
	"m_strTable" => "q_informe_export_secop",
	"m_srcTableName" => "q_informe_export_secop"
));

$proto16["m_sql"] = "DURACION_ESTIMADA_DMA";
$proto16["m_srcTableName"] = "q_informe_export_secop";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "MODALIDAD",
	"m_strTable" => "q_informe_export_secop",
	"m_srcTableName" => "q_informe_export_secop"
));

$proto18["m_sql"] = "MODALIDAD";
$proto18["m_srcTableName"] = "q_informe_export_secop";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "FUENTE_RECURSOS",
	"m_strTable" => "q_informe_export_secop",
	"m_srcTableName" => "q_informe_export_secop"
));

$proto20["m_sql"] = "FUENTE_RECURSOS";
$proto20["m_srcTableName"] = "q_informe_export_secop";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "VALOR",
	"m_strTable" => "q_informe_export_secop",
	"m_srcTableName" => "q_informe_export_secop"
));

$proto22["m_sql"] = "VALOR";
$proto22["m_srcTableName"] = "q_informe_export_secop";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "VALOR_VIGENCIA",
	"m_strTable" => "q_informe_export_secop",
	"m_srcTableName" => "q_informe_export_secop"
));

$proto24["m_sql"] = "VALOR_VIGENCIA";
$proto24["m_srcTableName"] = "q_informe_export_secop";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "VF",
	"m_strTable" => "q_informe_export_secop",
	"m_srcTableName" => "q_informe_export_secop"
));

$proto26["m_sql"] = "VF";
$proto26["m_srcTableName"] = "q_informe_export_secop";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "ESTADO_VF",
	"m_strTable" => "q_informe_export_secop",
	"m_srcTableName" => "q_informe_export_secop"
));

$proto28["m_sql"] = "ESTADO_VF";
$proto28["m_srcTableName"] = "q_informe_export_secop";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "UNIDAD_CONTRATACION",
	"m_strTable" => "q_informe_export_secop",
	"m_srcTableName" => "q_informe_export_secop"
));

$proto30["m_sql"] = "UNIDAD_CONTRATACION";
$proto30["m_srcTableName"] = "q_informe_export_secop";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "COD_UBICACION",
	"m_strTable" => "q_informe_export_secop",
	"m_srcTableName" => "q_informe_export_secop"
));

$proto32["m_sql"] = "COD_UBICACION";
$proto32["m_srcTableName"] = "q_informe_export_secop";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "nombresfunc",
	"m_strTable" => "q_informe_export_secop",
	"m_srcTableName" => "q_informe_export_secop"
));

$proto34["m_sql"] = "nombresfunc";
$proto34["m_srcTableName"] = "q_informe_export_secop";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "TELEFONO",
	"m_strTable" => "q_informe_export_secop",
	"m_srcTableName" => "q_informe_export_secop"
));

$proto36["m_sql"] = "TELEFONO";
$proto36["m_srcTableName"] = "q_informe_export_secop";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_email",
	"m_strTable" => "q_informe_export_secop",
	"m_srcTableName" => "q_informe_export_secop"
));

$proto38["m_sql"] = "usr_email";
$proto38["m_srcTableName"] = "q_informe_export_secop";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "PAA_ID",
	"m_strTable" => "q_informe_export_secop",
	"m_srcTableName" => "q_informe_export_secop"
));

$proto40["m_sql"] = "PAA_ID";
$proto40["m_srcTableName"] = "q_informe_export_secop";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "q_informe_export_secop";
$proto43["m_srcTableName"] = "q_informe_export_secop";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "COD_UNSPSC";
$proto43["m_columns"][] = "DESCRIPCION";
$proto43["m_columns"][] = "MES_INICIO";
$proto43["m_columns"][] = "MES_PRESENTA";
$proto43["m_columns"][] = "DURACION_CONTRATO";
$proto43["m_columns"][] = "DURACION_ESTIMADA_DMA";
$proto43["m_columns"][] = "MODALIDAD";
$proto43["m_columns"][] = "FUENTE_RECURSOS";
$proto43["m_columns"][] = "VALOR";
$proto43["m_columns"][] = "VALOR_VIGENCIA";
$proto43["m_columns"][] = "VF";
$proto43["m_columns"][] = "ESTADO_VF";
$proto43["m_columns"][] = "UNIDAD_CONTRATACION";
$proto43["m_columns"][] = "COD_UBICACION";
$proto43["m_columns"][] = "nombresfunc";
$proto43["m_columns"][] = "TELEFONO";
$proto43["m_columns"][] = "usr_email";
$proto43["m_columns"][] = "PAA_ID";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "q_informe_export_secop";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "q_informe_export_secop";
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="q_informe_export_secop";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_informe_export_secop = createSqlQuery_q_informe_export_secop();


	
										;

																		

$tdataq_informe_export_secop[".sqlquery"] = $queryData_q_informe_export_secop;



$tdataq_informe_export_secop[".hasEvents"] = false;

?>