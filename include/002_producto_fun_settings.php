<?php
$tdata002_producto_fun = array();
$tdata002_producto_fun[".searchableFields"] = array();
$tdata002_producto_fun[".ShortName"] = "002_producto_fun";
$tdata002_producto_fun[".OwnerID"] = "UsuarioResp";
$tdata002_producto_fun[".OriginalTable"] = "002_producto";


$tdata002_producto_fun[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdata002_producto_fun[".originalPagesByType"] = $tdata002_producto_fun[".pagesByType"];
$tdata002_producto_fun[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdata002_producto_fun[".originalPages"] = $tdata002_producto_fun[".pages"];
$tdata002_producto_fun[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdata002_producto_fun[".originalDefaultPages"] = $tdata002_producto_fun[".defaultPages"];

//	field labels
$fieldLabels002_producto_fun = array();
$fieldToolTips002_producto_fun = array();
$pageTitles002_producto_fun = array();
$placeHolders002_producto_fun = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabels002_producto_fun["Spanish"] = array();
	$fieldToolTips002_producto_fun["Spanish"] = array();
	$placeHolders002_producto_fun["Spanish"] = array();
	$pageTitles002_producto_fun["Spanish"] = array();
	$fieldLabels002_producto_fun["Spanish"]["PROD_ID"] = "PROD ID";
	$fieldToolTips002_producto_fun["Spanish"]["PROD_ID"] = "";
	$placeHolders002_producto_fun["Spanish"]["PROD_ID"] = "";
	$fieldLabels002_producto_fun["Spanish"]["RUBRO_ID_FK"] = "Cod";
	$fieldToolTips002_producto_fun["Spanish"]["RUBRO_ID_FK"] = "";
	$placeHolders002_producto_fun["Spanish"]["RUBRO_ID_FK"] = "";
	$fieldLabels002_producto_fun["Spanish"]["VIGENCIA"] = "Vigencia";
	$fieldToolTips002_producto_fun["Spanish"]["VIGENCIA"] = "";
	$placeHolders002_producto_fun["Spanish"]["VIGENCIA"] = "";
	$fieldLabels002_producto_fun["Spanish"]["TIPO"] = "Tipo";
	$fieldToolTips002_producto_fun["Spanish"]["TIPO"] = "";
	$placeHolders002_producto_fun["Spanish"]["TIPO"] = "";
	$fieldLabels002_producto_fun["Spanish"]["UEJ"] = "UEJ";
	$fieldToolTips002_producto_fun["Spanish"]["UEJ"] = "";
	$placeHolders002_producto_fun["Spanish"]["UEJ"] = "";
	$fieldLabels002_producto_fun["Spanish"]["RUBRO"] = "Rubro";
	$fieldToolTips002_producto_fun["Spanish"]["RUBRO"] = "";
	$placeHolders002_producto_fun["Spanish"]["RUBRO"] = "";
	$fieldLabels002_producto_fun["Spanish"]["PRODUCTO"] = "Cod. Producto";
	$fieldToolTips002_producto_fun["Spanish"]["PRODUCTO"] = "";
	$placeHolders002_producto_fun["Spanish"]["PRODUCTO"] = "";
	$fieldLabels002_producto_fun["Spanish"]["FUENTE"] = "Fuente";
	$fieldToolTips002_producto_fun["Spanish"]["FUENTE"] = "";
	$placeHolders002_producto_fun["Spanish"]["FUENTE"] = "";
	$fieldLabels002_producto_fun["Spanish"]["REC"] = "REC";
	$fieldToolTips002_producto_fun["Spanish"]["REC"] = "";
	$placeHolders002_producto_fun["Spanish"]["REC"] = "";
	$fieldLabels002_producto_fun["Spanish"]["DESCRIPCION"] = "Nombre del producto";
	$fieldToolTips002_producto_fun["Spanish"]["DESCRIPCION"] = "";
	$placeHolders002_producto_fun["Spanish"]["DESCRIPCION"] = "";
	$fieldLabels002_producto_fun["Spanish"]["PROD_PRESUPUESTO"] = "Presupuesto asignado";
	$fieldToolTips002_producto_fun["Spanish"]["PROD_PRESUPUESTO"] = "";
	$placeHolders002_producto_fun["Spanish"]["PROD_PRESUPUESTO"] = "";
	$fieldLabels002_producto_fun["Spanish"]["Dependencia"] = "Dependencia";
	$fieldToolTips002_producto_fun["Spanish"]["Dependencia"] = "";
	$placeHolders002_producto_fun["Spanish"]["Dependencia"] = "";
	$fieldLabels002_producto_fun["Spanish"]["UsuarioResp"] = "Gestor";
	$fieldToolTips002_producto_fun["Spanish"]["UsuarioResp"] = "";
	$placeHolders002_producto_fun["Spanish"]["UsuarioResp"] = "";
	$fieldLabels002_producto_fun["Spanish"]["META"] = "Meta Global";
	$fieldToolTips002_producto_fun["Spanish"]["META"] = "";
	$placeHolders002_producto_fun["Spanish"]["META"] = "";
	$fieldLabels002_producto_fun["Spanish"]["SALDO"] = "Saldo";
	$fieldToolTips002_producto_fun["Spanish"]["SALDO"] = "";
	$placeHolders002_producto_fun["Spanish"]["SALDO"] = "";
	$fieldLabels002_producto_fun["Spanish"]["OBJ_ESPECIFICO"] = "Objetivo específico";
	$fieldToolTips002_producto_fun["Spanish"]["OBJ_ESPECIFICO"] = "";
	$placeHolders002_producto_fun["Spanish"]["OBJ_ESPECIFICO"] = "";
	$fieldLabels002_producto_fun["Spanish"]["INDICADORES"] = "Indicadores";
	$fieldToolTips002_producto_fun["Spanish"]["INDICADORES"] = "";
	$placeHolders002_producto_fun["Spanish"]["INDICADORES"] = "";
	$fieldLabels002_producto_fun["Spanish"]["META_ANIO"] = "Meta año";
	$fieldToolTips002_producto_fun["Spanish"]["META_ANIO"] = "";
	$placeHolders002_producto_fun["Spanish"]["META_ANIO"] = "";
	$fieldLabels002_producto_fun["Spanish"]["UTILIZADO"] = "Programado";
	$fieldToolTips002_producto_fun["Spanish"]["UTILIZADO"] = "";
	$placeHolders002_producto_fun["Spanish"]["UTILIZADO"] = "";
	$fieldLabels002_producto_fun["Spanish"]["sol_paa"] = "¿Permitir programación por el gestor?";
	$fieldToolTips002_producto_fun["Spanish"]["sol_paa"] = "";
	$placeHolders002_producto_fun["Spanish"]["sol_paa"] = "";
	$pageTitles002_producto_fun["Spanish"]["add"] = "USO PRESUPUESTAL";
	$pageTitles002_producto_fun["Spanish"]["edit"] = "USO PRESUPUESTAL ID: [{%PROD_ID}]";
	$pageTitles002_producto_fun["Spanish"]["view"] = "USO PRESUPUESTAL ID: {%PROD_ID}";
	if (count($fieldToolTips002_producto_fun["Spanish"]))
		$tdata002_producto_fun[".isUseToolTips"] = true;
}


	$tdata002_producto_fun[".NCSearch"] = true;



$tdata002_producto_fun[".shortTableName"] = "002_producto_fun";
$tdata002_producto_fun[".nSecOptions"] = 0;

$tdata002_producto_fun[".mainTableOwnerID"] = "UsuarioResp";
$tdata002_producto_fun[".entityType"] = 1;
$tdata002_producto_fun[".connId"] = "sep2_at_127_0_0_1";


$tdata002_producto_fun[".strOriginalTableName"] = "002_producto";

	



$tdata002_producto_fun[".showAddInPopup"] = false;

$tdata002_producto_fun[".showEditInPopup"] = false;

$tdata002_producto_fun[".showViewInPopup"] = false;

$tdata002_producto_fun[".listAjax"] = false;
//	temporary
//$tdata002_producto_fun[".listAjax"] = false;

	$tdata002_producto_fun[".audit"] = true;

	$tdata002_producto_fun[".locking"] = true;


$pages = $tdata002_producto_fun[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdata002_producto_fun[".edit"] = true;
	$tdata002_producto_fun[".afterEditAction"] = 0;
	$tdata002_producto_fun[".closePopupAfterEdit"] = 1;
	$tdata002_producto_fun[".afterEditActionDetTable"] = "003_actividad";
}

if( $pages[PAGE_ADD] ) {
$tdata002_producto_fun[".add"] = true;
$tdata002_producto_fun[".afterAddAction"] = 0;
$tdata002_producto_fun[".closePopupAfterAdd"] = 1;
$tdata002_producto_fun[".afterAddActionDetTable"] = "003_actividad";
}

if( $pages[PAGE_LIST] ) {
	$tdata002_producto_fun[".list"] = true;
}



$tdata002_producto_fun[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdata002_producto_fun[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdata002_producto_fun[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdata002_producto_fun[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdata002_producto_fun[".printFriendly"] = true;
}



$tdata002_producto_fun[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdata002_producto_fun[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdata002_producto_fun[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdata002_producto_fun[".isUseAjaxSuggest"] = true;



																								

$tdata002_producto_fun[".ajaxCodeSnippetAdded"] = false;

$tdata002_producto_fun[".buttonsAdded"] = false;

$tdata002_producto_fun[".addPageEvents"] = false;

// use timepicker for search panel
$tdata002_producto_fun[".isUseTimeForSearch"] = false;


$tdata002_producto_fun[".badgeColor"] = "9acd32";


$tdata002_producto_fun[".allSearchFields"] = array();
$tdata002_producto_fun[".filterFields"] = array();
$tdata002_producto_fun[".requiredSearchFields"] = array();

$tdata002_producto_fun[".googleLikeFields"] = array();
$tdata002_producto_fun[".googleLikeFields"][] = "PROD_ID";
$tdata002_producto_fun[".googleLikeFields"][] = "RUBRO_ID_FK";
$tdata002_producto_fun[".googleLikeFields"][] = "VIGENCIA";
$tdata002_producto_fun[".googleLikeFields"][] = "UEJ";
$tdata002_producto_fun[".googleLikeFields"][] = "RUBRO";
$tdata002_producto_fun[".googleLikeFields"][] = "PRODUCTO";
$tdata002_producto_fun[".googleLikeFields"][] = "DESCRIPCION";
$tdata002_producto_fun[".googleLikeFields"][] = "FUENTE";
$tdata002_producto_fun[".googleLikeFields"][] = "REC";
$tdata002_producto_fun[".googleLikeFields"][] = "OBJ-ESPECIFICO";
$tdata002_producto_fun[".googleLikeFields"][] = "INDICADORES";
$tdata002_producto_fun[".googleLikeFields"][] = "PROD_PRESUPUESTO";
$tdata002_producto_fun[".googleLikeFields"][] = "SALDO";
$tdata002_producto_fun[".googleLikeFields"][] = "META";
$tdata002_producto_fun[".googleLikeFields"][] = "META_ANIO";
$tdata002_producto_fun[".googleLikeFields"][] = "Dependencia";
$tdata002_producto_fun[".googleLikeFields"][] = "UsuarioResp";
$tdata002_producto_fun[".googleLikeFields"][] = "TIPO";
$tdata002_producto_fun[".googleLikeFields"][] = "UTILIZADO";
$tdata002_producto_fun[".googleLikeFields"][] = "sol_paa";



$tdata002_producto_fun[".tableType"] = "list";

$tdata002_producto_fun[".printerPageOrientation"] = 0;
$tdata002_producto_fun[".nPrinterPageScale"] = 100;

$tdata002_producto_fun[".nPrinterSplitRecords"] = 40;

$tdata002_producto_fun[".geocodingEnabled"] = false;










$tdata002_producto_fun[".pageSize"] = 20;

$tdata002_producto_fun[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdata002_producto_fun[".strOrderBy"] = $tstrOrderBy;

$tdata002_producto_fun[".orderindexes"] = array();


$tdata002_producto_fun[".sqlHead"] = "SELECT PROD_ID, RUBRO_ID_FK, VIGENCIA, UEJ, RUBRO, PRODUCTO, DESCRIPCION, FUENTE, REC, `OBJ-ESPECIFICO`, INDICADORES, PROD_PRESUPUESTO, SALDO, META, META_ANIO, Dependencia, UsuarioResp, TIPO, UTILIZADO, sol_paa";
$tdata002_producto_fun[".sqlFrom"] = "FROM `002_producto`";
$tdata002_producto_fun[".sqlWhereExpr"] = "";
$tdata002_producto_fun[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata002_producto_fun[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata002_producto_fun[".arrGroupsPerPage"] = $arrGPP;

$tdata002_producto_fun[".highlightSearchResults"] = true;

$tableKeys002_producto_fun = array();
$tableKeys002_producto_fun[] = "PROD_ID";
$tdata002_producto_fun[".Keys"] = $tableKeys002_producto_fun;


$tdata002_producto_fun[".hideMobileList"] = array();




//	PROD_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PROD_ID";
	$fdata["GoodName"] = "PROD_ID";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto_fun","PROD_ID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdata002_producto_fun["PROD_ID"] = $fdata;
		$tdata002_producto_fun[".searchableFields"][] = "PROD_ID";
//	RUBRO_ID_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "RUBRO_ID_FK";
	$fdata["GoodName"] = "RUBRO_ID_FK";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto_fun","RUBRO_ID_FK");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "RUBRO_ID_FK";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "001_rubro_fun";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"VIGENCIA", 'lookupF'=>"VIGENCIA");
	$edata["autoCompleteFields"][] = array('masterF'=>"UEJ", 'lookupF'=>"UEJ");
	$edata["autoCompleteFields"][] = array('masterF'=>"RUBRO", 'lookupF'=>"RUBRO");
	$edata["autoCompleteFields"][] = array('masterF'=>"FUENTE", 'lookupF'=>"FUENTE");
	$edata["autoCompleteFields"][] = array('masterF'=>"REC", 'lookupF'=>"REC");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "RUBRO_ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "RUBRO_ID";

	

	
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


	$tdata002_producto_fun["RUBRO_ID_FK"] = $fdata;
		$tdata002_producto_fun[".searchableFields"][] = "RUBRO_ID_FK";
//	VIGENCIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "VIGENCIA";
	$fdata["GoodName"] = "VIGENCIA";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto_fun","VIGENCIA");
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


	$tdata002_producto_fun["VIGENCIA"] = $fdata;
		$tdata002_producto_fun[".searchableFields"][] = "VIGENCIA";
//	UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "UEJ";
	$fdata["GoodName"] = "UEJ";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto_fun","UEJ");
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


	$tdata002_producto_fun["UEJ"] = $fdata;
		$tdata002_producto_fun[".searchableFields"][] = "UEJ";
//	RUBRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "RUBRO";
	$fdata["GoodName"] = "RUBRO";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto_fun","RUBRO");
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


	$tdata002_producto_fun["RUBRO"] = $fdata;
		$tdata002_producto_fun[".searchableFields"][] = "RUBRO";
//	PRODUCTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "PRODUCTO";
	$fdata["GoodName"] = "PRODUCTO";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto_fun","PRODUCTO");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "010_ep_desagregada";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"DESCRIPCION", 'lookupF'=>"DESCRIPCION");
	$edata["autoCompleteFields"][] = array('masterF'=>"REC", 'lookupF'=>"REC");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "RUBRO";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "RUBRO";

				$edata["LookupWhere"] = "TIPO = 'A'";


	
	$edata["LookupOrderBy"] = "RUBRO";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "UEJ", "lookup" => "UEJ" );

	
	

	
	
	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "PROD_ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata002_producto_fun["PRODUCTO"] = $fdata;
		$tdata002_producto_fun[".searchableFields"][] = "PRODUCTO";
//	DESCRIPCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DESCRIPCION";
	$fdata["GoodName"] = "DESCRIPCION";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto_fun","DESCRIPCION");
	$fdata["FieldType"] = 200;


	
	
			

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

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 50;
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


	$tdata002_producto_fun["DESCRIPCION"] = $fdata;
		$tdata002_producto_fun[".searchableFields"][] = "DESCRIPCION";
//	FUENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "FUENTE";
	$fdata["GoodName"] = "FUENTE";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto_fun","FUENTE");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "FUENTE";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FUENTE";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdata002_producto_fun["FUENTE"] = $fdata;
		$tdata002_producto_fun[".searchableFields"][] = "FUENTE";
//	REC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "REC";
	$fdata["GoodName"] = "REC";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto_fun","REC");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "REC";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "REC";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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
	$edata["LookupTable"] = "tparam_fuenterec";
	$edata["LookupConnId"] = "sep2_at_127_0_0_1";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "fuenterec_name";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "fuenterec_name";

	

	
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


	$tdata002_producto_fun["REC"] = $fdata;
		$tdata002_producto_fun[".searchableFields"][] = "REC";
//	OBJ-ESPECIFICO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "OBJ-ESPECIFICO";
	$fdata["GoodName"] = "OBJ_ESPECIFICO";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto_fun","OBJ_ESPECIFICO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "OBJ-ESPECIFICO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`OBJ-ESPECIFICO`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdata002_producto_fun["OBJ-ESPECIFICO"] = $fdata;
		$tdata002_producto_fun[".searchableFields"][] = "OBJ-ESPECIFICO";
//	INDICADORES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "INDICADORES";
	$fdata["GoodName"] = "INDICADORES";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto_fun","INDICADORES");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "INDICADORES";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "INDICADORES";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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
			$edata["EditParams"].= " maxlength=500";

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


	$tdata002_producto_fun["INDICADORES"] = $fdata;
		$tdata002_producto_fun[".searchableFields"][] = "INDICADORES";
//	PROD_PRESUPUESTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "PROD_PRESUPUESTO";
	$fdata["GoodName"] = "PROD_PRESUPUESTO";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto_fun","PROD_PRESUPUESTO");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "PROD_PRESUPUESTO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PROD_PRESUPUESTO";

	
	
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


	$tdata002_producto_fun["PROD_PRESUPUESTO"] = $fdata;
		$tdata002_producto_fun[".searchableFields"][] = "PROD_PRESUPUESTO";
//	SALDO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "SALDO";
	$fdata["GoodName"] = "SALDO";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto_fun","SALDO");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "SALDO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SALDO";

	
	
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


	$tdata002_producto_fun["SALDO"] = $fdata;
		$tdata002_producto_fun[".searchableFields"][] = "SALDO";
//	META
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "META";
	$fdata["GoodName"] = "META";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto_fun","META");
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


	$tdata002_producto_fun["META"] = $fdata;
		$tdata002_producto_fun[".searchableFields"][] = "META";
//	META_ANIO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "META_ANIO";
	$fdata["GoodName"] = "META_ANIO";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto_fun","META_ANIO");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "META_ANIO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "META_ANIO";

	
	
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


	$tdata002_producto_fun["META_ANIO"] = $fdata;
		$tdata002_producto_fun[".searchableFields"][] = "META_ANIO";
//	Dependencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Dependencia";
	$fdata["GoodName"] = "Dependencia";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto_fun","Dependencia");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Dependencia";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dependencia";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";

	

	
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


	$tdata002_producto_fun["Dependencia"] = $fdata;
		$tdata002_producto_fun[".searchableFields"][] = "Dependencia";
//	UsuarioResp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "UsuarioResp";
	$fdata["GoodName"] = "UsuarioResp";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto_fun","UsuarioResp");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "UsuarioResp";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UsuarioResp";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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

	

	
	$edata["LookupOrderBy"] = "usr_nombresfull";

	
	
	
	

	
	
	
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


	$tdata002_producto_fun["UsuarioResp"] = $fdata;
		$tdata002_producto_fun[".searchableFields"][] = "UsuarioResp";
//	TIPO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "TIPO";
	$fdata["GoodName"] = "TIPO";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto_fun","TIPO");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "TIPO";

	
	
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


	$tdata002_producto_fun["TIPO"] = $fdata;
		$tdata002_producto_fun[".searchableFields"][] = "TIPO";
//	UTILIZADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "UTILIZADO";
	$fdata["GoodName"] = "UTILIZADO";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto_fun","UTILIZADO");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "UTILIZADO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UTILIZADO";

	
	
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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata002_producto_fun["UTILIZADO"] = $fdata;
		$tdata002_producto_fun[".searchableFields"][] = "UTILIZADO";
//	sol_paa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "sol_paa";
	$fdata["GoodName"] = "sol_paa";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto_fun","sol_paa");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "sol_paa";

		$fdata["sourceSingle"] = "sol_paa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sol_paa";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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
	$edata["LookupTable"] = "tparam_sn";
	$edata["LookupConnId"] = "edl_at_127_0_0_1";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "estadosn_id";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "estadosn_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
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


	$tdata002_producto_fun["sol_paa"] = $fdata;
		$tdata002_producto_fun[".searchableFields"][] = "sol_paa";


$tables_data["002_producto_fun"]=&$tdata002_producto_fun;
$field_labels["002_producto_fun"] = &$fieldLabels002_producto_fun;
$fieldToolTips["002_producto_fun"] = &$fieldToolTips002_producto_fun;
$placeHolders["002_producto_fun"] = &$placeHolders002_producto_fun;
$page_titles["002_producto_fun"] = &$pageTitles002_producto_fun;


changeTextControlsToDate( "002_producto_fun" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["002_producto_fun"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["002_producto_fun"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="001_rubro";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="001_rubro_fun";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "001_rubro_fun";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["002_producto_fun"][0] = $masterParams;
				$masterTablesData["002_producto_fun"][0]["masterKeys"] = array();
	$masterTablesData["002_producto_fun"][0]["masterKeys"][]="RUBRO_ID";
				$masterTablesData["002_producto_fun"][0]["detailKeys"] = array();
	$masterTablesData["002_producto_fun"][0]["detailKeys"][]="RUBRO_ID_FK";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_002_producto_fun()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PROD_ID, RUBRO_ID_FK, VIGENCIA, UEJ, RUBRO, PRODUCTO, DESCRIPCION, FUENTE, REC, `OBJ-ESPECIFICO`, INDICADORES, PROD_PRESUPUESTO, SALDO, META, META_ANIO, Dependencia, UsuarioResp, TIPO, UTILIZADO, sol_paa";
$proto0["m_strFrom"] = "FROM `002_producto`";
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
	"m_strName" => "PROD_ID",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "002_producto_fun"
));

$proto6["m_sql"] = "PROD_ID";
$proto6["m_srcTableName"] = "002_producto_fun";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "RUBRO_ID_FK",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "002_producto_fun"
));

$proto8["m_sql"] = "RUBRO_ID_FK";
$proto8["m_srcTableName"] = "002_producto_fun";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "VIGENCIA",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "002_producto_fun"
));

$proto10["m_sql"] = "VIGENCIA";
$proto10["m_srcTableName"] = "002_producto_fun";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "UEJ",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "002_producto_fun"
));

$proto12["m_sql"] = "UEJ";
$proto12["m_srcTableName"] = "002_producto_fun";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "RUBRO",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "002_producto_fun"
));

$proto14["m_sql"] = "RUBRO";
$proto14["m_srcTableName"] = "002_producto_fun";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "PRODUCTO",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "002_producto_fun"
));

$proto16["m_sql"] = "PRODUCTO";
$proto16["m_srcTableName"] = "002_producto_fun";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "002_producto_fun"
));

$proto18["m_sql"] = "DESCRIPCION";
$proto18["m_srcTableName"] = "002_producto_fun";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "FUENTE",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "002_producto_fun"
));

$proto20["m_sql"] = "FUENTE";
$proto20["m_srcTableName"] = "002_producto_fun";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "REC",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "002_producto_fun"
));

$proto22["m_sql"] = "REC";
$proto22["m_srcTableName"] = "002_producto_fun";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "OBJ-ESPECIFICO",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "002_producto_fun"
));

$proto24["m_sql"] = "`OBJ-ESPECIFICO`";
$proto24["m_srcTableName"] = "002_producto_fun";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "INDICADORES",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "002_producto_fun"
));

$proto26["m_sql"] = "INDICADORES";
$proto26["m_srcTableName"] = "002_producto_fun";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "PROD_PRESUPUESTO",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "002_producto_fun"
));

$proto28["m_sql"] = "PROD_PRESUPUESTO";
$proto28["m_srcTableName"] = "002_producto_fun";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "SALDO",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "002_producto_fun"
));

$proto30["m_sql"] = "SALDO";
$proto30["m_srcTableName"] = "002_producto_fun";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "META",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "002_producto_fun"
));

$proto32["m_sql"] = "META";
$proto32["m_srcTableName"] = "002_producto_fun";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "META_ANIO",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "002_producto_fun"
));

$proto34["m_sql"] = "META_ANIO";
$proto34["m_srcTableName"] = "002_producto_fun";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Dependencia",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "002_producto_fun"
));

$proto36["m_sql"] = "Dependencia";
$proto36["m_srcTableName"] = "002_producto_fun";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "UsuarioResp",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "002_producto_fun"
));

$proto38["m_sql"] = "UsuarioResp";
$proto38["m_srcTableName"] = "002_producto_fun";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "002_producto_fun"
));

$proto40["m_sql"] = "TIPO";
$proto40["m_srcTableName"] = "002_producto_fun";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "UTILIZADO",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "002_producto_fun"
));

$proto42["m_sql"] = "UTILIZADO";
$proto42["m_srcTableName"] = "002_producto_fun";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "sol_paa",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "002_producto_fun"
));

$proto44["m_sql"] = "sol_paa";
$proto44["m_srcTableName"] = "002_producto_fun";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto46=array();
$proto46["m_link"] = "SQLL_MAIN";
			$proto47=array();
$proto47["m_strName"] = "002_producto";
$proto47["m_srcTableName"] = "002_producto_fun";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "PROD_ID";
$proto47["m_columns"][] = "RUBRO_ID_FK";
$proto47["m_columns"][] = "VIGENCIA";
$proto47["m_columns"][] = "UEJ";
$proto47["m_columns"][] = "PRODUCTO";
$proto47["m_columns"][] = "DESCRIPCION";
$proto47["m_columns"][] = "REC";
$proto47["m_columns"][] = "FUENTE";
$proto47["m_columns"][] = "OBJ-ESPECIFICO";
$proto47["m_columns"][] = "INDICADORES";
$proto47["m_columns"][] = "RUBRO";
$proto47["m_columns"][] = "PROD_PRESUPUESTO";
$proto47["m_columns"][] = "UTILIZADO";
$proto47["m_columns"][] = "SALDO";
$proto47["m_columns"][] = "META";
$proto47["m_columns"][] = "META_ANIO";
$proto47["m_columns"][] = "PROGRAMADO";
$proto47["m_columns"][] = "SALDO_PROG";
$proto47["m_columns"][] = "Dependencia";
$proto47["m_columns"][] = "UsuarioResp";
$proto47["m_columns"][] = "TIPO";
$proto47["m_columns"][] = "sol_paa";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "`002_producto`";
$proto46["m_alias"] = "";
$proto46["m_srcTableName"] = "002_producto_fun";
$proto48=array();
$proto48["m_sql"] = "";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="002_producto_fun";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_002_producto_fun = createSqlQuery_002_producto_fun();


	
										;

																				

$tdata002_producto_fun[".sqlquery"] = $queryData_002_producto_fun;



include_once(getabspath("include/002_producto_fun_events.php"));
$tdata002_producto_fun[".hasEvents"] = true;

?>