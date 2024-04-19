<?php
$tdatascdp_event_type = array();
$tdatascdp_event_type[".searchableFields"] = array();
$tdatascdp_event_type[".ShortName"] = "scdp_event_type";
$tdatascdp_event_type[".OwnerID"] = "";
$tdatascdp_event_type[".OriginalTable"] = "scdp_event_type";


$tdatascdp_event_type[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatascdp_event_type[".originalPagesByType"] = $tdatascdp_event_type[".pagesByType"];
$tdatascdp_event_type[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatascdp_event_type[".originalPages"] = $tdatascdp_event_type[".pages"];
$tdatascdp_event_type[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatascdp_event_type[".originalDefaultPages"] = $tdatascdp_event_type[".defaultPages"];

//	field labels
$fieldLabelsscdp_event_type = array();
$fieldToolTipsscdp_event_type = array();
$pageTitlesscdp_event_type = array();
$placeHoldersscdp_event_type = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsscdp_event_type["Spanish"] = array();
	$fieldToolTipsscdp_event_type["Spanish"] = array();
	$placeHoldersscdp_event_type["Spanish"] = array();
	$pageTitlesscdp_event_type["Spanish"] = array();
	$fieldLabelsscdp_event_type["Spanish"]["evento_type_id"] = "Id";
	$fieldToolTipsscdp_event_type["Spanish"]["evento_type_id"] = "";
	$placeHoldersscdp_event_type["Spanish"]["evento_type_id"] = "";
	$fieldLabelsscdp_event_type["Spanish"]["evento_type_name"] = "Nombre de Estado";
	$fieldToolTipsscdp_event_type["Spanish"]["evento_type_name"] = "";
	$placeHoldersscdp_event_type["Spanish"]["evento_type_name"] = "";
	$fieldLabelsscdp_event_type["Spanish"]["evento_type_group"] = "Grupo";
	$fieldToolTipsscdp_event_type["Spanish"]["evento_type_group"] = "";
	$placeHoldersscdp_event_type["Spanish"]["evento_type_group"] = "";
	$fieldLabelsscdp_event_type["Spanish"]["evento_type_desc"] = "Descripción";
	$fieldToolTipsscdp_event_type["Spanish"]["evento_type_desc"] = "";
	$placeHoldersscdp_event_type["Spanish"]["evento_type_desc"] = "";
	$fieldLabelsscdp_event_type["Spanish"]["evento_unidad_contratacion"] = "Evento Unidad Contratacion";
	$fieldToolTipsscdp_event_type["Spanish"]["evento_unidad_contratacion"] = "";
	$placeHoldersscdp_event_type["Spanish"]["evento_unidad_contratacion"] = "";
	if (count($fieldToolTipsscdp_event_type["Spanish"]))
		$tdatascdp_event_type[".isUseToolTips"] = true;
}


	$tdatascdp_event_type[".NCSearch"] = true;



$tdatascdp_event_type[".shortTableName"] = "scdp_event_type";
$tdatascdp_event_type[".nSecOptions"] = 0;

$tdatascdp_event_type[".mainTableOwnerID"] = "";
$tdatascdp_event_type[".entityType"] = 0;
$tdatascdp_event_type[".connId"] = "mincit_global_20x_at_127_0_0_1";


$tdatascdp_event_type[".strOriginalTableName"] = "scdp_event_type";

	



$tdatascdp_event_type[".showAddInPopup"] = false;

$tdatascdp_event_type[".showEditInPopup"] = false;

$tdatascdp_event_type[".showViewInPopup"] = false;

$tdatascdp_event_type[".listAjax"] = false;
//	temporary
//$tdatascdp_event_type[".listAjax"] = false;

	$tdatascdp_event_type[".audit"] = true;

	$tdatascdp_event_type[".locking"] = true;


$pages = $tdatascdp_event_type[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatascdp_event_type[".edit"] = true;
	$tdatascdp_event_type[".afterEditAction"] = 1;
	$tdatascdp_event_type[".closePopupAfterEdit"] = 1;
	$tdatascdp_event_type[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatascdp_event_type[".add"] = true;
$tdatascdp_event_type[".afterAddAction"] = 1;
$tdatascdp_event_type[".closePopupAfterAdd"] = 1;
$tdatascdp_event_type[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatascdp_event_type[".list"] = true;
}



$tdatascdp_event_type[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatascdp_event_type[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatascdp_event_type[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatascdp_event_type[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatascdp_event_type[".printFriendly"] = true;
}



$tdatascdp_event_type[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatascdp_event_type[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatascdp_event_type[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatascdp_event_type[".isUseAjaxSuggest"] = true;



												

$tdatascdp_event_type[".ajaxCodeSnippetAdded"] = false;

$tdatascdp_event_type[".buttonsAdded"] = false;

$tdatascdp_event_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdatascdp_event_type[".isUseTimeForSearch"] = false;


$tdatascdp_event_type[".badgeColor"] = "2F4F4F";


$tdatascdp_event_type[".allSearchFields"] = array();
$tdatascdp_event_type[".filterFields"] = array();
$tdatascdp_event_type[".requiredSearchFields"] = array();

$tdatascdp_event_type[".googleLikeFields"] = array();
$tdatascdp_event_type[".googleLikeFields"][] = "evento_type_id";
$tdatascdp_event_type[".googleLikeFields"][] = "evento_type_name";
$tdatascdp_event_type[".googleLikeFields"][] = "evento_type_group";
$tdatascdp_event_type[".googleLikeFields"][] = "evento_type_desc";
$tdatascdp_event_type[".googleLikeFields"][] = "evento_unidad_contratacion";



$tdatascdp_event_type[".tableType"] = "list";

$tdatascdp_event_type[".printerPageOrientation"] = 0;
$tdatascdp_event_type[".nPrinterPageScale"] = 100;

$tdatascdp_event_type[".nPrinterSplitRecords"] = 40;

$tdatascdp_event_type[".geocodingEnabled"] = false;










$tdatascdp_event_type[".pageSize"] = 20;

$tdatascdp_event_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatascdp_event_type[".strOrderBy"] = $tstrOrderBy;

$tdatascdp_event_type[".orderindexes"] = array();


$tdatascdp_event_type[".sqlHead"] = "SELECT evento_type_id, evento_type_name, evento_type_group, evento_type_desc, evento_unidad_contratacion";
$tdatascdp_event_type[".sqlFrom"] = "FROM scdp_event_type";
$tdatascdp_event_type[".sqlWhereExpr"] = "";
$tdatascdp_event_type[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatascdp_event_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatascdp_event_type[".arrGroupsPerPage"] = $arrGPP;

$tdatascdp_event_type[".highlightSearchResults"] = true;

$tableKeysscdp_event_type = array();
$tableKeysscdp_event_type[] = "evento_type_id";
$tdatascdp_event_type[".Keys"] = $tableKeysscdp_event_type;


$tdatascdp_event_type[".hideMobileList"] = array();




//	evento_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "evento_type_id";
	$fdata["GoodName"] = "evento_type_id";
	$fdata["ownerTable"] = "scdp_event_type";
	$fdata["Label"] = GetFieldLabel("scdp_event_type","evento_type_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "evento_type_id";

		$fdata["sourceSingle"] = "evento_type_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evento_type_id";

	
	
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


	$tdatascdp_event_type["evento_type_id"] = $fdata;
		$tdatascdp_event_type[".searchableFields"][] = "evento_type_id";
//	evento_type_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "evento_type_name";
	$fdata["GoodName"] = "evento_type_name";
	$fdata["ownerTable"] = "scdp_event_type";
	$fdata["Label"] = GetFieldLabel("scdp_event_type","evento_type_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "evento_type_name";

		$fdata["sourceSingle"] = "evento_type_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evento_type_name";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatascdp_event_type["evento_type_name"] = $fdata;
		$tdatascdp_event_type[".searchableFields"][] = "evento_type_name";
//	evento_type_group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "evento_type_group";
	$fdata["GoodName"] = "evento_type_group";
	$fdata["ownerTable"] = "scdp_event_type";
	$fdata["Label"] = GetFieldLabel("scdp_event_type","evento_type_group");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "evento_type_group";

		$fdata["sourceSingle"] = "evento_type_group";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evento_type_group";

	
	
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


	$tdatascdp_event_type["evento_type_group"] = $fdata;
		$tdatascdp_event_type[".searchableFields"][] = "evento_type_group";
//	evento_type_desc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "evento_type_desc";
	$fdata["GoodName"] = "evento_type_desc";
	$fdata["ownerTable"] = "scdp_event_type";
	$fdata["Label"] = GetFieldLabel("scdp_event_type","evento_type_desc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "evento_type_desc";

		$fdata["sourceSingle"] = "evento_type_desc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evento_type_desc";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatascdp_event_type["evento_type_desc"] = $fdata;
		$tdatascdp_event_type[".searchableFields"][] = "evento_type_desc";
//	evento_unidad_contratacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "evento_unidad_contratacion";
	$fdata["GoodName"] = "evento_unidad_contratacion";
	$fdata["ownerTable"] = "scdp_event_type";
	$fdata["Label"] = GetFieldLabel("scdp_event_type","evento_unidad_contratacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "evento_unidad_contratacion";

		$fdata["sourceSingle"] = "evento_unidad_contratacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evento_unidad_contratacion";

	
	
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


	$tdatascdp_event_type["evento_unidad_contratacion"] = $fdata;
		$tdatascdp_event_type[".searchableFields"][] = "evento_unidad_contratacion";


$tables_data["scdp_event_type"]=&$tdatascdp_event_type;
$field_labels["scdp_event_type"] = &$fieldLabelsscdp_event_type;
$fieldToolTips["scdp_event_type"] = &$fieldToolTipsscdp_event_type;
$placeHolders["scdp_event_type"] = &$placeHoldersscdp_event_type;
$page_titles["scdp_event_type"] = &$pageTitlesscdp_event_type;


changeTextControlsToDate( "scdp_event_type" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["scdp_event_type"] = array();
//	scdp_event_type_actividad
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="scdp_event_type_actividad";
		$detailsParam["dOriginalTable"] = "scdp_event_type_actividad";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "scdp_event_type_actividad";
	$detailsParam["dCaptionTable"] = GetTableCaption("scdp_event_type_actividad");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["scdp_event_type"][$dIndex] = $detailsParam;

	
		$detailsTablesData["scdp_event_type"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["scdp_event_type"][$dIndex]["masterKeys"][]="evento_type_id";

				$detailsTablesData["scdp_event_type"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["scdp_event_type"][$dIndex]["detailKeys"][]="evento_type_id_fk";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["scdp_event_type"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_scdp_event_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "evento_type_id, evento_type_name, evento_type_group, evento_type_desc, evento_unidad_contratacion";
$proto0["m_strFrom"] = "FROM scdp_event_type";
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
	"m_strName" => "evento_type_id",
	"m_strTable" => "scdp_event_type",
	"m_srcTableName" => "scdp_event_type"
));

$proto6["m_sql"] = "evento_type_id";
$proto6["m_srcTableName"] = "scdp_event_type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "evento_type_name",
	"m_strTable" => "scdp_event_type",
	"m_srcTableName" => "scdp_event_type"
));

$proto8["m_sql"] = "evento_type_name";
$proto8["m_srcTableName"] = "scdp_event_type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "evento_type_group",
	"m_strTable" => "scdp_event_type",
	"m_srcTableName" => "scdp_event_type"
));

$proto10["m_sql"] = "evento_type_group";
$proto10["m_srcTableName"] = "scdp_event_type";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "evento_type_desc",
	"m_strTable" => "scdp_event_type",
	"m_srcTableName" => "scdp_event_type"
));

$proto12["m_sql"] = "evento_type_desc";
$proto12["m_srcTableName"] = "scdp_event_type";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "evento_unidad_contratacion",
	"m_strTable" => "scdp_event_type",
	"m_srcTableName" => "scdp_event_type"
));

$proto14["m_sql"] = "evento_unidad_contratacion";
$proto14["m_srcTableName"] = "scdp_event_type";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "scdp_event_type";
$proto17["m_srcTableName"] = "scdp_event_type";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "evento_type_id";
$proto17["m_columns"][] = "evento_unidad_contratacion";
$proto17["m_columns"][] = "evento_type_name";
$proto17["m_columns"][] = "evento_type_group";
$proto17["m_columns"][] = "evento_type_desc";
$proto17["m_columns"][] = "evento_group_id";
$proto17["m_columns"][] = "evento_id_rol_fk";
$proto17["m_columns"][] = "evento_ver2";
$proto17["m_columns"][] = "actividad_id";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "scdp_event_type";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "scdp_event_type";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="scdp_event_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_scdp_event_type = createSqlQuery_scdp_event_type();


	
										;

					

$tdatascdp_event_type[".sqlquery"] = $queryData_scdp_event_type;



$tdatascdp_event_type[".hasEvents"] = false;

?>