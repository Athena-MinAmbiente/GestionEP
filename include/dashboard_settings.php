<?php
require_once(getabspath("classes/cipherer.php"));



$tdatadashboard = array();
$tdatadashboard[".ShortName"] = "dashboard";

$tdatadashboard[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\"],\"search\":[\"search\"]}" );
$tdatadashboard[".originalPagesByType"] = $tdatadashboard[".pagesByType"];
$tdatadashboard[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"],\"search\":[\"search\"]}" ) );
$tdatadashboard[".originalPages"] = $tdatadashboard[".pages"];
$tdatadashboard[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\",\"search\":\"search\"}" );
$tdatadashboard[".originalDefaultPages"] = $tdatadashboard[".defaultPages"];


//	field labels
$fieldLabelsdashboard = array();
$pageTitlesdashboard = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdashboard["Spanish"] = array();
	$fieldLabelsdashboard["Spanish"]["q_ctrl_saldo_0000c_Chart_RUBRO_ID_FK"] = "RUBRO ID FK";
	$fieldLabelsdashboard["Spanish"]["q_ctrl_saldo_0000c_Chart_UEJ"] = "UEJ";
	$fieldLabelsdashboard["Spanish"]["q_ctrl_saldo_0000c_Chart_VIGENCIA"] = "VIGENCIA";
	$fieldLabelsdashboard["Spanish"]["q_ctrl_saldo_0000c_Chart_QTYRUBRO"] = "QTYRUBRO";
	$fieldLabelsdashboard["Spanish"]["q_ctrl_saldo_0000c_Chart_PRESUPUESTO_OFICIAL"] = "PRESUPUESTO OFICIAL";
	$fieldLabelsdashboard["Spanish"]["q_ctrl_saldo_0000c_Chart_PRESUPUESTO_SOLICITADO"] = "PRESUPUESTO PROGRAMADO";
	$fieldLabelsdashboard["Spanish"]["q_ctrl_saldo_0001c_RUBRO_ID_FK"] = "RUBRO ID FK";
	$fieldLabelsdashboard["Spanish"]["q_ctrl_saldo_0001c_UEJ"] = "UEJ";
	$fieldLabelsdashboard["Spanish"]["q_ctrl_saldo_0001c_VIGENCIA"] = "VIGENCIA";
	$fieldLabelsdashboard["Spanish"]["q_ctrl_saldo_0001c_QTYRUBRO"] = "QTYRUBRO";
	$fieldLabelsdashboard["Spanish"]["q_ctrl_saldo_0001c_PRESUPUESTO_OFICIAL"] = "PRESUPUESTO OFICIAL";
	$fieldLabelsdashboard["Spanish"]["q_ctrl_saldo_0001c_PRESUPUESTO_SOLICITADO"] = "PRESUPUESTO SOLICITADO";
	$fieldLabelsdashboard["Spanish"]["q_ctrl_saldo_0001c_PRESUPUESTO_DISPONIBLE"] = "PRESUPUESTO DISPONIBLE";
	$fieldLabelsdashboard["Spanish"]["q_ctrl_saldo_0000f_Chart_RUBRO_ID_FK"] = "RUBRO ID FK";
	$fieldLabelsdashboard["Spanish"]["q_ctrl_saldo_0000f_Chart_UEJ"] = "UEJ";
	$fieldLabelsdashboard["Spanish"]["q_ctrl_saldo_0000f_Chart_VIGENCIA"] = "VIGENCIA";
	$fieldLabelsdashboard["Spanish"]["q_ctrl_saldo_0000f_Chart_QTYRUBRO"] = "QTYRUBRO";
	$fieldLabelsdashboard["Spanish"]["q_ctrl_saldo_0000f_Chart_PRESUPUESTO_OFICIAL"] = "PRESUPUESTO OFICIAL";
	$fieldLabelsdashboard["Spanish"]["q_ctrl_saldo_0000f_Chart_PRESUPUESTO_SOLICITADO"] = "PRESUPUESTO PROGRAMADO";
	$fieldLabelsdashboard["Spanish"]["q_ctrl_saldo_0001f_RUBRO_ID_FK"] = "RUBRO ID FK";
	$fieldLabelsdashboard["Spanish"]["q_ctrl_saldo_0001f_UEJ"] = "UEJ";
	$fieldLabelsdashboard["Spanish"]["q_ctrl_saldo_0001f_VIGENCIA"] = "VIGENCIA";
	$fieldLabelsdashboard["Spanish"]["q_ctrl_saldo_0001f_QTYRUBRO"] = "QTYRUBRO";
	$fieldLabelsdashboard["Spanish"]["q_ctrl_saldo_0001f_PRESUPUESTO_OFICIAL"] = "PRESUPUESTO OFICIAL";
	$fieldLabelsdashboard["Spanish"]["q_ctrl_saldo_0001f_PRESUPUESTO_SOLICITADO"] = "PRESUPUESTO SOLICITADO";
	$fieldLabelsdashboard["Spanish"]["q_ctrl_saldo_0001f_PRESUPUESTO_DISPONIBLE"] = "PRESUPUESTO DISPONIBLE";
}

/*
//	search fields
$tdatadashboard[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"q_ctrl_saldo_0000c Chart", "field"=>"UEJ" );
$tdatadashboard[".searchFields"]["q_ctrl_saldo_0000c_Chart_UEJ"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_ctrl_saldo_0000c Chart", "field"=>"VIGENCIA" );
$tdatadashboard[".searchFields"]["q_ctrl_saldo_0000c_Chart_VIGENCIA"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_ctrl_saldo_0000c Chart", "field"=>"QTYRUBRO" );
$tdatadashboard[".searchFields"]["q_ctrl_saldo_0000c_Chart_QTYRUBRO"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_ctrl_saldo_0000c Chart", "field"=>"PRESUPUESTO_OFICIAL" );
$tdatadashboard[".searchFields"]["q_ctrl_saldo_0000c_Chart_PRESUPUESTO_OFICIAL"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_ctrl_saldo_0000c Chart", "field"=>"PRESUPUESTO_SOLICITADO" );
$tdatadashboard[".searchFields"]["q_ctrl_saldo_0000c_Chart_PRESUPUESTO_SOLICITADO"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_ctrl_saldo_0000c Chart", "field"=>"RUBRO_ID_FK" );
$tdatadashboard[".searchFields"]["q_ctrl_saldo_0000c_Chart_RUBRO_ID_FK"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_ctrl_saldo_0001c", "field"=>"RUBRO_ID_FK" );
$tdatadashboard[".searchFields"]["q_ctrl_saldo_0001c_RUBRO_ID_FK"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_ctrl_saldo_0001c", "field"=>"UEJ" );
$tdatadashboard[".searchFields"]["q_ctrl_saldo_0001c_UEJ"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_ctrl_saldo_0001c", "field"=>"VIGENCIA" );
$tdatadashboard[".searchFields"]["q_ctrl_saldo_0001c_VIGENCIA"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_ctrl_saldo_0001c", "field"=>"QTYRUBRO" );
$tdatadashboard[".searchFields"]["q_ctrl_saldo_0001c_QTYRUBRO"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_ctrl_saldo_0001c", "field"=>"PRESUPUESTO_OFICIAL" );
$tdatadashboard[".searchFields"]["q_ctrl_saldo_0001c_PRESUPUESTO_OFICIAL"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_ctrl_saldo_0001c", "field"=>"PRESUPUESTO_SOLICITADO" );
$tdatadashboard[".searchFields"]["q_ctrl_saldo_0001c_PRESUPUESTO_SOLICITADO"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_ctrl_saldo_0001c", "field"=>"PRESUPUESTO_DISPONIBLE" );
$tdatadashboard[".searchFields"]["q_ctrl_saldo_0001c_PRESUPUESTO_DISPONIBLE"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_ctrl_saldo_0000f Chart", "field"=>"RUBRO_ID_FK" );
$tdatadashboard[".searchFields"]["q_ctrl_saldo_0000f_Chart_RUBRO_ID_FK"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_ctrl_saldo_0000f Chart", "field"=>"UEJ" );
$tdatadashboard[".searchFields"]["q_ctrl_saldo_0000f_Chart_UEJ"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_ctrl_saldo_0000f Chart", "field"=>"VIGENCIA" );
$tdatadashboard[".searchFields"]["q_ctrl_saldo_0000f_Chart_VIGENCIA"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_ctrl_saldo_0000f Chart", "field"=>"QTYRUBRO" );
$tdatadashboard[".searchFields"]["q_ctrl_saldo_0000f_Chart_QTYRUBRO"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_ctrl_saldo_0000f Chart", "field"=>"PRESUPUESTO_OFICIAL" );
$tdatadashboard[".searchFields"]["q_ctrl_saldo_0000f_Chart_PRESUPUESTO_OFICIAL"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_ctrl_saldo_0000f Chart", "field"=>"PRESUPUESTO_SOLICITADO" );
$tdatadashboard[".searchFields"]["q_ctrl_saldo_0000f_Chart_PRESUPUESTO_SOLICITADO"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_ctrl_saldo_0001f", "field"=>"RUBRO_ID_FK" );
$tdatadashboard[".searchFields"]["q_ctrl_saldo_0001f_RUBRO_ID_FK"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_ctrl_saldo_0001f", "field"=>"UEJ" );
$tdatadashboard[".searchFields"]["q_ctrl_saldo_0001f_UEJ"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_ctrl_saldo_0001f", "field"=>"VIGENCIA" );
$tdatadashboard[".searchFields"]["q_ctrl_saldo_0001f_VIGENCIA"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_ctrl_saldo_0001f", "field"=>"QTYRUBRO" );
$tdatadashboard[".searchFields"]["q_ctrl_saldo_0001f_QTYRUBRO"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_ctrl_saldo_0001f", "field"=>"PRESUPUESTO_OFICIAL" );
$tdatadashboard[".searchFields"]["q_ctrl_saldo_0001f_PRESUPUESTO_OFICIAL"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_ctrl_saldo_0001f", "field"=>"PRESUPUESTO_SOLICITADO" );
$tdatadashboard[".searchFields"]["q_ctrl_saldo_0001f_PRESUPUESTO_SOLICITADO"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_ctrl_saldo_0001f", "field"=>"PRESUPUESTO_DISPONIBLE" );
$tdatadashboard[".searchFields"]["q_ctrl_saldo_0001f_PRESUPUESTO_DISPONIBLE"] = $dashField;

// all search fields
$tdatadashboard[".allSearchFields"] = array();
$tdatadashboard[".allSearchFields"][] = "q_ctrl_saldo_0000c_Chart_UEJ";
$tdatadashboard[".allSearchFields"][] = "q_ctrl_saldo_0000c_Chart_VIGENCIA";
$tdatadashboard[".allSearchFields"][] = "q_ctrl_saldo_0000c_Chart_QTYRUBRO";
$tdatadashboard[".allSearchFields"][] = "q_ctrl_saldo_0000c_Chart_PRESUPUESTO_OFICIAL";
$tdatadashboard[".allSearchFields"][] = "q_ctrl_saldo_0000c_Chart_PRESUPUESTO_SOLICITADO";
$tdatadashboard[".allSearchFields"][] = "q_ctrl_saldo_0000c_Chart_RUBRO_ID_FK";
$tdatadashboard[".allSearchFields"][] = "q_ctrl_saldo_0001c_RUBRO_ID_FK";
$tdatadashboard[".allSearchFields"][] = "q_ctrl_saldo_0001c_UEJ";
$tdatadashboard[".allSearchFields"][] = "q_ctrl_saldo_0001c_VIGENCIA";
$tdatadashboard[".allSearchFields"][] = "q_ctrl_saldo_0001c_QTYRUBRO";
$tdatadashboard[".allSearchFields"][] = "q_ctrl_saldo_0001c_PRESUPUESTO_OFICIAL";
$tdatadashboard[".allSearchFields"][] = "q_ctrl_saldo_0001c_PRESUPUESTO_SOLICITADO";
$tdatadashboard[".allSearchFields"][] = "q_ctrl_saldo_0001c_PRESUPUESTO_DISPONIBLE";
$tdatadashboard[".allSearchFields"][] = "q_ctrl_saldo_0000f_Chart_RUBRO_ID_FK";
$tdatadashboard[".allSearchFields"][] = "q_ctrl_saldo_0000f_Chart_UEJ";
$tdatadashboard[".allSearchFields"][] = "q_ctrl_saldo_0000f_Chart_VIGENCIA";
$tdatadashboard[".allSearchFields"][] = "q_ctrl_saldo_0000f_Chart_QTYRUBRO";
$tdatadashboard[".allSearchFields"][] = "q_ctrl_saldo_0000f_Chart_PRESUPUESTO_OFICIAL";
$tdatadashboard[".allSearchFields"][] = "q_ctrl_saldo_0000f_Chart_PRESUPUESTO_SOLICITADO";
$tdatadashboard[".allSearchFields"][] = "q_ctrl_saldo_0001f_RUBRO_ID_FK";
$tdatadashboard[".allSearchFields"][] = "q_ctrl_saldo_0001f_UEJ";
$tdatadashboard[".allSearchFields"][] = "q_ctrl_saldo_0001f_VIGENCIA";
$tdatadashboard[".allSearchFields"][] = "q_ctrl_saldo_0001f_QTYRUBRO";
$tdatadashboard[".allSearchFields"][] = "q_ctrl_saldo_0001f_PRESUPUESTO_OFICIAL";
$tdatadashboard[".allSearchFields"][] = "q_ctrl_saldo_0001f_PRESUPUESTO_SOLICITADO";
$tdatadashboard[".allSearchFields"][] = "q_ctrl_saldo_0001f_PRESUPUESTO_DISPONIBLE";

// good like search fields
$tdatadashboard[".googleLikeFields"] = array();
$tdatadashboard[".googleLikeFields"][] = "q_ctrl_saldo_0000c_Chart_UEJ";
$tdatadashboard[".googleLikeFields"][] = "q_ctrl_saldo_0000c_Chart_VIGENCIA";
$tdatadashboard[".googleLikeFields"][] = "q_ctrl_saldo_0000c_Chart_QTYRUBRO";
$tdatadashboard[".googleLikeFields"][] = "q_ctrl_saldo_0000c_Chart_PRESUPUESTO_OFICIAL";
$tdatadashboard[".googleLikeFields"][] = "q_ctrl_saldo_0000c_Chart_PRESUPUESTO_SOLICITADO";
$tdatadashboard[".googleLikeFields"][] = "q_ctrl_saldo_0000c_Chart_RUBRO_ID_FK";
$tdatadashboard[".googleLikeFields"][] = "q_ctrl_saldo_0001c_RUBRO_ID_FK";
$tdatadashboard[".googleLikeFields"][] = "q_ctrl_saldo_0001c_UEJ";
$tdatadashboard[".googleLikeFields"][] = "q_ctrl_saldo_0001c_VIGENCIA";
$tdatadashboard[".googleLikeFields"][] = "q_ctrl_saldo_0001c_QTYRUBRO";
$tdatadashboard[".googleLikeFields"][] = "q_ctrl_saldo_0001c_PRESUPUESTO_OFICIAL";
$tdatadashboard[".googleLikeFields"][] = "q_ctrl_saldo_0001c_PRESUPUESTO_SOLICITADO";
$tdatadashboard[".googleLikeFields"][] = "q_ctrl_saldo_0001c_PRESUPUESTO_DISPONIBLE";
$tdatadashboard[".googleLikeFields"][] = "q_ctrl_saldo_0000f_Chart_RUBRO_ID_FK";
$tdatadashboard[".googleLikeFields"][] = "q_ctrl_saldo_0000f_Chart_UEJ";
$tdatadashboard[".googleLikeFields"][] = "q_ctrl_saldo_0000f_Chart_VIGENCIA";
$tdatadashboard[".googleLikeFields"][] = "q_ctrl_saldo_0000f_Chart_QTYRUBRO";
$tdatadashboard[".googleLikeFields"][] = "q_ctrl_saldo_0000f_Chart_PRESUPUESTO_OFICIAL";
$tdatadashboard[".googleLikeFields"][] = "q_ctrl_saldo_0000f_Chart_PRESUPUESTO_SOLICITADO";
$tdatadashboard[".googleLikeFields"][] = "q_ctrl_saldo_0001f_RUBRO_ID_FK";
$tdatadashboard[".googleLikeFields"][] = "q_ctrl_saldo_0001f_UEJ";
$tdatadashboard[".googleLikeFields"][] = "q_ctrl_saldo_0001f_VIGENCIA";
$tdatadashboard[".googleLikeFields"][] = "q_ctrl_saldo_0001f_QTYRUBRO";
$tdatadashboard[".googleLikeFields"][] = "q_ctrl_saldo_0001f_PRESUPUESTO_OFICIAL";
$tdatadashboard[".googleLikeFields"][] = "q_ctrl_saldo_0001f_PRESUPUESTO_SOLICITADO";
$tdatadashboard[".googleLikeFields"][] = "q_ctrl_saldo_0001f_PRESUPUESTO_DISPONIBLE";
*/

/*
$tdatadashboard[".dashElements"] = array();

	$dbelement = array( "elementName" => "q_ctrl_saldo_0000c_chart_chart", "table" => "q_ctrl_saldo_0000c Chart",
		 "pageName" => "","type" => 1);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;


	$tdatadashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "q_ctrl_saldo_0001c_list", "table" => "q_ctrl_saldo_0001c",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatadashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "q_ctrl_saldo_0000f_chart_chart", "table" => "q_ctrl_saldo_0000f Chart",
		 "pageName" => "","type" => 1);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;


	$tdatadashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "q_ctrl_saldo_0001f_list", "table" => "q_ctrl_saldo_0001f",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatadashboard[".dashElements"][] = $dbelement;
*/
$tdatadashboard[".shortTableName"] = "dashboard";
$tdatadashboard[".entityType"] = 4;




$tdatadashboard[".hasEvents"] = false;


$tdatadashboard[".tableType"] = "dashboard";


				
$tdatadashboard[".addPageEvents"] = false;

$tdatadashboard[".isUseAjaxSuggest"] = true;

$tables_data["Dashboard"]=&$tdatadashboard;
$field_labels["Dashboard"] = &$fieldLabelsdashboard;
$page_titles["Dashboard"] = &$pageTitlesdashboard;

?>