<?php
$tdatanopaa_master_admin = array();
$tdatanopaa_master_admin[".searchableFields"] = array();
$tdatanopaa_master_admin[".ShortName"] = "nopaa_master_admin";
$tdatanopaa_master_admin[".OwnerID"] = "";
$tdatanopaa_master_admin[".OriginalTable"] = "nopaa_master";


$tdatanopaa_master_admin[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatanopaa_master_admin[".originalPagesByType"] = $tdatanopaa_master_admin[".pagesByType"];
$tdatanopaa_master_admin[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatanopaa_master_admin[".originalPages"] = $tdatanopaa_master_admin[".pages"];
$tdatanopaa_master_admin[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatanopaa_master_admin[".originalDefaultPages"] = $tdatanopaa_master_admin[".defaultPages"];

//	field labels
$fieldLabelsnopaa_master_admin = array();
$fieldToolTipsnopaa_master_admin = array();
$pageTitlesnopaa_master_admin = array();
$placeHoldersnopaa_master_admin = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsnopaa_master_admin["Spanish"] = array();
	$fieldToolTipsnopaa_master_admin["Spanish"] = array();
	$placeHoldersnopaa_master_admin["Spanish"] = array();
	$pageTitlesnopaa_master_admin["Spanish"] = array();
	$fieldLabelsnopaa_master_admin["Spanish"]["PAA_ID"] = "PAA ID";
	$fieldToolTipsnopaa_master_admin["Spanish"]["PAA_ID"] = "";
	$placeHoldersnopaa_master_admin["Spanish"]["PAA_ID"] = "";
	$fieldLabelsnopaa_master_admin["Spanish"]["ACT_ID"] = "ACTIVIDAD";
	$fieldToolTipsnopaa_master_admin["Spanish"]["ACT_ID"] = "";
	$placeHoldersnopaa_master_admin["Spanish"]["ACT_ID"] = "";
	$fieldLabelsnopaa_master_admin["Spanish"]["PROD_ID"] = "PRODUCTO";
	$fieldToolTipsnopaa_master_admin["Spanish"]["PROD_ID"] = "";
	$placeHoldersnopaa_master_admin["Spanish"]["PROD_ID"] = "";
	$fieldLabelsnopaa_master_admin["Spanish"]["PAAID_INTEGRADO"] = "PAAID INTEGRADO";
	$fieldToolTipsnopaa_master_admin["Spanish"]["PAAID_INTEGRADO"] = "";
	$placeHoldersnopaa_master_admin["Spanish"]["PAAID_INTEGRADO"] = "";
	$fieldLabelsnopaa_master_admin["Spanish"]["DESCRIPCION"] = "DESCRIPCION";
	$fieldToolTipsnopaa_master_admin["Spanish"]["DESCRIPCION"] = "";
	$placeHoldersnopaa_master_admin["Spanish"]["DESCRIPCION"] = "";
	$fieldLabelsnopaa_master_admin["Spanish"]["MES_INICIO"] = "MES INICIO";
	$fieldToolTipsnopaa_master_admin["Spanish"]["MES_INICIO"] = "";
	$placeHoldersnopaa_master_admin["Spanish"]["MES_INICIO"] = "";
	$fieldLabelsnopaa_master_admin["Spanish"]["FUENTE_RECURSOS"] = "FUENTE RECURSOS";
	$fieldToolTipsnopaa_master_admin["Spanish"]["FUENTE_RECURSOS"] = "";
	$placeHoldersnopaa_master_admin["Spanish"]["FUENTE_RECURSOS"] = "";
	$fieldLabelsnopaa_master_admin["Spanish"]["VALOR"] = "VALOR";
	$fieldToolTipsnopaa_master_admin["Spanish"]["VALOR"] = "";
	$placeHoldersnopaa_master_admin["Spanish"]["VALOR"] = "";
	$fieldLabelsnopaa_master_admin["Spanish"]["UNIDAD_CONTRATACION"] = "UNIDAD CONTRATACION";
	$fieldToolTipsnopaa_master_admin["Spanish"]["UNIDAD_CONTRATACION"] = "";
	$placeHoldersnopaa_master_admin["Spanish"]["UNIDAD_CONTRATACION"] = "";
	$fieldLabelsnopaa_master_admin["Spanish"]["responsable"] = "Responsable";
	$fieldToolTipsnopaa_master_admin["Spanish"]["responsable"] = "";
	$placeHoldersnopaa_master_admin["Spanish"]["responsable"] = "";
	$fieldLabelsnopaa_master_admin["Spanish"]["vigencia"] = "Vigencia";
	$fieldToolTipsnopaa_master_admin["Spanish"]["vigencia"] = "";
	$placeHoldersnopaa_master_admin["Spanish"]["vigencia"] = "";
	$fieldLabelsnopaa_master_admin["Spanish"]["sys_user"] = "RESPONSABLE";
	$fieldToolTipsnopaa_master_admin["Spanish"]["sys_user"] = "";
	$placeHoldersnopaa_master_admin["Spanish"]["sys_user"] = "";
	$fieldLabelsnopaa_master_admin["Spanish"]["registrado_por"] = "REGISTRADO POR";
	$fieldToolTipsnopaa_master_admin["Spanish"]["registrado_por"] = "";
	$placeHoldersnopaa_master_admin["Spanish"]["registrado_por"] = "";
	$fieldLabelsnopaa_master_admin["Spanish"]["sys_date"] = "FECHA";
	$fieldToolTipsnopaa_master_admin["Spanish"]["sys_date"] = "";
	$placeHoldersnopaa_master_admin["Spanish"]["sys_date"] = "";
	$fieldLabelsnopaa_master_admin["Spanish"]["sys_status"] = "Sys Status";
	$fieldToolTipsnopaa_master_admin["Spanish"]["sys_status"] = "";
	$placeHoldersnopaa_master_admin["Spanish"]["sys_status"] = "";
	$fieldLabelsnopaa_master_admin["Spanish"]["transferir_a"] = "TRANSFERIR A";
	$fieldToolTipsnopaa_master_admin["Spanish"]["transferir_a"] = "";
	$placeHoldersnopaa_master_admin["Spanish"]["transferir_a"] = "";
	$fieldLabelsnopaa_master_admin["Spanish"]["ct_integrado"] = "Ct Integrado";
	$fieldToolTipsnopaa_master_admin["Spanish"]["ct_integrado"] = "";
	$placeHoldersnopaa_master_admin["Spanish"]["ct_integrado"] = "";
	$fieldLabelsnopaa_master_admin["Spanish"]["CDP_INTEGRADO"] = "CDP INTEGRADO";
	$fieldToolTipsnopaa_master_admin["Spanish"]["CDP_INTEGRADO"] = "";
	$placeHoldersnopaa_master_admin["Spanish"]["CDP_INTEGRADO"] = "";
	if (count($fieldToolTipsnopaa_master_admin["Spanish"]))
		$tdatanopaa_master_admin[".isUseToolTips"] = true;
}


	$tdatanopaa_master_admin[".NCSearch"] = true;



$tdatanopaa_master_admin[".shortTableName"] = "nopaa_master_admin";
$tdatanopaa_master_admin[".nSecOptions"] = 0;

$tdatanopaa_master_admin[".mainTableOwnerID"] = "";
$tdatanopaa_master_admin[".entityType"] = 1;
$tdatanopaa_master_admin[".connId"] = "mincit_global_20x_at_127_0_0_1";


$tdatanopaa_master_admin[".strOriginalTableName"] = "nopaa_master";

	



$tdatanopaa_master_admin[".showAddInPopup"] = false;

$tdatanopaa_master_admin[".showEditInPopup"] = false;

$tdatanopaa_master_admin[".showViewInPopup"] = false;

$tdatanopaa_master_admin[".listAjax"] = false;
//	temporary
//$tdatanopaa_master_admin[".listAjax"] = false;

	$tdatanopaa_master_admin[".audit"] = true;

	$tdatanopaa_master_admin[".locking"] = true;


$pages = $tdatanopaa_master_admin[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatanopaa_master_admin[".edit"] = true;
	$tdatanopaa_master_admin[".afterEditAction"] = 0;
	$tdatanopaa_master_admin[".closePopupAfterEdit"] = 1;
	$tdatanopaa_master_admin[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatanopaa_master_admin[".add"] = true;
$tdatanopaa_master_admin[".afterAddAction"] = 1;
$tdatanopaa_master_admin[".closePopupAfterAdd"] = 1;
$tdatanopaa_master_admin[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatanopaa_master_admin[".list"] = true;
}



$tdatanopaa_master_admin[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatanopaa_master_admin[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatanopaa_master_admin[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatanopaa_master_admin[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatanopaa_master_admin[".printFriendly"] = true;
}



$tdatanopaa_master_admin[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatanopaa_master_admin[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatanopaa_master_admin[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatanopaa_master_admin[".isUseAjaxSuggest"] = true;



												

$tdatanopaa_master_admin[".ajaxCodeSnippetAdded"] = false;

$tdatanopaa_master_admin[".buttonsAdded"] = false;

$tdatanopaa_master_admin[".addPageEvents"] = false;

// use timepicker for search panel
$tdatanopaa_master_admin[".isUseTimeForSearch"] = false;


$tdatanopaa_master_admin[".badgeColor"] = "5F9EA0";


$tdatanopaa_master_admin[".allSearchFields"] = array();
$tdatanopaa_master_admin[".filterFields"] = array();
$tdatanopaa_master_admin[".requiredSearchFields"] = array();

$tdatanopaa_master_admin[".googleLikeFields"] = array();
$tdatanopaa_master_admin[".googleLikeFields"][] = "PAA_ID";
$tdatanopaa_master_admin[".googleLikeFields"][] = "ACT_ID";
$tdatanopaa_master_admin[".googleLikeFields"][] = "PROD_ID";
$tdatanopaa_master_admin[".googleLikeFields"][] = "PAAID_INTEGRADO";
$tdatanopaa_master_admin[".googleLikeFields"][] = "CDP_INTEGRADO";
$tdatanopaa_master_admin[".googleLikeFields"][] = "DESCRIPCION";
$tdatanopaa_master_admin[".googleLikeFields"][] = "MES_INICIO";
$tdatanopaa_master_admin[".googleLikeFields"][] = "FUENTE_RECURSOS";
$tdatanopaa_master_admin[".googleLikeFields"][] = "VALOR";
$tdatanopaa_master_admin[".googleLikeFields"][] = "UNIDAD_CONTRATACION";
$tdatanopaa_master_admin[".googleLikeFields"][] = "responsable";
$tdatanopaa_master_admin[".googleLikeFields"][] = "vigencia";
$tdatanopaa_master_admin[".googleLikeFields"][] = "sys_user";
$tdatanopaa_master_admin[".googleLikeFields"][] = "registrado_por";
$tdatanopaa_master_admin[".googleLikeFields"][] = "sys_date";
$tdatanopaa_master_admin[".googleLikeFields"][] = "sys_status";
$tdatanopaa_master_admin[".googleLikeFields"][] = "transferir_a";
$tdatanopaa_master_admin[".googleLikeFields"][] = "ct_integrado";



$tdatanopaa_master_admin[".tableType"] = "list";

$tdatanopaa_master_admin[".printerPageOrientation"] = 0;
$tdatanopaa_master_admin[".nPrinterPageScale"] = 100;

$tdatanopaa_master_admin[".nPrinterSplitRecords"] = 40;

$tdatanopaa_master_admin[".geocodingEnabled"] = false;










$tdatanopaa_master_admin[".pageSize"] = 20;

$tdatanopaa_master_admin[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatanopaa_master_admin[".strOrderBy"] = $tstrOrderBy;

$tdatanopaa_master_admin[".orderindexes"] = array();


$tdatanopaa_master_admin[".sqlHead"] = "SELECT PAA_ID, ACT_ID, PROD_ID, PAAID_INTEGRADO, CDP_INTEGRADO, DESCRIPCION, MES_INICIO, FUENTE_RECURSOS, VALOR, UNIDAD_CONTRATACION, responsable, vigencia, sys_user, registrado_por, sys_date, sys_status, transferir_a, ct_integrado";
$tdatanopaa_master_admin[".sqlFrom"] = "FROM nopaa_master";
$tdatanopaa_master_admin[".sqlWhereExpr"] = "(PAA_ID > 1)";
$tdatanopaa_master_admin[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanopaa_master_admin[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanopaa_master_admin[".arrGroupsPerPage"] = $arrGPP;

$tdatanopaa_master_admin[".highlightSearchResults"] = true;

$tableKeysnopaa_master_admin = array();
$tableKeysnopaa_master_admin[] = "PAA_ID";
$tdatanopaa_master_admin[".Keys"] = $tableKeysnopaa_master_admin;


$tdatanopaa_master_admin[".hideMobileList"] = array();




//	PAA_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PAA_ID";
	$fdata["GoodName"] = "PAA_ID";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_admin","PAA_ID");
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


	$tdatanopaa_master_admin["PAA_ID"] = $fdata;
		$tdatanopaa_master_admin[".searchableFields"][] = "PAA_ID";
//	ACT_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ACT_ID";
	$fdata["GoodName"] = "ACT_ID";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_admin","ACT_ID");
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
	$edata["LookupTable"] = "q_info_actividad";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ACT_ID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "info_actividad";

	

	
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


	$tdatanopaa_master_admin["ACT_ID"] = $fdata;
		$tdatanopaa_master_admin[".searchableFields"][] = "ACT_ID";
//	PROD_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PROD_ID";
	$fdata["GoodName"] = "PROD_ID";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_admin","PROD_ID");
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

	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "q_info_producto";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "PROD_ID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "info_producto";

	

	
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


	$tdatanopaa_master_admin["PROD_ID"] = $fdata;
		$tdatanopaa_master_admin[".searchableFields"][] = "PROD_ID";
//	PAAID_INTEGRADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PAAID_INTEGRADO";
	$fdata["GoodName"] = "PAAID_INTEGRADO";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_admin","PAAID_INTEGRADO");
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
	$edata["LookupTable"] = "paa_master";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "PAA_ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "DESCRIPCION";

	

	
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


	$tdatanopaa_master_admin["PAAID_INTEGRADO"] = $fdata;
		$tdatanopaa_master_admin[".searchableFields"][] = "PAAID_INTEGRADO";
//	CDP_INTEGRADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CDP_INTEGRADO";
	$fdata["GoodName"] = "CDP_INTEGRADO";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_admin","CDP_INTEGRADO");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CDP_INTEGRADO";

		$fdata["sourceSingle"] = "CDP_INTEGRADO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CDP_INTEGRADO";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatanopaa_master_admin["CDP_INTEGRADO"] = $fdata;
		$tdatanopaa_master_admin[".searchableFields"][] = "CDP_INTEGRADO";
//	DESCRIPCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DESCRIPCION";
	$fdata["GoodName"] = "DESCRIPCION";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_admin","DESCRIPCION");
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


	$tdatanopaa_master_admin["DESCRIPCION"] = $fdata;
		$tdatanopaa_master_admin[".searchableFields"][] = "DESCRIPCION";
//	MES_INICIO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "MES_INICIO";
	$fdata["GoodName"] = "MES_INICIO";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_admin","MES_INICIO");
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


	$tdatanopaa_master_admin["MES_INICIO"] = $fdata;
		$tdatanopaa_master_admin[".searchableFields"][] = "MES_INICIO";
//	FUENTE_RECURSOS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "FUENTE_RECURSOS";
	$fdata["GoodName"] = "FUENTE_RECURSOS";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_admin","FUENTE_RECURSOS");
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


	$tdatanopaa_master_admin["FUENTE_RECURSOS"] = $fdata;
		$tdatanopaa_master_admin[".searchableFields"][] = "FUENTE_RECURSOS";
//	VALOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "VALOR";
	$fdata["GoodName"] = "VALOR";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_admin","VALOR");
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


	$tdatanopaa_master_admin["VALOR"] = $fdata;
		$tdatanopaa_master_admin[".searchableFields"][] = "VALOR";
//	UNIDAD_CONTRATACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "UNIDAD_CONTRATACION";
	$fdata["GoodName"] = "UNIDAD_CONTRATACION";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_admin","UNIDAD_CONTRATACION");
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


	$tdatanopaa_master_admin["UNIDAD_CONTRATACION"] = $fdata;
		$tdatanopaa_master_admin[".searchableFields"][] = "UNIDAD_CONTRATACION";
//	responsable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "responsable";
	$fdata["GoodName"] = "responsable";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_admin","responsable");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=40";

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


	$tdatanopaa_master_admin["responsable"] = $fdata;
		$tdatanopaa_master_admin[".searchableFields"][] = "responsable";
//	vigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "vigencia";
	$fdata["GoodName"] = "vigencia";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_admin","vigencia");
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


	$tdatanopaa_master_admin["vigencia"] = $fdata;
		$tdatanopaa_master_admin[".searchableFields"][] = "vigencia";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_admin","sys_user");
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
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "Username";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "usr_nombresfull";

	

	
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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatanopaa_master_admin["sys_user"] = $fdata;
		$tdatanopaa_master_admin[".searchableFields"][] = "sys_user";
//	registrado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "registrado_por";
	$fdata["GoodName"] = "registrado_por";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_admin","registrado_por");
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


	$tdatanopaa_master_admin["registrado_por"] = $fdata;
		$tdatanopaa_master_admin[".searchableFields"][] = "registrado_por";
//	sys_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "sys_date";
	$fdata["GoodName"] = "sys_date";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_admin","sys_date");
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


	$tdatanopaa_master_admin["sys_date"] = $fdata;
		$tdatanopaa_master_admin[".searchableFields"][] = "sys_date";
//	sys_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "sys_status";
	$fdata["GoodName"] = "sys_status";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_admin","sys_status");
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


	$tdatanopaa_master_admin["sys_status"] = $fdata;
		$tdatanopaa_master_admin[".searchableFields"][] = "sys_status";
//	transferir_a
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "transferir_a";
	$fdata["GoodName"] = "transferir_a";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_admin","transferir_a");
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

	

	
	$edata["LookupOrderBy"] = "patrimonio";

	
	
	
	

	
	
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


	$tdatanopaa_master_admin["transferir_a"] = $fdata;
		$tdatanopaa_master_admin[".searchableFields"][] = "transferir_a";
//	ct_integrado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "ct_integrado";
	$fdata["GoodName"] = "ct_integrado";
	$fdata["ownerTable"] = "nopaa_master";
	$fdata["Label"] = GetFieldLabel("nopaa_master_admin","ct_integrado");
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


	$tdatanopaa_master_admin["ct_integrado"] = $fdata;
		$tdatanopaa_master_admin[".searchableFields"][] = "ct_integrado";


$tables_data["nopaa_master_admin"]=&$tdatanopaa_master_admin;
$field_labels["nopaa_master_admin"] = &$fieldLabelsnopaa_master_admin;
$fieldToolTips["nopaa_master_admin"] = &$fieldToolTipsnopaa_master_admin;
$placeHolders["nopaa_master_admin"] = &$placeHoldersnopaa_master_admin;
$page_titles["nopaa_master_admin"] = &$pageTitlesnopaa_master_admin;


changeTextControlsToDate( "nopaa_master_admin" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["nopaa_master_admin"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["nopaa_master_admin"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_nopaa_master_admin()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PAA_ID, ACT_ID, PROD_ID, PAAID_INTEGRADO, CDP_INTEGRADO, DESCRIPCION, MES_INICIO, FUENTE_RECURSOS, VALOR, UNIDAD_CONTRATACION, responsable, vigencia, sys_user, registrado_por, sys_date, sys_status, transferir_a, ct_integrado";
$proto0["m_strFrom"] = "FROM nopaa_master";
$proto0["m_strWhere"] = "(PAA_ID > 1)";
$proto0["m_strOrderBy"] = "";
	
										;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "PAA_ID > 1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "PAA_ID",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_admin"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "> 1";
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
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_admin"
));

$proto6["m_sql"] = "PAA_ID";
$proto6["m_srcTableName"] = "nopaa_master_admin";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_ID",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_admin"
));

$proto8["m_sql"] = "ACT_ID";
$proto8["m_srcTableName"] = "nopaa_master_admin";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "PROD_ID",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_admin"
));

$proto10["m_sql"] = "PROD_ID";
$proto10["m_srcTableName"] = "nopaa_master_admin";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PAAID_INTEGRADO",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_admin"
));

$proto12["m_sql"] = "PAAID_INTEGRADO";
$proto12["m_srcTableName"] = "nopaa_master_admin";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "CDP_INTEGRADO",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_admin"
));

$proto14["m_sql"] = "CDP_INTEGRADO";
$proto14["m_srcTableName"] = "nopaa_master_admin";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_admin"
));

$proto16["m_sql"] = "DESCRIPCION";
$proto16["m_srcTableName"] = "nopaa_master_admin";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "MES_INICIO",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_admin"
));

$proto18["m_sql"] = "MES_INICIO";
$proto18["m_srcTableName"] = "nopaa_master_admin";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "FUENTE_RECURSOS",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_admin"
));

$proto20["m_sql"] = "FUENTE_RECURSOS";
$proto20["m_srcTableName"] = "nopaa_master_admin";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "VALOR",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_admin"
));

$proto22["m_sql"] = "VALOR";
$proto22["m_srcTableName"] = "nopaa_master_admin";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "UNIDAD_CONTRATACION",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_admin"
));

$proto24["m_sql"] = "UNIDAD_CONTRATACION";
$proto24["m_srcTableName"] = "nopaa_master_admin";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "responsable",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_admin"
));

$proto26["m_sql"] = "responsable";
$proto26["m_srcTableName"] = "nopaa_master_admin";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_admin"
));

$proto28["m_sql"] = "vigencia";
$proto28["m_srcTableName"] = "nopaa_master_admin";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_admin"
));

$proto30["m_sql"] = "sys_user";
$proto30["m_srcTableName"] = "nopaa_master_admin";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "registrado_por",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_admin"
));

$proto32["m_sql"] = "registrado_por";
$proto32["m_srcTableName"] = "nopaa_master_admin";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_date",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_admin"
));

$proto34["m_sql"] = "sys_date";
$proto34["m_srcTableName"] = "nopaa_master_admin";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_status",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_admin"
));

$proto36["m_sql"] = "sys_status";
$proto36["m_srcTableName"] = "nopaa_master_admin";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "transferir_a",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_admin"
));

$proto38["m_sql"] = "transferir_a";
$proto38["m_srcTableName"] = "nopaa_master_admin";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "ct_integrado",
	"m_strTable" => "nopaa_master",
	"m_srcTableName" => "nopaa_master_admin"
));

$proto40["m_sql"] = "ct_integrado";
$proto40["m_srcTableName"] = "nopaa_master_admin";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "nopaa_master";
$proto43["m_srcTableName"] = "nopaa_master_admin";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "PAA_ID";
$proto43["m_columns"][] = "ACT_ID";
$proto43["m_columns"][] = "PROD_ID";
$proto43["m_columns"][] = "TIPO";
$proto43["m_columns"][] = "PAAID_INTEGRADO";
$proto43["m_columns"][] = "CDP_INTEGRADO";
$proto43["m_columns"][] = "sys_status";
$proto43["m_columns"][] = "COD_UNSPSC";
$proto43["m_columns"][] = "DESCRIPCION";
$proto43["m_columns"][] = "DESCRIPCION_NEW";
$proto43["m_columns"][] = "MES_INICIO";
$proto43["m_columns"][] = "MES_PRESENTA";
$proto43["m_columns"][] = "FECHA_PRESENTA_PROPUESTAS";
$proto43["m_columns"][] = "DURACION_CONTRATO";
$proto43["m_columns"][] = "DURACION_ESTIMADA_DMA";
$proto43["m_columns"][] = "MODALIDAD";
$proto43["m_columns"][] = "FUENTE_RECURSOS";
$proto43["m_columns"][] = "VALOR";
$proto43["m_columns"][] = "VALOR_VIGENCIA";
$proto43["m_columns"][] = "VALOR_VIGENCIA_FUTURA";
$proto43["m_columns"][] = "VF";
$proto43["m_columns"][] = "ESTADO_VF";
$proto43["m_columns"][] = "UNIDAD_CONTRATACION";
$proto43["m_columns"][] = "COD_UBICACION";
$proto43["m_columns"][] = "RESPONSABLE_NOMBRE";
$proto43["m_columns"][] = "RESPONSABLE_TELEFONO";
$proto43["m_columns"][] = "RESPONSABLE_EMAIL";
$proto43["m_columns"][] = "responsable";
$proto43["m_columns"][] = "vigencia";
$proto43["m_columns"][] = "sys_user";
$proto43["m_columns"][] = "registrado_por";
$proto43["m_columns"][] = "sys_date";
$proto43["m_columns"][] = "REQ_OBS";
$proto43["m_columns"][] = "REQ_DATE";
$proto43["m_columns"][] = "REQ_MAILNOT";
$proto43["m_columns"][] = "SolModifica";
$proto43["m_columns"][] = "ContIdFK";
$proto43["m_columns"][] = "OBS_anulacion";
$proto43["m_columns"][] = "TIPOSOL";
$proto43["m_columns"][] = "USOS_TOTAL";
$proto43["m_columns"][] = "responsable_dep";
$proto43["m_columns"][] = "responsable_depsup";
$proto43["m_columns"][] = "transferir_a";
$proto43["m_columns"][] = "ct_integrado";
$proto43["m_columns"][] = "cont_tipoc";
$proto43["m_columns"][] = "cont_modalidad";
$proto43["m_columns"][] = "justificacion";
$proto43["m_columns"][] = "nbc";
$proto43["m_columns"][] = "nivel_formacion";
$proto43["m_columns"][] = "titulo_otorgado";
$proto43["m_columns"][] = "nivel_formacion_a";
$proto43["m_columns"][] = "titulo_otorgado_a";
$proto43["m_columns"][] = "tiempo_experiencia";
$proto43["m_columns"][] = "experiencia";
$proto43["m_columns"][] = "idoneidad";
$proto43["m_columns"][] = "cont_tipoca";
$proto43["m_columns"][] = "cont_tipocb";
$proto43["m_columns"][] = "cont_tipocc";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "nopaa_master";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "nopaa_master_admin";
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
$proto0["m_srcTableName"]="nopaa_master_admin";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_nopaa_master_admin = createSqlQuery_nopaa_master_admin();


	
										;

																		

$tdatanopaa_master_admin[".sqlquery"] = $queryData_nopaa_master_admin;



$tdatanopaa_master_admin[".hasEvents"] = false;

?>