<?php
$tdataq_info_producto = array();
$tdataq_info_producto[".searchableFields"] = array();
$tdataq_info_producto[".ShortName"] = "q_info_producto";
$tdataq_info_producto[".OwnerID"] = "";
$tdataq_info_producto[".OriginalTable"] = "q_info_producto";


$tdataq_info_producto[".pagesByType"] = my_json_decode( "{}" );
$tdataq_info_producto[".originalPagesByType"] = $tdataq_info_producto[".pagesByType"];
$tdataq_info_producto[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataq_info_producto[".originalPages"] = $tdataq_info_producto[".pages"];
$tdataq_info_producto[".defaultPages"] = my_json_decode( "{}" );
$tdataq_info_producto[".originalDefaultPages"] = $tdataq_info_producto[".defaultPages"];

//	field labels
$fieldLabelsq_info_producto = array();
$fieldToolTipsq_info_producto = array();
$pageTitlesq_info_producto = array();
$placeHoldersq_info_producto = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_info_producto["Spanish"] = array();
	$fieldToolTipsq_info_producto["Spanish"] = array();
	$placeHoldersq_info_producto["Spanish"] = array();
	$pageTitlesq_info_producto["Spanish"] = array();
	$fieldLabelsq_info_producto["Spanish"]["PROD_ID"] = "PROD ID";
	$fieldToolTipsq_info_producto["Spanish"]["PROD_ID"] = "";
	$placeHoldersq_info_producto["Spanish"]["PROD_ID"] = "";
	$fieldLabelsq_info_producto["Spanish"]["UEJ"] = "UEJ";
	$fieldToolTipsq_info_producto["Spanish"]["UEJ"] = "";
	$placeHoldersq_info_producto["Spanish"]["UEJ"] = "";
	$fieldLabelsq_info_producto["Spanish"]["PRODUCTO"] = "PRODUCTO";
	$fieldToolTipsq_info_producto["Spanish"]["PRODUCTO"] = "";
	$placeHoldersq_info_producto["Spanish"]["PRODUCTO"] = "";
	$fieldLabelsq_info_producto["Spanish"]["DESCRIPCION"] = "DESCRIPCION";
	$fieldToolTipsq_info_producto["Spanish"]["DESCRIPCION"] = "";
	$placeHoldersq_info_producto["Spanish"]["DESCRIPCION"] = "";
	$fieldLabelsq_info_producto["Spanish"]["info_producto"] = "Info Producto";
	$fieldToolTipsq_info_producto["Spanish"]["info_producto"] = "";
	$placeHoldersq_info_producto["Spanish"]["info_producto"] = "";
	if (count($fieldToolTipsq_info_producto["Spanish"]))
		$tdataq_info_producto[".isUseToolTips"] = true;
}


	$tdataq_info_producto[".NCSearch"] = true;



$tdataq_info_producto[".shortTableName"] = "q_info_producto";
$tdataq_info_producto[".nSecOptions"] = 0;

$tdataq_info_producto[".mainTableOwnerID"] = "";
$tdataq_info_producto[".entityType"] = 0;
$tdataq_info_producto[".connId"] = "sep2_at_127_0_0_1";


$tdataq_info_producto[".strOriginalTableName"] = "q_info_producto";

	



$tdataq_info_producto[".showAddInPopup"] = false;

$tdataq_info_producto[".showEditInPopup"] = false;

$tdataq_info_producto[".showViewInPopup"] = false;

$tdataq_info_producto[".listAjax"] = false;
//	temporary
//$tdataq_info_producto[".listAjax"] = false;

	$tdataq_info_producto[".audit"] = true;

	$tdataq_info_producto[".locking"] = true;


$pages = $tdataq_info_producto[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_info_producto[".edit"] = true;
	$tdataq_info_producto[".afterEditAction"] = 1;
	$tdataq_info_producto[".closePopupAfterEdit"] = 1;
	$tdataq_info_producto[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_info_producto[".add"] = true;
$tdataq_info_producto[".afterAddAction"] = 1;
$tdataq_info_producto[".closePopupAfterAdd"] = 1;
$tdataq_info_producto[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_info_producto[".list"] = true;
}



$tdataq_info_producto[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_info_producto[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_info_producto[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_info_producto[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_info_producto[".printFriendly"] = true;
}



$tdataq_info_producto[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_info_producto[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_info_producto[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_info_producto[".isUseAjaxSuggest"] = true;



												

$tdataq_info_producto[".ajaxCodeSnippetAdded"] = false;

$tdataq_info_producto[".buttonsAdded"] = false;

$tdataq_info_producto[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_info_producto[".isUseTimeForSearch"] = false;


$tdataq_info_producto[".badgeColor"] = "1E90FF";


$tdataq_info_producto[".allSearchFields"] = array();
$tdataq_info_producto[".filterFields"] = array();
$tdataq_info_producto[".requiredSearchFields"] = array();

$tdataq_info_producto[".googleLikeFields"] = array();
$tdataq_info_producto[".googleLikeFields"][] = "PROD_ID";
$tdataq_info_producto[".googleLikeFields"][] = "UEJ";
$tdataq_info_producto[".googleLikeFields"][] = "PRODUCTO";
$tdataq_info_producto[".googleLikeFields"][] = "DESCRIPCION";
$tdataq_info_producto[".googleLikeFields"][] = "info_producto";



$tdataq_info_producto[".tableType"] = "list";

$tdataq_info_producto[".printerPageOrientation"] = 0;
$tdataq_info_producto[".nPrinterPageScale"] = 100;

$tdataq_info_producto[".nPrinterSplitRecords"] = 40;

$tdataq_info_producto[".geocodingEnabled"] = false;










$tdataq_info_producto[".pageSize"] = 20;

$tdataq_info_producto[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataq_info_producto[".strOrderBy"] = $tstrOrderBy;

$tdataq_info_producto[".orderindexes"] = array();


$tdataq_info_producto[".sqlHead"] = "SELECT PROD_ID,  	UEJ,  	PRODUCTO,  	DESCRIPCION,  	info_producto";
$tdataq_info_producto[".sqlFrom"] = "FROM q_info_producto";
$tdataq_info_producto[".sqlWhereExpr"] = "";
$tdataq_info_producto[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_info_producto[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_info_producto[".arrGroupsPerPage"] = $arrGPP;

$tdataq_info_producto[".highlightSearchResults"] = true;

$tableKeysq_info_producto = array();
$tdataq_info_producto[".Keys"] = $tableKeysq_info_producto;


$tdataq_info_producto[".hideMobileList"] = array();




//	PROD_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PROD_ID";
	$fdata["GoodName"] = "PROD_ID";
	$fdata["ownerTable"] = "q_info_producto";
	$fdata["Label"] = GetFieldLabel("q_info_producto","PROD_ID");
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


	$tdataq_info_producto["PROD_ID"] = $fdata;
		$tdataq_info_producto[".searchableFields"][] = "PROD_ID";
//	UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "UEJ";
	$fdata["GoodName"] = "UEJ";
	$fdata["ownerTable"] = "q_info_producto";
	$fdata["Label"] = GetFieldLabel("q_info_producto","UEJ");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "UEJ";

		$fdata["sourceSingle"] = "UEJ";

	
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


	$tdataq_info_producto["UEJ"] = $fdata;
		$tdataq_info_producto[".searchableFields"][] = "UEJ";
//	PRODUCTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PRODUCTO";
	$fdata["GoodName"] = "PRODUCTO";
	$fdata["ownerTable"] = "q_info_producto";
	$fdata["Label"] = GetFieldLabel("q_info_producto","PRODUCTO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PRODUCTO";

		$fdata["sourceSingle"] = "PRODUCTO";

	
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


	$tdataq_info_producto["PRODUCTO"] = $fdata;
		$tdataq_info_producto[".searchableFields"][] = "PRODUCTO";
//	DESCRIPCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DESCRIPCION";
	$fdata["GoodName"] = "DESCRIPCION";
	$fdata["ownerTable"] = "q_info_producto";
	$fdata["Label"] = GetFieldLabel("q_info_producto","DESCRIPCION");
	$fdata["FieldType"] = 200;


	
	
			

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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataq_info_producto["DESCRIPCION"] = $fdata;
		$tdataq_info_producto[".searchableFields"][] = "DESCRIPCION";
//	info_producto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "info_producto";
	$fdata["GoodName"] = "info_producto";
	$fdata["ownerTable"] = "q_info_producto";
	$fdata["Label"] = GetFieldLabel("q_info_producto","info_producto");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "info_producto";

		$fdata["sourceSingle"] = "info_producto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "info_producto";

	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
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


	$tdataq_info_producto["info_producto"] = $fdata;
		$tdataq_info_producto[".searchableFields"][] = "info_producto";


$tables_data["q_info_producto"]=&$tdataq_info_producto;
$field_labels["q_info_producto"] = &$fieldLabelsq_info_producto;
$fieldToolTips["q_info_producto"] = &$fieldToolTipsq_info_producto;
$placeHolders["q_info_producto"] = &$placeHoldersq_info_producto;
$page_titles["q_info_producto"] = &$pageTitlesq_info_producto;


changeTextControlsToDate( "q_info_producto" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["q_info_producto"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["q_info_producto"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_q_info_producto()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PROD_ID,  	UEJ,  	PRODUCTO,  	DESCRIPCION,  	info_producto";
$proto0["m_strFrom"] = "FROM q_info_producto";
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
	"m_strTable" => "q_info_producto",
	"m_srcTableName" => "q_info_producto"
));

$proto6["m_sql"] = "PROD_ID";
$proto6["m_srcTableName"] = "q_info_producto";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "UEJ",
	"m_strTable" => "q_info_producto",
	"m_srcTableName" => "q_info_producto"
));

$proto8["m_sql"] = "UEJ";
$proto8["m_srcTableName"] = "q_info_producto";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "PRODUCTO",
	"m_strTable" => "q_info_producto",
	"m_srcTableName" => "q_info_producto"
));

$proto10["m_sql"] = "PRODUCTO";
$proto10["m_srcTableName"] = "q_info_producto";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION",
	"m_strTable" => "q_info_producto",
	"m_srcTableName" => "q_info_producto"
));

$proto12["m_sql"] = "DESCRIPCION";
$proto12["m_srcTableName"] = "q_info_producto";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "info_producto",
	"m_strTable" => "q_info_producto",
	"m_srcTableName" => "q_info_producto"
));

$proto14["m_sql"] = "info_producto";
$proto14["m_srcTableName"] = "q_info_producto";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "q_info_producto";
$proto17["m_srcTableName"] = "q_info_producto";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "PROD_ID";
$proto17["m_columns"][] = "UEJ";
$proto17["m_columns"][] = "PRODUCTO";
$proto17["m_columns"][] = "DESCRIPCION";
$proto17["m_columns"][] = "info_producto";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "q_info_producto";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "q_info_producto";
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
$proto0["m_srcTableName"]="q_info_producto";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_info_producto = createSqlQuery_q_info_producto();


	
										;

					

$tdataq_info_producto[".sqlquery"] = $queryData_q_info_producto;



$tdataq_info_producto[".hasEvents"] = false;

?>