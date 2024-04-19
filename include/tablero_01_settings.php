<?php
require_once(getabspath("classes/cipherer.php"));



$tdatatablero_01 = array();
$tdatatablero_01[".ShortName"] = "tablero_01";

$tdatatablero_01[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\"]}" );
$tdatatablero_01[".originalPagesByType"] = $tdatatablero_01[".pagesByType"];
$tdatatablero_01[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"]}" ) );
$tdatatablero_01[".originalPages"] = $tdatatablero_01[".pages"];
$tdatatablero_01[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\"}" );
$tdatatablero_01[".originalDefaultPages"] = $tdatatablero_01[".defaultPages"];


//	field labels
$fieldLabelstablero_01 = array();
$pageTitlestablero_01 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstablero_01["Spanish"] = array();
	$fieldLabelstablero_01["Spanish"]["funcionario_id"] = "Id";
	$fieldLabelstablero_01["Spanish"]["funcionario_cedula"] = "Cédula";
	$fieldLabelstablero_01["Spanish"]["funcionario_nombre"] = "Nombre";
	$fieldLabelstablero_01["Spanish"]["funcionario_apellidos"] = "Apellidos";
	$fieldLabelstablero_01["Spanish"]["funcionario_lugarExpedicion"] = "Lugar Expedición";
	$fieldLabelstablero_01["Spanish"]["funcionario_fechaIngreso"] = "Fecha Ingreso";
	$fieldLabelstablero_01["Spanish"]["funcionario_ubicacionFisica"] = "Ubicacion Fisica";
	$fieldLabelstablero_01["Spanish"]["funcionario_idCargo"] = "Cargo";
	$fieldLabelstablero_01["Spanish"]["funcionario_idDependencia"] = "Dependencia";
	$fieldLabelstablero_01["Spanish"]["funcionario_sueldo"] = "Sueldo";
	$fieldLabelstablero_01["Spanish"]["funcionario_idEvaluador"] = "Jefe inmediato";
	$fieldLabelstablero_01["Spanish"]["funcionario_idContrato"] = "Id Contrato";
	$fieldLabelstablero_01["Spanish"]["funcionario_idNombramiento"] = "Vinculado como";
	$fieldLabelstablero_01["Spanish"]["funcionario_estado_funcionario"] = "Estado de acceso";
	$fieldLabelstablero_01["Spanish"]["funcionario_signpad"] = "Firma";
}

/*
//	search fields
$tdatatablero_01[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"funcionario", "field"=>"id" );
$tdatatablero_01[".searchFields"]["funcionario_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"funcionario", "field"=>"cedula" );
$tdatatablero_01[".searchFields"]["funcionario_cedula"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"funcionario", "field"=>"nombre" );
$tdatatablero_01[".searchFields"]["funcionario_nombre"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"funcionario", "field"=>"apellidos" );
$tdatatablero_01[".searchFields"]["funcionario_apellidos"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"funcionario", "field"=>"lugarExpedicion" );
$tdatatablero_01[".searchFields"]["funcionario_lugarExpedicion"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"funcionario", "field"=>"fechaIngreso" );
$tdatatablero_01[".searchFields"]["funcionario_fechaIngreso"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"funcionario", "field"=>"ubicacionFisica" );
$tdatatablero_01[".searchFields"]["funcionario_ubicacionFisica"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"funcionario", "field"=>"idCargo" );
$tdatatablero_01[".searchFields"]["funcionario_idCargo"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"funcionario", "field"=>"idDependencia" );
$tdatatablero_01[".searchFields"]["funcionario_idDependencia"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"funcionario", "field"=>"sueldo" );
$tdatatablero_01[".searchFields"]["funcionario_sueldo"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"funcionario", "field"=>"idEvaluador" );
$tdatatablero_01[".searchFields"]["funcionario_idEvaluador"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"funcionario", "field"=>"idContrato" );
$tdatatablero_01[".searchFields"]["funcionario_idContrato"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"funcionario", "field"=>"idNombramiento" );
$tdatatablero_01[".searchFields"]["funcionario_idNombramiento"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"funcionario", "field"=>"estado_funcionario" );
$tdatatablero_01[".searchFields"]["funcionario_estado_funcionario"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"funcionario", "field"=>"signpad" );
$tdatatablero_01[".searchFields"]["funcionario_signpad"] = $dashField;

// all search fields
$tdatatablero_01[".allSearchFields"] = array();
$tdatatablero_01[".allSearchFields"][] = "funcionario_id";
$tdatatablero_01[".allSearchFields"][] = "funcionario_cedula";
$tdatatablero_01[".allSearchFields"][] = "funcionario_nombre";
$tdatatablero_01[".allSearchFields"][] = "funcionario_apellidos";
$tdatatablero_01[".allSearchFields"][] = "funcionario_lugarExpedicion";
$tdatatablero_01[".allSearchFields"][] = "funcionario_fechaIngreso";
$tdatatablero_01[".allSearchFields"][] = "funcionario_ubicacionFisica";
$tdatatablero_01[".allSearchFields"][] = "funcionario_idCargo";
$tdatatablero_01[".allSearchFields"][] = "funcionario_idDependencia";
$tdatatablero_01[".allSearchFields"][] = "funcionario_sueldo";
$tdatatablero_01[".allSearchFields"][] = "funcionario_idEvaluador";
$tdatatablero_01[".allSearchFields"][] = "funcionario_idContrato";
$tdatatablero_01[".allSearchFields"][] = "funcionario_idNombramiento";
$tdatatablero_01[".allSearchFields"][] = "funcionario_estado_funcionario";
$tdatatablero_01[".allSearchFields"][] = "funcionario_signpad";

// good like search fields
$tdatatablero_01[".googleLikeFields"] = array();
$tdatatablero_01[".googleLikeFields"][] = "funcionario_id";
$tdatatablero_01[".googleLikeFields"][] = "funcionario_cedula";
$tdatatablero_01[".googleLikeFields"][] = "funcionario_nombre";
$tdatatablero_01[".googleLikeFields"][] = "funcionario_apellidos";
$tdatatablero_01[".googleLikeFields"][] = "funcionario_lugarExpedicion";
$tdatatablero_01[".googleLikeFields"][] = "funcionario_fechaIngreso";
$tdatatablero_01[".googleLikeFields"][] = "funcionario_ubicacionFisica";
$tdatatablero_01[".googleLikeFields"][] = "funcionario_idCargo";
$tdatatablero_01[".googleLikeFields"][] = "funcionario_idDependencia";
$tdatatablero_01[".googleLikeFields"][] = "funcionario_sueldo";
$tdatatablero_01[".googleLikeFields"][] = "funcionario_idEvaluador";
$tdatatablero_01[".googleLikeFields"][] = "funcionario_idContrato";
$tdatatablero_01[".googleLikeFields"][] = "funcionario_idNombramiento";
$tdatatablero_01[".googleLikeFields"][] = "funcionario_estado_funcionario";
$tdatatablero_01[".googleLikeFields"][] = "funcionario_signpad";
*/

/*
$tdatatablero_01[".dashElements"] = array();

	$dbelement = array( "elementName" => "funcionario_snippet", "table" => "funcionario",
		 "pageName" => "","type" => 7);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	$dbelement["snippetId"] = "Tablero_01_snippet";


	$tdatatablero_01[".dashElements"][] = $dbelement;
*/
$tdatatablero_01[".shortTableName"] = "tablero_01";
$tdatatablero_01[".entityType"] = 4;





include_once(getabspath("include/tablero_01_events.php"));
$tdatatablero_01[".hasEvents"] = true;


$tdatatablero_01[".tableType"] = "dashboard";


				
$tdatatablero_01[".addPageEvents"] = false;

$tdatatablero_01[".isUseAjaxSuggest"] = true;

$tables_data["Tablero_01"]=&$tdatatablero_01;
$field_labels["Tablero_01"] = &$fieldLabelstablero_01;
$page_titles["Tablero_01"] = &$pageTitlestablero_01;

?>