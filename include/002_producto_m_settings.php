<?php
$tdata002_producto_m = array();
$tdata002_producto_m[".searchableFields"] = array();
$tdata002_producto_m[".ShortName"] = "002_producto_m";
$tdata002_producto_m[".OwnerID"] = "UsuarioResp";
$tdata002_producto_m[".OriginalTable"] = "002_producto";


$tdata002_producto_m[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdata002_producto_m[".originalPagesByType"] = $tdata002_producto_m[".pagesByType"];
$tdata002_producto_m[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdata002_producto_m[".originalPages"] = $tdata002_producto_m[".pages"];
$tdata002_producto_m[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdata002_producto_m[".originalDefaultPages"] = $tdata002_producto_m[".defaultPages"];

//	field labels
$fieldLabels002_producto_m = array();
$fieldToolTips002_producto_m = array();
$pageTitles002_producto_m = array();
$placeHolders002_producto_m = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabels002_producto_m["Spanish"] = array();
	$fieldToolTips002_producto_m["Spanish"] = array();
	$placeHolders002_producto_m["Spanish"] = array();
	$pageTitles002_producto_m["Spanish"] = array();
	$fieldLabels002_producto_m["Spanish"]["PROD_ID"] = "PROD ID";
	$fieldToolTips002_producto_m["Spanish"]["PROD_ID"] = "";
	$placeHolders002_producto_m["Spanish"]["PROD_ID"] = "";
	$fieldLabels002_producto_m["Spanish"]["RUBRO_ID_FK"] = "Cod";
	$fieldToolTips002_producto_m["Spanish"]["RUBRO_ID_FK"] = "";
	$placeHolders002_producto_m["Spanish"]["RUBRO_ID_FK"] = "";
	$fieldLabels002_producto_m["Spanish"]["VIGENCIA"] = "Vigencia";
	$fieldToolTips002_producto_m["Spanish"]["VIGENCIA"] = "";
	$placeHolders002_producto_m["Spanish"]["VIGENCIA"] = "";
	$fieldLabels002_producto_m["Spanish"]["TIPO"] = "Tipo";
	$fieldToolTips002_producto_m["Spanish"]["TIPO"] = "";
	$placeHolders002_producto_m["Spanish"]["TIPO"] = "";
	$fieldLabels002_producto_m["Spanish"]["UEJ"] = "UEJ";
	$fieldToolTips002_producto_m["Spanish"]["UEJ"] = "";
	$placeHolders002_producto_m["Spanish"]["UEJ"] = "";
	$fieldLabels002_producto_m["Spanish"]["RUBRO"] = "Rubro";
	$fieldToolTips002_producto_m["Spanish"]["RUBRO"] = "";
	$placeHolders002_producto_m["Spanish"]["RUBRO"] = "";
	$fieldLabels002_producto_m["Spanish"]["PRODUCTO"] = "Cod. Producto";
	$fieldToolTips002_producto_m["Spanish"]["PRODUCTO"] = "";
	$placeHolders002_producto_m["Spanish"]["PRODUCTO"] = "";
	$fieldLabels002_producto_m["Spanish"]["FUENTE"] = "Fuente";
	$fieldToolTips002_producto_m["Spanish"]["FUENTE"] = "";
	$placeHolders002_producto_m["Spanish"]["FUENTE"] = "";
	$fieldLabels002_producto_m["Spanish"]["REC"] = "REC";
	$fieldToolTips002_producto_m["Spanish"]["REC"] = "";
	$placeHolders002_producto_m["Spanish"]["REC"] = "";
	$fieldLabels002_producto_m["Spanish"]["DESCRIPCION"] = "Nombre del producto";
	$fieldToolTips002_producto_m["Spanish"]["DESCRIPCION"] = "";
	$placeHolders002_producto_m["Spanish"]["DESCRIPCION"] = "";
	$fieldLabels002_producto_m["Spanish"]["PROD_PRESUPUESTO"] = "Presupuesto asignado";
	$fieldToolTips002_producto_m["Spanish"]["PROD_PRESUPUESTO"] = "";
	$placeHolders002_producto_m["Spanish"]["PROD_PRESUPUESTO"] = "";
	$fieldLabels002_producto_m["Spanish"]["Dependencia"] = "Dependencia";
	$fieldToolTips002_producto_m["Spanish"]["Dependencia"] = "";
	$placeHolders002_producto_m["Spanish"]["Dependencia"] = "";
	$fieldLabels002_producto_m["Spanish"]["UsuarioResp"] = "Gestor";
	$fieldToolTips002_producto_m["Spanish"]["UsuarioResp"] = "";
	$placeHolders002_producto_m["Spanish"]["UsuarioResp"] = "";
	$fieldLabels002_producto_m["Spanish"]["META"] = "Meta Global";
	$fieldToolTips002_producto_m["Spanish"]["META"] = "";
	$placeHolders002_producto_m["Spanish"]["META"] = "";
	$fieldLabels002_producto_m["Spanish"]["SALDO"] = "Saldo";
	$fieldToolTips002_producto_m["Spanish"]["SALDO"] = "";
	$placeHolders002_producto_m["Spanish"]["SALDO"] = "";
	$fieldLabels002_producto_m["Spanish"]["OBJ_ESPECIFICO"] = "Objetivo específico";
	$fieldToolTips002_producto_m["Spanish"]["OBJ_ESPECIFICO"] = "";
	$placeHolders002_producto_m["Spanish"]["OBJ_ESPECIFICO"] = "";
	$fieldLabels002_producto_m["Spanish"]["INDICADORES"] = "Indicadores";
	$fieldToolTips002_producto_m["Spanish"]["INDICADORES"] = "";
	$placeHolders002_producto_m["Spanish"]["INDICADORES"] = "";
	$fieldLabels002_producto_m["Spanish"]["META_ANIO"] = "Meta año";
	$fieldToolTips002_producto_m["Spanish"]["META_ANIO"] = "";
	$placeHolders002_producto_m["Spanish"]["META_ANIO"] = "";
	$fieldLabels002_producto_m["Spanish"]["UTILIZADO"] = "Programado";
	$fieldToolTips002_producto_m["Spanish"]["UTILIZADO"] = "";
	$placeHolders002_producto_m["Spanish"]["UTILIZADO"] = "";
	$fieldLabels002_producto_m["Spanish"]["RUBRO1"] = "Rubro";
	$fieldToolTips002_producto_m["Spanish"]["RUBRO1"] = "";
	$placeHolders002_producto_m["Spanish"]["RUBRO1"] = "";
	$fieldLabels002_producto_m["Spanish"]["DESCRIPCION1"] = "Descripcioón del Rubro";
	$fieldToolTips002_producto_m["Spanish"]["DESCRIPCION1"] = "";
	$placeHolders002_producto_m["Spanish"]["DESCRIPCION1"] = "";
	$fieldLabels002_producto_m["Spanish"]["REC1"] = "Fuente de recursos";
	$fieldToolTips002_producto_m["Spanish"]["REC1"] = "";
	$placeHolders002_producto_m["Spanish"]["REC1"] = "";
	$fieldLabels002_producto_m["Spanish"]["PRESUPUESTO"] = "Presupuesto asignado";
	$fieldToolTips002_producto_m["Spanish"]["PRESUPUESTO"] = "";
	$placeHolders002_producto_m["Spanish"]["PRESUPUESTO"] = "";
	$pageTitles002_producto_m["Spanish"]["view"] = "ID: {%PROD_ID}";
	if (count($fieldToolTips002_producto_m["Spanish"]))
		$tdata002_producto_m[".isUseToolTips"] = true;
}


	$tdata002_producto_m[".NCSearch"] = true;



$tdata002_producto_m[".shortTableName"] = "002_producto_m";
$tdata002_producto_m[".nSecOptions"] = 1;

$tdata002_producto_m[".mainTableOwnerID"] = "UsuarioResp";
$tdata002_producto_m[".entityType"] = 1;
$tdata002_producto_m[".connId"] = "sep2_at_127_0_0_1";


$tdata002_producto_m[".strOriginalTableName"] = "002_producto";

	



$tdata002_producto_m[".showAddInPopup"] = false;

$tdata002_producto_m[".showEditInPopup"] = false;

$tdata002_producto_m[".showViewInPopup"] = false;

$tdata002_producto_m[".listAjax"] = false;
//	temporary
//$tdata002_producto_m[".listAjax"] = false;

	$tdata002_producto_m[".audit"] = true;

	$tdata002_producto_m[".locking"] = true;


$pages = $tdata002_producto_m[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdata002_producto_m[".edit"] = true;
	$tdata002_producto_m[".afterEditAction"] = 0;
	$tdata002_producto_m[".closePopupAfterEdit"] = 1;
	$tdata002_producto_m[".afterEditActionDetTable"] = "003_actividad";
}

if( $pages[PAGE_ADD] ) {
$tdata002_producto_m[".add"] = true;
$tdata002_producto_m[".afterAddAction"] = 0;
$tdata002_producto_m[".closePopupAfterAdd"] = 1;
$tdata002_producto_m[".afterAddActionDetTable"] = "003_actividad";
}

if( $pages[PAGE_LIST] ) {
	$tdata002_producto_m[".list"] = true;
}



$tdata002_producto_m[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdata002_producto_m[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdata002_producto_m[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdata002_producto_m[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdata002_producto_m[".printFriendly"] = true;
}



$tdata002_producto_m[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdata002_producto_m[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdata002_producto_m[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdata002_producto_m[".isUseAjaxSuggest"] = true;



												

$tdata002_producto_m[".ajaxCodeSnippetAdded"] = false;

$tdata002_producto_m[".buttonsAdded"] = false;

$tdata002_producto_m[".addPageEvents"] = false;

// use timepicker for search panel
$tdata002_producto_m[".isUseTimeForSearch"] = false;


$tdata002_producto_m[".badgeColor"] = "E67349";


$tdata002_producto_m[".allSearchFields"] = array();
$tdata002_producto_m[".filterFields"] = array();
$tdata002_producto_m[".requiredSearchFields"] = array();

$tdata002_producto_m[".googleLikeFields"] = array();
$tdata002_producto_m[".googleLikeFields"][] = "PROD_ID";
$tdata002_producto_m[".googleLikeFields"][] = "RUBRO_ID_FK";
$tdata002_producto_m[".googleLikeFields"][] = "VIGENCIA";
$tdata002_producto_m[".googleLikeFields"][] = "UEJ";
$tdata002_producto_m[".googleLikeFields"][] = "RUBRO";
$tdata002_producto_m[".googleLikeFields"][] = "PRODUCTO";
$tdata002_producto_m[".googleLikeFields"][] = "DESCRIPCION";
$tdata002_producto_m[".googleLikeFields"][] = "FUENTE";
$tdata002_producto_m[".googleLikeFields"][] = "REC";
$tdata002_producto_m[".googleLikeFields"][] = "OBJ-ESPECIFICO";
$tdata002_producto_m[".googleLikeFields"][] = "INDICADORES";
$tdata002_producto_m[".googleLikeFields"][] = "PROD_PRESUPUESTO";
$tdata002_producto_m[".googleLikeFields"][] = "SALDO";
$tdata002_producto_m[".googleLikeFields"][] = "META";
$tdata002_producto_m[".googleLikeFields"][] = "META_ANIO";
$tdata002_producto_m[".googleLikeFields"][] = "Dependencia";
$tdata002_producto_m[".googleLikeFields"][] = "UsuarioResp";
$tdata002_producto_m[".googleLikeFields"][] = "TIPO";
$tdata002_producto_m[".googleLikeFields"][] = "UTILIZADO";
$tdata002_producto_m[".googleLikeFields"][] = "RUBRO1";
$tdata002_producto_m[".googleLikeFields"][] = "DESCRIPCION1";
$tdata002_producto_m[".googleLikeFields"][] = "REC1";
$tdata002_producto_m[".googleLikeFields"][] = "PRESUPUESTO";



$tdata002_producto_m[".tableType"] = "list";

$tdata002_producto_m[".printerPageOrientation"] = 0;
$tdata002_producto_m[".nPrinterPageScale"] = 100;

$tdata002_producto_m[".nPrinterSplitRecords"] = 40;

$tdata002_producto_m[".geocodingEnabled"] = false;










$tdata002_producto_m[".pageSize"] = 20;

$tdata002_producto_m[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdata002_producto_m[".strOrderBy"] = $tstrOrderBy;

$tdata002_producto_m[".orderindexes"] = array();


$tdata002_producto_m[".sqlHead"] = "SELECT `002_producto`.PROD_ID, `002_producto`.RUBRO_ID_FK, `002_producto`.VIGENCIA, `002_producto`.UEJ, `002_producto`.RUBRO, `002_producto`.PRODUCTO, `002_producto`.DESCRIPCION, `002_producto`.FUENTE, `002_producto`.REC, `002_producto`.`OBJ-ESPECIFICO`, `002_producto`.INDICADORES, `002_producto`.PROD_PRESUPUESTO, `002_producto`.SALDO, `002_producto`.META, `002_producto`.META_ANIO, `002_producto`.Dependencia, `002_producto`.UsuarioResp, `002_producto`.TIPO, `002_producto`.UTILIZADO, `001_rubro`.RUBRO AS RUBRO1, `001_rubro`.DESCRIPCION AS DESCRIPCION1, `001_rubro`.REC AS REC1, `001_rubro`.PRESUPUESTO";
$tdata002_producto_m[".sqlFrom"] = "FROM `002_producto` INNER JOIN `001_rubro` ON `002_producto`.RUBRO_ID_FK = `001_rubro`.RUBRO_ID";
$tdata002_producto_m[".sqlWhereExpr"] = "";
$tdata002_producto_m[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "0",
	'name' => "PROYECTOS DE INVERSIÓN",
	'nameType' => 'Text',
	'where' => "`002_producto`.TIPO = '1'",
	'showRowCount' => 1,
	'hideEmpty' => 1,
);
$arrGridTabs[] = array(
	'tabId' => "1",
	'name' => "FUNCIONAMIENTO",
	'nameType' => 'Text',
	'where' => "`002_producto`.TIPO = '2'",
	'showRowCount' => 1,
	'hideEmpty' => 1,
);
$tdata002_producto_m[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata002_producto_m[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata002_producto_m[".arrGroupsPerPage"] = $arrGPP;

$tdata002_producto_m[".highlightSearchResults"] = true;

$tableKeys002_producto_m = array();
$tableKeys002_producto_m[] = "PROD_ID";
$tdata002_producto_m[".Keys"] = $tableKeys002_producto_m;


$tdata002_producto_m[".hideMobileList"] = array();




//	PROD_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PROD_ID";
	$fdata["GoodName"] = "PROD_ID";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto_m","PROD_ID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "PROD_ID";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`002_producto`.PROD_ID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdata002_producto_m["PROD_ID"] = $fdata;
		$tdata002_producto_m[".searchableFields"][] = "PROD_ID";
//	RUBRO_ID_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "RUBRO_ID_FK";
	$fdata["GoodName"] = "RUBRO_ID_FK";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto_m","RUBRO_ID_FK");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "RUBRO_ID_FK";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`002_producto`.RUBRO_ID_FK";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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
	$edata["LookupTable"] = "001_rubro";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"VIGENCIA", 'lookupF'=>"VIGENCIA");
	$edata["autoCompleteFields"][] = array('masterF'=>"UEJ", 'lookupF'=>"UEJ");
	$edata["autoCompleteFields"][] = array('masterF'=>"RUBRO", 'lookupF'=>"RUBRO");
	$edata["autoCompleteFields"][] = array('masterF'=>"FUENTE", 'lookupF'=>"FUENTE");
	$edata["autoCompleteFields"][] = array('masterF'=>"Dependencia", 'lookupF'=>"Dependencia");
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


	$tdata002_producto_m["RUBRO_ID_FK"] = $fdata;
		$tdata002_producto_m[".searchableFields"][] = "RUBRO_ID_FK";
//	VIGENCIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "VIGENCIA";
	$fdata["GoodName"] = "VIGENCIA";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto_m","VIGENCIA");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "VIGENCIA";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`002_producto`.VIGENCIA";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdata002_producto_m["VIGENCIA"] = $fdata;
		$tdata002_producto_m[".searchableFields"][] = "VIGENCIA";
//	UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "UEJ";
	$fdata["GoodName"] = "UEJ";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto_m","UEJ");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "UEJ";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`002_producto`.UEJ";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdata002_producto_m["UEJ"] = $fdata;
		$tdata002_producto_m[".searchableFields"][] = "UEJ";
//	RUBRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "RUBRO";
	$fdata["GoodName"] = "RUBRO";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto_m","RUBRO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "RUBRO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`002_producto`.RUBRO";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdata002_producto_m["RUBRO"] = $fdata;
		$tdata002_producto_m[".searchableFields"][] = "RUBRO";
//	PRODUCTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "PRODUCTO";
	$fdata["GoodName"] = "PRODUCTO";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto_m","PRODUCTO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PRODUCTO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`002_producto`.PRODUCTO";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "PROD_ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata002_producto_m["PRODUCTO"] = $fdata;
		$tdata002_producto_m[".searchableFields"][] = "PRODUCTO";
//	DESCRIPCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DESCRIPCION";
	$fdata["GoodName"] = "DESCRIPCION";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto_m","DESCRIPCION");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DESCRIPCION";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`002_producto`.DESCRIPCION";

	
	
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


	$tdata002_producto_m["DESCRIPCION"] = $fdata;
		$tdata002_producto_m[".searchableFields"][] = "DESCRIPCION";
//	FUENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "FUENTE";
	$fdata["GoodName"] = "FUENTE";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto_m","FUENTE");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "FUENTE";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`002_producto`.FUENTE";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdata002_producto_m["FUENTE"] = $fdata;
		$tdata002_producto_m[".searchableFields"][] = "FUENTE";
//	REC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "REC";
	$fdata["GoodName"] = "REC";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto_m","REC");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "REC";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`002_producto`.REC";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdata002_producto_m["REC"] = $fdata;
		$tdata002_producto_m[".searchableFields"][] = "REC";
//	OBJ-ESPECIFICO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "OBJ-ESPECIFICO";
	$fdata["GoodName"] = "OBJ_ESPECIFICO";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto_m","OBJ_ESPECIFICO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "OBJ-ESPECIFICO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`002_producto`.`OBJ-ESPECIFICO`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdata002_producto_m["OBJ-ESPECIFICO"] = $fdata;
		$tdata002_producto_m[".searchableFields"][] = "OBJ-ESPECIFICO";
//	INDICADORES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "INDICADORES";
	$fdata["GoodName"] = "INDICADORES";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto_m","INDICADORES");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "INDICADORES";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`002_producto`.INDICADORES";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdata002_producto_m["INDICADORES"] = $fdata;
		$tdata002_producto_m[".searchableFields"][] = "INDICADORES";
//	PROD_PRESUPUESTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "PROD_PRESUPUESTO";
	$fdata["GoodName"] = "PROD_PRESUPUESTO";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto_m","PROD_PRESUPUESTO");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "PROD_PRESUPUESTO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`002_producto`.PROD_PRESUPUESTO";

	
	
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


	$tdata002_producto_m["PROD_PRESUPUESTO"] = $fdata;
		$tdata002_producto_m[".searchableFields"][] = "PROD_PRESUPUESTO";
//	SALDO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "SALDO";
	$fdata["GoodName"] = "SALDO";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto_m","SALDO");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "SALDO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`002_producto`.SALDO";

	
	
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


	$tdata002_producto_m["SALDO"] = $fdata;
		$tdata002_producto_m[".searchableFields"][] = "SALDO";
//	META
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "META";
	$fdata["GoodName"] = "META";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto_m","META");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "META";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`002_producto`.META";

	
	
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


	$tdata002_producto_m["META"] = $fdata;
		$tdata002_producto_m[".searchableFields"][] = "META";
//	META_ANIO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "META_ANIO";
	$fdata["GoodName"] = "META_ANIO";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto_m","META_ANIO");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "META_ANIO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`002_producto`.META_ANIO";

	
	
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


	$tdata002_producto_m["META_ANIO"] = $fdata;
		$tdata002_producto_m[".searchableFields"][] = "META_ANIO";
//	Dependencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Dependencia";
	$fdata["GoodName"] = "Dependencia";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto_m","Dependencia");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Dependencia";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`002_producto`.Dependencia";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
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


	$tdata002_producto_m["Dependencia"] = $fdata;
		$tdata002_producto_m[".searchableFields"][] = "Dependencia";
//	UsuarioResp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "UsuarioResp";
	$fdata["GoodName"] = "UsuarioResp";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto_m","UsuarioResp");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "UsuarioResp";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`002_producto`.UsuarioResp";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdata002_producto_m["UsuarioResp"] = $fdata;
		$tdata002_producto_m[".searchableFields"][] = "UsuarioResp";
//	TIPO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "TIPO";
	$fdata["GoodName"] = "TIPO";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto_m","TIPO");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "TIPO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`002_producto`.TIPO";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdata002_producto_m["TIPO"] = $fdata;
		$tdata002_producto_m[".searchableFields"][] = "TIPO";
//	UTILIZADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "UTILIZADO";
	$fdata["GoodName"] = "UTILIZADO";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto_m","UTILIZADO");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "UTILIZADO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`002_producto`.UTILIZADO";

	
	
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


	$tdata002_producto_m["UTILIZADO"] = $fdata;
		$tdata002_producto_m[".searchableFields"][] = "UTILIZADO";
//	RUBRO1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "RUBRO1";
	$fdata["GoodName"] = "RUBRO1";
	$fdata["ownerTable"] = "001_rubro";
	$fdata["Label"] = GetFieldLabel("002_producto_m","RUBRO1");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "RUBRO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`001_rubro`.RUBRO";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdata002_producto_m["RUBRO1"] = $fdata;
		$tdata002_producto_m[".searchableFields"][] = "RUBRO1";
//	DESCRIPCION1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "DESCRIPCION1";
	$fdata["GoodName"] = "DESCRIPCION1";
	$fdata["ownerTable"] = "001_rubro";
	$fdata["Label"] = GetFieldLabel("002_producto_m","DESCRIPCION1");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DESCRIPCION";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`001_rubro`.DESCRIPCION";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdata002_producto_m["DESCRIPCION1"] = $fdata;
		$tdata002_producto_m[".searchableFields"][] = "DESCRIPCION1";
//	REC1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "REC1";
	$fdata["GoodName"] = "REC1";
	$fdata["ownerTable"] = "001_rubro";
	$fdata["Label"] = GetFieldLabel("002_producto_m","REC1");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "REC";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`001_rubro`.REC";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdata002_producto_m["REC1"] = $fdata;
		$tdata002_producto_m[".searchableFields"][] = "REC1";
//	PRESUPUESTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "PRESUPUESTO";
	$fdata["GoodName"] = "PRESUPUESTO";
	$fdata["ownerTable"] = "001_rubro";
	$fdata["Label"] = GetFieldLabel("002_producto_m","PRESUPUESTO");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "PRESUPUESTO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`001_rubro`.PRESUPUESTO";

	
	
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


	$tdata002_producto_m["PRESUPUESTO"] = $fdata;
		$tdata002_producto_m[".searchableFields"][] = "PRESUPUESTO";


$tables_data["002_producto_m"]=&$tdata002_producto_m;
$field_labels["002_producto_m"] = &$fieldLabels002_producto_m;
$fieldToolTips["002_producto_m"] = &$fieldToolTips002_producto_m;
$placeHolders["002_producto_m"] = &$placeHolders002_producto_m;
$page_titles["002_producto_m"] = &$pageTitles002_producto_m;


changeTextControlsToDate( "002_producto_m" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["002_producto_m"] = array();
//	002_producto_mod
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="002_producto_mod";
		$detailsParam["dOriginalTable"] = "002_producto_mod";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "002_producto_mod";
	$detailsParam["dCaptionTable"] = GetTableCaption("002_producto_mod");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["002_producto_m"][$dIndex] = $detailsParam;

	
		$detailsTablesData["002_producto_m"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["002_producto_m"][$dIndex]["masterKeys"][]="PROD_ID";

				$detailsTablesData["002_producto_m"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["002_producto_m"][$dIndex]["detailKeys"][]="prod_id_fk";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["002_producto_m"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_002_producto_m()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`002_producto`.PROD_ID, `002_producto`.RUBRO_ID_FK, `002_producto`.VIGENCIA, `002_producto`.UEJ, `002_producto`.RUBRO, `002_producto`.PRODUCTO, `002_producto`.DESCRIPCION, `002_producto`.FUENTE, `002_producto`.REC, `002_producto`.`OBJ-ESPECIFICO`, `002_producto`.INDICADORES, `002_producto`.PROD_PRESUPUESTO, `002_producto`.SALDO, `002_producto`.META, `002_producto`.META_ANIO, `002_producto`.Dependencia, `002_producto`.UsuarioResp, `002_producto`.TIPO, `002_producto`.UTILIZADO, `001_rubro`.RUBRO AS RUBRO1, `001_rubro`.DESCRIPCION AS DESCRIPCION1, `001_rubro`.REC AS REC1, `001_rubro`.PRESUPUESTO";
$proto0["m_strFrom"] = "FROM `002_producto` INNER JOIN `001_rubro` ON `002_producto`.RUBRO_ID_FK = `001_rubro`.RUBRO_ID";
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
	"m_srcTableName" => "002_producto_m"
));

$proto6["m_sql"] = "`002_producto`.PROD_ID";
$proto6["m_srcTableName"] = "002_producto_m";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "RUBRO_ID_FK",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "002_producto_m"
));

$proto8["m_sql"] = "`002_producto`.RUBRO_ID_FK";
$proto8["m_srcTableName"] = "002_producto_m";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "VIGENCIA",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "002_producto_m"
));

$proto10["m_sql"] = "`002_producto`.VIGENCIA";
$proto10["m_srcTableName"] = "002_producto_m";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "UEJ",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "002_producto_m"
));

$proto12["m_sql"] = "`002_producto`.UEJ";
$proto12["m_srcTableName"] = "002_producto_m";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "RUBRO",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "002_producto_m"
));

$proto14["m_sql"] = "`002_producto`.RUBRO";
$proto14["m_srcTableName"] = "002_producto_m";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "PRODUCTO",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "002_producto_m"
));

$proto16["m_sql"] = "`002_producto`.PRODUCTO";
$proto16["m_srcTableName"] = "002_producto_m";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "002_producto_m"
));

$proto18["m_sql"] = "`002_producto`.DESCRIPCION";
$proto18["m_srcTableName"] = "002_producto_m";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "FUENTE",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "002_producto_m"
));

$proto20["m_sql"] = "`002_producto`.FUENTE";
$proto20["m_srcTableName"] = "002_producto_m";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "REC",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "002_producto_m"
));

$proto22["m_sql"] = "`002_producto`.REC";
$proto22["m_srcTableName"] = "002_producto_m";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "OBJ-ESPECIFICO",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "002_producto_m"
));

$proto24["m_sql"] = "`002_producto`.`OBJ-ESPECIFICO`";
$proto24["m_srcTableName"] = "002_producto_m";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "INDICADORES",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "002_producto_m"
));

$proto26["m_sql"] = "`002_producto`.INDICADORES";
$proto26["m_srcTableName"] = "002_producto_m";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "PROD_PRESUPUESTO",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "002_producto_m"
));

$proto28["m_sql"] = "`002_producto`.PROD_PRESUPUESTO";
$proto28["m_srcTableName"] = "002_producto_m";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "SALDO",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "002_producto_m"
));

$proto30["m_sql"] = "`002_producto`.SALDO";
$proto30["m_srcTableName"] = "002_producto_m";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "META",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "002_producto_m"
));

$proto32["m_sql"] = "`002_producto`.META";
$proto32["m_srcTableName"] = "002_producto_m";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "META_ANIO",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "002_producto_m"
));

$proto34["m_sql"] = "`002_producto`.META_ANIO";
$proto34["m_srcTableName"] = "002_producto_m";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Dependencia",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "002_producto_m"
));

$proto36["m_sql"] = "`002_producto`.Dependencia";
$proto36["m_srcTableName"] = "002_producto_m";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "UsuarioResp",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "002_producto_m"
));

$proto38["m_sql"] = "`002_producto`.UsuarioResp";
$proto38["m_srcTableName"] = "002_producto_m";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "002_producto_m"
));

$proto40["m_sql"] = "`002_producto`.TIPO";
$proto40["m_srcTableName"] = "002_producto_m";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "UTILIZADO",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "002_producto_m"
));

$proto42["m_sql"] = "`002_producto`.UTILIZADO";
$proto42["m_srcTableName"] = "002_producto_m";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "RUBRO",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "002_producto_m"
));

$proto44["m_sql"] = "`001_rubro`.RUBRO";
$proto44["m_srcTableName"] = "002_producto_m";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "RUBRO1";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "002_producto_m"
));

$proto46["m_sql"] = "`001_rubro`.DESCRIPCION";
$proto46["m_srcTableName"] = "002_producto_m";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "DESCRIPCION1";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "REC",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "002_producto_m"
));

$proto48["m_sql"] = "`001_rubro`.REC";
$proto48["m_srcTableName"] = "002_producto_m";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "REC1";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "PRESUPUESTO",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "002_producto_m"
));

$proto50["m_sql"] = "`001_rubro`.PRESUPUESTO";
$proto50["m_srcTableName"] = "002_producto_m";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto52=array();
$proto52["m_link"] = "SQLL_MAIN";
			$proto53=array();
$proto53["m_strName"] = "002_producto";
$proto53["m_srcTableName"] = "002_producto_m";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "PROD_ID";
$proto53["m_columns"][] = "RUBRO_ID_FK";
$proto53["m_columns"][] = "VIGENCIA";
$proto53["m_columns"][] = "UEJ";
$proto53["m_columns"][] = "PRODUCTO";
$proto53["m_columns"][] = "DESCRIPCION";
$proto53["m_columns"][] = "REC";
$proto53["m_columns"][] = "FUENTE";
$proto53["m_columns"][] = "OBJ-ESPECIFICO";
$proto53["m_columns"][] = "INDICADORES";
$proto53["m_columns"][] = "RUBRO";
$proto53["m_columns"][] = "PROD_PRESUPUESTO";
$proto53["m_columns"][] = "UTILIZADO";
$proto53["m_columns"][] = "SALDO";
$proto53["m_columns"][] = "META";
$proto53["m_columns"][] = "META_ANIO";
$proto53["m_columns"][] = "PROGRAMADO";
$proto53["m_columns"][] = "SALDO_PROG";
$proto53["m_columns"][] = "Dependencia";
$proto53["m_columns"][] = "UsuarioResp";
$proto53["m_columns"][] = "TIPO";
$proto53["m_columns"][] = "sol_paa";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "`002_producto`";
$proto52["m_alias"] = "";
$proto52["m_srcTableName"] = "002_producto_m";
$proto54=array();
$proto54["m_sql"] = "";
$proto54["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
$proto54["m_strCase"] = "";
$proto54["m_havingmode"] = false;
$proto54["m_inBrackets"] = false;
$proto54["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto54);

$proto52["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto52);

$proto0["m_fromlist"][]=$obj;
												$proto56=array();
$proto56["m_link"] = "SQLL_INNERJOIN";
			$proto57=array();
$proto57["m_strName"] = "001_rubro";
$proto57["m_srcTableName"] = "002_producto_m";
$proto57["m_columns"] = array();
$proto57["m_columns"][] = "RUBRO_ID";
$proto57["m_columns"][] = "RUBRO_ID_FK";
$proto57["m_columns"][] = "VIGENCIA";
$proto57["m_columns"][] = "UEJ";
$proto57["m_columns"][] = "RUBRO";
$proto57["m_columns"][] = "DESCRIPCION";
$proto57["m_columns"][] = "REC";
$proto57["m_columns"][] = "FUENTE";
$proto57["m_columns"][] = "PRESUPUESTO";
$proto57["m_columns"][] = "TIPO";
$proto57["m_columns"][] = "TIPO_FUENTE";
$proto57["m_columns"][] = "BPIN";
$proto57["m_columns"][] = "UTILIZADO";
$proto57["m_columns"][] = "SALDO";
$proto57["m_columns"][] = "Dependencia";
$proto57["m_columns"][] = "UsuarioResp";
$proto57["m_columns"][] = "CATEGORIA";
$proto57["m_columns"][] = "OBJ_GENERAL";
$proto57["m_columns"][] = "OBJ_ESPECIFICO";
$proto57["m_columns"][] = "HabilitaPAA";
$obj = new SQLTable($proto57);

$proto56["m_table"] = $obj;
$proto56["m_sql"] = "INNER JOIN `001_rubro` ON `002_producto`.RUBRO_ID_FK = `001_rubro`.RUBRO_ID";
$proto56["m_alias"] = "";
$proto56["m_srcTableName"] = "002_producto_m";
$proto58=array();
$proto58["m_sql"] = "`001_rubro`.RUBRO_ID = `002_producto`.RUBRO_ID_FK";
$proto58["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "RUBRO_ID",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "002_producto_m"
));

$proto58["m_column"]=$obj;
$proto58["m_contained"] = array();
$proto58["m_strCase"] = "= `002_producto`.RUBRO_ID_FK";
$proto58["m_havingmode"] = false;
$proto58["m_inBrackets"] = false;
$proto58["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto58);

$proto56["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto56);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="002_producto_m";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_002_producto_m = createSqlQuery_002_producto_m();


	
										;

																							

$tdata002_producto_m[".sqlquery"] = $queryData_002_producto_m;



include_once(getabspath("include/002_producto_m_events.php"));
$tdata002_producto_m[".hasEvents"] = true;

?>