<?php
$tdataq_contrato_paa = array();
$tdataq_contrato_paa[".searchableFields"] = array();
$tdataq_contrato_paa[".ShortName"] = "q_contrato_paa";
$tdataq_contrato_paa[".OwnerID"] = "";
$tdataq_contrato_paa[".OriginalTable"] = "q_contrato_paa";


$tdataq_contrato_paa[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataq_contrato_paa[".originalPagesByType"] = $tdataq_contrato_paa[".pagesByType"];
$tdataq_contrato_paa[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataq_contrato_paa[".originalPages"] = $tdataq_contrato_paa[".pages"];
$tdataq_contrato_paa[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataq_contrato_paa[".originalDefaultPages"] = $tdataq_contrato_paa[".defaultPages"];

//	field labels
$fieldLabelsq_contrato_paa = array();
$fieldToolTipsq_contrato_paa = array();
$pageTitlesq_contrato_paa = array();
$placeHoldersq_contrato_paa = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_contrato_paa["Spanish"] = array();
	$fieldToolTipsq_contrato_paa["Spanish"] = array();
	$placeHoldersq_contrato_paa["Spanish"] = array();
	$pageTitlesq_contrato_paa["Spanish"] = array();
	$fieldLabelsq_contrato_paa["Spanish"]["id_cont_fk"] = "CONTRATO";
	$fieldToolTipsq_contrato_paa["Spanish"]["id_cont_fk"] = "";
	$placeHoldersq_contrato_paa["Spanish"]["id_cont_fk"] = "";
	$fieldLabelsq_contrato_paa["Spanish"]["paa_id_fk"] = "PAAID";
	$fieldToolTipsq_contrato_paa["Spanish"]["paa_id_fk"] = "";
	$placeHoldersq_contrato_paa["Spanish"]["paa_id_fk"] = "";
	$fieldLabelsq_contrato_paa["Spanish"]["numpaa"] = "Numpaa";
	$fieldToolTipsq_contrato_paa["Spanish"]["numpaa"] = "";
	$placeHoldersq_contrato_paa["Spanish"]["numpaa"] = "";
	$fieldLabelsq_contrato_paa["Spanish"]["totalpaa"] = "VALOR CONTRATO";
	$fieldToolTipsq_contrato_paa["Spanish"]["totalpaa"] = "";
	$placeHoldersq_contrato_paa["Spanish"]["totalpaa"] = "";
	if (count($fieldToolTipsq_contrato_paa["Spanish"]))
		$tdataq_contrato_paa[".isUseToolTips"] = true;
}


	$tdataq_contrato_paa[".NCSearch"] = true;



$tdataq_contrato_paa[".shortTableName"] = "q_contrato_paa";
$tdataq_contrato_paa[".nSecOptions"] = 0;

$tdataq_contrato_paa[".mainTableOwnerID"] = "";
$tdataq_contrato_paa[".entityType"] = 0;
$tdataq_contrato_paa[".connId"] = "dbct_at_127_0_0_1";


$tdataq_contrato_paa[".strOriginalTableName"] = "q_contrato_paa";

	



$tdataq_contrato_paa[".showAddInPopup"] = false;

$tdataq_contrato_paa[".showEditInPopup"] = false;

$tdataq_contrato_paa[".showViewInPopup"] = false;

$tdataq_contrato_paa[".listAjax"] = false;
//	temporary
//$tdataq_contrato_paa[".listAjax"] = false;

	$tdataq_contrato_paa[".audit"] = true;

	$tdataq_contrato_paa[".locking"] = false;


$pages = $tdataq_contrato_paa[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_contrato_paa[".edit"] = true;
	$tdataq_contrato_paa[".afterEditAction"] = 1;
	$tdataq_contrato_paa[".closePopupAfterEdit"] = 1;
	$tdataq_contrato_paa[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_contrato_paa[".add"] = true;
$tdataq_contrato_paa[".afterAddAction"] = 1;
$tdataq_contrato_paa[".closePopupAfterAdd"] = 1;
$tdataq_contrato_paa[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_contrato_paa[".list"] = true;
}



$tdataq_contrato_paa[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_contrato_paa[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_contrato_paa[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_contrato_paa[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_contrato_paa[".printFriendly"] = true;
}



$tdataq_contrato_paa[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_contrato_paa[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_contrato_paa[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_contrato_paa[".isUseAjaxSuggest"] = true;



																								

$tdataq_contrato_paa[".ajaxCodeSnippetAdded"] = false;

$tdataq_contrato_paa[".buttonsAdded"] = false;

$tdataq_contrato_paa[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_contrato_paa[".isUseTimeForSearch"] = false;


$tdataq_contrato_paa[".badgeColor"] = "ff00ff";


$tdataq_contrato_paa[".allSearchFields"] = array();
$tdataq_contrato_paa[".filterFields"] = array();
$tdataq_contrato_paa[".requiredSearchFields"] = array();

$tdataq_contrato_paa[".googleLikeFields"] = array();
$tdataq_contrato_paa[".googleLikeFields"][] = "id_cont_fk";
$tdataq_contrato_paa[".googleLikeFields"][] = "paa_id_fk";
$tdataq_contrato_paa[".googleLikeFields"][] = "numpaa";
$tdataq_contrato_paa[".googleLikeFields"][] = "totalpaa";



$tdataq_contrato_paa[".tableType"] = "list";

$tdataq_contrato_paa[".printerPageOrientation"] = 0;
$tdataq_contrato_paa[".nPrinterPageScale"] = 100;

$tdataq_contrato_paa[".nPrinterSplitRecords"] = 40;

$tdataq_contrato_paa[".geocodingEnabled"] = false;










$tdataq_contrato_paa[".pageSize"] = 20;

$tdataq_contrato_paa[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataq_contrato_paa[".strOrderBy"] = $tstrOrderBy;

$tdataq_contrato_paa[".orderindexes"] = array();


$tdataq_contrato_paa[".sqlHead"] = "SELECT id_cont_fk,  	paa_id_fk,  	numpaa,  	totalpaa";
$tdataq_contrato_paa[".sqlFrom"] = "FROM q_contrato_paa";
$tdataq_contrato_paa[".sqlWhereExpr"] = "";
$tdataq_contrato_paa[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_contrato_paa[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_contrato_paa[".arrGroupsPerPage"] = $arrGPP;

$tdataq_contrato_paa[".highlightSearchResults"] = true;

$tableKeysq_contrato_paa = array();
$tdataq_contrato_paa[".Keys"] = $tableKeysq_contrato_paa;


$tdataq_contrato_paa[".hideMobileList"] = array();




//	id_cont_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_cont_fk";
	$fdata["GoodName"] = "id_cont_fk";
	$fdata["ownerTable"] = "q_contrato_paa";
	$fdata["Label"] = GetFieldLabel("q_contrato_paa","id_cont_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_cont_fk";

		$fdata["sourceSingle"] = "id_cont_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_cont_fk";

	
	
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
	$edata["LookupTable"] = "q_001_dashboard";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_cont";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "CONCAT_WS(' |  ', CONTRATOID, VIGENCIA)";

	

		$edata["CustomDisplay"] = "true";

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


	$tdataq_contrato_paa["id_cont_fk"] = $fdata;
		$tdataq_contrato_paa[".searchableFields"][] = "id_cont_fk";
//	paa_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "paa_id_fk";
	$fdata["GoodName"] = "paa_id_fk";
	$fdata["ownerTable"] = "q_contrato_paa";
	$fdata["Label"] = GetFieldLabel("q_contrato_paa","paa_id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "paa_id_fk";

		$fdata["sourceSingle"] = "paa_id_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paa_id_fk";

	
	
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


	$tdataq_contrato_paa["paa_id_fk"] = $fdata;
		$tdataq_contrato_paa[".searchableFields"][] = "paa_id_fk";
//	numpaa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "numpaa";
	$fdata["GoodName"] = "numpaa";
	$fdata["ownerTable"] = "q_contrato_paa";
	$fdata["Label"] = GetFieldLabel("q_contrato_paa","numpaa");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "numpaa";

		$fdata["sourceSingle"] = "numpaa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "numpaa";

	
	
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


	$tdataq_contrato_paa["numpaa"] = $fdata;
		$tdataq_contrato_paa[".searchableFields"][] = "numpaa";
//	totalpaa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "totalpaa";
	$fdata["GoodName"] = "totalpaa";
	$fdata["ownerTable"] = "q_contrato_paa";
	$fdata["Label"] = GetFieldLabel("q_contrato_paa","totalpaa");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "totalpaa";

		$fdata["sourceSingle"] = "totalpaa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "totalpaa";

	
	
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


	$tdataq_contrato_paa["totalpaa"] = $fdata;
		$tdataq_contrato_paa[".searchableFields"][] = "totalpaa";


$tables_data["q_contrato_paa"]=&$tdataq_contrato_paa;
$field_labels["q_contrato_paa"] = &$fieldLabelsq_contrato_paa;
$fieldToolTips["q_contrato_paa"] = &$fieldToolTipsq_contrato_paa;
$placeHolders["q_contrato_paa"] = &$placeHoldersq_contrato_paa;
$page_titles["q_contrato_paa"] = &$pageTitlesq_contrato_paa;


changeTextControlsToDate( "q_contrato_paa" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["q_contrato_paa"] = array();
//	q_001_dashboard
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="q_001_dashboard";
		$detailsParam["dOriginalTable"] = "q_001_dashboard";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "q_001_dashboard";
	$detailsParam["dCaptionTable"] = GetTableCaption("q_001_dashboard");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["q_contrato_paa"][$dIndex] = $detailsParam;

	
		$detailsTablesData["q_contrato_paa"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["q_contrato_paa"][$dIndex]["masterKeys"][]="id_cont_fk";

				$detailsTablesData["q_contrato_paa"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["q_contrato_paa"][$dIndex]["detailKeys"][]="id_cont";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["q_contrato_paa"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="paa_master";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="paa_master_admin";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "paa_master_admin";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["q_contrato_paa"][0] = $masterParams;
				$masterTablesData["q_contrato_paa"][0]["masterKeys"] = array();
	$masterTablesData["q_contrato_paa"][0]["masterKeys"][]="PAA_ID";
				$masterTablesData["q_contrato_paa"][0]["detailKeys"] = array();
	$masterTablesData["q_contrato_paa"][0]["detailKeys"][]="paa_id_fk";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_q_contrato_paa()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_cont_fk,  	paa_id_fk,  	numpaa,  	totalpaa";
$proto0["m_strFrom"] = "FROM q_contrato_paa";
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
	"m_strName" => "id_cont_fk",
	"m_strTable" => "q_contrato_paa",
	"m_srcTableName" => "q_contrato_paa"
));

$proto6["m_sql"] = "id_cont_fk";
$proto6["m_srcTableName"] = "q_contrato_paa";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "paa_id_fk",
	"m_strTable" => "q_contrato_paa",
	"m_srcTableName" => "q_contrato_paa"
));

$proto8["m_sql"] = "paa_id_fk";
$proto8["m_srcTableName"] = "q_contrato_paa";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "numpaa",
	"m_strTable" => "q_contrato_paa",
	"m_srcTableName" => "q_contrato_paa"
));

$proto10["m_sql"] = "numpaa";
$proto10["m_srcTableName"] = "q_contrato_paa";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "totalpaa",
	"m_strTable" => "q_contrato_paa",
	"m_srcTableName" => "q_contrato_paa"
));

$proto12["m_sql"] = "totalpaa";
$proto12["m_srcTableName"] = "q_contrato_paa";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "q_contrato_paa";
$proto15["m_srcTableName"] = "q_contrato_paa";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id_cont_fk";
$proto15["m_columns"][] = "paa_id_fk";
$proto15["m_columns"][] = "numpaa";
$proto15["m_columns"][] = "totalpaa";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "q_contrato_paa";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "q_contrato_paa";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="q_contrato_paa";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_contrato_paa = createSqlQuery_q_contrato_paa();


	
										;

				

$tdataq_contrato_paa[".sqlquery"] = $queryData_q_contrato_paa;



$tdataq_contrato_paa[".hasEvents"] = false;

?>