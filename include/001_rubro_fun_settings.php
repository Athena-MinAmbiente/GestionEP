<?php
$tdata001_rubro_fun = array();
$tdata001_rubro_fun[".searchableFields"] = array();
$tdata001_rubro_fun[".ShortName"] = "001_rubro_fun";
$tdata001_rubro_fun[".OwnerID"] = "Dependencia";
$tdata001_rubro_fun[".OriginalTable"] = "001_rubro";


$tdata001_rubro_fun[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdata001_rubro_fun[".originalPagesByType"] = $tdata001_rubro_fun[".pagesByType"];
$tdata001_rubro_fun[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdata001_rubro_fun[".originalPages"] = $tdata001_rubro_fun[".pages"];
$tdata001_rubro_fun[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdata001_rubro_fun[".originalDefaultPages"] = $tdata001_rubro_fun[".defaultPages"];

//	field labels
$fieldLabels001_rubro_fun = array();
$fieldToolTips001_rubro_fun = array();
$pageTitles001_rubro_fun = array();
$placeHolders001_rubro_fun = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabels001_rubro_fun["Spanish"] = array();
	$fieldToolTips001_rubro_fun["Spanish"] = array();
	$placeHolders001_rubro_fun["Spanish"] = array();
	$pageTitles001_rubro_fun["Spanish"] = array();
	$fieldLabels001_rubro_fun["Spanish"]["RUBRO_ID"] = "RUBRO ID";
	$fieldToolTips001_rubro_fun["Spanish"]["RUBRO_ID"] = "";
	$placeHolders001_rubro_fun["Spanish"]["RUBRO_ID"] = "";
	$fieldLabels001_rubro_fun["Spanish"]["VIGENCIA"] = "Vigencia";
	$fieldToolTips001_rubro_fun["Spanish"]["VIGENCIA"] = "";
	$placeHolders001_rubro_fun["Spanish"]["VIGENCIA"] = "";
	$fieldLabels001_rubro_fun["Spanish"]["TIPO"] = "TIPO";
	$fieldToolTips001_rubro_fun["Spanish"]["TIPO"] = "";
	$placeHolders001_rubro_fun["Spanish"]["TIPO"] = "";
	$fieldLabels001_rubro_fun["Spanish"]["UEJ"] = "UEJ";
	$fieldToolTips001_rubro_fun["Spanish"]["UEJ"] = "";
	$placeHolders001_rubro_fun["Spanish"]["UEJ"] = "";
	$fieldLabels001_rubro_fun["Spanish"]["RUBRO"] = "Rubro";
	$fieldToolTips001_rubro_fun["Spanish"]["RUBRO"] = "";
	$placeHolders001_rubro_fun["Spanish"]["RUBRO"] = "";
	$fieldLabels001_rubro_fun["Spanish"]["BPIN"] = "Código BPIN";
	$fieldToolTips001_rubro_fun["Spanish"]["BPIN"] = "";
	$placeHolders001_rubro_fun["Spanish"]["BPIN"] = "";
	$fieldLabels001_rubro_fun["Spanish"]["REC"] = "REC";
	$fieldToolTips001_rubro_fun["Spanish"]["REC"] = "";
	$placeHolders001_rubro_fun["Spanish"]["REC"] = "";
	$fieldLabels001_rubro_fun["Spanish"]["FUENTE"] = "Fuente";
	$fieldToolTips001_rubro_fun["Spanish"]["FUENTE"] = "";
	$placeHolders001_rubro_fun["Spanish"]["FUENTE"] = "";
	$fieldLabels001_rubro_fun["Spanish"]["PRESUPUESTO"] = "Presupuesto";
	$fieldToolTips001_rubro_fun["Spanish"]["PRESUPUESTO"] = "";
	$placeHolders001_rubro_fun["Spanish"]["PRESUPUESTO"] = "";
	$fieldLabels001_rubro_fun["Spanish"]["Dependencia"] = "Dirección | Dependencia";
	$fieldToolTips001_rubro_fun["Spanish"]["Dependencia"] = "";
	$placeHolders001_rubro_fun["Spanish"]["Dependencia"] = "";
	$fieldLabels001_rubro_fun["Spanish"]["UsuarioResp"] = "Gestor";
	$fieldToolTips001_rubro_fun["Spanish"]["UsuarioResp"] = "";
	$placeHolders001_rubro_fun["Spanish"]["UsuarioResp"] = "";
	$fieldLabels001_rubro_fun["Spanish"]["DESCRIPCION"] = "Descripción";
	$fieldToolTips001_rubro_fun["Spanish"]["DESCRIPCION"] = "";
	$placeHolders001_rubro_fun["Spanish"]["DESCRIPCION"] = "";
	$fieldLabels001_rubro_fun["Spanish"]["TIPO_FUENTE"] = "Fuente de rubro";
	$fieldToolTips001_rubro_fun["Spanish"]["TIPO_FUENTE"] = "";
	$placeHolders001_rubro_fun["Spanish"]["TIPO_FUENTE"] = "";
	$fieldLabels001_rubro_fun["Spanish"]["CATEGORIA"] = "Programa presupuestal";
	$fieldToolTips001_rubro_fun["Spanish"]["CATEGORIA"] = "";
	$placeHolders001_rubro_fun["Spanish"]["CATEGORIA"] = "";
	$fieldLabels001_rubro_fun["Spanish"]["SALDO"] = "Saldo por utilizar";
	$fieldToolTips001_rubro_fun["Spanish"]["SALDO"] = "";
	$placeHolders001_rubro_fun["Spanish"]["SALDO"] = "";
	$fieldLabels001_rubro_fun["Spanish"]["RUBRO_ID_FK"] = "NOMBRE UEJ";
	$fieldToolTips001_rubro_fun["Spanish"]["RUBRO_ID_FK"] = "";
	$placeHolders001_rubro_fun["Spanish"]["RUBRO_ID_FK"] = "";
	$fieldLabels001_rubro_fun["Spanish"]["OBJ_GENERAL"] = "Objetivo General";
	$fieldToolTips001_rubro_fun["Spanish"]["OBJ_GENERAL"] = "";
	$placeHolders001_rubro_fun["Spanish"]["OBJ_GENERAL"] = "";
	$fieldLabels001_rubro_fun["Spanish"]["OBJ_ESPECIFICO"] = "Objetivo específico";
	$fieldToolTips001_rubro_fun["Spanish"]["OBJ_ESPECIFICO"] = "";
	$placeHolders001_rubro_fun["Spanish"]["OBJ_ESPECIFICO"] = "";
	$fieldLabels001_rubro_fun["Spanish"]["UTILIZADO"] = "Programado";
	$fieldToolTips001_rubro_fun["Spanish"]["UTILIZADO"] = "";
	$placeHolders001_rubro_fun["Spanish"]["UTILIZADO"] = "";
	$pageTitles001_rubro_fun["Spanish"]["add"] = "Rubro presupuestal | Funcionamiento";
	$pageTitles001_rubro_fun["Spanish"]["edit"] = "Rubro presupuestal | Funcionamiento, Editar [{%RUBRO_ID}]";
	if (count($fieldToolTips001_rubro_fun["Spanish"]))
		$tdata001_rubro_fun[".isUseToolTips"] = true;
}


	$tdata001_rubro_fun[".NCSearch"] = true;



$tdata001_rubro_fun[".shortTableName"] = "001_rubro_fun";
$tdata001_rubro_fun[".nSecOptions"] = 0;

$tdata001_rubro_fun[".mainTableOwnerID"] = "Dependencia";
$tdata001_rubro_fun[".entityType"] = 1;
$tdata001_rubro_fun[".connId"] = "sep2_at_127_0_0_1";


$tdata001_rubro_fun[".strOriginalTableName"] = "001_rubro";

	



$tdata001_rubro_fun[".showAddInPopup"] = false;

$tdata001_rubro_fun[".showEditInPopup"] = false;

$tdata001_rubro_fun[".showViewInPopup"] = false;

$tdata001_rubro_fun[".listAjax"] = false;
//	temporary
//$tdata001_rubro_fun[".listAjax"] = false;

	$tdata001_rubro_fun[".audit"] = true;

	$tdata001_rubro_fun[".locking"] = true;


$pages = $tdata001_rubro_fun[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdata001_rubro_fun[".edit"] = true;
	$tdata001_rubro_fun[".afterEditAction"] = 0;
	$tdata001_rubro_fun[".closePopupAfterEdit"] = 1;
	$tdata001_rubro_fun[".afterEditActionDetTable"] = "002_producto";
}

if( $pages[PAGE_ADD] ) {
$tdata001_rubro_fun[".add"] = true;
$tdata001_rubro_fun[".afterAddAction"] = 0;
$tdata001_rubro_fun[".closePopupAfterAdd"] = 1;
$tdata001_rubro_fun[".afterAddActionDetTable"] = "002_producto";
}

if( $pages[PAGE_LIST] ) {
	$tdata001_rubro_fun[".list"] = true;
}



$tdata001_rubro_fun[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdata001_rubro_fun[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdata001_rubro_fun[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdata001_rubro_fun[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdata001_rubro_fun[".printFriendly"] = true;
}



$tdata001_rubro_fun[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdata001_rubro_fun[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdata001_rubro_fun[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdata001_rubro_fun[".isUseAjaxSuggest"] = true;



																								

$tdata001_rubro_fun[".ajaxCodeSnippetAdded"] = false;

$tdata001_rubro_fun[".buttonsAdded"] = false;

$tdata001_rubro_fun[".addPageEvents"] = true;

// use timepicker for search panel
$tdata001_rubro_fun[".isUseTimeForSearch"] = false;


$tdata001_rubro_fun[".badgeColor"] = "00ff00";


$tdata001_rubro_fun[".allSearchFields"] = array();
$tdata001_rubro_fun[".filterFields"] = array();
$tdata001_rubro_fun[".requiredSearchFields"] = array();

$tdata001_rubro_fun[".googleLikeFields"] = array();
$tdata001_rubro_fun[".googleLikeFields"][] = "RUBRO_ID";
$tdata001_rubro_fun[".googleLikeFields"][] = "RUBRO_ID_FK";
$tdata001_rubro_fun[".googleLikeFields"][] = "VIGENCIA";
$tdata001_rubro_fun[".googleLikeFields"][] = "UEJ";
$tdata001_rubro_fun[".googleLikeFields"][] = "RUBRO";
$tdata001_rubro_fun[".googleLikeFields"][] = "DESCRIPCION";
$tdata001_rubro_fun[".googleLikeFields"][] = "REC";
$tdata001_rubro_fun[".googleLikeFields"][] = "FUENTE";
$tdata001_rubro_fun[".googleLikeFields"][] = "TIPO";
$tdata001_rubro_fun[".googleLikeFields"][] = "TIPO_FUENTE";
$tdata001_rubro_fun[".googleLikeFields"][] = "BPIN";
$tdata001_rubro_fun[".googleLikeFields"][] = "PRESUPUESTO";
$tdata001_rubro_fun[".googleLikeFields"][] = "SALDO";
$tdata001_rubro_fun[".googleLikeFields"][] = "Dependencia";
$tdata001_rubro_fun[".googleLikeFields"][] = "UsuarioResp";
$tdata001_rubro_fun[".googleLikeFields"][] = "CATEGORIA";
$tdata001_rubro_fun[".googleLikeFields"][] = "OBJ_GENERAL";
$tdata001_rubro_fun[".googleLikeFields"][] = "OBJ_ESPECIFICO";
$tdata001_rubro_fun[".googleLikeFields"][] = "UTILIZADO";



$tdata001_rubro_fun[".tableType"] = "list";

$tdata001_rubro_fun[".printerPageOrientation"] = 0;
$tdata001_rubro_fun[".nPrinterPageScale"] = 100;

$tdata001_rubro_fun[".nPrinterSplitRecords"] = 40;

$tdata001_rubro_fun[".geocodingEnabled"] = false;










$tdata001_rubro_fun[".pageSize"] = 20;

$tdata001_rubro_fun[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdata001_rubro_fun[".strOrderBy"] = $tstrOrderBy;

$tdata001_rubro_fun[".orderindexes"] = array();


$tdata001_rubro_fun[".sqlHead"] = "SELECT RUBRO_ID,  RUBRO_ID_FK,  VIGENCIA,  UEJ,  RUBRO,  DESCRIPCION,  REC,  FUENTE,  TIPO,  TIPO_FUENTE,  BPIN,  PRESUPUESTO,  SALDO,  Dependencia,  UsuarioResp,  CATEGORIA,  OBJ_GENERAL,  OBJ_ESPECIFICO,  UTILIZADO";
$tdata001_rubro_fun[".sqlFrom"] = "FROM `001_rubro`";
$tdata001_rubro_fun[".sqlWhereExpr"] = "(TIPO =2)";
$tdata001_rubro_fun[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdata001_rubro_fun[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata001_rubro_fun[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata001_rubro_fun[".arrGroupsPerPage"] = $arrGPP;

$tdata001_rubro_fun[".highlightSearchResults"] = true;

$tableKeys001_rubro_fun = array();
$tableKeys001_rubro_fun[] = "RUBRO_ID";
$tdata001_rubro_fun[".Keys"] = $tableKeys001_rubro_fun;


$tdata001_rubro_fun[".hideMobileList"] = array();




//	RUBRO_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "RUBRO_ID";
	$fdata["GoodName"] = "RUBRO_ID";
	$fdata["ownerTable"] = "001_rubro";
	$fdata["Label"] = GetFieldLabel("001_rubro_fun","RUBRO_ID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "RUBRO_ID";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RUBRO_ID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdata001_rubro_fun["RUBRO_ID"] = $fdata;
		$tdata001_rubro_fun[".searchableFields"][] = "RUBRO_ID";
//	RUBRO_ID_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "RUBRO_ID_FK";
	$fdata["GoodName"] = "RUBRO_ID_FK";
	$fdata["ownerTable"] = "001_rubro";
	$fdata["Label"] = GetFieldLabel("001_rubro_fun","RUBRO_ID_FK");
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
	$edata["LookupTable"] = "000_global_fun";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"VIGENCIA", 'lookupF'=>"VIGENCIA");
	$edata["autoCompleteFields"][] = array('masterF'=>"UEJ", 'lookupF'=>"UEJ");
	$edata["autoCompleteFields"][] = array('masterF'=>"TIPO_FUENTE", 'lookupF'=>"TIPO");
	$edata["autoCompleteFields"][] = array('masterF'=>"SALDO", 'lookupF'=>"SALDO");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "RUBRO_ID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "DESCRIPCION";

	

	
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


	$tdata001_rubro_fun["RUBRO_ID_FK"] = $fdata;
		$tdata001_rubro_fun[".searchableFields"][] = "RUBRO_ID_FK";
//	VIGENCIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "VIGENCIA";
	$fdata["GoodName"] = "VIGENCIA";
	$fdata["ownerTable"] = "001_rubro";
	$fdata["Label"] = GetFieldLabel("001_rubro_fun","VIGENCIA");
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "RUBRO_ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata001_rubro_fun["VIGENCIA"] = $fdata;
		$tdata001_rubro_fun[".searchableFields"][] = "VIGENCIA";
//	UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "UEJ";
	$fdata["GoodName"] = "UEJ";
	$fdata["ownerTable"] = "001_rubro";
	$fdata["Label"] = GetFieldLabel("001_rubro_fun","UEJ");
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


		$edata["strEditMask"] = "99-99-99";

	



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


	$tdata001_rubro_fun["UEJ"] = $fdata;
		$tdata001_rubro_fun[".searchableFields"][] = "UEJ";
//	RUBRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "RUBRO";
	$fdata["GoodName"] = "RUBRO";
	$fdata["ownerTable"] = "001_rubro";
	$fdata["Label"] = GetFieldLabel("001_rubro_fun","RUBRO");
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
	$edata["autoCompleteFields"][] = array('masterF'=>"FUENTE", 'lookupF'=>"FUENTE");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "RUBRO";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "RUBRO";

				$edata["LookupWhere"] = "TIPO = 'A'";


	
	$edata["LookupOrderBy"] = "RUBRO";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "UEJ", "lookup" => "UEJ" );

		$edata["AllowToAdd"] = true;
		
	

	
	
	
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
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "RUBRO_ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata001_rubro_fun["RUBRO"] = $fdata;
		$tdata001_rubro_fun[".searchableFields"][] = "RUBRO";
//	DESCRIPCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DESCRIPCION";
	$fdata["GoodName"] = "DESCRIPCION";
	$fdata["ownerTable"] = "001_rubro";
	$fdata["Label"] = GetFieldLabel("001_rubro_fun","DESCRIPCION");
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


	$tdata001_rubro_fun["DESCRIPCION"] = $fdata;
		$tdata001_rubro_fun[".searchableFields"][] = "DESCRIPCION";
//	REC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "REC";
	$fdata["GoodName"] = "REC";
	$fdata["ownerTable"] = "001_rubro";
	$fdata["Label"] = GetFieldLabel("001_rubro_fun","REC");
	$fdata["FieldType"] = 200;


	
	
			

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


	
		$edata["Multiselect"] = true;

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


	$tdata001_rubro_fun["REC"] = $fdata;
		$tdata001_rubro_fun[".searchableFields"][] = "REC";
//	FUENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "FUENTE";
	$fdata["GoodName"] = "FUENTE";
	$fdata["ownerTable"] = "001_rubro";
	$fdata["Label"] = GetFieldLabel("001_rubro_fun","FUENTE");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tparam_fuente_siif";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "fuentes_name";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "fuentes_name";

	

	
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


	$tdata001_rubro_fun["FUENTE"] = $fdata;
		$tdata001_rubro_fun[".searchableFields"][] = "FUENTE";
//	TIPO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "TIPO";
	$fdata["GoodName"] = "TIPO";
	$fdata["ownerTable"] = "001_rubro";
	$fdata["Label"] = GetFieldLabel("001_rubro_fun","TIPO");
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata001_rubro_fun["TIPO"] = $fdata;
		$tdata001_rubro_fun[".searchableFields"][] = "TIPO";
//	TIPO_FUENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "TIPO_FUENTE";
	$fdata["GoodName"] = "TIPO_FUENTE";
	$fdata["ownerTable"] = "001_rubro";
	$fdata["Label"] = GetFieldLabel("001_rubro_fun","TIPO_FUENTE");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "TIPO_FUENTE";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIPO_FUENTE";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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
	$edata["LookupTable"] = "tparam_fuente";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "tipo";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "fuente_name";

	

	
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


	$tdata001_rubro_fun["TIPO_FUENTE"] = $fdata;
		$tdata001_rubro_fun[".searchableFields"][] = "TIPO_FUENTE";
//	BPIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "BPIN";
	$fdata["GoodName"] = "BPIN";
	$fdata["ownerTable"] = "001_rubro";
	$fdata["Label"] = GetFieldLabel("001_rubro_fun","BPIN");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BPIN";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BPIN";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


		$edata["strEditMask"] = "9999999999999";

	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=13";

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


	$tdata001_rubro_fun["BPIN"] = $fdata;
		$tdata001_rubro_fun[".searchableFields"][] = "BPIN";
//	PRESUPUESTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "PRESUPUESTO";
	$fdata["GoodName"] = "PRESUPUESTO";
	$fdata["ownerTable"] = "001_rubro";
	$fdata["Label"] = GetFieldLabel("001_rubro_fun","PRESUPUESTO");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "PRESUPUESTO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRESUPUESTO";

	
	
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


	$tdata001_rubro_fun["PRESUPUESTO"] = $fdata;
		$tdata001_rubro_fun[".searchableFields"][] = "PRESUPUESTO";
//	SALDO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "SALDO";
	$fdata["GoodName"] = "SALDO";
	$fdata["ownerTable"] = "001_rubro";
	$fdata["Label"] = GetFieldLabel("001_rubro_fun","SALDO");
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
	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterlist"] = $vdata;
	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterprint"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata001_rubro_fun["SALDO"] = $fdata;
		$tdata001_rubro_fun[".searchableFields"][] = "SALDO";
//	Dependencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Dependencia";
	$fdata["GoodName"] = "Dependencia";
	$fdata["ownerTable"] = "001_rubro";
	$fdata["Label"] = GetFieldLabel("001_rubro_fun","Dependencia");
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


	$tdata001_rubro_fun["Dependencia"] = $fdata;
		$tdata001_rubro_fun[".searchableFields"][] = "Dependencia";
//	UsuarioResp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "UsuarioResp";
	$fdata["GoodName"] = "UsuarioResp";
	$fdata["ownerTable"] = "001_rubro";
	$fdata["Label"] = GetFieldLabel("001_rubro_fun","UsuarioResp");
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


	$tdata001_rubro_fun["UsuarioResp"] = $fdata;
		$tdata001_rubro_fun[".searchableFields"][] = "UsuarioResp";
//	CATEGORIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "CATEGORIA";
	$fdata["GoodName"] = "CATEGORIA";
	$fdata["ownerTable"] = "001_rubro";
	$fdata["Label"] = GetFieldLabel("001_rubro_fun","CATEGORIA");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CATEGORIA";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CATEGORIA";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdata001_rubro_fun["CATEGORIA"] = $fdata;
		$tdata001_rubro_fun[".searchableFields"][] = "CATEGORIA";
//	OBJ_GENERAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "OBJ_GENERAL";
	$fdata["GoodName"] = "OBJ_GENERAL";
	$fdata["ownerTable"] = "001_rubro";
	$fdata["Label"] = GetFieldLabel("001_rubro_fun","OBJ_GENERAL");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "OBJ_GENERAL";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OBJ_GENERAL";

	
	
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


	$tdata001_rubro_fun["OBJ_GENERAL"] = $fdata;
		$tdata001_rubro_fun[".searchableFields"][] = "OBJ_GENERAL";
//	OBJ_ESPECIFICO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "OBJ_ESPECIFICO";
	$fdata["GoodName"] = "OBJ_ESPECIFICO";
	$fdata["ownerTable"] = "001_rubro";
	$fdata["Label"] = GetFieldLabel("001_rubro_fun","OBJ_ESPECIFICO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "OBJ_ESPECIFICO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OBJ_ESPECIFICO";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdata001_rubro_fun["OBJ_ESPECIFICO"] = $fdata;
		$tdata001_rubro_fun[".searchableFields"][] = "OBJ_ESPECIFICO";
//	UTILIZADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "UTILIZADO";
	$fdata["GoodName"] = "UTILIZADO";
	$fdata["ownerTable"] = "001_rubro";
	$fdata["Label"] = GetFieldLabel("001_rubro_fun","UTILIZADO");
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


	$tdata001_rubro_fun["UTILIZADO"] = $fdata;
		$tdata001_rubro_fun[".searchableFields"][] = "UTILIZADO";


$tables_data["001_rubro_fun"]=&$tdata001_rubro_fun;
$field_labels["001_rubro_fun"] = &$fieldLabels001_rubro_fun;
$fieldToolTips["001_rubro_fun"] = &$fieldToolTips001_rubro_fun;
$placeHolders["001_rubro_fun"] = &$placeHolders001_rubro_fun;
$page_titles["001_rubro_fun"] = &$pageTitles001_rubro_fun;


changeTextControlsToDate( "001_rubro_fun" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["001_rubro_fun"] = array();
//	002_producto_fun
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="002_producto_fun";
		$detailsParam["dOriginalTable"] = "002_producto";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "002_producto_fun";
	$detailsParam["dCaptionTable"] = GetTableCaption("002_producto_fun");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["001_rubro_fun"][$dIndex] = $detailsParam;

	
		$detailsTablesData["001_rubro_fun"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["001_rubro_fun"][$dIndex]["masterKeys"][]="RUBRO_ID";

				$detailsTablesData["001_rubro_fun"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["001_rubro_fun"][$dIndex]["detailKeys"][]="RUBRO_ID_FK";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["001_rubro_fun"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="000_global";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="000_global_fun";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "000_global_fun";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["001_rubro_fun"][0] = $masterParams;
				$masterTablesData["001_rubro_fun"][0]["masterKeys"] = array();
	$masterTablesData["001_rubro_fun"][0]["masterKeys"][]="RUBRO_ID";
				$masterTablesData["001_rubro_fun"][0]["masterKeys"][]="VIGENCIA";
				$masterTablesData["001_rubro_fun"][0]["detailKeys"] = array();
	$masterTablesData["001_rubro_fun"][0]["detailKeys"][]="RUBRO_ID_FK";
				$masterTablesData["001_rubro_fun"][0]["detailKeys"][]="VIGENCIA";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_001_rubro_fun()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "RUBRO_ID,  RUBRO_ID_FK,  VIGENCIA,  UEJ,  RUBRO,  DESCRIPCION,  REC,  FUENTE,  TIPO,  TIPO_FUENTE,  BPIN,  PRESUPUESTO,  SALDO,  Dependencia,  UsuarioResp,  CATEGORIA,  OBJ_GENERAL,  OBJ_ESPECIFICO,  UTILIZADO";
$proto0["m_strFrom"] = "FROM `001_rubro`";
$proto0["m_strWhere"] = "(TIPO =2)";
$proto0["m_strOrderBy"] = "";
	
										;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "TIPO =2";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "001_rubro_fun"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=2";
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
	"m_strName" => "RUBRO_ID",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "001_rubro_fun"
));

$proto6["m_sql"] = "RUBRO_ID";
$proto6["m_srcTableName"] = "001_rubro_fun";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "RUBRO_ID_FK",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "001_rubro_fun"
));

$proto8["m_sql"] = "RUBRO_ID_FK";
$proto8["m_srcTableName"] = "001_rubro_fun";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "VIGENCIA",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "001_rubro_fun"
));

$proto10["m_sql"] = "VIGENCIA";
$proto10["m_srcTableName"] = "001_rubro_fun";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "UEJ",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "001_rubro_fun"
));

$proto12["m_sql"] = "UEJ";
$proto12["m_srcTableName"] = "001_rubro_fun";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "RUBRO",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "001_rubro_fun"
));

$proto14["m_sql"] = "RUBRO";
$proto14["m_srcTableName"] = "001_rubro_fun";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "001_rubro_fun"
));

$proto16["m_sql"] = "DESCRIPCION";
$proto16["m_srcTableName"] = "001_rubro_fun";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "REC",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "001_rubro_fun"
));

$proto18["m_sql"] = "REC";
$proto18["m_srcTableName"] = "001_rubro_fun";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "FUENTE",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "001_rubro_fun"
));

$proto20["m_sql"] = "FUENTE";
$proto20["m_srcTableName"] = "001_rubro_fun";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "001_rubro_fun"
));

$proto22["m_sql"] = "TIPO";
$proto22["m_srcTableName"] = "001_rubro_fun";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO_FUENTE",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "001_rubro_fun"
));

$proto24["m_sql"] = "TIPO_FUENTE";
$proto24["m_srcTableName"] = "001_rubro_fun";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "BPIN",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "001_rubro_fun"
));

$proto26["m_sql"] = "BPIN";
$proto26["m_srcTableName"] = "001_rubro_fun";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "PRESUPUESTO",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "001_rubro_fun"
));

$proto28["m_sql"] = "PRESUPUESTO";
$proto28["m_srcTableName"] = "001_rubro_fun";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "SALDO",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "001_rubro_fun"
));

$proto30["m_sql"] = "SALDO";
$proto30["m_srcTableName"] = "001_rubro_fun";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Dependencia",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "001_rubro_fun"
));

$proto32["m_sql"] = "Dependencia";
$proto32["m_srcTableName"] = "001_rubro_fun";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "UsuarioResp",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "001_rubro_fun"
));

$proto34["m_sql"] = "UsuarioResp";
$proto34["m_srcTableName"] = "001_rubro_fun";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "CATEGORIA",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "001_rubro_fun"
));

$proto36["m_sql"] = "CATEGORIA";
$proto36["m_srcTableName"] = "001_rubro_fun";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "OBJ_GENERAL",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "001_rubro_fun"
));

$proto38["m_sql"] = "OBJ_GENERAL";
$proto38["m_srcTableName"] = "001_rubro_fun";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "OBJ_ESPECIFICO",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "001_rubro_fun"
));

$proto40["m_sql"] = "OBJ_ESPECIFICO";
$proto40["m_srcTableName"] = "001_rubro_fun";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "UTILIZADO",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "001_rubro_fun"
));

$proto42["m_sql"] = "UTILIZADO";
$proto42["m_srcTableName"] = "001_rubro_fun";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
			$proto45=array();
$proto45["m_strName"] = "001_rubro";
$proto45["m_srcTableName"] = "001_rubro_fun";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "RUBRO_ID";
$proto45["m_columns"][] = "RUBRO_ID_FK";
$proto45["m_columns"][] = "VIGENCIA";
$proto45["m_columns"][] = "UEJ";
$proto45["m_columns"][] = "RUBRO";
$proto45["m_columns"][] = "DESCRIPCION";
$proto45["m_columns"][] = "REC";
$proto45["m_columns"][] = "FUENTE";
$proto45["m_columns"][] = "PRESUPUESTO";
$proto45["m_columns"][] = "TIPO";
$proto45["m_columns"][] = "TIPO_FUENTE";
$proto45["m_columns"][] = "BPIN";
$proto45["m_columns"][] = "UTILIZADO";
$proto45["m_columns"][] = "SALDO";
$proto45["m_columns"][] = "Dependencia";
$proto45["m_columns"][] = "UsuarioResp";
$proto45["m_columns"][] = "CATEGORIA";
$proto45["m_columns"][] = "OBJ_GENERAL";
$proto45["m_columns"][] = "OBJ_ESPECIFICO";
$proto45["m_columns"][] = "HabilitaPAA";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "`001_rubro`";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "001_rubro_fun";
$proto46=array();
$proto46["m_sql"] = "";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="001_rubro_fun";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_001_rubro_fun = createSqlQuery_001_rubro_fun();


	
										;

																			

$tdata001_rubro_fun[".sqlquery"] = $queryData_001_rubro_fun;



include_once(getabspath("include/001_rubro_fun_events.php"));
$tdata001_rubro_fun[".hasEvents"] = true;

?>