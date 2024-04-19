<?php
$tdata000_global_sad = array();
$tdata000_global_sad[".searchableFields"] = array();
$tdata000_global_sad[".ShortName"] = "000_global_sad";
$tdata000_global_sad[".OwnerID"] = "";
$tdata000_global_sad[".OriginalTable"] = "000_global";


$tdata000_global_sad[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdata000_global_sad[".originalPagesByType"] = $tdata000_global_sad[".pagesByType"];
$tdata000_global_sad[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdata000_global_sad[".originalPages"] = $tdata000_global_sad[".pages"];
$tdata000_global_sad[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdata000_global_sad[".originalDefaultPages"] = $tdata000_global_sad[".defaultPages"];

//	field labels
$fieldLabels000_global_sad = array();
$fieldToolTips000_global_sad = array();
$pageTitles000_global_sad = array();
$placeHolders000_global_sad = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabels000_global_sad["Spanish"] = array();
	$fieldToolTips000_global_sad["Spanish"] = array();
	$placeHolders000_global_sad["Spanish"] = array();
	$pageTitles000_global_sad["Spanish"] = array();
	$fieldLabels000_global_sad["Spanish"]["RUBRO_ID"] = "RUBRO ID";
	$fieldToolTips000_global_sad["Spanish"]["RUBRO_ID"] = "";
	$placeHolders000_global_sad["Spanish"]["RUBRO_ID"] = "";
	$fieldLabels000_global_sad["Spanish"]["VIGENCIA"] = "VIGENCIA";
	$fieldToolTips000_global_sad["Spanish"]["VIGENCIA"] = "";
	$placeHolders000_global_sad["Spanish"]["VIGENCIA"] = "";
	$fieldLabels000_global_sad["Spanish"]["UEJ"] = "UEJ";
	$fieldToolTips000_global_sad["Spanish"]["UEJ"] = "";
	$placeHolders000_global_sad["Spanish"]["UEJ"] = "";
	$fieldLabels000_global_sad["Spanish"]["DESCRIPCION"] = "DESCRIPCION";
	$fieldToolTips000_global_sad["Spanish"]["DESCRIPCION"] = "";
	$placeHolders000_global_sad["Spanish"]["DESCRIPCION"] = "";
	$fieldLabels000_global_sad["Spanish"]["PRESUPUESTO"] = "PRESUPUESTO";
	$fieldToolTips000_global_sad["Spanish"]["PRESUPUESTO"] = "";
	$placeHolders000_global_sad["Spanish"]["PRESUPUESTO"] = "";
	$fieldLabels000_global_sad["Spanish"]["SALDO"] = "SALDO POR UTILIZAR";
	$fieldToolTips000_global_sad["Spanish"]["SALDO"] = "";
	$placeHolders000_global_sad["Spanish"]["SALDO"] = "";
	$fieldLabels000_global_sad["Spanish"]["UTILIZADO"] = "PROGRAMADO";
	$fieldToolTips000_global_sad["Spanish"]["UTILIZADO"] = "";
	$placeHolders000_global_sad["Spanish"]["UTILIZADO"] = "";
	$fieldLabels000_global_sad["Spanish"]["TIPO"] = "TIPO";
	$fieldToolTips000_global_sad["Spanish"]["TIPO"] = "";
	$placeHolders000_global_sad["Spanish"]["TIPO"] = "";
	$fieldLabels000_global_sad["Spanish"]["ESTADO"] = "ESTADO";
	$fieldToolTips000_global_sad["Spanish"]["ESTADO"] = "";
	$placeHolders000_global_sad["Spanish"]["ESTADO"] = "";
	$pageTitles000_global_sad["Spanish"]["add"] = "Servicio a la deuda";
	$pageTitles000_global_sad["Spanish"]["edit"] = "Servicio a la deuda, Editar [{%RUBRO_ID}]";
	if (count($fieldToolTips000_global_sad["Spanish"]))
		$tdata000_global_sad[".isUseToolTips"] = true;
}


	$tdata000_global_sad[".NCSearch"] = true;



$tdata000_global_sad[".shortTableName"] = "000_global_sad";
$tdata000_global_sad[".nSecOptions"] = 0;

$tdata000_global_sad[".mainTableOwnerID"] = "";
$tdata000_global_sad[".entityType"] = 1;
$tdata000_global_sad[".connId"] = "sep2_at_127_0_0_1";


$tdata000_global_sad[".strOriginalTableName"] = "000_global";

	



$tdata000_global_sad[".showAddInPopup"] = false;

$tdata000_global_sad[".showEditInPopup"] = false;

$tdata000_global_sad[".showViewInPopup"] = false;

$tdata000_global_sad[".listAjax"] = false;
//	temporary
//$tdata000_global_sad[".listAjax"] = false;

	$tdata000_global_sad[".audit"] = true;

	$tdata000_global_sad[".locking"] = true;


$pages = $tdata000_global_sad[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdata000_global_sad[".edit"] = true;
	$tdata000_global_sad[".afterEditAction"] = 0;
	$tdata000_global_sad[".closePopupAfterEdit"] = 1;
	$tdata000_global_sad[".afterEditActionDetTable"] = "001_rubro";
}

if( $pages[PAGE_ADD] ) {
$tdata000_global_sad[".add"] = true;
$tdata000_global_sad[".afterAddAction"] = 0;
$tdata000_global_sad[".closePopupAfterAdd"] = 1;
$tdata000_global_sad[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdata000_global_sad[".list"] = true;
}



$tdata000_global_sad[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdata000_global_sad[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdata000_global_sad[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdata000_global_sad[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdata000_global_sad[".printFriendly"] = true;
}



$tdata000_global_sad[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdata000_global_sad[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdata000_global_sad[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdata000_global_sad[".isUseAjaxSuggest"] = true;



												

$tdata000_global_sad[".ajaxCodeSnippetAdded"] = false;

$tdata000_global_sad[".buttonsAdded"] = false;

$tdata000_global_sad[".addPageEvents"] = true;

// use timepicker for search panel
$tdata000_global_sad[".isUseTimeForSearch"] = false;


$tdata000_global_sad[".badgeColor"] = "E8926F";


$tdata000_global_sad[".allSearchFields"] = array();
$tdata000_global_sad[".filterFields"] = array();
$tdata000_global_sad[".requiredSearchFields"] = array();

$tdata000_global_sad[".googleLikeFields"] = array();
$tdata000_global_sad[".googleLikeFields"][] = "RUBRO_ID";
$tdata000_global_sad[".googleLikeFields"][] = "VIGENCIA";
$tdata000_global_sad[".googleLikeFields"][] = "UEJ";
$tdata000_global_sad[".googleLikeFields"][] = "DESCRIPCION";
$tdata000_global_sad[".googleLikeFields"][] = "PRESUPUESTO";
$tdata000_global_sad[".googleLikeFields"][] = "UTILIZADO";
$tdata000_global_sad[".googleLikeFields"][] = "SALDO";
$tdata000_global_sad[".googleLikeFields"][] = "TIPO";
$tdata000_global_sad[".googleLikeFields"][] = "ESTADO";



$tdata000_global_sad[".tableType"] = "list";

$tdata000_global_sad[".printerPageOrientation"] = 0;
$tdata000_global_sad[".nPrinterPageScale"] = 100;

$tdata000_global_sad[".nPrinterSplitRecords"] = 40;

$tdata000_global_sad[".geocodingEnabled"] = false;










$tdata000_global_sad[".pageSize"] = 20;

$tdata000_global_sad[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdata000_global_sad[".strOrderBy"] = $tstrOrderBy;

$tdata000_global_sad[".orderindexes"] = array();


$tdata000_global_sad[".sqlHead"] = "SELECT RUBRO_ID,  VIGENCIA,  UEJ,  DESCRIPCION,  PRESUPUESTO,  UTILIZADO,  SALDO,  TIPO,  ESTADO";
$tdata000_global_sad[".sqlFrom"] = "FROM `000_global`";
$tdata000_global_sad[".sqlWhereExpr"] = "(TIPO = 3)";
$tdata000_global_sad[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata000_global_sad[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata000_global_sad[".arrGroupsPerPage"] = $arrGPP;

$tdata000_global_sad[".highlightSearchResults"] = true;

$tableKeys000_global_sad = array();
$tableKeys000_global_sad[] = "RUBRO_ID";
$tdata000_global_sad[".Keys"] = $tableKeys000_global_sad;


$tdata000_global_sad[".hideMobileList"] = array();




//	RUBRO_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "RUBRO_ID";
	$fdata["GoodName"] = "RUBRO_ID";
	$fdata["ownerTable"] = "000_global";
	$fdata["Label"] = GetFieldLabel("000_global_sad","RUBRO_ID");
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


	$tdata000_global_sad["RUBRO_ID"] = $fdata;
		$tdata000_global_sad[".searchableFields"][] = "RUBRO_ID";
//	VIGENCIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "VIGENCIA";
	$fdata["GoodName"] = "VIGENCIA";
	$fdata["ownerTable"] = "000_global";
	$fdata["Label"] = GetFieldLabel("000_global_sad","VIGENCIA");
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

		
	$edata["LinkField"] = "vigencia";
	$edata["LinkFieldType"] = 2;
	$edata["DisplayField"] = "vigencia";

				$edata["LookupWhere"] = "estado = 1";


	
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


	$tdata000_global_sad["VIGENCIA"] = $fdata;
		$tdata000_global_sad[".searchableFields"][] = "VIGENCIA";
//	UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "UEJ";
	$fdata["GoodName"] = "UEJ";
	$fdata["ownerTable"] = "000_global";
	$fdata["Label"] = GetFieldLabel("000_global_sad","UEJ");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tparam_uej";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"DESCRIPCION", 'lookupF'=>"sector_name");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "sector_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "sector_id";

				$edata["LookupWhere"] = "ctrl = 1";


	
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


	$tdata000_global_sad["UEJ"] = $fdata;
		$tdata000_global_sad[".searchableFields"][] = "UEJ";
//	DESCRIPCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DESCRIPCION";
	$fdata["GoodName"] = "DESCRIPCION";
	$fdata["ownerTable"] = "000_global";
	$fdata["Label"] = GetFieldLabel("000_global_sad","DESCRIPCION");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DESCRIPCION";

	
	
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


	$tdata000_global_sad["DESCRIPCION"] = $fdata;
		$tdata000_global_sad[".searchableFields"][] = "DESCRIPCION";
//	PRESUPUESTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PRESUPUESTO";
	$fdata["GoodName"] = "PRESUPUESTO";
	$fdata["ownerTable"] = "000_global";
	$fdata["Label"] = GetFieldLabel("000_global_sad","PRESUPUESTO");
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


	$tdata000_global_sad["PRESUPUESTO"] = $fdata;
		$tdata000_global_sad[".searchableFields"][] = "PRESUPUESTO";
//	UTILIZADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "UTILIZADO";
	$fdata["GoodName"] = "UTILIZADO";
	$fdata["ownerTable"] = "000_global";
	$fdata["Label"] = GetFieldLabel("000_global_sad","UTILIZADO");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "UTILIZADO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UTILIZADO";

	
	
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


	$tdata000_global_sad["UTILIZADO"] = $fdata;
		$tdata000_global_sad[".searchableFields"][] = "UTILIZADO";
//	SALDO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "SALDO";
	$fdata["GoodName"] = "SALDO";
	$fdata["ownerTable"] = "000_global";
	$fdata["Label"] = GetFieldLabel("000_global_sad","SALDO");
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


	$tdata000_global_sad["SALDO"] = $fdata;
		$tdata000_global_sad[".searchableFields"][] = "SALDO";
//	TIPO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "TIPO";
	$fdata["GoodName"] = "TIPO";
	$fdata["ownerTable"] = "000_global";
	$fdata["Label"] = GetFieldLabel("000_global_sad","TIPO");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tparam_fuente";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "tipo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "fuente_name";

	

	
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


	$tdata000_global_sad["TIPO"] = $fdata;
		$tdata000_global_sad[".searchableFields"][] = "TIPO";
//	ESTADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ESTADO";
	$fdata["GoodName"] = "ESTADO";
	$fdata["ownerTable"] = "000_global";
	$fdata["Label"] = GetFieldLabel("000_global_sad","ESTADO");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "ESTADO";

		$fdata["sourceSingle"] = "ESTADO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ESTADO";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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
	$edata["LookupTable"] = "tparam_estado";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "estado_id";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "estado";

	

	
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


	$tdata000_global_sad["ESTADO"] = $fdata;
		$tdata000_global_sad[".searchableFields"][] = "ESTADO";


$tables_data["000_global_sad"]=&$tdata000_global_sad;
$field_labels["000_global_sad"] = &$fieldLabels000_global_sad;
$fieldToolTips["000_global_sad"] = &$fieldToolTips000_global_sad;
$placeHolders["000_global_sad"] = &$placeHolders000_global_sad;
$page_titles["000_global_sad"] = &$pageTitles000_global_sad;


changeTextControlsToDate( "000_global_sad" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["000_global_sad"] = array();
//	001_rubro_sad
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="001_rubro_sad";
		$detailsParam["dOriginalTable"] = "001_rubro";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "001_rubro_sad";
	$detailsParam["dCaptionTable"] = GetTableCaption("001_rubro_sad");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["000_global_sad"][$dIndex] = $detailsParam;

	
		$detailsTablesData["000_global_sad"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["000_global_sad"][$dIndex]["masterKeys"][]="RUBRO_ID";

	$detailsTablesData["000_global_sad"][$dIndex]["masterKeys"][]="VIGENCIA";

				$detailsTablesData["000_global_sad"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["000_global_sad"][$dIndex]["detailKeys"][]="RUBRO_ID_FK";

		
	$detailsTablesData["000_global_sad"][$dIndex]["detailKeys"][]="VIGENCIA";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["000_global_sad"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_000_global_sad()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "RUBRO_ID,  VIGENCIA,  UEJ,  DESCRIPCION,  PRESUPUESTO,  UTILIZADO,  SALDO,  TIPO,  ESTADO";
$proto0["m_strFrom"] = "FROM `000_global`";
$proto0["m_strWhere"] = "(TIPO = 3)";
$proto0["m_strOrderBy"] = "";
	
										;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "TIPO = 3";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "000_global",
	"m_srcTableName" => "000_global_sad"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 3";
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
	"m_strTable" => "000_global",
	"m_srcTableName" => "000_global_sad"
));

$proto6["m_sql"] = "RUBRO_ID";
$proto6["m_srcTableName"] = "000_global_sad";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "VIGENCIA",
	"m_strTable" => "000_global",
	"m_srcTableName" => "000_global_sad"
));

$proto8["m_sql"] = "VIGENCIA";
$proto8["m_srcTableName"] = "000_global_sad";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "UEJ",
	"m_strTable" => "000_global",
	"m_srcTableName" => "000_global_sad"
));

$proto10["m_sql"] = "UEJ";
$proto10["m_srcTableName"] = "000_global_sad";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION",
	"m_strTable" => "000_global",
	"m_srcTableName" => "000_global_sad"
));

$proto12["m_sql"] = "DESCRIPCION";
$proto12["m_srcTableName"] = "000_global_sad";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "PRESUPUESTO",
	"m_strTable" => "000_global",
	"m_srcTableName" => "000_global_sad"
));

$proto14["m_sql"] = "PRESUPUESTO";
$proto14["m_srcTableName"] = "000_global_sad";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "UTILIZADO",
	"m_strTable" => "000_global",
	"m_srcTableName" => "000_global_sad"
));

$proto16["m_sql"] = "UTILIZADO";
$proto16["m_srcTableName"] = "000_global_sad";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "SALDO",
	"m_strTable" => "000_global",
	"m_srcTableName" => "000_global_sad"
));

$proto18["m_sql"] = "SALDO";
$proto18["m_srcTableName"] = "000_global_sad";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "000_global",
	"m_srcTableName" => "000_global_sad"
));

$proto20["m_sql"] = "TIPO";
$proto20["m_srcTableName"] = "000_global_sad";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ESTADO",
	"m_strTable" => "000_global",
	"m_srcTableName" => "000_global_sad"
));

$proto22["m_sql"] = "ESTADO";
$proto22["m_srcTableName"] = "000_global_sad";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "000_global";
$proto25["m_srcTableName"] = "000_global_sad";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "RUBRO_ID";
$proto25["m_columns"][] = "VIGENCIA";
$proto25["m_columns"][] = "UEJ";
$proto25["m_columns"][] = "DESCRIPCION";
$proto25["m_columns"][] = "PRESUPUESTO";
$proto25["m_columns"][] = "UTILIZADO";
$proto25["m_columns"][] = "SALDO";
$proto25["m_columns"][] = "TIPO";
$proto25["m_columns"][] = "ESTADO";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "`000_global`";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "000_global_sad";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="000_global_sad";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_000_global_sad = createSqlQuery_000_global_sad();


	
										;

									

$tdata000_global_sad[".sqlquery"] = $queryData_000_global_sad;



include_once(getabspath("include/000_global_sad_events.php"));
$tdata000_global_sad[".hasEvents"] = true;

?>