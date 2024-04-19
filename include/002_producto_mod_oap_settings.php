<?php
$tdata002_producto_mod_oap = array();
$tdata002_producto_mod_oap[".searchableFields"] = array();
$tdata002_producto_mod_oap[".ShortName"] = "002_producto_mod_oap";
$tdata002_producto_mod_oap[".OwnerID"] = "";
$tdata002_producto_mod_oap[".OriginalTable"] = "002_producto_mod";


$tdata002_producto_mod_oap[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdata002_producto_mod_oap[".originalPagesByType"] = $tdata002_producto_mod_oap[".pagesByType"];
$tdata002_producto_mod_oap[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdata002_producto_mod_oap[".originalPages"] = $tdata002_producto_mod_oap[".pages"];
$tdata002_producto_mod_oap[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdata002_producto_mod_oap[".originalDefaultPages"] = $tdata002_producto_mod_oap[".defaultPages"];

//	field labels
$fieldLabels002_producto_mod_oap = array();
$fieldToolTips002_producto_mod_oap = array();
$pageTitles002_producto_mod_oap = array();
$placeHolders002_producto_mod_oap = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabels002_producto_mod_oap["Spanish"] = array();
	$fieldToolTips002_producto_mod_oap["Spanish"] = array();
	$placeHolders002_producto_mod_oap["Spanish"] = array();
	$pageTitles002_producto_mod_oap["Spanish"] = array();
	$fieldLabels002_producto_mod_oap["Spanish"]["mod_id"] = "Radicado de modificación";
	$fieldToolTips002_producto_mod_oap["Spanish"]["mod_id"] = "";
	$placeHolders002_producto_mod_oap["Spanish"]["mod_id"] = "";
	$fieldLabels002_producto_mod_oap["Spanish"]["prod_id_fk"] = "Id";
	$fieldToolTips002_producto_mod_oap["Spanish"]["prod_id_fk"] = "";
	$placeHolders002_producto_mod_oap["Spanish"]["prod_id_fk"] = "";
	$fieldLabels002_producto_mod_oap["Spanish"]["tipo_mod"] = "Tipo Modificación";
	$fieldToolTips002_producto_mod_oap["Spanish"]["tipo_mod"] = "";
	$placeHolders002_producto_mod_oap["Spanish"]["tipo_mod"] = "";
	$fieldLabels002_producto_mod_oap["Spanish"]["email_not"] = "Se notificará a:";
	$fieldToolTips002_producto_mod_oap["Spanish"]["email_not"] = "";
	$placeHolders002_producto_mod_oap["Spanish"]["email_not"] = "";
	$fieldLabels002_producto_mod_oap["Spanish"]["email_user"] = "Correo respuesta";
	$fieldToolTips002_producto_mod_oap["Spanish"]["email_user"] = "";
	$placeHolders002_producto_mod_oap["Spanish"]["email_user"] = "";
	$fieldLabels002_producto_mod_oap["Spanish"]["valor_actual"] = "Valor Actual";
	$fieldToolTips002_producto_mod_oap["Spanish"]["valor_actual"] = "";
	$placeHolders002_producto_mod_oap["Spanish"]["valor_actual"] = "";
	$fieldLabels002_producto_mod_oap["Spanish"]["valor_nuevo"] = "Nuevo valor solicitado";
	$fieldToolTips002_producto_mod_oap["Spanish"]["valor_nuevo"] = "";
	$placeHolders002_producto_mod_oap["Spanish"]["valor_nuevo"] = "";
	$fieldLabels002_producto_mod_oap["Spanish"]["mod_justificacion"] = "Justificación";
	$fieldToolTips002_producto_mod_oap["Spanish"]["mod_justificacion"] = "";
	$placeHolders002_producto_mod_oap["Spanish"]["mod_justificacion"] = "";
	$fieldLabels002_producto_mod_oap["Spanish"]["mod_estado"] = "Estado";
	$fieldToolTips002_producto_mod_oap["Spanish"]["mod_estado"] = "";
	$placeHolders002_producto_mod_oap["Spanish"]["mod_estado"] = "";
	$fieldLabels002_producto_mod_oap["Spanish"]["mod_file"] = "Adjuntar documento";
	$fieldToolTips002_producto_mod_oap["Spanish"]["mod_file"] = "";
	$placeHolders002_producto_mod_oap["Spanish"]["mod_file"] = "";
	$fieldLabels002_producto_mod_oap["Spanish"]["sys_user"] = "Solicitado por";
	$fieldToolTips002_producto_mod_oap["Spanish"]["sys_user"] = "";
	$placeHolders002_producto_mod_oap["Spanish"]["sys_user"] = "";
	$fieldLabels002_producto_mod_oap["Spanish"]["sys_date"] = "Fecha de solicitud";
	$fieldToolTips002_producto_mod_oap["Spanish"]["sys_date"] = "";
	$placeHolders002_producto_mod_oap["Spanish"]["sys_date"] = "";
	$fieldLabels002_producto_mod_oap["Spanish"]["sys_last_act"] = "Sys Last Act";
	$fieldToolTips002_producto_mod_oap["Spanish"]["sys_last_act"] = "";
	$placeHolders002_producto_mod_oap["Spanish"]["sys_last_act"] = "";
	$fieldLabels002_producto_mod_oap["Spanish"]["resp_user"] = "Gestionado por";
	$fieldToolTips002_producto_mod_oap["Spanish"]["resp_user"] = "";
	$placeHolders002_producto_mod_oap["Spanish"]["resp_user"] = "";
	$fieldLabels002_producto_mod_oap["Spanish"]["resp_date"] = "Fecha de respuesta";
	$fieldToolTips002_producto_mod_oap["Spanish"]["resp_date"] = "";
	$placeHolders002_producto_mod_oap["Spanish"]["resp_date"] = "";
	$fieldLabels002_producto_mod_oap["Spanish"]["resp_msj"] = "Mensaje de respuesta";
	$fieldToolTips002_producto_mod_oap["Spanish"]["resp_msj"] = "";
	$placeHolders002_producto_mod_oap["Spanish"]["resp_msj"] = "Redacte una respuesta al usuario solicitante | Campo no obligatorio";
	if (count($fieldToolTips002_producto_mod_oap["Spanish"]))
		$tdata002_producto_mod_oap[".isUseToolTips"] = true;
}


	$tdata002_producto_mod_oap[".NCSearch"] = true;



$tdata002_producto_mod_oap[".shortTableName"] = "002_producto_mod_oap";
$tdata002_producto_mod_oap[".nSecOptions"] = 0;

$tdata002_producto_mod_oap[".mainTableOwnerID"] = "";
$tdata002_producto_mod_oap[".entityType"] = 1;
$tdata002_producto_mod_oap[".connId"] = "sep2_at_127_0_0_1";


$tdata002_producto_mod_oap[".strOriginalTableName"] = "002_producto_mod";

	



$tdata002_producto_mod_oap[".showAddInPopup"] = false;

$tdata002_producto_mod_oap[".showEditInPopup"] = false;

$tdata002_producto_mod_oap[".showViewInPopup"] = false;

$tdata002_producto_mod_oap[".listAjax"] = false;
//	temporary
//$tdata002_producto_mod_oap[".listAjax"] = false;

	$tdata002_producto_mod_oap[".audit"] = true;

	$tdata002_producto_mod_oap[".locking"] = true;


$pages = $tdata002_producto_mod_oap[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdata002_producto_mod_oap[".edit"] = true;
	$tdata002_producto_mod_oap[".afterEditAction"] = 1;
	$tdata002_producto_mod_oap[".closePopupAfterEdit"] = 1;
	$tdata002_producto_mod_oap[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdata002_producto_mod_oap[".add"] = true;
$tdata002_producto_mod_oap[".afterAddAction"] = 1;
$tdata002_producto_mod_oap[".closePopupAfterAdd"] = 1;
$tdata002_producto_mod_oap[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdata002_producto_mod_oap[".list"] = true;
}



$tdata002_producto_mod_oap[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdata002_producto_mod_oap[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdata002_producto_mod_oap[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdata002_producto_mod_oap[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdata002_producto_mod_oap[".printFriendly"] = true;
}



$tdata002_producto_mod_oap[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdata002_producto_mod_oap[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdata002_producto_mod_oap[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdata002_producto_mod_oap[".isUseAjaxSuggest"] = true;



												

$tdata002_producto_mod_oap[".ajaxCodeSnippetAdded"] = false;

$tdata002_producto_mod_oap[".buttonsAdded"] = false;

$tdata002_producto_mod_oap[".addPageEvents"] = true;

// use timepicker for search panel
$tdata002_producto_mod_oap[".isUseTimeForSearch"] = false;


$tdata002_producto_mod_oap[".badgeColor"] = "4169E1";


$tdata002_producto_mod_oap[".allSearchFields"] = array();
$tdata002_producto_mod_oap[".filterFields"] = array();
$tdata002_producto_mod_oap[".requiredSearchFields"] = array();

$tdata002_producto_mod_oap[".googleLikeFields"] = array();
$tdata002_producto_mod_oap[".googleLikeFields"][] = "mod_id";
$tdata002_producto_mod_oap[".googleLikeFields"][] = "prod_id_fk";
$tdata002_producto_mod_oap[".googleLikeFields"][] = "tipo_mod";
$tdata002_producto_mod_oap[".googleLikeFields"][] = "email_not";
$tdata002_producto_mod_oap[".googleLikeFields"][] = "email_user";
$tdata002_producto_mod_oap[".googleLikeFields"][] = "valor_actual";
$tdata002_producto_mod_oap[".googleLikeFields"][] = "valor_nuevo";
$tdata002_producto_mod_oap[".googleLikeFields"][] = "mod_justificacion";
$tdata002_producto_mod_oap[".googleLikeFields"][] = "mod_estado";
$tdata002_producto_mod_oap[".googleLikeFields"][] = "mod_file";
$tdata002_producto_mod_oap[".googleLikeFields"][] = "sys_user";
$tdata002_producto_mod_oap[".googleLikeFields"][] = "sys_date";
$tdata002_producto_mod_oap[".googleLikeFields"][] = "sys_last_act";
$tdata002_producto_mod_oap[".googleLikeFields"][] = "resp_user";
$tdata002_producto_mod_oap[".googleLikeFields"][] = "resp_date";
$tdata002_producto_mod_oap[".googleLikeFields"][] = "resp_msj";



$tdata002_producto_mod_oap[".tableType"] = "list";

$tdata002_producto_mod_oap[".printerPageOrientation"] = 0;
$tdata002_producto_mod_oap[".nPrinterPageScale"] = 100;

$tdata002_producto_mod_oap[".nPrinterSplitRecords"] = 40;

$tdata002_producto_mod_oap[".geocodingEnabled"] = false;










$tdata002_producto_mod_oap[".pageSize"] = 20;

$tdata002_producto_mod_oap[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdata002_producto_mod_oap[".strOrderBy"] = $tstrOrderBy;

$tdata002_producto_mod_oap[".orderindexes"] = array();


$tdata002_producto_mod_oap[".sqlHead"] = "SELECT mod_id,  	prod_id_fk,  	tipo_mod,  	email_not,  	email_user,  	valor_actual,  	valor_nuevo,  	mod_justificacion,  	mod_estado,  	mod_file,  	sys_user,  	sys_date,  	sys_last_act,  	resp_user,  	resp_date,  	resp_msj";
$tdata002_producto_mod_oap[".sqlFrom"] = "FROM `002_producto_mod`";
$tdata002_producto_mod_oap[".sqlWhereExpr"] = "";
$tdata002_producto_mod_oap[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "En estudio",
	'nameType' => 'Text',
	'where' => "mod_estado = 1",
	'showRowCount' => 1,
	'hideEmpty' => 1,
);
$arrGridTabs[] = array(
	'tabId' => "1",
	'name' => "Aprobadas",
	'nameType' => 'Text',
	'where' => "mod_estado = 2",
	'showRowCount' => 1,
	'hideEmpty' => 1,
);
$arrGridTabs[] = array(
	'tabId' => "2",
	'name' => "Negadas",
	'nameType' => 'Text',
	'where' => "mod_estado = 3",
	'showRowCount' => 1,
	'hideEmpty' => 1,
);
$tdata002_producto_mod_oap[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata002_producto_mod_oap[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata002_producto_mod_oap[".arrGroupsPerPage"] = $arrGPP;

$tdata002_producto_mod_oap[".highlightSearchResults"] = true;

$tableKeys002_producto_mod_oap = array();
$tableKeys002_producto_mod_oap[] = "mod_id";
$tdata002_producto_mod_oap[".Keys"] = $tableKeys002_producto_mod_oap;


$tdata002_producto_mod_oap[".hideMobileList"] = array();




//	mod_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "mod_id";
	$fdata["GoodName"] = "mod_id";
	$fdata["ownerTable"] = "002_producto_mod";
	$fdata["Label"] = GetFieldLabel("002_producto_mod_oap","mod_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "mod_id";

		$fdata["sourceSingle"] = "mod_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mod_id";

	
	
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


	$tdata002_producto_mod_oap["mod_id"] = $fdata;
		$tdata002_producto_mod_oap[".searchableFields"][] = "mod_id";
//	prod_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "prod_id_fk";
	$fdata["GoodName"] = "prod_id_fk";
	$fdata["ownerTable"] = "002_producto_mod";
	$fdata["Label"] = GetFieldLabel("002_producto_mod_oap","prod_id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "prod_id_fk";

		$fdata["sourceSingle"] = "prod_id_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "prod_id_fk";

	
	
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
	$edata["LookupTable"] = "002_producto";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"valor_actual", 'lookupF'=>"PROD_PRESUPUESTO");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "PROD_ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "PROD_ID";

	

	
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


	$tdata002_producto_mod_oap["prod_id_fk"] = $fdata;
		$tdata002_producto_mod_oap[".searchableFields"][] = "prod_id_fk";
//	tipo_mod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "tipo_mod";
	$fdata["GoodName"] = "tipo_mod";
	$fdata["ownerTable"] = "002_producto_mod";
	$fdata["Label"] = GetFieldLabel("002_producto_mod_oap","tipo_mod");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "tipo_mod";

		$fdata["sourceSingle"] = "tipo_mod";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_mod";

	
	
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
	$edata["LookupTable"] = "tparam_tipomod";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"email_not", 'lookupF'=>"mod_email_not");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "mtipo_id";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "tipo_mod";

	

	
	$edata["LookupOrderBy"] = "tipo_mod";

	
	
	
	

	
	
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


	$tdata002_producto_mod_oap["tipo_mod"] = $fdata;
		$tdata002_producto_mod_oap[".searchableFields"][] = "tipo_mod";
//	email_not
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email_not";
	$fdata["GoodName"] = "email_not";
	$fdata["ownerTable"] = "002_producto_mod";
	$fdata["Label"] = GetFieldLabel("002_producto_mod_oap","email_not");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email_not";

		$fdata["sourceSingle"] = "email_not";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email_not";

	
	
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


	$tdata002_producto_mod_oap["email_not"] = $fdata;
		$tdata002_producto_mod_oap[".searchableFields"][] = "email_not";
//	email_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "email_user";
	$fdata["GoodName"] = "email_user";
	$fdata["ownerTable"] = "002_producto_mod";
	$fdata["Label"] = GetFieldLabel("002_producto_mod_oap","email_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email_user";

		$fdata["sourceSingle"] = "email_user";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email_user";

	
	
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


	$tdata002_producto_mod_oap["email_user"] = $fdata;
		$tdata002_producto_mod_oap[".searchableFields"][] = "email_user";
//	valor_actual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "valor_actual";
	$fdata["GoodName"] = "valor_actual";
	$fdata["ownerTable"] = "002_producto_mod";
	$fdata["Label"] = GetFieldLabel("002_producto_mod_oap","valor_actual");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "valor_actual";

		$fdata["sourceSingle"] = "valor_actual";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valor_actual";

	
	
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


	$tdata002_producto_mod_oap["valor_actual"] = $fdata;
		$tdata002_producto_mod_oap[".searchableFields"][] = "valor_actual";
//	valor_nuevo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "valor_nuevo";
	$fdata["GoodName"] = "valor_nuevo";
	$fdata["ownerTable"] = "002_producto_mod";
	$fdata["Label"] = GetFieldLabel("002_producto_mod_oap","valor_nuevo");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "valor_nuevo";

		$fdata["sourceSingle"] = "valor_nuevo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valor_nuevo";

	
	
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


	$tdata002_producto_mod_oap["valor_nuevo"] = $fdata;
		$tdata002_producto_mod_oap[".searchableFields"][] = "valor_nuevo";
//	mod_justificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "mod_justificacion";
	$fdata["GoodName"] = "mod_justificacion";
	$fdata["ownerTable"] = "002_producto_mod";
	$fdata["Label"] = GetFieldLabel("002_producto_mod_oap","mod_justificacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "mod_justificacion";

		$fdata["sourceSingle"] = "mod_justificacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mod_justificacion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
	
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


	$tdata002_producto_mod_oap["mod_justificacion"] = $fdata;
		$tdata002_producto_mod_oap[".searchableFields"][] = "mod_justificacion";
//	mod_estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "mod_estado";
	$fdata["GoodName"] = "mod_estado";
	$fdata["ownerTable"] = "002_producto_mod";
	$fdata["Label"] = GetFieldLabel("002_producto_mod_oap","mod_estado");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "mod_estado";

		$fdata["sourceSingle"] = "mod_estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mod_estado";

	
	
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
	$edata["LookupTable"] = "tparam_mod_estado";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "tipom_id";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "tipom_estado";

	

	
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


	$tdata002_producto_mod_oap["mod_estado"] = $fdata;
		$tdata002_producto_mod_oap[".searchableFields"][] = "mod_estado";
//	mod_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "mod_file";
	$fdata["GoodName"] = "mod_file";
	$fdata["ownerTable"] = "002_producto_mod";
	$fdata["Label"] = GetFieldLabel("002_producto_mod_oap","mod_file");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "mod_file";

		$fdata["sourceSingle"] = "mod_file";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mod_file";

	
	
				$fdata["UploadFolder"] = "GesDoc/Mod/";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
				
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = array();
			$edata["acceptFileTypes"][] = strtoupper("pdf");
						$edata["acceptFileTypesHtml"] = ".pdf";

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


	$tdata002_producto_mod_oap["mod_file"] = $fdata;
		$tdata002_producto_mod_oap[".searchableFields"][] = "mod_file";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "002_producto_mod";
	$fdata["Label"] = GetFieldLabel("002_producto_mod_oap","sys_user");
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
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Username";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "usr_nombresfull";

	

	
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


	$tdata002_producto_mod_oap["sys_user"] = $fdata;
		$tdata002_producto_mod_oap[".searchableFields"][] = "sys_user";
//	sys_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "sys_date";
	$fdata["GoodName"] = "sys_date";
	$fdata["ownerTable"] = "002_producto_mod";
	$fdata["Label"] = GetFieldLabel("002_producto_mod_oap","sys_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sys_date";

		$fdata["sourceSingle"] = "sys_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
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


	$tdata002_producto_mod_oap["sys_date"] = $fdata;
		$tdata002_producto_mod_oap[".searchableFields"][] = "sys_date";
//	sys_last_act
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "sys_last_act";
	$fdata["GoodName"] = "sys_last_act";
	$fdata["ownerTable"] = "002_producto_mod";
	$fdata["Label"] = GetFieldLabel("002_producto_mod_oap","sys_last_act");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sys_last_act";

		$fdata["sourceSingle"] = "sys_last_act";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_last_act";

	
	
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


	$tdata002_producto_mod_oap["sys_last_act"] = $fdata;
		$tdata002_producto_mod_oap[".searchableFields"][] = "sys_last_act";
//	resp_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "resp_user";
	$fdata["GoodName"] = "resp_user";
	$fdata["ownerTable"] = "002_producto_mod";
	$fdata["Label"] = GetFieldLabel("002_producto_mod_oap","resp_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "resp_user";

		$fdata["sourceSingle"] = "resp_user";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "resp_user";

	
	
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


	$tdata002_producto_mod_oap["resp_user"] = $fdata;
		$tdata002_producto_mod_oap[".searchableFields"][] = "resp_user";
//	resp_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "resp_date";
	$fdata["GoodName"] = "resp_date";
	$fdata["ownerTable"] = "002_producto_mod";
	$fdata["Label"] = GetFieldLabel("002_producto_mod_oap","resp_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "resp_date";

		$fdata["sourceSingle"] = "resp_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "resp_date";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
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


	$tdata002_producto_mod_oap["resp_date"] = $fdata;
		$tdata002_producto_mod_oap[".searchableFields"][] = "resp_date";
//	resp_msj
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "resp_msj";
	$fdata["GoodName"] = "resp_msj";
	$fdata["ownerTable"] = "002_producto_mod";
	$fdata["Label"] = GetFieldLabel("002_producto_mod_oap","resp_msj");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "resp_msj";

		$fdata["sourceSingle"] = "resp_msj";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "resp_msj";

	
	
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


	$tdata002_producto_mod_oap["resp_msj"] = $fdata;
		$tdata002_producto_mod_oap[".searchableFields"][] = "resp_msj";


$tables_data["002_producto_mod_oap"]=&$tdata002_producto_mod_oap;
$field_labels["002_producto_mod_oap"] = &$fieldLabels002_producto_mod_oap;
$fieldToolTips["002_producto_mod_oap"] = &$fieldToolTips002_producto_mod_oap;
$placeHolders["002_producto_mod_oap"] = &$placeHolders002_producto_mod_oap;
$page_titles["002_producto_mod_oap"] = &$pageTitles002_producto_mod_oap;


changeTextControlsToDate( "002_producto_mod_oap" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["002_producto_mod_oap"] = array();
//	002_producto_m_oap
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="002_producto_m_oap";
		$detailsParam["dOriginalTable"] = "002_producto";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "002_producto_m_oap";
	$detailsParam["dCaptionTable"] = GetTableCaption("002_producto_m_oap");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["002_producto_mod_oap"][$dIndex] = $detailsParam;

	
		$detailsTablesData["002_producto_mod_oap"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["002_producto_mod_oap"][$dIndex]["masterKeys"][]="prod_id_fk";

				$detailsTablesData["002_producto_mod_oap"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["002_producto_mod_oap"][$dIndex]["detailKeys"][]="PROD_ID";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["002_producto_mod_oap"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_002_producto_mod_oap()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "mod_id,  	prod_id_fk,  	tipo_mod,  	email_not,  	email_user,  	valor_actual,  	valor_nuevo,  	mod_justificacion,  	mod_estado,  	mod_file,  	sys_user,  	sys_date,  	sys_last_act,  	resp_user,  	resp_date,  	resp_msj";
$proto0["m_strFrom"] = "FROM `002_producto_mod`";
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
	"m_strName" => "mod_id",
	"m_strTable" => "002_producto_mod",
	"m_srcTableName" => "002_producto_mod_oap"
));

$proto6["m_sql"] = "mod_id";
$proto6["m_srcTableName"] = "002_producto_mod_oap";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "prod_id_fk",
	"m_strTable" => "002_producto_mod",
	"m_srcTableName" => "002_producto_mod_oap"
));

$proto8["m_sql"] = "prod_id_fk";
$proto8["m_srcTableName"] = "002_producto_mod_oap";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_mod",
	"m_strTable" => "002_producto_mod",
	"m_srcTableName" => "002_producto_mod_oap"
));

$proto10["m_sql"] = "tipo_mod";
$proto10["m_srcTableName"] = "002_producto_mod_oap";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email_not",
	"m_strTable" => "002_producto_mod",
	"m_srcTableName" => "002_producto_mod_oap"
));

$proto12["m_sql"] = "email_not";
$proto12["m_srcTableName"] = "002_producto_mod_oap";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "email_user",
	"m_strTable" => "002_producto_mod",
	"m_srcTableName" => "002_producto_mod_oap"
));

$proto14["m_sql"] = "email_user";
$proto14["m_srcTableName"] = "002_producto_mod_oap";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_actual",
	"m_strTable" => "002_producto_mod",
	"m_srcTableName" => "002_producto_mod_oap"
));

$proto16["m_sql"] = "valor_actual";
$proto16["m_srcTableName"] = "002_producto_mod_oap";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_nuevo",
	"m_strTable" => "002_producto_mod",
	"m_srcTableName" => "002_producto_mod_oap"
));

$proto18["m_sql"] = "valor_nuevo";
$proto18["m_srcTableName"] = "002_producto_mod_oap";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "mod_justificacion",
	"m_strTable" => "002_producto_mod",
	"m_srcTableName" => "002_producto_mod_oap"
));

$proto20["m_sql"] = "mod_justificacion";
$proto20["m_srcTableName"] = "002_producto_mod_oap";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "mod_estado",
	"m_strTable" => "002_producto_mod",
	"m_srcTableName" => "002_producto_mod_oap"
));

$proto22["m_sql"] = "mod_estado";
$proto22["m_srcTableName"] = "002_producto_mod_oap";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "mod_file",
	"m_strTable" => "002_producto_mod",
	"m_srcTableName" => "002_producto_mod_oap"
));

$proto24["m_sql"] = "mod_file";
$proto24["m_srcTableName"] = "002_producto_mod_oap";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "002_producto_mod",
	"m_srcTableName" => "002_producto_mod_oap"
));

$proto26["m_sql"] = "sys_user";
$proto26["m_srcTableName"] = "002_producto_mod_oap";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_date",
	"m_strTable" => "002_producto_mod",
	"m_srcTableName" => "002_producto_mod_oap"
));

$proto28["m_sql"] = "sys_date";
$proto28["m_srcTableName"] = "002_producto_mod_oap";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_last_act",
	"m_strTable" => "002_producto_mod",
	"m_srcTableName" => "002_producto_mod_oap"
));

$proto30["m_sql"] = "sys_last_act";
$proto30["m_srcTableName"] = "002_producto_mod_oap";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "resp_user",
	"m_strTable" => "002_producto_mod",
	"m_srcTableName" => "002_producto_mod_oap"
));

$proto32["m_sql"] = "resp_user";
$proto32["m_srcTableName"] = "002_producto_mod_oap";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "resp_date",
	"m_strTable" => "002_producto_mod",
	"m_srcTableName" => "002_producto_mod_oap"
));

$proto34["m_sql"] = "resp_date";
$proto34["m_srcTableName"] = "002_producto_mod_oap";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "resp_msj",
	"m_strTable" => "002_producto_mod",
	"m_srcTableName" => "002_producto_mod_oap"
));

$proto36["m_sql"] = "resp_msj";
$proto36["m_srcTableName"] = "002_producto_mod_oap";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "002_producto_mod";
$proto39["m_srcTableName"] = "002_producto_mod_oap";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "mod_id";
$proto39["m_columns"][] = "prod_id_fk";
$proto39["m_columns"][] = "tipo_mod";
$proto39["m_columns"][] = "email_not";
$proto39["m_columns"][] = "email_user";
$proto39["m_columns"][] = "valor_actual";
$proto39["m_columns"][] = "valor_nuevo";
$proto39["m_columns"][] = "mod_justificacion";
$proto39["m_columns"][] = "mod_estado";
$proto39["m_columns"][] = "mod_file";
$proto39["m_columns"][] = "sys_user";
$proto39["m_columns"][] = "sys_date";
$proto39["m_columns"][] = "sys_last_act";
$proto39["m_columns"][] = "resp_user";
$proto39["m_columns"][] = "resp_date";
$proto39["m_columns"][] = "resp_msj";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "`002_producto_mod`";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "002_producto_mod_oap";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="002_producto_mod_oap";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_002_producto_mod_oap = createSqlQuery_002_producto_mod_oap();


	
										;

																

$tdata002_producto_mod_oap[".sqlquery"] = $queryData_002_producto_mod_oap;



include_once(getabspath("include/002_producto_mod_oap_events.php"));
$tdata002_producto_mod_oap[".hasEvents"] = true;

?>