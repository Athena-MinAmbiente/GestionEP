<?php
$tdataq_paa_integrados = array();
$tdataq_paa_integrados[".searchableFields"] = array();
$tdataq_paa_integrados[".ShortName"] = "q_paa_integrados";
$tdataq_paa_integrados[".OwnerID"] = "";
$tdataq_paa_integrados[".OriginalTable"] = "q_paa_integrados";


$tdataq_paa_integrados[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataq_paa_integrados[".originalPagesByType"] = $tdataq_paa_integrados[".pagesByType"];
$tdataq_paa_integrados[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataq_paa_integrados[".originalPages"] = $tdataq_paa_integrados[".pages"];
$tdataq_paa_integrados[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdataq_paa_integrados[".originalDefaultPages"] = $tdataq_paa_integrados[".defaultPages"];

//	field labels
$fieldLabelsq_paa_integrados = array();
$fieldToolTipsq_paa_integrados = array();
$pageTitlesq_paa_integrados = array();
$placeHoldersq_paa_integrados = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_paa_integrados["Spanish"] = array();
	$fieldToolTipsq_paa_integrados["Spanish"] = array();
	$placeHoldersq_paa_integrados["Spanish"] = array();
	$pageTitlesq_paa_integrados["Spanish"] = array();
	$fieldLabelsq_paa_integrados["Spanish"]["PAA_ID"] = "PAA ID";
	$fieldToolTipsq_paa_integrados["Spanish"]["PAA_ID"] = "";
	$placeHoldersq_paa_integrados["Spanish"]["PAA_ID"] = "";
	$fieldLabelsq_paa_integrados["Spanish"]["DESCRIPCION"] = "DESCRIPCION";
	$fieldToolTipsq_paa_integrados["Spanish"]["DESCRIPCION"] = "";
	$placeHoldersq_paa_integrados["Spanish"]["DESCRIPCION"] = "";
	$fieldLabelsq_paa_integrados["Spanish"]["ct_integrado"] = "Ct Integrado";
	$fieldToolTipsq_paa_integrados["Spanish"]["ct_integrado"] = "";
	$placeHoldersq_paa_integrados["Spanish"]["ct_integrado"] = "";
	$fieldLabelsq_paa_integrados["Spanish"]["vigencia"] = "Vigencia";
	$fieldToolTipsq_paa_integrados["Spanish"]["vigencia"] = "";
	$placeHoldersq_paa_integrados["Spanish"]["vigencia"] = "";
	if (count($fieldToolTipsq_paa_integrados["Spanish"]))
		$tdataq_paa_integrados[".isUseToolTips"] = true;
}


	$tdataq_paa_integrados[".NCSearch"] = true;



$tdataq_paa_integrados[".shortTableName"] = "q_paa_integrados";
$tdataq_paa_integrados[".nSecOptions"] = 0;

$tdataq_paa_integrados[".mainTableOwnerID"] = "";
$tdataq_paa_integrados[".entityType"] = 0;
$tdataq_paa_integrados[".connId"] = "mincit_global_20x_at_127_0_0_1";


$tdataq_paa_integrados[".strOriginalTableName"] = "q_paa_integrados";

	



$tdataq_paa_integrados[".showAddInPopup"] = false;

$tdataq_paa_integrados[".showEditInPopup"] = false;

$tdataq_paa_integrados[".showViewInPopup"] = false;

$tdataq_paa_integrados[".listAjax"] = false;
//	temporary
//$tdataq_paa_integrados[".listAjax"] = false;

	$tdataq_paa_integrados[".audit"] = true;

	$tdataq_paa_integrados[".locking"] = true;


$pages = $tdataq_paa_integrados[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_paa_integrados[".edit"] = true;
	$tdataq_paa_integrados[".afterEditAction"] = 1;
	$tdataq_paa_integrados[".closePopupAfterEdit"] = 1;
	$tdataq_paa_integrados[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_paa_integrados[".add"] = true;
$tdataq_paa_integrados[".afterAddAction"] = 1;
$tdataq_paa_integrados[".closePopupAfterAdd"] = 1;
$tdataq_paa_integrados[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_paa_integrados[".list"] = true;
}



$tdataq_paa_integrados[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_paa_integrados[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_paa_integrados[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_paa_integrados[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_paa_integrados[".printFriendly"] = true;
}



$tdataq_paa_integrados[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_paa_integrados[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_paa_integrados[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_paa_integrados[".isUseAjaxSuggest"] = true;



												

$tdataq_paa_integrados[".ajaxCodeSnippetAdded"] = false;

$tdataq_paa_integrados[".buttonsAdded"] = false;

$tdataq_paa_integrados[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_paa_integrados[".isUseTimeForSearch"] = false;


$tdataq_paa_integrados[".badgeColor"] = "BC8F8F";


$tdataq_paa_integrados[".allSearchFields"] = array();
$tdataq_paa_integrados[".filterFields"] = array();
$tdataq_paa_integrados[".requiredSearchFields"] = array();

$tdataq_paa_integrados[".googleLikeFields"] = array();
$tdataq_paa_integrados[".googleLikeFields"][] = "ct_integrado";
$tdataq_paa_integrados[".googleLikeFields"][] = "DESCRIPCION";
$tdataq_paa_integrados[".googleLikeFields"][] = "PAA_ID";
$tdataq_paa_integrados[".googleLikeFields"][] = "vigencia";



$tdataq_paa_integrados[".tableType"] = "list";

$tdataq_paa_integrados[".printerPageOrientation"] = 0;
$tdataq_paa_integrados[".nPrinterPageScale"] = 100;

$tdataq_paa_integrados[".nPrinterSplitRecords"] = 40;

$tdataq_paa_integrados[".geocodingEnabled"] = false;










$tdataq_paa_integrados[".pageSize"] = 20;

$tdataq_paa_integrados[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataq_paa_integrados[".strOrderBy"] = $tstrOrderBy;

$tdataq_paa_integrados[".orderindexes"] = array();


$tdataq_paa_integrados[".sqlHead"] = "SELECT ct_integrado,  	DESCRIPCION,  	PAA_ID,  	LEFT(PAA_ID, 4) AS vigencia";
$tdataq_paa_integrados[".sqlFrom"] = "FROM q_paa_integrados";
$tdataq_paa_integrados[".sqlWhereExpr"] = "";
$tdataq_paa_integrados[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "0",
	'name' => "2024",
	'nameType' => 'Text',
	'where' => "LEFT(PAA_ID, 4) = 2024",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$arrGridTabs[] = array(
	'tabId' => "1",
	'name' => "2023",
	'nameType' => 'Text',
	'where' => "LEFT(PAA_ID, 4) = 2023",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdataq_paa_integrados[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_paa_integrados[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_paa_integrados[".arrGroupsPerPage"] = $arrGPP;

$tdataq_paa_integrados[".highlightSearchResults"] = true;

$tableKeysq_paa_integrados = array();
$tdataq_paa_integrados[".Keys"] = $tableKeysq_paa_integrados;


$tdataq_paa_integrados[".hideMobileList"] = array();




//	ct_integrado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ct_integrado";
	$fdata["GoodName"] = "ct_integrado";
	$fdata["ownerTable"] = "q_paa_integrados";
	$fdata["Label"] = GetFieldLabel("q_paa_integrados","ct_integrado");
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


	$tdataq_paa_integrados["ct_integrado"] = $fdata;
		$tdataq_paa_integrados[".searchableFields"][] = "ct_integrado";
//	DESCRIPCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DESCRIPCION";
	$fdata["GoodName"] = "DESCRIPCION";
	$fdata["ownerTable"] = "q_paa_integrados";
	$fdata["Label"] = GetFieldLabel("q_paa_integrados","DESCRIPCION");
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


	$tdataq_paa_integrados["DESCRIPCION"] = $fdata;
		$tdataq_paa_integrados[".searchableFields"][] = "DESCRIPCION";
//	PAA_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PAA_ID";
	$fdata["GoodName"] = "PAA_ID";
	$fdata["ownerTable"] = "q_paa_integrados";
	$fdata["Label"] = GetFieldLabel("q_paa_integrados","PAA_ID");
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


	$tdataq_paa_integrados["PAA_ID"] = $fdata;
		$tdataq_paa_integrados[".searchableFields"][] = "PAA_ID";
//	vigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "vigencia";
	$fdata["GoodName"] = "vigencia";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("q_paa_integrados","vigencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "vigencia";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LEFT(PAA_ID, 4)";

	
	
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


	$tdataq_paa_integrados["vigencia"] = $fdata;
		$tdataq_paa_integrados[".searchableFields"][] = "vigencia";


$tables_data["q_paa_integrados"]=&$tdataq_paa_integrados;
$field_labels["q_paa_integrados"] = &$fieldLabelsq_paa_integrados;
$fieldToolTips["q_paa_integrados"] = &$fieldToolTipsq_paa_integrados;
$placeHolders["q_paa_integrados"] = &$placeHoldersq_paa_integrados;
$page_titles["q_paa_integrados"] = &$pageTitlesq_paa_integrados;


changeTextControlsToDate( "q_paa_integrados" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["q_paa_integrados"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["q_paa_integrados"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_q_paa_integrados()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ct_integrado,  	DESCRIPCION,  	PAA_ID,  	LEFT(PAA_ID, 4) AS vigencia";
$proto0["m_strFrom"] = "FROM q_paa_integrados";
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
	"m_strName" => "ct_integrado",
	"m_strTable" => "q_paa_integrados",
	"m_srcTableName" => "q_paa_integrados"
));

$proto6["m_sql"] = "ct_integrado";
$proto6["m_srcTableName"] = "q_paa_integrados";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION",
	"m_strTable" => "q_paa_integrados",
	"m_srcTableName" => "q_paa_integrados"
));

$proto8["m_sql"] = "DESCRIPCION";
$proto8["m_srcTableName"] = "q_paa_integrados";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "PAA_ID",
	"m_strTable" => "q_paa_integrados",
	"m_srcTableName" => "q_paa_integrados"
));

$proto10["m_sql"] = "PAA_ID";
$proto10["m_srcTableName"] = "q_paa_integrados";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$proto13=array();
$proto13["m_functiontype"] = "SQLF_CUSTOM";
$proto13["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "PAA_ID"
));

$proto13["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "4"
));

$proto13["m_arguments"][]=$obj;
$proto13["m_strFunctionName"] = "LEFT";
$obj = new SQLFunctionCall($proto13);

$proto12["m_sql"] = "LEFT(PAA_ID, 4)";
$proto12["m_srcTableName"] = "q_paa_integrados";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "vigencia";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "q_paa_integrados";
$proto17["m_srcTableName"] = "q_paa_integrados";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "PAA_ID";
$proto17["m_columns"][] = "DESCRIPCION";
$proto17["m_columns"][] = "ct_integrado";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "q_paa_integrados";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "q_paa_integrados";
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
$proto0["m_srcTableName"]="q_paa_integrados";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_paa_integrados = createSqlQuery_q_paa_integrados();


	
										;

				

$tdataq_paa_integrados[".sqlquery"] = $queryData_q_paa_integrados;



$tdataq_paa_integrados[".hasEvents"] = false;

?>